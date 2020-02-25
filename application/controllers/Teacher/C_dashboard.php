<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_home');
		$this->load->model('Teacher/M_teacher');
		date_default_timezone_set('Asia/Jakarta');
	}

	//to check session
	// public function Cek_ses()
	// {
	// 	if ($this->session->logged_in == TRUE) {
	// 		$autentikasi = $this->M_home->cekLogin($this->session->username, $this->session->password_encrypt);
	// 		$data['auth'] = $autentikasi;
	// 	}else {
	// 		redirect('');
	// 	}
	// }

	public function index()
	{
		if ($this->session->logged_in == TRUE) {
			$autentikasi = $this->M_home->cekLogin($this->session->username, $this->session->password_encrypt);
			$data['auth'] = $autentikasi;

			$data['title'] = "WASIJA";
			$this->load->view('V_header', $data);
			$this->load->view('V_sidemenu', $data);
			$this->load->view('Teacher/V_dashboard');
			$this->load->view('V_footer');
		}else {
			redirect('');
		}
	}
 	// Data Alat
	public function InsertAlat()
	{
		if ($this->session->logged_in == TRUE) {
			$autentikasi = $this->M_home->cekLogin($this->session->username, $this->session->password_encrypt);
			$data['auth'] = $autentikasi;

			$data['title'] = "WASIJA - Insert Alat";

			$this->load->view('V_header', $data);
			$this->load->view('V_sidemenu', $data);
			$this->load->view('Teacher/Tools Data/V_insert_tools');
			$this->load->view('V_footer');
		}else {
			redirect('');
		}
	}

	public function addBarang()
	{
		$tgl_beli	= $this->input->post('tanggal_pembelian');
		$nama_brg	= $this->input->post('nama_barang');
		$spek 		= $this->input->post('spek_barang');
		$jumlah 	= $this->input->post('jumlah_barang');
		$kode 		= $this->input->post('kode_barang');
		$harga 		= $this->input->post('harga_beli');
		$keterangan = $this->input->post('ket_barang');
		$ukuran		= $this->input->post('ukuran_barang');
		$bahan		= $this->input->post('bahan_barang');
		$kondisi	= $this->input->post('kondisi_barang');
		$letak		= $this->input->post('barang_ke');
		$asal		= $this->input->post('asal_barang');
		$smb_dana	= $this->input->post('sumber_dana');
		$no_seri	= $this->input->post('no_seri');
	}

	public function BarangDatang()
	{
		if ($this->session->logged_in == TRUE) {
			$autentikasi = $this->M_home->cekLogin($this->session->username, $this->session->password_encrypt);
			$data['auth'] = $autentikasi;
			$data['title'] = "WASIJA - Barang Datang";
			$this->load->view('V_header', $data);
			$this->load->view('V_sidemenu', $data);
			$this->load->view('Teacher/Tools Data/V_tools_come');
			$this->load->view('V_footer');
		}else {
			redirect('');
		}
	}

	public function BarangHabisPakai()
	{
		$data['title'] = "WASIJA - Barang Habis Pakai";
		$this->load->view('V_header', $data);
		$this->load->view('V_sidemenu', $data);
		$this->load->view('Teacher/Tools Data/V_tools_can_empty');
		$this->load->view('V_footer');
	}

	public function InventarisBarang()
	{
		$data['title'] = "WASIJA - Inventaris Barang";

		$data['barang'] = $this->M_teacher->getBarang("where jenis='datang'");

		$this->load->view('V_header', $data);
		$this->load->view('V_sidemenu', $data);
		$this->load->view('Teacher/Tools Data/V_tools_inventarization');
		$this->load->view('V_footer');
	}

	public function InventarisRuangan()
	{
		$data['title'] = "WASIJA - Inventaris Ruangan";
		$this->load->view('V_header', $data);
		$this->load->view('V_sidemenu', $data);
		$this->load->view('Teacher/Tools Data/V_rooms_inventarization');
		$this->load->view('V_footer');
	}

	public function DataPeminjaman()
	{
		$data['title'] = "WASIJA - Data Peminjaman";
		$this->load->view('V_header', $data);
		$this->load->view('V_sidemenu', $data);
		$this->load->view('Teacher/V_list_of_borrowers');
		$this->load->view('V_footer');
	}

	public function DataSiswa()
	{
		if ($this->session->logged_in == TRUE) {
			$autentikasi = $this->M_home->cekLogin($this->session->username, $this->session->password_encrypt);
			$data['auth'] = $autentikasi;

			$data['title'] = "WASIJA - Data Siswa";

			$data['data'] = $this->M_teacher->getAkun();

			$this->load->view('V_header', $data);
			$this->load->view('V_sidemenu', $data);
			$this->load->view('Teacher/V_list_of_users');
			$this->load->view('V_footer');
		}else {
			redirect('');
		}
	}

	public function modalAccount()
	{
		$id = $this->input->post('id');
		$query = $this->M_teacher->getAkunID($id);

		$ciphering = "AES-128-CTR";
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;
		$encryption_iv = '1234567891011121';
		$encryption_key = "WASIJAAPPS";
		$pass_encrypt = array();
		foreach ($query as $key) {
			$pass_decrypt[] = openssl_decrypt($query[0]['password_encrypt'], $ciphering, $encryption_key, $options, $encryption_iv);
			$id_encrypt[] = openssl_encrypt($query[0]['id'], $ciphering, $encryption_key, $options, $encryption_iv);
		}
		$a = array_merge($query, $pass_decrypt);
		$b = array_merge($a, $id_encrypt);
		echo json_encode($b);
	}

	public function updateAkun()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$pwd = $this->input->post('password');
		$status = $this->input->post('status');
		$kelas = $this->input->post('kelas');
		$email = $this->input->post('email');
		// untuk encrypt password
		$ciphering = "AES-128-CTR";
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;
		$encryption_iv = '1234567891011121';
		$encryption_key = "WASIJAAPPS";
		$pass_encrypt = openssl_encrypt($pwd, $ciphering, $encryption_key, $options, $encryption_iv);
		$id_decrypt = openssl_decrypt($id, $ciphering, $encryption_key, $options, $encryption_iv);
		if (ucwords(mb_strtoupper($status)) == 'ADMIN') {
			$kode = '1';
		}elseif (ucwords(mb_strtoupper($status)) == 'GURU') {
			$kode = '2';
		}else {
			$kode = '3';
		}
		$dataAll = $this->M_teacher->getAkunID($id_decrypt);
		if (!empty($dataAll)) {
			foreach ($dataAll as $key) {
				if ($key['nama'] == $nama && $key['username'] == $user && $key['password_encrypt'] == $pass_encrypt && $key['kode'] == $kode && $key['kelas'] == $kelas && $key['email'] == $email) {
					echo 'sama';
				}else{
					$this->M_teacher->updateAkun($pass_encrypt, ucwords(mb_strtoupper($nama)), ucwords(mb_strtoupper($kelas)), $email, $kode, $id_decrypt, date('Y-m-d H:i:s'));
					echo $nama;
				}
			}
		}
	}

	public function Sign_Up()
	{
		if ($this->session->logged_in == TRUE) {
			$autentikasi = $this->M_home->cekLogin($this->session->username, $this->session->password_encrypt);
			$data['auth'] = $autentikasi;

			$data['data'] = $this->M_teacher->getAkun();

			$data['title'] = "WASIJA - Sign Up";
			$this->load->view('V_header', $data);
			$this->load->view('V_sidemenu', $data);
			$this->load->view('Teacher/V_addUser', $data);
			$this->load->view('V_footer');
		}else {
			redirect('');
		}
	}

	public function saveAccount()
	{
		//Enkripsi Password
		$password = $this->input->post('password_register');
		$ciphering = "AES-128-CTR";
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;
		$encryption_iv = '1234567891011121';
		$encryption_key = "WASIJAAPPS";
		$pass_encrypt = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);

		$cek = $this->M_home->cekAccount($username);
		if (empty($cek)) {
			$username = $this->input->post('username');
			$nama = $this->input->post('nama');
			$kelas = $this->input->post('kelas');
			$email = $this->input->post('email');
			$kode = $this->input->post('kode');
			$newAccount = array(
				'username'	=> $username,
				'password_encrypt'	=> $pass_encrypt,
				'nama'		=> ucwords(mb_strtoupper($nama)),
				'kelas'		=> ucwords(mb_strtoupper($kelas)),
				'email'		=> $email,
				'kode'		=> $kode,
				'created_date' => date('Y-m-d H:i:s')
			);
			$this->M_teacher->insertNewAccount($newAccount);
			redirect('Teacher/DataSiswa');
		}else {
			echo "<script type='text/javascript'>
	        alert('Data Sudah ada')
					window.location.href = 'http://localhost:8080/Teacher/Sign_Up'
	    </script>";
		}

	}
}
