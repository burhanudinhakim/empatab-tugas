<?php 

if($_POST){

	require_once 'pegawai.php';
	$pegawai = new Pegawai;

	$nip = $_POST['pegawai'];

	$res = $pegawai->register_pegawai($nip);

	if ($res) {
		header('Location: index.php?status=success');
	}else{
		header('Location: register.php?status=fail');
	}

}

if (isset($_GET['']) && $_GET['status'] == 'fail') {
	echo "<script>alert('Registrasi pegawai gagal')</alert>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Riwayat Pekerjaan Pegawai</title>
</head>
<body>
	<h2>Update pegawai dengan nip <?php echo $_GET['nip'] ?></h2>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="hidden" name="pegawai[nip]" value="$_GET[nip]" />
		<table>
			<tr>
				<td>NIP</td>
				<td>&nbsp;</td>
				<td><input type="text" autocomplete="off" name="pegawai[nip]" disabled /></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>&nbsp;</td>
				<td><input type="datetime" autocomplete="off" name="pegawai[nama]" disabled /></td>
			</tr>
			<tr>
				<td>Tahun Mulai</td>
				<td>&nbsp;</td>
				<td><input type="datetime" autocomplete="off" name="pegawai[mulai]" disabled /></td>
			</tr>
			<tr>
				<td>Tahun Berakhir</td>
				<td>&nbsp;</td>
				<td><input autocomplete="off" name="pegawai[akhir]" /></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="register" value="Register" style="float:right"></td>
			</tr>
		</table>
	</form>
</body>
</html>