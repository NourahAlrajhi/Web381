-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 07:57 PM
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
-- Table structure for table `AboutUs`
--

CREATE TABLE `AboutUs` (
  `AboutId` int(11) NOT NULL,
  `AboutDescription` text NOT NULL,
  `CardDescription_1` text NOT NULL,
  `CardPic_1` varchar(500) NOT NULL,
  `CardDescription_2` text NOT NULL,
  `CardPic_2` varchar(500) NOT NULL,
  `CardDescription_3` text NOT NULL,
  `CardPic_3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AboutUs`
--

INSERT INTO `AboutUs` (`AboutId`, `AboutDescription`, `CardDescription_1`, `CardPic_1`, `CardDescription_2`, `CardPic_2`, `CardDescription_3`, `CardPic_3`) VALUES
(1, 'Hello thereeee Maha111!!!!', 'hellloooo', 'Dentistry.svg', 'Hii2', '1651973785_clinic2.svg', 'Hii3', '1651973785_clinic2.svg');

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
  `PETid` int(11) NOT NULL,
  `SERVICEID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointment`
--

INSERT INTO `Appointment` (`Appointmentid`, `Pet_name`, `Service`, `Date`, `Note`, `Time`, `Status`, `PETid`, `SERVICEID`) VALUES
(17, 'Lola', 'Spa', '2022-04-30', ' Be Carful please', '10:10', 'Done', 2, 4),
(19, 'Lulu', 'Spa', '2022-05-18', ' So Important', '15:30', 'yes', 16, 4),
(20, 'Simon', 'Spa', '2022-05-18', ' Getting ready', '15:30', '', 17, 4),
(25, 'Loci', 'Boarding', '2022-05-31', ' so Important', '23:05', 'Done', 18, 5),
(26, 'Kewiiiii', 'vaccination', '2022-05-31', ' Important', '23:05', 'yes', 34, 4);

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
(9, 'Soo Happy!!', '3', '3', 17),
(11, 'good services , but bad visit', '5', '2', 25);

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `Managerid` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Pnum` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Gend` varchar(300) NOT NULL,
  `Pass` varchar(300) NOT NULL,
  `Profile_Pic` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`Managerid`, `Fname`, `Lname`, `Pnum`, `Email`, `Gend`, `Pass`, `Profile_Pic`) VALUES
(1, 'Boba', 'Jems', '0541998205', 'EmilyKevin@example.com', 'Male', '654d72eed5f5776644d96240e13e01bd', 'Emailicon.svg'),
(3, 'Loca', 'Jemmy', '0519882018', 'Loca2@outlook.com', 'Male', 'e681bb2a079a5f608210b6aff2e9d9b8', 'image (3).svg');

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
(4, 'vaccination', 'vaccination to get well', 50, 'vecteezy_medical-syringe-hypodermic-needle-inject-needle-concept-of_.jpg'),
(5, 'Boarding', 'Very clean', 25, 'Boarding.svg'),
(6, 'bath', 'get clean', 22, 'Grooming&Bathing.svg'),
(7, 'Vacini9', 'Harm', 24, 'Dentistry.svg');

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
  `Profile_Pic` varchar(3000) NOT NULL,
  `Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PETT`
--

INSERT INTO `PETT` (`Petid`, `Pet_Name`, `Gender`, `Breed`, `Spayed`, `Medical_History`, `DOB`, `Content`, `Profile_Pic`, `Userid`) VALUES
(1, 'Broc', 'Female', 'Ragdoll', 'Not Spayed/Neutered', 'sick Health', '2014-07-30', '', '20201125p1_generated.jpg', 1),
(2, 'Lole', 'Female', 'Schnoodle', 'hid', 'Good_Health', '2012-10-23', '', '20210331p1_generated.jpg', 1),
(16, 'Lulu', 'Female', 'Chow Chow', 'hid', 'Good health', '2020-11-25', 'IMG_1787.jpg', '20210331p1_generated.jpg', 2),
(17, 'Simon', 'Male', 'Chow Chow', 'Spayed/Neutered ', 'No history', '2018-08-19', 'Tutorial#11 - GUI Modelling 2.pdf', 'dog&cat.svg', 3),
(18, 'Loci', 'Female', 'Schnoodle', 'Spayed/Neutered ', 'Sick', '2018-09-14', 'IMG_1787.jpg', '20201125p1_generated.jpg', 4),
(31, 'Bobe', 'Male', 'Ragdoll', 'Not Spayed/Neutered', 'Good health', '2022-05-08', 'pet profile photo new.svg', '20210331p1_generated.jpg', 5),
(34, 'Kewiiiii', 'Male', 'Chow Chow', 'Spayed/Neutered Status', 'Good health', '2015-05-10', 'Emailicon.svg', '20201125p1_generated.jpg', 11);

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
(7, 'Boarding', '2022-05-21', '15:00', 5),
(8, 'bath', '2022-05-15', '23:05', 6),
(9, 'vaccination', '2022-05-31', '19:52', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userid` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Pnum` varchar(400) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Gend` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Profile_Pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userid`, `Fname`, `Lname`, `Pnum`, `Email`, `Gend`, `Pass`, `Profile_Pic`) VALUES
(1, 'Sam', 'Amber', '0531220603', 'Sam22@hotmail.com', 'Male', 'aec7a53251b6ca1c61d326117c3714a1', 'image (3).svg'),
(2, 'Jes', 'Jemmy', '0529117492', 'Jes21@hotmail.com', 'Female', '0683e8c37220885bc5f04306325ae31f', 'CONTACTUSS.svg'),
(3, 'Alic', 'Kevin', '0541997267', 'Alic32@hotmail.com', 'Female', '5eb07fb962ef341cba1aa0c22f11e387', 'dog&cat.svg'),
(4, 'Marco', 'Jems', '0531990406', 'Marco0202@outlook.com', 'Male', '65ca4a4cf47df5496e603153e69f2c86', 'Boarding.svg'),
(5, 'Mice', 'Jems', '0529881692', 'Mice00@gmail.com', 'Male', '8899dc99244812841efcd02fc87dd96b', 'Dentistry.svg'),
(11, 'Maha', 'Fahad', '0531220304', 'Maha2@hotmail.com', 'Female', 'aaa77e4884e2a0ad05a507c26bb0f3b9', 'CONTACTUSS.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AboutUs`
--
ALTER TABLE `AboutUs`
  ADD PRIMARY KEY (`AboutId`);

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`Appointmentid`),
  ADD KEY `petid` (`PETid`),
  ADD KEY `serviceiddddd` (`SERVICEID`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`Feedbackid`),
  ADD KEY `feedback_ibfk_1` (`APPid`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`Managerid`);

--
-- Indexes for table `Manager_Services`
--
ALTER TABLE `Manager_Services`
  ADD PRIMARY KEY (`MServicesid`);

--
-- Indexes for table `PETT`
--
ALTER TABLE `PETT`
  ADD PRIMARY KEY (`Petid`),
  ADD KEY `petOwner` (`Userid`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`Serviceid`),
  ADD KEY `service` (`Picture_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AboutUs`
--
ALTER TABLE `AboutUs`
  MODIFY `AboutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `Appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `Feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Manager`
--
ALTER TABLE `Manager`
  MODIFY `Managerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Manager_Services`
--
ALTER TABLE `Manager_Services`
  MODIFY `MServicesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `PETT`
--
ALTER TABLE `PETT`
  MODIFY `Petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `Serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD CONSTRAINT `petid` FOREIGN KEY (`PETid`) REFERENCES `PETT` (`Petid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `serviceiddddd` FOREIGN KEY (`SERVICEID`) REFERENCES `Manager_Services` (`MServicesid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`APPid`) REFERENCES `Appointment` (`Appointmentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PETT`
--
ALTER TABLE `PETT`
  ADD CONSTRAINT `petOwner` FOREIGN KEY (`Userid`) REFERENCES `Users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `service` FOREIGN KEY (`Picture_id`) REFERENCES `Manager_Services` (`MServicesid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
