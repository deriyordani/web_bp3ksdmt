<?php

class news extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/news_model');
		$this->load->model('admin/page');
		$this->load->model('admin/notification');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');
		
	}

	function index(){

		//check_permission
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'news');
		//end

		/*$order = 'id_news';
		$by = 'desc';*/
		/*$where = array(
			'id_language' => 1,
			);*/
	/*	$order = 'id_news_language';
		$by = 'asc';
		$data['rows'] = $this->page->list_news($order, $by);*/
		$data['content'] = 'admin/news/index';
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
			
			if($this->uri->segment(4)==null){
				$query = $this->news_model->data_pagination($start, $per_page);
				$count = $this->news_model->pagination();
			} else {
				$query = $this->news_model->data_pagination2($start, $per_page,$this->uri->segment(4));
				$count = $this->news_model->pagination2($this->uri->segment(4));
			}
			

			$data['no_of_paginations'] = ceil($count / $per_page);

			$data['rows'] = $query;
			$data['count'] = count($query);
			$this->load->view('admin/news/pagination', $data);
		}
	}
	function show(){

		//check_permission
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'news');
		//end

		$id_news = $this->uri->segment(4);

		$where = array('id_news' => $id_news);
		$data['news'] = $this->user->edit('news', $where);
		$data['news_language'] = $this->user->edit('news_language', $where);
		
		$data['content'] = 'admin/news/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		
		//check_permission
		$row = $this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'news');
		//end
		$data['content'] = 'admin/news/add';
		$this->load->view('layout/backend', $data);
	}

	function edit(){
		//check_permission
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'news');
		//end

		$id_news = $this->uri->segment(4);

		$where = array('id_news' => $id_news);
		$data['news'] = $this->user->edit('news', $where);
		$data['news_language'] = $this->user->edit('news_language', $where);
		
		$data['content'] = 'admin/news/edit';
		$this->load->view('layout/backend', $data);
	}

	function create(){

		//check_permission
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'news');
		//end

		//validation
		
		$this->form_validation->set_rules('judul_news_id', 'Judul news Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('content_news_id', 'Content news Id', 'trim|required|min_length[5]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'admin/news/add';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			$config['remove_spaces']  = TRUE;
			$config['upload_path'] = './uploads/news/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if($this->upload->do_upload()){

				$datetime = strtotime(get_date_time());

				$file = $_FILES["userfile"]["name"];
				$data = array('upload_data' => $this->upload->data());
				$name = $this->input->post('name');

				
				$file = str_replace(' ', '_', $file);

				$data_news = array(
					'url_gambar_news' => "uploads/news/".$datetime."_".$file,
					'start_date' => '',
					'end_date' => '',
					'status' => $this->input->post('status'),
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					'id_user' => $this->tank_auth->get_user_id(),
					);
				
				$base = base_url();

				$url = $this->maluku_lib->url_dir();

				rename($url.'uploads/news/'.$file, $url.'uploads/news/'.$datetime."_".$file);


				$id_news = $this->user->insert_get('news', $data_news);

				$data_news_language_id = array(
					'judul_news' => $this->input->post('judul_news_id'),
					'content_news' => $this->input->post('content_news_id'),
					'id_news' => $id_news,
					'id_language' => 1,
					);

				$this->user->insert('news_language', $data_news_language_id);

			} else {

				$data_news = array(
					'url_gambar_news' => "",
					'start_date' => '',
					'end_date' => '',
					'status' => $this->input->post('status'),
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					'id_user' => $this->tank_auth->get_user_id(),
					);

				$id_news = $this->user->insert_get('news', $data_news);

				$data_news_language_id = array(
					'judul_news' => $this->input->post('judul_news_id'),
					'content_news' => $this->input->post('content_news_id'),
					'id_news' => $id_news,
					'id_language' => 1,
					);

				$this->user->insert('news_language', $data_news_language_id);

			}


			//send email
			$this->load->library('email');

			$qe = $this->db->query("SELECT * FROM subscribe WHERE status=1")->result();

			foreach ($qe as $key => $email_member) {
				$this->email->set_mailtype("html");
				$this->email->from('info@bp2ipaceh.sch.id', 'BP2IP Malahayati Aceh');
				$this->email->to($email_member->email);
				//$this->email->to('moch.gani.setiawan@gmail.com');
				
				$this->email->subject('BP2IP Malahayati Aceh (News)');

				$this->email->message('Kepada Member Yth, '.$email_member->email.'<br><br>Ada Berita baru, sebagai berikut :<br><br><h1>'.$this->input->post('judul_news_id').'</h1><p>'.character_limiter(strip_tags($this->input->post('content_news_id')), 500).'</p>Selengkapnya :<br>'.base_url().'modul/news/view/'.$id_news. '<br><br>--<br>Best regards,<br>BP2IP Malahayati Aceh<br><br><br><br><a href="'.base_url().'page/unsubscribe/'.$email_member->id_subscribe.'">Unsubscribe</a>');
				
				$this->email->send();
			}
			//end send email

			
			redirect('admin/news/index');
		}

		
	}

	function update(){
		//check_permission
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'news');
		//end

		//validation
		$this->form_validation->set_rules('judul_news_id', 'Judul news Id', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('content_news_id', 'Content news Id', 'trim|required|min_length[5]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$id_news = $this->input->post('id_news');

			$where = array('id_news' => $id_news);
			$data['news'] = $this->user->edit('news', $where);
			$data['news_language'] = $this->user->edit('news_language', $where);	
			$data['content'] = 'admin/news/form';
			$this->load->view('layout/backend', $data);
		}else{

			$date = get_date_time();
			$config['remove_spaces']  = TRUE;
			$config['upload_path'] = './uploads/news/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload()) {
				$data = array('upload_data' => $this->upload->data());
				$file = $_FILES["userfile"]["name"];
				$name = $this->input->post('name');


				$base = base_url();

				$url = $this->maluku_lib->url_dir();
				
				$path_to_file = $url.$this->input->post('gambar');

				unlink($path_to_file);
				$file = str_replace(' ', '_', $file);

				$datetime = strtotime(get_date_time());
				$data_news = array(
					'start_date' => '',
					'end_date' => '',
					'status' => $this->input->post('status'),
					'url_gambar_news' => "uploads/news/".$datetime."_".$file,
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					'id_user' => $this->tank_auth->get_user_id(),
					);

				rename($url.'uploads/news/'.$file, $url.'uploads/news/'.$datetime."_".$file);
			}else{
				$data_news = array(
					'start_date' => '',
					'end_date' => '',
					'status' => $this->input->post('status'),
					'date_update' => $date,
					'id_kategori_sub' => $this->input->post('id_kategori_sub'),
					'id_user' => $this->tank_auth->get_user_id(),
					);
			}

			$where_news = array('id_news' => $this->input->post('id_news'));
			$this->user->update('news',$where_news, $data_news);

			$where_news_l_id = array('id_news_language', $this->input->post('id_news_language_id'));
			$data_news_language_id = array(
				'judul_news' => $this->input->post('judul_news_id'),
				'content_news' => $this->input->post('content_news_id'),
				'id_language' => 1,
				);

			$where_news_l_id = array('id_news_language' => $this->input->post('id_news_language_id'));

			$this->user->update('news_language', $where_news_l_id, $data_news_language_id);


			redirect('admin/news/index');
		}

	}

	function delete(){
		//check_permission
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'news');
		//end

		$id_news = $this->uri->segment(4);

		$where = array('id_news' => $id_news);
		$rows = $this->user->edit('news', $where);

		foreach($rows as $row){
			$base = base_url();
			
			$url = $this->maluku_lib->url_dir();

			$path_to_file = $url.$row->url_gambar_news;

			if($row->url_gambar_news!=''){
				unlink($path_to_file); 
			}
		}

		$where = array('id_news' => $id_news);
		$this->user->delete('news', $where);

		$where = array('id_news' => $id_news);
		$this->user->delete('news_language', $where);
		
		redirect('admin/news/index');
	}

	function active(){
		$date = get_date();
		$rows = $this->news_model->get_active($date);
		foreach($rows as $row){
			$this->active_news($row->id_news);
		}
	}

	function active_news($id){
		$data = (array('status' => 1));
		$this->news_model->update_status($id, $data);

		$data2 = array('title' => "News active" ,'url' => "admin/news/show/$id", 'date' => get_date());
		$this->notification->update($data2);
		return true;
	}

	function dactive(){
		$date = get_date();
		$rows = $this->news_model->get_dactive($date);
		foreach($rows as $row){
			$this->d_active($row->id_news);
		}
	}

	function d_active($id){
	/*	$date = date("Y-m-d");
		$curdate=strtotime($end_date);
		$now=strtotime($date);

		if($now > $cur_date){*/
			$data = (array('status' => 0));
			$this->news_model->update_status($id, $data);
			/*}*/

			$data2 = array('title' => "News expire" ,'url' => "admin/news/show/$id", 'date' => get_date());
			$this->notification->update($data2);
			return true;
		}


	}

	?>