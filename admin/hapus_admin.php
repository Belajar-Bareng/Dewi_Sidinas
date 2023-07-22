<?php
session_start();

include 'koneksi.php';

//menangkap data dari url
    $id_admin = $_GET['id_admin'];

//membuat query
    $query =("DELETE FROM admin WHERE id_admin='$id_admin'");

// eksekusi query
    mysqli_query($koneksi,$query);

//redirect kembali ke index.php
header('location: data_admin.php');

?>