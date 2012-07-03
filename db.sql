CREATE DATABASE `db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db`;

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE IF NOT EXISTS `farms` (
  `FarmName` varchar(30) DEFAULT NULL,
   ALTER TABLE 'farms' ADD`owner` varchar(30) NOT NULL,
   ALTER TABLE 'farms' ADD`address` varchar(30) NOT NULL,
   ALTER TABLE 'farms' ADD`phone` varchar(30) NOT NULL,
   ALTER TABLE 'farms' ADD`email` varchar(30) NOT NULL,
   ALTER TABLE 'farms' ADD`website` varchar(30) NOT NULL,
   ALTER TABLE 'farms' ADD`organic` tinyint(1) NOT NULL,
   ALTER TABLE 'farms' ADD`beef` tinyint(1) NOT NULL,
   ALTER TABLE 'farms' ADD`pork` tinyint(1) NOT NULL,
   ALTER TABLE 'farms' ADD`chicken` tinyint(1) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farms`
--

/*INSERT INTO `farms` (`FarmName`, `FirstName`, `LastName`) VALUES
('McDonalds Farm', 'Ronald', 'McDonald'),
('Red Bard', 'Barney', 'Rubble'),
('Red Bard', 'Barney', 'Rubble');*/