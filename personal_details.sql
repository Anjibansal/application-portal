-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 10:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `Name` varchar(150) NOT NULL,
  `FathersName` varchar(150) NOT NULL,
  `MothersName` varchar(150) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Gender` varchar(6) NOT NULL DEFAULT 'Female',
  `Category1` varchar(4) NOT NULL,
  `Category2` varchar(4) NOT NULL,
  `Natonality` varchar(6) NOT NULL DEFAULT 'Indian',
  `ContactNumber` bigint(10) UNSIGNED NOT NULL,
  `AlternateContactNumber` bigint(10) UNSIGNED NOT NULL,
  `Email-id` varchar(320) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Pincode` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`Name`,`Email-id`),
  ADD UNIQUE KEY `unique` (`ContactNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
