<?php

class contacts extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->helper('maluku');
		$this->load->model('user');
		$this->load->model('admin/contact');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		$this->lang->load('tank_auth');
	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'contact');

		$data['content'] = 'admin/contacts/index';
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
            $query = $this->contact->data_pagination($start, $per_page);

            $count = $this->contact->pagination();
            $data['no_of_paginations'] = ceil($count / $per_page);

            $data['rows'] = $query;
            $data['count'] = count($query);
            $this->load->view('admin/contacts/pagination', $data);
        }
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'contact');

		$data['content'] = 'admin/contacts/add';
		$this->load->view('layout/backend', $data);
	}

	function show(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'contact');
		$id = $this->uri->segment(4);

		$where = array('id_contact' => $id);
		$data['rows'] = $this->user->edit('contact', $where);
		
		$data['content'] = 'admin/contacts/show';
		$this->load->view('layout/backend', $data);
	}

	function permission(){
		$id = $this->uri->segment(4);

		$where = array('id_contact' => $id);
		$data['contacts'] = $this->user->edit('contact', $where);
		
		$order = 'page_user_permission';
		$by = 'asc';
		$data['user_permissions'] = $this->user->index('user_permission', $order, $by);

		$data['content'] = 'admin/contacts/permission';
		$this->load->view('layout/backend', $data);
	}

	function set_permission(){
		$id_contact = $this->input->post('id_contact'); 

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
				
				$where = array('id_contact' => $data['id_contact'], 'id_user_permission' => $data['id_user_permission']);
				$this->user->update('contact_permission', $where, $data);
			
			}else{
	
				unset($data['check']);
				$this->user->insert('contact_permission', $data);
			}
		}

		redirect('admin/contacts/permission/'.$id_contact);
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'contact');

		$id = $this->uri->segment(4);

		$where = array('id_contact' => $id);
		$this->user->delete('contact', $where);
		
		redirect('admin/contacts/index');
	}


}

?>