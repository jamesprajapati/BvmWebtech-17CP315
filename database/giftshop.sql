-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2018 at 11:07 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `giftshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `index_no` int(5) NOT NULL AUTO_INCREMENT,
  `barcode` int(12) NOT NULL,
  `productname` varchar(60) NOT NULL,
  `companyname` varchar(65) NOT NULL,
  `itemtype` varchar(25) NOT NULL,
  `productquantity` int(5) NOT NULL,
  `productprise` int(5) NOT NULL,
  PRIMARY KEY (`barcode`),
  UNIQUE KEY `index_no` (`index_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`index_no`, `barcode`, `productname`, `companyname`, `itemtype`, `productquantity`, `productprise`) VALUES
(1, 1234, 'xman', 'marvel', 'gift', 10, 340),
(2, 1254, 'dfs', 'dvb', 'stationary', 2, 123),
(3, 1256, 'xgame', 'xtrem', 'giftitem', 12, 456),
(4, 3214, 'xmex', 'xtrem', 'stationeryitem', 17, 50),
(5, 32144, 'xmex4', 'xtrem12', 'stationeryitem', 17, 50),
(6, 4567, 'xbox', 'playstation', 'giftitem', 20, 5000);
