-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2020 at 06:18 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chay`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) COLLATE ucs2_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE ucs2_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE ucs2_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE ucs2_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Diwyanshu', 'prasad', 'diwyanshu.prasad@gmail.co', '$2y$12$OxJrewGFF260adgjTNbJyuwqHcnrRBZ/N1y5AHlVwicfsUhG3p3i6'),
(2, 'Diwyanshu', 'prasad', 'annie@gmail.com', '$2y$12$mK95JwVP54Vmmv/FCg0P6u0XsEv31npse1NWpHBdBk0XhLHNYT.Ue');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
