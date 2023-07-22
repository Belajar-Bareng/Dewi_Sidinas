<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//cek apakah tombol ubah sudah ditkan atau belum
if(isset($_POST["ubah"])){
}

//menangkap data dari url
$id_pengumuman =$_GET['id_pengumuman'];

//membuat query
$query=("SELECT * FROM pengumuman WHERE id_pengumuman = $id_pengumuman");

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
              <form action="proses_ubah_postingan.php" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <label for="id_pengumuman">ID pengumuman</label>
                    <input type="hidden"name="id_pengumuman" class="form-control" id="id_pengumuman" value="<?= $row['id_pengumuman'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="judul" name="judul" class="form-control" id="judul" value="<?= $row['judul'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tgl_publikasi">Tanggal Publikasi</label>
                    <input type="tgl_publikasi" name="tgl_publikasi" class="form-control" id="tgl_publikasi" value="<?= $row['tgl_publikasi'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="isi">isi Pengumuman</label>
                    <input type="isi" name="isi"class="form-control" id="isi" value="<?= $row['isi'] ?>">
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
  