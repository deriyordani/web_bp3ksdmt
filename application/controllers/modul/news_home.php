<?php
class news_home extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->model('home/modul_news_home');
		$this->load->library('maluku_lib');

		$flang = 'modul_news_home';

		$this->lang->load($flang, $this->maluku_lib->language_name());
	}

	function index(){

		$data['text_featured'] = $this->lang->line('text_featured');
		$data['text_news'] = $this->lang->line('text_news');
		$data['text_view_news'] = $this->lang->line('text_view_news');
		
		$data['get_news_homes'] = $this->modul_news_home->get_news_home($this->maluku_lib->language(),3);

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/home/modul_news_home',$data,TRUE);

	}

}
?>