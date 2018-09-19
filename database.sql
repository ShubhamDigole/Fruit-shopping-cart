-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 08:53 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `u_registration`
--

CREATE TABLE `u_registration` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `C_Name` text NOT NULL,
  `Address` varchar(50) NOT NULL,
  `E-mail` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(10) NOT NULL,
  `Phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_registration`
--

INSERT INTO `u_registration` (`id`, `Username`, `Password`, `C_Name`, `Address`, `E-mail`, `DOB`, `Gender`, `Age`, `Phone_no`) VALUES
(1, 'user', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(2, 'user', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(3, 'user', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(4, 'user', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(5, 'user', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(6, 'user', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(7, 'user', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(9, 'shubham', '123456', 'shubham', '', '', '0000-00-00', '', 0, 0),
(10, 'shubham', '123456', '', '', '', '0000-00-00', '', 0, 0),
(11, '', '', '', '', '', '0000-00-00', '', 0, 0),
(12, '', '', '', '', '', '0000-00-00', '', 0, 0),
(13, 'shifa', '1234567', 'shifa', '', '', '0000-00-00', '', 0, 0),
(14, '', '', '', '', '', '0000-00-00', '', 0, 0),
(15, 'shifa', '1234567', 'shifa', '', '', '0000-00-00', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `u_registration`
--
ALTER TABLE `u_registration`
  ADD PRIMARY KEY (`id`,`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `u_registration`
--
ALTER TABLE `u_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
