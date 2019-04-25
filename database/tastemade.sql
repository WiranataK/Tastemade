-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastemade`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`email`, `password`) VALUES
('nata@gmail.com', '202cb962ac59075b964b07152d234b70'),
('wira@gmail.com', '202cb962ac59075b964b07152d234b70'),
('wiranata@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `namamakanan` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`namamakanan`, `src`, `href`, `deskripsi`) VALUES
('Nasi Goreng Hitam', 'https://renditions3-tastemade-web.akamaized.net/d16e00d0-s29_485_nasi-goreng-hitam_l_id/mp4/d16e00d0-s29_485_nasi-goreng-hitam_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Gurihnya nasi goreng dengan rasa tinta cumi yang khas dengan campuran seafood yang menggoda!'),
('Es Krim Pisang Goreng', 'https://renditions3-tastemade-web.akamaized.net/898dc34a-s28_483_es-krim-pisang-goreng_l_id/mp4/898dc34a-s28_483_es-krim-pisang-goreng_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Pisang gorengmu kini dalam bentuk Es Krim yang renyah di luar dan lembut di dalam! '),
('Kepiting Tauco', 'https://renditions3-tastemade-web.akamaized.net/b40e540f-s28_482_kepiting-tauco_l_id/mp4/b40e540f-s28_482_kepiting-tauco_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Lembutnya daging kepiting dalam balutan bumbu tauco yang gurih!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
