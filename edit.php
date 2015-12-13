<?php
if ($_POST) {
	require_once 'pegawai.php';
	$pegawai = new Pegawai;

	$data = $_POST['pegawai'];

	$res = $pegawai->update_pegawai($data);

	if ($res) {
		header('Location: index.php?update=success');
	}else{
		header('Location: edit.php?nip='.$data['nip'].'&update=failed');
	}
}

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/empatab/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_pegawai', array('nip'=>$nip));
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
