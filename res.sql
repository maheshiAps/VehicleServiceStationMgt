-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 07:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `res`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(150) NOT NULL,
  `Profession` varchar(10) NOT NULL,
  `Faculty` int(11) NOT NULL,
  `Department` int(11) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `Role` int(11) NOT NULL,
  `Qualification` varchar(500) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `RegDate` date NOT NULL,
  `Work` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`Id`, `FullName`, `Profession`, `Faculty`, `Department`, `RegNo`, `Role`, `Qualification`, `Username`, `Password`, `status`, `RegDate`, `Work`) VALUES
(2, 'Maheshi Apsaraaa', 'ms.', 1, 1, '15APC2359', 1, '', 'EP000001', 'f3a6f0f5024e6a331c59f7e7ec47cadc26b123e3662fba4fbb3c5a6383a2f833', 1, '2019-10-08', 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE IF NOT EXISTS `asset` (
  `Id` int(11) NOT NULL,
  `AssestNo` int(11) NOT NULL,
  `FacId` int(11) NOT NULL,
  `DptId` int(11) NOT NULL,
  `LocType` int(11) NOT NULL,
  `Loc` int(11) NOT NULL,
  `AsType` int(11) NOT NULL,
  `Asset` varchar(150) NOT NULL,
  `Type` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `UnitPrice` decimal(10,2) NOT NULL,
  `Emp` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `Datee` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`Id`, `AssestNo`, `FacId`, `DptId`, `LocType`, `Loc`, `AsType`, `Asset`, `Type`, `Qty`, `UnitPrice`, `Emp`, `status`, `Datee`) VALUES
(1, 1, 1, 1, 2, 1, 5, 'hhh', 1, 1, '2736.00', 'EP000001', 1, '2019-11-08'),
(2, 1, 1, 1, 2, 1, 1, 'jhk', 1, 66, '51480.00', 'EP000001', 127, '0000-00-00'),
(3, 1, 1, 1, 2, 1, 1, 'ju', 1, 6, '46680.00', 'EP000001', 127, '0000-00-00'),
(4, 1, 1, 1, 2, 1, 6, 'fsdf', 1, 66, '52140.00', 'EP000001', 127, '0000-00-00'),
(5, 1, 1, 1, 2, 1, 4, '5gmka', 1, 55, '36850.00', 'EP000001', 127, '0000-00-00'),
(6, 1, 1, 1, 2, 1, 3, 'nonuion', 1, 88, '78320.00', 'EP000001', 127, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `deparment`
--

CREATE TABLE IF NOT EXISTS `deparment` (
  `Id` int(11) NOT NULL,
  `DepartmentName` varchar(150) NOT NULL,
  `FacultyId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deparment`
--

INSERT INTO `deparment` (`Id`, `DepartmentName`, `FacultyId`, `status`) VALUES
(1, 'Computing & Information System', 1, 1),
(2, 'PST', 1, 1),
(3, 'SPS', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Id` int(11) NOT NULL,
  `FacultyName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `FacultyName`) VALUES
(1, 'Applied Sciences Faculty'),
(2, 'Geomatic Faculty'),
(3, 'Social Sciences & Language');

-- --------------------------------------------------------

--
-- Table structure for table `itemtype`
--

CREATE TABLE IF NOT EXISTS `itemtype` (
  `Id` int(11) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemtype`
--

INSERT INTO `itemtype` (`Id`, `ItemName`, `Type`) VALUES
(1, 'Cupboard', 1),
(2, 'Chair', 1),
(3, 'Desk', 1),
(4, 'Computer', 1),
(5, 'Projector', 1),
(6, 'A/C machine', 1),
(7, 'Markers', 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `Id` int(11) NOT NULL,
  `Faculty` int(11) NOT NULL,
  `Department` int(11) NOT NULL,
  `LocType` int(11) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Id`, `Faculty`, `Department`, `LocType`, `Location`, `status`) VALUES
(1, 1, 1, 2, 'NLHhh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locationtype`
--

CREATE TABLE IF NOT EXISTS `locationtype` (
  `Id` int(11) NOT NULL,
  `LocationType` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationtype`
--

INSERT INTO `locationtype` (`Id`, `LocationType`) VALUES
(1, 'Department Room'),
(2, 'Lecture Hall'),
(3, 'Computer lab'),
(4, 'Labs'),
(5, 'Board Roomm'),
(6, 'Public Asset');

-- --------------------------------------------------------

--
-- Table structure for table `nonacademic`
--

CREATE TABLE IF NOT EXISTS `nonacademic` (
  `Id` int(11) NOT NULL,
  `Profession` varchar(11) NOT NULL,
  `FullName` varchar(150) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `Faculty` int(11) NOT NULL,
  `Department` int(11) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `RegDate` date NOT NULL,
  `Qualification` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonacademic`
--

INSERT INTO `nonacademic` (`Id`, `Profession`, `FullName`, `RegNo`, `Faculty`, `Department`, `Role`, `Position`, `Username`, `Password`, `status`, `RegDate`, `Qualification`) VALUES
(3, 'Ms.', 'Maheshi Apsara', 'hgrhlg', 1, 1, 'non-academic', 'hhhh', 'NA000001', 'f3a6f0f5024e6a331c59f7e7ec47cadc26b123e3662fba4fbb3c5a6383a2f833', 1, '2019-10-15', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `Id` int(11) NOT NULL,
  `Faculty` int(11) NOT NULL,
  `Department` int(11) NOT NULL,
  `Asset` varchar(100) NOT NULL,
  `Datee` date NOT NULL,
  `Des` varchar(200) NOT NULL,
  `Requester` varchar(50) NOT NULL,
  `ReservationCode` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reqDate` date NOT NULL,
  `Accept` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Id`, `Faculty`, `Department`, `Asset`, `Datee`, `Des`, `Requester`, `ReservationCode`, `status`, `reqDate`, `Accept`) VALUES
(1, 1, 2, 'Mini Auditoriom', '2019-11-28', 'vflww ggqprbl ', 'Maheshi Apsaraaa', 'RC000001', 1, '2019-11-11', 1),
(2, 1, 1, '204', '2019-11-28', 'hiwe  jpouw  la', 'Maheshi Apsaraaa', 'RC000002', 0, '2019-11-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `Id` int(11) NOT NULL,
  `RoleName` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `RoleName`) VALUES
(1, 'Administrator'),
(2, 'Senior Lecture'),
(3, 'Lecture'),
(4, 'Non-academic'),
(5, 'Demeostrator'),
(6, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Id` int(11) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `FullName` varchar(150) NOT NULL,
  `Faculty` int(11) NOT NULL,
  `Department` int(11) NOT NULL,
  `Batch` int(11) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `Other` varchar(100) NOT NULL,
  `RegDate` date NOT NULL,
  `Role` varchar(20) NOT NULL,
  `Professional` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `RegNo`, `FullName`, `Faculty`, `Department`, `Batch`, `Semester`, `Username`, `Password`, `status`, `Other`, `RegDate`, `Role`, `Professional`) VALUES
(1, '15APC2359', 'Maheshi Apsara', 1, 1, 3, 1, 'ST000001', 'f3a6f0f5024e6a331c59f7e7ec47cadc26b123e3662fba4fbb3c5a6383a2f833', 1, '', '2019-10-15', 'Studenet', 'ms.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `deparment`
--
ALTER TABLE `deparment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `itemtype`
--
ALTER TABLE `itemtype`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `locationtype`
--
ALTER TABLE `locationtype`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nonacademic`
--
ALTER TABLE `nonacademic`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `deparment`
--
ALTER TABLE `deparment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `itemtype`
--
ALTER TABLE `itemtype`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `locationtype`
--
ALTER TABLE `locationtype`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nonacademic`
--
ALTER TABLE `nonacademic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
