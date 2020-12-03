<?php

class pages extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/page');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		/*$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');*/
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');

	}

	function index(){

		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'page');

		$data['content'] = 'admin/page/index';
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
            $query = $this->page->data_pagination($start, $per_page);

            $count = $this->page->pagination();
            $data['no_of_paginations'] = ceil($count / $per_page);

            $data['rows'] = $query;
            $data['count'] = count($query);
            $this->load->view('admin/page/pagination', $data);
        }
	}

	function show(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'page');

		$id = $this->uri->segment(4);

		$where = array('id_page' => $id);
		$data['rows'] = $this->user->edit('page', $where);
		
		$data['content'] = 'admin/page/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'page');

		$data['content'] = 'admin/page/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'page');

		$id = $this->uri->segment(4);

		$where = array('id_page' => $id);
		$data['pages'] = $this->user->edit('page_language', $where);
		$rows = $this->page->get_page('page_language', $where);
		
		$data['content'] = 'admin/page/edit';
		$this->load->view('layout/backend', $data);
	}

	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'page');

		//validation
		$this->form_validation->set_rules('judul_page_id', 'Judul news Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('content_page_id', 'Content news Id', 'trim|required|min_length[5]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/page/add';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();
			$data_page = array(
				'date_update' => $date,
				'id_kategori_sub' =>0,
				);

			$id_page = $this->user->insert_get('page', $data_page);

			$data_page_language_id = array(
				'judul_page' => $this->input->post('judul_page_id'),
				'content_page' => $this->input->post('content_page_id'),
				'id_page' => $id_page,
				'id_language' => 1,
				);

			$this->user->insert('page_language', $data_page_language_id);

			redirect('admin/pages/index');
		}
	}

	function update(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'page');

		$this->form_validation->set_rules('judul_page_id', 'Judul news Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('content_page_id', 'Content news Id', 'trim|required|min_length[5]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{	
			$id = $this->input->post('id_page');
			$where = array('id_page' => $id);
			$data['pages'] = $this->user->edit('page_language', $where);
			$rows = $this->page->get_page('page_language', $where);
			$data['content'] = 'admin/page/form';
			$this->load->view('layout/backend', $data);
		}else{
			$data_page_language_id = array(
				'judul_page' => $this->input->post('judul_page_id'),
				'content_page' => $this->input->post('content_page_id'),
				);

			$where_id = array('id_page_language' => $this->input->post('id_page_language_id'));

			$this->user->update('page_language', $where_id, $data_page_language_id);
			redirect('admin/pages/index');
		}
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'page');

		$id = $this->uri->segment(4);

		$where = array('id_page' => $id);
		$this->user->delete('page', $where);
		$this->user->delete('page_language', $where);
		
		redirect('admin/pages/index');
	}


}

?>