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

}

?>