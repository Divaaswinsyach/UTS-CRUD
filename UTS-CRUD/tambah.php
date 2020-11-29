<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-color: skyblue">
	<center>
		<h2><font color="purple">DATA KARYAWAN PT.JAYA</font></h2>
		<br>
		<h3>TAMBAH DATA</h3>
		<form method="post" action="tambah-proses.php" style="background-color: #0019ff73; height: 150px; width: 300px;">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Id Karyawan</td>
					<td><input type="number" name="id_karyawan"></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td><input type="text" name="jabatan"></td>
				</tr>
				<tr>
					<td>Id Karyawan</td>
					<td><input type="date" name="tgl_masuk"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="SIMPAN"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>