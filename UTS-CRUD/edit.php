<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-color: skyblue">
	<center>
		<h2><font color="purple">DATA KARYAWAN PT.JAYA</font></h2>
		<br>
		<h3>EDIT DATA</h3>

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from karyawan where id='$id'");
		while ($d = mysqli_fetch_array($data)) {
		?>
		<form method="post" action="update.php" style="background-color: #0019ff73; width: 300px; height: 150px">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Id Karyawan</td>
					<td><input type="number" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>"></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td><input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Masuk</td>
					<td><input type="date" name="tgl_masuk" value="<?php echo $d['tgl_masuk']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"><input type="submit" value="KEMBALI"><a href="index.php"></a></td>
				</tr>
			</table>
		</form>
		<?php
		}
		?>
	</center>
</body>
</html>