<?php
include 'koneksi.php';

//menangkap data admin
$id_masuk = $_POST["id_masuk"];
$tanggal = $_POST["tanggal"];
$kode_gaji = $_POST["kode_gaji"];
$nm_instansi = $_POST["nm_instansi"];
$nm_admin = $_POST["nm_admin"];
$nm_pengantar = $_POST["nm_pengantar"];
$status = $_POST["status"];

//membuat query insert data
$query = ("UPDATE surat_masuk set tanggal='$tanggal', kode_gaji='$kode_gaji', nm_instansi='$nm_instansi',nm_admin='$nm_admin',
nm_pengantar='$nm_pengantar', status='$status' where id_masuk='$id_masuk'");

//eksekusi Query
mysqli_query($koneksi,$query);

//redirect kembali ke data_admin.php
header('location: surat_masuk.php');

?>