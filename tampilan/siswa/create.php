<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>

</head>
<body>
    <style>
        .reset-icon {
    font-size: 1.2em; 
    vertical-align: middle;
    position: relative;
    top: -2px;
}

        </style>
    <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Absensi</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <form action="db/db_siswa.php?action=create" method="post">
          <div class="card-body">

              <div class="form-group">
                  <label for="nisn">NISN</label>
                  <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" required>
              </div>
              <div class="form-group">
                  <label for="nama">Nama Siswa</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
              </div>
              <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas" required>
              </div>
              <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" required>
              </div>
             
              <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <select class="form-control" id="keterangan" name="keterangan" required>
                    <option value="" disabled selected>Pilih Keterangan</option>
                    <option value="hadir">Hadir</option>
                    <option value="alfa">Alfa</option>
                    <option value="sakit">Sakit</option>
                    <option value="izin">Izin</option>
              </div>
              <div class="form-group">
                  <label for="keterangan_lanjut">Keterangan Lanjut</label>
                  <textarea class="form-control" rows="3" id="keterangan_lanjut" name="keterangan_lanjut" placeholder="Masukkan Keterangan Lanjut"></textarea>
              </div>
          </div>
          <!-- /.card-body -->

        <div class="card-footer text-right">
                 <a href='index.php?page=absen&title=absen'>
            <button type="reset" class="btn btn-warning">
                <ion-icon name="refresh-circle-outline" class="reset-icon"></ion-icon> Reset
           </button>
                </a>
             <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Simpan
             </button>

        </div>

          </form>
      </div>
</body>
</html> 