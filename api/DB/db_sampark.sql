-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 01:13 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sampark`
--

-- --------------------------------------------------------

--
-- Table structure for table `samparkdata`
--

CREATE TABLE `samparkdata` (
  `id` int(11) NOT NULL,
  `refname` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(125) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `home` bigint(20) NOT NULL,
  `office` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `majorsub` varchar(50) NOT NULL,
  `edustatus` varchar(50) NOT NULL,
  `attendence` varchar(50) NOT NULL,
  `followupname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samparkdata`
--

INSERT INTO `samparkdata` (`id`, `refname`, `fullname`, `nickname`, `gender`, `dob`, `address`, `mobile`, `home`, `office`, `email`, `qualification`, `majorsub`, `edustatus`, `attendence`, `followupname`) VALUES
(1, 'Pratik Doshi', 'Lopesh Sudesh Durugkar', 'Loops', 'Male', '1995-10-11', '44/1312 Amrutwell Co-op.hsg.soc Pantnagar Ghatkopar(E) Mumbai-400075', 9619130553, 0, 0, 'durugkarlopesh@gmail.com', 'T.Y.BSC.IT', 'IT', 'Student', 'Ghatkopar', 'Amar Daxini'),
(2, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(3, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(4, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(5, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(6, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(7, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(8, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(9, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(10, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(11, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(12, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar'),
(13, 'Rupesh', 'nikhil jagtap', 'niks', 'male', '0000-00-00', '3/4 s.l sutari chawl', 8693001644, 0, 0, 'nikhiljagtap702@gmail.com', 'bsc-CS', '', '', 'Bhandup', 'Aditya jejurkar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `samparkdata`
--
ALTER TABLE `samparkdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `samparkdata`
--
ALTER TABLE `samparkdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
