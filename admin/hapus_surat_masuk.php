<?php
session_start();



include 'koneksi.php';

//menangkap data dari url
    $id_masuk = $_GET['id_masuk'];

//membuat query
    $query =("DELETE FROM surat_masuk WHERE id_masuk='$id_masuk'");

// eksekusi query
    mysqli_query($koneksi,$query);

//redirect kembali ke index.php
header('location: surat_masuk.php');

?>