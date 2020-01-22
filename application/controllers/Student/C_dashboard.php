<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('Student/M_student');
	}
	
	public function index() {
		$data['title'] = "WaSIJA";
		$this->load->view('V_header', $data);
		$this->load->view('Student/V_dashboard');
		$this->load->view('V_footer');
	}

	public function PinjamBarang() {
		$data['title'] = "WaSIJA - Pinjam";
		$this->load->view('V_header', $data);
		$this->load->view('Student/V_borrow');
		$this->load->view('V_footer');
	}
	
	public function DataPeminjaman() {
		$data['title'] = "WaSIJA - Data Peminjaman";
		$this->load->view('V_header', $data);
		$this->load->view('Student/V_history');
		$this->load->view('V_footer');
	}


}
