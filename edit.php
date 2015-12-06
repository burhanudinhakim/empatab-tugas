<?php
error_reporting(E_ALL);
ini_set('display_error',1);

if ($_POST) {
	require_once 'pegawai.php';
	$pegawai = new Pegawai;

	$data = $_POST['pegawai'];

	$res = $pegawai->update($data);

	if ($res) {
		header('Location: index.php?update=success');
	}else{
		header('Location: edit.php?nip='.$data['nip'].'&update=failed');
	}
}

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/8/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_pegawai', array('nip'=>$nip));
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