<?php 
class theme extends CI_model{

	function theme_list(){
		$q = $this->db->get('theme');
		return $q->result();
	}

	function update($where, $data){
		$data2 = array('status' => '0');
		$this->db->update('theme', $data2);
		$this->db->where($where);
		$this->db->update('theme', $data);
		return true;
	}
}

?>