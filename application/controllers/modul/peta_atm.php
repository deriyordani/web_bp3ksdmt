<?php
class peta_atm extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('modul/model_peta_atm');
		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'modul_peta_atm';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());
	}

	function index(){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_title'] = $this->lang->line('text_title');
		$data['text_lokasi'] = $this->lang->line('text_lokasi');
		$data['text_alamat'] = $this->lang->line('text_alamat');
		$data['text_keterangan'] = $this->lang->line('text_keterangan');

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/peta_atm/peta_atm';

		$data['contents_sidebar'] = array('menu_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_peta', $data);	
	}

	function ambildata(){

		$json = '{"wilayah": {';
		$json .= '"petak":[ ';
		foreach($this->model_peta_atm->get_peta() as $val){
		    $json .= '{';
		    $json .= '"id":"'.$val->id_peta_atm.'",
		             "judul":"'.htmlspecialchars($val->nama_lokasi).'",
		             "deskripsi":"'.$val->keterangan.'",
		             "x":"'.$val->lat.'",
		             "y":"'.$val->long.'",
		             "lokasi":"'.$val->alamat_lokasi.'",
		             "jenis":"'.$val->jenis_atm.'"
		             },';

		}

		$json = substr($json,0,strlen($json)-1);
		$json .= ']';

		$json .= '}}';
		echo utf8_encode($json);

	}

}
?>