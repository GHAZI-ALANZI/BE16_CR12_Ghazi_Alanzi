-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 09:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr12_lacasamia_ghazi`
--
CREATE DATABASE IF NOT EXISTS `be16_cr12_lacasamia_ghazi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be16_cr12_lacasamia_ghazi`;

-- --------------------------------------------------------

--
-- Table structure for table `lacasamia`
--

CREATE TABLE `lacasamia` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `latitude` decimal(10,5) DEFAULT NULL,
  `longitude` decimal(10,5) DEFAULT NULL,
  `reduction` varchar(20) DEFAULT NULL,
  `describtion` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lacasamia`
--

INSERT INTO `lacasamia` (`id`, `image`, `address`, `latitude`, `longitude`, `reduction`, `describtion`, `price`, `status`, `area`) VALUES
(1, 'php4C39.tmp.jpg', 'Hütteldorfer Str. 309-299', '48.19801', '16.27815', 'No', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum voluptates omnis quos at ut sed, deleniti doloremque delectus quisquam quis illum reprehenderit ipsum corporis aliquid quas quasi! Officiis, nemo.', 12500, 'Available', 60),
(2, 'phpA4EF.tmp.webp', 'Linzer Str. 291-289', '48.19620', '16.27780', 'Yes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum voluptates omnis quos at ut sed, deleniti doloremque delectus quisquam quis illum reprehenderit ipsum corporis aliquid quas quasi! Officiis, nemo.', 100000, 'Available', 125),
(3, 'phpDEF2.tmp.jpg', 'Waidhausenstraße 25, 1140 Wien', '48.19859', '16.28000', 'Yes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum voluptates omnis quos at ut sed, deleniti doloremque delectus quisquam quis illum reprehenderit ipsum corporis aliquid quas quasi! Officiis, nemo.', 258000, 'Not available', 60),
(4, 'phpBB06.tmp.jpg', 'Kefergasse 21-17', '48.19630', '16.27900', 'No', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum voluptates omnis quos at ut sed, deleniti doloremque delectus quisquam quis illum reprehenderit ipsum corporis aliquid quas quasi! Officiis, nemo.', 25588, 'Available', 60),
(5, 'php394.tmp.jpg', 'Bauernmarkt Bad Hall', '48.19423', '16.28030', 'Yes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum voluptates omnis quos at ut sed, deleniti doloremque delectus quisquam quis illum reprehenderit ipsum corporis aliquid quas quasi! Officiis, nemo.', 11240, 'Not available', 60),
(6, 'php457B.tmp.jpg', 'Auhofstraße 87-77', '48.18980', '16.27780', 'Yes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum voluptates omnis quos at ut sed, deleniti doloremque delectus quisquam quis illum reprehenderit ipsum corporis aliquid quas quasi! Officiis, nemo.', 20000, 'Available', 122);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lacasamia`
--
ALTER TABLE `lacasamia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lacasamia`
--
ALTER TABLE `lacasamia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
