-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 02:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoelace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
('1', 'test', 'test'),
('22', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_num` int(100) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_num` int(100) NOT NULL,
  `payment_package` varchar(50) NOT NULL,
  `payment_address` varchar(200) NOT NULL,
  `cust_num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_qty` int(10) NOT NULL,
  `purchase_size` int(10) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_time` time NOT NULL,
  `cust_num` int(100) NOT NULL,
  `shoes_code` varchar(50) NOT NULL,
  `payment_num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `shoes_code` varchar(50) NOT NULL,
  `shoes_name` varchar(100) NOT NULL,
  `shoes_colour` varchar(50) NOT NULL,
  `shoes_category` varchar(255) NOT NULL,
  `shoes_type` varchar(10) NOT NULL,
  `shoes_brand` varchar(50) NOT NULL,
  `shoes_price` decimal(10,2) NOT NULL,
  `shoes_qty` int(10) NOT NULL,
  `shoes_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`shoes_code`, `shoes_name`, `shoes_colour`, `shoes_category`, `shoes_type`, `shoes_brand`, `shoes_price`, `shoes_qty`, `shoes_image`) VALUES
('0001', 'Vans-OG-Sk8-Future-Donut', 'Blue', 'Women', 'High Top', 'Vans', '400.00', 34, 'shoes_image/Vans-OG-Sk8-Hi-Odd-Future-Donut.jpg'),
('0002', 'Vans Burgundy ', 'Burgundy Red', 'Women', 'Low Top', 'Vans', '290.00', 34, 'shoes_image/vans-doheny-womens-skate-shoes-size-medium-9-dark-red.jpg'),
('0010', 'SUPERGA PINK (WOMEN)', 'PINK', 'Women', 'Low Top', 'SUPERGA', '378.00', 64, 'shoes_image/superga pink.jpg'),
('0011', 'SUPERGA CAMO', 'PINK CAMO', 'Kids', 'Low Top', 'SUPERGA', '128.00', 12, 'shoes_image/superga camo.jpg'),
('0012', 'Nike Air Max', 'gold', 'Men', 'Low Top', 'Nike', '540.00', 5, 'shoes_image/item-15.jpg'),
('0013', 'CHUCK TAYLOR ANKLE RED', 'RED', 'Men', 'High Top', 'CONVERSE', '348.00', 12, 'shoes_image/red_anckle chuck.jpg'),
('0014', 'CHUCK TAYLOR ANKLE RED', 'RED', 'Women', 'High Top', 'CONVERSE', '342.00', 12, 'shoes_image/red_anckle chuck.jpg'),
('0015', 'PUMA SUEDE PINK (WOMEN)', 'PINK', 'Women', 'Low Top', 'PUMA', '459.00', 12, 'shoes_image/puma-pink-sneakers_2892337.jpg'),
('0016', 'PUMA SUEDE PINK (KIDS)', 'PINK', 'Kids', 'Low Top', 'PUMA', '289.00', 12, 'shoes_image/puma-pink-sneakers_2892337.jpg'),
('0017', 'PUMA SUEDE RED', 'RED', 'Men', 'Low Top', 'PUMA', '470.00', 32, 'shoes_image/puma suede.jpg'),
('0018', 'PUMA SUEDE RED', 'RED', 'Women', 'Low Top', 'PUMA', '240.00', 21, 'shoes_image/puma suede.jpg'),
('0019', 'PUMA SUEDE LIGHT BLUE', 'LIGHT BLUE', 'Men', 'Low Top', 'PUMA', '534.20', 24, 'shoes_image/puma suede blue.jpg'),
('0020', 'PUMA SUEDE LIGHT BLUE ', 'LIGHT BLUE', 'Women', 'Low Top', 'PUMA', '432.90', 43, 'shoes_image/puma suede blue.jpg'),
('0021', 'PUMA SUEDE LIGHT BLUE', 'LIGHT BLUE', 'Kids', 'Low Top', 'PUMA', '199.00', 21, 'shoes_image/puma suede blue.jpg'),
('0022', 'KIDS LIGHT SHOES', 'BROWN', 'Kids', 'Low Top', 'NO BRAND', '123.99', 2, 'shoes_image/kids-gold-ledshoes-lowtop-3.jpg'),
('0023', 'VANS HIGH CUT BLACK', 'BLACK', 'Men', 'High Top', 'VANS', '452.20', 34, 'shoes_image/kid high cut vans.jpg'),
('0024', 'VANS HIGH CUT BLACK', 'BLACK', 'Women', 'High Top', 'VANS', '523.00', 54, 'shoes_image/kid high cut vans.jpg'),
('0025', 'VANS GREE LOW CUT', 'GREEN', 'Men', 'Low Top', 'VANS', '123.00', 4, 'shoes_image/item-16.jpg'),
('0026', 'VANS GREEN LOW CUT', 'GREEN', 'Women', 'Low Top', 'VANS', '99.00', 3, 'shoes_image/item-16.jpg'),
('0027', 'NIKE KIDS', 'BLACK,YELLOW,WHITE', 'Kids', 'High Top', 'NIKE', '240.00', 12, 'shoes_image/item-13.jpg'),
('0028', 'FILA ALL WHITE', 'white', 'Men', 'Low Top', 'FILA', '534.00', 34, 'shoes_image/fila.jpg'),
('0029', 'FILA KIDS HIGH CUT', 'White', 'Kids', 'High Top', 'FILA', '435.99', 53, 'shoes_image/fila high cut.jpg'),
('003', 'Vans Burgundy ', 'Burgundy Red', 'Men', 'Low Top', 'Vans', '290.00', 12, 'shoes_image/vans-doheny-womens-skate-shoes-size-medium-9-dark-red.jpg'),
('0030', 'BALENCIAGA FASHIION TRIPLE S', 'PINK', 'Men', 'Low Top', 'BALENCIAGA', '1098.30', 7, 'shoes_image/balenciaga fashion triple s.jpg'),
('004', 'Vans x thrasher', 'Black', 'Women', 'Low Top', 'Vans', '400.00', 3, 'shoes_image/vans x thrasher.jpg'),
('005', 'Vans x thrasher', 'Black', 'Men', 'Low Top', 'Vans', '400.00', 13, 'shoes_image/vans x thrasher.jpg'),
('006', 'Vans High cut', 'Black', 'Men', 'High Top', 'Vans', '357.00', 43, 'shoes_image/vans high cut black.jpg'),
('007', 'Vans High cut', 'Black', 'Women', 'High Top', 'Vans', '357.00', 43, 'shoes_image/vans high cut black.jpg'),
('008', 'SUPERGA CLASSIC WHITE SIDE', 'White', 'Kids', 'Low Top', 'Superga', '348.00', 15, 'shoes_image/SUPERGA_2754-JCOT-CLASSIC_WHITE_SIDE_large.jpg'),
('009', 'SUPERGA WHITE WOMEN', 'white', 'Women', 'Low Top', 'Superga', '522.00', 12, 'shoes_image/superga white.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_num`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_num`),
  ADD KEY `cust_num` (`cust_num`),
  ADD KEY `cust_num_2` (`cust_num`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`cust_num`,`shoes_code`),
  ADD KEY `cust_num` (`cust_num`),
  ADD KEY `shoes_code` (`shoes_code`,`payment_num`),
  ADD KEY `cust_num_2` (`cust_num`,`shoes_code`),
  ADD KEY `payment_num` (`payment_num`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`shoes_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_num` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`cust_num`) REFERENCES `customer` (`cust_num`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`cust_num`) REFERENCES `customer` (`cust_num`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`shoes_code`) REFERENCES `shoes` (`shoes_code`),
  ADD CONSTRAINT `purchase_ibfk_3` FOREIGN KEY (`payment_num`) REFERENCES `payment` (`payment_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
