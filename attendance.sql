-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 04:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `attendance_status` varchar(20) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `roll_no`, `student_name`, `attendance_status`, `date_created`, `date_modified`) VALUES
(1, 180002083, 'Parth Radia', 'Present', '2020-03-14 03:48:36', '2020-03-14 03:48:36'),
(2, 180002092, ' Arth Savsani', 'Present', '2020-03-14 03:48:36', '2020-03-14 03:48:36'),
(3, 180002117, 'Diksha Zatakiya', 'Present', '2020-03-14 03:48:36', '2020-03-14 03:48:36'),
(4, 180002018, 'Dhamecha Nikunj', 'Present', '2020-03-14 03:48:36', '2020-03-14 03:48:36'),
(5, 180002071, 'Padhiyar Bhumi', 'Present', '2020-03-14 03:48:36', '2020-03-14 03:48:36'),
(6, 180002083, 'Parth Radia', 'Present', '2020-03-14 03:50:51', '2020-03-14 03:50:51'),
(7, 180002092, ' Arth Savsani', 'Absent', '2020-03-14 03:50:51', '2020-03-14 03:50:51'),
(8, 180002117, 'Diksha Zatakiya', 'Present', '2020-03-14 03:50:51', '2020-03-14 03:50:51'),
(9, 180002018, 'Dhamecha Nikunj', 'Absent', '2020-03-14 03:50:51', '2020-03-14 03:50:51'),
(10, 180002071, 'Padhiyar Bhumi', 'Present', '2020-03-14 03:50:51', '2020-03-14 03:50:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
