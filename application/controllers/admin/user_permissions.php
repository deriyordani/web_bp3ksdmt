<?php

class user_permissions extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		
		$this->lang->load('tank_auth');
	
	}

	function index(){

		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'user permission');
		
		$order = 'id_user_permission';
		$by = 'asc';
		//$data['rows'] = $this->user->index('user_permission', $order, $by);

		$data['content'] = 'admin/user_permissions/index';
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
            $query = $this->permission->data_pagination($start, $per_page);

            $count = $this->permission->pagination();
            $data['no_of_paginations'] = ceil($count / $per_page);

            $data['rows'] = $query;
            $data['count'] = count($query);
            $this->load->view('admin/user_permissions/pagination', $data);
        }
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'user permission');

		$data['content'] = 'admin/user_permissions/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'user permission');

		$id = $this->uri->segment(4);

		$where = array('id_user_permission' => $id);
		$data['rows'] = $this->user->edit('user_permission', $where);
		
		$data['content'] = 'admin/user_permissions/edit';
		$this->load->view('layout/backend', $data);
	}

	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'user permission');

		//validation
		$this->form_validation->set_rules('page_user_permission', 'Page user permission', 'required|is_unique[user_permission.page_user_permission]');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/user_permissions/add';
			$this->load->view('layout/backend', $data);
		}else{
			$data = array('page_user_permission' => $this->input->post('page_user_permission'));
			$this->user->insert('user_permission', $data);
			redirect('admin/user_permissions/index');
		}

	}

	function update(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'user permission');

		//validation
		$this->form_validation->set_rules('page_user_permission', 'Page user permission', 'required');

		if ($this->form_validation->run() == FALSE)
		{	
			$id = $this->input->post('id_user_permission');
			$where = array('id_user_permission' => $id);
			$data['rows'] = $this->user->edit('user_permission', $where);

			$data['content'] = 'admin/user_permissions/edit';
			$this->load->view('layout/backend', $data);

		}else{
			$id = $this->input->post('id_user_permission');
			$where = array('id_user_permission' => $id);
			$data = array(
				'page_user_permission' => $this->input->post('page_user_permission'),
				);

			$this->user->update('user_permission', $where, $data);
			redirect('admin/user_permissions/index');
		}
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'user permission');

		$id = $this->uri->segment(4);

		$where = array('id_user_permission' => $id);
		$this->user->delete('user_permission', $where);
		
		redirect('admin/user_permissions/index');
	}


}

?>