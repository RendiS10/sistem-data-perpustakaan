<?php
include('koneksi.php');
session_start ();
$no = $_GET["no"];

$sql = "DELETE FROM data_pengunjung_perpustakaan WHERE no =$no";
mysqli_query($conn, $sql);

$_SESSION['hapus'] = 'Data berhasil dihapus';

header("location:admin.php");
?>