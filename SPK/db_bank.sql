-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 10:22 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bank`
--
CREATE DATABASE IF NOT EXISTS `db_bank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_bank`;

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE IF NOT EXISTS `nasabah` (
  `NO_NASABAH` char(5) NOT NULL,
  `NAMA_NASABAH` varchar(30) DEFAULT NULL,
  `ALAMAT_NASABAH` text,
  `NOHP_NASABAH` varchar(12) DEFAULT NULL,
  `PASSWORD` varchar(12) NOT NULL,
  PRIMARY KEY (`NO_NASABAH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`NO_NASABAH`, `NAMA_NASABAH`, `ALAMAT_NASABAH`, `NOHP_NASABAH`, `PASSWORD`) VALUES
('12345', 'deni wardiman', 'jln munjul no 234', '082817872684', '12345'),
('12934', 'rivani', 'garut', '084737827918', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `NO_PEGAWAI` char(6) NOT NULL,
  `PASSWORD` varchar(12) NOT NULL,
  `NAMA__PEGAWAI` varchar(30) DEFAULT NULL,
  `ALAMAT_PEGAWAI` text,
  `HOHP_PEGAWAI` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`NO_PEGAWAI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NO_PEGAWAI`, `PASSWORD`, `NAMA__PEGAWAI`, `ALAMAT_PEGAWAI`, `HOHP_PEGAWAI`) VALUES
('123456', 'pegawai', 'rivan mulyana', 'jln kerinci no 281', '085746728717');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE IF NOT EXISTS `tabungan` (
  `NO_TRANSAKSI` char(10) NOT NULL,
  `NO_NASABAH` char(5) DEFAULT NULL,
  `NO_PEGAWAI` char(6) DEFAULT NULL,
  `TANGGAL_TRANSAKSI` datetime NOT NULL,
  `DEBIT` int(11) DEFAULT NULL,
  `KREDIT` int(11) DEFAULT NULL,
  `SALDO` int(11) DEFAULT NULL,
  PRIMARY KEY (`NO_TRANSAKSI`),
  KEY `FK_RELATIONSHIP_1` (`NO_NASABAH`),
  KEY `FK_RELATIONSHIP_2` (`NO_PEGAWAI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`NO_TRANSAKSI`, `NO_NASABAH`, `NO_PEGAWAI`, `TANGGAL_TRANSAKSI`, `DEBIT`, `KREDIT`, `SALDO`) VALUES
('2016062001', '12345', '123456', '2016-06-20 09:06:54', 200000, NULL, 200000),
('2016062101', '12345', '123456', '2016-06-21 09:06:44', 100000, NULL, 300000),
('2016062102', '12345', '123456', '2016-06-21 09:06:28', 100000, NULL, 400000),
('2016062103', '12345', '123456', '2016-06-21 09:06:40', NULL, 50000, 350000),
('2016062104', '12345', '123456', '2016-06-21 09:06:07', NULL, 50000, 300000),
('2016062105', '12345', '123456', '2016-06-21 09:06:49', 50000, NULL, 350000),
('2016062106', '12345', '123456', '2016-06-21 09:06:41', 50000, NULL, 400000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`NO_NASABAH`) REFERENCES `nasabah` (`NO_NASABAH`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`NO_PEGAWAI`) REFERENCES `pegawai` (`NO_PEGAWAI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
