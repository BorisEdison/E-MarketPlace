-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 12:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login1`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `houseno` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `username`, `firstname`, `lastname`, `phno`, `houseno`, `area`, `pincode`, `state`, `city`) VALUES
(176, 'adityabelhekar@gmail.com', 'Aditya', 'jadhav', 7666178906, 'qwsdf', 'near saikrupa hospita badlapur', '421503', 'Odisha', 'Neral West'),
(186, 'omjadhav@gmail.com', 'Aditya', 'belhekar', 123, 'flat No 20 ', 'manjarli', '421503', 'Odisha', 'ghjkl'),
(190, 'vivekk@gmail.com', 'vipul', 'belhekar', 123456789, 'FLAT NO 20 4 TH FLOOR D WING SHIV SHANTI COMPLEX', 'FLAT NO 20 4 TH FLOOR D WING SHIV SHANTI COMPLEX', '451244', 'Puducherry', 'fretf'),
(191, 'pratikshelar@gmail.com', 'vipul', 'belhekar', 1234, 'yui', 'FLAT NO 20 4 TH FLOOR D WING SHIV SHANTI COMPLEX', '42313', 'Madhya Pradesh', 'fretf');

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `id` int(255) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `username` text NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_address`
--

CREATE TABLE `buyer_address` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `phno` int(255) NOT NULL,
  `houseno` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `Fname`, `LNAME`, `email`, `phno`, `msg`) VALUES
(17, '', '', '', '', ''),
(18, 'vipul', 'Belhekar', 'Abc@gmail.com', '7666178906', 'qwsd'),
(19, 'vipul', 'Hotkar', 'vipul@gmail.com', '7666178906', 'qswdefgt'),
(20, 'vipul', 'Hotkar', 'vipul@gmail.com', '7666178906', 'qswdefgt'),
(21, 'vipul', 'Hotkar', 'vipul@gmail.com', '7666178906', 'qswdefgt');

-- --------------------------------------------------------

--
-- Table structure for table `direct_buy`
--

CREATE TABLE `direct_buy` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `p_quantity` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `direct_buy`
--

INSERT INTO `direct_buy` (`id`, `product_id`, `type`, `name`, `image`, `price`, `quantity`, `p_quantity`, `username`, `progress`) VALUES
(80, 48, 'vegetable', 'peas', 'image/peas.jpg', '500', '70', '49', 'adityabelhekar@gmail.com', 0),
(86, 56, 'flower', 'marigold', 'image/marigold.jpg', '350', '21', '1', 'adityabelhekar@gmail.com', 0),
(87, 55, 'flower', 'rose', 'image/rose.jpg', '500', '117', '1', 'adityabelhekar@gmail.com', 1),
(88, 55, 'flower', 'rose', 'image/rose.jpg', '500', '117', '1', 'adityabelhekar@gmail.com', 1),
(89, 43, 'fruit', 'apple', 'image/apple.jpg', '100', '90', '15', 'vivekk@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flogin`
--

CREATE TABLE `flogin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `MNO` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `birthhd` date NOT NULL,
  `mail` text NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flogin`
--

INSERT INTO `flogin` (`id`, `fname`, `LNAME`, `MNO`, `STATE`, `birthhd`, `mail`, `pass`) VALUES
(21, 'vivek', 'jha', '122334444', 'Chhattisgarh', '2002-06-30', 'vivekk@gmail.com', 'vivek'),
(34, 'pratik', ' shelar', '8888888888', 'Maharashtra', '2002-03-23', 'pratikshelar@gmail.com', 'pratik@23'),
(35, 'vipul', ' Belhekar', '9370934335', 'Maharashtra', '2021-05-20', 'vipulbelhekar20@gmail.com', 'vip');

-- --------------------------------------------------------

--
-- Table structure for table `f_login`
--

CREATE TABLE `f_login` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_cash_success`
--

CREATE TABLE `payment_cash_success` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `p_quantity` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `final_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_success`
--

CREATE TABLE `payment_success` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_request_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `p_quantity` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `final_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_success`
--

INSERT INTO `payment_success` (`id`, `payment_id`, `payment_status`, `payment_request_id`, `name`, `p_quantity`, `username`, `final_price`) VALUES
(77, 'MOJO1516O05N09043880', 'Credit', '264b8a5ccf9946a3bdd8ab54f49df7ca', 'apple', '10', 'vivekk@gmail.com', '1000'),
(80, '', '', '', 'tomato', '7', 'pratikshelar@gmail.com', '2450'),
(81, 'MOJO1516A05N09043886', 'Credit', '80966412fbe945b99ebb59dcb15ee553', 'tomato', '10', 'pratikshelar@gmail.com', '3500'),
(82, 'MOJO1518L05N35733148', 'Credit', '8bb97728e4a44725a74234c25fe5f0dc', 'tomato', '1', 'adityabelhekar@gmail.com', '350'),
(83, '', '', '', 'marigold', '3', 'adityabelhekar@gmail.com', '1050'),
(84, '', '', '', 'marigold', '1', 'adityabelhekar@gmail.com', '350'),
(85, '', '', '', 'rice', '1', 'adityabelhekar@gmail.com', '500'),
(86, '', '', '', 'marigold', '3', 'vivekk@gmail.com', '1050'),
(87, '', '', '', 'rice', '1', 'vivekk@gmail.com', '500'),
(88, 'MOJO1518G05N35733157', 'Credit', 'b6debe4cb10544acaf9bf543b149cceb', 'peas', '1', 'vivekk@gmail.com', '500'),
(89, 'MOJO1518E05N35733310', 'Credit', '18c26333700543159f0f2b3f90eae5b3', 'marigold', '1', 'adityabelhekar@gmail.com', '350'),
(90, 'MOJO1519Y05N39066625', 'Credit', 'f916dd8f16cc4caf9a7c0345b994adee', 'marigold', '3', 'adityabelhekar@gmail.com', '1050'),
(91, 'MOJO1519X05A39066627', 'Credit', '964d14f9ad2344ccb72435ec32ba29ed', 'tomato', '1', 'adityabelhekar@gmail.com', '350');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `progress` int(11) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `type`, `name`, `image`, `price`, `quantity`, `address`, `username`, `progress`, `seen`) VALUES
(33, 'fruit', 'mango', 'image/Fruits.jpg', 350, 12, 'vivek', 'admin', 2, 0),
(44, 'fruit', 'Kiwi', 'image/kiwi.jpg', 120, 150, 'Lodha', 'vivekk@gmail.com', 2, 0),
(45, 'fruit', 'orange', 'image/orange.jpg', 100, 35, 'sd', 'vivekk@gmail.com', 2, 0),
(46, 'fruit', 'banna', 'image/pexels-kio-1093038.jpg', 100, 20, 'wsd', 'vivekk@gmail.com', 2, 0),
(47, 'vegetable', 'capcicum', 'image/capcicim.jpg', 190, 120, 'qwsdf', 'pratikshelar@gmail.com', 3, 0),
(48, 'vegetable', 'peas', 'image/peas.jpg', 500, 12, 'aSZdxfcv', 'pratikshelar@gmail.com', 2, 0),
(49, 'vegetable', 'tomato', 'image/tomato.jpg', 350, 35, 'yui', 'pratikshelar@gmail.com', 2, 0),
(50, 'vegetable', 'conflower', 'image/conflower.jpg', 190, 12, 'sd', 'pratikshelar@gmail.com', 3, 0),
(51, 'grains', 'wheat', 'image/wheat1.jpg', 500, 13, 'qwsdf', 'pratikshelar@gmail.com', 3, 0),
(52, 'grains', 'rice', 'image/rice.jpg', 500, 12, 'aSZdxfcv', 'pratikshelar@gmail.com', 2, 0),
(53, 'grains', 'rice flex', 'image/rice-flex.jpg', 100, 120, 'yui', 'pratikshelar@gmail.com', 2, 0),
(54, 'grains', 'shorgum', 'image/sorghum.jpg', 500, 120, 'qwsdf', 'pratikshelar@gmail.com', 2, 0),
(55, 'flower', 'rose', 'image/rose.jpg', 500, 120, 'wsd', 'vivekk@gmail.com', 2, 0),
(56, 'flower', 'marigold', 'image/marigold.jpg', 350, 35, 'e', 'vivekk@gmail.com', 2, 0),
(57, 'flower', 'sunflower', 'image/sunflower.jpg', 500, 20, 'wsd', 'vivekk@gmail.com', 2, 0),
(58, 'flower', 'night queen', 'image/night.jpg', 100, 12, 'sd', 'vivekk@gmail.com', 2, 0),
(59, 'vegetable', 'ladyfinger', 'image/night.jpg', 500, 35, 'wsd', 'vivekk@gmail.com', 0, 0),
(60, 'grains', 'rice flex', 'image/capcicim.jpg', 100, 120, 'aSZdxfcv', 'vivekk@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_final`
--

CREATE TABLE `product_final` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_final`
--

INSERT INTO `product_final` (`id`, `type`, `name`, `image`, `price`, `quantity`, `address`, `username`) VALUES
(43, 'fruit', 'apple', 'image/apple.jpg', 100, 90, 'shivshanti', 'vivekk@gmail.com'),
(44, 'fruit', 'Kiwi', 'image/kiwi.jpg', 120, 141, 'Lodha', 'vivekk@gmail.com'),
(45, 'fruit', 'orange', 'image/orange.jpg', 100, 11, 'sd', 'vivekk@gmail.com'),
(46, 'fruit', 'banna', 'image/pexels-kio-1093038.jpg', 100, 81, 'wsd', 'vivekk@gmail.com'),
(48, 'vegetable', 'peas', 'image/peas.jpg', 500, 69, 'aSZdxfcv', 'pratikshelar@gmail.com'),
(49, 'vegetable', 'tomato', 'image/tomato.jpg', 350, 58, 'yui', 'pratikshelar@gmail.com'),
(52, 'grains', 'rice', 'image/rice.jpg', 500, 2, 'aSZdxfcv', 'pratikshelar@gmail.com'),
(53, 'grains', 'rice flex', 'image/rice-flex.jpg', 100, 120, 'yui', 'pratikshelar@gmail.com'),
(54, 'grains', 'shorgum', 'image/sorghum.jpg', 500, 120, 'qwsdf', 'pratikshelar@gmail.com'),
(55, 'flower', 'rose', 'image/rose.jpg', 500, 117, 'wsd', 'vivekk@gmail.com'),
(56, 'flower', 'marigold', 'image/marigold.jpg', 350, 17, 'e', 'vivekk@gmail.com'),
(57, 'flower', 'sunflower', 'image/sunflower.jpg', 500, 20, 'wsd', 'vivekk@gmail.com'),
(58, 'flower', 'night queen', 'image/night.jpg', 100, 6, 'sd', 'vivekk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(255) NOT NULL,
  `Fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `Fname`) VALUES
(1, 'Aditya');

-- --------------------------------------------------------

--
-- Table structure for table `ulogin`
--

CREATE TABLE `ulogin` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `MNO` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `birthhd` date NOT NULL,
  `mail` text NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulogin`
--

INSERT INTO `ulogin` (`id`, `Fname`, `LNAME`, `MNO`, `STATE`, `birthhd`, `mail`, `pass`) VALUES
(1, 'Aditya', ' Belhekar', '123456123', 'Andhra Pradesh', '2002-12-20', 'adityabelhekar@gmail.com', 'vip'),
(2, 'om', ' jadhav', '7777777777', 'Goa', '2002-10-20', 'omjadhav@gmail.com', 'om123');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(255) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `type`, `name`, `image`, `price`, `quantity`, `username`) VALUES
(43, 'fruit', 'apple', 'image/apple.jpg', 100, 100, 'adityabelhekar@gmail.com'),
(45, 'fruit', 'orange', 'image/orange.jpg', 100, 35, 'vivekk@gmail.com'),
(47, 'vegetable', 'capcicum', 'image/capcicim.jpg', 190, 120, 'adityabelhekar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_address`
--
ALTER TABLE `buyer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_buy`
--
ALTER TABLE `direct_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flogin`
--
ALTER TABLE `flogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_cash_success`
--
ALTER TABLE `payment_cash_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_success`
--
ALTER TABLE `payment_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_final`
--
ALTER TABLE `product_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `buyer_address`
--
ALTER TABLE `buyer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `direct_buy`
--
ALTER TABLE `direct_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `flogin`
--
ALTER TABLE `flogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment_cash_success`
--
ALTER TABLE `payment_cash_success`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment_success`
--
ALTER TABLE `payment_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `product_final`
--
ALTER TABLE `product_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ulogin`
--
ALTER TABLE `ulogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
