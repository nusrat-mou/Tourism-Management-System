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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `DOB` date NOT NULL,
  `Gender` text NOT NULL,
  `Address` text NOT NULL,
  `WorkExperience` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `FullName`, `Email`, `Password`, `DOB`, `Gender`, `Address`, `WorkExperience`, `status`) VALUES
(1, 'Nabil27', 'nowsher.ali27@gmail.com', '123456', '1999-07-08', 'Male', 'sadasd', '1 Year', 'enabled'),
(3, 'Bishal Ahmed', 'bishal12@gmail.com', '123456', '1999-12-20', 'Male', 'sasdasd', '1 Year', 'enabled'),
(4, 'Jon Snow', 'jon@gmail.com', '123456', '1994-02-01', 'Male', 'sasdasd', '2 Years or More', 'enabled'),
(5, 'Nusrat Mou', 'nusrat@gmail.com', '123456', '1998-01-01', 'Female', 'sasdasdasdas', '1 Year', 'enabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
