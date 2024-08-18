
<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_rak = $_POST['nama_rak'];

$query = "INSERT INTO tb_rak (nama_rak) 
          VALUES ('$nama_rak')";
$cek_tambah = mysqli_query($koneksi, $query);

if ($cek_tambah==TRUE) {
    header("Location: index.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}