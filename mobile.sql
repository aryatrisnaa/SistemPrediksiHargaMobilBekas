-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 01:37 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `no` varchar(9) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jarak` int(7) NOT NULL,
  `kfisik` int(3) NOT NULL,
  `harga_jual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id_rule` varchar(4) NOT NULL,
  `tahun` varchar(6) NOT NULL,
  `jarak` varchar(6) NOT NULL,
  `fisik` varchar(14) NOT NULL,
  `kd_mobil` varchar(3) NOT NULL,
  `harga_bekas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id_rule`, `tahun`, `jarak`, `fisik`, `kd_mobil`, `harga_bekas`) VALUES
('R01', 'lama', 'tinggi', 'butuh reparasi', 'AVZ', 74500000),
('R02', 'lama', 'tinggi', 'lecet normal', 'AVZ', 82500000),
('R03', 'lama', 'tinggi', 'mulus', 'AVZ', 87000000),
('R04', 'lama', 'normal', 'butuh reparasi', 'AVZ', 84000000),
('R05', 'lama', 'normal', 'lecet normal', 'AVZ', 90000000),
('R06', 'lama', 'normal', 'mulus', 'AVZ', 97000000),
('R07', 'lama', 'rendah', 'butuh reparasi', 'AVZ', 85000000),
('R08', 'lama', 'rendah', 'lecet normal', 'AVZ', 97000000),
('R09', 'lama', 'rendah', 'mulus', 'AVZ', 108000000),
('R10', 'sedang', 'tinggi', 'butuh reparasi', 'AVZ', 115000000),
('R11', 'sedang', 'tinggi', 'lecet normal', 'AVZ', 120000000),
('R12', 'sedang', 'tinggi', 'mulus', 'AVZ', 128000000),
('R13', 'sedang', 'normal', 'butuh reparasi', 'AVZ', 115000000),
('R14', 'sedang', 'normal', 'lecet normal', 'AVZ', 129000000),
('R15', 'sedang', 'normal', 'mulus', 'AVZ', 140000000),
('R16', 'sedang', 'rendah', 'butuh reparasi', 'AVZ', 125000000),
('R17', 'sedang', 'rendah', 'lecet normal', 'AVZ', 134500000),
('R18', 'sedang', 'rendah', 'mulus', 'AVZ', 145000000),
('R19', 'baru', 'tinggi', 'butuh reparasi', 'AVZ', 150000000),
('R20', 'baru', 'tinggi', 'lecet normal', 'AVZ', 152500000),
('R21', 'baru', 'tinggi', 'mulus', 'AVZ', 153000000),
('R22', 'baru', 'normal', 'butuh reparasi', 'AVZ', 152000000),
('R23', 'baru', 'normal', 'lecet normal', 'AVZ', 155000000),
('R24', 'baru', 'normal', 'mulus', 'AVZ', 160000000),
('R25', 'baru', 'rendah', 'butuh reparasi', 'AVZ', 159000000),
('R26', 'baru', 'rendah', 'lecet normal', 'AVZ', 168000000),
('R27', 'baru', 'rendah', 'mulus', 'AVZ', 170000000),
('R28', 'lama', 'tinggi', 'butuh reparasi', 'MBL', 134000000),
('R29', 'lama', 'tinggi', 'lecet normal', 'MBL', 135600000),
('R30', 'lama', 'tinggi', 'mulus', 'MBL', 137000000),
('R31', 'lama', 'normal', 'butuh reparasi', 'MBL', 135000000),
('R32', 'lama', 'normal', 'lecet normal', 'MBL', 137600000),
('R33', 'lama', 'normal', 'mulus', 'MBL', 139000000),
('R34', 'lama', 'rendah', 'butuh reparasi', 'MBL', 136000000),
('R35', 'lama', 'rendah', 'lecet normal', 'MBL', 138500000),
('R36', 'lama', 'rendah', 'mulus', 'MBL', 140000000),
('R37', 'sedang', 'tinggi', 'butuh reparasi', 'MBL', 137000000),
('R38', 'sedang', 'tinggi', 'lecet normal', 'MBL', 142000000),
('R39', 'sedang', 'tinggi', 'mulus', 'MBL', 147500000),
('R40', 'sedang', 'normal', 'butuh reparasi', 'MBL', 142500000),
('R41', 'sedang', 'normal', 'lecet normal', 'MBL', 149200000),
('R42', 'sedang', 'normal', 'mulus', 'MBL', 155000000),
('R43', 'sedang', 'rendah', 'butuh reparasi', 'MBL', 152500000),
('R44', 'sedang', 'rendah', 'lecet normal', 'MBL', 160000000),
('R45', 'sedang', 'rendah', 'mulus', 'MBL', 175000000),
('R46', 'baru', 'tinggi', 'butuh reparasi', 'MBL', 156000000),
('R47', 'baru', 'tinggi', 'lecet normal', 'MBL', 162000000),
('R48', 'baru', 'tinggi', 'mulus', 'MBL', 167000000),
('R49', 'baru', 'normal', 'butuh reparasi', 'MBL', 157000000),
('R50', 'baru', 'normal', 'lecet normal', 'MBL', 162500000),
('R51', 'baru', 'normal', 'mulus', 'MBL', 170000000),
('R52', 'baru', 'rendah', 'butuh reparasi', 'MBL', 157000000),
('R53', 'baru', 'rendah', 'lecet normal', 'MBL', 165000000),
('R54', 'baru', 'rendah', 'mulus', 'MBL', 185000000),
('R55', 'lama', 'tinggi', 'butuh reparasi', 'XPD', 213000000),
('R56', 'lama', 'tinggi', 'lecet normal', 'XPD', 217000000),
('R57', 'lama', 'tinggi', 'mulus', 'XPD', 220000000),
('R58', 'lama', 'normal', 'butuh reparasi', 'XPD', 218000000),
('R59', 'lama', 'normal', 'lecet normal', 'XPD', 220200000),
('R60', 'lama', 'normal', 'mulus', 'XPD', 225000000),
('R61', 'lama', 'rendah', 'butuh reparasi', 'XPD', 221000000),
('R62', 'lama', 'rendah', 'lecet normal', 'XPD', 227000000),
('R63', 'lama', 'rendah', 'mulus', 'XPD', 235000000),
('R64', 'sedang', 'tinggi', 'butuh reparasi', 'XPD', 232200000),
('R65', 'sedang', 'tinggi', 'lecet normal', 'XPD', 236500000),
('R66', 'sedang', 'tinggi', 'mulus', 'XPD', 238000000),
('R67', 'sedang', 'normal', 'butuh reparasi', 'XPD', 235000000),
('R68', 'sedang', 'normal', 'lecet normal', 'XPD', 238600000),
('R69', 'sedang', 'normal', 'mulus', 'XPD', 241000000),
('R70', 'sedang', 'rendah', 'butuh reparasi', 'XPD', 237300000),
('R71', 'sedang', 'rendah', 'lecet normal', 'XPD', 240200000),
('R72', 'sedang', 'rendah', 'mulus', 'XPD', 245000000),
('R73', 'baru', 'tinggi', 'butuh reparasi', 'XPD', 242500000),
('R74', 'baru', 'tinggi', 'lecet normal', 'XPD', 245100000),
('R75', 'baru', 'tinggi', 'mulus', 'XPD', 247000000),
('R76', 'baru', 'normal', 'butuh reparasi', 'XPD', 244100000),
('R77', 'baru', 'normal', 'lecet normal', 'XPD', 248000000),
('R78', 'baru', 'normal', 'mulus', 'XPD', 250000000),
('R79', 'baru', 'rendah', 'butuh reparasi', 'XPD', 247200000),
('R80', 'baru', 'rendah', 'lecet normal', 'XPD', 251500000),
('R81', 'baru', 'rendah', 'mulus', 'XPD', 255100000);

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
