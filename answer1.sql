-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2015 at 11:00 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer1`
--

CREATE TABLE IF NOT EXISTS `answer1` (
  `userID` int(9) NOT NULL AUTO_INCREMENT,
  `answer` varchar(50) NOT NULL,
  `level` int(10) NOT NULL,
  `answer1` varchar(60) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `answer1`
--

INSERT INTO `answer1` (`userID`, `answer`, `level`, `answer1`) VALUES
(3, 'a', 1, 'utkarsh'),
(4, 'random2', 255, 'pundu'),
(5, 'utk', 4, ''),
(6, 'random', 5, ''),
(7, 'random', 6, 'pundu'),
(8, 'random', 7, 'utk'),
(9, 'random', 8, ''),
(10, 'random', 9, ''),
(11, 'random', 10, 'utk'),
(12, 'random', 11, ''),
(13, 'random', 12, ''),
(14, 'random', 13, ''),
(15, 'random', 14, ''),
(16, 'random', 15, ''),
(17, 'random', 16, ''),
(18, 'random', 17, ''),
(22, 'random', 1821, ''),
(23, 'random', 1822, ''),
(24, 'random', 1823, ''),
(25, 'random', 1831, 'pundu'),
(26, 'random', 1832, ''),
(27, 'random', 1833, ''),
(28, 'random', 1841, ''),
(29, 'random', 1842, ''),
(30, 'random', 1843, ''),
(31, 'random', 19, ''),
(32, 'random', 20, ''),
(33, 'random', 21, ''),
(34, 'random', 22, ''),
(35, 'random', 23, ''),
(36, 'random', 24, ''),
(37, 'random', 25, ''),
(38, 'random', 26, ''),
(39, 'random', 27, ''),
(40, 'random', 28, ''),
(41, 'random', 29, ''),
(42, 'random', 30, ''),
(43, 'random', 30, ''),
(44, '', 0, ''),
(45, 'random', 55, 'utk'),
(46, 'as', 55, 'as'),
(47, 'utk', 31, 'srijan'),
(48, 'utkarsh', 1811, 'srijan'),
(49, 'utkarsh', 1812, 'srijan'),
(50, 'utk', 1812, 'utk1'),
(51, 'utk', 1813, 'utk1'),
(52, 'a', 1, 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
