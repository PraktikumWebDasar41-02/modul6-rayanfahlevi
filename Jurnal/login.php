<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form method="post">
		Masukan NAMA : <input type="text" name="nama">
		Masukan NIM :<input type="password" name="nim">
		<input type="submit" name="submit">
		Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a>
	</form>
</body>
</html>


<?php
	include "koneksi.php";
	mysql_query("SELECT * FROM daftar WHERE nama = '$nama'");
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		session_start();
		$_SESSION['nama'] = $nama;
		$_SESSION['nim'] = $nim;
		header('location:berhasil.php'); 
	   	require_once("koneksi.php");

	}

  
   ?>