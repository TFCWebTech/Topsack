<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ManageStaff extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
		$this->load->model('Staff_model', 'staff', TRUE);
        $this->load->model('Login_model', 'login', TRUE);
    }
    public function index()
    {
        $data['all_staff'] = $this->staff->getStaffData();
        // $length = count($data);
        $this->load->view('comman/header');
        $this->load->view('manage_staff', $data);
        $this->load->view('comman/footer');
    }

    public function manageCustomer()
    {
        $data['all_customer'] = $this->staff->getCustomerData();
        $this->load->view('comman/header');
        $this->load->view('manage_customer', $data);
        $this->load->view('comman/footer');
    }
    
    public function addCustomerEmailCheck(){
        $customer_email = $this->input->post('searchEmail');
        $data['customer_email'] = $customer_email;
        $check_mail1 = $this->login->checkCustomerEmail($customer_email);

        if ($check_mail1) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function addStaffEmailCheck(){
        $searchEmail = $this->input->post('searchEmail');
        $data['searchEmail'] = $searchEmail;
        $check_mail1 = $this->login->checkEmailAddStaff($searchEmail);

        if ($check_mail1) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function editStaffEmailCheck(){
        $searchEmail = $this->input->post('searchEmail');
        
        $loginID = $this->input->post('loginID');
        $data['searchEmail'] = $searchEmail;
        $data['loginID'] = $loginID;
        
        $check_mail1 = $this->login->checkEmaileditStaff($searchEmail, $loginID);

        if ($check_mail1) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function editCustomerEmailCheck(){
        $searchEmail = $this->input->post('searchEmail');
        
        $customerId = $this->input->post('customerId');
        $data['searchEmail'] = $searchEmail;
        $data['customerId'] = $customerId;
        
        $check_mail1 = $this->login->checkEmaileditCustomer($searchEmail, $customerId);

        if ($check_mail1) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function addStaff()
    {
        
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $contact_no = $this->input->post('contact_no');
        $data = array(
            'name' => $name,
            'email' => $email,
            'role' => $role,
            'contact_no' => $contact_no,
        );
        // print_r($data);
        $this->db->query("INSERT INTO `login`( `name`, `email`, `type` ,`contact_no`, `status` ) VALUES (?, ?, ?, ?, ?)", array($name,
         $email, $role, $contact_no, "Active"));
         $this->session->set_flashdata('success', "Staff Add Successfully");
            // redirect('ManageStaff');
        //  echo "<script>alert('Staff Add Successfully');
        //  window.location.href = '".site_url('ManageStaff')."';
        // </script>";
    

        $check_mail = $this->login->checkEmail($email);
        if (empty($check_mail)) {
            $this->session->set_flashdata('error', "Invalid email");
        } else {
            $login_id = $check_mail['login_id'];

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
            $this->email->subject('Generate Password!');
            
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
                            <h1 align='center'>Generate Password</h1>
                            <h3 align='center'>Hello, ".$check_mail['name']."</h3>
                            <p style='color: #757272; text-align:'center' >To Generate your password please click on the below button.</p>
                            <div style='text-align: center;'>
                                <a href='".site_url('Login/generatePassword/'.$mail_data['login_id'].'/'.$mail_data['token'])."'><button style='background-color: #3fa3df;border: 1px solid #3fa3df;color: #fff;padding: 10px;'> Generate Password</button></a>  
                            </div>
                        </div>
                        <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                    </body>.
                    </html>";
            $this->email->message($msg);
            
            $result = $this->email->send();
            
            if($result) {
                $this->session->set_flashdata('success','Email Is Sent');
            } else {
                $this->session->set_flashdata('error','Email is not sent');
            }
        }
        redirect('ManageStaff');
    
    }

    public function editStaff()
    {
        $login_id = $this->input->post('update_staff_id');
        $name = $this->input->post('update_name');
        $email = $this->input->post('update_email');
        $role = $this->input->post('update_role');
        $contact_no = $this->input->post('update_contact_no');
        $status = $this->input->post('update_status');
        $data = array(
            'login_id' => $login_id,
            'name' => $name,
            'email' => $email,
            'role' => $role,
            'contact_no' => $contact_no,
            'status' => $status
        );
        // print_r($data);
        $this->db->query("UPDATE `login` SET `name`= ?, `email`= ?, `contact_no`= ?, `type`= ?, `status`= ? WHERE `login_id`= ?", array($name, $email, $contact_no, $role, $status, $login_id));
        $this->session->set_flashdata('success', "Staff edit Successfully");
            redirect('ManageStaff');
        //  echo "<script>alert('Staff edit Successfully');
        //  window.location.href = '".site_url('ManageStaff')."';
        // </script>";
    }


    public function editCustomer()
    {
        $customer_id = $this->input->post('update_customer_id');
        $customer_name = $this->input->post('update_name');
        $customer_email = $this->input->post('update_email');
        $customer_contact = $this->input->post('update_contact_no');
        $status = $this->input->post('update_status');
        // $data = array(
        //     'customer_id' => $customer_id,
        //     'customer_name' => $customer_name,
        //     'email' => $email,
        //     'role' => $role,
        //     'status' => $status
        // );
        // print_r($data);
        $this->db->query("UPDATE `customer` SET `customer_name`= ?, `customer_email`= ?, `customer_contact`= ?, `status`= ? WHERE `customer_id`= ?", array($customer_name, $customer_email, $customer_contact, $status, $customer_id));
        //  echo "<script>alert('Update Customer Successfully');
        //  window.location.href = '".site_url('ManageStaff/manageCustomer')."';
        // </script>";
        $this->session->set_flashdata('success', "Update Customer Successfully");
            redirect('ManageStaff/manageCustomer');
    }

    public function changePassword(){
        
        $login_id = $this->input->post('reset_login_id');
        $email = $this->input->post('resetPassMail');
        $reset_password = $this->input->post('reset_password');

        $password = md5($reset_password);
        
        $this->db->query("UPDATE `login` SET `password`= ? WHERE `login_id`= ?", array($password, $login_id));
    //     echo "<script>alert('Password Changed Successfully');
    //     window.location.href = '".site_url('ManageStaff')."';
    //    </script>";
       $this->session->set_flashdata('success', "Password Changed Successfully");
            // redirect('ManageStaff');


    $check_mail = $this->login->checkEmail($email);
    // print_r($check_mail);
    if (empty($check_mail)) {
        $this->session->set_flashdata('error', "Invalid email");
    } else {
        $login_id = $check_mail['login_id'];
        // $password = $check_mail['password'];

        $mail_data['email'] = $check_mail['email'];
        

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
        $this->email->subject('Your Password!');
        
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
                        <h1 align='center'>Your Password</h1>
                        <h3 align='center'>Hello, ".$check_mail['name']." here is the password for your account.</h3>
                        <p> Password: $reset_password </p>
                        <p>Please ensure that you keep this information secure and do not share it with anyone else </p>
                    </div>
                    <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                </body>.
                </html>";
        $this->email->message($msg);
        
        $result = $this->email->send();
        
        if($result) {
            $this->session->set_flashdata('success','Email Is Sended');
        } else {
            $this->session->set_flashdata('error','Email is not sended');
        }
    }
    redirect('ManageStaff');

    }

    public function changeCustomerPassword(){
        
        $customer_id = $this->input->post('reset_customer_id');
        $customer_email = $this->input->post('resetPassMail');
        $customer_password1 = $this->input->post('reset_password');

        $customer_password = md5($customer_password1);
        
        $this->db->query("UPDATE `customer` SET `customer_password`= ? WHERE `customer_id`= ?", array($customer_password, $customer_id));
    //     echo "<script>alert('Password Changed Successfully');
    //     window.location.href = '".site_url('ManageStaff/manageCustomer')."';
    //    </script>";

        $this->session->set_flashdata('success', "Password Changed Successfully");

    $check_mail = $this->login->checkCustomerEmail($customer_email);
    // print_r($check_mail);
    if (empty($check_mail)) {
        $this->session->set_flashdata('error', "Invalid email");
    } else {
        $customer_id = $check_mail['customer_id'];
        // $password = $check_mail['password'];

        $mail_data['customer_email'] = $check_mail['customer_email'];
        

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
        $this->email->to($customer_email);
        $this->email->subject('Your Password!');
        
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
                        <h1 align='center'>Your Password</h1>
                        <h3 align='center'>Hello, ".$check_mail['customer_name']." here is the password for your account.</h3>
                        <p> Password: $customer_password1 </p>
                        <p>Please ensure that you keep this information secure and do not share it with anyone else </p>
                    </div>
                    <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                </body>.
                </html>";
        $this->email->message($msg);
        
        $result = $this->email->send();
        
        if($result) {
            $this->session->set_flashdata('success','Email Is Sended');
        } else {
            $this->session->set_flashdata('error','Email is not sended');
        }
    }
    redirect('ManageStaff/manageCustomer');

    }


    public function addCustomer()
    {
        $customer_name = $this->input->post('name');
        $customer_email = $this->input->post('email');
        $customer_contact = $this->input->post('contact_no');
        $data = array(
            'customer_name' => $customer_name,
            'customer_email' => $customer_email,
            'customer_contact' => $customer_contact,
        );
        $this->db->query("INSERT INTO `customer`( `customer_name`, `customer_email`, `customer_contact`, `status` ) VALUES (?, ?, ?, ?)", array($customer_name,
         $customer_email, $customer_contact, "Active"));
        //  echo "<script>alert('Customer Add Successfully');
        //  window.location.href = '".site_url('ManageStaff')."';
        // </script>";
        
    $this->session->set_flashdata('success', "Customer Add Successfully");
    // redirect('ManageStaff');
        

        $check_mail = $this->login->checkCustomerEmail($customer_email);
		// print_r($check_mail);
        if (empty($check_mail)) {
            $this->session->set_flashdata('error', "Invalid email");
        } else {
            $customer_id = $check_mail['customer_id'];
            // $password = $check_mail['password'];

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
            $this->login->updateCustomer('customer', 'customer_id', $customer_id, $updatedata);

            $mail_data['customer_email'] = $check_mail['customer_email'];
            $mail_data['customer_id'] = $check_mail['customer_id'];
            // $mail_data['type'] = $check_mail['type'];
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
            $this->email->to($customer_email);
            $this->email->subject('Generate Password!');
            
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
                            <h1 align='center'>Generate Password</h1>
                            <h3 align='center'>Hello, ".$check_mail['customer_name']."</h3>
                            <p style='color: #757272; text-align:'center' >To Generate your password please click on the below button.</p>
                            <div style='text-align: center;'>
                                <a href='".site_url('Login/generateCustomerPassword/'.$mail_data['customer_id'].'/'.$mail_data['token'])."'><button style='background-color: #3fa3df;border: 1px solid #3fa3df;color: #fff;padding: 10px;'> Generate Password</button></a>  
                            </div>
                        </div>
                        <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                    </body>.
                    </html>";
            $this->email->message($msg);
            
            $result = $this->email->send();
            
            if($result) {
                $this->session->set_flashdata('success','Email Is Sent');
            } else {
                $this->session->set_flashdata('error','Email is not sent');
            }
        }
        redirect('ManageStaff/manageCustomer');
    }
}
?>