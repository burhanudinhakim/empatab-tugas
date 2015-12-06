<?php
require_once 'adodb/adodb.inc.php';

/**
* Penduduk
*/
class Pegawai
{

	function __construct()
	{
		$this->db = NewADOConnection('mysqli');
		$this->db->Connect('127.0.0.1','root','','pegawai');
	}

	function get_pegawai($nip)
	{
		$pegawai  = $this->db->Execute("SELECT * FROM pegawai WHERE nip LIKE ?","%$nip%");
		return json_encode($pegawai->GetAssoc());
	}

	function get_riwayat_pekerjaan($nip)
	{
		$pegawai  = $this->db->Execute("SELECT * FROM riwayat WHERE nip LIKE ?","%$nip%");
		return json_encode($pegawai->GetAssoc());
	}

	function register_pegawai($data)
	{
		$res = $this->db->Execute("INSERT INTO pegawai (nip, nama, alamat, kelamin, agama) VALUES ('$data[nip]','$data[nama]','$data[alamat]','$data[kelamin]','$data[agama]')");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function delete_pegawai($data)
	{
		$res = $this->db->Execute("DELETE FROM pegawai WHERE nip = '$data'");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function update_pegawai($data)
	{
		$res = $this->db->Execute("UPDATE pegawai SET nama = '$data[nama]', alamat = '$data[alamat]', kelamin = '$data[kelamin]', agama = '$data[agama]' WHERE nip = data['nip']");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function riwayat_pekerjaan($data)
	{
		$res = $this->db->Execute("INSERT INTO riwayat (nip, pekerjaan, tahun_mulai, tahun_akhir) VALUES ('$data[nip]','$data[pekerjaan]','$data[mulai]','$data[akhir]')");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function update_pegawai($data)
	{
		$res = $this->db->Execute("UPDATE riwayat SET tahun_akhir = '$data[akhir]' WHERE nip = data['nip']");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

}

?>