<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_obat = $_GET['id_obat'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_obat where id_obat='$id_obat' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:data_obat.php?pesan=hapus_berhasil");
} 