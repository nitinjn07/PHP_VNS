-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 07:23 AM
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
-- Database: `expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_exp`
--

CREATE TABLE `daily_exp` (
  `id` int(11) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  `delstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daily_exp`
--

INSERT INTO `daily_exp` (`id`, `itemname`, `price`, `qty`, `pdate`, `delstatus`) VALUES
(1, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(2, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(3, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(4, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(5, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(6, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(7, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(8, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(9, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(10, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(11, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(12, 'Dairy Milk', '20', '5', '2024-08-17', 1),
(13, 'Paneer', '100', '1', '2024-08-17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_exp`
--
ALTER TABLE `daily_exp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_exp`
--
ALTER TABLE `daily_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
