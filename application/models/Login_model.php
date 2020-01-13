<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model{
	
	function auth_pelajar($username,$password){
		$query=$this->db->query("SELECT * FROM pelajar WHERE username_pelajar='$username' AND password_pelajar='$password' LIMIT 1");
		return $query;
	}

	function cek_data_pelajar(){
		$result = $this->db->get('pelajar');
    return $result;
	}

}