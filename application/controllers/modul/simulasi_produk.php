<?php
class simulasi_produk extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('modul/model_news');
		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'news';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());
	}

	function index(){

		// $data['text_home'] = $this->lang->line('text_home');
		// $data['text_title'] = $this->lang->line('text_title');

		$data['text_home'] = "Beranda";
		$data['text_title'] = "Simulasi Produk";

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/simulasi/simulasi';

		$data['contents_sidebar'] = array('menu_sidebar');

		$get_bunga = $this->db->query("SELECT sp.bunga FROM setting s JOIN simulasi_produk sp ON s.id_table=sp.id_simulasi_produk WHERE s.key='simulasi_produk'");
		$get_all_bunga = $get_bunga->row();

		$data['bunga_db'] = $get_all_bunga->bunga;

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