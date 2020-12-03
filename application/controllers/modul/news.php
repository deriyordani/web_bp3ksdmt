<?php
class news extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('modul/model_news');
		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');
		$this->load->library('pagination');

		$this->load->library('recaptcha');

		$flang = 'news';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());

		$this->load->model('modul/model_menu');
	}

	function index($key=NULL,$id=NULL){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_read'] = $this->lang->line('text_read');

		$k = $this->db->query("SELECT * FROM setting WHERE `key`='$key'")->row();

		if($key == 'diklat_pembentukan'){
			$data['text_title'] = 'Diklat Pembentukan ant/att IV';
		}
		else if($key == 'diklat_penjengjangan'){
			$data['text_title'] = 'Diklat Penjengjangan';
		}
		else{
			$data['text_title'] = $k->nama_setting;
		}
		
		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$data['base_url'] = base_url().'modul/news/index/'.$key;
		$data['total_rows'] = $this->model_news->get_news_rows($this->maluku_lib->language(), $key);
		$data['per_page'] = 5;

		//  $config['first_page'] = 'Awal';
 		// 	$config['last_page'] = 'Akhir';
 		// 	$config['next_page'] = '&laquo;';
 		// 	$config['prev_page'] = '&raquo;'; 

		// $this->pagination->initialize($config);

		// $data['halaman'] = $this->pagination->create_links();

		$data['total_page'] = ceil($data['total_rows']/$data['per_page']);

		if($id==null){
			$id=0;
			$data['offset'] = 0; 
		} else {
			$id=$id;
			$data['offset'] = $id * $data['per_page'];	
		}  

		$data['posisi'] = $id+1;

		$data['get_news'] = $this->model_news->get_news($this->maluku_lib->language(),$key,$data['per_page'],$data['offset']);

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/news/news';

		$data['contents_sidebar'] = array('news_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}

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

		//menu
		$data['get_menus'] = $this->model_menu->get_menu($this->maluku_lib->language());
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_right', $data);	
	}

	function cat($key=NULL){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_read'] = $this->lang->line('text_read');

		$k = $this->db->query("SELECT * FROM setting_website sw JOIN setting_website_language swl ON sw.id_setting_website=swl.id_setting_website WHERE sw.key='$key'")->row();

		$data['text_title'] = $k->judul_setting_website;
		
		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$data['get_categories'] = $this->model_news->get_kategori_news($key);

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/news/cat';

		$data['contents_sidebar'] = array('news_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}

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

		//menu
		$data['get_menus'] = $this->model_menu->get_menu($this->maluku_lib->language());
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_right', $data);	
	}

	function view($id){

		$data['text_home'] = $this->lang->line('text_home');
		
		$k = $this->db->query("SELECT * FROM news n JOIN setting s ON n.id_kategori_sub=s.id_table WHERE n.id_news='$id'")->row();

		$data['text_title'] = $k->nama_setting;

		$data['text_name'] = $this->lang->line('text_name');
		$data['text_email'] = $this->lang->line('text_email');
		$data['text_url'] = $this->lang->line('text_url');
		$data['text_comment'] = $this->lang->line('text_comment');
		$data['text_send'] = $this->lang->line('text_send');
		$data['text_form'] = $this->lang->line('text_form');

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$this->recaptcha->recaptcha_check_answer();

		if ($this->input->post() && $this->recaptcha->getIsValid()) {
			
			$date = get_date_time();

			$data_comment = array(
				'id_news' => $id,
				'date_update' => $date,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'url' =>$this->input->post('url'),
				'content' =>$this->input->post('comment'),
				'status' => 0
				);

			$id_menu = $this->db->insert('comment', $data_comment);

			$data['benar'] = "<div class='message success'>". $this->lang->line('text_success') ."</div><br>";
        } else if ($this->input->post() && !$this->recaptcha->getIsValid()) {
        	$data['benar'] = "<div class='message error'>". $this->lang->line('text_failed') ."</div><br>";
        } else {
        	$data['benar'] = "";
        }

        $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();

        $data['get_comments'] = $this->model_news->get_comment($id);
        $data['get_row_comment'] = $this->model_news->get_comment_row($id);

		$data['get_news_views'] = $this->model_news->get_news_view($this->maluku_lib->language(),$id);

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/news/view';

		$data['contents_sidebar'] = array('news_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}
		
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

		//menu
		$data['get_menus'] = $this->model_menu->get_menu($this->maluku_lib->language());

		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_right', $data);	
	}

}
?>