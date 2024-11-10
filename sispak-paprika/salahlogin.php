<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: index.php");
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
          
          
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="index.php"><button type="button" class="btn btn-primary btn-block active" style="background-color: #FF6347; color: #FFFFFF;">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block" style="background-color: #FF6347; color: #FFFFFF;">DIAGNOSA PENYAKIT</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block" style="background-color: #FF6347; color: #FFFFFF;">DAFTAR PENYAKIT</button></a></p>
      <br><br><br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-primary btn-block" id="myBtn" style="background-color: #FF6347; color: #FFFFFF;">LOGIN</button></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <center><h2>SISTEM PAKAR DIAGNOSA HAMA DAN PENYAKIT TANAMAN BAWANG MERAH DAN CABAI
</h2></center><br>
    <div class="alert alert-danger alert-dismissible" id="alert">
        <a href="index.php" class="close">&times;</a>
        USERNAME ATAU PASSWORD SALAH, SILAHKAN LOGIN LAGI
        </div>
        <div class="panel panel-info">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <p align=justify>Sistem pakar diagnosa hama dan penyakit pada tanaman tomat adalah aplikasi berbasis teknologi yang dirancang untuk membantu petani dan agronom dalam mengidentifikasi dan mengatasi masalah yang disebabkan oleh hama dan penyakit pada tanaman tomat. Sistem ini memanfaatkan kecerdasan buatan dan pengetahuan dari para ahli di bidang pertanian untuk memberikan rekomendasi yang akurat dan tepat waktu.</p>

                    <p align=justify>Tanaman tomat rentan terhadap berbagai jenis hama seperti ulat grayak, kutu daun, dan thrips, serta penyakit seperti layu bakteri, busuk buah, dan bercak daun. Tanpa penanganan yang tepat, serangan hama dan penyakit ini dapat menyebabkan penurunan hasil panen dan kualitas buah.</p>

                    <p align=justify>Sistem pakar ini menggunakan metode Certainty Factor (CF) untuk menghitung tingkat kepastian dari diagnosa yang diberikan. Metode CF memungkinkan sistem untuk menangani ketidakpastian dalam diagnosa, memberikan hasil yang lebih fleksibel dan akurat berdasarkan gejala-gejala yang terlihat pada tanaman tomat.</p>

                    <p align=justify>Aplikasi ini tersedia dalam bentuk website, memungkinkan akses yang mudah dan cepat bagi pengguna dari berbagai perangkat yang terhubung ke internet. Pengguna dapat menginput data gejala yang muncul pada tanaman mereka, dan sistem akan memproses data tersebut untuk memberikan diagnosa dan rekomendasi tindakan yang harus diambil, seperti penggunaan pestisida yang tepat, metode pengendalian biologis, atau praktik agronomi yang baik.</p>

                    <p align=justify>Dengan adanya sistem pakar ini, diharapkan petani dapat lebih cepat dan tepat dalam menangani masalah hama dan penyakit pada tanaman tomat, sehingga produktivitas dan kualitas hasil panen dapat meningkat, serta kerugian akibat serangan hama dan penyakit dapat diminimalisir.</p>
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
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
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
