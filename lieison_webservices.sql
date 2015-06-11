-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2015 at 01:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lieison_webservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `id_profile`, `message`, `date`) VALUES
(4, 'roli2015', 'hola%20como%20estan', '2015-06-12 01:12:00'),
(5, 'gerson2015', 'hola%20rolando', '2015-06-12 01:15:00'),
(6, 'roli2015', 'aca%20pues%20tranquilo', '2015-06-12 01:16:00'),
(7, 'roli2015', 'aca%20pues%20tranquilo', '2015-06-12 01:17:00'),
(8, 'roli2015', 'aca%20pues%20tranquilo', '2015-06-12 01:18:00'),
(9, 'roli2015', 'aca pues tranquilo', '2015-06-12 01:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `chat_profile`
--

CREATE TABLE IF NOT EXISTS `chat_profile` (
  `id_profile` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_profile`
--

INSERT INTO `chat_profile` (`id_profile`, `name`, `avatar`) VALUES
('roli2015', 'Rolando Arriaza', ''),
('gerson2015', 'Gerson Aguirre', ''),
('emerson2015', 'Emerson Sanchez', ''),
('maya2015', 'Maya Siliezar', '');

-- --------------------------------------------------------

--
-- Table structure for table `key_values`
--

CREATE TABLE IF NOT EXISTS `key_values` (
  `id_key` int(11) NOT NULL AUTO_INCREMENT,
  `asign` text NOT NULL,
  `key_value` text NOT NULL,
  PRIMARY KEY (`id_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `key_values`
--

INSERT INTO `key_values` (`id_key`, `asign`, `key_value`) VALUES
(1, 'plugin', '99d811c94efdeb8d3f079030d944afa9');

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE IF NOT EXISTS `plugins` (
  `id_plugin` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `version` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id_plugin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `plugins`
--

INSERT INTO `plugins` (`id_plugin`, `name`, `version`, `url`) VALUES
(1, 'prospect', '1.0', 'null');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
