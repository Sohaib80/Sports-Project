-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 04:10 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`) VALUES
(1, 'Computer Science'),
(5, 'Geology'),
(6, 'Chemistry'),
(7, 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `game_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `game_name`) VALUES
(3, 'Cricket'),
(4, 'Football'),
(5, 'Vollyball'),
(6, 'Hockey');

-- --------------------------------------------------------

--
-- Table structure for table `match_shedules`
--

CREATE TABLE `match_shedules` (
  `id` int(11) NOT NULL,
  `team_one` varchar(50) NOT NULL,
  `game_type` varchar(50) NOT NULL,
  `team_two` varchar(50) NOT NULL,
  `match_date` varchar(20) NOT NULL,
  `match_time` varchar(20) NOT NULL,
  `match_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match_shedules`
--

INSERT INTO `match_shedules` (`id`, `team_one`, `game_type`, `team_two`, `match_date`, `match_time`, `match_status`) VALUES
(1, 'CS Apple', 'football', 'Geology Markhor', '01/01/2021', '2:00PM', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `team account`
--

CREATE TABLE `team account` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_gmail` varchar(50) NOT NULL,
  `team_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team account`
--

INSERT INTO `team account` (`id`, `department_name`, `team_name`, `team_gmail`, `team_password`) VALUES
(1, '1', 'CS Apple', 'cs@gmail.com', 'sport'),
(2, '5', 'Geology Markhor', 'geo@gmail.com', 'sport'),
(3, '6', 'Chemistry Bond', 'che@gmail.com', 'sport');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_shedules`
--
ALTER TABLE `match_shedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team account`
--
ALTER TABLE `team account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `match_shedules`
--
ALTER TABLE `match_shedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team account`
--
ALTER TABLE `team account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
