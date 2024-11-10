<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
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
  
<div class="container-fluid text-left">    
  <div class="row content">
    <div class="col-md-8 col-md-offset-2">
      <h2 class="text-center">DETAIL HAMA DAN PENYAKIT</h2>
      <div class="form-group">
        <br><label class="control-label col-sm-2">ID :</label>
        <div class="col-sm-10">
          <?php
            $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text' class='form-control' id='idpenyakit' readonly value='".$data['idpenyakit']."'><br>";
            }
          ?>
        </div>
      </div>	
      <div class="form-group">
        <br><label class="control-label col-sm-2">NAMA :</label>
        <div class="col-sm-10">
          <?php
            $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text' class='form-control' id='namapenyakit' readonly value='".$data['namapenyakit']."'><br>";
            }
          ?>
        </div>
      </div>
      <div class="form-group">
        <br><label class="control-label col-sm-2">JENIS :</label>
        <div class="col-sm-10">
          <?php
            $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text' class='form-control' id='jenistanaman' readonly value='".$data['jenistanaman']."'><br>";
            }
          ?>
        </div>
      </div>	
      <div class="form-group">
        <br><label class="control-label col-sm-2">GEJALA :</label>
        <div class="col-sm-10">
        <?php
            $tampil = "SELECT b.gejala FROM penyakit p JOIN basispengetahuan b ON p.namapenyakit=b.namapenyakit WHERE p.idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='4' class='form-control' id='gejala' readonly>".$data['gejala']."</textarea><br>";
            }
          ?>
        </div>
      </div>	
      <div class="form-group">
        <br><label class="control-label col-sm-2">KULTUR TEKNIS :</label><br>
        <div class="col-sm-10">
          <?php
            $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>".$data['kulturteknis']."</textarea><br>";
            }
          ?>
        </div>  
      </div>
      <div class="form-group">
        <br><label class="control-label col-sm-2">FISIK MEKANIS :</label><br>
        <div class="col-sm-10">
          <?php
            $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>".$data['fisikmekanis']."</textarea><br>";
            }
          ?>
        </div>  
      </div>
      <div class="form-group">
        <br><label class="control-label col-sm-2">KIMIAWI :</label><br>
        <div class="col-sm-10">
          <?php
            $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>".$data['kimiawi']."</textarea><br>";
            }
          ?>
        </div>  
      </div>
      <div class="form-group">
        <br><label class="control-label col-sm-2">HAYATI :</label><br>
        <div class="col-sm-10">
          <?php
            $tampil = "SELECT * FROM penyakit WHERE idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>".$data['hayati']."</textarea><br>";
            }
          ?>
        </div>  
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <p>S1 Teknik Informatika 2024</p>
</footer>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>