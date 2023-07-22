<?php
require 'koneksi.php';
if(isset($_POST["register"])){

    if(registrasi($_POST) > 0){
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";
    }else{
        echo mysqli_error($koneksi);
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <div class="h1"><b>SI</b>DINAS</div>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new user</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" id=nama" placeholder="Full Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
              <small class="text-danger">
                <? = form_error('nama');?></small>
              
              </div>
          </div>
        </div>
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" id=email" placeholder="Email Adress" required>
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-envelope">
            <small class="text-danger">
                <? = form_error('email');?></small>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id=password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
              <small class="text-danger">
                <? = form_error('password');?></small>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password2" id="password2" placeholder="password confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

<hr>
<div class="text-center">
      <a href="login.php" class="text-center">Already have an account? Login!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
