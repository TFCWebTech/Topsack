<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CustomerOrder extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
		$this->load->model('CustomerModel', 'customer', TRUE);
    }

    public function index()
    {
        // print_r($this->session->userdata);   
        $customer_id = $this->session->userdata('customer_id');        
        // $data['getOrder'] = $this->customer->getOrderData($customer_id);
        $data['order_data'] = $this->customer->getOrders($customer_id);
        // $data['order_data'] = $this->customer->getGeneralOrderData();
        
        // $data['order_data'] = $this->customer->getGeneralOrderData();
        $this->load->view('customer/customer_order',$data);
    }
    public function CustomerOrderDetails($order_id)
    {
        $data['order_id'] = $order_id;
        
        $data['order_data'] = $this->customer->getGeneralOrderData();
        $this->load->view('customer/customer_order_details',$data);
    }

    public function customerAcc(){
        $customer_id = $this->session->userdata('customer_id'); 
        $data['all'] = $this->customer->getManageAccData($customer_id);
        $this->load->view('customer/cutomer_acc',$data);
    }

    public function SampleOrder()
    {
        $customer_id = $this->session->userdata('customer_id'); 
        $data['all_sample_req'] = $this->customer->allSampleRequestData($customer_id);

        $this->load->view('customer/customer_sample_orders',$data);
    }

    public function updatePassword(){
        $password = $this->input->post('c_password');
        $customer_id = $this->input->post('update_customer_id');
        $password2 = $this->input->post('confirm_password');

        $check = $this->customer->getManageAccData($customer_id, md5($password));
        if($check){
            $enc_password = md5($password2);
            $data = array(
                'customer_id' => $customer_id,
                'password2' => $password2
            );
            // print_r($data);
            $this->db->query("UPDATE `customer` SET `customer_password`= ?  WHERE `customer_id`= ? ", array($enc_password, $customer_id));
            $this->session->set_flashdata('success', "Password Update Successfully");
            redirect('CustomerOrder/customerAcc');
        }else {
   
             $this->session->set_flashdata('error', "error");
            redirect('CustomerOrder/customerAcc');

         } 
    }

    public function updateMail(){

        $customer_id = $this->input->post('customer_id');
        $email = $this->input->post('email');

        $check = $this->customer->customerData($customer_id, $email);
        // print_r($check);
        if($check){
             $this->session->set_flashdata('error', "error");
             redirect('CustomerOrder/customerAcc');
        }else {
            $data = array(
                'customer_id' => $customer_id,
                'email' => $email
            );
        // print_r($data);
        $this->db->query("UPDATE `customer` SET `customer_email`= ?  WHERE `customer_id`= ?", array($email, $customer_id));
        $this->session->set_flashdata('success', "Email Update Successfully");
        redirect('CustomerOrder/customerAcc');
       
         }           
    }

    public function searchData()
    {
        $customer_id = $this->session->userdata('customer_id');
        $searchOrderID = $this->input->post('searchOrderID');
        $data['searchOrderID'] = $searchOrderID;
        // $data['order_data'] = $this->orders->getGeneralOrderData();
        if($searchOrderID){
            $data['order_data'] = $this->customer->getSpecificOrderData($searchOrderID , $customer_id);
        }else {
            // echo '<h5 class="text-center mt-2">No Record Found!</h5>';
            $data['order_data'] = $this->customer->getCusGeneralOrderData($customer_id);
        }
        $this->load->view('customer/customer_filterd_orders',$data);
    }
    public function UpdateDispatchDate()
    {
        $input_order_id = $this->input->post('input_order_id'); 
        $general_order_id = $this->input->post('general_order_id');
        $dispatch_date = $this->input->post('dispatch_date'); 
        // echo $dispatch_date;
        // echo $general_order_id;
     
        $this->db->query("UPDATE `general_order` SET `new_dispatch_date`= ? WHERE `general_order_id`= ?", array($dispatch_date,  $general_order_id));
        $this->session->set_flashdata('success', "Dispatch Date Updated successfully");
        echo "<script> window.location.href = '".site_url('CustomerOrder/CustomerOrderDetails/'.$input_order_id)."';
        </script>";
    }



}