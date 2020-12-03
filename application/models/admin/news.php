<?php 
class news extends CI_model{

/*	function page_list(){
		$query = "SELECT page.id_page, page_language.judul_page FROM page INNER JOIN page_language ON page.id_page=page.id_page WHERE id_language = 1";
		$sql = $this->db->query($query);
		return $sql->result();
	}*/

	function get_news($db, $where){
		$query = "SELECT n.status, n.id_news. ns.judul_page FROM news n INNER JOIN news_language nl ON n.id_news=nl.id_news WHERE id_language = 1";
		$sql = $this->db->query($query);
		return $q->result_array();
	}

	function list_news($db, $order_by, $where){
		$this->db->where($where);
		$this->db->order_by();
		$q = $this->db->get($db);

		return $q->result_array();
	}
}

?>