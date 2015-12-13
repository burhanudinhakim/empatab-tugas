<?php
error_reporting(E_ALL);
<<<<<<< HEAD
ini_set('display_error',0);

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/empatab/server.php?wsdl';
=======
ini_set('display_error',1);

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/8/server.php?wsdl';
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_pegawai', array('nip'=>$nip));
var_dump($result);

$data = json_decode($result);
?>

<table border="1" align="center" cellpadding="4" cellspacing="0">
  <?php foreach ($data as $key => $value) { ?>
  <tr>
    <td>ID</td>
    <td><?php echo $value->nip?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $value->nama?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><?php echo $value->alamat?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><?php if ($value->kelamin==1){ echo 'Laki-laki';} else {echo 'Perempuan'; }?></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td><?php echo $value->agama?></td>
  </tr>
  <?php } ?>
</table>