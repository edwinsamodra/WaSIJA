<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_index extends CI_Model {

		public function cekLogin($username, $password)
	{
        $sql = "SELECT * FROM ta.tlogin
                where username = '$username' and password = '$password'";
		return $this->db->query($sql)->result_array();
    }
    

}