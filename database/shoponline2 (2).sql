-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2021 at 09:58 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline2`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ad_ad` varchar(100) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `ad_pd` int(20) NOT NULL,
  `ad_od` varchar(100) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `ad_name` varchar(100) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `ad_id` int(20) NOT NULL,
  `ad_Email` int(20) NOT NULL,
  `ad_ext` varchar(50) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `ad_picture` varchar(50) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ad_ad`, `ad_pd`, `ad_od`, `ad_name`, `ad_id`, `ad_Email`, `ad_ext`, `ad_picture`) VALUES
('99999', 99999, 'DHL EXPRESS', 'Poramat Chaihan', 1, 968864376, '.jpg', ''),
('99999', 99999, 'DHL EXPRESS', 'Poramat Chaihan', 2, 968864376, '.jpg', ''),
('99999', 99999, 'DHL EXPRESS', 'tonmai', 3, 968864376, '.jpg', ''),
('99999', 99999, 'KERRY EXPRESS', 'Maiton', 4, 968864376, '.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `a_name` varchar(100) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `a_user` varchar(100) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `a_pwd` varchar(100) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `a_Email` varchar(100) COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_user`, `a_pwd`, `a_Email`) VALUES
(1, 'ปรมัตถ์ ไชยหาญ', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(2, 'กัญญารัตน์ ไชยหาญ', 'admin2', 'd93591bdf7860e1e4ee2fca799911215', ''),
(4, 'ปรมัตถ์ ไชยหาญ', 'admin2', '250cf8b51c773f3f8dc8b4be867a9a02', ''),
(5, 'ปรมัตถ์ ไชยหาญ', 'Tonmai', '827ccb0eea8a706c4c34a16891f84e7b', 'tonmai234@hotmail.com'),
(6, 'tonmai', 'Tonmai', '81dc9bdb52d04dc20036dbd8313ed055', 'tonmai234@hotmail.com'),
(7, 'ปรมัตถ์ ไชยหาญ', 'Tonmai', '81dc9bdb52d04dc20036dbd8313ed055', 'tonmai234@hotmail.com'),
(8, 'ปรมัตถ์ ไชยหาญ', 'nacket', '66f041e16a60928b05a7e228a89c3799', 'tonmai234@hotmail.com'),
(9, 'ปรมัตถ์ ไชยหาญ', 'nacket', '8336041a6899d0bce657dcd29409cf7e', 'tonmai234@hotmail.com'),
(10, 'tonmai', 'admin', 'b66dc44cd9882859d84670604ae276e6', 'tonmai234@hotmail.com'),
(11, 'Tonmai', 'nacket', '81dc9bdb52d04dc20036dbd8313ed055', 'tonmai@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL,
  `member_id` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `ototal`, `odate`, `member_id`) VALUES
(0000001, 17400, '2021-10-15 04:58:09', 0),
(0000002, 17600, '2021-10-15 12:52:32', 0),
(0000003, 17300, '2021-10-15 14:00:43', 0),
(0000004, 26790, '2021-10-15 14:04:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(6) NOT NULL,
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(1, 0000001, 4, 1),
(2, 0000001, 3, 1),
(3, 0000002, 2, 1),
(4, 0000002, 1, 1),
(5, 0000003, 4, 1),
(6, 0000003, 2, 1),
(7, 0000004, 5, 2),
(8, 0000004, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(4) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` int(6) NOT NULL,
  `p_picture` varchar(200) NOT NULL,
  `p_type` int(3) NOT NULL,
  `p_ext` varchar(50) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `p_type`, `p_ext`) VALUES
(1, 'NIKE PHANTOM GT2 ELITE DYNAMIC FIT FG - COLLEGE NAVY/WHITE-VIVID PURPLE', 'สินค้างานเกรดพรีเมี่ยม ', 8800, '6.jpg', 1, '.jpg'),
(2, 'NIKE MECURIAL SUPERFLY 8 ELITE FG - WHITE/BLACK-BRIGHT CRIMSON-PINK BLAST       ', 'สินค้างานเกรดพรีเมี่ยม', 8800, '7.jpg', 1, '.jpg'),
(3, 'NIKE PHANTOM GT 2 ELITE DYNAMIC FIT FG - WHITE/BLACK-BRIGHT CRIMSON-PINK BLAST   ', 'งานเกรดพรีเมียม', 8900, '8.jpg', 1, '.jpg'),
(4, 'NIKE PHANTOM GT 2 ELITE DYNAMIC FIT FG - BLACK/BLACK-IRON GREY  ', 'งานเกรดพรีเมียม', 8500, '9.jpg', 1, '.jpg'),
(5, 'NIKE MERCURIAL SUPERFLY 8 ELITE CR7 FG - CHILE RED/BLACK-GHOST-TOTAL ORANGE', 'งานเกรดพรีเมี่ยม กันน้ำกันฝนได้ ', 9450, '10.jpg', 1, '.jpg'),
(6, 'PUMA ULTRA 1.2 FG/AG - WHITE/RED   ', 'งานเกรดพรีเมี่ยม กันน้ำกันฝนได้ ', 7990, '11.jpg', 2, '.jpg'),
(7, 'PUMA FUTURE Z 1.1 FG/AG - YELLOW/BLACK', 'ผ้า cotton แท้ 100% งานเกรดพรีเมี่ยม ', 7990, '12.jpg', 2, '.jpg'),
(14, 'ADIDAS X SPEEDFLOW+ FG - CLEAR ONIX/FTWR WHITE/SOLAR YELLOW   ', '...', 10500, '4.jpg', 3, '.jpg'),
(15, 'ADIDAS PREDATOR FREAK+ FG - CLEAR GREY/FTWR WHITE/SOLAR YELLOW   ', '...', 10500, '5.jpg', 3, '.jpg'),
(8, 'PUMA ULTRA 1.2 FG/AG - BLACK/YELLOW  ', 'ผ้า cotton แท้ 100% งานเกรดพรีเมี่ยม ', 7890, '13.jpg', 2, '.jpg'),
(12, 'ADIDAS F50 GHOSTED - SILVER METALLIC                     ', '..', 8500, '2.jpg', 3, '.jpg'),
(13, 'ADIDAS X SPEEDFLOW MESSI.1 FG - VICTORY BLUE           ', '...', 7800, '3.jpg', 3, '.jpg'),
(9, 'PUMA KING PLATINUM FG/AG - PUMA WHITE   ', 'ผ้า cotton แท้ 100% งานเกรดพรีเมี่ยม', 4790, '14.jpg', 2, '.jpg'),
(11, 'ADIDAS PREDATOR PULSE FG - BOLD BLUE/SLIVER', '..', 12000, '1.jpg', 3, '.jpg'),
(10, '5.	NIKE MERCURIAL SUPERFLY 8 ELITE CR7 FG - CHILE RED/BLACK-GHOST-TOTAL ORANGE', '...', 8000, '', 1, '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id` int(3) NOT NULL,
  `pt_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `pt_name`) VALUES
(1, 'NIKE'),
(2, 'PUMA'),
(3, 'ADIDAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
