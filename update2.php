<?php
include('koneksi.php');
session_start();
$no = $_POST["no"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$status_peminjaman = $_POST["status_peminjaman"];
$nama_buku = $_POST["nama_buku"];
$waktu_kunjungan = $_POST["waktu_kunjungan"];



$sql = "UPDATE data_pengunjung_perpustakaan SET nama='$nama', nim='$nim', nama_buku='$nama_buku', prodi='$prodi', waktu_kunjungan='$waktu_kunjungan' , status_peminjaman='$status_peminjaman'
WHERE no='$no'";

mysqli_query($conn, $sql);

$_SESSION['sukses'] = 'Data Berhasil Di Ubah';

header("location: admin.php");