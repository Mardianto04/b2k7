-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 06:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `username`, `password`) VALUES
(5, 'admin', '$2y$10$VVHG.ZMtxGFXDTfBypyPXueZ92PhCzmmo1eitRPhxcZz/AWP7pncG');

-- --------------------------------------------------------

--
-- Table structure for table `keluhann`
--

CREATE TABLE `keluhann` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` int(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `keluhan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluhann`
--

INSERT INTO `keluhann` (`id`, `nama`, `nik`, `gender`, `tanggal`, `kecamatan`, `keluhan`, `gambar`, `komentar`, `waktu`) VALUES
(30, 'holan', 201000902, 'Laki-Laki', '2022-11-12', 'Kec Samarinda Seberang', 'qqqqqq', '', 'Baik, Akan Kami Konfirmasi Terlebih Dahulu ke Lokasi', '2022-11-11 05:32:13'),
(31, 'anto bungul', 192000804, 'Perempuan', '2022-11-06', 'Kec Samarinda Seberang', 'warga tenggelam hanyut tebawa arus sungai mahakam', '', 'baik, kami akan segara konfirmasi tim basarnas agar langsung ke tempat tkp. ', '2022-11-11 04:01:32'),
(40, 'aaaa ', 111, 'Laki-Laki', '2022-11-18', 'Kec Samarinda Seberang', '111', '.', '', '2022-11-11 05:34:24'),
(41, 'dreds ', 4556, 'Laki-Laki', '2022-11-19', 'Kec Samarinda Seberang', 'xsxxx', '', '', '2022-11-11 05:43:11'),
(42, 'asa', 4444, 'Laki-Laki', '2022-02-22', 'Kec Samarinda Seberang', '111', '', '', '0000-00-00 00:00:00'),
(43, 'mana', 111, 'Laki-Laki', '2022-11-25', 'Kec Samarinda Seberang', 'AAAA', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `no` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`no`, `nama`, `kontak`) VALUES
(1, 'Adhitya Saputra', '+62 8115556664'),
(2, 'Muhammad Holan Ardinata Saragih', '+62 82151502439'),
(3, 'Mardianto Tandi Ramma', '+62 85348155536');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `username`, `password`) VALUES
(2, '1111', '$2y$10$Jdi5SO1to11XKYSQLxwCReLDjZNjpsCuwerA5H3mS1ungRKWYfU0q'),
(6, '2222', '$2y$10$ky0z/2Zf/G1eyC9uMR.lu.qhIMmHuLZXgcsOfHMWWw03JMtKv4mNG'),
(7, 'adit', '$2y$10$OqOo8m/zMdn.OU3NyI75Mu/Tz7b0ntkDM05wBM9dxHGAfAYICIbAi'),
(8, 'holan jelek', '$2y$10$K4DdVGxZVraTruln1mAUrurJh6AdLyTUMMcNM.CpNxmXU5C5v6Zw2'),
(9, 'anto bungul', '$2y$10$0NT0pk6QnTTnb24nzFypmejeTjCtcVmob5e617TQuyKNVkWrpWeo6'),
(10, 'nisrina', '$2y$10$fM0pHlVeRr4j0vEphF9FG.P11VWr4c9xtu5NHwEJlErs2Vm.yYi6u'),
(11, 'holann', '$2y$10$VO0RangJsDiXBNPKf7kQFuqSy4hsmELcjYEz9RUBV5iB9xWmkcwzW'),
(12, 'holan', '$2y$10$DeMGLS4ocCNxeQcjWPR8wOs55KEvd9fAGPKYtuU6rKe31DGKIQtj6');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkami`
--

CREATE TABLE `tentangkami` (
  `no` int(11) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentangkami`
--

INSERT INTO `tentangkami` (`no`, `visi`, `misi`, `motto`) VALUES
(1, 'Menjadi unit yang profesional dalam memberikan dukungan terhadap pengelolaan pengaduan masyarakat dalam mewujudkan Pemerintahan Indonesia yang aspiratif.', '1. Meningkatkan kualitas pengelolaan dan penanganan surat pengaduan masyarakat.\r\n2. Membangun kepercayaan masyarakat terhadap Pemerintahan Indonesia', 'Melayani dengan Empati dan Sepenuh Hati.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhann`
--
ALTER TABLE `keluhann`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keluhann`
--
ALTER TABLE `keluhann`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
