-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 09:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusdig`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDbuku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`IDbuku`, `judul`, `penulis`, `penerbit`, `tahunterbit`, `foto`, `buku`) VALUES
(4, 'Jujutsu Kaisen', 'Gege Akutami', 'Jepang', 2024, '9786230022180_Jujutsukaisen_1.jpg', ''),
(5, 'Detektif Conan', 'Aoyama Gosho', 'Jepang', 1998, 'coverconan.jpg', ''),
(6, 'Demon Slayer', 'Kimetsu No Yaiba', 'Jepang', 2021, '9786230017193_cover_Demon_Slayer_01.jpg', ''),
(7, 'Naruto', 'Masashi Kishimoto', 'Jepang', 1999, 'Yv1tkdZJ2l.jpg', ''),
(8, 'Dragon Ball', 'Akira Toriyama', 'Jepang', 1984, 'YlEHsLxjju.jpg', ''),
(9, 'Kobo Chan', 'Kobo Tabata', 'Jepang', 1995, '4ce5stQnrM.jpg', ''),
(10, 'Doraemon', 'Fujiko F. Fujio', 'Jepang', 1996, 'rxlpxw5bYl.jpg', ''),
(11, 'Slam Dunk', 'Takehiko Inoue', 'Jepang', 1990, 'dmksd.jpg', ''),
(12, 'Cantik Itu Luka', 'Eka Kurniawan', 'Gramedia Pustaka Utama', 2015, 'Cantik-itu-Luka-Cover-Besar.jpg', ''),
(13, 'Laut Bercerita', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', 2017, 'Laut-Bercerita4-1.jpg', ''),
(14, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Lentera Dipantara', 1980, 'Bumi-Manusia-1.jpg', ''),
(15, 'Sumur', 'Eka Kurniawan', 'Gramedia Pustaka Utama', 2012, '9786020653242_SUMUR--1-.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `IDpeminjaman` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_peminjaman` enum('proses','dipinjam','dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDuser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `level` enum('admin','petugas','pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDuser`, `username`, `password`, `email`, `nim`, `namalengkap`, `alamat`, `level`) VALUES
(12, 'cogil', 'cegil', 'yudi@gmail.com', '17223019', 'Yudi Ismail', '', 'pengguna'),
(13, 'petugas', 'petugas', 'petugas@gmail.com', '00023762', 'Pak Perpus', 'Bandung', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDbuku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`IDpeminjaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `IDbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `IDpeminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
