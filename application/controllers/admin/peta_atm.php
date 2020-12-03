<?php

class peta_atm extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/model_peta_atm');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');

		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');

	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'peta sebaran');

		$data['rows'] = $this->model_peta_atm->peta_list();

		$data['content'] = 'admin/peta_atm/index';
		$this->load->view('layout/backend_map', $data);
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
            $query = $this->model_peta_atm->data_pagination($start, $per_page);

            $count = $this->model_peta_atm->pagination();
            $data['no_of_paginations'] = ceil($count / $per_page);

            $data['rows'] = $query;
            $data['count'] = count($query);
            $this->load->view('admin/peta_atm/pagination', $data);
        }
	}


	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'peta sebaran');

		$parrent2 = $this->menu->get_all();
		$parrent1 = array(0 => 'parrent');
		$parrent = $parrent1+$parrent2;

		$data['parrent'] = $parrent;
		$data['content'] = 'admin/peta_atm/add';
		$this->load->view('layout/backend_map', $data);
		/*$this->load->view('admin/menu/add');*/
	}

	function edit(){
		//$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'peta_atm');

		$id = $this->uri->segment(4);

		$parrent2 = $this->menu->get_all();
		$parrent1 = array(0 => 'parrent');
		$parrent = $parrent1+$parrent2;
	
		$data['parrent'] = $parrent;
		$data['rows'] = $this->model_peta_atm->get_peta($id);

		$data['content'] = 'admin/peta_atm/edit';
		$this->load->view('layout/backend_map', $data);
	}

	function create(){

		$date = get_date_time();
		$data_peta = array(
			'date_update' => $date,
			'jenis_atm' => $this->input->post('jenis'),
			'nama_lokasi' => $this->input->post('lokasi'),
			'alamat_lokasi' =>$this->input->post('alamat'),
			'keterangan' =>$this->input->post('keterangan'),
			'lat' =>$this->input->post('lat'),
			'long' =>$this->input->post('long'),
			);

		$this->user->insert('peta_atm', $data_peta);

		redirect('admin/peta_atm/index');
	}

	function update(){

		$date = get_date_time();

		$data = array(
			'date_update' => $date,
			'jenis_atm' => $this->input->post('jenis'),
			'nama_lokasi' => $this->input->post('lokasi'),
			'alamat_lokasi' =>$this->input->post('alamat'),
			'keterangan' =>$this->input->post('keterangan'),
			'lat' =>$this->input->post('lat'),
			'long' =>$this->input->post('long'),
			);

		$where = array('id_peta_atm' => $this->input->post('id_peta_atm'));
	
		$this->user->update('peta_atm', $where, $data);
		redirect('admin/peta_atm/index');
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'peta sebaran');

		$id = $this->uri->segment(4);

		$where = array('id_peta_atm' => $id);
		$this->user->delete('peta_atm', $where);
		
		redirect('admin/peta_atm/index');
	}


}

?>
