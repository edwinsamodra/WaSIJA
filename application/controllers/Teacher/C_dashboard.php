<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Teacher/M_teacher');
	}

	public function index()
	{
		$data['title'] = "WaSIJA";
		$this->load->view('Teacher/V_dashboard', $data);
	}
}
