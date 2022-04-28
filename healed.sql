-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2022 at 11:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healed`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

CREATE TABLE `Appointment` (
  `Appointmentid` int(11) NOT NULL,
  `Pet_name` varchar(50) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Note` varchar(10000) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `PETid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointment`
--

INSERT INTO `Appointment` (`Appointmentid`, `Pet_name`, `Service`, `Date`, `Note`, `Time`, `Status`, `PETid`) VALUES
(11, 'Buffy', 'Grooming', '2022-04-30', ' Workinggg!!', '22:30', 'Complete', 4),
(12, 'Cava', 'Grooming', '2022-04-30', ' cleaning', '22:30', 'yes', 3),
(13, 'kewi', 'Grooming', '2022-04-30', ' cheack_up', '22:30', 'Complete', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `Feedbackid` int(11) NOT NULL,
  `FEEDBACK` varchar(1000) NOT NULL,
  `Service_rate` varchar(30) NOT NULL,
  `Visit_rate` varchar(30) NOT NULL,
  `APPid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`Feedbackid`, `FEEDBACK`, `Service_rate`, `Visit_rate`, `APPid`) VALUES
(5, 'Happy!!', '3', '3', 11),
(6, 'YOU are THE best!!', '5', '5', 13);

-- --------------------------------------------------------

--
-- Table structure for table `Manager_Services`
--

CREATE TABLE `Manager_Services` (
  `MServicesid` int(11) NOT NULL,
  `Service_NAME` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Manager_Services`
--

INSERT INTO `Manager_Services` (`MServicesid`, `Service_NAME`, `Description`, `Price`) VALUES
(1, 'Grooming and bathing', 'Grooming And Bathing carfully', 25);

-- --------------------------------------------------------

--
-- Table structure for table `PETT`
--

CREATE TABLE `PETT` (
  `Petid` int(11) NOT NULL,
  `Pet_Name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Breed` varchar(50) NOT NULL,
  `Spayed` varchar(200) NOT NULL,
  `Medical_History` varchar(1000) NOT NULL,
  `DOB` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PETT`
--

INSERT INTO `PETT` (`Petid`, `Pet_Name`, `Gender`, `Breed`, `Spayed`, `Medical_History`, `DOB`) VALUES
(1, 'Broc', 'Female', 'Ragdoll', 'hid', 'sick Health', '2014-07-30'),
(2, 'Lily', 'Female', 'Schnoodle', 'Spayed/Neutered ', 'bad_Health', '2012-10-23'),
(3, 'Cava', 'Female', 'Chow Chow', 'Not Spayed/Neutered', 'nothing', '2022-04-03'),
(4, 'Buffy', 'Male', 'Schnoodle', 'Not Spayed/Neutered', 'Good health', '2006-12-30'),
(5, 'kewi', 'Male', 'Chow Chow', 'hid', 'sick', '2013-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `Serviceid` int(11) NOT NULL,
  `Service_name` varchar(200) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`Serviceid`, `Service_name`, `Date`, `Time`) VALUES
(3, 'Grooming', '2022-04-30', '22:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`Appointmentid`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`Feedbackid`),
  ADD KEY `APPid` (`APPid`);

--
-- Indexes for table `Manager_Services`
--
ALTER TABLE `Manager_Services`
  ADD PRIMARY KEY (`MServicesid`);

--
-- Indexes for table `PETT`
--
ALTER TABLE `PETT`
  ADD PRIMARY KEY (`Petid`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`Serviceid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `Appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `Feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Manager_Services`
--
ALTER TABLE `Manager_Services`
  MODIFY `MServicesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PETT`
--
ALTER TABLE `PETT`
  MODIFY `Petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `Serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`APPid`) REFERENCES `Appointment` (`Appointmentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
