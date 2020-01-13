<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('home2');
	}
	public function login(){
		$this->load->view('login');
	}

	public function signup(){
		$this->load->view('signup2');
	}

	public function detail(){
		$this->load->model('content_model');
		$id_tentor = $this->uri->segment(3);
		$result = $this->content_model->get_tentor_by_id($id_tentor);
		if($result->num_rows() > 0){
			$i = $result->row_array();
			$data = array(
				'id_tentor'  => $i['id_tentor'],
				'nama_tentor'  => $i['nama_tentor'],
				'no_hp_tentor'     => $i['no_hp_tentor'],
				'harga_tentor'  => $i['harga_tentor'],
				'mapel_tentor'  => $i['mapel_tentor'],
				'pengalaman_tentor'  => $i['pengalaman_tentor'],
				'jumlah_pertemuan_tentor'  => $i['jumlah_pertemuan_tentor'],
				'foto_tentor'  => $i['foto_tentor'],
				'alamat_kota_tentor'  => $i['alamat_kota_tentor'],
				'tingkat_tentor'  => $i['tingkat_tentor']
			);
			$this->load->view('detail3',$data);
		}else{
			echo "Data Was Not Found";
		}
	}

	public function search(){
		$this->load->helper("url");
		$this->load->model('content_model');
		$tutor['cari'] = $this->content_model->get_tutor();
		$this->load->view('content2', $tutor);
	}

}
