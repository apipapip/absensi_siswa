<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$jumlah_admin = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);
if ($jumlah_admin > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['status_login'] = true;
    $_SESSION['waktu'] = time();

    if ($data['sebagai'] == 'admin') {

        $_SESSION['status_login1'] = true;
   
        header('Location:index.php');
    } elseif ($data['sebagai'] == 'guru') {
   
        $_SESSION['status_login2'] = true;

        header('Location:guru.php');
    } 

}else{
    header("location:login.php?pesan=Gagal");
}