<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class m_register extends CI_Model
{
	
	private $table2 = "person";

	//attribute person
	public $Person_id;
	public $Person_nama;
	public $person_status;
	public $password;
	public $displayname;

	public function addperson(){
		$post = $this->input->post();
		$this->displayname = $post["reg-nama"];
		$this->Person_nama = $post["reg-user"];
		$this->password = $post["reg-pass"];

		$this->db->insert($this->table2, $this);
	}
}
?>