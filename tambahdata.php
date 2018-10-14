<?php  

require 'functions.php';



if (isset($_POST["posting"])) {
	
	if (tambah($_POST) > 0) {
		echo "<script>
			alert('Artikel Berhasil Disimpan');
			document.location.href = 'konten.php';
		</script>";
	} else {
		echo "<script>
			alert('Artikel Gagal Disimpan');
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
	<h1>TAMBAH ARTIKEL</h1>
	<table>
		<form method="post" enctype="multipart/form-data" >
			<tr>
				<td>JUDUL : </td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
			
				<td>KATEGORI: </td>
				<td><input type="text" name="kategori"></td>
			</tr>
			
			<tr>
			
				<td>GAMBAR: </td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td>ISI ARTIKEL: </td>
				<td><textarea name="isi" rows="5" cols="80"></textarea></td>
			</tr>
	
			<tr>
				<td>
					<button type="submit" name="posting">POSTING</button>
				</td>
			</tr>
			
		</form>
	</table><br><br>


	
</body>
</html>


