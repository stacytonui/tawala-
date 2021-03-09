-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 07:33 AM
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
-- Database: `tawala`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Vegetables', '2020-04-23 16:16:36', '2020-04-23 16:16:36'),
(2, 'Fruits', '2020-04-23 16:16:36', '2020-04-23 16:16:36'),
(3, 'Dairy Products', '2020-04-23 16:16:36', '2020-04-23 16:16:36'),
(4, 'Legumes', '2020-04-23 16:16:36', '2020-04-23 16:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nairobi', '2020-05-02 15:11:53', '2020-05-02 15:11:53'),
(2, 'Nakuru', '2020-05-02 15:11:53', '2020-05-02 15:11:53'),
(3, 'Kisumu', '2020-05-02 15:11:53', '2020-05-02 15:11:53'),
(4, 'Mombasa', '2020-05-02 15:11:53', '2020-05-02 15:11:53'),
(5, 'Kajiado', '2020-05-02 15:11:53', '2020-05-02 15:11:53'),
(6, 'Machakos', '2020-05-02 15:11:53', '2020-05-02 15:11:53'),
(7, 'Kiambu', '2020-05-02 15:11:53', '2020-05-02 15:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_size` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `phone`, `location`, `land_size`, `products`, `created_at`, `updated_at`) VALUES
(1, 'Stacy Anne', '345678', 'Nai', '20 H', 'Maize\r\nPotatoes', '2020-06-04 18:08:15', '2020-06-04 18:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Nairobi CBD', 1, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(2, 'Gigiri', 1, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(3, 'Chiromo', 1, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(4, 'Milimani Estate', 2, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(5, 'Nakuru-CBD', 2, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(6, 'Kiamunyi Estate', 2, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(7, 'City Mall', 4, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(8, 'Bamburi Beach', 4, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(9, 'Honolulu', 4, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(10, 'Uthiru', 7, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(11, 'Kinoo', 7, '2020-05-02 15:18:47', '2020-05-02 15:18:47'),
(12, 'Kiambu Town', 7, '2020-05-02 15:18:47', '2020-05-02 15:18:47');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_23_140646_create_categories_table', 2),
(5, '2020_04_23_140857_create_products_table', 3),
(6, '2020_04_23_185654_create_sub_categories_table', 4),
(7, '2020_04_23_190113_drop_category_id_from_products_table', 5),
(8, '2020_04_23_190830_drop_products_table', 6),
(9, '2020_04_23_191057_create_products_table', 7),
(10, '2020_04_28_200604_create_locations_table', 8),
(11, '2020_04_28_212319_add_columns_to_users_table', 9),
(12, '2020_05_01_123512_add_status_column_to_users_table', 10),
(13, '2020_05_02_175223_create_cities_table', 11),
(14, '2020_05_02_180218_create_locations_table', 12),
(15, '2020_05_04_071035_create_orders_table', 13),
(16, '2020_05_04_082339_create_order_items_table', 13),
(17, '2020_05_26_165147_add_columns_to_orders_table', 14),
(18, '2020_06_04_204154_create_farmers_table', 15),
(19, '2020_06_04_204223_create_vendors_table', 15),
(20, '2020_07_23_021543_create_mpesa_transactions_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_transactions`
--

CREATE TABLE `mpesa_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransactionType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BusinessShortCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BillRefNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InvoiceNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThirdPartyTransID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MSISDN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransAmount` decimal(8,2) DEFAULT NULL,
  `OrgAccountBalance` decimal(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','processing','completed','decline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `grand_total` decimal(20,6) NOT NULL,
  `item_count` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 1,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `status`, `grand_total`, `item_count`, `name`, `location`, `address`, `house`, `phone`, `email`, `created_at`, `updated_at`, `payment_status`, `payment_method`) VALUES
(1, 'TWL-5EAFF19D35D1C', 9, 'completed', '50.000000', 1, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-04 07:42:37', '2020-05-15 08:35:52', 1, NULL),
(2, 'TWL-5EB11D30DA19C', 9, 'completed', '250.000000', 1, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-05 05:00:48', '2020-05-15 08:36:36', 1, NULL),
(3, 'TWL-5EB18993C13DA', 9, 'completed', '400.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-05 12:43:15', '2020-05-15 08:48:48', 1, NULL),
(4, 'TWL-5EB2AE2926CCA', 9, 'completed', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:31:37', '2020-05-16 01:53:20', 1, NULL),
(5, 'TWL-5EB2AE2FCB380', 9, 'completed', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:31:43', '2020-05-15 10:06:49', 1, NULL),
(6, 'TWL-5EB2AE3D41BAC', 9, 'completed', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:31:57', '2020-06-04 11:52:43', 1, NULL),
(7, 'TWL-5EB2AE75D2362', 9, 'pending', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:32:53', '2020-05-06 09:32:53', 1, NULL),
(8, 'TWL-5EB2AE9A02774', 9, 'completed', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:33:30', '2020-05-15 12:14:09', 1, NULL),
(9, 'TWL-5EB2AEC563631', 9, 'pending', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:34:13', '2020-05-06 09:34:13', 1, NULL),
(10, 'TWL-5EB2AF120830F', 9, 'pending', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:35:30', '2020-05-06 09:35:30', 1, NULL),
(11, 'TWL-5EB2AFE9DC9FE', 9, 'pending', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:39:05', '2020-05-06 09:39:05', 1, NULL),
(12, 'TWL-5EB2B12A1BDEA', 9, 'pending', '270.000000', 2, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:44:26', '2020-05-06 09:44:26', 1, NULL),
(13, 'TWL-5EB2B14E804E6', 9, 'pending', '340.000000', 3, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-05-06 09:45:02', '2020-05-06 09:45:02', 1, NULL),
(14, 'TWL-5EB2EFCB87FD2', 10, 'completed', '200.000000', 1, 'Stacy Anne', 'Nairobi CBD', 'Sedan', '14', '0707876345', 'stacy@gmail.com', '2020-05-06 14:11:39', '2020-05-15 13:47:37', 1, NULL),
(15, 'TWL-5EB2EFF886AAB', 10, 'pending', '200.000000', 1, 'Stacy Anne', 'Nairobi CBD', 'Sedan', '14', '0707876345', 'stacy@gmail.com', '2020-05-06 14:12:24', '2020-05-06 14:12:24', 1, NULL),
(16, 'TWL-5EB41035477B1', 2, 'pending', '250.000000', 2, 'Stacy Anne', 'Nairobi CBD', 'dfghj', '33', 'ghjklj', 'stacyanne01@gmail.com', '2020-05-07 10:42:13', '2020-05-07 10:42:13', 1, NULL),
(17, 'TWL-5F1DB45158DD0', 2, 'pending', '50.000000', 1, 'Stacy Anne', 'Nairobi CBD', '34567', '14', '3456789', 'stacyanne01@gmail.com', '2020-07-26 13:50:25', '2020-07-26 13:50:25', 0, NULL),
(18, 'TWL-5F1E860EB82B8', 9, 'pending', '70.000000', 1, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-07-27 04:45:18', '2020-07-27 04:45:18', 0, NULL),
(19, 'TWL-5F1E86165299B', 9, 'pending', '70.000000', 1, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-07-27 04:45:26', '2020-07-27 04:45:26', 0, NULL),
(20, 'TWL-5F1E891901E86', 9, 'pending', '70.000000', 1, 'Jeon Jungkook', 'Nairobi CBD', 'MMU', '13', '0987654', 'jeon@gmail.com', '2020-07-27 04:58:17', '2020-07-27 04:58:17', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` decimal(20,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '50.000000', '2020-05-04 07:42:37', '2020-05-04 07:42:37'),
(2, 2, 8, 1, '250.000000', '2020-05-05 05:00:48', '2020-05-05 05:00:48'),
(3, 3, 4, 2, '400.000000', '2020-05-05 12:43:15', '2020-05-05 12:43:15'),
(4, 4, 3, 1, '70.000000', '2020-05-06 09:31:37', '2020-05-06 09:31:37'),
(5, 4, 4, 1, '200.000000', '2020-05-06 09:31:37', '2020-05-06 09:31:37'),
(6, 5, 3, 1, '70.000000', '2020-05-06 09:31:43', '2020-05-06 09:31:43'),
(7, 5, 4, 1, '200.000000', '2020-05-06 09:31:43', '2020-05-06 09:31:43'),
(8, 6, 3, 1, '70.000000', '2020-05-06 09:31:57', '2020-05-06 09:31:57'),
(9, 6, 4, 1, '200.000000', '2020-05-06 09:31:57', '2020-05-06 09:31:57'),
(10, 7, 3, 1, '70.000000', '2020-05-06 09:32:53', '2020-05-06 09:32:53'),
(11, 7, 4, 1, '200.000000', '2020-05-06 09:32:54', '2020-05-06 09:32:54'),
(12, 8, 3, 1, '70.000000', '2020-05-06 09:33:30', '2020-05-06 09:33:30'),
(13, 8, 4, 1, '200.000000', '2020-05-06 09:33:30', '2020-05-06 09:33:30'),
(14, 9, 3, 1, '70.000000', '2020-05-06 09:34:13', '2020-05-06 09:34:13'),
(15, 9, 4, 1, '200.000000', '2020-05-06 09:34:13', '2020-05-06 09:34:13'),
(16, 10, 3, 1, '70.000000', '2020-05-06 09:35:30', '2020-05-06 09:35:30'),
(17, 10, 4, 1, '200.000000', '2020-05-06 09:35:30', '2020-05-06 09:35:30'),
(18, 11, 3, 1, '70.000000', '2020-05-06 09:39:06', '2020-05-06 09:39:06'),
(19, 11, 4, 1, '200.000000', '2020-05-06 09:39:06', '2020-05-06 09:39:06'),
(20, 12, 3, 1, '70.000000', '2020-05-06 09:44:26', '2020-05-06 09:44:26'),
(21, 12, 4, 1, '200.000000', '2020-05-06 09:44:26', '2020-05-06 09:44:26'),
(22, 13, 4, 1, '200.000000', '2020-05-06 09:45:02', '2020-05-06 09:45:02'),
(23, 13, 3, 2, '140.000000', '2020-05-06 09:45:02', '2020-05-06 09:45:02'),
(24, 14, 4, 1, '200.000000', '2020-05-06 14:11:39', '2020-05-06 14:11:39'),
(25, 15, 4, 1, '200.000000', '2020-05-06 14:12:24', '2020-05-06 14:12:24'),
(26, 16, 2, 1, '50.000000', '2020-05-07 10:42:13', '2020-05-07 10:42:13'),
(27, 16, 4, 1, '200.000000', '2020-05-07 10:42:13', '2020-05-07 10:42:13'),
(28, 17, 2, 1, '50.000000', '2020-07-26 13:50:26', '2020-07-26 13:50:26'),
(29, 18, 3, 1, '70.000000', '2020-07-27 04:45:19', '2020-07-27 04:45:19'),
(30, 19, 3, 1, '70.000000', '2020-07-27 04:45:26', '2020-07-27 04:45:26'),
(31, 20, 3, 1, '70.000000', '2020-07-27 04:58:17', '2020-07-27 04:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `imagePath`, `subcategory_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Sukuma Wiki', 'sukumawiki.png', 1, 50, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(2, 'Spinach', 'spinach.png', 1, 50, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(3, 'Broccoli', 'broccoli.jpg', 1, 70, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(4, 'Potatoes (1kg)', 'potato.png', 2, 200, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(5, 'Oranges(6 pack)', 'oranges.png', 4, 60, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(6, 'Strawberries', 'strawberry.jpg', 5, 180, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(7, 'Apples(6 pack)', 'apples.jpg', 6, 200, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(8, 'Eggs(15 pack)', 'eggs.png', 7, 250, '2020-04-23 17:17:08', '2020-04-23 17:17:08'),
(9, 'Peas(1 kg)', 'peas.png', 11, 250, '2020-04-23 17:17:08', '2020-04-23 17:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Greens', 1, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(2, 'Root Vegetables', 1, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(3, 'Marrow', 1, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(4, 'Citrus', 2, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(5, 'Berries', 2, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(6, 'Apples & Pears', 2, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(7, 'Eggs', 3, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(8, 'Milk', 3, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(9, 'Cheese', 3, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(10, 'Dried', 4, '2020-04-23 16:26:21', '2020-04-23 16:26:21'),
(11, 'Fresh', 4, '2020-04-23 16:26:21', '2020-04-23 16:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `location`, `street`, `house`, `status`) VALUES
(1, 'Min Yoongi', 'min@gmail.com', NULL, '$2y$10$si5LTG7ggJEjMzATPPXgPuqoVycoeAAdXbwg7WXEt5I1CyAKq1LcG', NULL, '2020-04-23 09:23:25', '2020-04-23 09:23:25', '', '', '', '', 0),
(2, 'Stacy Anne', 'stacyanne01@gmail.com', NULL, '$2y$10$xwl28pk.uezqOuaWkmB6M.ZFJZvXqzz7F66JxBKSDFyrgmpa.7Oba', 'qsG8yRbuEEx3smHGkZG9DE4v6k0evyDej5d7hoziW11uDZFWkosFOATg92xp', '2020-04-23 10:37:02', '2020-04-23 10:37:02', '', '', '', '', 1),
(3, 'Dvsn', 'dvsn@gmail.com', NULL, '$2y$10$wWZ.Pd9Abb95Jg6kBL0DTOWrE.9AfWwB3XS5gG30lgppSL/.dufI6', NULL, '2020-04-23 10:38:41', '2020-04-23 10:38:41', '', '', '', '', 0),
(4, 'Kosgei Kevin', 'kevin@gmail.com', NULL, '$2y$10$0x2k6nyBj9j8qZOCT/VGmuEvL9pZISOMzPQqzqkK.snx5U3HHwA.u', NULL, '2020-04-28 14:09:12', '2020-04-28 14:09:12', '', '', '', '', 0),
(5, 'Min Yoongi', 'pied@piper.bts', NULL, '$2y$10$kqwJbpTDIMkG2rbLpY.QiOX7v8CX2WHHalf64f.oMOB8ZxEK.KYEi', NULL, '2020-04-28 18:37:26', '2020-04-28 18:37:26', '12345678', 'sdfgh', 'dfghj', 'dfghjk', 0),
(6, 'Kim Taehyung', 'kimtaehyung@gmail.com', NULL, '$2y$10$dTRsY6IGo7gKq9hqJYsdLOalsHahozLLF3vt2xuX4EHB.A1wEzYpC', NULL, '2020-04-28 19:02:22', '2020-04-28 19:02:22', '987654', 'jhgfd', 'kjhgf', 'ujyhtgfd', 0),
(7, 'Min Yoongi', 'ring@rig.com', NULL, '$2y$10$3JCM.lNjPIb4b4/d47OoVOn9l5NngtZp.IH54rURZTahyPnKHlVJK', NULL, '2020-04-29 04:30:40', '2020-04-29 04:30:40', '345678', 'WELL', 'WELL', 'WELL', 0),
(8, 'Min Yoongi', 'sabrinaa@gmail.com', NULL, '$2y$10$Hxjv5ZchUr3ZQRutnmSz1.qjagRIUWRhXxFOlb9Cv8bt5D9cALrx6', NULL, '2020-04-29 05:49:47', '2020-04-29 05:49:47', '543764', 'Nairobi CBD', 'dfgh', 'sdfgh', 0),
(9, 'Jeon Jungkook', 'jeon@gmail.com', NULL, '$2y$10$LXI3LsS8wdwcKfJAnpWLteMoM7wVuBQS0Ab5.8GOjSZwCalR3Gkba', NULL, '2020-05-03 13:26:03', '2020-05-03 13:26:03', '0987654', 'Nairobi CBD', 'MMU', '13', 0),
(10, 'Stacy Anne', 'stacy@gmail.com', NULL, '$2y$10$xY44opxCWmEs6XqLqofusOXkfaXhcelvJFAhgH5Wem0N42nLSdsLe', NULL, '2020-05-06 14:07:50', '2020-05-06 14:07:50', '0707876345', 'Nairobi CBD', 'Sedan', '14', 0),
(11, 'WebCloud', 'webcloud@gmail.com', NULL, '$2y$10$Z.MYtJ3Aif2ec904l5dsCu/AWlV/xEXeEsMRdtsYmoyHRerpW6XCK', 'O1rhisjeDidfA6f0LN8udIHGzXCnnOrdGvPewE9UNMDNO4kOVgjqqRZ9YZFv', '2020-05-16 01:51:34', '2020-05-16 01:51:34', '08765432', 'Nairobi CBD', 'Webcloud', '22', 1),
(12, 'Anne Chebet', 'fgh@vb.fgh', NULL, '$2y$10$SbJ5ky/wmsMQPknWG66wg./Dd8U3KiWbyy7kFXl0sO/kCW5.Fxb/G', NULL, '2020-05-18 06:58:55', '2020-05-18 06:58:55', '3456789', 'Nairobi CBD', 'gh', '45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `phone`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Nive Nive', '234567', 'Nyeri', '2020-06-04 18:05:02', '2020-06-04 18:05:02'),
(2, 'Min Yoongi', '2345678', 'bangtan', '2020-06-04 18:07:17', '2020-06-04 18:07:17'),
(3, 'Min Yoongi', '345678', 'Ins', '2020-06-04 18:07:42', '2020-06-04 18:07:42'),
(4, 'Kim Taehyung', '234567', 'sdfghj', '2020-06-05 17:14:35', '2020-06-05 17:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_city_id_foreign` (`city_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpesa_transactions`
--
ALTER TABLE `mpesa_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_index` (`order_id`),
  ADD KEY `order_items_product_id_index` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mpesa_transactions`
--
ALTER TABLE `mpesa_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
