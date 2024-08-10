<?php
session_start();
if ($_SESSION['status'] != "apotek") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_obat_masuk = $_POST['id_obat_masuk'];
$status_terjual = $_POST['status_terjual'];


$cek_edit = mysqli_query($koneksi, "UPDATE tb_obat_masuk SET
        status_terjual='$status_terjual'
        WHERE id_obat_masuk='$id_obat_masuk'");


if ($cek_edit) {
    header("location:obat_kadaluarsa.php?pesan=edit_berhasil");
} else {
    header("location:obat_kadaluarsa.php?pesan=edit_gagal");
}