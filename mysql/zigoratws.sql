-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2012 at 12:52 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parsengws`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `portfolio`
--


-- --------------------------------------------------------

--
-- Table structure for table `sadmin_fields`
--

CREATE TABLE IF NOT EXISTS `sadmin_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `displayname` varchar(200) DEFAULT NULL,
  `table_id` int(11) NOT NULL,
  `input_type` varchar(2) NOT NULL,
  `is_required` varchar(1) DEFAULT NULL,
  `string_rep` varchar(2) DEFAULT NULL,
  `default_state` varchar(12) DEFAULT NULL,
  `value_when_not_checked` varchar(200) DEFAULT NULL,
  `value_when_checked` varchar(200) DEFAULT NULL,
  `select_options` varchar(400) DEFAULT NULL,
  `place_to_store` varchar(200) DEFAULT NULL,
  `allowed_extensions` varchar(200) DEFAULT NULL,
  `datetime_save_format` varchar(100) DEFAULT NULL,
  `foreignkey_table` int(11) DEFAULT NULL,
  `display_on_change_list` varchar(1) DEFAULT NULL,
  `auto_save_timestamp_new` varchar(1) DEFAULT NULL,
  `auto_save_timestamp_update` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sadmin_fields`
--

INSERT INTO `sadmin_fields` (`id`, `name`, `displayname`, `table_id`, `input_type`, `is_required`, `string_rep`, `default_state`, `value_when_not_checked`, `value_when_checked`, `select_options`, `place_to_store`, `allowed_extensions`, `datetime_save_format`, `foreignkey_table`, `display_on_change_list`, `auto_save_timestamp_new`, `auto_save_timestamp_update`) VALUES
(1, 'id', '', 1, 'pk', 'y', '', '', '', '', '', '', '', '', 0, '', '', ''),
(2, 'name_fa', 'Persian Name', 1, 'ti', 'y', 'y', '', '', '', '', '', '', '', 0, 'y', '', ''),
(3, 'name_en', 'English Name', 1, 'ti', 'y', 'y', '', '', '', '', '', '', '', 0, 'y', '', ''),
(4, 'category', 'Category', 1, 'so', 'y', '', '', '', '', '0:Exhibition;1:Office;2:Shopping;3:Home', '', '', '', 0, 'y', '', ''),
(5, 'description_en', 'English Description', 1, 'ta', '', '', '', '', '', '', '', '', '', 0, '', '', ''),
(6, 'description_fa', 'Persian Description', 1, 'ta', '', '', '', '', '', '', '', '', '', 0, '', '', ''),
(7, 'excerpt_en', 'English Excerpt', 1, 'ti', '', '', '', '', '', '', '', '', '', 0, 'y', '', ''),
(8, 'excerpt_fa', 'Persian Excerpt', 1, 'ti', '', '', '', '', '', '', '', '', '', 0, 'y', '', ''),
(9, 'thumb', 'Thumbnail', 1, 'uf', 'y', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(10, 'img1', 'Image 1', 1, 'uf', 'y', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(11, 'img2', 'Image 2', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(12, 'img3', 'Image 3', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(13, 'img4', 'Image 4', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(14, 'img5', 'Image 5', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(15, 'img6', 'Image 6', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(16, 'img7', 'Image 7', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(17, 'img8', 'Image 8', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(18, 'img9', 'Image 9', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(19, 'img10', 'Image 10', 1, 'uf', '', '', '', '', '', '', '/Applications/XAMPP/xamppfiles/htdocs/zigorat/htdocs/images/projects/', 'jpg|jpeg', '', 0, '', '', ''),
(20, 'sort', 'Order', 1, 'ti', '', '', '', '', '', '', '', '', '', 0, 'y', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sadmin_permissions`
--

CREATE TABLE IF NOT EXISTS `sadmin_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `permkey` text NOT NULL,
  `editable` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `sadmin_permissions`
--

INSERT INTO `sadmin_permissions` (`id`, `name`, `permkey`, `editable`) VALUES
(1, 'Can do everything everywhere', 'can_do_everything_everywhere', 'n'),
(2, 'Access Admin Dashboard', 'access_admin_dashboard', 'n'),
(3, 'Can do everything relating to configuration', 'can_do_everything_config', 'n'),
(4, 'Can do everything relating to authentication', 'can_do_everything_auth', 'n'),
(5, 'Can do everything relating to tables', 'can_do_everything_tables', 'n'),
(6, 'Add, Change and Delete table configurations', 'add_change_delete_sadmin_config_table', 'n'),
(7, 'Add table configurations', 'add_sadmin_config_table', 'n'),
(8, 'Change table configurations', 'change_sadmin_config_table', 'n'),
(9, 'Delete table configurations', 'delete_sadmin_config_table', 'n'),
(10, 'Add, Change and Delete field configurations', 'add_change_delete_sadmin_config_field', 'n'),
(11, 'Add field configurations', 'add_sadmin_config_field', 'n'),
(12, 'Change field configurations', 'change_sadmin_config_field', 'n'),
(13, 'Delete field configurations', 'delete_sadmin_config_field', 'n'),
(14, 'Add, Change and Delete users', 'add_change_delete_sadmin_users', 'n'),
(15, 'Add users', 'add_sadmin_users', 'n'),
(16, 'Change users', 'change_sadmin_users', 'n'),
(17, 'Delete users', 'delete_sadmin_users', 'n'),
(18, 'Add, Change and Delete roles', 'add_change_delete_sadmin_roles', 'n'),
(19, 'Add roles', 'add_sadmin_roles', 'n'),
(20, 'Change roles', 'change_sadmin_roles', 'n'),
(21, 'Delete roles', 'delete_sadmin_roles', 'n'),
(22, 'Add, Change and Delete permissions', 'add_change_delete_sadmin_permissions', 'n'),
(23, 'Add permissions', 'add_sadmin_permissions', 'n'),
(24, 'Change permissions', 'change_sadmin_permissions', 'n'),
(25, 'Delete permissions', 'delete_sadmin_permissions', 'n'),
(26, 'Add, Change and Delete portfolio', 'add_change_delete_portfolio', 'n'),
(27, 'Add portfolio', 'add_portfolio', 'n'),
(28, 'Change portfolio', 'change_portfolio', 'n'),
(29, 'Delete portfolio', 'delete_portfolio', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `sadmin_roles`
--

CREATE TABLE IF NOT EXISTS `sadmin_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `homepage` varchar(200) DEFAULT NULL,
  `editable` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sadmin_roles`
--

INSERT INTO `sadmin_roles` (`id`, `name`, `homepage`, `editable`) VALUES
(1, 'Super Admin', '', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `sadmin_roles_permissions`
--

CREATE TABLE IF NOT EXISTS `sadmin_roles_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sadmin_roles_permissions`
--

INSERT INTO `sadmin_roles_permissions` (`id`, `role_id`, `permission_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sadmin_tables`
--

CREATE TABLE IF NOT EXISTS `sadmin_tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `displayname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sadmin_tables`
--

INSERT INTO `sadmin_tables` (`id`, `name`, `displayname`) VALUES
(1, 'portfolio', 'Projects');

-- --------------------------------------------------------

--
-- Table structure for table `sadmin_users`
--

CREATE TABLE IF NOT EXISTS `sadmin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role_id` int(11) NOT NULL,
  `dateadded` bigint(20) NOT NULL,
  `lastlogin` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sadmin_users`
--

INSERT INTO `sadmin_users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `role_id`, `dateadded`, `lastlogin`) VALUES
(1, '', '', 'Ali.MD', 'i@ali.md', 'b22218c46b3f141664f4d37c853b95fa', 1, 1353160202, 1353160250);
