-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 05:37 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `name` text,
  `EXAMINATION` varchar(50) NOT NULL,
  `HELD_IN` varchar(15) NOT NULL,
  `SEAT_NUMBER` int(7) NOT NULL,
  `REGISTRATION_NO.` int(11) NOT NULL,
  `Email_ID` varchar(30) NOT NULL,
  `COURSE_CODE` varchar(6) NOT NULL,
  `COURSE_TITLE` varchar(25) NOT NULL,
  `COURSE_CREDITS` int(4) NOT NULL,
  `ESE/PR/OR` text NOT NULL,
  `IA/TW` text NOT NULL,
  `OVERALL` text NOT NULL,
  `CREDIT EARNED(C)` int(2) NOT NULL,
  `GRADE POINTS(G)` int(2) NOT NULL,
  `CXG` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`SEAT_NUMBER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
