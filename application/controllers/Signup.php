<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('signup_model');
	}

	public function index(){
		$this->load->view('signup2');
    }

  function save(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $email = $this->input->post('email');
    $this->session->set_userdata('masuk',TRUE);
		$this->session->set_userdata('ses_nama',$username);
    $this->signup_model->add_pelajar($username,$password,$email);
    redirect('welcome');
  }
    
}
