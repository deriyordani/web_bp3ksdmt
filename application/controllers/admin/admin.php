 <?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_controller
{

	function __construct(){
		
		parent::__construct();
		$this->load->library('tank_auth');

		if (!$this->tank_auth->is_logged_in()) redirect('/auth/login/');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		
		$this->lang->load('tank_auth');
		$this->load->model('user');
		$this->load->model('hit_counter');
		$this->load->library('maluku_lib');
	
	}

	function index(){
		$data['hits']= $this->hit_counter->get();
		$table = 'notification';
		$data['rows']= $this->user->get_notif($table);
		
		$data['content'] = 'admin/index';
		$this->load->view('layout/backend', $data);
	}

	function list_user(){
		$this->maluku_lib->check_permission_show($this->tank_auth->get_user_id(), 'list user');

		$order = 'id';
		$by = 'asc';

		$data['rows'] = $this->user->index('users', $order, $by);
		$data['content'] ='admin/admin/list_user';		
		$this->load->view('layout/backend', $data);		
	}

	function user_permissions(){
		$this->maluku_lib->check_permission_update($this->tank_auth->get_user_id(), 'list user');
		$id_user = $this->uri->segment(4);

		$where = array('id' => $id_user);
		$data['users'] = $this->user->get('users', $where);


		/*$data['permisions'] = $this->user->get('users', $where);*/

		$data['content'] = 'admin/admin/user_permission';
		$this->load->view('layout/backend', $data);
		}

	function delete(){
		$this->maluku_lib->check_permission_delete($this->tank_auth->get_user_id(), 'list user');

		$id = $this->uri->segment(4);
		$where = (array('id' => $id));
		$this->user->delete('users',$where);
		redirect('admin/admin/list_user');
	}

	function update_permission(){

		$id_user = $this->input->post('id_user');
		$id_user_group = $this->input->post('id_user_group');

		$where = array('id' => $id_user);
		$data = array(
			'id_user_group' => $this->input->post('id_user_group'),
			);
		$this->user->update('users', $where, $data);
		redirect('admin/admin/list_user');
	}

	function permission(){
		$data['content'] = 'admin/admin/permission';
		$this->load->view('layout/backend', $data);
	}

}

?>