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
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerid` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `gender` text NOT NULL,
  `NID` text NOT NULL,
  `Education` text NOT NULL,
  `Experience` text NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerid`, `FullName`, `Email`, `Password`, `gender`, `NID`, `Education`, `Experience`, `DOB`) VALUES
(1, 'Bishal', 'bishal@gmail.com', '1234567', 'm', 'asdfasfasfa', '2', '1999-01-01', '0000-00-00'),
(2, 'nabil', 'nowsher.ali28@gmail.com', '123456', 'm', 'sdasdasasddas', 'sdasda', 'asdasd', '1999-01-01'),
(5, 'abcd', 'abc@gmail.com', '123456', 'm', 'sdasdasasddas', 'sdasda', 'asdasd', '1999-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
