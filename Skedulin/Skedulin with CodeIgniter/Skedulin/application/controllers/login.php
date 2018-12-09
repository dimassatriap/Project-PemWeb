<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		// Create connection
		$conn = new mysqli('localhost','root','', 'skedulindb');
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
    		$post_display = mysqli_real_escape_string($conn, $_POST['displayname']);}
		$username = $this->input->post('name');
		$password = $this->input->post('password');
		$query = "SELECT * FROM person WHERE Person_nama='$username'";
		$row = mysqli_fetch_array($query);
		$rec = $row['displayname'];

		$where = array(
			'Person_nama' => $username,
			'password' => $password,
		);

		$cek = $this->m_login->cek_login("person",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'name' => $username,
				'status' => "login",
				'display' => $rec
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/Home"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function aksi_register(){
		$reg_nama = $this->input->post('reg-nama');
		$reg_user = $this->input->post('reg-user');
		$reg_pass = $this->input->post('reg-pass');
		$data = array(
			'Person_nama' => $reg_user,
			'password' => $reg_pass,
			'displayname'=> $reg_nama
		);
				$this->m_login->input_data("person",$data);
		redirect(base_url('index.php/login'));
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}

?>