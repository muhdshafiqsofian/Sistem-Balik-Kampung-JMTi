-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2024 at 06:29 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbka`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat`
--

CREATE TABLE `maklumat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `noid` varchar(20) NOT NULL,
  `nokp` varchar(14) NOT NULL,
  `notel` varchar(20) NOT NULL,
  `alamat` longtext NOT NULL,
  `nobilik` varchar(10) NOT NULL,
  `blok` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat`
--

INSERT INTO `maklumat` (`id`, `nama`, `noid`, `nokp`, `notel`, `alamat`, `nobilik`, `blok`, `jabatan`, `semester`) VALUES
(1, 'Muhamad Shafiq Bin Sofian', 'K12345678', '000000-00-0000', '010-0000000', 'Sila isi alamat', 'bk311', 'BUNGA KEKWA', 'TEK. KEJ. KOMPUTER', 'SEMESTER 3'),
(2, 'ifwat', 'K12345678', '000000-00-0000', '010-0000000', 'Sila isi alamat', 'bk313', 'BUNGA KEKWA', 'TEK. KEJ. KOMPUTER', 'SEMESTER 3'),
(3, 'zulfadhli', 'K12345678', '000000-00-0000', '010-0000000', 'Sila isi alamat', 'BK 307', 'BUNGA KEKWA', 'TEK. KEJ. KOMPUTER', 'SEMESTER 4'),
(4, 'CHIA CHIN PU', 'K12345678', '000000-00-0000', '010-0000000', 'Sila isi alamat', '310', 'BUNGA KEKWA', 'TEK. KEJ. KOMPUTER', 'SEMESTER 3'),
(5, 'fais bin azizan', 'K12345678', '000000-00-0000', '010-0000000', 'Sila isi alamat', '321', 'BUNGA RAYA', 'TEK. KEJ. KOMPUTER', 'SEMESTER 4'),
(6, 'Muhammad Hazmin Bin Zainal Abidin', 'K12345678', '000000-00-0000', '010-0000000', 'Sila isi alamat', '313', 'BUNGA KEKWA', 'TEK. KEJ. KOMPUTER', 'SEMESTER 3');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `kata_laluan` varchar(20) NOT NULL,
  `noid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id`, `nama_pengguna`, `kata_laluan`, `noid`) VALUES
(2, 'ifwat', 'ifwat', 'K12112077'),
(3, 'zul', 'zul', 'K12112077'),
(5, 'chia chin pu', '123123', '123123'),
(6, 'shafiq', 'shafiq', 'K12112084'),
(7, 'fais', 'fais', 'K12112062'),
(8, 'hazmin', 'min13914', 'k12112088');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `noid` varchar(20) NOT NULL,
  `tarikh` varchar(10) NOT NULL,
  `alamat` longtext NOT NULL,
  `tujuan` longtext NOT NULL,
  `keputusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `nama`, `noid`, `tarikh`, `alamat`, `tujuan`, `keputusan`) VALUES
(4, 'ifwat', 'K12112077', '21/6/2013', 'Sila isi alamat', 'balik kampung laa', 'DILULUSKAN'),
(9, 'Muhamad Shafiq Bin Sofian', 'K12112084', '21/6/2013', '  asdsadsacsa', 'balik kampung ', 'TIDAK DILULUSKAN'),
(10, 'Muhamad Shafiq Bin Sofian', 'K12112084', '22/6/2013', '  asdsadsacsa', 'balik kampung untuk cuti semester', 'DILULUSKAN'),
(11, 'fais bin azizan', 'K12112062', '18/6/2013', ' lot 9', 'saja2 nak blik hg psai apa?', 'DILULUSKAN'),
(12, 'Muhammad Hazmin Bin Zainal Abidin', 'k12112088', '20.6.2013', 'Sila isi alamat', 'masuk ke rumah sewa', 'TIDAK DILULUSKAN');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `nama_pengguna` varchar(20) NOT NULL,
  `kata_laluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`nama_pengguna`, `kata_laluan`) VALUES
('warden1', 'warden1'),
('warden2', 'warden2'),
('warden3', 'warden3'),
('warden4', 'warden4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maklumat`
--
ALTER TABLE `maklumat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maklumat`
--
ALTER TABLE `maklumat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
