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
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `GuideId` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `NID` text NOT NULL,
  `gender` text NOT NULL,
  `DOB` date NOT NULL,
  `language` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`GuideId`, `FullName`, `Email`, `Password`, `NID`, `gender`, `DOB`, `language`, `status`) VALUES
(4, 'Phoebe Buffay', 'p_buffay@gmail.com', '123456', 'asasasasaf', 'female', '1998-07-12', 'English', 'enabled'),
(11, 'Monica Geller', 'm.geller@gmail.com', '123456', 'asasasasa', 'female', '1990-08-24', 'English', 'pending'),
(13, 'Nusrat Jahan Mou', 'nmou@gmail.com', '123456', '22222223333', 'female', '1998-07-28', 'English', 'pending'),
(15, 'Chandler Bing', 'c.bing@gmail.com', '123456', '99999999999', 'male', '2021-08-19', 'English', 'pending'),
(16, 'Rachel Green', 'rach.green@gmail.com', '123456', '3333333333', 'female', '1990-08-18', 'English', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`GuideId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `GuideId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
