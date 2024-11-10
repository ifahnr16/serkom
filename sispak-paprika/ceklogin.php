<?php
include('koneksi.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menggunakan prepared statement untuk keamanan
    $sql = $konek_db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $sql->bind_param("ss", $username, $password);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['login_user'] = $username;
        header('Location: homeadmin.php');
        exit();
    } else {
        header('Location: salahlogin.php');
        exit();
    }
}
?>
