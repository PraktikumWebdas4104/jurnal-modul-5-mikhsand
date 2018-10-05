<?php

	if (isset($_POST['submit'])) {
		$conn=new mysqli("localhost","root","","jurnal");
			if (isset($_POST['submit'])) {
					if (strlen($_POST['nim'])==10 && ($_POST['nama'])<25){
							if ($conn) {
								$nim=$_POST['nim'];
								$nama=$_POST['nama'];
								$email=$_POST['email'];		
									$sql="INSERT INTO `akun` (`nim`,`nama`,`email`) VALUES ('$nim','$nama','$email')";
									$conn->query($sql);
										echo "input berhasil";
							}
					}else{
						echo "input gagal, input kembali <a href='registrasi.php'>disini</a>";
					}
			}
	}
						
?>
