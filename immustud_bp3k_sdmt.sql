-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2020 at 03:32 PM
-- Server version: 10.2.34-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immustud_bp3k_sdmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `url_banner` varchar(300) NOT NULL,
  `date_update` datetime NOT NULL,
  `id_kategori_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `url_banner`, `date_update`, `id_kategori_sub`) VALUES
(1, 'uploads/banner/madakukar.jpg', '2020-03-11 22:49:22', 4),
(4, 'uploads/banner/73336203.jpg', '2016-01-04 23:04:09', 15),
(5, 'uploads/banner/lab.png', '2015-12-23 06:03:21', 16),
(6, 'uploads/banner/mosque.png', '2015-12-23 06:04:05', 16),
(7, 'uploads/banner/room.png', '2015-12-23 06:05:13', 16),
(8, 'uploads/banner/simulator.png', '2015-12-23 06:05:46', 16),
(9, 'uploads/banner/sport.png', '2015-12-23 06:06:01', 16),
(10, 'uploads/banner/workshop.png', '2015-12-23 06:06:18', 16),
(11, 'uploads/banner/logo.png', '2015-12-25 03:27:56', 15),
(12, 'uploads/banner/kapal-pesiar.jpg', '2015-12-26 06:54:24', 15),
(13, 'uploads/banner/struktur.jpg', '2015-12-26 07:07:15', 15),
(14, 'uploads/banner/23.jpg', '2020-03-12 06:22:20', 15),
(15, 'uploads/banner/elib.jpg', '2016-01-04 23:12:41', 15),
(21, 'uploads/banner/imo.jpg', '2016-01-05 05:47:21', 15),
(22, 'uploads/banner/kemenhub.jpg', '2016-01-05 05:47:48', 15),
(23, 'uploads/banner/pb_sdm_p.jpg', '2016-01-05 05:48:13', 15),
(24, 'uploads/banner/stcw.jpg', '2016-01-05 05:48:36', 15),
(25, 'uploads/banner/directorat_sea.jpg', '2016-01-05 05:49:13', 15),
(40, 'uploads/banner/banner_2.jpg', '2020-03-11 22:49:22', 4),
(41, 'uploads/banner/3.jpg', '2020-03-12 07:26:25', 10),
(42, 'uploads/banner/7.jpg', '2020-03-12 07:27:02', 10),
(43, 'uploads/banner/10.jpg', '2020-03-12 07:27:17', 10),
(44, 'uploads/banner/11.jpg', '2020-03-12 07:27:35', 10),
(45, 'uploads/banner/15.jpg', '2020-03-12 07:27:55', 10),
(46, 'uploads/banner/19_(1).jpg', '2020-03-12 07:28:12', 10),
(47, 'uploads/banner/19_(1).jpg', '2020-03-12 07:28:24', 10),
(48, 'uploads/banner/27.jpg', '2020-03-12 07:28:50', 10),
(50, 'uploads/banner/banner2.jpeg', '2020-03-12 07:42:53', 4),
(51, 'uploads/banner/gallery-01.jpg', '2020-03-14 08:47:10', 15),
(52, 'uploads/banner/gallery-03.jpg', '2020-03-14 08:47:43', 15),
(53, 'uploads/banner/gallery-06.jpg', '2020-03-14 08:49:13', 15),
(54, 'uploads/banner/gallery-02.jpg', '2020-03-14 08:52:24', 15),
(55, 'uploads/banner/gallery-07.jpg', '2020-03-14 08:55:47', 15),
(56, 'uploads/banner/gallery-05.jpg', '2020-03-14 08:56:27', 15),
(57, 'uploads/banner/pengantar.jpg', '2020-03-16 05:16:09', 15),
(58, 'uploads/banner/visi_misi.jpg', '2020-03-16 05:18:20', 15),
(59, 'uploads/banner/tugas.jpg', '2020-03-16 05:19:28', 15);

-- --------------------------------------------------------

--
-- Table structure for table `banner_language`
--

DROP TABLE IF EXISTS `banner_language`;
CREATE TABLE `banner_language` (
  `id_banner_language` int(11) NOT NULL,
  `judul_banner` varchar(300) NOT NULL,
  `content_banner` varchar(5000) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_banner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_language`
--

INSERT INTO `banner_language` (`id_banner_language`, `judul_banner`, `content_banner`, `id_language`, `id_banner`) VALUES
(1, 'Balai Pelatihan & Pendidikan', 'Ilmu Pelayaran Malahayati', 1, 1),
(2, 'Our Services 1', 'Our Services 1', 2, 1),
(7, 'BP2IP Malahayati', 'BP2IP Malahayati', 1, 4),
(8, 'Kantor Cabang Bank Maluku', 'Kantor Cabang Bank Maluku', 2, 4),
(9, 'Lab', 'Laboratory', 1, 5),
(10, 'Lab', 'Laboratory', 2, 5),
(11, 'Mosque', 'Mosque', 1, 6),
(12, 'Mosque', 'Mosque', 2, 6),
(13, 'Ruangan', 'Ruangan', 1, 7),
(14, 'Ruangan', 'Ruangan', 2, 7),
(15, 'Simulator', 'Simulator', 1, 8),
(16, 'Simulator', 'Simulator', 2, 8),
(17, 'Sport', 'Sport', 1, 9),
(18, 'Sport', 'Sport', 2, 9),
(19, 'Workshop', 'Workshop', 1, 10),
(20, 'Workshop', 'Workshop', 2, 10),
(21, 'Logo Home', 'Logo Home', 1, 11),
(22, 'Logo Home', 'Logo Home', 2, 11),
(23, 'Kapal Pesiar', 'Kapal Pesiar', 1, 12),
(24, 'Kapal Pesiar', 'Kapal Pesiar', 2, 12),
(25, 'Struktur Organisasi', 'Struktur Organisasi', 1, 13),
(26, 'Struktur Organisasi', 'Struktur Organisasi', 2, 13),
(27, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 14),
(28, 'Elibrary', 'Elibrary', 1, 15),
(34, 'IMO', 'IMO', 1, 21),
(35, 'Kemenhub', 'Kemenhub', 1, 22),
(36, 'Pb SDM', 'Pb SDM', 1, 23),
(37, 'STCW', 'STCW', 1, 24),
(38, 'Directorat SEA', 'Directorat SEA', 1, 25),
(53, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 41),
(54, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 42),
(55, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 43),
(56, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 44),
(57, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 45),
(58, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 46),
(59, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 47),
(60, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 48),
(62, 'BP3K - Kegiatan Diklat', 'BP3K - Kegiatan Diklat', 1, 50),
(63, 'BP3K - Asrama Taruna dan Taruni', 'Asrama Taruna dan Taruni', 1, 51),
(64, 'BP3K - Camp Fire', 'BP3K - Camp Fire', 1, 52),
(65, 'BP3K - Masjid', 'BP3K - Masjid', 1, 53),
(66, 'BP3K - Ruang Video Visual', 'BP3K - Ruang Video Visual', 1, 54),
(67, 'BP3K - Aula', 'BP3K - Aula', 1, 55),
(68, 'BP3K - Kolam Renang', 'BP3K - Kolam Renang', 1, 56),
(69, 'Pengantar', 'Pengantar', 1, 57),
(70, 'visi dan misi', 'visi dan misi', 1, 58),
(71, 'tugas dan pokok', 'tugas dan pokok', 1, 59);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('05bd2f87d0b427d83c3a3ef1cd3ecf7d', '209.17.97.74', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 1601345953, ''),
('16036b8ea2249ed0395d801b2bb0cec6', '20.52.129.229', '0', 1602543205, ''),
('1d93afc4ff898c4207807e857f6af54f', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('32dd5fccbd1302be0065974d5eacdacc', '20.52.129.229', '0', 1602543205, ''),
('331af5431510d814a044f2230101a8a1', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('531b73dc9a8770e4857477960c31c50d', '20.52.129.229', '0', 1602543205, ''),
('5f5565c3ae5f608c2fa573cc648171fc', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('6e73c82e1a74aa35aec7db7f925e2936', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('74dc3f12c7d0c05ade7518e862372055', '209.17.97.74', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 1601345953, ''),
('7d9de8c3e05a4181ff48b55d40030b98', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('99e7bcdcc7b658a26bfc417d409c10e1', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('9a58ad6177170a2dfc234cace3865e44', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('a42a5b084ba23eb14ed3e76f06bd3e62', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('ac3c03aeaa1042f275b4b034e01e2544', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('b6175c521ad544b00e8ac60039ce7fb9', '134.175.228.189', 'Go-http-client/1.1', 1602625383, ''),
('c6ae4dacf5fee947e63a8533f3c5d406', '209.17.97.74', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 1601345953, ''),
('cc881ac02315ad34c0db74575e652abe', '20.52.129.229', '0', 1602543205, ''),
('cd71f3a36fe895a38580238ffd648ad5', '209.17.97.74', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 1601345952, ''),
('e7d56f5b5b7a3957dd348c43f4af4ba4', '209.17.97.74', 'Mozilla/5.0 (compatible; Nimbostratus-Bot/v1.3.2; http://cloudsystemnetworks.com)', 1601345952, ''),
('f63e0d04aa12af54a37a071cf7570045', '20.52.129.229', '0', 1602543205, '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `id_news` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `name`, `email`, `url`, `content`, `id_news`, `status`, `date_update`) VALUES
(1, 'chaerul', 'chaerul@gmail.com', 'site.com', 'website design', 1, 1, '2013-12-17 00:00:00'),
(2, 'Mochamad Gani', 'moch.gani.setiawan@gmail.com', 'http://mochgani.baradeveloper.com', 'tes asik asik', 7, 1, '2013-12-30 05:51:27'),
(3, 'Cerul', 'angga.taeng@gmail.com', '', 'Helo Bank Maluku', 7, 1, '2013-12-30 06:16:13'),
(4, 'Mochamad Asik', 'moch.gani.setiawan@gmail.com', 'http://mochgani.baradeveloper.com', 'Mantap', 7, 1, '2013-12-30 11:34:30'),
(5, 'Gangani', 'moch.gani.setiawan@gmail.com', 'bara.co.id', 'Hello tes tes', 10, 1, '2015-12-27 12:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `url_file` varchar(300) NOT NULL,
  `date_update` datetime NOT NULL,
  `id_kategori_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `url_file`, `date_update`, `id_kategori_sub`) VALUES
(14, 'uploads/file/1587790839_SK_PSBB_Bandung_Raya.pdf', '2020-04-25 05:00:36', 6);

-- --------------------------------------------------------

--
-- Table structure for table `file_language`
--

DROP TABLE IF EXISTS `file_language`;
CREATE TABLE `file_language` (
  `id_file_language` int(11) NOT NULL,
  `judul_file` varchar(300) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_language`
--

INSERT INTO `file_language` (`id_file_language`, `judul_file`, `id_language`, `id_file`) VALUES
(15, 'File Download', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

DROP TABLE IF EXISTS `hits`;
CREATE TABLE `hits` (
  `id` int(11) NOT NULL,
  `ip` varchar(225) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`id`, `ip`, `date_time`) VALUES
(2, '::1', '2013-12-22 19:01:14'),
(3, '::1', '2014-02-25 00:00:00'),
(4, '::1', '2015-12-21 00:00:00'),
(5, '::1', '2015-12-22 00:00:00'),
(6, '::1', '2015-12-23 00:00:00'),
(7, '::1', '2015-12-24 00:00:00'),
(8, '::1', '2015-12-25 00:00:00'),
(9, '::1', '2015-12-26 00:00:00'),
(10, '::1', '2015-12-27 00:00:00'),
(11, '::1', '2015-12-29 00:00:00'),
(12, '192.168.1.6', '2015-12-29 00:00:00'),
(13, '192.168.1.5', '2015-12-29 00:00:00'),
(14, '::1', '2016-01-01 00:00:00'),
(15, '::1', '2016-01-02 00:00:00'),
(16, '192.168.1.12', '2016-01-02 00:00:00'),
(17, '::1', '2016-01-04 00:00:00'),
(18, '::1', '2016-01-05 00:00:00'),
(19, '114.4.79.182', '2016-01-05 00:00:00'),
(20, '36.71.228.214', '2016-01-05 00:00:00'),
(21, '125.166.220.77', '2016-01-05 00:00:00'),
(22, '202.73.226.196', '2016-01-05 00:00:00'),
(23, '114.79.53.172', '2016-01-05 00:00:00'),
(24, '36.86.23.74', '2016-01-06 00:00:00'),
(25, '180.253.3.5', '2016-01-06 00:00:00'),
(26, '120.164.47.40', '2016-01-08 00:00:00'),
(27, '112.215.66.70', '2016-01-08 00:00:00'),
(28, '112.215.66.79', '2016-01-08 00:00:00'),
(29, '66.102.6.171', '2016-01-09 00:00:00'),
(30, '36.79.193.233', '2016-01-09 00:00:00'),
(31, '114.79.55.111', '2016-01-10 00:00:00'),
(32, '115.178.211.242', '2016-01-10 00:00:00'),
(33, '222.124.125.190', '2016-01-11 00:00:00'),
(34, '118.97.175.78', '2016-01-11 00:00:00'),
(35, '114.79.51.229', '2016-01-11 00:00:00'),
(36, '114.79.52.28', '2016-01-12 00:00:00'),
(37, '114.79.49.7', '2016-01-12 00:00:00'),
(38, '119.235.252.234', '2016-01-14 00:00:00'),
(39, '36.88.178.202', '2016-01-15 00:00:00'),
(40, '114.121.163.36', '2016-01-17 00:00:00'),
(41, '112.215.66.78', '2016-01-17 00:00:00'),
(42, '112.215.66.71', '2016-01-17 00:00:00'),
(43, '112.215.66.72', '2016-01-18 00:00:00'),
(44, '112.215.66.74', '2016-01-18 00:00:00'),
(45, '36.84.67.53', '2016-01-18 00:00:00'),
(46, '36.84.67.53', '2016-01-19 00:00:00'),
(47, '114.79.48.235', '2016-01-19 00:00:00'),
(48, '103.11.99.234', '2016-01-19 00:00:00'),
(49, '103.11.99.234', '2016-01-20 00:00:00'),
(50, '114.79.54.45', '2016-01-20 00:00:00'),
(51, '180.253.111.89', '2016-01-20 00:00:00'),
(52, '114.79.51.226', '2016-01-20 00:00:00'),
(53, '64.233.173.101', '2016-01-20 00:00:00'),
(54, '36.84.67.53', '2016-01-20 00:00:00'),
(55, '118.97.175.78', '2016-01-20 00:00:00'),
(56, '114.79.54.6', '2016-01-20 00:00:00'),
(57, '66.249.80.114', '2016-01-20 00:00:00'),
(58, '66.102.6.195', '2016-01-20 00:00:00'),
(59, '36.88.180.224', '2016-01-20 00:00:00'),
(60, '202.73.226.162', '2016-01-20 00:00:00'),
(61, '202.73.226.17', '2016-01-20 00:00:00'),
(62, '112.215.66.72', '2016-01-20 00:00:00'),
(63, '112.215.66.71', '2016-01-20 00:00:00'),
(64, '114.79.49.19', '2016-01-20 00:00:00'),
(65, '114.79.51.138', '2016-01-20 00:00:00'),
(66, '202.73.227.91', '2016-01-20 00:00:00'),
(67, '114.79.53.119', '2016-01-21 00:00:00'),
(68, '180.245.165.150', '2016-01-21 00:00:00'),
(69, '103.11.99.234', '2016-01-21 00:00:00'),
(70, '36.84.67.53', '2016-01-21 00:00:00'),
(71, '66.249.80.122', '2016-01-21 00:00:00'),
(72, '114.79.50.138', '2016-01-21 00:00:00'),
(73, '118.97.175.78', '2016-01-21 00:00:00'),
(74, '114.79.50.154', '2016-01-21 00:00:00'),
(75, '103.11.99.234', '2016-01-22 00:00:00'),
(76, '114.79.48.38', '2016-01-22 00:00:00'),
(77, '36.84.67.53', '2016-01-22 00:00:00'),
(78, '192.168.8.2', '2016-01-22 00:00:00'),
(79, '64.233.173.238', '2016-01-22 00:00:00'),
(80, '36.88.180.87', '2016-01-22 00:00:00'),
(81, '36.72.197.53', '2016-01-22 00:00:00'),
(82, '36.84.67.24', '2016-01-23 00:00:00'),
(83, '115.178.192.14', '2016-01-23 00:00:00'),
(84, '115.178.201.172', '2016-01-23 00:00:00'),
(85, '202.73.226.40', '2016-01-23 00:00:00'),
(86, '202.73.227.96', '2016-01-23 00:00:00'),
(87, '36.71.235.208', '2016-01-25 00:00:00'),
(88, '103.11.99.234', '2016-01-26 00:00:00'),
(89, '66.249.88.71', '2016-01-26 00:00:00'),
(90, '64.233.172.211', '2016-01-26 00:00:00'),
(91, '36.72.31.222', '2016-01-26 00:00:00'),
(92, '36.71.235.208', '2016-01-27 00:00:00'),
(93, '66.102.7.165', '2016-01-27 00:00:00'),
(94, '36.84.67.89', '2016-02-01 00:00:00'),
(95, '112.215.66.79', '2016-02-01 00:00:00'),
(96, '36.80.100.48', '2016-02-02 00:00:00'),
(97, '36.71.241.42', '2016-02-02 00:00:00'),
(98, '112.215.63.11', '2016-02-02 00:00:00'),
(99, '112.215.63.20', '2016-02-02 00:00:00'),
(100, '112.215.63.22', '2016-02-02 00:00:00'),
(101, '112.215.63.14', '2016-02-02 00:00:00'),
(102, '112.215.63.21', '2016-02-02 00:00:00'),
(103, '112.215.63.19', '2016-02-02 00:00:00'),
(104, '112.215.63.13', '2016-02-02 00:00:00'),
(105, '112.215.63.16', '2016-02-02 00:00:00'),
(106, '112.215.63.12', '2016-02-02 00:00:00'),
(107, '112.215.63.15', '2016-02-02 00:00:00'),
(108, '66.249.84.219', '2016-02-02 00:00:00'),
(109, '36.80.100.48', '2016-02-03 00:00:00'),
(110, '112.215.63.21', '2016-02-03 00:00:00'),
(111, '112.215.63.17', '2016-02-03 00:00:00'),
(112, '112.215.63.12', '2016-02-03 00:00:00'),
(113, '66.102.7.172', '2016-02-04 00:00:00'),
(114, '192.168.8.2', '2016-02-04 00:00:00'),
(115, '66.102.7.165', '2016-02-06 00:00:00'),
(116, '66.102.7.158', '2016-02-07 00:00:00'),
(117, '66.102.7.172', '2016-02-09 00:00:00'),
(118, '66.249.83.210', '2016-02-10 00:00:00'),
(119, '66.249.84.215', '2016-02-10 00:00:00'),
(120, '66.102.7.158', '2016-02-13 00:00:00'),
(121, '112.215.63.12', '2016-02-13 00:00:00'),
(122, '112.215.63.16', '2016-02-13 00:00:00'),
(123, '112.215.63.22', '2016-02-13 00:00:00'),
(124, '112.215.63.20', '2016-02-13 00:00:00'),
(125, '180.214.232.12', '2016-02-14 00:00:00'),
(126, '142.4.218.201', '2016-02-14 00:00:00'),
(127, '125.166.221.252', '2016-02-18 00:00:00'),
(128, '180.253.121.188', '2016-02-22 00:00:00'),
(129, '180.253.96.127', '2016-02-24 00:00:00'),
(130, '180.253.30.99', '2016-03-01 00:00:00'),
(131, '180.253.226.185', '2016-03-01 00:00:00'),
(132, '36.72.18.119', '2016-03-02 00:00:00'),
(133, '180.253.30.99', '2016-03-02 00:00:00'),
(134, '180.253.30.99', '2016-03-03 00:00:00'),
(135, '::1', '2020-03-11 00:00:00'),
(136, '::1', '2020-03-12 00:00:00'),
(137, '180.253.30.19', '2020-03-12 00:00:00'),
(138, '64.233.172.118', '2020-03-12 00:00:00'),
(139, '115.178.207.74', '2020-03-12 00:00:00'),
(140, '202.93.229.3', '2020-03-12 00:00:00'),
(141, '195.154.63.222', '2020-03-12 00:00:00'),
(142, '163.172.70.242', '2020-03-12 00:00:00'),
(143, '62.210.5.253', '2020-03-12 00:00:00'),
(144, '114.79.55.142', '2020-03-12 00:00:00'),
(145, '180.253.30.19', '2020-03-13 00:00:00'),
(146, '64.233.172.116', '2020-03-13 00:00:00'),
(147, '51.255.109.165', '2020-03-14 00:00:00'),
(148, '115.178.205.153', '2020-03-14 00:00:00'),
(149, '64.233.172.118', '2020-03-14 00:00:00'),
(150, '116.206.14.14', '2020-03-14 00:00:00'),
(151, '115.178.203.214', '2020-03-14 00:00:00'),
(152, '140.213.22.219', '2020-03-15 00:00:00'),
(153, '140.213.25.145', '2020-03-15 00:00:00'),
(154, '36.71.254.127', '2020-03-16 00:00:00'),
(155, '114.79.55.65', '2020-03-16 00:00:00'),
(156, '64.233.172.118', '2020-03-17 00:00:00'),
(157, '180.253.241.132', '2020-03-17 00:00:00'),
(158, '202.93.229.3', '2020-03-17 00:00:00'),
(159, '118.127.15.84', '2020-03-17 00:00:00'),
(160, '118.127.15.84', '2020-03-17 00:00:00'),
(161, '64.233.172.120', '2020-03-18 00:00:00'),
(162, '36.71.235.142', '2020-03-23 00:00:00'),
(163, '93.90.192.141', '2020-03-30 00:00:00'),
(164, '36.71.233.196', '2020-03-31 00:00:00'),
(165, '52.53.253.193', '2020-04-04 00:00:00'),
(166, '185.230.124.52', '2020-04-05 00:00:00'),
(167, '36.72.26.54', '2020-04-14 00:00:00'),
(168, '114.79.55.36', '2020-04-14 00:00:00'),
(169, '36.93.54.27', '2020-04-14 00:00:00'),
(170, '51.77.249.198', '2020-04-19 00:00:00'),
(171, '51.77.249.198', '2020-04-20 00:00:00'),
(172, '114.79.1.11', '2020-04-25 00:00:00'),
(173, '36.71.239.136', '2020-04-25 00:00:00'),
(174, '114.79.54.76', '2020-04-25 00:00:00'),
(175, '45.56.76.224', '2020-05-11 00:00:00'),
(176, '209.17.96.178', '2020-05-12 00:00:00'),
(177, '209.17.96.90', '2020-05-13 00:00:00'),
(178, '209.17.96.66', '2020-05-15 00:00:00'),
(179, '103.129.221.24', '2020-05-16 00:00:00'),
(180, '209.17.97.18', '2020-05-16 00:00:00'),
(181, '209.17.96.210', '2020-05-19 00:00:00'),
(182, '209.17.96.34', '2020-05-24 00:00:00'),
(183, '67.205.165.53', '2020-05-26 00:00:00'),
(184, '67.205.165.53', '2020-05-26 00:00:00'),
(185, '65.154.226.109', '2020-05-26 00:00:00'),
(186, '90.253.102.85', '2020-05-26 00:00:00'),
(187, '163.172.70.242', '2020-05-27 00:00:00'),
(188, '62.210.5.253', '2020-05-27 00:00:00'),
(189, '195.154.62.232', '2020-05-27 00:00:00'),
(190, '195.154.63.222', '2020-05-27 00:00:00'),
(191, '172.104.138.118', '2020-05-27 00:00:00'),
(192, '172.104.243.193', '2020-05-27 00:00:00'),
(193, '67.205.175.245', '2020-05-27 00:00:00'),
(194, '157.245.250.139', '2020-05-27 00:00:00'),
(195, '183.136.225.46', '2020-05-27 00:00:00'),
(196, '209.17.96.18', '2020-05-29 00:00:00'),
(197, '209.17.96.114', '2020-05-29 00:00:00'),
(198, '183.136.225.46', '2020-05-31 00:00:00'),
(199, '209.17.96.2', '2020-06-03 00:00:00'),
(200, '209.17.97.18', '2020-06-03 00:00:00'),
(201, '52.87.254.95', '2020-06-05 00:00:00'),
(202, '209.17.96.34', '2020-06-05 00:00:00'),
(203, '36.71.233.28', '2020-06-09 00:00:00'),
(204, '209.17.96.66', '2020-06-09 00:00:00'),
(205, '209.17.96.98', '2020-06-09 00:00:00'),
(206, '209.17.96.106', '2020-06-13 00:00:00'),
(207, '209.17.96.178', '2020-06-13 00:00:00'),
(208, '183.136.225.46', '2020-06-16 00:00:00'),
(209, '83.143.86.62', '2020-06-17 00:00:00'),
(210, '209.17.96.90', '2020-06-20 00:00:00'),
(211, '209.17.97.82', '2020-06-23 00:00:00'),
(212, '34.72.31.15', '2020-06-24 00:00:00'),
(213, '209.17.96.194', '2020-06-24 00:00:00'),
(214, '209.17.96.138', '2020-06-26 00:00:00'),
(215, '52.188.16.39', '2020-06-26 00:00:00'),
(216, '20.191.143.93', '2020-06-27 00:00:00'),
(217, '167.99.101.199', '2020-06-27 00:00:00'),
(218, '209.17.96.2', '2020-07-01 00:00:00'),
(219, '209.17.97.18', '2020-07-03 00:00:00'),
(220, '209.17.96.234', '2020-07-04 00:00:00'),
(221, '209.17.96.218', '2020-07-08 00:00:00'),
(222, '209.17.96.18', '2020-07-08 00:00:00'),
(223, '162.254.204.46', '2020-07-09 00:00:00'),
(224, '194.87.138.252', '2020-07-11 00:00:00'),
(225, '209.17.96.250', '2020-07-11 00:00:00'),
(226, '35.184.195.7', '2020-07-13 00:00:00'),
(227, '52.188.16.39', '2020-07-14 00:00:00'),
(228, '83.143.86.62', '2020-07-15 00:00:00'),
(229, '183.136.225.46', '2020-07-17 00:00:00'),
(230, '209.17.96.98', '2020-07-17 00:00:00'),
(231, '5.62.20.32', '2020-07-19 00:00:00'),
(232, '209.17.97.66', '2020-07-22 00:00:00'),
(233, '209.17.96.10', '2020-07-24 00:00:00'),
(234, '51.15.247.217', '2020-07-28 00:00:00'),
(235, '51.158.117.104', '2020-07-28 00:00:00'),
(236, '51.15.192.148', '2020-07-28 00:00:00'),
(237, '209.17.96.122', '2020-07-29 00:00:00'),
(238, '209.17.97.50', '2020-07-29 00:00:00'),
(239, '209.17.96.114', '2020-07-31 00:00:00'),
(240, '209.17.96.186', '2020-07-31 00:00:00'),
(241, '51.158.114.198', '2020-07-31 00:00:00'),
(242, '163.172.161.137', '2020-07-31 00:00:00'),
(243, '51.158.117.104', '2020-07-31 00:00:00'),
(244, '51.158.102.212', '2020-08-01 00:00:00'),
(245, '52.142.53.130', '2020-08-03 00:00:00'),
(246, '209.17.96.66', '2020-08-04 00:00:00'),
(247, '209.17.96.42', '2020-08-07 00:00:00'),
(248, '34.107.43.249', '2020-08-08 00:00:00'),
(249, '209.17.96.34', '2020-08-08 00:00:00'),
(250, '82.103.130.13', '2020-08-10 00:00:00'),
(251, '209.17.96.194', '2020-08-11 00:00:00'),
(252, '195.154.62.232', '2020-08-11 00:00:00'),
(253, '62.210.5.253', '2020-08-11 00:00:00'),
(254, '62.210.10.77', '2020-08-11 00:00:00'),
(255, '209.17.96.170', '2020-08-12 00:00:00'),
(256, '209.17.96.250', '2020-08-14 00:00:00'),
(257, '209.17.97.34', '2020-08-15 00:00:00'),
(258, '209.17.96.114', '2020-08-15 00:00:00'),
(259, '209.17.96.18', '2020-08-15 00:00:00'),
(260, '128.199.107.230', '2020-08-16 00:00:00'),
(261, '54.229.216.120', '2020-08-18 00:00:00'),
(262, '110.136.218.50', '2020-08-18 00:00:00'),
(263, '209.17.96.114', '2020-08-18 00:00:00'),
(264, '209.17.96.58', '2020-08-19 00:00:00'),
(265, '209.17.97.74', '2020-08-19 00:00:00'),
(266, '209.17.96.242', '2020-08-19 00:00:00'),
(267, '142.4.213.28', '2020-08-20 00:00:00'),
(268, '34.247.107.211', '2020-08-20 00:00:00'),
(269, '209.17.96.242', '2020-08-22 00:00:00'),
(270, '176.31.121.174', '2020-08-23 00:00:00'),
(271, '52.242.32.86', '2020-08-25 00:00:00'),
(272, '209.17.96.226', '2020-08-25 00:00:00'),
(273, '23.98.35.1', '2020-08-26 00:00:00'),
(274, '52.242.32.86', '2020-08-26 00:00:00'),
(275, '23.98.35.1', '2020-08-27 00:00:00'),
(276, '139.59.57.84', '2020-08-28 00:00:00'),
(277, '209.17.97.74', '2020-08-30 00:00:00'),
(278, '209.17.97.10', '2020-09-01 00:00:00'),
(279, '209.17.96.138', '2020-09-04 00:00:00'),
(280, '209.17.97.98', '2020-09-05 00:00:00'),
(281, '209.17.96.154', '2020-09-05 00:00:00'),
(282, '35.184.236.98', '2020-09-05 00:00:00'),
(283, '106.53.83.56', '2020-09-06 00:00:00'),
(284, '106.12.198.40', '2020-09-06 00:00:00'),
(285, '209.17.97.58', '2020-09-08 00:00:00'),
(286, '209.17.96.114', '2020-09-09 00:00:00'),
(287, '209.17.96.2', '2020-09-09 00:00:00'),
(288, '209.17.96.98', '2020-09-09 00:00:00'),
(289, '35.226.136.4', '2020-09-10 00:00:00'),
(290, '106.53.83.56', '2020-09-10 00:00:00'),
(291, '209.17.97.26', '2020-09-12 00:00:00'),
(292, '209.17.96.50', '2020-09-12 00:00:00'),
(293, '209.17.96.250', '2020-09-12 00:00:00'),
(294, '35.184.236.98', '2020-09-15 00:00:00'),
(295, '20.188.56.215', '2020-09-26 00:00:00'),
(296, '209.17.97.74', '2020-09-29 00:00:00'),
(297, '20.52.129.229', '2020-10-12 00:00:00'),
(298, '134.175.228.189', '2020-10-13 00:00:00'),
(299, '134.175.228.189', '2020-10-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `date_update`) VALUES
(1, '2013-12-05 00:00:00'),
(2, '2013-12-08 00:00:00'),
(3, '2013-12-08 00:00:00'),
(4, '2013-12-12 00:00:00'),
(5, '2013-12-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_language`
--

DROP TABLE IF EXISTS `kategori_language`;
CREATE TABLE `kategori_language` (
  `id_kategori_language` int(11) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_language`
--

INSERT INTO `kategori_language` (`id_kategori_language`, `nama_kategori`, `id_language`, `id_kategori`) VALUES
(1, 'Modul', 0, 1),
(2, 'Banner', 0, 2),
(3, 'News', 0, 3),
(4, 'File', 0, 4),
(5, 'Menu', 0, 5),
(6, 'Setting', 0, 6),
(8, 'Artikel', 1, 7),
(9, 'Artikel', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sub`
--

DROP TABLE IF EXISTS `kategori_sub`;
CREATE TABLE `kategori_sub` (
  `id_kategori_sub` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_sub`
--

INSERT INTO `kategori_sub` (`id_kategori_sub`, `id_kategori`, `date_update`) VALUES
(1, 1, '2013-12-05 00:00:00'),
(2, 1, '2013-12-07 00:00:00'),
(3, 1, '2013-12-07 00:00:00'),
(4, 2, '2013-12-08 00:00:00'),
(5, 3, '2013-12-08 00:00:00'),
(6, 4, '2013-12-12 00:00:00'),
(9, 5, '2013-12-13 00:00:00'),
(10, 2, '2014-01-23 00:00:00'),
(11, 6, '2015-12-22 03:39:03'),
(12, 6, '2015-12-22 03:39:03'),
(13, 6, '2015-12-22 03:39:03'),
(14, 6, '2015-12-22 12:19:04'),
(15, 2, '2015-12-22 12:34:16'),
(16, 2, '2015-12-23 11:59:45'),
(17, 6, '2015-12-23 13:01:14'),
(18, 6, '2015-12-25 09:06:56'),
(19, 6, '2015-12-27 15:46:16'),
(20, 3, '2015-12-27 20:16:00'),
(21, 3, '2015-12-27 20:16:00'),
(22, 3, '2015-12-27 20:16:00'),
(23, 3, '2015-12-27 20:16:00'),
(24, 3, '2015-12-29 13:00:42'),
(25, 3, '2015-12-29 13:01:15'),
(26, 3, '2015-12-29 13:01:34'),
(27, 3, '2015-12-29 13:01:46'),
(28, 3, '2015-12-29 13:09:29'),
(29, 3, '2015-12-29 13:09:58'),
(30, 3, '2015-12-29 13:11:56'),
(31, 3, '2015-12-29 13:12:30'),
(32, 3, '2015-12-29 13:14:20'),
(33, 3, '2015-12-29 13:15:17'),
(34, 3, '2015-12-29 13:16:34'),
(35, 3, '2015-12-29 13:19:59'),
(36, 3, '2015-12-29 13:20:39'),
(37, 3, '2015-12-29 15:28:36'),
(38, 5, '2016-01-02 04:27:23'),
(39, 6, '2016-01-05 11:29:10'),
(40, 3, '2016-01-20 00:13:21'),
(41, 3, '2016-01-20 01:30:13'),
(42, 6, '2016-01-20 12:21:08'),
(43, 3, '2016-01-21 10:58:52'),
(44, 3, '2016-01-21 10:59:55'),
(45, 3, '2016-01-21 10:59:55'),
(46, 3, '2016-01-21 10:59:55'),
(47, 3, '2016-01-21 10:59:55'),
(48, 3, '2016-01-21 10:59:55'),
(49, 3, '2016-01-21 10:59:55'),
(50, 3, '2016-01-21 10:59:55'),
(51, 3, '2016-01-21 10:59:55'),
(52, 3, '2016-01-21 10:59:56'),
(53, 3, '2016-01-21 10:59:56'),
(54, 3, '2016-01-21 10:59:56'),
(55, 3, '2016-01-21 10:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sub_language`
--

DROP TABLE IF EXISTS `kategori_sub_language`;
CREATE TABLE `kategori_sub_language` (
  `id_kategori_sub_language` int(11) NOT NULL,
  `nama_kategori_sub` varchar(225) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_kategori_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_sub_language`
--

INSERT INTO `kategori_sub_language` (`id_kategori_sub_language`, `nama_kategori_sub`, `id_language`, `id_kategori_sub`) VALUES
(1, 'Modul Home', 0, 1),
(2, 'Modul Utama', 0, 2),
(3, 'Modul Sidebar', 0, 3),
(4, 'Slide Home', 0, 4),
(5, 'Berita Sekolah', 0, 5),
(6, 'Download', 1, 6),
(12, 'Menu Utama', 0, 9),
(13, 'Gallery', 0, 10),
(14, 'About Us', 0, 11),
(15, 'Contact Us', 0, 12),
(16, 'Sosial Media', 0, 13),
(17, 'Link Image', 0, 14),
(18, 'Arsip Gambar', 0, 15),
(19, 'Arsip Icon', 0, 16),
(20, 'Fasilitas', 0, 17),
(21, 'Home', 0, 18),
(22, 'Video', 0, 19),
(23, 'Berita Luar Sekolah', 0, 20),
(24, 'Data Alumni', 0, 21),
(25, 'Data Instruktur', 0, 22),
(26, 'Data Siswa', 0, 23),
(27, 'Ekstrakurikuler', 0, 24),
(28, 'Karya Siswa', 0, 25),
(29, 'Prestasi Akademik', 0, 26),
(30, 'Prestasi Non Akademik', 0, 27),
(31, 'NAUTIKA', 0, 28),
(32, 'TEKNIKA', 0, 29),
(33, 'DIKLAT PELAUT RATING DINAS JAGA DEK (RDJK)', 0, 30),
(34, 'DP-V', 0, 31),
(35, 'Pengumuman', 0, 32),
(36, 'Event', 0, 33),
(37, 'Informasi Berkala', 0, 34),
(38, 'Informasi Serta Merta', 0, 35),
(39, 'Informasi Tersedia Setiap Saat', 0, 36),
(40, 'Diklat Keterampilan Pelaut ', 0, 37),
(41, 'Menu Other', 0, 38),
(42, 'Link Situs', 0, 39),
(43, 'Sarana dan Prasarana', 0, 40),
(44, 'Jumlah Lulusan', 0, 41),
(45, 'Kategori News', 0, 42),
(46, 'Basic Safety Training', 0, 43),
(47, 'Survival and Rescue Boat', 0, 44),
(48, 'Medical First AID', 0, 45),
(49, 'Advance Fire Fighting', 0, 46),
(50, 'Medical Care', 0, 47),
(51, 'Security Awareness Training', 0, 48),
(52, 'Security Awareness Training for Seafarers with Designated Security Duties', 0, 49),
(53, 'ARPA Simulator Training', 0, 50),
(54, 'Radar Simulator Training', 0, 51),
(55, 'Bridge Resource Management', 0, 52),
(56, 'Engine Resource Management', 0, 53),
(57, 'Crowd Management', 0, 54),
(58, 'Crisis Management and Human Behaviour Training (CMHBT)', 0, 55);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `id_language` int(11) NOT NULL,
  `judul_language` varchar(225) NOT NULL,
  `image` text NOT NULL,
  `directory` varchar(225) NOT NULL,
  `filename` varchar(225) NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id_language`, `judul_language`, `image`, `directory`, `filename`, `code`) VALUES
(1, 'indonesia', 'id.png', 'indonesia', 'indonesia', 'id'),
(2, 'english', 'en.png', 'english', 'english', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `date_update` datetime NOT NULL,
  `id_kategori_sub` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_menu_sub` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `date_update`, `id_kategori_sub`, `jenis`, `id_jenis`, `id_menu_sub`, `sort_order`) VALUES
(37, '2015-12-26 08:38:11', 9, 'link', 2, 0, 1),
(38, '2015-12-26 08:38:38', 9, 'page', 36, 37, 1),
(39, '2015-12-26 08:39:02', 9, 'page', 37, 37, 2),
(40, '2015-12-26 08:39:19', 9, 'page', 38, 37, 3),
(41, '2015-12-26 08:40:24', 9, 'page', 39, 37, 4),
(42, '2015-12-26 08:40:46', 9, 'page', 40, 37, 5),
(43, '2015-12-26 08:41:35', 9, 'link', 3, 0, 2),
(44, '2020-03-12 04:13:46', 9, 'modul', 1, 43, 1),
(45, '2020-03-12 04:13:56', 9, 'modul', 8, 43, 2),
(51, '2015-12-26 08:46:08', 9, 'link', 5, 0, 5),
(52, '2016-01-05 00:09:16', 9, 'modul', 17, 51, 1),
(53, '2016-01-05 00:09:32', 9, 'modul', 18, 51, 2),
(54, '2016-01-05 00:09:44', 9, 'modul', 19, 51, 3),
(55, '2016-01-05 00:09:54', 9, 'modul', 20, 51, 4),
(56, '2016-01-23 22:14:50', 9, 'link', 15, 0, 3),
(60, '2020-03-12 04:28:22', 9, 'page', 41, 56, 1),
(61, '2020-03-12 04:33:26', 9, 'page', 42, 56, 2),
(62, '2020-03-12 04:34:51', 9, 'page', 43, 56, 3),
(80, '2016-01-05 03:16:33', 38, 'modul', 4, 0, 1),
(82, '2020-04-25 05:14:50', 38, 'link', 17, 0, 2),
(84, '2016-01-05 00:10:19', 38, 'modul', 21, 0, 4),
(85, '2016-01-05 00:10:31', 38, 'modul', 22, 0, 5),
(86, '2016-01-05 02:14:29', 38, 'modul', 26, 0, 6),
(88, '2016-01-20 00:34:12', 38, 'link', 12, 0, 9),
(89, '2016-01-05 00:10:44', 38, 'modul', 23, 88, 1),
(90, '2016-01-05 00:13:00', 38, 'modul', 24, 88, 2),
(91, '2016-01-05 00:13:08', 38, 'modul', 25, 88, 3),
(94, '2020-03-12 04:15:46', 38, 'modul', 7, 0, 7),
(95, '2020-03-12 04:36:22', 9, 'page', 44, 56, 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu_language`
--

DROP TABLE IF EXISTS `menu_language`;
CREATE TABLE `menu_language` (
  `id_menu_language` int(11) NOT NULL,
  `judul_menu` varchar(300) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_language`
--

INSERT INTO `menu_language` (`id_menu_language`, `judul_menu`, `id_language`, `id_menu`) VALUES
(75, 'Profil', 1, 37),
(76, 'Kata Pengantar', 1, 38),
(77, 'Sejarah Organisasi', 1, 39),
(78, 'Visi dan Misi', 1, 40),
(79, 'Tugas Pokok dan Fungsi', 1, 41),
(80, 'Struktur Organisasi', 1, 42),
(81, 'Berita', 1, 43),
(82, 'Berita BP3K', 1, 44),
(83, 'Berita Luar BP3K', 1, 45),
(89, 'Kesiswaan', 1, 51),
(90, 'Ekstrakurikuler', 1, 52),
(91, 'Karya Siswa', 1, 53),
(92, 'Prestasi Akademik', 1, 54),
(93, 'Prestasi Non Akademik', 1, 55),
(94, 'Program Diklat', 1, 56),
(98, 'Pendidikan dan Pelatihan Manajemen Diri', 1, 60),
(99, 'Pendidikan dan Pelatihan Manajemen Hubungan Antar Personal', 1, 61),
(100, 'Pendidikan dan Pelatihan Manajemen Organisasi Kerja', 1, 62),
(118, 'Download', 1, 80),
(120, 'E-Learning', 1, 82),
(122, 'Pengumuman', 1, 84),
(123, 'Event', 1, 85),
(124, 'Contact Us', 1, 86),
(126, 'Informasi Publik', 1, 88),
(127, 'Informasi Berkala', 1, 89),
(128, 'Informasi Serta Merta', 1, 90),
(129, 'Informasi Tersedia Setiap Saat', 1, 91),
(132, 'Gallery', 1, 94),
(133, 'Pendidikan dan Pelatihan Manajemen Spiritual', 1, 95);

-- --------------------------------------------------------

--
-- Table structure for table `menu_link`
--

DROP TABLE IF EXISTS `menu_link`;
CREATE TABLE `menu_link` (
  `id_menu_link` int(11) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_link`
--

INSERT INTO `menu_link` (`id_menu_link`, `link`) VALUES
(2, '#'),
(3, '#'),
(5, '#'),
(6, '#'),
(7, '#'),
(8, '#'),
(9, '#'),
(12, '#'),
(14, 'http://bara.co.id/bp2ip/modul/news/cat/diklat_dkkp'),
(15, '#'),
(16, '#'),
(17, '#');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

DROP TABLE IF EXISTS `modul`;
CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `key_modul` varchar(300) NOT NULL,
  `judul_modul` varchar(300) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_kategori_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `key_modul`, `judul_modul`, `sort_order`, `status`, `id_kategori_sub`) VALUES
(1, 'modul/news/index/news_utama', 'Berita Sekolah', 1, 1, 2),
(4, 'modul/report/index/download', 'Download', 1, 1, 2),
(7, 'modul/gallery', 'Gallery', 1, 1, 2),
(8, 'modul/news/index/berita_luar_sekolah', 'Berita Luar Sekolah', 1, 1, 2),
(9, 'modul/news/index/data_alumni', 'Data Alumni', 1, 1, 2),
(10, 'modul/news/index/data_instruktur', 'Data Instruktur', 1, 1, 2),
(11, 'modul/news/index/data_siswa', 'Data Siswa', 1, 1, 2),
(12, 'modul/news/index/nautika', 'Nautika', 1, 1, 2),
(13, 'modul/news/index/teknika', 'Teknika', 1, 1, 2),
(14, 'modul/news/index/rdjk', 'RDJK', 1, 1, 2),
(15, 'modul/news/index/dpv', 'DP-V', 1, 1, 2),
(16, 'modul/news/index/diklat_keterampilan_pelaut', 'Diklat Keterampilan Pelaut', 1, 1, 2),
(17, 'modul/news/index/ekstrakurikuler', 'Ekstrakurikuler', 1, 1, 2),
(18, 'modul/news/index/karya_siswa', 'Karya Siswa', 1, 1, 2),
(19, 'modul/news/index/prestasi_akademik', 'Prestasi Akademik', 1, 1, 2),
(20, 'modul/news/index/prestasi_non_akademik', 'Prestasi Non Akademik', 1, 1, 2),
(21, 'modul/news/index/pengumuman', 'Pengumuman', 1, 1, 2),
(22, 'modul/news/index/event', 'Event', 1, 1, 2),
(23, 'modul/news/index/informasi_berkala', 'Informasi Berkala', 1, 1, 2),
(24, 'modul/news/index/informasi_serta_merta', 'Informasi Serta Merta', 1, 1, 2),
(25, 'modul/news/index/informasi_tersedia_setiap_saat', 'Informasi Tersedia Setiap Saat', 1, 1, 2),
(26, 'contact', 'Contact Us', 1, 1, 2),
(27, 'modul/news/index/sarana_dan_prasarana', 'Sarana dan Prasarana', 1, 1, 2),
(28, 'modul/news/index/basic_safety_training', 'Basic Safety Training', 1, 1, 2),
(29, 'modul/news/index/survival_and_rescue_boat', 'Survival and Rescue Boat', 1, 1, 2),
(30, 'modul/news/index/medical_first_aid', 'Medical First AID', 1, 1, 2),
(31, 'modul/news/index/advance_fire_fighting', 'Advance Fire Fighting', 1, 1, 2),
(32, 'modul/news/index/medical_care', 'Medical Care', 1, 1, 2),
(33, 'modul/news/index/security_awareness_training', 'Security Awareness Training', 1, 1, 2),
(34, 'modul/news/index/security_awareness_training_seafarers', 'Security Awareness Training for Seafarers with Designated Security Duties', 1, 1, 2),
(35, 'modul/news/index/arpa_simulator_training', 'ARPA Simulator Training', 1, 1, 2),
(36, 'modul/news/index/radar_simulator_training', 'Radar Simulator Training', 1, 1, 2),
(37, 'modul/news/index/bridge_resource_management', 'Bridge Resource Management', 1, 1, 2),
(38, 'modul/news/index/engine_resource_management', 'Engine Resource Management', 1, 1, 2),
(39, 'modul/news/index/crowd_management', 'Crowd Management', 1, 1, 2),
(40, 'modul/news/index/cmhbt', 'Crisis Management and Human Behaviour Training (CMHBT)', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `url_gambar_news` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `date_update` datetime NOT NULL,
  `id_kategori_sub` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `url_gambar_news`, `start_date`, `end_date`, `status`, `date_update`, `id_kategori_sub`, `id_user`) VALUES
(12, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 14:01:18', 22, 3),
(13, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 13:55:07', 22, 3),
(14, '', '0000-00-00', '0000-00-00', 1, '2016-01-01 14:48:01', 22, 3),
(22, 'uploads/news/1451397731_NEW-BP2IP-OLIMPIADE-1xSx.png', '0000-00-00', '0000-00-00', 1, '2015-12-29 15:02:11', 33, 3),
(23, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 15:05:48', 28, 3),
(24, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 15:16:10', 28, 3),
(25, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 15:25:33', 29, 3),
(26, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 15:25:16', 29, 3),
(27, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 15:26:05', 5, 3),
(28, '', '0000-00-00', '0000-00-00', 1, '2015-12-29 15:26:41', 31, 3),
(32, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 18:10:43', 37, 3),
(33, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:30:22', 37, 3),
(34, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 18:17:58', 37, 3),
(35, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:31:48', 37, 3),
(37, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:22:22', 37, 3),
(38, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:33:15', 37, 3),
(39, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:34:45', 37, 3),
(40, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:49:47', 37, 3),
(41, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:36:29', 37, 3),
(42, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:51:46', 37, 3),
(43, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:53:45', 37, 3),
(44, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:55:12', 37, 3),
(45, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 18:47:45', 5, 3),
(48, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 21:19:04', 40, 3),
(49, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 21:23:11', 40, 3),
(50, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 21:25:44', 40, 3),
(51, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 21:27:56', 40, 3),
(52, '', '0000-00-00', '0000-00-00', 1, '2016-01-20 21:30:08', 40, 3),
(53, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 22:59:15', 37, 3),
(54, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:03:12', 37, 3),
(55, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:05:05', 37, 3),
(56, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:09:25', 37, 3),
(57, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:11:20', 37, 3),
(58, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:12:57', 37, 3),
(59, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:30:26', 37, 3),
(60, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:38:55', 37, 3),
(61, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:40:31', 37, 3),
(62, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:46:16', 37, 3),
(63, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:48:19', 37, 3),
(64, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:51:54', 37, 3),
(65, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:53:44', 37, 3),
(66, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:55:18', 37, 3),
(67, '', '0000-00-00', '0000-00-00', 1, '2016-01-23 23:59:02', 37, 3),
(68, '', '0000-00-00', '0000-00-00', 1, '2016-01-24 00:00:30', 37, 3),
(69, '', '0000-00-00', '0000-00-00', 1, '2016-01-24 00:01:57', 37, 3),
(70, '', '0000-00-00', '0000-00-00', 1, '2016-01-24 00:03:46', 37, 3),
(71, '', '0000-00-00', '0000-00-00', 1, '2016-01-24 00:06:18', 37, 3),
(79, 'uploads/news/1584192983_gallery-01.jpg', '0000-00-00', '0000-00-00', 1, '2020-03-14 13:36:23', 40, 3),
(80, 'uploads/news/1584193089_gallery-02.jpg', '0000-00-00', '0000-00-00', 1, '2020-03-14 13:38:09', 40, 3);

-- --------------------------------------------------------

--
-- Table structure for table `news_language`
--

DROP TABLE IF EXISTS `news_language`;
CREATE TABLE `news_language` (
  `id_news_language` int(11) NOT NULL,
  `judul_news` varchar(300) NOT NULL,
  `content_news` text NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_language`
--

INSERT INTO `news_language` (`id_news_language`, `judul_news`, `content_news`, `id_language`, `id_news`) VALUES
(21, 'Instruktur Umum', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" >\n <tbody>\n  <tr>\n   <td colspan=\"6\"><strong>INSTRUKTUR UMUM</strong></td>\n  </tr>\n  <tr>\n   <td>\n   <p>1</p>\n   </td>\n   <td>Taharuddin, ST</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>THN</p>\n   </td>\n   <td>\n   <p>S1 (Teknik)</p>\n   </td>\n   <td>\n   <p>TOT 6.09</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>2</p>\n   </td>\n   <td>M. Natsir, S.Kom</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>MNR</p>\n   </td>\n   <td>\n   <p>S1 (Komputer)</p>\n   </td>\n   <td>\n   <p>-</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>3</p>\n   </td>\n   <td>Ridwan Gunawan, S.SiT</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>RGN</p>\n   </td>\n   <td>\n   <p>D-IV</p>\n   </td>\n   <td>\n   <p>-</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>4</p>\n   </td>\n   <td>Jhon Adi M. Sinaga, A.Md</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>JAS</p>\n   </td>\n   <td>\n   <p>D-III</p>\n   </td>\n   <td>\n   <p>-</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>5</p>\n   </td>\n   <td>dr. Elly Kartika Farida</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>EKF</p>\n   </td>\n   <td>\n   <p>S1 (Dokter)</p>\n   </td>\n   <td>\n   <p>TOT 6.09</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>6</p>\n   </td>\n   <td>Rina Maulina, Amd.Kep</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>RMA</p>\n   </td>\n   <td>\n   <p>D-III (Perawat)</p>\n   </td>\n   <td>\n   <p>-</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>7</p>\n   </td>\n   <td>Fadhlullah</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>FDL</p>\n   </td>\n   <td>\n   <p>D-III (Perawat)</p>\n   </td>\n   <td>\n   <p>-</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>8</p>\n   </td>\n   <td>Fitria Ramdhani, S.Pd</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>FRM</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Bhs. Inggris)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>9</p>\n   </td>\n   <td>Anne Noviyani Gurtiana, S.ST</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>ANI</p>\n   </td>\n   <td>\n   <p>S1 (Perawat)</p>\n   </td>\n   <td>\n   <p>-</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>10</p>\n   </td>\n   <td>Rizka Maulia Adnansyah</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>RMA</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Bhs. Inggris)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>11</p>\n   </td>\n   <td>Irmi Maulia Adnansyah,S.Pd</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>IAA</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Bhs. Inggris)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>12</p>\n   </td>\n   <td>Nasrol Aidil, ST</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>NAL</p>\n   </td>\n   <td>\n   <p>S1 (T. Elektro)</p>\n   </td>\n   <td>\n   <p>-</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>13</p>\n   </td>\n   <td>Fediyati</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>FYI</p>\n   </td>\n   <td>\n   <p>D-III</p>\n   </td>\n   <td>\n   <p>TOT 6.09</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>14</p>\n   </td>\n   <td>Sopian, S.Pd</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>SPN</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Olahraga)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>15</p>\n   </td>\n   <td>Johaidah Mistar, S.Pd</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>JMR</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Olahraga)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>16</p>\n   </td>\n   <td>Deca Rahayu, S.Pd</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>DCR</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Bhs. Indonesia)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>17</p>\n   </td>\n   <td>Mikyal Bulkiah, S.Pd</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>MBH</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Bhs. Indonesia)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>18</p>\n   </td>\n   <td>Kadmayana, S.Pd.I</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>KMA</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Fisika)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>19</p>\n   </td>\n   <td>Narlis Juandi,S.si</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>NJI</p>\n   </td>\n   <td>\n   <p>S1(pend.Kimia)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>20</p>\n   </td>\n   <td>Nurhayati, S.Si</td>\n   <td>&nbsp;</td>\n   <td>\n   <p>NYI</p>\n   </td>\n   <td>\n   <p>S1 (Pend. Kimia)</p>\n   </td>\n   <td>\n   <p>AKTA IV</p>\n   </td>\n  </tr>\n </tbody>\n</table>', 1, 12),
(22, 'Instruktur Pengajar Teknika', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" >\r\n <tbody>\r\n  <tr>\r\n   <td colspan=\"6\"><strong>STRUKTUR TEKNIKA</strong>&nbsp;</td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>13</p>\r\n   </td>\r\n   <td rowspan=\"2\">Ilham , S.SiT</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>IHM</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>14</p>\r\n   </td>\r\n   <td rowspan=\"2\">R. Bagus Wicaksono, S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>RBW</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>15</p>\r\n   </td>\r\n   <td rowspan=\"2\">M. Irwandi Lendra P., S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>ILP</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>16</p>\r\n   </td>\r\n   <td rowspan=\"2\">Nanak Pamungkas, S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>NPP</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>17</p>\r\n   </td>\r\n   <td rowspan=\"2\">Syamsul Arifin, S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>SAN</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>18</p>\r\n   </td>\r\n   <td rowspan=\"2\">Bayu Saksono, S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>BSO</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>19</p>\r\n   </td>\r\n   <td rowspan=\"2\">Muhamad Rifqi, S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>MRI</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>20</p>\r\n   </td>\r\n   <td rowspan=\"2\">Yanu Suryawan, S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>YSN</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>21</p>\r\n   </td>\r\n   <td rowspan=\"2\">Ismail, S.S.T.Pel</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>ISL</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>D-IV/ATT-III</p>\r\n   </td>\r\n   <td>\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>TOE 3.12</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>22</p>\r\n   </td>\r\n   <td rowspan=\"2\">Darmawan</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>DWN</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>S1/ATT-III</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\">\r\n   <p>23</p>\r\n   </td>\r\n   <td rowspan=\"2\">T. Thamrin</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\">\r\n   <p>TMN</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>S1/ATT-III</p>\r\n   </td>\r\n   <td rowspan=\"2\">\r\n   <p>TOT 6.09</p>\r\n   </td>\r\n  </tr>\r\n </tbody>\r\n</table>', 1, 13),
(23, 'Instruktur Pengajar', '<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n <tbody>\r\n  <tr>\r\n   <td colspan=\"2\" rowspan=\"2\" align=\"center\"><strong>NAMA</strong></td>\r\n   <td rowspan=\"2\" align=\"center\"><strong>NIP</strong></td>\r\n   <td rowspan=\"2\" align=\"center\"><strong>KODE</strong></td>\r\n   <td colspan=\"2\" align=\"center\"><strong>KOMPETENSI</strong></td>\r\n  </tr>\r\n  <tr>\r\n   <td align=\"center\"><strong>PROFESI</strong></td>\r\n   <td align=\"center\"><strong>PENDIDIKAN</strong></td>\r\n  </tr>\r\n  <tr>\r\n   <td colspan=\"6\" align=\"center\"><strong>INSTRUKTUR NAUTIKA</strong></td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">1</td>\r\n   <td rowspan=\"2\">Capt. Wisnu Handoko, M.Sc</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">WHO</td>\r\n   <td rowspan=\"2\" align=\"center\">S2/ANT-I</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>TOE 3.12</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">2</td>\r\n   <td rowspan=\"2\">Capt. Budi Mantoro, M.Si</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">BMO</td>\r\n   <td rowspan=\"2\" align=\"center\">S2/ANT-I</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>TOE 3.12</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">3</td>\r\n   <td rowspan=\"2\">Capt. Sahar Saleh, M.Si</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">SSH</td>\r\n   <td rowspan=\"2\" align=\"center\">S2/ANT-I</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>TOE 3.12</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">4</td>\r\n   <td rowspan=\"2\">Capt. Rudy Susanto, M.Pd</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">RSO</td>\r\n   <td rowspan=\"2\" align=\"center\">S2/ANT-I</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>TOE 3.12</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">5</td>\r\n   <td rowspan=\"2\">Capt. T. Leo Gurusinga, SE.,M.Pd</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">TLG</td>\r\n   <td rowspan=\"2\" align=\"center\">S2/ANT-I</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">6</td>\r\n   <td rowspan=\"2\">Harris R. Dahlan, S.SiT</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">HRD</td>\r\n   <td rowspan=\"2\" align=\"center\">S1/ANT-III</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>TOE 3.12</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">7</td>\r\n   <td rowspan=\"2\">Fahri Ihsan, SE.,M.Si</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">FIN</td>\r\n   <td rowspan=\"2\" align=\"center\">S2/ANT-II</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>TOE 3.12</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">8</td>\r\n   <td rowspan=\"2\">Hasan Sadili, S.SiT</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">HSI</td>\r\n   <td rowspan=\"2\" align=\"center\">D-IV/ANT-II</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n  <tr>\r\n   <td>TOE 3.12</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">9</td>\r\n   <td rowspan=\"2\">Raden Judiawan</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">RJN</td>\r\n   <td rowspan=\"2\" align=\"center\">&nbsp;</td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td rowspan=\"2\" align=\"center\">10</td>\r\n   <td rowspan=\"2\">Risman</td>\r\n   <td rowspan=\"2\">&nbsp;</td>\r\n   <td rowspan=\"2\" align=\"center\">RSN</td>\r\n   <td rowspan=\"2\" align=\"center\">&nbsp;</td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td align=\"center\">11</td>\r\n   <td>Memi Yanti Tangke Datu</td>\r\n   <td>&nbsp;</td>\r\n   <td align=\"center\">MYT</td>\r\n   <td align=\"center\">D-III/ANT-III</td>\r\n   <td>TOT 6.09</td>\r\n  </tr>\r\n </tbody>\r\n</table>', 1, 14),
(31, 'ITEO 2016', '<p>ITEO 2016</p>\r\n\r\n<p>Tingkat persaingan Sumber Daya Manusia (SDM) di pasar kerja nasional dan internasional terus meningkat seiring dengan peningkatan pemanfaatan ilmu pengetahuan dan teknologi baru pada berbagai bidang usaha, serta kebutuhan tingkat profesionalisme (<em>knowledge, hard skill, soft skill</em>) yang semakin tinggi terlebih dengan diberlakukannya MEA (Masyarakat Ekonomi Asia). Tentu saja dibutuhkan SDM yang unggul dan kompetitif, sejalan dengan kualitas lulusan Taruna Transportasi di bawah Badan Pengembangan Sumber Daya Manusia Perhubungan (BPSDMP) yang Gunawisista Nimpuna Sistacara (Prima, Profesional dan beretika). Tidak bisa dipungkiri pula bahwa kemampuan serta penguasaan bahasa asing sudah menjadi kebutuhan dunia akademik Taruna Transportasi. Tuntutan kompetensi penguasaan pengetahuan global menjadi salah satu alasan mengapa kemampuan berkomunikasi dalam berbahasa asing khususnya bahasa Inggris perlu menjadi bagian dari akademik Taruna Transportasi. Berkaitan dengan hal tersebut di atas maka BP2IP Malahayati Aceh memandang perlu dilaksanakannya Indonesian Transportation English Olympic (ITEO) 2016.</p>\r\n\r\n<p>Oleh karena itu, guna lebih memahami pelaksanaannya, kami menyusun Buku Panduan ITEO 2016 ini. Dengan harapan dapat membantu seluruh pihak yang terlibat dalam penyelenggaraan ITEO 2016 dengan berpegang teguh pada upaya peningkatan kualitas lomba serta kemampuan daya saing civitas akademika serta lulusan Taruna Transportasi di Indonesia.</p>\r\n\r\n<p><a href=\"http://www.bp2ipaceh.sch.id/wp-content/uploads/2015/11/NEW-BP2IP-OLIMPIADE-1xx.jpg\">BROSUR BP2IP OLIMPIADE</a></p>\r\n\r\n<p><a href=\"http://www.bp2ipaceh.sch.id/wp-content/uploads/2015/11/BUKU-PANDUAN-ITEO-2016-TERBARU-TTD.pdf\">BUKU PANDUAN ITEO 2016 TERBARU</a></p>', 1, 22),
(32, 'DIKLAT PELAUT IV (DP–IV) PEMBENTUKAN', '<p>Diklat ini mengacu kepada ketentuaan regulation II/3.3 serta STCW Code section A-II/3.5 dari STCW 1978 amandemen 1995. Ketentuan ketentuan-ketentuan ini meliputi batas ketentuan, keterampilan dan pengalaman yang harus dicapai untuk mendapatkan sertifikat ANT-IV bagi perwira kapal niaga bagian dek dan engine yang melaksanakan tugas jaga laut:</p>\r\n\r\n<ol>\r\n <li>Sebagai mualim jaga kapal dengan ukuran kurang dari GT.500 ( lima ratur Gross Tonnage ) pada daerah pelayaran NCV</li>\r\n <li>Sebagai mualim jaga di kapal dengan ukuran GT.500 ( lima ratus Gross Tonnage ) sampai dengan GT.3000 ( tiga ribu Gross Tonnage ) pada daerah pelayaran local</li>\r\n <li>Sebagai mualim 1 di kapal dengan ukuran kurang dari GT.500 ( lima ratur Gross Tonnage ) pada daerah pelayaran NCV setelah memiliki masa layar 24 (dua puluh empat ) bulan sebagai perwira jaga dikapal dengan ukuran kurang dari GT.500 ( lima ratur Gross Tonnage ) pada daerah NCV</li>\r\n <li>Sebagai mualim jaga di kapal dengan ukuran GT.500 ( lima ratur Gross Tonnage ) sampai dengan GT.3000 ( tiga ribu Gross Tonnage ) pada daerah pelayaran NCV setelah memiliki masa layar 24 (dua puluh empat ) bulan sebagai perwira jaga dikapal dengan ukuran kurang dari GT.500 ( lima ratur Gross Tonnage ) sampai dengan GT.3000 ( tiga ribu Gross Tonnage ) pada pelayaran local</li>\r\n <li>Sebagai mualim 1 di kapal dengan ukuran GT.500 ( lima ratur Gross Tonnage ) sampai dengan GT.3000 ( tiga ribu Gross Tonnage ) pada daerah pelayaran local</li>\r\n <li>Sebagai nakhoda di kapal dengan ukuran GT.500 ( lima ratur Gross Tonnage ) sampai dengan GT.3000 ( tiga ribu Gross Tonnage ) pada daerah pelayaran local setelah memiliki masa layar 12 (dua puluh empat ) bulan sebagai mualim 1 dikapal dengan ukuran kurang dari GT.500 ( lima ratur Gross Tonnage ) sampai dengan GT.3000 ( tiga ribu Gross Tonnage ) pada pelayaran local.</li>\r\n <li>Sebagai nakhoda di kapal dengan ukuran GT.500 ( lima ratur Gross Tonnage ) pada daerah pelayaran NCV setelah memiliki masa layar 12 (dua puluh empat ) bulan sebagai mualim 1 dikapal dengan ukuran kurang dari GT.500 ( lima ratur Gross Tonnage ) pada daerah pelayaran NCV.</li>\r\n</ol>', 1, 23),
(33, 'PERSYARATAN PESERTA DIKLAT PEMBENTUKAN ANT IV', '<p>PERSYARATAN PESERTA DIKLAT ANT IV PEMBENTUKAN</p>\r\n\r\n<p>1.Berijasah minimal SLTP atau yang sederajat<br />\r\n2.Memiliki akte lahir<br />\r\n3.Berusia minimal 15 tahun dan maksimal 23 tahun pada saat mendaftar<br />\r\n4.Belum menikah dengan membuktikan surat keterangan dari pejabat yang berwenang dan sanggup tidak menikah selama pendidikan dinyatskssn dengan surat pernyataan<br />\r\n5.Memiliki surat catatan kepolosian<br />\r\n6.Memiliki ktp atau tanda pengenal lainnya yang sah dan<br />\r\n7.Memiliki surat izin belajar dari pimpinan instansi masing masing setingkat eselon II, bagai pegawai negri sipil, pegawai BUMN, dan pegawai instansi lainnya.</p>\r\n\r\n<p>Silahkan klik link di bawah ini untuk mendownload form</p>\r\n\r\n<p><a href=\"http://www.bp2ipaceh.sch.id/?post_type=document&p=547\">LINK DOWNLOAD </a></p>', 1, 24),
(34, 'PERSYARATAN PESERTA DIKLAT PEMBENTUKAN ATT IV', '<p>PERSYARATAN PESERTA DIKLAT ANT IV PEMBENTUKAN</p>\r\n\r\n<p>1.Berijasah minimal SLTP atau yang sederajat<br />\r\n2.Memiliki akte lahir<br />\r\n3.Berusia minimal 15 tahun dan maksimal 23 tahun pada saat mendaftar<br />\r\n4.Belum menikah dengan membuktikan surat keterangan dari pejabat yang berwenang dan sanggup tidak menikah selama pendidikan dinyatskssn dengan surat pernyataan<br />\r\n5.Memiliki surat catatan kepolosian<br />\r\n6.Memiliki ktp atau tanda pengenal lainnya yang sah dan<br />\r\n7.Memiliki surat izin belajar dari pimpinan instansi masing masing setingkat eselon II, bagai pegawai negri sipil, pegawai BUMN, dan pegawai instansi lainnya.</p>\r\n\r\n<p>Silahkan klik link di bawah ini untuk mendownload form</p>\r\n\r\n<p><a href=\"http://www.bp2ipaceh.sch.id/?post_type=document&p=547\">LINK DOWNLOAD</a></p>', 1, 25),
(35, 'ATT IV PEMBENTUKAN', '<p>Diklat ini mengacu kepada ketentuan Regulation I/3 dan III/3 serta STCW 1978 amandemen 1995.ketentuan ketentuan ini meliputi batas ketentuan, Keterampilan dan pengalaman yang harus di capai untuk mendapatkan sertifikat ATT-IV bagi perwira kapal niaga bagian mesin atau masinis yang melaksakan jaga kamar mesin pada :</p>\r\n\r\n<ol>\r\n <li>Sebagai masinis jaga mesin di kapal dengan tenaga penggerak utama 750 KW (tujuh ratus lima puluh Kilo Watt) sampai dengan 3000 KW (tiga ribu Watt) pada daerah pelayaran NCV;</li>\r\n <li>Sebagai masinis jaga mesin di kapal dengan tenaga penggerak utama kurang dari 750 KW (tujuh ratus lima puloh Kilo Watt) pada daerah pelayaran semua lautan;</li>\r\n <li>Sebagai masinis jaga mesin di kapal dengan penggerakutama lebih dari 3000 KW (tiga ribu Kilo Watt) pada daerah pelayaran lokal setelah memiliki masa berlayar 12(dua belas) bulan sebagai masinis jaga di kapal dengan tenaga penggerak utama 750 KW(tujuh ratus lima puluh Kilo Watt) sampai dengan 3000 KW (tiga ribu Kilo Watt) pada daerah pelayaran;</li>\r\n <li>Sebagai masinis II di kapal dengan tenaga penngerak utama 750 KW(tujuh ratus lima puluh Kilo Watt) pada daerah pelayaran NCV; dan</li>\r\n <li>Sebagai Kepala Kamar mesin di kapal dengan tenaga penggerak utama 750 KW(tujuh ratus lima puluh Kilo Watt) sampai dengan 3000 KW9tiga ribu Kilo Watt) pada daerah pelayaran NCV setelah memiliki masa layar 12 (dua belas)bulan sebagai masinis jaga mesin kapal dengan tenaga penggerak utama 750 KW ( tujuh ratus lima puluh Kilo Watt) sampai dengan 3000 KW (tiga ribu Kilo Watt)pada daerah pelayaran NCV dan mengikuti diklat kusus.</li>\r\n</ol>', 1, 26),
(36, 'DIKLAT PELAUT RATING DINAS JAGA DEK (RDJK)', '<p>content belum ada</p>', 1, 27),
(37, 'DP V', '<p>content belum ada</p>', 1, 28),
(41, 'BASIC SAFETY TRAINING', '<p>BASIC SAFETY TRAINING</p>\n\n<p>LAMA DIKLAT : 9 hari</p>\n\n<p>BIAYA DIKLAT : Rp&nbsp; 1.750.000</p>\n\n<p>PERSYARATAN :</p>\n <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" >\n <tbody>\n  <tr>\n   <td>a</td>\n   <td>Fc. Ijazah SLTP atau sederajat</td>\n  </tr>\n  <tr>\n   <td>b</td>\n   <td>Fc.Surat kesehatan dari polklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td>c</td>\n   <td>Fc.Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td>d</td>\n   <td>Fc.Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td>e</td>\n   <td>Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 32),
(42, 'SURVIVAL AND RESCUE BOAT', '<p>Lama DIKLAT :</p>\n\n<p>4 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.130.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Fc. Sertifikat Diklat Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Fc. Masa layar minimal 12 bulan&nbsp;</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td>Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td>Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td>Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 33),
(43, 'MEDICAL FIRST AID', '<p>MEDICAL&nbsp; FIRST AID</p>\n\n<p>LAMA DIKLAT : 3 Hari</p>\n\n<p>BIAYA DIKLAT : Rp 1.000.000</p>\n\n<p>PERSYARATAN :</p>\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td>a</td>\n   <td>Fc. Sertifikat Diklat Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td>b</td>\n   <td>Fc. Surat kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td>c</td>\n   <td>Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td>d</td>\n   <td>Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td>e</td>\n   <td>Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 34),
(44, 'ADVANCE FIRE FIGHTING', '<p>Lama DIKLAT :</p>\n\n<p>4 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.140.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Fc. Sertifikat Diklat Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td>Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td>Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 35),
(46, 'MEDICAL CARE', '<p>Lama DIKLAT :</p>\n\n<p>5 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.260.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Fc. Sertifikat BST</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Fc. Sertifikat MFA</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td>Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td>Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td>Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 37),
(47, 'SECURITY AWARENESS TRAINING', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.310.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td >Fc. Sertifikat BST</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 38),
(48, 'SECURITY AWARENESS TRAINING FOR SEAFARERS WITH DESIGNATED SECURITY DUTIES', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.700.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >Fc. Sertifikat BST</td>\n  </tr>\n  <tr>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 39),
(49, 'ARPA SIMULATOR TRAINING', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.010.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td >Fc. Surat Keterangan kompetensi bidang Nautika</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 40),
(50, 'RADAR SIMULATOR TRAINING', '<p>Lama DIKLAT :</p>\n\n<p>5 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.300.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Fc. Surat Keterangan kompetensi bidang Nautika</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 41),
(51, 'BRIDGE RESOURCE MANAGEMENT', '<p>Lama DIKLAT :</p>\n\n<p>5 Hari<br />\n<br />\nBiaya DIKLAT :</p>\n\n<p>Rp.1.160.000<br />\n<br />\nPersyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Sertifikat Ahli Nautika Tingkat - IV (DOC - IV Certificate) ;</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 42),
(52, 'ENGINE RESOURCE MANAGEMENT Berlangganan', '<p>Lama DIKLAT :</p>\n\n<p>4 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.320.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Sertifikat Ahli Teknika Tingkat -&nbsp; IV (EOC - IV Certificate) atau / or ;</td>\n  </tr>\n  <tr>\n   <td >&nbsp;</td>\n   <td >Taruna yang sedang mengikuti Pendidikan Diploma - III dan Diploma - IV Pelayaran program studi Teknika serta program Pendidikan Diploma - III Teknik Listrik Kapal ;</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 43),
(53, 'CROWD MANAGEMENT', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.150.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Fc. Sertifikat BST</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 44),
(54, 'CRISIS MANAGEMENT AND HUMAN BEHAVIOUR TRAINING (CMHBT)', '<p>content belum ada</p>', 1, 45),
(57, 'Peralatan Di Laboratorium BP2IP Aceh', '<h1>Peralatan Di Laboratorium BP2IP Aceh</h1>\n\n<p><img alt=\"\" src=\"http://www.bara.co.id/bp2ip/uploads/banner/DSC_1052.jpg\" /></p>', 1, 48),
(58, 'DECK SIMULATOR', '<h2><a href=\"http://www.bp2ipaceh.sch.id/?p=584\">DECK SIMULATOR</a></h2>\n <p><img alt=\"\" src=\"http://www.bara.co.id/bp2ip/uploads/banner/DECK-SIMULATOR.jpg\"  /></p>', 1, 49),
(59, 'Ruang Belajar | RUANG KELAS', '<p><img alt=\"\" src=\"http://www.bara.co.id/bp2ip/uploads/banner/RUANG-KELAS.jpg\" /></p>', 1, 50),
(60, 'Kolam Renang', '<p><img alt=\"\" src=\"http://www.bara.co.id/bp2ip/uploads/banner/kolam.jpg\" /></p>', 1, 51),
(61, 'Tempat Ibadah', '<p><img alt=\"\" src=\"http://www.bara.co.id/bp2ip/uploads/banner/tempat-ibadah.jpg\" /></p>', 1, 52),
(62, 'CRISIS MANAGEMENT AND HUMAN BEHAVIOUR TRAINING (CMHBT)', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.150.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Sertifikat Diklat Manajemen Pengendali Massa (Crowd Management Training Certificate) ;</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Fc. Sertifikat BST</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Surat Kesehatan dari poliklinik dan bebas buta warna</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Fc. Surat Kenal Lahir / Akte Kelahiran</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Fc. Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Fc. Slip Pembayaran Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 53),
(63, 'DP - IV PENINGKATAN - NAUTIKA', '<p>Lama DIKLAT :</p>\n\n<p>9 Bulan</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.32.300.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >STTPK Diklat Pelaut Tingkat V (DP-V)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Maya Layar 36 bln untuk tingkat operasional dan 12 bulan untuk tingkat manajemen</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat DKKP (BST, AFF, MFA, SCRB, RS, GMDSS, SAT)</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat (Pengakuan / Penetapan&nbsp;&nbsp; / Penunjukan) dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut.</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Surat kenal lahir / Akte kelahiran.</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >KTP atau tanda bukti diri lainnya yang sah.</td>\n  </tr>\n </tbody>\n</table>', 1, 54),
(64, 'DP - IV PENINGKATAN - Teknika', '<p>Lama DIKLAT :</p>\n\n<p>9 Bulan</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.34.640.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >STTPK Diklat Pelaut Tingkat V (DP-V)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Maya Layar 36 bln untuk tingkat operasional dan 12 bulan untuk tingkat manajemen</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat DKKP (BST, AFF, MFA, SCRB, SSO, SAT)</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat (Pengakuan / Penetapan&nbsp;&nbsp; / Penunjukan) dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut.</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Surat kenal lahir / Akte kelahiran.</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >KTP atau tanda bukti diri lainnya yang sah.</td>\n  </tr>\n </tbody>\n</table>', 1, 55),
(65, 'DP - V PENINGKATAN - NAUTIKA', '<p>Lama DIKLAT :</p>\n\n<p>4 Bulan</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.13.690.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >STTPK Pelaut Terampil Bagian Deck (ABSD)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa Layar Tidak Kurang dari 24 Bulan sebagai Pelaut Terampil Bagian Deck (ABSD) di kapal ukuran lebih dari 500 GT</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat DKKP (BST, AFF, MFA, SCRB, SAT)</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat (Pengakuan / Penetapan&nbsp;&nbsp; / Penunjukan) dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut.</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Surat kenal lahir / Akte kelahiran.</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >KTP atau tanda bukti diri lainnya yang sah.</td>\n  </tr>\n </tbody>\n</table>', 1, 56),
(66, 'DP - V PENINGKATAN - TEKNIKA', '<p>Lama DIKLAT :</p>\n\n<p>4 Bulan</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.14.500.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >STTPK Pelaut Terampil Bagian Mesin (ABSE)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa Layar Tidak Kurang dari 24 Bulan sebagai Pelaut Terampil Bagian Mesin (ABSE) di kapal dengan mesin penggerak lebih dari 750 kW</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat DKKP (BST, AFF, MFA, SCRB, SAT)</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat (Pengakuan / Penetapan&nbsp;&nbsp; / Penunjukan) dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut.</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Surat kenal lahir / Akte kelahiran.</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >KTP atau tanda bukti diri lainnya yang sah.</td>\n  </tr>\n </tbody>\n</table>', 1, 57),
(67, 'DIKLAT PELAUT RATING DINAS JAGA DEK (RDJK)', '<p>Lama DIKLAT :</p>\n\n<p>1Bulan</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.20.030.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >1.&nbsp;</td>\n   <td >Usia tidak kurang dari 16 tahun</td>\n  </tr>\n  <tr>\n   <td >2.&nbsp;</td>\n   <td >Ijazah minimal SLTP&nbsp;</td>\n  </tr>\n  <tr>\n   <td >3.&nbsp;</td>\n   <td >Sertifikat keterampilan khusus pelaut ;&nbsp;</td>\n  </tr>\n  <tr>\n   <td >&nbsp;</td>\n   <td >a. Sertifikat BST</td>\n  </tr>\n  <tr>\n   <td >&nbsp;</td>\n   <td>b. Sertifikat AFF</td>\n  </tr>\n  <tr>\n   <td >&nbsp;</td>\n   <td>c. Sertifikat SAT</td>\n  </tr>\n  <tr>\n   <td >4.&nbsp;</td>\n   <td >Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat (Pengakuan / Penetapan&nbsp;&nbsp; / Penunjukan) dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut.</td>\n  </tr>\n  <tr>\n   <td >5.&nbsp;</td>\n   <td >Surat kenal lahir / Akte kelahiran.</td>\n  </tr>\n  <tr>\n   <td >6.&nbsp;</td>\n   <td >KTP atau tanda bukti diri lainnya yang sah.</td>\n  </tr>\n </tbody>\n</table>', 1, 58),
(68, 'DIKLAT PELAUT RATING DINAS JAGA MESIN (DRJM)', '<p>Lama DIKLAT :</p>\n\n<ul>\n <li>Nautika : 2 Hari</li>\n <li>Teknika : 3 Hari</li>\n</ul>\n\n<p>Biaya DIKLAT :</p>\n\n<ul>\n <li>NAUTIKA (886.000)</li>\n <li>TEKNIKA (870.000)</li>\n</ul>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK) Pemutakhiran atau STTPK Diklat pelaut -IV&nbsp;</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yang telah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Pertolongan Pertama pada Kecelakaan (MFA)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Sertifikat Perawatan Medis (MC)</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >j</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >k</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 59),
(69, 'DP - IV PEMUKTAHIRAN MANAGEMENT', '<p>Lama DIKLAT :</p>\n\n<p>4 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<ul>\n <li>Nautika : 1.240.000</li>\n <li>Teknika : 1.220.000</li>\n</ul>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK) Pemutakhiran atau STTPK Diklat pelaut -IV&nbsp;</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa layar yang diakui setalah memiliki sertfifikat keahlian tingkat IV berdasarkan STCW 1978 Amendemen 1995 pada jabatan tingkat operasional atau tingkat manajemen di kapal minimal 12 bulan dengan ukuran kapal 500 GT untuk jurusan nautika dan jurusan teknika dengan Mesin Penggerak Utama kurang dari 750 kW</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yuan tel;ah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Sertifikat Keterampilan Penggunaan Pesawat Penyelamat dan Sekoci Penolong (SCRB)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Pertolongan Pertama pada Kecelakaan (MFA)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Sertifikat Perawatan Medis (MC)</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >Sertifikat Perwira Keamanan Kapal (SSO)</td>\n  </tr>\n  <tr>\n   <td >j</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >k</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >l</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 60),
(70, 'DP - V PEMUKTAHIRAN OPERASIONAL', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>NAUTIKA (725.000) TEKNIKA (735.000)</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK) Pemutakhiran atau STTPK Diklat pelaut -V&nbsp;</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yang telah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Keterampilan Penggunaan Pesawat Penyelamat dan Sekoci Penolong (SCRB)</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Sertifikat Pertolongan Pertama pada Kecelakaan (MFA)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Perawatan Medis (MC)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >j</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 61),
(71, 'DP - V PEMUKTAHIRAN MANAGEMENT', '<p>Lama DIKLAT</p>\n\n<p>3 Hari:</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>NAUTIKA (1.180.000) TEKNIKA (1.200.000)</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK) Pemutakhiran atau STTPK Diklat pelaut -V&nbsp;</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa layar yang diakui setalah memiliki sertfifikat keahlian ATT-V berdasarkan STCW 1978 Amendemen 1995 pada jabatan tingkat operasional atau tingkat manajemen di kapal dengan ukuran kapal 500 GT atau lebih dan untuk jurusan mesin dengan ukuran mesin penggerak utama 12 bulan dengan Mesin Penggerak Utama kurang dari 750 kW atau lebih.</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yuan tel;ah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Sertifikat Keterampilan Penggunaan Pesawat Penyelamat dan Sekoci Penolong (SCRB)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Pertolongan Pertama pada Kecelakaan (MFA)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Sertifikat Perawatan Medis (MC)</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >Khusus Jurusan Nautika Sertifikat Diklat Manajemen Sumber Daya Anjungan (BRM)&nbsp;</td>\n  </tr>\n  <tr>\n   <td >j</td>\n   <td >Khusus Jurusan Teknika Sertifikat Diklat Manajemen Sumber Daya Kamar Mesin (ERM)</td>\n  </tr>\n  <tr>\n   <td >k</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >l</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >m</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 62),
(72, 'PEMUTAKHIRAN ABLE SEAFARERS DECK', '<p>PEMUTAKHIRAN ABLE SEAFARERS DECK</p>\n\n<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.500.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK) diklat pelaut tingkat Dasar (DP-D).</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa Layar minimal 12 bln sebagai Rating Dinas Jaga Deck&nbsp; dikapal dengan ukuran 500 GT</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yuan telah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Sertifikat Keterampilan Penggunaan Pesawat Penyelamat dan Sekoci Penolong (SCRB)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 63),
(73, 'PEMUTAKHIRAN ABLE SEAFARERS ENGINE', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.500.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK) diklat pelaut tingkat Dasar (DP-D).</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa Layar minimal 12 bln sebagai Rating Dinas Jaga Mesin dikapal Mesin Penggerak Utama 750 kW.</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yuan tel;ah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Sertifikat Keterampilan Penggunaan Pesawat Penyelamat dan Sekoci Penolong (SCRB)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 64),
(74, 'PEMUTAKHIRAN RATING DECK DINAS JAGA', '<p>PEMUTAKHIRAN RATING DECK DINAS JAGA</p>\n\n<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.480.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK)&nbsp; Diklat Pelaut Tingkat Dasar (DP-D)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa layar yang diakui selama 3 (tiga) bulan sebagai Rating Dinas Jaga Dek pada kapal dengan ukuran 500 GT.</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yuan telah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Sertifikat Pertolongan Pertama pada Kecelakaan (MFA)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 65),
(75, 'PEMUTAKHIRAN RATING DINAS JAGA MESIN', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.450.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td >a</td>\n   <td >Surat Tanda Tamat Pendidikan Kepelautan (STTPK)&nbsp; Diklat Pelaut Tingkat Dasar (DP-D)</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td >Masa layar yang diakui selama 3 (tiga) bulan sebagai Rating Dinas Jaga Dek pada kapal dengan ukuran mesin pengggerak utama 750kW.</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td >Sertifikat Kesehatan dari Rumah Sakit atau Lembaga Kesehatan lainnya yang mendapat Pengakuan atau penetapan dari Dokter yuan telah ditunjuk oleh Direktorat Jendral Perhubungan Laut;</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td >Sertifikat Pelatihan Dasar Keselamatan (BST)</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td >Sertifikat Pemadam Kebakaran Tingkat Lanjut (AFF)</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td >Sertifikat Pertolongan Pertama pada Kecelakaan (MFA)</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td >Sertifikat Pelatiihan Kepedulian Keamanan (SAT)</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td >Surat Kenal Lahir/ Akte Kelahiran;</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >KTP atau identitas lainnya.</td>\n  </tr>\n </tbody>\n</table>', 1, 66),
(76, 'REVALIDASI DIKLAT KETERAMPILAN PELAUT', '<p>Lama DIKLAT :</p>\n\n<p>1 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.200.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Sertifikat asli yang akan di revalidasi</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Tanda pengenal yang sah, KTP atau SIM</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Menunjukkan surat kesehatan</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td>Melunasi biaya pendaftaran</td>\n  </tr>\n </tbody>\n</table>', 1, 67);
INSERT INTO `news_language` (`id_news_language`, `judul_news`, `content_news`, `id_language`, `id_news`) VALUES
(77, 'ECDIS SIMULATOR', '<p>Lama DIKLAT :</p>\n\n<p>5 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.1.370.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Sertifikat Ahli Nautika Tingkat IV</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Sertifikat Kesehatan dari Rumah Sakit yang ditunjuk</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Fc. Akta Lahir</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td>Fc. KTP</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td>Melunasi Biaya Pendaftaran</td>\n  </tr>\n </tbody>\n</table>', 1, 68),
(78, 'SSO', '<p>Lama DIKLAT :</p>\n\n<p>3 Hari</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.860.000</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Sertifikat Ahli Nautika Tingkat V</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Sertifikat Kesehatan dari Rumah Sakit yang ditunjuk</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Fc. Akta Lahir</td>\n  </tr>\n  <tr>\n   <td >d</td>\n   <td>Fc. KTP</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td>Melunasi Biaya Pendaftaran</td>\n  </tr>\n </tbody>\n</table>\n\n<p>Persyaratan :</p>\n\n<p>&nbsp;</p>', 1, 69),
(79, 'ABLE SEAFARERS DECK (ABSD)', '<p>Lama DIKLAT :</p>\n\n<p>6 Minggu</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.2.030.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Usia tidak kurang dari 18 tahun</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Ijazah Rating Deck Dinas Jaga Kemudi</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Masa Layar tidak kurang dari 12 bulan sebagai Rating Dinas Jaga Kemudi</td>\n  </tr>\n  <tr>\n   <td >&nbsp;</td>\n   <td>dikapal tidak kurang dari 500 GT</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td>Sertifikat BST, AFF, SCRB,SAT</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td>Sertifikat Kesehatan</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td>Fc. Akta Lahir</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td>Fc. KTP</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >Melunasi Pembiayaan Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 70),
(80, 'ABLE SEAFARERS ENGINE (ABSE)', '<p>Lama DIKLAT :</p>\n\n<p>6 Minggu</p>\n\n<p>Biaya DIKLAT :</p>\n\n<p>Rp.2.030.000</p>\n\n<p>Persyaratan :</p>\n\n<table border=\"\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td colspan=\"2\" >MEMILIKI :</td>\n  </tr>\n  <tr>\n   <td >a</td>\n   <td>Usia tidak kurang dari 18 tahun</td>\n  </tr>\n  <tr>\n   <td >b</td>\n   <td>Ijazah Rating Deck Dinas Jaga Kemudi</td>\n  </tr>\n  <tr>\n   <td >c</td>\n   <td>Masa Layar tidak kurang dari 12 bulan sebagai Rating Dinas Jaga Kemudi</td>\n  </tr>\n  <tr>\n   <td >&nbsp;</td>\n   <td>dikapal tidak kurang dari 500 GT</td>\n  </tr>\n  <tr>\n   <td >e</td>\n   <td>Sertifikat BST, AFF, SCRB,SAT</td>\n  </tr>\n  <tr>\n   <td >f</td>\n   <td>Sertifikat Kesehatan</td>\n  </tr>\n  <tr>\n   <td >g</td>\n   <td>Fc. Akta Lahir</td>\n  </tr>\n  <tr>\n   <td >h</td>\n   <td>Fc. KTP</td>\n  </tr>\n  <tr>\n   <td >i</td>\n   <td >Melunasi Pembiayaan Diklat</td>\n  </tr>\n </tbody>\n</table>', 1, 71),
(88, 'Asrama Peserta Diklat', '<p>Asrama Peserta Diklat</p>', 1, 79),
(89, 'Ruang Audio Visual', '<p>Ruang Audio Visual</p>', 1, 80);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `id_kategori_sub` int(11) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `id_kategori_sub`, `date_update`) VALUES
(36, 0, '2015-12-26 06:52:35'),
(37, 0, '2015-12-26 06:55:39'),
(38, 0, '2015-12-26 06:57:46'),
(39, 0, '2015-12-26 06:59:56'),
(40, 0, '2015-12-26 07:08:48'),
(41, 0, '2020-03-12 04:28:08'),
(42, 0, '2020-03-12 04:29:05'),
(43, 0, '2020-03-12 04:34:05'),
(44, 0, '2020-03-12 04:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `page_language`
--

DROP TABLE IF EXISTS `page_language`;
CREATE TABLE `page_language` (
  `id_page_language` int(11) NOT NULL,
  `judul_page` varchar(225) NOT NULL,
  `content_page` text NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_language`
--

INSERT INTO `page_language` (`id_page_language`, `judul_page`, `content_page`, `id_language`, `id_page`) VALUES
(40, 'Engine Hall and Workshop', '<p>Engine Hall and Workshop&nbsp;Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>', 1, 29),
(54, 'Kata Pengantar', '<p>Puji syukur Alhamdulillah selalu kita panjatkan kepada Ilahi Robbi. Keperluan dan kepentingan manusia dalam kehidupan antara lain informasi.</p>\n\n<p><em>Balai Diklat Pembangunan Karakter Sumber Daya Manusia Transportasi sebagai lembaga pendidikan yang memiliki tugas dan tanggung jawab kepada bangsa untuk mendidik anak bangsa yang berkualitas dan responsif terhadap kemajuan Pelayaran di Indonesia</em></p>\n\n<p>Internet menjadi media yang sangat penting untuk melihat dunia. <em>Balai Diklat Pembangunan Karakter Sumber Daya Manusia Transportasi&nbsp;</em> telah memiliki sarana ini, untuk itu kami akan menampilkan apa yang ada dan terjadi, sehingga dunia bisa melihat keadaan di lembaga kami. Berupa kegiatan prestasi dan kondisi dan kemajuan yang ada kepada semua pihak. Kami mengharap kritik dan saran guna kebaikan BP2IP Aceh. Untuk civitas akademi, mari kita ukir prestasi guna kejayaan sekolah kita. Amin&hellip;</p>', 1, 36),
(56, 'Sejarah Organisasi', '<p><img alt=\"\" src=\"http://localhost/bp2ip/uploads/banner/kapal-pesiar.jpg\" /></p>\n\n<p>Isi content Sejarah</p>', 1, 37),
(58, 'Visi dan Misi', '<p><strong><big>Visi :</big></strong></p>\n\n<p>&quot;Terwujudnya BP3K SDM Transportasi sebagai Lembaga Pendidikan dan Pelatihan dalam Membangun Karakter SDM Transportasi yang memiliki Semangat Integritas, Etos Kerja dan Gotong Royong&quot;</p>\n\n<p><strong><big>Misi :</big></strong></p>\n\n<ol>\n <li>Membiasakan peserta diklat untuk mengatur diri sendiri, menjalin komunikasi, bekerja secara profesional dan membina hubungan baik dengan Tuhan;</li>\n <li>Menumbuhkan kesadaran kepada peserta Diklat untuk mengatur diri sendiri, menjalin komunikasi, bekerja secara profesional dan membina hubungan baik dengan Tuhan;</li>\n <li>Menanamkan Nilai Nilai Karakter kepada peserta diklat;</li>\n <li>Memberikan PelayananPrima dan Teladan kepada peserta diklat;</li>\n <li>Meningkatkan Kualitas SDM BP3K SDM Transportasi;</li>\n <li>Meningkatkan Kualitas Sarana dan Prasarana BP3K SDM Transportasi;</li>\n <li>Menyelenggarakan dan mengembangkan diklat pembangunan karakter yang proporsional, profesional;</li>\n <li>Meningkatkan Kerjasama Pembangunan Karakter SDM Transportasi.</li>\n</ol>', 1, 38),
(60, 'Tugas Pokok dan Fungsi', '<p><strong><big>Tugas Pokok</big></strong></p>\n\n<p>Balai Diklat Pembangunan Karakter SDM Transportasi mempunyai tugas melaksanakan pendidikan dan pelatihan pembangunan karakter SDM Transportasi.</p>\n\n<p><strong><big>Fungsi</big></strong></p>\n\n<ol>\n <li>Penyusunan rencana dan program pendidikan dan pelatihan</li>\n <li>Penyelenggadaan diklat manajemen diri, manajemen hubungan antar personal, manajemen organisasi kerja, dan manajemen spiritual</li>\n <li>Pengelolaan dan pemeliharaan sarana dan prasarana pendidikan dan pelatihan;</li>\n <li>Pelaksanaan kerjasama pendidikan dan pelatihan;</li>\n <li>Pelaksanaan ketatausahaan, urusan kepegawaian, keuangan, perlengkapan, hukum, hubungan masyarakat, dan kerumahtanggaan</li>\n</ol>', 1, 39),
(62, 'Struktur Organisasi', '<p><img alt=\"\" src=\"http://localhost/bp2ip/uploads/banner/struktur.jpg\" /><img alt=\"\" src=\"http://bp3ksdmt.dephub.go.id/page/struktur_organisasi.PNG\"  /></p>\n\n<p>Balai Diklat Pembangunan Karakter SDM Transportasi terdiri atas:</p>\n\n<ol>\n <li>Subbagian Tata Usaha;</li>\n <li>Seksi Penyelenggaraan dan Kerjasama Pendidikan dan Pelatihan;</li>\n <li>Seksi Sarana dan Prasarana Pendidikan dan Pelatihan;</li>\n <li>Kelompok Jabatan Fungsional; dan</li>\n <li>Unit Penunjang.</li>\n</ol>', 1, 40),
(63, 'Pendidikan dan Pelatihan Manajemen Diri', '<p>Pendidikan dan Pelatihan Manajemen Diri</p>', 1, 41),
(64, 'Pendidikan dan Pelatihan Manajemen Hubungan Antar Personal', '<p>Pendidikan dan Pelatihan Manajemen Hubungan Antar Personal</p>', 1, 42),
(65, 'Pendidikan dan Pelatihan Manajemen Organisasi Kerja', '<p>Pendidikan dan Pelatihan Manajemen Organisasi Kerja</p>', 1, 43),
(66, 'Pendidikan dan Pelatihan Manajemen Spiritual', '<p>Pendidikan dan Pelatihan Manajemen Spiritual</p>', 1, 44);

-- --------------------------------------------------------

--
-- Table structure for table `peta_atm`
--

DROP TABLE IF EXISTS `peta_atm`;
CREATE TABLE `peta_atm` (
  `id_peta_atm` int(11) NOT NULL,
  `jenis_atm` varchar(20) NOT NULL,
  `nama_lokasi` varchar(300) NOT NULL,
  `alamat_lokasi` varchar(300) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta_atm`
--

INSERT INTO `peta_atm` (`id_peta_atm`, `jenis_atm`, `nama_lokasi`, `alamat_lokasi`, `keterangan`, `lat`, `long`, `date_update`) VALUES
(1, 'ATM', 'Borma', 'Jl. Gerlong', 'dekat Telkom', '-3.6247845074964564', '128.10504913330078', '2013-12-20 18:00:00'),
(2, 'AST', 'Alfamaret', 'Jl. Abc', 'Dekat kantor batu bara', '1.306744762128643', '128.48321914672852', '2013-12-21 14:00:00'),
(4, 'Kantor Cabang', 'Ternate', 'Ternate Maluku', 'Ternate Maluku dekat Sungai', '0.4614207935306211', '127.7816390991211', '2013-12-23 05:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_polls`
--

DROP TABLE IF EXISTS `pilihan_polls`;
CREATE TABLE `pilihan_polls` (
  `id_pilihan_polls` int(11) NOT NULL,
  `date_update` datetime NOT NULL,
  `id_topik_polls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan_polls`
--

INSERT INTO `pilihan_polls` (`id_pilihan_polls`, `date_update`, `id_topik_polls`) VALUES
(1, '2013-12-22 20:00:00', 1),
(2, '2013-12-22 20:00:00', 1),
(3, '2013-12-22 20:00:00', 1),
(4, '2013-12-22 20:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_polls_language`
--

DROP TABLE IF EXISTS `pilihan_polls_language`;
CREATE TABLE `pilihan_polls_language` (
  `id_pilihan_polls_language` int(11) NOT NULL,
  `judul_pilihan_polls` varchar(300) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_pilihan_polls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan_polls_language`
--

INSERT INTO `pilihan_polls_language` (`id_pilihan_polls_language`, `judul_pilihan_polls`, `id_language`, `id_pilihan_polls`) VALUES
(1, 'Biasa-biasa saja', 1, 1),
(2, 'Biasa-biasa saja eng', 2, 1),
(3, 'Kurang Memuaskan', 1, 2),
(4, 'Kurang Memuaskan eng', 2, 2),
(5, 'Memuaskan', 1, 3),
(6, 'Memuaskan eng', 2, 3),
(7, 'Tidak tahu', 1, 4),
(8, 'Tidak tahu eng', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_topik_polls`
--

DROP TABLE IF EXISTS `pilihan_topik_polls`;
CREATE TABLE `pilihan_topik_polls` (
  `id_pilihan_topik_polls` int(11) NOT NULL,
  `id_pilihan_polls` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan_topik_polls`
--

INSERT INTO `pilihan_topik_polls` (`id_pilihan_topik_polls`, `id_pilihan_polls`, `ip`) VALUES
(1, 1, '::1'),
(2, 2, '::1'),
(3, 2, '::1'),
(4, 1, '::1'),
(5, 3, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama_setting` varchar(225) NOT NULL,
  `key` varchar(225) NOT NULL,
  `table` varchar(225) NOT NULL,
  `id_table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_setting`, `key`, `table`, `id_table`) VALUES
(1, 'Kategori Modul', 'kategori_modul', 'kategori', 1),
(2, 'Modul Home', 'modul_home', 'kategori_sub', 1),
(3, 'Kategori Banner', 'kategori_banner', 'kategori', 2),
(4, 'Slide Home', 'slide_home', 'kategori_sub', 4),
(5, 'Kategori News', 'kategori_news', 'kategori', 3),
(6, 'Berita Sekolah', 'news_utama', 'kategori_sub', 5),
(7, 'Kategori File', 'kategori_file', 'kategori', 4),
(8, 'Kategori Menu', 'kategori_menu', 'kategori', 5),
(9, 'Menu Utama', 'menu_utama', 'kategori_sub', 9),
(10, 'Modul Sidebar', 'modul_sidebar', 'kategori_sub', 3),
(11, 'Modul Utama', 'modul_utama', 'kategori_sub', 2),
(12, 'Simulasi Produk', 'simulasi_produk', 'simulasi_produk', 1),
(13, 'Download', 'download', 'kategori_sub', 6),
(14, 'Laporan Pelaksanaan GCG', 'laporan_pelaksanaan_gcg', 'kategori_sub', 7),
(15, 'Laporan Publikasi', 'laporan_publikasi', 'kategori_sub', 8),
(16, 'Gallery', 'gallery', 'kategori_sub', 10),
(20, 'Link Image', 'link_image', 'kategori_sub', 14),
(21, 'Content Home', 'fasilitas', 'kategori_sub', 17),
(22, 'All Setting', 'home', 'kategori_sub', 18),
(23, 'Video', 'video', 'kategori_sub', 19),
(24, 'Berita Luar Sekolah', 'berita_luar_sekolah', 'kategori_sub', 20),
(25, 'Data Alumni', 'data_alumni', 'kategori_sub', 21),
(26, 'Data Instruktur', 'data_instruktur', 'kategori_sub', 22),
(27, 'Data Siswa', 'data_siswa', 'kategori_sub', 23),
(28, 'Menu Other', 'menu_other', 'kategori_sub', 38),
(29, 'Nautika', 'nautika', 'kategori_sub', 28),
(30, 'Teknika', 'teknika', 'kategori_sub', 29),
(31, 'RDJK', 'rdjk', 'kategori_sub', 30),
(32, 'DP-V', 'dpv', 'kategori_sub', 31),
(33, 'Diklat Keterampilan Pelaut', 'diklat_keterampilan_pelaut', 'kategori_sub', 37),
(34, 'Ekstrakurikuler', 'ekstrakurikuler', 'kategori_sub', 24),
(35, 'Karya Siswa', 'karya_siswa', 'kategori_sub', 25),
(36, 'Prestasi Akademik', 'prestasi_akademik', 'kategori_sub', 26),
(37, 'Prestasi Non Akademik', 'prestasi_non_akademik', 'kategori_sub', 27),
(38, 'Pengumuman', 'pengumuman', 'kategori_sub', 32),
(39, 'Event', 'event', 'kategori_sub', 33),
(40, 'Informasi Berkala', 'informasi_berkala', 'kategori_sub', 34),
(41, 'Informasi Serta Merta', 'informasi_serta_merta', 'kategori_sub', 35),
(42, 'Informasi Tersedia Setiap Saat', 'informasi_tersedia_setiap_saat', 'kategori_sub', 36),
(43, 'Link Situs', 'link_situs', 'kategori_sub', 39),
(44, 'Sarana dan Prasarana', 'sarana_dan_prasarana', 'kategori_sub', 40),
(45, 'Jumlah Lulusan', 'jumlah_lulusan', 'kategori_sub', 41),
(46, 'Kategori News', 'kategori_news', 'kategori_sub', 42),
(47, 'Basic Safety Training', 'basic_safety_training', 'kategori_sub', 43),
(48, 'Survival and Rescue Boat', 'survival_and_rescue_boat', 'kategori_sub', 44),
(49, 'Medical First AID', 'medical_first_aid', 'kategori_sub', 45),
(50, 'Advance Fire Fighting', 'advance_fire_fighting', 'kategori_sub', 46),
(51, 'Medical Care', 'medical_care', 'kategori_sub', 47),
(52, 'Security Awareness Training', 'security_awareness_training', 'kategori_sub', 48),
(53, 'Security Awareness Training for Seafarers with Designated Security Duties', 'security_awareness_training_seafarers', 'kategori_sub', 49),
(54, 'ARPA Simulator Training', 'arpa_simulator_training', 'kategori_sub', 50),
(55, 'Radar Simulator Training', 'radar_simulator_training', 'kategori_sub', 51),
(56, 'Bridge Resource Management', 'bridge_resource_management', 'kategori_sub', 52),
(57, 'Engine Resource Management', 'engine_resource_management', 'kategori_sub', 53),
(58, 'Crowd Management', 'crowd_management', 'kategori_sub', 54),
(59, 'Crisis Management and Human Behaviour Training (CMHBT)', 'cmhbt', 'kategori_sub', 55);

-- --------------------------------------------------------

--
-- Table structure for table `setting_website`
--

DROP TABLE IF EXISTS `setting_website`;
CREATE TABLE `setting_website` (
  `id_setting_website` int(11) NOT NULL,
  `id_kategori_sub` int(11) NOT NULL,
  `key` varchar(500) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_website`
--

INSERT INTO `setting_website` (`id_setting_website`, `id_kategori_sub`, `key`, `sort_order`) VALUES
(16, 14, 'link_image_1', 1),
(17, 14, 'link_image_2', 2),
(18, 14, 'link_image_3', 3),
(19, 17, 'fasilitas_1', 1),
(20, 17, 'fasilitas_2', 2),
(21, 17, 'fasilitas_3', 3),
(22, 17, 'fasilitas_4', 4),
(23, 17, 'fasilitas_5', 5),
(24, 17, 'fasilitas_6', 6),
(25, 17, 'fasilitas_7', 7),
(26, 17, 'fasilitas_8', 8),
(27, 17, 'fasilitas_9', 9),
(28, 17, 'fasilitas_10', 10),
(29, 18, 'logo', 1),
(30, 18, 'text_video', 2),
(31, 18, 'url_video', 3),
(32, 18, 'contact', 4),
(33, 19, 'video_1', 1),
(34, 19, 'video_2', 2),
(35, 19, 'video_3', 3),
(36, 19, 'video_4', 4),
(37, 19, 'video_5', 5),
(38, 39, 'link_situs_1', 1),
(39, 39, 'link_situs_2', 2),
(40, 39, 'link_situs_3', 3),
(41, 39, 'link_situs_4', 4),
(42, 39, 'link_situs_5', 5),
(43, 39, 'link_situs_6', 6),
(44, 39, 'link_situs_7', 7),
(45, 39, 'link_situs_8', 8),
(46, 39, 'link_situs_9', 9),
(47, 39, 'link_situs_10', 10),
(48, 42, 'diklat_pembentukan', 1),
(49, 42, 'diklat_penjengjangan', 2),
(50, 42, 'diklat_dkkp', 3),
(51, 17, 'fasilitas_11', 11),
(52, 17, 'fasilitas_12', 12);

-- --------------------------------------------------------

--
-- Table structure for table `setting_website_language`
--

DROP TABLE IF EXISTS `setting_website_language`;
CREATE TABLE `setting_website_language` (
  `id_setting_website_language` int(11) NOT NULL,
  `id_language` int(11) NOT NULL,
  `judul_setting_website` varchar(500) NOT NULL,
  `content_setting_website` longtext NOT NULL,
  `id_setting_website` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_website_language`
--

INSERT INTO `setting_website_language` (`id_setting_website_language`, `id_language`, `judul_setting_website`, `content_setting_website`, `id_setting_website`) VALUES
(16, 1, 'Link Image 1', 'Visi & Misi,visi_misi.jpg,http://bp3k-sdmt.immustudio.com/page/view/38', 16),
(17, 1, 'Link Image 2', 'Kata Pengantar,pengantar.jpg,http://bp3k-sdmt.immustudio.com/page/view/36', 17),
(18, 1, 'Link Image 3', 'Tugas Pokok dan Fungsi,tugas.jpg,http://bp3k-sdmt.immustudio.com/page/view/39', 18),
(19, 1, 'Fasilitas 1', 'Asrama Peserta Diklat,gallery-01.jpg,#', 19),
(20, 1, 'Fasilitas 2', 'Camp Fire,gallery-03.jpg,#', 20),
(21, 1, 'Fasilitas 3', 'Masjid,gallery-06.jpg,#', 21),
(22, 1, 'Fasilitas 4', 'Ruang Audio Visual,gallery-02.jpg,#', 22),
(23, 1, 'Fasilitas 5', 'Aula,gallery-07.jpg,#', 23),
(24, 1, 'Fasilitas 6', 'Kolam Renang,gallery-05.jpg,#', 24),
(25, 1, 'Fasilitas 7', ',,', 25),
(26, 1, 'Fasilitas 8', ',,', 26),
(27, 1, 'Fasilitas 9', ',,', 27),
(28, 1, 'Fasilitas 10', ',,', 28),
(29, 1, 'Logo', 'logo.png', 29),
(30, 1, 'Text Video', 'Mengenal BP3K SDMT', 30),
(31, 1, 'URL Video', 'https://www.youtube.com/watch?v=5pOCZF7h3OA', 31),
(32, 1, 'Contact Us', '<p>Balai Diklat Pembangunan Karakter SDM Tranportasi<br />\nJl. Terusan PPTK Gambung KM 4,2 Kp. Papakmanggu, Desa Cibodas Pasirjambu<br />\nBandung / Jawa Barat, 40972<br />\nTelp. ((+62 22) 5748 2930&nbsp;Fax : (+62 22) 592 7099<br />\nWebsite: www.bp3k-sdmt.ac.id</p>\n', 32),
(33, 1, 'Video 1', 'Profile BP3K SDMT,https://www.youtube.com/embed/5pOCZF7h3OA', 33),
(34, 1, 'Video 2', 'DIKLAT PEMBANGUNAN KARAKTER TARUNA PASCA PRALA PIP SEMARANG 2017,https://www.youtube.com/embed/xbRxfEwYyZk', 34),
(35, 1, 'Video 3', ',', 35),
(36, 1, 'Video 4', ',', 36),
(37, 1, 'Video 5', ',', 37),
(38, 1, 'Link Situs 1', 'http://www.dephub.go.id/,kemenhub.jpg', 38),
(39, 1, 'Link Situs 2', 'http://bpsdm.dephub.go.id/,pb_sdm_p.jpg', 39),
(40, 1, 'Link Situs 3', 'http://pelaut.dephub.go.id/,directorat_sea.jpg', 40),
(41, 1, 'Link Situs 4', ',', 41),
(42, 1, 'Link Situs 5', ',', 42),
(43, 1, 'Link Situs 6', ',', 43),
(44, 1, 'Link Situs 7', ',', 44),
(45, 1, 'Link Situs 8', ',', 45),
(46, 1, 'Link Situs 9', ',', 46),
(47, 1, 'Link Situs 10', ',', 47),
(48, 1, 'Diklat Pembentukan ant/att IV', '12,13,,,,,,,,,,,,,', 48),
(49, 1, 'Diklat Penjengjangan', '14,15,,,,,,,,,,,,,', 49),
(50, 1, 'Diklat DKKP', '28,29,30,31,32,33,34,35,36,37,38,39,40,,', 50),
(51, 1, 'Fasilitas 11', ',,', 51),
(52, 1, 'Fasilitas 12', ',,', 52);

-- --------------------------------------------------------

--
-- Table structure for table `simulasi_produk`
--

DROP TABLE IF EXISTS `simulasi_produk`;
CREATE TABLE `simulasi_produk` (
  `id_simulasi_produk` int(11) NOT NULL,
  `bunga` varchar(30) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simulasi_produk`
--

INSERT INTO `simulasi_produk` (`id_simulasi_produk`, `bunga`, `date_update`) VALUES
(1, '19.75', '2013-12-23 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE `subscribe` (
  `id_subscribe` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id_subscribe`, `email`, `status`, `date_updated`) VALUES
(2, 'moch.gani.setiawan@gmail.com', 0, '2016-01-08 15:17:25'),
(3, 'dyordhanideri@gmail.com', 0, '2016-03-01 19:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE `theme` (
  `id_theme` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `key` varchar(225) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id_theme`, `name`, `key`, `status`) VALUES
(1, 'Metro 1', 'theme1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topik_polls`
--

DROP TABLE IF EXISTS `topik_polls`;
CREATE TABLE `topik_polls` (
  `id_topik_polls` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik_polls`
--

INSERT INTO `topik_polls` (`id_topik_polls`, `status`, `date_update`) VALUES
(1, 1, '2013-12-22 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `topik_polls_language`
--

DROP TABLE IF EXISTS `topik_polls_language`;
CREATE TABLE `topik_polls_language` (
  `id_topik_polls_language` int(11) NOT NULL,
  `judul_topik_polls` varchar(1000) NOT NULL,
  `id_language` int(11) NOT NULL,
  `id_topik_polls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik_polls_language`
--

INSERT INTO `topik_polls_language` (`id_topik_polls_language`, `judul_topik_polls`, `id_language`, `id_topik_polls`) VALUES
(1, 'Bagaimana Menurut Anda Tentang Pelayanan Bank Maluku?', 1, 1),
(2, 'Bagaimana Menurut Anda Tentang Pelayanan Bank Maluku? eng', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_user_group` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `id_user_group`, `created`, `modified`) VALUES
(3, 'admin', '$2a$08$NoFHKWhMeDsT0lvU3jTAoOfgRqjMyk3gCWRp/g8EkP.AkeqdxqAGm', 'admin@user.com', 1, 0, NULL, NULL, NULL, NULL, '140fe03abb638a11a32bff5283717e43', '114.79.54.64', '2020-04-25 15:01:54', 1, '2013-12-08 18:29:51', '2020-04-25 15:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('21e6e2e2161ef136f629b77fe9c2fcb1', 3, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', '192.168.1.5', '2015-12-29 11:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id_user_group` int(11) NOT NULL,
  `permission_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id_user_group`, `permission_name`) VALUES
(1, 'Administrator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_group_permission`
--

DROP TABLE IF EXISTS `user_group_permission`;
CREATE TABLE `user_group_permission` (
  `id_group_permission` int(11) NOT NULL,
  `id_user_group` int(11) NOT NULL,
  `id_user_permission` int(11) NOT NULL,
  `create` int(11) NOT NULL DEFAULT 0,
  `update` int(11) NOT NULL DEFAULT 0,
  `delete` int(11) NOT NULL DEFAULT 0,
  `show` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group_permission`
--

INSERT INTO `user_group_permission` (`id_group_permission`, `id_user_group`, `id_user_permission`, `create`, `update`, `delete`, `show`) VALUES
(55, 1, 2, 1, 1, 1, 1),
(58, 1, 1, 1, 1, 1, 1),
(59, 1, 3, 1, 1, 1, 1),
(60, 2, 2, 0, 0, 0, 0),
(61, 2, 1, 1, 1, 1, 1),
(62, 2, 3, 0, 0, 0, 0),
(63, 1, 11, 1, 1, 1, 1),
(64, 1, 13, 1, 1, 1, 1),
(65, 1, 10, 1, 1, 1, 1),
(66, 1, 5, 1, 1, 1, 1),
(67, 1, 12, 1, 1, 1, 1),
(68, 1, 8, 1, 1, 1, 1),
(69, 1, 9, 1, 1, 1, 1),
(70, 1, 6, 1, 1, 1, 1),
(71, 1, 7, 1, 1, 1, 1),
(72, 1, 15, 1, 1, 1, 1),
(73, 1, 14, 1, 1, 1, 1),
(74, 1, 16, 1, 1, 1, 1),
(75, 1, 17, 1, 1, 1, 1),
(76, 1, 20, 1, 1, 1, 1),
(77, 1, 18, 1, 1, 1, 1),
(78, 1, 19, 1, 1, 1, 1),
(79, 2, 11, 1, 1, 1, 1),
(80, 2, 20, 1, 1, 1, 1),
(81, 2, 13, 1, 1, 1, 1),
(82, 2, 18, 1, 1, 1, 1),
(83, 2, 10, 1, 1, 1, 1),
(84, 2, 5, 1, 1, 1, 1),
(85, 2, 12, 1, 1, 1, 1),
(86, 2, 8, 1, 1, 1, 1),
(87, 2, 9, 1, 1, 1, 1),
(88, 2, 15, 1, 1, 1, 1),
(89, 2, 16, 1, 1, 1, 1),
(90, 2, 19, 1, 1, 1, 1),
(91, 2, 14, 1, 1, 1, 1),
(92, 2, 17, 1, 1, 1, 1),
(93, 2, 6, 1, 1, 1, 1),
(94, 2, 7, 1, 1, 1, 1),
(95, 3, 11, 1, 1, 1, 1),
(96, 3, 20, 0, 0, 0, 0),
(97, 3, 13, 1, 1, 1, 1),
(98, 3, 18, 1, 1, 1, 1),
(99, 3, 10, 1, 1, 1, 1),
(100, 3, 5, 1, 1, 1, 1),
(101, 3, 12, 1, 1, 1, 1),
(102, 3, 8, 1, 1, 1, 1),
(103, 3, 9, 1, 1, 1, 1),
(104, 3, 15, 1, 1, 1, 1),
(105, 3, 16, 1, 1, 1, 1),
(106, 3, 19, 1, 1, 1, 1),
(107, 3, 14, 0, 0, 0, 0),
(108, 3, 17, 0, 0, 0, 0),
(109, 3, 6, 0, 0, 0, 0),
(110, 3, 7, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

DROP TABLE IF EXISTS `user_permission`;
CREATE TABLE `user_permission` (
  `id_user_permission` int(11) NOT NULL,
  `page_user_permission` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permission`
--

INSERT INTO `user_permission` (`id_user_permission`, `page_user_permission`) VALUES
(5, 'List user'),
(6, 'User group'),
(7, 'User permission'),
(8, 'News'),
(9, 'Page'),
(10, 'FIles'),
(11, 'Banner'),
(12, 'Menu'),
(13, 'Comment'),
(18, 'Contact'),
(19, 'Setting');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 4, NULL, NULL),
(2, 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `banner_language`
--
ALTER TABLE `banner_language`
  ADD PRIMARY KEY (`id_banner_language`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `file_language`
--
ALTER TABLE `file_language`
  ADD PRIMARY KEY (`id_file_language`);

--
-- Indexes for table `hits`
--
ALTER TABLE `hits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_language`
--
ALTER TABLE `kategori_language`
  ADD PRIMARY KEY (`id_kategori_language`);

--
-- Indexes for table `kategori_sub`
--
ALTER TABLE `kategori_sub`
  ADD PRIMARY KEY (`id_kategori_sub`);

--
-- Indexes for table `kategori_sub_language`
--
ALTER TABLE `kategori_sub_language`
  ADD PRIMARY KEY (`id_kategori_sub_language`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_language`
--
ALTER TABLE `menu_language`
  ADD PRIMARY KEY (`id_menu_language`);

--
-- Indexes for table `menu_link`
--
ALTER TABLE `menu_link`
  ADD PRIMARY KEY (`id_menu_link`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `news_language`
--
ALTER TABLE `news_language`
  ADD PRIMARY KEY (`id_news_language`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `page_language`
--
ALTER TABLE `page_language`
  ADD PRIMARY KEY (`id_page_language`);

--
-- Indexes for table `peta_atm`
--
ALTER TABLE `peta_atm`
  ADD PRIMARY KEY (`id_peta_atm`);

--
-- Indexes for table `pilihan_polls`
--
ALTER TABLE `pilihan_polls`
  ADD PRIMARY KEY (`id_pilihan_polls`);

--
-- Indexes for table `pilihan_polls_language`
--
ALTER TABLE `pilihan_polls_language`
  ADD PRIMARY KEY (`id_pilihan_polls_language`);

--
-- Indexes for table `pilihan_topik_polls`
--
ALTER TABLE `pilihan_topik_polls`
  ADD PRIMARY KEY (`id_pilihan_topik_polls`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `setting_website`
--
ALTER TABLE `setting_website`
  ADD PRIMARY KEY (`id_setting_website`);

--
-- Indexes for table `setting_website_language`
--
ALTER TABLE `setting_website_language`
  ADD PRIMARY KEY (`id_setting_website_language`);

--
-- Indexes for table `simulasi_produk`
--
ALTER TABLE `simulasi_produk`
  ADD PRIMARY KEY (`id_simulasi_produk`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id_subscribe`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id_theme`);

--
-- Indexes for table `topik_polls`
--
ALTER TABLE `topik_polls`
  ADD PRIMARY KEY (`id_topik_polls`);

--
-- Indexes for table `topik_polls_language`
--
ALTER TABLE `topik_polls_language`
  ADD PRIMARY KEY (`id_topik_polls_language`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_user_group`);

--
-- Indexes for table `user_group_permission`
--
ALTER TABLE `user_group_permission`
  ADD PRIMARY KEY (`id_group_permission`);

--
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`id_user_permission`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `banner_language`
--
ALTER TABLE `banner_language`
  MODIFY `id_banner_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `file_language`
--
ALTER TABLE `file_language`
  MODIFY `id_file_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hits`
--
ALTER TABLE `hits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_language`
--
ALTER TABLE `kategori_language`
  MODIFY `id_kategori_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_sub`
--
ALTER TABLE `kategori_sub`
  MODIFY `id_kategori_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `kategori_sub_language`
--
ALTER TABLE `kategori_sub_language`
  MODIFY `id_kategori_sub_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `menu_language`
--
ALTER TABLE `menu_language`
  MODIFY `id_menu_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `menu_link`
--
ALTER TABLE `menu_link`
  MODIFY `id_menu_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `news_language`
--
ALTER TABLE `news_language`
  MODIFY `id_news_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `page_language`
--
ALTER TABLE `page_language`
  MODIFY `id_page_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `peta_atm`
--
ALTER TABLE `peta_atm`
  MODIFY `id_peta_atm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pilihan_polls`
--
ALTER TABLE `pilihan_polls`
  MODIFY `id_pilihan_polls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pilihan_polls_language`
--
ALTER TABLE `pilihan_polls_language`
  MODIFY `id_pilihan_polls_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pilihan_topik_polls`
--
ALTER TABLE `pilihan_topik_polls`
  MODIFY `id_pilihan_topik_polls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `setting_website`
--
ALTER TABLE `setting_website`
  MODIFY `id_setting_website` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `setting_website_language`
--
ALTER TABLE `setting_website_language`
  MODIFY `id_setting_website_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `simulasi_produk`
--
ALTER TABLE `simulasi_produk`
  MODIFY `id_simulasi_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id_subscribe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topik_polls`
--
ALTER TABLE `topik_polls`
  MODIFY `id_topik_polls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topik_polls_language`
--
ALTER TABLE `topik_polls_language`
  MODIFY `id_topik_polls_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_user_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_group_permission`
--
ALTER TABLE `user_group_permission`
  MODIFY `id_group_permission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `id_user_permission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
