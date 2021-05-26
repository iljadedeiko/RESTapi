-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 07:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Sulfuras', '2021-05-26 13:39:48', '2021-05-26 13:39:48'),
(2, 'Backstage passes', '2021-05-26 13:40:15', '2021-05-26 13:40:15'),
(3, 'Aged Brie', '2021-05-26 13:59:29', '2021-05-26 13:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL,
  `quality` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `value`, `quality`, `created_at`, `updated_at`) VALUES
(3, 1, '+5 Dexterity Vest_item', 15.00, -10, '2021-05-26 14:00:02', '2021-05-26 14:00:02'),
(4, 3, 'Aged Brie_item', 15.00, 5, '2021-05-26 14:00:26', '2021-05-26 14:00:26'),
(5, 2, 'Elixir of the Mongoose_item', 15.00, 15, '2021-05-26 14:00:43', '2021-05-26 14:00:43'),
(6, 1, 'Sulfuras, Hand of Ragnaros_item', 10.00, 50, '2021-05-26 14:01:20', '2021-05-26 14:01:20'),
(7, 1, 'Sulfuras, Hand of Ragnaros_item', 50.00, 10, '2021-05-26 14:01:31', '2021-05-26 14:01:31'),
(8, 2, 'Backstage passes to a TAFKAL80ETC concert_item', 100.00, 50, '2021-05-26 14:02:07', '2021-05-26 14:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2021_05_25_105834_create_categories_table', 2),
(5, '2021_05_25_155316_create_items_table', 2),
(6, '2021_05_26_133817_create_categories_table', 3),
(7, '2021_05_26_133833_create_items_table', 3),
(8, '2021_05_26_145656_create_categories_table', 4),
(9, '2021_05_26_145713_create_items_table', 4),
(10, '2021_05_26_150346_create_categories_table', 5),
(33, '2014_10_12_000000_create_users_table', 6),
(34, '2014_10_12_100000_create_password_resets_table', 6),
(35, '2019_08_19_000000_create_failed_jobs_table', 6),
(36, '2021_05_26_151107_create_categories_table', 6),
(37, '2021_05_26_151121_create_items_table', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
