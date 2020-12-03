<?php 
class news_model extends CI_model{

/*	function page_list(){
		$query = "SELECT page.id_page, page_language.judul_page FROM page INNER JOIN page_language ON page.id_page=page.id_page WHERE id_language = 1";
		$sql = $this->db->query($query);
		return $sql->result();
	}*/
/*
	function get_news($db, $where){
		$this->db->where($where);
		$q = $this->db->get($db);

		return $q->result_array();
	}*/

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM news";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$sql = "SELECT nl.id_news, nl.judul_news, n.status, n.start_date, n.end_date, ksl.nama_kategori_sub
				FROM news n
				INNER JOIN news_language nl ON n.id_news=nl.id_news
				LEFT JOIN kategori_sub_language ksl ON n.id_kategori_sub=ksl.id_kategori_sub
				WHERE nl.id_language = 1 ORDER BY n.id_news DESC LIMIT $start, $limit";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function pagination2($id) {
		$sql = "SELECT COUNT(*) AS count FROM news WHERE id_kategori_sub=$id";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination2($start, $limit, $id) {
		$sql = "SELECT nl.id_news, nl.judul_news, n.status, n.start_date, n.end_date, ksl.nama_kategori_sub
				FROM news n
				INNER JOIN news_language nl ON n.id_news=nl.id_news
				LEFT JOIN kategori_sub_language ksl ON n.id_kategori_sub=ksl.id_kategori_sub
				WHERE nl.id_language = 1 AND n.id_kategori_sub=$id ORDER BY n.id_news DESC LIMIT $start, $limit";
		$query = $this->db->query($sql);
		return $query->result();
	}


	function list_news($db, $order_by, $where){
		$this->db->where($where);
		$this->db->order_by();
		$q = $this->db->get($db);

		return $q->result_array();
	}

	function update_status($id, $data){
		$this->db->where('id_news', $id);
		$this->db->update('news', $data);
	}

	function get_active($date){
		$this->db->where(array('start_date' => $date, 'status' => 0));
		$q = $this->db->get('news');
		return $q->result();
	}

	function get_dactive($date){
		$this->db->where(array('end_date'=> $date, 'status' => 1));
		$q = $this->db->get('news');
		return $q->result();
	}
}

?>