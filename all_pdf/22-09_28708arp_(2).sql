-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 02:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arp`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_option`
--

CREATE TABLE IF NOT EXISTS `add_option` (
`id` int(100) NOT NULL,
  `product_unique_id` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` varchar(1000) NOT NULL,
  `final_status` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(100) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `unique_id`, `category`, `is_del`) VALUES
(1, 'Fruits_15776', 'Fruits', 'no'),
(2, 'Vegetables_20805', 'Vegetables', 'no'),
(3, 'Cereals_4331', 'Cereals', 'no'),
(4, 'Flowers_11609', 'Flowers', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE IF NOT EXISTS `client_details` (
`client_id` int(100) NOT NULL,
  `client_unique_id` varchar(100) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
`id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `is_del` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_name`, `pwd`, `is_del`) VALUES
(1, 'admin', '1234', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `product_brochure`
--

CREATE TABLE IF NOT EXISTS `product_brochure` (
`brochure_id` int(100) NOT NULL,
  `product_unique_id` varchar(50) NOT NULL,
  `brochure_img` varchar(50) NOT NULL,
  `brochure_descr` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `final_status` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_brochure`
--

INSERT INTO `product_brochure` (`brochure_id`, `product_unique_id`, `brochure_img`, `brochure_descr`, `file`, `final_status`, `is_del`) VALUES
(1, 'Green_apple_27946', '14-09_1192114-09_14847download.jpg', 'The apple tree is a deciduous tree in the rose fam', '1279008-10_8345Paper-Wise-Syllabus-and-Evaluation-Pattern.pdf', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
`id` int(50) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `final_staus` varchar(100) NOT NULL,
  `is_del` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `unique_id`, `category`, `sub_category`, `final_staus`, `is_del`) VALUES
(1, 'Fruits_15776', 'Fruits', 'Apple', '', 'no'),
(2, 'Vegetables_20805', 'Vegetables', 'Bringle', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product_description`
--

CREATE TABLE IF NOT EXISTS `product_description` (
`id` int(100) NOT NULL,
  `product_unique_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `techno_specification` text NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `model_no` varchar(100) NOT NULL,
  `moq` varchar(100) NOT NULL,
  `usage1` varchar(100) NOT NULL,
  `place_of_origine` varchar(100) NOT NULL,
  `sample_time` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `style` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `make` varchar(100) NOT NULL,
  `parameter1` varchar(100) NOT NULL,
  `range1` varchar(100) NOT NULL,
  `accuracy` varchar(100) NOT NULL,
  `interface` varchar(100) NOT NULL,
  `software_required` varchar(100) NOT NULL,
  `dimesions` varchar(100) NOT NULL,
  `power_option` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `packaging_details` varchar(100) NOT NULL,
  `delivery_details` varchar(100) NOT NULL,
  `final_status` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_description`
--

INSERT INTO `product_description` (`id`, `product_unique_id`, `product_name`, `category`, `subcategory`, `description`, `techno_specification`, `product_type`, `feature`, `model_no`, `moq`, `usage1`, `place_of_origine`, `sample_time`, `material`, `brand_name`, `logo`, `color`, `style`, `size`, `make`, `parameter1`, `range1`, `accuracy`, `interface`, `software_required`, `dimesions`, `power_option`, `display`, `packaging_details`, `delivery_details`, `final_status`, `is_del`) VALUES
(1, 'Green_apple_27946', 'Green apple', 'Fruits', 'Apple', 'The apple tree is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
`product_id` int(100) NOT NULL,
  `product_unique_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `short_descr` text NOT NULL,
  `model_no` varchar(100) NOT NULL,
  `before_price` varchar(100) NOT NULL,
  `techno_specification` varchar(90) NOT NULL,
  `price` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(100) NOT NULL,
  `description_status` varchar(50) NOT NULL,
  `brochure_status` varchar(100) NOT NULL,
  `review_status` varchar(100) NOT NULL,
  `final_status` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_unique_id`, `product_name`, `category`, `sub_category`, `short_descr`, `model_no`, `before_price`, `techno_specification`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `description_status`, `brochure_status`, `review_status`, `final_status`, `is_del`) VALUES
(1, 'Green_apple_27946', 'Green apple', 'Fruits', 'Apple', 'The apple tree is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree', '', '', '', '100', '14-09_14847download.jpg', '', '', '', '', 'not_added', 'added', 'not_added', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE IF NOT EXISTS `product_review` (
`review_id` int(100) NOT NULL,
  `product_unique_id` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `final_status` varchar(100) NOT NULL,
  `is_del` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_option`
--
ALTER TABLE `add_option`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
 ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brochure`
--
ALTER TABLE `product_brochure`
 ADD PRIMARY KEY (`brochure_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_description`
--
ALTER TABLE `product_description`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
 ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_option`
--
ALTER TABLE `add_option`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
MODIFY `client_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_brochure`
--
ALTER TABLE `product_brochure`
MODIFY `brochure_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_description`
--
ALTER TABLE `product_description`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
