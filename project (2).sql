-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 05:31 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `votecount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `contact`, `votecount`) VALUES
(1, 'shiva acharya', 'shiva1@gmail.com', 2147483647, 1),
(3, 'manisha adhikari', 'manisha@gmail.com', 2147483647, 1),
(4, 'shreya', 'shreya@gmail.com', 2147483647, 0),
(7, 'ABC', 'abc12@gmail.com', 2147483647, 0),
(8, 'xyz', 'abc12@gmail.com', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `pass_word` varchar(8) NOT NULL,
  `mobileNumber` int(10) NOT NULL,
  `voted` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `studentid`, `pass_word`, `mobileNumber`, `voted`) VALUES
(1, 'aashish', '2021', 'aash', 2147483647, 0),
(2, 'avishek', '2021', 'avis', 2147483647, 1),
(3, 'parma', '2021', 'parm', 2147483647, 0),
(4, 'jiban', '2021', 'jiba', 2147483647, 0),
(5, 'sujal', '2021', 'suja', 2147483647, 0),
(6, 'sabin', '2021', 'sabi', 2147483647, 0),
(7, 'joseph', '2021', 'jose', 2147483647, 0),
(8, 'manoj', '2021', 'mono', 2147483647, 0),
(9, 'mahendra', '2021', 'mahi', 2147483647, 0),
(10, 'dipesh', '2021', 'dipe', 2147483647, 0),
(11, 'sabal', '2021', 'saba', 2147483647, 1),
(12, 'ram', '2021', 'qwer', 2147483647, 1),
(13, 'shyam', '2021', '1234', 2147483647, 0),
(14, 'shyam', '2021', '4567', 2147483647, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
