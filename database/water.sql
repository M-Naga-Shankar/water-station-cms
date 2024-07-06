-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 04:34 PM
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
-- Database: `water`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `password` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Mobile`, `password`, `type`) VALUES
(1, 'ramana', '9989253570', 4377, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `in_by` int(11) NOT NULL,
  `out_by` int(11) NOT NULL,
  `amount` int(200) NOT NULL,
  `out_time` varchar(100) NOT NULL,
  `in_time` varchar(100) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_id`, `quantity`, `in_by`, `out_by`, `amount`, `out_time`, `in_time`, `status`) VALUES
(1, 2, 1, 1, 1, 10, '05/06/2024 04:30', '', 0),
(2, 2, 2, 1, 1, 55, '05/06/2024 04:33', '2024-06-05 05:19:31', 0),
(3, 2, 10, 1, 1, 30, '05/06/2024 04:34', '', 0),
(4, 1, 10, 0, 1, 20, '05/06/2024 05:46', '', 0),
(5, 1, 20, 0, 1, 300, '05/06/2024 05:51', '', 0),
(6, 3, 5, 1, 1, 100, '05/06/2024 19:47', '2024-06-05 06:06:19', 0),
(7, 3, 10, 0, 1, 300, '05/06/2024 17:58', '', 0),
(8, 4, 5, 1, 1, 150, '05/06/2024 18:20', '2024-06-05 06:24:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tins`
--

CREATE TABLE `tins` (
  `id` int(100) NOT NULL,
  `count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tins`
--

INSERT INTO `tins` (`id`, `count`) VALUES
(1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `amount` int(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Mobile`, `amount`, `Date`) VALUES
(1, 'shankar', '9989898989', 0, '2024-06-04 19:12:47'),
(2, 'shankar', '9989898989', 0, '2024-06-04 19:13:47'),
(3, 'Nagu', '9492470888', 0, '2024-06-05 00:34:09'),
(4, 'Nagendra ', '9032428125', 0, '2024-06-05 00:53:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tins`
--
ALTER TABLE `tins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tins`
--
ALTER TABLE `tins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
