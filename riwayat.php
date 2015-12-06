<?php

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/8/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nip =  isset($_GET["nip"]) ? $_GET["nip"] : '' ;

$result = $client->call('get_riwayat_pekerjaan', array('nip'=>$nip));

var_dump($nip);

$data = json_decode($result);

foreach ($data as $value) {

?>
<table style="margin:0; padding:0">
	<tr>
		<td>Nama</td>
		<td>&nbsp;</td>
		<td><?php echo $value->nama ?></td>
	</tr>
</table>

<?php

}

$result = $client->call('get_riwayat_pekerjaan', array('nip'=>$nip));
$data = json_decode($result);
var_dump($result);
?>

<table>
	<tr>
		<td>Nama Pekerjaan</td>
		<td>Tahun Mulai</td>
		<td>Tahun Berakhir</td>
	</tr>
	<?php foreach ($data as $value) { ?>
	<tr>
		<td><?php echo $value->pekerjaan ?></td>
		<td><?php echo $value->tahun_mulai ?></td>
		<td><?php echo $value->tahun_berakhir ?></td>
	</tr>
	<?php } ?>
</table>