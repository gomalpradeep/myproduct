-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 03:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_category`
--

CREATE TABLE IF NOT EXISTS `site_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_main_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_slug` varchar(250) NOT NULL,
  `category_title` varchar(250) NOT NULL,
  `category_description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_at` timestamp NOT NULL,
  `category_status` enum('0','1') NOT NULL COMMENT '0-disable,1-enable',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `site_category`
--

INSERT INTO `site_category` (`category_id`, `category_main_id`, `category_name`, `category_slug`, `category_title`, `category_description`, `created_by`, `created_at`, `modified_by`, `modified_at`, `category_status`) VALUES
(1, 0, 'adsf', 'adsf', 'asd', 'dfsd', 1, '2017-04-25 05:18:10', 1, '2017-04-25 01:48:10', '1'),
(4, 0, 'sdf', 'sdf', 'sdf', 'sdf', 1, '2017-04-25 05:34:37', 1, '2017-04-25 02:06:12', '1'),
(5, 1, 'sdfds', 'sdfds', 'sdf', 'dsf', 0, '2017-04-25 10:29:24', 1, '2017-04-25 07:07:02', '1'),
(6, 4, 'sdf sdfsd', 'sdf-sdfsd', 'sdfsd sdf', 'sdfsd', 0, '2017-04-25 10:31:42', 1, '2017-04-25 07:07:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `site_contactus`
--

CREATE TABLE IF NOT EXISTS `site_contactus` (
  `contactus_id` int(11) NOT NULL AUTO_INCREMENT,
  `contactus_name` varchar(250) NOT NULL,
  `contactus_email` varchar(150) NOT NULL,
  `contactus_subject` varchar(250) NOT NULL,
  `contactus_body` text NOT NULL,
  `contactus_status` enum('0','1','2') NOT NULL COMMENT '0- not viewed,1- viewed ,2- replied',
  PRIMARY KEY (`contactus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_email_template`
--

CREATE TABLE IF NOT EXISTS `site_email_template` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_name` varchar(250) NOT NULL,
  `template_subject` varchar(250) NOT NULL,
  `template_contect` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_at` timestamp NOT NULL,
  `template_status` enum('0','1') NOT NULL COMMENT '0-disable,1-enable',
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_enquiry`
--

CREATE TABLE IF NOT EXISTS `site_enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_name` varchar(250) NOT NULL,
  `enquiry_email` varchar(250) NOT NULL,
  `enquiry_phone` varchar(15) NOT NULL,
  `enquiry_message` text NOT NULL,
  `enquiry_product_id` varchar(20) NOT NULL,
  `enquiry_product_name` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enquiry_status` enum('0','1','2') NOT NULL COMMENT '0-not viewed,1-viewed ,2-replied',
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_page`
--

CREATE TABLE IF NOT EXISTS `site_page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(250) NOT NULL,
  `page_title` varchar(250) NOT NULL,
  `page_slug` varchar(250) NOT NULL,
  `page_content` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `page_status` enum('0','1') NOT NULL COMMENT '0-disable. 1- enable',
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `site_page`
--

INSERT INTO `site_page` (`page_id`, `page_name`, `page_title`, `page_slug`, `page_content`, `created_by`, `created_at`, `modified_by`, `modified_at`, `page_status`) VALUES
(2, 'cont', 'sdf', 'cont', ' sdf', 1, '2017-04-25 15:49:55', 0, '2017-04-25 17:49:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `site_product`
--

CREATE TABLE IF NOT EXISTS `site_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(500) NOT NULL,
  `product_slug` varchar(500) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` text NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_subtitle` varchar(500) NOT NULL,
  `product_specification` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `product_viewed` int(11) NOT NULL,
  `product_status` enum('0','1','2') NOT NULL COMMENT '0-disable ,1- enable. 2- soldout',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_product`
--

INSERT INTO `site_product` (`product_id`, `product_name`, `product_slug`, `product_category_id`, `product_description`, `product_image`, `product_price`, `product_quantity`, `product_subtitle`, `product_specification`, `created_by`, `created_at`, `modified_by`, `modified_at`, `product_viewed`, `product_status`) VALUES
(1, 'asd', 'asd', 1, 'sd', '17TH_BHARATIYAR.jpg', '45', 34, 's', 'sd', 1, '0000-00-00 00:00:00', 1, '2017-04-25 17:31:33', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(250) NOT NULL,
  `site_phone_1` varchar(20) NOT NULL,
  `site_mobile_1` varchar(13) NOT NULL,
  `site_address` text NOT NULL,
  `site_maintainence_mode` enum('0','1') NOT NULL COMMENT '0- disable,1- enable',
  `site_coderight` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_phone_1`, `site_mobile_1`, `site_address`, `site_maintainence_mode`, `site_coderight`) VALUES
(1, 'my product', '000000000000', '0000000000000', 'fdsf', '1', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` smallint(10) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '_yYOMjI5OibrWt3IaXbHg7y9-oM_M8S8', '$2y$13$uKItSSCleFrWycXQP/8Q7OBm8o8IO72zcPx0PS1Adj1F/gMUtpvya', '', 'gomalpradeep123@gmail.com', 10, 0, 1492951461, 1492951461);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
