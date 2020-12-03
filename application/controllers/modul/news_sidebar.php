<?php 
class news_sidebar extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->model('modul/model_news');
		$this->load->library('maluku_lib');
	}

	function index(){

		$data['gets_news'] = $this->model_news->get_news_sidebar($this->maluku_lib->language(),5);

		$query = $this->db->query("SELECT sw.key,sw.id_setting_website, sw.id_kategori_sub, swl.judul_setting_website, swl.content_setting_website
								   FROM
								   setting s
								   JOIN
								   setting_website sw ON s.id_table=sw.id_kategori_sub
								   JOIN
								   setting_website_language swl ON sw.id_setting_website=swl.id_setting_website
								   WHERE
								   s.key='video' AND swl.id_language=".$this->maluku_lib->language()." AND swl.content_setting_website!=','");

		$data['videos'] = $query->result();

		$query2 = $this->db->query("SELECT sw.key,sw.id_setting_website, sw.id_kategori_sub, swl.judul_setting_website, swl.content_setting_website
								   FROM
								   setting s
								   JOIN
								   setting_website sw ON s.id_table=sw.id_kategori_sub
								   JOIN
								   setting_website_language swl ON sw.id_setting_website=swl.id_setting_website
								   WHERE
								   s.key='link_situs' AND swl.id_language=".$this->maluku_lib->language()." AND swl.content_setting_website!=','");

		$data['links'] = $query2->result();

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/modul/news_sidebar',$data,TRUE);

	}

}
?>