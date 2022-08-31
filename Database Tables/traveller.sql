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
-- Table structure for table `traveller`
--

CREATE TABLE `traveller` (
  `TravellerId` int(4) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `PassportNumber` text NOT NULL,
  `PhoneNumber` text NOT NULL,
  `DOB` date NOT NULL,
  `Gender` text NOT NULL,
  `ProfilePicture` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traveller`
--

INSERT INTO `traveller` (`TravellerId`, `FullName`, `Email`, `Password`, `PassportNumber`, `PhoneNumber`, `DOB`, `Gender`, `ProfilePicture`, `status`) VALUES
(1, 'Mohammed Nawshar Ali Khan Nabil', 'nowsher.ali28@gmail.com', '123456', 'abcdefghi', '01777975503', '1999-08-07', 'male', '../IMG/jon2.png', 'enabled'),
(14, 'Tyrion lannister', 'tyrion@gmail.com', '123456', 'abcdefghi', '01727821283', '1994-02-09', 'male', '../files/tyrion.jpg', 'enabled'),
(16, 'Ali', 'ali6208@yahoo.com', '123456', 'asdasdssd', '01727821282', '1999-01-01', 'male', '../files/1.jpg', 'enabled'),
(17, 'Nabil', 'nowsher.ali11@gmail.com', '123456', 'abcdefghi', '01777975503', '1999-01-01', 'male', '../IMG/img3.jpg', 'enabled'),
(18, 'Ned Stark', 'ned@gmail.com', '123456', 'sadasdasdsdadsd', '01727821283', '1992-01-01', 'male', '../IMG/background1.jpg', 'enabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traveller`
--
ALTER TABLE `traveller`
  ADD PRIMARY KEY (`TravellerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traveller`
--
ALTER TABLE `traveller`
  MODIFY `TravellerId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
