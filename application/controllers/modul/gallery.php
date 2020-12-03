<?php
class gallery extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('modul/model_gallery');
		$this->load->helper('maluku_helper');
		$this->load->library('maluku_lib');

		$flang = 'gallery';

		$this->lang->load($flang, $this->maluku_lib->language_name());

		$this->lang->load('menu_top', $this->maluku_lib->language_name());

		$this->load->model('modul/model_menu');
	}

	function index($id=NULL){

		$data['text_home'] = $this->lang->line('text_home');
		$data['text_title'] = $this->lang->line('text_title');

		//menu
		//$data['text_home'] = $this->lang->line('text_home');
		$data['text_corporate'] = $this->lang->line('text_corporate');
		$data['text_contact'] = $this->lang->line('text_contact');
		$data['text_site'] = $this->lang->line('text_site');


		$data['base_url'] = base_url().'modul/gallery/';
		$data['per_page'] = 24;
		$data['total_rows'] = $this->model_gallery->get_gallery_rows($this->maluku_lib->language());

		$data['total_page'] = ceil($data['total_rows']/$data['per_page']);

		if($id==null){
			$id=0;
			$data['offset'] = 0; 
		} else {
			$id=$id;
			$data['offset'] = $id * $data['per_page'];	
		}  

		$data['posisi'] = $id+1;


		$data['gets_gallery'] = $this->model_gallery->get_gallery($this->maluku_lib->language(),$data['per_page'],$data['offset']);

		$query = $this->db->query("SELECT sw.key,sw.id_setting_website, sw.id_kategori_sub, swl.judul_setting_website, swl.content_setting_website
								   FROM
								   setting s
								   JOIN
								   setting_website sw ON s.id_table=sw.id_kategori_sub
								   JOIN
								   setting_website_language swl ON sw.id_setting_website=swl.id_setting_website
								   WHERE
								   s.key='home' AND swl.id_language=".$this->maluku_lib->language()."");

		$data['home_sets'] = $query->result();

		$data['content'] = 'frontend/'. $this->maluku_lib->theme() .'/gallery/gallery';

		$data['contents_sidebar'] = array('news_sidebar');

		foreach ($data['contents_sidebar'] as $key => $val_contents_sidebar) {
			include APPPATH."controllers/modul/$val_contents_sidebar.php";

			${$val_contents_sidebar} = new $val_contents_sidebar();

			$data[$val_contents_sidebar] = ${$val_contents_sidebar}->index();
		}

		//menu
		$data['get_menus'] = $this->model_menu->get_menu($this->maluku_lib->language());
		
		$data['head'] = 'layout/'. $this->maluku_lib->theme() .'/head';
		$data['menu'] = 'layout/'. $this->maluku_lib->theme() .'/menu';
		$data['footer'] = 'layout/'. $this->maluku_lib->theme() .'/footer';
		$this->load->view('layout/'. $this->maluku_lib->theme() .'/inner_right', $data);	
	}

	function upload_thumb_face(){
		include APPPATH."libraries/FaceDetector.php";

        $face_detect = new FaceDetector();
        $face_detect->faceDetect('uploads/news/swiss_gear_photo.jpg');
        $face_detect->saveCropFace('thumb_swiss_gear_photo.jpg');

	}

}
?>