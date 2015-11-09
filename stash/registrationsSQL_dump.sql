-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 09, 2015 at 05:11 PM
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
  `demoname` varchar(255) NOT NULL,
  `dateTime` varchar(255) NOT NULL,
  `round1` varchar(255) NOT NULL,
  `round2` varchar(255) NOT NULL,
  `round3` varchar(255) NOT NULL,
  `round4` varchar(255) NOT NULL,
  `round5` varchar(255) NOT NULL,
  `round6` varchar(255) NOT NULL,
  `round7` varchar(255) NOT NULL,
  `round8` varchar(255) NOT NULL,
  `round9` varchar(255) NOT NULL,
  `round10` varchar(255) NOT NULL,
  `round11` varchar(255) NOT NULL,
  `round12` varchar(255) NOT NULL,
  `round13` varchar(255) NOT NULL,
  `round14` varchar(255) NOT NULL,
  `round15` varchar(255) NOT NULL,
  `round16` varchar(255) NOT NULL,
  `round17` varchar(255) NOT NULL,
  `round18` varchar(255) NOT NULL,
  `round19` varchar(255) NOT NULL,
  `round20` varchar(255) NOT NULL,
  `round21` varchar(255) NOT NULL,
  `round22` varchar(255) NOT NULL,
  `round23` varchar(255) NOT NULL,
  `round24` varchar(255) NOT NULL,
  `round25` varchar(255) NOT NULL,
  `round26` varchar(255) NOT NULL,
  `round27` varchar(255) NOT NULL,
  `round28` varchar(255) NOT NULL,
  `round29` varchar(255) NOT NULL,
  `round30` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `demoStore`
--

INSERT INTO `demoStore` (`id`, `demoname`, `dateTime`, `round1`, `round2`, `round3`, `round4`, `round5`, `round6`, `round7`, `round8`, `round9`, `round10`, `round11`, `round12`, `round13`, `round14`, `round15`, `round16`, `round17`, `round18`, `round19`, `round20`, `round21`, `round22`, `round23`, `round24`, `round25`, `round26`, `round27`, `round28`, `round29`, `round30`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', 'played well - good pistol', 'need to hang back at banana', 'bought wrong - address this', 'got caught out - bad positioning ', 'ACE!! well played', 'bought awp - need more practice', '3k Famas nice', 'bomb planted MVP earnt', 'stick with teammate in save', 'save round - well played', 'charged in - noob run', 'overun - nothing you can do ', 'watch out for TK - nice shot tho', 'force buy', 'good round - well played', 'Match point', 'Match point', 'Clutch for match win - WP', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data'),
(4, '', '', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data'),
(14, 'team liquid v NiP', '1/1/1 4.50', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'round test data', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset', 'dataset');
