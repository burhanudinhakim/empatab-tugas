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
<?php require_once "header.php";?>

<section class="content">
  <div class="row container">
            <!-- left column -->
   <div class="col-md-9">
    <div class="box box-primary">
	
	<div class="box-header with-border">
      <center><h2 class="box-title">Registrasi Pegawai</h2></center>
    </div>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="hidden" name="pegawai[nip]" value="$_GET[nip]" />

		<div calss = "box-body">
			<div class="form-group col-xs-6">
              <label for="inputNip">Nomor Induk Pegawai</label>
              <input type="text" class="form-control" id="inputNip" placeholder="Masukan NIP" 
              		 autocomplete="off" name="pegawai[nip]">
            </div>

            <div class="form-group col-xs-6">
              <label for="exampleInputEmail1">Nama Lengkap</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" 
              		 autocomplete="off" name="pegawai[nama]">
            </div><br/>

            <div class="form-group col-xs-6">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tahun berakhir" 
              		 autocomplete="off" name="pegawai[tanggal_lahir]">
            </div>

            <div class="form-group col-xs-6">
            	<label for="jenisKelamin" >Jenis Kelamin</label></br>
                <label id="jenisKelamin" class="radio-inline"> <input value="1" type="radio" name="pegawai[jenis_Kelamin]" class="minimal-red" checked>Laki-laki</label>
                <label id="jenisKelamin" class="radio-inline"> <input  value="0" type="radio" name="pegawai[jenis_Kelamin]" class="minimal-red">Perempuan</label>
            </div>

            <div class="form-group col-xs-8">
              <label for="alamat">Alamat</label>
              <textarea type="text" class="form-control" id="alamat" placeholder="Alamat" 
              		 autocomplete="off" name="pegawai[alamat]" rows="5"></textarea>
            </div>

            <div class="form-group col-xs-4">
  				<label for="sel1">Agama</label>
				<select name="pegawai[agama]" class="form-control" id="sel1" placeholder="Pilih Agama">
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
				</select>
			</div>
            
            <div class="form-group col-xs-6">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
		</table>
	</form>
</body>
</html>