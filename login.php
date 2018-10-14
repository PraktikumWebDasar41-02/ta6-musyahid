<?php 

require 'functions.php';

if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");

	$simpan = mysqli_num_rows($hasil);

	if ($simpan > 0) {
		session_start();

		$_SESSION['nama'] = $username;
		$_SESSION['status'] = ['login'];
		header("Location:konten.php");
	}else{
	 echo "<script>
			alert('Gagal Login');
		</script>";	
	}
}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Halaman Login</h1>
	<table>
		<form method="post">
			<tr>
				<td>USERNAME</td>
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><button type="text" name="login">LOGIN</button></td>
			</tr>
		</form>
	</table>
	</form>
</body>
</html>
