<?php 
class kurs_sidebar extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'modul_kurs_sidebar';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());
	}

	function index(){

		$data['text_title'] = $this->lang->line('text_title');
		$data['text_beli'] = $this->lang->line('text_beli');
		$data['text_jual'] = $this->lang->line('text_jual');
		$data['text_tampil'] = $this->lang->line('text_tampil');

		$url = $this->fungsiCurl('http://www.bankmandiri.co.id/resource/kurs.asp');

		$pecah = explode('<table class="tbl-view" cellpadding="0" cellspacing="0" border="0" width="100%">', $url);
		$pecah2 = explode ('</table>',$pecah[1]);
		$pecah3 = explode ('<th>&nbsp;</th>', $pecah2[0]);
		$pecah4 = explode ('<td>&nbsp;&nbsp;</td>',$pecah3[2]);

		$all_hapus1 = str_replace('<td>&nbsp;&nbsp;</td>', '', $pecah3[2]);
		$all_hapus2 = str_replace('bgcolor="#eeeeee"', '', $all_hapus1);
		$all = str_replace('class="zebra"', '', $all_hapus2);

		$pecah5 = explode ('</td>',$all);

		$data['kurs'] = $pecah5;

		return $this->load->view('frontend/'. $this->maluku_lib->theme() .'/modul/kurs_sidebar',$data,TRUE);

	}

	function all(){

		$data['text_title'] = $this->lang->line('text_title');
		$data['text_beli'] = $this->lang->line('text_beli');
		$data['text_jual'] = $this->lang->line('text_jual');
		$data['text_tampil'] = $this->lang->line('text_tampil');
		$data['text_home'] = $this->lang->line('text_home');
		$data['text_simbol'] = $this->lang->line('text_simbol');

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');

		$url = $this->fungsiCurl('http://www.bankmandiri.co.id/resource/kurs.asp');

		$pecah = explode('<table class="tbl-view" cellpadding="0" cellspacing="0" border="0" width="100%">', $url);
		$pecah2 = explode ('</table>',$pecah[1]);
		$pecah3 = explode ('<th>&nbsp;</th>', $pecah2[0]);
		$pecah4 = explode ('<td>&nbsp;&nbsp;</td>',$pecah3[2]);

		$all_hapus1 = str_replace('<td>&nbsp;&nbsp;</td>', '', $pecah3[2]);
		$all_hapus2 = str_replace('bgcolor="#eeeeee"', '', $all_hapus1);
		$all = str_replace('class="zebra"', '', $all_hapus2);

		$pecah5 = explode ('</td>',$all);

		$data['kurs'] = $all;

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/modul/kurs_all';

		$data['contents_sidebar'] = array('tools_sidebar', 'polling_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner', $data);

	}

	function fungsiCurl($url){
	    $data = curl_init();
	    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($data, CURLOPT_URL, $url);
	    curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
	    $hasil = curl_exec($data);
	    curl_close($data);
	    
	    return $hasil;
	}

}
?>