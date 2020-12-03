<?php 
	class modul_slide_home extends CI_model{
		
		function get_slide_home($id_language, $limit){
			$q = $this->db->query("SELECT b.id_banner, b.id_kategori_sub, b.url_banner, bl.judul_banner, bl.content_banner
								   FROM
								   setting s
								   JOIN
								   banner b ON s.id_table=b.id_kategori_sub
								   JOIN
								   banner_language bl ON b.id_banner=bl.id_banner
								   WHERE
								   s.key='slide_home' AND bl.id_language=$id_language
								   LIMIT $limit");

			return $q->result();
		}
	}

?>