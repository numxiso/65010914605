-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 05:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(9,2) NOT NULL,
  `p_ext` varchar(50) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_ext`, `c_id`) VALUES
(1, 'ชาเขียว', 'ชาเขียวหอมกรุ่นจากใบชา บดละเอียด เติมความสดชื่นและดีต่อสุขภาพ', 55.00, 'png', 1),
(2, 'ชาไทย', 'ชาไทยเข้มข้นหอมกลิ่นเครื่องเทศ ผสมกับนมสดหวานมัน', 55.00, 'png', 1),
(3, 'ชาน้ำผึ้งมะนาว', 'ชาสดชื่นผสมรสหวานจากน้ำผึ้งและเปรี้ยวจากมะนาว', 50.00, 'png', 1),
(4, 'นมสด', 'นมสดครีมมี่ รสชาติหวานมันจากนมแท้', 50.00, 'png', 2),
(5, 'นมสดสตอเบอร์รี่', 'นมสดหอมหวาน ผสมรสชาติสดชื่นจากสตอเบอร์รี่', 60.00, 'png', 2),
(6, 'นมสดคาราเมล', 'นมสดเนื้อเนียน ผสานรสหวานจากคาราเมล', 60.00, 'png', 2),
(7, 'โกโก้', 'โกโก้เข้มข้น หอมหวาน ปรับสมดุลรสช็อกโกแลต', 55.00, 'png', 2),
(8, 'อเมริการโน่', 'กาแฟดำรสเข้ม กลิ่นหอมสะอาดจากกาแฟคั่วคุณภาพ', 50.00, 'png', 3),
(9, 'เอสเพรสโซ่', 'กาแฟเอสเพรสโซ่เข้มข้น ท็อปด้วยครีมฟองกาแฟ', 55.00, 'png', 3),
(10, 'คาปูชิโน่', 'กาแฟผสมฟองนมหนานุ่ม รสชาติเข้มข้น', 55.00, 'png', 3),
(11, 'ลาเต้', 'กาแฟนมเนียนนุ่ม กลมกล่อมลงตัว', 55.00, 'png', 3),
(12, 'มอคค่า', 'กาแฟผสมช็อกโกแลตเข้มข้น เพิ่มความหวานมันจากนม', 55.00, 'png', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
