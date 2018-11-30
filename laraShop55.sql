-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 30, 2018 at 09:45 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraShop55`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `fullname`, `email`, `phone`, `city`, `state`, `country`, `full_address`, `created_at`, `updated_at`, `userid`) VALUES
(1, 'Hardeep singh', 'hardeep@demo.com', '987654210', 'jagraon', 'punjab', 'india', 'ewfcwe wefwefew', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart_total`
--

CREATE TABLE `cart_total` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_totol` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_total`
--

INSERT INTO `cart_total` (`id`, `cart_totol`, `discount`, `user_id`, `created_at`, `updated_at`, `gtotal`) VALUES
(17, 359, 2, 4, NULL, NULL, 352),
(18, 630, 2, 4, NULL, NULL, 617),
(19, 630, 2, 4, NULL, NULL, 617),
(20, 630, 2, 4, NULL, NULL, 617),
(21, 630, 2, 4, NULL, NULL, 617),
(22, 630, 2, 4, NULL, NULL, 617),
(23, 630, 2, 4, NULL, NULL, 617);

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat_name`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 'fruit', 0, '2018-01-25 23:11:11', '2018-01-25 23:11:11'),
(2, 'vegetables ', 0, '2017-12-08 06:47:09', '2017-12-08 06:47:09'),
(3, 'sweets', 0, '2017-12-08 01:24:02', '2017-12-08 01:24:02'),
(12, 'good fruit', 1, NULL, NULL),
(13, 'bad fruit', 1, NULL, NULL),
(14, 'good sweets', 3, NULL, NULL),
(15, 'bad sweets', 3, NULL, NULL),
(16, 'good veggie', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `discount`, `created_at`, `updated_at`) VALUES
(2, 'abcxyz', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dAddress`
--

CREATE TABLE `dAddress` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dAddress`
--

INSERT INTO `dAddress` (`id`, `fullname`, `userid`, `email`, `phone`, `city`, `state`, `country`, `fullAddress`, `created_at`, `updated_at`) VALUES
(4, 'hardeep singh', 4, 'hardeepphp@yahoo.com', '9855988930', 'frgergfr', 'punjab', 'india', 'fwr, wfrrg', '2018-11-13 02:46:15', '2018-11-13 02:46:15'),
(5, 'demo singh', 4, 'demo@yahoo.com', '9855988912', 'dcwvef', 'punjab', 'india', 'dcf ver', '2018-11-28 05:17:11', '2018-11-28 05:17:11'),
(6, 'jessy jd', 5, 'jessy@mail.com', '9855988912', 'sdf ffre', 'dscd dsvfev', 'uk', 'wfc wrvrg', '2018-11-28 05:18:56', '2018-11-28 05:18:56'),
(7, 'hardeep singh', 4, 'hardeep@demo.com', '9855988930', 'dfsfv', 'punjab', 'india', 'df edfewfwe', '2018-11-28 07:43:03', '2018-11-28 07:43:03'),
(8, 'admin', 6, 'admin@demo.com', '9844822334', 'fvbdf fbdfgb', 'dsdcvdfve', 'usa', 'nwhqbdjc smn bhv cmn efw', '2018-11-28 21:31:05', '2018-11-28 21:31:05'),
(9, 'admin', 6, 'admin@demo.com', '9855988123', 'edccfwesdv sdnf', 'sfdvsbb', 'dfewvvr', 'sdfvsgvb fvfbert', '2018-11-28 21:37:53', '2018-11-28 21:37:53'),
(10, 'admin', 6, 'admin@demo.com', '9855945930', 'sdvfe ferfcr', 'wfevetg', 'wfrevr', 'rf rfg4t5tgrvg45', '2018-11-28 22:35:07', '2018-11-28 22:35:07'),
(11, 'admin', 6, 'admin@demo.com', '9855988930', 'deferff3r', 'rfegrrfgt', 'rft3tg35t', 'freg ergt', '2018-11-28 23:33:27', '2018-11-28 23:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `user_id`, `subject`, `status`, `message`, `created_at`, `updated_at`) VALUES
(1, 4, 'hi', 0, 'hello are your there ?', '2018-01-16 07:30:12', '2018-01-16 07:30:12'),
(2, 3, 'hello', 0, 'hi, are you there ?', '2018-01-16 07:30:12', '2018-01-16 07:30:12'),
(3, 4, 'hi again', 0, 'hello are your there ?', '2018-01-16 07:30:12', '2018-01-16 07:30:12'),
(4, 3, 'hi again', 0, 'hello are your there ?', '2018-01-16 07:30:12', '2018-01-16 07:30:12'),
(5, 3, 'hello again and again', 0, 'hi, are you there ?', '2018-01-16 07:30:12', '2018-01-16 07:30:12');

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
(3, '2017_10_30_082507_create_products_table', 2),
(4, '2017_12_08_052120_create_test_table', 3),
(5, '2017_12_08_055136_create_cats_table', 4),
(6, '2017_12_08_063617_create_tests_table', 5),
(7, '2017_12_08_064156_create_cats_table', 6),
(8, '2018_01_16_061047_craete_inbox_table', 7),
(9, '2018_01_16_062725_craete_inbox_table', 8),
(10, '2018_02_01_042437_create_orders_table', 9),
(11, '2018_10_31_112736_create_address_table', 10),
(12, '2018_11_02_073722_create_coupons_table', 11),
(13, '2018_11_02_074254_create_used_coupons_table', 12),
(14, '2018_11_02_081858_create_cart_total_table', 13),
(18, '2018_11_13_075123_create_dAddress_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `created_at`, `updated_at`, `total`, `status`) VALUES
(19, 4, '2018-11-13 02:25:16', '2018-11-13 02:25:16', '1,058.40', 'processed'),
(20, 4, '2018-11-13 02:46:15', '2018-11-13 02:46:15', '630.00', 'cancelled'),
(21, 4, '2018-11-28 05:17:11', '2018-11-28 05:17:11', '1,033.20', 'shipped'),
(22, 5, '2018-11-28 05:18:56', '2018-11-28 05:18:56', '210.00', 'shipped'),
(23, 4, '2018-11-28 07:43:03', '2018-11-28 07:43:03', '315.00', 'pending'),
(24, 6, '2018-11-28 21:31:05', '2018-11-28 21:31:05', '1,054.20', 'cancelled'),
(25, 6, '2018-11-28 21:37:53', '2018-11-28 21:37:53', '315.00', 'dispatched'),
(26, 6, '2018-11-28 22:35:07', '2018-11-28 22:35:07', '1,089.90', 'dispatched'),
(27, 6, '2018-11-28 23:33:27', '2018-11-28 23:33:27', '210.00', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `orders_id`, `products_id`, `qty`, `total`) VALUES
(22, 19, 19, 1, '300'),
(23, 19, 25, 2, '708'),
(24, 20, 19, 1, '300'),
(25, 20, 20, 1, '300'),
(26, 21, 5, 2, '684'),
(27, 21, 20, 1, '300'),
(28, 22, 22, 1, '200'),
(29, 23, 19, 1, '300'),
(30, 24, 22, 1, '200'),
(31, 24, 18, 1, '200'),
(32, 24, 21, 2, '604'),
(33, 25, 19, 1, '300'),
(34, 26, 5, 2, '684'),
(35, 26, 25, 1, '354'),
(36, 27, 18, 1, '200');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_code`, `pro_img`, `cat_id`, `pro_info`, `pro_price`, `created_at`, `updated_at`) VALUES
(5, 'Pomelo', 'Pomelo45', '1512452893dummy-400x400-KiwiSolo.jpg', 1, 'd c wdmnc kwd dew . we j dehbe2 de2 ke', '342', '2017-11-01 01:23:58', '2017-12-24 05:23:09'),
(18, 'shrubbery', 'shrubbery45', '1512450614dummy-400x400-Strawberry.jpg', 3, 'wdcn wc wm c', '200', '2017-11-03 03:04:04', '2017-12-14 06:18:19'),
(19, 'orange', 'orange89', '1512450634dummy-400x400-Orange.jpg', 1, 'w cdjvwjc jwc ', '300', '2017-11-09 02:05:56', '2017-11-15 00:53:55'),
(20, 'cherry', 'cherry67', '1512450579dummy-400x400-Cherry.jpg', 3, 'wecjhevjce ece2c', '300', '2017-12-04 23:39:04', '2017-12-14 06:17:50'),
(21, 'gulab jamun', 'gulabjamun78', '1513250356gulab_jamun.png', 3, 'wejhvcjvejhcv ehjhvdqevd', '302', '2017-12-04 23:39:51', '2017-12-04 23:39:51'),
(22, 'grapes', 'grapes38', '1512450653dummy-400x400-Wine.jpg', 1, 'uwyeguwvdjhvjv', '200', '2017-12-04 23:40:45', '2017-12-12 01:27:59'),
(23, 'chocolate', 'chocolate56', '1512450673dummy-400x400-Chocolate.jpg', 3, 'mns cjhv jmd ejd j', '197', '2017-12-04 23:41:04', '2017-12-04 23:41:04'),
(24, 'cucumber ', 'cucumber12', '1512450695dummy-400x400-Spreewald.jpg', 16, 'wjhdbcv wehjdvhej dejm2 ', '235', '2017-12-04 23:41:24', '2017-12-04 23:41:24'),
(25, 'cornflower', 'cornflower342', '1512451095dummy-400x400-Lecker.jpg', 2, 'hevdv ejhdv2jevdj2 ', '354', '2017-12-04 23:48:04', '2017-12-04 23:48:04'),
(26, 'dry shrubbery', 'shrubbery34', '1512451118dummy-400x400-FrozenRaspberry.jpg', 3, 'vedv eh2dvgj2 3fyu ', '212', '2017-12-04 23:48:26', '2017-12-04 23:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `used_coupons`
--

CREATE TABLE `used_coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `used_coupons`
--

INSERT INTO `used_coupons` (`id`, `coupon_id`, `user_id`, `created_at`, `updated_at`) VALUES
(24, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kadar khan', 'kadar@demo.com', '$2y$10$coRuCg6ejacmmP30kTj1fenKPxCjjvIILJwmPt2W7zAQux1dxSUPC', NULL, 1, 'YoRlPuXk7A6YbOqTolF6JiLgJqijNqMyrLtH9NeX3qBK8Bf7pcnwBgXTG6LJ', '2017-09-17 23:57:07', '2017-09-17 23:57:07'),
(2, 'Hardeep singh', 'hardeep@demo.com', '$2y$10$WG0MA2mew4ifhfgeXc.Y4u1D/9DqtG4K9crx9bb.yaATVShBtHIxG', 'admin', 0, 'tNUMQgBW3Fw7DvpmGz6HfIO5fwa2yXLV511cctL5XdAYl9V3BzNdijqQF8Sc', '2017-10-08 21:15:20', '2017-10-08 21:15:20'),
(3, 'anita', 'anita@yahoo.com', '$2y$10$7/7ej4voVbqWZCwXv8AH9OownCdN3ztm8vAj2GZwaHi.x1EMxZ8hW', NULL, 1, 'YqXPAWTwBiVi0432Pij4sdBcHu7h7AaepuGn2gBLaVpBbdoVR5T7z7XKBtih', '2017-12-29 22:44:26', '2017-12-29 22:44:26'),
(4, 'demo human', 'demo@yahoo.com', '$2y$10$PeHdsan1CluqjDWi4wErIOotovGeBak7VHJJJlB2aj5m47.fPsbD2', NULL, 0, 'apGPfih9mhfQW24tWMGUBolMarYNNquzyQDPxwufqgO8ulB2DYQmGLHASBPe', '2017-12-29 22:45:42', '2017-12-29 22:45:42'),
(5, 'jessy kriya', 'jessy@mail.com', '$2y$10$2QXmH.V1cQZuO5TxLOroguGw6KgS9ld/m8XKGLJ3rdrtprUoF37m.', NULL, 0, 'Qb0LXJj8tNqp28auHsOd4VIDKnRyMwPRfn4T4eAnmq17LGLQlRLOCcM1Eh2C', '2017-12-29 22:59:43', '2017-12-29 22:59:43'),
(6, 'admin', 'admin@demo.com', '$2y$10$pRzO1Asj0pDFuT4Yyc766uRpLn3NeUo0Tdtk5.MMayvZLnF1WEmK2', 'admin', NULL, 'Xd0rhj1UJPPx9ruVnbdwn3dLUm1ax284tudhMbnMXcsn3ps3AyiWlDJsBfv1', '2018-01-25 22:36:36', '2018-01-25 22:36:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_total`
--
ALTER TABLE `cart_total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dAddress`
--
ALTER TABLE `dAddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
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
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `used_coupons`
--
ALTER TABLE `used_coupons`
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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart_total`
--
ALTER TABLE `cart_total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dAddress`
--
ALTER TABLE `dAddress`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `used_coupons`
--
ALTER TABLE `used_coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
