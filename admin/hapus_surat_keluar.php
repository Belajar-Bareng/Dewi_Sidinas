<?php
session_start();


include 'koneksi.php';

//menangkap data dari url
    $id_keluar = $_GET['id_keluar'];

//membuat query
    $query =("DELETE FROM surat_keluar WHERE id_keluar='$id_keluar'");

// eksekusi query
    mysqli_query($koneksi,$query);

//redirect kembali ke index.php
header('location: surat_keluar.php');

?>