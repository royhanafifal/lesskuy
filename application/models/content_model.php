<?php
class Content_model extends CI_Model{
 
  function get_tentor(){
    $result = $this->db->get('tentor');
    return $result;
  }

  function get_tentor_by_id($id_tentor){
    $result = $this->db->get_where('tentor', array('id_tentor' => $id_tentor));
    return $result;
  }
  
  public function get_tutor(){
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from tentor where mapel_tentor like '%$cari%' or nama_tentor like '%$cari%' or alamat_kota_tentor like '%$cari%' or tingkat_tentor like '%$cari%'");
		return $data->result();
  }
  


}