<?php

class settings extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/setting');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		
		$this->lang->load('tank_auth');
	
	}

	function index(){

		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'setting');
		
		$data['rows'] = $this->setting->data_pagination(0, 100);		

		$data['content'] = 'admin/settings/index';
		$this->load->view('layout/backend', $data);
	}

	function config(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'setting');

		$key = $this->uri->segment(4);
		$id = $this->uri->segment(5);

		$data['list_pages'] = $this->setting->get_page();
		$data['list_banners'] = $this->setting->get_banner();
		$data['list_moduls'] = $this->setting->get_modul();
		$data['rows'] = $this->setting->get_config($id);
		
		$data['content'] = 'admin/settings/'.$key;
		$this->load->view('layout/backend', $data);
	}

	function update(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'setting');
	
			$id = $this->input->post('id_kategori_sub');

			$gets_set = $this->setting->get_config($id);

			foreach ($gets_set as $key => $get_set) {
				$where = array('id_setting_website_language' => $get_set->id_setting_website_language);
				$data = array(
					'content_setting_website' => $this->input->post($get_set->id_setting_website_language)
					);

				$this->user->update('setting_website_language', $where, $data);
			}

			redirect('admin/settings/index');
	}

	function update2(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'setting');
	
			$id = $this->input->post('id_kategori_sub');

			$gets_set = $this->setting->get_config($id);

			foreach ($gets_set as $key => $get_set) {
				$where = array('id_setting_website_language' => $get_set->id_setting_website_language);
				$post = $this->input->post($get_set->id_setting_website_language);
				$bundle = $post[0].",".$post[1];
				$data = array(
					'content_setting_website' => $bundle
					);

				$this->user->update('setting_website_language', $where, $data);
			}

			redirect('admin/settings/index');
	}
	
	function update3(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'setting');
	
			$id = $this->input->post('id_kategori_sub');

			$gets_set = $this->setting->get_config($id);

			foreach ($gets_set as $key => $get_set) {
				$where = array('id_setting_website_language' => $get_set->id_setting_website_language);
				$post = $this->input->post($get_set->id_setting_website_language);
				$bundle = $post[0].",".$post[1].",".$post[2];
				$data = array(
					'content_setting_website' => $bundle
					);

				$this->user->update('setting_website_language', $where, $data);
			}

			redirect('admin/settings/index');
	}

	function update15(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'setting');
	
			$id = $this->input->post('id_kategori_sub');

			$gets_set = $this->setting->get_config($id);

			foreach ($gets_set as $key => $get_set) {
				$where = array('id_setting_website_language' => $get_set->id_setting_website_language);
				$post = $this->input->post($get_set->id_setting_website_language);
				$bundle = $post[0].",".$post[1].",".$post[2].",".$post[3].",".$post[4].",".$post[5].",".$post[6].",".$post[7].",".$post[8].",".$post[9].",".$post[10].",".$post[11].",".$post[12].",".$post[13].",".$post[14];
				$data = array(
					'content_setting_website' => $bundle
					);

				$this->user->update('setting_website_language', $where, $data);
			}

			redirect('admin/settings/index');
	}

	


}

?>