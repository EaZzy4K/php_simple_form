-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 07:21 PM
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
-- Database: `submissions_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `message` longtext DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `name`, `message`, `email`, `create_date`) VALUES
(1, 'Steve', 'Some message', 'steve.jacobs@hello.com', '2025-04-15 23:46:43'),
(2, 'Louis', 'Some message', 'louis.andersen@php.com', '2060-04-09 00:18:05'),
(4, 'Mario', 'Mama Mia', 'mamamia@luigi.com', '2012-04-05 00:19:20'),
(12, 'zlatan', 'snippets', 'bhdd@gmail.com', '2025-04-15 21:49:48'),
(13, 'rahid', 'fwfwf', 'bh33dd@gmail.com', '2025-04-15 21:56:03'),
(14, 'rahid', 'fwfwf', 'bh33dd@gmail.com', '2025-04-15 21:58:20'),
(16, 'jemali', '', 'jemalashvili@gmail.com', '2025-04-16 18:33:11'),
(17, 'jemali', '', 'jemalashvili@gmail.com', '2025-04-16 18:59:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
