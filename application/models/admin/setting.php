<?php 
class setting extends CI_model{

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM
									setting s
									INNER JOIN setting_website sw ON s.id_table=sw.id_kategori_sub
									INNER JOIN kategori_sub_language ksl ON sw.id_kategori_sub=ksl.id_kategori_sub
									GROUP BY sw.id_kategori_sub";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$query = $this->db->query("SELECT s.key key_set, s.*, sw.*, ksl.* FROM
									setting s
									INNER JOIN setting_website sw ON s.id_table=sw.id_kategori_sub
									INNER JOIN kategori_sub_language ksl ON sw.id_kategori_sub=ksl.id_kategori_sub
									GROUP BY sw.id_kategori_sub ORDER BY sw.id_kategori_sub ASC LIMIT $start, $limit");
		return $query->result();
	}

	function get_config($id) {
		$query = $this->db->query("SELECT * FROM
									setting_website sw
									INNER JOIN setting_website_language swl ON sw.id_setting_website=swl.id_setting_website
									WHERE sw.id_kategori_sub=$id");
		return $query->result();
	}

	function get_banner() {
		$query = $this->db->query("SELECT SUBSTRING_INDEX( url_banner,  '/', -1 ) img, judul_banner  FROM
									banner b
									INNER JOIN banner_language bl ON b.id_banner=bl.id_banner
									WHERE bl.id_language=1");
		return $query->result();
	}

	function get_page() {
		$query = $this->db->query("SELECT *  FROM
									page p
									INNER JOIN page_language pl ON p.id_page=pl.id_page
									WHERE pl.id_language=1");
		return $query->result();
	}

	function get_modul() {
		$query = $this->db->query("SELECT *  FROM modul");

		return $query->result();
	}

}