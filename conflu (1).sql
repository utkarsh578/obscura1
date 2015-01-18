-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2015 at 10:59 AM
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
-- Table structure for table `conflu`
--

CREATE TABLE IF NOT EXISTS `conflu` (
  `userID` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_no` bigint(13) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `level` int(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `conflu`
--

INSERT INTO `conflu` (`userID`, `name`, `username`, `email`, `contact_no`, `pass`, `level`, `date`) VALUES
(1, 'shu', 'utkarsh578', 'utkarsh578@gmail.com', 9802791771, 'c', 31, '2014-02-28 01:11:17'),
(2, 'utkarshkk', 'utkarsh577', 'utkarsh578@gmail.com', 9802791771, 'c', 24, '2014-02-25 01:37:12'),
(3, 'utkarshkkpun', 'utkarsh5777', 'utkarsh578@gmail.com', 8816848630, 'c', 5, '2014-02-24 19:22:11'),
(4, 'shu', 'srijan', 's@gmail.com', 1236547896, 'c', 22, '2014-02-24 23:46:51'),
(5, 'ddddd', '', '', 0, '', 0, '0000-00-00 00:00:00'),
(6, 'achyut', 'utkarsh57855', 'achyut.pdl@gmail.com', 7894561233, 'c', 0, '0000-00-00 00:00:00'),
(7, 'achyutfg', 'dfsdfsd', 'pusharakd@gmail.com', 1234567893, 'v', 0, '0000-00-00 00:00:00'),
(8, 'dbd', 'afdsfsdfs', 'dasa@gmail.com', 1234567893, 'b', 0, '0000-00-00 00:00:00'),
(9, 'dbdvvvq', 'dfddfq', 'pusharakd@gmail.com', 1234567899, 'f', 0, '0000-00-00 00:00:00'),
(10, 'Aditya dasaff', 'dfsdfs', 'achyut.pdl@gmail.com', 1234567893, 'g', 0, '0000-00-00 00:00:00'),
(11, 'dbdbbb', 'fdfdddfd', 'pusharakd@gmail.com', 1234567893, 'r', 0, '0000-00-00 00:00:00'),
(12, 'Aditya dasaffvb', 'ddd', 'achyut.pdl@gmail.com', 1234567893, 't', 0, '0000-00-00 00:00:00'),
(13, 'ooooo', 'ooooooo', 'pusharakd@gmail.com', 1234567893, 'r', 0, '0000-00-00 00:00:00'),
(14, 'fgfgfgf', 'f', 'pusharakd@gmail.com', 1234567893, 'p', 0, '0000-00-00 00:00:00'),
(15, 'Aditya dasakkkkk', 'kkkkkk', 'pusharakd@gmail.com', 1234567893, 'i', 0, '0000-00-00 00:00:00'),
(16, 'Aditya dasaffkkkk', 'kl', 'achyut.pdl@gmail.com', 7894561233, '888', 0, '0000-00-00 00:00:00'),
(17, 'iiiii', 'iiiiiiii', 'achyut.pdl@gmail.com', 1234567893, ',', 0, '0000-00-00 00:00:00'),
(18, 'opopop', 'popopopop', 'achyut.pdl@gmail.com', 1234567893, 'v', 0, '0000-00-00 00:00:00'),
(19, 'achyutfgvvvvv', 'utkarsh578nnnnnn', 'achyut.pdl@gmail.com', 1234567893, 'c', 0, '0000-00-00 00:00:00'),
(20, 'achyutfgvvvvvjjjj', 'jjjjjjjj', 'achyut.pdl@gmail.com', 1234567893, 'u', 0, '0000-00-00 00:00:00'),
(21, 'achyutfgfffj', 'vnvnvnv', 'pusharakd@gmail.com', 1234567893, '8', 0, '0000-00-00 00:00:00'),
(22, 'mgkgkgkgk', 'gjgjhjhjhj', 'pusharakd@gmail.com', 7894561233, 'p', 0, '0000-00-00 00:00:00'),
(23, 'achyutfgfffjkfjgkfj', 'fjfjfjjfjfj', 'pusharakd@gmail.com', 1234567893, 'o', 0, '0000-00-00 00:00:00'),
(24, 'wewewe', 'hghghghghgh', 'pusharakd@gmail.com', 1234567893, 'm', 0, '0000-00-00 00:00:00'),
(25, 'wewewe', 'fgfgfgf', 'pusharakd@gmail.com', 1234567893, 'c', 0, '0000-00-00 00:00:00'),
(26, 'weweweiiii', 'utkarsh577lllll', 'achyut.pdl@gmail.com', 1234567893, 'l', 0, '0000-00-00 00:00:00'),
(27, 'wewewe', 'lklklklklklll', 'pusharakd@gmail.com', 1234567893, '9', 0, '0000-00-00 00:00:00'),
(28, 'achyutfgfffjjjjjj', 'jhjhjhjeee', 'pusharakd@gmail.com', 1234567893, '1', 0, '0000-00-00 00:00:00'),
(29, 'khhkhkhhkk', 'uuuuuuuuuuh', 'pusharakd@gmail.com', 1234567893, 'o', 0, '0000-00-00 00:00:00'),
(30, 'pusharak dohroo', 'dire wolf', 'pusharakd@gmail.com', 9802917663, 'wolfman', 9, '2014-02-25 01:19:06'),
(31, 'testing', 'test', 't@gmail.com', 1234567893, 'c', 4, '2014-02-24 22:17:17'),
(32, 'wewewe', 'vvvvvvvvvvvc', 'pusharakd@gmail.com', 7894561233, 'c', 0, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
