<?php

class categories extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/category');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');

		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');

	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'category');

		$data['rows'] = $this->category->category_list();

		$data['content'] = 'admin/category/index';
		$this->load->view('layout/backend', $data);
	}

	function show(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'category');

		$id = $this->uri->segment(4);

		$where = array('id_kategori' => $id);
		$data['rows'] = $this->user->edit('category', $where);
		
		$data['content'] = 'admin/category/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'category');

		$data['content'] = 'admin/category/add';
		$this->load->view('layout/backend', $data);
	}

	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'category');

		//validation
		
		$this->form_validation->set_rules('nama_kategori_id', 'Nama kategori', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/category/add';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			$data_category = array(
				'date_update' =>$date,
				);

			$id_kategori = $this->user->insert_get('kategori', $data_category);
			$data_category_language_id = array(
				'nama_kategori' => $this->input->post('nama_kategori_id'),
				'id_language' => 1,
				'id_kategori' => $id_kategori,
				);

			$this->user->insert('kategori_language', $data_category_language_id);

			redirect('admin/categories/index');
		}
	}


	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'category');

		$id = $this->uri->segment(4);
		
		$where = array('id_kategori' => $id);
		$data['rows'] = $this->user->edit('kategori_language', $where);

		$data['content'] = 'admin/category/edit';
		$this->load->view('layout/backend', $data);
	}

	
	function update(){
		//validation
		
		$this->form_validation->set_rules('nama_kategori_id', 'Nama kategori', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('id_kategori');

			$where = array('id_kategori' => $id);
			$data['rows'] = $this->user->edit('kategori_language', $where);

			$data['content'] = 'admin/category/form';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			$data_category = array(
				'date_update' => $date,
				);

			$data_category_language_id = array(
				'nama_kategori' => $this->input->post('nama_kategori_id'),
				);

			$where_category = array('id_kategori' => $this->input->post('id_kategori'));
			$where_id = array('id_kategori_language' => $this->input->post('id_kategori_language_id'));

			$this->user->update('kategori', $where_category, $data_category);
			$this->user->update('kategori_language', $where_id, $data_category_language_id);

			redirect('admin/categories/index');
		}
	}

	function add_child(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'category');

		$data['parrent'] = $this->category->get_parrent();
		$data['content'] = 'admin/category/add_child';
		$this->load->view('layout/backend', $data);
	}

	function create_child(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'category');

		//validation
		$this->form_validation->set_rules('id_kategori', 'Parrent', 'trim|required');
		$this->form_validation->set_rules('nama_kategori_sub_id', 'Nama kategori sub', 'required');

		if ($this->form_validation->run() == FALSE)
		{	
			$data['parrent'] = $this->category->get_parrent();
			$data['content'] = 'admin/category/add_child';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			$data_category = array(
				'id_kategori' =>$this->input->post('id_kategori'),
				'date_update' =>$date,
				);

			$id_kategori_Sub = $this->user->insert_get('kategori_sub', $data_category);
			$data_category_language_id = array(
				'nama_kategori_sub' => $this->input->post('nama_kategori_sub_id'),
				'id_language' => 1,
				'id_kategori_Sub' => $id_kategori_Sub,
				);

			$this->user->insert('kategori_sub_language', $data_category_language_id);

			redirect('admin/categories/index');
		}
	}


	function edit_child(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'category');

		$id = $this->uri->segment(4);
		
		$data['parrent'] = $this->category->get_parrent();

		$where = array('id_kategori_sub' => $id);
		$data['parent_id'] = $this->user->edit('kategori_sub', $where);
		$where = array('id_kategori_sub' => $id);
		$data['rows'] = $this->user->edit('kategori_sub_language', $where);

		$data['content'] = 'admin/category/edit_child';
		$this->load->view('layout/backend', $data);
	}

	
	function update_child(){
		//validation
		
		$this->form_validation->set_rules('nama_kategori_sub_id', 'Nama kategori', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'Parrent', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['parrent'] = $this->category->get_parrent();

			$where = array('id_kategori_sub' => $id);
			$data['parent_id'] = $this->user->edit('kategori_sub', $where);
			$where = array('id_kategori_sub' => $id);
			$data['rows'] = $this->user->edit('kategori_sub_language', $where);

			$data['content'] = 'admin/category/form_child';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			$data_category = array(
				'date_update' =>$date,
				);

			$data_category_language_id = array(
				'nama_kategori_sub' => $this->input->post('nama_kategori_sub_id'),
				);
			
			$where_category = array('id_kategori_sub' => $this->input->post('id_kategori_sub'));

			$where_id = array('id_kategori_sub_language' => $this->input->post('id_kategori_sub_language_id'));
			$this->user->update('kategori_sub_language', $where_id, $data_category_language_id);
			$this->user->update('kategori_sub', $where_category, $data_category);
			redirect('admin/categories/index');
		}
	}


	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'category');

		$id = $this->uri->segment(4);

		$where = array('id_kategori' => $id);
		$this->user->delete('kategori', $where);
		$this->user->delete('kategori_sub', $where);
		
		redirect('admin/categories/index');
	}

	function delete_child(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'category');

		$id = $this->uri->segment(4);

		$where = array('id_kategori_sub' => $id);
		$this->user->delete('kategori_sub', $where);
		$this->user->delete('kategori_sub_language', $where);
		
		redirect('admin/categories/index');
	}


}

?>
