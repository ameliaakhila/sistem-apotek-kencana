<?php
session_start();
if ($_SESSION['status'] != "gudang") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_rak = $_POST['id_rak'];
$nama_rak = $_POST['nama_rak'];


$cek_edit = mysqli_query($koneksi, "UPDATE tb_rak SET
        nama_rak='$nama_rak'
        WHERE id_rak='$id_rak'");


// var_dump($id_rak);
// var_dump($nama_rak);
// var_dump($cek_edit);



if ($cek_edit) {
    header("location:index.php?pesan=edit_berhasil");
} else {
    header("location:index.php?pesan=edit_gagal");
}