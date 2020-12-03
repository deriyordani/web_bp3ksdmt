<?php 
	class model_page extends CI_model{
		
		function get_news($id_language, $limit){
			$q = $this->db->query("SELECT n.id_news, n.id_kategori_sub, n.url_gambar_news, nl.judul_news, nl.content_news, DATE_FORMAT(n.date_update,'%d %b %Y') as 'date_update' 
								   FROM
								   setting s
								   JOIN
								   news n ON s.id_table=n.id_kategori_sub
								   JOIN
								   news_language nl ON n.id_news=nl.id_news
								   WHERE
								   s.key='news_utama' AND nl.id_language=$id_language
								   ORDER BY n.date_update DESC LIMIT $limit");

			return $q->result();
		}

		function get_page_view($id_language, $id){
			$q = $this->db->query("SELECT * 
								   FROM
								   page p
								   JOIN
								   page_language pl ON p.id_page=pl.id_page
								   WHERE
								   pl.id_language=$id_language
								   AND p.id_page=$id");

			return $q->result();
		}

		function get_search($id_language, $keyword){
			$q = $this->db->query("SELECT * FROM (
								   SELECT p.id_page id_search,p.date_update date_search,pl.judul_page judul_search,'' img_search,'page' tipe_search
								   FROM
								   page p
								   JOIN
								   page_language pl ON p.id_page=pl.id_page
								   WHERE
								   pl.id_language=$id_language AND (pl.judul_page LIKE '%". $keyword ."%' OR pl.content_page LIKE '%". $keyword ."%')
								   UNION ALL
								   SELECT n.id_news id_search,n.date_update date_search,nl.judul_news judul_search,n.url_gambar_news img_search,'news' tipe_search
								   FROM
								   news n
								   JOIN
								   news_language nl ON n.id_news=nl.id_news
								   WHERE
								   nl.id_language=$id_language AND (nl.judul_news LIKE '%". $keyword ."%' OR nl.content_news LIKE '%". $keyword ."%')
								   ) a ORDER BY date_search DESC");

			return $q->result();
		}

	}

?>