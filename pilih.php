
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login SIM Lib</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <h3>
                <img src="img/apple-touch-icon.png" style="width: 40px;">
                SIM<span style="color:chartreuse;">Lib</span>
                </h3>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login Untuk Menggunakan Aplikasi</p>
                <p class="login-box-msg">Anda login sebagai: </p>
                <?php
                    if (isset($_GET['pesan'])=='Gagal'){
                        echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Failed!</h5>
                        Username atau Password anda salah!!!
                      </div>';
                    }
                ?>
                <form action="db/db_pilih.php" method="post">
                <div class="input-group mb-3">
                    <select name="pilih" class="form-control">
                        <option value="siswa">siswa</option>
                        <option value="lainnya">Lainnya</option>

                        <br>
                    </select>
                </div>
                    <div class="row">
                        
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Log In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
