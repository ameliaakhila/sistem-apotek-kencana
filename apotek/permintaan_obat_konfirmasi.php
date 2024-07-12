<?php
session_start();
if ($_SESSION['status'] != "apotek") {
    header("location:login.php?pesan=belum_login");
    exit();
}

include '../koneksi.php';

$id_permintaan_obat = $_POST['id_permintaan_obat'];
$status_permintaan_obat = $_POST['status_permintaan_obat'];
$jumlah_permintaan_obat = $_POST['jumlah_permintaan_obat'];

// Mendapatkan id_obat dari tabel permintaan_obat
$query_obat = mysqli_query($koneksi, "SELECT id_obat FROM tb_permintaan_obat WHERE id_permintaan_obat='$id_permintaan_obat'");
$data_obat = mysqli_fetch_assoc($query_obat);
$id_obat = $data_obat['id_obat'];

// Mendapatkan stok obat saat ini
$query_stok = mysqli_query($koneksi, "SELECT stok_obat FROM tb_obat WHERE id_obat='$id_obat'");
$data_stok = mysqli_fetch_assoc($query_stok);
$stok_obat = $data_stok['stok_obat'];

// Memeriksa apakah stok mencukupi
if ($stok_obat >= $jumlah_permintaan_obat) {
    // Mengurangi stok obat
    $update_stok = mysqli_query($koneksi, "UPDATE tb_obat SET stok_obat = stok_obat - $jumlah_permintaan_obat WHERE id_obat='$id_obat'");

    if ($update_stok) {
        // Mengupdate status permintaan obat
        $cek_edit = mysqli_query($koneksi, "UPDATE tb_permintaan_obat SET status_permintaan_obat='$status_permintaan_obat' WHERE id_permintaan_obat='$id_permintaan_obat'");

        if ($cek_edit) {
            header("location:permintaan_obat.php?pesan=edit_berhasil");
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error updating stok: " . mysqli_error($koneksi);
    }
} else {
    echo "Stok obat tidak mencukupi untuk memenuhi permintaan.";
}

?>
