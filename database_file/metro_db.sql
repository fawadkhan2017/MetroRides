-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2024 at 06:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Quia sit esse.', 'quia-sit-esse', '2024-03-05 21:42:55', '2024-03-05 21:42:55'),
(3, 'Distinctio hic error.', 'distinctio-hic-error', '2024-03-05 21:42:56', '2024-03-05 21:42:56'),
(4, 'Provident est quia.', 'provident-est-quia', '2024-03-05 21:42:56', '2024-03-05 21:42:56'),
(5, 'Ea error.', 'ea-error', '2024-03-05 21:42:56', '2024-03-05 21:42:56'),
(7, 'testing updated', 'testing-updated', '2024-04-19 02:03:34', '2024-04-19 02:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Black', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` enum('fixed','percent') NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `created_at`, `updated_at`, `expiry_date`) VALUES
(2, 'F10', 'fixed', '10.00', '100.00', '2024-05-10 01:28:30', '2024-05-10 01:28:30', '2024-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_01_104553_create_sessions_table', 1),
(14, '2024_03_05_062934_create_categories_table', 2),
(19, '2024_03_06_083944_create_colours_table', 4),
(20, '2024_03_05_063008_create_products_table', 5),
(21, '2024_04_23_071705_create_coupons_table', 6),
(22, '2024_04_24_094557_add_expiry_date_to_coupons_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `regular_price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `SKU` varchar(255) NOT NULL,
  `stock_status` enum('instock','outofstock') NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `colour_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `colour_id`, `created_at`, `updated_at`) VALUES
(2, 'Deontae Dach1', 'rerum-22eum-eos-vel-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '110.00', '6.65', 'inventore', 'outofstock', 1, 43, 'pro2.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(3, 'Deontae Dach2', 'rerum-eum-eos-vel-excepturi-po22rro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '45.00', '6.65', 'inventore', 'outofstock', 1, 43, 'pro3.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(4, 'Deontae Dach3', 'rerum-eum-eos-vel-excep22uri-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro4.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(5, 'Deontae Dach4', 'rerum-eum-eos-22vel-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '90.00', '6.65', 'inventore', 'outofstock', 1, 43, 'pro5.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(6, 'Deontae Dach11', 'rerum-eum-eos22vel-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '80.00', '6.65', 'inventore', 'outofstock', 1, 43, 'pro6.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(7, 'Deontae Dach12', 'rerum-eum-eos-v22el-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '40.00', '6.65', 'inventore', 'outofstock', 1, 43, 'pro7.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(8, 'Deontae Dach13', 'rerum-eum-eos-vel-exceptur22i-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro8.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(9, 'Deontae Dach134', 'rerum-eum-eos-vel-excepturi-porr22o', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro9.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(10, 'Deontae Dach1', 'rerum-22efasfum-eos-vel-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro10.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(12, 'Deontae Dach3', 'rerum-eum-faseos-vel-excep22uri-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro12.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(13, 'Deontae Dach4', 'rerum-eum-fasfeos-22vel-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro13.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(14, 'Deontae Dach11', 'rerum-eum-fasfeos22vel-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro14.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(15, 'Deontae Dach12', 'rerum-eum-efasfos-v22el-excepturi-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro15.png', NULL, NULL, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(16, 'Deontae Dach13', 'rerum-eum-eosfs-vel-exceptur22i-porro', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, 'pro16.png', NULL, 2, 1, '2024-03-05 21:44:09', '2024-03-05 21:44:09'),
(19, 'Deontae Dach3ffdaaf', 'deontae-dach3ffdaaf', 'rerum-eum-eos-vel-excepturi-porro-magni-voluptatibus', 'Voluptatem impedit eveniet voluptatem ut. Ea ex voluptas et voluptas. Hic amet inventore quia excepturi.', '41.37', '6.65', 'inventore', 'outofstock', 1, 43, NULL, ',17137797490.png,17137797491.png,17137797492.png,17137797493.png', 2, NULL, '2024-04-22 04:55:49', '2024-04-22 04:55:49'),
(20, 'testing', 'testing', 'testing description', 'testing', '12.00', '0.00', 'SKu', 'instock', 0, 100, '1713780252.png', ',17137802520.png,17137802521.png,17137802522.png,17137802523.png,17137802524.png', 7, NULL, '2024-04-22 05:04:12', '2024-04-22 05:04:12'),
(21, 'teisng39849', 'teisng39849', 'testing 4994', 'fkjajfkajkfj', '100.00', '0.00', 'SKU', 'instock', 0, 100, '1713851616.png', ',17138516160.png,17138516161.png,17138516162.png,17138516163.png', 7, NULL, '2024-04-23 00:53:36', '2024-04-23 00:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('O9mfemuS0Zl1kfSbEH9E8S3XtU6Yv5sXCPkQmbPG', 5, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQzNqdHBEWUNsY3dYbndkdk5sNG41b1Z0V25OVXdaTlYyNE5Qa0RjZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6ImE3NzViYWM5Y2ZmN2RlYzJiOTg0ZTAyM2I5NTIwNmFhIjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6OTp7czo1OiJyb3dJZCI7czozMjoiYTc3NWJhYzljZmY3ZGVjMmI5ODRlMDIzYjk1MjA2YWEiO3M6MjoiaWQiO2k6MztzOjM6InF0eSI7aToyO3M6NDoibmFtZSI7czoxMzoiRGVvbnRhZSBEYWNoMiI7czo1OiJwcmljZSI7ZDo0NTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtzOjE4OiJBcHBcTW9kZWxzXFByb2R1Y3QiO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjIxO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBpc1NhdmVkIjtiOjA7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O3M6NToidXR5cGUiO3M6MzoiQURNIjt9', 1715325204),
('woiwpaD2EfSllvr968S7kWNSriYNXkM4WHUoqCeZ', 5, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOTl1cHF6OXhacW42d3M1cmRmQ0pyU1BxYnJVQ2tvSkZUbnBHa2ZUaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjE6e3M6NzoiZGVmYXVsdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7czozMjoiYTc3NWJhYzljZmY3ZGVjMmI5ODRlMDIzYjk1MjA2YWEiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjo5OntzOjU6InJvd0lkIjtzOjMyOiJhNzc1YmFjOWNmZjdkZWMyYjk4NGUwMjNiOTUyMDZhYSI7czoyOiJpZCI7aTozO3M6MzoicXR5IjtpOjE7czo0OiJuYW1lIjtzOjEzOiJEZW9udGFlIERhY2gyIjtzOjU6InByaWNlIjtkOjQ1O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjA6e31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO3M6MTg6IkFwcFxNb2RlbHNcUHJvZHVjdCI7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAHRheFJhdGUiO2k6MjE7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGlzU2F2ZWQiO2I6MDt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czo1OiJ1dHlwZSI7czozOiJBRE0iO30=', 1715324318);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `utype` varchar(255) NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin USR for Customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$4U9ibhQFY4Ls2llfOD986.Q8oXq9724mMPjC8U8yGDF.ZJGacFD.6', NULL, NULL, NULL, NULL, NULL, NULL, 'ADM', '2024-03-01 06:13:45', '2024-03-01 06:13:45'),
(2, 'fawad', 'fawadafzal2017@gmail.com', NULL, '$2y$10$U8Mu2OcFfUbXm56czmYBsu2mKgoG9tWKB08rgBF0t59UW24gg8ZXy', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2024-03-01 07:30:22', '2024-03-01 07:30:22'),
(3, 'fawad amir', 'fawad@gmail.com', NULL, '$2y$10$BrUqHrR.l3PX2SiM2P6GNuHquwYzYPHp3uHWAIm5EXiBbWBwhNaiq', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2024-03-01 09:48:19', '2024-03-01 09:48:19'),
(4, 'ahmad', 'ahmad@gmail.com', NULL, '$2y$10$orSfDVRbMOU4i0Mktm8NKuuAqd7FbKZ1Z8brXHrQ7L49R8BhQSjIe', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2024-03-02 08:56:08', '2024-03-02 08:56:08'),
(5, 'Admin', 'admin@gmail.com', NULL, '$2y$10$lTkiotTToj.iLWRSOyX/m.wNoBCDVEbmm798qDGxi07X7xtUX0Be6', NULL, NULL, NULL, NULL, NULL, NULL, 'ADM', '2024-04-19 01:36:16', '2024-04-19 01:36:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_colour_id_foreign` (`colour_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_colour_id_foreign` FOREIGN KEY (`colour_id`) REFERENCES `colours` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
