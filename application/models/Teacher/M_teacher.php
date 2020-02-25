<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_teacher extends CI_Model {
	public function indexxx()
	{
		$sql = "INSERT INTO ta.contoh (nama) VALUES ('ASA')";
		$this->db->query($sql);
	}

	public function getAkun()
	{
		$sql = "SELECT *,(SELECT case when kode = 1 then 'ADMIN' when kode = 2 then 'GURU' else 'SISWA' end) as status
                FROM tdata_user";
		return $this->db->query($sql)->result_array();
	}

	public function getBarang($wer)
	{
		$sql = "SELECT * from tdata_barang $wer";
		return $this->db->query($sql)->result_array();
	}

	public function getAkunID($id)
	{
		$sql = "SELECT * from tdata_user where id = '$id'";
		return $this->db->query($sql)->result_array();
	}

	public function updateAkun($pwd, $nama, $kelas, $email, $kode, $id, $wkt)
	{
		$sql = "Update tdata_user set password_encrypt = '$pwd', nama='$nama', kelas='$kelas', email='$email', kode='$kode', last_update='$wkt' where id='$id'";
		return $this->db->query($sql);
	}

	public function insertNewAccount($newAccount) {
      $this->db->insert('tdata_user', $newAccount);
      return;
	}
}
