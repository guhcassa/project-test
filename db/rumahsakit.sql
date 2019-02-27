-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 04:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `noktp` varchar(20) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`noktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`noktp`, `nama`, `pass`, `level`) VALUES
('100001', 'Joko', 'e10adc3949ba59abbe56e057f20f883e', 1),
('100002', 'drdasha', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `dokter_id` varchar(30) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `poliknik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`dokter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`dokter_id`, `noktp`, `poliknik`, `nama`, `pass`) VALUES
('5c75f6b28c1bb', '003555367774', 'Sentra Medika', 'Dr. Rafi', 'qwerty'),
('5c75f99157799', '006636673322', 'Klink', 'drdashaa', 'd8578edf8458ce06fbc5bb76a58c5c'),
('5c76016ec50b7', '098883666455', 'Sentra Medika', 'Dr. Teguh', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `pasien_id` varchar(60) NOT NULL,
  `poliknik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `tglpendaftaran` date DEFAULT NULL,
  PRIMARY KEY (`pasien_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasien_id`, `poliknik`, `nama`, `alamat`, `telp`, `tglpendaftaran`) VALUES
('5c74cc133d650', 'Tugu Ibu', 'Teguh', 'Depok', '0899934338738', '2019-02-27'),
('5c74def9cf875', 'Sentra Medika', 'Taufik', 'Kota Jakarta', '0856766255255', '2019-02-26'),
('5c750f58d9675', 'Puskesmas', 'Galih Andreas', 'Bandung', '089994665773', '2019-02-26'),
('5c75ec18ca3c7', 'Hermina', 'Sudi', 'Bandung', '089993439975', '2019-02-27'),
('5c75ed9bc394c', 'K24', 'Sebastian', 'Padang', '0856773354432', '2019-02-27'),
('5c75f9f7f30f9', 'Klinik', 'Bagus Saputra', 'Malang', '085677737773', '2019-02-27'),
('5c75fa6b6b0e9', 'Sentra Medika', 'Gusti', 'Sidoarjo', '08567739993', '2019-02-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
