<<<<<<< HEAD
<?php
$nama = isset($_GET["nama"]) ? $_GET["nama"] : '' ; 
if($_POST){
=======
<?php 

if($_POST){

>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
	require_once 'pegawai.php';
	$pegawai = new Pegawai;

	$nip = $_POST['pegawai'];
<<<<<<< HEAD
	$res = $pegawai->riwayat_pekerjaan($nip);
	
	print_r($nama);
	if ($res) {
		header('Location: riwayat.php?nik='.$nip['nik'].'&nama='.$nama);
	}else{
		header('Location: register_pekerjaan.php?status=fail');
		var_dump($res);
=======

	$res = $pegawai->register_pegawai($nip);

	if ($res) {
		header('Location: index.php?status=success');
	}else{
		header('Location: register.php?status=fail');
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
	}

}

<<<<<<< HEAD

=======
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
if (isset($_GET['']) && $_GET['status'] == 'fail') {
	echo "<script>alert('Registrasi pegawai gagal')</alert>";
}

?>

<!DOCTYPE html>
<<<<<<< HEAD
<?php require_once 'header.php';
?>
<section class="content">
  <div class="row container">
            <!-- left column -->
   <div class="col-md-9">
    <div class="box box-primary">
	
	<div class="box-header with-border">
      <center><h2 class="box-title">Riwayat Pekerjaan</h2></center>
    </div>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" role="form" class="">
		<div calss = "box-body">
    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="pegawai[nik]" value="<?php echo $_GET['nik']?>" autocomplete="off">
      <div class="form-group col-xs-6">
              <label for="exampleInputEmail1">Nomor Induk Kependudukan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_GET['nik']?>" autocomplete="off" disabled>
      </div>
			<div class="form-group col-xs-6">
              <label for="exampleInputEmail1">Nomor Induk Pegawai</label>
              <input type="text" class="form-control" id="exampleInputEmail1" autocomplete="off" name="pegawai[nip]" required>
            </div>

            <div class="form-group col-xs-6">
              <label for="exampleInputEmail1">Pekerjaan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" 
              		 autocomplete="off" name="pegawai[pekerjaan]" required>
            </div><br/>

            <div class="form-group col-xs-6">
              <label for="exampleInputEmail1">Tahun Mulai</label>
              <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tahun Mulai" 
              		 autocomplete="off" name="pegawai[mulai]" requiered>
            </div>

            <div class="form-group col-xs-6">
              <label for="exampleInputEmail1">Tahun Berakhir</label>
              <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tahun berakhir" 
              		 autocomplete="off" name="pegawai[akhir]" required>
            </div>
            
            <div class="form-group col-xs-6">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>          
	</form>
      </div><!-- /.box -->
    </div>
  </div>
</section>

<?php require_once 'assets/footer.php'; ?>
=======
<html>
<head>
	<title>Registrasi Pekerjaan Baru Bagi Pegawai</title>
</head>
<body>
	<h2>Registrasi Pekerjaan</h2>
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
				<td><input type="datetime" autocomplete="off" name="pegawai[nama]" /></td>
			</tr>
			<tr>
				<td>Tahun Mulai</td>
				<td>&nbsp;</td>
				<td><input type="datetime" autocomplete="off" name="pegawai[mulai]" /></td>
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
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
