-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 03:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id_dokter` int(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `jadwal_praktik` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1015 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_dokter`, `nama_dokter`, `departemen`, `jadwal_praktik`) VALUES
(1001, 'Irsyad Muhammad, dr', 'Umum', 'Senin - Kamis | 08.00 - 15.00'),
(1002, 'Pranata Audy, dr.SpB', 'Gigi', 'Senin - Kamis | 08.00 - 15.00'),
(1003, 'Jaidi, dr.SpA', 'Anak', 'Senin - Kamis | 08.00 - 15.00'),
(1004, 'Anugrah Pratama, dr.SpPD', 'Kandungan', 'Senin - Kamis | 08.00 - 15.00'),
(1005, 'Dendi Abdul Rohim, H.dr.SpB', 'THT', 'Senin - Kamis | 08.00 - 15.00'),
(1006, 'Kurniawan Aditya, dr.SpOG', 'Kandungan', 'Senin - Kamis | 08.00 - 15.00'),
(1007, 'Arifin Muhammad, dr.SpS.Mkes', 'Syaraf', 'Senin - Kamis | 08.00 - 15.00'),
(1008, 'Gyats Haitsam, Hj.dr.SpKK', 'Kulit dan Kelamin', 'Senin - Kamis | 08.00 - 15.00'),
(1009, 'Dono Aditia, .dr.SpTHT', 'THT', 'Senin - Kamis | 08.00 - 15.00'),
(1010, 'Zeffry Irwanto, dr.SpM', 'Kulit dan Kelamin', 'Senin - Kamis | 08.00 - 15.00'),
(1011, 'Gustian M, dr', 'Syaraf', 'Senin - Kamis | 08.00 - 15.00'),
(1012, 'Septianti Amalia, S.PSi', 'Umum', 'Senin - Kamis | 08.00 - 15.00'),
(1013, 'Setyaningsih D, dr.SpA', 'Anak', 'Senin - Kamis | 08.00 - 15.00'),
(1014, 'Bayu, H.dr.SpB', 'Umum', 'Senin - Kamis | 08.00 - 15.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
`id_pasien` int(6) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nama_pasien`, `alamat`, `jenis_kelamin`, `no_telepon`) VALUES
(11, 'Muhammad Ilyas Firdaus', 'Jogja', 'P', '081264162'),
(16, 'Raffi Ahmad', 'Jonggol', 'L', '08126252153'),
(17, 'Kevin Julio', 'Cimahi', 'P', '08172352412'),
(18, 'Chelsea Islan', 'Jakarta', 'P', '082416242'),
(19, 'Raisa Ardiana', 'Sukabumi', 'P', '0212312415'),
(20, 'Tina Toon', 'Banyuwangi', 'P', '08098999'),
(21, 'Joshua', 'Surabaya', 'L', '08123122353'),
(22, 'Risa Tachibana', 'Jampang', 'P', '08124124412'),
(23, 'Sarah Ardelia', 'Bogor', 'P', '0812524124'),
(24, 'Jessica Mila', 'Madiun', 'P', '08235141212'),
(25, 'Ricky Harun', 'Lampung', 'L', '08235235235');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prj`
--

CREATE TABLE IF NOT EXISTS `tbl_prj` (
`no_rj` int(8) NOT NULL,
  `id_dokter` int(5) NOT NULL,
  `id_pasien` int(6) NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `diagnosa` varchar(255) DEFAULT NULL,
  `biaya` int(8) NOT NULL,
  `bayar` int(12) DEFAULT NULL,
  `tindakan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prj`
--

INSERT INTO `tbl_prj` (`no_rj`, `id_dokter`, `id_pasien`, `departemen`, `tanggal`, `keluhan`, `diagnosa`, `biaya`, `bayar`, `tindakan`) VALUES
(14, 1004, 19, 'Kandungan', '2014-12-05 03:54:46', 'Mual-mual', ' aasasfsdfsdfsdf\r\nsdf\r\nsdf\r\nasdf\r\nasdf\r\n  ', 200000, 200000, 'Rawat Inap');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE IF NOT EXISTS `tbl_resep` (
`id_resep` int(9) NOT NULL,
  `id_dokter` int(5) NOT NULL,
  `id_pasien` int(6) NOT NULL,
  `nama_resep` varchar(50) NOT NULL,
  `rincian_resep` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resep`
--

INSERT INTO `tbl_resep` (`id_resep`, `id_dokter`, `id_pasien`, `nama_resep`, `rincian_resep`, `tanggal`) VALUES
(6, 1001, 11, 'test', 'tes', '2020-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarif_rj`
--

CREATE TABLE IF NOT EXISTS `tbl_tarif_rj` (
`id_tarif_rj` int(3) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `biaya` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tarif_rj`
--

INSERT INTO `tbl_tarif_rj` (`id_tarif_rj`, `departemen`, `biaya`) VALUES
(5, 'Umum', 150000),
(6, 'Gigi', 160000),
(7, 'Anak', 180000),
(8, 'Kandungan', 200000),
(9, 'THT', 150000),
(10, 'Syaraf', 180000),
(11, 'Kulit dan Kelamin', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`no` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `kategori` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `username`, `password`, `kategori`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'pegawai', 'pegawai', 'pegawai'),
(3, 'user', 'user', 'user'),
(4, 'test', 'test', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
 ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
 ADD PRIMARY KEY (`no_rj`), ADD KEY `id_pasien` (`id_pasien`), ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
 ADD PRIMARY KEY (`id_resep`), ADD UNIQUE KEY `id_pasien` (`id_pasien`), ADD UNIQUE KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `tbl_tarif_rj`
--
ALTER TABLE `tbl_tarif_rj`
 ADD PRIMARY KEY (`id_tarif_rj`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1015;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
MODIFY `id_pasien` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
MODIFY `no_rj` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
MODIFY `id_resep` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_tarif_rj`
--
ALTER TABLE `tbl_tarif_rj`
MODIFY `id_tarif_rj` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `no` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
ADD CONSTRAINT `tbl_prj_fk_2` FOREIGN KEY (`id_dokter`) REFERENCES `pegawai` (`id_dokter`),
ADD CONSTRAINT `tbl_prj_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`);

--
-- Constraints for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
ADD CONSTRAINT `id_pasien_fk` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`),
ADD CONSTRAINT `tbl_prj_fk_3` FOREIGN KEY (`id_dokter`) REFERENCES `pegawai` (`id_dokter`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
