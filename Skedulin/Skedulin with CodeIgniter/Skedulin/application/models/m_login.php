<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where("person",$where);
	}

	function input_data($table,$data){
		$this->db->insert($table,$data);
	}	
}

?>