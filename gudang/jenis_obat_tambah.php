<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_jenis_obat = mysqli_real_escape_string($koneksi, $_POST['nama_jenis_obat']);

$query = "INSERT INTO tb_jenis_obat (nama_jenis_obat) 
          VALUES ('$nama_jenis_obat')";


$cek_tambah = mysqli_query($koneksi, $query);

if ($cek_tambah) {
    header("Location: jenis_obat.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}