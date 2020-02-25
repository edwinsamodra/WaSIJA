<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
    public function __construct() {
            $this->load->database();
    }

    public function cekLogin($username, $password) {
        $sql = "SELECT *,(SELECT case when kode = 1 then 'ADMIN' when kode = 2 then 'GURU' else 'SISWA' end) as status
                FROM tdata_user
                WHERE username='$username' AND password_encrypt='$password'";
		return $this->db->query($sql)->result_array();
    }

	public function insertNewAccount($newAccount) {
        $this->db->insert('tdata_user', $newAccount);
        return;
    }

    public function cekAccount($user)
    {
      $sql = "SELECT username from tdata_user where username = '$user'";
      return $this->db->query($sql)->row()->username;
    }
}
