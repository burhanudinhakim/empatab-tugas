<?php

require_once('nusoap/lib/nusoap.php');
require_once 'client.php'; 
$url = 'http://localhost/empatab/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$nik =  isset($_GET["nik"]) ? $_GET["nik"] : '' ;
$nama = isset($_GET["nama"]) ? $_GET["nama"] : '' ;

$result = $client->call('get_riwayat_pekerjaan', array('nip'=>$nik));

$data = json_decode($result);

?>
<?php require_once('header.php');?>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
           <h3 class="box-title">Data Riwayat Pekerjaan <?php echo $nama;?> </h3>
        </div><!-- /.box-header -->
          <div class="box-body">
			<table id="example1" class="table table-bordered table-hover">
				<thead>
					<tr>
						<td>Nomor Induk Pegawai</td>
						<td>Nama Pekerjaan</td>
						<td>Tahun Mulai</td>
						<td>Tahun Berakhir</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($data as $key => $value) { ?>
					<tr>
						<td><?php echo $value->nip?></td>
						<td><?php echo $value->pekerjaan ;?></td>
						<td><?php echo $value->tahun_mulai ?></td>
						<td><?php echo $value->tahun_akhir ?></td>
						<td>
	                      <a class="btn btn-warning" href="edit.php?nip=<?= $value->nip ?>">Edit</a>
	                      &nbsp;
	                      <a class="btn btn-danger"  href="delete_riwayat.php?nip=<?=$value->nip?>&nama=<?php echo $nama?>&nik=<?php echo $nik?>">Delete</a>
                    	</td>
					</tr>
					<?php } ?>
				</tbody>
				<div style="padding-bottom:20px;">
                  <a class="btn btn-success" href="register_pekerjaan.php?nik=<?=$nik?>&nama=<?php echo $nama;?>">Tambah Riwayat</a>
            	</div>
			</table>
		  </div>
        </div>
      </div>
    </div>
  </section>
<?php require_once('assets/footer.php');?>