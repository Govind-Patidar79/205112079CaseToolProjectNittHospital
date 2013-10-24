-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2013 at 07:31 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pname` varchar(40) NOT NULL,
  `prolln` int(9) NOT NULL DEFAULT '0',
  `pphone` varchar(10) DEFAULT NULL,
  `padd` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pdob` date NOT NULL,
  `dis` varchar(200) DEFAULT NULL,
  `medi` varchar(200) DEFAULT NULL,
  `ttype` varchar(200) DEFAULT NULL,
  `td` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`prolln`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pname`, `prolln`, `pphone`, `padd`, `gender`, `pdob`, `dis`, `medi`, `ttype`, `td`) VALUES
('abc', 123, '453', 'xyx', 'male', '2013-01-01', NULL, NULL, 'blood', ' dgdfgfd\r\ndgdf\r\ngfdgdf\r\n'),
('Amit Kolariya', 205112077, '8144886708', 'Aquamarine-A', 'male', '1991-05-01', 'cold', 'uyrftuyt\r\ndgd\r\ng\r\ndfg\r\ndf\r\ng\r\n', 'blodd', ' gfdhgsd\r\ndfgfd\r\ngd\r\ng\r\nfd\r\ngdf\r\n'),
('Govind patidar', 205112079, '7667965717', 'Aquamarine-A', 'male', '1991-08-17', '', '', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
