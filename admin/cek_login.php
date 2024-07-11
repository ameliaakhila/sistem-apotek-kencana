<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$username = addslashes(trim($_POST['username']));
$password = sha1($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    // Menyimpan id_user ke dalam session
    $_SESSION['id_user'] = $login['id_user'];
    $_SESSION['username'] = $username;

    if ($login['status'] == "admin") {
        $_SESSION['status'] = "admin";
        header("location:dashboard.php");
    } elseif ($login['status'] == "apotek") {
        $_SESSION['status'] = "apotek";
        header("location:../apotek/index.php");
    } elseif ($login['status'] == "gudang") {
        $_SESSION['status'] = "gudang";
        header("location:../gudang/index.php");
    } else {
        header("location:index.php?pesan=gagal1");
    }
} else {
    header("location:index.php?pesan=gagal");
}
