-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2016 at 09:06 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `detail_penerbit`(IN `kode_penerbit_nya` CHAR(4))
BEGIN
SELECT  * FROM  tbl_penerbit WHERE kode_penerbit=kode_penerbit_nya;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hapus_penerbit`(IN `kode_penerbit_nya` CHAR(4))
BEGIN
DELETE FROm  tbl_penerbit WHERE kode_penerbit=kode_penerbit_nya;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tambah_penerbit`(IN `kode_penerbit_nya` VARCHAR(4), IN `nama_penerbit_nya` VARCHAR(150), IN `kota_penerbit_nya` VARCHAR(50), IN `email_penerbit_nya` VARCHAR(150), IN `web_penerbit_nya` VARCHAR(200), IN `telp_penerbit_nya` VARCHAR(20))
BEGIN
INSERT INTO tbl_penerbit (kode_penerbit,nama_penerbit,kota_penerbit,email_penerbit,website_penerbit,telepon_penerbit)
VALUES ( kode_penerbit_nya, nama_penerbit_nya, kota_penerbit_nya,  email_penerbit_nya, web_penerbit_nya, telp_penerbit_nya);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_penerbit`()
BEGIN
SELECT *  FROM  tbl_penerbit;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ubah_penerbit`(IN kode_penerbit_nya VARCHAR(4), IN nama_penerbit_nya VARCHAR(150), IN kota_penerbit_nya VARCHAR(50), IN email_penerbit_nya VARCHAR(150), IN web_penerbit_nya VARCHAR(200), IN telp_penerbit_nya VARCHAR(20))
BEGIN
UPDATE  tbl_penerbit SET 
nama_penerbit=nama_penerbit_nya,
kota_penerbit=kota_penerbit_nya,
email_penerbit=email_penerbit_nya,
website_penerbit=web_penerbit_nya,
telepon_penerbit=telp_penerbit_nya

WHERE kode_penerbit=kode_penerbit_nya;
END$$

DELIMITER ;

-- --------------------------------------------------------


--
-- Table structure for table `tbl_penerbit`
--

CREATE TABLE IF NOT EXISTS `tbl_penerbit` (
  `kode_penerbit` char(4) NOT NULL,
  `nama_penerbit` varchar(150) NOT NULL,
  `kota_penerbit` varchar(100) NOT NULL,
  `email_penerbit` varchar(200) NOT NULL,
  `website_penerbit` varchar(200) NOT NULL,
  `telepon_penerbit` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_penerbit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penerbit`
--

INSERT INTO `tbl_penerbit` (`kode_penerbit`, `nama_penerbit`, `kota_penerbit`, `email_penerbit`, `website_penerbit`, `telepon_penerbit`) VALUES
('P001', 'Andi Publisher', 'Yogyakarta', 'info@andipublisher.com', 'http://andipublisher.com', '034-879878978'),
('P002', 'Gramedia', 'Jakarta', 'pub@gramedia.com', 'http://gramedia.com', '021'),
('P003', 'Jasakom', 'Jakarta', 'penerbitan@jasakom.com', 'http://jasakom.com', '0217857656'),
('P004', 'Media Kita', 'Surabaya', 'publisher@mediakita.com', 'http://mediakita.com', '023443543543'),
('P006', 'Informatika', 'Bandung', 'publisher@informatika.com', 'http://informatika.com', '022-0987987987'),
('P007', 'Erlanga', 'Surabaya', '0979878', 'http://erlanga.com', 'info@erlangga.com'),
('P008', 'BPFE UGM', 'Yogyakarta', 'bpfe@ugm.ac.id', 'bpfe.ugm.ac.id', '097798787987'),
('P009', 'Balai Buku Nasional', 'Jakarta', 'info@balaibuku.go.id', 'http://balaibuku.go.id', '0219879878');

-- --------------------------------------------------------
