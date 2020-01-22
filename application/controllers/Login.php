<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	// Index login
	public function index() {
		
		// Validasi
		$valid = $this->form_validation;
		
		$valid->set_rules('username','Username','required',
				array(	'required'	=> 'Username harus diisi'));
		$valid->set_rules('password','Password','required',
				array(	'required'	=> 'Password harus diisi'));
		
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		
		if($valid->run()) {
			$this->simple_login->login($username,$password,
			base_url('admin/dasbor'), base_url('login'));
		}
		// End validasi
				
		$data = array( 'title' => 'Login Administrator');
		$this->load->view('admin/login_view',$data);
	}
	
	// Logout
	public function logout() {
		$this->simple_login->logout();
	}
}