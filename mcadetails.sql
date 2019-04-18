-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 03:36 PM
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
-- Database: `applicationportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcadetails`
--

CREATE TABLE `mcadetails` (
  `10_Board` varchar(255) NOT NULL,
  `10_Subjects` varchar(255) NOT NULL,
  `10_Passing_Year` year(4) NOT NULL,
  `10_Percentage` tinyint(2) NOT NULL,
  `10_Qualifying_State` varchar(250) NOT NULL,
  `12_Board` varchar(255) NOT NULL,
  `12_Subjects` varchar(255) NOT NULL,
  `12_Passing_Year` year(4) NOT NULL,
  `12_Percentage` tinyint(2) NOT NULL,
  `12_Qualifying_State` varchar(250) NOT NULL,
  `UG_University` varchar(255) NOT NULL,
  `UG_Subjects` varchar(255) NOT NULL,
  `UG_Graduation_Year` year(4) NOT NULL,
  `UG_Qualifying_State` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
