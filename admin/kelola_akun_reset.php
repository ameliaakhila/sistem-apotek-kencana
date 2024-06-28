<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_user = $_POST['id_user'];
$password = sha1($_POST['password']);

$cek_edit = mysqli_query($koneksi, "UPDATE tb_user SET
        password = '$password'
        where id_user='$id_user'
        ");


if ($cek_edit) {
    header("location:kelola_akun.php?pesan=edit_password_berhasil");
} else {
    header("location:kelola_akun.php?pesan=edit-gagal");
}