<?php 
class category extends CI_model{

	function category_list(){
		$query = "SELECT k.id_kategori, kl.nama_kategori, kl.id_language FROM kategori k INNER JOIN kategori_language kl ON k.id_kategori=kl.id_kategori WHERE kl.id_language = 0 OR kl.id_language = 1 ORDER BY k.id_kategori DESC";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function get_parrent(){
		$query = "SELECT k.id_kategori, kl.nama_kategori, kl.id_language FROM kategori k INNER JOIN kategori_language kl ON k.id_kategori=kl.id_kategori WHERE kl.id_language = 0 OR kl.id_language = 1 ORDER BY k.id_kategori DESC";
		$sql = $this->db->query($query);
		
		$var = array();
		foreach($sql->result() as $r){
			$var[$r->id_kategori] = $r->nama_kategori;
		}

		return $var;
	}

	function get_all(){
		$query = "SELECT m.id_kategori, ml.judul_kategori, ml.id_language FROM kategori m INNER JOIN kategori_language ml ON m.id_kategori=ml.id_kategori WHERE ml.id_language = 1 AND m.id_kategori_sub = 0 ";
		$q = $this->db->query($query);
		
		$var = array();
		foreach($q->result() as $r){
			$var[$r->id_kategori] = $r->judul_kategori;
		}
		/*return $q->result_array();*/
		return $var;
	}

	function get_child($id_kategori){
		$query = "SELECT ks.id_kategori_sub, ksl.nama_kategori_sub, ksl.id_language FROM kategori_sub ks INNER JOIN kategori_sub_language ksl ON ks.id_kategori_sub=ksl.id_kategori_sub WHERE ks.id_kategori = $id_kategori AND (ksl.id_language = 0 OR ksl.id_language = 1)";
		$q = $this->db->query($query);
		
		/*return $q->result_array();*/
		return $q->result();
	}

	function get_kategori($db, $where){
		$this->db->where($where);
		$q = $this->db->get($db);

		return $q->result_array();
	}

	function get_list($db){
		$this->db->where('id_language', '1');
		$q = $this->db->get($db);
		$id = 'id_page';
		$data = array();
		foreach($q->result() as $row){
			$data[$row->$id] = $row->judul_page;
		}
		return $data;
	}

	function get_list_modul($db){
		$q = $this->db->get($db);
		$id = 'id_'.$db;
		$data = array();
		foreach($q->result() as $row){
			$data[$row->$id] = $row->judul_modul;
		}
		return $data;
	}
}

?>