-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2014 at 09:05 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yabad`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `created`, `modified`, `user`, `status`) VALUES
(36, 'hkhk', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'pennding'),
(37, 'تجربة', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'pennding'),
(38, 'قصثقثصق', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'pennding');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2ef111f4d9288a616e6c20f467e7ba47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735608, ''),
('4b8a3abf60993e846b7b6bd09ee3fb15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735607, 'a:2:{s:9:"user_data";s:0:"";s:2:"id";s:1:"3";}'),
('925fab4624e9d6333dd4e1c4def805e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401743105, 'a:5:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:8:"username";s:4:"emad";s:9:"validated";b:1;s:13:"flash:new:msg";s:23:"Record Saved Succefully";}'),
('b59112363cb004bf58f28ee8d483f980', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735605, ''),
('cbb657fb2d1d28a3bee75296360386a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735607, ''),
('e2d3c27fc0a11e38af0a8a0b4bd41230', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401737900, 'a:2:{s:9:"user_data";s:0:"";s:2:"id";s:1:"3";}');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `news_id`, `path`, `type`, `created`, `modified`, `user`, `status`) VALUES
(0, 0, '1401742960.Hydrangeas.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, ''),
(0, 0, '1401742960.Desert.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, ''),
(0, 0, 'بسيبيسبسيب', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'pennding');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `text`, `link`, `created`, `modified`, `user`, `status`) VALUES
(1, 'الرئيسية', 'http://www.yabod.net', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shortDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `fullDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `mainphoto` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `shortDesc`, `fullDesc`, `created`, `modified`, `user`, `cat_id`, `status`, `mainphoto`) VALUES
(38, 'mahmoud', '<p>cdskcjbdsjf ldsjbf dsl</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 37, 'pennding', 'allllli4.jpg'),
(39, 'gdfgfdgdfg', '<p>gfgfdgdf</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 37, 'pennding', 'allllli5.jpg'),
(40, 'بسببسسبيسب', '<p>بسبيبسسبسيبس</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 37, 'pennding', 'allllli6.jpg'),
(41, 'فثفثف', '<p>فثف54ف5ف54ف</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 37, 'pennding', 'allllli7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_2` (`name`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `password`, `email`, `type`, `created`, `modified`, `status`, `user`) VALUES
(1, 'emad', '0597720001', 'emad', 'emademad', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(2, '', '059999', 'oday', 'odayoday', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
