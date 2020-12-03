<?php 
class modul extends CI_model{	
	function list_modul(){
		$this->db->order_by('id_module', 'DESC');
		$q = $this->db->get('modul');
		return $q->result();	
	}

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM modul";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$sql = "SELECT * FROM modul ORDER BY id_modul DESC LIMIT $start, $limit";
		$query = $this->db->query($sql);
		return $query->result();
	}


}
?>