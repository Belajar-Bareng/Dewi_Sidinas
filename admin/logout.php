<?php
    // mengaktifkan session
    session_start();
    $_SESSION = [];
    session_unset();
    // menghapus session
    session_destroy(); 

    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);

	// pengecekkan berhasil
    header("location: login.php");
    exit();
?>