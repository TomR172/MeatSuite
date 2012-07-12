-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2012 at 06:00 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE IF NOT EXISTS `farms` (
  `FarmName` varchar(30) DEFAULT NULL,
  `owner` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `organic` tinyint(1) NOT NULL,
  `beef` tinyint(1) NOT NULL,
  `pork` tinyint(1) NOT NULL,
  `chicken` tinyint(1) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`FarmName`, `owner`, `address`, `phone`, `email`, `website`, `organic`, `beef`, `pork`, `chicken`, `description`, `id`) VALUES
('The Farm', 'John Doe', '123 Main Street', '607-555-1233', 'john.doe@gmail.com', 'www.joesfarm.com', 0, 0, 0, 0, NULL, 1),
('Butcher Shop', 'Bob', '63 Tower Road', '800-432-5433', 'bob@gmail.com', 'www.joesfarm.com', 0, 0, 0, 0, '(voice-over) With the coming of the Second World War, many eyes in imprisoned Europe turned hopefully or desperately toward the freedom of the Americas. Lisbon became the great embarkation point. But not everybody could get to Lisbon directly...', 2),
('', '', '', '', '', '', 1, 1, 1, 1, '		No more than 1000 characters\r\n	', 3),
('sdf', 'sdf', 'sadf', 'sdf', 'sadf', 'sf', 0, 0, 0, 0, '		No more than 1000 characters\r\n	', 4),
('dsf', 'sdaf', 'asdf', 'sadfsadf', 'sdaf', 'sadf', 0, 0, 0, 0, '		No more than 1000 characters\r\n	', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
