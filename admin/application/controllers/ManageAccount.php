<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ManageAccount extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
		$this->load->model('Staff_model', 'staff', TRUE);
    }
    public function index()
    {
        $id = $this->session->userdata('login_id');
        $data['all'] = $this->staff->getManageAccData($id);
        $this->load->view('comman/header');
        $this->load->view('manage_acc',$data);
        $this->load->view('comman/footer');
    }

    public function updateMail(){

        $login_id = $this->input->post('login_id');
        $email = $this->input->post('email');

        $check = $this->staff->userData($login_id, $email);
        // print_r($check);
        if($check){
            echo " <script>
            alert('error');
             window.location.href = '".site_url('ManageAccount')."';
             </script> "; 

        }else {
         $data = array(
            'login_id' => $login_id,
			'email' => $email
		);
        // print_r($data);
        $this->db->query("UPDATE `login` SET `email`= ?  WHERE `login_id`= ?", array($email, $login_id));
        $this->session->set_flashdata('success', "Email Update Successfully");
        redirect('ManageAccount');
        //  echo "<script>alert('Email Update Successfully');
        //  window.location.href = '".site_url('ManageAccount')."';
        // </script>";
         }           
    }

    public function updatePassword(){
        $password = $this->input->post('c_password');
        $login_id = $this->input->post('update_login_id');
        $password2 = $this->input->post('confirm_password');

        $check = $this->staff->checkPassword($login_id, md5($password));
        if($check){
            $enc_password = md5($password2);
            $data = array(
                'login_id' => $login_id,
                'password2' => $password2
            );
            // print_r($data);
            $this->db->query("UPDATE `login` SET `password`= ?  WHERE `login_id`= ?", array($enc_password, $login_id));
            //  echo "<script>alert('Password Update Successfully');
            //  window.location.href = '".site_url('ManageAccount')."';
            // </script>";
            $this->session->set_flashdata('success', "Password Update Successfully");
            redirect('ManageAccount');
        }else {
   
            // echo " <script>
            // alert('error');
            //  window.location.href = '".site_url('ManageAccount')."';
            //  </script> "; 
             $this->session->set_flashdata('error', "error");
            redirect('ManageAccount');

         } 
    }
}
?>