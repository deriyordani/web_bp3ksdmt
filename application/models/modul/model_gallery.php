<?php 
	class model_gallery extends CI_model{
		
		function get_gallery($id_language, $limit, $offset){
			$q = $this->db->query("SELECT b.id_banner, b.id_kategori_sub, b.url_banner, bl.judul_banner, bl.content_banner, DATE_FORMAT(b.date_update,'%d %b %Y') as 'date_update' 
								   FROM
								   setting s
								   JOIN
								   banner b ON s.id_table=b.id_kategori_sub
								   JOIN
								   banner_language bl ON b.id_banner=bl.id_banner
								   WHERE
								   s.key='gallery' AND bl.id_language=$id_language
								   ORDER BY b.date_update DESC LIMIT $offset, $limit");

			return $q->result();
		}

		function get_gallery_rows($id_language){
			$q = $this->db->query("SELECT *
								   FROM
								   setting s
								   JOIN
								   banner b ON s.id_table=b.id_kategori_sub
								   JOIN
								   banner_language bl ON b.id_banner=bl.id_banner
								   WHERE s.key='gallery' AND bl.id_language=$id_language");

			return $q->num_rows();
		}

	}

?>