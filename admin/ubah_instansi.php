<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//cek apakah tombol ubah sudah ditkan atau belum
if(isset($_POST["ubah"])){
}

//menangkap data dari url
$kode_gaji =$_GET['kode_gaji'];

//membuat query
$query=("SELECT * FROM instansi");

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
                <h3 class="card-title">Ubah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proses_ubah_instansi.php" method="post">

              <div class="card-body">
                  <div class="form-group">
                    <label for="kode_gaji">Kode Gaji</label>
                    <input type="kode_gaji"name="kode_gaji" class="form-control" id="kode_gaji" value="<?= $row['kode_gaji'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nm_instansi">Nama Sekolah</label>
                    <input type="nm_instansi" name="nm_instansi" class="form-control" id="nm_instansi" value="<?= $row['nm_instansi'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="alamat_instansi">Alamat</label>
                    <input type="alamat_instansi" name="alamat_instansi" class="form-control" id="alamat_instansi" value="<?= $row['alamat_instansi'] ?>">
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
  