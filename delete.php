<?php

	require_once 'pegawai.php';
	$pegawai = new Pegawai;

<<<<<<< HEAD
	$nip = $_GET['nip'];
=======
	$nip = $_POST['nip'];
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c

	$res = $pegawai->delete_pegawai($nip);

	if ($res) {
		header('Location: index.php?delete=success');
	}else{
		header('Location: index.php?delete=fail');
	}

?>

