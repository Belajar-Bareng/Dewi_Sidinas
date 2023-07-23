<?php
include 'koneksi.php';

//menangkap data admin
$id_gaji = $_POST['id_gaji'];
$kode_gaji = $_POST["kode_gaji"];
$nm_instansi = $_POST["nm_instansi"];
$alamat_instansi = $_POST["alamat_instansi"];

//membuat query insert data
$query = $koneksi->query("UPDATE instansi SET nm_instansi = '$nm_instansi', alamat_instansi = '$alamat_instansi', kode_gaji = '$kode_gaji'
WHERE kode_gaji = '$id_gaji'");

//eksekusi Query
if($query){
    header('location: data_instansi.php');
    exit();
} else {
    
}
?>