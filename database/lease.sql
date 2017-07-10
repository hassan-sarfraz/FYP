-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 02:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lease`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `emp_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `u_name`, `u_pass`, `emp_id`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `br_id` int(100) NOT NULL,
  `br_name` varchar(100) DEFAULT NULL,
  `br_detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`br_id`, `br_name`, `br_detail`) VALUES
(2, 'Canon', 'nill'),
(3, 'Hp', 'nill'),
(4, 'Samsung', 'nill'),
(5, 'Sony', 'nill'),
(6, 'Dawlance', 'nill'),
(7, 'Orient', 'nill'),
(8, 'Apple', 'nill'),
(9, 'Super Asia', 'nill'),
(10, 'QMobile', 'nill'),
(11, 'Lenovo', 'nill'),
(12, 'Gree', 'nill'),
(13, 'Haier', 'nill'),
(14, 'Eco Star', 'nill'),
(15, 'Nikon', 'nill');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(100) NOT NULL,
  `cus_name` varchar(100) DEFAULT NULL,
  `cus_address` varchar(100) DEFAULT NULL,
  `cus_contact` varchar(100) DEFAULT NULL,
  `cus_cnic` varchar(100) DEFAULT NULL,
  `cus_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_address`, `cus_contact`, `cus_cnic`, `cus_code`) VALUES
(7, 'Jamil', 'Multan', '0344-6325478', '3630214785698', NULL),
(8, 'Arslan', 'Multan', '0312-6985698', '3630214587458', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE `customer_account` (
  `account_id` int(100) NOT NULL,
  `total_amount` varchar(100) DEFAULT NULL,
  `amount_recieved` varchar(100) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `cus_id` int(100) DEFAULT NULL,
  `remaining` varchar(100) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `strt_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `pminstallment` varchar(100) NOT NULL,
  `rem_inst` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`account_id`, `total_amount`, `amount_recieved`, `detail`, `cus_id`, `remaining`, `cus_name`, `strt_date`, `end_date`, `pminstallment`, `rem_inst`) VALUES
(23, '113520 ', '113520', NULL, NULL, '0', 'Arslan', '10/07/2017 ', '', '16082', '0'),
(24, '340560 ', '51084 ', NULL, NULL, '289476', 'Jamil', '10/07/2017 ', '', '48246', '6'),
(25, '227040 ', '45408 ', NULL, NULL, '181632', 'Arslan', '10/07/2017 ', '', '30272', '6');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(100) NOT NULL,
  `emp_name` varchar(100) DEFAULT NULL,
  `emp_address` varchar(100) DEFAULT NULL,
  `emp_contact` varchar(100) DEFAULT NULL,
  `emp_cnic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_address`, `emp_contact`, `emp_cnic`) VALUES
(1, 'Muneer', 'Multan', '0336-5874654', '3630296325874'),
(2, 'Tariq', 'Multan', '0333-8521456', '3630278965412'),
(3, 'Farhan', 'Multan', '0315-9856745', '3630214635462'),
(4, 'Mudassir', 'Multan', '0313-6325125', '3630245236589');

-- --------------------------------------------------------

--
-- Table structure for table `installment_mode`
--

CREATE TABLE `installment_mode` (
  `mode_id` int(100) NOT NULL,
  `mode_title` varchar(100) DEFAULT NULL,
  `months` varchar(100) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installment_mode`
--

INSERT INTO `installment_mode` (`mode_id`, `mode_title`, `months`, `detail`) VALUES
(3, '6 Month', '6', '6 months installment'),
(4, '1 year (12 months)', '12', '12 months installment');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(100) NOT NULL,
  `p_name` varchar(1000) DEFAULT NULL,
  `p_price` varchar(100) DEFAULT NULL,
  `p_detail` varchar(1000) DEFAULT NULL,
  `pcat_id` int(100) DEFAULT NULL,
  `br_id` int(100) DEFAULT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_detail`, `pcat_id`, `br_id`, `image`) VALUES
(26, 'Apple Iphone 5', '34990', 'Thin, sleek, and very capable, iPhone 5 measures a mere 7.6 millimeters thin and weighs just 112 grams, iPhone 5 has 4-inch Ratina display & gives you 18 percent more pixels for an impressive 1136-by-640 resolution, iPhone 5 is nearly 9 millimeters taller than iPhone 4S, but itâ€™s the same width. So itâ€™s just as easy to type with one hand.', 4, 8, 'image/apple1.jpg'),
(27, 'Apple Iphone 6 plus', '65000', ' iPhone 6 Plus with a mighty 5.5 inch HD screen based on Retina display that is equally impressive. Apple has done it again but this time its an amazing phablet, yet another tight end contender for the 6 inch world.', 4, 8, 'image/apple2.jpg'),
(28, 'Apple Iphone 7 plus', '80000', 'Apple presents enhanced version of iPhone 7, comes with features of a Plus. The amazing phone packs the most powerful chipset built by Apple till date i.e. Apple A10 that comes with dual core processor setup making Apple iPhone 7 Plus one of the fastest smartphones.', 4, 8, 'image/apple3.jpg'),
(30, 'Samsung Galaxy S5', '35000', 'With a 5.1" 1080p screen, 16 MP camera and 2 GB of RAM, the Galaxy S5 might not be the utmost specs beast that the Android world has to offer, but it comes with plenty of new features, both in comparison with its predecessor, the S4, and when measured up to the other flagships.', 4, 4, 'image/sam1.jpg'),
(31, 'Samsung Galaxy S7 Edge', '65000', 'The Samsung Galaxy S7 Edge is powered by 1.6GHz octa-core it comes with 4GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 200GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy S7 Edge packs a 12-megapixel primary camera on the rear and a 5-megapixel front shooter for selfies.\r\n', 4, 4, 'image/sam2.jpg'),
(32, 'Samsung Galaxy S8', '87000', 'The Samsung Galaxy S8 is powered by 1.9GHz octa-core Samsung Exynos 8895 processor and it comes with 4GB of RAM. The phone packs 64GB of internal storage that can be expanded up to 256GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy S8 packs a 12-megapixel primary camera on the rear and a 8-megapixel front shooter for selfies.', 4, 4, 'image/sam3.jpg'),
(33, 'Sony Xperia X', '36000', 'The Sony Xperia X is a curious phone. It is a handset that is not being dubbed a flagship device, but seems to be packing many of the top-end features you would expect from such a smartphone.', 4, 5, 'image/son1.jpg'),
(34, 'Sony Xperia XA1 Ultra', '33000', 'Sony is working on another Xperia XA1 model which is running with Ultra fast speed due to its super fast boosted specifications which includes 6.0 inch display equipped with IPS technology. Due to its huge display Sony Xperia XA1 Ultra falls in phablet category.', 4, 5, 'image/son2.jpg'),
(36, 'Sony Xperia Z5', '40000', ' Xperia Z5 provides a touch of class to its users. With Waterproof, Dustproof features, users will be able to take this phone anywhere with them. It features a non-removable 4500mAh battery and like Xperia Z4, mighty Xperia Z5 also boosts wireless and fast charging features that will provide users with less waiting time near the charging socket and more battery juice.', 4, 5, 'image/son3.jpg'),
(37, 'Canon EOS 5D Mark 3', '85000', 'Canon is proud to present the highly anticipated EOS 5D Mark III. With supercharged EOS performance and stunning full frame, high-resolution image capture, the EOS 5D Mark III is designed to perform. Special optical technologies like the 61-Point High Density Reticular AF and an extended ISO range of 100â€“25600 .', 2, 2, 'image/c1.jpg'),
(38, 'EOS 7D EF-S', '74000', 'Made to be the tool of choice for serious photographers and semi-professionals, the EOS 7D features an all-new 18.0 Megapixel APS-C size CMOS sensor and Dual DIGIC 4 Image Processors, capturing tremendous images at up to ISO 12800 and speeds of up to 8 fps. The EOS 7D has a new all cross-type 19-point AF system with improved AI Servo II AF subject tracking and user-selectable AF area selection modes for sharp focus no matter the situation.', 2, 2, 'image/c_2.jpg'),
(39, 'Canon EOS 5DS R', '95000', 'With all the features and capabilities of the EOS 5DS, the EOS 5DS R camera offers the potential for even greater sharpness and fine detail for specialized situations. It features the same Canon designed and manufactured 50.6 Megapixel sensor.', 2, 2, 'image/c3.jpg'),
(40, 'Nikon D810 DSLR Camera', '97500', 'The Nikon D810 DSLR Camera takes its place as the high resolution option in the Nikon DSLR lineup. It features a 36.3MP FX-format CMOS sensor without an Optical Low Pass Filter for particularly sharp and detailed still imaging. With the addition of the EXPEED 4 Image Processor, performance speed is increased compared to the EXPEED 3 and noise is effectively reduced throughout the ISO range.', 2, 15, 'image/n1.jpg'),
(41, 'Nikon D610 DSLR Camera', '84700', 'A new continuous quiet mode lets you capture a sequence of shots without the noise associated with the raising and lowering of the DSLRs mirror. Optimized for full-frame shooting, streamlined for compactness and value, the D610 will fuel your photographic passion like never before.', 2, 15, 'image/n2.jpg'),
(42, 'Nikon D710 DSLR Camera', '79500', 'This Pro Lens Adapter from Fotodiox enables the use of your Minolta MD lenses on Nikon F mount SLR and DSLR cameras. It features a durable brass construction with stainless steel finish and a leaf spring ensures a secure connection between the lens and adapter. Additionally, through the use of a 1.4x multi-coated focus correction lens, this adapter is designed to maintain infinity focus.', 2, 15, 'image/n3.jpg'),
(43, 'Sony Alpha A3000 DSLR Camera', '85500', 'The Sony A3000 borrows a sensor from a recent Sony DSLR, the 20.1MP Exmor CMOS sensor previously found on the Sony SLT-A58. ... The A3000 uses the Sony E mount as found on the rest of the NEX series. As a result the camera is compatible with a host of CSC lenses, but it requires an adapter to use Alpha lenses.', 2, 5, 'image/s1.jpg'),
(44, 'SONY DSLR-ILCE-3500J', '99000', 'Every scene is captured beautifully, from corner to corner, with fine details and rich tonal gradations. The sensor is large size delivers high sensitivity, attractive defocusing effects and low noise in wide-ranging shooting situations including dimly lit environments.', 2, 5, 'image/s2.jpg'),
(45, 'Sony SLT-A77 II', '94600', 'The autofocus capability combines with the cameras ability to shoot images at 12 frames per second to offer a compelling feature set. The A77 II also benefits from the autofocus tracking advances that have been included on recent Sony cameras, which use information from the main image sensor to identify and follow a given target.', 2, 5, 'image/s3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `pcat_id` int(100) NOT NULL,
  `pcat_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`pcat_id`, `pcat_name`) VALUES
(2, 'Cameras & Photography'),
(3, 'Computers & Tablets'),
(4, 'Cell Phones & Accessories'),
(5, 'LCD LED & Home Theatre'),
(6, 'Refrigerator & Dispenser'),
(7, 'Air Conditioner & Generators'),
(8, 'Air Cooler & Fans'),
(9, 'Kitchen Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pd_id` int(100) NOT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `order_no` int(100) DEFAULT NULL,
  `p_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pd_id`, `quantity`, `date`, `detail`, `order_no`, `p_id`) VALUES
(5, '2', '2017-07-10', 'Iphone 7 plus Smart Phones', NULL, 28);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `order_no` int(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `p_id` int(100) DEFAULT NULL,
  `sp_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`order_no`, `date`, `p_id`, `sp_id`) VALUES
(10, '2017-07-10', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_detail`
--

CREATE TABLE `sales_detail` (
  `sd_id` int(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `cus_id` int(100) DEFAULT NULL,
  `p_id` int(100) DEFAULT NULL,
  `mode_id` int(100) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_detail`
--

INSERT INTO `sales_detail` (`sd_id`, `date`, `cus_id`, `p_id`, `mode_id`, `qty`) VALUES
(47, '10/07/2017', 8, 45, 3, 1),
(48, '10/07/2017', 7, 28, 3, 3),
(49, '10/07/2017', 8, 28, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stk_id` int(100) NOT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `p_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stk_id`, `quantity`, `price`, `detail`, `p_id`) VALUES
(4, '100', '500000', 'Sony DSLRs', 43),
(5, '150', '600000', 'Samsung Galaxy S5 Mobile Phones', 30),
(6, '107', '400000', 'Iphone 7 Plus Smart Phones', 28),
(7, '700', '800000', 'Canon DSLRs', 37);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sp_id` int(100) NOT NULL,
  `sp_name` varchar(100) DEFAULT NULL,
  `sp_address` varchar(100) DEFAULT NULL,
  `sp_contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sp_id`, `sp_name`, `sp_address`, `sp_contact`) VALUES
(1, 'Mudassir', 'Lahore', '0304-5269452'),
(2, 'Ali', 'Karachi', '0313-8965741'),
(3, 'Mughees', 'Multan', '0312-5263452'),
(4, 'Ali Raza', 'Faisalabad', '0334-8569741'),
(5, 'Furqan', 'Multan', '0340-8596785');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `emp_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_pass`, `emp_id`) VALUES
(1, 'employee', 'employee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `witness`
--

CREATE TABLE `witness` (
  `w_id` int(100) NOT NULL,
  `w_name` varchar(100) DEFAULT NULL,
  `w_profession` varchar(100) DEFAULT NULL,
  `w_address` varchar(100) DEFAULT NULL,
  `w_contact` varchar(100) DEFAULT NULL,
  `w_cnic` varchar(100) DEFAULT NULL,
  `cus_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `witness`
--

INSERT INTO `witness` (`w_id`, `w_name`, `w_profession`, `w_address`, `w_contact`, `w_cnic`, `cus_id`) VALUES
(1, 'Nomaan', 'Teacher', 'Multan', '0340-9658741', '3630214569874', 7),
(2, 'Siraj', 'Engineer', 'Multan', '0301-9652365', '36302854123658', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `installment_mode`
--
ALTER TABLE `installment_mode`
  ADD PRIMARY KEY (`mode_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `pcat_id` (`pcat_id`),
  ADD KEY `br_id` (`br_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`pcat_id`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pd_id`),
  ADD KEY `order_no` (`order_no`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD PRIMARY KEY (`sd_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `mode_id` (`mode_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stk_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `witness`
--
ALTER TABLE `witness`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `br_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customer_account`
--
ALTER TABLE `customer_account`
  MODIFY `account_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `installment_mode`
--
ALTER TABLE `installment_mode`
  MODIFY `mode_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `pcat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `order_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sales_detail`
--
ALTER TABLE `sales_detail`
  MODIFY `sd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stk_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `witness`
--
ALTER TABLE `witness`
  MODIFY `w_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD CONSTRAINT `customer_account_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`pcat_id`) REFERENCES `product_category` (`pcat_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`br_id`) REFERENCES `brand` (`br_id`);

--
-- Constraints for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD CONSTRAINT `purchase_detail_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `purchase_order` (`order_no`),
  ADD CONSTRAINT `purchase_detail_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `purchase_order_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `supplier` (`sp_id`);

--
-- Constraints for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD CONSTRAINT `sales_detail_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `sales_detail_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `sales_detail_ibfk_3` FOREIGN KEY (`mode_id`) REFERENCES `installment_mode` (`mode_id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `witness`
--
ALTER TABLE `witness`
  ADD CONSTRAINT `witness_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
