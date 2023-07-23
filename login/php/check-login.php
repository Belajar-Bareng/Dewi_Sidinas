<?php  
include "../koneksi.php";
session_start();

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../index.php?error=User Name is Required");
		exit;
	} else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
		exit;
	}

	// tidak perlu dienkripsi deh, nanti ribet pas bikin akun di halaman admin
	// Hashing the password
	// $password = md5($password); 

	// query tergantung dengan role, beda role beda table yang digunakan
	// agar data akun yang diinput oleh admin terpakai.
	$query = '';
	switch ($role) {
		case 'user':
			$query = "SELECT nm_user AS name, username, 'user' AS role FROM user WHERE username = '$username' AND password = '$password'";
			break;
		case 'admin':
			$query = "SELECT nm_admin AS name, username, 'admin' AS role FROM admin WHERE username = '$username' AND password = '$password'";
			break;
		case 'kasubag':
			$query = "SELECT 'Kasubag' AS name, username, 'kasubag' AS role FROM kasubag WHERE username = '$username' AND password = '$password'";
			break;
		default:
			header('Location: ../index.php?error=Role does not exists');
			exit;
			break;
	}
	
	$result = mysqli_query($koneksi, $query);

	if (mysqli_num_rows($result) === 1) {
		// the user name must be unique
		$row = mysqli_fetch_assoc($result);
		if (!$row) {
			header('Location: ../index.php?error=Cannot fetch account');
			exit;
		}

		$_SESSION['name'] = $row['name'];
		$_SESSION['role'] = $row['role'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['loggedIn'] = true;

		header('Location: ../../index.php');
		exit;
	} else {
		header("Location: ../index.php?error=Incorect User name or password");
		exit;
	}
	
}else {
	header("Location: ../index.php");
	exit;
}