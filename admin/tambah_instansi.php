<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

if(isset($_POST["submit"])){

//menangkap data admin
$kode_gaji = $_POST["kode_gaji"];
$nm_instansi = $_POST["nm_instansi"];
$alamat_instansi = $_POST["alamat_instansi"];

//membuat query insert data
$query = $koneksi->query("INSERT INTO instansi(kode_gaji, nm_instansi, alamat_instansi)
VALUES ('".$kode_gaji."','".$nm_instansi."','".$alamat_instansi."')");
}

?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Sekolah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Kelola Sekolah</li>
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
                    <label for="kode_gaji">Kode Gaji</label>
                    <input type="kode_gaji"name="kode_gaji" class="form-control" id="kode_gaji" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="nm_instansi">Nama Sekolah</label>
                    <input type="nm_instansi" name="nm_instansi" class="form-control" id="nm_instansi" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="alamat_instansi">Alamat</label>
                    <input type="alamat_instansi" name="alamat_instansi" class="form-control" id="alamat_instansi" placeholder="">
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
  