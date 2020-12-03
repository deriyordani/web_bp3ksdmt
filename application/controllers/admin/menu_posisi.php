<?php

class menu_posisi extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->model('user');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		/*$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');*/
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');
		
	}

	function index(){
		
		$order = 'id_menu_posisi';
		$by = 'asc';
		$data['rows'] = $this->user->index('menu_posisi', $order, $by);

		$data['content'] = 'admin/menu_posisi/index';
		$this->load->view('layout/backend', $data);
	}

	function show(){
		$id = $this->uri->segment(4);

		$where = array('id_menu_posisi' => $id);
		$data['rows'] = $this->user->edit('menu_posisi', $where);
		
		$data['content'] = 'admin/menu_posisi/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		
		$data['content'] = 'admin/menu_posisi/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$id = $this->uri->segment(4);

		$where = array('id_menu_posisi' => $id);
		$data['rows'] = $this->user->edit('menu_posisi', $where);
		
		$data['content'] = 'admin/menu_posisi/edit';
		$this->load->view('layout/backend', $data);
	}

	function create(){
		$date = get_date_time();
		$data = array(
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'date' => $this->input->post($date)
			);
		$this->user->insert('menu_posisi', $data);
		redirect('admin/menu_posisi/index');
	}

	function update(){
		$date = get_date_time();

		$id = $this->input->post('id_menu_posisi');
		$where = array('id_menu_posisi' => $id);
		$data = array(
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'date' => $this->input->post($date)
			);
		
		$this->user->update('menu_posisi', $where, $data);
		redirect('admin/menu_posisi/index');
	}

	function delete(){
		$id = $this->uri->segment(4);

		$where = array('id_menu_posisi' => $id);
		$this->user->delete('menu_posisi', $where);
		
		redirect('admin/menu_posisi/index');
	}


}

?>