-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 08:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `orderno` varchar(20) NOT NULL,
  `shopno` int(6) NOT NULL,
  `rating` int(11) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` int(10) NOT NULL,
  `d_pass` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `vetype` int(11) NOT NULL,
  `pincode` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`username`, `email`, `mob`, `d_pass`, `name`, `vetype`, `pincode`) VALUES
('abc', '', 9426217, 'pass', 'rhutwi', 6, 360005),
('abc1', '', 0, 'ranpass', 'name', 3, 388120),
('abc2', '', 999889, 'pass', 'Sapa', 2, 370020),
('abc3', '', 999889, 'pass', 'Sapa', 2, 370020),
('hello', '', 999889, 'pass', 'Sapa', 2, 370020),
('Username', '', 999889, 'pass', 'Sapa', 2, 370020),
('Username3', '', 999889, 'password', 'Sapa', 2, 370020);

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE `payout` (
  `duname` varchar(11) NOT NULL,
  `no_of_trips` int(11) NOT NULL,
  `touchpoints` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`duname`, `no_of_trips`, `touchpoints`, `bonus`, `date`) VALUES
('abc', 4, 15, 100, '2020-02-26'),
('abc', 5, 18, 200, '2020-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `type` varchar(10) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
