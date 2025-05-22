-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 11:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_jogi_films`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_tags` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `slug`, `meta_title`, `meta_description`, `meta_tags`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Pics', 'wedding-pics', 'Wedding Pics', 'Wedding Pics', 'Wedding Pics', 1, NULL, NULL),
(2, 'Wedding Films', 'wedding-films', 'Wedding Films', 'Wedding Films', 'Wedding Films', 1, '2025-03-19 11:51:38', '2025-03-19 11:51:38'),
(3, 'Pre Wedding', 'pre-wedding', 'Pre Wedding', 'Pre Wedding', 'Pre Wedding', 1, '2025-03-19 11:52:25', '2025-03-19 11:52:25'),
(4, 'Brides', 'brides', 'Brides', 'Brides', 'Brides', 1, '2025-03-19 11:53:02', '2025-03-19 11:53:02'),
(5, 'Kids', 'kids', 'Kids', 'Kids', 'Kids', 1, '2025-03-19 11:53:29', '2025-03-19 11:53:29'),
(6, 'Products', 'products', 'Products', 'Products', 'Products', 1, '2025-03-19 11:53:49', '2025-03-19 11:53:49');

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
-- Table structure for table `global`
--

CREATE TABLE `global` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global`
--

INSERT INTO `global` (`id`, `logo`, `insta`, `facebook`, `youtube`, `phone`, `office`, `email`, `address`, `created_at`, `updated_at`) VALUES
(18, 'upload/_logo_/1742632458_logo_the_jogi_films2.png', 'https://www.instagram.com/the_jogi_films/?igsh=MXU2ZjFiNmUyenY0dQ%3D%3D#', 'https://www.instagram.com/the_jogi_films/?igsh=MXU2ZjFiNmUyenY0dQ%3D%3D#', 'https://www.instagram.com/the_jogi_films/?igsh=MXU2ZjFiNmUyenY0dQ%3D%3D#', '9520900508', '9152235037', 'arunchouhan9520@gmail.com', 'Tota Chowk Near Bhuteshwar Mandir Behat Road Saharanpur, Pin:247001', '2025-03-22 03:04:18', '2025-03-25 00:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_19_114359_create_category_table', 1),
(5, '2025_03_20_061421_create_wedding_work_table', 2),
(6, '2025_03_21_123608_create_wedding_films_table', 3),
(7, '2025_03_22_074758_create_global_table', 4),
(8, '2025_03_26_111500_create_testimonial_table', 5),
(9, '2025_03_27_053732_create_team_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('ss8147774@gmail.com', '1lQKjwkTdn6ojCO5xiJtikz9Tqg0KVeGnMGzV9w9pZ54zeWttrOrgFEzdlJe6E60', '2025-03-28 00:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cLwNe1tMpdKwQ4ERvEiAryDE5JRJWGTwCc4bI7dM', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieFVGMkhERmxPOFVvYTM5aHNxRmpYcFY5UXFRdUZXSXYyTEdjSU40ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3QvdGhlam9naWZpbG1zL2FkbWluL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1743657940),
('Dsr02zkw434UpVtWjkBySvHEVehfYD64eH1WRtwn', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1dDY25FWkhvZ2ZnWnppU1E5T0tZSzJBNkpWWmE3eGJnUm9YY1ZkMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3QvdGhlam9naWZpbG1zL2FkbWluL2FkZC13ZWRkaW5nLXdvcmsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1746875357),
('iZcO6Zk8KnDyb64OHplftV5JeMV6lqx6mhedfVIO', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXpJeTZoTFNObGlMVUNlWVg4UTRRZ1ZZWDZYYXZnZzhWMllxUzBGZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3QvdGhlam9naWZpbG1zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744607204),
('JqozEXDdOxHNW8H5LQLeJcxGCJVSYLOrl2FlncLj', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWo0a0JOOWFyQzhtb3hyZDQ5NlUxWHE2NW5OUnh5RjRtZUVZMHRGeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3QvdGhlam9naWZpbG1zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1743857190),
('p6mYkuoZzP2kZOUXb7Ub0rA8nagjNXhzWjlFaa8C', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVkZsVm9jTE9MSjh4MENDVlFWdHlpOXFJeldMWVVodEw1NXJhYUhBSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njc6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3QvdGhlam9naWZpbG1zL2FkbWluL21hbmFnZS10ZXN0aW1vbmlhbHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1744376459),
('uctkAhSJCKb1AL0pgglfHlTJbl4c33yvpfNCo7Gg', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOGdZTHY3YjlZN3pXSTVtUm9CZmE5YWxDV3V2Q1FzaU5uTGpTbEpndSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsX3Byb2plY3QvdGhlam9naWZpbG1zL2FkbWluL21hbmFnZS10ZWFtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1744347862);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_name`, `team_image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Arun chouhan', 'upload/team_image/1743069949_team_image_IMG_8119.PNG', 1, '2025-03-27 04:35:49', '2025-03-27 04:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_image` varchar(255) NOT NULL,
  `testimonial_title` varchar(255) NOT NULL,
  `discreption` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `testimonial_image`, `testimonial_title`, `discreption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/testimonial_image/1742990814_testimonial_image_fb2038b420884c86b2ca9905504e3747.jpeg', 'Shivam', 'Photography is my love, photography to me is as important as food & water to everyone. I am thankful to my family, as they supported me in every way. Though I love doing all type of photography but the most I like is capturing emotions of people the way they are naturally.', 1, '2025-03-26 06:07:36', '2025-04-11 07:30:59'),
(2, 'upload/testimonial_image/1742990860_testimonial_image_fb2038b420884c86b2ca9905504e3747.jpeg', 'saini', 'Photography is my love, photography to me is as important as food & water to everyone. I am thankful to my family', 1, '2025-03-26 06:08:32', '2025-03-26 06:58:00');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Arun', 'arunchouhan9520@gmail.com', NULL, '$2y$12$ehh.7Hr1A3OmHUElOLNoxunXvkLdOV/xMHk6jNZbLcx4LpMrgei3K', NULL, '2025-03-27 06:30:18', '2025-03-27 06:30:18'),
(5, 'shivam', 'ss8147774@gmail.com', NULL, '$2y$12$D.AJNNP4I5yCoQpmes8qEexp/JxmRTWJbQEFYLqSgpK8XTbduB6Ri', NULL, '2025-03-28 00:21:49', '2025-03-28 00:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_films`
--

CREATE TABLE `wedding_films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `discreption` varchar(5000) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_films`
--

INSERT INTO `wedding_films` (`id`, `video_url`, `video_title`, `discreption`, `status`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/embed/AVfWqtZjCb8?si=5IcHaEv1vQjZo-Vr', 'Main Tera Deewana | Full HD Video | Maharaja Song | Kavita, Udit Narayan | Govinda, Manisha Koirala', '810,631 views  Premiered Mar 18, 2025  #mainteradeewanatumerideewani #fullHDvideo #UditNarayan\r\n#mainteradeewanatumerideewani #fullHDvideo #maharajasong\r\n#mainteradeewanatumerideewani #Govindasong #maharajasong\r\nMain Tera Deewana | Full HD Video | Maharaja Song | Kavita, Udit Narayan | Govinda, Manisha Koirala\r\n\r\nMain tera deewana | Full HD Videi Song | maharaja Song | Kavita Krishnamurthy, Udit Narayan | Govinda, Manisha Koirala, maharaja song _ Hindi Song | Hindi Video Song\r\nmaharaja movie _ main tera deewana tu meri deewani _ udit narayan hit songs\r\n\r\nSong (s): Main Tera Diwana\r\nMovie (s): Maharaja\r\nSingers (s): Kavita Krishnamurthy, Udit Narayan\r\nSong Lyricists (s): Sameer\r\nMusic Composer (s): Nadeem Saifi, Shravan Rathod\r\nStarring (s): Govinda, Manisha Koirala, Raj Babbar, Shakti Kapoor\r\n\r\n(( Hindi Song Full HD Video ))', 1, '2025-03-21 23:56:12', '2025-03-21 23:56:56'),
(3, 'https://www.youtube.com/embed/wDJUnfDCH9E?si=EBAiRkoHOuQWXzJW', 'Uyi Amma - Uyi Amma Main to Tut Ke Bikhar Gai - Azaad - Aaman D, Rasha Thadani - Amit Trivedi', 'Uyi Amma - Uyi Amma Main to Tut Ke Bikhar Gai - Azaad - Aaman D, Rasha Thadani - Amit Trivedi\r\n\r\nExperience the magic of \"Uyi Amma - Uyi Amma Main to Tut Ke Bikhar Gai\", a mesmerizing song from Azaad, featuring the soulful vocals of Aaman D and the dynamic energy of Rasha Thadani. Composed by the legendary Amit Trivedi, this track blends emotion, rhythm, and deep storytelling, making it an unforgettable musical masterpiece.', 1, '2025-03-21 23:58:43', '2025-03-21 23:58:43'),
(4, 'https://www.youtube.com/embed/p9dPJMY1H3E?si=_tSK37w5iT7n74xG', 'SHEESHE WALI CHUNNI (Video Song): YO YO HONEY SINGH | SHEHNAAZ GILL | GIRIK AMAN | GLORY | BHUSHAN K', '1,811,219 views  Jan 13, 2025  #freefireheadshotinjector #autoheadshotconfigfilefreefire #ffmaxinjector\r\nPRESENTING THE OFFICIAL VIDEO SONG \'SHEESHE WALI CHUNNI\', FROM THE ALBUM GLORY, BY YO YO HONEY SINGH.\r\n\r\nGULSHAN KUMAR & T-SERIES PRESENTS\r\nBHUSHAN KUMAR’S \'SHEESHE WALI CHUNNI\'\r\n\r\n#SHEESHEWALICHUNNI #YOYOHONEYSINGH #SHEHNAAZGILL #GIRIKAMAN #GLORY', 1, '2025-03-21 23:59:32', '2025-03-26 07:01:37'),
(5, 'https://www.youtube.com/embed/7lZM6NQK7Oo?si=nXikUJNfQtSDWAfi', 'Shivam Weds Swati', '521 views  Mar 23, 2025\r\nSAINI KI BARAAT ! FULL VIDEO 🥁 ‎⁨@AmitSainiRohtakiya⁩   ‎⁨@anshmp3⁩  #amitsainirohtakiya #viralvideo\r\n\r\nLyrics:‪@AmitSainiRohtakiya‬ \r\nsinger:‪@AmitSainiRohtakiya‬ \r\n\r\n\r\nLyrics:‪@anshmp3‬ \r\nsinger:‪@anshmp3‬ \r\n\r\n\r\n#SainiKiBaraat #WeddingVibes #FullCelebration #IndianWedding #BaraatTime #WeddingVideo #DesiWeddings #WeddingFun #SainiWedding #GrandBaraat #VibrantCelebration\r\n\r\n\r\n\"Saini Ki Baraat | The Ultimate Wedding Celebration 🥁🎉\"\r\n#SainiBaraat #WeddingFun #IndianWedding #BaraatVibes #DesiWedding\r\n\r\n\"Epic Saini Ki Baraat | Full Wedding Highlights 🥁💃\"\r\n#BaraatCelebration #WeddingDance #SainiKiBaraat #VibrantWedding\r\n\r\n\"Saini Ki Baraat Full Video | Celebrating Love & Tradition 🥁\"\r\n#BaraatDance #SainiWedding #TraditionalWedding #IndianBaraat\r\n\r\n\"Baraat Ki Shaam | Saini Wedding Full Video 🥁✨\"\r\n#WeddingMagic #BaraatCelebration #DesiWeddings #SainiKiBaraat\r\n\r\n\"Grand Saini Ki Baraat | A Wedding Full of Joy 🥁🎉\"\r\n#SainiBaraat #EpicWedding #DesiBaraat #IndianWeddingCelebration\r\n\r\n\"Baraat Mein Shor Hai | Saini Wedding Full Video 🥁🎶\"\r\n#BaraatVibes #DesiFun #WeddingCelebration #SainiKiBaraat\r\n\r\n\"Saini Ki Baraat | Unforgettable Wedding Moments 🥁💫\"\r\n#SainiWedding #BaraatDance #IndianWeddingVibes #TraditionalCelebration\r\n\r\n\"Shaadi Ki Dhoom | Saini Ki Baraat Full Video 🥁\"', 1, '2025-03-22 00:00:22', '2025-03-26 23:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_work`
--

CREATE TABLE `wedding_work` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `work_name` varchar(255) NOT NULL,
  `work_image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_work`
--

INSERT INTO `wedding_work` (`id`, `category`, `work_name`, `work_image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Kids', 'kids', 'upload/_workwedding_/1742543721_work_image_portrait-smiley-little-kid_23-2148984817.jpg', 1, '2025-03-21 02:25:21', '2025-03-21 02:25:21'),
(7, 'Kids', 'new kid', 'upload/_workwedding_/1742543737_work_image_smiley-little-boy-isolated-pink_23-2148984796.jpg', 1, '2025-03-21 02:25:37', '2025-03-21 02:25:37'),
(8, 'Products', 'table', 'upload/_workwedding_/1742543861_work_image_66924ac248c6da6bc6495cdf-idealhouse-center-table-fluted-coffee.jpg', 1, '2025-03-21 02:27:41', '2025-03-21 02:27:41'),
(9, 'Products', 'table new', 'upload/_workwedding_/1742543873_work_image_daist-coffee-table-in-exotic-teak-finish-by-a-globia-creations-daist-coffee-table-in-exotic-teak-fin-nticew.webp', 1, '2025-03-21 02:27:53', '2025-03-21 02:27:53'),
(10, 'Products', 'table chair', 'upload/_workwedding_/1742543891_work_image_dehradun-solid-wood-study-table-with-one-drawer-236715_grande.webp', 1, '2025-03-21 02:28:11', '2025-03-21 02:28:11'),
(11, 'Products', 'chair', 'upload/_workwedding_/1742543904_work_image_1.jpg', 1, '2025-03-21 02:28:24', '2025-03-21 02:28:24'),
(12, 'Wedding Pics', 'wedding1', 'upload/_workwedding_/1742552483_work_image_496317d5d0ded3faa44a3b3f275aa13c.jpg', 1, '2025-03-21 04:51:23', '2025-03-21 04:51:23'),
(13, 'Wedding Pics', 'wedding2', 'upload/_workwedding_/1742552512_work_image_Featured_stylemeupwithsakshi_43cc7b6f32-3x4.webp', 1, '2025-03-21 04:51:52', '2025-03-21 04:51:52'),
(14, 'Wedding Pics', 'wedding3', 'upload/_workwedding_/1742552588_work_image_Wedding.webp', 1, '2025-03-21 04:52:05', '2025-03-21 04:53:08'),
(15, 'Wedding Pics', 'wedding5', 'upload/_workwedding_/1742552612_work_image_images (2).jpg', 1, '2025-03-21 04:53:32', '2025-03-21 04:53:32'),
(16, 'Wedding Pics', 'wedding6', 'upload/_workwedding_/1742552794_work_image_portfolio1_1.jpg', 1, '2025-03-21 04:53:57', '2025-03-21 04:56:34'),
(17, 'Wedding Pics', 'wedding11', 'upload/_workwedding_/1742552831_work_image_portfolio1_2.jpg', 1, '2025-03-21 04:57:11', '2025-03-21 04:57:11'),
(18, 'Wedding Pics', 'wedding12', 'upload/_workwedding_/1742552841_work_image_portfolio1_3.jpg', 1, '2025-03-21 04:57:21', '2025-03-21 04:57:21'),
(19, 'Wedding Pics', 'wedding14', 'upload/_workwedding_/1742552855_work_image_portfolio2_1.jpg', 1, '2025-03-21 04:57:35', '2025-03-21 04:57:35'),
(20, 'Wedding Pics', 'wedding15', 'upload/_workwedding_/1742552883_work_image_portfolio2_3.jpg', 1, '2025-03-21 04:58:03', '2025-03-21 04:58:03'),
(21, 'Wedding Pics', 'wedding17', 'upload/_workwedding_/1742552906_work_image_portfolio6_6.jpg', 1, '2025-03-21 04:58:26', '2025-03-21 04:58:26'),
(22, 'Wedding Pics', 'wedding18', 'upload/_workwedding_/1742552920_work_image_portfolio6_5.jpg', 1, '2025-03-21 04:58:40', '2025-03-21 04:58:40'),
(23, 'Wedding Pics', 'wedding333', 'upload/_workwedding_/1742552930_work_image_portfolio6_3.jpg', 1, '2025-03-21 04:58:50', '2025-03-21 04:58:50'),
(24, 'Pre Wedding', 'pre wedding1', 'upload/_workwedding_/1742552971_work_image_portfolio6_1.jpg', 1, '2025-03-21 04:59:31', '2025-03-21 04:59:31'),
(25, 'Pre Wedding', 'pre wedding2', 'upload/_workwedding_/1742552983_work_image_portfolio1_1.jpg', 1, '2025-03-21 04:59:43', '2025-03-21 04:59:43'),
(26, 'Wedding Pics', 'pre wedding4', 'upload/_workwedding_/1742553204_work_image_portfolio2_2.jpg', 1, '2025-03-21 05:03:24', '2025-03-21 05:03:24'),
(27, 'Wedding Pics', 'pre wedding5', 'upload/_workwedding_/1742553215_work_image_portfolio2_4.jpg', 1, '2025-03-21 05:03:35', '2025-03-21 05:03:35'),
(28, 'Wedding Pics', 'pre wedding6', 'upload/_workwedding_/1742553228_work_image_portfolio4_1.jpg', 1, '2025-03-21 05:03:48', '2025-03-21 05:03:48'),
(29, 'Pre Wedding', 'pre wedding66', 'upload/_workwedding_/1742553241_work_image_portfolio4_2.jpg', 1, '2025-03-21 05:04:01', '2025-03-21 05:04:01'),
(30, 'Pre Wedding', 'pre wedding56', 'upload/_workwedding_/1742553272_work_image_portfolio6_5.jpg', 1, '2025-03-21 05:04:32', '2025-03-21 05:04:32'),
(31, 'Pre Wedding', 'pre wedding45', 'upload/_workwedding_/1742553282_work_image_portfolio6_6.jpg', 1, '2025-03-21 05:04:42', '2025-03-21 05:04:42'),
(32, 'Pre Wedding', 'pre wedding34', 'upload/_workwedding_/1742553293_work_image_portfolio6_3.jpg', 1, '2025-03-21 05:04:53', '2025-03-21 05:04:53'),
(33, 'Pre Wedding', 'pre wedding23', 'upload/_workwedding_/1742553306_work_image_portfolio6_2.jpg', 1, '2025-03-21 05:05:06', '2025-03-21 05:05:06'),
(34, 'Pre Wedding', 'pre wedding343', 'upload/_workwedding_/1742553315_work_image_portfolio6_1.jpg', 1, '2025-03-21 05:05:15', '2025-03-21 05:05:15'),
(35, 'Wedding Pics', 'Shivam weds Swati', 'upload/_workwedding_/1742626931_work_image_600.jpg', 1, '2025-03-22 01:32:11', '2025-03-22 01:32:11'),
(36, 'Wedding Pics', 'Shivam weds swati wedding', 'upload/_workwedding_/1742626968_work_image_700.jpg', 1, '2025-03-22 01:32:48', '2025-03-22 01:32:48'),
(37, 'Wedding Pics', 'Shivam weds swati wedding1', 'upload/_workwedding_/1742626991_work_image_4000.jpg', 1, '2025-03-22 01:33:11', '2025-03-22 01:33:11'),
(38, 'Wedding Pics', 'Shivam weds swati wedding day', 'upload/_workwedding_/1742627006_work_image_800.jpg', 1, '2025-03-22 01:33:26', '2025-03-22 01:33:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `global`
--
ALTER TABLE `global`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wedding_films`
--
ALTER TABLE `wedding_films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_work`
--
ALTER TABLE `wedding_work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `global`
--
ALTER TABLE `global`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wedding_films`
--
ALTER TABLE `wedding_films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wedding_work`
--
ALTER TABLE `wedding_work`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
