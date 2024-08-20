-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 08:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `computer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `hdd` varchar(50) NOT NULL,
  `ssd` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `keyboard` varchar(50) NOT NULL,
  `extra` text NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `software` varchar(100) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `delstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `computer_name`, `address`, `processor`, `hdd`, `ssd`, `ram`, `keyboard`, `extra`, `collegename`, `location`, `software`, `problem`, `create_date`, `delstatus`) VALUES
(4, 'LAB-PC-1', '', 'dual_core', '443', '44', '44', 'yes', 'sadfasd', 'Engineering', 'asdsad', 'msoffice,antivirus', 'asdsad', '2024-08-20 05:51:32', 0),
(5, 'LAB-PC-2', '133', 'dual_core', '343', '233', '33', 'yes', 'dfsafda', 'Engineering', 'asdas', 'msoffice', 'asdasd', '2024-08-20 05:58:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `computer_name` (`computer_name`),
  ADD UNIQUE KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
