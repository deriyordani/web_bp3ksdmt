<?php 
class notification extends CI_model{

	function update($data){
		$this->db->insert('notification', $data);
		return true;
	}
}

?>