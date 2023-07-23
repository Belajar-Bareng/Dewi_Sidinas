<?php
session_start();


require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//mengambil data
$query = "SELECT * FROM surat_keluar";
$hasil = $koneksi->query($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Surat Keluar</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelola Surat Keluar</h3>
                <a href="tambah_surat_keluar.php" class="btn btn-primary float-right"><i class='fas fa-plus mr-1'></i>Tambah Data</a>
                  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-dark">
                  <tr>
                    <th class="text-center" scope="col">ID Keluar</th>
                    <th class="text-center" scope="col">Tanggal</th>
                    <th class="text-center" scope="col">Kode Gaji</th>
                    <th class="text-center" scope="col">Nama Sekolah</th>
                    <th class="text-center" scope="col">Penerima</th>
                    <th class="text-center" scope="col">Petugas</th>
                    <th class="text-center" scope="col">File</th>
                    <th class="text-center" scope="col">Status</th>
                    <th class="text-center" scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $id_keluar=1; ?>
                  <?php

                  //menampilkan data hasil query
                  while ($row = $hasil->fetch_assoc()) : ?>
                  <tr>
                  <td><?= "$id_keluar" ; ?></td>
                    <td><?= $row["tanggal"]; ?></td>
                    <td><?= $row["kode_gaji"]; ?></td>
                    <td><?= $row["nm_instansi"]; ?></td>
                    <td><?= $row["nm_pegawai"]; ?></td>
                    <td><?= $row["nm_admin"]; ?></td>
                    <td><img src="/<?= $row["file"]; ?>" width="50"></td>
                    <td width="10%" class="text-center">
                      <a class ="btn-success">Diterima</a>
                    </td>
                    <td width="20%" class="text-center">
                    <a href="ubah_surat_keluar.php?id_keluar=<?= $row["id_keluar"] ; ?> "class="btn btn-warning"><i class='fas fa-edit mr-1'></i>Ubah</a>
                    <a href="hapus_surat_keluar.php?id_keluar=<?= $row["id_keluar"] ; ?>" class="btn btn-danger"><i class='fas fa-trash mr-1'></i>Hapus</a>
                  </td>
                  </tr>
                  <?php $id_keluar++ ; ?>
                  <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
          
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</div>
<?php
require_once 'templet/footer.php';
?>
    