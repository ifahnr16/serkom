<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default" >
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="homeadmin.php">BERANDA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="hamadanpenyakit.php">HAMA DAN PENYAKIT <span class="sr-only">(current)</span></a></li>
        <li><a href="gejala.php">GEJALA</a></li>
        <li class="active"><a href="basispengetahuan.php">BASIS PENGETAHUAN <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p><a href="logout.php"><button type="button" class="btn btn-primary btn-block" id="myBtn" style="background-color: #945116; color: #FFFFFF;">LOGOUT</button></a></p></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-8 col-md-offset-2">
       <center><h2>SISTEM PAKAR DIAGNOSA HAMA DAN PENYAKIT TANAMAN PAPRIKA</h2></center><br>
       <div class="panel panel-info">
        <div class="panel-heading"></div>
        <div class="panel-body">
          <p align=justify>SELAMAT DATANG ADMIN.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>S1-Teknik Informatika 2024</p>
</footer>

</body>
</html>
