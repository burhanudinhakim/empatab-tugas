<?php require_once 'client.php' ?>
  
<center><h2>Daftar Penduduk</h2></center>
<table align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td colspan='3' align="left" style="float:left"><a href="register.php">Tambah Pegawai</a></td>
  </tr>
</table>
<table border="1" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td>No</td>
    <td>NIP</td>
    <td>Nama</td>
    <td>Action</td>
  </tr>
  <?php $i=1; foreach ($data as $key => $value) { ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $value->nip;?></a></td>
    <td><?php echo $value->nama;?></td>
    <td>
      <a href="detail.php?nip=<?= $value->nip ?>">Detail</a>
      &nbsp;
      <a href="edit.php?nip=<?= $value->nip ?>">Edit</a>
      &nbsp;
      <a href="riwayat.php?nip=<?= $value->nip ?>">Riwayat Pekerjaan</a>
      &nbsp;
      <a href="delete.php?nip=<?= $value->nip ?>">Delete</a>
    </td>
  </tr>
  <?php $i++; } ?>
</table>