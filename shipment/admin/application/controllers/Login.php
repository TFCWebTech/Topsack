<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
	{
        // $this->load->view('common/header');
		$this->load->view('login');
        // $this->load->view('common/footer');
	}

	public function userLogin()
	{
		$type = $this->input->post('type');
		$Start_session = array (
            'type'    => $type
        );
        $this->session->set_userdata($Start_session);
        if($type == 'Shipment') {
        	redirect('TransitDetais');
        } else {
        	redirect('Home');
        }
        
	}
 	
 	public function Logout()
 	{
 		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        redirect('Login');
 	}

}
?>