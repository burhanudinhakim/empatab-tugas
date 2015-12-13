<?php
<<<<<<< HEAD
require_once('nusoap/lib/nusoap.php');
$url = 'http://satuab.burhanudin.me/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_penduduk',array());
//var_dump($result);
=======
error_reporting(E_ALL);
ini_set('display_error',1);

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/8/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_pegawai', array('nip'=>$nip));
var_dump($result);
>>>>>>> 73574e91897b7e2e7262c782fdfa8d2e0a68000c

$data = json_decode($result);
?>