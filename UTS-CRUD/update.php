<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$id_karyawan = $_POST['id_karyawan'];
$jabatan = $_POST['jabatan'];
$tgl_masuk = $_POST['tgl_masuk'];

mysqli_query($koneksi,"update karyawan set nama='$nama', id_karyawan='$id_karyawan', jabatan='$jabatan', tgl_masuk='$tgl_masuk' where id='$id'");

header("location: index.php");

?>