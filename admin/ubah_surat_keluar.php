<?php
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//cek apakah tombol ubah sudah ditkan atau belum
if(isset($_POST["ubah"])){
}

//menangkap data dari url
$id_keluar =$_GET['id_keluar'];

//membuat query
$query=("SELECT * FROM surat_keluar WHERE id_keluar = $id_keluar");

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
                <h3 class="card-title">Ubah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proses_ubah_surat_keluar.php" method="post">

              <div class="card-body">
                  <div class="form-group">
                    <label for="id_keluar">ID Keluar</label>
                    <input type="hidden" name="id_keluar" class="form-control" id="id_keluar" value="<?= $row['id_keluar'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa-solid fa-calender-days" style="color: #000000;"></i></span>
                    <input type="text" class="form-control datepicker" name="tanggal" placeholder="tahun/bulan/tanggal" value="<?= $row['tanggal'] ?>">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="kode_gaji">Kode Gaji</label>
                      <select class="form-control" name="kode_gaji" value="<?= $row['kode_gaji'] ?>">
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
                      <select class="form-control" name="nm_instansi" value="<?= $row['nm_instansi'] ?>">
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
                    <input type="nm_pegawai" name="nm_pegawai" class="form-control" id="nm_pegawai" value="<?= $row['nm_pegawai'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="nm_admin">Petugas</label>
                      <select class="form-control" name="nm_admin" value="<?= $row['nm_admin'] ?>">
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
                    <label for="gambar">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="gambar" value="<?= $row['gambar'] ?>">>
                        <label class="custom-file-label" for="gambar">Choose file</label>
                      </div>
                      </div>
                      </div>
                    <div class="form-group">
                    <label for="status">Status</label>
					               <select class="form-control" name="status" value="<?= $row['status'] ?>">
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
  
              