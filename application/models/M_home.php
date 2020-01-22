<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
        public function __construct() {
                $this->load->database();
        }

	public function cekLogin($username, $password) {
        $sql = "SELECT * FROM brankas
                WHERE username='$username' AND password_encrypt='$password';";
		return $this->db->query($sql)->result_array();
        }

	public function insertNewAccount($newAccount) {
                $this->db->insert('brankas', $newAccount);
                return;
        }

        public function searchAccount($username, $email)
        {
        $sql = "SELECT * FROM brankas
                WHERE username='$username' AND email='$email';";
		return $this->db->query($sql)->result_array();
        }

        // public function changePassword($password)
        // {
        // $sql = "UPDATE brankas
        //         WHERE username"
        // } kurang sitik ngaks
}