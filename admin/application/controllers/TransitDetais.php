<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TransitDetais extends CI_Controller {

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
    //     $this->load->view('transit_detais');
    //     $this->load->view('comman/footer');
    // }

    public function index()
    {
        $data['all_orders'] = $this->orders->getOrders();
        $data['all_orders'] = count($data['all_orders']);

        $data['all_placed_order'] = $this->orders->getOrdersPlacedData();
        $data['all_placed_order'] = count($data['all_placed_order']);

        $data['all_dispatch_order'] = $this->orders->getOrdersDispatchData();
        $data['all_dispatch_order'] = count($data['all_dispatch_order']);

        $data['all_complete_orders'] = $this->orders->getOrdersCompleatedData();
        $data['all_complete_orders'] = count($data['all_complete_orders']);

        $data['order_data'] = $this->orders->getGeneralOrderData();
        $this->load->view('comman/header');
        $this->load->view('all_orders',$data);
        $this->load->view('comman/footer');
    }
    
}
?>