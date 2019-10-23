<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    /**
	 * function untuk pertama kali di jalankan saat class ini dijalankan
	 */
	public function __construct()
	{
		parent::__construct();
        
        // load model yang digunakan
        $this->load->model('kontak_model');
    }

    /** 
     * function untuk ambil data dari table database, parsing lewat javascript
     */
    public function data()
    {
        $results    = $this->kontak_model->get_data('all',null);
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = $list->namakntk.' - <strong>'.$list->emailkntk.'</strong>';
            if ($list->balaskntk == "") {
            	$row[] 	= '<center><p style="color: red;">Belum Dibalas</p></center>';
            } else {
            	$row[] 	= '<center><p style="color: blue;">Sudah Dibalas</p></center>';
            }
            $row[]  = '
                <center>
                    <a href="'.site_url('admin/view/kontak-balas/').$list->idkntk.'" class="btn btn-sm btn-success">
                        <i class="fas fa-edit fa-sm"></i>
                    </a>
                    <button onclick="deleteData('.$list->idkntk.')"  class="btn btn-sm btn-danger">
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
        $data = array(
            'namakntk'      => $this->input->post('txt_nama',TRUE),
            'emailkntk'     => $this->input->post('txt_email',TRUE),
            'pesankntk'     => $this->input->post('txt_pesan',TRUE),
            'balaskntk'     => $this->input->post('txt_balas',TRUE),
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'insert') {
            $this->kontak_model->action('insert',$data);
            redirect(site_url('welcome/view/kontak'));
        }
        elseif ($param == 'update') {
            $this->kontak_model->action('update',$data,$id);
            mail($this->input->post('txt_email'),'Pesan Dari Web KNPI Balikpapan',$this->input->post('txt_balas',TRUE));
            redirect(site_url('admin/view/kontak'));
        }
        elseif ($param == 'delete') {
            // delete dari controller ke model untuk dieksekusi
            $this->kontak_model->action('delete',array(),$id);
        }
    }

}

/* End of file Kontak.php */
