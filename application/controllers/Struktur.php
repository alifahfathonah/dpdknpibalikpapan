<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

    /**
	 * function untuk pertama kali di jalankan saat class ini dijalankan
	 */
	public function __construct()
	{
		parent::__construct();

        // pengecekan apakah status session sedang login ?
        if($this->session->userdata('status') != "login"){
			redirect(site_url('auth'));
        }
        
        // load model yang digunakan
        $this->load->model('struktur_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->struktur_model->get_data('all',null);
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = $list->namaorg;
            if ($list->jnsorg == "PK") {
                $row[] = '<center>Pengurus Kecamatan</center>';
            }
            elseif ($list->jnsorg == "OKP") {
                $row[] = '<center>OKP</center>';
            }
            $row[]  = '
                <center>
                    <a href="'.site_url('admin/view/ubah-ketua/').$list->idstrktr.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i>&nbsp; Ketua
                    </a>
                    <a href="'.site_url('admin/view/ubah-sekretaris/').$list->idstrktr.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i>&nbsp; Sekretaris
                    </a>
                    <a href="'.site_url('admin/view/ubah-bendahara/').$list->idstrktr.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i>&nbsp; Bendahara
                    </a>
                    <a href="'.site_url('admin/view/ubah-susunan/').$list->idstrktr.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i>&nbsp; Susunan
                    </a>
                    <button onclick="deleteData('.$list->idstrktr.')"  class="btn btn-sm btn-danger">
                        <i class="fas fa-trash fa-sm"></i>
                    </button>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    /**
     * function untuk INSERT, UPDATE, DELETE data dari view ke dalam database 
     * melalui controller 
     */
    public function run($param, $id=null)
    {
        // masukkan data input post HTML ke dalam array jika inputan gambar tidak kosong
        $insert = array(
            'orgid'         => $this->input->post('txt_orgid',TRUE),
            'namaketua'     => NULL,
            'gbrketua'      => NULL,
            'namasekre'     => NULL,
            'gbrsekre'      => NULL,
            'namabenda'     => NULL,
            'gbrbenda'      => NULL,
            'susunstrktr'   => $this->input->post('txt_susun',TRUE),
        );


        // pengecekan aksi apa yang dipakai ?
        if ($param == 'insert') {
            // insert dari controller ke model untuk dieksekusi
            $this->struktur_model->action('insert',$insert);
            redirect(site_url('admin/view/struktur'));
        }
        elseif ($param == 'update') {
            // jika inputan post file gambar ketua tidak kosong
            if (!empty($_FILES["gbr_ketua"]["name"])) {
                // mengambil data terpilih dari database
                $row = $this->struktur_model->get_data('where',$id);

                // menghapus gambar dari data yang terpilih
                unlink("./asset/struktur/$row->gbrketua");
                
                // proses update
                $this->struktur_model->action('update',$data1,$id);
            }
        }
        elseif ($param == 'delete') {
            // mengambil data terpilih dari database
            $row = $this->struktur_model->get_data('where',$id);

            // menghapus gambar dari data yang terpilih
            unlink("./asset/struktur/$row->gbrketua");
            unlink("./asset/struktur/$row->gbrsekre");
            unlink("./asset/struktur/$row->gbrbenda");

            // delete dari controller ke model untuk dieksekusi
            $this->struktur_model->action('delete',array(),$id);
        }
    }

    /**
     * function membuat upload image yang hanya dapat diakses di dalam class ini
     * dan terdapat fitur untuk compress ukuran pixel gambar
     *  */ 
    public function upload_image($post)
	{
		$config['upload_path']          = './asset/struktur';
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		
	    if ($this->upload->do_upload($post)) {
			$gbr = $this->upload->data();
			
			// config compress image
			$config['image_library']='gd2';
			$config['source_image']='./asset/struktur/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 400;
			$config['height']= 400;
            $config['new_image']= './asset/struktur/'.$gbr['file_name'];
            
            // load library resize codeigniter
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

	        return $this->upload->data("file_name");
		}
    }

}

/* End of file Struktur.php */
