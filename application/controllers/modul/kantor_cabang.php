<?php 
class kantor_cabang extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->model('modul/model_kantor_cabang');
		$this->load->library('maluku_lib');

		$flang = 'kantor_cabang';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());
	}

	function index(){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_title'] = $this->lang->line('text_title');
		$data['text_desc'] = $this->lang->line('text_desc');

		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$data['get_offices'] = $this->model_kantor_cabang->get_office('kantor_cabang');

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/kantor_cabang/index';

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

}
?>