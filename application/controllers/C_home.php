<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "WaSIJA";
		$this->load->view('V_home', $data);
	}

	public function submit()
	{
		$username = $this->input->post('user');
		$password = $this->input->post('pwd');

		$check = $this->M_index->cekLogin($username, $password);
		if (!empty($check)) {
			redirect('');
		} else{
			echo "error";
		}
	}

}