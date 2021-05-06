-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 07, 2021 at 12:48 AM
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
-- Database: `ecom_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `time` datetime NOT NULL,
  `shipped` varchar(30) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `size` varchar(11) NOT NULL,
  `payment` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `item_quantity`, `item_price`, `time`, `shipped`, `item_image`, `item_name`, `date`, `size`, `payment`, `email`) VALUES
(35, 1485540, 24, 1, 49.99, '2021-04-07 19:01:51', 'no', 'img/wing zero model kit.jpg', 'Wing Zero Figure', '2021-04-08', 'N/A', '', ''),
(36, 1851126, 34, 1, 29.99, '2021-04-08 11:35:56', 'no', 'img/pain.jpg', 'Pain boku no hero Figure', '2021-04-08', 'N/A', '', ''),
(37, 1851126, 50, 1, 39.99, '2021-04-08 12:02:21', 'no', 'img/lewd shirt.jpg', 'Sexy anime girl shirt', '2021-04-08', 'medium', '', ''),
(38, 1851126, 30, 1, 49.99, '2021-04-08 12:39:13', 'no', 'img/vegito.jpg', 'Vegito DBZ Figure', '2021-04-08', 'N/A', '', ''),
(39, 1851126, 53, 1, 39.99, '2021-04-08 12:39:19', 'no', 'img/castle in the sky.jpg', 'Castle In The Sky Poster', '2021-04-08', '8x10', '', ''),
(40, 1851126, 46, 1, 39.99, '2021-04-08 14:41:47', 'no', 'img/creepy shirt.jpg', 'Rei Ayanamei shirt', '2021-04-08', 'small', '', ''),
(43, 924209, 27, 2, 49.99, '2021-04-13 20:26:53', 'no', 'img/jiren.jpg', 'Jiren DBZ Figure', '2021-04-14', 'N/A', 'unpaid', ''),
(44, 924209, 29, 1, 49.99, '2021-04-13 20:26:55', 'no', 'img/nappa.jpg', 'Nappa DBZ Figure', '2021-04-14', 'N/A', 'unpaid', ''),
(45, 924209, 57, 1, 39.99, '2021-04-13 20:27:00', 'no', 'img/hunter poster.jpeg', 'Hunter Poster', '2021-04-14', '8x10', 'unpaid', ''),
(46, 924209, 51, 1, 39.99, '2021-04-13 20:27:02', 'no', 'img/akira poster.jpg', 'Akira Poster', '2021-04-14', '8x10', 'unpaid', ''),
(49, 468849, 5, 1, 59.99, '2021-04-13 21:11:28', 'no', 'RG-gundam.jpg', 'RG-Gundam', '2021-04-14', 'N/A', 'unpaid', ''),
(113, 1676123, 65, 1, 299.99, '2021-04-24 20:02:55', 'no', 'img/ps4', 'PS4', '2021-04-25', 'N/A', 'unpaid', ''),
(208, 648600, 43, 1, 39.99, '2021-04-29 14:54:23', 'no', 'img/another anime shirt.jpg', 'Sasuke wannabe shirt', '2021-04-29', 'medium', 'unpaid', ''),
(209, 648600, 46, 1, 39.99, '2021-04-29 15:34:48', 'no', 'img/creepy shirt.jpg', 'Rei Ayanamei shirt', '2021-04-29', 'medium', 'unpaid', ''),
(222, 2169236, 4, 1, 1099.00, '2021-04-30 14:14:49', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(229, 2269700, 4, 1, 1099.00, '2021-04-30 17:13:32', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(230, 2628177, 2, 1, 399.99, '2021-04-30 18:19:40', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-01', '', 'unpaid', ''),
(233, 2650635, 2, 1, 399.99, '2021-04-30 18:35:22', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-01', '', 'unpaid', ''),
(234, 2650635, 1, 1, 49.99, '2021-04-30 18:35:24', 'no', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-01', '', 'unpaid', ''),
(237, 1110322, 4, 1, 1099.00, '2021-05-01 16:24:02', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'unpaid', ''),
(239, 2329961, 4, 1, 1099.00, '2021-05-01 16:42:15', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'unpaid', ''),
(241, 1702690, 4, 1, 1099.00, '2021-05-01 16:48:26', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'unpaid', ''),
(242, 2363489, 4, 1, 1099.00, '2021-05-01 18:01:19', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-02', '', 'unpaid', ''),
(244, 2569522, 2, 1, 399.99, '2021-05-03 14:25:52', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-03', '', 'unpaid', ''),
(247, 1073329, 4, 1, 1099.00, '2021-05-03 14:32:57', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(249, 2024686, 4, 1, 1099.00, '2021-05-03 15:03:20', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(250, 2024686, 1, 1, 49.99, '2021-05-03 15:03:22', 'no', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-03', '', 'unpaid', ''),
(251, 2088235, 4, 1, 1099.00, '2021-05-03 15:11:10', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(253, 2088235, 2, 1, 399.99, '2021-05-03 15:11:20', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-03', '', 'unpaid', ''),
(255, 2849837, 4, 1, 1099.00, '2021-05-03 15:44:08', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(256, 2849837, 2, 1, 399.99, '2021-05-03 15:44:10', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-03', '', 'unpaid', ''),
(257, 2849837, 1, 1, 49.99, '2021-05-03 15:44:11', 'no', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-03', '', 'unpaid', ''),
(281, 1718111, 4, 1, 1099.00, '2021-05-04 19:18:55', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-05', '', 'unpaid', '');

-- --------------------------------------------------------

--
-- Table structure for table `mo`
--

CREATE TABLE `mo` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mo`
--

INSERT INTO `mo` (`Id`, `Name`, `Address`, `Phone`, `Email`, `user_id`, `time`, `date`) VALUES
(1, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 2558282, '2021/03/24 18:11:32 pm', '0000-00-00'),
(2, 'derpo derpo', '506 adelphi st East Meadow NY', '5164176619', 'ashhar@mjashhar.com', 2558282, '2021/03/24 18:17:38 pm', '0000-00-00'),
(3, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 2558282, '2021/03/24 18:20:49 pm', '0000-00-00'),
(4, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 828011, '2021/03/26 17:08:50 pm', '0000-00-00'),
(5, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '1111111111', 'molashhar@aol.com', 828011, '2021/03/26 17:37:25 pm', '0000-00-00'),
(6, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/01 14:57:49 pm', '0000-00-00'),
(7, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/01 15:08:56 pm', '0000-00-00'),
(8, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/01 19:28:16 pm', '0000-00-00'),
(9, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/01 19:31:36 pm', '0000-00-00'),
(10, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/01 19:32:39 pm', '0000-00-00'),
(11, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 1543532, '2021/04/02 16:45:25 pm', '0000-00-00'),
(12, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/02 16:45:58 pm', '0000-00-00'),
(13, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/02 17:01:16 pm', '0000-00-00'),
(14, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 815004, '2021/04/03 16:54:02 pm', '0000-00-00'),
(15, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/03 16:54:52 pm', '2021-04-03'),
(16, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/03 17:35:25 pm', '2021-04-03'),
(17, 'Ashhar Kausar', '506 adelphi st East Meadow NY', '516-417-6619', 'molashhar@aol.com', 31, '2021/04/04 16:23:25 pm', '2021-04-04'),
(18, 'Ash mo', '506 adelphi st', '5164176619', 'molashhar@aol.com', 2157795, '2021/04/13 20:21:23 pm', '2021-04-14'),
(19, 'Peter griffin', '123 john doe st', '4569875564', 'petergriffin@aol.com', 924209, '2021/04/13 20:27:21 pm', '2021-04-14'),
(20, 'derpo derpo', '123 john doe st', '5164176619', 'ashhar@mjashhar.com', 41, '2021/04/20 18:44:01 pm', '2021-04-21'),
(21, 'Ashhar Kausar', '506 adelphi st', '5164176619', 'molashhar@aol.com', 31, '2021/04/21 15:06:52 pm', '2021-04-21'),
(22, 'Ashhar Kausar', '123 john doe st', '4569875564', 'molashhar@aol.com', 1401805, '2021/04/21 17:52:20 pm', '2021-04-21'),
(23, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 31, '2021/04/21 19:09:16 pm', '2021-04-22'),
(24, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 40, '2021/04/21 19:31:56 pm', '2021-04-22'),
(25, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 31, '2021/04/21 23:44:31 pm', '2021-04-22'),
(26, 'Ashhar Kausar', '123 john doe st', '4569875564', 'molashhar@aol.com', 41, '2021/04/22 22:30:50 pm', '2021-04-23'),
(27, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/22 22:32:54 pm', '2021-04-23'),
(28, 'Jeremey Martins', '123 john doe st', '5164176619', 'molashhar@aol.com', 2438802, '2021/04/23 10:18:59 am', '2021-04-23'),
(29, 'derpo derpo', '123 john doe st', '5164176619', 'ashhar@mjashhar.com', 1670537, '2021/04/23 10:21:02 am', '2021-04-23'),
(30, 'derpo derpo', '123 john doe st', '5164176619', 'ashhar@mjashhar.com', 2604001, '2021/04/23 10:22:22 am', '2021-04-23'),
(31, 'derpo derpo', '506 adelphi st', '5164176619', 'ashhar@mjashhar.com', 41, '2021/04/23 12:44:01 pm', '2021-04-23'),
(32, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1392602, '2021/04/23 12:45:13 pm', '2021-04-23'),
(33, 'derpo derpo', '123 john doe st', '5164176619', 'ashhar@mjashhar.com', 1737649, '2021/04/23 12:46:29 pm', '2021-04-23'),
(34, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 960007, '2021/04/23 13:34:32 pm', '2021-04-23'),
(35, 'derpo derpo', '123 john doe st', '5164176619', 'ashhar@mjashhar.com', 920437, '2021/04/23 13:35:17 pm', '2021-04-23'),
(36, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2258225, '2021/04/23 13:35:54 pm', '2021-04-23'),
(37, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/27 12:52:26 pm', '2021-04-27'),
(38, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/28 16:55:23 pm', '2021-04-28'),
(39, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/28 17:05:48 pm', '2021-04-28'),
(40, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2184115, '2021/04/30 13:08:17 pm', '2021-04-30'),
(41, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2508065, '2021/04/30 13:12:56 pm', '2021-04-30'),
(42, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1624812, '2021/04/30 13:18:24 pm', '2021-04-30'),
(43, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2875500, '2021/04/30 13:28:49 pm', '2021-04-30'),
(44, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2875500, '2021/04/30 13:29:26 pm', '2021-04-30'),
(45, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2875500, '2021/04/30 13:32:10 pm', '2021-04-30'),
(46, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2875500, '2021/04/30 13:32:43 pm', '2021-04-30'),
(47, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 319641, '2021/04/30 13:39:04 pm', '2021-04-30'),
(48, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/30 14:00:44 pm', '2021-04-30'),
(49, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/30 14:01:34 pm', '2021-04-30'),
(50, 'Ashhar Kausar', '123 john doe st', '4569875564', 'molashhar@aol.com', 41, '2021/04/30 14:02:25 pm', '2021-04-30'),
(51, 'derpo derpo', '123 john doe st', '5164176619', 'ashhar@mjashhar.com', 41, '2021/04/30 14:03:11 pm', '2021-04-30'),
(52, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/30 14:07:30 pm', '2021-04-30'),
(53, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/30 14:08:01 pm', '2021-04-30'),
(54, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/04/30 14:11:34 pm', '2021-04-30'),
(55, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2169236, '2021/04/30 14:15:06 pm', '2021-04-30'),
(56, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2169236, '2021/04/30 14:16:02 pm', '2021-04-30'),
(57, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2169236, '2021/04/30 14:17:46 pm', '2021-04-30'),
(58, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2169236, '2021/04/30 14:28:13 pm', '2021-04-30'),
(59, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1176622, '2021/04/30 16:32:51 pm', '2021-04-30'),
(60, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1176622, '2021/04/30 16:35:00 pm', '2021-04-30'),
(61, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2426775, '2021/04/30 16:43:46 pm', '2021-04-30'),
(62, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1731645, '2021/04/30 16:50:41 pm', '2021-04-30'),
(63, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2269700, '2021/04/30 17:13:36 pm', '2021-04-30'),
(64, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2269700, '2021/04/30 17:14:13 pm', '2021-04-30'),
(65, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2628177, '2021/04/30 18:19:49 pm', '2021-05-01'),
(66, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2628177, '2021/04/30 18:21:58 pm', '2021-05-01'),
(67, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2628177, '2021/04/30 18:21:58 pm', '2021-05-01'),
(68, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2628177, '2021/04/30 18:31:39 pm', '2021-05-01'),
(69, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2628177, '2021/04/30 18:34:24 pm', '2021-05-01'),
(70, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 846152, '2021/05/01 15:59:24 pm', '2021-05-01'),
(71, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1110322, '2021/05/01 16:24:06 pm', '2021-05-01'),
(72, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1110322, '2021/05/01 16:25:38 pm', '2021-05-01'),
(73, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2329961, '2021/05/01 16:42:18 pm', '2021-05-01'),
(74, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1702690, '2021/05/01 16:48:31 pm', '2021-05-01'),
(75, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2363489, '2021/05/01 18:01:25 pm', '2021-05-02'),
(76, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2569522, '2021/05/03 14:26:09 pm', '2021-05-03'),
(77, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 1073329, '2021/05/03 14:33:01 pm', '2021-05-03'),
(78, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2024686, '2021/05/03 15:03:25 pm', '2021-05-03'),
(79, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2088235, '2021/05/03 15:11:24 pm', '2021-05-03'),
(80, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2849837, '2021/05/03 15:44:15 pm', '2021-05-03'),
(81, 'Ashhar Kausar', '123 john doe st', '4569875564', 'ushman70@gmail.com', 1376480, '2021/05/03 19:36:41 pm', '2021-05-04'),
(82, 'Ashhar Kausar', '123 john doe st', '5164176619', 'ushman70@gmail.com', 2331850, '2021/05/03 19:40:38 pm', '2021-05-04'),
(83, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2461550, '2021/05/03 19:42:47 pm', '2021-05-04'),
(84, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 583651, '2021/05/03 19:54:16 pm', '2021-05-04'),
(85, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2906705, '2021/05/03 20:01:22 pm', '2021-05-04'),
(86, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 2832416, '2021/05/03 20:05:32 pm', '2021-05-04'),
(87, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 301009, '2021/05/03 20:40:19 pm', '2021-05-04'),
(88, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 980500, '2021/05/03 21:50:50 pm', '2021-05-04'),
(89, 'derpo derpo', '123 john doe st', '5164176619', 'ashhar@mjashhar.com', 1445595, '2021/05/03 21:59:36 pm', '2021-05-04'),
(90, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/05/05 14:22:06 pm', '2021-05-05'),
(91, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/05/05 14:49:56 pm', '2021-05-05'),
(92, 'Ashhar Kausar', '506 adelphi st', '5164176619', 'molashhar@aol.com', 31, '2021/05/06 13:04:42 pm', '2021-05-06'),
(93, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 31, '2021/05/06 13:19:23 pm', '2021-05-06'),
(94, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/05/06 14:43:47 pm', '2021-05-06'),
(95, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/05/06 14:46:05 pm', '2021-05-06'),
(96, 'Ashhar Kausar', '506 adelphi st', '5164176619', 'molashhar@aol.com', 41, '2021/05/06 14:46:52 pm', '2021-05-06'),
(97, 'Ashhar Kausar', '123 john doe st', '5164176619', 'molashhar@aol.com', 41, '2021/05/06 17:08:57 pm', '2021-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `mocart`
--

CREATE TABLE `mocart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `time` datetime NOT NULL,
  `shipped` varchar(30) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `size` varchar(11) NOT NULL,
  `payment` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mocart`
--

INSERT INTO `mocart` (`cart_id`, `user_id`, `item_id`, `item_quantity`, `item_price`, `time`, `shipped`, `item_image`, `item_name`, `date`, `size`, `payment`, `email`) VALUES
(43, 924209, 27, 2, 49.99, '2021-04-13 20:26:53', 'processing', 'img/jiren.jpg', 'Jiren DBZ Figure', '2021-04-14', 'N/A', 'unpaid', ''),
(44, 924209, 29, 1, 49.99, '2021-04-13 20:26:55', 'processing', 'img/nappa.jpg', 'Nappa DBZ Figure', '2021-04-14', 'N/A', 'unpaid', ''),
(45, 924209, 57, 1, 39.99, '2021-04-13 20:27:00', 'processing', 'img/hunter poster.jpeg', 'Hunter Poster', '2021-04-14', '8x10', 'unpaid', ''),
(46, 924209, 51, 1, 39.99, '2021-04-13 20:27:02', 'processing', 'img/akira poster.jpg', 'Akira Poster', '2021-04-14', '8x10', 'unpaid', ''),
(89, 2438802, 59, 1, 9.99, '2021-04-23 10:18:54', 'shipped', 'img/dndmug.jpg', 'Dungeons and Dragons Mug', '2021-04-23', 'N/A', 'paid', ''),
(90, 1670537, 45, 1, 39.99, '2021-04-23 10:20:42', 'shipped', 'img/bleach shirt.jpg', 'Bleach shirt', '2021-04-23', 'small', 'paid', ''),
(91, 1670537, 50, 1, 39.99, '2021-04-23 10:20:43', 'shipped', 'img/lewd shirt.jpg', 'Sexy anime girl shirt', '2021-04-23', 'medium', 'paid', ''),
(94, 2604001, 23, 1, 49.99, '2021-04-23 10:21:54', 'shipped', 'img/sd gundam kit.jpg', 'SD Gundam Figure', '2021-04-23', 'N/A', 'paid', ''),
(85, 41, 5, 1, 59.99, '2021-04-22 22:39:04', 'shipped', 'RG-gundam.jpg', 'RG-Gundam', '2021-04-23', 'N/A', 'paid', ''),
(86, 41, 5, 1, 59.99, '2021-04-22 23:00:35', 'shipped', 'RG-gundam.jpg', 'RG-Gundam', '2021-04-23', 'N/A', 'paid', ''),
(95, 1392602, 46, 1, 39.99, '2021-04-23 12:44:44', 'shipped', 'img/creepy shirt.jpg', 'Rei Ayanamei shirt', '2021-04-23', 'medium', 'paid', ''),
(97, 1392602, 24, 1, 49.99, '2021-04-23 12:44:59', 'shipped', 'img/wing zero model kit.jpg', 'Wing Zero Figure', '2021-04-23', 'N/A', 'paid', ''),
(99, 1737649, 38, 1, 59.99, '2021-04-23 12:46:19', 'shipped', 'img/kakashi.jpg', 'Kakashi Naruto Figure', '2021-04-23', 'N/A', 'paid', ''),
(100, 1737649, 39, 1, 59.99, '2021-04-23 12:46:21', 'shipped', 'img/naruto.jpg', 'Naruto Naruto Figure', '2021-04-23', 'N/A', 'paid', ''),
(101, 1737649, 60, 1, 9.99, '2021-04-23 12:46:25', 'shipped', 'img/gamer-fuel.jpg', 'Gamer Fuel Mug', '2021-04-23', 'N/A', 'paid', ''),
(102, 960007, 46, 1, 39.99, '2021-04-23 13:34:26', 'shipped', 'img/creepy shirt.jpg', 'Rei Ayanamei shirt', '2021-04-23', 'small', 'paid', ''),
(103, 960007, 45, 1, 39.99, '2021-04-23 13:34:27', 'shipped', 'img/bleach shirt.jpg', 'Bleach shirt', '2021-04-23', 'small', 'paid', ''),
(104, 960007, 44, 1, 39.99, '2021-04-23 13:34:28', 'shipped', 'img/bachi shirt.jpg', 'Bachi Shirt', '2021-04-23', 'small', 'paid', ''),
(80, 31, 23, 2, 49.99, '2021-04-21 23:44:09', 'shipped', 'img/sd gundam kit.jpg', 'SD Gundam Figure', '2021-04-22', 'N/A', 'paid', ''),
(194, 41, 2, 1, 399.99, '2021-04-26 20:20:44', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-04-27', '', 'paid', ''),
(200, 41, 26, 1, 49.99, '2021-04-27 12:32:51', 'shipped', 'img/chichi.jpg', 'ChiChi DBZ Figure', '2021-04-27', 'N/A', 'paid', ''),
(201, 41, 37, 1, 59.99, '2021-04-27 12:32:56', 'shipped', 'img/konan.jpg', 'Konan Naruto Figure', '2021-04-27', 'N/A', 'paid', ''),
(202, 41, 20, 1, 49.99, '2021-04-27 12:33:01', 'shipped', 'img/gundam f91.jpg', 'Gundam F91 Figure', '2021-04-27', 'N/A', 'paid', ''),
(203, 41, 20, 1, 49.99, '2021-04-28 16:55:16', 'shipped', 'img/gundam f91', 'Gundam F91 Figure', '2021-04-28', 'N/A', 'paid', ''),
(204, 41, 19, 1, 49.99, '2021-04-28 16:55:19', 'shipped', 'img/gundam unicorn kit.jpg', 'Gundam Unicorn Figure', '2021-04-28', 'N/A', 'paid', ''),
(205, 41, 26, 1, 49.99, '2021-04-28 17:05:33', 'shipped', 'img/chichi.jpg', 'ChiChi DBZ Figure', '2021-04-28', 'N/A', 'paid', ''),
(206, 41, 27, 1, 49.99, '2021-04-28 17:05:35', 'shipped', 'img/jiren.jpg', 'Jiren DBZ Figure', '2021-04-28', 'N/A', 'paid', ''),
(211, 2508065, 1, 1, 49.99, '2021-04-30 13:09:05', 'shipped', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-04-30', '', 'paid', ''),
(212, 2508065, 2, 1, 399.99, '2021-04-30 13:12:46', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-04-30', '', 'paid', ''),
(214, 2508065, 4, 1, 1099.00, '2021-04-30 13:12:50', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(215, 1624812, 2, 1, 399.99, '2021-04-30 13:13:32', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-04-30', '', 'paid', ''),
(218, 2875500, 4, 1, 1099.00, '2021-04-30 13:28:44', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(218, 2875500, 4, 1, 1099.00, '2021-04-30 13:28:44', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(218, 2875500, 4, 1, 1099.00, '2021-04-30 13:28:44', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(218, 2875500, 4, 1, 1099.00, '2021-04-30 13:28:44', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(218, 2875500, 4, 1, 1099.00, '2021-04-30 13:28:44', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(219, 319641, 4, 1, 1099.00, '2021-04-30 13:33:19', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(222, 2169236, 4, 1, 1099.00, '2021-04-30 14:14:49', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(222, 2169236, 4, 1, 1099.00, '2021-04-30 14:14:49', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(222, 2169236, 4, 1, 1099.00, '2021-04-30 14:14:49', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(222, 2169236, 4, 1, 1099.00, '2021-04-30 14:14:49', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(225, 1176622, 2, 1, 399.99, '2021-04-30 16:32:21', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-04-30', '', 'paid', ''),
(225, 1176622, 2, 1, 399.99, '2021-04-30 16:32:21', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-04-30', '', 'paid', ''),
(226, 2426775, 4, 1, 1099.00, '2021-04-30 16:43:26', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'paid', ''),
(229, 2269700, 4, 1, 1099.00, '2021-04-30 17:13:32', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(229, 2269700, 4, 1, 1099.00, '2021-04-30 17:13:32', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(230, 2628177, 2, 1, 399.99, '2021-04-30 18:19:40', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-01', '', 'unpaid', ''),
(230, 2628177, 2, 1, 399.99, '2021-04-30 18:19:40', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-01', '', 'unpaid', ''),
(230, 2628177, 2, 1, 399.99, '2021-04-30 18:19:40', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-01', '', 'unpaid', ''),
(230, 2628177, 2, 1, 399.99, '2021-04-30 18:19:40', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-01', '', 'unpaid', ''),
(230, 2628177, 2, 1, 399.99, '2021-04-30 18:19:40', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-01', '', 'unpaid', ''),
(235, 846152, 4, 1, 1099.00, '2021-05-01 15:58:58', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'paid', ''),
(237, 1110322, 4, 1, 1099.00, '2021-05-01 16:24:02', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'unpaid', ''),
(237, 1110322, 4, 1, 1099.00, '2021-05-01 16:24:02', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'unpaid', ''),
(239, 2329961, 4, 1, 1099.00, '2021-05-01 16:42:15', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'unpaid', ''),
(241, 1702690, 4, 1, 1099.00, '2021-05-01 16:48:26', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-01', '', 'unpaid', ''),
(242, 2363489, 4, 1, 1099.00, '2021-05-01 18:01:19', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-02', '', 'unpaid', ''),
(244, 2569522, 2, 1, 399.99, '2021-05-03 14:25:52', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-03', '', 'unpaid', ''),
(247, 1073329, 4, 1, 1099.00, '2021-05-03 14:32:57', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(249, 2024686, 4, 1, 1099.00, '2021-05-03 15:03:20', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(250, 2024686, 1, 1, 49.99, '2021-05-03 15:03:22', 'no', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-03', '', 'unpaid', ''),
(251, 2088235, 4, 1, 1099.00, '2021-05-03 15:11:10', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(253, 2088235, 2, 1, 399.99, '2021-05-03 15:11:20', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-03', '', 'unpaid', ''),
(255, 2849837, 4, 1, 1099.00, '2021-05-03 15:44:08', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-03', '', 'unpaid', ''),
(256, 2849837, 2, 1, 399.99, '2021-05-03 15:44:10', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-03', '', 'unpaid', ''),
(257, 2849837, 1, 1, 49.99, '2021-05-03 15:44:11', 'no', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-03', '', 'unpaid', ''),
(259, 1376480, 4, 1, 1099.00, '2021-05-03 19:36:31', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-04', '', 'paid', ''),
(260, 2331850, 1, 1, 49.99, '2021-05-03 19:40:29', 'shipped', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-04', '', 'paid', ''),
(261, 2331850, 2, 1, 399.99, '2021-05-03 19:40:32', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-05-04', '', 'paid', ''),
(263, 2461550, 2, 1, 399.99, '2021-05-03 19:42:42', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-05-04', '', 'paid', ''),
(265, 583651, 1, 1, 49.99, '2021-05-03 19:54:08', 'shipped', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-04', '', 'paid', ''),
(266, 583651, 2, 1, 399.99, '2021-05-03 19:54:10', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-05-04', '', 'paid', ''),
(268, 2906705, 2, 1, 399.99, '2021-05-03 20:01:15', 'shipped', 'ps5-icon.jpg', 'Playstation5', '2021-05-04', '', 'paid', ''),
(270, 2906705, 4, 1, 1099.00, '2021-05-03 20:01:18', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-04', '', 'paid', ''),
(271, 2832416, 4, 1, 1099.00, '2021-05-03 20:05:26', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-04', '', 'paid', ''),
(274, 301009, 4, 1, 1099.00, '2021-05-03 20:40:15', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-04', '', 'paid', ''),
(275, 980500, 2, 1, 399.99, '2021-05-03 21:50:36', 'sh', 'ps5-icon.jpg', 'Playstation5', '2021-05-04', '', 'paid', ''),
(276, 980500, 1, 1, 49.99, '2021-05-03 21:50:42', 'sh', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-04', '', 'paid', ''),
(277, 980500, 4, 1, 1099.00, '2021-05-03 21:50:44', 'sh', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-04', '', 'paid', ''),
(280, 1445595, 4, 1, 1099.00, '2021-05-03 21:59:32', 'shipped', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-04', '', 'paid', ''),
(221, 41, 4, 1, 1099.00, '2021-04-30 13:57:27', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-04-30', '', 'unpaid', ''),
(282, 41, 50, 1, 39.99, '2021-05-05 14:21:50', 'shipped', 'img/lewd shirt.jpg', 'Sexy anime girl shirt', '2021-05-05', 'medium', 'paid', ''),
(283, 41, 19, 2, 49.99, '2021-05-05 14:49:41', 'no', 'img/gundam unicorn kit.jpg', 'Gundam Unicorn Figure', '2021-05-05', 'N/A', 'paid', ''),
(284, 41, 22, 3, 49.99, '2021-05-05 14:49:43', 'no', 'img/phoneix destroy kit.jpg', 'Gundam Phoenix destroyer Figure', '2021-05-05', 'N/A', 'paid', ''),
(285, 31, 1, 1, 49.99, '2021-05-06 13:04:36', 'no', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-06', '', 'paid', ''),
(286, 31, 2, 1, 399.99, '2021-05-06 13:04:39', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-06', '', 'paid', ''),
(285, 31, 1, 1, 49.99, '2021-05-06 13:04:36', 'no', 'UI-goku.jpg', 'Ultra-Instinct-Goku-Figure', '2021-05-06', '', 'paid', ''),
(286, 31, 2, 1, 399.99, '2021-05-06 13:04:39', 'no', 'ps5-icon.jpg', 'Playstation5', '2021-05-06', '', 'paid', ''),
(287, 31, 4, 1, 1099.00, '2021-05-06 13:17:31', 'no', 'AsusROGicon.jpg', 'ASUS-ROG', '2021-05-06', '', 'paid', ''),
(288, 31, 3, 1, 45.99, '2021-05-06 13:19:19', 'no', 'genesis-hoodie.jpg', 'Evangelion-hoodie', '2021-05-06', '', 'paid', ''),
(289, 41, 20, 1, 49.99, '2021-05-06 14:43:40', 'no', 'img/gundam f91', 'Gundam F91 Figure', '2021-05-06', 'N/A', 'paid', ''),
(290, 41, 21, 1, 49.99, '2021-05-06 14:43:42', 'no', 'img/justice gundam kit.jpg', 'Justice Gundam Figure', '2021-05-06', 'N/A', 'paid', ''),
(291, 41, 19, 1, 49.99, '2021-05-06 14:43:43', 'no', 'img/gundam unicorn kit.jpg', 'Gundam Unicorn Figure', '2021-05-06', 'N/A', 'paid', ''),
(292, 41, 44, 1, 39.99, '2021-05-06 14:45:53', 'no', 'img/bachi shirt.jpg', 'Bachi Shirt', '2021-05-06', 'medium', 'paid', ''),
(293, 41, 45, 1, 39.99, '2021-05-06 14:45:56', 'no', 'img/bleach shirt.jpg', 'Bleach shirt', '2021-05-06', 'medium', 'paid', ''),
(294, 41, 46, 1, 39.99, '2021-05-06 14:45:59', 'no', 'img/creepy shirt.jpg', 'Rei Ayanamei shirt', '2021-05-06', 'medium', 'paid', ''),
(295, 41, 60, 1, 9.99, '2021-05-06 14:46:45', 'no', 'img/gamer-fuel.jpg', 'Gamer Fuel Mug', '2021-05-06', 'N/A', 'paid', ''),
(296, 41, 59, 1, 9.99, '2021-05-06 14:46:47', 'no', 'img/dndmug.jpg', 'Dungeons and Dragons Mug', '2021-05-06', 'N/A', 'paid', ''),
(297, 41, 60, 1, 9.99, '2021-05-06 17:08:34', 'no', 'img/gamer-fuel.jpg', 'Gamer Fuel Mug', '2021-05-06', 'N/A', 'paid', ''),
(298, 41, 59, 1, 9.99, '2021-05-06 17:08:36', 'no', 'img/dndmug.jpg', 'Dungeons and Dragons Mug', '2021-05-06', 'N/A', 'paid', ''),
(299, 41, 23, 1, 49.99, '2021-05-06 17:08:52', 'no', 'img/sd gundam kit.jpg', 'SD Gundam Figure', '2021-05-06', 'N/A', 'paid', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `item_quantity` int(11) NOT NULL,
  `keyword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`, `item_quantity`, `keyword`) VALUES
(1, '', 'Ultra-Instinct-Goku-Figure', 49.99, 'UI-goku.jpg', NULL, 1, 'dragonballz'),
(2, '', 'Playstation5', 399.99, 'ps5-icon.jpg', NULL, 1, 'ps5'),
(3, '', 'Evangelion-hoodie', 45.99, 'genesis-hoodie.jpg', NULL, 1, 'evangelion'),
(4, '', 'ASUS-ROG', 1099.00, 'AsusROGicon.jpg', NULL, 1, 'pc'),
(5, '', 'RG-Gundam', 59.99, 'RG-gundam.jpg', NULL, 1, 'gundam'),
(6, '', 'Multi-eyes poster', 59.99, 'cool-poster.jpg', NULL, 1, 'poster'),
(19, '', 'Gundam Unicorn Figure', 49.99, 'img/gundam unicorn kit.jpg', '0000-00-00 00:00:00', 1, 'gundam'),
(20, '', 'Gundam F91 Figure', 49.99, 'img/gundam f91', '0000-00-00 00:00:00', 1, 'gundam'),
(21, '', 'Justice Gundam Figure', 49.99, 'img/justice gundam kit.jpg', '0000-00-00 00:00:00', 1, 'gundam'),
(22, '', 'Gundam Phoenix destroyer Figure', 49.99, 'img/phoneix destroy kit.jpg', '0000-00-00 00:00:00', 1, 'gundam'),
(23, '', 'SD Gundam Figure', 49.99, 'img/sd gundam kit.jpg', '0000-00-00 00:00:00', 1, 'gundam'),
(24, '', 'Wing Zero Figure', 49.99, 'img/wing zero model kit.jpg', '0000-00-00 00:00:00', 1, 'gundam'),
(25, '', 'Bardock DBZ Figure', 49.99, 'img/bardock.jpg', '0000-00-00 00:00:00', 1, 'dragonballz'),
(26, '', 'ChiChi DBZ Figure', 49.99, 'img/chichi.jpg', '0000-00-00 00:00:00', 1, 'dragonballz'),
(27, '', 'Jiren DBZ Figure', 49.99, 'img/jiren.jpg', '0000-00-00 00:00:00', 1, 'dragonballz'),
(28, '', 'Launch DBZ Figure', 49.99, 'img/launch.jpg', '0000-00-00 00:00:00', 1, 'dragonballz'),
(29, '', 'Nappa DBZ Figure', 49.99, 'img/nappa.jpg', '0000-00-00 00:00:00', 1, 'dragonballz'),
(30, '', 'Vegito DBZ Figure', 49.99, 'img/vegito.jpg', '0000-00-00 00:00:00', 1, 'dragonballz'),
(31, '', 'Deku boku no hero Figure', 29.99, 'img/deku.jpg', '0000-00-00 00:00:00', 1, 'my hero'),
(32, '', 'Froppy boku no hero Figure', 29.99, 'img/froggirl.jpg', '0000-00-00 00:00:00', 1, 'my hero'),
(33, '', 'Kachan boku no hero Figure', 29.99, 'img/kachan.png', '0000-00-00 00:00:00', 1, 'my hero'),
(34, '', 'Pain boku no hero Figure', 29.99, 'img/pain.jpg', '0000-00-00 00:00:00', 1, 'my hero'),
(35, '', 'Uraraka boku no hero Figure', 29.99, 'img/uraraka.jpg', '0000-00-00 00:00:00', 1, 'my hero'),
(36, '', 'Itachi Naruto Figure', 59.99, 'img/itachi.jpg', '0000-00-00 00:00:00', 1, 'Naruto'),
(37, '', 'Konan Naruto Figure', 59.99, 'img/konan.jpg', '0000-00-00 00:00:00', 1, 'naruto'),
(38, '', 'Kakashi Naruto Figure', 59.99, 'img/kakashi.jpg', '0000-00-00 00:00:00', 1, 'naruto'),
(39, '', 'Naruto Naruto Figure', 59.99, 'img/naruto.jpg', '0000-00-00 00:00:00', 1, 'naruto'),
(40, '', 'Sasuke Naruto Figure', 59.99, 'img/sasuke.jpg', '0000-00-00 00:00:00', 1, 'naruto'),
(41, '', 'Senju Naruto Figure', 59.99, 'img/senju.jpg', '0000-00-00 00:00:00', 1, 'naruto'),
(42, '', 'Tsunade Naruto Figure', 59.99, 'img/tsunade.jpg', '0000-00-00 00:00:00', 1, 'naruto'),
(43, '', 'Sasuke wannabe shirt', 39.99, 'img/another anime shirt.jpg', '0000-00-00 00:00:00', 1, 'shirt'),
(44, '', 'Bachi Shirt', 39.99, 'img/bachi shirt.jpg', '0000-00-00 00:00:00', 1, 'shirt'),
(45, '', 'Bleach shirt', 39.99, 'img/bleach shirt.jpg', '0000-00-00 00:00:00', 1, 'shirt'),
(46, '', 'Rei Ayanamei shirt', 39.99, 'img/creepy shirt.jpg', '0000-00-00 00:00:00', 1, 'shirt'),
(47, '', 'Eva 01 shirt', 39.99, 'img/evangelion shirt.png', '0000-00-00 00:00:00', 1, 'shirt'),
(48, '', 'Hatsune Idol shirt', 39.99, 'img/hatsune miku shirt.jpg', '0000-00-00 00:00:00', 1, 'shirt'),
(49, '', 'Generic anime girl shirt', 39.99, 'img/idolshirt.jpg', '0000-00-00 00:00:00', 1, 'shirt'),
(50, '', 'Sexy anime girl shirt', 39.99, 'img/lewd shirt.jpg', '0000-00-00 00:00:00', 1, 'shirt'),
(51, '', 'Akira Poster', 39.99, 'img/akira poster.jpg', '0000-00-00 00:00:00', 1, 'poster'),
(52, '', 'Boku No Hero Poster', 39.99, 'img/boku poster.jpg', '0000-00-00 00:00:00', 1, 'poster'),
(53, '', 'Castle In The Sky Poster', 39.99, 'img/castle in the sky.jpg', '0000-00-00 00:00:00', 1, 'poster'),
(54, '', 'Samurai Champloo Poster', 39.99, 'img/champloo poster.jpg', '0000-00-00 00:00:00', 1, 'poster'),
(55, '', 'Death Note Poster', 39.99, 'img/deathnote poster.jpeg', '0000-00-00 00:00:00', 1, 'poster'),
(56, '', 'Evangelion Poster', 39.99, 'img/eva poster.jpg', '0000-00-00 00:00:00', 1, 'poster'),
(57, '', 'Hunter Poster', 39.99, 'img/hunter poster.jpeg', '0000-00-00 00:00:00', 1, 'poster'),
(58, '', 'Animal Crossing Mug', 9.99, 'img/acrossmug.jpg', '0000-00-00 00:00:00', 1, 'mug'),
(59, '', 'Dungeons and Dragons Mug', 9.99, 'img/dndmug.jpg', '0000-00-00 00:00:00', 1, 'mug'),
(60, '', 'Gamer Fuel Mug', 9.99, 'img/gamer-fuel.jpg', '0000-00-00 00:00:00', 1, 'mug'),
(61, '', 'Sleep Gaming Mug', 9.99, 'img/sleepgamermug.jpg', '0000-00-00 00:00:00', 1, 'mug'),
(62, '', 'Aurora 11 Alienware', 1999.99, 'img/aurora11.jpg', '0000-00-00 00:00:00', 1, 'pc'),
(63, '', 'Corsair Vengeance 6182', 1499.99, 'img/corsair6182.jpg', '0000-00-00 00:00:00', 1, 'pc'),
(64, '', 'MSI Trident A Plus', 2499.99, 'img/msitridentaplus.jpg', '0000-00-00 00:00:00', 1, 'pc'),
(65, 'N/A', 'PS4', 299.99, 'img/ps4', '0000-00-00 00:00:00', 1, 'ps4'),
(66, '', 'Xbox Series X', 499.99, 'img/xboxseriesx.jpg', '2021-05-05 00:35:59', 1, 'xbox'),
(68, '', 'Nintendo Wii U', 399.99, 'img/nintendo.jpg', '2021-05-05 00:40:40', 0, 'nintendo');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `Name` tinytext NOT NULL,
  `userReview` tinytext NOT NULL,
  `userMessage` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `Name`, `userReview`, `userMessage`, `date`, `keyword`, `item_id`, `user_id`) VALUES
(1, 'Ash', '3', 'It is just ok', '1995', 'gundam1', 5, 0),
(2, 'jojo', '3', 'its ok', '2021/04/23', 'gundam1', 5, 0),
(3, 'jackson', '2', 'bad item', '-2039', 'gundam2', 19, 0),
(5, 'jhonson', '3', 'Awesome series!', '2021/04/23', 'gundam3', 20, 0),
(6, 'Ashhar Kausar', '3', 'Amazing!!', '2021/04/24', 'gundam4', 21, 0),
(7, 'dfg  954 ged', '5', 'Cool!!', '2021/04/24', 'gundam6', 23, 32),
(8, 'Ashhar Kausar', '5', 'Awesome!!', '2021/04/24', 'gundam6', 23, 41),
(9, 'Ashhar Kausar', '5', 'Stupendous!!', '2021/04/24', 'gundam6', 23, 31),
(10, 'Ashhar Kausar', '5', 'Awesome design, awesome series!!', '2021/04/24', 'gundam7', 24, 0),
(11, 'Ashhar Kausar', '5', 'Simply Amazing! Totally worth the money!', '2021/04/25', 'ps5', 2, 0),
(12, 'jedi', '5', 'Amazing mobile suit!', '2021/04/27', 'gundam1', 5, 0),
(13, 'Ashhar Kausar', '1', 'Terrible', '2021/04/27', 'gundam6', 23, 0),
(14, 'sheikh', '2', 'bad', '2021/04/27', 'gundam6', 23, 0),
(15, 'dom', '1', 'absolute trash', '2021/04/27', 'gundam6', 23, 0),
(16, 'ashjo', '1', 'God help me!', '2021/04/27', 'gundam6', 23, 0),
(17, 'Ashhar kausar', '4', 'cool', '2021/04/27', 'dbz1', 1, 0),
(18, 'Ash', '5', 'Very nice!', '2021/04/27', 'dbz2', 25, 0),
(19, 'jojo', '3', 'pretty cool', '2021/04/27', 'dbz2', 25, 0),
(20, 'Ashhar Kausar', '5', 'Sexy!!', '2021/04/27', 'dbz3', 26, 0),
(21, 'Ash', '1', 'ew', '2021/04/27', 'dbz3', 26, 0),
(22, 'Ashhar', '5', 'The best!', '2021/04/27', 'dbz4', 27, 0),
(23, 'Ash', '4', 'very cool', '2021/04/27', 'dbz4', 27, 0),
(24, 'Ashhar', '4', 'sexy', '2021/04/27', 'dbz5', 28, 0),
(25, 'sdf ', '5', 'sdf sdf', '2021/04/27', 'dbz5', 28, 0),
(26, 'sdfsdf sdf ', '1', 'sdf wer gw', '2021/04/27', 'dbz5', 28, 0),
(27, 'dfg ', '1', 'wrg 35 hhhh ht', '2021/04/27', 'dbz5', 28, 0),
(28, 'dqwd g2eg 2rg ', '1', 'wrfg 3wr rb', '2021/04/27', 'dbz6', 29, 0),
(29, 'guuuuui', '5', 'f w f24e2', '2021/04/27', 'dbz6', 29, 0),
(30, 'fwe ', '5', 'rgggg4t2 ', '2021/04/27', 'dbz7', 30, 0),
(31, 'gerg      3g3rg', '5', 'g rg3rg ', '2021/04/27', 'dbz7', 30, 0),
(32, 'fg g3', '5', 'g  34e5hg 4th', '2021/04/27', 'myhero1', 31, 0),
(33, 'f fegf 2g2g ', '2', 'g g3g3 ', '2021/04/27', 'myhero1', 31, 0),
(34, 'df ', '3', 'fw wv', '2021/04/27', 'myhero2', 32, 0),
(35, 'fdffwef ', '3', 'sdf fwef wev wv', '2021/04/27', 'myhero2', 32, 0),
(36, 'sdf wef ', '5', 'wedfw f2e f', '2021/04/27', 'myhero4', 34, 0),
(37, 'efw fwef ', '5', 'wef wfwe', '2021/04/27', 'myhero4', 34, 0),
(38, 'egf gg g', '5', 'grgg eerg', '2021/04/27', 'myhero4', 34, 0),
(39, 'rrrrrrrrr', '5', 'gggggggg', '2021/04/27', 'myhero4', 34, 0),
(40, 'rt4', '5', 'g erhe', '2021/04/27', 'myhero4', 34, 0),
(41, 'dfg e', '5', 'ger erg', '2021/04/27', 'myhero5', 35, 0),
(42, 'reg e', '3', 'erger ', '2021/04/27', 'myhero5', 35, 0),
(43, 'ggrr', '1', 'ggr4', '2021/04/27', 'myhero5', 35, 0),
(44, 'dfg rgeg', '5', 'ege g', '2021/04/27', 'naruto1', 36, 0),
(45, 'reg erg 3grg', '4', 'e gerg', '2021/04/27', 'naruto1', 36, 0),
(46, 'er ge', '5', 'ger g354y', '2021/04/27', 'naruto1', 36, 0),
(47, 'bnmm6 j5', '5', 'yjwbab', '2021/04/27', 'naruto1', 36, 0),
(48, 'yje5yj d', '5', 'fbadfb ynw', '2021/04/27', 'naruto1', 36, 0),
(49, 'asd r', '3', 'tjagbaf a', '2021/04/27', 'naruto1', 36, 0),
(50, 'af gagh qae', '2', 'fh abafb a', '2021/04/27', 'naruto2', 37, 0),
(51, 'erg eaga', '2', 'fba ', '2021/04/27', 'naruto2', 37, 0),
(52, 'efrg aa', '3', 'b afbaef', '2021/04/27', 'naruto2', 37, 0),
(53, 'asd fadf ', '5', 'a dgadfga', '2021/04/27', 'naruto3', 38, 0),
(54, 'asdf asdfa', '1', 'fa dfafd', '2021/04/27', 'naruto3', 38, 0),
(55, 'f adfa', '3', 'fasdf asdf', '2021/04/27', 'naruto3', 38, 0),
(56, 'sdfg sf', '4', 'gsdf g', '2021/04/27', 'naruto4', 39, 0),
(57, 't euykes ', '5', 'nsagns', '2021/04/27', 'naruto4', 39, 0),
(58, 'gh wsw', '1', 'nwrgn wg', '2021/04/27', 'naruto4', 39, 0),
(59, 'asdf adfg', '4', 'asd asd', '2021/04/27', 'naruto5', 40, 0),
(60, 'asd fhq erf', '5', 'adf ga', '2021/04/27', 'naruto5', 40, 0),
(61, 'asd fad', '1', 'gafgaf', '2021/04/27', 'naruto5', 40, 0),
(62, 'asd ARFHG fg', '5', 'ga fga', '2021/04/27', 'naruto6', 41, 0),
(63, 'asdfg agh', '5', 'afg agag faf', '2021/04/27', 'naruto6', 41, 0),
(64, 'sdfg aghafg', '5', 'afafadfhafgaf', '2021/04/27', 'naruto6', 41, 0),
(65, 'sdfg ', '5', 'sdfg sdfgsdg', '2021/04/27', 'naruto7', 42, 0),
(66, 'g sdfg waer g', '5', 'ef gbqwaefhq', '2021/04/27', 'naruto7', 42, 0),
(67, 'e rhethqethg', '5', 'edfg eqaefhg', '2021/04/27', 'naruto7', 42, 0),
(68, 'g er g', '5', 'bqaef bqaefhbqa', '2021/04/27', 'naruto7', 42, 0),
(69, 'g aerg a', '5', 'efg aefhgaEFG', '2021/04/27', 'naruto7', 42, 0),
(70, 'dfg d', '1', 'fg dfg', '2021/04/27', 'myhero4', 34, 0),
(71, 'dfg erh ', '4', 'efh eah', '2021/04/28', 'gundam3', 20, 0),
(72, 'dfg sdf', '4', 'gs fgsdfgshqtjmdhgnm', '2021/04/28', 'gundam3', 20, 0),
(73, 'ry jertteyj ', '5', 'ethnm ethmethmeh', '2021/04/28', 'gundam3', 20, 0),
(74, 'rt hrjmtm', '5', 'WEG35YUKJHM', '2021/04/28', 'gundam3', 20, 0),
(75, 'dfgh jwsrgj ', '5', 'wsrgn wrgnwry', '2021/04/28', 'gundam5', 22, 0),
(76, 'fg sdf h', '5', 'sdf hsargjhns', '2021/04/28', 'gundam1', 5, 0),
(77, 'sdf sf', '5', 'sdh nqw4yk6ue', '2021/04/28', 'gundam1', 5, 0),
(78, ' ehefh ', '5', ' mwrysgbns gsr gj', '2021/04/28', 'gundam1', 5, 0),
(79, 'as dafg a', '5', 'af hadhnagna a abdf', '2021/04/28', 'gundam1', 5, 0),
(80, 'a dfha', '5', ' agadghatgh atgja', '2021/04/28', 'gundam1', 5, 0),
(81, ' sadfgh a', '5', 'a fafhafhaef', '2021/04/28', 'gundam1', 5, 0),
(82, 'sd fwrkje7u l', '1', 'r geuk,eu', '2021/04/28', 'gundam1', 5, 0),
(83, 'wr tgjw', '1', ' etyukjty  werty kjmwymws', '2021/04/28', 'gundam1', 5, 0),
(84, 'ghj s', '5', 'srth sth', '2021/04/28', 'gundam2', 21, 0),
(85, 'dt yj srthsrths', '5', 'tykeyhaDFVB rgh as', '2021/04/28', 'gundam2', 21, 0),
(86, 'sdrtj a HAQETH', '5', 'AEH AQTJAQR TJ', '2021/04/28', 'gundam2', 21, 0),
(87, 'SR SRT JSRJ ', '5', 'AZDF RGJWASYJ', '2021/04/28', 'gundam2', 21, 0),
(88, 'sd fgsdf h', '5', 'dfgh sadfh qawef h', '2021/04/28', 'gundam2', 21, 0),
(89, 'sdf gsdf h', '5', 'sdf hsdfh sdfhs', '2021/04/28', 'gundam2', 21, 0),
(90, 'asd asg asdg', '5', 'asdg aag d', '2021/04/28', 'gundam5', 22, 0),
(91, 'asd gasdg', '5', 'as dgaadgasdg', '2021/04/28', 'gundam5', 22, 0),
(92, 'sadf asdg', '5', 'asd gasdgasdgasd', '2021/04/28', 'gundam5', 22, 0),
(93, 'sdf sfghj sgf', '5', 'sfgj sj sfg jsjgs', '2021/04/28', 'gundam1', 5, 0),
(94, 'sfg sg', '5', 'yukszd zdfb ', '2021/04/28', 'gundam1', 5, 0),
(95, 's srtjsr ', '5', 'g sfgjsfghnmsfg ssr jstyik', '2021/04/28', 'gundam1', 5, 0),
(96, 'a fgh', '5', 'adf haszdgfhs adghs', '2021/04/28', 'gundam1', 5, 0),
(97, 'dh adfh ad', '5', 'ad fadfhadfh azdh', '2021/04/28', 'gundam1', 5, 0),
(98, 'adf rtu s ', '5', 'gfj styk syg', '2021/04/28', 'gundam1', 5, 0),
(99, 'str hs srt js', '5', 'aD asrtj assfg', '2021/04/28', 'gundam1', 5, 0),
(100, 'rju rjsry', '5', ' DSgjdykj sryyj', '2021/04/28', 'gundam1', 5, 0),
(101, ' tuk tyh ', '5', 'sdfgh wsryj', '2021/04/28', 'gundam1', 5, 0),
(102, 'ds hsah ', '5', 'asrdfg hasrjwra srt', '2021/04/28', 'gundam3', 20, 0),
(103, 's rtwartj', '5', 'srt wsrtyjwrty jsrg', '2021/04/28', 'gundam3', 20, 0),
(104, 'sdf gsdfsdf sh ', '5', 'sadf sgdfhs sdfg', '2021/04/28', 'gundam4', 21, 0),
(105, 'sdf s sdfhsh', '5', 's sehwstj tykmt ', '2021/04/28', 'gundam4', 21, 0),
(106, 'sdfg sdhs s jsrtj ', '5', 's srtjrt  srgj srt', '2021/04/28', 'gundam4', 21, 0),
(107, 'd sfhrj try', '2', ' ketu sfg s jsgf n', '2021/04/28', 'gundam7', 24, 0),
(108, ' sfg  srtgj srtgj s', '1', 's sryj s sjsrt jsrt', '2021/04/28', 'gundam7', 24, 0),
(109, 'fghj th ', '5', 'rtyu krytukrytuk ryu', '2021/04/29', 'gundam4', 21, 0),
(110, 'sfgh wrt j45 r', '5', 'srgj57 kjsrtj', '2021/04/29', 'gundam4', 21, 0),
(111, 'asdas wefg w', '5', 'aD GQRQ R', '2021/04/29', 'shirt1', 43, 0),
(112, 'adsfg aer hae', '4', 'aef haerh aer', '2021/04/29', 'shirt2', 44, 0),
(113, 'asfdg a aewr aer', '4', 'adwrsyjwyr sgs wrt', '2021/04/29', 'shirt2', 44, 0),
(114, 'e tyk ', '2', 'euk etuyk etyke', '2021/04/29', 'shirt3', 45, 0),
(115, 'ety jetyj ', '3', 'ety jety key eike56 arhAHV', '2021/04/29', 'shirt3', 45, 0),
(116, 'asd gwr grh', '5', 'aefh q5qh qj5kjetymk qerh', '2021/04/29', 'shirt4', 46, 0),
(117, 'asd fh q  q35h qerthq', '4', 'q 4tjqwtg wryjwr na', '2021/04/29', 'shirt4', 46, 0),
(118, 'asd fas rhgqergh aeah ', '5', 'aefgaergh a qerh er h', '2021/04/29', 'shirt5', 47, 0),
(119, 'sad fa eahq ', '3', 'aerh aer  haer haerh', '2021/04/29', 'shirt5', 47, 0),
(120, 'asdf  asdfjhryj ', '3', 'etyhkeutyk e5 6juw6 sr 5rywj', '2021/04/29', 'shirt6', 48, 0),
(121, ' aeh  retjh artrjt', '2', ' jyke678utf gae qaeh', '2021/04/29', 'shirt6', 48, 0),
(122, 'asdf tjetk rty ', '5', ' hwrtwr jwyj', '2021/04/29', 'shirt7', 49, 0),
(123, 'tttttttttttt', '5', ' jyjy ku7', '2021/04/29', 'shirt7', 49, 0),
(124, 'a sdf  wrjet w5gfhn sjry', '1', 's ghsthj', '2021/04/29', 'shirt8', 50, 0),
(125, 'yi ryu', '2', ' ryuiryuk rl yio hzarf', '2021/04/29', 'shirt8', 50, 0),
(126, 'af gaad fhh', '4', 'tjet ketuykjh', '2021/04/30', 'poster1', 6, 0),
(127, 'sgh jktry ', '5', ' tyjwtry jktuy', '2021/04/30', 'poster2', 51, 0),
(128, 'sdfh euk sfg', '3', 'j kah ', '2021/04/30', 'poster3', 52, 0),
(129, ' jsdtrhj  eulke6 sh', '2', 'r jwrsyj', '2021/04/30', 'poster4', 53, 0),
(130, 'sda fg wrt jw', '5', 'wrtj wryjw', '2021/04/30', 'poster5', 54, 0),
(131, 'dsfh jwrytj', '1', 'k eukeu', '2021/04/30', 'poster6', 55, 0),
(132, ' sadfgh  wryj srgj sr', '5', 's gjwrsyjw', '2021/04/30', 'poster7', 56, 0),
(133, 'asdg hg qerw feh ', '5', 'qaefh q hq44t hqt', '2021/04/30', 'poster8', 57, 0),
(134, 'd g ety  gfd zv hat', '4', 'sdf hrth', '2021/04/30', 'poster8', 57, 0),
(135, 'srt j wjyrj ', '5', 'wry jwy', '2021/04/30', 'poster2', 51, 0),
(136, 'rt  jwry jwasrygj', '1', 'asrg jhwryjwryj ', '2021/04/30', 'poster6', 55, 0),
(137, 'aedrhg   qaeth ', '3', 'qae hqaeh qaeh', '2021/04/30', 'mug1', 58, 0),
(138, 'jy jyr jkws', '3', 'agjWTW ', '2021/04/30', 'mug2', 59, 0),
(139, 'g a wrt j', '1', 'sdgfh wsrtjh t', '2021/04/30', 'mug3', 60, 0),
(140, 'sf jrtyj ', '5', 'sfg kleu6tk6eu kdgh', '2021/04/30', 'mug4', 61, 0),
(141, 'dfghj ss sjrgjsrgj', '5', 'sf jryjysfg j sj sry ', '2021/04/30', 'ASUS', 4, 0),
(142, 'sdfh jykjtuk ', '5', 'tdhjk ry jwsy', '2021/04/30', 'Corsair', 63, 0),
(143, 'jtry ', '5', 'etyhjaea hhert', '2021/04/30', 'Trident', 64, 0),
(144, 'jtsry sgj ', '5', 'du ksdtm ', '2021/04/30', 'Alienware', 62, 0),
(145, 'qe rh hjhwt ', '5', 'wsreh w hwth', '2021/05/05', 'xbox', 66, 0),
(146, 'gs weth wh', '5', 'wrh w hrthwht ', '2021/05/05', 'nintendo', 68, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `time` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `size` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`cart_id`, `item_id`, `item_quantity`, `item_price`, `time`, `user_id`, `size`) VALUES
(10, 2, 1, 399.99, '03/13/2021 19:08:59 pm', 790949, 'pro'),
(11, 2, 1, 399.99, '03/13/2021 19:11:25 pm', 790949, 'pro'),
(12, 2, 1, 399.99, '03/13/2021 19:12:36 pm', 790949, 'regular'),
(13, 2, 1, 399.99, '03/13/2021 19:12:50 pm', 790949, 'pro'),
(14, 2, 1, 399.99, '03/26/2021 17:58:25 pm', 828011, 'gold'),
(15, 2, 1, 399.99, '03/26/2021 17:59:24 pm', 828011, ''),
(16, 2, 1, 399.99, '03/26/2021 18:00:50 pm', 828011, 'platinum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Name`, `register_date`, `Password`, `Email`) VALUES
(31, 'Ashhar Kausar', NULL, '$2y$10$/E.GycqaxOfMySpj.kU7EOYJL1N8Mf6txtzMICDy9t47ObnqraywW', 'molashhar@aol.com'),
(32, 'Duke', NULL, '$2y$10$DxCRUmwNANsdkJqooMioROrEgM7888qkOvjgkW4Wjh5dRuWCOryIu', 'duke@gmail.com'),
(33, 'John', NULL, '$2y$10$ed.i4BUAl3PmF5iUdhz5Uu/0ohFRFHNdcpr7ES4PgNkDK8xHSA2fG', 'partha@gmail.com'),
(34, 'liz', NULL, '$2y$10$1LEhiHCjfFIAAcrFHF0pFenzjyzjgczaH/ItLQShzD5IG/f1CEaua', 'liz@gmail.com'),
(35, 'jake', NULL, '$2y$10$PzJK1hEOqXySWwId42M7X.tjkxBLHvG103bf5nWjgOueuFRrbAjTu', 'jake@gmail.com'),
(36, 'Mario', NULL, '$2y$10$Eh6ddWpApuEv/lgxfAdLfuXc5zbL31PdFhYUk4O2Q2ZrGHmBzarjq', 'mario@gmail.com'),
(37, 'jorge', NULL, '$2y$10$cqae1VuLPmDU7xld1vQ4IuFsOOyIeXGK3yy2754doY8oYg1ON.xBi', 'jorge@gmail.com'),
(39, 'derrick', NULL, '$2y$10$/JJDn58EjS0aEk2IGC7t6uXAdfeLxdkxKsfclEEKuuYPXt9jtALAG', 'derrick@gmail.com'),
(40, 'Mo', NULL, '$2y$10$CeP/rqBURfzcYuZgkCw.3.haRX6LK/yDJZvKGJnw5vx2QEsnde2Qa', 'mo@gmail.com'),
(41, 'admin', NULL, '$2y$10$IQ79owMbBFPN/XTeUbbbgeehOsCRe/F1sqyINVDU.12UU8GqS0A2i', 'admin@aol.com');

-- --------------------------------------------------------

--
-- Table structure for table `verifiedorder`
--

CREATE TABLE `verifiedorder` (
  `id` int(11) NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Payment` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifiedorder`
--

INSERT INTO `verifiedorder` (`id`, `order_id`, `user_id`, `Payment`, `time`, `date`) VALUES
(3, 'OaU745597', 2034321, 'Approved', '2021/03/22 19:33:30 pm', '0000-00-00'),
(7, 'OaU1689858', 2558282, 'Approved', '2021/03/24 18:15:11 pm', '0000-00-00'),
(12, 'OaU1689858', 2558282, 'Approved', '2021/03/24 18:18:02 pm', '0000-00-00'),
(13, 'OaU1689858', 2558282, 'Approved', '2021/03/24 18:21:37 pm', '0000-00-00'),
(14, 'OaU1014674', 828011, 'Approved', '2021/03/26 17:09:25 pm', '0000-00-00'),
(15, 'OaU1014674', 828011, 'Approved', '2021/03/26 17:38:00 pm', '0000-00-00'),
(16, 'OaU2208988', 31, 'Approved', '2021/04/01 14:58:19 pm', '0000-00-00'),
(17, 'OaU2208988', 31, 'Approved', '2021/04/01 15:09:20 pm', '0000-00-00'),
(18, 'OaU2208988', 31, 'Approved', '2021/04/01 19:28:48 pm', '0000-00-00'),
(19, 'OaU2844893', 31, 'Approved', '2021/04/01 19:31:59 pm', '0000-00-00'),
(20, 'OaU2844893', 31, 'Approved', '2021/04/01 19:33:01 pm', '0000-00-00'),
(21, 'OaU2174519', 31, 'Approved', '2021/04/02 16:46:26 pm', '0000-00-00'),
(22, 'OaU2174519', 31, 'Approved', '2021/04/02 17:01:43 pm', '2021-04-02'),
(23, 'OaU2681366', 815004, 'Approved', '2021/04/03 16:54:33 pm', '2021-04-03'),
(24, 'OaU1835342', 31, 'Approved', '2021/04/03 16:55:18 pm', '2021-04-03'),
(25, 'OaU1835342', 31, 'Approved', '2021/04/03 17:35:57 pm', '2021-04-03'),
(26, 'OaU1471208', 31, 'Approved', '2021/04/04 16:24:03 pm', '2021-04-04'),
(27, 'OaU612666', 2157795, 'Approved', '2021/04/13 20:24:39 pm', '2021-04-14'),
(28, 'OaU289279', 41, 'Approved', '2021/04/20 18:44:33 pm', '2021-04-21'),
(29, 'OaU2822230', 31, 'Approved', '2021/04/21 15:07:27 pm', '2021-04-21'),
(30, 'OaU927868', 1401805, 'Approved', '2021/04/21 17:52:59 pm', '2021-04-21'),
(31, 'OaU519798', 31, 'Approved', '2021/04/21 19:09:49 pm', '2021-04-22'),
(32, 'OaU784428', 40, 'Approved', '2021/04/21 19:32:25 pm', '2021-04-22'),
(33, 'OaU311728', 31, 'Approved', '2021/04/21 23:45:01 pm', '2021-04-22'),
(34, 'OaU1730889', 2438802, 'Approved', '2021/04/23 10:19:39 am', '2021-04-23'),
(35, 'OaU710371', 1670537, 'Approved', '2021/04/23 10:21:24 am', '2021-04-23'),
(36, 'OaU1208445', 2604001, 'Approved', '2021/04/23 10:22:46 am', '2021-04-23'),
(37, 'OaU636996', 41, 'Approved', '2021/04/23 12:44:34 pm', '2021-04-23'),
(38, 'OaU1016618', 1392602, 'Approved', '2021/04/23 12:45:40 pm', '2021-04-23'),
(39, 'OaU1191512', 1737649, 'Approved', '2021/04/23 12:46:55 pm', '2021-04-23'),
(40, 'OaU1670790', 960007, 'Approved', '2021/04/23 13:35:07 pm', '2021-04-23'),
(41, 'OaU2240446', 920437, 'Approved', '2021/04/23 13:35:45 pm', '2021-04-23'),
(42, 'OaU1454104', 2258225, 'Approved', '2021/04/23 13:36:21 pm', '2021-04-23'),
(43, 'OaU2841544', 41, 'Approved', '2021/04/27 12:55:37 pm', '2021-04-27'),
(44, 'OaU2066430', 41, 'Approved', '2021/04/28 16:55:58 pm', '2021-04-28'),
(45, 'OaU2066430', 41, 'Approved', '2021/04/28 17:06:18 pm', '2021-04-28'),
(46, 'OaU2718402', 2184115, 'Approved', '2021/04/30 13:09:02 pm', '2021-04-30'),
(47, 'OaU743541', 2508065, 'Approved', '2021/04/30 13:13:24 pm', '2021-04-30'),
(48, 'OaU685868', 1624812, 'Approved', '2021/04/30 13:20:15 pm', '2021-04-30'),
(49, 'OaU1182253', 2875500, 'Approved', '2021/04/30 13:33:17 pm', '2021-04-30'),
(50, 'OaU2638948', 319641, 'Approved', '2021/04/30 13:40:38 pm', '2021-04-30'),
(51, 'OaU1805509', 1176622, 'Approved', '2021/04/30 16:39:34 pm', '2021-04-30'),
(52, 'OaU1211081', 2426775, 'Approved', '2021/04/30 16:44:42 pm', '2021-04-30'),
(53, 'OaU1585476', 1731645, 'Approved', '2021/04/30 16:51:09 pm', '2021-04-30'),
(54, 'OaU2269333', 846152, 'Approved', '2021/05/01 15:59:52 pm', '2021-05-01'),
(55, 'OaU2633783', 1376480, 'Approved', '2021/05/03 19:37:27 pm', '2021-05-04'),
(56, 'OaU167682', 2331850, 'Approved', '2021/05/03 19:41:24 pm', '2021-05-04'),
(57, 'OaU1898974', 2461550, 'Approved', '2021/05/03 19:43:15 pm', '2021-05-04'),
(58, 'OaU474670', 583651, 'Approved', '2021/05/03 19:54:53 pm', '2021-05-04'),
(59, 'OaU2685870', 2906705, 'Approved', '2021/05/03 20:01:46 pm', '2021-05-04'),
(60, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:12:03 pm', '2021-05-04'),
(61, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:14:08 pm', '2021-05-04'),
(62, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:16:19 pm', '2021-05-04'),
(63, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:16:46 pm', '2021-05-04'),
(64, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:17:29 pm', '2021-05-04'),
(65, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:20:46 pm', '2021-05-04'),
(66, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:21:37 pm', '2021-05-04'),
(67, 'OaU1421279', 2832416, 'Approved', '2021/05/03 20:26:15 pm', '2021-05-04'),
(68, 'OaU2787821', 301009, 'Approved', '2021/05/03 20:40:46 pm', '2021-05-04'),
(69, 'OaU2787821', 301009, 'Approved', '2021/05/03 20:44:53 pm', '2021-05-04'),
(70, 'OaU2787821', 301009, 'Approved', '2021/05/03 20:45:33 pm', '2021-05-04'),
(71, 'OaU2787821', 301009, 'Approved', '2021/05/03 21:05:56 pm', '2021-05-04'),
(72, 'OaU2787821', 301009, 'Approved', '2021/05/03 21:08:25 pm', '2021-05-04'),
(73, 'OaU2787821', 301009, 'Approved', '2021/05/03 21:09:11 pm', '2021-05-04'),
(74, 'OaU2787821', 301009, 'Approved', '2021/05/03 21:10:14 pm', '2021-05-04'),
(75, 'OaU2787821', 301009, 'Approved', '2021/05/03 21:47:49 pm', '2021-05-04'),
(76, 'OaU2671637', 980500, 'Approved', '2021/05/03 21:51:21 pm', '2021-05-04'),
(77, 'OaU2500060', 1445595, 'Approved', '2021/05/03 22:07:02 pm', '2021-05-04'),
(78, 'OaU2500060', 1445595, 'Approved', '2021/05/03 22:09:03 pm', '2021-05-04'),
(79, 'OaU2500060', 1445595, 'Approved', '2021/05/03 22:09:58 pm', '2021-05-04'),
(80, 'OaU1116583', 41, 'Approved', '2021/05/05 14:22:47 pm', '2021-05-05'),
(81, 'OaU1116583', 41, 'Approved', '2021/05/05 14:50:27 pm', '2021-05-05'),
(82, 'OaU1421175', 31, 'Approved', '2021/05/06 13:05:31 pm', '2021-05-06'),
(83, 'OaU1421175', 31, 'Approved', '2021/05/06 13:06:18 pm', '2021-05-06'),
(84, 'OaU1421175', 31, 'Approved', '2021/05/06 13:07:14 pm', '2021-05-06'),
(85, 'OaU1421175', 31, 'Approved', '2021/05/06 13:09:12 pm', '2021-05-06'),
(86, 'OaU1421175', 31, 'Approved', '2021/05/06 13:12:15 pm', '2021-05-06'),
(87, 'OaU1421175', 31, 'Approved', '2021/05/06 13:17:25 pm', '2021-05-06'),
(88, 'OaU1421175', 31, 'Approved', '2021/05/06 13:19:49 pm', '2021-05-06'),
(89, 'OaU423650', 41, 'Approved', '2021/05/06 14:44:20 pm', '2021-05-06'),
(90, 'OaU423650', 41, 'Approved', '2021/05/06 14:46:32 pm', '2021-05-06'),
(91, 'OaU423650', 41, 'Approved', '2021/05/06 14:47:17 pm', '2021-05-06'),
(92, 'OaU423650', 41, 'Approved', '2021/05/06 17:09:28 pm', '2021-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `mo`
--
ALTER TABLE `mo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `verifiedorder`
--
ALTER TABLE `verifiedorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `mo`
--
ALTER TABLE `mo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `verifiedorder`
--
ALTER TABLE `verifiedorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
