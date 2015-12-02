<?php
error_reporting(E_ALL);
ini_set('display_error',1);

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/sit/8/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nik =  isset($_GET["nik"]) ? $_GET["nik"] : '' ;

$result = $client->call('get_penduduk_by_nik', array('nik'=>$nik));
$data = json_decode($result);
?>