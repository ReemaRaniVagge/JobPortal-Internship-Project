-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 08:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `jobdescription` varchar(200) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `CTC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cname`, `position`, `jobdescription`, `skills`, `CTC`) VALUES
(2, '1stop', 'php dev', 'there is an opening for php developer', 'PHP,HTML,CSS', '3-5LPA'),
(3, 'TCS', 'HR', 'looking for software skills', 'PYTHON', '12LPA'),
(5, 'Infosys', 'CEO', 'waiting for skilled persons', 'Python,Java', '12LPA'),
(6, 'Google', 'Manager', 'looking for software skills', 'JAVA', '12LPA'),
(7, '1stop', 'php', 'looking for improved skills', 'html,css,jav', '2LPA'),
(8, 'rani consultancies', 'python developer', 'waiting for skilled persons', 'PYTHON', '3-5LPA');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `apply` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `apply`, `qualification`, `year`) VALUES
(2, 'hey', 'PHP DEV', 'BTECH', '2023'),
(3, 'Goundra_Amarnath', 'Manager', 'BTECH', '2023'),
(5, 'mallik', 'CEO', 'Masters', '1999'),
(7, 'you', 'CEO', 'Masters', '1999'),
(8, 'vinay', 'python', 'Masters', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `email`, `number`, `password`) VALUES
(2, 'reemarani', 'reemaranivagge28@gmail.com', 9010712772, 'REEMA'),
(3, 'reemarani', 'vreemarani_ece1904b9@mgit.ac.in', 9010712772, 'HEY'),
(12, 'Reema Rani', 'reema@gmail.com', 9010712772, 'heyy'),
(13, 'Amarnath Goundra', 'amarnath@gmail.com', 5123456789, 'ammuu'),
(15, 'htri', 'gamarnath_ece190470@mgit.ac.in', 7648649855, 'youu'),
(17, 'Reema Rani', 'rani@gmail.com', 9291234567, 'hey'),
(18, 'vinay', 'vvvv@gmail.com', 9999999999, '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
