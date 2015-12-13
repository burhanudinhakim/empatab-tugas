<!DOCTYPE html>
<?php
require_once 'client.php'; 
require_once 'header.php';
?>
<center><h2>Daftar Kepegawaian</h2></center>
<table align="center" cellpadding="4" cellspacing="0">
 
</table>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
           <h2 class="box-title">Data Pegawai </h2>
        </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Nomor Induk Kependudukan</td>
                    <td>Nama</td>
                    <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=1; 
                  foreach ($data as $key => $value) 
                  { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><a><?php echo $value->NIK;?></a></td>
                    <td><?php echo $value->nama;?></td>
                    <td>
                      <a class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $value->NIK?>">Detail</a>
                    <!--   &nbsp;
                      <a class="btn btn-warning" href="edit.php?nip=<?= $value->nip ?>">Edit</a> -->
                      &nbsp;
                      <a class="btn btn-warning" href='riwayat.php?nik=<?php echo $value->NIK?>&nama=<?php echo $value->nama?>'>Riwayat Pekerjaan</a>
                      &nbsp;
                      <!-- <a class="btn btn-danger"  href="delete.php?nip=<?= $value->nip ?>">Delete</a> -->
                    </td>
                  </tr>
                  <?php $i++; } ?>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </section>



     <?php $i=1; 
          foreach ($data as $key => $value) 
      { ?>
    <div id="myModal<?php echo $value->NIK?>" class="modal fade" role="dialog">
      <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Detail Pegawai</h4>
          </div>
          <div class="modal-body"><!--modal body ada di sini-->

              <div class="form-group col-xs-6">
                <label>Nomor Induk Kependudukan : </label><span><p><?php echo $value->NIK;?></p></span>
                
              </div>

              <div class="form-group col-xs-6">
                <label>Nomor Kartu Keluarga : </label><span><p><?php echo $value->no_kk;?></p></span>
                
              </div>

              <div class="form-group col-xs-6">
                <label>Nama Lengkap : </label><span><p><?php echo $value->nama;?></p></span>
                
              </div>

              <div class="form-group col-xs-6">
                <label>Tanggal Lahir : </label><span><p><?php echo $value->tanggal_lahir;?></p></span>
                
              </div>

              
              <div class="form-group col-xs-6">
                 <label>Jenis Kelamin : </label><span><p><?php echo $value->jenis_kelamin;?></p></span>
                
              </div>
                  
              <div class="form-group col-xs-6">
                <label>Agama: </label><span><p><?php echo $value->agama;?></p></span>
                
              </div>
                

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <?php $i++; } ?>


<?php require_once 'assets/footer.php';?>

