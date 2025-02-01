-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2025 at 11:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testimonials_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','super_admin') DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Admin1', 'Estifanosedejene7@gmail.com', '$2y$10$PVcoqTkzuXuAXqdFoKFtO.8PFEk0/F5hpKGHrbsrNqmkQA5dwso6a', 'admin', '2025-01-28 09:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT 'user-circle',
  `caption` varchar(150) DEFAULT NULL,
  `message` text NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_data` longblob DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `icon`, `caption`, `message`, `rating`, `status`, `created_at`, `image_data`, `image_path`) VALUES
(1, 'mm', 'mm@gmail.com', 'user-circle', 'mmm', 'mm', 5, 'approved', '2025-01-25 04:23:08', NULL, 'uploads/testimonials/6794672c6e705.jpg'),
(2, 'nn', 'nn@gmail.com', 'user-circle', 'hhh', 'yuyu', 1, 'approved', '2025-01-25 04:24:25', NULL, 'uploads/testimonials/67946779488d7.jpg'),
(3, 'jj', 'kk@gmail.com', 'user-circle', 'kkk', 'lll', 2, 'approved', '2025-01-25 04:38:52', NULL, 'uploads/testimonials/67946adc324d8.jpg'),
(4, 'Estifanose ', 'Estifanosedejene7@gmail.com', 'user-circle', 'Admin', 'Testing Testimony', 5, 'approved', '2025-01-25 04:41:37', NULL, 'uploads/testimonials/67946b810340a.jpg'),
(5, 'Test 1', 'Estifanosedejene7@gmail.com', 'user-circle', 'kkk', 'xxx', 3, 'approved', '2025-01-28 08:59:15', NULL, 'uploads/testimonials/67989c6365d63.jpg'),
(6, 'Test 1', 'Estifanosedejene7@gmail.com', 'user-circle', 'kkk', 'vvv', 2, 'rejected', '2025-01-31 10:00:14', NULL, 'uploads/testimonials/679c9f2e6d599.jpg'),
(7, 'Test 11', 'Estifanosedejene7@gmail.com', 'user-circle', 'Car', 'Thanks!', 5, 'rejected', '2025-01-31 10:19:28', NULL, 'uploads/testimonials/679ca3b067f96.jpg'),
(8, 'Test 1', 'Estifanosedejene7@gmail.com', 'user-circle', 'dfdf', 'xxx', 4, 'pending', '2025-01-31 10:21:46', NULL, 'uploads/testimonials/679ca43a12a7e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
