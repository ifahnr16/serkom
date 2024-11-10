<?php
session_start();
session_destroy();
echo "<script>alert('Terima kasih, Anda Berhasil Logout');</script>";
echo "<script>window.location.href='index.php';</script>";
exit();
?>
