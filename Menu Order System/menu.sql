-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2018 at 02:06 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `username`, `Password`) VALUES
(1, 'moyin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contacte`
--

DROP TABLE IF EXISTS `contacte`;
CREATE TABLE IF NOT EXISTS `contacte` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacte`
--

INSERT INTO `contacte` (`ID`, `fullname`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'Moyinoluwa Aiyeniko', '08070664385', 'moyeniko@gmail.com', 'testing', 'err'),
(2, 'Moyinoluwa Aiyeniko', '08070664385', 'moyeniko@gmail.com', 'testing', 'err'),
(3, 'Moyinoluwa Aiyeniko', '08070664385', 'moyeniko@gmail.com', 'testing', 'err'),
(4, 'olukayode', '09026789625', 'webdev@fastgas.ng', 'testing', 'Hiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`ID`, `email`) VALUES
(6, 'moyeniko@gmail.com'),
(7, 'mo@a.com'),
(8, 'maiyeniko@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `foodoption` varchar(255) NOT NULL,
  `foodprice` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`order_id`, `firstname`, `lastname`, `email`, `phone`, `street`, `city`, `state`, `foodoption`, `foodprice`, `order_status`) VALUES
(12, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'cheesecake', '0', '1'),
(11, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '+234.8070664385', '4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'burger', '0', '1'),
(13, 'Fastgas', 'Newsletter', 'webdev@fastgas.ng', '', 'Lekki, Lagos, Lekki, Lagos', 'Lagos', 'Lagos', 'Cupcakes with Butter Icing and chocolate toppings', '0', '1'),
(14, 'Fastgas', 'Newsletter', 'webdev@fastgas.ng', '', 'Lekki, Lagos, Lekki, Lagos', 'Lagos', 'Lagos', 'Cupcakes with Butter Icing and chocolate toppings', '0', '1'),
(15, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos, 4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'Pancakes with glazed syrup topping and strawberries.', '0', '1'),
(16, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos', 'Lagos', 'Nigeria', 'Pancakes with glazed syrup topping and strawberries.', '0', '1'),
(17, 'Fastgas', 'Newsletter', 'webdev@fastgas.ng', '08045678922', 'Lekki, Lagos, Lekki, Lagos', 'Lagos', 'Nigeria', 'Salmon with black sauce and spice with vegetables.', '0', '0'),
(18, 'Fastgas', 'Newsletter', 'webdev@fastgas.ng', '08045678922', 'Lekki, Lagos, Lekki, Lagos', 'Lagos', 'Nigeria', 'Salmon with black sauce and spice with vegetables.', '0', '0'),
(19, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos, 4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'Salmon with black sauce and spice with vegetables.', '$60', '0'),
(20, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos, 4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'Salmon with black sauce and spice with vegetables.', '$60', '0'),
(21, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos, 4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'Salmon with black sauce and spice with vegetables.', '$60', '0'),
(22, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos, 4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'Salmon with black sauce and spice with vegetables.', '$60', '0'),
(23, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos, 4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'Salmon with black sauce and spice with vegetables.', '$60', '0'),
(24, 'Moyinoluwa', 'Aiyeniko', 'moyeniko@gmail.com', '08070664385', '4c obasooto str, shasha, Lagos, 4c obasooto str, shasha, Lagos', 'Lagos', 'Lagos', 'Salmon with black sauce and spice with vegetables.', '$60', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
