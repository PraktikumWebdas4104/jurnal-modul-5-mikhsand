<?php
	session_start();

	if (!isset($_POST['nim']) and !isset($_POST['nama']) and !isset($_POST['email'])) {
		echo "masukkan data terlebih dahulu <a href='registrasi.php'>input disini</a>";
	}
	else{
		include("koneksi.php");
	}
?>
