<?php

class menus extends ci_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->library('maluku_lib');
		$this->load->model('user');
		$this->load->model('admin/menu');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');

		
		$this->load->helper('maluku_helper');
		$this->lang->load('tank_auth');

	}

	function index(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'menu');

		$data['rows'] = $this->menu->menu_list();
		$data['rows2'] = $this->menu->menu_list_other();

		$data['content'] = 'admin/menu/index';
		$this->load->view('layout/backend', $data);
	}

	function show(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'menu');

		$id = $this->uri->segment(4);

		$where = array('id_menu' => $id);
		$data['rows'] = $this->user->edit('menu', $where);
		
		$data['content'] = 'admin/menu/show';
		$this->load->view('layout/backend', $data);
	}

	function add(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'menu');

		$parrent2 = $this->menu->get_all();
		$parrent1 = array(0 => 'parrent');
		$parrent = $parrent1+$parrent2;

		$data['parrent'] = $parrent;
		$data['content'] = 'admin/menu/add';
		$this->load->view('layout/backend', $data);
		/*$this->load->view('admin/menu/add');*/
	}

	function edit(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'menu');

		$id = $this->uri->segment(4);

		$parrent2 = $this->menu->get_all();
		$parrent1 = array(0 => 'parrent');
		$parrent = $parrent1+$parrent2;
	
		$data['parrent'] = $parrent;
		$where = array('id_menu' => $id);
		$data['menus'] = $this->user->edit('menu', $where);

		$data['menu_language'] = $this->user->edit('menu_language', $where);
		$rows = $this->menu->get_menu('menu_language', $where);
		
		$data['content'] = 'admin/menu/edit';
		$this->load->view('layout/backend', $data);
	}

	function add_other(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'menu');

		$parrent2 = $this->menu->get_all_other();
		$parrent1 = array(0 => 'parrent');
		$parrent = $parrent1+$parrent2;

		$data['parrent'] = $parrent;
		$data['content'] = 'admin/menu/add_other';
		$this->load->view('layout/backend', $data);
		/*$this->load->view('admin/menu/add');*/
	}

	function edit_other(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'menu');

		$id = $this->uri->segment(4);

		$parrent2 = $this->menu->get_all_other();
		$parrent1 = array(0 => 'parrent');
		$parrent = $parrent1+$parrent2;
	
		$data['parrent'] = $parrent;
		$where = array('id_menu' => $id);
		$data['menus'] = $this->user->edit('menu', $where);

		$data['menu_language'] = $this->user->edit('menu_language', $where);
		$rows = $this->menu->get_menu('menu_language', $where);
		
		$data['content'] = 'admin/menu/edit_other';
		$this->load->view('layout/backend', $data);
	}

	function select_jenis(){
		$value = $this->uri->segment(4);
		
		if($value == 'pilih'){
			$data['list_jenis'] = array();
		}else{
			if($value == 'page'){
				$value = 'page_language';
			} else if($value == 'link'){
				$value = 'link';
			}

			if($this->uri->segment(5)){
				$data['id_jenis'] = $this->uri->segment(5);
			}else{
				$data['id_jenis'] = '';
			}	

			if($value == "modul"){
				$data['list_jenis'] = $this->menu->get_list_modul($value);
			}else if($value == "page_language"){
				$data['list_jenis'] = $this->menu->get_list($value);
			} else {
				$data['list_jenis'] = "";
			}

			$data['jenis'] = $value;

			$this->load->view('admin/menu/select', $data);
		}
	}	

	function select_jenis_edit(){
		$value = $this->uri->segment(4);
		$data['list_jenis'] = array();
		if($value == 'pilih'){
			$data['list_jenis'] = array();
		}else{
			if($value == 'page'){
				$value = 'page_language';
				$data['list_jenis'] = $this->menu->get_list($value);
			} else if($value == 'link'){
				$value = 'link';
				$data['list_jenis'] = $this->menu->get_menu_link($this->uri->segment(5));
			} else if($value == 'modul'){
				$data['list_jenis'] = $this->menu->get_list_modul($value);
			} else {
				$data['list_jenis'] = "";
			}

			if($this->uri->segment(5)){
				$data['id_jenis'] = $this->uri->segment(5);
			}else{
				$data['id_jenis'] = '';
			}

			$data['jenis'] = $value;

			/*if($value == 'modul'){*/
				$this->load->view('admin/menu/select_modul', $data);
			/*}else{
				$this->load->view('admin/menu/select', $data);
			}*/
		}
	}


	function create(){
		$this->maluku_lib->check_permission_create($this->tank_auth->get_user_id(), 'menu');

		//validation
		if ($this->input->post('jenis') == '')
		{
			$this->form_validation->set_rules('jenisa', 'jenis', 'required');
		}
		$this->form_validation->set_rules('sort_order', 'Sort order', 'trim|required|numeric');
		$this->form_validation->set_rules('judul_menu_id', 'Judul menu Id', 'trim|required|min_length[3]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$parrent2 = $this->menu->get_all();
			$parrent1 = array(0 => 'parrent');
			$parrent = $parrent1+$parrent2;

			$data['parrent'] = $parrent;
			$data['content'] = 'admin/menu/add';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			if($this->input->post('jenis') == 'link'){
				$data_link = array(
					'link' => $this->input->post('link_url')
					);

				$id_menu_link = $this->user->insert_get('menu_link', $data_link);

				$id_jenis_wp = $id_menu_link;
			} else {
				$id_jenis_wp = $this->input->post('id_jenis');
			}

			$data_menu = array(
				'date_update' => $date,
				'jenis' => $this->input->post('jenis'),
				'id_jenis' => $id_jenis_wp,
				'id_kategori_sub' =>$this->input->post('id_kategori_sub'),
				'id_menu_sub' =>$this->input->post('id_menu_sub'),
				'sort_order' =>$this->input->post('sort_order'),
				);

			$id_menu = $this->user->insert_get('menu', $data_menu);

			$data_menu_language_id = array(
				'judul_menu' => $this->input->post('judul_menu_id'),
				'id_menu' => $id_menu,
				'id_language' => 1,
				);

			$this->user->insert('menu_language', $data_menu_language_id);

			redirect('admin/menus/index');
		}
	}

	function update(){
		//validation
		$this->form_validation->set_rules('sort_order', 'Sort order', 'trim|required|numeric');
		$this->form_validation->set_rules('judul_menu_id', 'Judul menu Id', 'trim|required|min_length[3]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('id_menu');

			$parrent2 = $this->menu->get_all();
			$parrent1 = array(0 => 'parrent');
			$parrent = $parrent1+$parrent2;

			$data['parrent'] = $parrent;
			$where = array('id_menu' => $id);
			$data['menus'] = $this->user->edit('menu', $where);

			$data['menu_language'] = $this->user->edit('menu_language', $where);
			$rows = $this->menu->get_menu('menu_language', $where);

			$data['content'] = 'admin/menu/form';
			$this->load->view('layout/backend', $data);
		}else{
			$date = get_date_time();

			if($this->input->post('jenis') == 'link'){

				$data_link = array(
					'link' => $this->input->post('link_url')
					);

				$id_jenis_wp = $this->user->insert_get('menu_link', $data_link);
			} else {
				$id_jenis_wp = $this->input->post('id_jenis');
			}

			$data_menu = array(
				'date_update' => $date,
				'jenis' => $this->input->post('jenis'),
				'id_jenis' => $id_jenis_wp,
				'id_kategori_sub' =>$this->input->post('id_kategori_sub'),
				'id_menu_sub' =>$this->input->post('id_menu_sub'),
				'sort_order' =>$this->input->post('sort_order'),
				);

			$data_menu_language_id = array(
				'judul_menu' => $this->input->post('judul_menu_id'),
				);

			$where_menu = array('id_menu' => $this->input->post('id_menu'));
			$where_id = array('id_menu_language' => $this->input->post('id_menu_language_id'));

			$this->user->update('menu', $where_menu, $data_menu);
			$this->user->update('menu_language', $where_id, $data_menu_language_id);
			redirect('admin/menus/index');
		}
	}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'menu');

		$id = $this->uri->segment(4);

		$this->db->where('id_menu', $id);
		$q = $this->db->get('menu')->row();

		$where = array('id_menu' => $id);
		$this->user->delete('menu', $where);
		$this->user->delete('menu_language', $where);

		if($q->jenis == 'link'){
			$where_link = array('id_menu_link' => $q->id_jenis);
			$this->user->delete('menu_link', $where_link);
		}

		if($q->id_menu_sub == 0){
			$this->db->where('id_menu_sub', $id);
			$q1 = $this->db->get('menu')->result();

			$where_sub = array('id_menu_sub' => $id);
			$this->user->delete('menu', $where_sub);

			foreach ($q1 as $key => $row1) {
				$where_sub2 = array('id_menu' => $row1->id_menu);
				$this->user->delete('menu_language', $where_sub2);

				if($row1->jenis == 'link'){
					$where_link2 = array('id_menu_link' => $row1->id_jenis);
					$this->user->delete('menu_link', $where_link2);
				}

			}

			
		}
		
		redirect('admin/menus/index');
	}


}

?>
