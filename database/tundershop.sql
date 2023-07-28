-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 11:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tundershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ad_ad` varchar(100) COLLATE tis620_bin NOT NULL,
  `ad_pd` int(20) NOT NULL,
  `ad_od` varchar(100) COLLATE tis620_bin NOT NULL,
  `ad_name` varchar(100) COLLATE tis620_bin NOT NULL,
  `ad_id` int(20) NOT NULL,
  `ad_tel` int(20) NOT NULL,
  `ad_ext` varchar(50) COLLATE tis620_bin NOT NULL,
  `ad_picture` varchar(50) COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ad_ad`, `ad_pd`, `ad_od`, `ad_name`, `ad_id`, `ad_tel`, `ad_ext`, `ad_picture`) VALUES
('99999', 99999, 'DHL EXPRESS', 'Poramat Chaihan', 1, 968864376, '.jpg', ''),
('99999', 99999, 'DHL EXPRESS', 'Poramat Chaihan', 2, 968864376, '.jpg', ''),
('99999', 99999, 'DHL EXPRESS', 'tonmai', 3, 968864376, '.jpg', ''),
('99999', 99999, 'KERRY EXPRESS', 'Maiton', 4, 968864376, '.jpg', ''),
('11/22', 31000, 'ไปรษณีย์ไทย', 'ronaldo', 5, 874435594, '.', ''),
('', 0, '', '', 6, 0, '.', ''),
('11/22', 31000, 'ไปรษณีย์ไทย', 'ronaldo', 7, 874435594, '.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `a_name` varchar(100) COLLATE tis620_bin NOT NULL,
  `a_user` varchar(100) COLLATE tis620_bin NOT NULL,
  `a_pwd` varchar(100) COLLATE tis620_bin NOT NULL,
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
(11, 'Tonmai', 'nacket', '81dc9bdb52d04dc20036dbd8313ed055', 'tonmai@hotmail.com'),
(12, 'pakin', 'pakin', 'e10adc3949ba59abbe56e057f20f883e', 'pakin@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cususer`
--

CREATE TABLE `cususer` (
  `cus_id` int(5) NOT NULL,
  `cus_name` varchar(100) COLLATE tis620_bin NOT NULL,
  `cus_user` varchar(100) COLLATE tis620_bin NOT NULL,
  `cus_pwd` varchar(100) COLLATE tis620_bin NOT NULL,
  `cus_Email` varchar(100) COLLATE tis620_bin NOT NULL,
  `cus_Tel` varchar(100) COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `cususer`
--

INSERT INTO `cususer` (`cus_id`, `cus_name`, `cus_user`, `cus_pwd`, `cus_Email`, `cus_Tel`) VALUES
(1, 'mario', 'mario1234', 'e10adc3949ba59abbe56e057f20f883e', 'mario@hotmail.com', '0874465594');

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
(0000004, 26790, '2021-10-15 14:04:25', 0),
(0000005, 10500, '2022-12-09 15:46:17', 0),
(0000006, 8800, '2022-12-09 15:47:27', 0),
(0000007, 5800, '2022-12-20 15:19:49', 0);

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
(8, 0000004, 8, 1),
(9, 0000005, 15, 1),
(10, 0000006, 2, 1),
(11, 0000007, 18, 1);

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
(24, 'NIKE ZOOM MERCURIAL SUPERFLY 9 ELITE QATAR AG PRO - METALLIC COPPER', 'Artificial-Grass Soccer Cleats Celebrate the game’s biggest competition in a design ignited by the science of connectivity and gravity that the world stage inspires. A carbon fiber chrome plate complements a stunning futuristic look made for the feet of the globe’s greatest players. Loaded with a Zoom Air unit and grippy texture up top for exceptional touch, it helps you dominate in the waning minutes of a match—when it matters most.', 9400, '24.jpg', 1, '.jpg'),
(23, 'MIZUNO WAVE IGNITUS JAPAN - YELLOW/BLACK', 'งานดีไซน์คลาสสิก แบบเดียวกับที่เปิดตัวในปี 2009 หนึ่งในโปรเจค Rebuild และหนึ่งในรองเท้าฟุตบอลระดับตำนานของ Mizuno สีเหลือง-ดำเพื่อรำลึกถึงแมทช์สำคัญใน International Football Tournament ปี 2010 ลูกยิง knuckle ball ในตำนาน และงานฟุตบอลที่จะจัดขึ้นในปี 2022 นี้ที่ประเทศการ์ต้า', 7600, '23.jpg', 4, '.jpg'),
(21, 'MIZUNO ALPHA JAPAN - BLUE/WHITE', 'MIZUNO ALPHA JAPAN - BLUE/WHITE', 8500, '21.jpg', 4, '.jpg'),
(22, 'MIZUNO ALPHA JAPAN - WHITE', 'เพิ่มประสิทธิภาพของคุณสู่ระดับยอดเยี่ยมด้วยรองเท้าบู๊ตรุ่นนี้ที่ปรับแต่งมาเพื่อความเร็วและความสบาย มีน้ำหนักเบา ยืดหยุ่น และเหมาะสำหรับทุกพื้นผิว คุณสมบัติลดแรงกระแทกและเพิ่มความเร็ว ได้แก่ โฟม MIZUNO ENERZY โครงสร้างทอแบบ Engineered Fit และ Half-Board Bare Foot สำหรับความรู้สึกเท้าเปล่า', 9500, '22.jpg', 4, '.jpg'),
(17, 'MIZUNO MONARCIDA NEO II JAPAN - BLACK', 'MIZUNO MONARCIDA NEO II JAPAN - BLACK', 7500, 'm1.jpg', 4, '.jpg'),
(18, 'MIZUNO MORELIA ll ELITE', 'MIZUNO MORELIA ll ELITE', 5800, 'm2.jpg', 4, '.jpg'),
(25, 'NIKE ZOOM MERCURIAL VAPOR 15 ELITE QATAR FG - METALLIC COPPER', 'Firm-Ground Soccer Cleats Celebrate the game’s biggest competition in a design ignited by the science of connectivity and gravity that the world stage inspires. A carbon fiber chrome plate complements a stunning futuristic look made for the feet of the globe’s greatest players. Loaded with a Zoom Air unit and grippy texture up top for exceptional touch, it helps you dominate in the waning minutes of a match—when it matters most.', 8400, '25.jpg', 1, '.jpg'),
(26, 'NIKE ZOOM MERCURIAL SUPERFLY 9 ELITE CR7 FG - WHITE/METALLIC COPPER CONCORD', 'Firm-Ground Soccer Cleats Like Cristiano Ronaldo, azulejo tiles are a Portuguese national treasure. For the Nike Zoom Mercurial Superfly 9 Elite CR7, we took visual inspiration from the Portuguese icons to show what can be achieved when one dedicates themselves to the craft. Now loaded with a soccer-specific Zoom Air unit, you can put the pedal down in the waning minutes of a match—when it matters most.', 10500, '26.jpg', 1, '.jpg'),
(27, 'NIKE ZOOM MERCURIAL VAPOR 15 ELITE CR7 FG - WHITE/METALLIC COPPER CONCORD', 'รองเท้าฟุตบอลสำหรับพื้นสนามทั่วไป เช่นเดียวกับ Cristiano Ronaldo กระเบื้อง Azulejo เป็นสมบัติของชาติโปรตุเกส สำหรับ Nike Zoom Mercurial Vapor 15 Elite CR7 เราได้รับแรงบันดาลใจจากไอคอนของโปรตุเกสเพื่อแสดงให้เห็นว่าจะประสบความสำเร็จได้อย่างไรเมื่ออุทิศตนให้กับงานฝีมือ ตอนนี้เต็มไปด้วยส่วน Zoom Air สำหรับฟุตบอลโดยเฉพาะ คุณสามารถวางแป้นเหยียบลงในนาทีสุดท้ายของการแข่งขัน ซึ่งเป็นเวลาที่สำคัญที่สุด', 9300, '27.่jpg', 1, '.jpg'),
(28, 'NIKE ZOOM MERCURIAL SUPERFLY 9 ELITE KM FG - DARK BEETROOT/MTLC VIVID GOLD', 'รองเท้าฟุตบอลสำหรับพื้นสนามทั่วไป รองเท้าฟุตบอลสำหรับพื้นสนามทั่วไป ความสามารถในการระเบิดของ Kylian Mbappé บวกกับการเปลี่ยนทิศทางที่เฉียบขาด ทำให้เขากลายเป็นตัวจบสกอร์ระดับโลกได้อย่างมั่นคง ด้วยความเคารพต่อมรดกของเขา รองเท้าสตั๊ดนี้ผลิตขึ้นเพื่อช่วยให้คุณเล่นแบบเดียวกับ KM—ด้วยฝีเท้าและเป้าหมายอันน่าทึ่ง เราได้เพิ่มส่วน Zoom Air ที่ผลิตขึ้นสำหรับฟุตบอลโดยเฉพาะ และพื้นผิวที่จับกระชับขึ้นด้านบนเพื่อสัมผัสที่พิเศษ คุณจึงครองเกมได้ในช่วงนาทีสุดท้ายของการแข่งขัน ซึ่งเป็นเวลาที่สำคัญที่สุด', 10000, '28.jpg', 1, '.jpg'),
(29, 'NIKE ZOOM MERCURIAL VAPOR 15 ACADEMY KM FG/MG - DARK BEETROOT/MTLC VIVID GOLD', 'รองเท้าฟุตบอลสำหรับพื้นหลายประเภท ความสามารถในการระเบิดของ Kylian Mbappé บวกกับการเปลี่ยนทิศทางที่เฉียบขาด ทำให้เขากลายเป็นตัวจบสกอร์ระดับโลกได้อย่างมั่นคง ด้วยความเคารพต่อมรดกของเขา รองเท้าสตั๊ดนี้ผลิตขึ้นเพื่อช่วยให้คุณเล่นแบบเดียวกับ KM—ด้วยฝีเท้าและเป้าหมายอันน่าทึ่ง เราได้เพิ่มส่วน Zoom Air และพื้นผิวที่จับกระชับขึ้นด้านบนเพื่อสัมผัสที่พิเศษ คุณจึงครองเกมได้ในนาทีที่อ่อนล้า ซึ่งเป็นเวลาที่สำคัญที่สุด', 8900, '29.jpg', 1, '.jpg'),
(30, 'ADIDAS PREDATOR EDGE + FG - FTWWHT/SYELLO/POBLUE', 'ปั่นบอลโค้ง คุมบอลดังใจ สับไกเต็มข้อ Predator จากอาดิดาสพร้อมตอบโจทย์ทุกจุด ลงสนามพร้อมชิงความได้เปรียบไปกับรองเท้าฟุตบอลสำหรับพื้นสนามหญ้าคู่นี้ อัปเปอร์ Zone Skin ดีไซน์ไร้เชือกด้านบนมีส่วนแถบยางแยกจากกัน ซึ่งแต่ละแถบจะช่วยเพิ่มความยอดเยี่ยมในการสัมผัสบอลแบบต่าง ๆ ถัดลงมาเป็น Power Facet ช่วยถ่วงน้ำหนักไปยังปลายรองเท้าเพื่อการทำประตูที่ดุดัน ขอบล็อคข้อเท้า adidas PRIMEKNIT ที่ยืดหยุ่นจะช่วยล็อคกระชับเท้าขณะควบคุมบอล', 10000, '30.jpg', 3, '.jpg'),
(31, 'ADIDAS PREDATOR EDGE .1 FG - SILVER METALLIC/CORE BLACK/TEAM SOLAR GREEN', 'ปั่นบอลโค้ง คุมบอลดังใจ สับไกเต็มข้อ Predator จากอาดิดาสพร้อมตอบโจทย์ทุกจุด ลงสนามพร้อมชิงความได้เปรียบไปกับรองเท้าฟุตบอลสำหรับพื้นสนามหญ้าคู่นี้ อัปเปอร์ Zone Skin ด้านบนมีส่วนแถบยางแยกจากกัน ซึ่งแต่ละแถบจะช่วยเพิ่มความยอดเยี่ยมในการสัมผัสบอลแบบต่าง ๆ ถัดลงมาเป็น Power Facet ช่วยถ่วงน้ำหนักไปยังปลายรองเท้าเพื่อการทำประตูที่ดุดัน ขอบล็อคข้อเท้า adidas PRIMEKNIT ที่ยืดหยุ่นจะช่วยล็อคกระชับเท้าขณะควบคุมบอล', 8300, '31.jpg', 3, '.jpg'),
(32, 'ADIDAS PREDATOR EDGE + FG - SOLAR RED/TEAM SOLAR GREEN/CORE BLACK', 'ปั่นบอลโค้ง คุมบอลดังใจ สับไกเต็มข้อ Predator จากอาดิดาสพร้อมตอบโจทย์ทุกจุด ลงสนามพร้อมชิงความได้เปรียบไปกับรองเท้าฟุตบอลสำหรับพื้นสนามหญ้าคู่นี้ อัปเปอร์ Zone Skin ดีไซน์ไร้เชือกด้านบนมีส่วนแถบยางแยกจากกัน ซึ่งแต่ละแถบจะช่วยเพิ่มความยอดเยี่ยมในการสัมผัสบอลแบบต่าง ๆ ถัดลงมาเป็น Power Facet ช่วยถ่วงน้ำหนักไปยังปลายรองเท้าเพื่อการทำประตูที่ดุดัน ขอบล็อคข้อเท้า adidas PRIMEKNIT ที่ยืดหยุ่นจะช่วยล็อคกระชับเท้าขณะควบคุมบอล', 8200, '32.jpg', 3, '.jpg'),
(33, 'PUMA ULTRA ULTIMATE FG/AG - FIERY CORAL FIZZY/LIGHT PUMA BLACK', 'เล่นเร็ว นักฟุตบอล พบกับฝันร้ายที่สุดของกองหลัง: ULTRA Ultimate มีอัปเปอร์แบบ ULTRAWEAVE น้ำหนักเบาและแผ่นพื้นรองเท้าแบบกระชับที่ออกแบบใหม่ ซึ่งช่วยให้คุณเข้าถึงบอลได้เร็วขึ้นและเลือกมุมด้านล่างได้ ทั้งหมด. เดี่ยว. เวลา การเปลี่ยนทิศทางอย่างกระฉับกระเฉงทำให้เขากลายเป็นผู้เข้าเส้นชัยระดับโลกอย่างมั่นคง ด้วยความเคารพต่อมรดกของเขา รองเท้าสตั๊ดนี้ผลิตขึ้นเพื่อช่วยให้คุณเล่นแบบเดียวกับ KM—ด้วยฝีเท้าและเป้าหมายอันน่าทึ่ง เราได้เพิ่มส่วน Zoom Air และพื้นผิวที่จับกระชับขึ้นด้านบนเพื่อสัมผัสที่พิเศษ คุณจึงครองเกมได้ในนาทีที่อ่อนล้า ซึ่งเป็นเวลาที่สำคัญที่สุด', 7800, '33.jpg', 2, '.jpg'),
(34, 'PUMA KING TOP FG - PUMA BLACK-PUMA WHITE', 'Football is king with these relaunch classic KING Top Football boots for firm ground. True to the original design, the KING Tops are decked out with state-of-the-art materials like K-leather vamps for the perfect ball control. The fold-over tongue with the PUMA No.1 Logo makes for a sleek and game-ready boot.', 5000, '34.jpg', 2, '.jpg');

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
(3, 'ADIDAS'),
(4, 'MIZUNO');

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
-- Indexes for table `cususer`
--
ALTER TABLE `cususer`
  ADD PRIMARY KEY (`cus_id`);

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
  MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cususer`
--
ALTER TABLE `cususer`
  MODIFY `cus_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
