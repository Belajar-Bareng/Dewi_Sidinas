<?php
//membuat koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'sidinas');

//pengecekan koneksi
if($koneksi->connect_error) {
    die("Koneksi Gagal: " .$koneksi->connect_error);
}

?>