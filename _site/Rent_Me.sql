-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2020 at 07:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Rent_Me`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accountID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `creditCard` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountID`, `username`, `password`, `firstName`, `lastName`, `emailAddress`, `creditCard`) VALUES
(1, 'sammysucks', 'samssams', 'Sammy', 'Vo', 'sammyvo@gmail.com', '1234123412341234'),
(2, 'tiffany', 'tifftiff', 'Tiffany', 'Nguyen', 'tiffanynguyen@yahoo.com', '1111111111111111'),
(3, 'sugardaddy', 'sammytran', 'Steven', 'Tran', 'steven&sammy@aol.com', '0000000000000000'),
(6, 'root', '', 'dfd', 'fdsf', 'dfdsf', 'fdfs'),
(7, 'ewrwerw', 'ere', 'erew', 'werw', 'ewr', 'rw'),
(8, 'jjjhj', 'hh', 'jk', 'hkj', 'h', 'j'),
(11, 'fsdsfsd', 'jkj', 'kjkj', 'jj', 'kjk', 'jk'),
(14, 'fgdfrgrrgdfgf', 'jkj', 'kjkj', 'jj', 'kjkdcds', 'jk'),
(15, 'rgertrteterte', 'jrtert', 'jkjkrter', 'kjtrre', 'kjfsdfreterdsfsd', 'tetjk');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`categoryID`, `categoryName`) VALUES
(1, 'Movies'),
(2, 'TV Shows');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `productPrice` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productName`, `stock`, `productPrice`) VALUES
(1, 1, 'MIB International', 4, '5'),
(2, 1, 'Once Upon a Time in Hollywood', 4, '5'),
(3, 1, 'Bad Boys for Life', 4, '5'),
(4, 1, 'The Spanish Princess', 4, '5'),
(5, 1, 'HairSpray', 4, '5'),
(6, 1, '13 Going on 30', 4, '5'),
(7, 1, 'Hamilton', 4, '5'),
(8, 1, 'Cats', 4, '5'),
(9, 1, 'Les Miserables', 4, '5'),
(10, 1, 'Blue Crush', 4, '5'),
(11, 1, 'Suicide Squad', 4, '5'),
(12, 1, 'Glass', 4, '5'),
(13, 1, 'Hanna', 4, '5'),
(14, 1, 'Happy Feet Two', 4, '5'),
(15, 1, 'Little Miss Sunshine', 4, '5'),
(16, 1, 'Miss Sloane', 4, '5'),
(17, 1, 'Lincoln', 4, '5'),
(18, 1, 'Recount', 4, '5'),
(19, 1, 'Jobs', 4, '5'),
(20, 1, 'Margin Call', 4, '5'),
(21, 1, 'The Proposal', 4, '5'),
(22, 1, 'Game Change', 4, '5'),
(23, 1, 'The Post', 4, '5'),
(24, 1, 'Blood Diamonds', 4, '5'),
(25, 1, 'Shock and Awe', 4, '5'),
(26, 1, 'Hotel Rwanda', 4, '5'),
(27, 1, 'The Intern', 4, '5'),
(28, 2, 'Big Little Lies', 4, '5'),
(29, 2, 'Veep', 4, '5'),
(30, 2, 'Veronica Mars', 4, '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
