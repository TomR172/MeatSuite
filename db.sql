CREATE DATABASE `db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db`;

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE IF NOT EXISTS `farms` (
  `FarmName` varchar(30) DEFAULT NULL,
  `Owner` varchar(30) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL
  `Phone` varchar(30) DEFAULT NULL
  `Email` varchar(30) DEFAULT NULL
  `Website` varchar(30) DEFAULT NULL
  `Organic` varchar(30) DEFAULT NULL
  `Products` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farms`
--

/*INSERT INTO `farms` (`FarmName`, `FirstName`, `LastName`) VALUES
('McDonalds Farm', 'Ronald', 'McDonald'),
('Red Bard', 'Barney', 'Rubble'),
('Red Bard', 'Barney', 'Rubble');*/