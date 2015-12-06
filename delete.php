<?php

	require_once 'pegawai.php';
	$pegawai = new Pegawai;

	$nip = $_POST['nip'];

	$res = $pegawai->delete_pegawai($nip);

	if ($res) {
		header('Location: index.php?delete=success');
	}else{
		header('Location: index.php?delete=fail');
	}

?>

