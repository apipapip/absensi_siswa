<?php
include "../koneksi.php";
$aksi=$_GET['action'];

if($aksi=="create"){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $tanggal=date("Y-m-d");
    $keterangan=$_POST['keterangan'];
    $keterangan_lanjut=$_POST['keterangan_lanjut'];
    
    $query="INSERT INTO siswa SET nisn='$nisn', nama='$nama', kelas='$kelas',jurusan='$jurusan',tanggal='$tanggal',keterangan='$keterangan',keterangan_lanjut='$keterangan_lanjut'";
    $insert=mysqli_query($koneksi,$query);
}

elseif($aksi=="edit"){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $tanggal=date("d-m-Y");
    $keterangan=$_POST['keterangan'];
    $keterangan_lanjut=$_POST['keterangan_lanjut'];
    // var_dump($nisn,$nama,$);

    $query="UPDATE siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan',keterangan='$keterangan',keterangan_lanjut='$keterangan_lanjut' WHERE nisn='$nisn'";

    $update=mysqli_query($koneksi,$query);
 

}
header("location:../index.php?page=siswa&title=siswa");