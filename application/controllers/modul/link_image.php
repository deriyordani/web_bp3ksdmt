<?php 
class link_image extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->model('home/modul_link_image');
		$this->load->library('maluku_lib');

	}

	function index(){
		
		$data['get_link_images'] = $this->modul_link_image->get_link_image($this->maluku_lib->language());

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/home/modul_link_image',$data,TRUE);

	}

}
?>