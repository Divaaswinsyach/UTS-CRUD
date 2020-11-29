<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-color: skyblue;">
	<center>
		<h2><font color="Purple">DATA KARYAWAN PT.JAYA</font></h2>
		<br/>
		<a href="tambah.php">Tambah Data</a>
		<br/>
		<br/>
		<table border="2" style="border-collapse: collapse;">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Id Karyawan</th>
				<th>Jabatan</th>
				<th>Tanggal Masuk</th>
				<th>OPSI</th>
			</tr>
			<?php
			include 'Koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from karyawan");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['id_karyawan']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
				<td><?php echo $d['tgl_masuk']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	</center>
</body>
</html>