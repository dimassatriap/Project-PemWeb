<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class m_event extends CI_Model
{
	
	private $table = "event";

	//attribute event
	public $Event_id;
	public $Event_nama;
	public $Event_tanggal;
	public $Event_start;
	public $Event_stop;

	public function save()
	{
		$post = $this->input->post();
		$this->Event_id = uniqid();
		$this->Event_nama = $post["Event_nama"];
		$this->Event_tanggal = $post["Event_tanggal"];
		$this->Event_start = $post["Event_start"];
		$this->Event_stop = $post["Event_stop"];

		$this->db->insert($this->table, $this); 
	}

}
 ?>