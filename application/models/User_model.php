<?php
class User_model extends CI_Model{

	function get_users(){
		$hsl=$this->db->get('users');
		return $hsl;
	}
} 