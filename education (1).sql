-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 06:53 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `compiler_design`
--

CREATE TABLE `compiler_design` (
  `unitno` int(1) NOT NULL,
  `unitname` varchar(100) DEFAULT NULL,
  `syllabus` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compiler_design`
--

INSERT INTO `compiler_design` (`unitno`, `unitname`, `syllabus`) VALUES
(1, 'ac', 'higgbb');

-- --------------------------------------------------------

--
-- Table structure for table `first_year_a_cse`
--

CREATE TABLE `first_year_a_cse` (
  `rollno` varchar(15) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `regno` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_year_a_cse`
--

INSERT INTO `first_year_a_cse` (`rollno`, `name`, `regno`) VALUES
('19ucse001', 'Shalini', '920419104092'),
('19ucse003', 'Gayathri', '920418104012'),
('19ucse005', 'Sneha', '920418104098'),
('19ucse010', 'Vijay', '920418104102'),
('19ucse011', 'Rahul', '920418104070');

-- --------------------------------------------------------

--
-- Table structure for table `first_year_b_cse`
--

CREATE TABLE `first_year_b_cse` (
  `rollno` varchar(15) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `regno` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_year_b_cse`
--

INSERT INTO `first_year_b_cse` (`rollno`, `name`, `regno`) VALUES
('19ucse002', 'Misti', '920418104030'),
('19ucse003', 'Yasin', '920418104034'),
('19ucse012', 'Thiru', '920418104100'),
('19ucse013', 'Renu', '920418104065'),
('19ucse015', 'Dinesh', '920418104013');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `dept` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`, `status`, `dept`) VALUES
('1111', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 'cse'),
('T1234', 'Ravi', '6b7f29a4feeb2bcf8d9de882d2030a5e', 0, 1, 'ece'),
('T2345', 'Raji', 'b1648ecee4f906defb912a1e891a443f', 0, 1, 'it'),
('T3456', 'Yogam', '1a22316599370b5e322a01015fb62d03', 0, 0, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `unitno` int(1) NOT NULL,
  `unitname` varchar(100) DEFAULT NULL,
  `syllabus` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`unitno`, `unitname`, `syllabus`) VALUES
(1, 'ac', 'ddssdff');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_computing`
--

CREATE TABLE `mobile_computing` (
  `unitno` int(1) NOT NULL,
  `unitname` varchar(100) DEFAULT NULL,
  `syllabus` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_computing`
--

INSERT INTO `mobile_computing` (`unitno`, `unitname`, `syllabus`) VALUES
(2, '33', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subcode` varchar(30) NOT NULL,
  `subname` varchar(60) NOT NULL,
  `year` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subcode`, `subname`, `year`, `dept`) VALUES
('cs3456', 'mobile_computing', 'first_year_a', 'cse'),
('cs1234', 'internet_programming', 'first_year_b', 'cse'),
('cs5678', 'Compiler_Design', 'first_year_a', 'cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compiler_design`
--
ALTER TABLE `compiler_design`
  ADD PRIMARY KEY (`unitno`);

--
-- Indexes for table `first_year_a_cse`
--
ALTER TABLE `first_year_a_cse`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `first_year_b_cse`
--
ALTER TABLE `first_year_b_cse`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`unitno`);

--
-- Indexes for table `mobile_computing`
--
ALTER TABLE `mobile_computing`
  ADD PRIMARY KEY (`unitno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
