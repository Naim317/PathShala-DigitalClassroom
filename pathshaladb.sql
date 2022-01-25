-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 10:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathshaladb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboardinfo`
--

CREATE TABLE `dashboardinfo` (
  `id` int(11) NOT NULL,
  `classcode` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `temail` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pathshaladata`
--

CREATE TABLE `pathshaladata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pathshaladata`
--

INSERT INTO `pathshaladata` (`id`, `name`, `class`, `address`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Kala Tasin', 1, 'Dhaka BD', 'amaderemail@gmail.com', 2147483647, '1234', 'on'),
(2, 'Md Ar Shuvoda', 2, 'Doba', 'myemail@gmail.com', 2147483647, '1234', 'on'),
(4, 'nai', 12, 'aasddd', 'amds@', 2435351, 'qwwe', 'Student'),
(6, 'dsagtd', 0, 'detyh', '5674', 3425, 'we53', 'Student'),
(7, 'sdadsf', 0, 'q2werfcadf', 'wAEQ3ZSDC', 2132343, 'rer3', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboardinfo`
--
ALTER TABLE `dashboardinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pathshaladata`
--
ALTER TABLE `pathshaladata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboardinfo`
--
ALTER TABLE `dashboardinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pathshaladata`
--
ALTER TABLE `pathshaladata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
