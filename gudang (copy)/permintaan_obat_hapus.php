<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_permintaan_obat = $_GET['id_permintaan_obat'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_permintaan_obat where id_permintaan_obat='$id_permintaan_obat' ");



// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:permintaan_obat.php?pesan=hapus_berhasil");
}else {
    echo "Error: " . mysqli_error($koneksi);
}