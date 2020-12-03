<?php 

class themes extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/theme');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');

	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'themes');

		$data['rows'] = $this->theme->theme_list();

		$data['content'] = 'admin/themes/index';
		$this->load->view('layout/backend', $data);
	}
	
	function active(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'themes');
		
		$id_theme = $this->uri->segment(4);
		
		$data = array(
			'status' => 1,
		);
		
		$where = array('id_theme' => $id_theme);

		$this->theme->update($where, $data);
		redirect('admin/themes/index');
	}
}

?>