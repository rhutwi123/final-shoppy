-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 06:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `b_id` int(5) NOT NULL,
  `s_id` int(5) NOT NULL,
  `curr_bal` int(5) NOT NULL,
  `comm` int(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(5) NOT NULL,
  `c_nm` varchar(15) NOT NULL,
  `c_pwd` varchar(16) NOT NULL,
  `c_mail` varchar(25) NOT NULL,
  `c_phone_num` bigint(10) NOT NULL,
  `u_addr` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `c_img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_nm`, `c_pwd`, `c_mail`, `c_phone_num`, `u_addr`, `pincode`, `c_img`) VALUES
(1, 'parth', 'Pm12345', 'parthcst@gmail.com', 1234567890, 'mota varachha', 394101, 'sb.png'),
(2, 'sagar', 'Sb12345', 'sagarcst@gmail.com', 9876543210, 'rajkot', 388120, 'sb.png'),
(3, 'smit', 'Sr12345', 'smitcst@gmail.com', 9876543210, 'junagadh', 388124, 'sb.png'),
(4, 'ravi', '123', 'ravi@gmail.com', 1234567890, 'abdvdfvgfvtvtyfvffgfgfgfhfdhdf', 123446, 'sb.png'),
(14, 'asdf', '0987655433', 'y@g.com', 1234565677, 'asd', 123456, ''),
(15, 'asdf', '0987655433', 'y@g.com', 1234565677, 'asd', 123456, ''),
(18, 'Jay', '1234', 'jk@gmail.com', 8200379647, 'Abcd', 360002, ''),
(26, 'Gshs', 'shgs', 'hshs@g.com', 654946, 'Uehdgd', 659764, ''),
(31, 'Jk', 'vs', 'jk@g.com', 213, '12', 54, 'sb.png');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `d_id` int(5) NOT NULL,
  `d_nm` varchar(20) NOT NULL,
  `d_pwd` varchar(16) NOT NULL,
  `d_phone` varchar(10) NOT NULL,
  `d_mail` varchar(25) NOT NULL,
  `d_gender` varchar(6) NOT NULL,
  `d_balance` float NOT NULL,
  `deposit` int(5) NOT NULL,
  `avail_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`d_id`, `d_nm`, `d_pwd`, `d_phone`, `d_mail`, `d_gender`, `d_balance`, `deposit`, `avail_status`) VALUES
(1, 'sagar', 'Sb12345', '9876543210', 'sagardel@gamil.com', 'male', 200, 1000, 1),
(2, 'smit', 'Sr12345', '987543210', 'smitdel@gmail.com', 'male', 100, 1000, 1),
(3, 'hiten', 'Hn12345', '9876543210', 'hitendel@gmail.com', 'male', 300, 1000, 1),
(4, 'bhut', 'Sb12345', '9876543210', 'bhutdel@gmail.com', 'female', 150, 1000, 1),
(5, 'smity', 'Sr12345', '9876543210', 'smitydel@gmail.com', 'female', 250, 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(5) NOT NULL,
  `dept_nm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_nm`) VALUES
(1, 'grocery'),
(2, 'cosmetics'),
(3, 'medicines'),
(4, ' dairy'),
(5, 'kitchen'),
(6, 'backery'),
(7, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `disc_id` int(5) NOT NULL,
  `perc` int(3) NOT NULL,
  `flat` int(3) NOT NULL,
  `upto` int(3) NOT NULL,
  `rps` int(3) NOT NULL,
  `code` varchar(10) NOT NULL,
  `p_id` int(5) NOT NULL,
  `sh_id` int(5) NOT NULL,
  `dept_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`disc_id`, `perc`, `flat`, `upto`, `rps`, `code`, `p_id`, `sh_id`, `dept_id`) VALUES
(1, 10, 0, 0, 0, 'PERC10', 1, 0, 0),
(2, 0, 20, 0, 0, 'FLAT20', 0, 2, 0),
(3, 0, 0, 50, 20, 'UPTO50', 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `i_id` int(5) NOT NULL,
  `pl_id` int(5) NOT NULL,
  `sh_id` int(5) NOT NULL,
  `price` float NOT NULL,
  `stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `pl_id`, `sh_id`, `price`, `stock`) VALUES
(1, 1, 1, 40, 1),
(2, 1, 6, 20, 1),
(3, 2, 6, 10, 1),
(4, 3, 6, 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_delivery`
--

CREATE TABLE `order_delivery` (
  `o_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `del_addr` varchar(100) NOT NULL,
  `eff_price` int(5) NOT NULL,
  `otp` int(6) NOT NULL,
  `sh_id` int(5) NOT NULL,
  `pay_method` varchar(10) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_shopkeeper`
--

CREATE TABLE `order_shopkeeper` (
  `id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `sh_id` int(5) NOT NULL,
  `pl_id` int(5) NOT NULL,
  `d_id` int(5) NOT NULL,
  `quantity` int(3) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(5) NOT NULL,
  `p_nm` varchar(15) NOT NULL,
  `dept_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_nm`, `dept_id`) VALUES
(1, 'soap', 1),
(2, 'shampoo', 1),
(3, 'tube', 2),
(4, 'maskara', 2),
(5, 'tablets', 3),
(6, 'creams', 3);

-- --------------------------------------------------------

--
-- Table structure for table `prod_list`
--

CREATE TABLE `prod_list` (
  `pl_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `pl_nm` varchar(15) NOT NULL,
  `pl_img` varchar(20) NOT NULL,
  `descr` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod_list`
--

INSERT INTO `prod_list` (`pl_id`, `p_id`, `pl_nm`, `pl_img`, `descr`) VALUES
(1, 1, 'detol', 'getosoap.jpg', 'per nang'),
(2, 2, 'head n shoulder', 'sampu.jpg', '1 L'),
(3, 1, 'lifebuoy', 'sb.png', 'per nang'),
(4, 3, 'soframycin', 'sb.png', ''),
(5, 2, 'Dove sampoo', 'sampudav.jpg', ''),
(6, 3, 'glocyn', 'sb.png', ''),
(7, 5, 'paracytamol', 'sb.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `sh_id` int(5) NOT NULL,
  `sh_nm` varchar(20) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `dept_id` tinyint(5) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`sh_id`, `sh_nm`, `addr`, `pincode`, `dept_id`, `img`) VALUES
(1, 'khodal', 'mota varachha', 394101, 1, 'sb.png'),
(2, 'JK', 'mota varachha', 394101, 2, 'jk.png'),
(3, 'krishna', 'rajkot', 388120, 2, 'hn.png'),
(4, 'janeman', 'junagafh', 388124, 3, 'pm.png'),
(5, 'gulabo', 'rajkot', 388120, 3, 'ds.png'),
(6, 'babitaji', 'junagadh', 388124, 1, 'sr.png');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeepers`
--

CREATE TABLE `shopkeepers` (
  `sh_id` int(5) NOT NULL,
  `s_nm` varchar(15) NOT NULL,
  `s_pwd` varchar(16) NOT NULL,
  `phone_num` bigint(10) NOT NULL,
  `s_mail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopkeepers`
--

INSERT INTO `shopkeepers` (`sh_id`, `s_nm`, `s_pwd`, `phone_num`, `s_mail`) VALUES
(1, 'parth', 'Pm12345', 9876543488, 'parthsk@gmail.com'),
(2, 'ravi', 'Rn12345', 9876543488, 'ravisk@gmail.com'),
(3, 'hiten', 'Hn12345', 9876543210, 'hitensk@gmail.com'),
(4, 'smit', 'Sr12345', 9876543210, 'smitsk@gmail.com'),
(5, 'khushi', 'Km12345', 9876543210, 'khushisk@gmail.com'),
(6, 'rhutwi', 'Rv12345', 9876543210, 'rhutwisk@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`disc_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `order_delivery`
--
ALTER TABLE `order_delivery`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_shopkeeper`
--
ALTER TABLE `order_shopkeeper`
  ADD UNIQUE KEY `s_id` (`sh_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `p_id` (`pl_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `prod_list`
--
ALTER TABLE `prod_list`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`sh_id`),
  ADD KEY `t_id` (`dept_id`);

--
-- Indexes for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  ADD PRIMARY KEY (`sh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `d_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `disc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `i_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_delivery`
--
ALTER TABLE `order_delivery`
  MODIFY `o_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prod_list`
--
ALTER TABLE `prod_list`
  MODIFY `pl_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `sh_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  MODIFY `sh_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
