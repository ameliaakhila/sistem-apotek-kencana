<?php
session_start();
if ($_SESSION['status'] != "apotik") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_user = $_SESSION['id_user'];
$id_obat = mysqli_real_escape_string($koneksi, $_POST['id_obat']);
$jumlah_permintaan_obat = mysqli_real_escape_string($koneksi, $_POST['jumlah_permintaan_obat']);
$tgl_permintaan_obat = date('d-m-Y H:i:s');
$status_permintaan_obat = 'proses';
$keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);


$query = "INSERT INTO tb_permintaan_obat (id_user,id_obat, jumlah_permintaan_obat, tgl_permintaan_obat,status_permintaan_obat,keterangan) 
          VALUES ('$id_user', '$id_obat', '$jumlah_permintaan_obat','$tgl_permintaan_obat','$status_permintaan_obat','$keterangan')";


$cek_tambah = mysqli_query($koneksi, $query);

if ($cek_tambah) {
    header("Location: permintaan_obat.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}