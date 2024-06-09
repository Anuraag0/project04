-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3305
-- Generation Time: Dec 21, 2023 at 10:08 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scraptodb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `dt`) VALUES
('anuragdayma04@gmail.com', '88888888', '2023-12-20 09:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `scraptodb`
--

CREATE TABLE `scraptodb` (
  `srno` int(3) NOT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `middelname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `mob` varchar(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `areapin` varchar(6) NOT NULL,
  `stime` time(5) NOT NULL,
  `date` date NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scraptodb`
--

INSERT INTO `scraptodb` (`srno`, `firstname`, `middelname`, `lastname`, `mob`, `address`, `EMAIL`, `areapin`, `stime`, `date`, `dt`) VALUES
(1, 'ABC', 'CDS', 'FFSD', '9875643442', 'MOTII, NAGAR LATUR', 'THIS@THISGMAIL.COM', '321413', '12:00:00.00000', '2023-12-12', '2023-12-19 17:00:13'),
(4, 'abc', 'asd', 'asd', '7498799692', 'adffg', 'anuragsharmaff35@gmail.co', '223455', '11:18:00.00000', '2023-12-20', '2023-12-20 11:40:27'),
(5, 'pawan', 'suryakant', 'mortale', '7558644975', 'jambh', 'pawan111@gmail.com', '431716', '12:43:00.00000', '2023-12-20', '2023-12-20 11:44:21'),
(8, 'abc', 'asd', 'asd', '7498799692', 'jambh', 'rameshwarkumbhar1011@gmai', '223455', '04:29:00.00000', '2024-01-03', '2023-12-20 14:30:03'),
(9, 'sk', 'b', 'k', '7498799692', 'latur', 'shazia41@gmail.com', '254141', '15:58:00.00000', '2023-12-20', '2023-12-20 14:57:55'),
(10, 'a', 's', 'd', '3324553466', 'asd', 'anuragdayma04@gmail.com', '321432', '16:44:00.00000', '2023-12-20', '2023-12-20 16:42:18'),
(11, 'virat', 'viraj', 'kohli', '987654321', 'mumbai', 'viratkohli@gmail.com', '400012', '13:33:00.00000', '2023-12-21', '2023-12-21 11:29:59'),
(13, 'q', 'q', 'q', '345678903', 'jambh', 'anu@gmail.com', '223455', '23:39:00.00000', '2023-12-21', '2023-12-21 11:33:13'),
(14, 'dg', 'asd', 'kohli', '7558644975', 'mumbai', 'an@gmail.com', '223455', '23:49:00.00000', '2023-12-21', '2023-12-21 11:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `scraptodb`
--
ALTER TABLE `scraptodb`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scraptodb`
--
ALTER TABLE `scraptodb`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
