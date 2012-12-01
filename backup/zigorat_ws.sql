-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2012 at 07:31 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zigoratws`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page` int(10) unsigned NOT NULL DEFAULT '0',
  `text_en` varchar(512) NOT NULL DEFAULT 'no text',
  `text_fa` varchar(512) NOT NULL DEFAULT 'no text',
  `image` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `page`, `text_en`, `text_fa`, `image`) VALUES
(18, 1, 'Coca-Cola (Khoshgovar)\r\nChuckles & Crunchips\r\nCaspian mode commercial complex\r\nQatar airways\r\nPepsi\r\nPadide\r\nIran Khodro\r\nMaskan sazan\r\nCheetoz\r\nPars opal\r\nParsis\r\nYves rocher', 'no text', 'our-custumers.png'),
(19, 2, 'Maskan sazan\r\nCheetoz\r\nPars opal\r\nParsis\r\nYves rocher\r\nCoca-Cola (Khoshgovar)\r\nChuckles & Crunchips\r\nCaspian mode commercial complex\r\nQatar airways\r\nPepsi\r\nPadide\r\nIran Khodro', 'no text', 'our-custumers.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

DROP TABLE IF EXISTS `home_slider`;
CREATE TABLE IF NOT EXISTS `home_slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_fa` varchar(64) NOT NULL DEFAULT '',
  `title_en` varchar(64) NOT NULL DEFAULT '',
  `image` varchar(32) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title_fa`, `title_en`, `image`, `sort`) VALUES
(1, 'عکس شماره ۱', 'Image No 1', 'pic_home.png', 0),
(2, 'عکس شماره ۲', 'Image No 2', 'pic_shop.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `last_project`
--

DROP TABLE IF EXISTS `last_project`;
CREATE TABLE IF NOT EXISTS `last_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `description_en` varchar(256) NOT NULL DEFAULT '',
  `description_fa` varchar(256) NOT NULL DEFAULT '',
  `img1` varchar(32) NOT NULL DEFAULT '',
  `img2` varchar(32) NOT NULL DEFAULT '',
  `img3` varchar(32) NOT NULL DEFAULT '',
  `img4` varchar(32) NOT NULL DEFAULT '',
  `img5` varchar(32) NOT NULL DEFAULT '',
  `img6` varchar(32) NOT NULL DEFAULT '',
  `img7` varchar(32) NOT NULL DEFAULT '',
  `img8` varchar(32) NOT NULL DEFAULT '',
  `img9` varchar(32) NOT NULL DEFAULT '',
  `img10` varchar(32) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `last_project`
--

INSERT INTO `last_project` (`id`, `project_id`, `description_en`, `description_fa`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `sort`) VALUES
(4, 17, 'Parsis Building Co. \r\nmore descr', '', 'pic_small_home.png', 'pic_small_home_1.png', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(64) NOT NULL DEFAULT 'no name',
  `name_fa` varchar(64) NOT NULL DEFAULT 'no name',
  `category` int(10) unsigned NOT NULL DEFAULT '0',
  `description_en` varchar(256) NOT NULL DEFAULT '',
  `description_fa` varchar(256) NOT NULL DEFAULT '',
  `excerpt_en` varchar(128) NOT NULL DEFAULT '',
  `excerpt_fa` varchar(128) NOT NULL DEFAULT '',
  `thumb` varchar(32) NOT NULL DEFAULT '',
  `img1` varchar(32) NOT NULL DEFAULT '',
  `img2` varchar(32) NOT NULL DEFAULT '',
  `img3` varchar(32) NOT NULL DEFAULT '',
  `img4` varchar(32) NOT NULL DEFAULT '',
  `img5` varchar(32) NOT NULL DEFAULT '',
  `img6` varchar(32) NOT NULL DEFAULT '',
  `img7` varchar(32) NOT NULL DEFAULT '',
  `img8` varchar(32) NOT NULL DEFAULT '',
  `img9` varchar(32) NOT NULL DEFAULT '',
  `img10` varchar(32) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name_en`, `name_fa`, `category`, `description_en`, `description_fa`, `excerpt_en`, `excerpt_fa`, `thumb`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `sort`) VALUES
(4, 'No Name 1', 'اسم نداره', 3, 'industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a gal', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'aboozar.png', 'aboozar1.jpg', 'aboozar2.jpg', '', '', '', '', '', '', '', '', 0),
(5, 'No Name 2', 'اسم نداره', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'babak.png', 'babak1.jpg', 'babak2.jpg', 'babak3.jpg', 'babak4.jpg', '', '', '', '', '', '', 0),
(6, 'No Name 1', 'اسم نداره', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'caspian.png', 'caspian1.jpg', 'caspian3.jpg', 'caspian4.jpg', '', '', '', '', '', '', '', 0),
(7, 'No Name 2', 'اسم نداره', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'cheetoz.png', 'cheetoz1.jpg', 'cheetoz2.jpg', 'cheetoz3.jpg', 'cocachuckles', 'cocachuckles', '', '', '', '', '', 0),
(8, 'No Name 1', 'اسم نداره', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'adolfo.png', 'adolofo1.jpg', 'adolofo2.jpg', 'adolofo3.jpg', '', '', '', '', '', '', '', 0),
(9, 'No Name 2', 'اسم نداره', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'boggi.png', 'boggi1.jpg', 'boggi2.jpg', 'boggi3.jpg', 'boggi4.jpg', 'boggi5.jpg', 'boggi6.jpg', 'boggi7.jpg', '', '', '', 0),
(10, 'No Name 3', 'اسم نداره', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'diesel.png', 'Diesel1.jpg', 'Diesel2.jpg', 'Diesel3.jpg', '', '', '', '', '', '', '', 0),
(11, 'No Name 4', 'اسم نداره', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'geox.png', 'geox1.jpg', 'geox2.jpg', 'geox3.jpg', '', '', '', '', '', '', '', 0),
(12, 'No Name 5', 'اسم نداره', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '', 'spring.png', 'Springfield1.jpg', 'Springfield2.jpg', 'Springfield3.jpg', 'Springfield4.jpg', 'Springfield5.jpg', 'Springfield6.jpg', 'Springfield7.jpg', '', '', '', 0),
(13, 'No Name 6', 'اسم نداره', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '', 'ur adipisicing elit, sed do', '', 'flamingo.png', 'flamingo1.jpg', 'flamingo2.jpg', '', '', '', '', '', '', '', '', 0),
(14, 'No Name 7', 'اسم نداره', 2, 'ur adipisicing elit, sed do ur adipisicing elit, sed do ur adipisicing elit, sed do ur adipisicing elit, sed do ur adipisicing elit, sed do ur adipisicing elit, sed do ur adipisicing elit, sed do', '', 'ur adipisicing elit, sed do', '', 'gole-nasrin.png', 'gol1.jpg', 'gol2.jpg', '', '', '', '', '', '', '', '', 0),
(17, 'test', 'تست', 1, '', '', '', '', 'thumb.png', '20.jpg', '', '', '', '', '', '', '', '', '', 0);
