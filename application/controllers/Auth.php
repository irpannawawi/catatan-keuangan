<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}
	public function login()
	{
		$this->load->view('auth/login');
	}

	public function cek_login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$user = $this->auth_model->get_user($email, $pass);
		if($user){
			// session start
		}else{
			// redirect to login
		}
	}
}