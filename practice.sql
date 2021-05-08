-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 04:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `amount`) VALUES
(101, 'utpal', 'utpal@gmail.com', '40533'),
(102, 'kumar', 'kumar@gmail.com', '17589'),
(103, 'priyam', 'priyam@gmail.com', '80467'),
(104, 'ayush', 'ayush@gmail.com', '10000'),
(105, 'subham', 'subham@gmail.com', '5100'),
(106, 'ashmit', 'ashmit@gmail.com', '40100'),
(107, 'heenal', 'heenal@gmail.com', '28000'),
(108, 'priyanka', 'priyanka@gmail.com', '51411'),
(109, 'hari', 'hari@gmail.com', '30400'),
(110, 'vedesh', 'vedesht@gmail.com', '41000'),
(111, 'satyam', 'satyam@gmail.com', '20500'),
(112, 'mohan', 'mohan@gmail.com', '42500'),
(113, 'ashkat', 'akshat@gmail.com', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `sno` int(255) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `sender_id` int(100) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` int(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `receiver_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`sno`, `sender`, `sender_id`, `receiver`, `amount`, `time`, `receiver_id`) VALUES
(1, 'utpal', 101, 'priyam', 500, '2021-05-07 18:15:57', 103),
(2, 'subham', 105, 'priyam', 5000, '2021-05-07 18:16:55', 103),
(3, 'ayush', 104, 'utpal', 11233, '2021-05-08 02:51:01', 101),
(6, 'heenal', 107, 'priyanka', 2000, '2021-05-08 04:56:21', 108),
(7, 'hari', 109, 'vedesh', 200, '2021-05-08 04:59:44', 110),
(10, 'ashkat', 113, 'utpal', 20000, '2021-05-08 07:50:46', 101);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `fkey` (`sender_id`),
  ADD KEY `fkey2` (`receiver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`sender_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `fkey2` FOREIGN KEY (`receiver_id`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
