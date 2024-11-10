<?php
include('koneksi.php');
session_start(); // Memulai Session

// Memeriksa apakah user sudah login atau belum
if (isset($_SESSION['login_user'])) {
    header("Location: homeadmin.php"); // Redirect ke halaman homeadmin jika sudah login
    exit();
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
      <a class="navbar-brand" href="index.php">BERANDA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="diagnosa.php">DIAGNOSA PENYAKIT <span class="sr-only">(current)</span></a></li>
        <li><a href="daftarpenyakit.php">DAFTAR PENYAKIT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p><button type="button" class="btn btn-primary btn-block active" style="background-color: #945116; color: #FFFFFF; padding: 10px;" id="myBtn">LOGIN</button></p></li>
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
        <p style="font-style: oblique;" align=justify>Selamat Datang di Sistem Pakar Hama dan Penyakit Tanaman Paprika</p>

        <p align=justify>Platform ini dirancang untuk membantu para petani dan pecinta tanaman paprika dalam mengidentifikasi dan menangani hama serta penyakit yang sering menyerang tanaman paprika. Dengan memanfaatkan teknologi sistem pakar, pengguna dapat mengetahui gejala-gejala yang muncul pada tanaman dan mendapatkan solusi penanganan yang tepat.</p>

        <p align=justify>Sistem pakar ini menggunakan metode Certainty Factor (CF) untuk menghitung tingkat kepastian dari diagnosa yang diberikan. Metode CF ini memungkinkan sistem mengelola ketidakpastian dalam diagnosa, menghasilkan analisis yang lebih fleksibel dan akurat berdasarkan gejala-gejala yang ditemukan pada tanaman paprika.</p>

        <p align=justify>Aplikasi ini tersedia dalam bentuk website, sehingga memudahkan akses pengguna dari berbagai perangkat yang terhubung ke internet. Pengguna dapat memasukkan data gejala yang tampak pada tanaman mereka, dan sistem akan memproses data tersebut untuk memberikan diagnosa dan rekomendasi tindakan, seperti pemilihan pestisida yang sesuai, pengendalian biologis, atau penerapan praktik agronomi yang efektif.</p>

        <p align=justify>Dengan adanya sistem pakar ini, diharapkan petani dapat merespons lebih cepat dan tepat dalam menangani masalah hama dan penyakit pada tanaman paprika, sehingga produktivitas dan kualitas panen dapat ditingkatkan, serta kerugian akibat serangan hama dan penyakit dapat ditekan.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" method="post" action="ceklogin.php">
          <div class="form-group">
            <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
          </div>
          <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>S1-Teknik Informatika 2024</p>
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
