<?php 
class menu extends CI_model{

	function menu_list(){
		$query = "SELECT m.id_menu, ml.judul_menu, m.sort_order
				  FROM menu m INNER JOIN menu_language ml ON m.id_menu=ml.id_menu
				  WHERE ml.id_language = 1 AND m.id_menu_sub = 0 AND m.id_kategori_sub=9 ORDER BY m.sort_order ASC";
		
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function menu_list_other(){
		$query = "SELECT m.id_menu, ml.judul_menu, m.sort_order
				  FROM menu m INNER JOIN menu_language ml ON m.id_menu=ml.id_menu
				  WHERE ml.id_language = 1 AND m.id_menu_sub = 0 AND m.id_kategori_sub=38 ORDER BY m.sort_order ASC";
		
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function get_all(){
		$query = "SELECT m.id_menu, ml.judul_menu
				  FROM menu m INNER JOIN menu_language ml ON m.id_menu=ml.id_menu
				  WHERE ml.id_language = 1 AND m.id_menu_sub = 0 AND m.id_kategori_sub=9
				  UNION ALL
				  SELECT m.id_menu, concat(ml2.judul_menu,' > ',ml.judul_menu) judul_menu
				  FROM `menu` m
				  INNER JOIN `menu_language` ml ON m.id_menu=ml.id_menu
				  INNER JOIN (SELECT * FROM `menu` WHERE id_menu_sub=0 AND id_kategori_sub=9) m2 ON m.id_menu_sub=m2.id_menu
				  INNER JOIN `menu_language` ml2 ON m2.id_menu=ml2.id_menu
				  WHERE m.id_menu_sub!=0 AND m.id_kategori_sub=9
				  ";


		$q = $this->db->query($query);
		
		$var = array();
		foreach($q->result() as $r){
			$var[$r->id_menu] = $r->judul_menu;
		}
		/*return $q->result_array();*/
		return $var;
	}

	function get_all_other(){
		$query = "SELECT m.id_menu, ml.judul_menu
				  FROM menu m INNER JOIN menu_language ml ON m.id_menu=ml.id_menu
				  WHERE ml.id_language = 1 AND m.id_menu_sub = 0 AND m.id_kategori_sub=38
				  UNION ALL
				  SELECT m.id_menu, concat(ml2.judul_menu,' > ',ml.judul_menu) judul_menu
				  FROM `menu` m
				  INNER JOIN `menu_language` ml ON m.id_menu=ml.id_menu
				  INNER JOIN (SELECT * FROM `menu` WHERE id_menu_sub=0 AND id_kategori_sub=38) m2 ON m.id_menu_sub=m2.id_menu
				  INNER JOIN `menu_language` ml2 ON m2.id_menu=ml2.id_menu
				  WHERE m.id_menu_sub!=0 AND m.id_kategori_sub=38
				  ";


		$q = $this->db->query($query);
		
		$var = array();
		foreach($q->result() as $r){
			$var[$r->id_menu] = $r->judul_menu;
		}
		/*return $q->result_array();*/
		return $var;
	}

	function get_child($id_menu){
		$query = "SELECT m.id_menu, ml.judul_menu, m.sort_order
				  FROM menu m INNER JOIN menu_language ml ON m.id_menu=ml.id_menu
				  WHERE ml.id_language = 1 AND m.id_menu_sub = $id_menu";
				  
		$q = $this->db->query($query);
		
		/*return $q->result_array();*/
		return $q->result();
	}

	function get_menu($db, $where){
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

	function get_menu_link($id){
		$this->db->where('id_menu_link', $id);
		$q = $this->db->get('menu_link');

		$data = "";
		foreach($q->result() as $row){
			$data = $row->link;
		}
		return $data;
	}

}

?>