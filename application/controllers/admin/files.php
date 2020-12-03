<?php

class files extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/file');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		/*$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');*/
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');
		
	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'files');
		/*$order = 'id_file';
		$by = 'desc';*/
		
		$data['rows'] = $this->file->list_file();
		$data['content'] = 'admin/file/index';
		$this->load->view('layout/backend', $data);
	}

	function pagination(){
		if ($_GET['page']) {
			$page = $_GET['page'];

			$data['cur_page'] = $page;
			$cur_page = $page;
			$page -= 1;
			$per_page = 10;
			$data['per_page'] = $per_page;
			$start = $page * $per_page;
			$query = $this->file->data_pagination($start, $per_page);

			$count = $this->file->pagination();
			$data['no_of_paginations'] = ceil($count / $per_page);

			$data['rows'] = $query;
			$data['count'] = count($query);
			$this->load->view('admin/file/pagination', $data);
		}
	}

	function show(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'files');

		$id = $this->uri->segment(4);

		$where = array('id_file' => $id);
		$data['rows'] = $this->user->edit('file', $where);
		
		$data['content'] = 'admin/file/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'files');

		$data['content'] = 'admin/file/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'files');

		$id_file = $this->uri->segment(4);

		$where = array('id_file' => $id_file);
		$data['files'] = $this->user->edit('file', $where);
		$data['files_language'] = $this->user->edit('file_language', $where);
		
		$data['content'] = 'admin/file/edit';
		$this->load->view('layout/backend', $data);
	}

	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'files');
		
		//validation
		$this->form_validation->set_rules('id_kategori_sub', 'Id kategori sub', 'required');
		if (empty($_FILES['userfile']['name']))
		{
			$this->form_validation->set_rules('userfile', 'File', 'required');
		}
		$this->form_validation->set_rules('judul_file_id', 'judul file Id', 'trim|required|min_length[3]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/file/add';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			$config['remove_spaces']  = TRUE;
			$config['upload_path'] = './uploads/file/';
			$config['allowed_types'] = 'pdf|doc|docx|txt';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				redirect('admin/files/add/fail');
			} else {
				$datetime = strtotime(get_date_time());

				$file = $_FILES["userfile"]["name"];
				$data = array('upload_data' => $this->upload->data());
				$name = $this->input->post('name');
				
				$file = str_replace(' ', '_', $file);

				$data_files = array(
					'url_file' => "uploads/file/".$datetime."_".$file,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					'date_update' => $date,
					);
				$base = base_url();
				
				$url = $this->maluku_lib->url_dir();
				
				rename($url.'uploads/file/'.$file, $url.'uploads/file/'.$datetime."_".$file);

				$id_file = $this->user->insert_get('file', $data_files);

				$data_file_language_id = array(
					'judul_file' => $this->input->post('judul_file_id'),
					'id_file' => $id_file,
					'id_language' => 1,
					);

				$this->user->insert('file_language', $data_file_language_id);

			}
			redirect('admin/files/index');
		}
	}

	function update(){
		$date = get_date_time();

		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'files');

		//validation
		$this->form_validation->set_rules('id_kategori_sub', 'Id kategori sub', 'required');
		$this->form_validation->set_rules('judul_file_id', 'judul file Id', 'trim|required|min_length[3]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$id_file = $this->input->post('id_file');

			$where = array('id_file' => $id_file);
			$data['files'] = $this->user->edit('file', $where);
			$data['files_language'] = $this->user->edit('file_language', $where);

			$data['content'] = 'admin/file/form';
			$this->load->view('layout/backend', $data);
		}else{
			$config['remove_spaces']  = TRUE;
			$config['upload_path'] = './uploads/file/';
			$config['allowed_types'] = 'pdf|doc|docx';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload()) {
				$data = array('upload_data' => $this->upload->data());
				$file = $_FILES["userfile"]["name"];
				$name = $this->input->post('name');

			//delete
				$base = base_url();

				$url = $this->maluku_lib->url_dir();

				$path_to_file = $url.$this->input->post('file');

				unlink($path_to_file); 
				$file = str_replace(' ', '_', $file);

				$datetime = strtotime(get_date_time());
				$data_files = array(
					'url_file' => "uploads/file/".$datetime."_".$file,
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					);

				rename($url.'uploads/file/'.$file, $url.'uploads/file/'.$datetime."_".$file);

			}else{
				$data_files = array(
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					);
			}

			$where_files = array('id_file' => $this->input->post('id_file'));
			$this->user->update('file',$where_files, $data_files);

			$data_file_language_id = array(
				'judul_file' => $this->input->post('judul_file_id'),
				);

			$where_files_l_id = array('id_file_language' => $this->input->post('id_file_language_id'));

			$this->user->update('file_language', $where_files_l_id, $data_file_language_id);

			redirect('admin/files/index');
		}
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'files');

		$id_file = $this->uri->segment(4);

		$where = array('id_file' => $id_file);
		$rows = $this->user->edit('file', $where);

		foreach($rows as $row){
			$base = base_url();
			
			$file = $row->url_file;
			
			$file = str_replace(' ', '_', $file);

			$url = $this->maluku_lib->url_dir();

			$path_to_file = $url.$file;


			unlink($path_to_file); 
		}
		$where = array('id_file' => $id_file);
		$this->user->delete('file', $where);

		$where = array('id_file' => $id_file);
		$this->user->delete('file_language', $where);
		
		redirect('admin/files/index');
	}


}

?>