<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->model('berita_model');
        $this->load->model('kata_model');
        $this->load->model('kontak_model');
        $this->load->model('pengurus_model');
        $this->load->model('informasi_model');
        $this->load->model('organisasi_model');
    }

    /**
     * function khusus untuk take over semua tampilan dari controller
     */
    public function view($look="home",$id=null)
    {
        if ($look == "home") {
            $parsing = array(
				'total_berita' 	=> $this->berita_model->get_data('count'), 
				'total_galeri' 	=> $this->galeri_model->get_data('count'), 
				'total_pk' 		=> $this->organisasi_model->get_data('count_pk'), 
				'total_okp' 	=> $this->organisasi_model->get_data('count_okp'), 
				'informasi' 	=> $this->informasi_model->get_data('first',null), 
				'pk' 			=> $this->organisasi_model->get_data('where_jns','PK'), 
				'okp' 			=> $this->organisasi_model->get_data('where_jns','OKP'), 
			);
            $this->load->view('back/home', $parsing);
        }
        elseif ($look == "profil") {
            $this->load->view('back/profil');
        }
        elseif ($look == "informasi") {
            $parsing = array(
                'informasi' => $this->informasi_model->get_data('first'), 
            );
            $this->load->view('back/informasi', $parsing);
        }
        elseif ($look == "kontak") {
            $this->load->view('back/kontak');
        }
        elseif ($look == "kontak-balas") {
            $parsing = array(
                'kontak' => $this->kontak_model->get_data('where',$id), 
            );
            $this->load->view('back/kontak_balas', $parsing);
        }
        // view khusus untuk galeri
        elseif ($look == "galeri") {
            $this->load->view('back/galeri');
        }
        elseif ($look == "galeri-tambah") {
            $this->load->view('back/galeri_tambah');
        }
        elseif ($look == "galeri-ubah") {
            $parsing = array(
                'galeri' => $this->galeri_model->get_data('where',$id), 
            );
            $this->load->view('back/galeri_ubah', $parsing);
        }
        // view khusus untuk berita
        elseif ($look == "berita") {
            $this->load->view('back/berita');
        }
        elseif ($look == "berita-tambah") {
            $this->load->view('back/berita_tambah');
        }
        elseif ($look == "berita-ubah") {
            $parsing = array(
                'berita' => $this->berita_model->get_data('where',$id), 
            );
            $this->load->view('back/berita_ubah', $parsing);
        }
        // view khusus untuk kata
        elseif ($look == "kata") {
            $this->load->view('back/kata');
        }
        elseif ($look == "kata-ubah") {
            $parsing = array(
                'kata' => $this->kata_model->get_data('where',$id), 
            );
            $this->load->view('back/kata_ubah', $parsing);
        }
        // view khusus untuk user
        elseif ($look == "user") {
            $this->load->view('back/user');
        }
        elseif ($look == "user-tambah") {
            $this->load->view('back/user_tambah');
        }
        elseif ($look == "user-ubah") {
            $parsing = array(
                'user' => $this->user_model->get_data('where',$id), 
            );
            $this->load->view('back/user_ubah', $parsing);
        }
        // view khusus untuk organisasi
        elseif ($look == "organisasi") {
            $this->load->view('back/organisasi');
        }
        elseif ($look == "organisasi-tambah") {
            $this->load->view('back/organisasi_tambah');
        }
        elseif ($look == "organisasi-ketua") {
            $parsing = array(
                'organisasi' => $this->organisasi_model->get_data('where',$id), 
            );
            $this->load->view('back/organisasi_ketua', $parsing);
        }
        elseif ($look == "organisasi-sekretaris") {
            $parsing = array(
                'organisasi' => $this->organisasi_model->get_data('where',$id), 
            );
            $this->load->view('back/organisasi_sekretaris', $parsing);
        }
        elseif ($look == "organisasi-bendahara") {
            $parsing = array(
                'organisasi' => $this->organisasi_model->get_data('where',$id), 
            );
            $this->load->view('back/organisasi_bendahara', $parsing);
        }
        elseif ($look == "organisasi-susunan") {
            $parsing = array(
                'organisasi' => $this->organisasi_model->get_data('where',$id), 
            );
            $this->load->view('back/organisasi_susunan', $parsing);
        }
        // view khusus untuk struktur
        elseif ($look == "struktur") {
            $this->load->view('back/struktur');
        }
        elseif ($look == "struktur-tambah") {
            $parsing = array(
                'organisasi' => $this->organisasi_model->get_data('all',null), 
            );
            $this->load->view('back/struktur_tambah', $parsing);
        }
        elseif ($look == "struktur-ketua") {
            $parsing = array(
                'organisasi' => $this->organisasi_model->get_data('all',null), 
                'struktur' => $this->struktur_model->get_data('where',$id), 
            );
            $this->load->view('back/struktur_ketua', $parsing);
        }
        // view khusus untuk pengurus
        elseif ($look == "pengurus") {
            $this->load->view('back/pengurus');
        }
        elseif ($look == "pengurus-ubah") {
            $parsing = array(
                'pengurus' => $this->pengurus_model->get_data('where',$id), 
            );
            $this->load->view('back/pengurus_ubah', $parsing);
        }
    }

}

/* End of file Admin.php */
