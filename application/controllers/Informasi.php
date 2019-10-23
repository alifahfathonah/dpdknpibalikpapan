<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

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
        $this->load->model('informasi_model');
    }

    /**
     * function untuk INSERT, UPDATE, DELETE data dari view ke dalam database 
     * melalui controller 
     */
    public function run($param, $id=null)
    {
        // masukkan data input post HTML ke dalam array jika inputan gambar tidak kosong
        $data = array(
            'tlpinf'        => $this->input->post('txt_tlp',TRUE),
            'emailinf'      => $this->input->post('txt_email',TRUE),
            'fbinf'         => $this->input->post('txt_fb',TRUE),
            'twitinf'       => $this->input->post('txt_twit',TRUE),
            'iginf'         => $this->input->post('txt_ig',TRUE),
            'almtinf'       => $this->input->post('txt_almt',TRUE),
            'susuninf'      => $this->input->post('txt_susun',TRUE),
            'sjrhinf'       => $this->input->post('txt_sjrh',TRUE),
        );

        // pengecekan aksi apa yang dipakai ?
        if ($param == 'insert') {
            // insert dari controller ke model untuk dieksekusi
            $this->informasi_model->action('insert',$data);
            redirect(site_url('admin/view/informasi'));
        }
        elseif ($param == 'update') {
            $this->informasi_model->action('update',$data,$id);
            redirect(site_url('admin/view/informasi'));
        }
    }


}

/* End of file Informasi.php */
