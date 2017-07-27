-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 03:19 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lg_g5`
--

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(5) NOT NULL,
  `view` varchar(200) NOT NULL,
  `event_start` datetime NOT NULL,
  `event_finish` datetime NOT NULL,
  `n_status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `view`, `event_start`, `event_finish`, `n_status`, `created_at`, `updated_at`) VALUES
(1, 'phase1', '2016-05-16 20:05:01', '2016-05-16 21:00:00', 1, '2016-05-14 00:00:00', '2016-05-14 00:00:00'),
(2, 'phase2', '2016-05-16 20:00:00', '2016-05-16 20:02:00', 1, '2016-05-14 03:26:00', '2016-05-14 03:18:00'),
(3, 'phase3', '2016-05-16 20:02:00', '2016-05-16 20:03:00', 1, '2016-05-14 00:00:00', '2016-05-14 00:00:00'),
(4, 'phase4', '2016-05-16 20:03:00', '2016-05-16 20:04:00', 1, '2016-05-15 00:00:00', '2016-05-15 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
