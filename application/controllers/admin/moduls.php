<?php

class moduls extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/modul');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		/*$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');*/
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');
		
	}

	function index(){
		$data['content'] = 'admin/modul/index';
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
			$query = $this->modul->data_pagination($start, $per_page);

			$count = $this->modul->pagination();
			$data['no_of_paginations'] = ceil($count / $per_page);

			$data['rows'] = $query;
			$data['count'] = count($query);
			$this->load->view('admin/modul/pagination', $data);
		}
	}


	function show(){
		$id = $this->uri->segment(4);

		$where = array('id_modul' => $id);
		$data['rows'] = $this->user->edit('modul', $where);
		
		$data['content'] = 'admin/modul/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$data['kategori_subs'] = $this->kategori->kategori_sub_list();
		$data['content'] = 'admin/modul/add';
		$this->load->view('layout/backend', $data);
	}

	function config(){
		$id_modul = $this->uri->segment(4);

		$where = array('id_modul' => $id_modul);
		$data['moduls'] = $this->user->edit('modul', $where);
		$data['kategori_subs'] = $this->kategori->kategori_sub_list();

		$data['content'] = 'admin/modul/edit';
		$this->load->view('layout/backend', $data);
	}

	function create(){

		//validation
		$this->form_validation->set_rules('judul_modul', 'Judul modul', 'required');
		$this->form_validation->set_rules('key_modul', 'Key modul', 'required');
		$this->form_validation->set_rules('id_kategori_sub', 'Kategori sub', 'required');
		$this->form_validation->set_rules('sort_order', 'Sort order', 'required|numeric');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/modul/add';
			$this->load->view('layout/backend', $data);
		}else{
			$data_moduls = array(
				'judul_modul' => $this->input->post('judul_modul'),
				'key_modul' => $this->input->post('key_modul'),
				'id_kategori_sub' => $this->input->post('id_kategori_sub'),
				'sort_order' => $this->input->post('sort_order'),
				'status' => $this->input->post('status'),
				);

			$this->user->insert('modul', $data_moduls);

			redirect('admin/moduls/index');
		}
	}

	function update(){

		//validation
		$this->form_validation->set_rules('judul_modul', 'Judul modul', 'required');
		$this->form_validation->set_rules('key_modul', 'Key modul', 'required');
		$this->form_validation->set_rules('id_kategori_sub', 'Kategori sub', 'required');
		$this->form_validation->set_rules('sort_order', 'Sort order', 'required|numeric');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$id_modul = $this->input->post('id_modul');

			$where = array('id_modul' => $id_modul);
			$data['moduls'] = $this->user->edit('modul', $where);

			$data['content'] = 'admin/modul/form';
			$this->load->view('layout/backend', $data);
		}else{
			$data_moduls = array(
				'judul_modul' => $this->input->post('judul_modul'),
				'key_modul' => $this->input->post('key_modul'),
				'id_kategori_sub' => $this->input->post('id_kategori_sub'),
				'sort_order' => $this->input->post('sort_order'),
				'status' => $this->input->post('status'),
				);

			$where_moduls = array('id_modul' => $this->input->post('id_modul'));
			$this->user->update('modul', $where_moduls, $data_moduls);

			redirect('admin/moduls/index');
		}
	}

	function delete(){
		$id_modul = $this->uri->segment(4);

		$where = array('id_modul' => $id_modul);
		$this->user->delete('modul', $where);

		redirect('admin/moduls/index');
	}


}

?>