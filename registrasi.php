<?php 

include "functions.php";

	if (isset($_POST["register"])) {
		if (registrasi($_POST) > 0) {
			echo "<script>
				alert('Berhasil Registrasi');
			</script>";
		} else {
			echo mysqli_error($koneksi);
		}
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h1>Halaman Registrasi</h1>
</head>
<body>
	<table>
		<form action="" method="post">
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" placeholder="USERNAME"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" placeholder="Password"></td>
		</tr>
		<tr>
			<td>KONFORMASI PASSWORD</td>
			<td><input type="password" name="password2" placeholder="Ulangi Password"></td>
		</tr>

		<tr>
			<td><button type="submit" name="register">REGISTRASI</button></td>
		</tr>
	</form>
	</table>

</body>
</html>