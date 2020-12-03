<?php 

	function user_permission_check($field, $id_user_group, $id_user_permission){

		$CI = & get_instance();
		$CI->load->model('user');

		$rows = $CI->user->get_field('user_group_permission', $field, $id_user_group, $id_user_permission);

		$value = 0;
		foreach($rows as $row){
			return $value = $row->$field;
		}
		return $value;
	}

	function permission_exist($id_user_group, $id_user_permission){
		$CI = & get_instance();
		$CI->load->model('user');

		$rows = $CI->user->get_exist('user_group_permission', $id_user_group, $id_user_permission);
		return count($rows);
	}

	function get_check($name, $value){

	if ($value == 0) {
        $value = form_checkbox($name, '1', TRUE);
    } else {
        $value = form_checkbox($name, '1', 0);
    }
    return $value;
	}

	function get_date_time(){
		return date("Y-m-d H:i:s");
	}

	function get_date(){
		return date("Y-m-d");
	}

	function get_language(){
		$CI = & get_instance();
		$session = $CI->session->all_userdata();

		if(isset($session['language']))
			return $session['language'];
		else
			return 1;
	}

	function get_status_comment($var){
		if($var == 0){
			$var = "Pendding";
		}elseif($var == 1){
			$var = "Accept";
		}else{
			$var = "Reject";
		}
		return $var;
	}

	function get_status_modul($var){
		if($var==0){
			$var ="not active";
		}else{
			$var = "active";
		}
		return $var;
	}

	function get_delete($var, $link, $id) {
		if ($var == 1) {
			$var = "<a href=" . base_url() . $link . "" . $id . " OnClick=\"return confirm('Are you sure?');\"></a>";
		} else {
			$var = '';
		}
		return $var;
	}



?>