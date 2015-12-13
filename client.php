<?php
require_once('nusoap/lib/nusoap.php');
$url = 'http://satuab.burhanudin.me/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_penduduk',array());
//var_dump($result);

$data = json_decode($result);
?>