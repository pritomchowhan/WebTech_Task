-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 10:24 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `name`, `surname`, `username`, `password`, `image`) VALUES
(2, 'Hasnatur Rahman Khan', 'Anik', 'anik10', '$2y$12$/Qpb75edUVIsa6O0jNMDHehwaQluYnJAd6zRCkP6DkgrJebzSv3vy', 'Daffodil-International-University-DIU-logo.png'),
(4, 'Pritom Chowhan hh', 'Chowhan', 'admin', '$2y$12$2StJ2AuEQbBCFLOTStZ2RegbJ34OWppZUyboSgR1ZbpmdUNyi8Hp.', 'images-removebg-preview.png'),
(6, 'Pritom Chowhan ', 'Chowhan', 'Pritom_154', '$2y$12$PHpFSfYkiOTT/1hjovk8MOfzd9G9TuUsaDK0itfv4SVxZ/mW5gQA.', 'WhatsApp_Image_2023-08-02_at_21.56.35-removebg-preview.png'),
(7, '', '', '', '$2y$12$myBewrf1z4aIT78A.aUEeOM0Ngxz5VTyc2Urm0OLRrk1m9TdUYDIO', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
