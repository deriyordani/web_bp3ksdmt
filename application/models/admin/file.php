<?php 
class file extends CI_model{

	function list_file(){
		$query = "SELECT f.id_file, fl.judul_file,ksl.nama_kategori_sub FROM file f INNER JOIN file_language fl ON f.id_file=fl.id_file JOIN kategori_sub_language ksl ON f.id_kategori_sub=ksl.id_kategori_sub WHERE fl.id_language = 1 and ksl.id_language=1";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function get_file($db, $where){
		$this->db->where($where);
		$q = $this->db->get($db);

		return $q->result_array();
	}

	function list_news($db, $order, $by, $where){
		$this->db->where($where);
		$this->db->order_by($order, $by);
		$q = $this->db->get($db);

		return $q->result();
	}


	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM file";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$query = "SELECT f.id_file, fl.judul_file,ksl.nama_kategori_sub FROM file f INNER JOIN file_language fl ON f.id_file=fl.id_file JOIN kategori_sub_language ksl ON f.id_kategori_sub=ksl.id_kategori_sub WHERE fl.id_language = 1 and ksl.id_language=1 LIMIT $start, $limit";
		$sql = $this->db->query($query);
		return $sql->result();
	}
}

?>