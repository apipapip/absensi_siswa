<?php
session_start();
include "../koneksi.php";

$pilih= $_POST['pilih'];

if ($pilih == "siswa"){
    $_SESSION['status_login2'] == true;
    header("location:../siswa.php");
}elseif($pilih == "lainnya"){
    header("location:../login.php");
}