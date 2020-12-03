<?php 

class maluku_lib{

	function __construct()
	{
		$this->ci =& get_instance();

		$this->ci->load->config('tank_auth', TRUE);

		$this->ci->load->library('session');
		$this->ci->load->database();
		$this->ci->load->model('user');
		$this->ci->load->model('admin/kategori');
		$this->ci->load->model('admin/menu');
		$this->ci->load->model('admin/category');
		$this->ci->load->model('admin/permission');

		// Try to autologin
	}


	function user_group(){
		$order = 'id_user_group';
		$by = 'asc';

/*		$this->ci = & get_instance();
		$this->ci->load->model('user');*/
		$rows = $this->ci->user->list_array('user_group', $order, $by);

		$dropdown = array();
		foreach($rows as $row){
			$dropdown[$row->id_user_group] =  $row->permission_name;
		}	
		return $dropdown;
	}

	function user_permmision($id_user_group){
		$where = array('id_user_group' => $id_user_group);

	/*	$this->ci = & get_instance();
		$this->ci->load->model('user');*/
		$rows = $this->ci->user->get('user_group', $where);

		$dropdown = array();
		$value = "";
		foreach($rows as $row){
			$value =  $row->permission_name;
		}	
		return $value;
	}

	function kategori_news(){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_news();
		$value = array();
		foreach($rows as $row){
			$value[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $value;
	}

	function kategori_news2(){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_news();
		$value = array();

		$value[0] = '';
		foreach($rows as $row){
			$value[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $value;
	}

	function kategori_banners(){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_banner();
		$value = array();
		foreach($rows as $row){
			$value[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $value;
	}

	function kategori_files(){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_file();
		$value = array();
		foreach($rows as $row){
			$value[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $value;
	}

	function kategori_moduls(){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_modul();
		$value = array();
		foreach($rows as $row){
			$value[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $value;
	}

	function kategori_moduls_select($id_kategori){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_modul_select($id_kategori);
		$value = '';
		foreach($rows as $row){
			$value = $row->nama_kategori_sub;
		}
		return $value;
	}


	function kategori_sub_select($id_kategori){

		$rows = $this->ci->kategori->kategori_sub_select($id_kategori);
		$value = '';
		foreach($rows as $row){
			$value = $row->nama_kategori_sub;
		}
		return $value;
	}

	function kategori_menu(){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_menu();
		$value = array();
		foreach($rows as $row){
			$value[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $value;
	}

	function kategori_menu_other(){
		/*$this->ci = & get_instance();
		$this->ci->load->model('admin/kategori');*/

		$rows = $this->ci->kategori->kategori_menu_other();
		$value = array();
		foreach($rows as $row){
			$value[$row->id_kategori_sub] = $row->nama_kategori_sub;
		}
		return $value;
	}

	function theme(){
		$where = array('status' => 1);

		$rows = $this->ci->user->get('theme', $where);

		foreach($rows as $row){
			$value = $row->key;
		}

		return $value;
	}

	function language(){
		$this->ci = & get_instance();

		$session = $this->ci->session->all_userdata();

		if(isset($session['language'])){
			return $session['language'];
		} else {
			return 1;
		}
	}

	function language_name(){
		$this->ci = & get_instance();

		$session = $this->ci->session->all_userdata();

		if(isset($session['language_name'])){
			return $session['language_name'];
		} else {
			return 'indonesia';
		}
	}

	function menu_child($id_menu){
		$rows = $this->ci->menu->get_child($id_menu);
		return $rows;	
	}

	function menu_child_category($id_menu){
		$rows = $this->ci->category->get_child($id_menu);
		return $rows;	
	}

	function check_permission_show($id_user, $menu){
		$rows = $this->ci->permission->check_permission_show($id_user, $menu);
		if($rows[0]->show == 0){
			redirect('admin/admin/permission');
		}else{
			return true;
		}
	}
	function check_permission_create($id_user, $menu){
		$rows = $this->ci->permission->check_permission_create($id_user, $menu);
		if($rows[0]->create == 0){
			redirect('admin/admin/permission');
		}else{
			return true;
		}
	}
	function check_permission_update($id_user, $menu){
		$rows = $this->ci->permission->check_permission_update($id_user, $menu);
		if($rows[0]->update == 0){
			redirect('admin/admin/permission');
		}else{
			return true;
		}
	}
	function check_permission_delete($id_user, $menu){
		$rows = $this->ci->permission->check_permission_delete($id_user, $menu);
		if($rows[0]->delete == 0){
			redirect('admin/admin/permission');
		}else{
			return true;
		}
	}

	function url_dir(){
		//return "C:/xampp/htdocs/bp2ip/";
		//return "/home/bcscpanel/public_html/";
		return "/home/immustud/bp3k-sdmt.immustudio.com/";
	}

}

?>