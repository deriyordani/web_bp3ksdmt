<?php

class banners extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/banner');
		$this->load->model('admin/page');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		/*$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');*/
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');
		
	}

	function index(){

		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'banner');
		
		$data['rows'] = $this->banner->list_banner_slide();

		$data['code'] = 'slide';

		$data['content'] = 'admin/banner/index';
		$this->load->view('layout/backend', $data);
	}

	function gallery($id=NULL){

		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'banner');
		
		$data['base_url'] = base_url().'admin/banners/gallery/';
		$data['per_page'] = 10;
		$data['total_rows'] = $this->banner->get_gallery_rows();

		$data['total_page'] = ceil($data['total_rows']/$data['per_page']);

		if($id==null){
			$id=0;
			$data['offset'] = 0; 
		} else {
			$id=$id;
			$data['offset'] = $id * $data['per_page'];	
		}  

		$data['posisi'] = $id+1;

		$data['rows'] = $this->banner->list_banner_gallery($data['per_page'],$data['offset']);

		$data['code'] = 'gallery';

		$data['content'] = 'admin/banner/index';
		$this->load->view('layout/backend', $data);
	}

	function arsip($id=NULL){

		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'banner');

		$data['base_url'] = base_url().'admin/banners/arsip/';
		$data['per_page'] = 15;
		$data['total_rows'] = $this->banner->get_arsip_rows();

		$data['total_page'] = ceil($data['total_rows']/$data['per_page']);

		if($id==null){
			$id=0;
			$data['offset'] = 0; 
		} else {
			$id=$id;
			$data['offset'] = $id * $data['per_page'];	
		}  

		$data['posisi'] = $id+1;
		
		$data['rows'] = $this->banner->list_banner_arsip($data['per_page'],$data['offset']);

		$data['code'] = 'arsip';

		$data['content'] = 'admin/banner/index';
		$this->load->view('layout/backend', $data);
	}

	function show(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'banner');

		$id = $this->uri->segment(4);

		$where = array('id_banner' => $id);
		$data['rows'] = $this->user->edit('banner', $where);
		
		$data['content'] = 'admin/banner/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'banner');

		$data['code'] = 'slide';

		$data['content'] = 'admin/banner/add';
		$this->load->view('layout/backend', $data);
	}

	function add_gallery(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'banner');

		$data['code'] = 'gallery';

		$data['content'] = 'admin/banner/add';
		$this->load->view('layout/backend', $data);
	}

	function add_arsip(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'banner');

		$data['code'] = 'arsip';

		$data['content'] = 'admin/banner/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'banner');

		$id_banner = $this->uri->segment(4);

		$where = array('id_banner' => $id_banner);
		$data['banners'] = $this->user->edit('banner', $where);
		$data['banners_language'] = $this->user->edit('banner_language', $where);

		$data['code'] = 'slide';
		
		$data['content'] = 'admin/banner/edit';
		$this->load->view('layout/backend', $data);
	}

	function edit_gallery(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'banner');

		$id_banner = $this->uri->segment(4);

		$where = array('id_banner' => $id_banner);
		$data['banners'] = $this->user->edit('banner', $where);
		$data['banners_language'] = $this->user->edit('banner_language', $where);

		$data['code'] = 'gallery';
		
		$data['content'] = 'admin/banner/edit';
		$this->load->view('layout/backend', $data);
	}

	function edit_arsip(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'banner');

		$id_banner = $this->uri->segment(4);

		$where = array('id_banner' => $id_banner);
		$data['banners'] = $this->user->edit('banner', $where);
		$data['banners_language'] = $this->user->edit('banner_language', $where);

		$data['code'] = 'arsip';
		
		$data['content'] = 'admin/banner/edit';
		$this->load->view('layout/backend', $data);
	}

	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'banner');

		//validation
		if (empty($_FILES['userfile']['name']))
		{
			$this->form_validation->set_rules('userfile', 'Image', 'strip_image_tags|required');
		}
		$this->form_validation->set_rules('judul_banner_id', 'Judul banner Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('content_banner_id', 'Content banner Id', 'trim|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$data['code'] = $this->uri->segment(4);

			$data['content'] = 'admin/banner/add';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();
			$config['remove_spaces']  = TRUE;
			$config['upload_path'] = './uploads/banner/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				redirect('admin/banner/add/fail');
			} else {
				$data = array('upload_data' => $this->upload->data());
				$file = $_FILES["userfile"]["name"];
				$name = $this->input->post('name');

				$file_new = str_replace(' ', '_', $file);
				$file_new = str_replace(',', '', $file_new);

				$data_banners = array(
					'url_banner' => "uploads/banner/".$file_new,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					'date_update' => $date,
					);

				$url = $this->maluku_lib->url_dir();

				rename($url.'uploads/banner/'.$file, $url.'uploads/banner/'.$file_new);

				$id_banner = $this->user->insert_get('banner', $data_banners);

				$data_banner_language_id = array(
					'judul_banner' => $this->input->post('judul_banner_id'),
					'content_banner' => $this->input->post('content_banner_id'),
					'id_banner' => $id_banner,
					'id_language' => 1,
					);

				$this->user->insert('banner_language', $data_banner_language_id);

			}

			$code = $this->uri->segment(4);
		
			if($code=='slide'){
				redirect('admin/banners/index');
			} else if($code=='gallery'){
				redirect('admin/banners/gallery');
			} else if($code=='arsip'){
				redirect('admin/banners/arsip');
			}
		}
	}

	function update(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'banner');
		
		//validation
		if (empty($_FILES['userfile']['name']) && $this->input->post('gambar') == '')
		{
			$this->form_validation->set_rules('userfile', 'Image', 'strip_image_tags|required');
		}
		$this->form_validation->set_rules('judul_banner_id', 'Judul banner Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('content_banner_id', 'Content banner Id', 'trim|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$id_banner = $this->input->post('id_banner');

			$where = array('id_banner' => $id_banner);
			$data['banners'] = $this->user->edit('banner', $where);
			$data['banners_language'] = $this->user->edit('banner_language', $where);

			$data['code'] = $this->uri->segment(4);

			$data['content'] = 'admin/banner/edit';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();
			$config['remove_spaces']  = TRUE;
			$config['upload_path'] = './uploads/banner/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload()) {
				$data = array('upload_data' => $this->upload->data());
				$file = $_FILES["userfile"]["name"];
				$name = $this->input->post('name');

				$file_new = str_replace(' ', '_', $file);
				$file_new = str_replace(',', '', $file_new);
				
			//delete
				$base = base_url();

				$url = $this->maluku_lib->url_dir();

				$path_to_file = $url.$this->input->post('gambar');

				unlink($path_to_file); 

				$data_banners = array(
					'url_banner' => "uploads/banner/".$file_new,
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					);

				rename($url.'uploads/banner/'.$file, $url.'uploads/banner/'.$file_new);

			}else{
				$data_banners = array(
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					);
			}

			$where_banners = array('id_banner' => $this->input->post('id_banner'));
			$this->user->update('banner',$where_banners, $data_banners);

			$data_banner_language_id = array(
				'judul_banner' => $this->input->post('judul_banner_id'),
				'content_banner' => $this->input->post('content_banner_id'),
				'id_language' => 1,
				);

			$where_banners_l_id = array('id_banner_language' => $this->input->post('id_banner_language_id'));

			$this->user->update('banner_language', $where_banners_l_id, $data_banner_language_id);

			$code = $this->uri->segment(4);
		
			if($code=='slide'){
				redirect('admin/banners/index');
			} else if($code=='gallery'){
				redirect('admin/banners/gallery');
			} else if($code=='arsip'){
				redirect('admin/banners/arsip');
			}
		}

	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'banner');

		$id_banner = $this->uri->segment(5);

		$where = array('id_banner' => $id_banner);
		$rows = $this->user->edit('banner', $where);

		foreach($rows as $row){
			$base = base_url();

			$url = $this->maluku_lib->url_dir();

			$path_to_file = $url.$row->url_banner;
	
			unlink($path_to_file); 
		}
		$where = array('id_banner' => $id_banner);
		$this->user->delete('banner', $where);

		$where = array('id_banner' => $id_banner);
		$this->user->delete('banner_language', $where);

		$code = $this->uri->segment(4);
		
		if($code=='slide'){
			redirect('admin/banners/index');
		} else if($code=='gallery'){
			redirect('admin/banners/gallery');
		} else if($code=='arsip'){
			redirect('admin/banners/arsip');
		}
		
	}


}

?>