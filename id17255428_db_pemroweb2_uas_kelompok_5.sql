-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2021 at 02:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17255428_db_pemroweb2_uas_kelompok_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datapesanan`
--

CREATE TABLE `tbl_datapesanan` (
  `nmrPesanan` int(11) NOT NULL,
  `jenisRestoran` varchar(50) NOT NULL,
  `makanan` varchar(50) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `alamatPemesan` varchar(50) NOT NULL,
  `namaPemesan` varchar(50) NOT NULL,
  `telpPemesan` varchar(15) NOT NULL,
  `emailPemesan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `nmrAkun` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`nmrAkun`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Admin', 'e3afed0047b08059d0fada10f400c1e5'),
(3, 'Muhammad Ramlan / 171011400615', 'c7a3cb1c9637190f16f308aa7d41e703'),
(4, 'Muhammad Yusuf Qardhawi / 181011400139', '2e9fa96d7d826e1b4439d1a39d30fc6d'),
(5, 'Multazam / 181011402182', 'd61fbdf594498d21de219f2dfbef04b8'),
(6, 'Nanda Rizky Maulana / 181011400851', '9600fa69c0589b7ee1707e340a1c180d'),
(7, 'Novranto Pratama Zai / 171011401684', '4cd9f5e2a5813f48e5a31194d4d6e81e'),
(8, 'Pandu Dewonoto Laut Santoso / 181011400505', '5b3011a93237d3818f007063dc80f886'),
(9, 'Raden Wirawan Kukuh Pambudi / 181011402940', '5901c927543dd4140ebc15295d9a4c5f'),
(10, 'Rahmad Danil Fajri / 181011401098', '66e435a82daacdd57f241979a0f24ffd'),
(11, 'Rama Adi Saputra / 171011400425', '0201dbf0f3c473719b957d2c6eb164b1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restoran`
--

CREATE TABLE `tbl_restoran` (
  `nmrRestoran` int(5) NOT NULL,
  `namaRestoran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_restoran`
--

INSERT INTO `tbl_restoran` (`nmrRestoran`, `namaRestoran`) VALUES
(1, '--Pilih Restoran--'),
(2, 'Warteg Kharisma'),
(3, 'Restoran Padang Sederhana'),
(4, 'Soto Ayam Ndelik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_datapesanan`
--
ALTER TABLE `tbl_datapesanan`
  ADD PRIMARY KEY (`nmrPesanan`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`nmrAkun`);

--
-- Indexes for table `tbl_restoran`
--
ALTER TABLE `tbl_restoran`
  ADD PRIMARY KEY (`nmrRestoran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_datapesanan`
--
ALTER TABLE `tbl_datapesanan`
  MODIFY `nmrPesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `nmrAkun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_restoran`
--
ALTER TABLE `tbl_restoran`
  MODIFY `nmrRestoran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
