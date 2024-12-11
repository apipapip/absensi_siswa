<?php
      include "koneksi.php";
      $nisn=$_GET['nisn'];
      $query="SELECT * FROM siswa WHERE nisn='$nisn'";
      $find_one=mysqli_query($koneksi,$query);
      $data=mysqli_fetch_assoc($find_one);

      ?>


      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Data <?=$data['nama'] ?></h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">

              <div class="form-group">
                  <label for="nisn">NISN</label>
                  <input type="text" class="form-control" id="nisn" name="nisn"  disabled value="<?=$data['nisn'] ?>">
              </div>
              <div class="form-group">
                  <label for="nama">Nama Siswa</label>
                  <input type="text" class="form-control" id="nama" name="nama" disabled value="<?=$data['nama'] ?>">
              </div>
              <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="jurusan" name="jurusan" disabled value="<?=$data['jurusan'] ?>">
              </div>
              <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <input type="text" class="form-control" id="kelas" name="kelas" disabled value="<?=$data['kelas'] ?>">
              </div>
              <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="text" class="form-control" id="tanggal" name="tanggal" disabled value="<?=$data['tanggal'] ?>">
              </div>
              <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" disabled value="<?=$data['keterangan'] ?>">
              </div>
              <div class="form-group">
                  <label for="keterangan_lanjut">Keterangan Lanjut</label>
                  <textarea class="form-control" rows="3" id="keterangan_lanjut" name="keterangan_lanjut" disabled> <?=$data['keterangan_lanjut'] ?></textarea>
              </div>


          </div>
          <!-- /.card-body -->

         <div class="card-footer text-right">
            <a href='index.php?page=siswa&title=siswa'>
             <button type="submit" class="btn btn-primary">
                <i class="fas fa-arrow-circle-left"></i> Kembali
             </button>
             </a>
 
        </div>
      </div>
      <!-- /.card -->