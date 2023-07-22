<?php
include 'koneksi.php';

//menangkap data admin
$id_keluar = $_POST["id_keluar"];
$tanggal = $_POST["tanggal"];
$kode_gaji = $_POST["kode_gaji"];
$nm_instansi = $_POST["nm_instansi"];
$nm_pegawai = $_POST["nm_pegawai"];
$nm_admin = $_POST["nm_admin"];
$gambar =  $_POST["gambar"];
$status = $_POST["status"];

//membuat query insert data
$query = ("UPDATE surat_keluar set tanggal='$tanggal', kode_gaji='$kode_gaji', nm_instansi='$nm_instansi',nm_pegawai='$nm_pegawai',
nm_admin='$nm_admin', gambar='$gambar', status='$status' where id_keluar='$id_keluar'");

//eksekusi Query
mysqli_query($koneksi,$query);

//redirect kembali ke data_admin.php
header('location: surat_keluar.php');

?>