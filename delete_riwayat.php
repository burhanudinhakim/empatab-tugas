<?php
require_once('pegawai.php');

$pegawai = new Pegawai;

// $nip = $_GET['nip'];
$nnip = $_GET['nip'];
$nama = isset($_GET["nama"]) ? $_GET["nama"] : '' ;
$nik =  isset($_GET["nik"]) ? $_GET["nik"] : '' ;
echo $nip;

$delete_riwayat = $pegawai->delete_riwayat($nnip);
var_dump($delete_riwayat);
if($delete_riwayat){
	header('location:riwayat.php?nik='.$nik.'&status=sukses&nama='.$nama);
}else{
	header('location:riwayat.php?nik='.$nik.'&status=gagal&nama='.$nama);
}
?>