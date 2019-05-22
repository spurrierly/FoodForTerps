-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2019 at 03:45 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodforterps`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `diet` varchar(100) DEFAULT NULL,
  `cuisine` varchar(100) DEFAULT NULL,
  `rate` int(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `address`, `diet`, `cuisine`, `rate`, `price`) VALUES
(1, 'Krazi Kebob', '4427 Lehigh Rd, College Park, MD 20740', 'halal, vegan, vegetarian', 'Pakastani', 4, 1),
(2, 'UMD Hillel', '7612 Mowatt Ln, College Park, MD 20740', 'kosher', 'Jewish', 5, 1),
(3, 'Nuvegan Café', '8150 Baltimore Ave, College Park, MD 20740', 'vegan, vegetarian', 'American', 4, 2),
(4, 'Jason\'s Deli', '7356 Baltimore Ave, College Park, MD 20740', 'vegetarian', 'American', 4, 2),
(5, 'Nandos Peri Peri\r\n', '7400 Baltimore Ave, College Park, MD 20740', 'vegetarian', 'African', 4, 3),
(6, 'Terrapin\'s Turf', '4410 Knox Road, College Park, MD 20740', 'none', 'Bar', 3, 1),
(7, 'RJ Bently\'s', '7323 Baltimore Ave, College Park, MD 20740', 'none', 'Bar', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
