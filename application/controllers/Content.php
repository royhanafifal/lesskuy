<?php
class Product extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('content_model');
  }

  function index(){
    $data['tentor'] = $this->content_model->get_tentor();
    $this->load->view('content',$data);
  }
}