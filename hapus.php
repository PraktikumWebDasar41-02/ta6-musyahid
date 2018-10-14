<?php 

require 'functions.php';


if (hapus($_GET["id"]) > 0 ) {
	echo "<script>
	alert('Data berhasil dihapus');
	document.location.href = 'konten.php';
	</script>";
} else {
	echo "<script>
	alert('Data gagal dihapus');
	document.location.href = 'konten.php';
	</script>";
}

 ?>