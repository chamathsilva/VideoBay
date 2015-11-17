-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 05:54 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

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
(59, 5, 300, 360);

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
-- Table structure for table `lesson`
--

CREATE TABLE IF NOT EXISTS `lesson` (
  `name` varchar(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `lecture` varchar(30) NOT NULL,
  `category` varchar(11) NOT NULL,
  `no_of_slides` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`name`, `description`, `lecture`, `category`, `no_of_slides`, `lesson_id`) VALUES
('z', 'rwe', 'werwe', 'networking', 0, 29),
('wetwetew', 'werwe', 'werwe', 'programming', 0, 30),
('test lesons', 'lol', 'heki', 'networking', 0, 31),
('123312', 'eqw', 'ewrwe', 'networking', 0, 32),
('hello', 'chamath', 'silva', 'programming', 0, 33),
('chamath', 'slva', 'dasd', 'programming', 0, 34),
('apaaa', 'aa', 'aa', 'programming', 0, 35),
('mango', 'hello', 'chamath', 'programming', 0, 36),
('oranges', 'sadas', 'sadasd', 'networking', 0, 37),
('sadsa', 'asdasasdas', 'asdasdas', 'programming', 0, 38),
('sadsa', 'asdasasdas', 'asdasdas', 'programming', 0, 39),
('acd', 'apple', 'ado', 'networking', 5, 40),
('acd', 'apple', 'ado', 'networking', 0, 41),
('hello', 'word', 'aadas', 'programming', 0, 42),
('dsfsd', 'hfg', 'gh', 'algorithms', 0, 43),
('titanic1', 'hello how a', 'chamath sil', 'networking', 5, 44),
('Demo_lesson', 'test', 'saman', 'algorithms', 0, 45),
('eytfey', 'hgdveh', 'edf', 'algorithms', 0, 46),
('chamath_1', 'hello world', 'chathura sir', 'programming', 5, 47),
('final_test', 'sadasd', 'asdasdas', 'programming', 5, 48),
('asa', 'saa', 'asas', 'networking', 0, 49),
('asa', 'saa', 'asas', 'networking', 0, 50),
('ffy', 'huhu', 'hihi', 'programming', 0, 51),
('ffy', 'huhu', 'hihi', 'programming', 0, 52),
('ffy', 'huhu', 'hihi', 'programming', 0, 53),
('dfgr', 'rfgd', 'fdg', 'networking', 0, 54),
('dfgrg', 'rfgdb', 'fdgj', 'programming', 0, 55),
('dfgrg', 'rfgdb', 'fdgj', 'programming', 0, 56),
('weferw', 'esfs', 'sdfsddfsddfsd', 'networking', 5, 57),
('test2222', 'test', 'test', 'programming', 0, 58),
('new1', '1111', '111', 'networking', 5, 59);

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `First_Name`, `Last_Name`, `User_Name`, `Password`, `E_mail`, `group`, `salt`) VALUES
(12, 'abcd', 'ssss', 'silva', '9108a3c918171f0a220dfd31dbd1e1c0e17e70102338c1e8b7099df703d0081a', 'silva@gmail.com', 2, '­þ–ÿO©£w>­ñ=0b…²õ{ªÎ„ÊÌjqtE'),
(13, 'alexx', 'garlettfhbftg', 'alex', 'ab23a954b9893a4674c35272ceca812f501507f9a8c1109edb64b889105b9601', 'alexx@gmail.com', 1, 'ÏrL,J¼=Àº±ç/d÷â“HSì€¯—¦vAv)Ë'),
(14, 'abcd', 'aaaa', 'aabb', 'de5b3f5a4d6e076dd5769d53f9a5767c24c4914c6b50644e7fbe2cefc56cf1f0', 'abcdew@gmail.com', 1, 'õ‚+¢;}ó“ªþêfC‰ §PÁ™ìïyðg£— ‡¾²'),
(15, 'asdfsdgvcz', 'sfbndxcvgnchbn', 'tttttttttt', '9f7f9be6ecb366658477bc393d11daa2a245fa9af5bc21db566456ed25b6ec93', 'tttttttttt@gmail.com', 1, 'å,[ûÊFêM£i…Ã”ßãC™âÊÍoUãŒÌ·K'),
(16, 'rfhftgjgukjhi', 'drfhyfytjhghkj', 'dfbcgvnmvhn', 'b3f6f0be7e405161769821a66c8cd4617bb1406c8a29ac9cb1f874c84bdbf3cc', 'qqqqqq@gmail.com', 1, 'ê7‚2È`ObG~¬_…äj£–ƒ(ð²Ôð	yÛ"%'),
(17, 'adouvjsdoifvj', 'qesifjcadwpefjgwa', 'aaac', '6dfea05cea98f4f274b96d928ed73d72504b066112978b3ad0408f5b8a5e705c', 'aaacm@gmail.com', 1, 'PÏ“¾''i×97¥LoØ£ór)¬¼©R°2ÅfaÃ•ß'),
(18, 'azsdxfghj', 'sdfghjhvhk', 'aszxfdcgcf', '45fdb4284642325984ea8fa7208790c20f27271751f1ef5ce3fcd2b2b747e775', 'aaaaaaaaaa@gmail.com', 1, 'ÿ%óq‰â`:Æ‚!\0¶¦ÅŸƒ¸ìôï2à«‡}'),
(19, 'sssss', 'wwww', 'warfsedgdrf', 'a269a253a3f37cad81ed313aba2c3cf02a0dc3406b6fddc2f6b28187cc64d16b', 'aaaa@gmail.com', 1, '.T€›P±ò^©…ßDÞÛ¤ÐZÆG¿…™£ååü+=<'),
(20, 'paramie', 'Jayasinghe', 'paramieJay', '86765e4b689d62215c17094d56d154b6304804c0b8e36005bb5e9953300ec2ea', 'asdfg@gmail.com', 1, '{Ö¥êz»D0)²Ç\Zˆ£¢Œ•4ŸöÎÀjßù‡øÍÁ'),
(21, 'qqqqqqqqq', 'zzzzzzzzzzzzzz', 'qazz', '1866f3e06297823fcc9addac2ebe0a4938491bc3830bec49d79e28fbeca54cc4', 'qazz@gmail.com', 1, '	Þ7õÞúÝêV[éYRóý#kE™òìz‚žn*éád€'),
(22, 'let', 'this', 'go', 'be639648d028601f586828ac1ebf79a3a73dcd3f5e8869ac0b6fe45e9950e1de', 'letthisgo@gmail.com', 1, 'ÆˆN½’%?`J«|à—‡•Æ	³÷Î&âÜ62å•B'),
(23, 'wfjbweijfbijwenf', 'dsfamfklwa', 'dsfdsfsdf', '7942f51d3d55592ae694c7adc132b764d26742aef138d957b7f8465ad7d950ee', 'fwdfad@sdlfnls', 1, 'ï¯çÕ^¿SZ‘1L¸¨ÝuÓ9øHó|×JrØèäº'),
(24, 'chamat_silva', 'chamath_silva', 'chamath', '823979b5848f62c30b4f9be60f68289191b6541dad33a67e258d4f2b3c547529', 'chamath@com', 1, 'ž¬*›²;êÄ|ˆ0YÞÙÄ¾LÃc	¯û,>>,q'),
(25, 'sunimal', 'gay', 'sunimal', 'fd45edf254d976ca27d67793afcd54124a580b866b2ca8ecaa1859cfba52a7e2', 'sfds@bhb.com', 1, '›¶T•€ÔC*´}ñŸôgÔ-ÆÔé±¢\ZÍlž˜J:'),
(26, 'akila', 'akila', 'akila', 'f4f39619db11143a10326c97c67ca23a5a1b0d187d06bbd07a3e0c9833e32f22', 'akila@f.com', 1, 'y|ÖK\ZFi.†JÛ’¥VþŸ÷''²S`]´x{'),
(27, 'saman', 'saman', 'samana', '1025fa619080fce6ba10fe0ac6100429f5b21a681fdf3e16c0e3df72d7dabb01', 'saman@c.vom', 1, '+ ë¾f_:š­²¶lå9jHæÍT~wÅ[¥Ù'),
(28, 'chamath', 'chamath', 'chamath', 'f3f471f2256089a10ba9f3b39d5920674952be4b7875b597f7cf36b2438aad2a', 'chamath@gmail.com', 1, '³»‰!#Š¥«Rdbñ¶’Ý\nî`ŒÍLþjÜ <¯'),
(29, 'chamath', 'silva', 'chamathok', '43d3315dca728231c8526d89aa11ef26e83aad0933ad68388683786063d83523', 'asda@fsacda.com', 1, '‡Ù2¡ÙŠà»V5ä÷bîW7‰B (’''%8~³k¬u'),
(30, 'kota', 'diga', 'kota', 'd3fbf230696107cc6d7e90d8e147316a3171de11a1f6a73988c39f42768f7907', 'sds@fmau.com', 1, 'å#SéÒ_/@)Z]7ãÛ-â±[~\Z¡ÝJŸ—de'),
(31, '', '', '', 'a0fa47c85cb900d96e5ec5cf491bfd87c53a923e8095e9a7a8f2e5e9f49209de', '', 1, '<q[ÉX˜U–tüGI±iž’ƒ[ÌµÍÑ®³ƒÌä¦');

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
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

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
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users_sessions`
--
ALTER TABLE `users_sessions`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
