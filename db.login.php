<?php
session_start();
include "koneksi.php";

// Ambil username dan password dari input form
$username = $_POST['username'];
$password = $_POST['password'];

$query="SELECT * FROM admin WHERE username='$username'";
$login=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($login);
if(password_verify($pass,$data['password'])){
    $_SESSION['username']=$data['username'];
    $_SESSION['id']=$data['id'];
    $_SESSION['nama']=$data['nama'];
    $_SESSION['login_status']=true;
    header('location:index.php');
}else{
    header("location:login.php?pesan=Gagal");
}