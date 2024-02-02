<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
		$this->load->database();
		$this->load->model('Orders_model', 'orders', TRUE);
        $this->load->model('Staff_model', 'staff', TRUE);
        $this->load->model('Login_model', 'login', TRUE);
    }

    public function index()
	{
        $data['all_sample_req'] = $this->orders->allSampleRequestData('SampleRequest');
        $data['sample_count'] = count($data['all_sample_req']);
        
        $data['all_staff'] = $this->staff->getStaffData();
        $data['all_staff'] = count($data['all_staff']);

        $status = 0;
        $data['all_pending_orders'] = $this->orders->getPendingOrders($status);
        $data['all_pending_count'] = count($data['all_pending_orders']);

        $data['all_transit_details'] = $this->orders->getTransitDetails();
        $data['all_transit_count'] = count($data['all_transit_details']);

        $data['all'] = $this->orders->getCustomerData();
        $this->load->view('comman/header');
		$this->load->view('index',$data);
        $this->load->view('comman/footer');
	}
    public function SampleChart()
    {
        $this->load->view('common/header');
        $this->load->view('sample_status_chart');
        $this->load->view('common/footer');
    }
  
    public function addSampleRequestData(){
        $customer_id = $this->input->post('full_name');
        $contact_no = $this->input->post('contact_no');
        $email = $this->input->post('email');
        $sample_ref = $this->input->post('sample_ref');
        $sample_req_date = $this->input->post('sample_req_date');
        $tsp_ref = $this->input->post('tsp_ref');
        $qty = $this->input->post('qty');
        $address = $this->input->post('delivery_address');
        $estimated_dispatch_date = $this->input->post('estimated_dispatch_date');
        $confirmed_dispatch_date = $this->input->post('confirmed_dispatch_date');
        $courier_name = $this->input->post('courier_name');
        $awb = $this->input->post('awb');
        $remarks = $this->input->post('remarks');

        // $sample_request_date = DateTime::createFromFormat('d/m/Y', $sample_req_date);
        // $sample_request_date = $sample_request_date->format('Y-m-d');
        
        // $estimate_dispatch_date = DateTime::createFromFormat('d/m/Y', $estimated_dispatch_date);
        // $estimate_dispatch_date = $estimate_dispatch_date->format('Y-m-d');
        
        // $confirme_dispatch_date = DateTime::createFromFormat('d/m/Y', $confirmed_dispatch_date);
        // $confirme_dispatch_date = $confirme_dispatch_date->format('Y-m-d');
    
    $data = array(
        'customer_id' => $customer_id,
        'contact_no' => $contact_no,
        'email' => $email,
        'sample_ref' => $sample_ref,
        'sample_req_date' => $sample_req_date,
        'tsp_ref' => $tsp_ref,
        'qty' => $qty,
        'address' => $address,
        'estimated_dispatch_date' => $estimated_dispatch_date,
        'confirmed_dispatch_date' => $confirmed_dispatch_date,
        'courier_name' => $courier_name,
        'awb' => $awb,
        'remarks' => $remarks
    );
    // print_r($data);
    $this->orders->insert('sample_request', $data);
   
   
    $check_mail = $this->login->checkGeneralOrderEmail();
    $sample_request_details = $this->orders->sample_request_info($customer_id);

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
    $this->email->subject('request Placed!');
    
    $msg="<!DOCTYPE html>
            <html>
            <head>
                <title></title>
                
            </head>
        <body style='border-top: 10px solid #3fa3df;text-align: center; color:#000 !important;'>
            <div style='text-align: center;padding: 10px; background-color:white;'>
                    <img src='https://topsack.com/image/logo.png' style='width: 25%;vertical-align:middle'>
                </div>
                <div style='background-color: #fff; color:#000 !important; padding: 0% 3%; text-align: center;'>
                    
                    <h3 align='center'>Hello, ".$check_mail['customer_name']." 
                    <br> Your order has been placed.</h3>
                   
                    <p> Your sample reference no is :<strong>  $sample_ref </strong> 
                   <br> Courier Name is : <strong> $courier_name </strong>
                    <br> Your order will dispatch on <strong> $confirmed_dispatch_date</strong></p>
                    <br>
                    <div style='text-align: center;'>
                    <a href='".site_url('CustomerLogin/')."'>
                    <button style='background-color: #3fa3df;border: 1px solid #3fa3df;color: #fff;padding: 10px;'> Track order </button></a>  

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
    $this->session->set_flashdata('success', "Request Submitted Successfully");
    redirect('Home');
//     echo "<script>alert('Request Submitted Successfully');
//     window.location.href = '".site_url('Home')."';
//    </script>";
    }

    public function addGeneralOrderData(){
        
        $count = $this->input->post('count');

        date_default_timezone_set('Asia/Kolkata');
        $customer_id = $this->input->post('full_name');
        $timeDate = date("Y-m-d h:i:s");
        $this->db->query("INSERT INTO `orders` ( `customer_id`, `created_at`) VALUES (?, ?)", array($customer_id, $timeDate));
        
        $order_id = $this->db->insert_id();
            // $order_id = '1';
        for($i = 0; $i <= $count; $i++){

            $shipment_no = $this->input->post('shipment_no'.$i);
            if($shipment_no !== null){
            $contact_no = $this->input->post('contact_no'.$i);
            $email = $this->input->post('customer_email'.$i);
            // $shipment_no = $this->input->post('shipment_no'.$i);
            $po_received_date = $this->input->post('po_received_date'.$i);
            $dispatch_date = $this->input->post('dispatch_date'.$i);
            $remarks = $this->input->post('remarks'.$i);
            $size_fcl = $this->input->post('size_fcl'.$i);
            $my_order_no = $this->input->post('order_no'.$i);
            
            // $po_receive_date = DateTime::createFromFormat('d/m/Y', $po_received_date);

            //     if ($po_receive_date === false) {
            //         echo "Invalid date format for PO Received Date: $po_received_date";
            //     } else {
            //         $po_receive_date = $po_receive_date->format('Y-m-d');
            //     }

            //     $dispatch_date2 = DateTime::createFromFormat('d/m/Y', $dispatch_date);

            //     if ($dispatch_date2 === false) {
            //         echo "Invalid date format for Dispatch Date: $dispatch_date";
            //     } else {
            //         $dispatch_date2 = $dispatch_date2->format('Y-m-d');
            //     }

                $this->db->query("INSERT INTO `general_order`( `shipment_no`, `po_received_data`, `dispatch_data`, `remarks`, `size-fcl`, `order_id`)
                VALUES (  ?, ?, ?, ?, ?, ?)", array( $shipment_no, $po_received_date, $dispatch_date, $remarks, $size_fcl, $order_id));
            
            
             $general_order_id = $this->db->insert_id();
             
            for($j = 0; $j < sizeof($my_order_no); $j++){
               $order_no = $this->input->post('order_no'.$i)[$j];
                $dimension_external = $this->input->post('dimension_external'.$i)[$j];
                $qty = $this->input->post('qty'.$i)[$j];
               $packing = $this->input->post('packing'.$i)[$j];
                $pallets = $this->input->post('pallets'.$i)[$j];
                $bales = $this->input->post('pal_bales'.$i)[$j];
                $shipment_term = $this->input->post('shipment_term'.$i)[$j];
                $currency = $this->input->post('currency'.$i)[$j];
                 $price = $this->input->post('price'.$i)[$j];
                
                $this->db->query("INSERT INTO `general_shipment_order`(`general_order_id`, `order_no`, `dimension_external`, `qty`, `packing`, `pallets`, `bales`, `shipment_term`, `currency`, `price`)
                VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array($general_order_id, $order_no, $dimension_external, $qty, $packing, $pallets, $bales, $shipment_term, $currency, $price));
              
                 }

                    $general_order_details = $this->orders->general_order_info($general_order_id);
                    $shipment_order_details = $this->orders->getShipmentOrder($general_order_id);

                    $check_mail = $this->login->checkGeneralOrderEmail();
                   

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
                    $this->email->subject('Order Placed!');
                    
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
                                  <br> Your order has been placed.</h3>
                                 
                                    <p> Your Order ID is : <strong> $order_id  </strong> <br> Shipment number is : <strong> $shipment_no </strong> 
                                    <br> Your order will dispatch on <strong> $dispatch_date </strong></p>
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
                }
         }
        $this->session->set_flashdata('success', "Order Submitted Successfully");
        redirect('Home');
        echo "<script>alert('Order Submitted Successfully');
        window.location.href = '".site_url('Home')."';
    </script>";
    }


}
?>
  