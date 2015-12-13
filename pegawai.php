<?php
require_once 'adodb/adodb.inc.php';

<<<<<<< HEAD
=======
/**
* Penduduk
*/
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
class Pegawai
{

	function __construct()
	{
		$this->db = NewADOConnection('mysqli');
<<<<<<< HEAD
		$this->db->Connect('localhost','root','','kepegawaian');
=======
		$this->db->Connect('127.0.0.1','root','','pegawai');
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
	}

	function get_pegawai($nip)
	{
		$pegawai  = $this->db->Execute("SELECT * FROM pegawai WHERE nip LIKE ?","%$nip%");
		return json_encode($pegawai->GetAssoc());
	}

	function get_riwayat_pekerjaan($nip)
	{
<<<<<<< HEAD
		$pegawai  = $this->db->Execute("select nip,pekerjaan,tahun_mulai, tahun_akhir from riwayat_pekerjaan where riwayat_pekerjaan.nik like ?","%$nip%");
=======
		$pegawai  = $this->db->Execute("SELECT * FROM riwayat WHERE nip LIKE ?","%$nip%");
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
		return json_encode($pegawai->GetAssoc());
	}

	function register_pegawai($data)
	{
<<<<<<< HEAD
		$res = $this->db->Execute("INSERT INTO pegawai (nip, nama, tanggal_lahir,alamat, kelamin, agama) VALUES ('$data[nip]','$data[nama]','$data[tanggal_lahir]','$data[alamat]','$data[kelamin]','$data[agama]')");
=======
		$res = $this->db->Execute("INSERT INTO pegawai (nip, nama, alamat, kelamin, agama) VALUES ('$data[nip]','$data[nama]','$data[alamat]','$data[kelamin]','$data[agama]')");
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function delete_pegawai($data)
	{
<<<<<<< HEAD
		$res = $this->db->Execute("DELETE FROM pegawai WHERE nip LIKE ?","'$data'");
=======
		$res = $this->db->Execute("DELETE FROM pegawai WHERE nip = '$data'");
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function update_pegawai($data)
	{
<<<<<<< HEAD
		$res = $this->db->Execute("UPDATE pegawai SET nama = '$data[nama]', alamat = '$data[alamat]',tanggal_lahir='$data[tanggal_lahir]' ,kelamin = '$data[kelamin]', agama = '$data[agama]' WHERE nip = '$data[nip]'");
=======
		$res = $this->db->Execute("UPDATE pegawai SET nama = '$data[nama]', alamat = '$data[alamat]', kelamin = '$data[kelamin]', agama = '$data[agama]' WHERE nip = data['nip']");
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function riwayat_pekerjaan($data)
	{
<<<<<<< HEAD
		$res = $this->db->Execute("INSERT INTO riwayat_pekerjaan (nik,nip, pekerjaan, tahun_mulai, tahun_akhir) VALUES ('$data[nik]','$data[nip]','$data[pekerjaan]','$data[mulai]','$data[akhir]')");
=======
		$res = $this->db->Execute("INSERT INTO riwayat (nip, pekerjaan, tahun_mulai, tahun_akhir) VALUES ('$data[nip]','$data[pekerjaan]','$data[mulai]','$data[akhir]')");
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

<<<<<<< HEAD
	function delete_riwayat($nip_del)
	{
		$result = $this->db->Execute("delete from riwayat_pekerjaan where nip=?","%$nip_del%");
		if($result)
		{
=======
	function update_pegawai($data)
	{
		$res = $this->db->Execute("UPDATE riwayat SET tahun_akhir = '$data[akhir]' WHERE nip = data['nip']");
		if ($res) {
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
			return true;
		}else{
			return false;
		}
	}

<<<<<<< HEAD
	function get_riwayat_pekerjaan_by_nik($nik) 
	{
		$result = $this->db->Execute(" select * from riwayat_pekerjaan where nik like ?","%$nik%");
		return json_encode($pegawai->GetAssoc());
	}
=======
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
}

?>