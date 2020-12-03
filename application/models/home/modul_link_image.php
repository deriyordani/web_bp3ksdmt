<?php 
	class modul_link_image extends CI_model{
		
		function get_link_image($id_language){
			$q = $this->db->query("SELECT sw.id_setting_website, sw.id_kategori_sub, swl.judul_setting_website, swl.content_setting_website
								   FROM
								   setting s
								   JOIN
								   setting_website sw ON s.id_table=sw.id_kategori_sub
								   JOIN
								   setting_website_language swl ON sw.id_setting_website=swl.id_setting_website
								   WHERE
								   s.key='link_image' AND swl.id_language=$id_language");

			return $q->result();
		}
	}

?>