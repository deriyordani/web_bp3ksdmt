<?php 
class menu_sidebar extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->model('modul/model_menu');
		$this->load->library('maluku_lib');
	}

	function index(){

		$data['get_menus'] = $this->model_menu->get_menu($this->maluku_lib->language());

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/modul/menu_sidebar',$data,TRUE);

	}

}
?>