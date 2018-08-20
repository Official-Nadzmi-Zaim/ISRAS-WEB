-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 07:14 AM
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
(1, 1, '44790 Mills Alley\nLake Jackmouth, MA 47464', '', 'Funkburgh', '56258', 'Canada', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(2, 2, '5477 Colt Isle Suite 692\nEast Brandi, WI 48016', '', 'South Samson', '09389-0865', 'Chad', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(3, 3, '88438 Kaylin Station\nRalphhaven, AL 06173', '', 'Spencerborough', '30547-3568', 'Kazakhstan', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(4, 4, '185 Botsford Pike\nLake Adoniston, MT 39067-0907', '', 'New Alene', '95628', 'Lao People\'s Democratic Republic', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(5, 5, '842 Legros Stream Suite 428\nLake Arneborough, NE 26301', '', 'Port Rociochester', '95656-3248', 'Singapore', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(6, 6, '895 Teagan Island\nSouth Antoinetteside, FL 98137-1725', '', 'South Coltonchester', '71865-5458', 'Guatemala', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(7, 7, '28342 Cormier Crest\nSouth Catalina, PA 11836', '', 'South Furman', '39113', 'Australia', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(8, 8, '5395 Heather Extensions\nSouth Greta, MT 51167', '', 'North Samirmouth', '80921', 'United Arab Emirates', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(9, 9, '8876 Lloyd Forges\nHuldaside, NV 95299', '', 'Quitzonport', '57760-3788', 'United States Virgin Islands', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(10, 10, '242 Tillman Oval\nCharleneville, MO 47094-2102', '', 'Beahanborough', '64310-3615', 'Belize', '2018-08-19 21:13:31', '2018-08-19 21:13:31');

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
(1, NULL, 1, 'WS3bAtgX2KFCwON', 'Avis Barton', '2018-08-19 21:13:45', '2018-08-19 21:13:45');

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
(1, 1, 1, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(2, 2, 2, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(3, 3, 3, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(4, 4, 4, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(5, 5, 5, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(6, 6, 6, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(7, 7, 7, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(8, 8, 8, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(9, 9, 9, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(10, 10, 10, '2018-08-19 21:13:33', '2018-08-19 21:13:33');

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
(1, 1, 1, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(2, 2, 2, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(3, 3, 3, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(4, 4, 4, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(5, 5, 5, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(6, 6, 6, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(7, 7, 7, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(8, 8, 8, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(9, 9, 9, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(10, 10, 10, '2018-08-19 21:13:32', '2018-08-19 21:13:32');

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
(1, 1, 1, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(2, 2, 2, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(3, 3, 3, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(4, 4, 4, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(5, 5, 5, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(6, 6, 6, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(7, 7, 7, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(8, 8, 8, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(9, 9, 9, '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(10, 10, 10, '2018-08-19 21:13:33', '2018-08-19 21:13:33');

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
(1, 1, 1, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(2, 2, 2, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(3, 3, 3, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(4, 4, 4, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(5, 5, 5, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(6, 6, 6, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(7, 7, 7, '2018-08-19 21:13:33', '2018-08-19 21:13:33'),
(8, 8, 8, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(9, 9, 9, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(10, 10, 10, '2018-08-19 21:13:34', '2018-08-19 21:13:34');

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
(1, 'Donate to hardcore poor Muslims', 1, 1, 1, 1, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(2, 'Donate to victims of environmental disasters', 1, 1, 1, 1, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(3, 'Donate to the less fortunate (e.g. victims of crimes, accidents, etc.)', 2, 1, 1, 1, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(4, 'Engage with the community to understand their needs and expectations', 2, 1, 1, 2, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(5, 'Undertake activities related to community safety and security', 2, 1, 1, 2, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(6, 'Organise and/or sponsor sports programmes or events', 2, 1, 1, 2, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(7, 'Organise Family Days and social gatherings', 2, 1, 1, 2, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(8, 'Organize community activities (e.g. Qurban activities, Public talks, Iftar, Blood donations, Health/Medical screening programmes)', 2, 1, 1, 2, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(9, 'Collaborate with NGOs and community to promote sustainable business practices', 2, 1, 1, 2, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(10, 'Construct and restore public premises (e.g amenities, public area, parks and playgrounds etc)', 2, 1, 1, 2, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(11, 'Promote, preserve and conserve Islamic culture and heritage', 2, 1, 1, 3, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(12, 'Sponsor and/or promote inter-faith dialogues (respect other religions and indigenous beliefs)', 2, 1, 1, 3, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(13, 'Sponsor culture-related community functions', 2, 1, 1, 3, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(14, 'Contribute to NGOs involved in assisting the community and the needy', 2, 1, 1, 4, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(15, 'Initiate religious functions and activities (e.g. Tilawah, TV programmes, etc.)', 2, 1, 1, 5, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(16, 'Conduct and/or sponsor Fardhu ain classes', 2, 1, 1, 5, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(17, 'Donate to suraus/mosques/madrasahs/religious schools', 2, 1, 1, 5, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(18, 'Participate in promote and/or sponsor Love the Earth Campaign', 2, 1, 2, 6, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(19, 'Conduct Entrepreneurship workshops (e.g for graduates, single mothers and the needy)', 2, 1, 2, 6, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(20, 'Provide scholarships in critical areas of expertise for Muslims.', 2, 1, 2, 6, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(21, 'Create awareness on new Islamic products and instruments (e.g. takaful, sukuk, ar-rahnu, Islamic wealth planning etc.)', 2, 1, 2, 6, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(22, 'Create awareness against unhealthy activities (e.g. gambling, drugs, alcohol, illegal investments etc.)', 2, 1, 2, 6, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(23, 'Conduct educational programmes (e.g. training/seminar/workshop, provide tuition, motivational talk, tazkirah; receive educational visits, etc.)', 2, 1, 2, 6, 1, '2018-08-19 21:13:34', '2018-08-19 21:13:34'),
(24, 'Donate to and/or sponsor educational institutions, educational related facilities, products and activities (e.g. intellect facilities, computers for schools, mobile libraries etc.)', 2, 1, 2, 6, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(25, 'Provide education-related financial assistance (e.g. exam fees, tuition fees, scholarships etc.)', 2, 1, 2, 6, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(26, 'Provide internship training programmes for college/university students', 2, 1, 2, 6, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(27, 'Facilitate financial aid for the poor (e.g. micro financing, soft loans etc.)', 2, 1, 3, 7, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(28, 'Allocate assets as wakaf (e.g cash, land, building etc.)', 2, 1, 3, 7, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(29, 'Assist new Muslim entrepreneurs', 2, 1, 3, 7, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(30, 'Create job opportunities for the handicapped and disabled', 2, 1, 3, 8, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(31, 'Create job opportunities for unemployed youths/ poor/needy', 2, 1, 3, 8, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(32, 'Facilitate and/or sponsor special health-care programmes for the needy, hardcore poor (e.g free rural medi-care services, mobile hospitals, flying doctors)', 2, 1, 4, 9, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(33, 'Conduct awareness programmes on health matters', 2, 1, 4, 9, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(34, 'Provide health related financial assistance to the needy (e.g. surgery fees, hospitalization fees, continuous treatment)', 2, 1, 4, 9, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(35, 'Conduct tazkirah session on fardhu ain', 1, 2, 5, 10, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(36, 'Conduct tazkirah session on fardhu kifayah', 2, 2, 5, 10, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(37, 'Perform daily morning doa', 1, 2, 5, 10, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(38, 'Organise motivation- and stress- related management programmes (e.g counselling services, staff rejuvenation programmes, study trips etc.)', 2, 2, 5, 10, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(39, 'Conduct life essential skills programmes (e.g. health talks, parenting, financial management etc.)', 1, 2, 5, 11, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(40, 'Provide job-related training programmes (e.g. job competencies seminars, multi-skilling programmes, IT related training etc.)', 1, 2, 5, 11, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(41, 'Provide Shariah reference point', 2, 2, 5, 11, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(42, 'Organise team building initiative', 1, 2, 5, 12, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(43, 'Necessitate external apprenticeship programmes', 1, 2, 5, 12, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(44, 'Facilitate career planning development programmes (e.g work-related qualification; structured career path, succession planning, job enrichment programmes etc.)', 2, 2, 5, 12, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(45, 'Provide a safe working environment (e.g. first-aid kits; fire extinguishers, safety evacuation zones etc.)', 1, 2, 6, 13, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(46, 'Provide free medical check-up for employees', 2, 2, 6, 13, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(47, 'Conduct regular (quarterly) audit and review of Organizational Health and Safety Regulation', 2, 2, 6, 13, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(48, 'Set up special health and safety committee/unit', 2, 2, 6, 13, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(49, 'Establish health and safety related policy', 2, 2, 6, 13, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(50, 'Establish employers – employees charter', 2, 2, 7, 14, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(51, 'Practice equal opportunity among employees (based on gender, religion, race, qualification etc.)', 2, 2, 7, 14, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(52, 'Pay Remuneration – On-Time', 1, 2, 8, 15, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(53, 'Provide medical benefits inclusive of immediate family members', 1, 2, 8, 15, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(54, 'Provide fringe benefits (e.g takaful protection; payment of holiday benefits, travelling allowances, housing allowances etc.)', 2, 2, 8, 15, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(55, 'Subsidise umrah/haj expenses for employees and family members', 2, 2, 8, 15, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(56, 'Provide maternity leave', 1, 2, 8, 15, 1, '2018-08-19 21:13:35', '2018-08-19 21:13:35'),
(57, 'Provide special leave (e.g to take care of elderly parents, sick children, paternity leave)', 1, 2, 8, 15, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(58, 'Provide surau / prayer room', 1, 2, 8, 16, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(59, 'Provide conducive surau/prayer room (e.g. air-conditioning, carpets, ablution area etc.)', 2, 2, 8, 16, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(60, 'Provide facilities to improve working environment (e.g library, nursery/child care centre etc.)', 2, 2, 8, 16, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(61, 'Provide devices to improve working environment (e.g WIFI access, i-pads, hand phones etc.)', 2, 2, 8, 16, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(62, 'Allow flexible working hours', 2, 2, 8, 16, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(63, 'Encourage employee involvement in volunteering programs', 1, 2, 8, 17, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(64, 'Allow replacement leave for volunteerism work', 1, 2, 8, 17, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(65, 'Ensure hygienic practices in the work environment', 1, 2, 8, 18, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(66, 'Conduct health and/or safety awareness programs', 2, 2, 8, 18, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(67, 'Provide supplementary equipment/devices/materials for healthy working environment (e.g ionizer, sanitizer etc)', 2, 2, 8, 18, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(68, 'Offer attractive incentives for excellent employees (e.g. bonuses, travel packages, shares etc.)', 2, 2, 9, 19, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(69, 'Offer reward for employees innovativeness and creativeness', 2, 2, 9, 20, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(70, 'Provide loyalty packages (e.g ESOS, long service awards)', 1, 2, 9, 21, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(71, 'Participate in Islamic-related celebrations (e.g Awal Muharam, Maulidur Rasul, etc )', 2, 2, 10, 22, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(72, 'Assure transparency of employees\\’ rights', 1, 2, 10, 22, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(73, 'Organise employee-employer special activities (e.g. dinner, family day, sports competition)', 2, 2, 10, 22, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(74, 'Encourage open door policy (access to appropriate channel of communication for feedback and grievance procedure)', 2, 2, 10, 23, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(75, 'Establish whistle-blowing policies and procedures', 2, 2, 10, 23, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(76, 'Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 11, 24, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(77, 'Ensure efficient consumption of energy and water', 1, 3, 12, 25, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(78, 'Tree-planting (or replanting) programmes and initiatives (within business surrounding)', 1, 3, 12, 26, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(79, 'Carry out environmental conservation activities (e.g. river/beach/park clean-up, tree-planting/replanting)', 2, 3, 12, 26, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(80, 'Practice sustainable waste management', 2, 3, 12, 26, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(81, 'Use cleaner or alternative technology in managing business operation (e.g. solar, wind, wave)', 2, 3, 12, 26, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(82, 'Encourage the deployment of eco-friendly corporate fleet vehicles', 2, 3, 12, 26, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(83, 'Reduce greenhouse gas emissions through green initiatives (e.g. installation of energy-saving lift systems, re-engineered ventilation and air-conditioning systems, efficient energy-saving lightings)', 2, 3, 12, 26, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(84, 'Involvement in environmentally oriented R&D programmes (e.g. research on the management of and improvements to company’s products, by-products, production wastes etc.)', 2, 3, 12, 27, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(85, 'Develop networking with ‘green’ stakeholder groups (e.g. professional bodies, NGOs)', 2, 3, 12, 28, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(86, 'Engage in community outreach programmes related to the environmental management operations of the company', 2, 3, 12, 28, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(87, 'Benchmark best practices on environmental management and practice (e.g. Global Reporting Initiatives, ACCA-Malaysian environmental guidelines, corporate plans and policies, peer practices)', 2, 3, 12, 29, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(88, 'Establish an environmental policy geared towards reducing adverse impacts on the environment (e.g. guidelines on use of green resources, green practices, zero waste)', 2, 3, 12, 30, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(89, 'Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 13, 31, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(90, 'Promote environmental-related practices among employees (carpooling, use of public transportation, recycling, saving water & energy etc.)', 2, 3, 13, 31, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(91, 'Conduct IT-related meeting [e.g. tele and video conferencing (board conference), webinar (web seminar)]', 2, 3, 13, 32, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(92, 'Offer safe/green products and/or services (e.g. green credit card, green packaging, no animal testing)', 1, 3, 14, 33, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(93, 'Obtain related products and/or services certifications and/or awards', 2, 3, 14, 33, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(94, 'Enhance e-marketing channels, web-marketing', 2, 3, 14, 34, 1, '2018-08-19 21:13:36', '2018-08-19 21:13:36'),
(95, 'Conduct and/or sponsor activities to conserve biological diversity (e.g. protect endangered animal and plants)', 2, 3, 15, 35, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(96, 'Incorporate ibadah concept in environmental programmes for employees (e.g. workshops etc.)', 1, 3, 15, 36, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(97, 'Incorporate Islamic principles and values in all market-related policies', 1, 4, 16, 37, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(98, 'Ensure products and services are halal and safe (e.g. be vetted by Shariah Council Board, SIRIM etc.)', 1, 4, 17, 38, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(99, 'Obtain related certifications (e.g. ISO standards, halal certificates etc.)', 1, 4, 17, 38, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(100, 'Ensure Shariah compliant supply chain', 1, 4, 17, 38, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(101, 'Adopt adequate return policy (time, cost and delivery)', 2, 4, 17, 38, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(102, 'Ensure products are innovative and convenient to the customers', 2, 4, 17, 38, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(103, 'Create efficient, effective, clean, innovative, safe working environment within Shariah compliance process', 1, 4, 17, 39, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(104, 'Promote fair and ethical employment practices (e.g. no child labour, minimum wages, indigenous rights, no forced and compulsory labour etc.)', 2, 4, 17, 39, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(105, 'Ensure advertisement concepts are Shariah compliant (e.g. storyline, models, accurate information, suitable language, moderate spending etc.)', 1, 4, 18, 40, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(106, 'Ensure accurate and precise advertisement (e.g. product description, product safety, product usage etc.)', 1, 4, 18, 40, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(107, 'Provide full disclosure/ transparent information (e.g. product description, usage, ingredients etc.)', 1, 4, 18, 40, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(108, 'Provide wider coverage through the use of multiple mediums', 2, 4, 18, 40, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(109, 'Promote affordable pricing to ensure fair distribution to all market segments', 2, 4, 18, 41, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(110, 'Obtain proper authorisation/consent from client or customer before releasing information', 2, 4, 18, 42, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(111, 'Offer additional benefits to customers (e.g. loyalty programmes, rewards etc.)', 2, 4, 18, 43, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(112, 'Obtain product and/or services related feedbacks from customers (e.g. interviews, surveys, dialogues, websites, etc.)', 2, 4, 19, 44, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(113, 'Engage in Islamic related forum/dialogue with stakeholders', 2, 4, 19, 44, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(114, 'Conduct social engagement with customers (e.g. festive gatherings etc.)', 2, 4, 19, 44, 1, '2018-08-19 21:13:37', '2018-08-19 21:13:37');

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
(1, 49, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(2, 15, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(3, 60, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(4, 31, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(5, 97, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(6, 55, '2018-08-19 21:13:37', '2018-08-19 21:13:37'),
(7, 2, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(8, 10, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(9, 72, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(10, 3, '2018-08-19 21:13:38', '2018-08-19 21:13:38');

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
(1, 'Oliver Mante', 'Perferendis sint hic qui et quia. Doloribus omnis reiciendis illum sed. Eos et molestias numquam voluptatem molestias.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(2, 'Prof. Stefan Bechtelar', 'Odio corrupti omnis ea excepturi aut ut dolorum. Natus eos dolores similique cum. Illum magnam et et labore ipsum dolores ipsam.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(3, 'Julio Hintz', 'In corporis autem id consequuntur sapiente nemo provident. Occaecati consectetur et quia ut a repellendus. Provident autem cum facere totam dolorum voluptates voluptatem.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(4, 'Cody Lowe IV', 'Et aspernatur est nostrum quis libero. Beatae qui rerum eum ut numquam. Soluta et et aliquam et debitis autem.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(5, 'Miss Teagan Baumbach MD', 'Fugiat officiis sapiente distinctio est quas. Consequatur unde ex inventore dolorum minus et. Qui et aut itaque. Iure repellendus dolorem voluptates ut aut ipsum est.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(6, 'Miss Alyson Stamm DDS', 'Et laboriosam voluptatibus iure omnis quos eos minus. Ea accusantium consequuntur tenetur sint. Aut eum sunt illo. Quia ut optio natus ut.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(7, 'Holden Heidenreich', 'Atque iste modi illum tenetur aperiam quia nihil. Temporibus sit iusto est et ullam aut fugiat numquam. Eveniet corporis nemo vitae quidem natus.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(8, 'Destinee Hane', 'Iure nobis accusantium quam doloremque vel a. Ut doloribus eveniet saepe deserunt voluptate nam et facere. Qui officiis sint dicta nulla ut. Placeat suscipit quaerat totam.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(9, 'Mr. Sim Heidenreich DDS', 'Voluptatum ipsa consequatur placeat dolores totam. Ea consequatur ipsam nulla necessitatibus. Possimus ipsum aperiam iusto eos porro fugiat. Laboriosam sit dolor nulla. Ut enim pariatur impedit.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(10, 'Lora Medhurst', 'Explicabo sint provident sed est. Quo aspernatur sit dolorem nemo aut quia. Ullam et accusantium rerum laborum voluptas. Odio ex quia veritatis voluptates eligendi quia.', 1, '2018-08-19 21:13:30', '2018-08-19 21:13:30');

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
(1, 'Raynor Inc', 'et4284', '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(2, 'Spencer and Sons', 'ut764887310', '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(3, 'Gleason LLC', 'laborum4', '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(4, 'West PLC', 'qui115197', '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(5, 'Gleichner-Romaguera', 'ducimus23', '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(6, 'Williamson-Murray', 'voluptas47882', '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(7, 'Parker, Mohr and Satterfield', 'consequatur38', '2018-08-19 21:13:30', '2018-08-19 21:13:30'),
(8, 'Hessel-Wolff', 'placeat974633', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(9, 'Hirthe LLC', 'voluptatibus3014', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(10, 'Wehner-Lemke', 'et75484913', '2018-08-19 21:13:31', '2018-08-19 21:13:31');

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
(1, 1, 'admin@gmail.com', '$2y$10$g7xCcBwxxZlNwoY49AAGheP7Idk4C4MRFY1Nlsn1E4WP7RlcjRjO2', 1, NULL, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(2, 2, 'user@gmail.com', '$2y$10$nxNgFBal5dGScZIy2FfvZuYFtrkWQsDihXn5bxm357hER7WVHyWR2', 1, NULL, '2018-08-19 21:13:45', '2018-08-19 21:13:45');

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
(1, 1, 1, 48, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(2, 2, 2, 39, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(3, 3, 3, 69, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(4, 4, 4, 52, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(5, 5, 5, 83, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(6, 6, 6, 63, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(7, 7, 7, 16, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(8, 8, 8, 80, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(9, 9, 9, 82, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(10, 10, 10, 66, '2018-08-19 21:13:38', '2018-08-19 21:13:38');

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
(1, 'Cupiditate assumenda ut est perspiciatis.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(2, 'Ipsum magni laudantium pariatur facilis.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(3, 'Rem aut ullam reiciendis adipisci maiores explicabo.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(4, 'Veniam vel quia consectetur nulla sequi exercitationem reiciendis.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(5, 'Culpa veniam aperiam temporibus.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(6, 'Optio voluptas aut vero.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(7, 'Corrupti repellendus cum doloribus occaecati.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(8, 'Quasi ut temporibus quis veniam maxime error sequi.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(9, 'Et aperiam ullam accusamus quidem molestias incidunt.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38'),
(10, 'Explicabo suscipit aut illo.', 1, '2018-08-19 21:13:38', '2018-08-19 21:13:38');

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
(1, 'Hic saepe.', 'Ab consectetur velit et quaerat qui.', 'http://donnelly.com/velit-suscipit-consectetur-mollitia-nisi-libero-aspernatur-commodi.html', 1, 1, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(2, 'Dolor cupiditate.', 'Assumenda officia et quia similique enim dolores quod quisquam.', 'http://www.dickens.biz/', 2, 2, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(3, 'Est et.', 'Voluptates repudiandae voluptatem sed rem est nam.', 'http://www.gibson.info/', 3, 3, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(4, 'Est unde dolorem.', 'Tempora totam maiores aut perspiciatis occaecati voluptas voluptas.', 'http://harris.com/exercitationem-enim-doloremque-necessitatibus-doloremque.html', 4, 4, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(5, 'Odit dolorem maxime.', 'Molestias quisquam occaecati nihil eaque eum qui aliquam vel.', 'https://donnelly.net/iste-odio-error-dolorem-sit.html', 5, 5, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(6, 'Eos quidem.', 'Officia tempore eveniet reprehenderit voluptas molestiae quasi.', 'http://www.wisoky.com/', 6, 6, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(7, 'Tenetur qui ea.', 'Quia suscipit voluptate autem sit rerum aut quis.', 'http://schuster.com/', 7, 7, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(8, 'Officiis ullam repellendus.', 'Totam voluptatem omnis sint explicabo aut.', 'http://morissette.org/numquam-soluta-quia-iste-consequatur', 8, 8, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(9, 'Qui non.', 'Qui ducimus voluptatem fuga laudantium perferendis quo.', 'http://www.stehr.com/aperiam-aspernatur-impedit-sit-velit-molestiae-possimus.html', 9, 9, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(10, 'Nobis quae.', 'Occaecati et qui tenetur non.', 'http://weissnat.com/qui-illo-magni-assumenda-officiis-unde.html', 10, 10, 1, '2018-08-19 21:13:39', '2018-08-19 21:13:39');

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
(1, 'COMMUNITY', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(2, 'WORKPLACE', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(3, 'ENVIRONMENTAL', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(4, 'MARKETPLACE', '2018-08-19 21:13:39', '2018-08-19 21:13:39');

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
(1, 0, 'SOCIAL DEVELOPMENT', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(2, 1, 'EDUCATION AND AWARENESS', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(3, 2, 'ECONOMIC DEVELOPMENT', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(4, 3, 'HEALTH', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(5, 4, 'TRAINING AND EDUCATION', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(6, 5, 'OCCUPATIONAL SAFETY AND HEALTH ADMINISTRATION (OSHA)', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(7, 6, 'EQUITABLE OPPORTUNITY', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(8, 7, 'EMPLOYMENT', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(9, 8, 'AWARDS AND RECOGNITION', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(10, 9, 'LABOUR AND MANAGEMENT RELATIONS', '2018-08-19 21:13:39', '2018-08-19 21:13:39'),
(11, 10, 'ENVIRONMENTAL RELATED POLICY', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(12, 11, 'CLIMATE CHANGE MITIGATION AND ADAPTATION', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(13, 12, 'PREVENTION OF POLLUTION', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(14, 13, 'GREEN PRODUCTS AND SERVICES', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(15, 14, 'PROTECTION AND RESTORATION OF THE NATURAL ENVIRONMENT', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(16, 15, 'MARKET RELATED POLICIES', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(17, 16, 'PRODUCT AND SERVICES', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(18, 17, 'MARKETING', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(19, 18, 'STAKEHOLDER ENGAGEMENT', '2018-08-19 21:13:40', '2018-08-19 21:13:40');

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
(1, 0, 'Contribution for the needy', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(2, 1, 'Community involvement', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(3, 2, 'Culture', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(4, 3, 'Contribution to the eligble recipients', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(5, 4, 'Promoting Islamic values', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(6, 5, 'Education', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(7, 6, 'Economic development', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(8, 7, 'Employment opportunity', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(9, 8, 'Health programmes for the public and the needy', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(10, 9, 'Spiritual and Motivational Enhancement', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(11, 10, 'Skill Enhancement', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(12, 11, 'Self-Development', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(13, 12, 'Health and Safety Requirements', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(14, 13, 'Diversity of Workforce', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(15, 14, 'Remuneration and Benefits', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(16, 15, 'Facilities and Working Conditions', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(17, 16, 'Employee Volunteerism', '2018-08-19 21:13:40', '2018-08-19 21:13:40'),
(18, 17, 'Healthy Working Environment', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(19, 18, 'Incentives and Bonuses', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(20, 19, 'Innovative Ideas and Awards', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(21, 20, 'Loyalty Packages', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(22, 21, 'Employees-Management Engagement', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(23, 22, 'Communication', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(24, 23, 'Policy Formulation', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(25, 24, 'Energy Consumption', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(26, 25, 'Sustainable Initiatives', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(27, 26, 'Research and Development Programme', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(28, 27, 'Stakeholder Engagement', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(29, 28, 'Continuous Monitoring Initiatives', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(30, 29, 'Climate Change Policy', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(31, 30, 'Prevention Initiatives', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(32, 31, 'Virtual Communication', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(33, 32, 'Products', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(34, 33, 'Virtual Marketing', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(35, 34, 'Environmental Preservation', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(36, 35, 'Education and Training', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(37, 36, 'Policy Formulation', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(38, 37, 'Shariah Compliant Products', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(39, 38, 'Fair and Ethical Employment Practices', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(40, 39, 'Advertisement', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(41, 40, 'Pricing', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(42, 41, 'Customers\' Confidentiality Policy', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(43, 42, 'Customer Appreciation', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(44, 43, '', '2018-08-19 21:13:41', '2018-08-19 21:13:41');

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
(1, 'Vital', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(2, 'Recommended', '2018-08-19 21:13:41', '2018-08-19 21:13:41');

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
(1, 'Electa Cruickshank', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(2, 'Gaetano Friesen III', '2018-08-19 21:13:41', '2018-08-19 21:13:41'),
(3, 'Ofelia Halvorson', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(4, 'Prof. Alejandrin Hammes', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(5, 'Dr. Madelyn Steuber DDS', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(6, 'Thora Durgan', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(7, 'Kari Zemlak IV', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(8, 'Mr. Roman DuBuque', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(9, 'Dr. Elroy Kuvalis', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(10, 'Sarah Labadie', '2018-08-19 21:13:42', '2018-08-19 21:13:42');

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
(1, 'Bank Islam', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(2, 'Maybank', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(3, 'Bank Rakyat', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(4, 'Bank Simpanan Nasional', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(5, 'RHB Bank', '2018-08-19 21:13:42', '2018-08-19 21:13:42');

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
(1, 'Cocos (Keeling) Islands', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(2, 'Myanmar', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(3, 'Fiji', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(4, 'Falkland Islands (Malvinas)', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(5, 'Turks and Caicos Islands', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(6, 'Chile', '2018-08-19 21:13:42', '2018-08-19 21:13:42'),
(7, 'Portugal', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(8, 'Kiribati', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(9, 'Andorra', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(10, 'Trinidad and Tobago', '2018-08-19 21:13:43', '2018-08-19 21:13:43');

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
(1, 'admin', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(2, 'user', '2018-08-19 21:13:43', '2018-08-19 21:13:43');

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
(1, 'Visa', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(2, 'MasterCard', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(3, 'MasterCard', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(4, 'MasterCard', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(5, 'MasterCard', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(6, 'MasterCard', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(7, 'Visa', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(8, 'Visa', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(9, 'MasterCard', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(10, 'MasterCard', '2018-08-19 21:13:43', '2018-08-19 21:13:43');

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
(1, 'aut', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(2, 'dicta', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(3, 'quod', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(4, 'minima', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(5, 'omnis', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(6, 'ipsam', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(7, 'incidunt', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(8, 'qui', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(9, 'est', '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(10, 'molestiae', '2018-08-19 21:13:43', '2018-08-19 21:13:43');

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
(610, '2014_10_12_000000_create_users_table', 1),
(611, '2014_10_12_100000_create_password_resets_table', 1),
(612, '2018_03_26_231209_create_pics_table', 1),
(613, '2018_03_26_232130_create_companies_table', 1),
(614, '2018_03_26_232233_create_addresses_table', 1),
(615, '2018_03_26_232336_create_payments_table', 1),
(616, '2018_03_26_232418_create_feedbacks_table', 1),
(617, '2018_03_26_232454_create_lookup_countries_table', 1),
(618, '2018_03_26_232522_create_assessments_table', 1),
(619, '2018_03_26_232602_create_assessment_results_table', 1),
(620, '2018_03_26_232722_create_lookup_payment_methods_table', 1),
(621, '2018_03_26_232751_create_lookup_banks_table', 1),
(622, '2018_03_26_232827_create_feedback_questions_table', 1),
(623, '2018_03_26_232859_create_admin_feedback_questions_table', 1),
(624, '2018_03_26_232939_create_assessment_questions_table', 1),
(625, '2018_03_26_233021_create_lookup_assessment_key_areas_table', 1),
(626, '2018_03_26_233056_create_lookup_assessment_titles_table', 1),
(627, '2018_03_26_233124_create_lookup_assessment_categories_table', 1),
(628, '2018_03_26_233212_create_lookup_assessment_types_table', 1),
(629, '2018_03_26_233300_create_admin_blog_contents_table', 1),
(630, '2018_03_26_233329_create_blog_contents_table', 1),
(631, '2018_03_26_233431_create_admin_library_contents_table', 1),
(632, '2018_03_26_233455_create_library_contents_table', 1),
(633, '2018_03_26_233527_create_lookup_publications_table', 1),
(634, '2018_03_26_233559_create_lookup_authors_table', 1),
(635, '2018_04_22_051209_create_admin_assessment_question_table', 1),
(636, '2018_05_15_022216_create_entities_table', 1),
(637, '2018_05_15_022524_create_admins_table', 1),
(638, '2018_05_15_023347_create_lookup_entity_types_table', 1);

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
(1, 1, 1, 7161.45, 8033, 2017, '2018-08-19 21:13:43', '2018-08-19 21:13:43'),
(2, 2, 2, 7331.58, 6888, 4408, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(3, 3, 3, 5202.58, 7418, 73, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(4, 4, 4, 903.08, 4410, 5595, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(5, 5, 5, 8320.38, 324, 8147, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(6, 6, 6, 5229.61, 5981, 7848, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(7, 7, 7, 4269.72, 8048, 6991, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(8, 8, 8, 8789.73, 5917, 7716, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(9, 9, 9, 5843.39, 4010, 903, '2018-08-19 21:13:44', '2018-08-19 21:13:44'),
(10, 10, 10, 1044.95, 4689, 2262, '2018-08-19 21:13:44', '2018-08-19 21:13:44');

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
(1, 'Oran Mante', 'mante.jaron@example.net', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(2, 'Nathanael Brekke I', 'xkozey@example.org', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(3, 'Madalyn Bahringer', 'fritsch.sophia@example.org', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(4, 'Tyrique Bednar', 'darron07@example.com', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(5, 'Ettie Schoen', 'lbrown@example.net', '2018-08-19 21:13:31', '2018-08-19 21:13:31'),
(6, 'Gillian Swaniawski', 'dedric.maggio@example.net', '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(7, 'Karlie Schultz', 'seth.corwin@example.org', '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(8, 'Dr. Brain Schimmel', 'dulce.harvey@example.net', '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(9, 'Peter Labadie I', 'durgan.elmore@example.com', '2018-08-19 21:13:32', '2018-08-19 21:13:32'),
(10, 'Ms. Connie Howell II', 'lillie.armstrong@example.org', '2018-08-19 21:13:32', '2018-08-19 21:13:32');

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
(1, 2, 'Josiah Klein', '+4801286952709', '+7760766830466', '2018-08-19 21:13:45', '2018-08-19 21:13:45');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=639;
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
