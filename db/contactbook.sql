-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 01:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `nick` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile1` varchar(12) NOT NULL,
  `mobile2` varchar(12) NOT NULL,
  `landline` varchar(12) NOT NULL,
  `address` varchar(160) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `note` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `nick`, `email`, `mobile1`, `mobile2`, `landline`, `address`, `type`, `gender`, `note`) VALUES
(25, 'chamod', 'chamu', 'chamod@gmail.com', '0769816111', '0525789632', '4856984569', 'dankotuwa', 2, 1, 'this is'),
(26, 'dushyantha', 'dush', 'dush@gmail.com', '0769816111', '0525789632', '4856984569', 'dankotuwa', 3, 1, 'this is'),
(27, 'rusiru', 'russa', 'rusiru@gmail.com', '0769816111', '0525789632', '4856984569', 'dankotuwa', 1, 1, 'this is'),
(28, 'sadali', 'sada', 'sadali@gmail.com', '0769816111', '0525789632', '4856984569', 'dankotuwa', 2, 2, 'this is'),
(29, 'niluka', 'nilu', 'nilu@gmail.com', '0769816111', '0525789632', '4856984569', 'dankotuwa', 1, 2, 'this is'),
(30, 'dasun', 'dassa', 'dasun@gmail.com', '0769816111', '0525789632', '4856984569', 'dankotuwa', 2, 1, 'this is'),
(31, 'nipun', 'nippa', 'nipun@gmail.com', '0769816111', '0525789632', '4856984569', 'dankotuwa', 0, 1, 'this is'),
(33, 'nuwan', 'nuwa', 'nuwan@gamil.com', '0798569582', '0798563121', '0312259790', 'dankotuwa', 1, 1, 'nuwan is my best friend');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'chamod', 'chamod@gmail.com', '$2y$10$fc2FiyY2IseOOuw4gEakTuiIxuUahGb.ZmV5uwwF/vK1kZ0MDn.UK'),
(2, 'dush', 'dush@jnj.com', '$2y$10$qQ.BLgEP1K/oW4Uo0yYMneH0umNs6FlR0VVFHpouxZhPWqjfdDPiu'),
(3, 'sadun', 'sadun@gmail.com', '$2y$10$XiNgTbWmtVl9a6nwKkwOwO8giQq2nP.ESKrX5uaJDWayWnbE5Yo/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
