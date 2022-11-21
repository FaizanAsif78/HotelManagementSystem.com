-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 11:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(255) NOT NULL,
  `Admin_email` varchar(255) NOT NULL,
  `Admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_orders`
--

CREATE TABLE `booking_orders` (
  `bookin_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `room_id` int(255) NOT NULL,
  `ures_address` varchar(255) NOT NULL,
  `bookin_status` varchar(255) NOT NULL,
  `check_in` varchar(255) NOT NULL,
  `check_out` varchar(255) NOT NULL,
  `Payment_method` varchar(255) NOT NULL,
  `arrival` varchar(255) NOT NULL DEFAULT '0',
  `refund` varchar(255) NOT NULL,
  `Booker_name` varchar(255) NOT NULL,
  `Booker_phone` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `room_no` varchar(255) NOT NULL DEFAULT 'Awaiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_orders`
--

INSERT INTO `booking_orders` (`bookin_id`, `user_id`, `room_id`, `ures_address`, `bookin_status`, `check_in`, `check_out`, `Payment_method`, `arrival`, `refund`, `Booker_name`, `Booker_phone`, `date_time`, `room_no`) VALUES
(1, 29, 11, 'al masoom town street no 7 house no 232', 'Cancelled', '2022-10-05', '2022-10-21', 'POCI', '0', '', 'Faizan Asif', '03007272010', '2022-10-05 14:12:19', 'Dinninroon567'),
(3, 29, 9, 'al masoom town street no 7 house no 232', 'Cancelled', '2022-10-05', '2022-10-06', 'POCI', '0', '', 'Faizan Asif', '03007272010', '2022-10-05 15:07:16', ''),
(4, 29, 8, 'al masoom town street no 7 house no 232', 'Booked', '2022-10-06', '2022-10-19', 'POCI', '1', '', 'ali', '3456789', '2022-10-05 15:07:57', 'LuxuaryRM_768'),
(5, 28, 8, 'al masoom town street no 7 house no 232', 'Booked', '2022-10-13', '2022-10-16', 'POCI', '1', '', 'Hussain', '03007272010', '2022-10-06 12:13:49', 'Luxuar Apart 678'),
(6, 28, 10, 'RAJA GHULAM RASOOL NAGAR STREET#03 HOUSE# P-836', 'Booked', '2022-10-07', '2022-10-13', '...', '1', '', 'Azan', '03154321775', '2022-10-06 12:16:40', 'luxuay5'),
(7, 29, 8, 'al masoom town street no 7 house no 232', 'Pending', '2022-10-06', '2022-10-08', 'POCI', '0', '', 'Isha Iqbal@gmail.com', '03007667838', '2022-10-06 13:57:07', ''),
(8, 28, 9, 'al masoom town street no 7 house no 232', 'Pending', '2022-10-20', '2022-10-21', 'POCI', '0', '', 'Faizan Asif', '03007272010', '2022-10-06 13:57:50', ''),
(9, 35, 14, 'RAJA GHULAM RASOOL NAGAR STREET#03 HOUSE# P-836', 'Cancelled', '2022-10-12', '2022-10-21', 'POCI', '0', '', 'Reham Baba', '03007272010', '2022-10-07 21:58:58', 'Awaiting');

-- --------------------------------------------------------

--
-- Table structure for table `contactpage_info`
--

CREATE TABLE `contactpage_info` (
  `Conpage_id` int(255) NOT NULL,
  `Hotel_address` varchar(255) NOT NULL,
  `Hotel_phone` varchar(255) NOT NULL,
  `Hotel_email` varchar(255) NOT NULL,
  `Hotel_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactpage_info`
--

INSERT INTO `contactpage_info` (`Conpage_id`, `Hotel_address`, `Hotel_phone`, `Hotel_email`, `Hotel_website`) VALUES
(1, 'Raja Ghulam ', '0300766', 'steshai@gmail.co', 'www.graha');

-- --------------------------------------------------------

--
-- Table structure for table `contact_usdetails`
--

CREATE TABLE `contact_usdetails` (
  `Contact_id` int(255) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Contact_email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `read_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_usdetails`
--

INSERT INTO `contact_usdetails` (`Contact_id`, `Fullname`, `Contact_email`, `Subject`, `Message`, `read_status`) VALUES
(3, 'Hassan', 'hassan123@gmail.com', 'i have submitted the guest posting', 'thsysikwnusiuisduuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuoaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiihccccccccccccccccccccccccccccccccccccccccccccccnnnnnnnnnnnnnnnnnnnnnnnnnnnmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjmmmmmmmmmmmmmmm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `Facility_id` int(255) NOT NULL,
  `faclity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`Facility_id`, `faclity`) VALUES
(10, 'Wifi'),
(11, 'Air Conditioner'),
(12, 'Televesion'),
(13, 'Geyser'),
(14, 'Heater'),
(15, 'Spa'),
(16, 'Swimming Pool');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(255) NOT NULL,
  `Feature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `Feature`) VALUES
(2, 'BedRoom'),
(3, 'Balcony'),
(4, 'Kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Room_id` int(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_area` varchar(255) NOT NULL,
  `room_price` varchar(255) NOT NULL,
  `room_qty` varchar(255) NOT NULL,
  `Adults` varchar(255) NOT NULL,
  `Childrens` varchar(255) NOT NULL,
  `room_description` varchar(1000) NOT NULL,
  `room_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Room_id`, `room_name`, `room_area`, `room_price`, `room_qty`, `Adults`, `Childrens`, `room_description`, `room_status`) VALUES
(12, 'Lutyens Bungalow', '34', '3000', '10', '3', ' 2', 'Surrounded by gardens, this heritage property is located 250 m from Safdarjung Tomb and Lodhi Garden. It features an outdoor swimming pool, a children’s playground and complimentary WiFi access.\r\n\r\nLutyens Bungalow is 1.2 mi from the famous India Gate and 3.7 mi from New Delhi Railway Station. Indira Gandhi International Airport is 12 mi away.', 1),
(13, 'The Imperial, New Delhi', '76', '10000', '3', '3', ' 2', 'The modern and spacious rooms have high ceilings, a flat-screen cable TV, a minibar and tea and coffee-making facilities. Bathrobes, toiletries and a hairdryer are also provided.\r\n\r\nThis hotel features concierge assistance for tour and theater information, as well as mobile phone rentals. Babysitting services and free overnight shoe shine services are provided. Yoga classes and a book shop are available.ay.', 1),
(14, 'The Leela Palace New Delhi', '76', '1200', '4', '3', '3 ', 'royal Indian culture. A pampering spa, 4 dining options and free parking are available. It is 6.2 mi from popular landmarks such as Red Fort, Lotus Temple and shopping hubs such as Chandni Chowk and Connaught Place and 1.6 mi from Embassy of the United States of America.', 1),
(15, 'HOTEL Classic Paradise', '56', '10000', '5', '2', '2 ', 'Located in New Delhi, 8.5 km from Qutub Minar, HOTEL Classic Paradise has accommodations with free WiFi and free private parking. This 3-star hotel offers a tour desk. The property provides a 24-hour front desk, room service and currency exchange for guests.\r\n\r\nAt the hotel, every room includes a terrace. Complete with a private bathroom equipped with a shower and slippers, guest rooms at HOTEL Classic Paradise have a flat-screen TV and air conditioning, and certain rooms include a balcony. At the accommodation each room is equipped with bed linen and towels.\r\n\r\nMG Road is 10.5 km from HOTEL Classic Paradise, while Kingdom of Dreams is 12.4 km away. The nearest airport is Delhi International, 4 km from the hotel, and the property offers a paid airport shuttle service.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_facility`
--

CREATE TABLE `room_facility` (
  `sr_no` int(255) NOT NULL,
  `room_id` int(255) NOT NULL,
  `faclily_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_facility`
--

INSERT INTO `room_facility` (`sr_no`, `room_id`, `faclily_id`) VALUES
(25, 12, 10),
(26, 12, 11),
(27, 12, 12),
(28, 12, 13),
(29, 12, 14),
(30, 12, 16),
(31, 13, 10),
(32, 13, 11),
(33, 13, 12),
(34, 13, 13),
(35, 14, 10),
(36, 14, 11),
(37, 15, 10),
(38, 15, 11),
(39, 15, 12),
(40, 15, 13),
(41, 15, 14),
(42, 15, 15),
(43, 15, 16);

-- --------------------------------------------------------

--
-- Table structure for table `room_feature`
--

CREATE TABLE `room_feature` (
  `sr_no2` int(255) NOT NULL,
  `room_id` int(255) NOT NULL,
  `feature_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_feature`
--

INSERT INTO `room_feature` (`sr_no2`, `room_id`, `feature_id`) VALUES
(12, 12, 2),
(13, 12, 4),
(14, 13, 2),
(15, 13, 4),
(16, 14, 2),
(17, 14, 3),
(18, 15, 2),
(19, 15, 3),
(20, 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `room_image`
--

CREATE TABLE `room_image` (
  `room_img_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_img` varchar(255) NOT NULL,
  `selcted_img` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_image`
--

INSERT INTO `room_image` (`room_img_id`, `room_id`, `room_img`, `selcted_img`) VALUES
(23, 9, 'picss.jpg', 0),
(33, 10, 'mx-master-2s65106.webp', 1),
(36, 10, 'bootstrap-logo.png', 0),
(37, 9, 'Reg-Form-v3.jpg', 1),
(38, 8, 'onur-binay-_RpPMkqTTTg-unsplash.jpg', 1),
(39, 11, '63e10031a51437017843d483d02ebc60.jpg', 0),
(40, 11, 'wordpress banner.jpg', 0),
(41, 11, 'website banner 1.jpg', 0),
(42, 11, 'WhatsApp Image 2022-09-24 at 12.00.44 AM.jpeg', 1),
(43, 12, 'sven-brandsma-GZ5cKOgeIB0-unsplash.jpg', 1),
(44, 13, 'roberto-nickson-tleCJiDOri0-unsplash.jpg', 1),
(45, 14, 'sidekix-media-WgkA3CSFrjc-unsplash.jpg', 1),
(46, 15, 'christopher-jolly-GqbU78bdJFM-unsplash.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `Site_id` int(255) NOT NULL,
  `Site_title` varchar(255) NOT NULL,
  `Site_Aboutdetail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`Site_id`, `Site_title`, `Site_Aboutdetail`) VALUES
(1, 'PC Hote', 'This is my About us page My hotel speciality is is room are air conditioner');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_pic` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_firstname`, `user_lastname`, `user_dob`, `user_gender`, `user_email`, `user_password`, `user_pic`, `user_phoneno`) VALUES
(28, 'Muhammad', 'Asif', ' 01/03/2004', 'on', 'fa921865@gmail.com', 'Faizan39865@', 'pexels-nitin-khajotia-1516680.jpg', '03007272010 '),
(29, 'Isha', 'Iqbal', ' 10/12/2002', 'Female', 'step.ishaiqbal@gmail.com', 'Step12345@', 'toonmecom_f0a78f.jpg', '03058666625 '),
(30, 'Asif', 'Iqbal', ' 05/04/1978', 'Male', 'asifiqbal39865@gmail.com', 'Asif39865@', 'Default', '03007272010 '),
(33, 'hassan', 'Gulzan', ' 10/10/2022', 'Male', 'hassan123@gmail.com', 'tyu', 'Default', '03023421775 '),
(34, 'Ali', 'Hassan', ' 05/04/1978', 'Male', 'alihassan@gmail.com', '123', 'Default', '03007272010'),
(35, 'Rehman', 'Abdullah', ' 2022-10-07', 'male', 'rehmanabdullah@gmail.com', 'Rehman39865@', 'Default', '03023421775');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_orders`
--
ALTER TABLE `booking_orders`
  ADD PRIMARY KEY (`bookin_id`);

--
-- Indexes for table `contactpage_info`
--
ALTER TABLE `contactpage_info`
  ADD PRIMARY KEY (`Conpage_id`);

--
-- Indexes for table `contact_usdetails`
--
ALTER TABLE `contact_usdetails`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`Facility_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Room_id`);

--
-- Indexes for table `room_facility`
--
ALTER TABLE `room_facility`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `room_feature`
--
ALTER TABLE `room_feature`
  ADD PRIMARY KEY (`sr_no2`);

--
-- Indexes for table `room_image`
--
ALTER TABLE `room_image`
  ADD PRIMARY KEY (`room_img_id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`Site_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_orders`
--
ALTER TABLE `booking_orders`
  MODIFY `bookin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactpage_info`
--
ALTER TABLE `contactpage_info`
  MODIFY `Conpage_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_usdetails`
--
ALTER TABLE `contact_usdetails`
  MODIFY `Contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `Facility_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Room_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `room_facility`
--
ALTER TABLE `room_facility`
  MODIFY `sr_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `room_feature`
--
ALTER TABLE `room_feature`
  MODIFY `sr_no2` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `room_image`
--
ALTER TABLE `room_image`
  MODIFY `room_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `Site_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
