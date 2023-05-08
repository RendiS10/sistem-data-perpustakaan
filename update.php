<?php
include('koneksi.php');
session_start();
$no = $_POST["no"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$nama_buku = $_POST["nama_buku"];




$sql = "UPDATE data_pengunjung_perpustakaan SET nama='$nama', nim='$nim', nama_buku='$nama_buku', prodi='$prodi'
WHERE no='$no'";

mysqli_query($conn, $sql);

$_SESSION['sukses'] = 'Data Berhasil Di Ubah';

header("location: data.php");