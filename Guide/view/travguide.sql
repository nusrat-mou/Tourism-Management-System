-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 12:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `travguide`
--

CREATE TABLE `travguide` (
  `tgid` int(11) NOT NULL,
  `TravellerId` int(11) NOT NULL,
  `GuideId` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travguide`
--

INSERT INTO `travguide` (`tgid`, `TravellerId`, `GuideId`, `status`) VALUES
(1, 1, 1, 'confirmed'),
(2, 1, 2, 'cancelled'),
(3, 1, 3, 'confirmed'),
(4, 1, 4, 'confirmed'),
(5, 1, 5, 'confirmed'),
(6, 1, 5, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travguide`
--
ALTER TABLE `travguide`
  ADD PRIMARY KEY (`tgid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travguide`
--
ALTER TABLE `travguide`
  MODIFY `tgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
