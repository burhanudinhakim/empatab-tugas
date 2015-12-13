<?php
<<<<<<< HEAD
=======
error_reporting(E_ALL);
ini_set('display_error',1);

>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
if ($_POST) {
	require_once 'pegawai.php';
	$pegawai = new Pegawai;

	$data = $_POST['pegawai'];

<<<<<<< HEAD
	$res = $pegawai->update_pegawai($data);
=======
	$res = $pegawai->update($data);
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c

	if ($res) {
		header('Location: index.php?update=success');
	}else{
		header('Location: edit.php?nip='.$data['nip'].'&update=failed');
	}
}

require_once('nusoap/lib/nusoap.php');
<<<<<<< HEAD
$url = 'http://localhost/empatab/server.php?wsdl';
=======
$url = 'http://localhost/8/server.php?wsdl';
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_pegawai', array('nip'=>$nip));
<<<<<<< HEAD
//var_dump($result);

$data = json_decode($result);
?>
<?php require_once ('header.php');?>
<section class="content">
  <div class="row container">
            <!-- left column -->
   <div class="col-md-9">
    <div class="box box-primary">
    <div class="box-header with-border">
      <center><h2 class="box-title">Registrasi Pegawai</h2></center>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<?php foreach ($data as $key => $value) { ?>
<input type="hidden" class="form-control" id="inputNip"
                    name="pegawai[nip]" value="<?php echo $value->nip?>" hidden>
<div calss = "box-body">
    <div class="form-group col-xs-6">
        <label for="inputNip">Nomor Induk Pegawai</label>
        <input type="text" class="form-control" id="inputNip"
                   autocomplete="off" value="<?php echo $value->nip?>" disabled>
    </div>

    <div class="form-group col-xs-6">
        <label for="inputNip">Nama Lengkap</label>
        <input type="text" class="form-control" id="inputNip" placeholder="Masukan NIP" 
                   autocomplete="off" name="pegawai[nama]" value="<?php echo $value->nama?>">
    </div>

    <div class="form-group col-xs-6">
        <label for="exampleInputEmail1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tahun berakhir" 
                   autocomplete="off" name="pegawai[tanggal_lahir]" value="<?php echo $value->tanggal_lahir?>">
    </div>

    <div class="form-group col-xs-6">
        <label for="inputNip">Alamat</label>
        <textarea type="textarea" class="form-control" id="inputNip" placeholder="Masukan NIP" 
                   autocomplete="off" rows="5" name="pegawai[alamat]"><?php echo $value->alamat?></textarea>
    </div>

     <div class="form-group col-xs-6">
        <label for="jenisKelamin" >Jenis Kelamin</label></br>
            <label id="jenisKelamin" class="radio-inline"> <input value="1" type="radio" name="pegawai[kelamin]" class="minimal-red" checked>Laki-laki</label>
        <label id="jenisKelamin" class="radio-inline"> <input  value="0" type="radio" name="pegawai[kelamin]" class="minimal-red">Perempuan</label>
     </div>

     <div class="form-group col-xs-6">
          <label for="sel1">Agama</label>
        <select name="pegawai[agama]" class="form-control" id="sel1" placeholder="Pilih Agama">
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
        </select>
      </div>
    <?php } ?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</section>
=======
var_dump($result);

$data = json_decode($result);
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<table align="center" cellpadding="4" cellspacing="0">
  <?php foreach ($data as $key => $value) { ?>
  <tr>
    <td>NIP</td>
    <td>
      <input type="text" disabled value="<?php echo $value->nip?>">
      <input type="hidden" name="nip" value="<?php echo $value->nip?>">
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="pegawai[nama]" value="<?php echo $value->nama?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="pegawai[alamat]"><?php echo $value->alamat?></textarea></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>
      <input type="radio" name="pegawai[kelamin]" value="0" id="perempuan" <?php if($value->kelamin == 0) echo 'checked' ?>>
      <label for="perempuan">Perempuan</label>&nbsp;&nbsp;&nbsp;
      <input type="radio" name="pegawai[kelamin" value="1" id="laki"  <?php if($value->kelamin == 1) echo 'checked' ?>>
      <label for="laki">Laki-Laki</label>
    </td>
  </tr>
  <?php } ?>
  <tr>
  	<td colspan="2"><input type="submit" name="update" value="Update" style="float:right"></td>
  </tr>
</table>
</form>
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
