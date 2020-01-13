<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view('login');
    }
    
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		session_start();

        $cek_pelajar=$this->login_model->auth_pelajar($username,$password);

        if($cek_pelajar->num_rows() > 0){
			$data=$cek_pelajar->row_array();
        	$this->session->set_userdata('masuk',TRUE);
			$this->session->set_userdata('ses_id',$data['id_pelajar']);
			$this->session->set_userdata('ses_nama',$data['username_pelajar']);
			$this->session->set_userdata('error',false);
		    redirect(base_url().'welcome');

		}else{  // jika username dan password tidak ditemukan atau salah
			$this->session->set_userdata('error',true);
			redirect(base_url().'login');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome');
	}
}

