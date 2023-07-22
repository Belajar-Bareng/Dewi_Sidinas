<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

if(isset($_POST["submit"])){

//menangkap data admin
$judul = $_POST["judul"];
$tgl_publikasi = $_POST["tgl_publikasi"];
$isi = $_POST["isi"];

//membuat query insert data
$query = "INSERT INTO pengumuman
VALUES
('', '$judul', '$tgl_publikasi', '$isi')";

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
            <h1>Kelola Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Kelola Pengumuman</li>
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
                    <label for="id_pengumuman">ID pengumuman</label>
                    <input type="id_pengumuman"name="id_pengumuman" class="form-control" id="id_pengumuman" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="judul" name="judul" class="form-control" id="judul" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="tgl_publikasi">Tanggal Publikasi</label>
                    <input type="tgl_publikasi" name="tgl_publikasi" class="form-control" id="tgl_publikasi" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="isi">isi Pengumuman</label>
                    <input type="isi" name="isi"class="form-control" id="isi" placeholder="">
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
  