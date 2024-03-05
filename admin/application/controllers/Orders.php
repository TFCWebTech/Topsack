<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orders extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
		$this->load->database();
		$this->load->model('Orders_model', 'orders', TRUE);
        $this->load->model('Login_model', 'login', TRUE);
    }
    public function index()
    {
       
        $data['order_data'] = $this->orders->getGeneralOrderData();
        $this->load->view('comman/header');
        $this->load->view('all_orders',$data);  
        $this->load->view('comman/footer');
    }

    public function searchData()
    {
        $searchOrderID = $this->input->post('searchOrderID');
        $data['searchOrderID'] = $searchOrderID;

        $search_value = $this->input->post('search_value');
        $data['search_value'] = $search_value;
        
        // $data['order_data'] = $this->orders->getGeneralOrderData();
        if($searchOrderID){
            $data['order_data'] = $this->orders->getSpecificOrderData($searchOrderID , $search_value);
        }else {
            $data['order_data'] = $this->orders->getGeneralOrderData();
        }
        $this->load->view('filterd_orders',$data);
    }
    

    // public function searchComData()
    // {
    //     $searchOrderID = $this->input->post('searchOrderID');
    //     $data['searchOrderID'] = $searchOrderID;
    //     // $data['order_data'] = $this->orders->getGeneralOrderData();
    //     if($searchOrderID){
    //         $data['order_data'] = $this->orders->getspecificCompOrderData($searchOrderID);
    //     }else {
    //         $data['order_data'] = $this->orders->getCompOrderData();
    //     }
    //     $this->load->view('filterd_orders',$data);
    // }
    public function searchComData()
    {
        $searchOrderID = $this->input->post('searchOrderID');
        $data['searchOrderID'] = $searchOrderID;

        $search_value = $this->input->post('search_value');
        $data['search_value'] = $search_value;
        
        // $data['order_data'] = $this->orders->getGeneralOrderData();
        if($searchOrderID){
            $data['order_data'] = $this->orders->getspecificCompOrderData($searchOrderID , $search_value);
        }else {
            $data['order_data'] = $this->orders->getCompOrderData();
        }
        $this->load->view('filterd_orders',$data);
    }

    public function Completed()
    {
        $data['order_data'] = $this->orders->getGeneralOrderData();
        $this->load->view('comman/header');
        $this->load->view('completed_orders',$data);
        $this->load->view('comman/footer');
    }

    public function Sample()
    {
        $data['all_sample_req'] = $this->orders->allSampleRequestData();

        $this->load->view('comman/header');
        $this->load->view('sample_orders',$data);
        $this->load->view('comman/footer');
    }
    public function SampleOrders()
    {
        $this->load->view('comman/header');
        $this->load->view('sample_order_details');
        $this->load->view('comman/footer');
    }
    public function dispatchOrder()
    {
        $url = $this->input->post('re_url');
        $confirm_dis_order = $this->input->post('confirm_dis_order');
        $order_id = $this->input->post('order_id');
        $C_email = $this->input->post('C_email');
        $shipment_no = $this->input->post('shipment_no');
        $dispatch_data = $this->input->post('dispatch_data');

        $this->db->query("UPDATE `orders` SET `order_status`= ? WHERE `order_id`= ?", array($confirm_dis_order, $order_id));
        $this->session->set_flashdata('success', "order update successfully");


        $check_mail = $this->login->checkGeneralOrderEmail($order_id);
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
        $this->email->to($C_email);
        $this->email->subject('Order Dispatch!');
        
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
                        <h3 align='center'>Hello, ".$check_mail['customer_name']." 
                      <br> Your order has been dispatch.</h3>
                        <p> Shipment number is : <strong> $shipment_no </strong> 
                       
                        <br>
                        <div style='text-align: center;'>
                        <a href='".site_url('CustomerLogin/')."'>
                        <button style='background-color: #3fa3df;border: 1px solid #3fa3df;color: #fff;padding: 10px;'> Track order </button></a>  
                    </div>
                    </div>
                    <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                </body>.
                </html>";
        $this->email->message($msg);
        
        $result = $this->email->send();
        
        if($result) {
            $this->session->set_flashdata('success','Email is send');
        } else {
            $this->session->set_flashdata('error','Email is not send');
        }
        redirect($url);
    }

    public function completedOrder()
    {
        $url = $this->input->post('re_url2');
        $confirm_complete_order = $this->input->post('confirm_complete_order');
        $order_id2 = $this->input->post('order_id2');
        $C_email2 = $this->input->post('C_email2');
        $shipment_no2 = $this->input->post('shipment_no2');
        $dispatch_data2 = $this->input->post('dispatch_data2');

        $this->db->query("UPDATE `orders` SET `order_status`= ? WHERE `order_id`= ?", array($confirm_complete_order, $order_id2));
       
        $this->session->set_flashdata('success', "order update successfully");

        $check_mail = $this->login->checkGeneralOrderEmail($order_id2);
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
        $this->email->to($C_email2);
        $this->email->subject('Order Completed!');
        
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
                        <h3 align='center'>Hello, ".$check_mail['customer_name']." 
                      <br> Your order has been Completed.</h3>
                        <p> Shipment number is : <strong> $shipment_no2 </strong> 
                        
                        <br>
                        <div style='text-align: center;'>
                        <a href='".site_url('CustomerLogin/')."'>
                        <button style='background-color: #3fa3df;border: 1px solid #3fa3df;color: #fff;padding: 10px;'> Track order </button></a>  
                    </div>
                    </div>
                    <p style='color: gray;padding: 10px;'>If you didn't make this request, ignore this email.</p>
                </body>.
                </html>";
        $this->email->message($msg);
        
        $result = $this->email->send();
        
        if($result) {
            $this->session->set_flashdata('success','Email is send');
        } else {
            $this->session->set_flashdata('error','Email is not send');
        }
    redirect($url);
    }

}
?>