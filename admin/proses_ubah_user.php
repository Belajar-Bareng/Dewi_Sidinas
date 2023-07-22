<?php
include 'koneksi.php';

//menangkap data admin
$id_user = $_POST["id_user"];
$nm_user = $_POST["nm_user"];
$username = $_POST["username"];
$password = $_POST["password"];
$tgl_lahir = $_POST["tgl_lahir"];
$jenkel = $_POST["jenkel"];
$alamat_user = $_POST["alamat_user"];
$telp_user = $_POST["telp_user"];

//membuat query insert data
$query = ("UPDATE user set nm_user='$nm_user', username='$username', password='$password', tgl_lahir='$tgl_lahir', 
jenkel='$jenkel', alamat_user='$alamat_user', telp_user='$telp_user' where id_user='$id_user'");

//eksekusi Query
mysqli_query($koneksi,$query);

//redirect kembali ke data_user.php
header('location: data_user.php');

?>