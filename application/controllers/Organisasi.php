<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

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
        $this->load->model('organisasi_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->organisasi_model->get_data('all',null);
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
                    <a href="'.site_url('admin/view/organisasi-ketua/').$list->idorg.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i> &nbsp; Ketua
                    </a>
                    <a href="'.site_url('admin/view/organisasi-sekretaris/').$list->idorg.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i> &nbsp; Sekretaris
                    </a>
                    <a href="'.site_url('admin/view/organisasi-bendahara/').$list->idorg.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i> &nbsp; Bendahara
                    </a>
                    <a href="'.site_url('admin/view/organisasi-susunan/').$list->idorg.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i> &nbsp; Susunan
                    </a>
                    <button onclick="deleteData('.$list->idorg.')"  class="btn btn-sm btn-danger">
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
        // pengecekan aksi apa yang dipakai ?
        if ($param == 'insert') {
            $org = array(
                'namaorg'       => $this->input->post('txt_nama',TRUE),
                'jnsorg'        => $this->input->post('txt_jns',TRUE),
                'namaketua'     => NULL,
                'gbrketua'      => NULL,
                'namasekre'     => NULL,
                'gbrsekre'      => NULL,
                'namabenda'     => NULL,
                'gbrbenda'      => NULL,
                'susunorg'      => NULL
            );
            // insert dari controller ke model untuk dieksekusi
            $this->organisasi_model->action('insert',$org);
            redirect(site_url('admin/view/organisasi'));
        }
        elseif ($param == 'update_ketua') {
            // array inputan post html
            $ketua1 = array(
                'namaketua'     => $this->input->post('txt_ketua',TRUE),
                'gbrketua'      => $this->upload_image(),
            );

            $ketua2 = array(
                'namaketua'     => $this->input->post('txt_ketua',TRUE),
            );

            // jika inputan post file gambar ketua tidak kosong
            if (!empty($_FILES["txt_gbr"]["name"])) {
                $row = $this->organisasi_model->get_data('where',$id);
                unlink("./asset/organisasi/$row->gbrketua");
                $this->organisasi_model->action('update',$ketua1,$id);
            }
            else {
                // proses update
                $this->organisasi_model->action('update',$ketua2,$id);
            }
            
            redirect(site_url('admin/view/organisasi'));
        }
        elseif ($param == 'update_sekretaris') {
            // array inputan post html
            $sekre1 = array(
                'namasekre'     => $this->input->post('txt_sekre',TRUE),
                'gbrsekre'      => $this->upload_image(),
            );

            $sekre2 = array(
                'namasekre'     => $this->input->post('txt_sekre',TRUE),
            );

            // jika inputan post file gambar ketua tidak kosong
            if (!empty($_FILES["txt_gbr"]["name"])) {
                $row = $this->organisasi_model->get_data('where',$id);
                unlink("./asset/organisasi/$row->gbrsekre");
                $this->organisasi_model->action('update',$sekre1,$id);
            }
            else {
                // proses update
                $this->organisasi_model->action('update',$sekre2,$id);
            }
            
            redirect(site_url('admin/view/organisasi'));
        }
        elseif ($param == 'update_bendahara') {
            // array inputan post html
            $benda1 = array(
                'namabenda'     => $this->input->post('txt_benda',TRUE),
                'gbrbenda'      => $this->upload_image(),
            );

            $benda2 = array(
                'namabenda'     => $this->input->post('txt_benda',TRUE),
            );

            // jika inputan post file gambar ketua tidak kosong
            if (!empty($_FILES["txt_gbr"]["name"])) {
                $row = $this->organisasi_model->get_data('where',$id);
                unlink("./asset/organisasi/$row->gbrbenda");
                $this->organisasi_model->action('update',$benda1,$id);
            }
            else {
                // proses update
                $this->organisasi_model->action('update',$benda2,$id);
            }
            
            redirect(site_url('admin/view/organisasi'));
        }
        elseif ($param == 'update_susun') {
            $susun = array(
                'namaorg'       => $this->input->post('txt_nama',TRUE),
                'jnsorg'        => $this->input->post('txt_jns',TRUE),
                'susunorg'      => $this->input->post('txt_susun',TRUE),
            );
            $this->organisasi_model->action('update',$susun,$id);
            redirect(site_url('admin/view/organisasi'));
        }
        elseif ($param == 'delete') {
            // mengambil data terpilih dari database
            $row = $this->organisasi_model->get_data('where',$id);

            // menghapus gambar dari data yang terpilih
            unlink("./asset/organisasi/$row->gbrketua");
            unlink("./asset/organisasi/$row->gbrsekre");
            unlink("./asset/organisasi/$row->gbrbenda");

            // delete dari controller ke model untuk dieksekusi
            $this->organisasi_model->action('delete',array(),$id);
        }
    }

    /**
     * function membuat upload image yang hanya dapat diakses di dalam class ini
     * dan terdapat fitur untuk compress ukuran pixel gambar
     *  */ 
    public function upload_image()
	{
		$config['upload_path']          = './asset/organisasi';
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		
	    if ($this->upload->do_upload('txt_gbr')) {
			$gbr = $this->upload->data();
			
			// config compress image
			$config['image_library']='gd2';
			$config['source_image']='./asset/organisasi/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 400;
			$config['height']= 400;
            $config['new_image']= './asset/organisasi/'.$gbr['file_name'];
            
            // load library resize codeigniter
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

	        return $this->upload->data("file_name");
		}
    }

}

/* End of file Organisasi.php */
