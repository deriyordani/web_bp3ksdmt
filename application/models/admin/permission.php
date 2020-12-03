<?php 
class permission extends CI_model{

	function check_permission_show($id_user, $menu){
		$query = "SELECT ugp.show FROM user_group_permission ugp JOIN user_group ug ON ug.id_user_group=ugp.id_user_group JOIN  user_permission up ON up.id_user_permission=ugp.id_user_permission JOIN users u ON u.id_user_group=ug.id_user_group WHERE u.id = $id_user AND up.page_user_permission = '$menu'";
		$q = $this->db->query($query);
		return $q->result();
	}

	function check_permission_create($id_user, $menu){
		$query = "SELECT ugp.create FROM user_group_permission ugp JOIN user_group ug ON ug.id_user_group=ugp.id_user_group JOIN  user_permission up ON up.id_user_permission=ugp.id_user_permission JOIN users u ON u.id_user_group=ug.id_user_group WHERE u.id = $id_user AND up.page_user_permission = '$menu'";
		$q = $this->db->query($query);
		return $q->result();
	}

	function check_permission_update($id_user, $menu){
		$query = "SELECT ugp.update FROM user_group_permission ugp JOIN user_group ug ON ug.id_user_group=ugp.id_user_group JOIN  user_permission up ON up.id_user_permission=ugp.id_user_permission JOIN users u ON u.id_user_group=ug.id_user_group WHERE u.id = $id_user AND up.page_user_permission = '$menu'";
		$q = $this->db->query($query);
		return $q->result();
	}

	function check_permission_delete($id_user, $menu){
		$query = "SELECT ugp.delete FROM user_group_permission ugp JOIN user_group ug ON ug.id_user_group=ugp.id_user_group JOIN  user_permission up ON up.id_user_permission=ugp.id_user_permission JOIN users u ON u.id_user_group=ug.id_user_group WHERE u.id = $id_user AND up.page_user_permission = '$menu'";
		$q = $this->db->query($query);
		return $q->result();
	}

	function pagination() {
		$sql = "SELECT COUNT(*) AS count FROM user_permission";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			return $row->count;
		}
	}

	function data_pagination($start, $limit) {
		$this->db->order_by('id_user_permission', 'DESC');
		$this->db->limit($limit, $start);
		$query = $this->db->get("user_permission");
		return $query->result();
	}

}

?>