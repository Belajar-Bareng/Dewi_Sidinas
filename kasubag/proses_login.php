<?php
// Simpan informasi login di sini (misalnya, di database atau file konfigurasi)
$valid_username = 'username';
$valid_password = 'password';
$valid_role = 'role';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$role = 'role';

// Cek apakah data yang dimasukkan benar
if ($username === $valid_username && $password === $valid_password && $role === $valid_role) {
    // Login berhasil
    echo "Login berhasil! Selamat datang, " . $username;
} else {
    // Login gagal
    echo "Login gagal. Silakan coba lagi.";
}
?>