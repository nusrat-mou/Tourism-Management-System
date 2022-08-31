-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 09:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pdesc` text NOT NULL,
  `cost` int(11) NOT NULL,
  `sdate` date DEFAULT NULL,
  `edate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `pname`, `pdesc`, `cost`, `sdate`, `edate`) VALUES
(1, 'Sajek Tour', 'Sajke', 4000, '2021-08-19', '2021-08-27'),
(2, 'Cox\'s Bazar Tour', 'faafafaf', 1300, '2021-02-04', '2021-02-07'),
(3, 'Saint Martin Tour', '1234', 2000, '2021-03-02', '2021-03-17'),
(14, 'Bandarban', 'dasdasda', 1200, '2021-01-01', '2022-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
