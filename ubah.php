<?php  

include 'functions.php';
$id = $_GET["id"];

$posting = query("SELECT * FROM postingan WHERE id=$id")[0];



if (isset($_POST["posting"])) {
	
	if (ubah($_POST) > 0) {
		echo "<script>
			alert('Data Berhasil Diubah');
			document.location.href = 'konten.php';
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Diubah');
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
	<h1>Ubah Data Mahasiswa</h1>
<table>
		<form method="post" enctype="multipart/form-data" > 
			<input type="hidden" name="id" value="<?= $posting["id"]; ?>">
			<tr>
				<td>JUDUL : </td>
				<td><input type="text" name="judul" value="<?= $posting["judul"]; ?>"></td>
			</tr>
			<tr>
			
				<td>KATEGORI: </td>
				<td><input type="text" name="kategori" value="<?= $posting["kategori"]; ?>"></td>
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


