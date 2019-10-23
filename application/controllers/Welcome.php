<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * function untuk pertama kali di jalankan saat class ini dijalankan
	 */
	public function __construct()
	{
		parent::__construct();
        
        // load model yang digunakan
        $this->load->model('berita_model');
        $this->load->model('galeri_model');
        $this->load->model('kata_model');
        $this->load->model('informasi_model');
        $this->load->model('pengurus_model');
		$this->load->model('organisasi_model');
		
    }

	public function index()
	{
		redirect(site_url('welcome/view/beranda'));	
	}

	public function view($look="beranda", $param=null)
	{
		if ($look == "beranda") {
			$parsing = array(
				'berita' 		=> $this->berita_model->get_data('limit',6), 
				'galeri' 		=> $this->galeri_model->get_data('limit',6), 
				'pengurus' 		=> $this->pengurus_model->get_data('all',null), 
				'kata' 			=> $this->kata_model->get_data('all',null), 
				'informasi' 	=> $this->informasi_model->get_data('first',null), 
				'pk' 			=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/welcome', $parsing);
		}
		elseif ($look == "susunan") {
			$parsing = array( 
				'pengurus' 	=> $this->pengurus_model->get_data('all',null), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 			=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/susunan',$parsing);
		}
		elseif ($look == "sejarah") {
			$parsing = array(  
				'informasi' => $this->informasi_model->get_data('first',null),
				'pk' 			=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/sejarah',$parsing);
		}
		elseif ($look == "organisasi") {
			$parsing = array(  
				'informasi' 	=> $this->informasi_model->get_data('first',null),
				'pk' 			=> $this->organisasi_model->get_data('where_jns','PK'), 
				'organisasi' 	=> $this->organisasi_model->get_data('where',$param), 
			);
			$this->load->view('front/organisasi',$parsing);
		}
		elseif ($look == "kontak") {
			$parsing = array( 
				'informasi' => $this->informasi_model->get_data('first',null),
				'pk' 			=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/kontak',$parsing);
		}
		elseif ($look == "okp") {
			// load library yang digunakan
			$this->load->library('pagination');

			// configuration
			$config['base_url'] = site_url('welcome/view/okp/');
			$config['total_rows'] = $this->organisasi_model->get_data('count');
			$config['per_page'] = 12;	

			// styling pagination
			$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
			$config['full_tag_close'] = '</ul></nav>';
			$config['first_link'] = 'Pertama';
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Terakhir';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = '&raquo';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';
			$config['attributes'] = array('class' => 'page-link');

			// inisiasi config pagination
			$this->pagination->initialize($config);

			// variabel untuk segment uri
			$start = $this->uri->segment(4);
			
			$parsing = array(
				'okp' 		=> $this->organisasi_model->get_pagination($config['per_page'],$start), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 		=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/okp', $parsing);
		}
		elseif ($look == "okp-cari") {
			$cari = $this->input->post('txt_cari',TRUE);
			$parsing = array(
				'okp' 		=> $this->organisasi_model->get_data('cari',$cari), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 		=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/okp_cari', $parsing);
		}
		elseif ($look == "okp-detail") {
			$parsing = array(
				'okp' 		=> $this->organisasi_model->get_data('where',$param), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 		=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/okp_detail', $parsing);
		}
		elseif ($look == "berita") {
			// load library yang digunakan
			$this->load->library('pagination');

			// configuration
			$config['base_url'] 	= site_url('welcome/view/berita/');
			$config['total_rows'] 	= $this->berita_model->get_data('count');
			$config['per_page'] 	= 12;	

			// styling pagination
			$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
			$config['full_tag_close'] = '</ul></nav>';
			$config['first_link'] = 'Pertama';
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Terakhir';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = '&raquo';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';
			$config['attributes'] = array('class' => 'page-link');

			// inisiasi config pagination
			$this->pagination->initialize($config);

			// variabel untuk segment uri
			$start = $this->uri->segment(4);

			$parsing = array(
				'berita' 	=> $this->berita_model->get_pagination($config['per_page'],$start), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 		=> $this->organisasi_model->get_data('where_jns','PK'), 
				'okp' 		=> $this->organisasi_model->get_data('where_jns','OKP'),
			);
			$this->load->view('front/berita', $parsing);
		}
		elseif ($look == "berita-cari") {
			$cari = $this->input->post('txt_cari',TRUE);
			$parsing = array(
				'berita' 	=> $this->berita_model->get_data('cari',$cari), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 		=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/berita_cari', $parsing);
		}
		elseif ($look == "berita-detail") {
			$parsing = array(
				'berita' 	=> $this->berita_model->get_data('slug',$param), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 		=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/berita_detail', $parsing);
		}
		elseif ($look == "galeri") {
			// load library yang digunakan
			$this->load->library('pagination');

			// configuration
			$config['base_url'] 	= site_url('welcome/view/galeri/');
			$config['total_rows'] 	= $this->galeri_model->get_data('count');
			$config['per_page'] 	= 12;	

			// styling pagination
			$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
			$config['full_tag_close'] = '</ul></nav>';
			$config['first_link'] = 'Pertama';
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Terakhir';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = '&raquo';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';
			$config['attributes'] = array('class' => 'page-link');

			// inisiasi config pagination
			$this->pagination->initialize($config);

			// variabel untuk segment uri
			$start = $this->uri->segment(4);

			$parsing = array(
				'galeri' 	=> $this->galeri_model->get_pagination($config['per_page'],$start), 
				'informasi' => $this->informasi_model->get_data('first',null), 
				'pk' 		=> $this->organisasi_model->get_data('where_jns','PK'), 
			);
			$this->load->view('front/galeri', $parsing);
		}
	}
}
