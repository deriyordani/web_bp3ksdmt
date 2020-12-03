<?php 
	class model_news extends CI_model{
		
		function get_news($id_language, $key, $limit, $offset){

			if($key == 'diklat_pembentukan'){
				$qp = "s.key='nautika' OR s.key='teknika'";
			}
			else if($key == 'diklat_penjengjangan'){
				$qp = "s.key='rdjk' OR s.key='dpv'";
			}
			else{
				$qp = "s.key='$key'";
			}	

			$q = $this->db->query("SELECT n.id_news, n.id_kategori_sub, n.url_gambar_news, nl.judul_news, nl.content_news, DATE_FORMAT(n.date_update,'%d %b %Y') as 'date_update', u.username 
								   FROM
								   setting s
								   JOIN
								   news n ON s.id_table=n.id_kategori_sub
								   JOIN
								   news_language nl ON n.id_news=nl.id_news
								   JOIN
								   users u ON n.id_user=u.id
								   WHERE n.status = 1 AND
								   $qp AND nl.id_language=$id_language
								   ORDER BY n.date_update DESC LIMIT $offset, $limit");

			return $q->result();
		}

		function get_news_sidebar($id_language, $limit){
			$q = $this->db->query("SELECT n.id_news, n.id_kategori_sub, n.url_gambar_news, nl.judul_news, nl.content_news, DATE_FORMAT(n.date_update,'%d %b %Y') as 'date_update', u.username 
								   FROM
								   setting s
								   JOIN
								   news n ON s.id_table=n.id_kategori_sub
								   JOIN
								   news_language nl ON n.id_news=nl.id_news
								   JOIN
								   users u ON n.id_user=u.id
								   WHERE n.status = 1 AND
								   (s.key='news_utama' OR s.key='berita_luar_sekolah') AND nl.id_language=$id_language
								   ORDER BY n.date_update DESC LIMIT $limit");

			return $q->result();
		}

		function get_news_view($id_language, $id){
			$q = $this->db->query("SELECT n.id_news, n.id_kategori_sub, n.url_gambar_news, nl.judul_news, nl.content_news, DATE_FORMAT(n.date_update,'%d %b %Y') as 'date_update', u.username 
								   FROM
								   news n
								   JOIN
								   news_language nl ON n.id_news=nl.id_news
								   JOIN
								   users u ON n.id_user=u.id
								   WHERE n.status = 1 AND
								   nl.id_language=$id_language
								   AND n.id_news=$id");

			return $q->result();
		}

		function get_news_rows($id_language, $key){
			if($key == 'diklat_pembentukan'){
				$qp = "s.key='nautika' OR s.key='teknika'";
			}
			else if($key == 'diklat_penjengjangan'){
				$qp = "s.key='rdjk' OR s.key='dpv'";
			}
			else{
				$qp = "s.key='$key'";
			}
			
			$q = $this->db->query("SELECT *
								   FROM
								   setting s
								   JOIN
								   news n ON s.id_table=n.id_kategori_sub
								   JOIN
								   news_language nl ON n.id_news=nl.id_news
								   WHERE n.status = 1 AND
								   $qp AND nl.id_language=$id_language");

			return $q->num_rows();
		}

		function get_kategori_news($key){
			$q = $this->db->query("SELECT * 
								   FROM
								   setting_website sw
								   JOIN
								   setting_website_language swl ON sw.id_setting_website=swl.id_setting_website
								   WHERE sw.key='$key'");

			return $q->result();
		}

		function get_active($date){
			$this->db->where('start_date', $date);
			$q = $this->db->get('news');
			return $q->result();
		}

		function get_dactive($date){
			$this->db->where('end_date', $date);
			$q = $this->db->get('news');
			return $q->result();
		}

		function update_status($id_news, $data){
			$this->db->where('id_news', $id_news);
			$this->db->update('news', $data);
			return true;
		}

		function get_comment($id){
			$q = $this->db->query("SELECT *,DATE_FORMAT(date_update,'%d %b %Y') as 'date_comment'
								   FROM
								   comment
								   WHERE status = 1 AND
								   id_news=$id ORDER BY date_update DESC");

			return $q->result();
		}

		function get_comment_row($id){
			$q = $this->db->query("SELECT *
								   FROM
								   comment
								   WHERE status = 1 AND
								   id_news=$id");

			return $q->num_rows();
		}

	}

?>