-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2021 at 11:23 AM
-- Server version: 5.7.35
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educatio_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `course_id`, `subject_id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 3, 5, 'Electric Charges And Fields', 'Electric_Charges_And_Fields.png', 'enable', '2021-05-13 12:35:12', '2021-05-21 12:53:36'),
(7, 3, 5, 'Electrostatic Potential And Capacitance', 'ELECTROSTATIC-POTENTIAL-AND-CAPACITANCE.jpg', 'enable', '2021-05-13 12:36:08', '2021-05-14 12:47:30'),
(8, 4, 8, 'Gravity', 'app_logo.png', 'enable', '2021-05-22 13:27:50', '2021-05-22 13:27:50'),
(9, 5, 10, 'Financial Accounting', 'unnamed21.png', 'enable', '2021-06-01 09:45:02', '2021-06-01 09:45:02'),
(10, 5, 11, 'Introduction to Macro Economics', 'introduction-to-macro-economics-2-638.jpg', 'enable', '2021-06-01 10:21:23', '2021-06-01 10:21:23'),
(11, 5, 12, 'Principles of Management', 'PrinciplesManagementFrontCover_2020bs-scaled.jpg', 'enable', '2021-06-01 10:32:07', '2021-06-01 10:32:07'),
(12, 6, 13, 'Nationalism in India', 'nationalism-in-india-1-638.jpg', 'enable', '2021-06-01 10:49:44', '2021-06-01 10:49:44'),
(13, 5, 10, 'Ledger', 'leger_topic.png', 'enable', '2021-06-01 11:04:17', '2021-06-01 11:04:17'),
(14, 6, 14, 'Resources and Development', 'WhatsApp-Image-2020-04-03-at-7.24.29-AM.jpeg', 'enable', '2021-06-01 11:10:35', '2021-06-01 11:10:35'),
(15, 6, 15, 'What is Democracy? Why is Democracy?', 'download.jpg', 'enable', '2021-06-01 11:29:47', '2021-06-01 11:29:47'),
(16, 6, 16, 'Cathedral', 'download_(1).jpg', 'enable', '2021-06-01 11:51:26', '2021-06-01 11:51:26'),
(17, 5, 10, 'Bills of Exchange', 'maxresdefault.jpg', 'enable', '2021-06-02 04:06:45', '2021-06-02 04:06:45'),
(18, 5, 10, 'Recording of Transactions', 'recording-transactions-10-728.jpg', 'enable', '2021-06-02 04:09:50', '2021-06-02 04:09:50'),
(19, 5, 10, 'Depreciation, Provisions and Reserves', 'slide_1.jpg', 'enable', '2021-06-02 04:19:09', '2021-06-02 04:19:09'),
(20, 5, 10, 'Depreciation, Provisions and Reserves', 'slide_1.jpg', 'enable', '2021-06-02 04:21:32', '2021-06-02 04:21:32'),
(21, 6, 13, 'Rise of nationalism in Europe', 'the-rise-of-nationalism-in-europe-2-638.jpg', 'enable', '2021-06-02 04:57:21', '2021-06-02 04:57:21'),
(22, 6, 13, 'Age of Industrialisation', 'SST_Class_10th_The_Age_of_Industrialisation.png', 'enable', '2021-06-02 04:58:41', '2021-06-02 04:58:41'),
(23, 6, 13, 'Culture and Modern World', 'the111018_p42_ships_gettyimages.jpg', 'enable', '2021-06-02 05:04:43', '2021-06-02 05:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `live_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sender`, `recipient`, `student_id`, `message`, `image`, `date`, `time`, `live_status`, `created_at`, `updated_at`) VALUES
(1, '23', 'admin', '23', '', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'admin', '23', '23', 'dsf', NULL, '22/06/2021', '02:39', NULL, '2021-06-22 09:09:39', '2021-06-22 09:09:39'),
(3, 'admin', '6', '6', 'dsf', NULL, '22/06/2021', '02:40', NULL, '2021-06-22 09:10:03', '2021-06-22 09:10:03'),
(4, 'admin', '26', '26', 'dsaf', NULL, '22/06/2021', '02:41', NULL, '2021-06-22 09:11:16', '2021-06-22 09:11:16'),
(5, 'admin', '25', '25', 'dsaf', NULL, '22/06/2021', '02:44', NULL, '2021-06-22 09:14:01', '2021-06-22 09:14:01'),
(6, 'admin', '44', '44', 'dsaf', NULL, '22/06/2021', '03:22', NULL, '2021-06-22 09:52:59', '2021-06-22 09:52:59'),
(7, 'admin', '23', '23', 'dsaf', NULL, '22/06/2021', '04:21', NULL, '2021-06-22 10:51:24', '2021-06-22 10:51:24'),
(8, 'admin', '23', '23', 'dsaf', NULL, '22/06/2021', '04:21', NULL, '2021-06-22 10:51:28', '2021-06-22 10:51:28'),
(9, 'admin', '23', '23', 'asd', NULL, '23/06/2021', '02:24', NULL, '2021-06-23 08:54:20', '2021-06-23 08:54:20'),
(10, 'admin', '23', '23', 'asd', NULL, '23/06/2021', '02:24', NULL, '2021-06-23 08:54:23', '2021-06-23 08:54:23'),
(11, 'admin', '23', '23', 'asd', NULL, '23/06/2021', '02:24', NULL, '2021-06-23 08:54:26', '2021-06-23 08:54:26'),
(12, 'admin', '23', '23', 'asd', NULL, '23/06/2021', '02:24', NULL, '2021-06-23 08:54:26', '2021-06-23 08:54:26'),
(13, 'admin', '46', '46', 'dsaf', NULL, '25/06/2021', '12:22', NULL, '2021-06-25 06:52:37', '2021-06-25 06:52:37'),
(14, 'admin', '23', '23', 'asd', NULL, '25/06/2021', '12:24', NULL, '2021-06-25 06:54:14', '2021-06-25 06:54:14'),
(15, 'admin', '23', '23', 'dsaf', NULL, '25/06/2021', '12:25', NULL, '2021-06-25 06:55:16', '2021-06-25 06:55:16'),
(16, 'admin', '23', '23', 'dsaf', NULL, '25/06/2021', '12:25', NULL, '2021-06-25 06:55:21', '2021-06-25 06:55:21'),
(17, 'admin', '23', '23', 'asd', NULL, '25/06/2021', '12:26', NULL, '2021-06-25 06:56:29', '2021-06-25 06:56:29'),
(18, 'admin', '23', '23', 'dsaf', NULL, '25/06/2021', '12:27', NULL, '2021-06-25 06:57:34', '2021-06-25 06:57:34'),
(19, 'admin', '23', '23', 'asd', NULL, '25/06/2021', '12:30', NULL, '2021-06-25 07:00:43', '2021-06-25 07:00:43'),
(20, 'admin', '23', '23', 'asd', NULL, '25/06/2021', '12:30', NULL, '2021-06-25 07:00:50', '2021-06-25 07:00:50'),
(21, 'admin', '23', '23', 'Vikash', NULL, '25/06/2021', '01:52', NULL, '2021-06-25 08:22:20', '2021-06-25 08:22:20'),
(22, 'admin', '23', '23', 'fgh', NULL, '12/08/2021', '02:26', NULL, '2021-08-12 08:56:38', '2021-08-12 08:56:38'),
(23, 'admin', '23', '23', 'asdasd', NULL, '12/08/2021', '02:26', NULL, '2021-08-12 08:56:49', '2021-08-12 08:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `course_id`, `subject_id`, `chapter_id`, `topic_id`, `content_type`, `title`, `pdf`, `url`, `content_status`, `status`, `created_at`, `updated_at`) VALUES
(16, 3, 5, 6, 8, 'pdf', 'Sample', 'sample.pdf', NULL, 'paid', 'enable', '2021-05-14 17:50:43', '2021-05-17 05:09:51'),
(17, 4, 8, 8, 11, 'video', 'Content Content Content Content Content', 'no-image.png', 'https://youtu.be/GARXQfPg2GM', 'paid', 'enable', '2021-05-28 08:02:12', '2021-05-31 06:12:29'),
(18, 4, 8, 8, 11, '', 'Android Development', 'no-image.png', NULL, 'free', 'disable', '2021-05-29 04:19:34', '2021-05-29 04:19:34'),
(19, 4, 8, 8, 11, '', 'Android Development', 'no-image.png', NULL, 'free', 'enable', '2021-05-29 04:20:48', '2021-05-29 04:20:48'),
(20, 4, 8, 8, 11, '', 'Android Development', 'no-image.png', NULL, 'free', 'enable', '2021-05-29 04:22:44', '2021-05-29 04:22:44'),
(21, 4, 8, 8, 11, 'pdf', 'gravity', 'Class_11_Revised_Syllabus.pdf', NULL, 'free', 'enable', '2021-05-29 04:24:43', '2021-05-29 06:43:57'),
(22, 4, 8, 8, 11, 'pdf', 'Content', 'Class_11_Revised_Syllabus.pdf', NULL, 'free', 'enable', '2021-05-31 05:08:14', '2021-05-31 05:08:18'),
(23, 5, 10, 9, 14, 'video', 'Enhancing Qualitative Characteristics', 'no-image.png', 'https://www.youtube.com/embed/UzASMR34fds', 'free', 'enable', '2021-06-01 09:51:51', '2021-06-03 08:35:32'),
(24, 5, 10, 9, 14, '', 'financial accounting', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 09:58:24', '2021-06-01 09:58:24'),
(25, 5, 10, 9, 14, '', 'financial accounting', 'no-image.png', NULL, 'free', 'disable', '2021-06-01 09:58:47', '2021-06-01 09:58:47'),
(26, 5, 10, 9, 14, '', 'financial accounting', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 09:59:24', '2021-06-01 09:59:24'),
(27, 5, 10, 9, 14, '', 'financial accounting', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 10:01:12', '2021-06-01 10:01:12'),
(28, 5, 10, 9, 14, 'pdf', 'financial accounting', 'accounting_basics_tutorial.pdf', NULL, 'free', 'enable', '2021-06-01 10:06:53', '2021-06-03 08:35:57'),
(29, 5, 11, 10, 15, 'video', 'microeconomics', 'no-image.png', 'https://youtu.be/Z8XK34rmxC8?t=4', 'paid', 'enable', '2021-06-01 10:25:49', '2021-06-01 10:25:49'),
(30, 5, 11, 10, 15, 'pdf', 'microeconomics', 'VSI-Microeconomics_Ch1.pdf', NULL, 'paid', 'enable', '2021-06-01 10:29:23', '2021-06-01 10:29:23'),
(31, 5, 12, 11, 16, 'video', 'Division of Work', 'no-image.png', 'https://youtu.be/aiS1f64FRqc?t=7', 'paid', 'enable', '2021-06-01 10:35:14', '2021-06-01 10:35:14'),
(32, 5, 12, 11, 16, 'pdf', 'Division of Work', 'Unit-21.pdf', NULL, 'paid', 'enable', '2021-06-01 10:37:00', '2021-06-01 10:37:00'),
(33, 6, 13, 12, 17, 'video', 'Hindu Rashtra', 'no-image.png', 'https://www.youtube.com/embed/YbPTf0UbRFY', 'paid', 'enable', '2021-06-01 10:53:35', '2021-06-02 05:12:57'),
(34, 6, 13, 12, 17, 'pdf', 'hindu rashtra', '9780230339545_1.pdf', NULL, 'paid', 'enable', '2021-06-01 11:07:38', '2021-06-01 11:07:38'),
(35, 6, 14, 14, 18, 'video', 'Resource', 'no-image.png', 'https://youtu.be/uS8h97TPgTE?t=14', 'paid', 'enable', '2021-06-01 11:18:39', '2021-06-01 11:18:39'),
(36, 6, 14, 14, 18, 'pdf', 'Resources', 'jesc116.pdf', NULL, 'paid', 'enable', '2021-06-01 11:20:34', '2021-06-01 11:20:34'),
(37, 6, 15, 15, 19, 'video', 'Democracy', 'no-image.png', 'https://youtu.be/8Eu6G5YrBt4?t=4', 'paid', 'enable', '2021-06-01 11:33:05', '2021-06-01 11:33:05'),
(38, 6, 15, 15, 19, '', 'Democracy', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 11:35:30', '2021-06-01 11:35:30'),
(39, 6, 15, 15, 19, '', 'Democracy', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 11:36:28', '2021-06-01 11:36:28'),
(40, 6, 15, 15, 19, '', 'Democracy', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 11:36:48', '2021-06-01 11:36:48'),
(41, 6, 15, 15, 19, '', 'Democracy', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 11:37:35', '2021-06-01 11:37:35'),
(42, 6, 15, 15, 19, '', 'Democracy', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 11:39:14', '2021-06-01 11:39:14'),
(43, 6, 15, 15, 19, '', 'Democracy', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 11:39:38', '2021-06-01 11:39:38'),
(44, 6, 15, 15, 19, '', 'Democracy', 'no-image.png', NULL, 'paid', 'enable', '2021-06-01 11:42:11', '2021-06-01 11:42:11'),
(45, 6, 15, 15, 19, 'pdf', 'Democracy', '1605.201106.ganguly.india_.pdf', NULL, 'paid', 'enable', '2021-06-01 11:46:25', '2021-06-01 11:46:25'),
(46, 6, 16, 16, 20, 'video', 'Hinduism', 'no-image.png', 'https://youtu.be/PRPQMg6t9JQ?t=18', 'paid', 'enable', '2021-06-01 11:55:38', '2021-06-01 11:55:38'),
(47, 6, 16, 16, 20, 'pdf', 'Hinduism', 'hinduism.pdf', NULL, 'paid', 'enable', '2021-06-01 11:57:26', '2021-06-01 11:57:26'),
(48, 5, 10, 9, 21, 'video', 'Final accounts of Professionals', 'no-image.png', 'https://youtu.be/sPH_H9btstM?t=3', 'paid', 'enable', '2021-06-01 12:16:45', '2021-06-01 12:16:45'),
(49, 5, 10, 9, 21, 'pdf', 'Final accounts of Professionals', 'preparing-final-account.pdf', NULL, 'paid', 'enable', '2021-06-01 12:23:42', '2021-06-01 12:23:42'),
(50, 5, 10, 9, 23, 'video', 'classification of income and expenditure', 'no-image.png', 'https://youtu.be/8hBiCojad4M?t=5', 'paid', 'enable', '2021-06-01 12:25:18', '2021-06-01 12:25:18'),
(51, 5, 10, 9, 23, 'pdf', 'classification of income and expenditure', 'IE_MANUAL.pdf', NULL, 'paid', 'enable', '2021-06-01 12:27:20', '2021-06-01 12:27:20'),
(52, 5, 10, 9, 14, 'video', 'Final accounts of Professionals', 'no-image.png', 'https://www.youtube.com/embed/VEZC48WNuc4?start=14', 'free', 'enable', '2021-06-02 04:23:10', '2021-06-03 08:35:34'),
(53, 5, 10, 9, 14, 'video', 'classification of income and expenditure', 'no-image.png', 'https://www.youtube.com/embed/HWfw3Er88lI', 'free', 'enable', '2021-06-02 04:25:14', '2021-06-03 08:35:38'),
(54, 5, 10, 9, 14, 'pdf', 'Final accounts of Professionals', 'preparing-final-account.pdf', NULL, 'free', 'enable', '2021-06-02 04:45:31', '2021-06-03 08:35:58'),
(55, 5, 10, 9, 14, 'pdf', 'classification of income and expenditure', 'IE_MANUAL.pdf', NULL, 'paid', 'enable', '2021-06-02 04:49:00', '2021-06-03 08:37:41'),
(56, 6, 13, 12, 17, 'video', 'The Idea of Satyagraha', 'no-image.png', 'https://www.youtube.com/embed/cDED0fgiEkU', 'paid', 'enable', '2021-06-02 05:15:14', '2021-06-02 05:15:14'),
(57, 6, 13, 12, 17, 'video', 'Swaraj in the Plantations', 'no-image.png', 'https://www.youtube.com/embed/vnPzhVGmKRM', 'paid', 'enable', '2021-06-02 05:18:52', '2021-06-02 05:18:52'),
(58, 6, 13, 12, 17, 'video', 'Salt March and the Civil Disobedience Movement', 'no-image.png', 'https://www.youtube.com/embed/rSGD585-lHs', 'paid', 'enable', '2021-06-02 05:20:51', '2021-06-02 05:20:51'),
(59, 6, 13, 12, 17, 'pdf', 'The Idea of Satyagraha', '2014_35_17.pdf', NULL, 'paid', 'enable', '2021-06-02 05:25:40', '2021-06-02 05:25:40'),
(60, 6, 13, 12, 17, 'pdf', 'Swaraj in the Plantations', 'CBSE-Class-10-Social-Science-History-Notes-Chapter-2-Nationalism-in-India.pdf', NULL, 'paid', 'enable', '2021-06-02 05:27:04', '2021-06-02 05:27:04'),
(61, 6, 13, 12, 17, '', 'Salt March and the Civil Disobedience Movement', 'no-image.png', NULL, 'paid', 'enable', '2021-06-02 05:27:50', '2021-06-02 05:27:50'),
(62, 6, 13, 12, 17, '', 'Salt March and the Civil Disobedience Movement', 'no-image.png', NULL, 'paid', 'enable', '2021-06-02 05:29:31', '2021-06-02 05:29:31'),
(63, 6, 13, 12, 17, '', 'Salt March and the Civil Disobedience Movement', 'no-image.png', NULL, 'paid', 'enable', '2021-06-02 05:30:17', '2021-06-02 05:30:17'),
(64, 6, 13, 12, 17, '', 'Salt March and the Civil Disobedience Movement', 'no-image.png', NULL, 'paid', 'enable', '2021-06-02 05:31:59', '2021-06-02 05:31:59'),
(65, 6, 13, 12, 17, '', 'Salt March and the Civil Disobedience Movement', 'no-image.png', NULL, 'paid', 'enable', '2021-06-02 05:32:11', '2021-06-02 05:32:11'),
(66, 6, 13, 12, 17, 'pdf', 'Salt March and the Civil Disobedience Movement', 'sBvvHdadzsEMaaarqZnC.pdf', NULL, 'paid', 'enable', '2021-06-02 05:36:23', '2021-06-02 05:36:23'),
(67, 3, 5, 6, 8, 'video', 'Vimeo', 'no-image.png', 'https://player.vimeo.com/video/560273246', 'free', 'enable', '2021-06-09 05:20:03', '2021-06-09 05:25:59'),
(68, 3, 5, 6, 8, 'video', 'video1', 'no-image.png', 'https://player.vimeo.com/video/559915170', 'free', 'enable', '2021-06-14 06:52:14', '2021-06-14 06:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` bigint(20) DEFAULT NULL,
  `discounted_fee` bigint(100) DEFAULT NULL,
  `session_start` date NOT NULL,
  `session_end` date NOT NULL,
  `course_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `fee`, `discounted_fee`, `session_start`, `session_end`, `course_status`, `status`, `created_at`, `updated_at`) VALUES
(3, 'PCM', 2000, 1950, '2021-04-01', '2022-04-01', 'paid', 'enable', '2021-05-13 12:33:58', '2021-06-01 09:34:08'),
(4, 'PCB', 3500, 3400, '2021-04-01', '2022-04-01', 'paid', 'enable', '2021-05-13 12:34:18', '2021-06-01 09:36:12'),
(5, 'Commerce', 2000, 300, '2021-06-01', '2022-06-01', 'paid', 'enable', '2021-06-01 09:35:57', '2021-06-16 10:19:39'),
(6, 'Humanities', 3000, 500, '2021-06-01', '2022-06-01', 'paid', 'enable', '2021-06-01 09:37:30', '2021-06-01 09:37:30');

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
-- Table structure for table `live_sessions`
--

CREATE TABLE `live_sessions` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `paid_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_sessions`
--

INSERT INTO `live_sessions` (`id`, `course_id`, `subject_id`, `title`, `url`, `image`, `date`, `start_time`, `end_time`, `status`, `paid_status`, `created_at`, `updated_at`) VALUES
(13, 5, 10, 'asd', 'ad', '3.jpg', '2021-06-09', '14:47', '14:47', 'enable', 'paid', '2021-06-09 09:17:11', '2021-06-09 09:17:11'),
(14, 3, 5, 'test', 'google.com', '3.jpg', '2021-08-13', '11:46', '00:42', 'enable', 'free', '2021-08-13 06:12:37', '2021-08-13 06:12:37');

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
(1, '2020_10_30_045500_emplyoeelogs', 1),
(2, '2020_10_30_045544_companies', 1),
(3, '2020_10_31_063715_create_emplyoeeprofiles_table', 1),
(4, '2020_11_22_195014_projects', 2),
(5, '2020_11_22_195029_tasks', 2),
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2019_08_19_000000_create_failed_jobs_table', 3),
(9, '2020_10_16_090020_sample', 3),
(10, '2021_02_26_152323_petrol_pumps', 4),
(11, '2021_02_26_152640_rate_charts', 4),
(12, '2021_02_26_152702_trucks', 4),
(13, '2021_02_26_152718_vechile_owners', 4),
(14, '2021_02_26_152733_drivers', 5),
(15, '2021_03_09_153450_rate_chart', 6),
(16, '2021_03_12_111623_create_truck_places_table', 7),
(17, '2021_03_12_142930_create_loading_slips_table', 8),
(18, '2021_03_15_154732_create_invoices_table', 9),
(19, '2021_03_16_184405_create_debit_vouchers_table', 10),
(20, '2021_03_18_140500_create_fuels_table', 11),
(21, '2021_03_19_105024_create_diesel_infos_table', 12),
(23, '2021_03_19_154609_create_truck_hisabs_table', 13),
(24, '2021_04_14_133731_create_permission_tables', 14),
(26, '2021_04_14_172959_create_billings_table', 15),
(27, '2021_04_28_101743_create_pusers_table', 16),
(28, '2021_04_28_134844_create_payments_table', 17),
(29, '2021_05_12_113734_create_students_table', 18),
(30, '2021_05_12_131341_create_courses_table', 19),
(31, '2021_05_13_110627_create_subjects_table', 20),
(32, '2021_05_13_151459_create_chapters_table', 21),
(33, '2021_05_13_165929_create_topics_table', 22),
(34, '2021_05_13_224707_create_contents_table', 23),
(35, '2021_05_15_112739_create_tests_table', 24),
(36, '2021_05_24_163515_create_question_bank_table', 25),
(37, '2021_05_26_161720_create_sliders_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `course_id`, `transaction_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 3, '23123', '2021-05-21', 'sucess', '2021-05-21 07:27:26', '2021-05-21 07:27:26'),
(2, 70, 4, 'asdsad', '0000-00-00', '', '2021-06-21 10:24:14', '2021-06-21 10:24:14'),
(3, 70, 4, 'asdsad', '0000-00-00', '', '2021-06-21 10:24:52', '2021-06-21 10:24:52'),
(4, 70, 4, 'asdsad', '0000-00-00', '', '2021-06-21 10:25:23', '2021-06-21 10:25:23'),
(5, 70, 4, 'asdsad', '0000-00-00', '', '2021-06-21 10:26:16', '2021-06-21 10:26:16'),
(6, 70, 4, 'asdsad', '0000-00-00', '', '2021-06-21 10:28:11', '2021-06-21 10:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-04-14 08:21:33', '2021-04-14 08:21:33'),
(2, 'role-create', 'web', '2021-04-14 08:21:34', '2021-04-14 08:21:34'),
(3, 'role-edit', 'web', '2021-04-14 08:21:34', '2021-04-14 08:21:34'),
(4, 'role-delete', 'web', '2021-04-14 08:21:34', '2021-04-14 08:21:34'),
(5, 'user-list', 'web', '2021-04-14 08:34:20', '2021-04-14 08:34:20'),
(6, 'user-create', 'web', '2021-04-14 08:34:20', '2021-04-14 08:34:20'),
(7, 'user-edit', 'web', '2021-04-14 08:35:14', '2021-04-14 08:35:14'),
(8, 'user-delete', 'web', '2021-04-14 08:35:38', '2021-04-14 08:35:38'),
(9, 'companies-list', 'web', '2021-04-14 08:36:02', '2021-04-14 08:36:02'),
(10, 'companies-create', 'web', '2021-04-14 08:36:02', '2021-04-14 08:36:02'),
(11, 'companies-edit', 'web', '2021-04-14 08:36:02', '2021-04-14 08:36:02'),
(12, 'companies-delete', 'web', '2021-04-14 08:36:02', '2021-04-14 08:36:02'),
(13, 'employee-list', 'web', '2021-04-14 08:37:14', '2021-04-14 08:37:14'),
(14, 'employee-create', 'web', '2021-04-14 08:37:14', '2021-04-14 08:37:14'),
(15, 'employee-edit', 'web', '2021-04-14 08:37:14', '2021-04-14 08:37:14'),
(16, 'employee-delete', 'web', '2021-04-14 08:37:14', '2021-04-14 08:37:14'),
(17, 'employee-profile-list', 'web', '2021-04-14 08:38:38', '2021-04-14 08:38:38'),
(18, 'employee-profile-create', 'web', '2021-04-14 08:38:38', '2021-04-14 08:38:38'),
(19, 'employee-profile-edit', 'web', '2021-04-14 08:38:38', '2021-04-14 08:38:38'),
(20, 'employee-profile-delete', 'web', '2021-04-14 08:38:38', '2021-04-14 08:38:38'),
(21, 'petrol-pump-list', 'web', '2021-04-14 08:39:39', '2021-04-14 08:39:39'),
(22, 'petrol-pump-create', 'web', '2021-04-14 08:39:39', '2021-04-14 08:39:39'),
(23, 'petrol-pump-edit', 'web', '2021-04-14 08:39:39', '2021-04-14 08:39:39'),
(24, 'petrol-pump-delete', 'web', '2021-04-14 08:39:39', '2021-04-14 08:39:39'),
(25, 'vehicle-owner-list', 'web', '2021-04-14 08:43:20', '2021-04-14 08:43:20'),
(26, 'vehicle-owner-create', 'web', '2021-04-14 08:43:20', '2021-04-14 08:43:20'),
(27, 'vehicle-owner-edit', 'web', '2021-04-14 08:43:20', '2021-04-14 08:43:20'),
(28, 'vehicle-owner-delete', 'web', '2021-04-14 08:43:20', '2021-04-14 08:43:20'),
(29, 'driver-list', 'web', '2021-04-14 08:44:16', '2021-04-14 08:44:16'),
(30, 'driver-create', 'web', '2021-04-14 08:44:16', '2021-04-14 08:44:16'),
(31, 'driver-edit', 'web', '2021-04-14 08:44:16', '2021-04-14 08:44:16'),
(32, 'driver-delete', 'web', '2021-04-14 08:44:16', '2021-04-14 08:44:16'),
(33, 'truck-list', 'web', '2021-04-14 08:45:33', '2021-04-14 08:45:33'),
(34, 'truck-create', 'web', '2021-04-14 08:45:33', '2021-04-14 08:45:33'),
(35, 'truck-edit', 'web', '2021-04-14 08:45:33', '2021-04-14 08:45:33'),
(36, 'truck-delete', 'web', '2021-04-14 08:45:33', '2021-04-14 08:45:33'),
(37, 'rate-chart-list', 'web', '2021-04-14 08:46:41', '2021-04-14 08:46:41'),
(38, 'rate-chart-create', 'web', '2021-04-14 08:46:41', '2021-04-14 08:46:41'),
(39, 'rate-chart-edit', 'web', '2021-04-14 08:46:41', '2021-04-14 08:46:41'),
(40, 'rate-chart-delete', 'web', '2021-04-14 08:46:41', '2021-04-14 08:46:41'),
(41, 'fuel-list', 'web', '2021-04-14 08:47:42', '2021-04-14 08:47:42'),
(42, 'fuel-create', 'web', '2021-04-14 08:47:42', '2021-04-14 08:47:42'),
(43, 'fuel-edit', 'web', '2021-04-14 08:47:42', '2021-04-14 08:47:42'),
(44, 'fuel-delete', 'web', '2021-04-14 08:47:42', '2021-04-14 08:47:42'),
(45, 'loading-slip-list', 'web', '2021-04-14 08:48:37', '2021-04-14 08:48:37'),
(46, 'loading-slip-create', 'web', '2021-04-14 08:48:37', '2021-04-14 08:48:37'),
(47, 'loading-slip-edit', 'web', '2021-04-14 08:48:37', '2021-04-14 08:48:37'),
(48, 'loading-slip-delete', 'web', '2021-04-14 08:48:37', '2021-04-14 08:48:37'),
(49, 'truck-place-list', 'web', '2021-04-14 08:49:41', '2021-04-14 08:49:41'),
(50, 'truck-place-create', 'web', '2021-04-14 08:49:41', '2021-04-14 08:49:41'),
(51, 'truck-place-edit', 'web', '2021-04-14 08:49:41', '2021-04-14 08:49:41'),
(52, 'truck-place-delete', 'web', '2021-04-14 08:49:41', '2021-04-14 08:49:41'),
(53, 'invoice-list', 'web', '2021-04-14 08:51:12', '2021-04-14 08:51:12'),
(54, 'invoice-create', 'web', '2021-04-14 08:51:12', '2021-04-14 08:51:12'),
(55, 'invoice-edit', 'web', '2021-04-14 08:51:12', '2021-04-14 08:51:12'),
(56, 'invoice-delete', 'web', '2021-04-14 08:51:12', '2021-04-14 08:51:12'),
(57, 'truck-hisab-list', 'web', '2021-04-14 08:52:18', '2021-04-14 08:52:18'),
(58, 'truck-hisab-create', 'web', '2021-04-14 08:52:18', '2021-04-14 08:52:18'),
(59, 'truck-hisab-edit', 'web', '2021-04-14 08:52:18', '2021-04-14 08:52:18'),
(60, 'truck-hisab-delete', 'web', '2021-04-14 08:52:18', '2021-04-14 08:52:18'),
(61, 'debit-voucher-list', 'web', '2021-04-14 08:53:16', '2021-04-14 08:53:16'),
(62, 'debit-voucher-create', 'web', '2021-04-14 08:53:16', '2021-04-14 08:53:16'),
(63, 'debit-voucher-edit', 'web', '2021-04-14 08:53:16', '2021-04-14 08:53:16'),
(64, 'debit-voucher-delete', 'web', '2021-04-14 08:53:16', '2021-04-14 08:53:16'),
(65, 'billing-list', 'web', '2021-04-15 11:08:16', '2021-04-15 11:08:16'),
(66, 'billing-create', 'web', '2021-04-15 11:08:16', '2021-04-15 11:08:16'),
(67, 'billing-edit', 'web', '2021-04-15 11:08:16', '2021-04-15 11:08:16'),
(68, 'billing-delete', 'web', '2021-04-15 11:08:16', '2021-04-15 11:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `question_banks`
--

CREATE TABLE `question_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_explanation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_b_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_c_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_d_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_explanation_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_banks`
--

INSERT INTO `question_banks` (`id`, `course_id`, `subject_id`, `question`, `question_image`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `answer_explanation`, `option_a_image`, `option_b_image`, `option_c_image`, `option_d_image`, `answer_explanation_image`, `mark`, `status`, `created_at`, `updated_at`) VALUES
(9, 3, 5, '<p>asdasda</p>', '20170302_201102.jpg', '<p>sadsa</p>', '<p>asd</p>', '<p>asd</p>', '<p>asdasd</p>', 'option_a', '<p>asd</p>', 'download.png', 'Government-Guidelines-Startup-India-Seed-Fund-Scheme-Taxscan-1200x690.jpeg', 'Here-are-all-the-startups-that-raised-funding-in-July.jpg', 'images.png', 'ecommerce_advantages.jpg', '2', '', '2021-06-03 07:54:35', '2021-06-03 08:01:39'),
(10, 3, 5, '<p>asd</p>', 'startup-funding-101-series-a-b-c-funding-rounds-explained.jpg', '<p>sad</p>', '<p>asdsad</p>', '<p>asd</p>', '<p>asd</p>', 'option_a', '<p>asd</p>', 'ZeiYRVzzD-EtL1ZR3hm2M6W5Nv2tK5W3wUps_rUexuE_(1).png', 'istockphoto-922962354-612x612.jpg', 'PHIST_LOGO.jpg', 'pp.jpg', 'ecommerce_advantages.jpg', '2223', '', '2021-06-03 07:54:35', '2021-06-03 07:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-04-14 08:24:53', '2021-04-14 08:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Slider_2.jpg', 'enable', '2021-05-31 08:56:12', '2021-06-18 10:08:26'),
(12, 'Slider_1.jpg', 'enable', '2021-06-02 10:54:59', '2021-06-02 10:55:04'),
(13, 'Slider_3.jpg', 'enable', '2021-06-02 11:06:49', '2021-06-02 11:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `alt_phn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `courses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_session` date DEFAULT NULL,
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `phone_number`, `alt_phn`, `email`, `address`, `gender`, `image`, `dob`, `courses`, `paid`, `student_session`, `fcm_token`, `status`, `created_at`, `updated_at`) VALUES
(6, 'dsad', 7271001995, NULL, NULL, NULL, NULL, '4.jpg', '1996-05-22', '4', 'paid', '2021-03-22', '', 'enable', '2021-05-17 10:56:54', '2021-06-02 04:48:07'),
(23, 'Bharat', 7271001996, NULL, NULL, NULL, NULL, 'no-image.png', '1996-05-22', '5', 'free', '2022-06-01', '', 'enable', '2021-05-18 12:09:33', '2021-06-11 06:43:03'),
(25, 'BHARAT KUMAR', 9598334716, NULL, NULL, NULL, NULL, 'no-image.png', '2021-05-20', '3', 'paid', '2022-04-01', 'enZxJqcZQeKkKCvys2UljO:APA91bFtzhGrE3TX9AbIUJcDvIohHDcxYiL1-z_fkXCqG0lSa806dY_Loj9xKpNE8Md9QMMH7CVbqwmKoF-tF5BO1OngkWStkZFq4-Fnq9jJJr-h94c-0XkvpoHoIEn6gDvM213mJ0bH', 'enable', '2021-05-20 06:41:21', '2021-06-19 08:55:48'),
(26, 'Home', 9628342206, '4949494944', 'ravi@gmail.com', 'varanasi weather', 'Male', 'Title_(14).jpg', '2008-06-01', '5', 'free', '2022-06-01', 'enZxJqcZQeKkKCvys2UljO:APA91bFtzhGrE3TX9AbIUJcDvIohHDcxYiL1-z_fkXCqG0lSa806dY_Loj9xKpNE8Md9QMMH7CVbqwmKoF-tF5BO1OngkWStkZFq4-Fnq9jJJr-h94c-0XkvpoHoIEn6gDvM213mJ0bH', 'enable', '2021-06-01 09:50:35', '2021-07-15 05:45:26'),
(27, 'Vikas', 7271001999, NULL, NULL, NULL, NULL, 'no-image.png', '1996-05-22', '6', 'free', '2021-06-01', '', 'enable', '2021-06-01 09:55:44', '2021-06-01 09:55:44'),
(38, 'Neelesh Krishna', 8808515583, NULL, NULL, NULL, NULL, 'no-image.png', '1996-05-22', '6', 'free', '2021-03-22', '', 'enable', '2021-06-02 04:09:03', '2021-06-02 04:19:42'),
(39, 'Shivam Singh', 8920976591, NULL, NULL, NULL, NULL, 'no-image.png', '2021-06-02', '3', 'free', '2022-04-01', '', 'enable', '2021-06-02 09:25:23', '2021-06-02 09:25:23'),
(40, 'BHARAT KUMAR', 9594949494, NULL, NULL, NULL, NULL, 'no-image.png', '2021-06-02', '3', 'free', '2022-04-01', '', 'enable', '2021-06-02 10:05:30', '2021-06-02 10:05:30'),
(41, 'jjsns', 4649494949, NULL, NULL, NULL, NULL, 'no-image.png', '2021-06-02', '5', 'free', '2022-06-01', '', 'enable', '2021-06-02 10:49:42', '2021-06-02 10:49:42'),
(42, 'NCERT SAGA', 9977382136, '9116333773', 'sssandeepbhagat008@gmail.com', 'ramanujnagar', 'Male', 'no-image.png', '2021-06-02', '6', 'free', '2022-06-01', '', 'enable', '2021-06-02 13:44:05', '2021-06-20 07:32:38'),
(45, 'Divy Prakash', 8090260901, NULL, NULL, NULL, NULL, 'no-image.png', '1998-06-18', '4', 'free', '2022-04-01', NULL, 'enable', '2021-06-21 08:32:02', '2021-06-21 08:50:07'),
(46, 'Vikash', 8182829080, NULL, NULL, NULL, NULL, 'no-image.png', '1998-06-03', '5', 'free', '2022-06-01', 'db1CMU7CSFK-O2vjsf51uQ:APA91bGOcNyuDoNT4wCzknecL9JbOmqqpYyfGk8aQgVuYCcUfL1FhnMrzH75137G0nHjyjooxWWFj8JRUIsCK5pwubqZlEPQi470fvm0Dm9bXXYGFmFc-MaMsmSxWtLS9FM0UezDR9x1', 'enable', '2021-06-21 08:33:11', '2021-06-21 09:33:50'),
(70, 'Neelesh', 8808515584, NULL, NULL, NULL, NULL, 'no-image.png', '1996-10-22', '5', 'free', '2022-06-01', 'enZxJqcZQeKkKCvys2UljO:APA91bFtzhGrE3TX9AbIUJcDvIohHDcxYiL1-z_fkXCqG0lSa806dY_Loj9xKpNE8Md9QMMH7CVbqwmKoF-tF5BO1OngkWStkZFq4-Fnq9jJJr-h94c-0XkvpoHoIEn6gDvM213mJ0bH', 'enable', '2021-06-21 10:17:39', '2021-06-21 10:17:39'),
(71, 'e toppers', 9186410372, NULL, NULL, NULL, NULL, 'no-image.png', '2021-07-22', '4', 'free', '2022-04-01', 'cJh8y_doRKSyHwpwfb2o01:APA91bHeipXI9JTwcn-RACKjsnM7j4RcRagJjG_yqbc7-tU_vnAJA8FiKQTAe0-0HSf4sxWFr7xWEqyeFRYgoVhOwWR7UByyO4ybSSCCLWkBVtkVZs5eQ2DM44eB2cW9GoHbYcnIvTg0', 'enable', '2021-07-21 06:41:48', '2021-07-29 09:05:07'),
(72, 'Sandeep bhagat', 8305290055, NULL, NULL, NULL, NULL, 'no-image.png', '2021-07-24', '4', 'free', '2022-04-01', 'fMm4dvGVS9aAqm1KEriNoH:APA91bHYZJ1bLoVKSUlnTg5nlewF-t16SIsuGNdEg3Q1DNrs8Y9639zC6GSpU3yCMqDv4E-jh8gEaSrn3kx3T-yG07Ne0gfYpSAPhLT_ZNalebPAi-ZWIetP1d6swbFbZ-D4uBQYUYsp', 'enable', '2021-07-24 05:49:52', '2021-07-24 05:49:52'),
(73, 'suraj Pratap Singh', 9424232510, NULL, NULL, NULL, NULL, 'no-image.png', '1992-08-01', '3', 'free', '2022-04-01', 'fV-t4hUPQKay-w3Te80fj-:APA91bEZdgOJp5IsEmHOGqFhLfsa8OB4QBiwsQ2KdsaJeNOSQHMvmu84yJ1LpLy-WnWv2BwJN5Mg0djC6OpoNtwc5rAR67c_J9LqU4E8luMhmfBBsZJA63i7HXoHrjjcTZWLvcKffl8I', 'enable', '2021-08-03 04:19:23', '2021-08-03 04:19:23'),
(74, 'BHARAT KUMAR', 9807072861, NULL, NULL, NULL, NULL, 'no-image.png', '2021-08-03', '3', 'free', '2022-04-01', 'enZxJqcZQeKkKCvys2UljO:APA91bFtzhGrE3TX9AbIUJcDvIohHDcxYiL1-z_fkXCqG0lSa806dY_Loj9xKpNE8Md9QMMH7CVbqwmKoF-tF5BO1OngkWStkZFq4-Fnq9jJJr-h94c-0XkvpoHoIEn6gDvM213mJ0bH', 'enable', '2021-08-03 10:28:01', '2021-08-03 10:28:01'),
(75, 'Rohit', 7706858830, NULL, NULL, NULL, NULL, 'no-image.png', '1996-11-15', '4', 'free', '2022-04-01', 'fZc75RY6Tcu4Z0gr5zSLvH:APA91bF3pWPQNY27Zwl3X90PVBelMyDHRiM_1ZyHZdFanZTcGC__Su5lv295qm_R6XkY1Bh1A4-nFs5Bevqc1gH3-g5jRyFaXmitbWT_E7brYFQx4bydZ6xx1_dOCYoK-lpFl7_O0OJQ', 'enable', '2021-08-05 10:16:00', '2021-08-05 10:16:00'),
(76, 'dabli singh', 9171811581, NULL, NULL, NULL, NULL, 'no-image.png', '2004-03-05', '6', 'free', '2022-06-01', 'dt0lD1oIQSece2IaZbXlN_:APA91bFWA5FrtMZmZke4EL1pco6687NEoZUFTrvKxgxcO6cSC1CXyWvGLclQj0P4rV2Itz4GkFldEtVwKwb7--MipQAprzn0nDbWF5OZHnwoMkwu3DwB_qfOBZL0eCmcBtiacOz1Jzjr', 'enable', '2021-08-10 15:58:23', '2021-08-10 15:58:23'),
(77, 'e toppers', 8641037276, '8641037276', 'sssandeepbhagat008@gmail.com', 'ramanujnagar', 'Male', 'no-image.png', '2021-08-11', '4', 'free', '2022-04-01', 'fSjcIGZNQRSuyGXTLvsiN1:APA91bGDwW81u0lK7jM5kuAYrvVHDqfElASZCZ0B_FUtrSdUjvt-HcaxZMGZ-9Ds2BaY7YsHUYm2MNeAE4FU0-cP05PYTIKVLaxK4qSuYv3PDBZ9yj6Eh_kxlKr2XHR9YFQ4-1buke8B', 'enable', '2021-08-11 08:01:15', '2021-08-12 10:10:03'),
(78, 'rajendra', 9770234193, NULL, NULL, NULL, NULL, 'no-image.png', '2021-08-12', '3', 'free', '2022-04-01', 'cLRjd8u9RPyhK-ZRrCS6qb:APA91bEJzNrifA0Rd1ZxSdPVGwVWuupHQBFNjb98KrWMIWXXHJf8ZeKoRTZyJ3cxRpKXHjINU6nxmytgpsoUFsufg5_N5i5gf8kXDRLJ8E_8hUxvw0pPglG1XQ9SEgIVielF3CeN271t', 'enable', '2021-08-12 07:21:56', '2021-08-12 07:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `course_id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 3, 'Physics', 'physics.jpg', 'enable', '2021-05-13 12:34:36', '2021-05-21 12:53:12'),
(6, 3, 'Chemistry', 'chemistry.jpg', 'enable', '2021-05-13 12:34:46', '2021-05-13 12:34:46'),
(7, 3, 'Math', 'math.jpg', 'enable', '2021-05-13 12:35:00', '2021-05-13 12:35:00'),
(8, 4, 'Physics', 'app_logo.png', 'enable', '2021-05-22 13:15:29', '2021-05-31 06:43:11'),
(9, 4, 'Bio', 'no_product.png', 'enable', '2021-05-22 13:15:49', '2021-05-22 13:16:52'),
(10, 5, 'financial accounting', 'unnamed21.png', 'enable', '2021-06-01 09:40:31', '2021-06-01 10:17:36'),
(11, 5, 'Economics', 'unnamed.png', 'enable', '2021-06-01 10:14:04', '2021-06-01 10:14:04'),
(12, 5, 'business studies', 'business-studies-book-500x500.png', 'enable', '2021-06-01 10:16:10', '2021-06-01 10:16:10'),
(13, 6, 'History', 'history-wordle.jpg', 'enable', '2021-06-01 10:40:11', '2021-06-01 10:40:11'),
(14, 6, 'Geography', 'deleted-portion-of-cbse-12th-geography-syllabus-2020-21.jpg', 'enable', '2021-06-01 10:42:37', '2021-06-01 10:42:37'),
(15, 6, 'Politics', 'political-science-vs-politics.jpg', 'enable', '2021-06-01 10:43:50', '2021-06-01 11:27:02'),
(16, 6, 'Religion', 'images.jpg', 'enable', '2021-06-01 10:46:23', '2021-06-01 10:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `content_id` int(255) DEFAULT NULL,
  `test_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_explanation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_explanation_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `course_id`, `subject_id`, `chapter_id`, `topic_id`, `content_id`, `test_name`, `test_image`, `question`, `question_image`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `answer_explanation`, `option_a_image`, `option_b_image`, `option_c_image`, `option_d_image`, `answer_explanation_image`, `mark`, `test_status`, `status`, `created_at`, `updated_at`) VALUES
(72, 3, 5, 6, 8, 1, 'asdsad', 'download.png', '<p>sad</p>', 'PHIST_LOGO.jpg', '<p>sad</p>', '<p>sad</p>', '<p>asd</p>', '<p>asd</p>', 'option_a', '<p>dsasdsa</p>', 'pp.jpg', 'ecommerce_advantages.jpg', 'ecommerce.jpg', 'types_of_ecommerce.jpg', 'ecommerce_app.jpg', '1', 'free', 'enable', '2021-06-03 05:32:59', '2021-06-15 08:52:58'),
(73, 3, 5, 6, 8, 1, 'asdsad', 'download.png', '<p>asd</p>', 'ecommerce_mobile.jpg', '<p>asd</p>', '<p>sad</p>', '<p>asd</p>', '<p>sad</p>', 'option_a', '<p>asd</p>', 'ecommerce_2.jpg', 'techup-logo.png', '20170302_201001-1.jpg', '20170302_201102.jpg', '2389.jpg', '2', 'free', 'enable', '2021-06-03 05:32:59', '2021-06-15 08:52:58'),
(74, 3, 5, 6, 8, 2, 'asdasdsadsd', '2389.jpg', '<p>asd</p>', 'download.png', '<p>asd</p>', '<p>asd</p>', '<p>asd</p>', '<p>asd</p>', 'option_a', '<p>sad</p>', 'Government-Guidelines-Startup-India-Seed-Fund-Scheme-Taxscan-1200x690.jpeg', 'Here-are-all-the-startups-that-raised-funding-in-July.jpg', 'images.png', 'positive-quotes-motivational-quotes-minimalist-poster-black-and-white-siva-ganesh.jpg', 'startup-funding-101-series-a-b-c-funding-rounds-explained.jpg', '23', 'paid', 'enable', '2021-06-03 05:34:31', '2021-06-03 06:15:44'),
(75, 3, 5, 6, 8, 2, 'asdasdsadsd', '2389.jpg', '<p><b>sad</b></p>', 'istockphoto-922962354-612x612.jpg', '<p>dsf</p>', '<p>dsf</p>', '<p>df</p>', '<p>dsfdsfdf</p>', 'option_a', '<p>sdfdsf</p>', 'PHIST_LOGO.jpg', 'pp.jpg', 'ecommerce_advantages.jpg', 'ecommerce.jpg', 'types_of_ecommerce.jpg', '43', 'paid', 'enable', '2021-06-03 05:34:31', '2021-06-03 06:15:44'),
(76, 3, 5, 6, 8, 3, 'sffds', 'istockphoto-922962354-612x612.jpg', '<p>dsf</p>', 'PHIST_LOGO.jpg', '<p>df</p>', '<p>dsf</p>', '<p>dsf</p>', '<p>dsf</p>', 'option_a', '<p>sdf</p>', 'ZeiYRVzzD-EtL1ZR3hm2M6W5Nv2tK5W3wUps_rUexuE_(1).png', 'ecommerce_advantages.jpg', 'ecommerce.jpg', 'types_of_ecommerce.jpg', 'ecommerce_app.jpg', '3', 'paid', 'enable', '2021-06-03 05:35:48', '2021-06-03 06:31:37'),
(77, 3, 5, 6, 8, 3, 'sffds', 'istockphoto-922962354-612x612.jpg', '<p>dsfdfdsf</p>', 'ecommerce_mobile.jpg', '<p>df</p>', '<p>dsfdsf</p>', '<p>sdfsdf</p>', '<p>asdfsdf</p>', 'option_a', '<p>asfsdfsdf</p>', 'ecommerce_2.jpg', 'techup-logo.png', '20170302_201001-1.jpg', '20170302_201102.jpg', 'Government-Guidelines-Startup-India-Seed-Fund-Scheme-Taxscan-1200x690.jpeg', '34', 'paid', 'enable', '2021-06-03 05:35:48', '2021-06-03 06:31:37'),
(80, 3, 5, 6, 8, 1, 'asdsad', 'download.png', '<p>asd</p>', '2389.jpg', '<p>asd</p>', '<p>sad</p>', '<p>asd</p>', '<p>asdsd</p>', 'option_a', '<p>asdasdsadsd</p>', 'download.png', 'Government-Guidelines-Startup-India-Seed-Fund-Scheme-Taxscan-1200x690.jpeg', 'Here-are-all-the-startups-that-raised-funding-in-July.jpg', 'images.png', 'positive-quotes-motivational-quotes-minimalist-poster-black-and-white-siva-ganesh.jpg', '2323', 'free', 'enable', '2021-06-03 07:31:42', '2021-06-15 08:52:58'),
(81, 3, 5, 6, 8, 1, 'asdsad', 'download.png', '<p>asdsad</p>', 'startup-funding-101-series-a-b-c-funding-rounds-explained.jpg', '<p>asdasdas</p>', '<p>asdasdasd</p>', '<p>asdasdsad</p>', '<p>asdasdsad</p>', 'option_a', '<p>asdsad</p>', 'ZeiYRVzzD-EtL1ZR3hm2M6W5Nv2tK5W3wUps_rUexuE_(1).png', 'istockphoto-922962354-612x612.jpg', 'PHIST_LOGO.jpg', 'pp.jpg', 'ecommerce_advantages.jpg', '2', 'free', 'enable', '2021-06-03 07:31:42', '2021-06-15 08:52:58'),
(82, 3, 5, 6, 8, 2, 'dasdasd', '3.jpg', '<p>sdasd</p>', '', '<p>sad</p>', '<p>asd</p>', '<p>asd</p>', '<p>asd</p>', 'option_a', '<p>asd</p>', '', '', '', '', '', '1', 'free', 'disable', '2021-06-11 11:33:57', '2021-06-11 11:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `course_id`, `subject_id`, `chapter_id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(8, 3, 5, 6, 'Introduction to Electric Charges and Field', 'Introduction_to_Electric_Charges_and_Fields.png', 'enable', '2021-05-13 12:36:59', '2021-05-21 12:54:00'),
(10, 3, 5, 7, 'dasdasd', 'download.jpg', 'enable', '2021-05-21 10:42:52', '2021-05-21 12:54:24'),
(11, 4, 8, 8, 'Introduction', 'app_logo.png', 'enable', '2021-05-22 13:37:41', '2021-05-31 05:25:58'),
(12, 4, 8, 8, 'Princicpal of Gravity and Law', 'praying-hands-prayer-child-clip-art-pray-png-download-830830-praying-child-png-900_840.jpg', 'enable', '2021-05-31 05:26:47', '2021-05-31 05:55:38'),
(13, 4, 8, 8, 'Fundamentals', '96453-makar-sankranti-leaf-line-plant-for-happy-countdown.png', 'enable', '2021-05-31 05:27:06', '2021-05-31 05:27:06'),
(14, 5, 10, 9, 'Enhancing Qualitative Characteristics', 'qualitative-characteristics-of-accounting-information.png', 'enable', '2021-06-01 09:48:17', '2021-06-01 09:48:17'),
(15, 5, 11, 10, 'Macroeconomics', '4E0CD0C3-BCBD-4F95-900E-84848A65661E.jpg', 'enable', '2021-06-01 10:23:32', '2021-06-01 10:23:32'),
(16, 5, 12, 11, 'Division of Work', 'business-studiesfayols-pprinciples-11-638.jpg', 'enable', '2021-06-01 10:33:44', '2021-06-01 10:33:44'),
(17, 6, 13, 12, 'Hindu Rashtra', 'Hindu1.jpg', 'enable', '2021-06-01 10:52:13', '2021-06-01 10:52:13'),
(18, 6, 14, 14, 'Resources', 'natural-resources-set-land-water-260nw-1443669902.webp', 'enable', '2021-06-01 11:16:58', '2021-06-01 11:16:58'),
(19, 6, 15, 15, 'Democracy', 'democracy.jpg', 'enable', '2021-06-01 11:31:06', '2021-06-01 11:31:06'),
(20, 6, 16, 16, 'Hinduism', 'sddefault-1-e1610377333472.jpg', 'enable', '2021-06-01 11:53:43', '2021-06-01 11:53:43'),
(21, 5, 10, 9, 'Final accounts of Professionals', 'Final-Accounts-Feature-Image-1.png', 'enable', '2021-06-01 12:05:08', '2021-06-01 12:05:08'),
(22, 5, 10, 13, 'Self-Balancing Ledgers', '51.jpg', 'enable', '2021-06-01 12:07:38', '2021-06-01 12:07:38'),
(23, 5, 10, 9, 'Classification of Income and Expenditure', 'financial-statement-classification-of-capital-and-revenue-expenditure-and-receipts-3-638.jpg', 'enable', '2021-06-01 12:12:26', '2021-06-01 12:12:26'),
(24, 5, 10, 9, 'Branches of Accounting', 'branches-of-accounting-in-hindi-1.jpg', 'enable', '2021-06-01 12:14:08', '2021-06-01 12:14:08'),
(25, 6, 13, 12, 'The Idea of Satyagraha', 'download_(2).jpg', 'enable', '2021-06-02 05:07:33', '2021-06-02 05:07:33'),
(26, 6, 13, 12, 'Swaraj in the Plantations', 'mqdefault.jpg', 'enable', '2021-06-02 05:09:05', '2021-06-02 05:09:05'),
(27, 6, 13, 12, 'Salt March and the Civil Disobedience Movement', 'Civil-Disobedience-Movement-1.png', 'enable', '2021-06-02 05:11:10', '2021-06-02 05:11:10');

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
  `add_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `add_by`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$okZk5rno.M4bTvNJK1XC2.hhZEBwwrFvZMPIG3GkbJUtHVU0Cmdt6', NULL, NULL, '2021-04-14 08:24:53', '2021-04-14 08:24:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_sessions`
--
ALTER TABLE `live_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `question_banks`
--
ALTER TABLE `question_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_sessions`
--
ALTER TABLE `live_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `question_banks`
--
ALTER TABLE `question_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
