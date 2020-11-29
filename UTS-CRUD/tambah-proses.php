<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$id_karyawan = $_POST['id_karyawan'];
$jabatan = $_POST['jabatan'];
$tgl_masuk = $_POST['tgl_masuk'];

mysqli_query($koneksi, "insert into karyawan values('','$nama','$id_karyawan','$jabatan','$tgl_masuk')");
header("location:index.php");
?>