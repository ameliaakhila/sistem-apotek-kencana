<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = sha1(mysqli_real_escape_string($koneksi, $_POST['password']));
$status = mysqli_real_escape_string($koneksi, $_POST['status']);

$query = "INSERT INTO tb_user (username, password, status) 
          VALUES ('$username', '$password', '$status')";


$cek_tambah = mysqli_query($koneksi, $query);

if ($cek_tambah) {
    header("Location: kelola_akun.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}