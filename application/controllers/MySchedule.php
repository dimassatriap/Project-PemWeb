<?php
class MySchedule extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_event");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}
 
	function index(){
		$data["events"] = $this->m_event->getAll();
		$this->load->view('v_MySchedule', $data);
	}

	public function addEvent(){
		$event = $this->m_event;

		$event->save();
		$this->session->set_flashdata('success', 'Event disimpan');

		redirect(site_url('MySchedule'));
	}

	public function edit($id=null)
	{
		$event = $this->m_event;

		$event->update();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		
		redirect(site_url('MySchedule'));

	}

	public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->m_event->delete($id)) {
            redirect(site_url('MySchedule'));
        }
    }
}
?>