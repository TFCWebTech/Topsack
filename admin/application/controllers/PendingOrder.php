<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PendingOrder extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
		$this->load->model('Orders_model', 'orders', TRUE);
    }
    // public function index()
    // {
    //     $this->load->view('comman/header');
    //     $this->load->view('pending_order');
    //     $this->load->view('comman/footer');
      
    // }

    public function index()
    {
        
        $data['order_data'] = $this->orders->getGeneralOrderData();
        $this->load->view('comman/header');
        $this->load->view('all_orders',$data);
        $this->load->view('comman/footer');

    }

    public function orderDetails($order_id)
    {
        $data['order_id'] = $order_id;
        
        $data['order_data'] = $this->orders->getGeneralOrderData();
        $this->load->view('comman/header');
        $this->load->view('order_details',$data);
        $this->load->view('comman/footer');
    }

    public function addOrderShippingDetails()
    {
        $input_order_id = $this->input->post('input_order_id'); 
        $general_order_id = $this->input->post('general_order_id');
        $tsp_invoice_no = $this->input->post('tsp_invoice_no');
        $invoice_date = $this->input->post('invoice_date');
        $container_no = $this->input->post('container_no');
        $shipping_line = $this->input->post('shipping_line');
        $port_of_loading = $this->input->post('port_of_loading');
        $indian_scheduled_date = $this->input->post('indian_scheduled_date');
        $indian_actual_date = $this->input->post('indian_actual_date');
        $mother_port = $this->input->post('mother_port');
        $mother_scheduled_date = $this->input->post('mother_scheduled_date');
        $mother_actual_date = $this->input->post('mother_actual_date');
        $port_of_dest = $this->input->post('port_of_dest');
        $arrival_date = $this->input->post('arrival_date');
        
        // $invoice_date1 = DateTime::createFromFormat('d/m/Y', $invoice_date);
        // $invoice_date1 = $invoice_date1->format('Y-m-d');
        // $indian_scheduled_date1 = DateTime::createFromFormat('d/m/Y', $indian_scheduled_date);
        // $indian_scheduled_date1 = $indian_scheduled_date1->format('Y-m-d');
        // $indian_actual_date1 = DateTime::createFromFormat('d/m/Y', $indian_actual_date);
        // $indian_actual_date1 = $indian_actual_date1->format('Y-m-d');
        // $mother_scheduled_date1 = DateTime::createFromFormat('d/m/Y', $mother_scheduled_date);
        // $mother_scheduled_date1 = $mother_scheduled_date1->format('Y-m-d');
        // $mother_actual_date1 = DateTime::createFromFormat('d/m/Y', $mother_actual_date);
        // $mother_actual_date1 = $mother_actual_date1->format('Y-m-d');
        // $arrival_date1 = DateTime::createFromFormat('d/m/Y', $arrival_date);
        // $arrival_date1 = $arrival_date1->format('Y-m-d');

        $this->db->query("UPDATE `general_order` SET `tsp_invoice_no`= ?, `invoive_date`= ?, `container_no`= ?, `shipping_line`= ?, `port_of_loading`= ?, `scheduled_date_indian_port`= ?, `actual_date_indian_port`= ?, `mother_port`= ?, `scheduled_date_mother_port`= ?, `actual_date_mother_port`= ?, `port_of_dest`= ?, `expected_date_of_arrival`= ?
         WHERE `general_order_id`= ?", array($tsp_invoice_no, $invoice_date, $container_no, $shipping_line, $port_of_loading, $indian_scheduled_date, $indian_actual_date, $mother_port, $mother_scheduled_date, $mother_actual_date, $port_of_dest, $arrival_date, $general_order_id));
        $this->session->set_flashdata('success', "added shipment details successfully");
        echo "<script> window.location.href = '".site_url('PendingOrder/orderDetails/'.$input_order_id)."';
        </script>";
    //     $this->session->set_flashdata('success', "order update successfully");
    // redirect('added shipment details successfully');
    }


    public function UpdateDispatchDate()
    {
        $input_order_id = $this->input->post('input_order_id'); 
        $general_order_id = $this->input->post('general_order_id');
        $dispatch_date = $this->input->post('dispatch_date'); 
        $new_remark = $this->input->post('remark'); 
        
        // echo $dispatch_date;
        // echo $new_remark;
     
        $this->db->query("UPDATE `general_order` SET `new_dispatch_date`= ?, `remarks`= ? WHERE `general_order_id`= ?", array($dispatch_date, $new_remark, $general_order_id));
        $this->session->set_flashdata('success', "Dispatch Date Updated successfully");
        echo "<script> window.location.href = '".site_url('PendingOrder/orderDetails/'.$input_order_id)."';
        </script>";
    }
}
?>