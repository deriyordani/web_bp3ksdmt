<?php

class simulasi_products extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');

	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'simulasi produk');
		
		$order = "id_simulasi_produk";
		$by = "ASC";

		$data['rows'] = $this->user->index('simulasi_produk', $order, $by);

		$data['content'] = 'admin/simulasi_products/index';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'simulasi produk');

		$id = $this->uri->segment(4);

		$where = array('id_simulasi_produk' => $id);
		$data['rows'] = $this->user->get('simulasi_produk', $where);

		$data['content'] = 'admin/simulasi_products/edit';
		$this->load->view('layout/backend', $data);
	}

	function update(){

		$date = get_date_time();

		$data = array(
			'bunga' => $this->input->post('bunga'),
			);

		$where = array('id_simulasi_produk' => $this->input->post('id_simulasi_produk'));
	
		$this->user->update('simulasi_produk', $where, $data);
		redirect('admin/simulasi_products/index');
	}


}

?>
