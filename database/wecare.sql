-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 12:37 AM
-- Server version: 10.11.0-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `nationalid` int(8) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `fullname`, `nationalid`, `phonenumber`, `password`, `id`, `image`) VALUES
('oranyabura@gmail.com', 'Gaudencia O', 12345678, 791958185, '1234', 1, ''),
('lloydkatila@gmail.com', 'lloyd tony katila', 1234, 1234, '1234', 2, ''),
('lloydkatila@gmail.com', 'lloyd tony katila', 1234, 1234, '1234', 3, ''),
('lloyd5@gmail.co.ke', 'katwe', 123455, 43345, '1234', 4, 'Fp1Mf31WwAEL7ma.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `action` varchar(10) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `email` char(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nationalid` int(8) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `terms` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`email`, `username`, `nationalid`, `phonenumber`, `password`, `confirmpassword`, `terms`) VALUES
('nyamburakimberly5@gmail.com', 'root', 1234455, 783946273, '1234', '1234', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `email` char(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `nationalid` int(8) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `terms` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`email`, `fullname`, `nationalid`, `phonenumber`, `password`, `confirmpassword`, `terms`) VALUES
('ema@gmail.com', '123456', 234567, 791958185, '1234', '1234', 'on'),
('oranyambura@gmail.com', 'Gaudencia Otara', 12345678, 791958185, '1234', '1234', 'on'),
('oranyambura@gmail.com', 'Gaudencia Otara', 12345678, 791958185, '', '', 'on'),
('root2F@G.H', 'Gaudensia Otara', 23456, 0, '1234', '1234', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `notifcation`
--

CREATE TABLE `notifcation` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `message_header` varchar(100) NOT NULL,
  `message_content` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `terms` varchar(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`email`, `username`, `phonenumber`, `password`, `confirmpassword`, `terms`, `firstname`, `lastname`, `adress`) VALUES
('oranyabura@gmail.com', 'otaraðŸ¤¦â€â™‚ï¸', 791958185, '1234', '1234', 'on', 'gaudenciaðŸ‘€', 'otara', 'mabungoðŸ˜‚'),
('u@gmail.com', 'us', 789654323, '1234', '1234', 'on', 'iiii', 'ghgggh', 'PO BOX 58'),
('tilecom575@chimpad.com', ' COMMA', 791958185, '12345', '12345', 'on', 'Gau', 'Otara', '58,Kenyenya');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Email` char(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `NationalID` int(8) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `Terms` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Email`, `Username`, `NationalID`, `PhoneNumber`, `Password`, `confirmpassword`, `Terms`) VALUES
('hello@gmail.com', 'root', 76543, 0, '1234', '1234', 'on'),
('hello@gmail.comaw4tawd', 'rootsdg', 765439, 0, '', '', 'on'),
('hello@gmail.comaw4ta', 'roots', 123456, 783946273, '1234', '1234', 'on'),
('oranyambura@gmail.com', 'root', 12375489, 9876543, '1234', '1234', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifcation`
--
ALTER TABLE `notifcation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifcation`
--
ALTER TABLE `notifcation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
