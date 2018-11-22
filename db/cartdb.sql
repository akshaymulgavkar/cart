-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2018 at 01:37 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `cartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--
create database cartdb;
   use cartdb;
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `created`) VALUES
(1, 'home applicances', 'tv', '2018-10-19 06:47:14'),
(2, 'cloths', 'cloths', '2018-10-19 07:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(20) NOT NULL,
  `size` varchar(100) NOT NULL,
  `disc` varchar(200) NOT NULL,
  `stock` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `size`, `disc`, `stock`, `category`, `created`) VALUES
(1, 'product1', 100, '', 'm', 'dedejdjede dejdejdejdejd', 'avai', 'Cloths', '2018-10-19 06:44:05'),
(2, 'plpll', 48448, '', 'm', 'jasajsansjan', 'mmm', 'Electronics', '2018-10-19 10:12:10'),
(3, 'sggfgfgffgf', 48448, '', 'm', 'jasajsansjan', 'avai', 'Cloths', '2018-10-19 10:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `hno` varchar(10) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `fax` bigint(20) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `hno`, `street`, `city`, `state`, `zipcode`, `country`, `telephone`, `fax`, `password`, `created`) VALUES
(2, 'admin', 'admin', 'Male', 'admin@cart.com', '', 'yhyh', 'yhyh', '8xsxs', '8484', 'xsxsx', 4844, 1, '202cb962ac59075b964b07152d234b70', '2018-10-19 05:59:23'),
(3, 'user1', '1', 'Female', 'user1@cart.com', '213', 'street', 'caity', '1dsdcs', '123456', 'coutrhthr', 92832932, 213, '202cb962ac59075b964b07152d234b70', '2018-10-19 06:57:50');
COMMIT;
