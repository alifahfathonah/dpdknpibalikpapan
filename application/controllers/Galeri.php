<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

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
        $this->load->model('galeri_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->galeri_model->get_data('all',null);
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = $list->namaglr;
            $row[]  = '<center>
				<img src="'.site_url('asset/galeri/').$list->gbrglr.'" width="80" height="50">
            </center>'
            ;
            $row[]  = '
                <center>
                    <a href="'.site_url('admin/view/galeri-ubah/').$list->idglr.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i>
                    </a>
                    <button onclick="deleteData('.$list->idglr.')"  class="btn btn-sm btn-danger">
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
        // masukkan data input post HTML ke dalam array
        $data1 = array(
            'namaglr'   => $this->input->post('txt_nama',TRUE),
            'gbrglr'    => $this->upload_image(),
        );

        $data2 = array(
            'namaglr'   => $this->input->post('txt_nama',TRUE),
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'insert') {
            // insert dari controller ke model untuk dieksekusi
            $this->galeri_model->action('insert',$data1);
            redirect(site_url('admin/view/galeri'));
        }
        elseif ($param == 'update') {
            // jika inputan post file gambar tidak kosong
            if (!empty($_FILES["txt_gmbr"]["name"])) {
                // mengambil data terpilih dari database
                $row = $this->galeri_model->get_data('where',$id);

                // menghapus gambar dari data yang terpilih
                unlink("./asset/galeri/$row->gbrglr");

                $this->galeri_model->action('update',$data1,$id);
            }
            // jika inputan post file gambar kosong
            else {
                $this->galeri_model->action('update',$data2,$id);
            }

            redirect(site_url('admin/view/galeri'));
        }
        elseif ($param == 'delete') {
            // mengambil data terpilih dari database
            $row = $this->galeri_model->get_data('where',$id);

            // menghapus gambar dari data yang terpilih
            unlink("./asset/galeri/$row->gbrglr");

            // delete dari controller ke model untuk dieksekusi
            $this->galeri_model->action('delete',array(),$id);
        }
    }

    /**
     * function membuat upload image yang hanya dapat diakses di dalam class ini
     * dan terdapat fitur untuk compress ukuran pixel gambar
     *  */ 
    public function upload_image()
	{
		$config['upload_path']          = './asset/galeri';
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		
	    if ($this->upload->do_upload('txt_gmbr')) {
			$gbr = $this->upload->data();
			
			// config compress image
			$config['image_library']='gd2';
			$config['source_image']='./asset/galeri/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 1280;
			$config['height']= 720;
            $config['new_image']= './asset/galeri/'.$gbr['file_name'];
            
            // load library resize codeigniter
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

	        return $this->upload->data("file_name");
		}
    }
    
   
}

/* End of file Galeri.php */
