<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_user = $_GET['id_user'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_user where id_user='$id_user' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:kelola_petugas.php?pesan=hapus_berhasil");
} 