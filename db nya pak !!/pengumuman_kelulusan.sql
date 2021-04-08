-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 16.05
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengumuman_kelulusan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_pengumuman`
--

CREATE TABLE `as_pengumuman` (
  `id` int(11) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nomor_peserta` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas_jurusan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_pengumuman`
--

INSERT INTO `as_pengumuman` (`id`, `nisn`, `nomor_peserta`, `nama`, `kelas_jurusan`, `keterangan`) VALUES
(1, '001', '0001', 'Iqbal alqodri', 'RPL', 'Lulus'),
(2, '002', '0002', 'Jungkir', 'TKJ', 'Tidak Lulus'),
(11, '227788', '097-190-54', 'siswa5', 'RPL', 'Lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_raport`
--

CREATE TABLE `as_raport` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `raport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_raport`
--

INSERT INTO `as_raport` (`id`, `id_users`, `raport`) VALUES
(23, 2, '190-365-1-SM (4).pdf'),
(24, 3, 'TUTORIAL SEDERHANA TCEXAM.pdf'),
(25, 14, 'Laporan Kepolisian.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_users`
--

CREATE TABLE `as_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','siswa') NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_users`
--

INSERT INTO `as_users` (`id`, `nama`, `username`, `password`, `level`, `status`) VALUES
(1, 'test', 'test', '123', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `as_pengumuman`
--
ALTER TABLE `as_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_raport`
--
ALTER TABLE `as_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `as_users`
--
ALTER TABLE `as_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `as_pengumuman`
--
ALTER TABLE `as_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `as_raport`
--
ALTER TABLE `as_raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `as_users`
--
ALTER TABLE `as_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
