-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2019 at 12:14 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultydetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_education`
--

DROP TABLE IF EXISTS `faculty_education`;
CREATE TABLE IF NOT EXISTS `faculty_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `Tenth` varchar(10) NOT NULL,
  `tenth_year_of_study` int(11) NOT NULL,
  `twelve_standard` varchar(10) NOT NULL,
  `twelve_year_of_study` int(11) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `degree_year_of_study` int(11) NOT NULL,
  `masters` varchar(10) NOT NULL,
  `masters_year_of_study` int(11) NOT NULL,
  `PHD` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_education`
--

INSERT INTO `faculty_education` (`id`, `emp_id`, `Tenth`, `tenth_year_of_study`, `twelve_standard`, `twelve_year_of_study`, `degree`, `degree_year_of_study`, `masters`, `masters_year_of_study`, `PHD`) VALUES
(1, 12345, '98.2', 2014, '98', 2016, '89', 2020, '87', 2022, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_experience`
--

DROP TABLE IF EXISTS `faculty_experience`;
CREATE TABLE IF NOT EXISTS `faculty_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `institution_name` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `teaching_hours` int(11) NOT NULL,
  `place` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_experience`
--

INSERT INTO `faculty_experience` (`id`, `emp_id`, `institution_name`, `university`, `teaching_hours`, `place`) VALUES
(1, 12345, 'CVSr', 'JNTU', 100, 'Hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_phd`
--

DROP TABLE IF EXISTS `faculty_phd`;
CREATE TABLE IF NOT EXISTS `faculty_phd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `university_name` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_phd`
--

INSERT INTO `faculty_phd` (`id`, `emp_id`, `specialisation`, `year`, `university_name`, `college`) VALUES
(1, 12345, 'ML', 2022, 'KLU', 'CVSR');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_publications`
--

DROP TABLE IF EXISTS `faculty_publications`;
CREATE TABLE IF NOT EXISTS `faculty_publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `date_of_publication` date NOT NULL,
  `validation` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  `international_name` varchar(100) NOT NULL,
  `index_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_publications`
--

INSERT INTO `faculty_publications` (`id`, `emp_id`, `date_of_publication`, `validation`, `page`, `international_name`, `index_name`) VALUES
(1, 12345, '0000-00-00', 'Validation', 'Page', 'International Name', 'Index name');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subject`
--

DROP TABLE IF EXISTS `faculty_subject`;
CREATE TABLE IF NOT EXISTS `faculty_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_subject`
--

INSERT INTO `faculty_subject` (`id`, `emp_id`, `subject_name`) VALUES
(1, 12345, 'DWDM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `login_type` varchar(100) NOT NULL,
  `DEPT` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `login_type`, `DEPT`) VALUES
(3, 'karthik@cvsr.ac.in', 12345, 'Faculty', 'CSE\\'),
(5, 'hodcse@cvsr.ac.in', 123, 'HOD', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
CREATE TABLE IF NOT EXISTS `personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL,
  `DEPT` varchar(120) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `date_of_joining` date NOT NULL,
  `PAN` varchar(20) NOT NULL,
  `aadhaar` int(12) NOT NULL,
  `JNTU_no` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `Name`, `DEPT`, `emp_id`, `email`, `phone_no`, `date_of_joining`, `PAN`, `aadhaar`, `JNTU_no`) VALUES
(1, 'Sai Karthik', 'CSE', 12345, 'saikarthik952@gmail.com', 2147483647, '0000-00-00', '1234567890', 2147483647, '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
