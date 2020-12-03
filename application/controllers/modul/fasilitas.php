<?php 
class fasilitas extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->model('home/modul_fasilitas');
		$this->load->library('maluku_lib');

	}

	function index(){
		
		$data['gets_fasilitas'] = $this->modul_fasilitas->get_fasilitas($this->maluku_lib->language());
		$data['jml'] = $this->modul_fasilitas->get_fasilitas_row($this->maluku_lib->language())->jml;

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/home/modul_fasilitas',$data,TRUE);

	}

}
?>