-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 08:41 AM
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

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('Shifa', 'Shifa@123'),
('Shubham', 'shubham@123');

-- --------------------------------------------------------

--
-- Table structure for table `u_registration`
--

CREATE TABLE `u_registration` (
  `id` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Passwords` varchar(20) NOT NULL,
  `C_Name` text NOT NULL,
  `Address` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(10) NOT NULL,
  `Phone_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_registration`
--

INSERT INTO `u_registration` (`id`, `Username`, `Passwords`, `C_Name`, `Address`, `email`, `DOB`, `Gender`, `Age`, `Phone_no`) VALUES
(1, 'Shifa', 'Shifa@123', 'shifa,ayub,shikalgar', 'queens garden,pune,pune,maharashtra,india', 'shifashikalgar73@gmail.com', '1997-10-05', 'female', 21, '8552851888'),
(4, 'Shubham', 'shubham@123', 'shubham,shivaji,digole', 'ambegao,pune,pune,maharashtra,india', 'shubhamdigole@gmail.com', '1996-09-04', 'male', 22, '7767858952');

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
  ADD PRIMARY KEY (`id`,`Username`),
  ADD UNIQUE KEY `name` (`email`),
  ADD UNIQUE KEY `UNIQUE` (`Phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `u_registration`
--
ALTER TABLE `u_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
