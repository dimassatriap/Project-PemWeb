<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
    
class m_register extends CI_Model
{
	private $table2 = "person";

	//attribute person
	public $Person_Id;
	public $Person_nama;
	public $Person_status;
	public $password;
	public $displayname;
	/**
     * @param $data
     * @return string
     */
   
    public function encrypt($data){
        $post = $this->input->post();
        $abc = $post["password"];
        $encData = openssl_encrypt($data, 'DES-EDE3', $this->$abc, OPENSSL_RAW_DATA);
        $encData = base64_encode($encData);
        return $encData;
    }
    /**
     * @param $data
     * @return string
     */
    public function decrypt($data){
        $post = $this->input->post();
        $abc = $post["password"];
        $data = base64_decode($data);
        $decData = openssl_decrypt($data, 'DES-EDE3', $this->$abc, OPENSSL_RAW_DATA);
        return $decData;
    }
	public function addperson(){
        
		$post = $this->input->post();
		$abc = $post["password"];
		$this->displayname = $post["displayname"];
		$this->Person_nama = $post["Person_nama"];
		$this->password = $this->encrypt($post["password"]);
		// $enc = $conn->query ("SELECT DES_ENCRYPT($this->password,'abcdefgh')");
		// $this->password = $conn->query ("SELECT DES_ENCRYPT($abc,'abcdefgh')");

		$this->db->insert($this->table2, $this);
	}

	public function updateperson(){
		$post = $this->input->post();
		$this->Person_Id = $post["id"];
		$this->displayname = $post["upnama"];
		$this->Person_nama = $post["upuser"];
		$this->password = $post["uppass"];

		$this->db->update($this->table2, $this, array('Person_Id' => $post['id']));
	}

	public function getAll(){
        return $this->db->get($this->table2)->result();
    }

    public function getById($username)
    {
        return $this->db->get_where($this->table2, ["Person_nama" => $username])->row();
    }

    public function delete($id) {
        return $this->db->delete($this->table2, array("Person_Id" => $id));
    }

}
?>