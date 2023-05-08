<?php
include('koneksi.php');
session_start();

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$nama_buku = $_POST["nama_buku"];
$status_peminjaman = $_POST ["status_peminjaman"];
$waktu_kunjungan = $_POST["waktu_kunjungan"];


if ($nama == "") {
    $_SESSION['fail'] = "nama tidak boleh kosong";
    header("location: tambahdata2.php");
}if ($nim == "") {
    $_SESSION['fail1'] = "NIM Tidak Boleh kosong";
    header("location: tambahdata2.php");
}if ($status_peminjaman == "") {
    $_SESSION['fail2'] = "Status Peminjaman Tidak boleh kosong";
    header("location: tambahdata2.php");
}if ($prodi == ""){
    $_SESSION['fail3'] = "Prodi Tidak Boleh Kosong";
    header('location: tambahdata2.php');
}if ($nama_buku == ""){
    $_SESSION['fail4'] = "ISI NAMA BUKU !!";
    header('location: tambahdata2.php');
}if ($waktu_kunjungan == ""){
    $_SESSION['fail5'] = "Masukan Tanggal Kunjungan";
    header('location: tambahdata2.php');
}else {
    $sql = "INSERT INTO data_pengunjung_perpustakaan (nama, nim, status_peminjaman, prodi,nama_buku,waktu_kunjungan ) VALUES ('$nama','$nim','$status_peminjaman','$prodi','$nama_buku','$waktu_kunjungan')";
    mysqli_query($conn, $sql);
    $_SESSION['sukses'] = 'Data Berhasil disimpan';
    header("location: admin.php");
}
