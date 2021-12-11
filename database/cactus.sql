-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2021 at 05:31 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `cactuses`
--

DROP TABLE IF EXISTS `cactuses`;
CREATE TABLE IF NOT EXISTS `cactuses` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cactuses`
--

INSERT INTO `cactuses` (`id`, `name`, `price`, `description`, `image`) VALUES
(2, 'Rat Tail Cactus', 500, 'If your sunniest window does not have the space to accommodate a container, consider a hanging basket with the fantastic Aporocactus flagelliformis or rat tail cactus. This plant is indigenous to Mexico, where its vibrant magenta blooms have been used in traditional medicines for heart problems. Choose a generously sized hanging basket for this fast-growing cactusâ€”the thick stems can trail for three feet. ', 'RatsTailCactusKaraRiley-15-81aa5cb88bfc497a8c0899fbeedac21d.png'),
(3, 'African Milk Tree', 550, 'Euphorbia trigona is one of those easy cactus specimens that make every grower feel like an expert. Also known as the cathedral plant, this cactus can grow more than eight feet tall, but it is a slow grower and is unlikely to grow much past four feet indoors. Small green leaves grow between thorns on the ridged stems, and if you grow the Rubra variety, the leaves are reddish-purple. If you plant it in soil with good drainage and water it twice a month, then your African milk tree may live for decades. ', 'Euphorbiatrigona-GettyImages-1167798404-ad4ab49994284c2080d1ea48639c0446.png'),
(4, 'Angel Wings Cactus', 400, 'The Opunta albispina cactus, also known as an angel wing cactus or bunny ears cactus is a member of the prickly pear family that grows evenly spaced clusters of hairs rather than sharp spines. The Mexican native grows clusters of pads that get no larger than two feet tall but can grow up to five feet across over time. Pale yellow blooms are followed by red, edible fruits on plants that receive a full day of sun.  ', 'angel-wings-cactus-ab159de1fa074df592d01d4d6799d7c9.png'),
(5, 'Saguaro Cactus', 450, 'Anyone who has visited the Sonoran desert will not soon forget the sight of a 40-foot saguaro cactus punctuating the landscape. These majestic plants may live for two centuries, and it can take up to 40 years for flowering to occur. The slow growth rate of this cactus makes it possible to grow one for many years as an indoor houseplant as well. Give your saguaro as much light as possible and water sparingly about once a month. ', 'saguarocactus-GettyImages-506103644-9d881bd28f144ba4be61c2b32e0ff124.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `product_name`, `price`, `image`, `description`, `status`, `phone`) VALUES
(14, 'TANIA RAHMAN', 'user@user.com', 'Saguaro Cactus', 450, 'saguarocactus-GettyImages-506103644-9d881bd28f144ba4be61c2b32e0ff124.png', 'Anyone who has visited the Sonoran desert will not soon forget the sight of a 40-foot saguaro cactus punctuating the landscape. These majestic plants may live for two centuries, and it can take up to 40 years for flowering to occur. The slow growth rate of this cactus makes it possible to grow one for many years as an indoor houseplant as well. Give your saguaro as much light as possible and water sparingly about once a month. ', 'confirm', '01622528646'),
(15, 'TANIA RAHMAN', 'user@user.com', 'Rat Tail Cactus', 500, 'RatsTailCactusKaraRiley-15-81aa5cb88bfc497a8c0899fbeedac21d.png', 'If your sunniest window does not have the space to accommodate a container, consider a hanging basket with the fantastic Aporocactus flagelliformis or rat tail cactus. This plant is indigenous to Mexico, where its vibrant magenta blooms have been used in traditional medicines for heart problems. Choose a generously sized hanging basket for this fast-growing cactusâ€”the thick stems can trail for three feet. ', 'confirm', '01622528646'),
(16, 'Rana Islam', 'rana@gmail.com', 'Saguaro Cactus', 450, 'saguarocactus-GettyImages-506103644-9d881bd28f144ba4be61c2b32e0ff124.png', 'Anyone who has visited the Sonoran desert will not soon forget the sight of a 40-foot saguaro cactus punctuating the landscape. These majestic plants may live for two centuries, and it can take up to 40 years for flowering to occur. The slow growth rate of this cactus makes it possible to grow one for many years as an indoor houseplant as well. Give your saguaro as much light as possible and water sparingly about once a month. ', 'confirm', '01622528648'),
(20, 'Mofizul Islam', 'mofizul.rifat@gmail.com', 'African Milk Tree', 550, 'Euphorbiatrigona-GettyImages-1167798404-ad4ab49994284c2080d1ea48639c0446.png', 'Euphorbia trigona is one of those easy cactus specimens that make every grower feel like an expert. Also known as the cathedral plant, this cactus can grow more than eight feet tall, but it is a slow grower and is unlikely to grow much past four feet indoors. Small green leaves grow between thorns on the ridged stems, and if you grow the Rubra variety, the leaves are reddish-purple. If you plant it in soil with good drainage and water it twice a month, then your African milk tree may live for decades. ', 'confirm', '01622528646');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `name`, `email`, `password`, `role`) VALUES
(24, '12-10-21', 'TANIA RAHMAN', 'user@user.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(25, '12-10-21', 'Rana Islam', 'rana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(26, '12-10-21', 'Mofizul Islam', 'mofizul.rifat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(28, '12-10-21', 'FATEMA TUJ JOHORA', 'rifat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(29, '12-11-21', 'FATEMA TUJ JOHORA', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
