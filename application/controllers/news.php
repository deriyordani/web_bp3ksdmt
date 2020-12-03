<?php
class news extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('modul/model_news');
		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'news';

		$this->lang->load($flang, $this->maluku_lib->language_name());
	}

	function index(){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_title'] = $this->lang->line('text_title');

		$data['get_news'] = $this->model_news->get_news($this->maluku_lib->language(),4);

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/news/news';

		$data['contents_sidebar'] = array('kurs_sidebar', 'tools_sidebar', 'polling_sidebar');
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner', $data);	
	}

	function view($id){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_title'] = $this->lang->line('text_title');

		$data['get_news_views'] = $this->model_news->get_news_view($this->maluku_lib->language(),$id);

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/news/view';

		$data['contents_sidebar'] = array('kurs_sidebar', 'tools_sidebar', 'polling_sidebar');
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner', $data);	
	}

	function news_active(){
		$date = date('Y-m-d');
		$rows = $this->model_news->get_active($date);

		$status = array('status' => 1);
		foreach($rows as $row){
			$this->model_news->update_status($row->id_news, $status);
		}
	}

	function news_dactive(){
		$date = date('Y-m-d');
		$rows = $this->model_news->get_dactive($date);
		
		$status = array('status' => 0);
		foreach($rows as $row){
			$this->model_news->update_status($row->id_news, $status);
		}
	}

}
?>