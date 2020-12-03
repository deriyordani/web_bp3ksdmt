<?php
class page extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('modul/model_page');
		$this->load->model('user');
		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'page';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());

		$this->load->model('modul/model_menu');
	}

	function index(){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_title'] = $this->lang->line('text_title');

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/page/view';

		$data['contents_sidebar'] = array('menu_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_right', $data);	
	}

	function view($id){

		$data['text_home'] = $this->lang->line('text_home');

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		foreach ($this->model_page->get_page_view($this->maluku_lib->language(),$id) as $key => $val) {
			$data['text_title'] = $val->judul_page;
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


		$data['get_page_views'] = $this->model_page->get_page_view($this->maluku_lib->language(),$id);

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/page/view';

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
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_right', $data);	
	}


	function subscribe(){
			
		$cek = $this->db->query("SELECT count(*) jml FROM subscribe WHERE email='".$this->input->post('email_newsletter')."' AND status=1")->row();

		if($cek->jml > 0){
			$data['notif'] = 'Subscribe Gagal. Email Sudah Terdaftar.';
		} else {
			$date = get_date_time();

			$data_subscribe = array(
				'email' => $this->input->post('email_newsletter'),
				'date_updated' => $date,
				'status' => 1
			);

			$sp = $this->user->insert('subscribe', $data_subscribe);

			if($sp){

				//send email
				$this->load->library('email');

				$this->email->set_mailtype("html");
				$this->email->from('info@bp2ipaceh.sch.id', 'BP2IP Malahayati Aceh');
				$this->email->to($this->input->post('email_newsletter'));
					
				$this->email->subject('Subscribe Berita BP2IP Malahayati Aceh');

				$this->email->message('Subscribe Berhasil. Terima Kasih telah mengikuti kami. Nantikan berita-berita dari kami<br><br>Best regards,<br>BP2IP Malahayati Aceh');
					
				$this->email->send();
				
				//end send email

				$data['notif'] = 'Subscribe Berhasil. Terima Kasih telah mengikuti kami. Silahkan Cek Email.';
			} else {
				$data['notif'] = 'Subscribe Gagal. Mohon coba beberapa saat lagi.';
			}
		}

		$this->load->view('frontend/'. $this->maluku_lib->theme() .'/page/subscribe', $data);	
	}

	function unsubscribe($id=null){

		$where = array('id_subscribe' => $id);
		$data = array('status' => 0);

		$this->user->update('subscribe', $where, $data);

		redirect('');
	}

	function search(){

		$data['text_home'] = $this->lang->line('text_home');

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$data['text_title'] = 'Search';

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

		$keyword = $this->input->post('search');

		$data['get_search_views'] = $this->model_page->get_search($this->maluku_lib->language(),$keyword);

		$data['keyword'] = $keyword;

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/page/search';

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
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_right', $data);	
	}

}
?>