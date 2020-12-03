<?php 
class page extends CI_model{

/*	function page_list(){
		$query = "SELECT p.id_page, pl.judul_page FROM page p INNER JOIN page_language pl ON p.id_page=pl.id_page WHERE pl.id_language = 1";
		$sql = $this->db->query($query);
		return $sql->result();
	}
*/
	function get_page($db, $where){
		$this->db->where($where);
		$q = $this->db->get($db);

		return $q->result_array();
	}

	function list_news($order, $by){
		$query = "SELECT nl.id_news, nl.judul_news, n.start_date, n.end_date FROM news n INNER JOIN news_language nl ON n.id_news=nl.id_news WHERE nl.id_language = 1";
		$sql = $this->db->query($query);

		/*$this->db->where($where);
		$this->db->order_by($order, $by);
		$q = $this->db->get($db);*/

		return $sql->result();
	}

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM page";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$query = "SELECT p.id_page, pl.judul_page FROM page p INNER JOIN page_language pl ON p.id_page=pl.id_page WHERE pl.id_language = 1 ORDER BY id_page DESC LIMIT $start, $limit";
		$sql = $this->db->query($query);

		return $sql->result();
	}
}

?>