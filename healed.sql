-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2022 at 04:15 PM
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
(17, 'Lola', 'Spa', '2022-04-30', ' Be Carful please', '10:10', 'Done', 2),
(19, 'Lulu', 'Spa', '2022-05-18', ' So Important', '15:30', 'yes', 16),
(20, 'Simon', 'Spa', '2022-05-18', ' Getting ready', '15:30', '', 17);

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
(9, 'Soo Happy!!', '3', '3', 17);

-- --------------------------------------------------------

--
-- Table structure for table `Manager_Services`
--

CREATE TABLE `Manager_Services` (
  `MServicesid` int(11) NOT NULL,
  `Service_NAME` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` int(100) NOT NULL,
  `Picture` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Manager_Services`
--

INSERT INTO `Manager_Services` (`MServicesid`, `Service_NAME`, `Description`, `Price`, `Picture`) VALUES
(4, 'vaccination', 'vaccination to get well', 50, 'vecteezy_medical-syringe-hypodermic-needle-inject-needle-concept-of_.jpg');

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
  `DOB` varchar(500) NOT NULL,
  `Content` varchar(3000) NOT NULL,
  `Profile_Pic` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PETT`
--

INSERT INTO `PETT` (`Petid`, `Pet_Name`, `Gender`, `Breed`, `Spayed`, `Medical_History`, `DOB`, `Content`, `Profile_Pic`) VALUES
(1, 'Broc', 'Female', 'Ragdoll', 'hid', 'sick Health', '2014-07-30', '', '20201125p1_generated.jpg'),
(2, 'Lola', 'Female', 'Schnoodle', 'hid', 'Good_Health', '2012-10-23', '', '20210331p1_generated.jpg'),
(16, 'Lulu', 'Female', 'Chow Chow', 'hid', 'Good health', '2020-11-25', 'IMG_1787.jpg', '20210331p1_generated.jpg'),
(17, 'Simon', 'Male', 'Chow Chow', 'hid', 'No history', '2018-08-19', 'Tutorial#11 - GUI Modelling 2.pdf', 'dog&cat.svg'),
(18, 'Loci', 'Female', 'Schnoodle', 'Spayed/Neutered ', 'Sick', '2018-09-14', 'IMG_1787.jpg', '20201125p1_generated.jpg'),
(31, 'Bobe', 'Male', 'Ragdoll', 'Spayed/Neutered ', 'Good health', '2022-05-08', 'pet profile photo new.svg', '20210331p1_generated.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `Serviceid` int(11) NOT NULL,
  `Service_name` varchar(200) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Picture_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`Serviceid`, `Service_name`, `Date`, `Time`, `Picture_id`) VALUES
(7, 'vaccination', '2022-05-13', '10:51', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`Appointmentid`),
  ADD KEY `petid` (`PETid`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`Feedbackid`),
  ADD KEY `feedback_ibfk_1` (`APPid`);

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
  ADD PRIMARY KEY (`Serviceid`),
  ADD KEY `service` (`Picture_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `Appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `Feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Manager_Services`
--
ALTER TABLE `Manager_Services`
  MODIFY `MServicesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `PETT`
--
ALTER TABLE `PETT`
  MODIFY `Petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `Serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD CONSTRAINT `petid` FOREIGN KEY (`PETid`) REFERENCES `PETT` (`Petid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`APPid`) REFERENCES `Appointment` (`Appointmentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `service` FOREIGN KEY (`Picture_id`) REFERENCES `Manager_Services` (`MServicesid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
