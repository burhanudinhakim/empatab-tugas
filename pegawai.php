<?php
require_once 'adodb/adodb.inc.php';

class Pegawai
{

	function __construct()
	{
		$this->db = NewADOConnection('mysqli');
		$this->db->Connect('localhost','root','','kepegawaian');
	}

	function get_pegawai($nip)
	{
		$pegawai  = $this->db->Execute("SELECT * FROM pegawai WHERE nip LIKE ?","%$nip%");
		return json_encode($pegawai->GetAssoc());
	}

	function get_riwayat_pekerjaan($nip)
	{
		$pegawai  = $this->db->Execute("select nip,pekerjaan,tahun_mulai, tahun_akhir from riwayat_pekerjaan where riwayat_pekerjaan.nik like ?","%$nip%");
		return json_encode($pegawai->GetAssoc());
	}

	function register_pegawai($data)
	{
		$res = $this->db->Execute("INSERT INTO pegawai (nip, nama, tanggal_lahir,alamat, kelamin, agama) VALUES ('$data[nip]','$data[nama]','$data[tanggal_lahir]','$data[alamat]','$data[kelamin]','$data[agama]')");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function delete_pegawai($data)
	{
		$res = $this->db->Execute("DELETE FROM pegawai WHERE nip LIKE ?","'$data'");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function update_pegawai($data)
	{
		$res = $this->db->Execute("UPDATE pegawai SET nama = '$data[nama]', alamat = '$data[alamat]',tanggal_lahir='$data[tanggal_lahir]' ,kelamin = '$data[kelamin]', agama = '$data[agama]' WHERE nip = '$data[nip]'");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function riwayat_pekerjaan($data)
	{
		$res = $this->db->Execute("INSERT INTO riwayat_pekerjaan (nik,nip, pekerjaan, tahun_mulai, tahun_akhir) VALUES ('$data[nik]','$data[nip]','$data[pekerjaan]','$data[mulai]','$data[akhir]')");
		if ($res) {
			return true;
		}else{
			return false;
		}
	}

	function delete_riwayat($nip_del)
	{
		$result = $this->db->Execute("delete from riwayat_pekerjaan where nip=?","%$nip_del%");
		if($result)
		{
			return true;
		}else{
			return false;
		}
	}

	function get_riwayat_pekerjaan_by_nik($nik) 
	{
		$result = $this->db->Execute(" select * from riwayat_pekerjaan where nik like ?","%$nik%");
		return json_encode($pegawai->GetAssoc());
	}
}

?>