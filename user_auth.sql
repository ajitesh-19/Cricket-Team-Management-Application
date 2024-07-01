-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 10:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `player1` varchar(50) DEFAULT NULL,
  `role1` varchar(50) DEFAULT NULL,
  `player2` varchar(50) DEFAULT NULL,
  `role2` varchar(50) DEFAULT NULL,
  `player3` varchar(50) DEFAULT NULL,
  `role3` varchar(50) DEFAULT NULL,
  `player4` varchar(50) DEFAULT NULL,
  `role4` varchar(50) DEFAULT NULL,
  `player5` varchar(50) DEFAULT NULL,
  `role5` varchar(50) DEFAULT NULL,
  `player6` varchar(50) DEFAULT NULL,
  `role6` varchar(50) DEFAULT NULL,
  `player7` varchar(50) DEFAULT NULL,
  `role7` varchar(50) DEFAULT NULL,
  `player8` varchar(50) DEFAULT NULL,
  `role8` varchar(50) DEFAULT NULL,
  `player9` varchar(50) DEFAULT NULL,
  `role9` varchar(50) DEFAULT NULL,
  `player10` varchar(50) DEFAULT NULL,
  `role10` varchar(50) DEFAULT NULL,
  `player11` varchar(50) DEFAULT NULL,
  `role11` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, '1', 'a@gmail.com', '$2y$10$qmicr7LhbXrYan8gm2D2H.Ew2Hgxy.dWiIwtYxG.KPzlCnM9I.77W'),
(2, '11', 'aa@gmail.com', '$2y$10$8tIdioTi/arKKFlKFnbZi.jkcpGUid4Y2wlTpm64oPQuB01vB3Voa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_team` (`email`);

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
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
