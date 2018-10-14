<?php 

$koneksi = mysqli_connect("localhost","root","","blog");

function query($query) {

	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;

	}
	return $rows;

}

function tambah($data) {

	global $koneksi;



	$judul = $data["judul"];
	$kategori = $data["kategori"];
	$gambar = uploud();
	if (!$gambar) {
		return false;
	}
	$isi = $data["isi"];



	$query =  ("INSERT INTO postingan VALUES('','$judul', '$kategori','$gambar','$isi')");

	 mysqli_query($koneksi, $query);

	 return mysqli_affected_rows($koneksi);

	}


function hapus($id) {

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM postingan WHERE id=$id");

	return mysqli_affected_rows($koneksi);
}

function registrasi($data) {
	global $koneksi;

	$username = ($data["username"]);
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username yang dipilih sudah terdaftar')
		</script>";

		return false;  
	}


	if ($password !== $password2) {
		echo "<script>
			alert('Konfirmasi Password tidak sesuai');
		</script>";

		return false;
	}

	mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password')" );

	return mysqli_affected_rows($koneksi);
}

function uploud() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah ada gambar yang diuploud

	if ($error === 4) {
		echo "<script>
			alert('Pilih Gambar Dulu');
		</script>";
		return false;
	}

	//cek apakah yg diuploud adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('Yang Anda Uploud Bukan Gambar');
		</script>";
		return false;
	}


	move_uploaded_file($tmpName, 'assets/img/' . $namaFile);

	return $namaFile;
}

function ubah($data) {
	global $koneksi;


	$id = $data["id"];
	$judul = $data["judul"];
	$kategori = $data["kategori"];
	$gambar = uploud();
	if (!$gambar) {
		return false;
	}
	$isi = $data["isi"];



	$query =  "UPDATE postingan SET 
					judul = '$judul', 
					kategori = '$kategori', 
					gambar = '$gambar', 
					isi = '$isi'
					WHERE id = $id";

	 mysqli_query($koneksi, $query);

	 return mysqli_affected_rows($koneksi);
}




 ?>