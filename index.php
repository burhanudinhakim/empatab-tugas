<?php require_once 'client.php' ?>

<center><h2>Penduduk</h2></center>
<?php if(isset($nik)) { ?>
<table border="1" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td>ID</td>
    <td>NIK</td>
    <td>Nama</td>
  </tr>
  <?php foreach ($data as $key => $value) { ?>
  <tr>
    <td><?php echo $value->penduduk_id;?></td>
    <td><a href="?nik=<?= $value->penduduk_nik ?>"><?php echo $value->penduduk_nik;?></a></td>
    <td><?php echo $value->penduduk_nama;?></td>
  </tr>
  <?php } ?>
</table>
<?php }else{ ?>
<table border="1" align="center" cellpadding="4" cellspacing="0">
  <?php foreach ($data as $key => $value) { ?>
    <tr>
      <td>ID</td>
      <td><?php echo $value->penduduk_id?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?php echo $value->penduduk_nama?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><?php echo $value->penduduk_tanggal_lahir?></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><?php echo $value->penduduk_tempat_lahir?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><?php echo $value->penduduk_agama?></td>
    </tr>
  <?php } ?>
</table>
<?php }?>