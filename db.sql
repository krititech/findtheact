-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2013 at 06:20 PM
-- Server version: 5.1.66
-- PHP Version: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `act`
--
CREATE DATABASE `act` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `act`;

-- --------------------------------------------------------

--
-- Table structure for table `actold`
--

CREATE TABLE IF NOT EXISTS `actold` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `eventname` text NOT NULL,
  `mincost` float(12,2) NOT NULL,
  `maxcost` float(12,2) NOT NULL,
  `location` text NOT NULL,
  `skill` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedby` varchar(100) NOT NULL,
  `descp` text NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `actold`
--

INSERT INTO `actold` (`id`, `name`, `eventname`, `mincost`, `maxcost`, `location`, `skill`, `date`, `addedby`, `descp`, `image`) VALUES
(1, 'fgdfg', '8', 1222.00, 1121.00, 'bbsr', '5,6,', '2013-09-05 12:35:18', 'preetishree@gmail.com', 'dsfdsfsdf', 'profilepic1.jpg'),
(2, 'ghfghfgh', '6', 767.00, 78.00, 'yuuy', '7,8,', '2013-09-05 12:38:29', 'preetishree@gmail.com', 'ghghj', 'star1.png'),
(3, 'hjhgj', '5', 8779.00, 87978.00, 'hjikhjk', '6,', '2013-09-05 12:45:08', 'preetishree@gmail.com', 'hjkhjk', 'icon4.png'),
(4, 'dfggfg', '8', 12212.00, 323.00, 'sdsf', '7,8,', '2013-09-05 12:50:42', 'preetishree@gmail.com', 'sdfsf', 'shape.png'),
(5, 'khjk', '6', 78678.00, 787.00, 'yijhkhj', '5,6,', '2013-09-05 12:51:31', 'preetishree@gmail.com', 'hjkhjk', 'welcome.png'),
(6, 'khjk', '6', 78678.00, 787.00, 'yijhkhj', '5,6,', '2013-09-05 12:51:58', 'preetishree@gmail.com', 'hjkhjk', 'welcome.png'),
(7, 'khjk', '6', 78678.00, 787.00, 'yijhkhj', '5,6,', '2013-09-05 12:52:40', 'preetishree@gmail.com', 'hjkhjk', 'welcome.png'),
(8, 'khjk', '6', 78678.00, 787.00, 'yijhkhj', '5,6,', '2013-09-05 12:53:03', 'preetishree@gmail.com', 'hjkhjk', 'welcome.png'),
(9, 'jghjh', '8', 78678.00, 786.00, 'jhhjkhj', '7,8,', '2013-09-05 12:58:06', 'preetishree@gmail.com', 'hjkhkhjk', 'icon5.png'),
(10, 'jghjh', '8', 78678.00, 786.00, 'jhhjkhj', '7,8,', '2013-09-05 12:58:51', 'preetishree@gmail.com', 'hjkhkhjk', 'icon5.png');

-- --------------------------------------------------------

--
-- Table structure for table `agency_change`
--

CREATE TABLE IF NOT EXISTS `agency_change` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` varchar(500) NOT NULL,
  `under_agency` varchar(500) NOT NULL,
  `applied_to` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `agency_change`
--

INSERT INTO `agency_change` (`slno`, `act_id`, `under_agency`, `applied_to`, `status`) VALUES
(1, 'demo1@gmail.com', 'Rachel@flairentertainments.co.uk', 'madhusmita@krititech.in', 0),
(2, 'act@gmail.com', 'demo1@gmail.com', 'Rachel@flairentertainments.co.uk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`slno`, `eventname`, `name`, `location`, `skill`, `date`) VALUES
(3, '5', 'samaltopaz', 'rourkela', '6', '2013-08-24 12:08:03'),
(4, '6', 'marriage', 'bbsr', '6', '2013-08-24 12:24:01'),
(5, '5', 'samaltopaz', 'rourkela', '6', '2013-08-24 12:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `last_activity` int(40) NOT NULL,
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('02a3958e3ab4cf4a72ab6bee975e77a0', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383138196, ''),
('0a0801ee2ac6de9514b24e6ef1ec5f9a', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134199, ''),
('0b47faff913fa1cf29be61d329774d8c', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131900, ''),
('0eb81309d372de2a1bbcc21debef00dd', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135572, ''),
('13a469af715e7eacf4c69ef1d23a9f0a', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2', 1384539161, ''),
('1aff16e31bdb45e99b1950dc6df11674', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135496, ''),
('207f8977ec33dd574fa124587e4b66a4', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136846, ''),
('20b2cbbdfc09ea4cb07b05c54b576179', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879353, ''),
('22707cf287fca640f2606bd47d2c81ee', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132026, ''),
('22d6716887524b2146aec8e4611d0ef9', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136790, ''),
('23e17749303ee1d6258e7fff9426cf5e', '117.197.237.51', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit', 1384866555, ''),
('2708e6395c3dd70bbbd0208fb2a4f805', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134437, ''),
('2cf617c61a82b4aa90144c71c3849347', '117.197.237.51', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit', 1384866528, ''),
('2d304a0dd402766adc3a05039c2086f5', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383133257, ''),
('2db0ca29938ba4a053ac80d3a4326982', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879425, ''),
('32a9a87af791626e2bf12c1dcc6ff408', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131774, ''),
('352285913369de646106a4e1185b4820', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135544, ''),
('371c8858844d4309b68bdd854c0151c0', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135573, ''),
('3cc671505c53b635743b2e877ede64ca', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136775, ''),
('3d9bc7d6a448e75689449c59c7ddaf28', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383137063, ''),
('3dcce97d6dae58e89c1ef709a1306292', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64) Appl', 1384553438, ''),
('3dfc8ccfa37b32d8c029da1f12c77583', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131759, ''),
('3e9c8568bf46cec83dc4ed0a8c973fd0', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879425, ''),
('452e8e1a0070435a99301859cf78c748', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135532, ''),
('4b5a323f8b71ffe95db1e77c68447a7c', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2', 1384539166, ''),
('4f536264fa3ec17f649c5242232b4091', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135325, ''),
('507f51269fbc2466fc274b86c69f08f6', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132030, ''),
('52ebab0ff749382239c511c5add2b4c1', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132501, ''),
('543f745bde62568fb486c004c9dee860', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135307, ''),
('55f60121485fb3ed1f50a337bb015752', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2', 1384539171, ''),
('560e42ae541ed3cbff74b482c46cbfe6', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131849, ''),
('57d7fcad132b87c1b40c7423d8655a2e', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134615, ''),
('59702ef5c267a21a1fa81095a8ec6180', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134589, ''),
('5af53d10e8c5d1baed88394be6b5c51b', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383138159, ''),
('5cf08172bc652c95b26294633904f3a5', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64) Appl', 1384553484, ''),
('63699eccb49cf07995cdd586aae59ee7', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879401, ''),
('66bd860b6b03c162df40623e83f275a7', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136835, ''),
('6c7e927159c4f79225d1954bf8e3267d', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132542, ''),
('6d70f9564f3cd8dedb97217b47fb61a3', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131940, ''),
('6dfbe5d9b10d5fe92c58bef765921b38', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134617, ''),
('70af8cf44f856221d31895c8642d40e8', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135404, ''),
('7432da13fdaf4a5916857dbb6285eb66', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2', 1384539153, ''),
('74bfb3b1cb01b3b21dff803f69681425', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383133295, ''),
('76c4fcac0f3aa05754a61826a3e186a3', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131648, ''),
('7d79ceb73edf8d8b3114a16702343ba2', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132380, ''),
('7ebe5285fe8ebbd6b3f5ab729a291c3c', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131611, ''),
('7f54525f526d635aeef6f13464d8bf67', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135087, ''),
('7ff898d15f9222f1adc87e4da10b2648', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131696, ''),
('87f45b259c1fc06ef10d67f36778c84e', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383133412, ''),
('8da9da3ce846c85459111b45f4ed3c4a', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132545, ''),
('941f05a2d268b343b123f91bcaa86931', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136780, ''),
('96095325b8358c0236917bf7ac8ce7d1', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879395, ''),
('9b1497af19987dc147df94b5a432325f', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136842, ''),
('a22167108b6fdc8cc325274ba34d8691', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383138200, ''),
('a305e1006646ebe08eed2a83293d5b95', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131965, ''),
('a325036e14963bb6a97ffc32a0361451', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134554, ''),
('a3765444da2a47726450888db249ce04', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135530, ''),
('a5e28b068d6620b10968c0219ba69d6d', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136772, ''),
('a71f963f86d24f49b9d2713c420eddb5', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879450, ''),
('a8bc95f3a9d1110cf4e243368ce3f377', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383136861, ''),
('a9d8f4753e69a68a29140883a2571789', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134202, ''),
('aa14df6a437bb35bdb83bcc12f3ec759', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879395, ''),
('aae01d7134d3cb80b3797563740d02bf', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134968, ''),
('abfe129074952e4ad2636488d3e3af0e', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383138155, ''),
('aecca6c4880f69f718c972abbf104f64', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64) Appl', 1384553472, ''),
('b5601e51bc2bf23819db246bad6f8b67', '115.250.62.156', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383137424, ''),
('b65884bc1cb70fc4266634573cde7d20', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2', 1384539164, ''),
('b7fb9e6dfe67ae05f953ca4ac4033c64', '115.250.62.156', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383137423, ''),
('bccb1f6f79c6f20160194783b9f768c4', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383133235, ''),
('c0425873a884c83a95da60b82908c4eb', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135085, ''),
('c6543ae33be1cfa5bd86d0ba42f899c5', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879372, ''),
('c690ba35532f96fd2612ff380fc8e714', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879372, ''),
('c7428508ce7fc05a63105b93106b66b2', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879272, ''),
('c79b9fe0f4c0518a0035a4229ed08f9e', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383133243, ''),
('ca191488d8f3b744d7f95366ded859af', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879367, ''),
('cc29030f525defd40e0a95918a6030c3', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879328, ''),
('d0b9ee0d8c7a4b37f4dc353724bcba5d', '81.100.189.216', 'Mozilla/5.0 (Windows NT 6.1; WOW64) Appl', 1384553483, ''),
('d10a04027e9208d83515a28009e65434', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131697, ''),
('d2a48f07b35aabd8015f092b5e9e5fa8', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131683, ''),
('d4836e6f105514fbf5f8e4dd66901e34', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383131520, ''),
('d613ea542cb5aead19cf49d0760ae0cf', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135408, ''),
('d615477aa574a9a863200020c749732b', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879352, ''),
('d64d82d91d24d71952478c70e64fed28', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132547, ''),
('dac92122fd4ab7fe637c576323ca7324', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383132501, ''),
('dd57d9a8edc5e6491b756396c91fc0f2', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383137090, ''),
('de04ccb7a877ff934200417076e4595f', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135500, ''),
('e08d44ebfb373452ae72800a5f74f622', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383134511, ''),
('ea0cc0b12573a0c5505e597c26a6b7fc', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383133313, ''),
('eb8e1d2639c5f24a8d6b096c9765609e', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879361, ''),
('ec2d31f921e10c01df365bd26af8ffed', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135374, ''),
('ef787db196073f41c1ed79b6502a8311', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135409, ''),
('f4b0fd7744ff4d87a784c5a3ec607b5b', '115.250.62.156', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383138151, ''),
('f528786129558414bdbdca6b4cf6f8a2', '122.50.233.113', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1383131916, ''),
('f6461e3b1e69f094e75b0427c004caea', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135543, ''),
('fd8cdd223130fa1e3146600f5ade1c26', '101.63.245.50', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383135372, ''),
('fe28ccddf23271296137e58a0bb1f08d', '122.50.233.113', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv', 1383133363, ''),
('fe78a16ed31ebdb0aaca8b2646b36550', '101.63.109.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKi', 1384879451, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE IF NOT EXISTS `contact_details` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `event` int(20) NOT NULL,
  `event_date` date NOT NULL,
  `starting_at` varchar(100) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `freequoat` int(11) NOT NULL,
  `category_type` varchar(200) NOT NULL,
  `budget` varchar(200) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `comp_name` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`slno`, `event`, `event_date`, `starting_at`, `duration`, `city`, `state`, `zip`, `userid`, `freequoat`, `category_type`, `budget`, `full_name`, `comp_name`, `email`, `contact_no`, `password`, `datetime`) VALUES
(1, 5, '2013-08-12', '7', '17', 'bhubaneswar', 'Orissa', 752054, 2, 0, '6|', '$2000', 'madhusmita', 'kriti', 'madhusmita58@gmail.com', '9776888585', 'madhu', '2013-09-27 13:04:01'),
(2, 5, '2013-12-12', '15', '14', 'bbsr', 'odisha', 4567, 2, 10, '12|13|', '200', 'preetishree', 'krititech', 'preetishree@krititech.in', '43543564564', '123456', '2013-09-27 13:04:01'),
(3, 6, '2013-12-12', '3', '2', 'bhubneswar', 'odisha', 760912, 5, 5, '12|', '200', 'preetishree jena', 'krititech', 'preetishree@krititech.in', '23445455', '123456', '2013-09-27 13:26:09'),
(4, 8, '2013-09-02', '0', '4', 'df', 'sdf', 234234, 10, 5, '12|', '400', 'dsfkjsdl', ' sdfj ', 'jsulaiman@paycellsystems.com', '234234', '123', '2013-10-01 13:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(500) NOT NULL,
  `ondate` date NOT NULL,
  `subject` varchar(500) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`slno`, `user_id`, `ondate`, `subject`, `description`) VALUES
(1, 'demo1@gmail.com', '2013-11-19', 'testing', 'hgfhjntfg'),
(2, 'demo1@gmail.com', '2013-11-12', 'krititech', 'gfhnfg');

-- --------------------------------------------------------

--
-- Table structure for table `elance_jobdetails`
--

CREATE TABLE IF NOT EXISTS `elance_jobdetails` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(400) NOT NULL,
  `heading` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `budget` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `elance_jobdetails`
--

INSERT INTO `elance_jobdetails` (`slno`, `category_name`, `heading`, `description`, `budget`, `location`, `date`) VALUES
(1, 'Writing & Translation', 'Writer or Researcher needed for self-help ebooks', 'Ghostwriter or researcher sought for a series of ebooks, related to brainwave entrainment, guided meditation, hypnotherapy, EFT (meridian tapping), etc. for wealth.\n\nThese are "woo-woo" topics, but I want them presented in a logical, scientific manner, yet persuasive manner.\n\nFirst book will be 20,000 words. No images or editing needed (although if you want to refer to images, or charts, that''s great). Deliverable is the content as a Microsoft Word document.\n\nHigh quality, thoroughly researched content required... no SEO junk!\n\nThis is work-for-hire ghostwriting. Your name will not appear in the book, and I will retain all rights, including resell and distribution.\n\nI do not require revisions or editing, as I am comfortable writing or rewriting sections as needed. My primary concern is the research of facts, quotes, case studies, clinical tests, tools, techniques, scripts, maybe even interviews?, and developing the "flow" of the book.\n\nTo apply, please include a writing sample, preferably related to self-help, law of attraction, abundance, etc.\n\nI look forward to hearing from you.(ID: 48675669)', '0', 'United States', '2013-10-30 04:10:46'),
(2, 'Writing & Translation', '5 Writers Needed - Start today - Daily Work Available $25-$50/WK.', 'NO INTERNATIONAL WRITERS. ALL INTERNATIONAL PROPOSALS WILL BE IGNORED!!\n\nArticle Writers Needed:\n \n*New writers with good English grammar and punctuation.\n*Writers who are new to Elance looking to build their profile.\n\nPayment:\n\n$1.00 per 500-word article (5 articles completed per day) = $25.00/week\nPaid every Friday.\n*AFTER ONE MONTH THE PAY WILL INCREASE TO $2.00 PER ARTICLE. THAT''S $50.00/WEEK\n\nRequirements:\n\n1. Must be able to complete 5 articles per day Mon-Fri.\n2. Must be available to check-in Mon-Fri at 8am, 9am, 10am, or 11am EST.\n3. Must be able to complete articles between 8am and 8pm EST.\n4. Must be able to respond to messages quickly.\n5. Must be able to check your own work on Copyscape.com\n6. Must be able to complete a 500-word article in 2.5 hours. (Articles will be assigned one at a time).\n7. Must be able to perform some research as the topics of each article varies.\n8. Must have a total of 100 articles completed or worked a month to receive the payment increase.\n\n\n**Submit a proposal with the following information:**\n\n1. When you can start.\n2. You agree with the payment.\n3. You agree to all of the requirements above.\n4. If you can be contacted via text message.\n5. Your writing schedule. Ex: Monday: 8am-6pm EST\n\n\nMUST BE ABLE TO COMMUNICATE AND WRITE ARTICLES BETWEEN 8AM EST AND 10PM EASTERN STANDARD TIME.(ID: 48675482)', '499', 'United States', '2013-10-30 04:03:58'),
(3, 'Writing & Translation', 'Writing of travel guide for NewYork/Las Vegas', 'I am looking for a ,competent and affordable travel guide write rto create a 30,000 word guide . The finished copy will be sold as hard copy and ebook.the book will have to include relevant keywords for travel guide to New York and Las Vegas.Size of book in MS word will be 6"x9".End result need to be proofread and delivered in MS Word Format.\nMust pass copyscape and have great content Must be written in simple and easy to read English.\nThe content includes Forword, chapters, history ,geography-maps, Before you go ie visa requirements,culture, language.\nWhen you get there -cheap and expensive hotels,backpackers, hostels. Where to shop and where to eat.  Top things to do. Please add alot more contents\nYou will be required to assign the copyright to me once the works are complete.You are to provide about 20 hiresolution JPG  images which ca be bought from istock/bigstock. and include the cost of this in the fee(ID: 48675472)', '0', 'United Kingdom', '2013-10-30 04:03:39'),
(4, 'Writing & Translation', 'Lithuanian Translation', 'Lithuanian Translation of the attached file. See Instructions in the file. Budget for this is firm at US $17.(ID: 48675299)', '499', 'Canada', '2013-10-30 03:57:49'),
(5, 'Writing & Translation', 'Data center contant rewrites for the arabic and other sites', 'You applied to a different job which I''ve already awarded, but I''m willing to give you a try on a small job, we have thousands of descriptions on out site of data centers that need to be updated and current.   I know you are probably overqualified for that work but it is tedious, and you can only do it for a little while and then come back to it after a while but they HAVE to be all original, and all accurate.(ID: 48675254)', '0', 'United States', '2013-10-30 03:56:24'),
(6, 'Writing & Translation', 'write original content and data center descriptions for our site', 'You applied to a different job which I''ve already awarded, but I''m willing to give you a try on a small job, we have thousands of descriptions on out site of data centers that need to be updated and current.   I know you are probably overqualified for that work but it is tedious, and you can only do it for a little while and then come back to it after a while but they HAVE to be all original, and all accurate.(ID: 48675126)', '0', 'United States', '2013-10-30 03:51:40'),
(7, 'Writing & Translation', 'Write informational articles/profiles about Dogs', 'I need 40 dog profiles created. No bullet points. I need sentences/paragraphs/short descriptions.\n\nYou will be getting information from wikipedia (and other sources) and re-writing it (100% unique, no copy and paste).\n\nYou will fill out templates with information about different dog breeds.\n\nTemplates should be in proper English and readable / have flow. Keywords are provided on the template.\n\nPlease see this website as an example: http://dogable.net/tamaskan-dog/\n\nEach profile will be about 500+ words\n\nThank you!(ID: 48675060)', '125', 'United States', '2013-10-30 03:49:44'),
(8, 'Writing & Translation', 'REPOST Infobarrel Writer To Rewrite Seo Inforbarrel Articles 2.50$', 'I have 50 articles which need to be rewritten for infobarrel.  Keep in mind, they may need to be written from scratch. The articles need to have information added to the articles so it provides a lot of information which will be helpful to a individual. The pay for the article is 2.50 per article. Rate is non-negotiable. Time frame to complete all articles is 1 month. All articles will be uploaded to infobarrel before someone is paid. I don''t have a problem paying someone for great work but I can''t pay for articles that infobarrel won''t even take.  PLEASE IF YOU CAN''T DO THE WORK DON''T BOTHER TAKING THE JOB. DON''T WASTE MY TIME AND YOURS BECAUSE YOU WON''T BE PAID FOR LOW QUALITY WORK.  \n\nWhat the articles Need:\n\nRewritten articles\nCorrect Sentences and Grammar\nPut seo keyword into article at least twice\nArticles Need to written so they connect to another article within the same subject.\nPass Copyscape\nCreate Great Titles\n\nHere are the requirements:\n\nNeed to have written for infobarrel before and know how to write high seo quality articles that can pass copyscrape.\nEnglish Speaking\nRewrite articles completely if necessary\nCreate great titles for seo articles\nAlso, the articles need to be seo which the subjects I give you will be the seo keywords(ID: 48675000)', '499', 'United States', '2013-10-30 03:47:46'),
(9, 'Writing & Translation', 'Need 3 articles (500 words or more each)', 'I need 3 articles written for 3 different websites, all SEO friendly on the following...\n\ncooper tires\nhankook tires\ntoyo tires\n\nI also need a collection of pictures of the specific products and services that the websites are about.  \n\nAt least 500 words per article.  \n\nI''ll provide the keywords and give you more instructions on how the articles should be written.  \n\nThe faster the job can done, the better.  I will approve the same day.(ID: 48674986)', '499', 'United States', '2013-10-30 03:47:18'),
(10, 'Writing & Translation', 'REPOST-Serious Writers Only 2.50 per SEO Article English Speaking', 'IF YOU CAN''T DO THE JOB, DON''T WASTE MY TIME AND YOURS. IF WORK ISN''T COMPLETED CORRECTLY THEN IT WILL BE REJECTED. \n\nNeed a serious individual that knows how to write seo articles. I gave someone this job that said they knew how to write seo articles but had no clue. I will provide 5* feedback on your profile and potential long term work.\n\nAbout Articles:\n\nNeed to meet deadline (Most important)\n100% Unique and pass copyscape\nKnow how to write good english and write the articles in a way which are interlinked \n(meaning if a user clicks on a link within one article, they will go to another article related to that article)\nKeyword must be within article at least twice\nKeyword must be mentioned in first paragraph\nEach article can be related to any seo subject that you want but it has be very informational and mention keywords\nYou MUST be able to write an article from scratch in your own words after doing proper research.\n600 word filling not thin article\nGreat grammar to be able to pass infobarrel\nGreat Titles for each article\n\nStructure of Articles:\nWell formatted text\nOrdered list\nHeadings\nBolded text if need be\n\nRequired:\n- Native English, if english isn''t your first language then don''t bid because you will be rejected. I''ve went through five people already and none of them could write english well at all because english wasn''t their first language.\n- Interested in completing this job quickly for the fixed bid amount and receiving 5* feedback\n- interested in potential longer term writing assignment after the successful completion of this job\n- Bid at or below the $2.50 for 10 articles \n\nTo reply for this project, please attach a seo article you wrote.(ID: 48674960)', '499', 'United States', '2013-10-30 03:46:03'),
(11, 'Writing & Translation', '500 forum posts needed for dating website', 'Looking for someone to post 500 forum posts on dating website. Topics will be provided.\n\nPlease include a small blurb about yourself and experience.(ID: 48674955)', '50', 'Canada', '2013-10-30 03:45:52'),
(12, 'Writing & Translation', '500 comments needed for blog articles', 'I am looking for someone to make comments to wordpress blog entries to my website relating to dating and relationships.  Currently, there are approximately almost 20 articles. The comments must be value-added and none repetitive.  \n\nRequired to start immediately.  Please submit a short blurb about yourself and experience with your bid.\n\nThanks(ID: 48674716)', '50', 'Canada', '2013-10-30 03:36:42'),
(13, 'Writing & Translation', 'Edit a blog collection', 'I have a blog and have collated 100 of the best articles with the thought of creating an e-book.\n\n\nWhat I want you to do is edit the articles for spelling and grammar.\n\nIt is 40,000 words in total and each article on average is around 500 words.(ID: 48674714)', '75', 'New Zealand', '2013-10-30 03:36:41'),
(14, 'Writing & Translation', 'SEO Copywriting - Product Descriptions', 'Primary Responsibilities\nRewrite copy, headlines, SEO, meta descriptions, for existing products (approx 300).\n\nWe have recently migrated out website (mobilitysavings.com) to Magento and one of our SEO partners has indicated that much of the content (description of product models) that we sell is duplicated across the web.  This is because we are using the product descriptions from the distributor/manufacturer as many of our competitors do.\n\nIn any case, we are looking at re-writing the content of the "product model" pages for this website (we also have 4 other websites that we would re-write content for if the SEO rankings improve significantly).  I would estimate that there are approximately 100 "product model" pages on this website with 1000+ across all of our websites.\n\nIn any case, the basic product groups are:\n- Mobile Computers (handheld)\n- Mobile Printers\n- Cellular Routers\n\nDo you have the expertise to do this?  We would want someone would could take the "source content" from the manufacturer (website, data sheet, etc) and then re-write it so that it is unique (and both factually as well as gramatically correct) for our website.\n\nAs an example, you can look at the Intermec CK3X mobile computer:\nThe manufacturer''s website is at: http://www.intermec.com/products/cmptrck3xa/index.aspx\nThis same product on our website can be seen here: http://www.mobilitysavings.com/intermec-ck3x-handheld-computers.html\n\nObviously, I am looking for a long-term partner we can use as new products are constantly being introduced from our manufacturers.  Price is important - but quality is even more important.(ID: 48674678)', '0', 'United States', '2013-10-30 03:35:02'),
(15, 'Writing & Translation', 'Quick & Versatile Article Writer Needed', 'I am looking for a versatile article writer who can provide quick unique and readable articles for our blogs.\n\nYou would be working as an article writer for a variety of blogs with topics ranging from technology, gaming, business to travel and  parenting. \n\nThis is a long term position.\n\nYour application\nYour bid is on 10 articles, only bid if you accept and understand the requirements.\n\nYou are required to write 500 word original articles which need to pass Copyscape and be of good quality.\n\nTerms\n1. All writing you create for me needs to be your 100% original work and free of any copyrighted or plagiarized material.\n\n2. I will own all rights to the completed articles. You may not distribute them in any way upon delivery.\n\n3. While I am very easy to please, unlimited revisions will be expected until I am satisfied with the completed articles.\n\nPlease send samples of your work for consideration.\n\nThanks,\nVeronik(ID: 48674398)', '30', 'Australia', '2013-10-30 03:23:23'),
(16, 'Writing & Translation', 'dictation', 'I have a 6 minute MPEG file recorded off my iPhone dictating a list of 100 titles to a book in list form. \n\nIts not large should take someone 15 minutes to type up on a word document\n\nThanks Mike(ID: 48674333)', '22', 'New Zealand', '2013-10-30 03:20:48'),
(17, 'Writing & Translation', 'Video Translation English - Italian', 'We urgently require a professional native speaker to translate a 3min-long video from English to Italian.(ID: 48673826)', '0', 'New Zealand', '2013-10-30 03:00:36'),
(18, 'Writing & Translation', 'Self-Help Writer in the Entrepreneur-Inspiration Space', 'The title speaks for itself.\n\n                   9\n              Common\n              Mistakes\n             Entrepreneurs\n                Make\n15400 Words\nTime to complete Dec 1st or sooner\nI''m stretched for time, but I will help with outline and content. I''m an experienced Entrepreneur/Business Owner(ID: 48673814)', '1200', 'United States', '2013-10-30 02:59:55'),
(19, 'Writing & Translation', 'Reliable Writers To Join Our Successful Writing Team-Daily Work Available', 'NO INTERNATIONAL WRITERS. ALL INTERNATIONAL PROPOSALS WILL BE IGNORED!!\n\nArticle Writers Needed:\n \n*New writers with good English grammar and punctuation.\n*Writers who are new to Elance looking to build their profile.\n\nPayment:\n\n$1.00 per 500-word article (5 articles completed per day) = $25.00/week\nPaid every Friday.\n\nRequirements:\n\n1. Must be able to complete 5 articles per day Mon-Fri.\n2. Must be available to check-in Mon-Fri at 8am, 9am, 10am, or 11am EST.\n3. Must be able to complete articles between 8am and 8pm EST.\n4. Must be able to respond to messages quickly.\n5. Must be able to check your own work on Copyscape.com\n6. Must be able to complete a 500-word article in 2.5 hours. (Articles will be assigned one at a time).\n7. Must be able to perform some research as the topics of each article varies.\n\n\n**Submit a proposal with the following information:**\n\n1. When you can start.\n2. You agree with the payment.\n3. You agree to all of the requirements above.\n4. If you can be contacted via text message.\n5. Your writing schedule. Ex: Monday: 8am-6pm EST\n\n\nMUST BE ABLE TO COMMUNICATE AND WRITE ARTICLES BETWEEN 8AM EST AND 8PM EASTERN STANDARD TIME.(ID: 48673589)', '499', 'United States', '2013-10-30 02:52:02'),
(20, 'Writing & Translation', 'Article writing for dating website', 'Job description: \nWe are looking for writers to develop original, high-quality, SEO-friendly articles about dating and relationships.\nWe are looking to hire more than one writer.\nEach article needs to be approximately 500-700 words in length.\n5 different articles are needed. \nArticles must not be copied from the internet and must pass through copyscape. \nSome direction would be provided towards what topics you should write about.\n\nYour responsibilities:\nWrite, high-quality, SEO-friendly articles that communicate our messaging.\nWe are expecting to have this job completed within 5 days after you are awarded the proposal. Please only apply if you can meet the time requirements. \n\nQualifications:\n- Strong communication and written skills in English.\n-good time management skills to meet deadline.\n- Excellent writing, grammar, spelling and formatting\n-A complete Elance profile\n- Established reputation on Elance preferred\n\nPlease attached a sample article for my review with your bid.\n\nThank you.(ID: 48673587)', '25', 'Canada', '2013-10-30 02:51:57'),
(21, 'Writing & Translation', 'Copywriter wanted for Weight Loss Niche', 'Hi Elancer,\n\nI''ll get straight to the point as always.\n\nI''m looking for a copywriter who has experience with writing for the weight loss niche.\n\nI''m looking to have a set of emails written for affiliate marketing.\n\nPlease quote me for 10 emails.\n\nThanks.\n\nAlso, please show me relevant samples (weight loss, emails, affiliate selling)(ID: 48673358)', '499', '', '2013-10-30 02:42:06'),
(22, 'Writing & Translation', 'CONTENT FOR SQUIDOO LENS', 'This is a trial project and there are more jobs once I can see that such hiring of workers can be fruitful. I have also posted similar jobs at other sites.\n\nI have two Squidoo Lens that I would be building and I need a writer to do basic research and write original and interesting content for me.\n\nI will provide the keywords for the TWO topics.\n\nJob description:\nYou are only required to come up with the content. You are NOT going to build the Squidoo Lens.\n\nTitles and sub-titles is flexible. \n\nEach Squidoo lens should be at least 800 words. All content must meet Squidoo Lens Guidelines:   http://bdkz.squidoo.com/product-lens-guidelines  \n\nDocument type:\nHow To or Instructional, Opinion or Editorial\n\nDesired length:\n1600     (800 x 2 topics)(ID: 48673304)', '25', 'Singapore', '2013-10-30 02:39:48'),
(23, 'Writing & Translation', 'Article writer needed, to write fashion articles and blog posts', 'All information below....\n\nFirstly, a little about us. We sell high-end vintage and contemporary fashion ~ only the beautiful, the exquisite, the outstanding, whether that be a true vintage 20s beaded flapper dress, a 40s velvet WWII evening coat, a 1930s Harlowesque silk wedding dress ~ or a contemporary Topshop wool coat, from a number of season''s ago, and in the 50s style of Dior''s New Look. \n\nThe owner only ever chooses clothing which tells a story ~ some kind of story, whatever that story is ~ and evokes an essence of a nostalgic era, but always with relevance to fashion today. We will reference a myriad different eras and ideas, from the Victorian era to the Pre-Raphaelites; the roaring twenties to the swinging 60s? \n\nThe owner especially likes to link the fashion we sell to other past and present fashion designers, to film, to past well known and iconic film stars, art, artists and literature, dance (tango for example), and drama series such as, for example, Downton Abbey etc which again evoke the feeling of an era, a past time. However, this is not about looking backwards, more about a recognition that the fashion we sell is timeless. So with all our images and written material we are trying to tell a story, convey a moment, captivate our audience. \n\nIt is also important that we always have a strong and positive emphasis on how we portray women ~ always empowered. We won''t use words like burlesque or pin up for example. Also just to note, we don''t tend to use slang or more youth associated words eg we''d say ''it''s a very beautiful fabric'' ~ rather that ''the fabric is wicked'', etc. On the whole we don''t really want the articles to give a lot of styling notes ~ although you can give a few if you''re confident that what you suggest will fit with the are style and emphasis ~ but on the whole, styling is so subjective, we tend to find too much styling suggestion limits buyer''s own imagination.\n\nWe need articles of about 700 plus words ~ sometimes longer. We want the style to be high end and always interesting, and evocative ~ not jokey, something vivid and colourful, but not playful ~ writing which doesn''t drag and which keeps the interest and attention. If we talk about the past, say about the history of the riding coat, (which has a long history), we need the reader to be bought back at intervals, to the present, and how a long black vintage riding coat would look beautiful with leather boots walking in the countryside this winter. Here we might add in, for example, something about one of Thomas Hardy''s characters, eg Tess of the d''Urbervilles, walking across the autumn hills?\n\nAnd although not essential, we like quotes ~ from literature or wherever ~ if there are good ones which speak to the essence of the item or the era. (Always include author).\n\nWhen we focus on a particular designer, we want the background history etc which tells of anything which would entice and delight a buyer to want to wear the item we are selling. \n\nIf you could submit a sample of your work we will be much more likely to look at your application.\n\nIf you have any questions at all, please let me know. We''d much rather you asked than not.\n\nVery best wishes Arran(ID: 48673254)', '0', 'United Kingdom', '2013-10-30 02:37:32'),
(24, 'Writing & Translation', '1 Well-written Article Needed by 5pm EST - More work for a great writer', 'SORRY NO INTERNATIONALS. INTERNATIONAL PROPOSALS WILL BE IGNORED. \n\nI am looking for a writer who has experience writing for article writing sites and have a high rating on the site. You must be able to prove that you have a current high rating on the site. \n\nSites like... \nDemand Studios \nTextbroker.com \niWriter.com \nEtc. \n\n*Excellent grammar and punctuation is a must!! \n\n*Payment: $7.00 - For a 120-250 word article (That''s a really high payment for this amount of words, so I''m expecting an excellent article.)\n\n\nHere are the instructions for the test article: \n\nWord Count: 120-250 words \nDue by: Wednesday at 5pm EST  \nInstructions:\n\nPlease choose from the following topics: \n\n-Sightseeing in your city (or your favorite city to visit)\n-Party locations in your city -Objective description of a technical object \n-A description of your favorite store, business, or brand More work is also a possibility.\n\nIN THE PROPOSAL PLEASE TELL ME WHAT SITES YOU HAVE WRITTEN FOR AND YOUR CURRENT RATING ON THOSE SITES.(ID: 48673142)', '0', 'United States', '2013-10-30 02:32:38'),
(25, 'Writing & Translation', 'Simultaneous German Interpreting', 'The job:\nSimultaneously translate both sides of a phone call in German  to English.\n\nOn a hardwired line, you will be listening to a phone call happening in German between a video producer and an interviewee. Your line will be muted so that you can only listen.\n\nSimultaneously, you will be on skype with me, telling me what''s happening in the conversation.\n\nRequirements:\nFluent German. Fluent English. Fast brain. Be able to listen to the German conversation while speaking to the English-speaking listener on the skype call.\n\nDuration:\nThe majority of the calls will take place on Saturday and Tuesday (Germany time). Calls will be approximately 1 hour each. Times will be set in advance.  There will also be a few follow up calls that take place over the following few weeks. The project will be complete by December.\n\nThis is a short-term project with a total of 5-12 hours of work.(ID: 48671326)', '800', 'United States', '2013-10-30 02:30:13'),
(26, 'Writing & Translation', 'Website Content', 'I am developing a website and need someone to write content for me. The website is geared toward photography and web services. This is my first time to outsource & there will be a strong possibility of needed services for future projects. \n\nWould prefer to speak over phone for initial collaboration and develop a game-plan.(ID: 48673035)', '499', 'United States', '2013-10-30 02:27:37'),
(27, 'Writing & Translation', 'Hotel Descriptions', 'Writing unique content for a series of hotels in the Asia Region for a hotel and travel website with a focus on SEO. \n\nEach hotel (location, facilities, rooms) needs to be described in 200 words minimum. Our readers are international so English needs to be simple and clear.\n\nI will send 20 hotels and descriptions need to be no shorter than 200 words.\n\nThanks!\n\nPaul(ID: 48672942)', '100', 'Australia', '2013-10-30 02:24:10'),
(28, 'Writing & Translation', 'Academic Article - Modern Buddhist Reform Movement', '15 Pages, Double Spaced\n\nResearch S.N. Goenka, a Buddhist Meditation Master.\n\nHe established a lineage of semi-secularized / modernized Buddhist Meditation.\nThey now have a network of retreats all over the world.\nThis type of meditation is called Vipassana.\n\nThe paper should also trace Goenka''s lineage back to include the influence of Mahasi Sayadaw and his teachers, including U Ba Kin.\n\nWhat makes all these people''s work Modern?\n\nJob description:\n\n15 Pages, Double Spaced\n\nResearch S.N. Goenka, a Buddhist Meditation Master.\n\nHe established a lineage of semi-secularized / modernized Buddhist Meditation.\nThey now have a network of retreats all over the world.\nThis type of meditation is called Vipassana.\n\nThe paper should also trace Goenka''s lineage back to include the influence of Mahasi Sayadaw and his teachers, including U Ba Kin.\n\nWhat makes all these people''s work Modern?\n\nWhat his been their impact on the state of Modern South and Southeast Asian Buddhism?\n\nWhat did they change from the preexisting Buddhist tradition?\n\nWhat was their innovation?\n\nHow do they fit in to the modern religious world of South Asia?\n\nWhat is the influence that these teachers have had on the Vipassana Movement?\n\nHow have they reformed Theravada Buddhism?\n\n\n----- If you can hit all these points with some detail you will have done a great job.\n\n----- Every paragraph must have sources cited in Chicago Formatting Style.\n\n----- All sources need to be scholarly articles and books.\n\n----- 12 Sources Minimum\n\n\nPlease contact me with any questions:\n\nDocument type:\nWeb or Blog Content, Other or Not Sure\n\nDesired length:\n6,000(ID: 48672634)', '0', 'United States', '2013-10-30 02:11:56'),
(29, 'Writing & Translation', 'Freelance creative writer for 10 episode online serial story', 'Authors for Serealities commit to 10 weeks of writing episodes. During 2013, 10 additional serials will be selected for publication.  Authors will receive $1000 and online publication if they are selected for 2013 Serealities publication.  \n\nFreelance writer for a 10 episode serial story where readers vote each week on what happens next in the story.  Episodes are approximately 500 words each week. We are looking for compelling stories that engage readers.(ID: 48672577)', '1000', 'United States', '2013-10-30 02:08:54'),
(30, 'Writing & Translation', '3 articles', 'I need someone who can write 3 articles at least 950 words each.\nThis is to be submitted after 1 day.(ID: 48672557)', '499', 'Philippines', '2013-10-30 02:08:05'),
(31, 'Writing & Translation', 'Copywriter for Web Content', 'We''re looking for a professional Copywriter to start immediately to create high-quality content for our website.\n\nYour responsibilities:\n\n- Develop content themes based on the direction and creative brief provided by our team\n- Write creative engaging copy including headlines, tag lines, positioning statements and feature copy for articles, web content, emails,  direct marketing materials and more \n- Need content at the current time for the following sections:  Contact us, FAQ, Shipping/Return Policy. Additional content may be needed in the future\n\nJob Description: \nWe''re looking for a Copywriter to create high-quality content for our website.\n\nYour responsibilities:\n\n- Develop content themes based on the direction and creative brief provided by our team\n- Write creative copy including headlines, tag lines, positioning statements and feature copy for articles, web content, emails,  direct marketing materials and more \n- Need content at the current time for the following sections: About Us, Contact us, FAQ, Shipping/Return Policy. Additional content may be needed in the future.\n\nYour qualifications: \n\n- Excellent writing, grammar, spelling and formatting\n- Expertise in web copy, SEO, and online (email) marketing a plus \n- An exceptional portfolio that demonstrates an ability to create compelling copy for a wide variety of brands, audiences and industries \n- A complete Elance profile\n- References or an established reputation on Elance preferred(ID: 48672547)', '0', 'United States', '2013-10-30 02:07:23'),
(32, 'Writing & Translation', 'LinkdIn marketing.', 'I am going to fund the existing job on Saturday. i hope you are still interested.\nI am also going to need someone who knows how to market using LinkedIn.\nI am member with quite a few endorsements.\nlet me know your thoughts.\nregards\nbrian(ID: 48672452)', '0', 'Thailand', '2013-10-30 02:03:42'),
(33, 'Writing & Translation', 'Translate a manuscript from Mandarin to English', 'Looking for someone to translate a 222 pages manuscript from Mandarin to English.\n\nPrefer a candidate from Malaysia who has knowledge about childhood traditional games.\n\nIf you''re interested, kindly provide me some of your sample translations and let me know your rate.\n\nThanks.(ID: 48672365)', '499', 'Malaysia', '2013-10-30 02:00:06'),
(34, 'Writing & Translation', 'Compose and submit press release for herpes dating site on sbwire.com', 'Herpes Dating Service Site For Positive Singles.\n\n\nPrimary goals:\nget more traffics and get better rank in google\n\nPress release distribution method:\nNewswires\n\nRequirement of SEO:\nYes\n\nContent generator for this release:\nYou can choose or I will choose the topic for you\n\nTarget audience:\nthe singles living with herpes, hpv, and other STDs in the world. But most of the users on our site are in USA. \n\nPress release distributor:\nThe Elance Contractor\n\nAdditional comments:\n500- 700 words for each one. Please let me know your price (ID: 48672252)', '499', 'China', '2013-10-30 01:55:30'),
(35, 'Writing & Translation', 'ghostwriter for juicing book', 'I am looking for an excellent writer that has excellent grammar and spelling to write a book on juicing, paleo diet, gluten free diet, vegetarian diet, south beach diet, Mediterranean diet and different types of exercises like yoga, pilates, swimming, etc.. \nMore specifically looking for an ebook that is at least 80 pages that discusses advantages of juicing, 50 juicing recipes, explain the above diets and compare and contrast diets and create a 7 day diet plan for each diet. \nA more specific table of contents will  be provided for winner of this project.\nI need this book done within 3 weeks or less.\nYou must be a native English speaker and writer.\nPlease provide samples of your writings, your background on health, and why you are interested in this project. Generic bids that don''t address these issues will be ignored. If you can provide images or book formatted that is a huge plus\nLooking for someone honest and reliable.(ID: 48671899)', '499', 'United States', '2013-10-30 01:46:11'),
(36, 'Writing & Translation', 'Blog article writing', '- Would require a native english speaker to write blog articles.\n- Each article approx. 500-1000 words\n- You will be provided with a list of topics to write about. Topic suggestions are also welcome. \n- Please indicate if you are a guest blogger elsewhere or write to other media outlets. If so, which ones. This will be highly regarded but not essential.\n- Please indicate how long it will take you to write 1 article\n- Please provide quotation for 1 article researched by you \n- Please provide past work\n\nhere is our website passbeemedia.com(ID: 48669438)', '499', 'United States', '2013-10-30 01:39:45'),
(37, 'Writing & Translation', 'I want to write a book', 'I want to write a book about the problems a woman faces when she is attractive. The haters, being discriminated against because people think that pretty girls aren''t smart. Not having a lot of female friends, men always coming on to you and not taking you serious. The name of the book will be, pretty girl problems".(ID: 48671600)', '800', 'United States', '2013-10-30 01:39:33'),
(38, 'Writing & Translation', 'Writer With Creative Writing Skills Needed', 'Story of 141 pages needs to be expanded with more dialogue and subplots to about 200 pages; it presently has 11 chapters.   Below is short description to give you an idea of the story. \n\nThe excitement in Penny''s marriage has disappeared, and although she and Marc have two children, Marc is focused on making a living, and Penny is feeling ignored.\n\nPenny always envied her friend Amber, but lost touch with her over the years.  Amber comes to visit and confesses to Penny that she had killed her own children by letting them drown.  Penny didn''t believe it at first, but later, after she discovers Amber''s new beau is a sexual predator, starts to believe that what she told her is true, and goes to the cops.\n\nThe story needs more detail; subplots needs to be expanded, and more dialogue added.  There is presently nine chapters, although there could be 12 or more. \n\nStory should be written with one-inch margins, double space, paragraph indentations of five spaces, no extra spaces between paragraphs, and in 12 pt. Times New Roman, and of course, in Microsoft Word.  This is how the 141 pages are formatted.\n\nIf you haven''t worked for me before, be sure to post some examples of your work.\n\nYou must be able to honor deadlines, and communicate regarding your progress on the story.(ID: 48669520)', '45', 'United States', '2013-10-30 01:39:05'),
(39, 'Writing & Translation', 'Real estate blogging', 'I need you to create similar (but better) weekly blogs like this:\n\nhttp://www.joe.southjerseyhomeshopper.com/blog/So+Much+To+Do+In+South+Jersey+This+Weekend\n\nThey can be related to the real estate industry in general, describe local happenings in Southern New Jersey or just be helpful household tips.\n\nBottom line; they need to be entertaining and make people want to read them.\n\nJob description:\nhttp://www.joe.southjerseyhomeshopper.com/blog/So+Much+To+Do+In+South+Jersey+This+Weekend\n\nDocument type:\nWeb or Blog Content, Marketing Content, How To or Instructional\n\nDesired length:\n500(ID: 48671420)', '499', 'United States', '2013-10-30 01:31:20'),
(40, 'Writing & Translation', 'Translate English to French and Native Audio', 'First Part:\n\nI will provide two introductory sentences and a list of vocabulary words that need to be translated from English to French.\n\nI will only consider a Native French speaker who has a degree in English as a second language or one that is working with a native English speaker who has a degree in French as their second language.\n\nSecond Part:\n\nThe two introduction sentences that were translated from English to French, as well as the French vocabulary words need to be recorded into an audacity audio file (http://audacity.sourceforge.net/) by a native French speaker.  \n\nThe audio needs to be crisp, clean and free of white noise or background noise.  \n\nTo bid this project you will need to respond with your bid request by giving a summary of what I would like done in your own words so that I can be sure it is understood.\n\nProject will not be accepted as complete if the audio is not clean and complete without errors.(ID: 48671408)', '75', 'United States', '2013-10-30 01:30:41'),
(41, 'Writing & Translation', 'Plot Outline for Novella', 'I want an outline written for a gay/lesbian novella that I will then write.\n\nJob Description: \nYour responsibilities:\n\n-Create an outline for a novella based on basic character and plot directions provided to you. \n-All rights to the ideas and outlines will be signed over to me. I will be doing the actual writing of the story--so it''s sort of a backwards ghostwriting assignment. \n-The story will involve a gay or lesbian couple as its main romance. If you''re not okay with that, don''t apply. \n\nYour qualifications: \n\n-Native English speakers only.\n-Provide a sample of a short story that is YOUR ORIGINAL WORK. I want to see how well you can develop a storyline. You can also provide a sample outline instead--again, your OWN ORIGINAL OUTLINE. Bids without samples will not be considered.\n(ID: 48671325)', '50', 'United States', '2013-10-30 01:27:32'),
(42, 'Writing & Translation', 'Web Content Writting', 'I need some creative writing for a nutritional & supplements company website in English.\n\nKnowledge of vitamins and supplements is required since technical writing will  be part of the job.\n\nContent will be checked for originality after job is finished by running it through turnitin.(ID: 48671261)', '499', 'United States', '2013-10-30 01:25:27'),
(43, 'Writing & Translation', 'Tech Savvy Social Work - Assessment and Training Guide', 'I am looking for someone to complete the following:\n\n1) Develop a list of 15 (or so) technological competencies that Social Workers need to have to do their jobs.  Examples include: Typing Speed (WPM), Microsoft Office literate, learning how to use a case management system, internet searches for resources (food pantries, etc).\n\n2) From the list of 15 competencies, identify a proficiency level for someone entering employment as a social worker.  For instance, they should be able to type 20-30 words per minute if they are to be proficient in typing; should be able to make a powerpoint, etc.\n\n3) From the list of 15 competencies, identify FREE ways (either online or in person or both) to test people (presumably new hires) on their proficiency.\n\n4) For the list of 15 competencies, identify FREE (or very low cost) ways to train people who are struggling to raise their proficiency level.\n\nIn recap:\n\n1) 15 tech competencies for social worker type people\n2) 15 proficiency levels\n3) 15 ways to test\n4) 15 ways to train\n\nI would like 1 page per Tech Competency...each page should have competency/proficiency/test/train for 1 item on it...so no more than 15 pages long.  Also have a narrative for each thing...not just throwing weblinks down.\n\nThank you,\n\nJeff(ID: 48671212)', '1000', 'United States', '2013-10-30 01:23:24'),
(44, 'Writing & Translation', 'Translate English to Spanish and Native Audio', 'First Part:\n\nI will provide two introductory sentences and a list of vocabulary words that need to be translated from English to Spanish\n\nI will only consider a Native Spanish speaker who has a degree in English as a second language or one that is working with a Native English speaker who has a degree in Spanish as their second language.\n\nSecond Part:\n\nThe two introduction sentences that were translated from English to Spanish, as well as the Spanish vocabulary words need to be recorded into an audacity audio file (http://audacity.sourceforge.net/) by a native Spanish speaker.  \n\nThe audio needs to be crisp, clean and free of white noise or background noise.  \n\nI look forward to working with some of you.(ID: 48671194)', '75', 'United States', '2013-10-30 01:22:45'),
(45, 'Writing & Translation', 'Translation Job from Spanish to English', 'Hi!\nI need someone fluent in Spanish to translate to English. The documents has 1534 words. I need it to be ready, tomorrow October 30 in the afternoon 2:00 pm(ID: 48671136)', '0', 'Puerto Rico', '2013-10-30 01:20:04'),
(46, 'Writing & Translation', 'Personal Book', 'I have a personal story I want to publish in a book. It is about my 21 year marriage and relationship with my wife and kids. As a dedicated husband and father that has lost his family thru divorce that I never saw coming. Instead of being the husband and father my family needed, I was the husband and father I thought my family needed. The pain of the loss, the realization of why! The process of apology and reconciliation. This book will be published before the end of the year and will be a faith based book. I want a writer/assistant writer that is a Christian and can give the time necessary to start on the project soon and see it through quickly. I will share more details with you if you respond to this post.\nThank you in advance for your prompt attention to this post.(ID: 48671118)', '5000', 'United States', '2013-10-30 01:19:41'),
(47, 'Writing & Translation', 'Proofing and posting content as a in house blogger', 'We have recently outsourced our blog content and I need someone who can proof content, send revisions if necessary, and then post content to our blog. \n\nThe current blogging service gives us white labeled post that are ours to post as we please. However, we would like to have our posts attributed to an author. We feel it looks better as a business to have the post come from an author rather than just be a generic post. \n\nUltimately we are looking for not only someone who can proof the post before posting them but can be the face behind it as well.\n\nYou can expect to proof and post about 2 posts a weeks. Let me know if this is something you''d be interested in.(ID: 48671046)', '1800', 'United States', '2013-10-30 01:16:20'),
(48, 'Writing & Translation', 'Transcription 9 minutes', 'I have a 9 minute transcription. Let me know if you have any questions.\n\nI have a 9 minute transcription. Let me know if you have any questions.(ID: 48670996)', '0', 'United States', '2013-10-30 01:14:18'),
(49, 'Writing & Translation', 'Business Plan', 'I already have my own business however I am now seeking an investor to help me take it to the next level.  I need a solid, professional business plan to present in order to get the money that I need.  I would really like to focus on a marketing strategy, since I already have the product manufactured.\n\nMy business is Forever Fresh Inc and I sell a product called a Swipe.  A Swipe is an individually wrapped, single-use deodorant wipe.  Feel free to check out my website, www.itswipes.com to get a better grasp on the product.(ID: 48670779)', '499', 'United States', '2013-10-30 01:04:46'),
(50, 'Writing & Translation', 'Blog & Content Writer', 'Hello ,\n\nWe are looking for a contract blogger for our company. We are in the men grooming category. We would like to have weekly blog updates. In addition we would like monthly press releases submitted to directories.  \n\nWe would also explore the option for social media posting 3 times a week.\n\nFuture job would include monthly newsletters & creative content writing for all of our products.\n\nPlease email me directly.\n\nAll the best,\n\nKevin(ID: 48670736)', '0', 'United States', '2013-10-30 01:02:40'),
(51, 'Admin Support', 'Professional Virtual Assistant Required', 'I require some help to\n\n1. Sort out details\n2. Manage emails\n3. Update slides and do research to update content on the slides\n4. Maintain database\n5. Download content off the internet\n6. Draft content based on my requirements\n7. Use Eventbrite\n8. Manage a society\n9. Deal with blogs and postings\n\nThe candidate must have good command of English and be able to take instructions carefully. Candidate must work with me through whatsapp and email\nCandidate must be on time and responsive daily.\n\nI will allocated predetermined number of hours that can be used throughout the week. A base of 3 to 5 hours will be given each week.\n\nProposals without price will be rejected(ID: 48641000)', '0', 'Singapore', '2013-10-29 12:38:36'),
(52, 'Admin Support', 'Outsource Company for Real Estate BPO''s', 'We are looking for people that can perform real estate BPOs for a large vendor management firm. You will be dealing with many different MLS systems so having a learning curve is important. You will have to have good language skills to put a report together Because data entry is required. We will pay per BPO performed or on per hour basis with minimum standard requirements - 8 Reports per 6 Hour SHIFT or don''t call us, PERIOD . Also what timings do you keep because as you know the realtors are using the system during our daytime (9am-9Pm EST) Luckily you can have someone work on the file overnight. We have a online case tracker that you will be required to use. What type of quality check is on each file, we do not tolerate any mistakes PERIOD  What is your turnaround time for an order once you have received it?  What is your turnaround time for a QC? What other things do you think separate you from the present people doing BPO''s? This is on hourly or per Report fee basis...(ID: 48640611)', '30000', 'India', '2013-10-29 12:31:13'),
(53, 'Admin Support', 'Medical proofreader.', 'A medical transcriber is needed to proofread 5 medical transcripts. \nThe transcripts are handled well but I need to run a check. \nThe quality of audios is excellent. Each audio file comprises of 60-70 mins. \n\nBid for 5 files and let me know how much time will you need to proofread these transcripts.(ID: 48640482)', '600', 'Pakistan', '2013-10-29 12:25:40'),
(54, 'Admin Support', 'Amazing Virtual Assistant', 'I''m looking for a kick-ass US-based virtual assistant.\n\nIt''s tough to describe the kind of person I need, and would appreciate guidance on exactly what you, as a candidate, can offer in order to help solve my time issues.\n\nFirstly, let me explain my situation, and why I urgently need assistance:\n\nI started an online graphic design business in the publishing industry around 18 months ago. About a year ago, it started to really take off in a big way. Originally, I was the only designer, but soon brought on 4 other designers that I outsource to on a regular basis. They are all based in different countries. This is not common knowledge to my clients, most of whom believe I am doing all the design work myself. Over the last 3 months, I have had a massive surge in business, and I''m really struggling to keep track of everything. My entire business is online, with all client and designer communication done through e-mail. I get around 150 mails per day, mostly dealing with changes requested by clients, questions by clients on services, designers sending through their drafts or files, me invoicing clients/paying designers (all through Paypal).\n\nJust dealing with e-mails takes a lot of time away from actually doing design work.\n\nI need a VA that can help me with the following:\n\n1. Handle the deluge of e-mails. Liaise with clients and designers, but keeping them separate from each other.\n2. Help clients to be comfortable that they are not dealing with me any longer (but with the VA)\n3. Devise a system whereby I can focus on the more important aspects of the business\n4. Twitter and Facebook account management.\n5. Possibly commenting/writing for blogs, etc.\n\nThe ideal candidate will have some experience in dealing with authors and/or designers and can come up with a workable solution to the above problems as part of your proposal. Ultimately, this is an ongoing position, with daily communication, and continual e-mail management.\n\nThanks!\nDamon(ID: 48639513)', '0', 'South Africa', '2013-10-29 12:07:06'),
(55, 'Admin Support', 'Name extraction from email database', 'We have a list of about 100000 email addresses in an Excel file. Many of those email addresses contain the user''s first and second name as the first part of the email address. We would like someone to manually read through the list and where names can be identified - copy/paste these names into a first name and surname fields of the Excel file.(ID: 48639304)', '25000', 'India', '2013-10-29 12:05:10'),
(56, 'Admin Support', 'High School Principals List', 'Will need the names and email addresses for High School Principals in two separate regions of Missouri/Southern Illinois.(ID: 48639342)', '50', 'United States', '2013-10-29 11:56:51'),
(57, 'Admin Support', 'Transcription work - ongoing projects', 'Ongoing transcription work with very quick turnaround required. \n\nTranscribers required, ideally who live in the US. \n\nVerbatim transcription required.\n\nMust be experienced, native speakers of England.(ID: 48638705)', '0', 'Spain', '2013-10-29 11:41:48'),
(58, 'Admin Support', 'Data Extraction / mining / Data Entry', 'I need the company information from a web directory extracted and transfered to a google docs spreadsheet.\n\nThere are around 5000 entries, on separate web pages. I need this information accurately moved to columns in a spreadsheet. There will be around 7 or 8 columns in the spreadsheet, company name, website url, address, email address etc etc(ID: 48638464)', '499', 'United Kingdom', '2013-10-29 11:35:03');
INSERT INTO `elance_jobdetails` (`slno`, `category_name`, `heading`, `description`, `budget`, `location`, `date`) VALUES
(59, 'Admin Support', 'Harvesting of iPhone and iPad development companies details', 'Hi there, I''m an iPhone app developer and need to contact iPhone and iPad development companies.\n\nI need\n\nEmail\n\nA good way to find these companies if to goto the iTunes App store (You can do this online you don''t need an apple device) and look through the app listings (maybe starting with the popular ones from companies with a few apps available)\nThen find the companies website and get the information.\n\nIm not planning on spamming these people with emails. just sending them my CV and giving them a call.\n\nIm not concerned which country they are based in as long as they are english speaking (based on their website language)\n\nI have a demonstration video here how id like the work to be carried out.\n\nhttp://www.youtube.com/watch?v=LTaAvR8PHtI(ID: 48638439)', '0', 'United Kingdom', '2013-10-29 11:34:20'),
(60, 'Admin Support', 'Research and Data Entry to Website', 'Easy Task:\n- Internet search for specific Lego creation photos.\n- Upload the photos with relevant title in English to our private website.\n\n120 entries needed with budget range from $20 to $30.\nTime line: 1 week.(ID: 48637842)', '30', 'Australia', '2013-10-29 11:20:08'),
(61, 'Admin Support', 'Virtual assistant for regular web research', 'I need someone to search the internet regularly for the following:\n\n1) Articles and videos about seniors (elderly) and using technology or how technology affects them. \n\n2) Videos about seniors in general having fun and being savvy.\n\n3) Motivational quotes (the ones with a nice picture) or just good quotes.\n\n4) Motivational business articles in general (I will give you some people on LinkedIn and Twitter who post good content).\n\nThis may also evolve to you doing social media posts via Hootsuite from the research you do and writing short blog articles.\n\nI also have a CRM database that I may get you to maintain. \n\nInitially we will start with the web research.(ID: 48637609)', '0', 'United States', '2013-10-29 11:15:00'),
(62, 'Admin Support', 'Virtual Marketing/Admin Assistant', 'The skills you will be required for this job are:\n* Positive, energetic and friend voice\n* Working knowlege of Microsoft Office, Excel, and Paint\n* Working knowlege of Google Mail and Docs\n* Working knowlege of Craigslist, Backpage and other online market tools\n* Good organizational skills\n* Ability to control phone conversations to capture key information while providing information the caller wants.\n\nJob Description: \nI''m looking for a Virtual Assistant to assist with generating leads for applicants for leasing residential rental apartments and homes.  Our best leads have been generated by online marketing and drive by calls.\n\nYou will be responsible for:\n* Maintaining the property information flyer\n* Maintaining property information and pictures on a Wordpress website\n* Post and monitor ads with pictures online to Craigslist, Backpage, etc\n* Respond to email and follow up on leads\n* Respond to inquiries by phone during normal office hours\n* Manage/schedule showings\n* Provide a daily contact report\n\nYou will need to have working knowledge of:\n* Google Mail/Docs\n* Microsoft Office and Paint\n* Microsoft Word\n\nYou must have a good internet connection, computer, and a phone for taking calls.  This would be a good job for stay at home parent looking for a little extra money.\n\nWork schedule:\n* Be available to respond to and follow up on phone calls Monday thru Friday between 9 AM and 5 PM Central Time.  \n\nCompensation:\n* 5 to 10 hours per week when there are vacancies.(ID: 48636107)', '0', 'United States', '2013-10-29 10:43:04'),
(63, 'Admin Support', 'Training Officer Community Based Disaster Risk Reduction', 'PROJECT: DISASTER RISK REDUCTION FUNDED BY ROYAL NORWEGIAN EMBASSY \nOrganization: 	Focus Humanitarian Assistant Pakistan\n\nFocus Humanitarian Assistance (FOCUS) is an international group of agencies established in Europe, North America, South and Central Asia to complement the provision of emergency relief, principally in the developing world. It helps people in need reduce their dependence on humanitarian aid and facilitates their transition to sustainable self-reliant, long-term development. Focus Humanitarian Assistance is an affiliate of the AKDN\n\nMajor responsibilities:\n\n?	Conduct Training Need Analysis (TNA) for training programmes and Coordinate with the Programme Officer and develop comprehensive training programmes;\n?	Design and deliver trainings, workshops and seminars, update/enrich curriculum, prepare lesson plans and\n?	teaching aids for trainings;\n?	Liaison with key stakeholders particularly the local community for a greater achievement of organizational goals and objectives and coordinate with local institutions through proper communication;\n?	Develop training follow up reports;\n?	Collect various data from the field and share with systems concerned;\n?	Write periodical reports document and disseminate to line supervisors;\n?	Ensure that the trainees are well managed and kept motivated.(ID: 48635714)', '900', 'Pakistan', '2013-10-29 10:29:47'),
(64, 'Admin Support', 'List of Email Addresses: Catholic Schools USA Principals email', 'READ CAREFULLY PLEASE:\nI would like the direct email addresses for Principals in every single Catholic School \nin America in an excel output format. \nI would also like the Principals First name and Surname to correspond with each email.\nI DONT want the school''s email address, I WANT the PRINCIPALS DIRECT contact email address plus their first and last name.\n\nTo begin with can you please tell the the total number of email addresses that you will be able to deliver. I want one for every single CATHOLIC school in USA please. \nElementary and High Schools are to be included.\nI will only award the job once an estimated total figure is delivered to me.(ID: 48635270)', '0', 'Australia', '2013-10-29 10:15:01'),
(65, 'Admin Support', 'FULL TIME - TECHNICAL SUPPORT WORKER ON PHONE', 'We are looking for a FULL TIME worker for our inbound technical support team.\n\nYou will be responsible for taking phone calls to help assist with various computer issues such as fbi virus, viruses, slow computer, malwares, rootkits, operating system reinstallation, networking, printers, routers, email problems, and more.\n\nYou must have previous experience from a known company for desktop support.\n\nPlease state whether you have MAC technical support experience.\nAlong with technical support, you will also have the ability to earn commssion on upselling/cross selling to customers.\n\nSalary 28k - 31k PHP per month, & commission & tips\n\nYou will have to work approx 12 hours a day, 5 days per week.\n\nThis is for full time workers only and is a long term contract.\n\nWe are offering secure work for someone who has technical experience and wants the ability to increase their wage with hard work.\n\nBy applying for this job you are agreeing to the above terms.\n\nPlease quote "28-32kphp" to confirm you have read all the information.\n\nIndependent workers only.(ID: 48634879)', '0', 'United Kingdom', '2013-10-29 10:08:19'),
(66, 'Admin Support', 'German language blog administrator, skills in social media and marketing', 'You need excellent german skills for this job. Therefore the description is in german:\n\nInhalte für neue Artikel kommen von externen Redakteuren.\nSie müssen diese in Wordpress einpflegen, leserlich formatieren, interessante Überschriften finden und Tags einfügen.\n\nDiese Artikel sollen dann zu einer bestimmten zeit veröffentlicht werden. Kurz danach soll eine E-Mail mit cleverreach.de versendet werden, die einen Link zu dem Artikel enthält.\n\nZusätzlich soll nach Veröffentlichung ein Link bei Facebook und Twitter geteilt werden.\n\nDabei soll alles an festen Zeiten veröffentlicht werden und nicht sofort bei Einstellung.\n\nZunächst sind es pro Woche zwei Artikel. Bei Erfolg ist es denkbar das auf 3 bis 5 auszubauen.(ID: 48600479)', '0', 'Germany', '2013-10-29 09:42:54'),
(67, 'Admin Support', 'Translating 1h 22min of audio Chinese interview into English transcript', 'Translating 1 hour 22 min of Mandarin Chinese interview into English. Chinese transcript not required, only the translated English version. Deadline 15 Nov. Please send me a sample of your work when applying.(ID: 48633199)', '499', 'Singapore', '2013-10-29 09:24:05'),
(68, 'Admin Support', 'DATA ENTRY - EASY$$', 'I need someone to collate company details from approx. 4 websites and add content in to a spreadsheet (eg company name, address, city, state, website, contact number, contact email).\n\nIF successful - opportunity to LOTS MORE $$$ doing similar jobs.\n\nInvolvement of research:\nyes(ID: 48632767)', '1000', 'Australia', '2013-10-29 09:12:32'),
(69, 'Admin Support', 'Contact List', 'Search for Spanish organizations aimed at helping students and unemployed people to improve their employability by providing courses and guidance. \n\nI am interested in organizations placed in Comunidad de Madrid and Cantabria. The following initial organizations are an example of the targets I am looking for\n\nCOIE Universidad Politecnica de Madrid http://www.coie.upm.es/que-es\nAgencia Desarrollo Local de Astillero (Cantabria) http://www.empleacantabria.com/es/portal.do?TR=C&IDR=250\n\nPer each organization, I would like to have a contact form like this one\n\nOrganization Name\nPerson Responsible\nAddress\nPhone number\nE-mail: \nPágina Web: \n\nThe work should contain a mínimum of 20 organizations and should not take longer than 3 hrs(ID: 48632435)', '0', 'Spain', '2013-10-29 09:02:56'),
(70, 'Admin Support', 'Ebay Administrator', 'I am looking for someone to manage a busy eBay account.  Potentially we are looking to sell over 70,000 products on eBay UK and require someone who is experienced in eBay to manage the site in the following ways:\n\n- Liaise with customers over new order\n- Respond to customers queries and questions\n- Manage return process\n\nTo do this, I require someone who already has an eBay account that we can adopt for the project as our own.  The eBay account must have selling history and strong feedback.  \n\nPlease only apply if you have an account we can use that meets the above criteria.  Thank you(ID: 48632019)', '0', 'United Kingdom', '2013-10-29 08:52:48'),
(71, 'Admin Support', 'Social media, SEO and online asisstant', 'I need an assistant to help me with various tasks for my clients.\nThis includes newsletters, SEO and social media.(ID: 48631088)', '639.36', 'United Kingdom', '2013-10-29 08:26:35'),
(72, 'Admin Support', 'Copy & Paste content', 'Copy & Paste content from word documents and PDF files. \n\nWe will provide you with the files to copy from. Each document will have multiple sections and you will need to copy and paste the content into a database.\n\nCould you please quote for entering 1,000 records. For now you will only need to copy the title of the section of text and the text itself.(ID: 48631049)', '799.2', 'United Kingdom', '2013-10-29 08:25:34'),
(73, 'Admin Support', 'Assistant Needed for Legal Communication', 'I am posting on behalf of a friend who is currently incarcerated, and needs an assistant to compile correspondence to a number of attorneys to request their support in pursuing his case in the supreme court.\n\nHe has written a letter to be included with his petition for rehearing en banc at the circuit court level, to be mailed and emailed out to a number of attorneys.\n\nThe ability to communicate clearly, write in proper English, print, mail, and email will be most critical. A basic understanding of the legal process would also be helpful, though less important than the ability to stay organized, follow instructions, and complete work quickly, as time is of the essence.\n\nPlease bid an hourly rate, and make clear your availability.\n\nMUST BE LOCATED IN UNITED STATES. USE OF US MAIL WILL BE NEEDED, and TIME IS A FACTOR.\n\nThank you,\nTrevor(ID: 48630986)', '0', 'United States', '2013-10-29 08:23:37'),
(74, 'Admin Support', 'Software handling on Mac. VA needed.', 'Hi,\n\nWe are a mobile gaming company. Our apps have been downloaded and used by hundreds of thousands of users. We are going through a growth phase in the organization and want someone who could be part of the team and streamline all the processes. Ideally someone who has following attributes.\n\n# Must be fluent in written and oral English.\n# Must own a Mac system.\n# Must be Interested in new software learning and handling. Drag and drop type of software.\n# Good with photoshop, preferred.\n# Article writing skills.\n# Exp in keyword research.\n# Ability to take best decisions in everyday work.\n# Fast learner.\n# Exp with IT or software projects is a plus.\n# Honesty, Integrity are of utmost value.\n\nI am looking for someone to work with the organization for long period of time therefore I advise you to apply only if you are interested in working fulltime. It''s better for you as well as me. Please mention the words, No more zombies, when responding to the posting. That way I would know that you are thorough in your work and read carefully before jumping on. Sadly I know, I would still receive few applications without the mention of those words. I want you to mention it and stand out in your first impression.\n\nBest.(ID: 48630471)', '0', 'India', '2013-10-29 08:08:22'),
(75, 'Admin Support', 'Personal Assistant with Mac.', 'Hi,\n\nWe are a mobile gaming company. Our apps have been downloaded and used by hundreds of thousands of users. We are going through a growth phase in the organization and want someone who could be part of the team and streamline all the processes. Ideally someone who has following attributes.\n\n# Must be fluent in written and oral English.\n# Must own a Mac system.\n# Must be Interested in new software learning and handling. Drag and drop type of software.\n# Good with photoshop, preferred.\n# Article writing skills.\n# Exp in keyword research.\n# Ability to take best decisions in everyday work.\n# Fast learner.\n# Exp with IT or software projects is a plus.\n# Honesty, Integrity are of utmost value.\n\nI am looking for someone to work with the organization for long period of time therefore I advise you to apply only if you are interested in working fulltime. It''s better for you as well as me. Please mention the words, No more zombies, when responding to the posting. That way I would know that you are thorough in your work and read carefully before jumping on. Sadly I know, I would still receive few applications without the mention of those words. I want you to mention it and stand out in your first impression.\n\nBest.(ID: 48630385)', '0', 'India', '2013-10-29 08:05:50'),
(76, 'Admin Support', 'Remote invoice processing', 'We require a team of accurate data entry invoicing clerks for remote invoice processing. You must have 100% accuracy and minimum 60 wpm. If you are a fast and efficient typist looking for regular work please quote your best hourly rate. Full training will be provided. You must have reliable fax or internet to complete this job(ID: 48625209)', '0', 'Australia', '2013-10-29 07:56:03'),
(77, 'Admin Support', 'Business Development Assistant - Ireland', 'Business Development Assistant needed in Ireland for private college /school\n\nMust be:\n\nLiving in Ireland\nArticulate\nProficient in English \nHave knowledge about property leasing / renting \nYou will be contracted to carry out various tasks \n\nYou will have to be a determined and organized individual.\n\nThis job is part- time and can fit around existing commitments.(ID: 48628791)', '639.36', 'United Kingdom', '2013-10-29 07:24:45'),
(78, 'Admin Support', 'Data Input from itunes (must have itunes)', 'As I get a lot of copy and paste cover letters, please answer the following question, as the first character in your reply: What is 2+6\n\nI am looking for someone to measure our rankings on itunes USA on a daily basis, hence you must have google itunes USA to do this job.\n\nIf you are still interested in this job I would like to test your skills:\n\n1. Create a shared google spreadsheet, so that I can see it.\n2. Within the spreadsheet, input todays date and the date of the next few days under it. \n3. Also input the search term (in this case ''rain Sounds''\n4. Find out where this album is ranked:\nhttps://itunes.apple.com/us/album/rain-sounds-nature-sounds-cd/id382696306\n5. Send me the link of your spreadsheet.\n6. Do the same for ''jungle sounds'' for this album: https://itunes.apple.com/us/album/sounds-animals-deep-in-jungle/id552521179\nI look forward to reviewing your work.(ID: 48628933)', '1198.8', '', '2013-10-29 07:23:04'),
(79, 'Admin Support', 'I need to transcribe 50 minutes of audio', 'I have a digital audio file that I will upload, and you will download to your computer. You will then transcribe it into text. The audio is only 50 minutes long. The quality of the audio is excellent quality, and there are 2 people speaking to each other.(ID: 48628582)', '499', 'Canada', '2013-10-29 07:12:50'),
(80, 'Admin Support', '$25/hour amazon data input job input item info on amazon', '$25/hour amazon data input job input item info on amazon \nbasically this is a copy/paste job, anyone can do , \nwe require bidders to take 5~10 minute test on elance /sky before being awarded this project on elance. this is a long term, stable elance job \nup to 30 working hours a week. your working time is flexible .\ninterested bidders submit proposal w cvpdf/doc attached. no ResumeNoHire\namazon experienced workers get bonus.(ID: 48627481)', '36000', 'Japan', '2013-10-29 06:43:19'),
(81, 'Admin Support', '$50/hr data input entry on social marketing sites anyone can do', '$50/hr data input entry on social marketing sites anyone can do \nsubmit your proposal with CVdoc/pdf attached, no cv no consideration\nthe first 10 bidders get awarded on elance right away\nwe give instruction video , easy work, anyone can do.\nup to 20 working hours a week. and release elance escrow upfront\nUrgent hiring , good chance, and don''t miss it.(ID: 48626704)', '0', 'Japan', '2013-10-29 06:23:38'),
(82, 'Admin Support', 'Business cards data entry', 'I am looking for somebody to process the information of business card details from exhibitions into a manageable spreadsheet that can be used for marketing purposes. \n\nBusiness cards would be supplied as scanned pdf''s (see sample attached). In total there should be just around 1 000 contacts to start.\n\nI am looking for a quote for a basis of 1 000 business cards knowing that there will be additional business cards to be processed later. You should be able to manage (and potentially understand) business cards using major alphabet including Russian, Chinese and Arabic.\n\nLet me know your offer, cost of the services and time for realization.(ID: 48625358)', '499', 'France', '2013-10-29 05:48:35'),
(83, 'Admin Support', 'Data Entry Introduction', 'I''d like to start working in the Data Entry field (as a freelancer), and want some help & relevant tips for getting started. The focus is on finding data on the web and representing it according to the customer needs. I need lists of recommended software and websites I should know.\n\nThe job includes writing a 5-pages document, with the following :\n\n1. Introduction to data entry, required skills and most common tasks requested by customers.\n\n2. A list of required software.\n\n3. A list of recommended websites.\n\n4. Three examples for projects I can do for myself as practice, before actually proceeding to real projects for customers.\n\n\nThe document should be written specifically for me, and should not be shared with others.\n\n\nThank you(ID: 48625355)', '499', 'Israel', '2013-10-29 05:48:34'),
(84, 'Admin Support', 'DataEntry: Website Contact Details', 'My job is simple. You have to get 1000 websites contact details in 8 hours.This is very urgent. \n\nFields are\nCompany Name	\nAddress	\nTel No.	\nFax No.	\nEmail	\nProducts & Services(ID: 48624481)', '30', 'India', '2013-10-29 05:40:20'),
(85, 'Admin Support', 'AWS and VPN server setup', 'We are looking for AWS Expert.\n\n-    VPN connection to our clients VPN.(our server need to connect with our Client vpn) configuration.\n\n- 3 IP address should be pointed to web server via vHosts.\n\nWe''ve server in amazaon , task is vpn to be setup in our server , and using that information our client vpn to be connected with our  VPN.(ID: 48624402)', '0', 'India', '2013-10-29 05:38:49'),
(86, 'Admin Support', 'BRAND MARKETING/VIRTUAL ASSISTANT', 'PRIMARY RESPONSIBILITIES\n\nMarketing/Sales Support: Everything online brand marketing, social medias, develop and maintain marketing communications through various social platforms.  Create promotional online sales materials, campaigns, design marketing collateral\n\nDesign: Develop online promotional marketing advertisements, and other basic electronic and print materials. \n\nE-Commerce/Social Media: Update website & develop social media campaigns (Email, Blog, Facebook, Pinterest, Instagram, etc.).\n\nSKILLS/REQUIREMENTS\n? Proficient in Adobe Creative Suite: InDesign, Illustrator, Photoshop \n? Proficient in Microsoft Office Suite: PowerPoint, Word, Excel or the like \n? Strong online & social media experience\n? High sense of luxury brand and working with high net worth clients and understanding their needs (world travel experiences and understanding the affluent lifestyle)\n? Highly developed research skills  \n? Team oriented with a self-motivated work ethic \n? Can meet deadlines in a timely manner; quick and efficient \n? Excellent phone etiquette & professional demeanor towards customers \n?	Strong character, motivated, and results oriented type work ethic\n?	Thick skin- capable of taking direction and completing tasks\n?	Capable of handling multiple tasks with ease and without stress\n?	Great writing/editing skills(ID: 48624600)', '499', 'United States', '2013-10-29 05:27:41'),
(87, 'Admin Support', 'Word press website', 'Need assistance w/ small changes on website.  My web developer disappeared.\nNeed to add slider pictures\nNeed to lengthen page - clients complain they cannot see bottom of page(ID: 48624252)', '120', 'United States', '2013-10-29 05:19:29'),
(88, 'Admin Support', 'VA FOR REAL ESTATE -', 'Need a person who desires to excel. Must; know Real Estate or enough knowledge to know where to get the information needed to perform the tasks.(ID: 48624117)', '0', 'United States', '2013-10-29 05:14:27'),
(89, 'Admin Support', 'SMS Subscription Product - Customer Service', 'Phone operator to answer phone calls and manage Zendesk customer service system.  \n\nProduct is Australian based so call times must fit in with 9:00 to 5:00 operations\n\nExperiance with mobile carrier subscription a must. Please do not apply for the job is you have no experiance in mobile carrier sms customer service.\n\nHigh volume of daily calls. Strong english required.(ID: 48623814)', '0', 'Australia', '2013-10-29 05:05:21'),
(90, 'Admin Support', 'Copy Editior,Copywriter,Data Entry Specialist,Digital Photographer ,', 'I am able to editing copy of any subject given by my Client. And also good skill to write copy  of any subject .I am also a specialist on data entry i have good speed to type on keypad. I also take nature photograph.\n\nJob Description: \nWe are currently seeking an expert Data Entry Specialist that can receive information from a variety of sources and can accurately and quickly integrate it into our systems. Here''s what you need to know.\n\nYour responsibilities:\n\n - Interface with team members and external vendors/partners to receive required data assets\n - Use a variety of tools to organize and input data into our systems, whether it may be spreadsheets, documents, invoices, images, written content or other formats\n - Deliver requested data assets to team members in a timely fashion\n - Ensure the accuracy of both data input and output\n - Periodically conduct verification sessions as necessary\n\nYour qualifications:\n\n - Previous experience in data entry\n - Willingness to take feedback and adapt to requests \n - Ability to pay close attention to detail as well as excellent organizational skills\n - Typing speed of 45 WPM or higher\n - A work style that is extremely detail oriented \n - A complete Elance profile\n - References or an established reputation on Elance preferred\n - Please mention any additional proficiencies you may have as they will be considered\n(ID: 48622865)', '7832.16', 'India', '2013-10-29 04:40:30'),
(91, 'Admin Support', 'I want 5-10 Transcribers Hiring Now', 'Hi!\n I have a hefty load of transcribe work that could take 10 people 2-4 months to complete.\n\nI am up for the takes to serieous and committed people, who can produce 99-100% accurate work.\n\nif you think you can work for me , stand by and take the 10 minute , test of Uk/USA ascent. \n\nits easy , but let me see what you got.\nAm looking for a long term rerlation\n\nthanks \nBen.\n bid should be per 1 hour recording!(ID: 48623014)', '4800', 'Kenya', '2013-10-29 04:39:21'),
(92, 'Admin Support', 'Real Estate - UK - Property Search / Tenant Viewings / Administration', 'The task will involve searching real estate websites such as:\n\nwww.rightmove.co.uk\nwww.gumtree.com\nwww.zoopla.com\n\nsearching for particular properties, in a number of areas 10 areas) fitting a strict criteria which will be provided and shortlisting available properties in categories such as;\n\nPost Code, Contact Number, Street Name, Rental Price (Excel Sheet)\nand emailing them to our team, with necessary links to the adverts.\n\nThe above task will involve 5 hours work per week (sometimes less or more)\n\nOur team will also require assistance in handling client emails, responding to emails, sending email templates (including invoices) to clients and storing invoices in a saved folder.\n\nThis role will involve handling incoming calls from prospective tenants on a daily basis and arranging viewings and updating viewing times on to google calanders ensuring viewings are arranged for time slots available in the calanders / Emailing or calling property manager to confirm booking times for viewings.\n\nThis will also involve sending block message templates and interacting with tenants on our advertising platform on a daily basis and responding within 24 hours to all tenant enquiries via the advertising platform.(ID: 48622631)', '130', 'United Kingdom', '2013-10-29 04:25:37'),
(93, 'Admin Support', 'Buddypress community site management', 'Looking for a site manager.\n\nManagement roles\n\nProfiles\nCategories\nIncoming content censoring\nSocial media posting\nSpam\nMailchimp\n\nNeed advice on what plugins you would use to manage the above in buddypress.\n\nneed a weekly rate to manage all the above. rate must be broken down into hours.\n\nI have had a person do a quote for me which was logical and it took into account the amount of users or members.\n\nSo from \n0 to 500 was X amount\n500 to 1000 was X amount \n1000 to 5000 was X amount\n\nif you understand what i am saying. They gave me a daily update statistics report and hourly rate. So do best to account everything and add to this list just incase i have missed everything.\nThanks you and if you say "Peace" at the start i will know you mean business.(ID: 48622081)', '499', 'Australia', '2013-10-29 04:04:55'),
(94, 'Admin Support', 'Virtual Assistant Required for Small Task', 'I am looking for a Virtual Assistant to assist with an initial small task of Internet research, with a potential for future jobs for the right candidate. I need a candidate with solid English skills who has computer/Internet access. The candidate will need to be able to follow instructions, complete tasks efficiently, and be able to meet deadlines.(ID: 48621839)', '59.94', 'Australia', '2013-10-29 03:54:59'),
(95, 'Admin Support', 'Virtual Assistant needed.', 'I am looking for a virtual assistant to help me manage many tasks. I am in charge of developing several web projects and am looking for someone who is organized and can handle a variety of tasks and keep the workflow going. I''m looking for someone who has great management and communications skills. Thanks in advance!(ID: 48620995)', '0', 'Canada', '2013-10-29 03:22:45'),
(96, 'Admin Support', 'IHA Harmony Transcription', 'We need the following file transcribed with time stamps by 10.30.13 at 10 am EST. \n\nhttp://www.hightail.com/download/OGhkR0laMHdiR0p4Tk1UQw(ID: 48620640)', '499', 'United States', '2013-10-29 03:10:38'),
(97, 'Admin Support', 'Data Entry / Website Updates', 'We require a regular permanent person to update our websites, reply to our online enquiries and update client spreadsheets on a daily basis.\n\nWork is required daily, approx 2-3 hours every day. Ongoing role\n\nAll training provided but must have good attention to detail, excellent english and be able to edit websites.\nFlexible with the time work is done as long as its done daily.(ID: 48620264)', '7992', 'Australia', '2013-10-29 02:56:03'),
(98, 'Admin Support', 'Create a list of 211 peoples'' name, employer, title, etc from the website', 'The job is to compile a list of members in Nebraska for an organization(Organization will be named after award, if you want the name before submitting proposal send me a message with your email and I will email you the name). Instructions are as follows \n\n1. Create an account for the organization, this is easy all you need is an email and anyone can open an account\n2. Using the organizations online directory, accessible to those with an account, search for all members in Nebraska\n3. A list will appear with 211 names listed. \n4. For each of the 211 names in the list, you must record the following information in an excel spreadsheet: FULL NAME, EMPLOYER, TITLE, EMAIL, PHONE, AND DATE ACQUIRED CFA. Note some of this information may not be listed on the list, if that is the case please put "NA" in the cell. \n5. Submit the spreadsheet to me\n6. I will take a random sample of 10 names and if the input accuracy for requested fields is above 90% I will pay the invoice, otherwise I will ask for a resubmission, until the the accuracy is above 90%, (using same 10 sample methodology)(ID: 48620166)', '0', 'United States', '2013-10-29 02:52:10'),
(99, 'Admin Support', 'Data Entry | Pay + Commision', 'We are launching a new website and need people who are familiar with SEO to do data entry for our website. This is a lucrative opportunity because we are offering pay + commission of $20-$50 per sign up if anyone want to take the extra step to make a sale!\n\nIn order to qualify you must be persistent and have the ability work long hours as well as to talk and write English fluently!\n\nMust Haves:\n- Speak Fluent English.\n- Perform Clean Data Entry.\n- While performing data entry wright down any QA errors. (If something wouldn''t work, we would need to know in order to fix it)\n- Must have knowledge of how SEO works\n- Patient & Polite when calling customers and offering our services! (extra step)\n\nSteps:\n1. Enter Client Information + Picture (title & description)\n2. Make sure the Titles & Descriptions are SEO Optimized.\n3. Call the client and offer our services (If client purchases our premium listing you get a commission based on what the bought + Data entry Pay) - Extra Income?\n\nIf you read this post reply with "Read It" in the subject when sending us proposal and include you Skype for a quick conversation!(ID: 48618979)', '0', 'United States', '2013-10-29 02:51:11'),
(100, 'Admin Support', 'Personal Interpreter', 'I am an American with a Japanese wife who is her first time to the United States. We are trying to achieve her getting her driving license. But with time time constraints, its hard for her to study all for all of it. So we are looking for someone who will help her as a translator during the test. Help her understand the english questions so that she is able to answer them.(ID: 48619738)', '0', 'United States', '2013-10-29 02:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`slno`, `eventname`, `date`) VALUES
(6, 'Party', '2013-08-23 16:44:00'),
(8, 'marraige', '2013-09-04 11:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`slno`, `userid`, `password`, `type`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professionalname` varchar(300) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `image` varchar(600) NOT NULL,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `service` blob NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aboutus` text NOT NULL,
  `mincost` int(30) NOT NULL,
  `maxcost` int(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `professionalname`, `fname`, `lname`, `image`, `category`, `subcategory`, `zip`, `service`, `address`, `phone`, `email`, `password`, `aboutus`, `mincost`, `maxcost`, `date`, `added_by`) VALUES
(1, 'New England''s Own Rodney Dangerfield ', 'Rodney Dangerfield Impersonators', 'Boston Rodney Dangerfield Impersonators', 'test.jpg', 12, 12, 65804, 0x5477656e74792046697665207965617273206f66206c6f6f6b696e67206c696b652c20736f756e64696e67206c696b652c20616e6420616374696e67206c696b6520526f646e65792e204c617320566567617320323030352d2032303036202d323030372d203230303820436f72706f7261746520476f6c6620546f75726e616d656e747320416c6c204f7665722074686520436f756e74727920496e636c7564696e67204775616d20616e64205361692d70616e2e20436f6d65647920436c7562732c20436173696e6f732c20436f72706f7261746520616e6420507269766174652046756e6374696f6e7320616e64206d616e792046756e642072616973657227732e2048652068617320706572666f726d656420666f7220726164696f20616e642074656c65766973696f6e20616c6c206f7665722074686520636f756e74727920616e64207468652049736c616e6427732e205468697320736561736f6e6564206c6f6f6b2d612d6c696b6520696d706572736f6e61746f722068617320677261626265642074686520617474656e74696f6e206f66206576656e20526f646e657920616e64206869732077696665204a6f616e2c2054686579207765726520736f20696d7072657373656420776974682068697320706572666f726d616e6365207468617420746865792061736b65642068696d20746f20617474656e64206f6e65206f662044616e6765726669656c642773206e6577206d6f766965207072656d696572732e2042696c6c205065746572736f6e27732074696d696e67206973207065726665637420616e64206869732064656c697665727920697320696d7065636361626c6520616e642068652077696c6c206c6561766520796f7520616d617a656420616e64206c61756768696e67206879737465726963616c6c790a7777772e6262726f646e65792e636f6d, 'Boston, Massachusetts', '417-889-9909', 'jps.1391@gmail.com', 'lima', '0', 200, 300, '2013-09-16 18:20:38', ''),
(2, 'Infinity Circus Productions ', 'Aerialists', 'Atlanta Aerialists ', 'test1.jpg', 13, 6, 752054, 0x496e66696e697479204369726375732050726f64756374696f6e732069732074686520536f757468e2809973207072656d696572206576656e7420656e7465727461696e6d656e7420636f6d70616e792c2070726f766964696e672064796e616d69632063697271756520706572666f726d616e63657320666f72206c617267652d7363616c6520636f72706f7261746520656e7465727461696e6d656e742c2067616c61206576656e7473202620696e74696d6174652070726976617465207061727469657320616c696b652e204372656174697665204469726563746f722c204c69616e61205265706173732c206973206120686967686c7920747261696e656420617274697374207370656369616c697a696e6720696e2061657269616c2073696c6b732c2074726170657a652c206163726f6261746963732c2063686f72656f6772617068792c20616e64206576656e7420706c616e6e696e6720617373697374616e63652e2048657220736f6c6f20706572666f726d616e63657320616e642067726f75702070726f64756374696f6e7320636f6d62696e652072656d61726b61626c6520737472656e6774682c2065787472656d6520666c65786962696c6974792c20616e6420637265617469766974792e205468652067726163652026206172746973747279206f662068657220776f726b2077696c6c206d616b6520796f7572206576656e7420616e20756e666f726765747461626c65206f6e652120436f6e74616374204c69616e6120746f20696e71756972652061626f7574206372656174696e672061206d65736d6572697a696e67206164646974696f6e20746f20796f7572206576656e7420776974682041746c616e74612773206c656164696e672c2066756c6c7920696e73757265642067726f7570206f662070726f66657373696f6e616c2063697263757320617274697374732e, 'Atlanta, Georgia,bbsr', '9776888585', 'jps.1391@gmail.com', 'qwert', '0', 300, 400, '2013-10-02 10:56:55', 'demo1@gmail.com'),
(3, 'Off Centered ', 'Circus Entertainment', 'Atlanta Circus Entertainment', 'test2.jpg', 13, 6, 65804, 0x5765206172652061206d616c6520616e642066656d616c652064756f206163742e205765206f66666572207365766572616c2064756f20616e6420736f6c6f2063697263757320737461676520616e6420616d6269656e7420616374732c20696e636c7564696e672e2e2e0a0a506172746e6572204163726f62617469632042616c616e63696e6720416374732c0a466972653a2066616e732c206a7567676c696e6720746f72636865732c206669726520656174696e672026206669726520627265617468696e670a5374696c742077616c6b696e672c0a4a7567676c696e673a2062616c6c732c20636c7562732c204c4544732c20746f72636865732c0a526f6c6c6120426f6c6c612c0a44616e636520260a4163726f626174696373210a0a5765206f6666657220616c6c206f66206f757220736572766963657320617320616d6269656e7420656e7465727461696e6d656e7420616e64206861766520746872656520646966666572656e742063686f72656f6772617068656420737461676520726f7574696e657320746f20736574206d7573696320616e6420636f7374756d696e672061732077656c6c21204d6f737420616374732063616e20626520706572666f726d656420696e646f6f727320616e64206f757421, 'Atlanta, Georgia,bbsr', '417-889-9909', 'test@gmail.com', 'qewererer', '0', 500, 1000, '2013-09-16 18:20:38', ''),
(4, 'professional1', 'dsdsfdsf', 'sdfsfsd', 'sidebar3.jpg', 12, 12, 43345, 0x736466736466736466736466647366647366, 'fddsfsfsf', '546546546', 'testing@gmail.com', '123', '0', 300, 500, '2013-09-16 18:39:35', ''),
(5, 'Comedian in Birmingham', 'Bryan', 'Betz', '4c7829a901a96_large.jpeg', 6, 28, 128900, 0x5768657468657220796f75206869726520427279616e204265747a206f72206f7468657220436f6d656469616e7320696e204269726d696e6768616d20666f7220796f75722070617274792c2077656464696e672c206f72206576656e742c204769672053616c6164206d616b65732069742073757065722d6561737920746f20626f6f6b2070726f66657373696f6e616c20436f6d656469616e732e0a0a5765207374726f6e676c79207265636f6d6d656e64207468617420616c6c20636f6d6d756e69636174696f6e206265206b657074206f6e20746865204769672053616c616420426f6f6b696e6720506c6174666f726d20617320796f7520626f6f6b20796f757220436f6d656469616e2e205768656e20796f7520646f2c207765c3a2e282ace284a272652061626c6520746f206f66666572206e756d65726f75732062656e656669747320746861742077652063616ec3a2e282ace284a2742067756172616e74656520696620796f752074616b6520636f6d6d756e69636174696f6e206f72206465706f736974207061796d656e74206f666620746865204769672053616c616420706c6174666f726d2e204f757220626f6f6b696e672073797374656d206973206561737920746f2075736520616e642068616e646c657320736563757265206465706f736974207061796d656e74732066726f6d20796f7520746f20746865204269726d696e6768616d20436f6d656469616e206f6620796f75722063686f6963652e0a0a4164646974696f6e616c6c792c207468652071756f74652f61677265656d656e742073656e742066726f6d20796f757220436f6d656469616e20746f20796f75207573696e6720746865204769672053616c616420706c6174666f726d2c2073686f756c64206f75746c696e6520706572666f726d616e636520666565732c206578747261732c206172726976616c20616e64206465706172747572652074696d65732c2063616e63656c6c6174696f6e20706f6c6963792c20696e737572616e636520696e666f726d6174696f6e20616e64206f746865722064657461696c732e, 'Birmingham, AL', ' 417-889-9909888', 'Bryan@Bryan.com', '123456', '0', 100, 200, '2013-10-02 10:56:55', 'demo1@gmail.com'),
(6, 'Luke Murgatroyd', 'Luke', 'Murgatroyd', 'leekamen.jpg', 0, 0, 0, 0x61206d61676963616c2061637420, '12 harrow road', '01924950108', 'Luke@LukeMurgatroyd.co.uk', 'bedkingdom123', '0', 100, 10000, '2013-10-01 11:59:42', 'ashley@bedkingdom.co.uk'),
(7, 'sd', 'sandeep', 'nayak', 'img7.jpg', 5, 23, 0, 0x727265746572747265747265, 'fdgfdgdfg', '698989', 'sandeep@krititech.in', '123456', '0', 100, 300, '2013-10-01 12:07:40', 'Rachel@flairentertainments.co.uk'),
(8, 'sdfdsfsdf', 'rterte', 'ertret', 'sale.png', 5, 22, 5645, 0x727472657472657465727465727472657472, 'ertert', '564654', 'priti@gmail.com', '123456', '0', 100, 200, '2013-10-01 12:13:12', 'Rachel@flairentertainments.co.uk'),
(9, 'demo1', 'demotest', 'test', 'pfree.png', 0, 0, 4554, 0x7975797475747975747975797475, 'dfgdfg', '7665776', 'demo1@gmail.com', '123456', '0', 100, 200, '2013-10-01 12:20:20', 'Rachel@flairentertainments.co.uk'),
(10, 'acting', 'dfg', 'asdf', '0_010.jpg', 3, 12, 343434, 0x6173646b6a6b662073646620736466, 'sdf,f sf ', '417-889-9909 ', 'act@gmail.com', 'act', '0', 100, 500, '2013-10-01 13:29:06', 'demo1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `newletterstatus` int(15) NOT NULL,
  `confirm_code` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `pwd`, `status`, `date`, `newletterstatus`, `confirm_code`, `type`) VALUES
(1, 'preetishree', 'preetishree@krititech.in', '123456', 1, '2013-09-06 11:43:44', 1, 'ff7afab51064d080422d64cd7e1c21', 1),
(2, 'Munmun jena', 'preetishree@gmail.com', '123123', 1, '2013-09-05 16:31:21', 1, '733ca0f913e14e64d74bddc1ce7b22', 2),
(4, 'dfdff', 'dfd@gmail.com', '55', 1, '2013-09-04 15:09:08', 1, '', 0),
(7, 'topaz', 'samaltopaz@gmail.com', 'samal', 1, '2013-09-04 15:12:33', 1, '', 0),
(8, 'hghjhg', '55551ghjghjghj', 'qwertyhgjgj', 1, '2013-09-04 15:29:13', 1, 'fe8d6c5d32dff362a034fde767d810', 0),
(9, 'hjghj', '55551', 'qwerty', 1, '2013-09-04 16:22:39', 1, '3e6b606172dce67feb231aeab3ee56', 2),
(10, 'hjghj', '55551', 'qwerty', 1, '2013-09-04 16:22:39', 1, 'c83222f1868838a73e396ddeb9d0e9', 2),
(11, 'jyotiprava', 'jps.1391@gmail.com', 'lima', 0, '2013-09-16 17:28:46', 1, '', 2),
(12, 'professional1', 'testing@gmail.com', '123', 0, '2013-09-16 18:39:35', 0, '', 2),
(13, 'madhusmita', 'madhusmita@krititech.in', '123456', 0, '2013-09-26 12:34:58', 1, 'd2791038909f665019ca5966e5f020', 1),
(14, 'Comedian in Birmingham', 'Bryan@Bryan.com', '123456', 0, '2013-09-26 14:40:09', 0, '', 2),
(15, 'Flair', 'Rachel@flairentertainments.co.uk', 'beds09123', 0, '2013-10-01 11:51:27', 0, 'fe6d1b20aebb51681d5aee08f15c8b', 1),
(16, 'flair', 'ashley@bedkingdom.co.uk', 'bedkingdom123', 0, '2013-10-01 11:56:13', 0, 'c13bb8bd44f1eb787a780822d8458d', 1),
(17, 'Luke Murgatroyd', 'Luke@LukeMurgatroyd.co.uk', 'bedkingdom123', 0, '2013-10-01 11:59:42', 0, '', 2),
(18, 'actagency1', 'demo@gmail.com', '123456', 0, '2013-10-01 12:01:34', 1, '41675807a7becdda5a6b53381d3f94', 1),
(19, 'sd', 'sandeep@krititech.in', '123456', 0, '2013-10-01 12:07:40', 0, '', 2),
(20, 'sdfdsfsdf', 'priti@gmail.com', '123456', 0, '2013-10-01 12:13:12', 0, '', 2),
(21, 'demo1', 'demo1@gmail.com', '123456', 0, '2013-10-01 12:20:20', 0, '', 2),
(22, 'demo1@gmail.com', 'demo1@gmail.com', 'demo', 0, '2013-10-01 13:23:30', 0, 'f3e0dd34bf7e0ac3f2da3a181c9ec9', 1),
(23, 'acting', 'act@gmail.com', 'act', 0, '2013-10-01 13:29:06', 0, '', 2),
(24, 'bedkingdom', 'Ashley@bedkingdom.co.uk', 'bex09123', 0, '2013-10-02 15:54:02', 0, '48c8df6fabdeeafd32ef9a6276da7e', 1),
(25, 'agent', 'agent@aol.coms', 'agent123', 0, '2013-10-02 15:55:56', 0, 'be145c623a5ef48d75378a6ed31df8', 0),
(26, 'agent', 'agent@aol.coms', 'agent123', 0, '2013-10-02 15:56:13', 1, 'b9363ec6a0781d84dce2f541eb9222', 1),
(27, 'agent', 'agent@aol.coms', 'agent123', 0, '2013-10-02 15:56:47', 1, '3750ae18d3a399f925f922111ba549', 1);

-- --------------------------------------------------------

--
-- Table structure for table `replyquoats`
--

CREATE TABLE IF NOT EXISTS `replyquoats` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `replyto` varchar(500) NOT NULL,
  `replyfrom` varchar(500) NOT NULL,
  `subject` varchar(400) NOT NULL,
  `message` text NOT NULL,
  `reply_ondate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `replyquoats`
--

INSERT INTO `replyquoats` (`slno`, `replyto`, `replyfrom`, `subject`, `message`, `reply_ondate`) VALUES
(1, 'preetishree@krititech.in', 'demo1@gmail.com', 'hiiiii', 'accepted', '2013-10-07 07:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `skillname` varchar(200) NOT NULL,
  `descp` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(500) NOT NULL,
  `typevalue` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`slno`, `skillname`, `descp`, `date`, `image`, `typevalue`) VALUES
(1, 'Bands', 'With over 80 different genres of bands and musical groups to choose from, it’s nearly impossible to leave without finding a band that you and your guests will wanna jam to.', '2013-09-21 13:16:28', 'icon_n_bands.png', 2),
(2, 'Children’s', 'There’s nothin’ better than knowing that you’ve made your child’s day, is there? Well… why not make their year (or even their childhood) by throwing a party they’ll never forget with these “rock-your-socks-off” entertainers.', '2013-09-21 13:17:41', 'icon_n_childrens.png', 2),
(3, 'Circus', 'Step right up to see the amazing contortionist! Or how about the death-defying trapeze artist? They’re all jaw-dropping, and these performers will dazzle you with three rings of fun.', '2013-09-21 13:18:08', 'icon_n_circusentertainment.png', 2),
(4, 'Classical', 'Dear sir or madam… if you want live classical music at your event, you’ve got class. You know the difference between “real” music and that stuff those hooligans are listening to nowadays.', '2013-09-21 13:18:31', 'icon_n_classical.png', 2),
(5, 'Comedy', 'Laughter is the best medicine. So is giggling, chuckling, guffawing, and even the occasional snorting.', '2013-09-21 13:18:54', 'icon_n_comedy.png', 2),
(6, 'Dance', 'You may know how to get jiggy with it, bust out a mean cha-cha slide or even do the robot. Even so, you might want to check out these professional dancers to light up your event.', '2013-09-21 13:19:22', 'icon_n_dance.png', 2),
(7, 'DJs', 'For a fresh spin on any party, book a DJ to drop beats and get your guests out of their seats and onto the dance floor.', '2013-09-21 13:21:36', 'icon_n_djs.png', 2),
(8, 'Impersonators', '“Thank you… thank you very much.” “Happy birthday, Mr. President.” “Hasta la vista, baby.” Yes… Elvis, Marilyn, and Ah-nold are just waiting to drop these lines at your next event.', '2013-09-21 13:21:34', 'icon_n_impersonators.png', 2),
(9, '  magicians Magicians', 'What happens when magicians do their thing? Bunnies start poppin’ outta hats, coins miraculously appear behind peoples’ ears, and good-lookin’ ladies get… sawed in half.', '2013-09-21 13:21:58', 'icon_n_magicians.png', 2),
(10, 'Models & Actors', 'Need to add pizazz to your photo or film shoot? Look no further than these talented (and most likely good-lookin’) actors and models. They’ll be sure to make your production shine like the Hollywood sun.', '2013-09-21 13:22:23', 'icon_n_models_actors.png', 2),
(11, 'Musicians', 'Check out our talented solo musicians to bring the perfect touch of intimacy to your event. From accordions to ukuleles, from bagpipes to violins… you can find ‘em all here!', '2013-09-21 13:22:47', 'icon_n_musicians.png', 2),
(12, 'Singers', 'Tell us what your ears are craving… Crooners? Soul sistas? Operatic divas? Down-home country boys? Just take your pick. We got ‘em all…', '2013-09-21 13:23:08', 'icon_n_singers.png', 2),
(13, 'Speakers', 'Raise your hand if you’ve ever fallen asleep during a boring lecture or presentation. Keep your guests bright-eyed by hiring one of these dynamic speakers that are bound to educate, motivate, and engage!', '2013-09-21 13:23:32', 'icon_n_speakers.png', 2),
(14, 'Specialty Entertainment', 'Right now you might be thinking: what’s so “special” about these performers? If you’re looking for something memorable that’s unique and perhaps even off-the-beaten-path… sneak a peek at some of these acts.', '2013-09-21 13:23:55', 'icon_n_specialty.png', 2),
(15, 'Tribute Bands', 'Give yourself and your guests a front row seat to the next best thing. From ABBA to The Stones, Beatles to The Rat Pack… we’ve got you covered. Start warming up those pipes, because you’re gonna want to sing along.', '2013-09-21 13:24:18', 'icon_n_tributes.png', 2),
(16, ' World & Cultural', 'Ordering Chinese take-out doesn’t qualify you as “cultured.” Hire one of our fabulous internationally-inspired acts and show your guests your cultural side.', '2013-09-21 13:33:43', 'icon_n_world.png', 2),
(17, 'Most Popular', 'Not to say that it’s a popularity contest amongst our hundreds of browsable categories, but these services are the frequent go-to’s when it comes to getting your party started.', '2013-09-21 13:27:20', 'icon_v_professionalservices.png', 3),
(18, 'Wedding Services', 'Unique invitations. Beautiful bouquets. Delicious catered meals and moist, fluffy cake. Amazing wedding singers and reception band. Perfectly captured photos of your big day. No need to thank us… just enjoy your special day.', '2013-09-21 13:28:17', 'icon_e_wedding.png', 3),
(19, 'Beauty & Apparel', 'Get ready to hear some of ultra-classy pickup lines, and maybe a whistle or two, because these services are all about making you look good.', '2013-09-21 13:28:44', 'icon_v_beautyattire.png', 3),
(20, 'Flowers & Decor', 'Take a looksie at these talented florists and decorators. They’ll get you hooked up with some beautiful (and smelly-good) decorations for your event.', '2013-09-21 13:29:31', 'icon_v_flowers.png', 3),
(21, 'Food & Beverage', 'A big juicy steak… Ice-cold drinks… Melt-in-your mouth chocolate cake… Check out these pros to see how they can make your event delicioso!', '2013-09-21 13:30:25', 'icon_v_foodbeverage.png', 3),
(22, 'Outdoor Parties', 'Great weather + cool activities + your peeps = a rip-roarin’ good time! Let these outdoor event specialists help you put together a perfect day of fun in the sun!', '2013-09-21 13:30:55', 'icon_v_outdoor_parties.png', 3),
(23, 'Photo & Video', '“Say cheeeese!” Now put that Polaroid away… it won’t do for this event. Call on these pros to capture great moments at your party or photo session, complete with smiles, laughs, and goofy faces.', '2013-09-21 13:31:22', 'icon_v_photo.png', 3),
(24, 'Production Services', 'Need flames shooting from the stage, state-of-the-art sound, an elaborate set, or a spotlight? Give your audience’s eyes and ears a treat with these behind the scenes pros.', '2013-09-21 13:33:29', 'icon_v_production.png', 3),
(25, 'Professional Services', 'Whew… all this party-plannin’ stuff can be a handful, can’t it? It’s pretty impossible for you to do everything on your own. Let these pros take some of the weight off your shoulders. They know how to get your party started.', '2013-09-21 13:32:16', 'icon_e_community.png', 3),
(26, '  rentals and supplies Rentals & Supplies', 'You can’t expect guests to show up to your event without sending ‘em some sweet invites, and you can’t have a dinner party without tables. Hire pros to work out the logistics so you can let the good times roll.', '2013-09-21 13:34:02', 'icon_v_rentals.png', 3),
(27, 'Transportation Services', 'Not excited about squeaking up to your event in the rusty ol’ ‘69 El Camino? Just leave it in the garage and let these transportation pros help you arrive to your event in style.', '2013-09-21 13:34:31', 'icon_v_transportation.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subskill`
--

CREATE TABLE IF NOT EXISTS `subskill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category_name` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `descp` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `indexstatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `subskill`
--

INSERT INTO `subskill` (`id`, `sub_category_name`, `category_id`, `descp`, `date`, `indexstatus`) VALUES
(1, 'Blues Bands', 1, 'With over 80 different genres of bands and musical groups to choose from, it’s nearly impossible to leave without finding a band that you and your guests will wanna jam to.', '2013-09-21 14:41:27', 1),
(2, 'Country Bands', 1, 'With over 80 different genres of bands and musical groups to choose from, it’s nearly impossible to leave without finding a band that you and your guests will wanna jam to.', '2013-09-21 14:06:59', 0),
(3, 'Cover Bands', 1, 'With over 80 different genres of bands and musical groups to choose from, it’s nearly impossible to leave without finding a band that you and your guests will wanna jam to.', '2013-09-21 14:07:46', 0),
(4, 'Christian Bands', 1, 'With over 80 different genres of bands and musical groups to choose from, it’s nearly impossible to leave without finding a band that you and your guests will wanna jam to.', '2013-09-21 14:08:11', 0),
(5, 'Folk Bands', 1, 'With over 80 different genres of bands and musical groups to choose from, it’s nearly impossible to leave without finding a band that you and your guests will wanna jam to.', '2013-09-21 14:08:43', 0),
(6, 'Animal Acts', 2, 'There’s nothin’ better than knowing that you’ve made your child’s day, is there? Well… why not make their year (or even their childhood) by throwing a party they’ll never forget with these “rock-your-socks-off” entertainers.', '2013-09-21 14:09:31', 0),
(7, 'Balloon Artists', 2, 'There’s nothin’ better than knowing that you’ve made your child’s day, is there? Well… why not make their year (or even their childhood) by throwing a party they’ll never forget with these “rock-your-socks-off” entertainers.', '2013-09-21 14:09:53', 0),
(8, 'Caricaturist', 2, 'There’s nothin’ better than knowing that you’ve made your child’s day, is there? Well… why not make their year (or even their childhood) by throwing a party they’ll never forget with these “rock-your-socks-off” entertainers.', '2013-09-21 14:10:17', 0),
(9, 'Characters', 2, 'There’s nothin’ better than knowing that you’ve made your child’s day, is there? Well… why not make their year (or even their childhood) by throwing a party they’ll never forget with these “rock-your-socks-off” entertainers.', '2013-09-21 14:10:42', 0),
(10, 'Children''s Music', 2, 'There’s nothin’ better than knowing that you’ve made your child’s day, is there? Well… why not make their year (or even their childhood) by throwing a party they’ll never forget with these “rock-your-socks-off” entertainers.', '2013-09-21 14:11:06', 0),
(11, 'Acrobats', 3, 'Step right up to see the amazing contortionist! Or how about the death-defying trapeze artist? They’re all jaw-dropping, and these performers will dazzle you with three rings of fun.', '2013-09-21 14:11:32', 0),
(12, 'Aerialists', 3, 'Step right up to see the amazing contortionist! Or how about the death-defying trapeze artist? They’re all jaw-dropping, and these performers will dazzle you with three rings of fun.', '2013-09-21 14:11:57', 0),
(13, 'Balloon Twisters', 3, 'Step right up to see the amazing contortionist! Or how about the death-defying trapeze artist? They’re all jaw-dropping, and these performers will dazzle you with three rings of fun.', '2013-09-21 14:41:27', 1),
(14, 'Clowns', 3, 'Step right up to see the amazing contortionist! Or how about the death-defying trapeze artist? They’re all jaw-dropping, and these performers will dazzle you with three rings of fun.', '2013-09-21 14:41:27', 1),
(15, 'Contortionists', 3, 'Step right up to see the amazing contortionist! Or how about the death-defying trapeze artist? They’re all jaw-dropping, and these performers will dazzle you with three rings of fun.', '2013-09-21 14:13:11', 0),
(16, 'Classical Guitarists', 4, 'Dear sir or madam… if you want live classical music at your event, you’ve got class. You know the difference between “real” music and that stuff those hooligans are listening to nowadays.', '2013-09-21 14:13:41', 0),
(17, 'Classical Pianists', 4, 'Dear sir or madam… if you want live classical music at your event, you’ve got class. You know the difference between “real” music and that stuff those hooligans are listening to nowadays.', '2013-09-21 14:14:06', 0),
(18, 'Ensembles', 4, 'Dear sir or madam… if you want live classical music at your event, you’ve got class. You know the difference between “real” music and that stuff those hooligans are listening to nowadays.', '2013-09-21 14:14:38', 0),
(19, 'Flutist', 4, 'Dear sir or madam… if you want live classical music at your event, you’ve got class. You know the difference between “real” music and that stuff those hooligans are listening to nowadays.', '2013-09-21 14:15:01', 0),
(20, 'Handbell Choirs', 4, 'Dear sir or madam… if you want live classical music at your event, you’ve got class. You know the difference between “real” music and that stuff those hooligans are listening to nowadays.', '2013-09-21 14:15:28', 0),
(21, 'Christian Comedian', 5, 'Laughter is the best medicine. So is giggling, chuckling, guffawing, and even the occasional snorting.', '2013-09-21 14:15:57', 0),
(22, 'Clowns', 5, 'Laughter is the best medicine. So is giggling, chuckling, guffawing, and even the occasional snorting.', '2013-09-21 14:16:26', 0),
(23, 'Comedians', 5, 'Laughter is the best medicine. So is giggling, chuckling, guffawing, and even the occasional snorting.', '2013-09-21 14:41:27', 1),
(24, 'Comedy Improv', 5, 'Laughter is the best medicine. So is giggling, chuckling, guffawing, and even the occasional snorting.', '2013-09-21 14:17:11', 0),
(25, 'Comedy Magicians', 5, 'Laughter is the best medicine. So is giggling, chuckling, guffawing, and even the occasional snorting.', '2013-09-21 14:17:37', 0),
(26, 'African Dance', 6, 'You may know how to get jiggy with it, bust out a mean cha-cha slide or even do the robot. Even so, you might want to check out these professional dancers to light up your event.', '2013-09-21 14:18:03', 0),
(27, 'Ballet Dancer', 6, 'You may know how to get jiggy with it, bust out a mean cha-cha slide or even do the robot. Even so, you might want to check out these professional dancers to light up your event.', '2013-09-21 14:18:27', 0),
(28, 'Ballroom Dancer', 6, 'You may know how to get jiggy with it, bust out a mean cha-cha slide or even do the robot. Even so, you might want to check out these professional dancers to light up your event.', '2013-09-21 14:18:50', 0),
(29, 'Belly Dancer', 6, 'You may know how to get jiggy with it, bust out a mean cha-cha slide or even do the robot. Even so, you might want to check out these professional dancers to light up your event.', '2013-09-21 14:19:15', 0),
(30, 'Break Dancer', 6, 'You may know how to get jiggy with it, bust out a mean cha-cha slide or even do the robot. Even so, you might want to check out these professional dancers to light up your event.', '2013-09-21 14:19:37', 0),
(31, 'Bar Mitzvah DJ', 7, 'For a fresh spin on any party, book a DJ to drop beats and get your guests out of their seats and onto the dance floor.', '2013-09-21 14:20:07', 0),
(32, 'Club DJ', 7, 'For a fresh spin on any party, book a DJ to drop beats and get your guests out of their seats and onto the dance floor.', '2013-09-21 14:20:31', 0),
(33, 'Event DJ', 7, 'For a fresh spin on any party, book a DJ to drop beats and get your guests out of their seats and onto the dance floor.', '2013-09-21 14:20:54', 0),
(34, 'Karaoke DJ', 7, 'For a fresh spin on any party, book a DJ to drop beats and get your guests out of their seats and onto the dance floor.', '2013-09-21 14:21:12', 0),
(35, 'Mobile DJ', 7, 'For a fresh spin on any party, book a DJ to drop beats and get your guests out of their seats and onto the dance floor.', '2013-09-21 14:21:36', 0),
(36, 'Barack Obama', 8, '“Thank you… thank you very much.” “Happy birthday, Mr. President.” “Hasta la vista, baby.” Yes… Elvis, Marilyn, and Ah-nold are just waiting to drop these lines at your next event.', '2013-09-21 14:22:07', 0),
(37, 'Barbra Streisand', 8, '“Thank you… thank you very much.” “Happy birthday, Mr. President.” “Hasta la vista, baby.” Yes… Elvis, Marilyn, and Ah-nold are just waiting to drop these lines at your next event.', '2013-09-21 14:22:26', 0),
(38, 'Cher', 8, '“Thank you… thank you very much.” “Happy birthday, Mr. President.” “Hasta la vista, baby.” Yes… Elvis, Marilyn, and Ah-nold are just waiting to drop these lines at your next event.', '2013-09-21 14:22:44', 0),
(39, 'Elton John', 8, '“Thank you… thank you very much.” “Happy birthday, Mr. President.” “Hasta la vista, baby.” Yes… Elvis, Marilyn, and Ah-nold are just waiting to drop these lines at your next event.', '2013-09-21 14:23:12', 0),
(40, 'Elvis Presley', 8, '“Thank you… thank you very much.” “Happy birthday, Mr. President.” “Hasta la vista, baby.” Yes… Elvis, Marilyn, and Ah-nold are just waiting to drop these lines at your next event.', '2013-09-21 14:23:37', 0),
(41, 'Children''s Magic', 9, 'What happens when magicians do their thing? Bunnies start poppin’ outta hats, coins miraculously appear behind peoples’ ears, and good-lookin’ ladies get… sawed in half.', '2013-09-21 14:24:06', 0),
(42, 'Comedy Magicians', 9, 'What happens when magicians do their thing? Bunnies start poppin’ outta hats, coins miraculously appear behind peoples’ ears, and good-lookin’ ladies get… sawed in half.', '2013-09-21 14:24:28', 0),
(43, 'Corporate Magician', 9, 'What happens when magicians do their thing? Bunnies start poppin’ outta hats, coins miraculously appear behind peoples’ ears, and good-lookin’ ladies get… sawed in half.', '2013-09-21 14:24:51', 0),
(44, 'Escape Artist', 9, 'What happens when magicians do their thing? Bunnies start poppin’ outta hats, coins miraculously appear behind peoples’ ears, and good-lookin’ ladies get… sawed in half.', '2013-09-21 14:25:20', 0),
(45, 'Illusionist', 9, 'What happens when magicians do their thing? Bunnies start poppin’ outta hats, coins miraculously appear behind peoples’ ears, and good-lookin’ ladies get… sawed in half.', '2013-09-21 14:25:47', 0),
(46, 'Actor', 10, 'Need to add pizazz to your photo or film shoot? Look no further than these talented (and most likely good-lookin’) actors and models. They’ll be sure to make your production shine like the Hollywood sun.', '2013-09-21 14:26:21', 0),
(47, 'Actress', 10, 'Need to add pizazz to your photo or film shoot? Look no further than these talented (and most likely good-lookin’) actors and models. They’ll be sure to make your production shine like the Hollywood sun.', '2013-09-21 14:26:40', 0),
(48, 'Child Actor', 10, 'Need to add pizazz to your photo or film shoot? Look no further than these talented (and most likely good-lookin’) actors and models. They’ll be sure to make your production shine like the Hollywood sun.', '2013-09-21 14:41:27', 1),
(49, 'Child Actress', 10, 'Need to add pizazz to your photo or film shoot? Look no further than these talented (and most likely good-lookin’) actors and models. They’ll be sure to make your production shine like the Hollywood sun.', '2013-09-21 14:27:33', 0),
(50, 'Female Model', 10, 'Need to add pizazz to your photo or film shoot? Look no further than these talented (and most likely good-lookin’) actors and models. They’ll be sure to make your production shine like the Hollywood sun.', '2013-09-21 14:27:52', 0),
(51, 'Accordion Players', 11, 'Check out our talented solo musicians to bring the perfect touch of intimacy to your event. From accordions to ukuleles, from bagpipes to violins… you can find ‘em all here!', '2013-09-21 14:28:25', 0),
(52, 'Bagpiper', 11, 'Check out our talented solo musicians to bring the perfect touch of intimacy to your event. From accordions to ukuleles, from bagpipes to violins… you can find ‘em all here!', '2013-09-21 14:41:27', 1),
(53, 'Bass Players', 11, 'Check out our talented solo musicians to bring the perfect touch of intimacy to your event. From accordions to ukuleles, from bagpipes to violins… you can find ‘em all here!', '2013-09-21 14:29:03', 0),
(54, 'Drummers', 11, 'Check out our talented solo musicians to bring the perfect touch of intimacy to your event. From accordions to ukuleles, from bagpipes to violins… you can find ‘em all here!', '2013-09-21 14:29:29', 0),
(55, 'Flutists', 11, 'Check out our talented solo musicians to bring the perfect touch of intimacy to your event. From accordions to ukuleles, from bagpipes to violins… you can find ‘em all here!', '2013-09-21 14:29:55', 0),
(56, 'A Cappella Group', 12, 'Tell us what your ears are craving… Crooners? Soul sistas? Operatic divas? Down-home country boys? Just take your pick. We got ‘em all…', '2013-09-21 14:30:25', 0),
(57, 'Barbershop', 12, 'Tell us what your ears are craving… Crooners? Soul sistas? Operatic divas? Down-home country boys? Just take your pick. We got ‘em all…', '2013-09-21 14:30:44', 0),
(58, 'Choir', 12, 'Tell us what your ears are craving… Crooners? Soul sistas? Operatic divas? Down-home country boys? Just take your pick. We got ‘em all…', '2013-09-21 14:31:05', 0),
(59, 'Crooner', 12, 'Tell us what your ears are craving… Crooners? Soul sistas? Operatic divas? Down-home country boys? Just take your pick. We got ‘em all…', '2013-09-21 14:31:32', 0),
(60, 'Doo Wop', 12, 'Tell us what your ears are craving… Crooners? Soul sistas? Operatic divas? Down-home country boys? Just take your pick. We got ‘em all…', '2013-09-21 14:41:27', 1),
(61, 'Arts / Entertainment ', 13, 'Raise your hand if you’ve ever fallen asleep during a boring lecture or presentation. Keep your guests bright-eyed by hiring one of these dynamic speakers that are bound to educate, motivate, and engage!', '2013-09-21 14:32:25', 0),
(62, 'Athlete / Sports Speaker', 13, 'Raise your hand if you’ve ever fallen asleep during a boring lecture or presentation. Keep your guests bright-eyed by hiring one of these dynamic speakers that are bound to educate, motivate, and engage!', '2013-09-21 14:35:28', 0),
(63, 'Christian Speaker', 13, 'Raise your hand if you’ve ever fallen asleep during a boring lecture or presentation. Keep your guests bright-eyed by hiring one of these dynamic speakers that are bound to educate, motivate, and engage!', '2013-09-21 14:36:42', 0),
(64, 'Environmentalist / Green Speaker', 13, 'Raise your hand if you’ve ever fallen asleep during a boring lecture or presentation. Keep your guests bright-eyed by hiring one of these dynamic speakers that are bound to educate, motivate, and engage!', '2013-09-21 14:37:24', 0),
(65, 'Motivational Speaker', 13, 'Raise your hand if you’ve ever fallen asleep during a boring lecture or presentation. Keep your guests bright-eyed by hiring one of these dynamic speakers that are bound to educate, motivate, and engage!', '2013-09-21 14:37:56', 0),
(66, 'Auctioneers', 14, 'Right now you might be thinking: what’s so “special” about these performers? If you’re looking for something memorable that’s unique and perhaps even off-the-beaten-path… sneak a peek at some of these acts.', '2013-09-21 14:38:31', 0),
(67, 'Animal Shows', 14, 'Right now you might be thinking: what’s so “special” about these performers? If you’re looking for something memorable that’s unique and perhaps even off-the-beaten-path… sneak a peek at some of these acts.', '2013-09-21 14:38:53', 0),
(68, 'Body Painters', 14, 'Right now you might be thinking: what’s so “special” about these performers? If you’re looking for something memorable that’s unique and perhaps even off-the-beaten-path… sneak a peek at some of these acts.', '2013-09-21 14:39:19', 0),
(69, 'Fine Artists', 14, 'Right now you might be thinking: what’s so “special” about these performers? If you’re looking for something memorable that’s unique and perhaps even off-the-beaten-path… sneak a peek at some of these acts.', '2013-09-21 14:39:52', 0),
(70, 'Game Shows', 14, 'Right now you might be thinking: what’s so “special” about these performers? If you’re looking for something memorable that’s unique and perhaps even off-the-beaten-path… sneak a peek at some of these acts.', '2013-09-21 14:40:13', 0),
(71, 'Beach Boys', 15, 'Give yourself and your guests a front row seat to the next best thing. From ABBA to The Stones, Beatles to The Rat Pack… we’ve got you covered. Start warming up those pipes, because you’re gonna want to sing along.', '2013-09-21 15:05:28', 0),
(72, 'Beatles', 15, 'Give yourself and your guests a front row seat to the next best thing. From ABBA to The Stones, Beatles to The Rat Pack… we’ve got you covered. Start warming up those pipes, because you’re gonna want to sing along.', '2013-09-21 15:05:59', 0),
(73, 'Blues Brothers', 15, 'Give yourself and your guests a front row seat to the next best thing. From ABBA to The Stones, Beatles to The Rat Pack… we’ve got you covered. Start warming up those pipes, because you’re gonna want to sing along.', '2013-09-21 15:06:19', 0),
(74, 'Bon Jovi', 15, 'Give yourself and your guests a front row seat to the next best thing. From ABBA to The Stones, Beatles to The Rat Pack… we’ve got you covered. Start warming up those pipes, because you’re gonna want to sing along.', '2013-09-21 15:06:47', 0),
(75, 'Eagles', 15, 'Give yourself and your guests a front row seat to the next best thing. From ABBA to The Stones, Beatles to The Rat Pack… we’ve got you covered. Start warming up those pipes, because you’re gonna want to sing along.', '2013-09-21 15:07:08', 0),
(76, 'African', 16, 'Ordering Chinese take-out doesn’t qualify you as “cultured.” Hire one of our fabulous internationally-inspired acts and show your guests your cultural side.', '2013-09-21 15:07:58', 0),
(77, 'Asian', 16, 'Ordering Chinese take-out doesn’t qualify you as “cultured.” Hire one of our fabulous internationally-inspired acts and show your guests your cultural side.', '2013-09-21 15:08:21', 0),
(78, 'Australian', 16, 'Ordering Chinese take-out doesn’t qualify you as “cultured.” Hire one of our fabulous internationally-inspired acts and show your guests your cultural side.', '2013-09-21 15:08:41', 0),
(79, 'Cajun', 16, 'Ordering Chinese take-out doesn’t qualify you as “cultured.” Hire one of our fabulous internationally-inspired acts and show your guests your cultural side.', '2013-09-21 15:09:01', 0),
(80, 'Calypso', 16, 'Ordering Chinese take-out doesn’t qualify you as “cultured.” Hire one of our fabulous internationally-inspired acts and show your guests your cultural side.', '2013-09-21 15:09:32', 0),
(81, 'Balloon Artists', 17, 'Not to say that it’s a popularity contest amongst our hundreds of browsable categories, but these services are the frequent go-to’s when it comes to getting your party started.', '2013-09-21 15:10:34', 0),
(82, 'Bands', 17, 'Not to say that it’s a popularity contest amongst our hundreds of browsable categories, but these services are the frequent go-to’s when it comes to getting your party started.', '2013-09-21 15:11:09', 0),
(83, 'Bartender', 17, 'Not to say that it’s a popularity contest amongst our hundreds of browsable categories, but these services are the frequent go-to’s when it comes to getting your party started.', '2013-09-21 15:11:31', 0),
(84, 'Bounce Houses', 17, 'Not to say that it’s a popularity contest amongst our hundreds of browsable categories, but these services are the frequent go-to’s when it comes to getting your party started.', '2013-09-21 15:11:55', 0),
(85, 'Caterers', 17, 'Not to say that it’s a popularity contest amongst our hundreds of browsable categories, but these services are the frequent go-to’s when it comes to getting your party started.', '2013-09-21 15:45:36', 1),
(86, 'Wedding Cakes', 18, 'Unique invitations. Beautiful bouquets. Delicious catered meals and moist, fluffy cake. Amazing wedding singers and reception band. Perfectly captured photos of your big day. No need to thank us… just enjoy your special day.', '2013-09-21 15:12:57', 0),
(87, 'Wedding Dresses', 18, 'Unique invitations. Beautiful bouquets. Delicious catered meals and moist, fluffy cake. Amazing wedding singers and reception band. Perfectly captured photos of your big day. No need to thank us… just enjoy your special day.', '2013-09-21 15:13:34', 0),
(88, 'Entertainment', 18, 'Unique invitations. Beautiful bouquets. Delicious catered meals and moist, fluffy cake. Amazing wedding singers and reception band. Perfectly captured photos of your big day. No need to thank us… just enjoy your special day.', '2013-09-21 15:45:36', 1),
(89, 'Wedding Favors', 18, 'Unique invitations. Beautiful bouquets. Delicious catered meals and moist, fluffy cake. Amazing wedding singers and reception band. Perfectly captured photos of your big day. No need to thank us… just enjoy your special day.', '2013-09-21 15:14:17', 0),
(90, 'Wedding Florists', 18, 'Unique invitations. Beautiful bouquets. Delicious catered meals and moist, fluffy cake. Amazing wedding singers and reception band. Perfectly captured photos of your big day. No need to thank us… just enjoy your special day.', '2013-09-21 15:14:50', 0),
(91, 'Costumes', 19, 'Get ready to hear some of ultra-classy pickup lines, and maybe a whistle or two, because these services are all about making you look good.', '2013-09-21 15:15:20', 0),
(92, 'Gowns & Dresses', 19, 'Get ready to hear some of ultra-classy pickup lines, and maybe a whistle or two, because these services are all about making you look good.', '2013-09-21 15:15:50', 0),
(93, 'Hair Stylists', 19, 'Get ready to hear some of ultra-classy pickup lines, and maybe a whistle or two, because these services are all about making you look good.', '2013-09-21 15:45:36', 1),
(94, 'Makeup Artists', 19, 'Get ready to hear some of ultra-classy pickup lines, and maybe a whistle or two, because these services are all about making you look good.', '2013-09-21 15:16:47', 0),
(95, 'Tuxedos & Suits', 19, 'Get ready to hear some of ultra-classy pickup lines, and maybe a whistle or two, because these services are all about making you look good.', '2013-09-21 15:17:06', 0),
(96, 'Balloon Decor', 20, 'Take a looksie at these talented florists and decorators. They’ll get you hooked up with some beautiful (and smelly-good) decorations for your event.', '2013-09-21 15:17:42', 0),
(97, 'Event Florists', 20, 'Take a looksie at these talented florists and decorators. They’ll get you hooked up with some beautiful (and smelly-good) decorations for your event.', '2013-09-21 15:18:03', 0),
(98, 'Party Decor', 20, 'Take a looksie at these talented florists and decorators. They’ll get you hooked up with some beautiful (and smelly-good) decorations for your event.', '2013-09-21 15:45:36', 1),
(99, 'Props for Parties', 20, 'Take a looksie at these talented florists and decorators. They’ll get you hooked up with some beautiful (and smelly-good) decorations for your event.', '2013-09-21 15:18:54', 0),
(100, 'Bartenders', 21, 'A big juicy steak… Ice-cold drinks… Melt-in-your mouth chocolate cake… Check out these pros to see how they can make your event delicioso!', '2013-09-21 15:45:37', 1),
(101, 'Cakes for Parties', 21, 'A big juicy steak… Ice-cold drinks… Melt-in-your mouth chocolate cake… Check out these pros to see how they can make your event delicioso!', '2013-09-21 15:19:51', 0),
(102, 'Caterer', 21, 'A big juicy steak… Ice-cold drinks… Melt-in-your mouth chocolate cake… Check out these pros to see how they can make your event delicioso!', '2013-09-21 15:20:25', 0),
(103, 'Concessions', 21, 'A big juicy steak… Ice-cold drinks… Melt-in-your mouth chocolate cake… Check out these pros to see how they can make your event delicioso!', '2013-09-21 15:20:44', 0),
(104, 'Flair Bartenders', 21, 'A big juicy steak… Ice-cold drinks… Melt-in-your mouth chocolate cake… Check out these pros to see how they can make your event delicioso!', '2013-09-21 15:21:22', 0),
(105, 'Bounce Houses', 22, 'Great weather + cool activities + your peeps = a rip-roarin’ good time! Let these outdoor event specialists help you put together a perfect day of fun in the sun!', '2013-09-21 15:21:49', 0),
(106, 'Carnival Games', 22, 'Great weather + cool activities + your peeps = a rip-roarin’ good time! Let these outdoor event specialists help you put together a perfect day of fun in the sun!', '2013-09-21 15:45:37', 1),
(107, 'Carnival Rides', 22, 'Great weather + cool activities + your peeps = a rip-roarin’ good time! Let these outdoor event specialists help you put together a perfect day of fun in the sun!', '2013-09-21 15:22:45', 0),
(108, 'Outdoor Movies', 22, 'Great weather + cool activities + your peeps = a rip-roarin’ good time! Let these outdoor event specialists help you put together a perfect day of fun in the sun!', '2013-09-21 15:23:16', 0),
(109, 'Petting Zoos', 22, 'Great weather + cool activities + your peeps = a rip-roarin’ good time! Let these outdoor event specialists help you put together a perfect day of fun in the sun!', '2013-09-21 15:23:51', 0),
(110, 'Event Photographers', 23, '“Say cheeeese!” Now put that Polaroid away… it won’t do for this event. Call on these pros to capture great moments at your party or photo session, complete with smiles, laughs, and goofy faces.', '2013-09-21 15:24:30', 0),
(111, 'Headshots', 23, '“Say cheeeese!” Now put that Polaroid away… it won’t do for this event. Call on these pros to capture great moments at your party or photo session, complete with smiles, laughs, and goofy faces.', '2013-09-21 15:24:51', 0),
(112, 'Photo Booths', 23, '“Say cheeeese!” Now put that Polaroid away… it won’t do for this event. Call on these pros to capture great moments at your party or photo session, complete with smiles, laughs, and goofy faces.', '2013-09-21 15:25:12', 0),
(113, 'Portrait Photographers', 23, '“Say cheeeese!” Now put that Polaroid away… it won’t do for this event. Call on these pros to capture great moments at your party or photo session, complete with smiles, laughs, and goofy faces.', '2013-09-21 15:25:45', 0),
(114, 'Wedding Photographer', 23, '“Say cheeeese!” Now put that Polaroid away… it won’t do for this event. Call on these pros to capture great moments at your party or photo session, complete with smiles, laughs, and goofy faces.', '2013-09-21 15:26:20', 0),
(115, 'Laser Shows', 24, 'Need flames shooting from the stage, state-of-the-art sound, an elaborate set, or a spotlight? Give your audience’s eyes and ears a treat with these behind the scenes pros.', '2013-09-21 15:26:58', 0),
(116, 'Lighting', 24, 'Need flames shooting from the stage, state-of-the-art sound, an elaborate set, or a spotlight? Give your audience’s eyes and ears a treat with these behind the scenes pros.', '2013-09-21 15:27:20', 0),
(117, 'Pyrotechnics', 24, 'Need flames shooting from the stage, state-of-the-art sound, an elaborate set, or a spotlight? Give your audience’s eyes and ears a treat with these behind the scenes pros.', '2013-09-21 15:27:50', 0),
(118, 'Set Designers', 24, 'Need flames shooting from the stage, state-of-the-art sound, an elaborate set, or a spotlight? Give your audience’s eyes and ears a treat with these behind the scenes pros.', '2013-09-21 15:28:13', 0),
(119, 'Sound Technicians', 24, 'Need flames shooting from the stage, state-of-the-art sound, an elaborate set, or a spotlight? Give your audience’s eyes and ears a treat with these behind the scenes pros.', '2013-09-21 15:28:45', 0),
(120, 'Airbrush Artists', 25, 'Whew… all this party-plannin’ stuff can be a handful, can’t it? It’s pretty impossible for you to do everything on your own. Let these pros take some of the weight off your shoulders. They know how to get your party started.', '2013-09-21 15:29:15', 0),
(121, 'Auctioneers', 25, 'Whew… all this party-plannin’ stuff can be a handful, can’t it? It’s pretty impossible for you to do everything on your own. Let these pros take some of the weight off your shoulders. They know how to get your party started.', '2013-09-21 15:29:40', 0),
(122, 'Body Painters', 25, 'Whew… all this party-plannin’ stuff can be a handful, can’t it? It’s pretty impossible for you to do everything on your own. Let these pros take some of the weight off your shoulders. They know how to get your party started.', '2013-09-21 15:30:09', 0),
(123, 'Dance Instructors', 25, 'Whew… all this party-plannin’ stuff can be a handful, can’t it? It’s pretty impossible for you to do everything on your own. Let these pros take some of the weight off your shoulders. They know how to get your party started.', '2013-09-21 15:30:32', 0),
(124, 'Event Planners', 25, 'Whew… all this party-plannin’ stuff can be a handful, can’t it? It’s pretty impossible for you to do everything on your own. Let these pros take some of the weight off your shoulders. They know how to get your party started.', '2013-09-21 15:31:04', 0),
(125, 'Costumes', 26, 'You can’t expect guests to show up to your event without sending ‘em some sweet invites, and you can’t have a dinner party without tables. Hire pros to work out the logistics so you can let the good times roll.', '2013-09-21 15:31:43', 0),
(126, 'Casino Games', 26, 'You can’t expect guests to show up to your event without sending ‘em some sweet invites, and you can’t have a dinner party without tables. Hire pros to work out the logistics so you can let the good times roll.', '2013-09-21 15:32:05', 0),
(127, 'Invitations', 26, 'You can’t expect guests to show up to your event without sending ‘em some sweet invites, and you can’t have a dinner party without tables. Hire pros to work out the logistics so you can let the good times roll.', '2013-09-21 15:32:25', 0),
(128, 'Linens/Chair Covers', 26, 'You can’t expect guests to show up to your event without sending ‘em some sweet invites, and you can’t have a dinner party without tables. Hire pros to work out the logistics so you can let the good times roll.', '2013-09-21 15:32:49', 0),
(129, 'Event Furnishings', 26, 'You can’t expect guests to show up to your event without sending ‘em some sweet invites, and you can’t have a dinner party without tables. Hire pros to work out the logistics so you can let the good times roll.', '2013-09-21 15:33:20', 0),
(130, 'Chauffeurs', 27, 'Not excited about squeaking up to your event in the rusty ol’ ‘69 El Camino? Just leave it in the garage and let these transportation pros help you arrive to your event in style.', '2013-09-21 15:34:04', 0),
(131, 'Horse Drawn Carriage', 27, 'Not excited about squeaking up to your event in the rusty ol’ ‘69 El Camino? Just leave it in the garage and let these transportation pros help you arrive to your event in style.', '2013-09-21 15:34:24', 0),
(132, 'Limo Services', 27, 'Not excited about squeaking up to your event in the rusty ol’ ‘69 El Camino? Just leave it in the garage and let these transportation pros help you arrive to your event in style.', '2013-09-21 15:34:48', 0),
(133, 'Party Buses', 27, 'Not excited about squeaking up to your event in the rusty ol’ ‘69 El Camino? Just leave it in the garage and let these transportation pros help you arrive to your event in style.', '2013-09-21 15:35:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `priority` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`slno`, `name`, `priority`, `image`) VALUES
(1, 'Live music', 5, 'livemusic.jpeg'),
(2, 'Entertainment', 2, 'entertainment.jpeg'),
(3, 'Event Services', 3, 'eventservice.jpeg'),
(4, 'Speakers', 4, 'speakers.jpeg'),
(6, 'Party Ideas', 6, 'entertainment.jpeg');
