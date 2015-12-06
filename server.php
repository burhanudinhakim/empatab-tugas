<?php
error_reporting(E_ALL);
ini_set('display_error',1);

require_once 'nusoap/lib/nusoap.php';
require_once 'adodb/adodb.inc.php';
require_once 'pegawai.php';
$server = new nusoap_server();
$server->configureWSDL('Service pegawai','urn:pegawai');
$server->wsdl->schemaTargetNamespace = 'urn:pegawai';

$server->register('get_pegawai',
  array(
    'nip' => 'xsd:string'),
    array(
      'return' => 'xsd:string'
    ),
    'urn:pegawai',
    'urn:pegawai#get_pegawai',
    'rpc',
    'encoded',
    'Service untuk mengetahui daftar pegawai. Dan untuk menampilkan pegawai secara sepesifik'
  );

$server->register('get_riwayat_pekerjaan',
  array(
    'nip' => 'xsd:string'),
    array(
      'return' => 'xsd:string'
    ),
    'urn:pegawai',
    'urn:pegawai#get_riwayat_pekerjaan',
    'rpc',
    'encoded',
    'Service untuk mengetahui riwayat pekerjaan dari pegawai'
  );

function get_pegawai($nip="") {
  $pegawai = new Pegawai;
  return $pegawai->get_pegawai($nip);
}

function get_riwayat_pekerjaan($nip="") {
  $pegawai = new Pegawai;
  return $pegawai->get_riwayat_pekerjaan($nip);
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);
?>