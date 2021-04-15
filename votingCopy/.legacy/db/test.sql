-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 06:47 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `activity_description` varchar(150) NOT NULL,
  `activity_date` date DEFAULT NULL,
  `activity_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_position` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_position`, `username`, `password`, `photo`, `reg_date`) VALUES
(1, 'john cena', 'wrestler', 'admin', 'admin', '', '2021-02-25 04:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `winners_name` varchar(30) NOT NULL,
  `school_year` datetime NOT NULL,
  `platform_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `total_votes` int(11) NOT NULL,
  `party_name` varchar(30) NOT NULL,
  `platform_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `student_id`, `position_id`, `total_votes`, `party_name`, `platform_info`) VALUES
(1, 12384, 90, 0, 'Birthday Party', '1'),
(2, 84489, 90, 0, 'Party Rock', ''),
(3, 2134, 90, 0, 'Partyda', ''),
(12, 421, 80, 0, 'Party Rock', ''),
(45, 48935, 70, 0, 'Party Rock', ''),
(78, 64465, 70, 0, 'Birthday Party', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_position`
--

CREATE TABLE `candidate_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(30) NOT NULL,
  `position_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_position`
--

INSERT INTO `candidate_position` (`position_id`, `position_name`, `position_description`) VALUES
(70, 'Branch Manager', ''),
(80, 'Assistant Regional Manager', ''),
(90, 'Regional Manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `voting_status` varchar(15) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `gender`, `email`, `password`, `voting_status`, `photo`) VALUES
(1, 'Creed Bratton', 'Male', 'jj@mm.com', '123', '', ''),
(4, 'Jo Bennet', '', '', '', '', ''),
(14, 'David Wallace', '', '', '', '', ''),
(25, 'Nellie Bertram', '', '', '', '', ''),
(31, 'Phyllis Vance', 'Female', 'phV@m.com', '54321', '', ''),
(55, 'Kevin Malone', 'Male', 'jj@mail.com', '12345', 'Voted', '/img/berkel.jpg'),
(78, 'Gabe Lewis', '', '', '', '', ''),
(214, 'Meredith Palmer', '', '', '', '', ''),
(215, 'Oscar Martinez', '', '', '', '', ''),
(312, 'Jan Levinson', '', '', '', '', ''),
(421, 'Dwight Schrute', 'Male', '', '', '', ''),
(423, 'Robert California', '', '', '', '', ''),
(2134, 'Darryl Philbin', '', '', '', '', ''),
(2337, 'Karen Filippelli', '', '', '', '', ''),
(12384, 'Michael Scott', 'Male', 'wa@b.c', '36', '', ''),
(48935, 'Pamela Beesly', 'Female', '', '', '', ''),
(54512, 'Stanley Hudson', '', '', '', '', ''),
(61235, 'Angela Martin', 'Female', '', '', '', ''),
(64465, 'Jim Halpert', 'Male', 'ubou@mm.co', '132456', '', ''),
(84489, 'Andrew Bernard', 'Male', '', '', '', ''),
(213854, 'Holly Flax', 'Female', '', '', '', ''),
(215678, 'Ryan Howard', '', '', '', '', ''),
(515321, 'Erin Hannon', 'Female', '', '', '', ''),
(86432123, 'Kelly Kapoor', 'Female', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vote_summary`
--

CREATE TABLE `vote_summary` (
  `vote_log_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `candidate_position`
--
ALTER TABLE `candidate_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `vote_summary`
--
ALTER TABLE `vote_summary`
  ADD PRIMARY KEY (`vote_log_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `candidate_position`
--
ALTER TABLE `candidate_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86432124;
--
-- AUTO_INCREMENT for table `vote_summary`
--
ALTER TABLE `vote_summary`
  MODIFY `vote_log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `archive`
--
ALTER TABLE `archive`
  ADD CONSTRAINT `archive_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `candidate_position` (`position_id`);

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `candidate_position` (`position_id`);

--
-- Constraints for table `vote_summary`
--
ALTER TABLE `vote_summary`
  ADD CONSTRAINT `vote_summary_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `vote_summary_ibfk_2` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
