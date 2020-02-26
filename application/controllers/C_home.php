<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('encryption');
		$this->load->model('M_home');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index() {
		// require_once 'C:\xampp\htdocs\WASIJA\assets\PHPExcel-1.8\PHPExcel.php';
		// $excel = new PHPExcel();
		// // Settingan awal fil excel
		// $excel->getProperties()->setCreator('My Notes Code')
        //          ->setLastModifiedBy('My Notes Code')
        //          ->setTitle("Data Siswa")
        //          ->setSubject("Siswa")
        //          ->setDescription("Laporan Semua Data Siswa")
		// 		 ->setKeywords("Data Siswa");

		// $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
		// $excel->setActiveSheetIndex(0)->setCellValue('B3', "NIS"); // Set kolom B3 dengan tulisan "NIS"
		// $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA"); // Set kolom C3 dengan tulisan "NAMA"
		// $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		// $excel->setActiveSheetIndex(0)->setCellValue('E3', "ALAMAT"); // Set kolom E3 dengan tulisan "ALAMAT"
		// $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
		// $excel->setActiveSheetIndex(0);
		// // Proses file excel
		// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		// header('Content-Disposition: attachment; filename="Data Siswa.xlsx"'); // Set nama file excel nya
		// header('Cache-Control: max-age=0');
		// $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		// $write->save('php://output');
		$data['title'] = "WASIJA";
		$this->load->view('V_home', $data);
	}

	public function Login()
	{
		$password = $this->input->post('password');
		$ciphering = "AES-128-CTR";
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;
		$encryption_iv = '1234567891011121';
		$encryption_key = "WASIJAAPPS";
		$pass_encrypt = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);

		// Dekripsi Password
		// $pass_encrypt = $this->input->post('password');
		// $decryption_iv = '1234567891011121';
		// $decryption_key = "WASIJAAPPS";
		// $ciphering = "AES-128-CTR";
		// $options = 0;
		// $pass_decrypt = openssl_decrypt ($pass_encrypt, $ciphering, $decryption_key, $options, $decryption_iv);

		$username = $this->input->post('username');

		$sesi = array(
			'username'	=> $username,
			'password_encrypt'	=> $pass_encrypt,
			'logged_in' => 1,
		);

		$this->session->set_userdata($sesi);

		$autentikasi = $this->M_home->cekLogin($username, $pass_encrypt);

		if (empty($autentikasi)) {
			$data['title'] = "WASIJA";
			$this->load->view('V_home', $data);

			echo '<center>';
			echo '<div class="alert-danger" style="z-index: 99999; position: relative; font-size: 18px" role="alert">';
			echo 'Username atau Password yang Anda Masukkan Tidak Sesuai';
			echo '</div>';
			echo '</center>';
		} else {
			if ($autentikasi[0]['kode'] == '1' || $autentikasi[0]['kode'] == '2') {
				redirect('Teacher');
			} else {
				redirect('Student');
			}
		}
	}

	public function Sign_Up()
	{
		$data['title'] = "WASIJA - Sign Up";
		$this->load->view('V_sign_up', $data);
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

		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$email = $this->input->post('email');
		$newAccount = array(
			'username'	=> $username,
			'password_encrypt'	=> $pass_encrypt,
			'nama'		=> ucwords(mb_strtoupper($nama)),
			'kelas'		=> ucwords(mb_strtoupper($kelas)),
			'email'		=> $email,
			'kode'		=> '3'
		);
		$this->M_home->insertNewAccount($newAccount);
		if ($status_code == 0) {
			redirect(base_url());
		} else if ($status_code == 1) {
			redirect(base_url("Teacher/DataSiswa"));
		}
	}

	public function Forgot_Password()
	{
		$data['title'] = "WASIJA - Forgot Password";
		$this->load->view('V_forgot_password', $data);
	}

	public function newPassword()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$account = array(
			'username'	=> $username,
			'email'		=> $email,
		);

		$autentikasi = $this->M_home->searchAccount($account);

		if (empty($autentikasi)) {
			$data['title'] = "WASIJA";
			$this->load->view('V_forgot_password', $data);

			echo '<center>';
			echo '<div class="alert-danger" style="z-index: 99999; position: relative; font-size: 18px" role="alert">';
			echo 'Username atau Email yang Anda Masukkan Tidak Sesuai';
			echo '</div>';
			echo '</center>';
		} else {
			if ($autentikasi[0]['username'] == 'admin') {
				redirect('Teacher');
			} else {
				redirect(base_url('Start_With/Page_New_Password'));
			}
		}

	}
	public function Page_New_Password()
	{
		$data['title'] = "WASIJA - Forgot Password";
		$this->load->view('V_new_password', $data);
	}

	public function setNewPassword()
	{
		$password = $this->input->post('password_register');
		$ciphering = "AES-128-CTR";
		$iv_length = openssl_cipher_iv_length($ciphering);
		$options = 0;
		$encryption_iv = '1234567891011121';
		$encryption_key = "WASIJAAPPS";
		$pass_encrypt = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);

		$new_pass = array(
			'password_encrypt'	=> $pass_encrypt,
		);
		$this->M_home->changePassword($new_pass);
		redirect(base_url());
	}
}
// https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/
