<?php

// memulai session
session_start();

// mengecek apakah dia sudah login atau belum
if(isset($_SESSION['loggedIn']) && isset($_SESSION['role'])) {
    // jika sudah login, dicek role-nya sebagai apa dan diarahkan ke halaman yang sesuai
    switch ($_SESSION['role']) {
        case 'admin':
            header('location: admin/dashboard.php');
            exit;
            break;
        case 'user':
            header('location: user/dashboard.php');
            exit;
            break;
        case 'kasubag':
            header('location: kasubag/dashboard.php');
            exit;
            break;
        
        default:
            break;
    }
}

// menghapus semua session yang ada
session_destroy();
// mengarahkan pengguna ke halaman login
header('location: login/index.php');
// memastikan program berhenti
exit;

