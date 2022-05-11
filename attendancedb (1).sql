-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 08:47 PM
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
-- Database: `attendancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `autho`
--

CREATE TABLE `autho` (
  `id` int(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autho`
--

INSERT INTO `autho` (`id`, `password`, `name`) VALUES
(123, 'ram', 'ramayan');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `Course_name` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `Course_name`, `status`, `date`) VALUES
(1, 'Preet', '0', ''),
(2, 'Akshay', '0', ''),
(3, 'Ram', '0', ''),
(4, 'Megha', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `username` varchar(30) NOT NULL,
  `branch` char(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`username`, `branch`, `userid`, `password`) VALUES
('raj', 'aa', '122', '123'),
('GL prajapati', 'cs', '1', '123'),
('raj', 'etc', '345', '123'),
('ravindra', 'it', '12', '123');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_table`
--

CREATE TABLE `lecture_table` (
  `subject` varchar(20) NOT NULL,
  `day` varchar(10) NOT NULL,
  `lecture` int(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `Attend` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='apporved' ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `lecture_table`
--

INSERT INTO `lecture_table` (`subject`, `day`, `lecture`, `branch`, `semester`, `roll_no`, `Attend`, `date`) VALUES
('coa', 'Monday', 2, 'cs', 2, '18C7088', 'yes', '2021-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `rollno` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`rollno`, `name`, `branch`, `semester`, `password`) VALUES
('12234', 'ttt', 'cd', '5', '123'),
('de18690', 'vipul porwal', 'cs', '1', '4'),
('de18999', 'ayush', 'tc', '4', '123'),
('de2020', 'sanskriti', 'cs', '6th', '123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_table`
--

CREATE TABLE `teacher_table` (
  `name` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_table`
--

INSERT INTO `teacher_table` (`name`, `branch`, `semester`, `course`, `user_id`, `password`) VALUES
('prateek onkara', 'cs', '2', 'machin learning', '10', '123'),
('goyal', 'cs', '5', '1', '12', '0000'),
('abc', 'cs', '1', '1', '22', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`branch`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `teacher_table`
--
ALTER TABLE `teacher_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
