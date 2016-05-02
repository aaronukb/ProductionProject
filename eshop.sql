-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 11:26 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) DEFAULT NULL,
  `purchased_date` datetime NOT NULL,
  `user_id` int(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `productid`, `purchased_date`, `user_id`, `quantity`) VALUES
(14, 11, '0000-00-00 00:00:00', 1, 3),
(15, 9, '0000-00-00 00:00:00', 1, 2),
(16, 10, '0000-00-00 00:00:00', 1, 2),
(17, 13, '0000-00-00 00:00:00', 2, 1),
(18, 16, '0000-00-00 00:00:00', 2, 1),
(19, 16, '0000-00-00 00:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `checkid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`checkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkid`, `first_name`, `last_name`, `telephone`, `email`, `address`) VALUES
(5, 'Biplov', 'Koirala', '9842141434', 'koiralabiplov@gmail.com', 'Shantinagar'),
(6, 'Umesh', 'Baral', '9802009579', 'umesh156@yahoo.com', 'Kareshwor'),
(7, 'Kamal', 'Tamang', '9843558716', 'forlantamang@gmail.com', 'Kamalbinayak');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`) VALUES
(1, 'Biplov', 'Koirala', 'koiralabiplov@gmail.com', 'Test', 'hello'),
(3, 'Umesh', 'Baral', 'umesh156@yahoo.com', 'Product', 'good'),
(4, 'Kamal', 'Tamang', 'forlantamang@gmail.com', 'help', 'help me');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `brand`, `price`, `description`, `image`) VALUES
(7, 'iphone 6', 'Apple', 100000, '<p>Apple phone</p>', 0x69702e6a7067),
(8, 'Samsung S7', 'Samsung', 88000, '<p>Samsung Phone</p>', 0x7361616d2e6a7067),
(9, 'Macbook Air', 'Apple', 13500, '<p>Apple&#39;s latest flagship in Kathmandu...</p>\r\n', 0x6d61632e6a7067),
(10, 'Samsung A9', 'Samsung', 48000, '<p>Tablet of Samsung.</p>\r\n', 0x7461626c65742e6a7067),
(11, 'P8', 'Huawei', 56000, '<p>Huawei&#39;s latest phone with awesome features.</p>\r\n', 0x70382e6a7067),
(12, 'G4', 'LG', 25000, '<p>LG Phone</p>\r\n', 0x47342e6a7067),
(13, 'iphone5s', 'Apple', 45000, '<p>iphone 5s</p>\r\n', 0x6970686f6e65352e6a7067),
(14, 'ipad Pro', 'Apple', 80000, '<p>Apple&#39;s iPad Pro</p>\r\n', 0x697061642e6a7067),
(15, 'Envy M6', 'HP', 64000, '<p>Laptop of HP with awesome features</p>\r\n', 0x456e7679204d362e6a7067),
(16, 'Dell XPS', 'Dell', 94000, '<p>Latest dell laptop in town</p>\r\n', 0x64656c6c205850532e6a7067),
(17, 'iphone 6s Plus', 'Apple', 120000, '<p>Iphone 6s Plus with better features than 6 plus</p>\r\n', 0x6970686f6e653673706c75732e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `password`, `address`, `email`, `contact`) VALUES
(1, 'Biplov', 'Koirala', 'biplov', 'Shantinagar', 'koiralabiplov@gmail.com', '9842141434'),
(2, 'Umesh', 'Baral', 'umesh', 'Shantinagar', 'umesh156@yahoo.com', '9802009579'),
(3, 'Kamal', 'Tamang', 'kamal', 'Kamalbinayak', 'forlantamang@gmail.com', '9843558716'),
(4, 'Sunita', 'Tamang', 'sunita', 'Maitidevi', 'sunyatatmg@yahoo.in', '9860460785'),
(6, 'Sushil', 'Napit', 'sushil', 'Byasi', 'sushil@yahoo.com', '9849426977');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
