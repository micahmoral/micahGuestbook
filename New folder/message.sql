-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2013 at 08:43 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `message`
--
CREATE DATABASE IF NOT EXISTS `message` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `message`;

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE IF NOT EXISTS `mess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_posted` date NOT NULL,
  `is_approved` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`id`, `name`, `email`, `message`, `date_posted`, `is_approved`) VALUES
(1, 'micah', 'micah@yahoo.com', 'hello', '0000-00-00', 'Y'),
(2, 'micah', 'micah@yahoo.com', 'DSGRF', '0000-00-00', 'Y'),
(3, 'rochelle', 'cferdzz@yahoo.com', 'FBGA', '2013-11-25', 'Y'),
(4, 'fgdd', 'ggfgd', 'fgd', '2013-11-25', 'Y'),
(5, 'fgdd', 'ggfgd', 'fgd', '2013-11-25', 'Y'),
(6, 'fgdd', 'ggfgd', 'fgd', '2013-11-25', 'Y'),
(7, 'sfdez', 'rfgrt', 'vgaftr', '2013-11-25', 'Y'),
(8, '', '', '', '2013-11-25', 'Y'),
(9, '', '', '', '2013-11-25', 'Y'),
(10, '', '', '', '2013-11-25', 'Y'),
(11, 'ugdsrsewewr', 'yttrdfhg', 'fhgjhj', '2013-11-25', 'Y'),
(12, '', '', '', '2013-11-25', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
