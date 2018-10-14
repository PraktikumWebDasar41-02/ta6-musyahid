php 

require 'functions.php';

query("SELECT * FROM mhs");

session_start();
 


echo "Hai, selamat datang";

$mahasiswa = query("SELECT * FROM mhs");


 
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>

	<h1>Data Mahasiswa</h1>

	<a href="tambahdata.php">TAMBAH DATA</a>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jenis Kelamin</th>
			<th>Hobi</th>
			<th>fakultas</th>
			<th>Alamat</th>
			<th colspan="2">AKSI</th>
		</tr>

		<?php foreach ($mahasiswa as $row) : ?>
    <tr align="center">
      <td><?= $row["id"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["jenis_kelamin"]; ?></td>
      <td><?= $row["hobi"]; ?></td>
      <td><?= $row["fakultas"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
      <td>
      	<a href="ubah.php?id=<?= $row["id"]; ?>">EDIT</a> |
      	<a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('Apakah anda yakin?')">HAPUS</a>
      </td>
    </tr>

    <?php endforeach; ?>
	</table>


</body>
</html>


