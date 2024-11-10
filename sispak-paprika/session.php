<?php
include "koneksi.php";
session_start(); // Memulai Session

// Memeriksa apakah user sudah login atau belum
if (!isset($_SESSION['login_user'])) {
    header("Location: index.php"); // Redirect ke halaman indeks jika belum login
    exit();
}

// Mengambil username dari session
$user_check = $_SESSION['login_user'];

// Menggunakan prepared statement untuk keamanan
$sql = $konek_db->prepare("SELECT * FROM user WHERE username = ?");
$sql->bind_param("s", $user_check);
$sql->execute();
$result = $sql->get_result();
$row = $result->fetch_assoc();
$login_session = $row['nama'];

// Jika session tidak ditemukan
if (!$login_session) {
    echo "Session tidak ditemukan";
    // Atau redirect ke halaman indeks
    header("Location: index.php");
    exit();
}


?>
