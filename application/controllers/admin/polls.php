<?php

class polls extends ci_controller
{
	
	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/poll');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');

		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');

	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'polls');

		/*$data['rows'] = $this->poll->poll_list();*/

		$data['content'] = 'admin/poll/index';
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
            $query = $this->poll->data_pagination($start, $per_page);

            $count = $this->poll->pagination();
            $data['no_of_paginations'] = ceil($count / $per_page);

            $data['rows'] = $query;
            $data['count'] = count($query);
            $this->load->view('admin/poll/pagination', $data);
        }
	}

	function show(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'polls');

		$id = $this->uri->segment(4);

		$where = array('id_poll' => $id);
		$data['rows'] = $this->user->edit('poll', $where);
		
		$data['content'] = 'admin/poll/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'polls');
		$data['content'] = 'admin/poll/add';
		$this->load->view('layout/backend', $data);
		/*$this->load->view('admin/poll/add');*/
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'polls');

		$id = $this->uri->segment(4);
		$where = array('id_topik_polls' => $id);

		$data['topik_polls'] = $this->user->edit('topik_polls_language', $where);
		$data['pilihan'] =  count($this->poll->count($id));

		//$rows = $this->poll->get_poll('topik_polls_language', $where);
		
		$data['content'] = 'admin/poll/edit';
		$this->load->view('layout/backend', $data);
	}

	function select_polls(){
		$value = $this->uri->segment(4);
		
		$data['i_polls'] = $value; 
		$this->load->view('admin/poll/select', $data);
	}	

	function select_jenis_edit(){
		$value = $this->uri->segment(4);
		$id = $this->uri->segment(5);
		$data['list_jenis'] = array();
		$data['i_polls'] = $value; 
		$data['pilihan_polls_id'] =  $this->poll->pi_edit_id($id);
		$data['pilihan_polls_en'] =  $this->poll->pi_edit_en($id);
	
	/*	if($value == 'pilih'){
			$data['list_jenis'] = array();
		}else{
			if($value == 'page'){
				$value = 'page_language';
				$data['list_jenis'] = $this->poll->get_list($value);
			}elseif($value == 'modul'){
				$data['list_jenis'] = $this->poll->get_list_modul($value);
			}*/

			/*if($value == 'modul'){*/
				$this->load->view('admin/poll/selectedit', $data);
			/*}else{
				$this->load->view('admin/poll/select', $data);
			}*/
		/*}*/
	}


	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'polls');
		
		//validation
		$this->form_validation->set_rules('judul_topik_polls_id', 'Judul topik polls Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('judul_topik_polls_en', 'Judul topik polls En', 'trim|required|min_length[3]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/poll/add';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			/*topik polls*/

			$data_topik_polls = array(
				'date_update' => $date,
				'status' => 0,
				);
			$id_topik_polls = $this->user->insert_get('topik_polls', $data_topik_polls);
			$data_poll_language_id = array(
				'judul_topik_polls' => $this->input->post('judul_topik_polls_id'),
				'id_topik_polls' => $id_topik_polls,
				'id_language' => 1,
				);

			$data_poll_language_en = array(
				'judul_topik_polls' => $this->input->post('judul_topik_polls_en'),
				'id_topik_polls' => $id_topik_polls,
				'id_language' => 2,
				);
			$this->user->insert('topik_polls_language', $data_poll_language_id);
			$this->user->insert('topik_polls_language', $data_poll_language_en);
			/*end*/

			/*Pilihan Topik*/
			$data_pilihan_polls = array(
				'date_update' => $date,
				'id_topik_polls' => $id_topik_polls,
				);

			$id_pilihan_polls = $this->user->insert_get('pilihan_polls', $data_pilihan_polls);
			$id_l = $this->input->post('pilihan_id');
			$en_l = $this->input->post('pilihan_en');

			foreach($id_l as $judul){
				$data_pilihan =array( 
					'judul_pilihan_polls' => $judul,
					'id_language' => 1,
					'id_pilihan_polls' => $id_pilihan_polls,
					);
				$this->user->insert('pilihan_polls_language', $data_pilihan);
			}

			foreach($en_l as $judul){
				$data_pilihan =array( 
					'judul_pilihan_polls' => $judul,
					'id_language' => 2,
					'id_pilihan_polls' => $id_pilihan_polls,
					);
				$this->user->insert('pilihan_polls_language', $data_pilihan);
			}


			/*End*/

			redirect('admin/polls/index');
		}
	}

	function update(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'polls');

		//validation
		$this->form_validation->set_rules('judul_topik_polls_id', 'Judul topik polls Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('judul_topik_polls_en', 'Judul topik polls En', 'trim|required|min_length[3]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('id_topik_polls');
			$data['id_topik_polls'] = $id;
			$where = array('id_topik_polls' => $id);

			$data['topik_polls'] = $this->user->edit('topik_polls_language', $where);
			$data['pilihan'] =  count($this->poll->count($id));

			$data['content'] = 'admin/poll/form';
			$this->load->view('layout/backend', $data);
		}else{

			$date = get_date_time();

			/*topik polls*/

			$data_poll_language_id = array(
				'judul_topik_polls' => $this->input->post('judul_topik_polls_id'),
				'id_language' => 1,
				);

			$data_poll_language_en = array(
				'judul_topik_polls' => $this->input->post('judul_topik_polls_en'),
				'id_language' => 2,
				);


			$where_poll_id = array('id_topik_polls_language' => $this->input->post('id_topik_polls_id'));
			$where_poll_en = array('id_topik_polls_language' => $this->input->post('id_topik_polls_en'));
			$this->user->update('topik_polls_language', $where_poll_id, $data_poll_language_id);
			$this->user->update('topik_polls_language', $where_poll_en, $data_poll_language_en);

			/*end*/

			/*Pilihan Topik*/

			$id_l = $this->input->post('pilihan_id');
			$en_l = $this->input->post('pilihan_en');
			$id_l_id = $this->input->post('id_pilihan_id');
			$id_l_en = $this->input->post('id_pilihan_en');

			$no = 0;
			foreach($id_l as $judul){
				$where = array('id_pilihan_polls_language' => $id_l_id[$no]);
				$data_pilihan =array( 
					'judul_pilihan_polls' => $judul,
					'id_language' => 1,
					);
				$this->user->update('pilihan_polls_language', $where, $data_pilihan);
				$no++;
			}
			$no = 0;
			foreach($en_l as $judul){
				$where = array('id_pilihan_polls_language' => $id_l_en[$no]);
				$data_pilihan =array( 
					'judul_pilihan_polls' => $judul,
					'id_language' => 2,
					);
				$this->user->update('pilihan_polls_language', $where, $data_pilihan);
				$no++;
			}

			$add_id_l = $this->input->post('add_pilihan_id');
			$add_en_l = $this->input->post('add_pilihan_en');

			$id_pilihan_polls = $this->input->post('id_pilihan_polls');

			foreach($add_id_l as $judul){
				$data_pilihan =array( 
					'judul_pilihan_polls' => $judul,
					'id_language' => 1,
					'id_pilihan_polls' => $id_pilihan_polls,
					);
				$this->user->insert('pilihan_polls_language', $data_pilihan);
			}

			foreach($add_en_l as $judul){
				$data_pilihan =array( 
					'judul_pilihan_polls' => $judul,
					'id_language' => 2,
					'id_pilihan_polls' => $id_pilihan_polls,
					);
				$this->user->insert('pilihan_polls_language', $data_pilihan);
			}

			/*End*/

			redirect('admin/polls/index');
		}
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'polls');

		$id = $this->uri->segment(4);
		$id_pilihan_polls = $this->poll->id_pilihan_polls($id);

		$where = array('id_topik_polls' => $id);
		$where_pilihan = array('id_pilihan_polls' => $id_pilihan_polls);

		$this->user->delete('topik_polls', $where);
		$this->user->delete('topik_polls_language', $where);
		$this->user->delete('pilihan_polls', $where);
		
		$this->user->delete('pilihan_polls_language', $where_pilihan);
		$this->user->delete('pilihan_topik_polls', $where_pilihan);

		redirect('admin/polls/index');
	}


}

?>
