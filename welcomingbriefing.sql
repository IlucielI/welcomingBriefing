-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 06:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welcomingbriefing`
--

-- --------------------------------------------------------

--
-- Table structure for table `link-conference`
--

CREATE TABLE `link-conference` (
  `link_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link-conference`
--

INSERT INTO `link-conference` (`link_id`, `link`) VALUES
(1, 'https://zoom.us/j/96939903529?pwd=OWZVRTAyUkVJYXZ4cmRTelA2T2hFdz09');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_page` varchar(50) NOT NULL,
  `portfolio_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_page`, `portfolio_file`) VALUES
(1, 'founderSpeech', '9e727574a2-Speech_by_Googles_Global_Managing_Director_(Google_Marketing_Solutions)_-_Todd_Rowe.mp4'),
(2, 'whoIsFXM', 'op_annual_2021_02.mp4'),
(3, 'whatWeDO', '92492b9e32-revision.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'employee'),
(3, 'internship');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'wonderkid', 'wonderkid123', 'natsu.nana97@gmail.com', 3, 1, '2021-04-20 00:00:00'),
(3, 'escanor', '48d1266093cf317748', 'natsu.nana98@gmail.com', 3, 1, '2021-04-20 15:27:15'),
(5, 'admin', 'admin', '', 1, 1, '2021-04-26 13:13:53'),
(8, 'cumi_kota', '2aca3e6e70a36a07f3', 'sheila@fxmweb.com', 2, 1, '2021-04-27 11:01:06'),
(9, 'Bayu', '41ee79092e2458574c', 'bayu.anugerah1@gmail.com', 1, 1, '2021-11-02 11:49:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link-conference`
--
ALTER TABLE `link-conference`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link-conference`
--
ALTER TABLE `link-conference`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
