<?php
session_start();

require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

if(isset($_POST["submit"])){

//menangkap data user
$tanggal = $_POST["tanggal"];
$kode_gaji = $_POST["kode_gaji"];
$nm_instansi = $_POST["nm_instansi"];
$nm_pegawai = $_POST["nm_pegawai"];
$nm_admin = $_POST["nm_admin"];
$file = '';
$status = $_POST["status"];

if ($_FILES['file']) {
  try {
    $storage_dir = 'tmp/';
    $file = $storage_dir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], '../' . $file);
  } catch (\Throwable $th) {
    var_dump($th->getMessage());
    exit;
  }
}


//membuat query insert data
$query = "INSERT INTO surat_keluar
VALUES
(null, '$tanggal', '$kode_gaji', '$nm_instansi', '$nm_pegawai', '$nm_admin', '$file', '$status')";

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
            <h1>Kelola Surat Keluar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Surat Keluar</li>
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
              <form action="" method="post" enctype="multipart/form-data">

              <div class="card-body">
                  <div class="form-group">
                    <label for="id_keluar">ID Keluar</label>
                    <input type="id_keluar" name="id_keluar" class="form-control" id="id_keluar" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-calender-days" style="color: #000000;"></i></span>
                    <input type="text" class="form-control datepicker" name="tanggal" placeholder="tahun/bulan/tanggal" required>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="kode_gaji">Kode Gaji</label>
                      <select class="form-control" name="kode_gaji">
					               <option></option>
					                	<?php
					                    	$q = $koneksi->query ("SELECT * FROM instansi");
							                        while ($pilihan_instansi = $q->fetch_assoc()){
							                      	echo "<option value='$pilihan_instansi[kode_gaji]'>
									                    $pilihan_instansi[kode_gaji]</option>";
					                      		}
					                  	?>
					               </select>
                    </div>
                    <div class="form-group">
                    <label for="nm_instansi">Nama Sekolah</label>
                      <select class="form-control" name="nm_instansi">
					               <option></option>
					                	<?php
					                    	$q = $koneksi->query ("SELECT * FROM instansi");
							                        while ($pilihan_instansi = $q->fetch_assoc()){
							                      	echo "<option value='$pilihan_instansi[nm_instansi]'>
									                    $pilihan_instansi[nm_instansi]</option>";
					                      		}
					                  	?>
					               </select>
                    </div>
                    <div class="form-group">
                    <label for="nm_pegawai">Penerima</label>
                    <input type="nm_pegawai" name="nm_pegawai" class="form-control" id="nm_pegawai" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="nm_admin">Petugas</label>
                      <select class="form-control" name="nm_admin">
					               <option></option>
					                	<?php
					                    	$q = $koneksi->query ("SELECT * FROM admin");
							                        while ($pilihan_nm_admin = $q->fetch_assoc()){
							                      	echo "<option value='$pilihan_nm_admin[nm_admin]'>
									                    $pilihan_nm_admin[nm_admin]</option>";
					                      		}
					                  	?>
					               </select>
                    </div>
                    <div class="form-group">
                    <label for="file">Gambar</label>
                    <input type="file" name="file" class="form-control" id="file" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="status">Status</label>
					               <select class="form-control" name="status">
                        <option></option>
                          <option>Diterima</option>
                          <option>Belum Diterima</option>
                        </select>
                      </div>
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
  