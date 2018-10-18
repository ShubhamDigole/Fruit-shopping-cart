-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 11:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
(15, 'Apple', 2, 180, 360, '0000-00-00'),
(16, 'Grapes', 10, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `state_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `state_id`, `state_name`) VALUES
(1, 'Adilabad', 32, 'Telangana'),
(2, 'Agra', 34, 'Uttar Pradesh'),
(3, 'Ahmed Nagar', 21, 'Maharashtra'),
(4, 'Ahmedabad City', 12, 'Gujarat'),
(5, 'Aizawl', 24, 'Mizoram'),
(6, 'Ajmer', 29, 'Rajasthan'),
(7, 'Akola', 21, 'Maharashtra'),
(8, 'Aligarh', 34, 'Uttar Pradesh'),
(9, 'Allahabad', 34, 'Uttar Pradesh'),
(10, 'Alleppey', 18, 'Kerala'),
(11, 'Almora', 35, 'Uttarakhand'),
(12, 'Alwar', 29, 'Rajasthan'),
(13, 'Alwaye', 18, 'Kerala'),
(14, 'Amalapuram', 2, 'Andhra Pradesh'),
(15, 'Ambala', 13, 'Haryana'),
(16, 'Ambedkar Nagar', 34, 'Uttar Pradesh'),
(17, 'Amravati', 21, 'Maharashtra'),
(18, 'Amreli', 12, 'Gujarat'),
(19, 'Amritsar', 28, 'Punjab'),
(20, 'Anakapalle', 2, 'Andhra Pradesh'),
(21, 'Anand', 12, 'Gujarat'),
(22, 'Anantapur', 2, 'Andhra Pradesh'),
(23, 'Ananthnag', 15, 'Jammu & Kashmir'),
(24, 'Anna Road H.O', 31, 'Tamil Nadu'),
(25, 'Arakkonam', 31, 'Tamil Nadu'),
(26, 'Asansol', 36, 'West Bengal'),
(27, 'Aska', 26, 'Odisha'),
(28, 'Auraiya', 34, 'Uttar Pradesh'),
(29, 'Aurangabad', 21, 'Maharashtra'),
(30, 'Aurangabad(Bihar)', 5, 'Bihar'),
(31, 'Azamgarh', 34, 'Uttar Pradesh'),
(32, 'Bagalkot', 17, 'Karnataka'),
(33, 'Bageshwar', 35, 'Uttarakhand'),
(34, 'Bagpat', 34, 'Uttar Pradesh'),
(35, 'Bahraich', 34, 'Uttar Pradesh'),
(36, 'Balaghat', 20, 'Madhya Pradesh'),
(37, 'Balangir', 26, 'Odisha'),
(38, 'Balasore', 26, 'Odisha'),
(39, 'Ballia', 34, 'Uttar Pradesh'),
(40, 'Balrampur', 34, 'Uttar Pradesh'),
(41, 'Banasanktha', 12, 'Gujarat'),
(42, 'Banda', 34, 'Uttar Pradesh'),
(43, 'Bandipur', 15, 'Jammu & Kashmir'),
(44, 'Bankura', 36, 'West Bengal'),
(45, 'Banswara', 29, 'Rajasthan'),
(46, 'Barabanki', 34, 'Uttar Pradesh'),
(47, 'Baramulla', 15, 'Jammu & Kashmir'),
(48, 'Baran', 29, 'Rajasthan'),
(49, 'Bardoli', 12, 'Gujarat'),
(50, 'Bareilly', 34, 'Uttar Pradesh'),
(51, 'Barmer', 29, 'Rajasthan'),
(52, 'Barnala', 28, 'Punjab'),
(53, 'Barpeta', 4, 'Assam'),
(54, 'Bastar', 7, 'Chattisgarh'),
(55, 'Basti', 34, 'Uttar Pradesh'),
(56, 'Bathinda', 28, 'Punjab'),
(57, 'Beed', 21, 'Maharashtra'),
(58, 'Begusarai', 5, 'Bihar'),
(59, 'Belgaum', 17, 'Karnataka'),
(60, 'Bellary', 17, 'Karnataka'),
(61, 'Bengaluru East', 17, 'Karnataka'),
(62, 'Bengaluru South', 17, 'Karnataka'),
(63, 'Bengaluru West', 17, 'Karnataka'),
(64, 'Berhampur', 26, 'Odisha'),
(65, 'Bhadrak', 26, 'Odisha'),
(66, 'Bhagalpur', 5, 'Bihar'),
(67, 'Bhandara', 21, 'Maharashtra'),
(68, 'Bharatpur', 29, 'Rajasthan'),
(69, 'Bharuch', 12, 'Gujarat'),
(70, 'Bhavnagar', 12, 'Gujarat'),
(71, 'Bhilwara', 29, 'Rajasthan'),
(72, 'Bhimavaram', 2, 'Andhra Pradesh'),
(73, 'Bhiwani', 13, 'Haryana'),
(74, 'Bhojpur', 5, 'Bihar'),
(75, 'Bhopal', 20, 'Madhya Pradesh'),
(76, 'Bhubaneswar', 26, 'Odisha'),
(77, 'Bidar', 17, 'Karnataka'),
(78, 'Bijapur', 17, 'Karnataka'),
(79, 'Bijnor', 34, 'Uttar Pradesh'),
(80, 'Bikaner', 29, 'Rajasthan'),
(81, 'Bilaspur', 7, 'Chattisgarh'),
(82, 'Birbhum', 36, 'West Bengal'),
(83, 'Bishnupur', 22, 'Manipur'),
(84, 'Bongaigaon', 4, 'Assam'),
(85, 'Budaun', 34, 'Uttar Pradesh'),
(86, 'Budgam', 15, 'Jammu & Kashmir'),
(87, 'Bulandshahr', 34, 'Uttar Pradesh'),
(88, 'Buldhana', 21, 'Maharashtra'),
(89, 'Bundi', 29, 'Rajasthan'),
(90, 'Burdwan', 36, 'West Bengal'),
(91, 'Cachar', 4, 'Assam'),
(92, 'Calicut', 18, 'Kerala'),
(93, 'Carnicobar', 1, 'Andaman & Nicobar Islands'),
(94, 'Chamba', 14, 'Himachal Pradesh'),
(95, 'Chamoli', 35, 'Uttarakhand'),
(96, 'Champawat', 35, 'Uttarakhand'),
(97, 'Champhai', 24, 'Mizoram'),
(98, 'Chandauli', 34, 'Uttar Pradesh'),
(99, 'Chandel', 22, 'Manipur'),
(100, 'Chandigarh', 6, 'Chandigarh'),
(101, 'Chandrapur', 21, 'Maharashtra'),
(102, 'Changanacherry', 18, 'Kerala'),
(103, 'Changlang', 3, 'Arunachal Pradesh'),
(104, 'Channapatna', 17, 'Karnataka'),
(105, 'Chengalpattu', 31, 'Tamil Nadu'),
(106, 'Chennai City Central', 31, 'Tamil Nadu'),
(107, 'Chennai City North', 31, 'Tamil Nadu'),
(108, 'Chennai City South', 31, 'Tamil Nadu'),
(109, 'Chhatarpur', 20, 'Madhya Pradesh'),
(110, 'Chhindwara', 20, 'Madhya Pradesh'),
(111, 'Chikmagalur', 17, 'Karnataka'),
(112, 'Chikodi', 17, 'Karnataka'),
(113, 'Chitradurga', 17, 'Karnataka'),
(114, 'Chitrakoot', 34, 'Uttar Pradesh'),
(115, 'Chittoor', 2, 'Andhra Pradesh'),
(116, 'Chittorgarh', 29, 'Rajasthan'),
(117, 'Churachandpur', 22, 'Manipur'),
(118, 'Churu', 29, 'Rajasthan'),
(119, 'Coimbatore', 31, 'Tamil Nadu'),
(120, 'Contai', 36, 'West Bengal'),
(121, 'Cooch Behar', 36, 'West Bengal'),
(122, 'Cuddalore', 31, 'Tamil Nadu'),
(123, 'Cuddapah', 2, 'Andhra Pradesh'),
(124, 'Cuttack City', 26, 'Odisha'),
(125, 'Cuttack North', 26, 'Odisha'),
(126, 'Cuttack South', 26, 'Odisha'),
(127, 'Dadra & Nagar Haveli', 8, 'Dadra & Nagar Haveli'),
(128, 'Daman', 9, 'Daman & Diu'),
(129, 'Darbhanga', 5, 'Bihar'),
(130, 'Darjiling', 36, 'West Bengal'),
(131, 'Darrang', 4, 'Assam'),
(132, 'Dausa', 29, 'Rajasthan'),
(133, 'Dehra Gopipur', 14, 'Himachal Pradesh'),
(134, 'Dehradun', 35, 'Uttarakhand'),
(135, 'Delhi', 10, 'Delhi'),
(136, 'Deoria', 34, 'Uttar Pradesh'),
(137, 'Dhalai', 33, 'Tripura'),
(138, 'Dhanbad', 16, 'Jharkhand'),
(139, 'Dharamsala', 14, 'Himachal Pradesh'),
(140, 'Dharmapuri', 31, 'Tamil Nadu'),
(141, 'Dharwad', 17, 'Karnataka'),
(142, 'Dhemaji', 4, 'Assam'),
(143, 'Dhenkanal', 26, 'Odisha'),
(144, 'Dholpur', 29, 'Rajasthan'),
(145, 'Dhubri', 4, 'Assam'),
(146, 'Dhule', 21, 'Maharashtra'),
(147, 'Dibang Valley', 3, 'Arunachal Pradesh'),
(148, 'Dibrugarh', 4, 'Assam'),
(149, 'Diglipur', 1, 'Andaman & Nicobar Islands'),
(150, 'Dimapur', 25, 'Nagaland'),
(151, 'Dindigul', 31, 'Tamil Nadu'),
(152, 'Diu', 9, 'Daman & Diu'),
(153, 'Doda', 15, 'Jammu & Kashmir'),
(154, 'Dungarpur', 29, 'Rajasthan'),
(155, 'Durg', 7, 'Chattisgarh'),
(156, 'East Champaran', 5, 'Bihar'),
(157, 'East Garo Hills', 23, 'Meghalaya'),
(158, 'East Kameng', 3, 'Arunachal Pradesh'),
(159, 'East Khasi Hills', 23, 'Meghalaya'),
(160, 'East Siang', 3, 'Arunachal Pradesh'),
(161, 'East Sikkim', 30, 'Sikkim'),
(162, 'Eluru', 2, 'Andhra Pradesh'),
(163, 'Ernakulam', 18, 'Kerala'),
(164, 'Erode', 31, 'Tamil Nadu'),
(165, 'Etah', 34, 'Uttar Pradesh'),
(166, 'Etawah', 34, 'Uttar Pradesh'),
(167, 'Faizabad', 34, 'Uttar Pradesh'),
(168, 'Faridabad', 13, 'Haryana'),
(169, 'Faridkot', 28, 'Punjab'),
(170, 'Farrukhabad', 34, 'Uttar Pradesh'),
(171, 'Fatehgarh Sahib', 28, 'Punjab'),
(172, 'Fatehpur', 34, 'Uttar Pradesh'),
(173, 'Fazilka', 28, 'Punjab'),
(174, 'Ferrargunj', 1, 'Andaman & Nicobar Islands'),
(175, 'Firozabad', 34, 'Uttar Pradesh'),
(176, 'Firozpur', 28, 'Punjab'),
(177, 'Gadag', 17, 'Karnataka'),
(178, 'Gadchiroli', 21, 'Maharashtra'),
(179, 'Gandhinagar', 12, 'Gujarat'),
(180, 'Ganganagar', 29, 'Rajasthan'),
(181, 'Gautam Buddha Nagar', 34, 'Uttar Pradesh'),
(182, 'Gaya', 5, 'Bihar'),
(183, 'Ghaziabad', 34, 'Uttar Pradesh'),
(184, 'Ghazipur', 34, 'Uttar Pradesh'),
(185, 'Giridih', 16, 'Jharkhand'),
(186, 'Goa', 11, 'Goa'),
(187, 'Goalpara', 4, 'Assam'),
(188, 'Gokak', 17, 'Karnataka'),
(189, 'Golaghat', 4, 'Assam'),
(190, 'Gonda', 34, 'Uttar Pradesh'),
(191, 'Gondal', 12, 'Gujarat'),
(192, 'Gondia', 21, 'Maharashtra'),
(193, 'Gorakhpur', 34, 'Uttar Pradesh'),
(194, 'Gudivada', 2, 'Andhra Pradesh'),
(195, 'Gudur', 2, 'Andhra Pradesh'),
(196, 'Gulbarga', 17, 'Karnataka'),
(197, 'Guna', 20, 'Madhya Pradesh'),
(198, 'Guntur', 2, 'Andhra Pradesh'),
(199, 'Gurdaspur', 28, 'Punjab'),
(200, 'Gurugram', 13, 'Haryana'),
(201, 'Gwalior', 20, 'Madhya Pradesh'),
(202, 'Hailakandi', 4, 'Assam'),
(203, 'Hamirpur (HP)', 14, 'Himachal Pradesh'),
(204, 'Hamirpur (UP)', 34, 'Uttar Pradesh'),
(205, 'Hanamkonda', 32, 'Telangana'),
(206, 'Hanumangarh', 29, 'Rajasthan'),
(207, 'Hardoi', 34, 'Uttar Pradesh'),
(208, 'Haridwar', 35, 'Uttarakhand'),
(209, 'Hassan', 17, 'Karnataka'),
(210, 'Hathras', 34, 'Uttar Pradesh'),
(211, 'Haveri', 17, 'Karnataka'),
(212, 'Hazaribagh', 16, 'Jharkhand'),
(213, 'Hindupur', 2, 'Andhra Pradesh'),
(214, 'Hingoli', 21, 'Maharashtra'),
(215, 'Hissar', 13, 'Haryana'),
(216, 'Hooghly', 36, 'West Bengal'),
(217, 'Hoshangabad', 20, 'Madhya Pradesh'),
(218, 'Hoshiarpur', 28, 'Punjab'),
(219, 'Howrah', 36, 'West Bengal'),
(220, 'Hut Bay', 1, 'Andaman & Nicobar Islands'),
(221, 'Hyderabad City', 32, 'Telangana'),
(222, 'Hyderabad South East', 32, 'Telangana'),
(223, 'Idukki', 18, 'Kerala'),
(224, 'Imphal East', 22, 'Manipur'),
(225, 'Imphal West', 22, 'Manipur'),
(226, 'Indore City', 20, 'Madhya Pradesh'),
(227, 'Indore Moffusil', 20, 'Madhya Pradesh'),
(228, 'Irinjalakuda', 18, 'Kerala'),
(229, 'Jabalpur', 20, 'Madhya Pradesh'),
(230, 'Jaintia Hills', 23, 'Meghalaya'),
(231, 'Jaipur', 29, 'Rajasthan'),
(232, 'Jaisalmer', 29, 'Rajasthan'),
(233, 'Jalandhar', 28, 'Punjab'),
(234, 'Jalaun', 34, 'Uttar Pradesh'),
(235, 'Jalgaon', 21, 'Maharashtra'),
(236, 'Jalna', 21, 'Maharashtra'),
(237, 'Jalor', 29, 'Rajasthan'),
(238, 'Jalpaiguri', 36, 'West Bengal'),
(239, 'Jammu', 15, 'Jammu & Kashmir'),
(240, 'Jamnagar', 12, 'Gujarat'),
(241, 'Jaunpur', 34, 'Uttar Pradesh'),
(242, 'Jhalawar', 29, 'Rajasthan'),
(243, 'Jhansi', 34, 'Uttar Pradesh'),
(244, 'Jhujhunu', 29, 'Rajasthan'),
(245, 'Jodhpur', 29, 'Rajasthan'),
(246, 'Jorhat', 4, 'Assam'),
(247, 'Junagadh', 12, 'Gujarat'),
(248, 'Jyotiba Phule Nagar', 34, 'Uttar Pradesh'),
(249, 'Kakinada', 2, 'Andhra Pradesh'),
(250, 'Kalahandi', 26, 'Odisha'),
(251, 'Kamrup', 4, 'Assam'),
(252, 'Kanchipuram', 31, 'Tamil Nadu'),
(253, 'Kannauj', 34, 'Uttar Pradesh'),
(254, 'Kanniyakumari', 31, 'Tamil Nadu'),
(255, 'Kannur', 18, 'Kerala'),
(256, 'Kanpur Dehat', 34, 'Uttar Pradesh'),
(257, 'Kanpur Nagar', 34, 'Uttar Pradesh'),
(258, 'Kapurthala', 28, 'Punjab'),
(259, 'Karaikal', 27, 'Poducherry'),
(260, 'Karaikudi', 31, 'Tamil Nadu'),
(261, 'Karauli', 29, 'Rajasthan'),
(262, 'Karbi Anglong', 4, 'Assam'),
(263, 'Kargil', 15, 'Jammu & Kashmir'),
(264, 'Karimganj', 4, 'Assam'),
(265, 'Karimnagar', 32, 'Telangana'),
(266, 'Karnal', 13, 'Haryana'),
(267, 'Karur', 31, 'Tamil Nadu'),
(268, 'Karwar', 17, 'Karnataka'),
(269, 'Kasaragod', 18, 'Kerala'),
(270, 'Kathua', 15, 'Jammu & Kashmir'),
(271, 'Kaushambi', 34, 'Uttar Pradesh'),
(272, 'Keonjhar', 26, 'Odisha'),
(273, 'Khammam (AP)', 2, 'Andhra Pradesh'),
(274, 'Khammam (TL)', 32, 'Telangana'),
(275, 'Khandwa', 20, 'Madhya Pradesh'),
(276, 'Kheda', 12, 'Gujarat'),
(277, 'Kheri', 34, 'Uttar Pradesh'),
(278, 'Kiphire', 25, 'Nagaland'),
(279, 'Kodagu', 17, 'Karnataka'),
(280, 'Kohima', 25, 'Nagaland'),
(281, 'Kokrajhar', 4, 'Assam'),
(282, 'Kolar', 17, 'Karnataka'),
(283, 'Kolasib', 24, 'Mizoram'),
(284, 'Kolhapur', 21, 'Maharashtra'),
(285, 'Kolkata', 36, 'West Bengal'),
(286, 'Koraput', 26, 'Odisha'),
(287, 'Kota', 29, 'Rajasthan'),
(288, 'Kottayam', 18, 'Kerala'),
(289, 'Kovilpatti', 31, 'Tamil Nadu'),
(290, 'Krishnagiri', 31, 'Tamil Nadu'),
(291, 'Kulgam', 15, 'Jammu & Kashmir'),
(292, 'Kumbakonam', 31, 'Tamil Nadu'),
(293, 'Kupwara', 15, 'Jammu & Kashmir'),
(294, 'Kurnool', 2, 'Andhra Pradesh'),
(295, 'Kurukshetra', 13, 'Haryana'),
(296, 'Kurung Kumey', 3, 'Arunachal Pradesh'),
(297, 'Kushinagar', 34, 'Uttar Pradesh'),
(298, 'Kutch', 12, 'Gujarat'),
(299, 'Lakhimpur', 4, 'Assam'),
(300, 'Lakshadweep', 19, 'Lakshadweep'),
(301, 'Lalitpur', 34, 'Uttar Pradesh'),
(302, 'Latur', 21, 'Maharashtra'),
(303, 'Lawngtlai', 24, 'Mizoram'),
(304, 'Leh', 15, 'Jammu & Kashmir'),
(305, 'Lohit', 3, 'Arunachal Pradesh'),
(306, 'Longleng', 25, 'Nagaland'),
(307, 'Lower Subansiri', 3, 'Arunachal Pradesh'),
(308, 'Lucknow', 34, 'Uttar Pradesh'),
(309, 'Ludhiana', 28, 'Punjab'),
(310, 'Lunglei', 24, 'Mizoram'),
(311, 'Machilipatnam', 2, 'Andhra Pradesh'),
(312, 'Madhubani', 5, 'Bihar'),
(313, 'Madurai', 31, 'Tamil Nadu'),
(314, 'Mahabubnagar', 32, 'Telangana'),
(315, 'Maharajganj', 34, 'Uttar Pradesh'),
(316, 'Mahesana', 12, 'Gujarat'),
(317, 'Mahoba', 34, 'Uttar Pradesh'),
(318, 'Mainpuri', 34, 'Uttar Pradesh'),
(319, 'Malda', 36, 'West Bengal'),
(320, 'Mammit', 24, 'Mizoram'),
(321, 'Mandi', 14, 'Himachal Pradesh'),
(322, 'Mandsaur', 20, 'Madhya Pradesh'),
(323, 'Mandya', 17, 'Karnataka'),
(324, 'Mangalore', 17, 'Karnataka'),
(325, 'Manjeri', 18, 'Kerala'),
(326, 'Mansa', 28, 'Punjab'),
(327, 'Marigaon', 4, 'Assam'),
(328, 'Mathura', 34, 'Uttar Pradesh'),
(329, 'Mau', 34, 'Uttar Pradesh'),
(330, 'Mavelikara', 18, 'Kerala'),
(331, 'Mayabander', 1, 'Andaman & Nicobar Islands'),
(332, 'Mayiladuthurai', 31, 'Tamil Nadu'),
(333, 'Mayurbhanj', 26, 'Odisha'),
(334, 'Medak', 32, 'Telangana'),
(335, 'Meerut', 34, 'Uttar Pradesh'),
(336, 'Meghalaya', 23, 'Meghalaya'),
(337, 'Midnapore', 36, 'West Bengal'),
(338, 'Mirzapur', 34, 'Uttar Pradesh'),
(339, 'Moga', 28, 'Punjab'),
(340, 'Mohali', 28, 'Punjab'),
(341, 'Mokokchung', 25, 'Nagaland'),
(342, 'Mon', 25, 'Nagaland'),
(343, 'Monghyr', 5, 'Bihar'),
(344, 'Moradabad', 34, 'Uttar Pradesh'),
(345, 'Morena', 20, 'Madhya Pradesh'),
(346, 'Muktsar', 28, 'Punjab'),
(347, 'Mumbai', 21, 'Maharashtra'),
(348, 'Murshidabad', 36, 'West Bengal'),
(349, 'Muzaffarnagar', 34, 'Uttar Pradesh'),
(350, 'Muzaffarpur', 5, 'Bihar'),
(351, 'Mysore', 17, 'Karnataka'),
(352, 'Nadia', 36, 'West Bengal'),
(353, 'Nagaon', 4, 'Assam'),
(354, 'Nagapattinam', 31, 'Tamil Nadu'),
(355, 'Nagaur', 29, 'Rajasthan'),
(356, 'Nagpur', 21, 'Maharashtra'),
(357, 'Nainital', 35, 'Uttarakhand'),
(358, 'Nalanda', 5, 'Bihar'),
(359, 'Nalbari', 4, 'Assam'),
(360, 'Nalgonda', 32, 'Telangana'),
(361, 'Namakkal', 31, 'Tamil Nadu'),
(362, 'Nancorie', 1, 'Andaman & Nicobar Islands'),
(363, 'Nancowrie', 1, 'Andaman & Nicobar Islands'),
(364, 'Nanded', 21, 'Maharashtra'),
(365, 'Nandurbar', 21, 'Maharashtra'),
(366, 'Nandyal', 2, 'Andhra Pradesh'),
(367, 'Nanjangud', 17, 'Karnataka'),
(368, 'Narasaraopet', 2, 'Andhra Pradesh'),
(369, 'Nashik', 21, 'Maharashtra'),
(370, 'Navsari', 12, 'Gujarat'),
(371, 'Nawadha', 5, 'Bihar'),
(372, 'Nawanshahr', 28, 'Punjab'),
(373, 'Nellore', 2, 'Andhra Pradesh'),
(374, 'Nilgiris', 31, 'Tamil Nadu'),
(375, 'Nizamabad', 32, 'Telangana'),
(376, 'North 24 Parganas', 36, 'West Bengal'),
(377, 'North Cachar Hills', 4, 'Assam'),
(378, 'North Dinajpur', 36, 'West Bengal'),
(379, 'North Sikkim', 30, 'Sikkim'),
(380, 'North Tripura', 33, 'Tripura'),
(381, 'Osmanabad', 21, 'Maharashtra'),
(382, 'Ottapalam', 18, 'Kerala'),
(383, 'Palamau', 16, 'Jharkhand'),
(384, 'Palghat', 18, 'Kerala'),
(385, 'Pali', 29, 'Rajasthan'),
(386, 'Panchmahals', 12, 'Gujarat'),
(387, 'Papum Pare', 3, 'Arunachal Pradesh'),
(388, 'Parbhani', 21, 'Maharashtra'),
(389, 'Parvathipuram', 2, 'Andhra Pradesh'),
(390, 'Patan', 12, 'Gujarat'),
(391, 'Pathanamthitta', 18, 'Kerala'),
(392, 'Patiala', 28, 'Punjab'),
(393, 'Patna', 5, 'Bihar'),
(394, 'Pattukottai', 31, 'Tamil Nadu'),
(395, 'Pauri Garhwal', 35, 'Uttarakhand'),
(396, 'Peddapalli', 32, 'Telangana'),
(397, 'Peren', 25, 'Nagaland'),
(398, 'Phek', 25, 'Nagaland'),
(399, 'Phulbani', 26, 'Odisha'),
(400, 'Pilibhit', 34, 'Uttar Pradesh'),
(401, 'Pithoragarh', 35, 'Uttarakhand'),
(402, 'Poducherry (PD)', 27, 'Poducherry'),
(403, 'Poducherry (TN)', 31, 'Tamil Nadu'),
(404, 'Pollachi', 31, 'Tamil Nadu'),
(405, 'Poonch', 15, 'Jammu & Kashmir'),
(406, 'Porbandar', 12, 'Gujarat'),
(407, 'Port Blair', 1, 'Andaman & Nicobar Islands'),
(408, 'Prakasam', 2, 'Andhra Pradesh'),
(409, 'Pratapgarh', 34, 'Uttar Pradesh'),
(410, 'Proddatur', 2, 'Andhra Pradesh'),
(411, 'Pudukkottai', 31, 'Tamil Nadu'),
(412, 'Pulwama', 15, 'Jammu & Kashmir'),
(413, 'Pune', 21, 'Maharashtra'),
(414, 'Puri', 26, 'Odisha'),
(415, 'Purnea', 5, 'Bihar'),
(416, 'Purulia', 36, 'West Bengal'),
(417, 'Puttur', 17, 'Karnataka'),
(418, 'Quilon', 18, 'Kerala'),
(419, 'Raebareli', 34, 'Uttar Pradesh'),
(420, 'Raichur', 17, 'Karnataka'),
(421, 'Raigarh (CT)', 7, 'Chattisgarh'),
(422, 'Raigarh (MH)', 21, 'Maharashtra'),
(423, 'Raipur', 7, 'Chattisgarh'),
(424, 'Rajahmundry', 2, 'Andhra Pradesh'),
(425, 'Rajauri', 15, 'Jammu & Kashmir'),
(426, 'Rajkot', 12, 'Gujarat'),
(427, 'Rajsamand', 29, 'Rajasthan'),
(428, 'Ramanathapuram', 31, 'Tamil Nadu'),
(429, 'Rampur', 34, 'Uttar Pradesh'),
(430, 'Rampur Bushahr', 14, 'Himachal Pradesh'),
(431, 'Ranchi', 16, 'Jharkhand'),
(432, 'Rangat', 1, 'Andaman & Nicobar Islands'),
(433, 'Ratlam', 20, 'Madhya Pradesh'),
(434, 'Ratnagiri', 21, 'Maharashtra'),
(435, 'Reasi', 15, 'Jammu & Kashmir'),
(436, 'Rewa', 20, 'Madhya Pradesh'),
(437, 'Ri Bhoi', 23, 'Meghalaya'),
(438, 'Rohtak', 13, 'Haryana'),
(439, 'Rohtas', 5, 'Bihar'),
(440, 'Ropar', 28, 'Punjab'),
(441, 'Rudraprayag', 35, 'Uttarakhand'),
(442, 'Rupnagar', 28, 'Punjab'),
(443, 'Sabarkantha', 12, 'Gujarat'),
(444, 'Sagar', 20, 'Madhya Pradesh'),
(445, 'Saharanpur', 34, 'Uttar Pradesh'),
(446, 'Saharsa', 5, 'Bihar'),
(447, 'Salem East', 31, 'Tamil Nadu'),
(448, 'Salem West', 31, 'Tamil Nadu'),
(449, 'Samastipur', 5, 'Bihar'),
(450, 'Sambalpur', 26, 'Odisha'),
(451, 'Sangareddy', 32, 'Telangana'),
(452, 'Sangli', 21, 'Maharashtra'),
(453, 'Sangrur', 28, 'Punjab'),
(454, 'Sant Kabir Nagar', 34, 'Uttar Pradesh'),
(455, 'Sant Ravidas Nagar', 34, 'Uttar Pradesh'),
(456, 'Santhal Parganas', 16, 'Jharkhand'),
(457, 'Saran', 5, 'Bihar'),
(458, 'Satara', 21, 'Maharashtra'),
(459, 'Sawai Madhopur', 29, 'Rajasthan'),
(460, 'Secunderabad', 32, 'Telangana'),
(461, 'Sehore', 20, 'Madhya Pradesh'),
(462, 'Senapati', 22, 'Manipur'),
(463, 'Serchhip', 24, 'Mizoram'),
(464, 'Shahdol', 20, 'Madhya Pradesh'),
(465, 'Shahjahanpur', 34, 'Uttar Pradesh'),
(466, 'Shimla', 14, 'Himachal Pradesh'),
(467, 'Shimoga', 17, 'Karnataka'),
(468, 'Shrawasti', 34, 'Uttar Pradesh'),
(469, 'Sibsagar', 4, 'Assam'),
(470, 'Siddharthnagar', 34, 'Uttar Pradesh'),
(471, 'Sikar', 29, 'Rajasthan'),
(472, 'Sindhudurg', 21, 'Maharashtra'),
(473, 'Singhbhum', 16, 'Jharkhand'),
(474, 'Sirohi', 29, 'Rajasthan'),
(475, 'Sirsi', 17, 'Karnataka'),
(476, 'Sitamarhi', 5, 'Bihar'),
(477, 'Sitapur', 34, 'Uttar Pradesh'),
(478, 'Sivaganga', 31, 'Tamil Nadu'),
(479, 'Siwan', 5, 'Bihar'),
(480, 'Solan', 14, 'Himachal Pradesh'),
(481, 'Solapur', 21, 'Maharashtra'),
(482, 'Sonbhadra', 34, 'Uttar Pradesh'),
(483, 'Sonepat', 13, 'Haryana'),
(484, 'Sonitpur', 4, 'Assam'),
(485, 'South 24 Parganas', 36, 'West Bengal'),
(486, 'South Dinajpur', 36, 'West Bengal'),
(487, 'South Garo Hills', 23, 'Meghalaya'),
(488, 'South Sikkim', 30, 'Sikkim'),
(489, 'South Tripura', 33, 'Tripura'),
(490, 'Srikakulam', 2, 'Andhra Pradesh'),
(491, 'Srinagar', 15, 'Jammu & Kashmir'),
(492, 'Srirangam', 31, 'Tamil Nadu'),
(493, 'Sultanpur', 34, 'Uttar Pradesh'),
(494, 'Sundargarh', 26, 'Odisha'),
(495, 'Surat', 12, 'Gujarat'),
(496, 'Surendranagar', 12, 'Gujarat'),
(497, 'Suryapet', 32, 'Telangana'),
(498, 'Tadepalligudem', 2, 'Andhra Pradesh'),
(499, 'Tambaram', 31, 'Tamil Nadu'),
(500, 'Tamenglong', 22, 'Manipur'),
(501, 'Tamluk', 36, 'West Bengal'),
(502, 'Tarn Taran', 28, 'Punjab'),
(503, 'Tawang', 3, 'Arunachal Pradesh'),
(504, 'Tehri Garhwal', 35, 'Uttarakhand'),
(505, 'Tenali', 2, 'Andhra Pradesh'),
(506, 'Thalassery', 18, 'Kerala'),
(507, 'Thane', 21, 'Maharashtra'),
(508, 'Thanjavur', 31, 'Tamil Nadu'),
(509, 'Theni', 31, 'Tamil Nadu'),
(510, 'Thoubal', 22, 'Manipur'),
(511, 'Tinsukia', 4, 'Assam'),
(512, 'Tirap', 3, 'Arunachal Pradesh'),
(513, 'Tiruchirapalli', 31, 'Tamil Nadu'),
(514, 'Tirunelveli', 31, 'Tamil Nadu'),
(515, 'Tirupati', 2, 'Andhra Pradesh'),
(516, 'Tirupattur', 31, 'Tamil Nadu'),
(517, 'Tirupur', 31, 'Tamil Nadu'),
(518, 'Tirur', 18, 'Kerala'),
(519, 'Tiruvalla', 18, 'Kerala'),
(520, 'Tiruvannamalai', 31, 'Tamil Nadu'),
(521, 'Tonk', 29, 'Rajasthan'),
(522, 'Trichur', 18, 'Kerala'),
(523, 'Trivandrum North', 18, 'Kerala'),
(524, 'Trivandrum South', 18, 'Kerala'),
(525, 'Tuensang', 25, 'Nagaland'),
(526, 'Tumkur', 17, 'Karnataka'),
(527, 'Tuticorin', 31, 'Tamil Nadu'),
(528, 'Udaipur', 29, 'Rajasthan'),
(529, 'Udham Singh Nagar', 35, 'Uttarakhand'),
(530, 'Udhampur', 15, 'Jammu & Kashmir'),
(531, 'Udupi', 17, 'Karnataka'),
(532, 'Ujjain', 20, 'Madhya Pradesh'),
(533, 'Ukhrul', 22, 'Manipur'),
(534, 'Una', 14, 'Himachal Pradesh'),
(535, 'Unnao', 34, 'Uttar Pradesh'),
(536, 'Upper Siang', 3, 'Arunachal Pradesh'),
(537, 'Upper Subansiri', 3, 'Arunachal Pradesh'),
(538, 'Uttarkashi', 35, 'Uttarakhand'),
(539, 'Vadakara', 18, 'Kerala'),
(540, 'Vadodara East', 12, 'Gujarat'),
(541, 'Vadodara West', 12, 'Gujarat'),
(542, 'Vaishali', 5, 'Bihar'),
(543, 'Valsad', 12, 'Gujarat'),
(544, 'Varanasi', 34, 'Uttar Pradesh'),
(545, 'Vellore', 31, 'Tamil Nadu'),
(546, 'Vidisha', 20, 'Madhya Pradesh'),
(547, 'Vijayawada', 2, 'Andhra Pradesh'),
(548, 'Virudhunagar', 31, 'Tamil Nadu'),
(549, 'Visakhapatnam', 2, 'Andhra Pradesh'),
(550, 'Vizianagaram', 2, 'Andhra Pradesh'),
(551, 'Vriddhachalam', 31, 'Tamil Nadu'),
(552, 'Wanaparthy', 32, 'Telangana'),
(553, 'Warangal', 32, 'Telangana'),
(554, 'Wardha', 21, 'Maharashtra'),
(555, 'Washim', 21, 'Maharashtra'),
(556, 'West Champaran', 5, 'Bihar'),
(557, 'West Garo Hills', 23, 'Meghalaya'),
(558, 'West Kameng', 3, 'Arunachal Pradesh'),
(559, 'West Khasi Hills', 23, 'Meghalaya'),
(560, 'West Siang', 3, 'Arunachal Pradesh'),
(561, 'West Sikkim', 30, 'Sikkim'),
(562, 'West Tripura', 33, 'Tripura'),
(563, 'Wokha', 25, 'Nagaland'),
(564, 'Yavatmal', 21, 'Maharashtra'),
(565, 'Zunhebotto', 25, 'Nagaland');

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
(30, 'shifa', 'shubhamdigole@gmail.com', '7767858952', 'ertyuio', 'erty'),
(31, 'shubham', 'shubhamdigole@gmail.com', '7767858952', 'realated to product', 'hii i would like to buy more products from you can you give me some discount'),
(32, '', '', '', '', ''),
(33, 'fsfsd', 'dfdsds@sfds', '7410852963', 'dsfds', 'ssfdsgfg'),
(34, 'fsfsd', 'dfdsds@sfds', '7410852963', 'dsfds', 'ssfdsgfg'),
(35, 'fsfsd', 'dfdsds@sfds', '7410852963', 'dsfds', 'ssfdsgfg'),
(36, 'gfqfdg', 'fsfd@df', 'effdgsd', 'qfdsg', 'qeretg');

-- --------------------------------------------------------

--
-- Table structure for table `dfgn`
--

CREATE TABLE `dfgn` (
  `id` int(10) UNSIGNED NOT NULL,
  `Fruitname` varchar(30) NOT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Price` int(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `Curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Price` int(6) NOT NULL,
  `pur_price` int(6) NOT NULL,
  `sold_items` int(10) NOT NULL,
  `profit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruitdata`
--

INSERT INTO `fruitdata` (`id`, `Name`, `Discription`, `ImgURl`, `Quantity`, `Price`, `pur_price`, `sold_items`, `profit`) VALUES
(1, 'Banana', 'yellow color fruit', 'http://localhost/Fruit-shopping-cart/img/banana.jpg', 950, 125, 110, 2, 900),
(2, 'Apple', 'red color fruit', 'http://localhost/Fruit-shopping-cart/img/redapple.jpg', 172, 180, 150, 63, 1890),
(3, 'Cherry', '152', 'http://localhost/Fruit-shopping-cart/img/cherry.jpg', 84, 256, 240, 175, 2800),
(4, 'mango', 'summer fruit', 'http://localhost/Fruit-shopping-cart/img/mango.jpg', 82, 157, 145, 15, 180),
(5, 'Grapes', 'GRAPES', 'http://localhost/Fruit-shopping-cart/img/blackgrapes.jpg', 271, 100, 90, 100, -10000),
(6, 'Strawberry', 'red fruit', 'http://localhost/Fruit-shopping-cart/img/straw.jpg', 125, 450, 430, 25, 0),
(7, 'kivi', 'fgfdhjskk', 'http://localhost/Fruit-shopping-cart/img/slider-1.jpg', 125, 130, 115, 56, 0),
(8, 'dsddf', 'ssf ', 'http://localhost/Fruit-shopping-cart/img/best-food-fruit-image.jpg', 125, 150, 120, 52, 0),
(9, 'cfn', 'kfskjk', 'http://localhost/Fruit-shopping-cart/img/orange.jpg', 125, 162, 150, 0, 0),
(10, 'cfn', 'kfskjk', 'http://localhost/Fruit-shopping-cart/img/orange.jpg', 125, 162, 150, 0, 0),
(11, 'cfn', 'kfskjk', 'http://localhost/Fruit-shopping-cart/img/orange.jpg', 125, 162, 150, 0, 0),
(12, 'cfn', 'kfskjk', 'http://localhost/Fruit-shopping-cart/img/orange.jpg', 125, 162, 150, 0, 0),
(13, 'cfn', 'kfskjk', 'http://localhost/Fruit-shopping-cart/img/orange.jpg', 125, 162, 150, 0, 0),
(14, 'cfn', 'kfskjk', 'http://localhost/Fruit-shopping-cart/img/orange.jpg', 125, 162, 150, 0, 0);

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
(63, 'anuja', 'anuja@123'),
(64, 'anuja', 'anuja@123'),
(65, 'shubham', '123456'),
(66, 'shubham', '123456'),
(67, 'shubham', '123456'),
(68, 'shubham', '123456'),
(69, 'shubham', '123456'),
(70, 'shubham', '123456'),
(71, 'shubham', '123456'),
(72, 'shubham', '123456'),
(73, 'shubham', '123456'),
(74, 'shubham', '123456'),
(75, 'shubham', '123456'),
(76, 'shubham', '123456'),
(77, 'shubham', '123456'),
(78, 'shubham', '123456'),
(79, 'shubham', '123456'),
(80, 'shubham', '123456'),
(81, 'shubham', '123456'),
(82, 'shubham', '123456'),
(83, 'shubham', '123456'),
(84, 'shubham', '123456'),
(85, 'shubham', '123456'),
(86, 'shubham', '123456'),
(87, 'shubham', '123456'),
(88, 'shubham', '123456'),
(89, 'shubham', '123456'),
(90, 'shubham', '123456'),
(91, 'shubham', '123456'),
(92, 'shubham', '123456'),
(93, 'shubham', '123456'),
(94, 'shubham', '123456'),
(95, 'anuja', 'anuja@123'),
(96, 'shubham', '123456'),
(97, 'anuja', 'anuja@123'),
(98, 'shubham', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `shubham`
--

CREATE TABLE `shubham` (
  `id` int(10) UNSIGNED NOT NULL,
  `Fruitname` varchar(30) NOT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Price` int(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `Curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shubham`
--

INSERT INTO `shubham` (`id`, `Fruitname`, `Quantity`, `Price`, `Total`, `Curdate`) VALUES
(1, 'mango', 2, 157, 314, '0000-00-00'),
(2, 'Cherry', 25, 256, 6400, '0000-00-00'),
(3, 'mango', 1, 157, 157, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state_name` text NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'Andaman & Nicobar Islands', 1),
(2, 'Andhra Pradesh', 1),
(3, 'Arunachal Pradesh', 1),
(4, 'Assam', 1),
(5, 'Bihar', 1),
(6, 'Chandigarh', 1),
(7, 'Chattisgarh', 1),
(8, 'Dadra & Nagar Haveli', 1),
(9, 'Daman & Diu', 1),
(10, 'Delhi', 1),
(11, 'Goa', 1),
(12, 'Gujarat', 1),
(13, 'Haryana', 1),
(14, 'Himachal Pradesh', 1),
(15, 'Jammu & Kashmir', 1),
(16, 'Jharkhand', 1),
(17, 'Karnataka', 1),
(18, 'Kerala', 1),
(19, 'Lakshadweep', 1),
(20, 'Madhya Pradesh', 1),
(21, 'Maharashtra', 1),
(22, 'Manipur', 1),
(23, 'Meghalaya', 1),
(24, 'Mizoram', 1),
(25, 'Nagaland', 1),
(26, 'Odisha', 1),
(27, 'Poducherry', 1),
(28, 'Punjab', 1),
(29, 'Rajasthan', 1),
(30, 'Sikkim', 1),
(31, 'Tamil Nadu', 1),
(32, 'Telangana', 1),
(33, 'Tripura', 1),
(34, 'Uttar Pradesh', 1),
(35, 'Uttarakhand', 1),
(36, 'West Bengal', 1);

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
  `date` date NOT NULL,
  `isAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_registration`
--

INSERT INTO `u_registration` (`id`, `Username`, `Passwords`, `C_Name`, `Address`, `email`, `DOB`, `Gender`, `Age`, `Phone_no`, `date`, `isAdmin`) VALUES
(1, 'Shifa', 'Shifa@123', 'shifa,ayub,shikalgar', 'queens garden,pune,pune,maharashtra,india', 'shifashikalgar73@gmail.com', '1997-10-05', 'female', 21, '8552851888', '0000-00-00', 0),
(8, 'priyanka', 'priyanka@123', 'Priyanka Pradeep  Nafad', 'karad,karad,Satara,maharashtra,india', 'priyankanafad123@gmail.com', '1997-10-04', 'female', 22, '9822308483', '0000-00-00', 0),
(9, 'AliyaMunaf', '123456', 'Alia Munaf Mulla', 'chinchawad,pune,pune,maharashtra,india', 'aliya.jamadar2009@gmail.com', '1991-09-27', 'female', 28, '8421347177', '0000-00-00', 0),
(15, 'anuja', 'Anuja@123', 'Anuja Popale', 'hadapsar,pune,pune,maharashtra,india', 'anujapopale@gmail.com', '1997-02-28', 'female', 21, '8527419632', '2018-10-01', 0),
(16, 'shubham', '123456', 'shubham shinde', 'ambegao,pune,pune,maharashtra,india', 'shubhamshinde8983@gmail.com', '1996-04-09', 'male', 22, '852467891', '2018-10-14', 1),
(17, 'sadsh', 'sdjsahj', 'dasfkhj', 'sjadasfask,Adilabad,,Andaman & Nicobar Islands,ind', 'sdaf@esdg', '1996-09-04', 'male', 25, '7418529634', '2018-10-18', 0),
(18, 'dfgn', 'dfghjk', 'sdsa', 'ds,Daman,,Andaman & Nicobar Islands,india', 'ddasdsfsa@esrg', '1996-05-05', 'male', 25, '7418526541', '2018-10-18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuja`
--
ALTER TABLE `anuja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `dfgn`
--
ALTER TABLE `dfgn`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `shubham`
--
ALTER TABLE `shubham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Srno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `dfgn`
--
ALTER TABLE `dfgn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fruitdata`
--
ALTER TABLE `fruitdata`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `shubham`
--
ALTER TABLE `shubham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `u_registration`
--
ALTER TABLE `u_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
