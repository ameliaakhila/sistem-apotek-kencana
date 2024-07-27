<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_obat_masuk = $_GET['id_obat_masuk'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_obat_masuk where id_obat_masuk='$id_obat_masuk' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:obat_masuk.php?pesan=hapus_berhasil");
} 