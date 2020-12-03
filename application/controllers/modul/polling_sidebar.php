<?php 
class polling_sidebar extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'modul_polling_sidebar';

		$this->lang->load($flang, $this->maluku_lib->language_name());
	}

	function index(){
		
		$data['text_title'] = $this->lang->line('text_title');

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/modul/polling_sidebar',$data,TRUE);

	}

}
?>