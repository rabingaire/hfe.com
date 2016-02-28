-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2016 at 12:32 PM
-- Server version: 10.0.23-MariaDB
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rabingai_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `type` enum('Paypal','Visa') NOT NULL,
  `accountnumber` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `event_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `fullname`, `type`, `accountnumber`, `amount`, `event_id`, `date`) VALUES
(4, 'Rabin', 'Paypal', '1234', 5000, 47, '2015-09-05 09:08:57'),
(5, 'Asmita', 'Paypal', '123', 102, 47, '2015-09-05 09:09:22'),
(6, 'Rick', 'Paypal', '1234', 120, 48, '2015-09-05 09:33:44'),
(7, 'Montey', 'Paypal', '6757', 100, 50, '2015-09-05 09:34:11'),
(8, 'Milan', 'Visa', '123', 100, 47, '2015-11-22 09:16:00'),
(9, 'Rabin Gaire', 'Paypal', '1234', 11111, 48, '2015-12-10 10:09:40'),
(10, 'rabin', 'Paypal', 'qwe', 111, 48, '2015-12-10 10:10:25'),
(11, 'Rabin', 'Paypal', '123', 100, 48, '2015-12-19 21:12:52'),
(12, 'Nishant Subedi', 'Paypal', '2646254565216', 50000, 47, '2015-12-24 04:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_desc` varchar(10000) NOT NULL,
  `date` datetime NOT NULL,
  `nod` datetime NOT NULL,
  `hit` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_desc`, `date`, `nod`, `hit`) VALUES
(47, 'Nepal Earthquake', 'A Massive Earthquake of 7.8 magnitude hit Nepal on April 2015 killing more then 9000 people many are still homeless please help them to start a new life.Thanks', '2015-12-07 22:32:47', '2016-01-06 22:32:47', 126),
(48, 'Hurricane in Mexico', 'An estimated 10,000 families in Mexico have been affected by Hurricane Marie many more are homeless please help them.', '2015-12-07 22:32:47', '2016-01-06 22:32:47', 160),
(50, 'Gujarat flood', ' Gujarat state of India was affected by the flood in June 2015.The flood resulted in at least 80 deaths.Living behind more then 3000 people homeless help them to start a new life.', '2015-12-07 22:32:47', '2016-01-06 22:32:47', 116),
(51, 'sdjgfsdyfg', 'hgdhcsdc', '2015-12-19 21:14:46', '2016-01-18 21:14:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_photo`
--

CREATE TABLE IF NOT EXISTS `event_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` varchar(100) NOT NULL,
  `photo_thumb` varchar(100) NOT NULL,
  `photo_large` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `event_photo`
--

INSERT INTO `event_photo` (`id`, `event_id`, `photo_thumb`, `photo_large`, `date`) VALUES
(34, '47', '47_thumb.jpg', '47.jpg', '2015-09-05 09:02:21'),
(35, '48', '48_thumb.jpg', '48.jpg', '2015-09-05 09:13:38'),
(37, '50', '50_thumb.jpg', '50.jpg', '2015-09-05 09:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `suscribers`
--

CREATE TABLE IF NOT EXISTS `suscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `suscribers`
--

INSERT INTO `suscribers` (`id`, `email`) VALUES
(17, 'info@nishantsubedi.com'),
(14, 'evernepalsujan@gmail.com'),
(11, 'asmitagaire20@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `date`) VALUES
(1, 'Rabin', '', 'Gaire', 'rabin_gaire', 'programming123', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
