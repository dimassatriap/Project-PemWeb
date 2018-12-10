<?php
class Register extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("m_register");

	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('reg-nama','Name','required');
		$this->form_validation->set_rules('reg-user','Username','required');
		$this->form_validation->set_rules('reg-pass','Password','required');

		if ($this->form_validation->run() == false ){
			$this->load->helper('url');
			$this->load->view('v_login');
		}
	}

	function addUser(){
		$event = $this->m_register;
		
		$event->addperson();
		$this->session->set_flashdata('success', 'Event disimpan');

		redirect(base_url('index.php/login'));	
	}
}

?>