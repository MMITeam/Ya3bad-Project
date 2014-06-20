-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 166.62.8.16
-- Generation Time: Jun 20, 2014 at 04:37 AM
-- Server version: 5.5.33
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `yabad`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `adsfile` text NOT NULL,
  `user` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` VALUES(1, '0', 0, '', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'pennding');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` VALUES(1, 'فلسطيني', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(2, 'عربي  و دولي', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(3, 'رياضة', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(4, 'اقتصاد', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(5, 'علوم وتكنولوجيا', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(6, 'فن و ثقافة', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(7, 'الصحة والبيئة', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(8, 'منوعات', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(9, 'أقلام وآراء', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(10, 'عين على يعبد', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(11, 'الصحافة العبرية', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `category` VALUES(12, 'الأكثر قرائة', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'block');
INSERT INTO `category` VALUES(13, 'اخبار سوريا', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
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

INSERT INTO `ci_sessions` VALUES('2ef111f4d9288a616e6c20f467e7ba47', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735608, '');
INSERT INTO `ci_sessions` VALUES('4b8a3abf60993e846b7b6bd09ee3fb15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735607, 'a:2:{s:9:"user_data";s:0:"";s:2:"id";s:1:"3";}');
INSERT INTO `ci_sessions` VALUES('84f78bc3fba8d6f6bd881f993941adbf', '5.43.219.229', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1403248268, 'a:8:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:8:"username";s:4:"emad";s:9:"validated";b:1;s:4:"type";s:0:"";s:4:"name";s:4:"emad";s:3:"msg";s:25:"Record Updated Succefully";s:9:"error_msg";s:33:"Record did not Deleted Succefully";}');
INSERT INTO `ci_sessions` VALUES('925fab4624e9d6333dd4e1c4def805e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401743105, 'a:5:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:8:"username";s:4:"emad";s:9:"validated";b:1;s:13:"flash:new:msg";s:23:"Record Saved Succefully";}');
INSERT INTO `ci_sessions` VALUES('b59112363cb004bf58f28ee8d483f980', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735605, '');
INSERT INTO `ci_sessions` VALUES('cbb657fb2d1d28a3bee75296360386a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401735607, '');
INSERT INTO `ci_sessions` VALUES('e2d3c27fc0a11e38af0a8a0b4bd41230', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1401737900, 'a:2:{s:9:"user_data";s:0:"";s:2:"id";s:1:"3";}');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `media`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` VALUES(1, 'الرئيسية', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '');
INSERT INTO `menu` VALUES(2, 'فلسطيني', 'home/lists/1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'approved');
INSERT INTO `menu` VALUES(3, 'دولي', 'home/lists/2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `menu` VALUES(4, 'رياضة', 'home/lists/3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `menu` VALUES(5, 'اقتصاد', 'home/lists/4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `menu` VALUES(6, 'علوم وتكنولوجيا', 'home/lists/5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `menu` VALUES(7, 'فن وثقافة', 'home/lists/6', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `menu` VALUES(8, 'الصحة والبيئة', 'home/lists/7', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');
INSERT INTO `menu` VALUES(9, 'منوعات', 'home/lists/8', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shortDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `fullDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `created` text COLLATE utf8_unicode_ci NOT NULL,
  `modified` text COLLATE utf8_unicode_ci NOT NULL,
  `user` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `mainphoto` text COLLATE utf8_unicode_ci NOT NULL,
  `visits` int(11) NOT NULL,
  `pro` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=181 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` VALUES(24, 175, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(25, 176, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(26, 177, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(27, 178, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(28, 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(29, 176, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(30, 178, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(31, 178, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(32, 178, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(33, 177, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');
INSERT INTO `slider` VALUES(34, 177, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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

INSERT INTO `users` VALUES(1, 'emad', '0597720001', 'emad', 'emademad', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);
INSERT INTO `users` VALUES(2, '', '059999', 'oday', 'odayoday', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);
