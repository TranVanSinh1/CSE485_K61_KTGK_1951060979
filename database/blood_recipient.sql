-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 07:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktgk`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `reci_id` int(20) NOT NULL,
  `reci_name` varchar(30) NOT NULL,
  `reci_age` date NOT NULL,
  `reci_bgrp` varchar(30) NOT NULL,
  `reci_bqnty` varchar(20) NOT NULL,
  `reci_sex` varchar(5) NOT NULL,
  `reci_reg_date` date NOT NULL,
  `reci_phno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_recipient`
--

INSERT INTO `blood_recipient` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(1, 'Nguyễn Văn A', '2001-01-01', 'A', '10ml', 'Nam', '2021-09-10', '012457896');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`reci_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
