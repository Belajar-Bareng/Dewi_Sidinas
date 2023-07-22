<?php
include 'koneksi.php';

//menangkap data admin
$kode_gaji = $_POST["kode_gaji"];
$nm_instansi = $_POST["nm_instansi"];
$alamat_instansi = $_POST["alamat_instansi"];

//membuat query insert data
$query = $koneksi->query("UPDATE instansi SET nm_instansi = '$nm_instansi', alamat_instansi = '$alamat_instansi'
WHERE kode_gaji = '$kode_gaji'");

//eksekusi Query
if($query){
    header('location: data_instansi.php');
    exit();
} else {
    
}
?>