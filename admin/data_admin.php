<?php
session_start();


require_once 'templet/header.php';
require_once  'templet/sidebar.php';
include 'koneksi.php';

//mengambil data
$query = "SELECT * FROM admin";
$hasil = $koneksi->query($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
                <h3 class="card-title">Kelola Admin</h3>
                <a href="tambah_data_admin.php" class="btn btn-primary float-right"><i class='fas fa-plus mr-1'></i>Tambah Data</a>
                  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-dark">
                  <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $id_admin=1; ?>
                  <?php

                  //menampilkan data hasil query
                  while ($row = $hasil->fetch_assoc()) : ?>
                  <tr>
                    <td><?= "$id_admin" ; ?></td>
                    <td><?= $row["nm_admin"]; ?></td>
                    <td><?= $row["username"]; ?></td>
                    <td width="30%" class="text-center">
                    <a href="ubah_data_admin.php?id_admin=<?= $row["id_admin"] ; ?> "class="btn btn-warning"><i class='fas fa-edit mr-1'></i>Ubah</a>
                    <a href="hapus_admin.php?id_admin=<?= $row["id_admin"] ; ?>" class="btn btn-danger"><i class='fas fa-trash mr-1'></i>Hapus</a>
                  </td>
                  </tr>
                  <?php $id_admin++ ; ?>
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
 