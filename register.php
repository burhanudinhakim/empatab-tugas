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
	<title>Registrasi Pegawai</title>
</head>
<body>
	<h2>Registrasi Pegawai</h2>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<table>
			<tr>
				<td>NIP</td>
				<td>&nbsp;</td>
				<td><input type="text" autocomplete="off" name="pegawai[nip]" /></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>&nbsp;</td>
				<td><input type="text" autocomplete="off" name="pegawai[nama]" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>&nbsp;</td>
				<td><textarea autocomplete="off" name="pegawai[alamat]"></textarea></td>
			</tr>
			<tr>
				<td>Kelamin</td>
				<td>&nbsp;</td>
				<td>
					<input type="radio" name="pegawai[kelamin]" value="0" id="perempuan">
					<label for="perempuan">Perempuan</label>&nbsp;&nbsp;&nbsp;
					<input type="radio" name="pegawai[kelamin]" value="1" id="laki">
					<label for="laki">Laki-Laki</label>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>&nbsp;</td>
				<td>
					<select name="pegawai[agama]">
						<option value="Islam">Islam</option>
						<option value="Katolik">Katolik</option>
						<option value="Kristen">Kristen</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Konghuchu">Konghuchu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="register" value="Register" style="float:right"></td>
			</tr>
		</table>
	</form>
</body>
</html>