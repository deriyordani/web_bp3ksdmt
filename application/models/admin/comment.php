<?php 
class comment extends CI_model{

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM comment WHERE status ='1'";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$query = "SELECT * FROM comment WHERE status ='1' ORDER BY id_comment DESC LIMIT $start, $limit";
		$sql = $this->db->query($query);
		return $sql->result();
	}
}

?>