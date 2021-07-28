-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2020 at 04:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellfoodgrains`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
CREATE TABLE IF NOT EXISTS `buyer` (
  `name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `pin` int(255) NOT NULL,
  `famount` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`name`, `state`, `dist`, `pin`, `famount`, `phone`, `email`) VALUES
('Nagesh', 'Uttar Pradesh', 'bhadohi', 221401, 4, '07687896875', 'shivani@gmail.com'),
('hj', 'nmbnmb', 'nhbn', 767567, 67, '7576576', 'f@334'),
('hvghv', 'nvnbv', 'hvnhv', 65, 4, '4674674', 'jj@v'),
('szaxz', 'zss', 'szs', 2222, 22, '222222', 'ss@ww'),
('szaxz', 'zss', 'szs', 2222, 22, '222222', 'ss@ww'),
('vb', 'jgh', 'hjgjh', 6565, 69, '5765757', 's@34'),
('jhkjh', 'hjgjhgb', 'jghjh', 8768767, 67767, '765757', 'gg@34'),
('shivani srivastava', 'Uttar Pradesh', 'bhadohi', 221401, 45, '07687896875', 'shivani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `uid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `add` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uid`, `name`, `email`, `add`, `phone`, `feedback`) VALUES
(1, 'Devanshi Srivastava', 'deva@gmail.com', 'main road', '07687896875', 'nice website');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

DROP TABLE IF EXISTS `merchant`;
CREATE TABLE IF NOT EXISTS `merchant` (
  `name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `pin` int(255) NOT NULL,
  `famount` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aadharnumber` varchar(255) NOT NULL,
  `pamount` int(255) NOT NULL,
  PRIMARY KEY (`aadharnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`name`, `state`, `dist`, `pin`, `famount`, `phone`, `email`, `aadharnumber`, `pamount`) VALUES
('jhj hgj', 'Jharkhand', 'tghtght', 655456456, 4, '7687896875', 'ss@gmail.com', '34354353', 0),
('jhj hgj', 'Jharkhand', 'tghtght', 655456456, 4, '7687896875', 'ss@gmail.com', '34354353676', 0),
('hghg', 'jgjhg', 'yht', 767, 55, '6576575765', 'fff@34', '77878', 0),
('hghg', 'jgjhg', 'yht', 767, 55, '6576575765', 'fff@34', '778786666', 0),
('bvb', 'hghg', 'ghh', 576567, 7, '57675675', 'd@34', '78575676567', 0),
('bvb', 'hghg', 'ghh', 576567, 7, '57675675', 'd@34', '785756765679', 0),
('vgsg', 'ghswh', 'www', 34222, 34, '33233343', 'hh@2', '657567566', 0),
('sss', 'gtgtgtg', 'tthyyt', 56546546, 55, '45656565', 'wwww@34', '2323243', 2750),
('hemant kumar', 'Uttar Pradesh', 'gorakhpur', 221401, 7, '07687896875', 'gg@gmail.com', '76876786786', 140),
('GCG', 'hghg', 'tthyyt', 4343, 45, '65464564654', 'SS@34', '878764354', 450),
('shivani srivastava', 'Uttar Pradesh', 'bhadohi', 221401, 56, '07687896875', 'shivani@gmail.com', '34234243243', 168);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `sid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `pin` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `name`, `State`, `dist`, `pin`, `fname`, `capacity`, `price`, `phone`, `email`, `password`) VALUES
(2, 'Devanshi Srivastava', 'Uttar Pradesh', 'bhadohi', 221401, '', 20, 50, '07687896875', 'deva@gmail.com', ''),
(3, 'Devanshi Srivastava', 'Uttar Pradesh', 'bhadohi', 221401, '', 20, 50, '07687896875', 'deva@gmail.com', ''),
(4, 'hemant kumar bhasker', 'up', 'varanasi', 234567, 'rice', 50, 10, '354354545', 'hemant@gmail.com', 'hemant12'),
(5, 'shivani srivastava', 'Uttar Pradesh', 'bhadohi', 221401, '', 30, 3, '07687896875', 'shivani@gmail.com', 'shivanni'),
(6, 'sss', 'ss', 'tghtght', 4545, '', 45, 5, '545464', 'ss@33', 'ssss'),
(7, 'kkk', 'kkk', 'jjjj', 2324324, '', 45, 6, '24324343', 'aa@33', 'sss'),
(8, 'tgg', 'jhghgh', 'ghh', 6454, '', 45, 23, '455645465', 'ss@22', 'dd'),
(9, 'shivani srivastava', 'Uttar Pradesh', 'gorakhpur', 221401, '', 45, 6, '07687896875', 'shivani@gmail.com', 'SHIVA'),
(10, 'neeraj', 'Uttar Pradesh', 'bhadohi', 88, '221401', 56, 45, '07687896875', 'shivani@gmail.com', 'neeraj'),
(11, 'bbnmbn', 'gbj', 'nbmnbm', 656756, 'hhjgjh', 6565, 6767, '6567575', 'd@56', 'bnbn'),
(12, 'abhi', 'Uttar Pradesh', 'gorakhpur', 221401, 'wheat', 67, 45, '07687896875', 'abhi@gmail.com', 'abhi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
