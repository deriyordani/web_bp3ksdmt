<?php 
class model_kantor_cabang extends CI_model{

	function get_office($cat){
		$query = "SELECT * FROM peta_sebaran WHERE category='$cat' ORDER BY id_peta_sebaran DESC";
		$sql = $this->db->query($query);
		return $q->result_array();
	}
	
}

?>