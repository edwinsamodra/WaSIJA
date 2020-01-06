<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_teacher extends CI_Model {
	public function indexxx()
	{
		$sql = "INSERT INTO ta.contoh (nama) VALUES ('ASA')";
		$this->db->query($sql);
	}
	
	public function huh()
	{
		$sql = "SELECT * FROM ta.tlogin";
		return $this->db->query($sql)->result_array();
	}
}