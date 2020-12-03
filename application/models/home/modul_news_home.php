<?php 
	class modul_news_home extends CI_model{
		
		function get_news_home($id_language, $limit){
			$q = $this->db->query("SELECT n.id_news, n.id_kategori_sub, n.url_gambar_news, nl.judul_news, nl.content_news, DATE_FORMAT(n.date_update,'%d %b %Y') as 'date_update' 
								   FROM
								   setting s
								   JOIN
								   news n ON s.id_table=n.id_kategori_sub
								   JOIN
								   news_language nl ON n.id_news=nl.id_news
								   WHERE
								   (s.key='news_utama' OR s.key='berita_luar_sekolah') AND nl.id_language=$id_language
								   ORDER BY n.date_update DESC LIMIT $limit");

			return $q->result();
		}
	}

?>