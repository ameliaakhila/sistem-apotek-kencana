<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_permintaan_obat = $_POST['id_permintaan_obat'];
$status_permintaan_obat = $_POST['status_permintaan_obat'];
$keterangan_farmasi = $_POST['keterangan_farmasi'];

// var_dump($id_permintaan_obat);
// var_dump($status_permintaan_obat);
// var_dump($keterangan_farmasi);

// exit();
$cek_edit = mysqli_query($koneksi, "UPDATE tb_permintaan_obat SET
        status_permintaan_obat='$status_permintaan_obat',
        keterangan_farmasi='$keterangan_farmasi'
        WHERE id_permintaan_obat='$id_permintaan_obat'");

if ($cek_edit) {
    header("location:permintaan_obat.php?pesan=edit_berhasil");
}else {
    echo "Error: " . mysqli_error($koneksi);
}