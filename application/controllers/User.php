<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $this->load->model('user_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->user_model->get_data('all',null);
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = '<center>'.$list->namausr.'</center>';
            $row[]  = '<center>'.$list->userusr.'</center>';
            $row[]  = '
                <center>
                    <a href="'.site_url('admin/view/berita-ubah/').$list->idusr.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i>
                    </a>
                    <button onclick="deleteData('.$list->idusr.')"  class="btn btn-sm btn-danger">
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
        $data1 = array(
            'namausr'   => $this->input->post('txt_nama',TRUE),
            'slugusr'   => url_title($this->input->post('txt_nama'), 'dash', TRUE),
            'gbrusr'    => $this->upload_image(),
            'isiusr'    => $this->input->post('txt_isi',TRUE),
            'hitusr'    => 0,
        );

        // masukkan data input post HTML ke dalam array jika inputan gambar kosong
        $data2 = array(
            'namausr'   => $this->input->post('txt_nama',TRUE),
            'slugusr'   => url_title($this->input->post('txt_nama'), 'dash', TRUE),
            'isiusr'    => $this->input->post('txt_isi',TRUE),
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'insert') {
            // insert dari controller ke model untuk dieksekusi
            $this->user_model->action('insert',$data1);
            redirect(site_url('admin/view/berita'));
        }
        elseif ($param == 'update') {
            // jika inputan post file gambar tidak kosong
            if (!empty($_FILES["txt_gmbr"]["name"])) {
                // mengambil data terpilih dari database
                $row = $this->user_model->get_data('where',$id);

                // menghapus gambar dari data yang terpilih
                unlink("./asset/berita/$row->gbrusr");

                $this->user_model->action('update',$data1,$id);
            }
            // jika inputan post file gambar kosong
            else {
                $this->user_model->action('update',$data2,$id);
            }

            redirect(site_url('admin/view/berita'));
        }
        elseif ($param == 'delete') {
            // mengambil data terpilih dari database
            $row = $this->user_model->get_data('where',$id);

            // menghapus gambar dari data yang terpilih
            unlink("./asset/berita/$row->gbrusr");

            // delete dari controller ke model untuk dieksekusi
            $this->user_model->action('delete',array(),$id);
        }
    }

}

/* End of file User.php */
