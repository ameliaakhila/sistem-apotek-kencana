<?php
// echo "salah php";
// mengaktifkan session php

session_start();
// echo "salah php session";

// menghubungkan dengan koneksi
include 'koneksi.php';
// echo "salah php inlucde";

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$username = addslashes(trim($_POST['username']));
// $nisn = $_POST['nisn'];
$password = sha1($_POST['password']);
// echo "salah php";

// menyeleksi data admin dengan nisn dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password'");
// $data = mysqli_query($koneksi, "select * from login where nisn='$nisn' ");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// echo "cek2";

if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['status']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin";
        // echo "cek";
        header("location:dashboard.php?username=$username");
    } else {
        // echo "salah1";
        header("location:index.php?pesan=gagal1");
    }
} else {
    // echo "salah2";
    header("location:index.php?pesan=gagal");
}
