-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 09:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mec`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_contact` varchar(20) NOT NULL,
  `admin_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_name`, `admin_email`, `admin_password`, `admin_id`, `admin_contact`, `admin_address`) VALUES
('Athulcv', 'athulcv460@gmail.com', '123456', 10, '9072158508', 'Chathanattu(H)methala po methala');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `driver_id` int(30) DEFAULT 0,
  `vehicle_id` int(11) DEFAULT 0,
  `booking_status` varchar(30) NOT NULL DEFAULT '0',
  `booking_qty` char(2) NOT NULL DEFAULT '0',
  `booking_amt` char(7) NOT NULL DEFAULT '0',
  `delivered_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `delivery_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `product_id`, `user_id`, `driver_id`, `vehicle_id`, `booking_status`, `booking_qty`, `booking_amt`, `delivered_date`, `booking_date`, `delivery_address`) VALUES
(6, 0, 0, 0, 0, '0', '10', '0', '2023-10-31', '2023-10-27', 'aaaa'),
(7, 6, 14, 6, 6, '6', '15', '50000', '2023-10-27', '2023-10-27', 'ccc'),
(8, 6, 14, 7, 8, '6', '10', '30000', '2023-10-28', '2023-10-27', 'eee'),
(9, 8, 14, 8, 6, '6', '20', '22000', '2023-10-29', '2023-10-27', 'ascdasd'),
(10, 10, 14, 8, 9, '6', '5', '350', '2023-10-31', '2023-10-28', 'fesdfsd'),
(11, 7, 14, 6, 6, '6', '15', '140000', '2023-10-31', '2023-10-29', 'aaaa'),
(12, 9, 15, 6, 10, '3', '15', '15000', '2024-01-07', '2023-12-21', 'Valiyaparambil(h) Mulavoor p.o Mulavoor'),
(13, 6, 15, 7, 6, '6', '15', '30000', '2024-01-21', '2023-12-21', 'wefdygfukjggfiuyjhtgfyhnmghg'),
(14, 8, 0, 0, 0, '0', '15', '0', '2023-08-05', '2023-12-21', 'asdfghjksdfghjksdfghj'),
(15, 6, 14, 7, 9, '2', '15', '14000', '2023-12-29', '2023-12-21', 'sdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(30) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Gravel'),
(2, 'Sand'),
(3, 'Muck'),
(4, 'Stone'),
(5, 'Paving stone');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_content` varchar(500) NOT NULL,
  `complaint_status` char(1) NOT NULL DEFAULT '0',
  `complaint_reply` varchar(500) NOT NULL,
  `complaint_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_content`, `complaint_status`, `complaint_reply`, `complaint_date`, `user_id`) VALUES
(1, 'hai hello', '1', 'ok kollam poli sanam', '2023-10-29', 14),
(2, 'nothing', '0', '', '2023-10-29', 0),
(3, 'low quality', '0', '', '2023-12-21', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(16, 'Ernakulam'),
(17, 'Idukki'),
(18, 'Kottayam'),
(25, 'Alappuzha'),
(26, 'Wayanad'),
(27, 'Palakkad'),
(28, 'kollam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `driver_id` int(30) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `driver_contact` varchar(10) NOT NULL,
  `driver_email` varchar(40) NOT NULL,
  `driver_address` varchar(60) NOT NULL,
  `driver_password` varchar(8) NOT NULL,
  `place_id` int(20) NOT NULL,
  `driver_photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`driver_id`, `driver_name`, `driver_contact`, `driver_email`, `driver_address`, `driver_password`, `place_id`, `driver_photo`) VALUES
(6, 'Praveen Kumar', '9667876554', 'praveen@gmail.com', 'Muvattupuzha', '100', 6, 'IMG_20220423_094541.jpg'),
(7, 'Nandhu.Saji', '9072159505', 'nandhusaji@gamil.com', 'puthenveedu(h)thodupuzhap.o thodupuzha 654535', '0987', 7, 'IMG_20220502_145645.jpg'),
(8, 'Sanjaydas', '9258745619', 'sanjaydas12@gmail.com', 'puthussery(H)methala po\r\neeattumanoor', 'sanju123', 8, 'IMG_20220502_133518.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `user_id`, `feedback_date`) VALUES
(1, 'hai', 14, '0000-00-00'),
(2, 'dsstdyfu', 0, '2023-10-29'),
(3, 'nice product\r\n', 0, '2023-10-29'),
(4, 'low quality product\r\n', 15, '2023-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(20) NOT NULL,
  `place_name` varchar(20) NOT NULL,
  `district_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(1, 'Placekozhiu', 15),
(4, 'illikal', 20),
(5, 'ko', 19),
(6, 'Muvattupuzha', 16),
(7, 'Thodupuzha', 17),
(8, 'Eattumanoor', 18),
(9, 'Kalppathy', 27),
(10, 'Kuttanaad', 25),
(11, 'Edakkal Caves', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_img` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `product_price`, `product_img`) VALUES
(6, 'Normal Muck', 3, '20', 'laterite-ore-2290417.jpg'),
(7, 'Normal Stone', 4, '60', 'quarry-stone-types-and-uses.jpg'),
(8, 'Paving stone ', 5, '50', 'download.jpeg'),
(9, 'Gravel 2mm', 1, '60', 'Quarry_Stone_Ballast-300x300.jpg'),
(10, 'Fine Sand', 2, '55', 'fine sand.jpg'),
(11, 'Coarse Sand', 2, '50', 'grey-coarse-sand-500x500.jpeg'),
(12, 'Medium Sand', 2, '55', 'images (3).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(20) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL,
  `category_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, 'hp', 6),
(2, 'hp', 3),
(3, 'vivo', 2),
(4, 'samsung', 5),
(5, 'iqoo', 2),
(6, 'acer', 3),
(7, 'jcb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_photo` varchar(300) NOT NULL,
  `user_contact` char(10) NOT NULL,
  `place_id` int(30) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_photo`, `user_contact`, `place_id`, `user_address`) VALUES
(14, 'Rahul John', 'rahul@gmail.com', '123456', 'IMG_20220423_094541.jpg', '9446418668', 6, 'Muvattupuzha'),
(15, 'Anandhu', 'anandhu@gmail.com', '002003', 'Screenshot (14).png', '9876543234', 7, 'methala'),
(16, '', '', '', '', '', 0, ''),
(17, '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `vehicle_id` int(20) NOT NULL,
  `vehicle_name` varchar(30) NOT NULL,
  `vehicle_number` varchar(30) NOT NULL,
  `vehicle_capacity` varchar(30) NOT NULL,
  `vehicle_photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`vehicle_id`, `vehicle_name`, `vehicle_number`, `vehicle_capacity`, `vehicle_photo`) VALUES
(6, 'Bharath benz', 'KL40V999', '32feet', 'Screenshot (11).png'),
(8, 'Tata Prima', 'KL40V998', '32feet', 'Screenshot (12).png'),
(9, 'BoleroPickup', 'KL40V997', '8feet', 'Screenshot (15).png'),
(10, 'Nissan Tipper', 'KL40V996', '10feet', 'Screenshot (13).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `driver_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `vehicle_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
