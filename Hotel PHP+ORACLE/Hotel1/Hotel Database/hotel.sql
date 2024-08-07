-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 12:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` varchar(10) DEFAULT NULL,
  `customerid` varchar(40) DEFAULT NULL,
  `roomid` varchar(40) DEFAULT NULL,
  `bookingdate` varchar(50) DEFAULT NULL,
  `checkindate` varchar(30) DEFAULT NULL,
  `checkoutdate` varchar(20) DEFAULT NULL,
  `noofnights` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `customerid`, `roomid`, `bookingdate`, `checkindate`, `checkoutdate`, `noofnights`) VALUES
('b', 'b', 'b', 'b', 'b', 'b', 'b'),
('a', 'a', 'a', 'a', 'a', 'a', 'a'),
('9', '9', '9', '9', '9', '9', '9'),
('b', 'u', 'u', 'u', 'u', 'u', 'u'),
('a', 'gf', 'g', 'ghf', 'hff', 'fhg', 'fhgf'),
('iuyiu', 'yuiy', 'uiy', 'iuy', 'iu', 'yiu', 'yiu'),
('0', 'hg', 'jhgjh', 'ghj', 'ghjg', 'hjg', 'jhg'),
('8787uhiuhk', 'jhjk8788', 'hkjhkjh', 'iu6876876876', 'hkjh', 'kjhkjh', 'iu6876876'),
('hjkhjhuyt6', 'uyuyu67575', 'hjgyut675', '0567-07-06', '65765-07-05', '0765-05-07', '76576');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` varchar(10) DEFAULT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `lastname` varchar(40) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `suburb` varchar(30) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `emailaddress` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `lastname`, `address`, `suburb`, `postcode`, `state`, `phoneno`, `emailaddress`) VALUES
('c001', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o'),
('jlksdjkfgj', 'j', 'kljlk', 'jlkjlkjkl', 'jlkjljlkj', 'lkj', 'lkjk', 'jlk', 'jlk'),
('0', 'hgfhfhg', 'fhgf', 'hgf', 'hgfhg', 'fh', 'gfhg', 'fhg', 'fh'),
('56757tuyyu', 'tyut', 'hjght', 'yyu6757', 'jhgjg', '765757', 'yt', '677575', '6757'),
('56757tuyyu', 'tyut', 'hjght', 'yyu6757', 'jhgjg', '765757', 'yt', '677575', '6757'),
('56757tuyyu', 'tyut', 'hjght', 'yyu6757', 'jhgjg', '765757', 'yt', '677575', '6757');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `staffid` varchar(60) DEFAULT NULL,
  `firstname` varchar(10) DEFAULT NULL,
  `lastname` varchar(40) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `suburb` varchar(40) DEFAULT NULL,
  `postcode` varchar(50) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `emailaddress` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`staffid`, `firstname`, `lastname`, `dob`, `address`, `suburb`, `postcode`, `state`, `phoneno`, `emailaddress`) VALUES
('p001', 'p', 'p', 'p', 'p', 'p', 'p', 'pp', 'po', 'o'),
('0', 'hghgh', 'ghg', 'hjg', 'jhg', 'jhg', 'hjg', 'jgj', 'gj', 'jh'),
('', '6566', '', '', '', '', '', '', '', ''),
('767uyyut', 'yytuyt', 'tuyt', '0676-07-07', 'hjghjg767', 'ghjgj', '7675', 'jhgj', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` varchar(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `suburb` varchar(40) DEFAULT NULL,
  `postcode` varchar(50) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `managerid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `name`, `address`, `suburb`, `postcode`, `state`, `phoneno`, `managerid`) VALUES
('0', '0', '0', '0', '0', '0', '0', '0'),
('H001', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
('h001', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
('jhgjhgjhgh', '', 'jh', 'gjh', 'ghjg', 'hjg', 'hg', 'jhgjhghj'),
(',nnkjh', 'jhjh', 'jk', 'hkjh', 'kjh', 'kjhk', 'hjkh', 'jkj'),
('jhjhg', 'jhgg', 'g', 'gj', 'ghjg', 'hjg', 'jhg', 'jhghj'),
('H005', 'sujay sing', 'nirmalichak', 'khusrupur', '803202', 'bihar', '7479513169', 'M001'),
('ghghj', 'ghhj', 'gjhg', 'hjg', 'jhgjh', 'gjg', 'jhg', 'hjgjh'),
('67757', 'jhjjhg', 'jhgjhg7657', 'hjgjhgjg', '67576', 'hjgh', '87676', 'hjghjgjh76');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pwd`) VALUES
('hotel', 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` varchar(10) DEFAULT NULL,
  `customerid` varchar(40) DEFAULT NULL,
  `bookingid` varchar(40) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `creditcardno` varchar(20) DEFAULT NULL,
  `expiredate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `customerid`, `bookingid`, `firstname`, `lastname`, `creditcardno`, `expiredate`) VALUES
('t', 't', 't', 't', 'tt', 't', 't'),
('p001', 'p', 'p', 'p', 'p', 'pp', 'p'),
('0', 'jhgjh', 'gjhg', 'jhg', 'jhg', 'jhgjhgjh', 'gjh'),
('kjnhjgy677', 'uuy76', '57tyu', 'huytjkh', 'jhh', '7666', '0067-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` varchar(10) DEFAULT NULL,
  `roomtype` varchar(30) DEFAULT NULL,
  `roomimg` varchar(20) DEFAULT NULL,
  `roomdesc` varchar(20) DEFAULT NULL,
  `hotelid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomtype`, `roomimg`, `roomdesc`, `hotelid`) VALUES
('5', '9', '9', '9', '9'),
('R002', 'Pp', 'P', 'P', 'P'),
('R', 'o', 'o', 'o', 'o'),
('r002', 'r', 'r', 'r', 'r'),
('r002', 'o', 'o', 'o', 'o'),
('R009', 'kj', 'kj', 'kj', 'jk'),
('R009', 'kj', 'Hello', 'kj', 'jk'),
('0', 'jhghj', 'gjhg', 'jhgj', 'hgjhgj');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `roomtype` varchar(10) DEFAULT NULL,
  `roomname` varchar(40) DEFAULT NULL,
  `roomprice` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`roomtype`, `roomname`, `roomprice`) VALUES
('roo1', 'p', 'p'),
('a', 'b', 'b'),
('a', 'y', 'y'),
('R', 'p', 'p'),
('r001', 't', 't'),
('0', 'jhkjh', 'kjhk'),
('jhkjhkjh', 'jhjh', '76868');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
