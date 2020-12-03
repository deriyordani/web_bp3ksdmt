<?php 
	class user extends CI_model{
		
		function index($table, $order, $by){
			$this->db->order_by($order, $by);
			$q = $this->db->get($table);
			return $q->result();
		}

		function get($table, $where){
			$this->db->where($where);
			$q = $this->db->get($table);
			return $q->result();
		}

		function get_notif($table){
			$this->db->limit(5);
			$this->db->order_by('id_notification', 'DESC');
			$q = $this->db->get($table);
			return $q->result();
		}

		function get_field($table, $field, $id_user_group, $id_user_permission){
			$query = "SELECT `$field` FROM `user_group_permission` WHERE id_user_group = $id_user_group AND `id_user_permission` =$id_user_permission";
			$sql = $this->db->query($query);
			return $sql->result();
		}

		function get_exist($table, $id_user_group, $id_user_permission){
			$query = "SELECT * FROM `user_group_permission` WHERE id_user_group = $id_user_group AND `id_user_permission` =$id_user_permission";
			$sql = $this->db->query($query);
			return $sql->result();
		}

		function list_array($table, $order, $by){
			$this->db->order_by($order, $by);
			$q = $this->db->get($table);
			return $q->result();
		}

		function insert($table, $data){
			$this->db->insert($table, $data);
			return true;
		}

		function insert_get($table, $data){
			$this->db->insert($table, $data);
			return $this->db->insert_id();
		}

		function edit($table, $where){
			$this->db->where($where);
			$q = $this->db->get($table);
			return $q->result();
		}

		function update($table, $where, $data){
			$this->db->where($where); 
			$this->db->update($table, $data);
			return true;
		}

		function delete($table, $where){
			$this->db->where($where);
			$this->db->delete($table);
			return true;
		}
	}

?>