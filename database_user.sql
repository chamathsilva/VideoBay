-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2015 at 10:02 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `User_ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`User_ID`, `name`, `permission`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n"admin": 1,\r\n"moderator":1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `E_mail` varchar(30) NOT NULL,
  `group` int(11) NOT NULL,
  `salt` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `First_Name`, `Last_Name`, `User_Name`, `Password`, `E_mail`, `group`, `salt`) VALUES
(12, 'abcd', 'ssss', 'silva', '9108a3c918171f0a220dfd31dbd1e1c0e17e70102338c1e8b7099df703d0081a', 'silva@gmail.com', 2, '­þ–ÿO©£w>­ñ=0b…²õ{ªÎ„ÊÌjqtE'),
(13, 'alex', 'garlet', 'alex', '58f5a8b58e47618c87def213dbdcfabb05b652183b83a8a1eb250e2bc9518923', 'alexx@gmail.com', 1, 'Mdób‹€™ç^ƒb+ms2ýëfÎ3AÉlƒ''Âr<í›ó');

-- --------------------------------------------------------

--
-- Table structure for table `users_sessions`
--

CREATE TABLE IF NOT EXISTS `users_sessions` (
  `User_ID` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users_sessions`
--
ALTER TABLE `users_sessions`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
