<?php
session_start();


include 'koneksi.php';

//menangkap data dari url
    $id_pengumuman = $_GET['id_pengumuman'];

//membuat query
    $query =("DELETE FROM pengumuman WHERE id_pengumuman='$id_pengumuman'");

// eksekusi query
    mysqli_query($koneksi,$query);

//redirect kembali ke index.php
header('location: postingan.php');

?>