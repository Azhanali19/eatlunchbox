-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2020 at 05:35 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunchboxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(111, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `catering_inquery`
--

CREATE TABLE `catering_inquery` (
  `enq_no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `no_of_guest` varchar(20) NOT NULL,
  `party_type` int(10) NOT NULL,
  `food_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `no` int(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`no`, `full_name`, `email`, `phone`, `message`) VALUES
(6, 'Akriti Sinha', 'akritisinha2016@gmai', '9739457269', 'Very good service\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `market_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `name`, `category`, `price`, `image`, `market_price`) VALUES
(1, 'Chicken Meal', 'nonveg', 110, 'img/1.jpg', 130),
(2, 'Set Dosa', 'veg', 50, 'img/2.jpg', 65),
(4, 'Masala Dosa', 'veg', 50, 'img/4.png', 70),
(5, 'Veg Fried Rice', 'veg', 70, 'img/5.jpg', 70),
(6, 'Tandoori Chicken (quater)', 'nonveg', 100, 'img/Tandoori-chicken.jpg', 120),
(7, 'Chicken Fried Rice', 'nonveg', 90, 'img/7.jpg', 120),
(8, 'Poori With Choola', 'veg', 50, 'img/8.jpg', 60),
(9, 'South Meal', 'veg', 70, 'img/9.jpg', 90),
(10, 'Aloo Pratha', 'veg', 60, 'img/aloo_paratha.jpg', 80),
(11, 'Butter Paneer Masala', 'veg', 120, 'img/butter_paneer_masala.jpg', 150),
(12, 'North Indian Meals', 'veg', 60, 'img/morth_indian_thali.jpg', 80),
(13, 'Egg Fried Rice', 'nonveg', 80, 'img/egg_fried_rice.jpg', 80),
(14, 'Veg Biryani', 'veg', 75, 'img/veg_biryani.jpg', 90),
(15, 'Chicken Biryani', 'nonveg', 95, 'img/chiken biryani (4).jpg\r\n', 120),
(16, 'Lemon Rice', 'veg', 40, 'img/lemon_rice.jpg', 50),
(17, 'Akki Roti', 'veg', 40, 'img/akki_roti.jpg', 50),
(18, 'Ragi Roti', 'veg', 40, 'img/ragi_roti.jpg', 50),
(26, 'Onion Dosa', 'veg', 50, 'img/onion_dosa.jpg', 60),
(27, 'Rava Dosa', 'veg', 40, 'img/rava_dosa.jpg', 60),
(28, 'Kaali Dosa', 'veg', 40, 'img/kali_dosa.jpg', 50),
(29, 'Ragi Dosa', 'veg', 40, 'img/ragi_dosa.jpg', 50),
(30, 'Gobi Manchuri', 'veg', 50, 'img/gobi_manchurian.jpg', 70),
(31, 'Mushroom Fried Rice', 'veg', 75, 'img/musroom_fried_rice.jpg', 95),
(32, 'Mushroom Manchuri ', 'veg', 95, 'img/mushroom_munchurian.jpg', 95),
(33, 'Paneer Chilly', 'veg', 90, 'img/Panner-chilly.jpg', 120),
(34, 'Paneer Tikka', 'veg', 120, 'img/Paneer-tikka.jpg', 160),
(35, 'Roti Curry', 'veg', 70, 'img/Roti-curry.jpg', 90),
(36, 'Dal Fry', 'veg', 60, 'img/Dal-fry.jpg', 120),
(38, 'Gobi Masala', 'veg', 100, 'img/Gobi-masala.jpg', 120),
(39, 'Alu Gobi Masala', 'veg', 100, 'img/aloo-gobi-masala.jpg', 120),
(40, 'Channa Masala', 'veg', 100, 'img/Chana-masala.jpg', 120),
(41, 'Mushroom Masala', 'veg', 130, 'img/mushroom_masala.jpg', 150),
(42, 'Mix Veg Curry', 'veg', 120, 'img/Mix-veg-curry.jpg', 140),
(43, 'Paneer Tikka Masala', 'veg', 140, 'img/paneer-tikka-masala.jpg', 160),
(44, 'Kadai Paneer ', 'veg', 140, 'img/kadai-paneer.jpg', 160),
(45, 'Jeera Fried Rice', 'veg', 80, 'img/jera-fried-rice.jpg', 100),
(46, 'Schezwan Fried Rice', 'veg', 90, 'img/schezwan-fried-rice.jpg', 110),
(47, 'Mughalai Biryani', 'veg', 120, 'img/mugalai-biryani.jpg', 140),
(48, 'Veg Handi Biryani', 'veg', 120, 'img/veg-handi-biryani.jpg', 140),
(49, 'Chicken Hydrabadi', 'nonveg', 95, 'img/chicken-hydrabadi.jpg', 110),
(50, 'Chicken Masala', 'nonveg', 90, 'img/Chicken-masala.jpg', 110),
(51, 'Butter Chicken', 'nonveg', 95, 'img/Butter-Chicken.jpg', 125),
(52, 'Chicken Kolapuri', 'nonveg', 90, 'img/chicken-kolhapuri.jpg', 110),
(53, 'Chicken Punjabi', 'nonveg', 100, 'img/chicken-punjabi.jpg', 120),
(54, 'Egg Masala', 'nonveg', 60, 'img/egg-masala.jpg', 80),
(55, 'Thanduri Chicken Masala', 'nonveg', 140, 'img/Tandoori-chicken.jpg', 160),
(56, 'Chicken Tikka Masala', 'nonveg', 120, 'img/chicken-tikka-masala.jpg', 140),
(57, 'Panner Kolapuri', 'veg', 90, 'img/paneer-kolhapuri.jpg', 110),
(58, 'Mushroom Butter Masala', 'veg', 85, 'img/Mushroom-Butter-Masala.jpg', 105),
(59, 'Baby Corn Masala', 'veg', 85, 'img/Babycorn-masla.jpg', 105),
(60, 'Dal Tadka', 'veg', 70, 'img/daal-tadka.jpg', 90),
(61, 'Chicken Noodles', 'nonveg', 95, 'img/chicken-noodles.jpg', 110),
(62, 'Paneer Noodles', 'veg', 95, 'img/paneer-noodles.jpg', 110),
(63, 'Chicken Sehzwan Noodles', 'nonveg', 100, 'img/chicken-schzewan-noodles.jpg', 120),
(64, 'Veg Sehzwan Noodles', 'veg', 80, 'img/veg-schezwan-noodles.jpg', 90),
(65, 'Egg Sehzwan Noodles', 'nonveg', 80, 'img/egg_shezwan_noodle.jpg', 100),
(66, 'Kerla Biryani', 'nonveg', 95, 'img/kerla-biryani.jpg', 110),
(67, 'Chicken Kabab', 'nonveg', 70, 'img/chicken-kabab.jpg', 90),
(68, 'Chicken 65', 'nonveg', 100, 'img/chicken-65.jpg', 120),
(69, 'Chicken Chilly', 'nonveg', 90, 'img/chicken-chilli.jpg', 110),
(70, 'Egg Chilly', 'nonveg', 70, 'img/egg-chilli.jpg', 90),
(71, 'veg momos', 'chinese', 60, 'img/momos.jpg', 80),
(72, 'veg fried momos', 'chinese', 70, 'img/veg fried momos.jpg', 90),
(73, 'veg chilly momos', 'chinese', 100, 'img/chilimomo.jpg', 110),
(74, 'Chicken momos', 'chinese', 70, 'img/chickenmomo.png', 90),
(75, 'Chicken fried momos', 'chinese', 80, 'img/chinese fried momos.jpg', 100),
(76, 'Chicken chilly momos', 'chinese', 100, 'img/chilimomo.jpg', 110),
(77, 'veg pasta', 'chinese', 70, 'img/veg pasta.jpg', 80),
(78, 'egg pasta', 'chinese', 80, 'img/egg pasta.jpg', 90),
(79, 'Chicken pasta', 'chinese', 90, 'img/chicken pasta.jpg', 100),
(80, 'veg noodles', 'chinese', 70, 'img/veg_noodle.jpg', 80),
(81, 'veg hakka noodle', 'chinese', 80, 'img/veg_hakka_noodle.jpg', 90),
(82, 'veg singapore', 'chinese', 70, 'img/singapore_noodle.jpg', 110),
(83, 'Chicken noodle', 'chinese', 90, 'img/chinese_hakka_noodle.jpg', 100),
(84, 'egg noodle', 'chinese', 80, 'img/Egg-noodle.jpg', 90),
(85, 'Chicken hakka noodles', 'chinese', 100, 'img/chicken hakka noodle.jpg', 120),
(86, 'Chicken singapore noodle', 'chinese', 110, 'img/singapore_noodle.jpg', 120),
(89, '2 pcs parotha veg curry', 'veg', 45, 'img/parothavegcurry.jpg', 50),
(90, '2 pcs parotha egg curry', 'nonveg', 50, 'img/parothaeggcurry.jpg', 65),
(91, '2 pcs parotha chicken curry', 'nonveg', 70, 'img/parothachickencurry.jpg', 70),
(92, '3 chapathi veg curry', 'veg', 45, 'img/chapathivegcurry.jpg', 50),
(95, '3 chapathi egg curry', 'nonveg', 50, 'img/chapathieggcurry.jpg', 65),
(96, '3 chapathi chicken curry', 'nonveg', 70, 'img/chapathichickencurry.jpg', 80),
(97, 'Rice dal fry ', 'veg', 60, 'img/ricedalfry.jpg', 70);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_mess`
--

CREATE TABLE `monthly_mess` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `reference_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly_mess`
--

INSERT INTO `monthly_mess` (`id`, `name`, `address`, `phone`, `email`, `reference_email`) VALUES
(8, 'MEGHJYOTI SAHARIA', 'H/no. 467, Bharath Nagar, 7th cross B.E.L Layout', '08402990362', 'sahariakakumoni@gmai', 'sahariameghjyoti5@gm');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `email`, `phone`, `address`, `item_name`, `quantity`, `total`) VALUES
(16, 'bikash Besti', 'bikashbesti@gmail.co', '6362635851', '#18 Raghu,3rd cross Sreenidhi layout,Thunganagara,', 'Paneer Tikka', 1, 140),
(21, 'M Punith', 'tancmpsinc@gmail.com', '8660498264', 'East west college, anjananagar,bharathnagar', 'Tandoori Chicken', 3, 360),
(40, 'Bibi', 'araganjibibijan@gmai', '7619417271', 'Minority girls hostel neelkanteshwar temple road m', 'Masala Dosa', 1, 50),
(41, 'Sindu', 'araganjibibijan@gmai', '8970450714', 'Minority girls hostel neelkanteshwar temple road m', 'Chicken Meal', 1, 110),
(42, 'Akriti Sinha', 'akritisinha2016@gmai', '9739457269', 'Anjana nagara bus stop bangalore, Pipeline road an', 'Plain Noodles', 1, 35),
(43, 'Akriti Sinha', 'akritisinha2016@gmai', '9739457269', 'Anjana nagara bus stop bangalore, Pipeline road an', 'Plain Noodles', 1, 35),
(44, 'Omkar Kanade', 'omkanade5@gmail.com', '9483334645', 'No.244 2nd main rd, 2nd cross, k.h.b. colony basav', 'Gobi Manchuri', 1, 50),
(45, 'Bibi', 'araganjibibijan@gmai', '7619417271', 'Minority girls hostel neelkanteshwar temple road m', 'Veg Biryani', 1, 70),
(46, 'Aishwarya singh', 'aishwaryasinghe977@g', '8147526578', 'Girls minority hostel, Neelakanteshwar swami templ', 'Chicken Biryani', 1, 100),
(47, 'Hajra muskan', 'aishwaryasinghe977@g', '9113555232', 'Girls minority hostel, Neelakanteshwar swami templ', 'Chicken Biryani', 1, 100),
(48, 'Aftab', 'aftabkhan2052@gmail.', '9071696490', '10th cross, bilukalu , ullal main road', 'Set Dosa', 2, 180),
(49, 'Aishwarya singh', 'aishwaryasinghe977@g', '8147526578', 'Girls minority hostel, Neelakanteshwar swami templ', 'Kaali Dosa', 1, 30),
(50, 'Aishwarya singh', 'aishwaryasinghe977@g', '8147526578', 'Girls minority hostel, Neelakanteshwar swami templ', 'Lemon Rice', 1, 40),
(51, 'Aishwarya singh', 'aishwaryasinghe977@g', '8147526578', 'Girls minority hostel, Neelakanteshwar swami templ', 'Kaali Dosa', 1, 30),
(52, 'Aishwarya singh', 'aishwaryasinghe977@g', '8147526578', 'Girls minority hostel, Neelakanteshwar swami templ', 'Mushroom Fried Rice', 1, 75),
(53, 'Bibi', 'araganjibibijan@gmai', '7619417271', 'Minority girls hostel neelkanteshwar temple road m', 'Mushroom Fried Rice', 1, 75),
(54, 'Hajra muskan', 'tasmiyakm.ckm@gmail.', '9113555232', 'Minority girls hostel Nelkanteshvara temple road m', 'Kaali Dosa', 1, 30),
(55, 'Bibi', 'araganjibibijan@gmai', '7619417271', 'Minority girls hostel neelkanteshwar temple road m', 'Chicken Hydrabadi', 1, 95),
(56, 'Hajra muskan', 'muskanhajra184@gmail', '0911355523', 'Minority girls hostel Nelkanteshvara temple road m', 'Kaali Dosa', 2, 120),
(57, 'Bibi', 'araganjibibijan@gmai', '7619417271', 'Minority girls hostel neelkanteshwar temple road m', 'Rice dal fry ', 1, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering_inquery`
--
ALTER TABLE `catering_inquery`
  ADD PRIMARY KEY (`enq_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_mess`
--
ALTER TABLE `monthly_mess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catering_inquery`
--
ALTER TABLE `catering_inquery`
  MODIFY `enq_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `monthly_mess`
--
ALTER TABLE `monthly_mess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
