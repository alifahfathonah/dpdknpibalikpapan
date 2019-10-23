<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    // function construct untuk dijalankan pertama kali
    public function __construct()
    {
        parent::__construct();

		// load model yang digunakan
		$this->load->model("user_model");
        
    }

    // function untuk mengarahkan ke view login
	public function index()
	{
		$this->load->view('login');
    }
    
    // function untuk melakukan proses login
	public function login()
	{
		// inisiasi variabel array untuk inputan post HTML
		$where = array(
			'userusr'   => $this->input->post('txt_user', TRUE), 
			'passusr'   => md5($this->input->post('txt_pass', TRUE))
		);

		// variabel untuk konek ke database dan cek login nya
        $cek 	= $this->user_model->get_data("count_login",null,$where);
        
		// variabel untuk menampung data session dari database
		$data	= $this->user_model->get_data("where_login",null,$where);
		
		if ($cek == 1) {
			
			// pembuatan session dari data pada database dimasukkan dalam array
			$data_session = array(
				'idusr' 	=> $data->idusr,
				'namausr' 	=> $data->namausr,
				'userusr' 	=> $data->userusr,
				'status' 	=> "login"
			);
			
			// inisiasi session 
			$this->session->set_userdata($data_session);

            // redirect kehalaman admin
            redirect(site_url('admin/view/home'));
		} 
		else {
			// redirect kembali ke halaman login karena proses gagal
			redirect(site_url('auth'));
		}
	}

	// function logout dengan penghapusan session
	public function logout(){
		// penghapusan data session
		$this->session->sess_destroy();

		// redirect kembali ke halaman login
		redirect(site_url('welcome'));
	}	

	/**
	 * function untuk mengubah data profil admin yang login
	 */
	public function profil($id_user)
	{
		// data array jika input password post HTML kosong
		$data1 = array(
            'namausr' 	=> ucwords($this->input->post('txt_nama', TRUE)),  
            'userusr'   => $this->input->post('txt_user', TRUE), 
		);

		// data array jika input password post HTML tidak kosong
		$data2 = array(
            'namausr' 	=> ucwords($this->input->post('txt_nama', TRUE)),  
			'userusr'   => $this->input->post('txt_user', TRUE), 
			'passusr'   => md5($this->input->post('txt_pass', TRUE)), 
		);

		// jika inputan post password kosong maka eksekusi array data1 jika tidak array data2
		if (empty($this->input->post('txt_pass'))) {
			$this->db->update('user', $data1, array('idusr' => $id_user));
		} else {
			$this->db->update('user', $data2, array('idusr' => $id_user));
		}

		// mengambil data dari database ditampung dalam variable untuk diparsing
		$data = $this->user_model->get_data("where_login",null,$where);

		if ($data) {
			// pembuatan session dari data pada database dimasukkan dalam array
			$data_session = array(
				'idusr' 	=> $data->idusr,
				'namausr' 	=> $data->namausr,
				'userusr' 	=> $data->userusr,
				'status' 	=> "login"
			);
			
			// inisiasi session 
			$this->session->set_userdata($data_session);

			// ketika berhasil redirect ke halaman view home
			redirect(site_url('admin/view/home'));
		} 
		else {
			redirect(site_url('admin/view/profil'));
		}
	}

}

/* End of file Auth.php */
