-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 06:42 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphic_designers`
--

-- --------------------------------------------------------

--
-- Table structure for table `toon`
--

CREATE TABLE `toon` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `toon` varchar(255) NOT NULL,
  `toonist_id` int(255) DEFAULT NULL,
  `date1` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toon`
--

INSERT INTO `toon` (`id`, `caption`, `toon`, `toonist_id`, `date1`, `username`) VALUES
(5, 'PEOPLE', 'wristwatchonhand.jpeg', 1, '2019-11-09 13:27:49', 'chris'),
(6, 'PEOPLE', 'Nike_Air_Force_1_Low_CMFT_Equality_White_Black_AQ2118_100_9605_720x-1-600x600.jpg\"', 1, '2019-11-09 13:28:12', 'emerald'),
(26, 'hello people', 'Moncler_The_Bubble_Sneaker_White_Blue_Red__0736_540x.jpg', 1, '2019-11-12 18:18:27', ''),
(27, 'hello people', 'Black_White_BV4594_001_6872_540x.jpg', 1, '2019-11-14 20:19:37', ''),
(28, 'thanks for accepting me', 'watch 3.jpeg', 0, '2019-11-14 21:06:35', ''),
(29, 'thanks giving', 'Nike_Air_Force_1_Low_CMFT_Equality_White_Black_AQ2118_100_9605_720x-1-600x600.jpg', 0, '2019-11-14 21:11:55', ''),
(30, 'shuuuu', 'watch 3.jpeg', 0, '2019-11-14 21:15:24', ''),
(31, 'showcase', 'wristwatchonhand.jpeg', 0, '2019-11-16 15:04:14', '');

-- --------------------------------------------------------

--
-- Table structure for table `toonist`
--

CREATE TABLE `toonist` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `datejoined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toonist`
--

INSERT INTO `toonist` (`id`, `username`, `pass`, `logo`, `phone`, `facebook`, `datejoined`) VALUES
(1, 'igwezehycient', '202cb962ac59075b964b07152d234b70', '', 90, 'emeraldhycient', '2019-11-13 21:15:52'),
(2, 'raldinc', '81b073de9370ea873f548e31b8adc081', '', 90, 'emeraldhycient', '2019-11-13 21:23:24'),
(3, 'raldinc', '827ccb0eea8a706c4c34a16891f84e7b', '', 123, 'emeraldhycient', '2019-11-13 21:25:56'),
(4, 'mycomp', '098f6bcd4621d373cade4e832627b4f6', '', 45, 'testing', '2019-11-13 21:27:27'),
(5, 'codco', '$2y$10$pEhHSSDZfIxB17blGdiWXOGOAmwfC9FGxYGGVDSVfM7M7QuO5Q2ie', 'Black_White_BV4594_001_6872_540x.jpg', 708864, 'commado', '2019-11-14 19:55:32'),
(6, 'peopleincome', '$2y$10$XEejUhVACpRJhWAxpnBqyu5WCNqpqHJO1ntQDp.e9WzcH5MUo.wfm', 'watch1.jpeg', 38957463, 'commado', '2019-11-14 20:25:44'),
(7, 'chemlaber', '$2y$10$jM2Lrfq5/mtMsQ4EK8zVu.GkRIlD/XMWHIDx9ObIGCNeEIunp2knW', 'watch 3.jpeg', 974633, 'test burea', '2019-11-14 21:06:01'),
(8, 'mepeople', '$2y$10$vqZmz5GauDQFY98fWCzOIe3SEpW816Sae1eeXOkhHYjdKH7prPFnO', 'Black_White_BV4594_001_6872_540x - Copy.jpg', 1234567, 'test burea', '2019-11-14 21:24:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toon`
--
ALTER TABLE `toon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toonist`
--
ALTER TABLE `toonist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `datejoined` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toon`
--
ALTER TABLE `toon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `toonist`
--
ALTER TABLE `toonist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
