<?php
include "koneksi.php";
$jumlah_siswa=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM siswa"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<section class="content">
          <div class="container-fluid">
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $jumlah_siswa?></h3>

                <p>Siswa<br>Yang Sudah Absen</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              <a href="index.php?page=siswa&title=siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
          </div>
        </section>
       <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Dashboard</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Selamat Datang 
          <?=$_SESSION['nama'] ??
          'pengguna' ?>, Klik <a href="index.php?page=siswa_create&title=siswa_create">disini</a> untuk absen
        </div>
          </div>
      </div>
</body>
</html>