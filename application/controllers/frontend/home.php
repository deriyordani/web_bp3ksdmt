<?php 
class home extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('home/modul_slide_home');
		$this->load->model('home/modul_news_home');
	}

	function index(){

		$data['get_news_homes'] = $this->modul_news_home->get_news_home($this->language(),4);

		$data['get_slide_homes'] = $this->modul_slide_home->get_slide_home($this->language(),5);

		$data['contents'] = array($this->modul_slide_home(), $this->modul_news_home());
		
		$this->load->view('layout/'. $this->theme() .'/frontend', $data);	
	}

	function modul_slide_home(){
		return 'frontend/'. $this->theme() .'/home/modul_slide_home';
	}

	function modul_news_home(){
		return 'frontend/'. $this->theme() .'/home/modul_news_home';
	}

	function theme(){
		return "theme1";
	}

	function language(){
		return '1';
	}

}
?>