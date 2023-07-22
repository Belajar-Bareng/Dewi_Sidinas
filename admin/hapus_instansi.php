<?php
session_start();


include 'koneksi.php';

//menangkap data dari url
    $kode_gaji = $_GET['kode_gaji'];

//membuat query
    $query =("DELETE FROM instansi WHERE kode_gaji='$kode_gaji'");

// eksekusi query
    mysqli_query($koneksi,$query);

//redirect kembali ke index.php
header('location: data_instansi.php');

?>