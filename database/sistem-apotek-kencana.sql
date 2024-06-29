-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 28 Jun 2024 pada 15.38
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
-- Struktur dari tabel `tb_detail_permintaan_obat`
--

CREATE TABLE `tb_detail_permintaan_obat` (
  `id_detail_permintaan_obat` int(11) NOT NULL,
  `id_permintaan_obat` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faktur`
--

CREATE TABLE `tb_faktur` (
  `id_faktur` int(11) NOT NULL,
  `no_faktur` int(11) NOT NULL,
  `tgl_faktur` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat_masuk`
--

CREATE TABLE `tb_obat_masuk` (
  `id_obat_masuk` int(11) NOT NULL,
  `id_faktur` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `tgl_kadaluarsa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_permintaan_obat`
--

CREATE TABLE `tb_permintaan_obat` (
  `id_permintaan_obat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kd_permintaan_obat` int(11) NOT NULL,
  `tgl_permintaan_obat` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'gudang', 'a80dd043eb5b682b4148b9fc2b0feabb2c606fff', 'gudang'),
(3, 'petugas', '670489f94b6997a870b148f74744ee5676304925', 'petugas'),
(4, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(5, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(6, 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_permintaan_obat`
--
ALTER TABLE `tb_detail_permintaan_obat`
  ADD PRIMARY KEY (`id_detail_permintaan_obat`);

--
-- Indeks untuk tabel `tb_faktur`
--
ALTER TABLE `tb_faktur`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indeks untuk tabel `tb_obat_masuk`
--
ALTER TABLE `tb_obat_masuk`
  ADD PRIMARY KEY (`id_obat_masuk`);

--
-- Indeks untuk tabel `tb_permintaan_obat`
--
ALTER TABLE `tb_permintaan_obat`
  ADD PRIMARY KEY (`id_permintaan_obat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_permintaan_obat`
--
ALTER TABLE `tb_detail_permintaan_obat`
  MODIFY `id_detail_permintaan_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_faktur`
--
ALTER TABLE `tb_faktur`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_obat_masuk`
--
ALTER TABLE `tb_obat_masuk`
  MODIFY `id_obat_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_permintaan_obat`
--
ALTER TABLE `tb_permintaan_obat`
  MODIFY `id_permintaan_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
