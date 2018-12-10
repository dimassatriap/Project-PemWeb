<?php
class Register extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("m_register");
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('v_login');
	}

	public function addUser(){
		$user = $this->m_register;
		
		$user->addperson();	
		$this->session->set_flashdata('success', 'User disimpan');

		$this->load->view('v_login');
	}
}

?>