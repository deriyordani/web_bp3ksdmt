<?php

class comments extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/comment');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		
		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');
		
	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'comment');

		/*$where = array(
			'status' => 1,
			);
		$order = 'id_comment';
		$by = 'asc';

		$data['rows'] = $this->user->index('comment', $order, $by, $where);*/
		$data['content'] = 'admin/comments/index';
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
            $query = $this->comment->data_pagination($start, $per_page);

            $count = $this->comment->pagination();
            $data['no_of_paginations'] = ceil($count / $per_page);

            $data['rows'] = $query;
            $data['count'] = count($query);
            $this->load->view('admin/comments/pagination', $data);
        }
	}

	function show(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'comment');


		$id = $this->uri->segment(4);

		$where = array('id_comment' => $id);
		$data['rows'] = $this->user->edit('comment', $where);
		
		$data['content'] = 'admin/comments/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'comment');
		
		$data['content'] = 'admin/comments/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'comment');

		$id_comment = $this->uri->segment(4);

		$where = array('id_comment' => $id_comment);
		$data['comments'] = $this->user->edit('comments', $where);
		$data['comments_language'] = $this->user->edit('comments_language', $where);
		
		$data['content'] = 'admin/comments/edit';
		$this->load->view('layout/backend', $data);
	}

	function accept(){
		$id_comment = $this->uri->segment(4);
		$where = array('id_comment' => $id_comment);
		$data_comment = array(
			'status' => 1,
			);
		$this->user->update('comment', $where,$data_comment);

		redirect('admin/comments/index');
	}

	function reject(){
		$id_comment = $this->uri->segment(4);
		$where = array('id_comment' => $id_comment);
		$data_comment = array(
			'status' => 2,
			);
		$this->user->update('comment', $where, $data_comment);

		redirect('admin/comments/index');
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'comment');

		$id_comment = $this->uri->segment(4);

		$where = array('id_comment' => $id_comment);
		$rows = $this->user->edit('comments', $where);

		foreach($rows as $row){
			$base = base_url();

			if ($base == 'http://localhost/bankmaluku/') {
				$path_to_file = "D:/xampp/htdocs/bankmaluku/".$row->url_gambar_comments;
			} elseif ($base == 'http://semutmedia.com/travelbid/') {
				$path_to_file = "/home/semut/public_html/".$row->url_gambar_comments;
			}
			unlink($path_to_file); 
		}

		$where = array('id_comment' => $id_comment);
		$this->user->delete('comments', $where);

		$where = array('id_comment' => $id_comment);
		$this->user->delete('comments_language', $where);
		
		redirect('admin/comments/index');
	}


}

?>