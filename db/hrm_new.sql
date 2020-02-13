-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 07:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `hinfos`
--

CREATE TABLE `hinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `hno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hrent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinfos`
--

INSERT INTO `hinfos` (`id`, `hno`, `hrent`, `status`, `created_at`, `updated_at`) VALUES
(1, '101 (1000 sqft)', '10000', 0, '2019-01-08 22:34:04', '2019-01-08 22:34:04'),
(2, '201 (1400 sqft)', '11000', 0, '2019-01-08 22:50:54', '2019-01-08 22:51:41'),
(3, '301 (1200 Sqft)', '13000', 0, '2019-01-12 04:08:52', '2019-01-12 04:08:52'),
(4, '401 (1400 Sqft)', '14000', 0, '2019-01-12 04:09:25', '2019-01-12 04:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_27_151500_create_rinfos_table', 1),
(4, '2018_12_28_143505_create_hinfos_table', 1),
(5, '2019_01_03_174712_create_mrps_table', 1),
(6, '2019_01_06_065317_foreign_mrps_rinfos_id_table', 1),
(7, '2019_01_06_070432_foreign_rinfos_room_id_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mrps`
--

CREATE TABLE `mrps` (
  `id` int(10) UNSIGNED NOT NULL,
  `renter_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `renter_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mrps`
--

INSERT INTO `mrps` (`id`, `renter_id`, `room_id`, `month`, `year`, `renter_payment`, `due_payment`, `jdate`, `created_at`, `updated_at`) VALUES
(4, 5, 1, 'January', '2019', '10000', '0', '2019-01-12', '2019-01-12 10:57:23', '2019-01-12 10:57:23'),
(6, 7, 3, 'January', '2019', '10000', '3000', '2019-01-18', '2019-01-12 10:58:31', '2019-01-12 10:58:31'),
(7, 8, 4, 'February', '2019', '14000', '0', '2019-01-12', '2019-01-12 10:59:50', '2019-01-12 10:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rinfos`
--

CREATE TABLE `rinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `rname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hrent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rinfos`
--

INSERT INTO `rinfos` (`id`, `rname`, `profession`, `nid`, `hno`, `hrent`, `advance`, `jdate`, `phone`, `comments`, `image`, `room_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 'morshed alam', 'engineer', '1983293847567', NULL, '10000', '10000', '2019-01-12', '01712173368', 'They are five members.', '1547311700.jpg', 1, 1, '2019-01-12 10:48:20', '2019-01-12 10:48:20'),
(7, 'Anis', 'programmar', '14223468946', NULL, '13000', '13000', '2019-01-14', '0151567389', 'They are from mirershorai and four members.', '1547311876.jpg', 3, 1, '2019-01-12 10:51:16', '2019-01-12 10:51:16'),
(8, 'Imtiaz mukul', 'Businessman', '234879876', NULL, '14000', '28000', '2019-01-15', '01819283743', 'Received 2 months advanced and 3 members of family.', '1547312009.jpg', 4, 1, '2019-01-12 10:53:29', '2019-01-12 10:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rejaul kabir', 'rejaulkabir25@gmail.com', '$2y$10$Zk6piVRn5fvhOVT1z8C8AuLnEbptYeVWRRoT6W9GtfsfrWwFF1c1.', NULL, '2019-01-08 22:32:55', '2019-01-08 22:32:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hinfos`
--
ALTER TABLE `hinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrps`
--
ALTER TABLE `mrps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mrps_renter_id_foreign` (`renter_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rinfos`
--
ALTER TABLE `rinfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rinfos_room_id_foreign` (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hinfos`
--
ALTER TABLE `hinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mrps`
--
ALTER TABLE `mrps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rinfos`
--
ALTER TABLE `rinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mrps`
--
ALTER TABLE `mrps`
  ADD CONSTRAINT `mrps_renter_id_foreign` FOREIGN KEY (`renter_id`) REFERENCES `rinfos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rinfos`
--
ALTER TABLE `rinfos`
  ADD CONSTRAINT `rinfos_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `hinfos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
