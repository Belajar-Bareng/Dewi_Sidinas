<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

if(isset($_POST["submit"])){

//menangkap data admin
$nm_admin = $_POST["nm_admin"];
$username = $_POST["username"];
$password = $_POST["password"];

//membuat query insert data
$query = "INSERT INTO admin
VALUES
('', '$nm_admin', '$username', '$password')";

//eksekusi Query
mysqli_query($koneksi,$query);
}

?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Kelola Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <label for="id_admin">ID admin</label>
                    <input type="id_admin"name="id_admin" class="form-control" id="id_admin" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="nm_admin">Nama</label>
                    <input type="nm_admin" name="nm_admin" class="form-control" id="nm_admin" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"class="form-control" id="password" placeholder="">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </div>
            </div>
</div>
</div>

<?php
require_once 'templet/footer.php';
?>
  