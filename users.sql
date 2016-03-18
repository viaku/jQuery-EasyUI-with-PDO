-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 02:50 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pts_db_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`) VALUES
(3, 'victoriassercrt', 'james', 'jeheheheko', '$2y$10$x6i63dWILSqxYuf3NnrfaO9/ug5sI0yZyry5dFWd7apPNhl1pANKe', 'james@hello.com'),
(4, 'penguin', 'Peter', 'Jackson', '$2y$10$QNaS5mob4n6PG5nzMZTrN.OuHHT06.InaUylXKhJMRDA3P3BZFp1u', 'hellokitty@pandas.com'),
(9, 'bana222na', 'vick', 'kumar', '$2y$10$tOtAgFzxCTly7PrIHHFbUeM75CBe4LjFNACY3jQZjkNPIQ1Hip5gq', 'veeksie@gmail.com'),
(11, 'JB1234', 'James', 'Bond', '$2y$10$Ab/KxY1euU5kt4wSDA1OPO15nTMpJ374WT43cP0SQ/rjbLsQODvaK', 'ddjdjddjata@hollyw00d.cum'),
(12, 'pingpong', 'Ping', 'Pong', '$2y$10$tnKQ0e12tTjcvtTT50Jh8u7wXK0r90c4rBBm7LWBiHJ90u8u1Eta6', 'lol@pong.ping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
