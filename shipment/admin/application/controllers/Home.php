<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
	{
        $this->load->view('comman/header');
		$this->load->view('index');
        $this->load->view('comman/footer');
	}
    public function SampleChart()
    {
        $this->load->view('common/header');
        $this->load->view('sample_status_chart');
        $this->load->view('common/footer');
    }

}
?>