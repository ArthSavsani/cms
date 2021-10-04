-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 06:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `newuserlogin`
--

CREATE TABLE `newuserlogin` (
  `RollNo` int(11) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Enroll_No` int(9) NOT NULL,
  `home_address` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `mobilenumber` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newuserlogin`
--

INSERT INTO `newuserlogin` (`RollNo`, `Fullname`, `Enroll_No`, `home_address`, `gender`, `mobilenumber`, `dob`, `blood_group`, `branch`, `Password`, `email`) VALUES
(1, ' Radia Parth', 180002083, 'Madhuvan Park', 'M', 123456789, '2000-08-04', 'b+', 'COMPUTER ENGINEERING', '18000208', 'parth@gmail.com'),
(2, 'Savsani Arth ', 180002092, 'Avkar Society', 'M', 1478596231, '2000-08-11', 'b-', 'COMPUTER ENGINEERING', '18000209', 'arth@gmail.com'),
(3, ' Dhamecha Nikunj', 180002018, 'Kothariya', 'M', 148596237, '2001-04-11', 'a+', 'COMPUTER ENGINEERING', '18000201', 'nikunj@gmail.com'),
(4, 'Zatakiya Diksha', 180002117, 'mavdi', 'F', 145896327, '2001-04-22', 'o+', 'COMPUTER ENGINEERING', '18000211', 'diksha@gmail.com'),
(5, 'Padhiyar Bhumi', 180002071, 'Kothariya', 'F', 147859263, '2001-08-01', 'ab+', 'COMPUTER ENGINEERING', '18000207', 'bhumi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newuserlogin`
--
ALTER TABLE `newuserlogin`
  ADD PRIMARY KEY (`RollNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newuserlogin`
--
ALTER TABLE `newuserlogin`
  MODIFY `RollNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
