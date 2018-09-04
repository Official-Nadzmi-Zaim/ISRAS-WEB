-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 07:00 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isras`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `addr_1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr_2` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `company_id`, `addr_1`, `addr_2`, `city`, `postcode`, `country`, `created_at`, `updated_at`) VALUES
(1, 1, '2746 DuBuque Course Suite 072\nPort Alexandrochester, SD 86913-9585', '', 'Port Jeremieland', '27020', 'Puerto Rico', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(2, 2, '28218 Kozey Grove\nNew Johathan, FL 88622-5400', '', 'Fadelland', '48237-7622', 'Cyprus', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(3, 3, '2997 Windler Key\nAlexaneside, MD 39649-0732', '', 'New Lonnie', '88666-1835', 'Saint Vincent and the Grenadines', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(4, 4, '997 Helga Divide\nEast Waldoton, SD 14954-6869', '', 'West Mertietown', '15550', 'Bahamas', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(5, 5, '302 Lindgren Creek\nMcClureland, NV 53517-2404', '', 'Jayceeburgh', '88243', 'French Southern Territories', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(6, 6, '93766 Witting Pass\nMurlstad, ME 63161', '', 'Auerside', '46706', 'Yemen', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(7, 7, '808 Oral Squares Suite 768\nEast Karson, NE 19116', '', 'Tremblayfort', '60767-4323', 'Falkland Islands (Malvinas)', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(8, 8, '270 Tessie Alley\nLake Arnulfo, SD 36692-8761', '', 'Jaskolskifurt', '28983', 'Heard Island and McDonald Islands', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(9, 9, '226 Lueilwitz Pines Apt. 168\nPort Zaneborough, NH 70248-5990', '', 'Bashirianfurt', '95984-7992', 'Belize', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(10, 10, '4465 Kuhic Ville\nWest Danatown, LA 00412', '', 'Mathewstad', '55170-6699', 'Guernsey', '2018-08-20 20:59:15', '2018-08-20 20:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `entity_id` bigint(20) NOT NULL,
  `staff_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_id`, `entity_id`, `staff_id`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'cjZdW6J1FfvzSOv', 'Dr. Blair Gleason', '2018-08-20 20:59:49', '2018-08-20 20:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin_assessment_question`
--

CREATE TABLE `admin_assessment_question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `assessment_question_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_assessment_question`
--

INSERT INTO `admin_assessment_question` (`id`, `admin_id`, `assessment_question_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(2, 2, 2, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(3, 3, 3, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(4, 4, 4, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(5, 5, 5, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(6, 6, 6, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(7, 7, 7, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(8, 8, 8, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(9, 9, 9, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(10, 10, 10, '2018-08-20 20:59:19', '2018-08-20 20:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_blog_contents`
--

CREATE TABLE `admin_blog_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `blog_content_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_blog_contents`
--

INSERT INTO `admin_blog_contents` (`id`, `admin_id`, `blog_content_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(2, 2, 2, '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(3, 3, 3, '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(4, 4, 4, '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(5, 5, 5, '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(6, 6, 6, '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(7, 7, 7, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(8, 8, 8, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(9, 9, 9, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(10, 10, 10, '2018-08-20 20:59:17', '2018-08-20 20:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_feedback_questions`
--

CREATE TABLE `admin_feedback_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `feedback_question_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_feedback_questions`
--

INSERT INTO `admin_feedback_questions` (`id`, `admin_id`, `feedback_question_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(2, 2, 2, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(3, 3, 3, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(4, 4, 4, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(5, 5, 5, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(6, 6, 6, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(7, 7, 7, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(8, 8, 8, '2018-08-20 20:59:17', '2018-08-20 20:59:17'),
(9, 9, 9, '2018-08-20 20:59:18', '2018-08-20 20:59:18'),
(10, 10, 10, '2018-08-20 20:59:18', '2018-08-20 20:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_library_contents`
--

CREATE TABLE `admin_library_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `library_content_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_library_contents`
--

INSERT INTO `admin_library_contents` (`id`, `admin_id`, `library_content_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(2, 2, 2, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(3, 3, 3, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(4, 4, 4, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(5, 5, 5, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(6, 6, 6, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(7, 7, 7, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(8, 8, 8, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(9, 9, 9, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(10, 10, 10, '2018-08-20 20:59:19', '2018-08-20 20:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `assessment_question_id` bigint(20) NOT NULL,
  `assessment_result_id` bigint(20) NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assessment_questions`
--

CREATE TABLE `assessment_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statement` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` bigint(20) NOT NULL,
  `category` bigint(20) NOT NULL,
  `key_area` bigint(20) NOT NULL,
  `title` bigint(20) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assessment_questions`
--

INSERT INTO `assessment_questions` (`id`, `statement`, `type`, `category`, `key_area`, `title`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Donate to hardcore poor Muslims', 1, 1, 1, 1, 1, '2018-08-20 20:59:19', '2018-08-20 20:59:19'),
(2, 'Donate to victims of environmental disasters', 1, 1, 1, 1, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(3, 'Donate to the less fortunate (e.g. victims of crimes, accidents, etc.)', 2, 1, 1, 1, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(4, 'Engage with the community to understand their needs and expectations', 2, 1, 1, 2, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(5, 'Undertake activities related to community safety and security', 2, 1, 1, 2, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(6, 'Organise and/or sponsor sports programmes or events', 2, 1, 1, 2, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(7, 'Organise Family Days and social gatherings', 2, 1, 1, 2, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(8, 'Organize community activities (e.g. Qurban activities, Public talks, Iftar, Blood donations, Health/Medical screening programmes)', 2, 1, 1, 2, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(9, 'Collaborate with NGOs and community to promote sustainable business practices', 2, 1, 1, 2, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(10, 'Construct and restore public premises (e.g amenities, public area, parks and playgrounds etc)', 2, 1, 1, 2, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(11, 'Promote, preserve and conserve Islamic culture and heritage', 2, 1, 1, 3, 1, '2018-08-20 20:59:20', '2018-08-20 20:59:20'),
(12, 'Sponsor and/or promote inter-faith dialogues (respect other religions and indigenous beliefs)', 2, 1, 1, 3, 1, '2018-08-20 20:59:21', '2018-08-20 20:59:21'),
(13, 'Sponsor culture-related community functions', 2, 1, 1, 3, 1, '2018-08-20 20:59:21', '2018-08-20 20:59:21'),
(14, 'Contribute to NGOs involved in assisting the community and the needy', 2, 1, 1, 4, 1, '2018-08-20 20:59:21', '2018-08-20 20:59:21'),
(15, 'Initiate religious functions and activities (e.g. Tilawah, TV programmes, etc.)', 2, 1, 1, 5, 1, '2018-08-20 20:59:21', '2018-08-20 20:59:21'),
(16, 'Conduct and/or sponsor Fardhu ain classes', 2, 1, 1, 5, 1, '2018-08-20 20:59:21', '2018-08-20 20:59:21'),
(17, 'Donate to suraus/mosques/madrasahs/religious schools', 2, 1, 1, 5, 1, '2018-08-20 20:59:21', '2018-08-20 20:59:21'),
(18, 'Participate in promote and/or sponsor Love the Earth Campaign', 2, 1, 2, 6, 1, '2018-08-20 20:59:21', '2018-08-20 20:59:21'),
(19, 'Conduct Entrepreneurship workshops (e.g for graduates, single mothers and the needy)', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(20, 'Provide scholarships in critical areas of expertise for Muslims.', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(21, 'Create awareness on new Islamic products and instruments (e.g. takaful, sukuk, ar-rahnu, Islamic wealth planning etc.)', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(22, 'Create awareness against unhealthy activities (e.g. gambling, drugs, alcohol, illegal investments etc.)', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(23, 'Conduct educational programmes (e.g. training/seminar/workshop, provide tuition, motivational talk, tazkirah; receive educational visits, etc.)', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(24, 'Donate to and/or sponsor educational institutions, educational related facilities, products and activities (e.g. intellect facilities, computers for schools, mobile libraries etc.)', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(25, 'Provide education-related financial assistance (e.g. exam fees, tuition fees, scholarships etc.)', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(26, 'Provide internship training programmes for college/university students', 2, 1, 2, 6, 1, '2018-08-20 20:59:22', '2018-08-20 20:59:22'),
(27, 'Facilitate financial aid for the poor (e.g. micro financing, soft loans etc.)', 2, 1, 3, 7, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(28, 'Allocate assets as wakaf (e.g cash, land, building etc.)', 2, 1, 3, 7, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(29, 'Assist new Muslim entrepreneurs', 2, 1, 3, 7, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(30, 'Create job opportunities for the handicapped and disabled', 2, 1, 3, 8, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(31, 'Create job opportunities for unemployed youths/ poor/needy', 2, 1, 3, 8, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(32, 'Facilitate and/or sponsor special health-care programmes for the needy, hardcore poor (e.g free rural medi-care services, mobile hospitals, flying doctors)', 2, 1, 4, 9, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(33, 'Conduct awareness programmes on health matters', 2, 1, 4, 9, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(34, 'Provide health related financial assistance to the needy (e.g. surgery fees, hospitalization fees, continuous treatment)', 2, 1, 4, 9, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(35, 'Conduct tazkirah session on fardhu ain', 1, 2, 5, 10, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(36, 'Conduct tazkirah session on fardhu kifayah', 2, 2, 5, 10, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(37, 'Perform daily morning doa', 1, 2, 5, 10, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(38, 'Organise motivation- and stress- related management programmes (e.g counselling services, staff rejuvenation programmes, study trips etc.)', 2, 2, 5, 10, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(39, 'Conduct life essential skills programmes (e.g. health talks, parenting, financial management etc.)', 1, 2, 5, 11, 1, '2018-08-20 20:59:23', '2018-08-20 20:59:23'),
(40, 'Provide job-related training programmes (e.g. job competencies seminars, multi-skilling programmes, IT related training etc.)', 1, 2, 5, 11, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(41, 'Provide Shariah reference point', 2, 2, 5, 11, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(42, 'Organise team building initiative', 1, 2, 5, 12, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(43, 'Necessitate external apprenticeship programmes', 1, 2, 5, 12, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(44, 'Facilitate career planning development programmes (e.g work-related qualification; structured career path, succession planning, job enrichment programmes etc.)', 2, 2, 5, 12, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(45, 'Provide a safe working environment (e.g. first-aid kits; fire extinguishers, safety evacuation zones etc.)', 1, 2, 6, 13, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(46, 'Provide free medical check-up for employees', 2, 2, 6, 13, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(47, 'Conduct regular (quarterly) audit and review of Organizational Health and Safety Regulation', 2, 2, 6, 13, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(48, 'Set up special health and safety committee/unit', 2, 2, 6, 13, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(49, 'Establish health and safety related policy', 2, 2, 6, 13, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(50, 'Establish employers – employees charter', 2, 2, 7, 14, 1, '2018-08-20 20:59:24', '2018-08-20 20:59:24'),
(51, 'Practice equal opportunity among employees (based on gender, religion, race, qualification etc.)', 2, 2, 7, 14, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(52, 'Pay Remuneration – On-Time', 1, 2, 8, 15, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(53, 'Provide medical benefits inclusive of immediate family members', 1, 2, 8, 15, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(54, 'Provide fringe benefits (e.g takaful protection; payment of holiday benefits, travelling allowances, housing allowances etc.)', 2, 2, 8, 15, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(55, 'Subsidise umrah/haj expenses for employees and family members', 2, 2, 8, 15, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(56, 'Provide maternity leave', 1, 2, 8, 15, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(57, 'Provide special leave (e.g to take care of elderly parents, sick children, paternity leave)', 1, 2, 8, 15, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(58, 'Provide surau / prayer room', 1, 2, 8, 16, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(59, 'Provide conducive surau/prayer room (e.g. air-conditioning, carpets, ablution area etc.)', 2, 2, 8, 16, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(60, 'Provide facilities to improve working environment (e.g library, nursery/child care centre etc.)', 2, 2, 8, 16, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(61, 'Provide devices to improve working environment (e.g WIFI access, i-pads, hand phones etc.)', 2, 2, 8, 16, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(62, 'Allow flexible working hours', 2, 2, 8, 16, 1, '2018-08-20 20:59:25', '2018-08-20 20:59:25'),
(63, 'Encourage employee involvement in volunteering programs', 1, 2, 8, 17, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(64, 'Allow replacement leave for volunteerism work', 1, 2, 8, 17, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(65, 'Ensure hygienic practices in the work environment', 1, 2, 8, 18, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(66, 'Conduct health and/or safety awareness programs', 2, 2, 8, 18, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(67, 'Provide supplementary equipment/devices/materials for healthy working environment (e.g ionizer, sanitizer etc)', 2, 2, 8, 18, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(68, 'Offer attractive incentives for excellent employees (e.g. bonuses, travel packages, shares etc.)', 2, 2, 9, 19, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(69, 'Offer reward for employees innovativeness and creativeness', 2, 2, 9, 20, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(70, 'Provide loyalty packages (e.g ESOS, long service awards)', 1, 2, 9, 21, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(71, 'Participate in Islamic-related celebrations (e.g Awal Muharam, Maulidur Rasul, etc )', 2, 2, 10, 22, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(72, 'Assure transparency of employees\\’ rights', 1, 2, 10, 22, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(73, 'Organise employee-employer special activities (e.g. dinner, family day, sports competition)', 2, 2, 10, 22, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(74, 'Encourage open door policy (access to appropriate channel of communication for feedback and grievance procedure)', 2, 2, 10, 23, 1, '2018-08-20 20:59:26', '2018-08-20 20:59:26'),
(75, 'Establish whistle-blowing policies and procedures', 2, 2, 10, 23, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(76, 'Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 11, 24, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(77, 'Ensure efficient consumption of energy and water', 1, 3, 12, 25, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(78, 'Tree-planting (or replanting) programmes and initiatives (within business surrounding)', 1, 3, 12, 26, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(79, 'Carry out environmental conservation activities (e.g. river/beach/park clean-up, tree-planting/replanting)', 2, 3, 12, 26, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(80, 'Practice sustainable waste management', 2, 3, 12, 26, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(81, 'Use cleaner or alternative technology in managing business operation (e.g. solar, wind, wave)', 2, 3, 12, 26, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(82, 'Encourage the deployment of eco-friendly corporate fleet vehicles', 2, 3, 12, 26, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(83, 'Reduce greenhouse gas emissions through green initiatives (e.g. installation of energy-saving lift systems, re-engineered ventilation and air-conditioning systems, efficient energy-saving lightings)', 2, 3, 12, 26, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(84, 'Involvement in environmentally oriented R&D programmes (e.g. research on the management of and improvements to company’s products, by-products, production wastes etc.)', 2, 3, 12, 27, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(85, 'Develop networking with ‘green’ stakeholder groups (e.g. professional bodies, NGOs)', 2, 3, 12, 28, 1, '2018-08-20 20:59:27', '2018-08-20 20:59:27'),
(86, 'Engage in community outreach programmes related to the environmental management operations of the company', 2, 3, 12, 28, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(87, 'Benchmark best practices on environmental management and practice (e.g. Global Reporting Initiatives, ACCA-Malaysian environmental guidelines, corporate plans and policies, peer practices)', 2, 3, 12, 29, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(88, 'Establish an environmental policy geared towards reducing adverse impacts on the environment (e.g. guidelines on use of green resources, green practices, zero waste)', 2, 3, 12, 30, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(89, 'Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 13, 31, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(90, 'Promote environmental-related practices among employees (carpooling, use of public transportation, recycling, saving water & energy etc.)', 2, 3, 13, 31, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(91, 'Conduct IT-related meeting [e.g. tele and video conferencing (board conference), webinar (web seminar)]', 2, 3, 13, 32, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(92, 'Offer safe/green products and/or services (e.g. green credit card, green packaging, no animal testing)', 1, 3, 14, 33, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(93, 'Obtain related products and/or services certifications and/or awards', 2, 3, 14, 33, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(94, 'Enhance e-marketing channels, web-marketing', 2, 3, 14, 34, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(95, 'Conduct and/or sponsor activities to conserve biological diversity (e.g. protect endangered animal and plants)', 2, 3, 15, 35, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(96, 'Incorporate ibadah concept in environmental programmes for employees (e.g. workshops etc.)', 1, 3, 15, 36, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(97, 'Incorporate Islamic principles and values in all market-related policies', 1, 4, 16, 37, 1, '2018-08-20 20:59:28', '2018-08-20 20:59:28'),
(98, 'Ensure products and services are halal and safe (e.g. be vetted by Shariah Council Board, SIRIM etc.)', 1, 4, 17, 38, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(99, 'Obtain related certifications (e.g. ISO standards, halal certificates etc.)', 1, 4, 17, 38, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(100, 'Ensure Shariah compliant supply chain', 1, 4, 17, 38, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(101, 'Adopt adequate return policy (time, cost and delivery)', 2, 4, 17, 38, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(102, 'Ensure products are innovative and convenient to the customers', 2, 4, 17, 38, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(103, 'Create efficient, effective, clean, innovative, safe working environment within Shariah compliance process', 1, 4, 17, 39, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(104, 'Promote fair and ethical employment practices (e.g. no child labour, minimum wages, indigenous rights, no forced and compulsory labour etc.)', 2, 4, 17, 39, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(105, 'Ensure advertisement concepts are Shariah compliant (e.g. storyline, models, accurate information, suitable language, moderate spending etc.)', 1, 4, 18, 40, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(106, 'Ensure accurate and precise advertisement (e.g. product description, product safety, product usage etc.)', 1, 4, 18, 40, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(107, 'Provide full disclosure/ transparent information (e.g. product description, usage, ingredients etc.)', 1, 4, 18, 40, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(108, 'Provide wider coverage through the use of multiple mediums', 2, 4, 18, 40, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(109, 'Promote affordable pricing to ensure fair distribution to all market segments', 2, 4, 18, 41, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(110, 'Obtain proper authorisation/consent from client or customer before releasing information', 2, 4, 18, 42, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(111, 'Offer additional benefits to customers (e.g. loyalty programmes, rewards etc.)', 2, 4, 18, 43, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(112, 'Obtain product and/or services related feedbacks from customers (e.g. interviews, surveys, dialogues, websites, etc.)', 2, 4, 19, 44, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(113, 'Engage in Islamic related forum/dialogue with stakeholders', 2, 4, 19, 44, 1, '2018-08-20 20:59:29', '2018-08-20 20:59:29'),
(114, 'Conduct social engagement with customers (e.g. festive gatherings etc.)', 2, 4, 19, 44, 1, '2018-08-20 20:59:30', '2018-08-20 20:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `assessment_results`
--

CREATE TABLE `assessment_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assessment_results`
--

INSERT INTO `assessment_results` (`id`, `result`, `created_at`, `updated_at`) VALUES
(1, 64, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(2, 52, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(3, 2, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(4, 98, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(5, 1, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(6, 87, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(7, 99, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(8, 19, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(9, 45, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(10, 89, '2018-08-20 20:59:30', '2018-08-20 20:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `blog_contents`
--

CREATE TABLE `blog_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_contents`
--

INSERT INTO `blog_contents` (`id`, `title`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Mikayla Daniel II', 'Ut id veritatis beatae et enim. Debitis recusandae voluptatum pariatur odio. Rerum quo nihil blanditiis ea explicabo eos optio.', 1, '2018-08-20 20:59:12', '2018-08-20 20:59:12'),
(2, 'Jalon Mayer', 'Nisi et deserunt quae fugiat quo aspernatur quasi animi. Voluptatem consequatur blanditiis reprehenderit alias ut nisi vero. Eligendi non rerum sapiente facere earum.', 1, '2018-08-20 20:59:12', '2018-08-20 20:59:12'),
(3, 'Gladys Doyle', 'Cupiditate ea nisi ad aliquam qui eius quibusdam. Dolorem enim distinctio at iure quia odio. Accusamus quod voluptatum animi eaque similique ut. Expedita minus qui et harum corrupti porro eius.', 1, '2018-08-20 20:59:12', '2018-08-20 20:59:12'),
(4, 'Nya Frami', 'Laboriosam non molestiae maiores architecto. Reiciendis veritatis quo praesentium tempora. Porro dicta aliquam ut dolores.', 1, '2018-08-20 20:59:12', '2018-08-20 20:59:12'),
(5, 'Terrill Davis III', 'Aut sint ea illo quibusdam nihil. Quis accusamus molestiae quod nulla soluta. Dolor architecto voluptate ex. Et qui similique architecto suscipit perferendis asperiores soluta.', 1, '2018-08-20 20:59:12', '2018-08-20 20:59:12'),
(6, 'Kasandra O\'Connell', 'Totam quisquam officiis nobis id quos consectetur. Culpa consectetur sapiente et dolorum. Omnis porro nihil ut voluptatem harum rerum. Culpa quas est et amet atque qui minima.', 1, '2018-08-20 20:59:13', '2018-08-20 20:59:13'),
(7, 'Nona Halvorson', 'Est enim asperiores magni id aliquid neque eligendi. Facere molestiae sapiente consequatur autem. Architecto est qui eius officiis expedita nam. Laborum qui tempore sunt quia temporibus.', 1, '2018-08-20 20:59:13', '2018-08-20 20:59:13'),
(8, 'Sanford Wunsch', 'Veritatis quae enim ex similique autem et iusto. Voluptatem voluptatem et autem et enim vero sit et.', 1, '2018-08-20 20:59:13', '2018-08-20 20:59:13'),
(9, 'Dr. Tanya Reinger Jr.', 'Tempora dicta fugit quas eius ea nobis consequatur. Ad accusantium et est sint similique dolorum odio. Sint temporibus rerum esse magnam ut molestiae.', 1, '2018-08-20 20:59:13', '2018-08-20 20:59:13'),
(10, 'Amelie Crooks', 'Totam accusamus et odit rem dolor quod. Ratione sapiente unde et ut molestias sunt ut vel. Ipsam dolore sunt deleniti deleniti a. Rerum incidunt repudiandae aliquid.', 1, '2018-08-20 20:59:13', '2018-08-20 20:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `ref_no`, `created_at`, `updated_at`) VALUES
(1, 'Gleason PLC', 'error996229', '2018-08-20 20:59:13', '2018-08-20 20:59:13'),
(2, 'Hoeger-Carroll', 'et995563', '2018-08-20 20:59:13', '2018-08-20 20:59:13'),
(3, 'Dicki-Bergstrom', 'commodi289', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(4, 'Sanford, Jacobs and Brown', 'neque50333003', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(5, 'Carroll-Waters', 'doloribus1', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(6, 'Padberg, Hintz and Champlin', 'iste646029', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(7, 'Gorczany, Wiza and Blanda', 'magnam6', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(8, 'Hickle, Hartmann and Kuphal', 'omnis99562188', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(9, 'Runte-Hansen', 'nesciunt52', '2018-08-20 20:59:14', '2018-08-20 20:59:14'),
(10, 'Ryan-Brown', 'ut19208', '2018-08-20 20:59:14', '2018-08-20 20:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE `entities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_type` bigint(20) NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`id`, `entity_type`, `email`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', '$2y$10$T05Wdtk2TVok1A3vJ.ro5OLnz.dVO4M3WowNeJ3oifXCAX2ReH.LC', 1, NULL, '2018-08-20 20:59:48', '2018-08-20 20:59:48'),
(2, 2, 'user@gmail.com', '$2y$10$L2sKMorGkawb2YuY8FQO7.zgSzHVytqsQv82nuAkMYf5ttJ2QK1Gy', 1, NULL, '2018-08-20 20:59:48', '2018-08-20 20:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `feedback_question_id` bigint(20) NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `user_id`, `feedback_question_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 92, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(2, 2, 2, 40, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(3, 3, 3, 59, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(4, 4, 4, 85, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(5, 5, 5, 65, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(6, 6, 6, 52, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(7, 7, 7, 14, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(8, 8, 8, 92, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(9, 9, 9, 53, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(10, 10, 10, 73, '2018-08-20 20:59:32', '2018-08-20 20:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_questions`
--

CREATE TABLE `feedback_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_questions`
--

INSERT INTO `feedback_questions` (`id`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Et odit enim in eos aut dolorem cum fugiat.', 1, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(2, 'Doloribus beatae qui corporis facere odio.', 1, '2018-08-20 20:59:30', '2018-08-20 20:59:30'),
(3, 'Amet autem sint non voluptatem ea enim et.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(4, 'Quam et ut nisi ducimus libero.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(5, 'Ut illo in officia amet.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(6, 'Quo accusamus et corporis nihil quos nostrum et.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(7, 'Tempore et aspernatur amet ratione.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(8, 'Sint occaecati ullam esse est explicabo.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(9, 'Temporibus ea magnam veritatis esse a.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31'),
(10, 'Laudantium a ratione iure.', 1, '2018-08-20 20:59:31', '2018-08-20 20:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `library_contents`
--

CREATE TABLE `library_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication` bigint(20) NOT NULL,
  `author` bigint(20) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_contents`
--

INSERT INTO `library_contents` (`id`, `title`, `description`, `src`, `publication`, `author`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Earum fuga.', 'Quasi amet aliquam consequatur qui.', 'http://oberbrunner.com/itaque-consectetur-et-a-eos', 1, 1, 1, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(2, 'Vitae possimus.', 'Rerum sunt a voluptatem nisi rem.', 'http://okeefe.biz/beatae-est-soluta-ipsam-iusto', 2, 2, 1, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(3, 'Similique ut.', 'Ea rerum veniam impedit sed et iure ipsum et.', 'http://www.prohaska.org/earum-error-voluptatum-minus-veniam-quo.html', 3, 3, 1, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(4, 'Provident quisquam.', 'Iste voluptas deserunt quia commodi totam cum id ipsa.', 'http://www.greenholt.com/autem-vel-debitis-voluptas-et-velit-consectetur', 4, 4, 1, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(5, 'Accusamus occaecati.', 'Consequuntur iusto sit labore rerum consequatur nihil.', 'http://www.stiedemann.biz/', 5, 5, 1, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(6, 'Aut ut.', 'Aperiam omnis harum debitis et qui et aut.', 'http://schiller.com/enim-iure-aut-dolor-reiciendis-enim', 6, 6, 1, '2018-08-20 20:59:32', '2018-08-20 20:59:32'),
(7, 'Consequatur rerum ea.', 'Laudantium ullam et hic unde fugit deserunt dolorem laborum.', 'http://herman.com/ipsa-ipsa-excepturi-delectus-ipsum', 7, 7, 1, '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(8, 'Voluptas minus.', 'Omnis tempora sit exercitationem officiis consectetur natus doloremque.', 'http://cole.com/doloribus-error-laboriosam-veritatis-blanditiis-cupiditate-unde', 8, 8, 1, '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(9, 'Eum cupiditate.', 'Veritatis iusto aliquam suscipit iure explicabo aspernatur.', 'http://www.streich.com/modi-sequi-aut-reprehenderit-et-illum-ea-dolor', 9, 9, 1, '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(10, 'Ea sed.', 'Sint sed sapiente illo dolores voluptatem eum distinctio.', 'http://www.johns.biz/commodi-sint-vero-veniam-hic-excepturi', 10, 10, 1, '2018-08-20 20:59:33', '2018-08-20 20:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_assessment_categories`
--

CREATE TABLE `lookup_assessment_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_assessment_categories`
--

INSERT INTO `lookup_assessment_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'COMMUNITY', '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(2, 'WORKPLACE', '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(3, 'ENVIRONMENTAL', '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(4, 'MARKETPLACE', '2018-08-20 20:59:33', '2018-08-20 20:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_assessment_key_areas`
--

CREATE TABLE `lookup_assessment_key_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lookup_assessment_title_id` bigint(20) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_assessment_key_areas`
--

INSERT INTO `lookup_assessment_key_areas` (`id`, `lookup_assessment_title_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 0, 'SOCIAL DEVELOPMENT', '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(2, 1, 'EDUCATION AND AWARENESS', '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(3, 2, 'ECONOMIC DEVELOPMENT', '2018-08-20 20:59:33', '2018-08-20 20:59:33'),
(4, 3, 'HEALTH', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(5, 4, 'TRAINING AND EDUCATION', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(6, 5, 'OCCUPATIONAL SAFETY AND HEALTH ADMINISTRATION (OSHA)', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(7, 6, 'EQUITABLE OPPORTUNITY', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(8, 7, 'EMPLOYMENT', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(9, 8, 'AWARDS AND RECOGNITION', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(10, 9, 'LABOUR AND MANAGEMENT RELATIONS', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(11, 10, 'ENVIRONMENTAL RELATED POLICY', '2018-08-20 20:59:34', '2018-08-20 20:59:34'),
(12, 11, 'CLIMATE CHANGE MITIGATION AND ADAPTATION', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(13, 12, 'PREVENTION OF POLLUTION', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(14, 13, 'GREEN PRODUCTS AND SERVICES', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(15, 14, 'PROTECTION AND RESTORATION OF THE NATURAL ENVIRONMENT', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(16, 15, 'MARKET RELATED POLICIES', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(17, 16, 'PRODUCT AND SERVICES', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(18, 17, 'MARKETING', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(19, 18, 'STAKEHOLDER ENGAGEMENT', '2018-08-20 20:59:35', '2018-08-20 20:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_assessment_titles`
--

CREATE TABLE `lookup_assessment_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lookup_assessment_category_id` bigint(20) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_assessment_titles`
--

INSERT INTO `lookup_assessment_titles` (`id`, `lookup_assessment_category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 0, 'Contribution for the needy', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(2, 1, 'Community involvement', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(3, 2, 'Culture', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(4, 3, 'Contribution to the eligble recipients', '2018-08-20 20:59:35', '2018-08-20 20:59:35'),
(5, 4, 'Promoting Islamic values', '2018-08-20 20:59:36', '2018-08-20 20:59:36'),
(6, 5, 'Education', '2018-08-20 20:59:36', '2018-08-20 20:59:36'),
(7, 6, 'Economic development', '2018-08-20 20:59:36', '2018-08-20 20:59:36'),
(8, 7, 'Employment opportunity', '2018-08-20 20:59:36', '2018-08-20 20:59:36'),
(9, 8, 'Health programmes for the public and the needy', '2018-08-20 20:59:36', '2018-08-20 20:59:36'),
(10, 9, 'Spiritual and Motivational Enhancement', '2018-08-20 20:59:36', '2018-08-20 20:59:36'),
(11, 10, 'Skill Enhancement', '2018-08-20 20:59:36', '2018-08-20 20:59:36'),
(12, 11, 'Self-Development', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(13, 12, 'Health and Safety Requirements', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(14, 13, 'Diversity of Workforce', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(15, 14, 'Remuneration and Benefits', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(16, 15, 'Facilities and Working Conditions', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(17, 16, 'Employee Volunteerism', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(18, 17, 'Healthy Working Environment', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(19, 18, 'Incentives and Bonuses', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(20, 19, 'Innovative Ideas and Awards', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(21, 20, 'Loyalty Packages', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(22, 21, 'Employees-Management Engagement', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(23, 22, 'Communication', '2018-08-20 20:59:37', '2018-08-20 20:59:37'),
(24, 23, 'Policy Formulation', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(25, 24, 'Energy Consumption', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(26, 25, 'Sustainable Initiatives', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(27, 26, 'Research and Development Programme', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(28, 27, 'Stakeholder Engagement', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(29, 28, 'Continuous Monitoring Initiatives', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(30, 29, 'Climate Change Policy', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(31, 30, 'Prevention Initiatives', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(32, 31, 'Virtual Communication', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(33, 32, 'Products', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(34, 33, 'Virtual Marketing', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(35, 34, 'Environmental Preservation', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(36, 35, 'Education and Training', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(37, 36, 'Policy Formulation', '2018-08-20 20:59:38', '2018-08-20 20:59:38'),
(38, 37, 'Shariah Compliant Products', '2018-08-20 20:59:39', '2018-08-20 20:59:39'),
(39, 38, 'Fair and Ethical Employment Practices', '2018-08-20 20:59:39', '2018-08-20 20:59:39'),
(40, 39, 'Advertisement', '2018-08-20 20:59:39', '2018-08-20 20:59:39'),
(41, 40, 'Pricing', '2018-08-20 20:59:39', '2018-08-20 20:59:39'),
(42, 41, 'Customers\' Confidentiality Policy', '2018-08-20 20:59:39', '2018-08-20 20:59:39'),
(43, 42, 'Customer Appreciation', '2018-08-20 20:59:39', '2018-08-20 20:59:39'),
(44, 43, '', '2018-08-20 20:59:39', '2018-08-20 20:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_assessment_types`
--

CREATE TABLE `lookup_assessment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_assessment_types`
--

INSERT INTO `lookup_assessment_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Vital', '2018-08-20 20:59:39', '2018-08-20 20:59:39'),
(2, 'Recommended', '2018-08-20 20:59:39', '2018-08-20 20:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_authors`
--

CREATE TABLE `lookup_authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_authors`
--

INSERT INTO `lookup_authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Vito Schultz', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(2, 'Verla Donnelly', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(3, 'Lyla Mohr', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(4, 'Haley Kuvalis', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(5, 'Hayden Wintheiser', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(6, 'Jack Schowalter', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(7, 'Diamond Hamill', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(8, 'Prof. Gideon Cruickshank PhD', '2018-08-20 20:59:40', '2018-08-20 20:59:40'),
(9, 'Estella Wintheiser', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(10, 'Ms. Kaylin Batz', '2018-08-20 20:59:41', '2018-08-20 20:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_banks`
--

CREATE TABLE `lookup_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_banks`
--

INSERT INTO `lookup_banks` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bank Islam', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(2, 'Maybank', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(3, 'Bank Rakyat', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(4, 'Bank Simpanan Nasional', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(5, 'RHB Bank', '2018-08-20 20:59:41', '2018-08-20 20:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_countries`
--

CREATE TABLE `lookup_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_countries`
--

INSERT INTO `lookup_countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lao People\'s Democratic Republic', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(2, 'Ukraine', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(3, 'Congo', '2018-08-20 20:59:41', '2018-08-20 20:59:41'),
(4, 'Mali', '2018-08-20 20:59:42', '2018-08-20 20:59:42'),
(5, 'Belarus', '2018-08-20 20:59:42', '2018-08-20 20:59:42'),
(6, 'Egypt', '2018-08-20 20:59:42', '2018-08-20 20:59:42'),
(7, 'Haiti', '2018-08-20 20:59:42', '2018-08-20 20:59:42'),
(8, 'Cameroon', '2018-08-20 20:59:42', '2018-08-20 20:59:42'),
(9, 'Bosnia and Herzegovina', '2018-08-20 20:59:42', '2018-08-20 20:59:42'),
(10, 'Cambodia', '2018-08-20 20:59:43', '2018-08-20 20:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_entity_types`
--

CREATE TABLE `lookup_entity_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_entity_types`
--

INSERT INTO `lookup_entity_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-08-20 20:59:46', '2018-08-20 20:59:46'),
(2, 'user', '2018-08-20 20:59:46', '2018-08-20 20:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_payment_methods`
--

CREATE TABLE `lookup_payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_payment_methods`
--

INSERT INTO `lookup_payment_methods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Visa', '2018-08-20 20:59:43', '2018-08-20 20:59:43'),
(2, 'Visa', '2018-08-20 20:59:43', '2018-08-20 20:59:43'),
(3, 'Visa', '2018-08-20 20:59:43', '2018-08-20 20:59:43'),
(4, 'Discover Card', '2018-08-20 20:59:43', '2018-08-20 20:59:43'),
(5, 'MasterCard', '2018-08-20 20:59:43', '2018-08-20 20:59:43'),
(6, 'Discover Card', '2018-08-20 20:59:44', '2018-08-20 20:59:44'),
(7, 'MasterCard', '2018-08-20 20:59:44', '2018-08-20 20:59:44'),
(8, 'Visa', '2018-08-20 20:59:44', '2018-08-20 20:59:44'),
(9, 'Visa', '2018-08-20 20:59:44', '2018-08-20 20:59:44'),
(10, 'Visa', '2018-08-20 20:59:44', '2018-08-20 20:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_publications`
--

CREATE TABLE `lookup_publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookup_publications`
--

INSERT INTO `lookup_publications` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ut', '2018-08-20 20:59:44', '2018-08-20 20:59:44'),
(2, 'et', '2018-08-20 20:59:44', '2018-08-20 20:59:44'),
(3, 'voluptate', '2018-08-20 20:59:45', '2018-08-20 20:59:45'),
(4, 'ipsam', '2018-08-20 20:59:45', '2018-08-20 20:59:45'),
(5, 'exercitationem', '2018-08-20 20:59:45', '2018-08-20 20:59:45'),
(6, 'ea', '2018-08-20 20:59:45', '2018-08-20 20:59:45'),
(7, 'quae', '2018-08-20 20:59:45', '2018-08-20 20:59:45'),
(8, 'vel', '2018-08-20 20:59:45', '2018-08-20 20:59:45'),
(9, 'vel', '2018-08-20 20:59:45', '2018-08-20 20:59:45'),
(10, 'possimus', '2018-08-20 20:59:46', '2018-08-20 20:59:46');

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
(639, '2014_10_12_000000_create_users_table', 1),
(640, '2014_10_12_100000_create_password_resets_table', 1),
(641, '2018_03_26_231209_create_pics_table', 1),
(642, '2018_03_26_232130_create_companies_table', 1),
(643, '2018_03_26_232233_create_addresses_table', 1),
(644, '2018_03_26_232336_create_payments_table', 1),
(645, '2018_03_26_232418_create_feedbacks_table', 1),
(646, '2018_03_26_232454_create_lookup_countries_table', 1),
(647, '2018_03_26_232522_create_assessments_table', 1),
(648, '2018_03_26_232602_create_assessment_results_table', 1),
(649, '2018_03_26_232722_create_lookup_payment_methods_table', 1),
(650, '2018_03_26_232751_create_lookup_banks_table', 1),
(651, '2018_03_26_232827_create_feedback_questions_table', 1),
(652, '2018_03_26_232859_create_admin_feedback_questions_table', 1),
(653, '2018_03_26_232939_create_assessment_questions_table', 1),
(654, '2018_03_26_233021_create_lookup_assessment_key_areas_table', 1),
(655, '2018_03_26_233056_create_lookup_assessment_titles_table', 1),
(656, '2018_03_26_233124_create_lookup_assessment_categories_table', 1),
(657, '2018_03_26_233212_create_lookup_assessment_types_table', 1),
(658, '2018_03_26_233300_create_admin_blog_contents_table', 1),
(659, '2018_03_26_233329_create_blog_contents_table', 1),
(660, '2018_03_26_233431_create_admin_library_contents_table', 1),
(661, '2018_03_26_233455_create_library_contents_table', 1),
(662, '2018_03_26_233527_create_lookup_publications_table', 1),
(663, '2018_03_26_233559_create_lookup_authors_table', 1),
(664, '2018_04_22_051209_create_admin_assessment_question_table', 1),
(665, '2018_05_15_022216_create_entities_table', 1),
(666, '2018_05_15_022524_create_admins_table', 1),
(667, '2018_05_15_023347_create_lookup_entity_types_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  `amount` double(15,2) NOT NULL,
  `method` bigint(20) NOT NULL,
  `bank` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `company_id`, `amount`, `method`, `bank`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3883.94, 381, 1158, '2018-08-20 20:59:46', '2018-08-20 20:59:46'),
(2, 2, 2, 8006.71, 1245, 2382, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(3, 3, 3, 1721.47, 4582, 523, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(4, 4, 4, 1086.74, 296, 2443, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(5, 5, 5, 919.53, 610, 7557, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(6, 6, 6, 7270.49, 5295, 3838, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(7, 7, 7, 8840.70, 8386, 798, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(8, 8, 8, 6163.98, 1876, 5589, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(9, 9, 9, 5756.55, 2547, 8246, '2018-08-20 20:59:47', '2018-08-20 20:59:47'),
(10, 10, 10, 2190.87, 2972, 8113, '2018-08-20 20:59:48', '2018-08-20 20:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE `pics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Adeline Harvey III', 'nhammes@example.com', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(2, 'Reyna Pfeffer III', 'ludie.mann@example.com', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(3, 'Mrs. Rebeca O\'Connell', 'mschinner@example.com', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(4, 'Frank Ward', 'flavie.herzog@example.com', '2018-08-20 20:59:15', '2018-08-20 20:59:15'),
(5, 'Rebecca Breitenberg', 'ihoeger@example.com', '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(6, 'Prof. Edward Herman V', 'selena37@example.net', '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(7, 'Jadyn Russel', 'rae.simonis@example.net', '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(8, 'Miss Maye Farrell I', 'devonte.schoen@example.org', '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(9, 'Mr. Carey Medhurst IV', 'reynolds.alex@example.com', '2018-08-20 20:59:16', '2018-08-20 20:59:16'),
(10, 'Donavon Heaney IV', 'timmothy64@example.org', '2018-08-20 20:59:16', '2018-08-20 20:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_id` bigint(20) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `entity_id`, `name`, `tel_no`, `fax_no`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mrs. Kayli Weber', '+2605769181786', '+5418696077854', '2018-08-20 20:59:49', '2018-08-20 20:59:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_assessment_question`
--
ALTER TABLE `admin_assessment_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_blog_contents`
--
ALTER TABLE `admin_blog_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_feedback_questions`
--
ALTER TABLE `admin_feedback_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_library_contents`
--
ALTER TABLE `admin_library_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment_questions`
--
ALTER TABLE `assessment_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment_results`
--
ALTER TABLE `assessment_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_contents`
--
ALTER TABLE `blog_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_questions`
--
ALTER TABLE `feedback_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_contents`
--
ALTER TABLE `library_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_assessment_categories`
--
ALTER TABLE `lookup_assessment_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_assessment_key_areas`
--
ALTER TABLE `lookup_assessment_key_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_assessment_titles`
--
ALTER TABLE `lookup_assessment_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_assessment_types`
--
ALTER TABLE `lookup_assessment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_authors`
--
ALTER TABLE `lookup_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_banks`
--
ALTER TABLE `lookup_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_countries`
--
ALTER TABLE `lookup_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_entity_types`
--
ALTER TABLE `lookup_entity_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_payment_methods`
--
ALTER TABLE `lookup_payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup_publications`
--
ALTER TABLE `lookup_publications`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_assessment_question`
--
ALTER TABLE `admin_assessment_question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin_blog_contents`
--
ALTER TABLE `admin_blog_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin_feedback_questions`
--
ALTER TABLE `admin_feedback_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin_library_contents`
--
ALTER TABLE `admin_library_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assessment_questions`
--
ALTER TABLE `assessment_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `assessment_results`
--
ALTER TABLE `assessment_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blog_contents`
--
ALTER TABLE `blog_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `entities`
--
ALTER TABLE `entities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feedback_questions`
--
ALTER TABLE `feedback_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `library_contents`
--
ALTER TABLE `library_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lookup_assessment_categories`
--
ALTER TABLE `lookup_assessment_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lookup_assessment_key_areas`
--
ALTER TABLE `lookup_assessment_key_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `lookup_assessment_titles`
--
ALTER TABLE `lookup_assessment_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `lookup_assessment_types`
--
ALTER TABLE `lookup_assessment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lookup_authors`
--
ALTER TABLE `lookup_authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lookup_banks`
--
ALTER TABLE `lookup_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lookup_countries`
--
ALTER TABLE `lookup_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lookup_entity_types`
--
ALTER TABLE `lookup_entity_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lookup_payment_methods`
--
ALTER TABLE `lookup_payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lookup_publications`
--
ALTER TABLE `lookup_publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=668;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
