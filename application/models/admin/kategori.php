<?php 
class kategori extends CI_model{

	function kategori_list($id_language){
		$query = "SELECT ksl.id_kategori_sub, ksl.nama_kategori_sub FROM setting s JOIN kategori_sub ks 
		ON s.id_table = ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub 
		= ksl.id_kategori_sub";
		/*WHERE s.key =  'kategori_page' AND ksl.id_language =$id_language*/
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function kategori_news(){
		$query = "SELECT * FROM setting s JOIN kategori_sub ks ON s.id_table=ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub=ksl.id_kategori_sub WHERE s.key='kategori_news' AND ksl.id_language=0";
		$q = $this->db->query($query);
		return $q->result();
	}

	function kategori_banner(){
		$query = "SELECT * FROM setting s JOIN kategori_sub ks ON s.id_table=ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub=ksl.id_kategori_sub WHERE s.key='kategori_banner' AND ksl.id_language=0";
		$q = $this->db->query($query);
		return $q->result();
	}

	function kategori_file(){
		$query = "SELECT * FROM setting s JOIN kategori_sub ks ON s.id_table=ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub=ksl.id_kategori_sub WHERE s.key='kategori_file' AND ksl.id_language=1";
		$q = $this->db->query($query);
		return $q->result();
	}

	function kategori_modul(){
		$query = "SELECT * FROM setting s JOIN kategori_sub ks ON s.id_table=ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub=ksl.id_kategori_sub WHERE s.key='kategori_modul' AND ksl.id_language=0";
		$q = $this->db->query($query);
		return $q->result();
	}

	function kategori_modul_select($id_kategori_sub){
		$query = "SELECT nama_kategori_sub FROM kategori_sub_language WHERE id_kategori_sub = $id_kategori_sub AND id_language = 0 OR id_language = 1";
		$q = $this->db->query($query);
		return $q->result();
	}

	function kategori_menu(){
		$query = "SELECT * FROM setting s JOIN kategori_sub ks ON s.id_table=ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub=ksl.id_kategori_sub WHERE s.key='kategori_menu' AND ksl.id_language=0 AND ks.id_kategori_sub=9";
		$q = $this->db->query($query);
		return $q->result();
	}

	function kategori_menu_other(){
		$query = "SELECT * FROM setting s JOIN kategori_sub ks ON s.id_table=ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub=ksl.id_kategori_sub WHERE s.key='kategori_menu' AND ksl.id_language=0 AND ks.id_kategori_sub=38";
		$q = $this->db->query($query);
		return $q->result();
	}

	function kategori_sub_list(){
		$query = "SELECT id_kategori_sub, nama_kategori_sub FROM kategori_sub_language WHERE id_language = 1 OR id_language = 0 ORDER BY id_kategori_sub ASC";
		$q = $this->db->query($query);
		$data = array();
		foreach ($q->result() as $row ){
			$data[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $data;

	}

	function kategori_sub_select($id_kategori_sub){
		$query = "SELECT nama_kategori_sub FROM kategori_sub_language WHERE id_kategori_sub = $id_kategori_sub AND (id_language = 0 OR id_language = 1)";
		$q = $this->db->query($query);
		return $q->result();
	}


}

?>