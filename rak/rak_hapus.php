<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_rak = $_GET['id_rak'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_rak where id_rak='$id_rak' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:index.php?pesan=hapus_berhasil");
} 