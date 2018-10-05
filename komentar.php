<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="form2">
	<table>
		<tr>
			<td>Kata</td>
		</tr>

		<tr>
			<td><input type="text" name="kata"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="hitung"></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['submit'])) {
		$hitung=explode(" ", $_POST['kata']);
		echo "ADA ".count($hitung)." KATA";
	}
?>
