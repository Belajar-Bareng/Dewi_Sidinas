<?php
session_start();

if ( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
include 'koneksi.php';

//menangkap data dari url
    $id_user = $_GET['id_user'];

//membuat query
    $query =("DELETE FROM user WHERE id_user='$id_user'");

// eksekusi query
    mysqli_query($koneksi,$query);

//redirect kembali ke index.php
header('location: data_user.php');

?>