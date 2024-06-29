<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_obat = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$id_jenis_obat = $_POST['id_jenis_obat'];
$satuan_obat = $_POST['satuan_obat'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_obat SET
        nama_obat='$nama_obat',
        id_jenis_obat='$id_jenis_obat',
        satuan_obat='$satuan_obat'
        where id_obat='$id_obat'
        ");


if ($cek_edit) {
    header("location:data_obat.php?pesan=edit_berhasil");
} else {
    header("location:data_obat.php?pesan=edit_gagal");
}