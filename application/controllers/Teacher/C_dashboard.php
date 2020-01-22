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
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/V_dashboard');
		$this->load->view('V_footer');
	}

	public function DataAlat()
	{
		$data['title'] = "WaSIJA - Data Alat";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/V_list_of_tools');
		$this->load->view('V_footer');
	}

	public function DataPeminjaman()
	{
		$data['title'] = "WaSIJA - Data Peminjaman";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/V_list_of_borrowers');
		$this->load->view('V_footer');
	}

	public function DataSiswa()
	{
		$data['title'] = "WaSIJA - Data Siswa";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/V_list_of_users');
		$this->load->view('V_footer');
	}
}
