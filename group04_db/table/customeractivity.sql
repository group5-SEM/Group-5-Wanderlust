-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 01:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group04_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customeractivity`
--

CREATE TABLE `customeractivity` (
  `CustomerActivityId` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  `ActivityId` int(11) NOT NULL,
  `ActivityDate` date NOT NULL,
  `ActivityTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customeractivity`
--

INSERT INTO `customeractivity` (`CustomerActivityId`, `Id`, `ActivityId`, `ActivityDate`, `ActivityTime`) VALUES
(10, 4, 8, '2020-02-21', '10:00:00'),
(11, 4, 6, '2020-02-21', '12:00:00'),
(12, 4, 5, '2020-02-22', '15:00:00'),
(13, 4, 3, '2020-02-22', '14:00:00'),
(14, 4, 4, '2020-02-23', '09:00:00'),
(15, 4, 7, '2020-02-23', '17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customeractivity`
--
ALTER TABLE `customeractivity`
  ADD PRIMARY KEY (`CustomerActivityId`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ActivityId` (`ActivityId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customeractivity`
--
ALTER TABLE `customeractivity`
  MODIFY `CustomerActivityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customeractivity`
--
ALTER TABLE `customeractivity`
  ADD CONSTRAINT `customeractivity_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `customeractivity_ibfk_2` FOREIGN KEY (`ActivityId`) REFERENCES `activity` (`ActivityId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
