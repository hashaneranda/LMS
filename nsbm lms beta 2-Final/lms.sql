-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 08:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `module_code` varchar(10) NOT NULL,
  `module_name` varchar(200) NOT NULL,
  `dept_ID` varchar(4) NOT NULL,
  `yr` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`module_code`, `module_name`, `dept_ID`, `yr`) VALUES
('code 1', 'test 1', 'SOC', 'year 0');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_ID` varchar(4) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_ID`, `dept_name`) VALUES
('SOB', 'School of Business'),
('SOC', 'School of Computing');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_image` text NOT NULL,
  `event_content` text NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `event_name`, `event_image`, `event_content`, `venue`, `date`, `time`) VALUES
(1, 'Google IO 2017', './uploads/events/123.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget elit aliquam, posuere ex quis, malesuada mauris. Ut posuere in diam eu feugiat. Vestibulum at ultrices lorem. Sed in accumsan urna. Nulla tincidunt scelerisque molestie. Proin orci ligula, bibendum ac urna vulputate, dignissim accumsan elit. Proin pulvinar odio velit. Etiam lorem sapien, facilisis quis lobortis quis, blandit sit amet enim. Aenean aliquam eget turpis ac euismod. Maecenas eu sodales leo. ', 'galle', '2017-07-07', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `eventuser`
--

CREATE TABLE `eventuser` (
  `user_id` int(5) NOT NULL,
  `events_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventuser`
--

INSERT INTO `eventuser` (`user_id`, `events_id`) VALUES
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inq_id` int(11) NOT NULL,
  `inq_name` varchar(255) NOT NULL,
  `inq_email` varchar(255) NOT NULL,
  `inq_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inq_id`, `inq_name`, `inq_email`, `inq_msg`) VALUES
(6, 'hello', 'hello@gmailcom', 'wfw');

-- --------------------------------------------------------

--
-- Table structure for table `student-enrol`
--

CREATE TABLE `student-enrol` (
  `user_id` int(5) NOT NULL,
  `module_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(5) NOT NULL,
  `sub_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `sub_email`) VALUES
(1, 'hello@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `Index_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_fullname`, `user_email`, `user_image`, `role`, `randSalt`, `Index_no`) VALUES
(6, 'hello', '1234', 'hello', 'shehansuneth@gmail.com', '', 'student', '', '1234'),
(11, 'root', '$1$JL..e5/.$AXic3.8.7blksKRg9BqKm.', '', '', '', 'admin', '$2y$10$iusesomecrazystrings22', NULL),
(12, 'lecturer4', '$1$Mf1.ls..$kPdYP0zUpEe.chfwWagc31', 'lecturer 4', 'lec4@gmail.com', '', 'lecturer', '$2y$10$iusesomecrazystrings22', NULL),
(13, 'student5', '$1$HA/.EZ/.$B5Tnjzo/vExuLCmvt2BBF.', 'student5', 'shehansuneth@gmail.com', '', 'student', '$2y$10$iusesomecrazystrings22', '1234'),
(14, 'lecturer1', '$1$gS..pl3.$AXc6i1kw95K0xzutFJm1z.', 'lecturer 1', 'lec1@gmail.com', '', 'lecturer', '$2y$10$iusesomecrazystrings22', NULL),
(15, 'student1', '$1$hl3.W02.$C6fysWL5.PDaKDyM084jE0', 'student1', 'student1@gmail.com', '', 'student', '$2y$10$iusesomecrazystrings22', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`module_code`(4),`module_name`) USING BTREE,
  ADD KEY `fkcourseDept` (`dept_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `eventuser`
--
ALTER TABLE `eventuser`
  ADD PRIMARY KEY (`user_id`,`events_id`),
  ADD KEY `fkuserEventevent` (`events_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `student-enrol`
--
ALTER TABLE `student-enrol`
  ADD PRIMARY KEY (`user_id`,`module_code`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fkcourseDept` FOREIGN KEY (`dept_ID`) REFERENCES `department` (`dept_ID`);

--
-- Constraints for table `eventuser`
--
ALTER TABLE `eventuser`
  ADD CONSTRAINT `fkuserEventevent` FOREIGN KEY (`events_id`) REFERENCES `events` (`events_id`),
  ADD CONSTRAINT `fkuserEventuser` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `student-enrol`
--
ALTER TABLE `student-enrol`
  ADD CONSTRAINT `fkUserEnroll` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
