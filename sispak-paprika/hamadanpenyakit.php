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
           <h2 class="text-center">DAFTAR HAMA DAN PENYAKIT</h2>
      <form id="form1" name="form1" method="post" action="hamadanpenyakit.php">
				<label for="sel1">Jenis Tanaman</label>            
				<select class="form-control"  name="tanaman" onChange='this.form.submit();'>
				<option>Tanaman</option>
                <option>Paprika</option>
  		</select>
  </form>

  <br>
<!-- Search box and button -->
<form method="GET" action="hamadanpenyakit.php">
  <div class="form-group">
    <label for="search">Search Hama dan Penyakit:</label>
    <input type="text" class="form-control" name="search" id="search" placeholder="Masukkan nama penyakit" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
    <button type="submit" class="btn btn-primary btn-block active" style="background-color: #945116; color: #FFFFFF; margin-top: 10px;">Search</button>
  </div>
</form>
<br>

<br>
<a href="ainputpenyakit.php"><button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button></a>
    	<br><br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Penyakit</th>
							<th>Nama Penyakit</th>
                            <th>Jenis Penyakit</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <?php
if (isset($_POST['tanaman'])) {
  if ($_POST['tanaman'] != "jenistanaman") {
    $queri = "SELECT * FROM penyakit WHERE jenistanaman = '".$_POST['tanaman']."'";
    $hasil = mysqli_query($konek_db, $queri);   
    $id = 0;
    while ($data = mysqli_fetch_array($hasil)){  
      $id++; 
      echo "      
        <tr>  
          <td>".$id."</td>
          <td>".$data[0]."</td>  
          <td>".$data[1]."</td>  
          <td>".$data[2]."</td>  
          <td><a href=\"adetailpenyakit.php?id=".$data[0]."\"><i class='glyphicon glyphicon-search'></i></a>"." || <a href=\"aeditpenyakit.php?id=".$data[0]."\"><i class='glyphicon glyphicon-pencil'></i></a>"." || <a href=\"adeletepenyakit.php?id=".$data[0]."\"  onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a></td>
        </tr>";      
    }
  }
} elseif (isset($_GET['search'])) {
  $search = mysqli_real_escape_string($konek_db, $_GET['search']);
  $queri = "SELECT * FROM penyakit WHERE namapenyakit LIKE '%".$search."%' OR idpenyakit LIKE '%".$search."%'";
  $hasil = mysqli_query($konek_db, $queri);   
  $id = 0;
  while ($data = mysqli_fetch_array($hasil)){  
    $id++; 
    echo "      
      <tr>  
        <td>".$id."</td>
        <td>".$data[0]."</td>  
        <td>".$data[1]."</td>  
        <td>".$data[2]."</td>  
        <td><a href=\"adetailpenyakit.php?id=".$data[0]."\"><i class='glyphicon glyphicon-search'></i></a></td>
      </tr>";      
  }
}
?>
</table><br><br><br><br><br>
            </div>
    </div>
  </div>
</div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin menghapus data ini?');
}
</script>

<footer class="container-fluid text-center">
  <p>S1-Teknik Informatika 2024</p>
</footer>

</body>
</html>
