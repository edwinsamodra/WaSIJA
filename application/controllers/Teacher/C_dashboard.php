<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Teacher/M_teacher');
	}

	public function index()
	{
		
		$data['title'] = "WASIJA";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/V_dashboard');
		$this->load->view('V_footer');
	}
 	// Data Alat
	public function InsertAlat()
	{
		$data['title'] = "WASIJA - Insert Alat";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/Tools Data/V_insert_tools');
		$this->load->view('V_footer');
	}

	public function BarangDatang()
	{
		$data['title'] = "WASIJA - Barang Datang";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/Tools Data/V_tools_come');
		$this->load->view('V_footer');
	}

	public function BarangHabisPakai()
	{
		$data['title'] = "WASIJA - Barang Habis Pakai";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/Tools Data/V_tools_can_empty');
		$this->load->view('V_footer');
	}

	public function InventarisBarang()
	{
		$data['title'] = "WASIJA - Inventaris Barang";

		$data['barang'] = $this->M_teacher->getBarang("where jenis='datang'");

		$this->load->view('V_header', $data);
		$this->load->view('Teacher/Tools Data/V_tools_inventarization');
		$this->load->view('V_footer');
	}

	public function InventarisRuangan()
	{
		$data['title'] = "WASIJA - Inventaris Ruangan";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/Tools Data/V_rooms_inventarization');
		$this->load->view('V_footer');
	}

	public function DataPeminjaman()
	{
		$data['title'] = "WASIJA - Data Peminjaman";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/V_list_of_borrowers');
		$this->load->view('V_footer');
	}

	public function DataSiswa()
	{
		$data['title'] = "WASIJA - Data Siswa";
		$this->load->view('V_header', $data);
		$this->load->view('Teacher/V_list_of_users');
		$this->load->view('V_footer');
	}
}
