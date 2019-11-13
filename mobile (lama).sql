-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 06:43 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_jual`
--

CREATE TABLE `harga_jual` (
  `id_mbl` varchar(9) NOT NULL,
  `hasil` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_jual`
--

INSERT INTO `harga_jual` (`id_mbl`, `hasil`) VALUES
('MBL001', 57250000);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `no` varchar(9) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jarak` int(7) NOT NULL,
  `hrgbeli` int(10) NOT NULL,
  `kfisik` int(3) NOT NULL,
  `harga_jual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`no`, `merek`, `tahun`, `jarak`, `hrgbeli`, `kfisik`, `harga_jual`) VALUES
('MBL001', 'Toyota Avanza', 2016, 10000, 114500000, 92, 57250000);

-- --------------------------------------------------------

--
-- Table structure for table `predikat-fisik`
--

CREATE TABLE `predikat-fisik` (
  `id_mbl` varchar(9) NOT NULL,
  `kondisi-fisik` int(3) NOT NULL,
  `pred_butuh_reparasi` float NOT NULL,
  `pred_lecet_normal` float NOT NULL,
  `pred_mulus` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predikat-fisik`
--

INSERT INTO `predikat-fisik` (`id_mbl`, `kondisi-fisik`, `pred_butuh_reparasi`, `pred_lecet_normal`, `pred_mulus`) VALUES
('MBL001', 92, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `predikat-jarak`
--

CREATE TABLE `predikat-jarak` (
  `id_mbl` varchar(9) NOT NULL,
  `odometer` int(6) NOT NULL,
  `pred_rendah` float NOT NULL,
  `pred_normal` float NOT NULL,
  `pred_tinggi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predikat-jarak`
--

INSERT INTO `predikat-jarak` (`id_mbl`, `odometer`, `pred_rendah`, `pred_normal`, `pred_tinggi`) VALUES
('MBL001', 10000, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `predikat-tahun`
--

CREATE TABLE `predikat-tahun` (
  `id_mbl` varchar(9) NOT NULL,
  `tahun` int(4) NOT NULL,
  `pred_lama` float NOT NULL,
  `pred_sedang` float NOT NULL,
  `pred_baru` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predikat-tahun`
--

INSERT INTO `predikat-tahun` (`id_mbl`, `tahun`, `pred_lama`, `pred_sedang`, `pred_baru`) VALUES
('MBL001', 2016, 0, 0.2, 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `query-rule-fisik`
--

CREATE TABLE `query-rule-fisik` (
  `id_mbl` varchar(9) NOT NULL,
  `fisik` int(3) NOT NULL,
  `butuh_reparasi` int(1) NOT NULL,
  `lecet_normal` int(1) NOT NULL,
  `mulus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query-rule-fisik`
--

INSERT INTO `query-rule-fisik` (`id_mbl`, `fisik`, `butuh_reparasi`, `lecet_normal`, `mulus`) VALUES
('MBL001', 92, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `query-rule-odo`
--

CREATE TABLE `query-rule-odo` (
  `id_mbl` varchar(9) NOT NULL,
  `odo` int(4) NOT NULL,
  `tinggi` int(1) NOT NULL,
  `normal` int(1) NOT NULL,
  `rendah` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query-rule-odo`
--

INSERT INTO `query-rule-odo` (`id_mbl`, `odo`, `tinggi`, `normal`, `rendah`) VALUES
('MBL001', 10000, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `query-rule-tahun`
--

CREATE TABLE `query-rule-tahun` (
  `id_mbl` varchar(9) NOT NULL,
  `thn` int(4) NOT NULL,
  `lama` int(1) NOT NULL,
  `sedang` int(1) NOT NULL,
  `baru` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query-rule-tahun`
--

INSERT INTO `query-rule-tahun` (`id_mbl`, `thn`, `lama`, `sedang`, `baru`) VALUES
('MBL001', 2016, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id_rule` varchar(4) NOT NULL,
  `tahun` varchar(6) NOT NULL,
  `jarak` varchar(6) NOT NULL,
  `fisik` varchar(14) NOT NULL,
  `penurunan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id_rule`, `tahun`, `jarak`, `fisik`, `penurunan`) VALUES
('R01', 'lama', 'tinggi', 'butuh reparasi', 0.1),
('R02', 'lama', 'tinggi', 'lecet normal', 0.11),
('R03', 'lama', 'tinggi', 'mulus', 0.13),
('R04', 'lama', 'normal', 'butuh reparasi', 0.17),
('R05', 'lama', 'normal', 'lecet normal', 0.21),
('R06', 'lama', 'normal', 'mulus', 0.24),
('R07', 'lama', 'rendah', 'butuh reparasi', 0.5),
('R08', 'lama', 'rendah', 'lecet normal', 0.5),
('R09', 'lama', 'rendah', 'mulus', 0.5),
('R10', 'sedang', 'tinggi', 'butuh reparasi', 0.5),
('R11', 'sedang', 'tinggi', 'lecet normal', 0.5),
('R12', 'sedang', 'tinggi', 'mulus', 0.5),
('R13', 'sedang', 'normal', 'butuh reparasi', 0.5),
('R14', 'sedang', 'normal', 'lecet normal', 0.5),
('R15', 'sedang', 'normal', 'mulus', 0.5),
('R16', 'sedang', 'rendah', 'butuh reparasi', 0.5),
('R17', 'sedang', 'rendah', 'lecet normal', 0.5),
('R18', 'sedang', 'rendah', 'mulus', 0.5),
('R19', 'baru', 'tinggi', 'butuh reparasi', 0.5),
('R20', 'baru', 'tinggi', 'lecet normal', 0.5),
('R21', 'baru', 'tinggi', 'mulus', 0.5),
('R22', 'baru', 'normal', 'butuh reparasi', 0.5),
('R23', 'baru', 'normal', 'lecet normal', 0.5),
('R24', 'baru', 'normal', 'mulus', 0.5),
('R25', 'baru', 'rendah', 'butuh reparasi', 0.5),
('R26', 'baru', 'rendah', 'lecet normal', 0.5),
('R27', 'baru', 'rendah', 'mulus', 0.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_jual`
--
ALTER TABLE `harga_jual`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `predikat-fisik`
--
ALTER TABLE `predikat-fisik`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `predikat-jarak`
--
ALTER TABLE `predikat-jarak`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `predikat-tahun`
--
ALTER TABLE `predikat-tahun`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `query-rule-fisik`
--
ALTER TABLE `query-rule-fisik`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `query-rule-odo`
--
ALTER TABLE `query-rule-odo`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `query-rule-tahun`
--
ALTER TABLE `query-rule-tahun`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id_rule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
