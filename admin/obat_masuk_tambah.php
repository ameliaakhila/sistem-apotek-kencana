<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';


// awal pembuatan kode transaksi

// Ambil tanggal hari ini dalam format yang sesuai
$tanggal_hari_ini = date('Ymd'); // Misalnya format 'Ymd' untuk tahun-bulan-tanggal

// Query untuk mengambil nomor urut terakhir dari tabel tb_obat_masuk
$query_nomor_urut = mysqli_query($koneksi, "SELECT MAX(id_obat_masuk) AS max_id FROM tb_obat_masuk");
$data_nomor_urut = mysqli_fetch_assoc($query_nomor_urut);
$nomor_urut_terakhir = $data_nomor_urut['max_id'];

// Jika tidak ada data sama sekali, nomor urut dimulai dari 1
if (!$nomor_urut_terakhir) {
    $nomor_urut_terakhir = 1;
} else {
    $nomor_urut_terakhir++; // Increment nomor urut terakhir untuk mendapatkan nomor urut berikutnya
}

// Format nomor urut dengan panjang tertentu, misalnya 4 digit
$nomor_urut_format = str_pad($nomor_urut_terakhir, 4, '0', STR_PAD_LEFT); // Contoh format 4 digit

// Gabungkan tanggal hari ini dengan nomor urut
$kode_transaksi = 'BM-'. $tanggal_hari_ini . '-' . $nomor_urut_format;

// akhir pembuatan kode transaksi

$tgl_obat_masuk = date('d-n-Y', strtotime($_POST['tgl_obat_masuk']));
$id_obat = $_POST['id_obat'];
$jumlah_obat = $_POST['jumlah_obat'];
$tgl_kadaluarsa = date('d-n-Y', strtotime($_POST['tgl_kadaluarsa']));
$keterangan = $_POST['keterangan'];


$query = "INSERT INTO tb_obat_masuk (kode_transaksi, tgl_obat_masuk, id_obat, jumlah_obat, tgl_kadaluarsa, keterangan) 
          VALUES ('$kode_transaksi', '$tgl_obat_masuk','$id_obat', '$jumlah_obat', '$tgl_kadaluarsa', '$keterangan')";
$cek_tambah = mysqli_query($koneksi, $query);


$query_tambah_obat = "UPDATE tb_obat SET stok_obat = stok_obat + $jumlah_obat WHERE id_obat = $id_obat";
$cek_tambah_obat = mysqli_query($koneksi, $query_tambah_obat);




if ($cek_tambah==TRUE && $cek_tambah_obat==TRUE) {
    header("Location: obat_masuk.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}