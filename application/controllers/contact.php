<?php 
class contact extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$this->load->library('recaptcha');

		$flang = 'contact';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());

		$this->load->model('modul/model_menu');
	}

	function index(){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_title'] = $this->lang->line('text_title');

		$data['text_name'] = $this->lang->line('text_name');
		$data['text_email'] = $this->lang->line('text_email');
		$data['text_phone'] = $this->lang->line('text_phone');
		$data['text_message'] = $this->lang->line('text_message');
		$data['text_send'] = $this->lang->line('text_send');
		$data['text_form'] = $this->lang->line('text_form');

		//menu
		//$lang['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

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

		$this->recaptcha->recaptcha_check_answer();

		if ($this->input->post() && $this->recaptcha->getIsValid()) {
			
			$date = get_date_time();

			$data_contact = array(
				'date_update' => $date,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' =>$this->input->post('phone'),
				'message' =>$this->input->post('message')
				);

			$id_menu = $this->db->insert('contact', $data_contact);

			$data['benar'] = "<div class='message success'>". $this->lang->line('text_success') ."</div><br>";
        } else if ($this->input->post() && !$this->recaptcha->getIsValid()) {
        	$data['benar'] = "<div class='message error'>". $this->lang->line('text_failed') ."</div><br>";
        } else {
        	$data['benar'] = "";
        }

        $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/contact/contact';

		$data['contents_sidebar'] = array('news_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}

		//menu
		$data['get_menus'] = $this->model_menu->get_menu($this->maluku_lib->language());
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_peta', $data);	
	}

}
?>