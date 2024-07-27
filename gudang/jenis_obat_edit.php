<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_jenis_obat = $_POST['id_jenis_obat'];
$nama_jenis_obat = $_POST['nama_jenis_obat'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_jenis_obat SET
        nama_jenis_obat='$nama_jenis_obat'
        where id_jenis_obat='$id_jenis_obat'
        ");


if ($cek_edit) {
    header("location:jenis_obat.php?pesan=edit_berhasil");
} else {
    header("location:jenis_obat.php?pesan=edit_gagal");
}