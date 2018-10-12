<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<h1>Silahkan buat registrasi</h1>
	<form method="post" >
		Masukan nama :<input type="text" name="nama"><br>
		Masukan NIM  :<input type="text" name="nim"><br>
		Masukan kelas	<input type="radio" name="kelas" value="MI01" checked>MI01<br/>  
						<input type="radio" name="kelas" value="MI02">MI02<br/>  
						<input type="radio" name="kelas" value="MI03">MI03<br/>  
						<input type="radio" name="kelas" value="MI04">MI04<br/>  
		Masukan Jenis kelamin : <input type="radio" name="kelamin" value="lakilaki">Laki-laki<br/>  
								<input type="radio" name="kelamin" value="perempuan">Perempuan<br/>
		Masukan Hobi : 	<input type="checkbox" name="hobi" value="jajan">jajan<br/>
						<input type="checkbox" name="hobi" value="jalan">jalan<br/>
						<input type="checkbox" name="hobi" value="Riding">riding<br/>
		Masukan Fakultas <select name="fakultas">
						      <option>Ilmu terapan</option>
						      <option>Ekonomi bisnis</option>
						      <option>Komunikasi Bisnis</option>
						      <option>Industri Kreatif</option>
						      <option>Elektro</option>
						</select><br>
		Masukan alamat <textarea name="alamat"></textarea>
		<input type="submit" name="submit""submit>
	</form>
</body>
</html>

<?php 
include 'konek.php';
	
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$kelamin = $_POST['kelamin'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];
		session_start(); 

		// $_SESSION ['nama'] = $nama; 
		// $_SESSION ['nim'] = $nim;
		// $_SESSION ['kelas'] = $kelas;
		// $_SESSION ['kelamin'] = $kelamin;
		// $_SESSION ['hobi'] = $hobi;
		// $_SESSION ['fakultas'] = $fakultas;
		// $_SESSION ['alamat'] = $alamat;
		$sql = "INSERT INTO daftar  VALUES ('$nama', '$nim', '$kelas', '$kelamin', '$hobi', '$fakultas', '$alamat')";
		$query = mysqli_query($con,$sql);
		if ($query) {
			header("location:login.php");
		}
	}
 ?>