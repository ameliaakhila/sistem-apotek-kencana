<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_obat = mysqli_real_escape_string($koneksi, $_POST['nama_obat']);
$id_jenis_obat = mysqli_real_escape_string($koneksi, $_POST['id_jenis_obat']);
$satuan_obat = mysqli_real_escape_string($koneksi, $_POST['satuan_obat']);

$query = "INSERT INTO tb_obat (`nama_obat`, `id_jenis_obat`, `satuan_obat`) 
          VALUES ('$nama_obat', '$id_jenis_obat', '$satuan_obat')";


$cek_tambah = mysqli_query($koneksi, $query);

if ($cek_tambah) {
    header("Location: data_obat.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}