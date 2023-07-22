<?php
include 'koneksi.php';

//menangkap data admin
$id_pengumuman = $_POST["id_pengumuman"];
$judul = $_POST["judul"];
$tgl_publikasi = $_POST["tgl_publikasi"];
$isi = $_POST["isi"];

//membuat query insert data
$query = ("UPDATE pengumuman set judul='$judul', tgl_publikasi='$tgl_publikasi', isi='$isi' where id_pengumuman='$id_pengumuman'");

//eksekusi Query
mysqli_query($koneksi,$query);

//redirect kembali ke data_admin.php
header('location: postingan.php');

?>