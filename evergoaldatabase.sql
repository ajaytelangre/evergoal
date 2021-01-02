-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 07:31 AM
-- Server version: 5.7.30-log
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evergoaldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `amounts`
--

CREATE TABLE `amounts` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` bigint(255) DEFAULT NULL,
  `withdraw_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_date` timestamp NULL DEFAULT NULL,
  `updated_amount_time` timestamp NULL DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amounts`
--

INSERT INTO `amounts` (`id`, `total_amount`, `withdraw_amount`, `withdraw_date`, `updated_amount_time`, `transaction_id`) VALUES
('1', 88, NULL, NULL, '2020-12-28 06:20:28', NULL),
('10', NULL, NULL, NULL, NULL, NULL),
('11', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('12', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('13', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('14', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('15', NULL, NULL, NULL, NULL, NULL),
('16', NULL, NULL, NULL, '2020-12-18 05:03:02', NULL),
('17', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('18', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('19', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('2', 32, NULL, NULL, '2020-12-25 04:18:24', NULL),
('3', 26, NULL, NULL, '2020-12-25 04:18:24', NULL),
('4', 27, NULL, NULL, '2020-12-25 04:18:24', NULL),
('5', 26, NULL, NULL, '2020-12-25 04:18:24', NULL),
('6', NULL, NULL, NULL, NULL, NULL),
('8', 25, NULL, NULL, '2020-12-25 04:18:25', NULL),
('9', NULL, NULL, NULL, '2020-12-18 05:03:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `account_type`, `account_no`, `bank`, `branch_name`, `ifsc`, `pan`, `created_at`, `updated_at`) VALUES
('1', 'saving', '5632', 'SBI', 'Jalna', 'dfsdf', 'Yes', NULL, '2020-12-14 05:27:04'),
('2', 'current', '123654789', 'AXIS', 'Pune', 'sdf56', 'No', NULL, NULL),
('3', 'current', '89215663', 'SBI', '5lkkk', 'jjbjkh', 'No', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data`
-- (See below for the actual view)
--
CREATE TABLE `data` (
`id` int(10) unsigned
,`email` varchar(255)
,`password` varchar(255)
,`two_factor_secret` text
,`two_factor_recovery_codes` text
,`permissions` text
,`last_login` timestamp
,`first_name` varchar(255)
,`name` varchar(255)
,`mobile` varchar(255)
,`sponserid` varchar(255)
,`pimg` varchar(255)
,`captcha` varchar(255)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lucky_portals`
--

CREATE TABLE `lucky_portals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_11_27_045249_create_registrations_table', 1),
(6, '2020_11_27_062950_create_subregistrations_table', 1),
(7, '2020_12_05_055241_create_register_table', 1),
(8, '2020_12_14_063838_create_banks_table', 1),
(9, '2020_12_14_065341_add_status_to_users_table', 1),
(10, '2020_12_16_151055_add_payment_status_to_users_table', 2),
(11, '2020_12_17_102903_create_amounts_table', 3),
(12, '2020_12_17_140542_add_child_status_to_users_table', 4),
(13, '2020_12_22_113031_add_admin_name_to_users_table', 5),
(14, '2020_12_22_122741_make_unique_admin_to_users_table', 6),
(15, '2020_12_22_161205_add_user_type_to_users_table', 7),
(16, '2020_12_28_101444_create_transaction_table', 8),
(17, '2020_12_28_122024_create_lucky_portals_table', 9),
(18, '2020_12_28_122610_create_lucky_portals_table', 10),
(19, '2020_12_28_123609_create_lucky_portals_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('aj@gmail.com', '$2y$10$Xg/TUPITJh4Cm.GtSYG2te9Bp9WtyViyObRFWV2YIM5roRk3cq4hm', '2020-12-29 11:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sponser_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sponserid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `captcha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, '', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subregistrations`
--

CREATE TABLE `subregistrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadhar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passbookno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `user_id` int(11) NOT NULL,
  `payment_amount` int(11) DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_amount` double(8,2) DEFAULT NULL,
  `withdraw_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`user_id`, `payment_amount`, `payment_date`, `order_id`, `payment_id`, `withdraw_amount`, `withdraw_date`) VALUES
(1, 950, '2020-12-28 05:28:03', 'order_GILEQD9D3uW3Kr', 'pay_GILEWYdvYzmmDR', NULL, NULL),
(1, 950, '2020-12-28 06:04:33', 'order_GIM1SmobY0ld8L', 'pay_GIM1aNXRpmLHCv', NULL, NULL),
(1, 950, '2020-12-28 06:05:37', 'order_GIM2bmirFYHmUk', 'pay_GIM2h7hbGCAASC', NULL, NULL),
(1, 950, '2020-12-29 07:53:27', 'order_GImP5IlRS8Cc5l', 'pay_GImPdQbevhqpsV', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `us`
-- (See below for the actual view)
--
CREATE TABLE `us` (
`lev1` int(10) unsigned
,`lev2` int(10) unsigned
,`lev3` int(10) unsigned
,`lev4` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponserid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `child_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `permissions`, `last_login`, `first_name`, `name`, `mobile`, `sponserid`, `pimg`, `captcha`, `created_at`, `updated_at`, `status`, `payment_status`, `payment_date`, `child_status`, `admin_username`, `user_type`) VALUES
(1, 'aj@gmail.com', '$2y$10$iTcurFrr9Bi7kXhRB/o70.KSzwQlkhIlT08LxvIvNvmOAROEBwilm', NULL, NULL, NULL, NULL, NULL, 'Ajay Telangre', '6666666666', '0', 'pic.jpg', NULL, '2020-12-10 10:38:30', '2020-12-29 07:53:28', 'active', 'true', '2020-12-29 07:53:28', 'active', 'ajay@gmail.com', 'admin'),
(2, 'v@gmail.com', '$2y$10$7kdEQQt0JXFzhS.e0bgnqO3Gu3BN43EG1AlQPxDCsxR8tn.lTUC9u', NULL, NULL, NULL, NULL, NULL, 'Vijay Chauhan', '3333333333', '1', 'download.jpg', NULL, NULL, '2020-12-28 09:22:21', 'deactive', NULL, '2020-10-08 09:16:37', 'active', 'vijay@gmail.com', 'user'),
(3, 'r66@gmail.com', '$2y$10$1u4JLRHymLoo/ku.39KwauwaopnG3J55RSwDmTrQXrHyDe1f9Dq/e', NULL, NULL, NULL, NULL, NULL, 'Ram Godbole', '1234567890', '2', 'pic.jpg', NULL, NULL, '2020-12-23 06:51:55', 'active', NULL, '2020-12-01 07:30:07', 'active', NULL, 'user'),
(4, 'j@gmail.com', '$2y$10$1NGzFunQ4wRLftFOqgG7E.DMU40HNfrJwrLeRMDEJa9Oh..g1MsB2', NULL, NULL, NULL, NULL, NULL, 'jay', '4444444444', '3', 'download.jpg', NULL, NULL, '2020-12-28 09:27:12', 'deactive', NULL, '2020-10-09 09:13:02', 'active', NULL, 'user'),
(5, 'h525@gmail.com', '$2y$10$3QV.kYk1p3PEZL/ok7h0Qe8LrAvIaCUAdOwhhi0VhtH3.yC50W.wm', NULL, NULL, NULL, NULL, NULL, 'Hitesh Godbole', '1111111111', '1', '', NULL, NULL, '2020-12-24 09:35:38', 'active', NULL, NULL, 'active', NULL, 'user'),
(6, 's@gmail.com', '$2y$10$LWroCI1y6VL3kUIZT56h/OU95H7Ntr3CibgKhF3Ai3RafSV7ZSmwm', NULL, NULL, NULL, NULL, NULL, 'Sham Thakur', '5555555555', '2', '', NULL, NULL, '2020-12-25 11:38:35', 'active', 'true', '2020-12-01 11:38:35', 'active', NULL, 'user'),
(8, 's16523@gmail.com', '$2y$10$wB75cU/t3aQjKK73QRx1j.73Z6CB6npc6BUI8uLNUVJSwMRwNzvBm', NULL, NULL, NULL, NULL, NULL, 'Shubham Gore', '9999999999', '4', '', NULL, NULL, '2020-12-22 12:21:48', 'active', NULL, NULL, 'deactive', NULL, 'user'),
(10, 'git@gmail.com', '$2y$10$s5dXwzgylqbZDcpVSyZA7elnq2dK.ruOXSGjNmMtcdlY79XmPr0WW', NULL, NULL, NULL, NULL, NULL, 'Gitesh Sharma', '2222233333', '2', '', NULL, NULL, NULL, 'deactive', NULL, NULL, 'deactive', NULL, 'user'),
(11, 'kush@gmail.com', '$2y$10$ia1f1RCp3eEJfTgD0PVVuOY29ERLkrZwEGptnjQea0ppgXlnBu0Iy', NULL, NULL, NULL, NULL, NULL, 'Kush Verma', '1111122222', '2', '', NULL, '2020-12-16 03:32:30', NULL, 'active', NULL, NULL, 'deactive', NULL, 'user'),
(12, 'sh@gmail.com', '$2y$10$AHIQWEZMDLOap7qb9.zP.OnqSFE7tK9TFQU3qkagNd4NELhRi/dwy', NULL, NULL, NULL, NULL, NULL, 'Shriram Kale', '7777788888', '2', '', NULL, '2020-12-16 09:07:01', NULL, 'active', NULL, NULL, 'deactive', NULL, 'user'),
(13, 'viru@gmail.com', '$2y$10$fOZOUqvbOjBf326vfSXIqeuZmeGoPwg.xb20K85jJT40VqKuqjfiu', NULL, NULL, NULL, NULL, NULL, 'Viru Virana', '8888899999', '1', '', NULL, '2020-12-17 06:52:51', NULL, 'active', NULL, NULL, 'deactive', NULL, 'user'),
(14, 'ju@gmail.com', '$2y$10$1EhCr.zYSUZw.wmYLajnz.G1/fka1AKA0o5/GEFm3hCbIREoqdU2C', NULL, NULL, NULL, NULL, NULL, 'Juned Ahmad', '1234512345', '6', '', NULL, '2020-12-17 08:58:11', '2020-12-18 05:35:10', 'active', NULL, NULL, 'deactive', NULL, 'user'),
(17, 'jay11@gmail.com', '$2y$10$FHxt2UBykDlNyQpS5yfVV.ABENixYmWpkevTbA/AAQGmtlGZBsOdS', NULL, NULL, NULL, NULL, NULL, 'Jayram', '3333222211', '1', '', NULL, '2020-12-22 07:23:15', '2020-12-22 07:34:04', 'active', NULL, NULL, 'deactive', NULL, 'user'),
(18, 'ram3@gmail.com', '$2y$10$YB4Hvi4qOlUo.cSPzesAteRwM10bM1GOu66e3.6DRa5qpk.A70mGa', NULL, NULL, NULL, NULL, NULL, 'Ram lila Bhansali', '1212121212', '4', '', NULL, '2020-12-22 10:49:59', NULL, 'active', NULL, NULL, 'deactive', NULL, 'user'),
(19, 'dfasdf@gmail.com', '$2y$10$MrkUYLb7lwaUxLGhtF6w3uQELVpsou8yZ/Q2JtlljaciZWXTChH4W', NULL, NULL, NULL, NULL, NULL, 'Devesh Kumar', '1111144444', '5', '', NULL, '2020-12-23 09:30:52', '2020-12-24 09:35:38', 'active', NULL, NULL, 'deactive', NULL, 'user');

-- --------------------------------------------------------

--
-- Structure for view `data`
--
DROP TABLE IF EXISTS `data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ODBC`@`%` SQL SECURITY DEFINER VIEW `data`  AS  select `users`.`id` AS `id`,`users`.`email` AS `email`,`users`.`password` AS `password`,`users`.`two_factor_secret` AS `two_factor_secret`,`users`.`two_factor_recovery_codes` AS `two_factor_recovery_codes`,`users`.`permissions` AS `permissions`,`users`.`last_login` AS `last_login`,`users`.`first_name` AS `first_name`,`users`.`name` AS `name`,`users`.`mobile` AS `mobile`,`users`.`sponserid` AS `sponserid`,`users`.`pimg` AS `pimg`,`users`.`captcha` AS `captcha`,`users`.`created_at` AS `created_at`,`users`.`updated_at` AS `updated_at` from `users` where (`users`.`sponserid` = 7) ;

-- --------------------------------------------------------

--
-- Structure for view `us`
--
DROP TABLE IF EXISTS `us`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ODBC`@`%` SQL SECURITY DEFINER VIEW `us`  AS  select `t1`.`id` AS `lev1`,`t2`.`id` AS `lev2`,`t3`.`id` AS `lev3`,`t4`.`id` AS `lev4` from (((`users` `t1` left join `users` `t2` on((`t2`.`sponserid` = `t1`.`id`))) left join `users` `t3` on((`t3`.`sponserid` = `t2`.`id`))) left join `users` `t4` on((`t4`.`sponserid` = `t3`.`id`))) where (`t1`.`id` = 1) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amounts`
--
ALTER TABLE `amounts`
  ADD UNIQUE KEY `amounts_id_unique` (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD UNIQUE KEY `banks_id_unique` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lucky_portals`
--
ALTER TABLE `lucky_portals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lucky_portals_user_id_unique` (`user_id`);

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
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `subregistrations`
--
ALTER TABLE `subregistrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_admin_username_unique` (`admin_username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lucky_portals`
--
ALTER TABLE `lucky_portals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subregistrations`
--
ALTER TABLE `subregistrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
