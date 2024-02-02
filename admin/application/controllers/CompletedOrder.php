<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CompletedOrder extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
		$this->load->model('Orders_model', 'orders', TRUE);
    }
    public function index()
    {
        $this->load->view('comman/header');
        $this->load->view('transit_detais');
        $this->load->view('comman/footer');
    }

    public function generalOrder() {
        $addcount = $this->input->post('addcount');
        $countIncrement = $this->input->post('countIncrement');
        $data['addcount'] = $addcount;
        $data['countIncrement'] = $countIncrement;

        $countIncreamentVariable = $this->input->post('countIncreamentVariable');
        $countDecrementVariable = $this->input->post('countDecrementVariable');
        $data['countIncreamentVariable'] = $countIncreamentVariable;
        $data['countDecrementVariable'] = $countDecrementVariable;

        $data['all'] = $this->orders->getCustomerData();
        $this->load->view('general_order_form', $data);
    }
}
?>