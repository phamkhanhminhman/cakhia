-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2021 at 08:34 PM
-- Server version: 5.7.32-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakhiatk_project1`
--

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `thumbnail`, `link`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CaKhia', '', '', 'Cà Khịa 10 năm', '2020-10-30 17:00:00', '2020-10-30 17:00:00', NULL),
(2, 'DaLat', '', '', 'Đà Lạt 2020', '2020-10-30 17:00:00', NULL, NULL),
(3, 'Another', '', '', NULL, NULL, NULL, NULL);

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_10_31_054624_create_table_share_albums_table', 1),
(13, '2020_10_31_092654_create_table_groups', 1),
(14, '2020_10_31_092841_create_table_people', 1);

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
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `group`, `thumbnail`, `link`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mẫn', '1', 'upload/1.jpg', 'https://photos.app.goo.gl/xtP7kK7rpinFCjjH7', 'Phạm Khánh Minh Mẫn', '2020-10-30 17:00:00', '2020-12-11 21:30:41', NULL),
(2, 'Phương', '1', 'upload/IMG_3648.jpg', 'https://photos.app.goo.gl/KEbFP5u5E91YBXyX8', 'Nguyễn Quang Phương', '2020-10-30 17:00:00', '2020-11-02 06:33:44', NULL),
(3, 'Linh ', '1', 'upload/linh.jpg', 'https://photos.app.goo.gl/xXKepwgdi2RkPEGn8', 'Đặng Thị Mỹ Linh', NULL, NULL, NULL),
(4, 'Minh', '1', 'upload/IMG_3087.jpg', 'https://photos.app.goo.gl/SfzfTMMBi8qDUckF8', 'Trần Thị Thông Minh', '2020-10-30 17:00:00', '2020-11-20 14:53:46', NULL),
(5, 'Giang', '1', 'upload/giang.jpg', 'https://photos.app.goo.gl/VNsaNKVNM5RstYTh8', 'Trịnh Kiều Giang', '2020-10-30 17:00:00', '2020-11-02 05:23:53', NULL),
(6, 'Thọ', '1', 'upload/tho.jpg', 'https://photos.app.goo.gl/6HcZqAURpp1eBiaM8', 'Thái Lộc Thọ', '2020-10-30 17:00:00', NULL, NULL),
(7, 'Quốc', '2', 'upload/quoc.jpg', 'https://photos.app.goo.gl/P13WhCf2NrCH7gxn7', 'Trần Viết Anh Quốc', '2020-10-30 17:00:00', NULL, NULL),
(8, 'Phượng', '2', 'upload/IMG_0700.JPG', 'https://photos.app.goo.gl/CZBu8GG4w8Tvwj4PA', 'Huỳnh Thị Hồng Phượng', '2020-10-30 17:00:00', '2020-11-02 06:32:44', NULL),
(9, 'Qúy', '2', 'upload/quy.jpg', 'https://photos.app.goo.gl/zVKbCC7SXsZjHrjt7', 'Phạm Văn Qúy', '2020-10-30 17:00:00', NULL, NULL),
(11, 'Tín', '2', 'upload/IMG_0822-2.jpg', 'https://photos.app.goo.gl/aSVk85isLqkviQLCA', 'Nguyễn Thi Lệ Tín', '2020-11-02 05:38:21', '2020-11-02 05:38:21', NULL),
(12, 'Thảo', '2', 'upload/17062019.jpg', 'https://photos.app.goo.gl/o5hEBNNzLMZAbt9u5', 'Huỳnh Mai Phương Thảo', '2020-11-02 05:49:54', '2020-11-02 05:50:37', NULL),
(13, 'Vương', '2', 'upload/20190310_181425.jpg', 'https://photos.app.goo.gl/3bSaAUSo9u3wkMeH8', 'Hồ Xuân Vương', '2020-11-03 05:02:23', '2020-11-03 05:02:23', NULL),
(14, 'Phúc', '2', 'upload/IMG_0599.jpg', 'https://photos.app.goo.gl/XnZ1A1eAbfjPKeTXA', 'Trần Xuân Phúc', '2020-11-03 05:11:10', '2020-11-03 05:11:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `share_albums`
--

CREATE TABLE `share_albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`) VALUES
(123);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_albums`
--
ALTER TABLE `share_albums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `share_albums_album_id_unique` (`album_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `share_albums`
--
ALTER TABLE `share_albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
