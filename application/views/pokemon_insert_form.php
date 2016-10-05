/* Buat form untuk insert dengan metode post, yang akan dikirim ke pokemon/insert_action */
<html>
	<head>
		<title> form_add </title>
	</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/pokemon/insert_action"; ?>">
		<table>
			<tr>
				<td>Nama</td>
				<td> <input type="text" name="nama" /></td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td> <input type="text" name="tipe"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
			</tr>
		</table>
		</form>
	</body>
</html>
