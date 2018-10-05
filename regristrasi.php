<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<h2>Form</h2>

	<form action="prosesregis.php" method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td></td>
				<td><input type="text" name="nim"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td></td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td>E-mail</td>
				<td></td>
				<td><input type="email" name="email"></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="send"></td>
			</tr>
		</table>
	</form>
</body>
</html>
