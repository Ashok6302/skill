-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 12:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `offer_request`
--

CREATE TABLE `offer_request` (
  `ref_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `offerrequest` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `date&time` datetime NOT NULL DEFAULT current_timestamp(),
  `accept_status` tinyint(1) NOT NULL,
  `proceed_status` tinyint(1) NOT NULL,
  `accept_user_id` varchar(10) NOT NULL,
  `yesno` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer_request`
--

INSERT INTO `offer_request` (`ref_id`, `user_id`, `offerrequest`, `type`, `category`, `details`, `date&time`, `accept_status`, `proceed_status`, `accept_user_id`, `yesno`) VALUES
(68, '1', 'offer', 'products', 'carpenter', 'jkl', '2023-10-04 09:57:57', 1, 1, '1', 1),
(70, '15', 'request', 'products', 'blood', 'A-ve', '2023-10-04 11:03:45', 1, 1, '8', 0),
(73, '15', 'request', 'services', 'carpenter', 'need chairs', '2023-10-04 11:09:37', 1, 0, '15', 0),
(77, '1', 'request', 'products', 'carpenter', 'need bed', '2023-10-04 11:28:22', 1, 1, '8', 1),
(93, '14', 'offer', 'products', 'Clothes', 'Mask', '2023-10-12 10:42:46', 1, 0, '15', 0),
(94, '14', 'request', 'products', 'clothes', 'hoddies', '2023-10-13 12:00:35', 1, 1, '8', 0),
(95, '1', 'offer', 'products', 'food_materials', 'rice', '2023-10-16 10:49:53', 1, 1, '1', 1),
(96, '1', 'offer', 'products', 'study_materials', 'pyt', '2023-10-16 10:50:05', 1, 1, '8', 1),
(97, '1', 'offer', 'products', 'electrical_appliances', 'phone', '2023-10-16 10:50:18', 1, 1, '8', 1),
(98, '1', 'offer', 'products', 'carpenter', 'bed', '2023-10-16 11:03:49', 1, 1, '8', 1),
(99, '1', 'offer', 'products', 'electrical_appliances', 'tab', '2023-10-16 11:04:03', 1, 1, '8', 1),
(100, '1', 'offer', 'products', 'Clothes', 'hoddies', '2023-10-16 11:04:16', 1, 1, '8', 1),
(101, '1', 'offer', 'medical emergency', 'medicine', 'dolo', '2023-10-16 14:34:44', 1, 1, '8', 1),
(102, '1', 'offer', 'medical emergency', 'medicine', 'cipla', '2023-10-16 14:34:58', 1, 1, '8', 1),
(103, '16', 'offer', 'products', 'Clothes', 'shirts', '2023-10-16 15:03:13', 1, 1, '60', 1),
(104, '16', 'offer', 'products', 'Clothes', 'shorts', '2023-10-16 15:03:23', 1, 1, '60', 1),
(105, '16', 'offer', 'products', 'Clothes', 'scarfs', '2023-10-16 15:03:34', 1, 0, '61', 0),
(106, '16', 'offer', 'products', 'food_materials', 'milk', '2023-10-16 15:45:59', 1, 0, '61', 0),
(107, '16', 'offer', 'products', 'study_materials', 'java', '2023-10-16 15:46:10', 1, 1, '8', 1),
(108, '16', 'offer', 'products', 'study_materials', 'swift', '2023-10-16 15:46:21', 1, 1, '8', 1),
(109, '16', 'offer', 'products', 'study_materials', 'IOS application', '2023-10-16 15:46:36', 1, 1, '8', 1),
(110, '16', 'offer', 'products', 'study_materials', 'Web application', '2023-10-16 15:54:02', 1, 0, '8', 0),
(111, '16', 'offer', 'products', 'study_materials', 'Android', '2023-10-16 15:54:16', 1, 1, '16', 0),
(112, '16', 'offer', 'products', 'study_materials', 'Figma', '2023-10-16 15:54:34', 1, 1, '16', 1),
(113, '16', 'offer', 'products', 'study_materials', 'Flutter', '2023-10-16 15:54:49', 1, 1, '66', 0),
(114, '40', 'request', 'products', 'Clothes', 'cloth req1', '2023-10-17 08:43:04', 1, 0, '40', 0),
(115, '40', 'request', 'products', 'Clothes', 'cloth req2', '2023-10-17 08:43:17', 1, 1, '8', 0),
(116, '40', 'request', 'products', 'food_materials', 'cloth req3', '2023-10-17 08:43:33', 1, 1, '8', 0),
(117, '40', 'request', 'products', 'Clothes', 'cloth req 4', '2023-10-17 08:43:48', 1, 1, '8', 0),
(118, '40', 'request', 'medical emergency', 'others', 'wheel chairs', '2023-10-17 09:01:38', 1, 0, '61', 0),
(119, '40', 'request', 'medical emergency', 'medicine', 'medical req 1\r\n', '2023-10-17 09:01:52', 1, 0, '16', 0),
(145, '8', 'offer', 'medical emergency', 'Medicine', 'Paracitamel', '2023-10-19 08:24:40', 1, 1, '1', 1),
(146, '8', 'request', 'products', 'Food Materials', 'Rice', '2023-10-19 10:42:25', 1, 1, '8', 1),
(147, '8', 'offer', 'medical emergency', 'Others', 'Beds', '2023-10-19 10:42:37', 1, 1, '8', 1),
(149, '8', 'offer', 'medical emergency', 'Blood', 'Cat blood', '2023-10-20 08:14:17', 1, 1, '8', 1),
(150, '8', 'request', 'products', 'Carpenter', 'Zsgrz', '2023-10-20 10:44:33', 1, 1, '60', 1),
(152, '8', 'request', 'services', 'Electrician', 'Zdhzdj', '2023-10-20 10:44:47', 1, 1, '60', 1),
(153, '8', 'offer', 'products', 'Food Materials', 'Zdhxdsr', '2023-10-20 10:44:56', 1, 1, '60', 1),
(154, '8', 'offer', 'medical emergency', 'Medicine', 'Cghkmvgy,', '2023-10-20 10:45:01', 1, 1, '60', 1),
(155, '8', 'offer', 'services', 'Carpenter', 'WEYtzh', '2023-10-20 10:45:07', 1, 1, '60', 1),
(156, '60', 'offer', 'products', 'Clothes', 'Prodoff1', '2023-10-25 09:29:46', 1, 1, '8', 1),
(157, '60', 'offer', 'medical emergency', 'Medicine', 'Medicaloff1', '2023-10-25 09:29:54', 1, 1, '8', 1),
(158, '60', 'offer', 'services', 'Electrician', 'Seroff1', '2023-10-25 09:30:03', 1, 1, '8', 1),
(159, '60', 'request', 'products', 'Carpenter', 'Prodreq1', '2023-10-25 09:30:18', 1, 1, '8', 1),
(160, '60', 'request', 'medical emergency', 'Blood', 'Medreq1', '2023-10-25 09:30:28', 1, 0, '16', 0),
(161, '60', 'request', 'services', 'Carpenter', 'Serreq1', '2023-10-25 09:30:37', 1, 1, '8', 1),
(162, '8', 'offer', 'products', 'Clothes', 'jwhcf', '2023-10-28 11:33:03', 1, 0, '1', 0),
(163, '8', 'offer', 'products', 'Food Materials', 'Rice', '2023-10-28 11:36:59', 1, 1, '8', 1),
(164, '8', 'offer', 'products', 'Carpenter', 'Fvvevv', '2023-10-28 11:39:20', 1, 0, '1', 0),
(165, '8', 'offer', 'products', 'Study Materials', 'Book', '2023-10-28 11:43:23', 1, 0, '1', 0),
(166, '61', 'request', 'products', 'Food Materials', 'Ghjk', '2023-10-31 09:28:40', 1, 1, '61', 1),
(167, '62', 'request', 'products', 'Food Materials', 'Xdhnbƒgn', '2023-10-31 10:24:38', 1, 1, '62', 1),
(169, '65', 'offer', 'products', 'Food Materials', '1', '2023-11-14 10:37:24', 1, 0, '65', 0),
(170, '65', 'offer', 'medical emergency', 'Medicine', '2', '2023-11-14 10:37:31', 1, 1, '65', 1),
(171, '65', 'offer', 'services', 'Plumbing', '3', '2023-11-14 10:37:40', 1, 0, '65', 0),
(172, '65', 'request', 'products', 'Food Materials', '4', '2023-11-14 10:37:50', 1, 1, '65', 1),
(173, '65', 'request', 'medical emergency', 'Blood', '5', '2023-11-14 10:37:57', 1, 0, '65', 0),
(174, '65', 'request', 'services', 'House Keeping', '6', '2023-11-14 10:38:10', 1, 0, '65', 0),
(175, '16', 'request', 'products', 'food_materials', 'rice bags - 4', '2023-11-14 11:50:58', 0, 0, '', 0),
(176, '16', 'request', 'medical emergency', 'medicine', 'paracetamol', '2023-11-14 11:51:09', 1, 0, '8', 0),
(177, '16', 'request', 'services', 'housekeeping', 'available in gachibowli', '2023-11-14 11:51:31', 0, 0, '', 0),
(178, '16', 'offer', 'medical emergency', 'blood', 'A -ve available', '2023-11-14 11:52:33', 1, 0, '16', 0),
(179, '16', 'offer', 'services', 'plumbing', 'available in nampally', '2023-11-14 11:52:51', 0, 0, '', 0),
(180, '8', 'request', 'products', 'Clothes', 'Fds', '2023-11-14 12:57:08', 0, 0, '', 0),
(181, '8', 'request', 'medical emergency', 'Blood', 'Asd', '2023-11-14 12:57:16', 0, 0, '', 0),
(182, '8', 'request', 'services', 'Plumbing', 'Ngjy', '2023-11-14 12:57:23', 0, 0, '', 0),
(183, '8', 'offer', 'products', 'Clothes', 'Tfr', '2023-11-14 12:57:50', 1, 0, '1', 0),
(184, '8', 'offer', 'medical emergency', 'Blood', 'Uy6df', '2023-11-14 12:57:56', 1, 0, '8', 0),
(185, '8', 'offer', 'services', 'Plumbing', 'Tf', '2023-11-14 12:58:03', 0, 0, '', 0),
(186, '66', 'offer', 'products', 'Food Materials', 'I have rice bags -4 ', '2023-11-14 13:55:04', 1, 1, '8', 0),
(187, '60', 'offer', 'products', 'food_materials', 'hii', '2023-11-16 09:56:36', 0, 0, '', 0),
(188, '16', 'offer', 'medical emergency', 'medicine', 'a -ve', '2023-11-16 12:12:54', 0, 0, '', 0),
(189, '16', 'offer', 'products', 'carpenter', 'cot', '2023-11-16 12:16:32', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int(25) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `details` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewid`, `ref_id`, `category`, `details`, `user_id`, `review`) VALUES
(15, 112, 'study_mater', 'Figma ', 16, 'bad'),
(16, 153, 'Food Material', 'good', 8, 'avg'),
(17, 150, 'Carpenter ', 'Zsgrz ', 8, 'good'),
(18, 103, 'Clothes ', 'shirts ', 16, 'good'),
(22, 96, 'clothes', 'hoddies', 2, 'good 4 out of 5'),
(23, 0, '', '', 0, ''),
(24, 0, '', '', 0, ''),
(25, 0, '', '', 0, 'Heyay'),
(26, 77, 'carpenter', 'need bed', 1, 'Complted'),
(27, 77, 'carpenter', 'need bed', 1, 'Haiiii');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `user_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_id`, `username`, `email`, `phone_number`, `pass`) VALUES
(1, 'maina', 'maina', '565474745747', '1234'),
(8, 'sony1', 'Sony', '6767676767', 'ssss'),
(14, 'bhargava', 'gsbhargava2004@gmail.com', '8317583098', 'bhar'),
(15, 'syam', 'syam@gmail.com', '9849343225', 'shy'),
(16, 'sourav', 'sourav@gmail.com', '1234567890', 'sour'),
(17, 'Ishika', 'Ishika@gmail.com', '9908152187', 'ish'),
(18, 'lahari', 'lahari@gmail.com', '7765487654', 'lah'),
(21, 'pranavi', 'pranavi@gmail.com', '4546474849', 'pra'),
(31, 'rishi', 'rishi@gmail.com', '2323232323', 'ris'),
(33, 'nirmala', 'nirmalap.sse@saveetha.com', '9884420495', 'Laugh'),
(40, 'aadya', 'aadya@gmail.com', '5656565656', 'aad'),
(41, 'hasini', 'hasini@gmail.com', '666666666', 'has'),
(42, 'hasini', 'hasini@gmail.com', '666666666', 'has'),
(43, 'karthik', 'karthik@gmail.com', '6666666677', 'kar'),
(44, 'Praneeth', 'praneeth@gmail.com', '1234567890', 'pra'),
(55, 'prasanna', 'prasanna@gmail.com', '9182054887', 'peas'),
(56, 'prasanna', 'prasanna', '75476', 'pras'),
(59, 'chakri', 'chakri', '65654', 'chak'),
(60, 'vasuu', 'vasuu', '2424242424', 'vasuu'),
(61, 'josh', 'josh', '9083507667', 'josh'),
(62, 'josh1', 'josh1', '87395697846', 'josh1'),
(63, 'josh3', 'josh3', '8989898989', 'josh3'),
(64, 'sony4', 'sony4@mail.com', '4444444444', 'sony4'),
(65, 'sony3', 'sony3@mail.com', '3333333333', 'sony3'),
(66, 'sony6', 'sony6@gmail.com', '8897382361', 'sony6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offer_request`
--
ALTER TABLE `offer_request`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`user_id`,`email`,`phone_number`),
  ADD UNIQUE KEY `user_id` (`user_id`,`email`,`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offer_request`
--
ALTER TABLE `offer_request`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
