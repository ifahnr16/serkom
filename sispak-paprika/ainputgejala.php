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
    <script src="js/validator.js"></script>
    
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
        <h2 class="text-center">INPUT GEJALA</h2>
      <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="ainputgejala.php">
          <div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">ID Gejala:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="idgejala" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">Gejala:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="gejala" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>
			<div class="form-group ">
				<label class="control-label col-sm-2" for="alamat">Daerah:</label>
				<div class="col-sm-10">           
				<select class="form-control" name="daerah"  onChange='this.form.submit();'>
				<option>Daerah</option>
                <option>Akar</option>
                <option>Batang</option>
                <option>Daun</option>
                <option>Bunga</option>
                <option>Buah</option>
  		</select>
                    
				</div>
			</div>	
          <div class="form-group ">
				<label class="control-label col-sm-2" for="alamat">Jenis Tanaman:</label>
				<div class="col-sm-10">
					<select class="form-control" name="jenistanaman"  onChange='this.form.submit();'>
				<option>Tanaman</option>
                <option>Paprika</option>
  		</select>
                    
				</div>
			</div>	
      <ul class="nav navbar-nav navbar-right">
        <li><p><button type="submit" name ="submit" class="btn btn-primary">Simpan</button></p></li>
      </ul>
                
                <?php			
if(isset($_POST['submit'])){  //commit
    $idgejala     = $_POST['idgejala'];
    $gejala       = $_POST['gejala'];
    $daerah       = $_POST['daerah'];
    $jenistanaman = $_POST['jenistanaman'];
    
    $query = "INSERT INTO gejala (idgejala, gejala, daerah, jenistanaman) 
              VALUES ('$idgejala', '$gejala', '$daerah', '$jenistanaman')";
    
    $result = mysqli_query($konek_db, $query);
    if($result){
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil disimpan")';
      echo '</script>';
      }
}
?>

		</form>		
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>S1-Teknik Informatika 2024</p>
</footer>

</body>
</html>
