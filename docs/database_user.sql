-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2015 at 06:06 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `configdata`
--

CREATE TABLE IF NOT EXISTS `configdata` (
  `lesson_id` int(11) NOT NULL,
  `slide_id` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configdata`
--

INSERT INTO `configdata` (`lesson_id`, `slide_id`, `start_time`, `end_time`) VALUES
(38, 0, 0, 5),
(38, 1, 0, 12),
(38, 2, 13, 14),
(38, 3, 15, 17),
(38, 4, 18, 20),
(38, 5, 25, 30),
(40, 1, 1, 2),
(40, 2, 3, 5),
(40, 3, 6, 7),
(40, 4, 8, 11),
(40, 5, 12, 13),
(44, 1, 0, 60),
(44, 2, 61, 80),
(44, 3, 81, 90),
(44, 4, 98, 120),
(44, 5, 120, 160),
(38, 0, 0, 5),
(38, 1, 0, 12),
(38, 2, 13, 14),
(38, 3, 15, 17),
(38, 4, 18, 20),
(38, 5, 25, 30),
(40, 1, 1, 2),
(40, 2, 3, 5),
(40, 3, 6, 7),
(40, 4, 8, 11),
(40, 5, 12, 13),
(44, 1, 0, 60),
(44, 2, 61, 80),
(44, 3, 81, 90),
(44, 4, 98, 120),
(44, 5, 120, 160),
(47, 1, 0, 60),
(47, 2, 61, 80),
(47, 3, 81, 90),
(47, 4, 98, 120),
(47, 5, 120, 160),
(48, 1, 0, 60),
(48, 2, 61, 80),
(48, 3, 81, 90),
(48, 4, 98, 120),
(48, 5, 120, 160),
(57, 1, 0, 60),
(57, 2, 61, 80),
(57, 3, 81, 90),
(57, 4, 98, 120),
(57, 5, 120, 160),
(59, 1, 0, 60),
(59, 2, 61, 80),
(59, 3, 81, 90),
(59, 4, 160, 240),
(59, 5, 300, 360),
(61, 1, 0, 60),
(61, 2, 61, 80),
(61, 3, 81, 90),
(61, 4, 160, 240),
(61, 5, 300, 360),
(64, 1, 0, 60),
(64, 2, 61, 80),
(64, 3, 81, 90),
(64, 4, 160, 240),
(64, 5, 300, 360),
(66, 1, 0, 60),
(66, 2, 61, 80),
(66, 3, 81, 90),
(66, 4, 160, 240),
(66, 5, 300, 360),
(66, 6, 360, 420),
(66, 7, 420, 480),
(66, 9, 480, 520),
(66, 10, 520, 580),
(66, 11, 580, 640),
(66, 12, 640, 700),
(66, 13, 700, 740),
(66, 14, 740, 800),
(61, 1, 0, 60),
(61, 2, 61, 80),
(61, 3, 81, 90),
(61, 4, 160, 240),
(61, 5, 300, 360),
(68, 1, 0, 60),
(68, 2, 61, 80),
(68, 3, 81, 90),
(68, 4, 160, 240),
(68, 5, 300, 360),
(75, 1, 0, 60),
(75, 2, 61, 80),
(75, 3, 81, 90),
(75, 4, 160, 240),
(75, 5, 300, 360),
(77, 1, 0, 60),
(77, 2, 61, 80),
(77, 3, 81, 90),
(77, 4, 160, 240),
(77, 5, 300, 360),
(78, 1, 0, 60),
(78, 2, 61, 80),
(78, 3, 81, 90),
(78, 4, 160, 240),
(78, 5, 300, 360),
(78, 1, 0, 60),
(78, 2, 61, 80),
(78, 3, 81, 90),
(78, 4, 160, 240),
(78, 5, 300, 360),
(80, 1, 0, 60),
(80, 2, 61, 80),
(80, 3, 81, 90),
(80, 4, 160, 240),
(80, 5, 300, 360),
(81, 1, 0, 60),
(81, 2, 61, 80),
(81, 3, 81, 90),
(81, 4, 160, 240),
(81, 5, 300, 360),
(85, 1, 0, 60),
(85, 2, 61, 80),
(85, 3, 81, 90),
(85, 4, 160, 240),
(85, 5, 300, 360),
(86, 1, 0, 60),
(86, 2, 61, 80),
(86, 3, 81, 90),
(86, 4, 160, 240),
(86, 5, 300, 360),
(87, 1, 0, 10),
(87, 2, 10, 30),
(87, 3, 30, 60),
(87, 4, 60, 90),
(87, 5, 90, 120),
(87, 6, 120, 150),
(87, 7, 150, 200),
(87, 8, 200, 250),
(87, 9, 250, 300),
(87, 10, 300, 450),
(90, 1, 0, 10),
(90, 2, 10, 30),
(90, 3, 30, 60),
(90, 4, 60, 90),
(90, 5, 90, 120),
(90, 6, 120, 150),
(90, 7, 150, 200),
(90, 8, 200, 250),
(90, 9, 250, 300),
(90, 10, 300, 450),
(91, 1, 0, 10),
(91, 2, 10, 30),
(91, 3, 30, 60),
(91, 4, 60, 90),
(91, 5, 90, 120),
(91, 6, 120, 150),
(91, 7, 150, 200),
(91, 8, 200, 250),
(91, 9, 250, 300),
(91, 10, 300, 450),
(92, 1, 0, 10),
(92, 2, 10, 30),
(92, 3, 30, 60),
(92, 4, 60, 90),
(92, 5, 90, 120),
(92, 6, 120, 150),
(92, 7, 150, 200),
(92, 8, 200, 250),
(92, 9, 250, 300),
(92, 10, 300, 450),
(93, 1, 0, 10),
(93, 2, 10, 30),
(93, 3, 30, 60),
(93, 4, 60, 90),
(93, 5, 90, 120),
(93, 6, 120, 150),
(93, 7, 150, 200),
(93, 8, 200, 250),
(93, 9, 250, 300),
(93, 10, 300, 450);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`User_ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`User_ID`, `name`, `permission`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n"admin": 1,\r\n"moderator":1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE IF NOT EXISTS `lesson` (
  `name` varchar(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `lecture` varchar(30) NOT NULL,
  `category` varchar(11) NOT NULL,
  `no_of_slides` int(11) NOT NULL,
`lesson_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`name`, `description`, `lecture`, `category`, `no_of_slides`, `lesson_id`, `type`) VALUES
('Adroid', 'None', 'Bucky', 'programming', 10, 87, 1),
('Database', 'none', 'saman', 'networking', 10, 90, 1),
('network', 'none', 'buckey', 'algorithms', 10, 91, 1),
('Software', 'none', 'chamara', 'networking', 10, 92, 1),
('demo_new', 'test', 'Saman', 'networking', 10, 93, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subtitles`
--

CREATE TABLE IF NOT EXISTS `subtitles` (
  `lesson_id` int(11) NOT NULL,
  `slide_id` int(11) NOT NULL,
  `sub_title` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtitles`
--

INSERT INTO `subtitles` (`lesson_id`, `slide_id`, `sub_title`) VALUES
(78, 2, 'sub1\r\n'),
(78, 3, 'sub2\r\n'),
(80, 2, 'sub1\r\n'),
(80, 3, 'sub2\r\n'),
(81, 2, 'sub1\r\n'),
(81, 3, 'sub2\r\n'),
(82, 2, 'sub1\r\n'),
(82, 3, 'sub2\r\n'),
(83, 2, 'sub1\r\n'),
(83, 3, 'sub2\r\n');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `First_Name`, `Last_Name`, `User_Name`, `Password`, `E_mail`, `group`, `salt`) VALUES
(12, 'abcd', 'ssss', 'silva', '9108a3c918171f0a220dfd31dbd1e1c0e17e70102338c1e8b7099df703d0081a', 'silva@gmail.com', 2, '­þ–ÿO©£w>­ñ=0b…²õ{ªÎ„ÊÌjqtE'),
(13, 'alexx', 'garlettfhbftg', 'alex', 'ab23a954b9893a4674c35272ceca812f501507f9a8c1109edb64b889105b9601', 'alexx@gmail.com', 1, 'ÏrL,J¼=Àº±ç/d÷â“HSì€¯—¦vAv)Ë'),
(53, 'saman', 'tr', 'saman', '022d9da511920445b6eb2d0a5d6284a3bca3bf5d2f1c7401c0bb246e13e8ffb0', 'xxxx@gmail.com', 1, '÷z¤bÃj±\\¢³¬!0>ìƒS×”öq¯ìÓ×Š­ù'),
(54, 'Teena', 'tencyl', 'teena', '615e9f2eae8fa4bf59bf9f81a9e18c28c819e6e59cc8e7345187d1bafa2fd355', 'teena@gmail.com', 3, '²ùÆ{ž”Í†›„2ªÈ?ÍÍK:]Ê³àÌY‚ix'),
(55, 'Amal', 'Sagara', 'amal', '5af7153b51d28045f17a28d4e0d4a6a8ffc31d2cae9b55be9f15d57ff5acc71c', 'amal@gmail.com', 4, 'e÷!YibE¨cc?š·jsÀñÚ‚Loµ„V“²çb'),
(56, 'Sunil', 'serana', 'sunil', '2996f9df3d9f98c3c59979d8fce402a3ddbb653e4ee9dd9e5a3b96e8a80c02ce', 'sunil@gmail.com', 4, 'žxö|!OÎÀåÐxôFyÖVòÙ|=©ÉkâGS\\šý~'),
(57, 'kevin', 'peter', 'kevin', '8de3e257e4f8df9e1c7fb21f02a875317723ceeeb165a7b0fbcb1301ca596419', 'kevin@gmail.com', 3, 'Àx4íŠ†áá{T\rô©£Œ¥§Üáoj¯¸•#‡7Ý'),
(58, 'jeel', 'chakobo', 'jeel', 'f504e95aa3e3c61cb2d494a903465b9f020a26e000063d08374ad74b41370680', 'jeel@gmail.com', 4, 'áéÒÒ¿âÑV‹J£Éh$ô÷î>ÇûÖ?c@''´®');

-- --------------------------------------------------------

--
-- Table structure for table `users_sessions`
--

CREATE TABLE IF NOT EXISTS `users_sessions` (
`User_ID` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
 ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `subtitles`
--
ALTER TABLE `subtitles`
 ADD PRIMARY KEY (`lesson_id`,`slide_id`);

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
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `users_sessions`
--
ALTER TABLE `users_sessions`
MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
