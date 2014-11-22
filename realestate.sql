-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 05:31 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `property_id` int(10) NOT NULL,
  `booking_from_date` date NOT NULL,
  `booking_to_date` date NOT NULL,
  `booking_status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `property_id`, `booking_from_date`, `booking_to_date`, `booking_status`) VALUES
(3, 1, '2014-10-29', '2014-11-08', 0),
(4, 1, '2014-10-29', '2014-11-08', 0),
(5, 4, '2014-10-29', '2014-11-22', 0),
(6, 5, '2014-12-01', '2014-12-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `maintanance_details`
--

CREATE TABLE IF NOT EXISTS `maintanance_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `property_id` int(10) NOT NULL,
  `maintanance_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `maintanance_details`
--

INSERT INTO `maintanance_details` (`id`, `property_id`, `maintanance_date`) VALUES
(1, 1, '2014-11-18'),
(2, 1, '2014-11-27'),
(4, 3, '2014-11-27'),
(5, 4, '2014-11-01'),
(6, 4, '2014-11-27'),
(7, 4, '2014-12-04'),
(8, 5, '2014-12-01'),
(9, 5, '2014-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE IF NOT EXISTS `property_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `property_image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`id`, `title`, `property_image`, `description`) VALUES
(1, 'fdf', 'a733c-image[1].png', 'gfhgf'),
(3, 'jhghgh', '8aa4b-wp2f12290a.jpg', 'jhgbjh'),
(4, 'property 3', 'b6d20-angle-discs-product.jpg', 'tewohtorereofnedoo'),
(5, 'Propert 10', '32c8b-1376533_538843566204014_1023243074_n.jpg', 'dvdsfdsferfe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
