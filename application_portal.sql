-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 01:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bba_details`
--

CREATE TABLE `bba_details` (
  `Application_No` int(4) NOT NULL,
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
  `Pincode` int(6) UNSIGNED NOT NULL,
  `Board_Tenth` varchar(255) NOT NULL,
  `Subject_Tenth` varchar(255) NOT NULL,
  `Year_of_completion_Tenth` year(4) NOT NULL,
  `Percentage_Tenth` tinyint(2) NOT NULL,
  `Board_Twelfth` varchar(255) NOT NULL,
  `Subject_Twelfth` varchar(255) NOT NULL,
  `Year_of_completion_Twelfth` year(4) NOT NULL,
  `Percentage_Twelfth` tinyint(2) NOT NULL,
  `Transaction_Number` bigint(35) NOT NULL,
  `Transaction_Reference` varchar(45) NOT NULL,
  `Transaction_Date` date NOT NULL,
  `Upload_Photo` varbinary(255) NOT NULL,
  `Upload_Signature` varbinary(255) NOT NULL,
  `Upload_Thumb_Impression` varbinary(255) NOT NULL,
  `Upload_Fee_Reciept` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Application_No` int(4) NOT NULL,
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
  `Pincode` int(6) UNSIGNED NOT NULL,
  `Board_Tenth` varchar(255) NOT NULL,
  `Subject_Tenth` varchar(255) NOT NULL,
  `Year_of_completion_Tenth` year(4) NOT NULL,
  `Percentage_Tenth` tinyint(2) NOT NULL,
  `Board_Twelfth` varchar(255) NOT NULL,
  `Subject_Twelfth` varchar(255) NOT NULL,
  `Year_of_completion_Twelfth` year(4) NOT NULL,
  `Percentage_Twelfth` tinyint(2) NOT NULL,
  `University_UG` varchar(255) NOT NULL,
  `Subject_UG` varchar(255) NOT NULL,
  `Year_of_graduation_UG` year(4) NOT NULL,
  `Percentage_UG` tinyint(2) NOT NULL,
  `Gate` varchar(10) NOT NULL,
  `RollNo` int(11) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Paper` varchar(255) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Rank` int(11) DEFAULT NULL,
  `Preference1` varchar(255) NOT NULL,
  `Preference2` varchar(255) NOT NULL,
  `Preference3` varchar(255) NOT NULL,
  `Preference4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mca_details`
--

CREATE TABLE `mca_details` (
  `Application_No` int(4) NOT NULL,
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
  `Pincode` int(6) UNSIGNED NOT NULL,
  `Board_Tenth` varchar(255) NOT NULL,
  `Subject_Tenth` varchar(255) NOT NULL,
  `Year_of_completion_Tenth` year(4) NOT NULL,
  `Percentage_Tenth` tinyint(2) NOT NULL,
  `Board_Twelfth` varchar(255) NOT NULL,
  `Subject_Twelfth` varchar(255) NOT NULL,
  `Year_of_completion_Twelfth` year(4) NOT NULL,
  `Percentage_Twelfth` tinyint(2) NOT NULL,
  `University_UG` varchar(45) NOT NULL,
  `Subject_UG` varchar(45) NOT NULL,
  `Year_of_graduation_UG` varchar(45) NOT NULL,
  `Percentage_UG` text NOT NULL,
  `Transaction_Number` bigint(35) NOT NULL,
  `Transaction_Reference` varchar(45) NOT NULL,
  `Transaction_Date` date NOT NULL,
  `Upload_Photo` varbinary(255) NOT NULL,
  `Upload_Signature` varbinary(255) NOT NULL,
  `Upload_Thumb_Impression` varbinary(255) NOT NULL,
  `Upload_Fee_Reciept` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mplan_details`
--

CREATE TABLE `mplan_details` (
  `Application_No` int(4) NOT NULL,
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
  `Pincode` int(6) UNSIGNED NOT NULL,
  `Board_Tenth` varchar(255) NOT NULL,
  `Subject_Tenth` varchar(255) NOT NULL,
  `Year_of_completion_Tenth` year(4) NOT NULL,
  `Percentage_Tenth` tinyint(2) NOT NULL,
  `Board_Twelfth` varchar(255) NOT NULL,
  `Subject_Twelfth` varchar(255) NOT NULL,
  `Year_of_completion_Twelfth` year(4) NOT NULL,
  `Percentage_Twelfth` tinyint(2) NOT NULL,
  `University_UG` varchar(45) NOT NULL,
  `Subject_UG` varchar(45) NOT NULL,
  `Year_of_graduation_UG` varchar(45) NOT NULL,
  `Percentage_UG` text NOT NULL,
  `Gate` varchar(10) NOT NULL,
  `RollNo` varchar(45) NOT NULL,
  `Year` varchar(45) NOT NULL,
  `Paper` varchar(45) NOT NULL,
  `Score` int(10) NOT NULL,
  `Rank` bigint(20) NOT NULL,
  `Transaction_Number` bigint(35) NOT NULL,
  `Transaction_Reference` varchar(45) NOT NULL,
  `Transaction_Date` date NOT NULL,
  `Upload_Photo` varbinary(255) NOT NULL,
  `Upload_Signature` varbinary(255) NOT NULL,
  `Upload_Thumb_Impression` varbinary(255) NOT NULL,
  `Upload_Fee_Reciept` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phd_details`
--

CREATE TABLE `phd_details` (
  `Application_No` int(4) NOT NULL,
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
  `Pincode` int(6) UNSIGNED NOT NULL,
  `Board_Tenth` varchar(255) NOT NULL,
  `Subject_Tenth` varchar(255) NOT NULL,
  `Year_of_completion_Tenth` year(4) NOT NULL,
  `Percentage_Tenth` tinyint(2) NOT NULL,
  `Board_Twelfth` varchar(255) NOT NULL,
  `Subject_Twelfth` varchar(255) NOT NULL,
  `Year_of_completion_Twelfth` year(4) NOT NULL,
  `Percentage_Twelfth` tinyint(2) NOT NULL,
  `University_UG` varchar(45) NOT NULL,
  `Subject_UG` varchar(45) NOT NULL,
  `Year_of_graduation_UG` varchar(45) NOT NULL,
  `Percentage_UG` text NOT NULL,
  `University_PG` varchar(45) NOT NULL,
  `Subject_PG` varchar(45) NOT NULL,
  `Year_of_graduation_PG` varchar(45) NOT NULL,
  `Percentage_PG` varchar(45) NOT NULL,
  `Noofpublication_conference` varchar(45) NOT NULL,
  `Noofpublication_journal` varchar(45) NOT NULL,
  `Experience_organisation` varchar(45) NOT NULL,
  `Experience_Duration` varchar(45) NOT NULL,
  `Experience_Role` varchar(45) NOT NULL,
  `Preference1` varchar(45) NOT NULL,
  `Preference2` varchar(45) NOT NULL,
  `Preference3` varchar(45) NOT NULL,
  `Preference4` varchar(45) NOT NULL,
  `Transaction_Number` bigint(35) NOT NULL,
  `Transaction_Reference` varchar(45) NOT NULL,
  `Transaction_Date` date NOT NULL,
  `Upload_Photo` varbinary(255) NOT NULL,
  `Upload_Signature` varbinary(255) NOT NULL,
  `Upload_Thumb_Impression` varbinary(255) NOT NULL,
  `Upload_Fee_Reciept` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bba_details`
--
ALTER TABLE `bba_details`
  ADD PRIMARY KEY (`Application_No`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Application_No`);

--
-- Indexes for table `mca_details`
--
ALTER TABLE `mca_details`
  ADD PRIMARY KEY (`Application_No`);

--
-- Indexes for table `phd_details`
--
ALTER TABLE `phd_details`
  ADD PRIMARY KEY (`Application_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
