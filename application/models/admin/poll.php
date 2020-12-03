<?php 
class poll extends CI_model{

	function poll_list(){
		$query = "SELECT p.id_topik_polls, pl.judul_topik_polls FROM topik_polls p INNER JOIN topik_polls_language pl ON p.id_topik_polls=pl.id_topik_polls WHERE pl.id_language = 1";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function count($id){
		$query = "SELECT COUNT(*) FROM pilihan_polls p INNER JOIN pilihan_polls_language pl ON p.id_pilihan_polls=pl.id_pilihan_polls WHERE pl.id_language = 1 AND p.id_topik_polls = $id GROUP BY pl.id_pilihan_polls_language";
		$sql = $this->db->query($query);
		return $sql->result();
	}
	function pi_edit_id($id){
		$query = "SELECT pl.id_pilihan_polls, pl.id_pilihan_polls_language, pl.judul_pilihan_polls FROM pilihan_polls p INNER JOIN pilihan_polls_language pl ON p.id_pilihan_polls=pl.id_pilihan_polls WHERE p.id_topik_polls = $id AND pl.id_language = 1";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function pi_edit_en($id){
		$query = "SELECT pl.id_pilihan_polls, pl.id_pilihan_polls_language, pl.judul_pilihan_polls FROM pilihan_polls p INNER JOIN pilihan_polls_language pl ON p.id_pilihan_polls=pl.id_pilihan_polls WHERE p.id_topik_polls = $id AND pl.id_language = 2";
		$sql = $this->db->query($query);
		return $sql->result();
	}


	function get_all(){
		$query = "SELECT p.id_topik_polls, pl.judul_poll FROM poll m INNER JOIN poll_language ml ON p.id_topik_polls=pl.id_topik_polls WHERE pl.id_language = 1 AND p.id_topik_polls_sub = 0 ";
		$q = $this->db->query($query);
		
		$var = array();
		foreach($q->result() as $r){
			$var[$r->id_topik_polls] = $r->judul_poll;
		}
		/*return $q->result_array();*/
		return $var;
	}

	function get_child($id_topik_polls){
		$query = "SELECT p.id_topik_polls, pl.judul_poll, p.sort_order FROM poll m INNER JOIN poll_language ml ON p.id_topik_polls=pl.id_topik_polls WHERE pl.id_language = 1 AND p.id_topik_polls_sub = $id_topik_polls";
		$q = $this->db->query($query);
		
		/*return $q->result_array();*/
		return $q->result();
	}

	function get_poll($db, $where){
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

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM topik_polls";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$query = "SELECT p.id_topik_polls, pl.judul_topik_polls FROM topik_polls p INNER JOIN topik_polls_language pl ON p.id_topik_polls=pl.id_topik_polls WHERE pl.id_language = 1 LIMIT $start, $limit";
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function id_pilihan_polls($id){
		$query = "SELECT id_pilihan_polls FROM pilihan_polls WHERE id_topik_polls = $id";
		$sql = $this->db->query($query);

		$id = '';
		foreach($sql->result() as $row){
			$id = $row->id_pilihan_polls;
		}
		return $id;
	}
}

?>