-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 06:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `account1`
--

CREATE TABLE `account1` (
  `sno` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `id` varchar(500) NOT NULL,
  `Survey_number` varchar(500) NOT NULL,
  `Full_area` varchar(500) NOT NULL,
  `not_cultivated` varchar(500) NOT NULL,
  `Cultivation_area` varchar(500) NOT NULL,
  `Account_number` varchar(500) NOT NULL,
  `land_rent` varchar(500) NOT NULL,
  `land_rented` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account1`
--

INSERT INTO `account1` (`sno`, `username`, `id`, `Survey_number`, `Full_area`, `not_cultivated`, `Cultivation_area`, `Account_number`, `land_rent`, `land_rented`) VALUES
(1, 'gowtham', '1', '123', '2.3', '1', '1.3', '443', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `sno` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `seed` varchar(500) NOT NULL,
  `actual` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `subsidy` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`sno`, `username`, `seed`, `actual`, `quantity`, `subsidy`, `status`) VALUES
(6, 'gowtham', 'Wheat', '3', '5', 'not', 'pending by bank');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `branch` text,
  `course` text,
  `year` text,
  `semester` text,
  `photo` text,
  `add_by` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `branch`, `course`, `year`, `semester`, `photo`, `add_by`) VALUES
(29, 'ece', 'diploma', '3', '2', 'CYMERA_20180126_105147.jpg', 'gowtham'),
(30, 'ece', 'mtech', '3', '2', '20171221_172105.jpg', 'manikanta'),
(31, 'ece', 'mtech', '2', '2', '20171221_172229.jpg', 'manikanta'),
(32, 'cse', 'mtech', '2', '2', 'CYMERA_20180119_162326.jpg', 'veeru');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `username` text,
  `email` text,
  `rollno` text,
  `phoneno` text,
  `college` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `username`, `email`, `rollno`, `phoneno`, `college`) VALUES
(1, 'gowtham', '', '16p31a0478', '9876543210', 'aditya'),
(2, 'manikanta', 'mani@gmail.om', '16p31a04b0', '8795462130', 'pragathi'),
(3, 'veeru', 'veeru@gmail', '16p31a0492', '7894561230', 'giet'),
(4, 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `sno` int(11) NOT NULL,
  `id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `period` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`sno`, `id`, `name`, `period`, `date`) VALUES
(1, '1', 'Rakesh', '2 years', '2019-02-20 06:00:00'),
(2, '1', 'Rakesh', '2 years', '2019-02-20 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rented`
--

CREATE TABLE `rented` (
  `sno` int(11) NOT NULL,
  `id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `select1`
--

CREATE TABLE `select1` (
  `id` int(11) NOT NULL,
  `branch` text,
  `course` text,
  `year` text,
  `semester` text,
  `file` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table 5`
--

CREATE TABLE `table 5` (
  `COL 1` varchar(9) DEFAULT NULL,
  `COL 2` varchar(14) DEFAULT NULL,
  `COL 3` varchar(10) DEFAULT NULL,
  `COL 4` varchar(22) DEFAULT NULL,
  `COL 5` varchar(17) DEFAULT NULL,
  `COL 6` varchar(15) DEFAULT NULL,
  `COL 7` varchar(12) DEFAULT NULL,
  `COL 8` varchar(17) DEFAULT NULL,
  `COL 9` varchar(9) DEFAULT NULL,
  `COL 10` varchar(10) DEFAULT NULL,
  `COL 11` varchar(15) DEFAULT NULL,
  `COL 12` varchar(38) DEFAULT NULL,
  `COL 13` varchar(24) DEFAULT NULL,
  `COL 14` varchar(16) DEFAULT NULL,
  `COL 15` varchar(14) DEFAULT NULL,
  `COL 16` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 5`
--

INSERT INTO `table 5` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`) VALUES
('w number ', 'Survey number ', 'Full area ', 'An area not cultivated', 'Cultivation area ', 'Earth\'s nature ', 'CHIEF (Rs.) ', 'Earth Description', 'Watershed', 'Acre area ', 'Account number ', 'Name of the ', 'Experience Title ', 'Experience area ', 'Expert nature ', 'Remembers'),
('', '', '', '', '', '', '', '', '', '', '', 'paternal name (father / husband name) ', '(Father / Husband Name) ', '', '', ''),
('1', '244-3a', '2.23', '0', '2.23', 'Jirayiti', '20.88', 'Nanja', 'Pond', '0', '333', 'Penupotula Manikyam ', 'Penupotula Manikyam ', '1', 'Buy', ''),
('', '', '', '', '', '', '', '', '', '', '', '(jogiraju)', '(jogiraju)', '', '', ''),
('2', '', '', '', '', '', '', '', '', '', '598', 'Gouthu Chakla Lakshmi', 'Gouthu Chakla Lakshmi ', '1.23', 'Buy', 'Column1'),
('', '', '', '', '', '', '', '', '', '', '', '(Venkat Reddy)', '(Venkat Reddy)', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table 6`
--

CREATE TABLE `table 6` (
  `COL 1` varchar(9) DEFAULT NULL,
  `COL 2` varchar(14) DEFAULT NULL,
  `COL 3` varchar(10) DEFAULT NULL,
  `COL 4` varchar(22) DEFAULT NULL,
  `COL 5` varchar(17) DEFAULT NULL,
  `COL 6` varchar(15) DEFAULT NULL,
  `COL 7` varchar(12) DEFAULT NULL,
  `COL 8` varchar(17) DEFAULT NULL,
  `COL 9` varchar(9) DEFAULT NULL,
  `COL 10` varchar(10) DEFAULT NULL,
  `COL 11` varchar(15) DEFAULT NULL,
  `COL 12` varchar(38) DEFAULT NULL,
  `COL 13` varchar(24) DEFAULT NULL,
  `COL 14` varchar(16) DEFAULT NULL,
  `COL 15` varchar(14) DEFAULT NULL,
  `COL 16` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 6`
--

INSERT INTO `table 6` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`) VALUES
('w number ', 'Survey number ', 'Full area ', 'An area not cultivated', 'Cultivation area ', 'Earth\'s nature ', 'CHIEF (Rs.) ', 'Earth Description', 'Watershed', 'Acre area ', 'Account number ', 'Name of the ', 'Experience Title ', 'Experience area ', 'Expert nature ', 'Remembers'),
('', '', '', '', '', '', '', '', '', '', '', 'paternal name (father / husband name) ', '(Father / Husband Name) ', '', '', ''),
('1', '244-3a', '2.23', '0', '2.23', 'Jirayiti', '20.88', 'Nanja', 'Pond', '0', '333', 'Penupotula Manikyam ', 'Penupotula Manikyam ', '1', 'Buy', ''),
('', '', '', '', '', '', '', '', '', '', '', '(jogiraju)', '(jogiraju)', '', '', ''),
('2', '', '', '', '', '', '', '', '', '', '598', 'Gouthu Chakla Lakshmi', 'Gouthu Chakla Lakshmi ', '1.23', 'Buy', 'Column1'),
('', '', '', '', '', '', '', '', '', '', '', '(Venkat Reddy)', '(Venkat Reddy)', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uploade`
--

CREATE TABLE `uploade` (
  `son` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `land_number` varchar(500) NOT NULL,
  `adhaar` varchar(500) NOT NULL,
  `phonenumber` varchar(500) NOT NULL,
  `survey_number` varchar(500) NOT NULL,
  `accountnumber` varchar(500) NOT NULL,
  `conformation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploade`
--

INSERT INTO `uploade` (`son`, `username`, `id`, `land_number`, `adhaar`, `phonenumber`, `survey_number`, `accountnumber`, `conformation`) VALUES
(0, 'gowtham', 1, '123', '555555555555', '9401474790', '123', '222', 0),
(0, 'gowtham', 1, '1236', '985465592722', '9401474790', '1322', '1566', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text,
  `password` text,
  `rollno` text,
  `status` int(11) DEFAULT '1',
  `email` text,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `rollno`, `status`, `email`, `photo`) VALUES
(1, 'gowtham', '12345', '1233456', 1, 'saitej1010@gmail', '20171221_172041.jpg'),
(2, 'manikanta', '789654', '16p31a04b0', 1, NULL, NULL),
(3, 'veeru', '12345678', '1233456', 1, 'mani@gmail.om', '20171221_172105.jpg'),
(5, 'gfhkjyy', NULL, '213dadgf', 1, 'say@gmail', '20170905_155354.jpg'),
(6, 'saitej', NULL, '1233456', 1, 'saitej1010@gmail', '20171112_154455.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account1`
--
ALTER TABLE `account1`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `select1`
--
ALTER TABLE `select1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account1`
--
ALTER TABLE `account1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `select1`
--
ALTER TABLE `select1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
