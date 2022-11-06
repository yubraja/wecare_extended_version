-- phpMyAdmin SQL Dump
-- version 5.2.0
--
-- Host: localhost
-- Generation Time: Jul 06, 2022 at 05:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(15) NOT NULL,
  `gender` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `witness` varchar(20) NOT NULL,
  `symptom` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `medicines` varchar(200) NOT NULL,
  `reports` varchar(200) NOT NULL,
  `instruction` varchar(200) NOT NULL,
  `visit_date` date NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`username`, `email`, `witness`, `symptom`, `description`, `medicines`, `reports`, `instruction`, `visit_date`, `photo`) VALUES
('9866134714', 'abc@gmail.com', 'Brother', 'fasfdsafsdasdfsdasdfdsdsfds', 'fdsfsdgsdgdfsg', 'bxbx', 'dfgsdfb\r\nfdgsdfg', 'hfdshfd\r\ndfhdfs\r\ndfhsdf\r\n', '2022-07-23', 'mee.JPG');

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
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
