-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 04:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `res`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_fan`
--

CREATE TABLE IF NOT EXISTS `tabel_fan` (
`id` int(11) NOT NULL,
  `suhu` float NOT NULL,
  `kontrol` varchar(2) NOT NULL,
  `leveling` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_fan`
--

INSERT INTO `tabel_fan` (`id`, `suhu`, `kontrol`, `leveling`, `date`) VALUES
(1, 29, '0', 2, '0000-00-00 00:00:00'),
(2, 10, '0', 0, '2017-01-04 05:03:01'),
(3, 29, '0', 1, '2017-01-06 13:32:16'),
(4, 11, '0', 2, '2017-01-06 13:55:25'),
(5, 22, '0', 2, '2017-01-06 14:55:49'),
(6, 88, '0', 2, '2017-01-06 15:25:22'),
(7, 98, '1', 1, '2017-01-06 15:26:08'),
(8, 44, '0', 3, '2017-01-06 15:29:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_fan`
--
ALTER TABLE `tabel_fan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_fan`
--
ALTER TABLE `tabel_fan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
