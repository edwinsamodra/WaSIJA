<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('Student/M_student');
	}
	
	public function index()
	{
		$data['title'] = "WaSIJA";
		$this->load->view('Student/V_dashboard', $data);
	}

}
