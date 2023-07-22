<?php
include 'koneksi.php';

//menangkap data admin
$id_admin = $_POST["id_admin"];
$nm_admin = $_POST["nm_admin"];
$username = $_POST["username"];
$password = $_POST["password"];

//membuat query insert data
$query = ("UPDATE admin set nm_admin='$nm_admin', username='$username', password='$password' where id_admin='$id_admin'");

//eksekusi Query
mysqli_query($koneksi,$query);

//redirect kembali ke data_admin.php
header('location: data_admin.php');

?>