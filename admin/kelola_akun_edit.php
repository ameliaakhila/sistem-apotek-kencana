<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$status = $_POST['status'];



$cek_edit = mysqli_query($koneksi, "UPDATE tb_user SET
        username='$username',
        status='$status'
        where id_user='$id_user'
        ");


if ($cek_edit) {
    header("location:kelola_petugas.php?pesan=edit-berhasil");
} else {
    header("location:kelola_petugas.php?pesan=edit-gagal");
}