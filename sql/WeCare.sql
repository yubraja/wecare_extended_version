-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2022 at 12:13 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WeCare`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`first_name`, `last_name`, `address`, `phone`, `email`, `gender`, `username`, `password`) VALUES
('okkk', 'adhikari', 'dsgfhj', 987564, 'abc@gmail.com', 'male', 'oyee', '2475c20d9e9a1aaee80dcbc4e6316157'),
('yubraj', 'adhikari', 'dsgfhj', 9866134714, 'abc@gmail.com', 'male', 'yubi', '81dc9bdb52d04dc20036dbd8313ed055'),
('yubraj', 'adhikari', 'gorusinge', 9811962508, 'adhikariyubraj894@gmail.com', 'male', 'yubis', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `witness` varchar(40) DEFAULT NULL,
  `symptom` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `medicines` varchar(200) DEFAULT NULL,
  `reports` varchar(200) DEFAULT NULL,
  `instruction` varchar(200) DEFAULT NULL,
  `visit_date` date NOT NULL,
  `photo` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_report` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `FK_report` FOREIGN KEY (`username`) REFERENCES `patient` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
