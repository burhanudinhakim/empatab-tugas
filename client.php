<?php
error_reporting(E_ALL);
ini_set('display_error',1);

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/8/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_pegawai', array('nip'=>$nip));
var_dump($result);

$data = json_decode($result);
?>