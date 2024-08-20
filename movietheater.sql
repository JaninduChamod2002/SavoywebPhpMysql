-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 13, 2023 at 08:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savoy`
--

-- --------------------------------------------------------

CREATE TABLE `movies` (
 
   `id` int(11) NOT NULL,
  `user_id` bigint(25) NOT NULL,
  `movie_no` text NOT NULL,
  `movie_name` text NOT NULL,
  `year` date NOT NULL,
  `language` text NOT NULL,
  `actor` text NOT NULL,
  `actress` text NOT NULL
 
   
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `movieschedule`
--

CREATE TABLE `movieschedule` (
  `id` int(11) NOT NULL,
  `user_id` bigint(25) NOT NULL,
  `movie_no` text NOT NULL,
  `movie_name` text NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `interval_start_time` time NOT NULL,
  `interval_end_time` time NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieschedule`
--

INSERT INTO `movieschedule` (`id`, `user_id`, `movie_no`,`movie_name`, `start_time`, `end_time`, `interval_start_time`, `interval_end_time`, `type`) VALUES
(1, 1334, 'f111','avatar', '03:52:00', '05:54:00', '04:54:00', '05:04:00', 'Normal'),


-- --------------------------------------------------------

--
-- Table structure for table `countactus`
--

CREATE TABLE `countactus` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countactus`
--

INSERT INTO `countactus` (`ID`, `Name`, `Email`, `Telephone`, `Description`) VALUES
(1, 'sakila', 'sakila@gmail.com', 5678999, 'bhblhibj'),
(2, 'sdyfgads', 'ew@gmail.com', 714782241, 'ihgdsfsodbv'),
(3, 'sdyfgads', 'aa@gmail.com', 714782241, 'osdufhadbc'),
(5, 'sakila athap', 'sakila121@gmail.com', 714782244, 'siugdhsiudvo'),
(6, 'igfouabs', 'jhgsasvca@gmail.com', 1234567890, 'ihsdiabscibacb'),
(7, 'idfjdsbocn', 'hjk@gmail.com', 1234567897, 'usbcusxn '),
(8, 'ssdddd', 'dgdddgg@gmail.com', 714455555, 'dddddddd'),
(9, 'hhhhg', 'dghhdddgg@gmail.com', 714455555, 'hhhh'),
(11, 'hhhhg', 'dghhdddgg@gmail.com', 714455555, 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Description` text NOT NULL,
  `Ratings` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `Description`, `Ratings`) VALUES
(2, 'hasitha', 'sdsddsd@gmail.com', 'njnijknjk', '1'),
(3, 'wqweq', 'skilllab@gmail.com', 'ifoaz', '5'),
(4, 'sakia', 'sadsa@gmail.com', 'ygibhbik', '3'),
(6, 'ihdbsid', 'safs@gmail.com', 'hbidvsd', '3'),
(12, 'ssfsssdda', 'sddfddds@fdgfg', 'wfsfssdfdsd', '5'),
(15, 'isuru Lakshan', 'msash123@gmail.com', 'good service', '3');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
   `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `cardno` double NOT NULL,
  `expdate` text NOT NULL,
  `ccv` int(3) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `start_time`, `end_time`, `cardno`, `expdate`, `ccv`, `price`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` bigint(25) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `phone`, `password`) VALUES
(1, 4292, 'chathuu', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@@'),
(2, 5073700692, 'anju', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@@'),
(4, 1534408141965486, 'admin', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@'),
(6, 26914228978831, 'chathuu', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'Cc2000@@'),
(7, 474767887590315470, 'andrew', 'chathurangapriyadarshana29@gmail.com', '0765906262', 'sgsg'),
(8, 19980152439770976, 'hiru', 'hiru@gmail.com', '0765906262', '12345'),
(10, 4129, 'shemamsul', 'shenam@Gmail.com', '098765432', 'Shena'),
(11, 3895, 'testxo', 'test@gmail.com', '1234567890', 'Test@12345678'),
(12, 65754330, 'malaka', 'malaka@gmail.com', '0123456789', 'Malaka@123'),
(14, 541341458, 'SFDsdgfdg', 'dfdsdssdgf@dfsdjds', '01234567894', 'isuru123@W'),
(16, 9009620, 'klko', 'k@GMAIL.COM', '1234567890', 'aBCD1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movieschedule`
--
ALTER TABLE `movieschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countactus`
--
ALTER TABLE `countactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
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
-- AUTO_INCREMENT for table `movieschedule`
--
ALTER TABLE `movieschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `countactus`
--
ALTER TABLE `countactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
