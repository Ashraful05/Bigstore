-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 01, 2020 at 06:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `big_shops`
--

CREATE TABLE `big_shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Gram Bangla', 'Gram BanglaGram BanglaGram BanglaGram BanglaGram BanglaGram Bangla', 0, '2020-08-20 08:00:27', '2020-08-22 12:38:32'),
(2, 'CA', 'CACACACACACACACACACACA', 1, '2020-08-20 08:05:19', '2020-08-21 10:03:24'),
(3, 'Armani', 'ArmaniArmaniArmaniArmaniArmaniArmaniArmani', 1, '2020-08-20 08:06:20', '2020-08-21 10:03:25'),
(4, 'Samsung', 'SamsungSamsungSamsung', 1, '2020-08-22 13:10:44', '2020-08-22 13:10:44'),
(5, 'MI', 'MIMIMIMIMI', 1, '2020-08-23 04:27:31', '2020-08-23 04:27:31'),
(6, 'Walton', 'WaltonWaltonWaltonWalton', 1, '2020-08-23 04:27:47', '2020-08-23 04:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Cloth', 'ShirtShirt', 1, '2020-08-19 09:51:33', '2020-08-23 05:44:39'),
(4, 'Sports', 'SportsSportsSportsSportsSportsSports', 0, '2020-08-19 11:03:53', '2020-08-23 05:46:42'),
(5, 'Electronics', 'ElectronicsElectronicsElectronics', 1, '2020-08-22 13:11:01', '2020-08-22 13:11:01'),
(6, 'Almirah', 'AlmirahAlmirahAlmirah', 1, '2020-08-23 05:45:03', '2020-08-23 05:45:03'),
(7, 'Kits', 'KitsKitsKitsKits', 1, '2020-08-23 05:45:29', '2020-08-23 05:45:29'),
(8, 'AC', 'ACACACACACAC', 1, '2020-08-23 05:45:57', '2020-08-23 05:45:57'),
(9, 'Watch', 'WatchWatchWatchWatchWatch', 1, '2020-08-23 05:46:27', '2020-08-23 05:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(3, 'kamal', 'lohani', 'rotonmunsipara@gmail.com', '$2y$10$BLhSHemQj624oNGQUfng2.yDje/OFTcOdsZ/XaFf9f54.owJGfF3u', '3534536', 'fgssgf', '2020-08-27 12:26:00', '2020-08-27 12:26:00'),
(4, 'jamal', 'khan', 'rotonmunsipara@gmail.com', '$2y$10$wfjsV77gQqa0OEC9lozUsOOZlqWWV8QWyjWTiTEmNV../I9dsmWqC', '32432', 'fgsfgs', '2020-08-27 12:32:23', '2020-08-27 12:32:23'),
(5, 'rahul', 'hasan', 'rotonmunsipara@gmail.com', '$2y$10$kQWIRIqQE4T4S5/9MVTBYOfRAG.RU3XisWSHrVN/BH1EQ4uyG8YTO', '89789789798', 'afdafdadf', '2020-08-28 08:25:42', '2020-08-28 08:25:42'),
(6, 'rahul', 'hasan', 'rotonmunsipara@gmail.com', '$2y$10$3ZQ38PnInhpehK3hYiC2r.7g.P3VydapGUoi8HgNzya7qHqXu5ITO', '563864365353', 'sfgsdgfsdbsdb', '2020-08-28 10:38:38', '2020-08-28 10:38:38'),
(7, 'kasem', 'khan', 'rotonmunsipara@gmail.com', '$2y$10$9eVqJ8u4Gt9Gf1qytAS3YOfQwj2yNQdPNYPfbBGNdo.qWc4/IT.2q', '634534636', 'gaagfasf', '2020-08-29 10:37:58', '2020-08-29 10:37:58'),
(8, 'kasem', 'solemani', 'rotonmunsipara@gmail.com', '$2y$10$MWofJeslo9TxivZ1iPbXTuYYDiGdYyt2eYN/9Oa.DDPyxAaw27Zyi', '1234567890', 'gfsdgfsg', '2020-09-01 09:52:29', '2020-09-01 09:52:29'),
(9, 'kasem', 'solemani', 'rotonmunsipara@gmail.com', '$2y$10$x4GAl8/A6YynF7NKH.JFbOnJK0c63CCqQI7Xd9bQCABi49XI.9wlK', '1279543434', 'shgfsdfg', '2020-09-01 09:55:17', '2020-09-01 09:55:17');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_08_14_171801_create_big_shops_table', 1),
(5, '2020_08_18_171826_create_categories_table', 2),
(6, '2020_08_19_171324_create_products_table', 3),
(7, '2020_08_19_171430_create_brands_table', 3),
(8, '2020_08_21_161244_create_products_table', 4),
(9, '2020_08_26_153917_create_carts_table', 5),
(10, '2020_08_27_140907_create_checkouts_table', 5),
(11, '2020_08_27_160422_create_customers_table', 5),
(12, '2020_08_28_151532_create_shippings_table', 6),
(13, '2020_08_28_170147_create_orders_table', 7),
(14, '2020_08_28_170216_create_payments_table', 7),
(15, '2020_08_28_170251_create_order_details_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(5, 3, 4, 308000.00, 'Pending', '2020-08-29 12:12:07', '2020-08-29 12:12:07'),
(6, 3, 5, 92000.00, 'Pending', '2020-09-01 09:50:52', '2020-09-01 09:50:52'),
(8, 9, 9, 67500.00, 'Pending', '2020-09-01 09:55:32', '2020-09-01 09:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 4, 17, 'Phone', 12000.00, 3, '2020-08-28 12:39:13', '2020-08-28 12:39:13'),
(2, 5, 16, 'TV', 23000.00, 4, '2020-08-29 12:12:08', '2020-08-29 12:12:08'),
(3, 5, 23, 'AC', 54000.00, 4, '2020-08-29 12:12:08', '2020-08-29 12:12:08'),
(4, 6, 16, 'TV', 23000.00, 4, '2020-09-01 09:50:52', '2020-09-01 09:50:52'),
(5, 7, 16, 'TV', 23000.00, 4, '2020-09-01 09:50:52', '2020-09-01 09:50:52'),
(6, 8, 18, 'Phone', 13500.00, 5, '2020-09-01 09:55:32', '2020-09-01 09:55:32'),
(7, 9, 18, 'Phone', 13500.00, 5, '2020-09-01 09:55:32', '2020-09-01 09:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2020-08-28 12:29:28', '2020-08-28 12:29:28'),
(2, 2, 'Cash', 'Pending', '2020-08-28 12:30:06', '2020-08-28 12:30:06'),
(3, 3, 'Cash', 'Pending', '2020-08-28 12:38:43', '2020-08-28 12:38:43'),
(4, 4, 'Cash', 'Pending', '2020-08-28 12:39:13', '2020-08-28 12:39:13'),
(5, 5, 'Cash', 'Pending', '2020-08-29 12:12:07', '2020-08-29 12:12:07'),
(6, 6, 'Cash', 'Pending', '2020-09-01 09:50:52', '2020-09-01 09:50:52'),
(7, 7, 'Cash', 'Pending', '2020-09-01 09:50:52', '2020-09-01 09:50:52'),
(8, 8, 'Cash', 'Pending', '2020-09-01 09:55:32', '2020-09-01 09:55:32'),
(9, 9, 'Cash', 'Pending', '2020-09-01 09:55:32', '2020-09-01 09:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(20) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `product_image`, `short_description`, `long_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(16, 5, 5, 'TV', 23000, 10, 'product-images/TV.jpg', 'TV 23000', 'TV 23000 TV 23000', 1, '2020-08-24 10:53:57', '2020-08-25 11:32:09'),
(17, 5, 4, 'Phone', 12000, 1, 'product-images/Phone.jpg', 'Phone 12000', 'Phone 12000 Phone 12000 Phone 12000', 1, '2020-08-24 10:55:04', '2020-08-24 10:55:04'),
(18, 5, 5, 'Phone', 13500, 1, 'product-images/Phone.jpg', 'Phone 13500', 'Phone 13500 Phone 13500', 1, '2020-08-24 10:57:50', '2020-08-24 10:57:50'),
(19, 8, 6, 'AC-Walton', 45000, 10, 'product-images/AC-Walton.jpg', 'AC-Walton 45000', 'AC-Walton 45000 AC-Walton 45000', 1, '2020-08-26 07:26:24', '2020-08-26 07:26:24'),
(20, 8, 6, 'Air Cooler', 23000, 20, 'product-images/Air Cooler.jpg', 'Air Cooler 23000', 'Air Cooler 23000Air Cooler 23000Air Cooler 23000', 1, '2020-08-26 07:29:14', '2020-08-26 07:29:14'),
(21, 8, 6, 'Air Cooler', 23000, 20, 'product-images/Air Cooler.jpg', 'Air Cooler 23000', 'Air Cooler 23000Air Cooler 23000Air Cooler 23000', 1, '2020-08-26 07:29:15', '2020-08-26 07:29:15'),
(22, 8, 6, 'Air Cooler', 23000, 20, 'product-images/Air Cooler.jpg', 'Air Cooler 23000', 'Air Cooler 23000Air Cooler 23000Air Cooler 23000', 1, '2020-08-26 07:29:15', '2020-08-26 07:29:15'),
(23, 8, 6, 'AC', 54000, 2, 'product-images/AC.jpg', 'AC 54000', 'AC 54000 AC 54000 AC 54000', 1, '2020-08-26 09:09:47', '2020-08-26 09:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email_address`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'rahul hasan', 'rotonmunsipara@gmail.com', '563864365353', 'sfgsdgfsdbsdb', '2020-08-28 10:46:28', '2020-08-28 10:46:28'),
(2, 'rahul hasan', 'rotonmunsipara@gmail.com', '563864365353', 'sfgsdgfsdbsdb', '2020-08-28 12:29:18', '2020-08-28 12:29:18'),
(3, 'kasem khan', 'rotonmunsipara@gmail.com', '634534636', 'gaagfasf', '2020-08-29 10:38:16', '2020-08-29 10:38:16'),
(4, 'kamal lohani', 'rotonmunsipara@gmail.com', '3534536', 'fgssgf', '2020-08-29 12:12:03', '2020-08-29 12:12:03'),
(5, 'kamal lohani', 'rotonmunsipara@gmail.com', '3534536', 'fgssgf', '2020-09-01 09:50:47', '2020-09-01 09:50:47'),
(6, 'kasem solemani', 'rotonmunsipara@gmail.com', '1234567890', 'gfsdgfsg', '2020-09-01 09:52:47', '2020-09-01 09:52:47'),
(7, 'kasem solemani', 'rotonmunsipara@gmail.com', '1234567890', 'gfsdgfsg', '2020-09-01 09:52:47', '2020-09-01 09:52:47'),
(8, 'kasem solemani', 'rotonmunsipara@gmail.com', '1279543434', 'shgfsdfg', '2020-09-01 09:55:28', '2020-09-01 09:55:28'),
(9, 'kasem solemani', 'rotonmunsipara@gmail.com', '1279543434', 'shgfsdfg', '2020-09-01 09:55:28', '2020-09-01 09:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ashraful', 'jamil@yahoo.com', NULL, '$2y$10$4XlqNEPNf4rX6z2kxhYWmeR/.njZLfDVaD0D1rO8ZS.nobO.Ey2RC', NULL, '2020-08-15 12:50:36', '2020-08-15 12:50:36'),
(2, 'Ashraf', 'ashrafulmd389@gmail.com', NULL, '$2y$10$UOsmwmnU9.fENAfGwYmHhePdpZhw3Ood6hx9BUHXwkcCUC37gXmkC', NULL, '2020-08-18 09:49:44', '2020-08-18 09:49:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `big_shops`
--
ALTER TABLE `big_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
-- AUTO_INCREMENT for table `big_shops`
--
ALTER TABLE `big_shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
