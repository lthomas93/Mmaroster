-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2013 at 10:52 AM
-- Server version: 5.5.32
-- PHP Version: 5.3.25

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tkd`
--

-- --------------------------------------------------------

--
-- Table structure for table `guardian_roster`
--

CREATE TABLE IF NOT EXISTS `guardian_roster` (
  `Guardian_id` int(11) NOT NULL AUTO_INCREMENT,
  `Last_name` varchar(250) DEFAULT NULL,
  `First_name` varchar(250) DEFAULT NULL,
  `Age` int(3) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `City` varchar(250) DEFAULT NULL,
  `State` varchar(2) DEFAULT NULL,
  `Zip_code` varchar(5) DEFAULT NULL,
  `Phone_number` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Guardian_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guardian_roster`
--

INSERT INTO `guardian_roster` (`Guardian_id`, `Last_name`, `First_name`, `Age`, `Address`, `City`, `State`, `Zip_code`, `Phone_number`) VALUES
(1, 'Thomas', 'lewis', 19, '2484 Weaver Drive', 'Ray City', 'GA', '31645', '2292371152');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `Instructor_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Last_name` varchar(250) DEFAULT NULL,
  `First_name` varchar(250) DEFAULT NULL,
  `School_name` varchar(250) NOT NULL,
  `Phone_number` int(10) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Instructor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Instructor_id`, `Username`, `Password`, `Last_name`, `First_name`, `School_name`, `Phone_number`, `Email`) VALUES
(2, 'lthomas93', 'e2798401d04fe998ccf96aab66bc2647', 'Thomas', 'Lewis', 'Blue Dragon Martial Arts', 2147483647, 'lewis.t.thomas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_roster`
--

CREATE TABLE IF NOT EXISTS `student_roster` (
  `Student_id` int(11) NOT NULL AUTO_INCREMENT,
  `Last_name` varchar(250) DEFAULT NULL,
  `First_name` varchar(250) DEFAULT NULL,
  `Age` int(3) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `City` varchar(250) DEFAULT NULL,
  `State` varchar(2) DEFAULT NULL,
  `Zip_code` varchar(10) DEFAULT NULL,
  `Phone_number` varchar(10) DEFAULT NULL,
  `Minor` varchar(1) DEFAULT NULL,
  `Guardian_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
