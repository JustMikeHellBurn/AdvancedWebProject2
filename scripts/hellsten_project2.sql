-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2014 at 11:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hellsten_project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `incidentEvents`
--

CREATE TABLE IF NOT EXISTS `incidentEvents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `incidentID` int(11) NOT NULL,
  `eventDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(40) NOT NULL DEFAULT 'NEW',
  `comment` varchar(10000) DEFAULT NULL,
  `assignedToID` int(11) DEFAULT NULL,
  `changedByID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `incidentID` (`incidentID`),
  KEY `changedByID` (`changedByID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `incidentEvents`
--

INSERT INTO `incidentEvents` (`id`, `incidentID`, `eventDate`, `status`, `comment`, `assignedToID`, `changedByID`) VALUES
(16, 5, '2014-04-14 14:47:41', 'Need Information', 'I need information about aliens.', 2, 1),
(15, 5, '2014-04-14 14:47:10', 'In progress', 'The printer exploded due to a meteor shower. The aliens might be the cause, but still working on plausible solution.', 2, 1),
(14, 5, '2014-04-14 14:46:21', 'Assigned', 'Assigned to user to address printer issue', 2, 1),
(13, 5, '2014-04-14 14:45:32', 'NEW', 'Printers for life', 2, 1),
(12, 5, '2014-04-14 14:44:58', 'NEW', 'Issue created', NULL, 1),
(17, 5, '2014-04-14 14:49:49', 'Resolved', 'I finally figured it out! It was the aliens from Alpha Centauri System God damn James Cameron, and his Na''vi race!', 2, 1),
(18, 6, '2014-04-14 14:50:25', 'NEW', 'Issue created', NULL, 1),
(19, 6, '2014-04-14 14:50:35', 'Closed', 'This issue is closed.', NULL, 1),
(20, 7, '2014-04-14 14:52:05', 'NEW', 'Issue created', NULL, 1),
(21, 7, '2014-04-14 14:52:21', 'Assigned', 'Issue assigned to user.', 2, 1),
(22, 8, '2014-04-14 14:54:06', 'NEW', 'Issue created', NULL, 1),
(23, 8, '2014-04-14 14:54:26', 'Assigned', 'User (aka Justin)', 2, 1),
(24, 8, '2014-04-14 14:55:31', 'In progress', 'Can now prints Fedex Labels', 2, 1),
(25, 8, '2014-04-14 14:56:17', 'Need Information', 'Need docs on Ecommerce Shipping Manager', 2, 1),
(26, 9, '2014-04-14 14:57:05', 'NEW', 'Issue created', NULL, 1),
(27, 10, '2014-04-14 14:57:43', 'NEW', 'Issue created', NULL, 1),
(28, 11, '2014-04-14 15:01:10', 'NEW', 'Issue created', NULL, 1),
(29, 11, '2014-04-14 15:01:30', 'Assigned', 'Giving this to admin because he''s awesome with gradients.', 1, 1),
(30, 11, '2014-04-14 15:02:37', 'In progress', 'Blue gradient semi complete. Just need to make some touches in photo-shop.', 1, 1),
(31, 12, '2014-04-14 15:04:31', 'NEW', 'Issue created', NULL, 1),
(32, 12, '2014-04-14 15:04:49', 'Closed', 'Closed due to negative attitude.', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE IF NOT EXISTS `incidents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `resolution` varchar(10000) DEFAULT NULL,
  `submittedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `priority` int(11) NOT NULL DEFAULT '1',
  `submittedByID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `submittedByID` (`submittedByID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`id`, `title`, `description`, `resolution`, `submittedDate`, `priority`, `submittedByID`) VALUES
(6, 'Test Issue', 'This issue is a test to showcase a closed issue.', 'This issue is closed.', '2014-04-14 14:50:25', 1, 1),
(5, 'My printer stopped working...Please Help me!', 'My printer started to explode...I don''t understand printers!', 'I finally figured it out! It was the aliens from Alpha Centauri System God damn James Cameron, and his Na''vi race!', '2014-04-14 14:44:58', 3, 1),
(7, 'Computer Bug', 'There seems to be a computer bug on my computer. Its making it very hard for me to see my computer screen.', NULL, '2014-04-14 14:52:05', 2, 1),
(8, 'Task - PHP Ecommerce Shipping Manager', 'We require a warehouse shipping manager for Rush Flyers. You can take as long as you like for this project because we are already 10 years behind schedule for their website.', NULL, '2014-04-14 14:54:06', 1, 1),
(9, 'NEW FEATURE', 'The whole site must be responsive ASAP.', NULL, '2014-04-14 14:57:05', 3, 1),
(10, 'NEW FEATURE 2', 'OMG, WE NEED FEATURES.', NULL, '2014-04-14 14:57:43', 3, 1),
(11, 'Create gradient header for checkout pages', 'We need blue gradient header for the checkout pages so we can hopefully stop the mass bounce rate that is occurring in the checkout pages. This will hopefully offset the fact that we have shitty products that people will try to get a refund on.', NULL, '2014-04-14 15:01:10', 2, 1),
(12, 'Starcraft II is dead', 'Nobody plays this game anymore. It''s like completely dead. Everybody is playing stupid League of Losers now. I hate it, I miss the days where people actually needed skill to play video games.', 'Closed due to negative attitude.', '2014-04-14 15:04:31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'admin', 'admin@admin.com', 'demo1234', 'Admin'),
(2, 'user', 'user@user.com', '12345678', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `userTypes`
--

CREATE TABLE IF NOT EXISTS `userTypes` (
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`type`),
  UNIQUE KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userTypes`
--

INSERT INTO `userTypes` (`type`) VALUES
('Admin'),
('User');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
