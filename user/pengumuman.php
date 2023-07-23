<?php
session_start();
require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//mengambil data
$query = "SELECT * FROM pengumuman";
$hasil = $koneksi->query($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Pengumuman</li>
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
                <h3 class="card-title">Kelola Pengumuman</h3>
             
                  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-dark">
                  <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Judul pengumuman</th>
                    <th class="text-center" scope="col">Tanggal Publikasi</th>
                    <th class="text-center" scope="col">Isi Pengumuman</th>
                 
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php $id_pengumuman=1; ?>
                  <?php

                  //menampilkan data hasil query
                  while ($row = $hasil->fetch_assoc()) : ?>
                  <tr>
                    <td><?= "$id_pengumuman" ; ?></td>
                    <td><?= $row["judul"]; ?></td>
                    <td><?= $row["tgl_publikasi"]; ?></td>
                    <td><?= $row["isi"]; ?></td>
                  
                  </tr>
                  <?php $id_pengumuman++ ; ?>
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
