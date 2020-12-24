-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 04:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent1_db_p3`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor_posts`
--

CREATE TABLE `advisor_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advisor_id_fk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advisor_posts`
--

INSERT INTO `advisor_posts` (`id`, `area`, `garage`, `bathroom`, `bedroom`, `ownername`, `rent`, `city`, `state`, `address`, `description`, `image`, `advisor_id_fk`, `created_at`, `updated_at`) VALUES
(16, '1200', '1', '3', '6', 'TOHA', '85000', 'GULSHAN', 'CHOTTOGRAM', 'colony no 3 gulshan', 'This is very beautiful home', '1608818853_2.jpg', '1', '2020-12-23 15:54:31', '2020-12-24 08:07:33'),
(17, '550', '1', '2', '5', 'Ali zia', '67000', 'UTTARA', 'DHAKA', 'DHA UTTARA', 'Very beautiful home', '1608761365_2.jpg', '1', '2020-12-23 15:59:46', '2020-12-23 16:09:25'),
(18, '1530', '1', '2', '5', 'Ali Mia', '67000', 'Uposhohor', 'CHOTTOGRAM', 'Block D', 'Very beautiful home', '1608820471_4.jpg', '2', '2020-12-23 16:55:05', '2020-12-24 08:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_1` int(10) UNSIGNED DEFAULT NULL,
  `user_2` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `user_1`, `user_2`, `created_at`, `updated_at`) VALUES
(1, 4, 7, '2020-11-07 11:22:57', '2020-11-07 11:22:57'),
(2, 5, 7, '2020-12-23 18:35:31', '2020-12-23 18:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `jazz_ids`
--

CREATE TABLE `jazz_ids` (
  `id` int(10) UNSIGNED NOT NULL,
  `jazz_transection_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advisor_id_fk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jazz_ids`
--

INSERT INTO `jazz_ids` (`id`, `jazz_transection_id`, `contact_no`, `advisor_id_fk`, `created_at`, `updated_at`) VALUES
(1, '12345', '6789107676', '1', '2020-11-07 10:41:50', '2020-11-07 10:41:50'),
(2, '54321', '000232312', '2', '2020-11-07 10:41:50', '2020-11-07 10:41:50'),
(3, '456789', '11122209839', '3', '2020-11-07 10:41:50', '2020-11-07 10:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message_sender_user` int(10) UNSIGNED DEFAULT NULL,
  `message_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_user_1_seen` tinyint(1) NOT NULL,
  `is_user_2_seen` tinyint(1) NOT NULL,
  `message_send_at` datetime NOT NULL,
  `conversation_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_sender_user`, `message_text`, `is_user_1_seen`, `is_user_2_seen`, `message_send_at`, `conversation_id`, `created_at`, `updated_at`) VALUES
(1, 4, 'dsvdsgdf', 1, 1, '2020-11-07 22:22:58', 1, '2020-11-07 16:22:58', '2020-12-05 03:44:07'),
(2, 4, 'hello xyz', 1, 1, '2020-12-05 14:43:31', 1, '2020-12-05 08:43:31', '2020-12-05 03:44:07'),
(3, 4, 'can you suggest me some best but budget friendly house in dhaka ?', 1, 1, '2020-12-24 05:32:47', 1, '2020-12-23 23:32:47', '2020-12-24 06:36:38'),
(4, 5, 'I want to get this house. But its over my budget. Can it be negotiate?', 1, 1, '2020-12-24 05:35:31', 2, '2020-12-23 23:35:31', '2020-12-24 06:36:50'),
(5, 4, 'abcd', 1, 1, '2020-12-24 17:35:33', 1, '2020-12-24 11:35:33', '2020-12-24 06:36:38'),
(6, 4, 'huglkho', 1, 0, '2020-12-24 19:11:52', 1, '2020-12-24 13:11:52', '2020-12-24 13:11:52');

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
(3, '2018_11_24_022121_create_register_tenets_table', 1),
(4, '2018_11_24_022554_create_register_admins_table', 1),
(5, '2018_11_24_022605_create_register_advisors_table', 1),
(6, '2018_11_24_030550_create_roles_table', 1),
(7, '2018_11_25_001257_create_jazz_ids_table', 1),
(8, '2018_11_25_002432_create_conversations_table', 1),
(9, '2018_11_25_002602_create_advisor_posts_table', 1),
(10, '2018_11_30_050532_create_messages_table', 1);

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
-- Table structure for table `register_admins`
--

CREATE TABLE `register_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_admins`
--

INSERT INTO `register_admins` (`id`, `first_name`, `last_name`, `phone`, `address`, `user_id_fk`, `created_at`, `updated_at`) VALUES
(1, 'sdsdsd', 'fdfedsf', '+8801797283528', 'Sylhet', 1, '2020-11-07 10:41:49', '2020-12-24 08:33:31'),
(2, 'Ali', 'Hamza', '+34342', 'Multan', 2, '2020-11-07 10:41:49', '2020-11-07 10:41:49'),
(3, 'Rana', 'Aqeel', '+55676776', 'Kahnewal', 3, '2020-11-07 10:41:49', '2020-11-07 10:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `register_advisors`
--

CREATE TABLE `register_advisors` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ntn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `is_recived` tinyint(1) NOT NULL DEFAULT 0,
  `is_upgrated` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_advisors`
--

INSERT INTO `register_advisors` (`id`, `first_name`, `last_name`, `ntn`, `cnic`, `brand`, `phone`, `address`, `user_id_fk`, `is_recived`, `is_upgrated`, `created_at`, `updated_at`) VALUES
(1, 'TOHA', 'SIKDAR', '1234', '3610274376841284', 'TohaAdvisor', '+88013334234', 'DHAKA', 7, 1, 1, '2020-11-07 10:41:49', '2020-12-23 15:28:32'),
(2, 'EHSAN', 'SYED', '1234', '36102743768471284', 'EHSANAdvisor', '+88013334234', 'SYLHET', 8, 1, 1, '2020-11-07 10:41:50', '2020-12-23 16:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `register_tenets`
--

CREATE TABLE `register_tenets` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_tenets`
--

INSERT INTO `register_tenets` (`id`, `first_name`, `last_name`, `phone`, `address`, `user_id_fk`, `created_at`, `updated_at`) VALUES
(1, 'fbsdb', 'fsdb', 'bfgb', 'fgsdb', 4, '2020-11-07 10:41:49', '2020-12-24 08:35:59'),
(6, 'Syed', 'Ehsan', '+8801797283528', 'khui', 12, '2020-12-24 08:02:32', '2020-12-24 08:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-11-07 10:41:47', '2020-11-07 10:41:47'),
(2, 'Tenet', '2020-11-07 10:41:47', '2020-11-07 10:41:47'),
(3, 'PropertyAdvisor', '2020-11-07 10:41:47', '2020-11-07 10:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id_fk` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `profile_img`, `role_id_fk`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admiin@1.com', NULL, '$2y$10$vGwihR85TPsnZPOIu1.uyOdofJJ./7LT9a23wHirzoMRXpqSelzYi', 'pp.png', 1, 'ypXWL2IeDzRqUFLg1UqzZxUDC8ND34tKWTYktkB6QreoxV8B6u1CYkDv8T8J', '2020-11-07 10:41:47', '2020-11-07 10:41:47'),
(2, 'admiin@2.com', NULL, '$2y$10$ZipnPH5W2.AJMQpPuiehfeVgwdx4So1b5yMCUcJJXL0pQ04m5B3WW', 'pp.png', 1, '3VW173aXIEIOOuIFQS9MWxCxILjeM0vQb2ds1JdY9lR5OriXMuWM881sco0H', '2020-11-07 10:41:47', '2020-11-07 10:41:47'),
(3, 'admiin@3.com', NULL, '$2y$10$lgRA95WM1GTXng7jdCFPJea.rt0u3vg35/xW/JVmU/EB3q3Qn6x2a', 'pp.png', 1, NULL, '2020-11-07 10:41:48', '2020-11-07 10:41:48'),
(4, 'tenet@1.com', NULL, '$2y$10$mOuUj76.vVJuS6zC0WRJxus4Op2ospNfCxUQ1BtixQGxKlvJl8yI.', 'pp.png', 2, 'zNbKgBlxPLZpJ1S2LDEv0BpFEHNx3DnWLwrRtMdZck35LJSzYkdpy61dzkFl', '2020-11-07 10:41:48', '2020-11-07 10:41:48'),
(7, 'advisor@1.com', NULL, '$2y$10$dWwKuQPVtoozmRY.hqLchOcYMT9iTgd0AT5sQTtamJ1JCDMVrjVm.', 'pp.png', 3, 'r9kCX43M58jFvvq0lDIG3Cf7THa7IbiR6RP1EjCs0qsxwe3EFYHaIau3gbMK', '2020-11-07 10:41:48', '2020-11-07 10:41:48'),
(8, 'advisor@2.com', NULL, '$2y$10$BaLDhKOOZjLjqxUB4miYZ.NQzGrXlXQjbPOj3WcbXda9q7awgQ/Mu', 'pp.png', 3, 'IRdGgRocRlVeeg4nTDwXpghO8vngp3iS27YuxDnp3orXAUg83ag9iVvevqyn', '2020-11-07 10:41:48', '2020-11-07 10:41:48'),
(12, 'karimehsan3@gmail.com', NULL, '$2y$10$Gwc/2LtvxGxrNqrTeuwdZuRcXFkYN4Aa9oJmrJV64ddeWxUpLLQMe', NULL, 2, 'MGV3KuLvrWY60lOGrLSlepGmHEPOWPaYe6LP2YzIh1Hl756mDK6MENEdyatp', '2020-12-24 08:02:32', '2020-12-24 08:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor_posts`
--
ALTER TABLE `advisor_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jazz_ids`
--
ALTER TABLE `jazz_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `register_admins`
--
ALTER TABLE `register_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_advisors`
--
ALTER TABLE `register_advisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_tenets`
--
ALTER TABLE `register_tenets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `advisor_posts`
--
ALTER TABLE `advisor_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jazz_ids`
--
ALTER TABLE `jazz_ids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register_admins`
--
ALTER TABLE `register_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_advisors`
--
ALTER TABLE `register_advisors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_tenets`
--
ALTER TABLE `register_tenets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
