-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 08:28 PM
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
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinfos`
--

INSERT INTO `hinfos` (`id`, `hno`, `hrent`, `status`, `created_at`, `updated_at`) VALUES
(1, '101', '5000', 1, NULL, NULL),
(2, '201', '4500', 1, NULL, NULL),
(6, 'sgsrt', '444', 1, '2018-12-31 04:40:44', '2018-12-31 04:40:44');

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
(4, '2018_12_28_143505_create_hinfos_table', 2);

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
  `hno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hrent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rinfos`
--

INSERT INTO `rinfos` (`id`, `rname`, `profession`, `nid`, `hno`, `hrent`, `advance`, `jdate`, `phone`, `comments`, `image`, `created_at`, `updated_at`) VALUES
(3, 'aaaa', 'aaaaaa', '1983293847567', '1', 'hindu', '5009', '2018-12-19', '01712173368', 'aaaaa', '1546081698.jpg', '2018-12-29 05:07:46', '2018-12-29 05:08:18'),
(5, 'nizam', 'engineer', '1983293847567', '2', 'islam', '500', '2018-12-20', '01673732432', 'etyeye', '1546260503.jpg', '2018-12-31 06:48:23', '2018-12-31 06:48:23'),
(6, 'wasif', 'bussiness', '1983293847567', '1', 'islam', '5009', '2019-01-09', '543654364536', 'etwe', '1546287551.jpg', '2018-12-31 14:19:11', '2018-12-31 14:19:11');

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
(1, 'Rejaul Kabir', 'rejaulkabir25@gmail.com', '$2y$10$.NzpPcK/4sXJQrR.QE7OieFthY4mI0qvLXh5qc3cm5XvYH1XXuHnO', 'Tlp44pmOCg66nAmC0vTTjc3TJxWpn5A4PE8BtLjKZklz5Te4JxHB7eYkMoLv', '2018-12-28 06:35:42', '2018-12-28 06:35:42');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rinfos`
--
ALTER TABLE `rinfos`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rinfos`
--
ALTER TABLE `rinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
