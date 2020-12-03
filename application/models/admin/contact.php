<?php 
class contact extends CI_model{

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM contact";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$query = "SELECT id_contact, name, email, date_update FROM contact ORDER BY id_contact DESC LIMIT $start, $limit";
		$sql = $this->db->query($query);
		return $sql->result();
	}
}
?>