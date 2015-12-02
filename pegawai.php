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

	function get_pegawai($nip="")
	{
		$penduduk  = $this->db->Execute("SELECT * FROM pegawai WHERE nip LIKE ?","%$nip%");
		return json_encode($penduduk->GetAssoc());
	}

	function get_riwayat_pekerjaan($nip="")
	{
		$penduduk  = $this->db->Execute("SELECT * FROM pegawai WHERE nip LIKE ?","%$nip%");
		return json_encode($penduduk->GetAssoc());
	}

}

?>