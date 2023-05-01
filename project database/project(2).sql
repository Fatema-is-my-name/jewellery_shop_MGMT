-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Apr 26, 2023 at 03:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `order_id` int(10) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `total_payment` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`order_id`, `firstname`, `email`, `address`, `city`, `state`, `zip`, `total_payment`) VALUES
(1, 'Fatema', 'fyb@gmail.com', 'Samarth nagar', 'Pune', 'Maharashtra', '13057', 41650),
(2, 'Aayesha', 'maayesha@gmail.com', 'Balasaheb nagar', 'Lonand', 'Maharashtra', '413102', 530000),
(3, 'Fatema', 'fyb@gmail.com', 'Samarth nagar', 'Pune', 'Maharashtra', '13057', 34500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`) VALUES
('user', '12345678'),
('user', '12345678'),
('user', '12345678'),
('user', '12345678'),
('user', 'gjhvjv'),
('user', 'gjhvjv'),
('user', '4647'),
('user', '4647'),
('user', '2416'),
('user', '2416'),
('user', 'weg'),
('user', 'weg'),
('user', 'e99a18c4'),
('user', 'e99a18c4'),
('user', 'abc123'),
('user', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `name` varchar(20) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `gen` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`name`, `addr`, `mno`, `gen`) VALUES
('Fatema', 'Samarth nagar', '8623816786', 'Female'),
('Aayesha', 'Balasaheb nagar', '9657885252', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Bno` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Amt` double NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Bno`, `Date`, `Name`, `Amt`, `Quantity`) VALUES
(1, '2023-04-26', 'Fatema', 15000, 2),
(2, '2023-02-10', 'Aayesha', 30000, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD KEY `Bno` (`Bno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `Bno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
