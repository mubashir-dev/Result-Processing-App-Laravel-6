-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2021 at 09:11 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_processing_app_laravel_6`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `title`, `section`, `description`, `created_at`, `updated_at`) VALUES
(1, '10', 'Green', '1oth Green previously known for its discipline and modesty .', NULL, '2021-02-01 12:44:24'),
(2, '9', 'Green', '', NULL, NULL),
(3, '10', 'Yellow', '', NULL, NULL),
(4, '10', 'Red', '', NULL, NULL),
(5, '10', 'Pink', 'Pink is considered as model section in entire school.', '2021-02-01 11:48:49', '2021-02-01 11:48:49'),
(6, '10', 'Blue', 'Best hard working and self motivated student can be found in this class', '2021-02-01 12:09:59', '2021-02-01 12:09:59');

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
(4, '2021_01_29_181154_create_classes_table', 1),
(5, '2021_01_30_175211_create_student_table', 1),
(6, '2021_01_30_181025_create_subjects_table', 1),
(7, '2021_01_30_181229_create_score_table', 1);

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
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `obtain` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `subject_id`, `student_id`, `total`, `obtain`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 100, 77, '2021-02-08 03:54:37', '2021-02-08 03:54:37'),
(2, 4, 2, 100, 77, '2021-02-08 03:54:37', '2021-02-08 03:54:37'),
(3, 5, 2, 100, 77, '2021-02-08 03:54:37', '2021-02-08 03:54:37'),
(4, 6, 2, 100, 77, '2021-02-08 03:54:38', '2021-02-08 03:54:38'),
(5, 7, 2, 100, 77, '2021-02-08 03:54:38', '2021-02-08 03:54:38'),
(6, 8, 2, 100, 77, '2021-02-08 03:54:38', '2021-02-08 03:54:38'),
(7, 9, 2, 100, 77, '2021-02-08 03:54:38', '2021-02-08 03:54:38'),
(8, 10, 2, 100, 77, '2021-02-08 03:54:38', '2021-02-08 03:54:38'),
(9, 2, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(10, 4, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(11, 5, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(12, 6, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(13, 7, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(14, 8, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(15, 9, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(16, 10, 3, 100, 55, '2021-02-08 04:52:39', '2021-02-08 04:52:39'),
(17, 2, 4, 100, 6, '2021-02-08 05:47:03', '2021-02-08 05:47:03'),
(18, 4, 4, 100, 66, '2021-02-08 05:47:03', '2021-02-08 05:47:03'),
(19, 5, 4, 100, 66, '2021-02-08 05:47:03', '2021-02-08 05:47:03'),
(20, 6, 4, 100, 44, '2021-02-08 05:47:03', '2021-02-08 05:47:03'),
(21, 7, 4, 100, 33, '2021-02-08 05:47:03', '2021-02-08 05:47:03'),
(22, 8, 4, 100, 33, '2021-02-08 05:47:04', '2021-02-08 05:47:04'),
(23, 9, 4, 100, 33, '2021-02-08 05:47:04', '2021-02-08 05:47:04'),
(24, 10, 4, 100, 33, '2021-02-08 05:47:04', '2021-02-08 05:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll_no`, `class_id`, `contact`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Haseeb Malik Awan', '12', 1, '111111111111', 'Khalabat Township Haripur', NULL, '2021-02-07 13:19:02'),
(3, 'Haris Malik', '13', 1, '03114590111', 'Abbottabad', NULL, '2021-02-01 11:01:24'),
(4, 'Hameed Ahmed Khan', '13', 1, '033333333333', 'Abbottabad', NULL, NULL),
(5, 'Saqib Javed Malik', '15', 1, '03333456789', 'Address- 2860 Island Avenue', '2021-02-01 05:40:38', '2021-02-01 07:21:11'),
(6, 'Mubashir Ali', '16', 1, '034345678990', 'Orish Colony,Nawasher Abbottabad', '2021-02-01 05:43:07', '2021-02-01 05:43:07'),
(7, 'Azmat Ali kadoon', '17', 1, '03333456789', 'Abbottabad', '2021-02-01 05:53:17', '2021-02-01 05:53:17'),
(8, 'Ali Gul Peer', '20', 1, '03332345234', 'Abbottabad', '2021-02-01 06:27:56', '2021-02-01 06:27:56'),
(9, 'Munnah Bahia', '21', 1, '03003090900', 'Abbottabad', '2021-02-01 06:37:19', '2021-02-01 06:37:19'),
(10, 'Mubashir Ali', '23', 2, '03333456789', 'Orish Colony,Nawasher Abbottabad', '2021-02-01 06:39:57', '2021-02-01 06:39:57'),
(11, 'Haris bin Khalid', '34', 1, '034345678990', 'Abbottabad', '2021-02-01 06:41:29', '2021-02-01 06:41:29'),
(12, 'Khurram Khan', '44', 1, '034345678990', 'Commercial Town Abbottabad', '2021-02-01 12:45:09', '2021-02-01 12:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_marks` int(11) NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `description`, `total_marks`, `created_at`, `updated_at`) VALUES
(2, 'Physics', 'Matric Subject', 100, '2021-02-01 13:09:18', '2021-02-01 13:32:16'),
(4, 'English', 'Taught in all classes from 6th to 10th', 100, '2021-02-01 13:33:20', '2021-02-01 13:33:45'),
(5, 'Urdu', 'All School Subject', 100, NULL, NULL),
(6, 'Pak Study', 'All School Subject', 100, NULL, NULL),
(7, 'Mathematics', 'All School Subject', 100, NULL, NULL),
(8, 'Biology', 'Matric Subject', 100, NULL, NULL),
(9, 'Islmaic Studies', 'All School Subject', 100, NULL, NULL),
(10, 'Computer Education', 'All School Subject', 100, '2021-02-07 14:27:25', '2021-02-07 14:27:25');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mubashir Ali', 'diyov71517@ermailo.com', NULL, '$2y$10$Y5JoIGMrmj01sgZmGeVjXuBJ.j2Mo1GtWsJOzwLup1C/j.4h5FpX2', NULL, '2021-02-08 07:36:55', '2021-02-08 07:36:55'),
(2, 'Ahmed Malik', 'ahmed@23gmail.com', NULL, '$2y$10$Bjd.K/z9W6kAsxnE7U/enO1Top/OmmyMrwopp0LVWExTGTDTu8522', NULL, '2021-02-08 14:08:13', '2021-02-08 14:08:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `score_subject_id_foreign` (`subject_id`),
  ADD KEY `score_student_id_foreign` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_class_id_foreign` (`class_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `score_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `score_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
