-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 01:36 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--
CREATE DATABASE IF NOT EXISTS `pegawai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pegawai`;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kelamin` enum('0','1') NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `pegawai`
--

TRUNCATE TABLE `pegawai`;
--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `alamat`, `kelamin`, `agama`) VALUES
(123, 'Nugroho', 'alamat', '1', 'Islam'),
(987, 'satrio', 'magelang', '1', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
  `nip` int(11) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `tahun_mulai` datetime NOT NULL,
  `tahun_berakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `riwayat`
--

TRUNCATE TABLE `riwayat`;
--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`nip`, `pekerjaan`, `tahun_mulai`, `tahun_berakhir`) VALUES
(123, 'Nguli', '2012-12-09 00:00:00', '2013-12-17 00:00:00'),
(123, 'sales', '2013-12-18 00:00:00', '2014-12-18 00:00:00'),
(987, 'macul', '2013-12-22 00:00:00', '2014-12-22 00:00:00'),
(987, 'nukang', '2014-12-22 00:00:00', '2015-12-22 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
