<?php
class home extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');
		$this->load->model('hit_counter');

		//$flang = 'home';

		$this->lang->load('menu_top', $this->maluku_lib->language_name());

		$this->load->model('modul/model_menu');
		
	}

	function index(){

		//menu
		$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$ip = $_SERVER['REMOTE_ADDR'];

		$date = date("Y-m-d H:i:s");
		$this->hit_counter->count($ip, $date);
		
		$query = $this->db->query("SELECT sw.key,sw.id_setting_website, sw.id_kategori_sub, swl.judul_setting_website, swl.content_setting_website
								   FROM
								   setting s
								   JOIN
								   setting_website sw ON s.id_table=sw.id_kategori_sub
								   JOIN
								   setting_website_language swl ON sw.id_setting_website=swl.id_setting_website
								   WHERE
								   s.key='home' AND swl.id_language=".$this->maluku_lib->language()."");

		$data['home_sets'] = $query->result();

		$data['contents'] = array('slide_home','link_image','fasilitas');

		$data['contents_footer'] = array('news_home');

		foreach ($data['contents'] as $key => $val_contents) {
			include APPPATH."controllers/modul/$val_contents.php";

			${$val_contents} = new $val_contents();

			$data[$val_contents] = ${$val_contents}->index();
		}

		foreach ($data['contents_footer'] as $key => $val_contents_footer) {
			include APPPATH."controllers/modul/$val_contents_footer.php";

			${$val_contents_footer} = new $val_contents_footer();

			$data[$val_contents_footer] = ${$val_contents_footer}->index();
		}

		//menu
		$data['get_menus'] = $this->model_menu->get_menu($this->maluku_lib->language());

		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/home', $data);	
	}

	function set_language(){
		
		$array = array(
			'language' =>  $this->uri->segment(3),
			'language_name' =>  $this->uri->segment(4),
		);
		$this->session->set_userdata($array);

		$base = $this->uri->segment(5);

		if($this->uri->segment(6)) $base .= "/".$this->uri->segment(6);
		if($this->uri->segment(7)) $base .= "/".$this->uri->segment(7);
		if($this->uri->segment(8)) $base .= "/".$this->uri->segment(8);
		if($this->uri->segment(9)) $base .= "/".$this->uri->segment(9);
		if($this->uri->segment(10)) $base .= "/".$this->uri->segment(10);

		redirect($base);
	}


}
?>