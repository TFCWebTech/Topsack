<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
		$this->load->database();
		$this->load->model('Login_model', 'login', TRUE);
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
		$email = $this->input->post('email');            
        $password = $this->input->post('password');

        $enc_pass = md5($password);

		if($email != '' && $password != '' && $type != '' )
        {
        $check = $this->login->checkUser($email, $enc_pass, $type);
            
			
		if($check)
		{
            $login_id = $check['login_id'];
            if ($check['status'] == 'Active') {
                $Start_session = array (
                    'type'    => $type,
                    'login_id' => $login_id
                    
                );
                // print_r($Start_session);
                $this->session->set_userdata($Start_session);
                
                if($type == 'Logistic/Shipment') {
                redirect('TransitDetais');
                } else {
                    redirect('Home');
                }
            } else {
                $this->session->set_flashdata('error','Your account is suspended.');
			    redirect('Login');
            }
			
		}
		else
		{
			$this->session->set_flashdata('error','Invalid Username/Email and password !..');
			redirect('Login');
		}
        
	}
	
}

	public function resetPassword($login_id, $token)
    {
        $data['check_token'] = $this->login->checkLoginToken($login_id, $token); 
		$data['login_id'] = $login_id;
		$data['token']=$token;
        $this->load->view('reset_password', $data);
    }
    public function generatePassword($login_id, $token)
    {
        $data['check_token'] = $this->login->checkLoginToken($login_id, $token); 
		$data['login_id'] = $login_id;
		$data['token']=$token;
        $this->load->view('generate_password', $data);
    }

    public function generateCustomerPassword($customer_id, $token)
    {
        $data['check_token'] = $this->login->checkCustomerToken($customer_id, $token); 
		$data['customer_id'] = $customer_id;
		$data['token']=$token;
        $this->load->view('generate_customer_password', $data);
    }

	public function newPassword()
    {
        $token = $this->input->post('token');
        $login_id = $this->input->post('login_id');
        $password1 = $this->input->post('password1');
        $confirm_password2 = $this->input->post('password2');

        $password = md5($password1);
        $confirm_password = md5($confirm_password2);

        if($password!=$confirm_password)
        {
            $this->session->set_flashdata('error', 'Passwords did not match, Please try again!!!');
            redirect('Login/generate_password/'.$login_id.'/'.$token);
        }
        else
        {
            $data = array(
                'password' => $password,
                'token' => ''
            );
			// print_r($data);
			// echo $login_id;
            $this->login->update('login', 'login_id', $login_id, $data);
            $this->session->set_flashdata('success', 'Password Updated Successfully');
            redirect('Login');
        }
    }


    public function newPasswordGenerate()
    {
        $token = $this->input->post('token');
        $login_id = $this->input->post('login_id');
        $password1 = $this->input->post('password1');
        $confirm_password2 = $this->input->post('password2');

        $password = md5($password1);
        $confirm_password = md5($confirm_password2);

        if($password!=$confirm_password)
        {
            $this->session->set_flashdata('error', 'Passwords did not match, Please try again!!!');
            redirect('Login/generatePassword/'.$login_id.'/'.$token);
        }
        else
        {
            $data = array(
                'password' => $password,
                'token' => ''
            );
			// print_r($data);
			// echo $login_id;
            $this->login->update('login', 'login_id', $login_id, $data);
            $this->session->set_flashdata('success', 'Password generated Successfully');
            redirect('Login');
        }
    }

    public function customerPasswordGenerate()
    {
        $token = $this->input->post('token');
        $customer_id = $this->input->post('customer_id');
        $password1 = $this->input->post('password1');
        $confirm_password2 = $this->input->post('password2');

        $password = md5($password1);
        $confirm_password = md5($confirm_password2);

        if($password!=$confirm_password)
        {
            $this->session->set_flashdata('error', 'Passwords did not match, Please try again!!!');
            redirect('Login/generateCustomerPassword/'.$customer_id.'/'.$token);
        }
        else
        {
            $data = array(
                'customer_password' => $password,
                'token' => ''
            );
			// print_r($data);
			// echo $login_id;
            $this->login->updateCustomer('customer', 'customer_id', $customer_id, $data);
            $this->session->set_flashdata('success', 'Password generated Successfully');
            redirect('CustomerLogin');
        }
    }

	public function forgot_pass()
    {
        $email = $this->input->post('send_email');
        $check_mail = $this->login->checkEmail($email);
		print_r($check_mail);
        if (empty($check_mail)) {
            $this->session->set_flashdata('error', "Invalid email");
            // redirect('Login');
        } else {
            $login_id = $check_mail['login_id'];
            $password = $check_mail['password'];

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
            $this->login->update('login', 'login_id', $login_id, $updatedata);

            $mail_data['email'] = $check_mail['email'];
            $mail_data['login_id'] = $check_mail['login_id'];
            $mail_data['type'] = $check_mail['type'];
            $mail_data['token'] = $randomString;
            // redirect('Login');
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.mailtrap.io',
                '_smtp_auth' => TRUE,
                'smtp_port' => 587, // or 465 for SSL
                'smtp_user' => 'cce4c0db82ac7f',
                'smtp_pass' => 'de619eae625e82',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n", // Add this line
                'smtp_debug' => TRUE
            );
            
            $this->load->library('email', $config);
            $this->email->set_mailtype("html");
            $this->email->from('admin@topsack.com', 'Topsack-Packaging');
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
                            <h3 align='center'>Hello, ".$check_mail['type']."</h3>
                            <p style='color: #757272; text-align:'center' >To reset your password please click on the below button.</p>
                            <div style='text-align: center;'>
                                <a href='".site_url('Login/resetPassword/'.$mail_data['login_id'].'/'.$mail_data['token'])."'><button style='background-color: #3fa3df;border: 1px solid #3fa3df;color: #fff;padding: 10px;'> Reset Password</button></a>  
                            </div>
                        </div>
                        <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                    </body>.
                    </html>";
            $this->email->message($msg);
            echo $this->email->print_debugger();
            $result = $this->email->send();
            if($this->email->send())
                {
                echo "Success! - An email has been sent to ".$to;
                }
                else
                { 
                show_error($this->email->print_debugger());
                return false;
                }
            // if($result) {
            //     $this->session->set_flashdata('success','Email is Sent');
            // } else {
            //     $this->session->set_flashdata('error','Email is not sent');
            // }
        }
        // redirect('Login');
    }
 	
 	public function Logout()
 	{
 		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        redirect('Login');
 	}

}
?>