-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 01:04 PM
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
-- Table structure for table `anuja`
--

CREATE TABLE `anuja` (
  `id` int(10) UNSIGNED NOT NULL,
  `Fruitname` varchar(30) NOT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Price` int(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `Curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anuja`
--

INSERT INTO `anuja` (`id`, `Fruitname`, `Quantity`, `Price`, `Total`, `Curdate`) VALUES
(7, 'Banana', 2, 100, 200, '0000-00-00'),
(8, 'Cherry', 10, 256, 2560, '0000-00-00'),
(9, 'mango', 15, 157, 2355, '0000-00-00'),
(10, 'Cherry', 15, 256, 3840, '0000-00-00'),
(11, 'Cherry', 150, 256, 38400, '0000-00-00'),
(12, 'Cherry', 150, 256, 38400, '0000-00-00'),
(13, 'mango', 12, 157, 1884, '0000-00-00'),
(14, 'Banana', 2, 125, 250, '0000-00-00'),
(15, 'Apple', 2, 180, 360, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Srno` int(9) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Srno`, `Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES
(1, '', '', '0', '', ''),
(13, '', '', '4567890', 'gjj', 'dfghjkl;'),
(16, '', '', '2147483647', 'subject', 'fdkjfklajff'),
(17, '', '', '2147483647', 'hiii', 'ugach timepass'),
(18, '', '', '0', 'sdas', 'sdsfds'),
(19, '', '', '0', 'asdfgh', ''),
(23, '', '', '0', 'asdfgh', ''),
(24, 'dsdfgsdsfgf', 'shubhamdigolse@gmail.com', '0', 'asdfgh', ''),
(25, 'dsdfgsdsfgf', 'shubhamdigolse@gmail.com', '', 'asdfgh', ''),
(26, 'dsdfgsdsfgf', 'shubhamdigolse@gmail.com', '9798999875', 'asdfgh', 'sdfgh'),
(27, 'dsdfgsdsfgf', 'shubhamdigolse@gmail.com', '9798999875', 'asdfgh', 'sdfgh'),
(28, 'dsdfgsdsfgf', 'shubhamdigolse@gmail.com', '9798999875', 'asdfgh', 'sdfgh'),
(29, '', '', '', '', ''),
(30, 'shifa', 'shubhamdigole@gmail.com', '7767858952', 'ertyuio', 'erty');

-- --------------------------------------------------------

--
-- Table structure for table `fruitdata`
--

CREATE TABLE `fruitdata` (
  `id` int(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Discription` varchar(300) NOT NULL,
  `ImgURl` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Qty_pur` int(10) NOT NULL,
  `Price` int(6) NOT NULL,
  `pur_price` int(6) NOT NULL,
  `sold_items` int(10) NOT NULL,
  `profit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruitdata`
--

INSERT INTO `fruitdata` (`id`, `Name`, `Discription`, `ImgURl`, `Quantity`, `Qty_pur`, `Price`, `pur_price`, `sold_items`, `profit`) VALUES
(1, 'Banana', 'yellow color fruit', 'http://localhost/Fruit-shopping-cart/img/banana.jpg', 43, 0, 125, 110, 2, 900),
(2, 'Apple', 'red color fruit', 'http://localhost/Fruit-shopping-cart/img/redapple.jpg', 147, 0, 180, 150, 63, 1890),
(3, 'Cherry', '152', 'http://localhost/Fruit-shopping-cart/img/cherry.jpg', 84, 0, 256, 240, 150, 0),
(4, 'mango', 'summer fruit', 'http://localhost/Fruit-shopping-cart/img/mango.jpg', 15, 0, 157, 145, 12, 480),
(5, 'Grapes', 'GRAPES', 'http://localhost/Fruit-shopping-cart/img/blackgrapes.jpg', 256, 0, 100, 90, 10, 0),
(6, 'Strawberry', 'red fruit', 'http://localhost/Fruit-shopping-cart/img/straw.jpg', 100, 0, 450, 430, 25, 0),
(7, 'kivi', 'fgfdhjskk', 'http://localhost/Fruit-shopping-cart/img/slider-1.jpg', 100, 0, 130, 115, 56, 0),
(8, 'dsddf', 'ssf ', 'http://localhost/Fruit-shopping-cart/img/best-food-fruit-image.jpg', 100, 0, 150, 120, 52, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`) VALUES
(44, 'anuja', '123456'),
(45, 'anuja', '123456'),
(46, 'Anuja', '123456'),
(47, 'Anuja', '123456'),
(48, 'anuja', 'anuja@123'),
(49, 'anuja', 'anuja@123'),
(50, 'anuja', 'anuja@123'),
(51, 'anuja', 'anuja@123'),
(52, 'anuja', 'anuja@123'),
(53, 'anuja', 'anuja@123'),
(54, 'anuja', 'anuja@123'),
(55, 'priyanka', 'priyanka@123'),
(56, 'anuja', 'Anuja@123'),
(57, 'priyanka', 'priyanka@123'),
(58, 'anuja', 'anuja@123'),
(59, 'priyanka', 'priyanka@123'),
(60, 'priyanka', 'priyanka@123'),
(61, 'priyanka', 'priyanka@123'),
(62, 'priyanka', 'priyanka@123'),
(63, 'anuja', 'anuja@123');

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
  `Phone_no` varchar(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_registration`
--

INSERT INTO `u_registration` (`id`, `Username`, `Passwords`, `C_Name`, `Address`, `email`, `DOB`, `Gender`, `Age`, `Phone_no`, `date`) VALUES
(1, 'Shifa', 'Shifa@123', 'shifa,ayub,shikalgar', 'queens garden,pune,pune,maharashtra,india', 'shifashikalgar73@gmail.com', '1997-10-05', 'female', 21, '8552851888', '0000-00-00'),
(4, 'Shubham', 'shubham@123', 'shubham shivaji digole', 'ambegao,pune,pune,maharashtra,india', 'shubhamdigole@gmail.com', '1996-09-04', 'male', 22, '7767858952', '0000-00-00'),
(8, 'priyanka', 'priyanka@123', 'Priyanka Pradeep  Nafad', 'karad,karad,Satara,maharashtra,india', 'priyankanafad123@gmail.com', '1997-10-04', 'female', 22, '9822308483', '0000-00-00'),
(9, 'AliyaMunaf', '123456', 'Alia Munaf Mulla', 'chinchawad,pune,pune,maharashtra,india', 'aliya.jamadar2009@gmail.com', '1991-09-27', 'female', 28, '8421347177', '0000-00-00'),
(15, 'anuja', 'Anuja@123', 'Anuja Popale', 'hadapsar,pune,pune,maharashtra,india', 'anujapopale@gmail.com', '1997-02-28', 'female', 21, '8527419632', '2018-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuja`
--
ALTER TABLE `anuja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `fruitdata`
--
ALTER TABLE `fruitdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `anuja`
--
ALTER TABLE `anuja`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Srno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `fruitdata`
--
ALTER TABLE `fruitdata`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `u_registration`
--
ALTER TABLE `u_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
