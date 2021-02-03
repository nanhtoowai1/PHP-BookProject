-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 03:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `summary`, `category_id`, `author`, `price`, `cover`, `created_date`, `updated_date`) VALUES
(1, 'The adventure of pinocchio', '                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea', 13, 'Carlo Collodi', 3500, 'ad1.jpg', '2021-01-07 15:56:31', '2021-01-07 15:56:31'),
(2, 'Sherlock Holmes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 2, 'Sir Arthur Conan Dolve', 5000, 'ad2.jpg', '2021-01-07 15:58:52', '2021-01-07 15:58:52'),
(3, 'Treasure Island', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 2, 'Robert Louis Stevenson', 4000, 'ad3.jpg', '2021-01-07 15:59:54', '2021-01-07 15:59:54'),
(4, 'The children of cherry tree farm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 13, 'Enid Blyton', 3500, 'c3.jpg', '2021-01-20 16:07:10', '2021-01-20 16:07:10'),
(5, 'The tail of benjamin bunny', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 13, 'Beatrix Potter', 4000, 'c1.jpg', '2021-01-20 16:08:37', '2021-01-20 16:08:37'),
(6, 'True ghost stories', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 4, 'Jim Harold', 4000, 'h1.jpg', '2021-01-20 16:10:17', '2021-01-20 16:10:17'),
(7, 'Red Water', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 4, 'Meghan O\'Flynn', 5000, 'h3.jpg', '2021-01-20 16:12:56', '2021-01-20 16:12:56'),
(8, '7 Habits of highly effective people', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 6, 'Stephan R. Covey', 5000, 'm2.jpg', '2021-01-20 16:14:46', '2021-01-20 16:14:46'),
(9, 'Good to great', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 6, 'Jim Collins', 5000, 'h1.jpg', '2021-01-20 16:15:44', '2021-01-20 16:15:44'),
(10, 'Me before you', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 3, 'Jo Jo Moyes', 4000, 'r1.jpg', '2021-01-20 16:17:48', '2021-01-20 16:17:48'),
(11, 'Wuthering Heights', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 3, 'Emily Bronte', 4000, 'r2.jpg', '2021-01-20 16:19:16', '2021-01-20 16:19:16'),
(18, 'Don\'t Make Me Think', 'adfsdfsdfsdf', 9, 'Lewis Carroll', 4000, '41MdP5Tn0wL._SX387_BO1,204,203,200_.jpg', '2021-01-27 04:39:51', '2021-01-27 04:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Adventure'),
(3, 'Romance'),
(4, 'Horror'),
(6, 'Motivational'),
(9, 'Technology'),
(13, 'Children’s Books'),
(15, 'Nan\'s diary'),
(17, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `email`, `status`, `created_date`, `updated_date`) VALUES
(3, 'sam', '09402670564', 'Mandalay', 'sam@gmail.com', 'unfinished', '2021-01-09 17:01:39', '2021-01-09 17:01:39'),
(4, 'sam', '09402670564', 'Mandalay', 'sam@gmail.com', 'unfinished', '2021-01-10 06:06:00', '2021-01-10 06:06:00'),
(5, 'Nan', '09797450955', 'testing', 'nan@gmail.com', 'unfinished', '2021-01-19 04:12:51', '2021-01-19 04:12:51'),
(6, 'Nan', '09797450955', 'mdy', 'nan@gmail.com', 'unfinished', '2021-01-19 04:20:10', '2021-01-19 04:20:10'),
(7, 'Nan', '09797450955', 'Mdy', 'nan@gmail.com', 'finished', '2021-01-19 04:25:24', '2021-01-19 04:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `order_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `qty`, `book_id`, `order_status`, `created_date`, `updated_date`) VALUES
(4, 3, 3, 3, 'pending', '2021-01-09 17:01:39', '2021-01-09 17:01:39'),
(5, 4, 1, 1, 'pending', '2021-01-10 06:06:00', '2021-01-10 06:06:00'),
(6, 4, 1, 3, 'pending', '2021-01-10 06:06:00', '2021-01-10 06:06:00'),
(8, 5, 2, 3, 'pending', '2021-01-19 04:12:51', '2021-01-19 04:12:51'),
(9, 6, 3, 3, 'pending', '2021-01-19 04:20:10', '2021-01-19 04:20:10'),
(10, 6, 1, 2, 'pending', '2021-01-19 04:20:10', '2021-01-19 04:20:10'),
(11, 7, 2, 2, 'Out of Stock', '2021-01-19 04:25:24', '2021-01-19 04:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nan', 'nan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Jerry', 'jerry@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Suzy', 'suzy@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 'sam', 'sam@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
