<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_obat_masuk = $_POST['id_obat_masuk'];
$tgl_obat_masuk = date('d-n-Y', strtotime($_POST['tgl_obat_masuk']));
$id_obat = $_POST['id_obat'];
$jumlah_obat = $_POST['jumlah_obat'];
$tgl_kadaluarsa = date('d-n-Y', strtotime($_POST['tgl_kadaluarsa']));
$keterangan = $_POST['keterangan'];
$id_rak = $_POST['id_rak'];



$cek_edit = mysqli_query($koneksi, "UPDATE tb_obat_masuk SET
        tgl_obat_masuk='$tgl_obat_masuk',
        id_obat='$id_obat',
        jumlah_obat='$jumlah_obat',
        tgl_kadaluarsa='$tgl_kadaluarsa',
        keterangan='$keterangan'
        id_rak='$id_rak'
        WHERE id_obat_masuk='$id_obat_masuk'");


if ($cek_edit) {
    header("location:obat_masuk.php?pesan=edit_berhasil");
} else {
    header("location:obat_masuk.php?pesan=edit_gagal");
}