-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2021 at 07:59 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahms`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
CREATE TABLE IF NOT EXISTS `board` (
  `bphno` bigint NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`bphno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`bphno`, `name`, `email`, `pass`) VALUES
(7510290128, 'Niranjana G', 'niranjanagk2000@gmail.com', 'powrathil'),
(9496155783, 'Kavitha S', 'kavithagk1999@gmail.com', 'kanigiga');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

DROP TABLE IF EXISTS `hostel`;
CREATE TABLE IF NOT EXISTS `hostel` (
  `hostloc` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hphno` bigint NOT NULL,
  `tot_room` int NOT NULL,
  PRIMARY KEY (`hostloc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostloc`, `hphno`, `tot_room`) VALUES
('ALV', 4772710859, 30),
('KTM', 7854123, 20),
('KUR', 4812321718, 25);

-- --------------------------------------------------------

--
-- Table structure for table `inmates`
--

DROP TABLE IF EXISTS `inmates`;
CREATE TABLE IF NOT EXISTS `inmates` (
  `name` text NOT NULL,
  `iphno` bigint NOT NULL,
  `pname` text NOT NULL,
  `hname` text NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `age` int NOT NULL,
  `emgphno` bigint NOT NULL,
  `reqroom` text NOT NULL,
  `rno` int NOT NULL,
  `hloc` text NOT NULL,
  PRIMARY KEY (`iphno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inmates`
--

INSERT INTO `inmates` (`name`, `iphno`, `pname`, `hname`, `street`, `city`, `age`, `emgphno`, `reqroom`, `rno`, `hloc`) VALUES
('admin', 45, 'jk', 'm n', 'm,', 'll', 21, 75, 'sb', 101, 'ALV'),
('Niranjana', 456, 'asdf', 'aaaa', 'aaaa', 'Alapuzha', 12, 785, 'sb', 104, 'KUR'),
('Niranjana G', 4563217852, 'jk', 'asda', 'asdf', 'Alapuzha', 50, 76413558412, 'db', 105, 'ALV');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int NOT NULL AUTO_INCREMENT,
  `paytype` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `amt` int NOT NULL,
  `hloc` varchar(5) NOT NULL,
  `iphno` bigint NOT NULL,
  PRIMARY KEY (`payid`),
  KEY `hloc` (`hloc`),
  KEY `iphno` (`iphno`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `paytype`, `amt`, `hloc`, `iphno`) VALUES
(45, 'Accomudation fees', 5000, 'ALV', 45),
(46, 'Qotetion deposite', 5000, 'KUR', 456),
(47, 'Mess Fees', 4000, 'ALV', 4563217852),
(48, 'Qotetion deposite', 5000, 'ALV', 45);

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

DROP TABLE IF EXISTS `warden`;
CREATE TABLE IF NOT EXISTS `warden` (
  `wphno` bigint NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(9) NOT NULL,
  `hloc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`wphno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`wphno`, `name`, `email`, `pass`, `hloc`) VALUES
(7510934022, 'Gayathri', 'asd@gmail.com', 'asdf', 'ALV'),
(7854123654, 'Niranjana', 'kavithagk1999@gmail.com', 'qwer', 'VTL');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`hloc`) REFERENCES `hostel` (`hostloc`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`iphno`) REFERENCES `inmates` (`iphno`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
