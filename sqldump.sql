-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 22, 2015 at 06:17 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `demoStore`
--

CREATE TABLE `demoStore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `round1` varchar(255) NOT NULL,
  `round2` varchar(255) NOT NULL,
  `round3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `entrants`
--

CREATE TABLE `entrants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `entrants`
--

INSERT INTO `entrants` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'carl', 'simpson', 'carl@test.com'),
(3, 'harry', 'rtrtyrty', 'info@apps4.co.uk'),
(5, 'red', 'rogers', 'info@rogers.co.uk'),
(7, 'ted', 'bundy', 'info@bundy.co.uk'),
(9, 'ted', 'bundy', 'info@bundy.co.uk'),
(10, 'carl', 'simpson', 'csimpson.web@gmail.com'),
(11, '', 'simpson', 'carl@test.com'),
(12, 'firstname', 'lastname', 'iam@email.com');
