<?php 
	class model_peta_atm extends CI_model{
		
		function get_peta(){
			$q = $this->db->query("SELECT * FROM peta_atm");

			return $q->result();
		}

	}

?>