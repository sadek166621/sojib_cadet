-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 07:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sojib_cadet`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `file` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `title`, `type`, `file`, `status`, `created_at`, `updated_at`) VALUES
(7, 'manobik', '1', '2023-12-26-658aad95c138c.pdf', '1', '2023-12-26 10:39:32', '2023-12-26 10:40:39'),
(8, 'bussiness', '2', '2023-12-26-658aadb5e6efa.pdf', '1', '2023-12-26 10:40:53', '2023-12-26 10:40:53'),
(9, 'biggan', '3', '2023-12-26-658aadc4a438c.pdf', '1', '2023-12-26 10:41:08', '2023-12-26 10:41:08'),
(10, '6th', '4', '2023-12-26-658aadcfde8c6.pdf', '1', '2023-12-26 10:41:19', '2023-12-26 10:41:19'),
(11, '7th', '5', '2023-12-26-658aadda653a0.pdf', '1', '2023-12-26 10:41:30', '2023-12-26 10:41:30'),
(12, '8th', '6', '2023-12-26-658aaee88802d.pdf', '1', '2023-12-26 10:46:00', '2023-12-26 10:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `devision` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `devision`, `section`, `details`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', 'মোহাম্মদপুর শাখা', '<span style=\"color: rgb(33, 26, 20); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">এক্স/১০, নুরজাহান রোড, প্রধান সড়ক, মোহাম্মদপুর, ঢাকা । মোবাঃ ০১৭০০০০০০০০</span><br>', 1, '2024-03-13 05:13:15', '2024-03-13 06:38:58'),
(3, '2', 'জিইসি শাখা', '<span style=\"color: rgb(33, 26, 20); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">বাসা- ১২৬০/১, জাকির হোসেন রোড বাইলেন (মামুন কমিশনার গলি), পূর্ব নাসিরাবাদ, চট্টগ্রাম । মোবাঃ ০১৭০০০০০০০০</span><br>', 1, '2024-03-13 05:13:27', '2024-03-13 06:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `classroutines`
--

CREATE TABLE `classroutines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `syllabus` text DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `vercity_routine` int(11) NOT NULL DEFAULT 0 COMMENT '1=> Active, 0=>Inactive	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classroutines`
--

INSERT INTO `classroutines` (`id`, `file`, `status`, `syllabus`, `title`, `vercity_routine`, `created_at`, `updated_at`) VALUES
(5, '2023-11-18-6558c3c4246ad.pdf', 1, NULL, 'graduated', 1, '2023-11-18 14:01:40', '2023-11-18 14:01:40'),
(7, '2023-11-21-655cae363b6a2.pdf', 1, NULL, 'B', 1, '2023-11-21 18:18:46', '2023-11-21 18:18:46'),
(10, '2023-12-27-658bcb2b7ddcf.pdf', 1, '2023-12-27-658bcb2b7e108.pdf', 'class 6', 0, '2023-12-27 06:58:51', '2023-12-27 06:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=>inactive, 1=>active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'History', 1, '2023-09-17 00:24:20', '2023-09-17 06:58:45'),
(3, 'English', 1, '2023-09-17 00:24:28', '2023-09-17 06:58:28'),
(4, 'Bangla', 1, '2023-09-17 00:24:37', '2023-09-17 06:58:13'),
(5, 'Political Science', 1, '2023-09-17 06:59:11', '2023-09-17 06:59:11'),
(6, 'Economics', 1, '2023-09-17 06:59:24', '2023-09-17 06:59:24'),
(7, 'Islamic History & Culture', 1, '2023-09-17 07:00:04', '2023-09-17 07:00:04'),
(8, 'Managment', 1, '2023-09-17 07:00:23', '2023-09-17 07:00:23'),
(9, 'Accounting', 1, '2023-09-17 07:00:37', '2023-09-17 07:00:37'),
(10, 'Zoology', 1, '2023-09-17 07:00:55', '2023-09-17 07:00:55'),
(11, 'Botany', 1, '2023-09-17 07:01:08', '2023-09-17 07:01:08'),
(12, 'Physics', 1, '2023-09-17 07:01:53', '2023-09-17 07:01:53'),
(13, 'Chemistry', 1, '2023-09-17 07:02:10', '2023-09-17 07:02:10'),
(14, 'Mathematics', 1, '2023-09-17 07:02:28', '2023-09-17 07:02:28'),
(15, 'Psychology', 1, '2023-09-17 07:02:50', '2023-09-17 07:02:50'),
(16, 'Social Work', 1, '2023-09-17 07:03:07', '2023-09-17 07:03:07'),
(17, 'Islamic Studies', 1, '2023-09-17 07:03:22', '2023-09-17 07:03:22'),
(18, 'Geography', 1, '2023-09-17 07:03:37', '2023-09-17 07:03:37'),
(19, 'ICT', 1, '2023-11-10 13:20:53', '2023-11-10 13:20:53'),
(20, 'Computer', 1, '2023-11-18 09:55:56', '2023-11-18 09:55:56'),
(22, 'Accounting', 1, '2023-12-24 10:43:39', '2023-12-24 10:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `examroutines`
--

CREATE TABLE `examroutines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` text DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `vercity_routine` tinyint(3) UNSIGNED DEFAULT 0 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examroutines`
--

INSERT INTO `examroutines` (`id`, `file`, `title`, `status`, `vercity_routine`, `created_at`, `updated_at`) VALUES
(7, '2023-12-26-658ab4e59a0a8.pdf', 'A', 1, 0, '2023-11-21 18:16:58', '2023-12-26 11:11:33'),
(9, '2023-12-26-658ab5625c7f0.pdf', 'B', 1, 0, '2023-12-26 11:13:38', '2023-12-26 11:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=> Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Ist Term Exam', 1, '2024-01-04 10:32:01', '2024-01-04 10:32:01'),
(4, 'Class Test', 1, '2024-03-06 10:20:22', '2024-03-06 10:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `formdownloads`
--

CREATE TABLE `formdownloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Basanto', 1, '2023-10-10 13:56:57', '2023-11-11 11:29:02'),
(2, 'Megna', 1, '2023-10-11 09:13:01', '2023-11-11 11:28:55'),
(3, 'Golap', 1, '2023-11-09 18:27:27', '2024-03-01 05:18:49'),
(4, 'Joi', 1, '2024-03-01 05:19:03', '2024-03-01 05:19:03'),
(5, 'A', 1, '2024-03-06 10:17:44', '2024-03-06 10:17:44'),
(6, 'B', 1, '2024-03-06 10:17:51', '2024-03-06 10:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'অফিস', 1, '2023-09-19 12:12:09', '2023-09-19 18:11:47'),
(3, 'একাডেমিক শাখা', 1, '2023-09-19 12:12:26', '2023-09-19 18:12:02'),
(4, 'অধ্যক্ষের কক্ষ', 1, '2023-09-19 12:12:34', '2023-09-19 18:12:15'),
(5, 'নাইট গার্ড', 1, '2023-09-19 18:12:28', '2023-09-19 18:12:28'),
(6, 'দারোয়ান', 1, '2023-09-19 18:12:39', '2023-09-19 18:12:39'),
(7, 'এফোরিজম', 1, '2023-11-18 11:54:29', '2023-11-18 11:54:29'),
(8, 'ABC', 1, '2023-11-21 17:47:27', '2023-11-21 17:47:27');

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
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_02_28_062005_create_categories_table', 1),
(5, '2022_03_20_071620_create_tags_table', 1),
(6, '2022_03_21_075004_product_tag_table', 1),
(7, '2022_04_28_073218_create_user_infos_table', 1),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(13, '2022_07_26_140644_create_saloon_services_table', 4),
(14, '2022_07_31_202916_create_bookings_table', 5),
(15, '2022_07_25_162459_create_saloons_table', 6),
(16, '2023_09_14_062650_create_sliders_table', 7),
(17, '2023_09_17_041841_create_teachers_table', 8),
(18, '2023_10_01_151130_create_students_table', 8),
(19, '2023_10_10_164355_create_photos_table', 9),
(20, '2023_10_10_194418_create_groups_table', 10),
(21, '2023_10_11_162450_create_classroutines_table', 11),
(22, '2023_10_11_162541_create_examroutines_table', 11),
(23, '2023_11_08_165939_create_results_table', 12),
(24, '2023_11_25_170453_create_academics_table', 13),
(25, '2023_12_30_145448_create_admissions_table', 14),
(26, '2023_12_30_155950_create_formdownloads_table', 15),
(27, '2024_01_04_161425_create_exams_table', 16),
(28, '2024_03_12_115924_create_pages_table', 17),
(29, '2024_03_12_125133_create_videos_table', 18),
(30, '2024_03_12_141851_create_resultpdfs_table', 19),
(31, '2024_03_13_102048_create_branches_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `file` text DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=>general, 2=>others',
  `status` tinyint(4) NOT NULL COMMENT '0=>inactive, 1=>active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `description`, `file`, `type`, `status`, `created_at`, `updated_at`) VALUES
(18, 'উপবৃত্তির আবেদন কারীদের স্বাক্ষাতকার সময়সূচী।উপবৃত্তির আবেদন কারীদের স্বাক্ষাতকার সময়সূচী।', NULL, NULL, '2023-11-21-655ca84347181.pdf', 1, 1, '2023-11-21 17:53:23', '2023-12-24 10:33:04'),
(19, '০২-০৩-২৪ ইং তারিখে সাপ্তাহিক পরিক্ষা অনুষ্ঠিত হবে।', NULL, NULL, NULL, 1, 1, '2024-03-01 05:17:43', '2024-03-01 05:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `file` text DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=>general, 2=>others',
  `status` tinyint(4) NOT NULL COMMENT '0=>inactive, 1=>active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `slug`, `description`, `file`, `type`, `status`, `created_at`, `updated_at`) VALUES
(12, 'উপবৃত্তির আবেদন কারীদের স্বাক্ষাতকার সময়সূচী।', NULL, NULL, '2023-12-27-658c3e6fd8380.pdf', 1, 1, '2023-11-21 17:52:01', '2023-12-27 15:10:39'),
(13, 'উপবৃত্তির আবেদন কারীদের স্বাক্ষাতকার সময়সূচী।', NULL, NULL, '2023-12-27-658c3e59b3fcc.pdf', 2, 1, '2023-11-21 17:52:13', '2023-12-27 15:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` text NOT NULL,
  `success` text NOT NULL,
  `residential` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `section`, `success`, `residential`, `created_at`, `updated_at`) VALUES
(1, 'fsgffsdaf', 'gdsfgfsadfasd', 'gdsfgfsadfds', '2024-03-12 06:14:11', '2024-03-12 06:19:48');

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '	1=> Active, 0=>Inactive	',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, '2024-02-25-65db2cf98c891.jpg', 1, '2023-11-25 10:18:16', '2024-02-25 17:05:13'),
(8, '2024-02-25-65db2ce3909ce.jpg', 1, '2023-11-25 10:19:23', '2024-02-25 17:04:51'),
(9, '2024-02-25-65db2cd469f41.jpg', 1, '2023-11-25 10:19:38', '2024-02-25 17:04:36'),
(10, '2024-02-25-65db2cb060bbe.jpg', 1, '2023-11-25 10:19:49', '2024-02-25 17:04:00'),
(11, '2024-02-25-65db2c9fa490c.jpg', 1, '2023-12-27 15:13:07', '2024-02-25 17:03:43'),
(12, '2024-02-25-65db2d0d4bde9.jpg', 1, '2024-02-25 17:05:33', '2024-02-25 17:05:33'),
(13, '2024-02-25-65db2d1b1234c.jpg', 1, '2024-02-25 17:05:47', '2024-02-25 17:05:47'),
(14, '2024-02-25-65db2d27b30d3.jpg', 1, '2024-02-25 17:05:59', '2024-02-25 17:05:59'),
(15, '2024-02-25-65db2d36b08cf.jpg', 1, '2024-02-25 17:06:14', '2024-02-25 17:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `resultpdfs`
--

CREATE TABLE `resultpdfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `exam_name` varchar(100) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resultpdfs`
--

INSERT INTO `resultpdfs` (`id`, `title`, `class`, `exam_name`, `date`, `file`, `status`, `created_at`, `updated_at`) VALUES
(2, 'A', 'Class 6', 'Ist Term', '2024-03-12', '2024-03-12-65f01a9497877.pdf', 1, '2024-03-12 09:04:20', '2024-03-12 09:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) DEFAULT 0,
  `session` int(11) DEFAULT 0,
  `section` int(11) DEFAULT 0,
  `class` int(11) DEFAULT NULL,
  `roll` int(11) DEFAULT 0,
  `reg` int(11) DEFAULT 0,
  `exam` int(11) DEFAULT 0,
  `gpa` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `result_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `session`, `section`, `class`, `roll`, `reg`, `exam`, `gpa`, `grade`, `comment`, `status`, `result_status`, `created_at`, `updated_at`) VALUES
(55, 25, 0, 3, 1, 1, 0, 3, '5.00', 'A+', 'Ok', 1, 1, '2024-01-04 12:18:56', '2024-01-04 12:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `site_title` varchar(100) DEFAULT NULL,
  `site_tagline` varchar(200) DEFAULT NULL,
  `site_address` text DEFAULT NULL,
  `site_contact_no` varchar(255) DEFAULT NULL,
  `site_email` varchar(200) DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `site_icon` text DEFAULT NULL,
  `site_meta_title` varchar(200) DEFAULT NULL,
  `site_meta_description` text DEFAULT NULL,
  `site_meta_image` text DEFAULT NULL,
  `google_map_link` text DEFAULT NULL,
  `youtube_video_left_link` text NOT NULL,
  `youtube_video_right_link` text NOT NULL,
  `vice_principal_name` varchar(150) DEFAULT NULL,
  `message_from_1` varchar(100) DEFAULT NULL,
  `vice_principal_image` text DEFAULT NULL,
  `vice_principal_message` longtext DEFAULT NULL,
  `vice_principal_bio` text DEFAULT NULL,
  `principal_name` varchar(150) DEFAULT NULL,
  `message_from_2` varchar(100) DEFAULT NULL,
  `principal_image` text DEFAULT NULL,
  `principal_message` longtext DEFAULT NULL,
  `principal_bio` text DEFAULT NULL,
  `important_link_text_1` varchar(50) DEFAULT NULL,
  `important_link_1` varchar(255) DEFAULT NULL,
  `important_link_text_2` varchar(50) DEFAULT NULL,
  `important_link_2` varchar(255) DEFAULT NULL,
  `important_link_text_3` varchar(50) DEFAULT NULL,
  `important_link_3` varchar(255) DEFAULT NULL,
  `important_link_text_4` varchar(50) DEFAULT NULL,
  `important_link_4` varchar(255) DEFAULT NULL,
  `important_link_text_5` varchar(50) DEFAULT NULL,
  `important_link_5` varchar(255) DEFAULT NULL,
  `important_link_text_6` varchar(50) DEFAULT NULL,
  `important_link_6` varchar(255) DEFAULT NULL,
  `important_link_text_7` varchar(50) DEFAULT NULL,
  `important_link_7` varchar(255) DEFAULT NULL,
  `important_link_text_8` varchar(50) DEFAULT NULL,
  `important_link_8` varchar(255) DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `campus_image` text DEFAULT NULL,
  `campus_history` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `site_tagline`, `site_address`, `site_contact_no`, `site_email`, `site_logo`, `site_icon`, `site_meta_title`, `site_meta_description`, `site_meta_image`, `google_map_link`, `youtube_video_left_link`, `youtube_video_right_link`, `vice_principal_name`, `message_from_1`, `vice_principal_image`, `vice_principal_message`, `vice_principal_bio`, `principal_name`, `message_from_2`, `principal_image`, `principal_message`, `principal_bio`, `important_link_text_1`, `important_link_1`, `important_link_text_2`, `important_link_2`, `important_link_text_3`, `important_link_3`, `important_link_text_4`, `important_link_4`, `important_link_text_5`, `important_link_5`, `important_link_text_6`, `important_link_6`, `important_link_text_7`, `important_link_7`, `important_link_text_8`, `important_link_8`, `contact`, `campus_image`, `campus_history`, `updated_at`) VALUES
(1, 'Sojib Cadet School', 'Sojib Cadet School', 'Sojib Cadet School', '<p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">E-mail</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: sojibcadetschool@gmail.com</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Web</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><font color=\"#000000\" face=\"Arial, sans-serif\"><span style=\"white-space-collapse: preserve;\"><b>Sojib Cadet School</b></span></font></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Facebook Page</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">:</span><a href=\"http://www.facebook.com/dtmqa\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"></span></a><a href=\"http://www.facebook.com/dtmqa\">&nbsp;</a><a href=\"http://www.facebook.com/sojibcadetschool\">www.facebook.com/sojibcadetschool</a><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; text-decoration-line: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space-collapse: preserve;\"></span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Instagram Page</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: Sojib Cadet School</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">LinkedIn Page</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><span style=\"color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-weight: 700; white-space-collapse: preserve; font-size: 1rem;\">Sojib Cadet School</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Twitter Page </span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><span style=\"color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-weight: 700; white-space-collapse: preserve; font-size: 1rem;\">Sojib Cadet School</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">YouTube Channel Link</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><a href=\"https://www.youtube.com/@sojibcadetschool\">https://www.youtube.com/@sojibcadetschool</a></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Telegram Channels Link</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Director</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Contact</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\">Address<span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\">: </span></span></p>', 'www.facebook.com/sojibcadetschool', 'sojibcadetschool@gmail.com', '2024-02-25-65db2b7bd6404.png', '2024-02-25-65db24b99628d.png', NULL, NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1246782495964!2d90.34640497471199!3d23.742932978675555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bffeecd2453b%3A0xf1d56e3bf3c9941b!2sSky%20Dream%20IT!5e0!3m2!1sen!2sbd!4v1709046181537!5m2!1sen!2sbd', 'https://www.youtube.com/embed/EVwBCv73s8o?si=MUJ397yr25ZJc5ls', 'https://www.youtube.com/embed/EVwBCv73s8o?si=MUJ397yr25ZJc5ls', 'Name Here', 'Head Master', '2023-12-24-65880555bf23b.png', '<font color=\"#212121\" face=\"Helvetica, Arial, sans-serif\"><span style=\"font-size: 13px; white-space-collapse: preserve;\">Description</span></font>', '<blockquote style=\"overflow-wrap: break-word; line-height: 1.1em; clear: both;\" class=\"blockquote\"><p>Details here</p></blockquote>', 'Name Hear', 'Assistant Head Master', '2023-12-24-65880555bf40d.png', '<font color=\"#212121\" face=\"Helvetica, Arial, sans-serif\"><span style=\"font-size: 13px; white-space-collapse: preserve;\">Description here</span></font>', '<blockquote class=\"blockquote\" style=\"overflow-wrap: break-word; line-height: 1.1em; clear: both;\"><p>Bio Here</p></blockquote><p><br></p>', 'Rajshahi Education Board', 'http://rajshahieducationboard.gov.bd/', 'Directorate of Education', 'https://dshe.gov.bd/', 'National University', 'https://www.nu.ac.bd/', 'Rajshahi University', 'https://www.ru.ac.bd/', 'National Web Portal', 'https://bangladesh.gov.bd/index.php', 'Rajshahi Division Portal', 'http://www.rajshahidiv.gov.bd/', 'Rajshahi City Corporation', 'http://www.erajshahi.gov.bd/', 'Monthly Exam Questain', 'https://forms.gle/MPN7fyAQmYZngwzt6', '<p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">E-mail</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: sojibcadetschool@gmail.com</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Web</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><font color=\"#000000\" face=\"Arial, sans-serif\"><span style=\"white-space-collapse: preserve;\"><span style=\"font-weight: bolder;\">Sojib Cadet School</span></span></font></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Facebook Page</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">:</span><a href=\"http://www.facebook.com/dtmqa\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"></span></a><a href=\"http://www.facebook.com/dtmqa\">&nbsp;</a><a href=\"http://www.facebook.com/sojibcadetschool\">www.facebook.com/sojibcadetschool</a><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; text-decoration-line: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space-collapse: preserve;\"></span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Instagram Page</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: Sojib Cadet School</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">LinkedIn Page</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><span style=\"color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-weight: 700; white-space-collapse: preserve; font-size: 1rem;\">Sojib Cadet School</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Twitter Page </span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><span style=\"color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-weight: 700; white-space-collapse: preserve; font-size: 1rem;\">Sojib Cadet School</span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">YouTube Channel Link</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span><a href=\"https://www.youtube.com/@sojibcadetschool\">https://www.youtube.com/@sojibcadetschool</a></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Telegram Channels Link</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Director</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Contact</span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">: </span></p><p dir=\"ltr\" style=\"margin-top: 0pt; margin-bottom: 0pt; line-height: 1.38; margin-left: 30pt;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\"><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\">Address<span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\"><span class=\"Apple-tab-span\" style=\"text-wrap: nowrap;\">	</span></span><span style=\"font-size: 12pt; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; background-color: transparent; vertical-align: baseline;\">: </span></span></p>', '2023-12-24-65880555be3ee.jpg', 'Campus History', '2024-02-29 17:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=>inactive, 1=>active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `button_link`, `button_text`, `image`, `status`, `created_at`, `updated_at`) VALUES
(13, NULL, NULL, NULL, NULL, '2024-02-25-65db2e511012c.jpg', 1, '2023-12-24 21:59:05', '2024-02-25 17:10:57'),
(14, NULL, NULL, NULL, NULL, '2024-02-25-65db2e387ee36.jpg', 1, '2023-12-24 22:00:06', '2024-02-25 17:10:32'),
(15, NULL, NULL, NULL, NULL, '2024-02-25-65db2e0c9901d.jpg', 1, '2023-12-25 19:15:35', '2024-02-25 17:09:48'),
(16, NULL, NULL, NULL, NULL, '2024-02-25-65db2dc1ee128.jpg', 1, '2023-12-25 19:15:58', '2024-02-25 17:08:33'),
(17, NULL, NULL, NULL, NULL, '2024-02-25-65db2db2cac4d.jpg', 1, '2023-12-25 19:16:21', '2024-02-25 17:08:18'),
(18, NULL, NULL, NULL, NULL, '2024-02-25-65db2da2c73b5.jpg', 1, '2023-12-25 19:16:42', '2024-02-25 17:08:02'),
(19, NULL, NULL, NULL, NULL, '2024-02-25-65db2e7c9a421.jpg', 1, '2024-02-25 17:11:40', '2024-02-25 17:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `designation` varchar(150) DEFAULT NULL,
  `join_date` varchar(50) DEFAULT NULL,
  `location_id` int(11) NOT NULL DEFAULT 0,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `class` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1,2,3,4',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `username`, `email`, `phone`, `designation`, `join_date`, `location_id`, `address`, `image`, `status`, `class`, `created_at`, `updated_at`) VALUES
(10, 'Abu Sadek Chowdhury (Sunny)', 'abu-sadek-chowdhury-sunnyTbqE4b', 'admin@gmail.com', '01799382934', 'Intractor', '2023-11-25', 2, 'dhaka', '2023-11-25-6560fe36a4f05.jpg', 1, 1, '2023-11-24 19:49:10', '2023-11-24 19:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `guardian_number` varchar(100) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `post_office` varchar(100) DEFAULT NULL,
  `upazila` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `roll_num` varchar(255) NOT NULL,
  `reg_num` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `session` int(11) DEFAULT 0,
  `devision` int(11) DEFAULT NULL,
  `gpa` varchar(100) DEFAULT NULL,
  `fwshgs` varchar(100) DEFAULT NULL,
  `admission_year` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `village`, `guardian_number`, `post`, `post_office`, `upazila`, `district`, `roll_num`, `reg_num`, `phone`, `class`, `group_id`, `session`, `devision`, `gpa`, `fwshgs`, `admission_year`, `image`, `address`, `status`, `created_at`, `updated_at`) VALUES
(25, 'A', NULL, 'B', 'C', 'A', '01478523698', 1204, '1204', 'A', 'A', '1', NULL, '01478523698', 1, 3, NULL, NULL, NULL, NULL, NULL, '2023-12-30-6590190881f68.png', 'A', 1, '2023-12-30 13:18:51', '2023-12-30 13:20:08'),
(27, 'Rofic', NULL, 'korim', 'rahana', 'pakulla', '01707089407', NULL, '1944', 'Mirzapur', 'Tangail', '02', NULL, '01707089407', 1, 2, 5, NULL, NULL, NULL, NULL, '2024-02-29-65e0aea2236c9.jpg', NULL, 1, '2024-02-29 21:19:09', '2024-02-29 21:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(150) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `join_date` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `image` text NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `full_address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `username`, `department_id`, `designation`, `join_date`, `phone`, `email`, `image`, `status`, `full_address`, `created_at`, `updated_at`) VALUES
(28, 'SAIMA SULTANA', 'saima-sultana4oAowV', 22, 'ASSISTANT TEACHER', '2023-10-01', '01823983044', 'saimasultana9830@gmail.com', '2023-12-24-65882d35676f2.jpg', 1, 'SULTAN SARKAR BARI,NAZIRHAT, FATICKCHARI, CHATTOGRAM.', '2023-12-24 18:08:05', '2023-12-24 18:08:05'),
(29, 'MD.IQBAL HOSSAIN', 'mdiqbal-hossainfmdtXe', 14, 'ASSISTANT TEACHER', '2023-10-01', '01813220899', 'ihossain269@gmail.com', '2023-12-24-658832d5902a1.jpg', 1, 'সুলতান মাস্টারের বাড়ি,রাউজান,হাটহাজারী, চট্টগ্রাম।', '2023-12-24 18:32:05', '2023-12-24 18:32:05'),
(30, 'MOHAMMAD HASAN SHARIF', 'mohammad-hasan-sharifKT8Toc', 17, 'ASSISTANT TEACHER', '2018-08-24', '01816034651', 'mdhasansharif@gmail.com', '2023-12-24-6588380746626.jpg', 1, 'করম আলী সওদাগরের বাড়ি,ধুরুং,ফটিকছড়ি, চট্টগ্রাম।', '2023-12-24 18:54:15', '2023-12-24 18:54:15'),
(31, 'MUHAMMAD OSMAN GANI', 'muhammad-osman-ganil9LAUq', 14, 'ASSISTANT TEACHER', '2019-03-23', '01818126724', 'Osman.stmlondon@icloud.com', '2023-12-24-658839814b967.jpg', 1, 'KARI ISMAILER BARI,BABU NAGAR,NAZIRHAT-4353,FATICKCHARI, CHATTOGRAM.', '2023-12-24 19:00:33', '2023-12-24 19:00:33'),
(32, 'MD.ARKAN GONI', 'mdarkan-goniZJRder', 17, 'ASSISTANT TEACHER', '2020-01-02', '01814704795', 'mdarkangoni1@gmail.com', '2023-12-24-658847b66ba78.jpg', 1, 'NAZU MIA HAZIR BARI,KHATIRHAT,HATHAZARI, CHATTOGRAM.', '2023-12-24 20:01:10', '2023-12-24 20:01:10'),
(33, 'MD.ARMAN UDDIN', 'mdarman-uddinGwnHLd', 3, 'ASSISTANT TEACHER', '2018-08-01', '018113930183', 'armanahmed241@gmail.com', '2023-12-24-65884963aba2a.jpg', 1, 'HAFEJUR RAHMAN CHOWDHURY BARI,NAZIRHAT, FATICKCHARI, CHATTOGRAM.', '2023-12-24 20:08:19', '2023-12-24 20:08:19'),
(34, 'MD.ANISUR RAHMAN', 'mdanisur-rahmanVdYyw4', 11, 'ASSISTANT TEACHER', '2019-02-23', '01737712284', 'anisurrahman.nat@gmail.com', '2023-12-24-65884b2ba9d02.jpg', 1, 'NAOW DARA,WALIA,LALPUR,NATORE.', '2023-12-24 20:15:55', '2023-12-24 20:15:55'),
(35, 'LITON SUTRADHAR', 'liton-sutradharJ9DpvZ', 5, 'ASSISTANT TEACHER', '2008-04-02', '01815500779', 'sdli37521@gmail.com', '2023-12-24-65884e05c747c.jpg', 1, 'SUTRADHAR PARA,FATICKCHARI, CHATTOGRAM.', '2023-12-24 20:28:05', '2023-12-24 20:28:05'),
(36, 'MOHAMMAD SHAFIUL AZAM', 'mohammad-shafiul-azam6lvOFC', 13, 'ASSISTANT TEACHER', '2015-05-05', '01812731927', 'mdshafiulazam858@gmail.com', '2023-12-24-6588506a8703f.jpg', 1, 'ALAM BARI,ROSANGIRI,FATICKCHARI, CHATTOGRAM.', '2023-12-24 20:38:18', '2023-12-24 20:38:18'),
(37, 'SYEDA AYESHA AKTHER', 'syeda-ayesha-aktherdpvBX3', 3, 'ASSISTANT TEACHER', '2014-03-04', '01911061880', 'ayeshaakther880@gmail.com', '2023-12-24-65885295cb19c.jpg', 1, 'BAKTAPUR,SYED BARI,FATICKCHARI, CHATTOGRAM.', '2023-12-24 20:47:33', '2023-12-24 20:47:33'),
(38, 'MD.ANWARUL AZIM', 'mdanwarul-azimUynZ9G', 7, 'ASSISTANT TEACHER', '2014-03-04', '01914140515', 'anwarmohin88@gmail.com', '2023-12-24-658853ee622f2.jpg', 1, 'HAZARAT GOLAP SHAH(R.) BARI,KATIRHAT,HATHAZARI, CHATTOGRAM.', '2023-12-24 20:53:18', '2023-12-24 20:53:18'),
(39, 'MUHAMMAD IQBAL SADEQ', 'muhammad-iqbal-sadeqxk2HnB', 22, 'ASSISTANT TEACHER', '2010-06-12', '01815840541', 'iqbal010sadeq@gmail.com', '2023-12-24-658855331acaa.jpg', 1, 'JANALI GOMOSTER BARI,FATICKCHARI, CHATTOGRAM.', '2023-12-24 20:58:43', '2023-12-24 20:58:43'),
(40, 'MD.NACHER UDDIN', 'mdnacher-uddin2vYHUc', 13, 'ASSISTANT HEADMASTER', '2023-10-01', '01715854559', 'uddinnacher08@gmail.com', '2023-12-24-6588564d33182.jpg', 1, 'DIGVAIR,BHUIYAN BARI,RAGOI-3620,SHAHRASTI,CHANDPUR.', '2023-12-24 21:03:25', '2023-12-24 21:03:25'),
(41, 'MOHAMMAD ABDUL QUADER', 'mohammad-abdul-quadervQBVnP', 4, 'HEADMASTER', '2011-11-10', '01816705893', 'ssmhs.104356@gmail.com', '2023-12-24-6588583fb7681.jpg', 1, 'MANSUR ALI MUHURI BARI,RAICHOTA,BASHKHALI, CHATTOGRAM.', '2023-12-24 21:08:07', '2023-12-24 21:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_type` varchar(50) NOT NULL DEFAULT 'user' COMMENT 'user, admin',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL COMMENT 'where from registered',
  `country` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> active, 0=>Inactive',
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_type`, `email_verified_at`, `phone`, `country`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `token`, `remember_token`, `status`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'Tushar', 'tushar@gmail.com', 'user', '0000-00-00 00:00:00', NULL, NULL, '$2y$10$Tl0YR0ylcpV0.qh3pUVWkO7J3CjhRo7xpNhcTcoA9iu2POOJXbLYS', NULL, NULL, NULL, NULL, NULL, 1, '0.00', NULL, NULL),
(2, 'abc', 'abc@gmail.com', 'customer', NULL, '23.7507983', '90.4219536', '$2y$10$KkogwPDDzdyEQydxXvyB.evh2z2YkpqlAIss1mc9kIdjWOTa9qGeq', NULL, NULL, NULL, NULL, NULL, 1, '0.00', '2022-07-26 06:11:56', '2022-09-15 13:53:42'),
(3, 'Test User', 'test@gmail.com', 'customer', '0000-00-00 00:00:00', '23.743136', '90.4170579', '$2y$10$9fhD3GlteuKX7n6J2P2/buy5kPQe6WTcINFMLHAfmkAoa4UZxc.yO', NULL, NULL, NULL, NULL, NULL, 1, '0.00', '2022-07-26 06:31:07', '2022-08-02 12:59:40'),
(7, 'Admin', 'admin@gmail.com', 'admin', NULL, NULL, NULL, '$2y$10$9fhD3GlteuKX7n6J2P2/buy5kPQe6WTcINFMLHAfmkAoa4UZxc.yO', NULL, NULL, NULL, NULL, NULL, 1, '0.00', '2022-08-05 18:28:18', '2022-08-05 18:28:22'),
(12, 'My Saloon', 'msaloon@gmail.com', 'saloon', NULL, '23.78588', '95.5458856', '$2y$10$Qq3//P50SjRgkLW7PvwGiuBn.90idGpNIuF.bUDuPspO0oecIzAIq', NULL, NULL, NULL, NULL, NULL, 1, '0.00', '2022-08-05 13:38:08', '2022-08-05 13:38:08'),
(13, 'Deshi Saloon', 'dsaloon@gmail.com', 'saloon', NULL, '25.8578587', '90.5282548', '$2y$10$2ekUTuECmzMZ2h3vyR6Hl.GtDxGBM8k3NlusnE5fugQw71mBAUlA2', NULL, NULL, NULL, NULL, NULL, 1, '0.00', '2022-08-05 13:52:36', '2022-08-05 13:52:36'),
(14, 'Md. Rasheduzzaman Rajon', 'abc@def.com', 'customer', NULL, '23.7507983', '90.4219536', '$2y$10$3ghdLAR30p0XgGTAoypN8eHY7BsygHorxs1ZIqIJ2JsOD1.8YyUje', NULL, NULL, NULL, NULL, NULL, 1, '0.00', '2022-10-02 09:33:27', '2022-10-02 09:33:27'),
(16, 'New User', 'new@gmail.com', 'user', NULL, NULL, NULL, '$2y$10$03b/vC46J5cB12X32laVfO.XH4thV2K/nUIVH114G./d7iFbF24jS', NULL, NULL, NULL, NULL, NULL, 1, '0.00', '2023-09-09 13:09:08', '2023-09-09 13:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `apt` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `board_id` varchar(100) DEFAULT NULL,
  `additional_information` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` text NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `status`, `created_at`, `updated_at`) VALUES
(5, 'https://www.youtube.com/embed/HndV87XpkWg?si=T--nWR131NdE4Fln', 1, '2024-03-12 07:49:44', '2024-03-12 07:49:44'),
(6, 'https://www.youtube.com/embed/okpg-lVWLbE?si=gJvCyRYlaF5Pz5PN', 1, '2024-03-12 08:02:51', '2024-03-12 08:02:51'),
(7, 'https://www.youtube.com/embed/4aN5TbGW5JA?si=Ptss3pqZycd5G-Dq', 1, '2024-03-12 08:03:33', '2024-03-12 08:03:33'),
(8, 'https://www.youtube.com/embed/9QiE-M1LrZk?si=42FSJINMsoGR6WPE', 1, '2024-03-12 08:04:00', '2024-03-12 08:07:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classroutines`
--
ALTER TABLE `classroutines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examroutines`
--
ALTER TABLE `examroutines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formdownloads`
--
ALTER TABLE `formdownloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultpdfs`
--
ALTER TABLE `resultpdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `class` (`session`),
  ADD KEY `section` (`section`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `longitude` (`country`),
  ADD KEY `latitude` (`phone`),
  ADD KEY `role_type` (`role_type`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classroutines`
--
ALTER TABLE `classroutines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `examroutines`
--
ALTER TABLE `examroutines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `formdownloads`
--
ALTER TABLE `formdownloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resultpdfs`
--
ALTER TABLE `resultpdfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
