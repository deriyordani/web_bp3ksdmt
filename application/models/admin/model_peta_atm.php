<?php 
class model_peta_atm extends CI_model{

	function peta_list(){
		$query = "SELECT * FROM peta_atm ORDER BY id_peta_atm DESC";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function get_peta($id){
		$this->db->where('id_peta_atm', $id);
		$q = $this->db->get('peta_atm');
		return $q->result();
	}

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM peta_atm";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$query = "SELECT * FROM peta_atm ORDER BY id_peta_atm DESC LIMIT $start, $limit";
		$sql = $this->db->query($query);
		return $sql->result();
	}
	
}

?>