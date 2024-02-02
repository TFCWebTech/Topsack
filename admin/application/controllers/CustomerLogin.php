<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CustomerLogin extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
		$this->load->model('CustomerModel', 'customer', TRUE);
    }
    public function index()
    {
        // $this->load->view('comman/header');
        $this->load->view('customer/customer_login');
        // $this->load->view('comman/footer');
    }

    public function customerLogin()
	{
		$email = $this->input->post('email');            
        $password = $this->input->post('password');

        $enc_pass = md5($password);

		if($email != '' && $password != '' )
        {
        $check = $this->customer->checkUser($email, $enc_pass);
        
            if($check)
            {
                $customer_id  = $check['customer_id'];
                if ($check['status'] == 'Active') {
                    $Start_session = array (
                        'customer_id' => $customer_id 
                        
                    );
                    // print_r($Start_session);
                    $this->session->set_userdata($Start_session);
                    redirect('CustomerOrder');
                } else {
                    $this->session->set_flashdata('error','Your account is suspended.');
                    redirect('CustomerLogin');
                }
            }
            else
            {
                $this->session->set_flashdata('error','Invalid Username/Email and password !..');
                redirect('CustomerLogin');
            }
        
	    }
	
    }

    public function newPassword()
    {
        $token = $this->input->post('token');
        $customer_id = $this->input->post('customer_id');
        $password1 = $this->input->post('password1');
        $confirm_password2 = $this->input->post('password2');

        $customer_password = md5($password1);
        $confirm_password = md5($confirm_password2);

        if($customer_password!=$confirm_password)
        {
            $this->session->set_flashdata('error', 'Passwords did not match, Please try again!!!');
            redirect('CustomerLogin/resetPassword/'.$customer_id.'/'.$token);
        }
        else
        {
            $data = array(
                'customer_password' => $customer_password,
                'token' => '',
            );
			// print_r($data);
			// echo $login_id;
            $this->customer->update('customer', 'customer_id', $customer_id, $data);
            $this->session->set_flashdata('success', 'Password Updated Successfully');
            redirect('CustomerLogin');
        }
    }

    public function resetPassword($customer_id, $token)
    {
        $data['check_token'] = $this->customer->checkLoginToken($customer_id, $token); 
		$data['customer_id'] = $customer_id;
		$data['token']=$token;

        $this->load->view('customer/customer_reset_password', $data);
    }

    public function forgot_pass()
    {
        $email = $this->input->post('send_email');
        $check_mail = $this->customer->checkEmail($email);
		print_r($check_mail);
        if (empty($check_mail)) {
            $this->session->set_flashdata('error', "Invalid email");
            // redirect('Login');
        } else {
            $customer_id  = $check_mail['customer_id '];
            $customer_password = $check_mail['customer_password'];

            //Random String
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            
            for ($i = 0; $i < 10; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }

            $updatedata = array(
                'token' => $randomString,
            );
            $this->customer->update('customer', 'customer_id', $customer_id, $updatedata);

            $mail_data['send_email'] = $check_mail['send_email'];
            $mail_data['customer_id'] = $check_mail['customer_id'];
            $mail_data['token'] = $randomString;

            $config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'master.herosite.pro',
				'_smtp_auth' => TRUE,
				'smtp_port' => 465,
				'smtp_user' => 'admin@pressbro.com',
				'smtp_pass' => 'Vajra@5566',
				'smtp_crypto'   => 'ssl',
				'mailtype' => 'html',
				'charset' => 'utf-8'
			);
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->set_mailtype("html");
            $this->email->from('admin@pressbro.com', 'Topsack-Packaging');
            $this->email->to($email);
            $this->email->subject('Forgot Password!');
            
            $msg="<!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                    </head>
                   <body style='border-top: 10px solid #3fa3df;text-align: center; color:#000 !important;'>
                       <div style='text-align: center;padding: 10px; background-color:white;'>
                            <img src='https://topsack.com/image/logo.png' style='width: 25%;vertical-align:middle'>
                        </div>
                        <div style='background-color: #fff; color:#000 !important; padding: 0% 10%; text-align: center;'>
                            <h1 align='center'>Reset Password</h1>
                            <h3 align='center'>Hello, ".$check_mail['customer_name']."</h3>
                            <p style='color: #757272; text-align:'center' >To reset your password please click on the below button.</p>
                            <div style='text-align: center;'>
                                <a href='".site_url('CustomerLogin/resetPassword/'.$mail_data['customer_id'].'/'.$mail_data['token'])."'><button style='background-color: #3fa3df;border: 1px solid #3fa3df;color: #fff;padding: 10px;'> Reset Password</button></a>  
                            </div>
                        </div>
                        <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                    </body>.
                    </html>";
            $this->email->message($msg);
            
            $result = $this->email->send();
            
            if($result) {
                $this->session->set_flashdata('success','Email is Sent');
            } else {
                $this->session->set_flashdata('error','Email is not sent');
            }
        }
        redirect('CustomerLogin');
    }

    public function Logout()
 	{
 		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        redirect('CustomerLogin');
 	}

}