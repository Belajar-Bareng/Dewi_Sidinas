<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//cek apakah tombol ubah sudah ditkan atau belum
if(isset($_POST["ubah"])){
}

//menangkap data dari url
$id_user =$_GET['id_user'];

//membuat query
$query=("SELECT * FROM user WHERE id_user = $id_user");

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
            <h1>Kelola Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Kelola Pegawai</li>
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
              <form action="proses_ubah_user.php" method="post">

              <div class="card-body">
                  <div class="form-group">
                    <label for="id_user">ID Pegawai</label>
                    <input type="id_user"name="id_user" class="form-control" id="id_user" value="<?= $row['id_user'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nm_user">Nama</label>
                    <input type="nm_user" name="nm_user" class="form-control" id="nm_user" value="<?= $row['nm_user'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username" value="<?= $row['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= $row['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="tgl_lahir" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $row['tgl_lahir'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="jenkel">jenkel</label>
                    <!--  <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukkan jenis kelamin"> -->
					               <select class="form-control" name="jenkel" value="<?= $row['jenkel'] ?>">
						                <option></option>
						                <option>Laki-laki</option>
						                <option>Perempuan</option>
					               </select>
                    </div>
               
             
                    <div class="form-group">
                    <label for="alamat_user">Alamat</label>
                    <input type="alamat_user" name="alamat_user" class="form-control" id="alamat_user" value="<?= $row['alamat_user'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="telp_user">Telepon</label>
                    <input type="telp_user" name="telp_user" class="form-control"  id="telp_user" value="<?= $row['telp_user'] ?>">
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
  