<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Data Kepegawaian</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="login/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="login/css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login Pegawai </h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="login.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="NIP" name="nip">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary"> Login </button>
              <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="login/js/jquery-2.1.4.min.js"></script>
		<script src="login/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
if(isset($_POST['nip'])){

  $konek=mysql_connect("localhost","root","");
    if(!$konek){
      echo "Galaaatt";
    }
  $db=mysql_select_db('kepegawaian',$konek);

  $nip=$_POST['nip'];
  $pass=$_POST['password'];

  echo $nip.''.$pass;
  $_SESSION['nip']=$nip;
  $query = "select * from user where nip='$nip' and password=md5('$pass')";
  $result = mysql_query($query);
  if(mysql_num_rows($result)>=1){
    $res=mysql_query("select nama from pegawai where nip='$nip'");
    $row=mysql_fetch_assoc($res);
    $username=$row['nama'];

    $_SESSION['username']=$username;

    header('location:index.php');
  }else{
    header('location:login.php');
  }
}
?>