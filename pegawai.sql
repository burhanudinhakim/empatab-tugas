-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 08:46 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kelamin` enum('0','1') NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `tanggal_lahir`, `nama`, `alamat`, `kelamin`, `agama`) VALUES
('00109892991011', '1999-10-11', 'Rizal Ramli', 'Jalan Kebenaran No 99, Kemukus Timur Pom Bensin\r\nSemarang', '1', 'Islam'),
('009827381980912', '2015-12-12', 'Setya Novanto ', 'Jalan Keabadian No 01, Kemuniing', '', 'Islam'),
('03001781800823', '1980-08-23', 'Jainuddin Maher', 'Desa Kemukus, RT 09/08 No.99, Karanganyar', '', 'Islam'),
('08000231990912', '1999-09-12', 'Muhammad Rifai', 'Jalan Deresan II No. 21 Sleman, Yogyakarta', '', 'Islam'),
('08100031980201', '1998-02-01', 'Kemal Pahlevi', 'Jalan Kemuning No. 98, surakarta', '1', 'Islam'),
('09007801830923', '1983-09-23', 'Shafa Khalila ', 'Kebon Jeruk, 89 Jakarta Selatan', '', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `riwayat_pekerjaan` (
  `nik` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pekerjaan` text NOT NULL,
  `tahun_mulai` date NOT NULL,
  `tahun_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_pekerjaan`
--

INSERT INTO `riwayat_pekerjaan` (`nik`, `nip`, `pekerjaan`, `tahun_mulai`, `tahun_akhir`) VALUES
('150987600921', '0012500300901213', 'CMO PT Krakatau Steel', '2015-12-08', '2018-05-10'),
('127654327600', '0012665478233', 'Karyawan PT Sosro Asri Makmur', '2014-06-06', '2015-12-01'),
('127654327600', '0022601101960312', 'CFO PT Astra Motor Jakarta', '2015-12-22', '2017-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nip` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `password`) VALUES
('03001781800823', '5512d7e4578a4a46fe225f163fe2242a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`), ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD PRIMARY KEY (`nip`), ADD UNIQUE KEY `nip` (`nip`), ADD UNIQUE KEY `nip_2` (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `nip` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
