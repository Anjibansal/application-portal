-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 05:01 PM
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
-- Database: `application portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `educational_details`
--

CREATE TABLE `educational_details` (
  `10 Board` varchar(255) NOT NULL,
  `10 Subjects` varchar(255) NOT NULL,
  `10 Year of completion` year(4) NOT NULL,
  `10 Percentage` tinyint(2) NOT NULL,
  `12 Board` varchar(255) NOT NULL,
  `12 Subjects` varchar(255) NOT NULL,
  `12 Year of completion` year(4) NOT NULL,
  `12 Percentage` tinyint(2) NOT NULL,
  `UG University` varchar(255) NOT NULL,
  `UG Subjects` varchar(255) NOT NULL,
  `Year of graduation` year(4) NOT NULL,
  `Gate` tinyint(1) NOT NULL,
  `Roll no` int(11) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Paper` varchar(255) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Rank` int(11) DEFAULT NULL,
  `Preference 1` varchar(255) NOT NULL,
  `Preference 2` varchar(255) NOT NULL,
  `Preference 3` varchar(255) NOT NULL,
  `Preference 4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
