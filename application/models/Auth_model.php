<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{
	public function get_user($email, $pass)
	{
		$res = $this->db
					->where(['email','pass'],[$email,$pass])
					->get('admin');
		if ($res->num_rows ==1) {
			// user exist
			return $res->result();
		}else{
			return false;
		}
	}
}