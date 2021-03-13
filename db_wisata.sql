-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 22 Jan 2021 pada 10.47
-- Versi Server: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_tempat` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jarak` double NOT NULL COMMENT 'Jarak(km)',
  `longitude` varchar(55) NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `hasil` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_tempat`, `nama_wisata`, `alamat`, `jarak`, `longitude`, `latitude`, `hasil`) VALUES
(19, 'Museum Deli Serdang', 'Jl. Petapahan Lubuk Pakam Deli Serdang', 2.7, '435433', '345353', '3534535'),
(20, 'Kolam Renang Deli Serdang', 'Jl. Petapahan Lubuk Pakam Deli Serdang', 3.4, '54353', '345353', '35353'),
(21, 'Jaharun Tourism City Center', 'Jalan Besar Petumbukan Desa Jaharun Tj, Siporkis Galang', 16.4, '435345', '3453453', '23454542'),
(22, 'Danau Linting', 'Jl. Simpang Gn. Manumpak A Sibunga Bunga Hilir Tj. Muda Hulu', 53.6, '34535', '3453543', '3543543'),
(23, 'Pantai Salju', 'Mabar Bangun Purba ', 37, '345543', '345345', '234244'),
(24, 'Taman Buah Deli Serdang', 'Sumbul Sinembah Tj. Muda Hilir ', 1.8, '34535', '35435', '35345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
