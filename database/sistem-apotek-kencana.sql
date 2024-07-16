-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Jul 2024 pada 21.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-apotek-kencana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_obat`
--

CREATE TABLE `tb_jenis_obat` (
  `id_jenis_obat` int(11) NOT NULL,
  `nama_jenis_obat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jenis_obat`
--

INSERT INTO `tb_jenis_obat` (`id_jenis_obat`, `nama_jenis_obat`) VALUES
(3, 'Antibiotik'),
(4, 'Antipiretik'),
(5, 'Antihipertensi'),
(6, 'Antihistamin'),
(7, 'Antidepresan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `satuan_obat` varchar(20) NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `id_jenis_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan_obat`, `stok_obat`, `id_jenis_obat`) VALUES
(9, 'Amoksisilin', 'Botol', 10, 3),
(10, 'Ciprofloxacin', 'Botol', 15, 3),
(11, 'Azitromisin', 'Botol', 0, 3),
(12, 'Paracetamol', 'Botol', 0, 4),
(13, 'Ibuprofen', 'Botol', 0, 4),
(14, 'Aspirin', 'Botol', 0, 4),
(15, 'Amlodipin', 'Botol', 0, 5),
(16, 'Losartan', 'Botol', 0, 5),
(17, 'Enalapril', 'Box', 0, 5),
(18, 'Cetirizine', 'Kotak', 0, 6),
(19, 'Loratadine', 'Strip', 0, 6),
(20, 'Diphenhydramine', 'Strip', 0, 6),
(21, 'Fluoxetine', 'Box', 0, 7),
(22, 'Sertraline', 'Strip', 0, 7),
(23, 'Amitriptyline', 'Box', 0, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat_masuk`
--

CREATE TABLE `tb_obat_masuk` (
  `id_obat_masuk` int(11) NOT NULL,
  `kode_transaksi` varchar(20) NOT NULL,
  `tgl_obat_masuk` varchar(20) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` varchar(100) NOT NULL,
  `tgl_kadaluarsa` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_obat_masuk`
--

INSERT INTO `tb_obat_masuk` (`id_obat_masuk`, `kode_transaksi`, `tgl_obat_masuk`, `id_obat`, `jumlah_obat`, `tgl_kadaluarsa`, `keterangan`) VALUES
(12, 'BM-20240630-0001', '2024-07-01', 9, '10', '03-1-2028', 'obat masuk'),
(15, 'BM-20240630-0013', '2024-07-01', 10, '15', '09-7-2028', 'obat masuk'),
(16, 'BM-20240702-0016', '2024-07-01', 11, '10', '07-01-2024', 'obat keras'),
(17, 'BM-20240702-0017', '2024-08-02', 12, '1', '16-4-2024', 'obat keras'),
(18, 'BM-20240702-0018', '2024-07-02', 14, '2', '02-05-2024', 'obat keras');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_permintaan_obat`
--

CREATE TABLE `tb_permintaan_obat` (
  `id_permintaan_obat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_permintaan_obat` int(11) NOT NULL,
  `tgl_permintaan_obat` varchar(20) NOT NULL,
  `status_permintaan_obat` varchar(20) NOT NULL,
  `keterangan_apotik` varchar(100) NOT NULL,
  `keterangan_farmasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_permintaan_obat`
--

INSERT INTO `tb_permintaan_obat` (`id_permintaan_obat`, `id_user`, `id_obat`, `jumlah_permintaan_obat`, `tgl_permintaan_obat`, `status_permintaan_obat`, `keterangan_apotik`, `keterangan_farmasi`) VALUES
(1, 4, 9, 10, '01-07-2025 15:02:21', 'dikirim', 'memenuhi', 'dipesan ke pbf'),
(2, 4, 10, 2, '01-07-2024 15:04:21', 'ditolak', 'tidak memehuni', 'tidak menyantumkan resep dokter'),
(3, 4, 11, 10, '02-07-2024 14:09:04', 'selesai', 'obat masuk', 'masuk'),
(4, 4, 12, 2, '03-08-2024 01:30:14', 'proses', 'Resep', ''),
(5, 4, 14, 3, '03-07-2024  01:31:12', 'proses', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(2, 'gudang', 'a80dd043eb5b682b4148b9fc2b0feabb2c606fff', 'petugas'),
(3, 'petugas1', '8cb2237d0679ca88db6464eac60da96345513964', 'petugas'),
(4, 'apotik', '68f88e05d35e44e753ec09c76c47b0261ece0100', 'apotik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jenis_obat`
--
ALTER TABLE `tb_jenis_obat`
  ADD PRIMARY KEY (`id_jenis_obat`);

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tb_obat_masuk`
--
ALTER TABLE `tb_obat_masuk`
  ADD PRIMARY KEY (`id_obat_masuk`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `tb_permintaan_obat`
--
ALTER TABLE `tb_permintaan_obat`
  ADD PRIMARY KEY (`id_permintaan_obat`),
  ADD KEY `id_user` (`id_user`,`id_obat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_obat`
--
ALTER TABLE `tb_jenis_obat`
  MODIFY `id_jenis_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_obat_masuk`
--
ALTER TABLE `tb_obat_masuk`
  MODIFY `id_obat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_permintaan_obat`
--
ALTER TABLE `tb_permintaan_obat`
  MODIFY `id_permintaan_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
