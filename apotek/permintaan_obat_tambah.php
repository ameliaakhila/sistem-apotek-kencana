<?php
session_start();
if ($_SESSION['status'] != "apotek") {
    header("location:login.php?pesan=belum_login");
    exit();
}

include '../koneksi.php';

$id_user = $_SESSION['id_user'];
$id_obat = mysqli_real_escape_string($koneksi, $_POST['id_obat']);
$jumlah_permintaan_obat = mysqli_real_escape_string($koneksi, $_POST['jumlah_permintaan_obat']);
$tgl_permintaan_obat = date('d-m-Y H:i:s');
$status_permintaan_obat = 'proses';
$keterangan_apotek = mysqli_real_escape_string($koneksi, $_POST['keterangan_apotek']);

// Query untuk mendapatkan stok obat berdasarkan id_obat yang diminta
$cek_data_obat = "SELECT stok_obat FROM tb_obat WHERE id_obat = '$id_obat' LIMIT 1";
$result = $koneksi->query($cek_data_obat);

if ($result->num_rows > 0) {
    // Mengambil data dari hasil query
    $row = $result->fetch_assoc();
    $jumlah_stok_obat = $row["stok_obat"];
} else {
    header("Location: permintaan_obat.php?pesan=obat_tidak_ditemukan");
    exit();
}

if ($jumlah_permintaan_obat > $jumlah_stok_obat) {
    header("Location: permintaan_obat.php?pesan=stok_tidak_cukup");
    exit();
}

// Query untuk memasukkan permintaan obat
$query = "INSERT INTO tb_permintaan_obat (id_user, id_obat, jumlah_permintaan_obat, tgl_permintaan_obat, status_permintaan_obat, keterangan_apotek) 
          VALUES ('$id_user', '$id_obat', '$jumlah_permintaan_obat', '$tgl_permintaan_obat', '$status_permintaan_obat', '$keterangan_apotek')";

$cek_tambah = mysqli_query($koneksi, $query);

if ($cek_tambah) {
    header("Location: permintaan_obat.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

?>
