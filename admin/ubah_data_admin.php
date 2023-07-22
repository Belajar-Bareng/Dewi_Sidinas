<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//cek apakah tombol ubah sudah ditkan atau belum
if(isset($_POST["ubah"])){
}

//menangkap data dari url
$id_admin =$_GET['id_admin'];

//membuat query
$query=("SELECT * FROM admin WHERE id_admin = $id_admin");

//eksekusi query
$hasil = $koneksi->query($query);

//uraikan data admin
$row =$hasil->fetch_assoc();

?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Ubah Admin</li>
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
                <h3 class="card-title">Ubah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proses_ubah_admin.php" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <label for="id_admin">ID admin</label>
                    <input type="hidden"name="id_admin" class="form-control" id="id_admin" value="<?= $row['id_admin'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nm_admin">Nama</label>
                    <input type="nm_admin" name="nm_admin" class="form-control" id="nm_admin" value="<?= $row['nm_admin'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username" value="<?= $row['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"class="form-control" id="password" value="<?= $row['password'] ?>">
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
  