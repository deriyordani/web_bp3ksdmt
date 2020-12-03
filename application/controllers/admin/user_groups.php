<?php

class user_groups extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->helper('maluku');
		$this->load->model('user');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		/*$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');*/
		
		$this->lang->load('tank_auth');
		
	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'user group');
		//database
		$order = 'id_user_group';
		$by = 'asc';
		$data['rows'] = $this->user->index('user_group', $order, $by);
		//end

		$data['content'] = 'admin/user_groups/index';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'user group');

		$data['content'] = 'admin/user_groups/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'user group');
		$id = $this->uri->segment(4);

		$where = array('id_user_group' => $id);
		$data['rows'] = $this->user->edit('user_group', $where);
		
		$data['content'] = 'admin/user_groups/edit';
		$this->load->view('layout/backend', $data);
	}

	function permission(){
		$id = $this->uri->segment(4);

		$where = array('id_user_group' => $id);
		$data['user_groups'] = $this->user->edit('user_group', $where);
		
		$order = 'page_user_permission';
		$by = 'asc';
		$data['user_permissions'] = $this->user->index('user_permission', $order, $by);

		$data['content'] = 'admin/user_groups/permission';
		$this->load->view('layout/backend', $data);
	}

	function set_permission(){
		$id_user_group = $this->input->post('id_user_group'); 

		$permission = $this->input->post('page_user_permission');

		foreach($permission as $data){


			if($data['check'] == 1){
				if(!array_key_exists('show', $data)){
					$show = array('show' => '0');
					$data = array_merge($data, $show);
				}
				if(!array_key_exists('create', $data)){
					$show = array('create' => '0');
					$data = array_merge($data, $show);
				}if(!array_key_exists('update', $data)){
					$show = array('update' => '0');
					$data = array_merge($data, $show);
				}if(!array_key_exists('delete', $data)){
					$show = array('delete' => '0');
					$data = array_merge($data, $show);
				}
				unset($data['check']);
				
				$where = array('id_user_group' => $data['id_user_group'], 'id_user_permission' => $data['id_user_permission']);
				$this->user->update('user_group_permission', $where, $data);
				
			}else{
				
				unset($data['check']);
				$this->user->insert('user_group_permission', $data);
			}
		}

		redirect('admin/user_groups/permission/'.$id_user_group);
	}

	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'user group');
		
		//validation
		$this->form_validation->set_rules('permission_name', 'Permission name', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/user_groups/add';
			$this->load->view('layout/backend', $data);
		}else{
			
			$data = array('permission_name' => $this->input->post('permission_name'));
			$this->user->insert('user_group', $data);
			redirect('admin/user_groups/index');
		}
		
		
	}

	function update(){
		$id = $this->input->post('id_user_group');
		$where = array('id_user_group' => $id);
		
		//validation
		$this->form_validation->set_rules('permission_name', 'Permission name', 'required');

		if ($this->form_validation->run() == FALSE){
			$id = $this->input->post('id_user_group');

			$where = array('id_user_group' => $id);
			$data['rows'] = $this->user->edit('user_group', $where);
			
			$data['content'] = 'admin/user_groups/form';
			$this->load->view('layout/backend', $data);
		}else{
			$data = array(
				'permission_name' => $this->input->post('permission_name'),
				);

			$this->user->update('user_group', $where, $data);
			redirect('admin/user_groups/index');
		}
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'user group');

		$id = $this->uri->segment(4);

		$where = array('id_user_group' => $id);
		$this->user->delete('user_group', $where);

		redirect('admin/user_groups/index');
	}


}

?>