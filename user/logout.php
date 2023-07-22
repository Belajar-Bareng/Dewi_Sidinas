<?php
    // mengaktifkan session
    session_start();
    
    // menghapus session
    session_destroy(); 
	
	// pengecekkan berhasil
    header('location: login.php');
    exit();
?>