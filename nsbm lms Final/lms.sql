-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 06:43 PM
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
('', 'BSc (Honours) Marketing Management', 'SOB', 'year 1'),
('', 'BSc (Honours) Operations and Logistics Management', 'SOB', 'year 1'),
('BMIS104 ', 'Computer Technology', 'SOC', 'year 1'),
('BMIS102 ', 'Quantitative Techniques for Computing', 'SOC', 'year 1'),
('BMIS113 ', 'System Design Project', 'SOC', 'year 1'),
('BMIS110 ', 'System Software', 'SOC', 'year 2'),
('CN101.3 ', 'Data Communication and Networks', 'SOC', 'year 1'),
('CS107.3 ', 'Programming with C# -Plymouth Group A', 'SOC', 'year 1');

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
(1, 'Google IO 2017', './uploads/events/Google IO 2017new_statesman_events.jpg', 'Vestibulum euismod est nec quam efficitur porttitor. Morbi at lectus eget turpis hendrerit bibendum. Integer eget nisi magna. Morbi tincidunt urna eu elit maximus egestas. Mauris eget purus velit. Duis lobortis, nulla non laoreet fringilla, massa orci lobortis neque, eu tristique nisl turpis sed lectus. Maecenas quis ante ac purus convallis pulvinar quis ut metus. Praesent condimentum finibus odio, quis eleifend mauris tincidunt quis. Vestibulum auctor arcu ac ullamcorper dictum. Donec maximus convallis tempus. ', 'galle', '2017-07-07', '12:00'),
(2, 'Music Festival', './uploads/events/Music Festivalpexels-photo-196652.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in eros vel urna tristique iaculis eu a odio. Sed vel lorem placerat, vestibulum metus nec, facilisis metus. Phasellus ullamcorper, libero in fringilla venenatis, risus ex consequat justo, vel mattis velit turpis porta sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu odio enim. Suspendisse eget sagittis nisl. Suspendisse ac quam a ante ultricies blandit. Duis euismod vel nibh at euismod. Sed sed varius enim, eget cursus ex. Nam congue id nibh id euismod. Nullam enim augue, aliquet quis ante at, cursus blandit ipsum.', 'NSBM auditorium', '2017-10-20', '10:00'),
(3, 'Sports meet 2017', './uploads/events/Sports meet 2017pexels-photo78978.jpg', 'Duis id odio ante. Proin varius vestibulum sodales. Sed in lorem nec magna posuere aliquet. Proin sed risus cursus, maximus nibh eget, molestie sapien. Praesent vel magna id lectus ultrices gravida. Donec lorem ante, finibus ac mi at, cursus aliquet augue. Aenean facilisis sem in bibendum blandit. Phasellus eleifend sem dolor, at ultrices est pulvinar id. Sed viverra sollicitudin dolor, at tempus mauris interdum quis. Duis maximus at leo ac efficitur. Curabitur sed viverra tellus. Proin risus diam, elementum eu tristique a, consectetur ut nibh. ', 'NSBM ground', '2017-12-20', '08:00');

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
(15, 2);

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
(6, 'hello', '123', 'hello', 'hello@gmail.com', '', 'student', '', '1234'),
(11, 'root', '$1$JL..e5/.$AXic3.8.7blksKRg9BqKm.', '', '', '', 'admin', '$2y$10$iusesomecrazystrings22', NULL),
(12, 'lecturer4', '$1$Mf1.ls..$kPdYP0zUpEe.chfwWagc31', 'lecturer 4', 'lec4@gmail.com', '', 'lecturer', '$2y$10$iusesomecrazystrings22', NULL),
(13, 'student5', '$1$HA/.EZ/.$B5Tnjzo/vExuLCmvt2BBF.', 'student5', 'student5@gmail.com', '', 'student', '$2y$10$iusesomecrazystrings22', '1234'),
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
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
