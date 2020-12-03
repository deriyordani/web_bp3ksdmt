<?php 
class slide_home extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->model('home/modul_slide_home');
		$this->load->library('maluku_lib');

	}

	function index(){
		
		$data['get_slides_home'] = $this->modul_slide_home->get_slide_home($this->maluku_lib->language(),5);

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/home/modul_slide_home',$data,TRUE);

	}

}
?>