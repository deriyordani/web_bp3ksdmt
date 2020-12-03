<?php 
class tools_sidebar extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'modul_tools_sidebar';

		$this->lang->load($flang, $this->maluku_lib->language_name());
	}

	function index(){
		
		$data['text_title'] = $this->lang->line('text_title');

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/modul/tools_sidebar',$data,TRUE);

	}

}
?>