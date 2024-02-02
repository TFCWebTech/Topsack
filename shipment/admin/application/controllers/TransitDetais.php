<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TransitDetais extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('comman/header');
        $this->load->view('transit_detais');
        $this->load->view('comman/footer');
    }
}
?>