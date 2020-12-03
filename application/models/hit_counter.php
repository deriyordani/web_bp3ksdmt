<?php 
class hit_counter extends CI_model{

	function count($ip, $date){
		$date_n = date("Y-m-d"); 
		$q = "SELECT * FROM hits WHERE ip = '$ip' AND date_time like '%$date_n%'";
		$query = $this->db->query($q);

		if(count($query->result()) < 1){
			$data = array('ip' => $ip, 'date_time' => $date_n);
			$this->db->insert('hits', $data);	
		}
		return true;
	}

	function get(){
		$date_n = date("Y-m-d"); 
		$q = "SELECT ip FROM hits";
		$query = $this->db->query($q);
		return count($query->result());
	}

}

?>