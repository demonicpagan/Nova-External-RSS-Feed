-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2010 at 01:34 PM
-- Server version: 5.0.77
-- PHP Version: 5.3.2-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nova`
--

-- --------------------------------------------------------

--
-- Table structure for table `nova_rss`
--

CREATE TABLE IF NOT EXISTS `nova_rss` (
  `rss_id` int(5) NOT NULL auto_increment,
  `rss_key` varchar(100) default '',
  `rss_value` text,
  PRIMARY KEY  (`rss_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `nova_rss`
--

INSERT INTO `nova_rss` (`rss_id`, `rss_key`, `rss_value`) VALUES
(1, 'rss_url', 'http://<yoursite>/feed'),
(2, 'rss_limit', '15'),
(3, 'rss_site_url', 'http://<yoursite>');
