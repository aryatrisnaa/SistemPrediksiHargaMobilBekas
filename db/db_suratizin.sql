-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2019 pada 16.22
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_suratizin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nik_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nik_admin`, `nama_admin`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '1'),
(101, 'A11.2015.08998', 'HUSSEIN F', 'hussein', 'hussein', '3'),
(10101, 'A11.2015.09017', 'Muhamad Ali Taufiq', 'al', 'al123', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barcode`
--

CREATE TABLE `barcode` (
  `kd_barcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dept`
--

CREATE TABLE `dept` (
  `id_dept` varchar(25) NOT NULL,
  `nama_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dept`
--

INSERT INTO `dept` (`id_dept`, `nama_dept`) VALUES
('DPT01', 'ICT'),
('DPT02', 'HR'),
('DPT03', 'Fabric'),
('DPT04', 'FG'),
('DPT06', 'Accessories');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik_karyawan` varchar(25) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `id_subt` varchar(25) NOT NULL,
  `id_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik_karyawan`, `nama_karyawan`, `id_subt`, `id_pos`) VALUES
('A11.2015.08998', 'Hussein', 'SUB3', 5),
('A11.2015.09004', 'Deva', 'SUB4', 4),
('A11.2015.09017', 'Ali', 'SUB2', 4),
('A11.2015.09217', 'Arya', 'SUB4', 1),
('A11.2015.09255', 'Nanda', 'SUB1', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `position`
--

CREATE TABLE `position` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `position`
--

INSERT INTO `position` (`id_pos`, `nama_pos`) VALUES
(1, 'Worker'),
(2, 'Group Leader'),
(3, 'Staff'),
(4, 'Super Visior'),
(5, 'Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seksi`
--

CREATE TABLE `seksi` (
  `id_seksi` varchar(25) NOT NULL,
  `nama_seksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seksi`
--

INSERT INTO `seksi` (`id_seksi`, `nama_seksi`) VALUES
('SEK01', 'Fabric'),
('SEK02', 'Packing'),
('SEK03', 'Manajer ICT'),
('SEK04', 'Manajer Packing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_dept`
--

CREATE TABLE `sub_dept` (
  `id_sub_dept` varchar(25) NOT NULL,
  `id_dept` varchar(25) NOT NULL,
  `nama_sub_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_dept`
--

INSERT INTO `sub_dept` (`id_sub_dept`, `id_dept`, `nama_sub_dept`) VALUES
('SUB01', 'DPT03', 'EXIM'),
('SUB02', 'DPT06', 'Worker'),
('SUB03', 'DPT03', 'Packing'),
('SUB04', 'DPT01', 'Manajer ICT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perizinan`
--

CREATE TABLE `tbl_perizinan` (
  `kd_surat` int(11) NOT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `departemen` varchar(35) DEFAULT NULL,
  `sub_departemen` varchar(35) DEFAULT NULL,
  `seksi` varchar(35) DEFAULT NULL,
  `waktu_izin` date DEFAULT NULL,
  `jamsd` time DEFAULT NULL,
  `jenis_izin` varchar(50) DEFAULT NULL,
  `alasan` varchar(180) DEFAULT NULL,
  `status` enum('1','2','3') NOT NULL,
  `status_personalia` enum('1','2','3') NOT NULL,
  `kode` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_perizinan`
--

INSERT INTO `tbl_perizinan` (`kd_surat`, `nik`, `nama`, `email`, `departemen`, `sub_departemen`, `seksi`, `waktu_izin`, `jamsd`, `jenis_izin`, `alasan`, `status`, `status_personalia`, `kode`) VALUES
(48, 'b11.2016.09012', 'HUSSEIN', '1111509017@mhs.dinus.ac.id', 'Accessories', 'EXIM', 'Fabric', '2018-02-12', '12:15:00', 'Meninggalkan Pekerjaan', 'adadadada', '1', '1', 0),
(47, 'A11.2015.09020', 'Ali', 'pimpinan@app.com', 'HR', 'Purchasing', 'Manajer ICT', '2018-02-13', '12:15:00', 'Dinas', 'sadaqwe', '1', '1', 0),
(46, 'A11.2015.09017', 'Muhamad Ali Taufiq', 'muhamadat10@gmail.com', 'ICT', 'Purchasing', 'Packing', '2018-02-13', '10:55:00', 'Dinas', 'sasdasd', '1', '1', 0),
(45, 'A11.2015.09021', 'HF', 'user@app.com', 'ICT', 'EXIM', 'Manajer ICT', '2018-02-13', '10:50:00', 'Terlambat Masuk Kerja', 'adawqu', '1', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`kd_barcode`);

--
-- Indeks untuk tabel `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik_karyawan`);

--
-- Indeks untuk tabel `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indeks untuk tabel `seksi`
--
ALTER TABLE `seksi`
  ADD PRIMARY KEY (`id_seksi`);

--
-- Indeks untuk tabel `sub_dept`
--
ALTER TABLE `sub_dept`
  ADD PRIMARY KEY (`id_sub_dept`);

--
-- Indeks untuk tabel `tbl_perizinan`
--
ALTER TABLE `tbl_perizinan`
  ADD PRIMARY KEY (`kd_surat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_perizinan`
--
ALTER TABLE `tbl_perizinan`
  MODIFY `kd_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
