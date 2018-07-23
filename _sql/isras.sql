-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 05:06 AM
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
(1, 1, '54046 Malika Summit\nCollinsfort, NJ 88337-6799', '', 'South Lelah', '60497-7650', 'Mauritius', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(2, 2, '58482 Terrell Trail\nNew Minaport, WV 30191-9296', '', 'South Liliane', '25421-4395', 'United States of America', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(3, 3, '938 Kuvalis Mount Apt. 883\nLake Loyal, MA 36509', '', 'Rodolfohaven', '18594', 'Japan', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(4, 4, '130 Sonya Centers Suite 189\nBrookemouth, MI 23248', '', 'West Holdenstad', '00668-3780', 'Israel', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(5, 5, '794 Bosco Meadow Apt. 405\nBreanabury, GA 41989-0043', '', 'New Leanna', '22607', 'United Kingdom', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(6, 6, '89775 Pouros Ports Apt. 505\nClementview, MN 34628', '', 'Treutelton', '79203', 'Samoa', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(7, 7, '56672 Waters Turnpike\nWest Edward, AZ 79448', '', 'Lake Jeraldberg', '81359', 'Saint Barthelemy', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(8, 8, '637 Carolyn Cliffs\nEast Mitchelmouth, OH 02220-3312', '', 'Goodwinland', '63447-3604', 'Libyan Arab Jamahiriya', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(9, 9, '796 Lilliana Mountains Suite 870\nQuitzonstad, SD 45184', '', 'North Kariannetown', '78241', 'Bolivia', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(10, 10, '66006 Kenton Mountain Apt. 328\nEast Bufordport, KY 97407-5961', '', 'Port Chelseaside', '16367', 'Tonga', '2018-05-30 16:21:28', '2018-05-30 16:21:28');

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
(1, NULL, 1, 'itp6HOHsjgeyrsv', 'Cletus Brekke', '2018-05-30 16:21:51', '2018-05-30 16:21:51');

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
(1, 1, 1, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(2, 2, 2, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(3, 3, 3, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(4, 4, 4, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(5, 5, 5, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(6, 6, 6, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(7, 7, 7, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(8, 8, 8, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(9, 9, 9, '2018-05-30 16:21:31', '2018-05-30 16:21:31'),
(10, 10, 10, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(11, 1, 115, '2018-05-30 18:00:02', '2018-05-30 18:00:02');

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
(1, 1, 1, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(2, 2, 2, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(3, 3, 3, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(4, 4, 4, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(5, 5, 5, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(6, 6, 6, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(7, 7, 7, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(8, 8, 8, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(9, 9, 9, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(10, 10, 10, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(11, 1, 1, '2018-05-30 17:47:51', '2018-05-30 17:47:51'),
(12, 1, 11, '2018-05-30 17:48:10', '2018-05-30 17:48:10');

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
(1, 1, 1, '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(2, 2, 2, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(3, 3, 3, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(4, 4, 4, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(5, 5, 5, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(6, 6, 6, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(7, 7, 7, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(8, 8, 8, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(9, 9, 9, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(10, 10, 10, '2018-05-30 16:21:30', '2018-05-30 16:21:30'),
(11, 1, 1, '2018-06-18 15:54:35', '2018-06-18 15:54:35'),
(12, 1, 1, '2018-06-18 15:54:43', '2018-06-18 15:54:43');

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
(1, 1, 1, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(2, 2, 2, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(3, 3, 3, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(4, 4, 4, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(5, 5, 5, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(6, 6, 6, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(7, 7, 7, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(8, 8, 8, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(9, 9, 9, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(10, 10, 10, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(11, 1, 1, '2018-05-30 17:45:18', '2018-05-30 17:45:18'),
(12, 1, 11, '2018-05-30 17:46:37', '2018-05-30 17:46:37');

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
(1, 'Donate to hardcore poor Muslims', 1, 1, 1, 1, 0, '2018-05-30 16:21:32', '2018-05-30 17:56:22'),
(2, 'Donate to victims of environmental disasters', 1, 1, 1, 1, 0, '2018-05-30 16:21:32', '2018-05-30 17:56:29'),
(3, 'Donate to the less fortunate (e.g. victims of crimes, accidents, etc.)', 2, 1, 1, 1, 1, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(4, 'Engage with the community to understand their needs and expectations', 2, 1, 1, 2, 1, '2018-05-30 16:21:32', '2018-05-30 16:21:32'),
(5, 'Undertake activities related to community safety and security', 2, 1, 1, 2, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(6, 'Organise and/or sponsor sports programmes or events', 2, 1, 1, 2, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(7, 'Organise Family Days and social gatherings', 2, 1, 1, 2, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(8, 'Organize community activities (e.g. Qurban activities, Public talks, Iftar, Blood donations, Health/Medical screening programmes)', 2, 1, 1, 2, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(9, 'Collaborate with NGOs and community to promote sustainable business practices', 2, 1, 1, 2, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(10, 'Construct and restore public premises (e.g amenities, public area, parks and playgrounds etc)', 2, 1, 1, 2, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(11, 'Promote, preserve and conserve Islamic culture and heritage', 2, 1, 1, 3, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(12, 'Sponsor and/or promote inter-faith dialogues (respect other religions and indigenous beliefs)', 2, 1, 1, 3, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(13, 'Sponsor culture-related community functions', 2, 1, 1, 3, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(14, 'Contribute to NGOs involved in assisting the community and the needy', 2, 1, 1, 4, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(15, 'Initiate religious functions and activities (e.g. Tilawah, TV programmes, etc.)', 2, 1, 1, 5, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(16, 'Conduct and/or sponsor Fardhu ain classes', 2, 1, 1, 5, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(17, 'Donate to suraus/mosques/madrasahs/religious schools', 2, 1, 1, 5, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(18, 'Participate in promote and/or sponsor Love the Earth Campaign', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(19, 'Conduct Entrepreneurship workshops (e.g for graduates, single mothers and the needy)', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(20, 'Provide scholarships in critical areas of expertise for Muslims.', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(21, 'Create awareness on new Islamic products and instruments (e.g. takaful, sukuk, ar-rahnu, Islamic wealth planning etc.)', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(22, 'Create awareness against unhealthy activities (e.g. gambling, drugs, alcohol, illegal investments etc.)', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(23, 'Conduct educational programmes (e.g. training/seminar/workshop, provide tuition, motivational talk, tazkirah; receive educational visits, etc.)', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(24, 'Donate to and/or sponsor educational institutions, educational related facilities, products and activities (e.g. intellect facilities, computers for schools, mobile libraries etc.)', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(25, 'Provide education-related financial assistance (e.g. exam fees, tuition fees, scholarships etc.)', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(26, 'Provide internship training programmes for college/university students', 2, 1, 2, 6, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(27, 'Facilitate financial aid for the poor (e.g. micro financing, soft loans etc.)', 2, 1, 3, 7, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(28, 'Allocate assets as wakaf (e.g cash, land, building etc.)', 2, 1, 3, 7, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(29, 'Assist new Muslim entrepreneurs', 2, 1, 3, 7, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(30, 'Create job opportunities for the handicapped and disabled', 2, 1, 3, 8, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(31, 'Create job opportunities for unemployed youths/ poor/needy', 2, 1, 3, 8, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(32, 'Facilitate and/or sponsor special health-care programmes for the needy, hardcore poor (e.g free rural medi-care services, mobile hospitals, flying doctors)', 2, 1, 4, 9, 1, '2018-05-30 16:21:33', '2018-05-30 16:21:33'),
(33, 'Conduct awareness programmes on health matters', 2, 1, 4, 9, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(34, 'Provide health related financial assistance to the needy (e.g. surgery fees, hospitalization fees, continuous treatment)', 2, 1, 4, 9, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(35, 'Conduct tazkirah session on fardhu ain', 1, 2, 5, 10, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(36, 'Conduct tazkirah session on fardhu kifayah', 2, 2, 5, 10, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(37, 'Perform daily morning doa', 1, 2, 5, 10, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(38, 'Organise motivation- and stress- related management programmes (e.g counselling services, staff rejuvenation programmes, study trips etc.)', 2, 2, 5, 10, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(39, 'Conduct life essential skills programmes (e.g. health talks, parenting, financial management etc.)', 1, 2, 5, 11, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(40, 'Provide job-related training programmes (e.g. job competencies seminars, multi-skilling programmes, IT related training etc.)', 1, 2, 5, 11, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(41, 'Provide Shariah reference point', 2, 2, 5, 11, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(42, 'Organise team building initiative', 1, 2, 5, 12, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(43, 'Necessitate external apprenticeship programmes', 1, 2, 5, 12, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(44, 'Facilitate career planning development programmes (e.g work-related qualification; structured career path, succession planning, job enrichment programmes etc.)', 2, 2, 5, 12, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(45, 'Provide a safe working environment (e.g. first-aid kits; fire extinguishers, safety evacuation zones etc.)', 1, 2, 6, 13, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(46, 'Provide free medical check-up for employees', 2, 2, 6, 13, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(47, 'Conduct regular (quarterly) audit and review of Organizational Health and Safety Regulation', 2, 2, 6, 13, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(48, 'Set up special health and safety committee/unit', 2, 2, 6, 13, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(49, 'Establish health and safety related policy', 2, 2, 6, 13, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(50, 'Establish employers – employees charter', 2, 2, 7, 14, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(51, 'Practice equal opportunity among employees (based on gender, religion, race, qualification etc.)', 2, 2, 7, 14, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(52, 'Pay Remuneration – On-Time', 1, 2, 8, 15, 1, '2018-05-30 16:21:34', '2018-05-30 16:21:34'),
(53, 'Provide medical benefits inclusive of immediate family members', 1, 2, 8, 15, 1, '2018-05-30 16:21:35', '2018-05-30 16:21:35'),
(54, 'Provide fringe benefits (e.g takaful protection; payment of holiday benefits, travelling allowances, housing allowances etc.)', 2, 2, 8, 15, 1, '2018-05-30 16:21:35', '2018-05-30 16:21:35'),
(55, 'Subsidise umrah/haj expenses for employees and family members', 2, 2, 8, 15, 1, '2018-05-30 16:21:35', '2018-05-30 16:21:35'),
(56, 'Provide maternity leave', 1, 2, 8, 15, 1, '2018-05-30 16:21:35', '2018-05-30 16:21:35'),
(57, 'Provide special leave (e.g to take care of elderly parents, sick children, paternity leave)', 1, 2, 8, 15, 1, '2018-05-30 16:21:35', '2018-05-30 16:21:35'),
(58, 'Provide surau / prayer room', 1, 2, 8, 16, 1, '2018-05-30 16:21:35', '2018-05-30 16:21:35'),
(59, 'Provide conducive surau/prayer room (e.g. air-conditioning, carpets, ablution area etc.)', 2, 2, 8, 16, 1, '2018-05-30 16:21:35', '2018-05-30 16:21:35'),
(60, 'Provide facilities to improve working environment (e.g library, nursery/child care centre etc.)', 2, 2, 8, 16, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(61, 'Provide devices to improve working environment (e.g WIFI access, i-pads, hand phones etc.)', 2, 2, 8, 16, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(62, 'Allow flexible working hours', 2, 2, 8, 16, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(63, 'Encourage employee involvement in volunteering programs', 1, 2, 8, 17, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(64, 'Allow replacement leave for volunteerism work', 1, 2, 8, 17, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(65, 'Ensure hygienic practices in the work environment', 1, 2, 8, 18, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(66, 'Conduct health and/or safety awareness programs', 2, 2, 8, 18, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(67, 'Provide supplementary equipment/devices/materials for healthy working environment (e.g ionizer, sanitizer etc)', 2, 2, 8, 18, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(68, 'Offer attractive incentives for excellent employees (e.g. bonuses, travel packages, shares etc.)', 2, 2, 9, 19, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(69, 'Offer reward for employees innovativeness and creativeness', 2, 2, 9, 20, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(70, 'Provide loyalty packages (e.g ESOS, long service awards)', 1, 2, 9, 21, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(71, 'Participate in Islamic-related celebrations (e.g Awal Muharam, Maulidur Rasul, etc )', 2, 2, 10, 22, 1, '2018-05-30 16:21:36', '2018-05-30 16:21:36'),
(72, 'Assure transparency of employees\\’ rights', 1, 2, 10, 22, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(73, 'Organise employee-employer special activities (e.g. dinner, family day, sports competition)', 2, 2, 10, 22, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(74, 'Encourage open door policy (access to appropriate channel of communication for feedback and grievance procedure)', 2, 2, 10, 23, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(75, 'Establish whistle-blowing policies and procedures', 2, 2, 10, 23, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(76, 'Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 11, 24, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(77, 'Ensure efficient consumption of energy and water', 1, 3, 12, 25, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(78, 'Tree-planting (or replanting) programmes and initiatives (within business surrounding)', 1, 3, 12, 26, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(79, 'Carry out environmental conservation activities (e.g. river/beach/park clean-up, tree-planting/replanting)', 2, 3, 12, 26, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(80, 'Practice sustainable waste management', 2, 3, 12, 26, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(81, 'Use cleaner or alternative technology in managing business operation (e.g. solar, wind, wave)', 2, 3, 12, 26, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(82, 'Encourage the deployment of eco-friendly corporate fleet vehicles', 2, 3, 12, 26, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(83, 'Reduce greenhouse gas emissions through green initiatives (e.g. installation of energy-saving lift systems, re-engineered ventilation and air-conditioning systems, efficient energy-saving lightings)', 2, 3, 12, 26, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(84, 'Involvement in environmentally oriented R&D programmes (e.g. research on the management of and improvements to company’s products, by-products, production wastes etc.)', 2, 3, 12, 27, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(85, 'Develop networking with ‘green’ stakeholder groups (e.g. professional bodies, NGOs)', 2, 3, 12, 28, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(86, 'Engage in community outreach programmes related to the environmental management operations of the company', 2, 3, 12, 28, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(87, 'Benchmark best practices on environmental management and practice (e.g. Global Reporting Initiatives, ACCA-Malaysian environmental guidelines, corporate plans and policies, peer practices)', 2, 3, 12, 29, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(88, 'Establish an environmental policy geared towards reducing adverse impacts on the environment (e.g. guidelines on use of green resources, green practices, zero waste)', 2, 3, 12, 30, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(89, 'Incorporate pollution prevention practices in business activities (e.g. recycling, saving water & energy, emission reduction, water discharge/leakage,recycling kiosksetc.)', 1, 3, 13, 31, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(90, 'Promote environmental-related practices among employees (carpooling, use of public transportation, recycling, saving water & energy etc.)', 2, 3, 13, 31, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(91, 'Conduct IT-related meeting [e.g. tele and video conferencing (board conference), webinar (web seminar)]', 2, 3, 13, 32, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(92, 'Offer safe/green products and/or services (e.g. green credit card, green packaging, no animal testing)', 1, 3, 14, 33, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(93, 'Obtain related products and/or services certifications and/or awards', 2, 3, 14, 33, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(94, 'Enhance e-marketing channels, web-marketing', 2, 3, 14, 34, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(95, 'Conduct and/or sponsor activities to conserve biological diversity (e.g. protect endangered animal and plants)', 2, 3, 15, 35, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(96, 'Incorporate ibadah concept in environmental programmes for employees (e.g. workshops etc.)', 1, 3, 15, 36, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(97, 'Incorporate Islamic principles and values in all market-related policies', 1, 4, 16, 37, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(98, 'Ensure products and services are halal and safe (e.g. be vetted by Shariah Council Board, SIRIM etc.)', 1, 4, 17, 38, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(99, 'Obtain related certifications (e.g. ISO standards, halal certificates etc.)', 1, 4, 17, 38, 1, '2018-05-30 16:21:37', '2018-05-30 16:21:37'),
(100, 'Ensure Shariah compliant supply chain', 1, 4, 17, 38, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(101, 'Adopt adequate return policy (time, cost and delivery)', 2, 4, 17, 38, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(102, 'Ensure products are innovative and convenient to the customers', 2, 4, 17, 38, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(103, 'Create efficient, effective, clean, innovative, safe working environment within Shariah compliance process', 1, 4, 17, 39, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(104, 'Promote fair and ethical employment practices (e.g. no child labour, minimum wages, indigenous rights, no forced and compulsory labour etc.)', 2, 4, 17, 39, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(105, 'Ensure advertisement concepts are Shariah compliant (e.g. storyline, models, accurate information, suitable language, moderate spending etc.)', 1, 4, 18, 40, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(106, 'Ensure accurate and precise advertisement (e.g. product description, product safety, product usage etc.)', 1, 4, 18, 40, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(107, 'Provide full disclosure/ transparent information (e.g. product description, usage, ingredients etc.)', 1, 4, 18, 40, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(108, 'Provide wider coverage through the use of multiple mediums', 2, 4, 18, 40, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(109, 'Promote affordable pricing to ensure fair distribution to all market segments', 2, 4, 18, 41, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(110, 'Obtain proper authorisation/consent from client or customer before releasing information', 2, 4, 18, 42, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(111, 'Offer additional benefits to customers (e.g. loyalty programmes, rewards etc.)', 2, 4, 18, 43, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(112, 'Obtain product and/or services related feedbacks from customers (e.g. interviews, surveys, dialogues, websites, etc.)', 2, 4, 19, 44, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(113, 'Engage in Islamic related forum/dialogue with stakeholders', 2, 4, 19, 44, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(114, 'Conduct social engagement with customers (e.g. festive gatherings etc.)', 2, 4, 19, 44, 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(115, 'qwertyuiop', 1, 1, 1, 1, 1, '2018-05-30 18:00:02', '2018-05-30 18:00:02');

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
(1, 25, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(2, 57, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(3, 89, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(4, 95, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(5, 45, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(6, 13, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(7, 60, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(8, 87, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(9, 94, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(10, 25, '2018-05-30 16:21:38', '2018-05-30 16:21:38');

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
(1, 'b 1', 'tast 1', 1, '2018-05-30 16:21:27', '2018-05-30 17:47:50'),
(2, 'Carolyne Legros', 'Necessitatibus nesciunt iste ut autem voluptas error. Sit tempore voluptatem quae eum ut. Laboriosam quidem nulla in.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(3, 'Wilhelm Eichmann', 'Commodi quasi alias ex natus ullam blanditiis aut. Et aspernatur et non veniam. Tenetur quia non aliquam repellendus. Et quod debitis ut cupiditate nisi. Enim perferendis eum nisi est adipisci.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(4, 'Mr. Gavin Kuhlman', 'Velit nisi ut modi ut et maiores maxime. Sunt reprehenderit et sapiente eveniet necessitatibus. Est earum nesciunt est incidunt repellat non. Delectus unde et qui vel deleniti.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(5, 'Dr. Clovis Hilpert', 'In voluptatem doloremque illo maxime dolores. Enim quis quidem fugit corporis dolorem rerum reprehenderit. Laborum aut ex voluptatem cupiditate quod nisi in. Reiciendis quas quo modi porro.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(6, 'Lauren Kuhn', 'Accusantium dolor cumque et natus harum harum. Vel rerum expedita iste reiciendis voluptates. Incidunt repudiandae deleniti et et. Magnam ut facere ullam facere error exercitationem.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(7, 'Maxie Veum', 'Aperiam eveniet in minus voluptatem. Consequatur quas rerum quam quo et numquam. Suscipit quis omnis iusto et.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(8, 'Dr. Carter Goldner', 'Impedit vel et quod impedit aut veritatis aspernatur ea. Dolorum enim assumenda aut modi quo sint explicabo ipsa. Mollitia mollitia minus eveniet labore in.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(9, 'Prof. Daphnee Stanton III', 'Cumque hic tenetur dolor maiores fugiat ut earum. Nostrum maiores incidunt qui in cum qui rerum. Et ab sed est sint qui.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(10, 'Luisa Kub', 'Fugiat necessitatibus explicabo libero hic. Non at quas deserunt vel voluptas quod. Sit perferendis velit suscipit voluptatem omnis quos maxime.', 1, '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(11, 'b 2', 'tast2', 1, '2018-05-30 17:48:10', '2018-05-30 17:48:10');

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
(1, 'Schulist Group', 'et65350408', '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(2, 'Heaney-Volkman', 'aut8428533', '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(3, 'Dicki and Sons', 'laborum0', '2018-05-30 16:21:27', '2018-05-30 16:21:27'),
(4, 'Swaniawski-Bins', 'ipsum35', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(5, 'Ondricka, Witting and Haag', 'culpa7027', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(6, 'Spinka LLC', 'aut7', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(7, 'Kovacek-Rodriguez', 'nam440', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(8, 'Feil, Moen and Kilback', 'quam578', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(9, 'Grimes-Kessler', 'veniam6462', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(10, 'Bradtke Group', 'repellat568', '2018-05-30 16:21:28', '2018-05-30 16:21:28');

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
(1, 1, 'admin@gmail.com', '$2y$10$IAdK7VYG3gsTBhEXPzKWveRX15EEexNvfrpHMNbyRouIW9YA38eTy', 1, 'UBeG7VO1Wu2voovvaBzQZ3tgGQHenn0Gv5io0C8IGxNxO1eFYEsQOjaBPcC0', '2018-05-30 16:21:51', '2018-05-30 16:21:51'),
(2, 2, 'user@gmail.com', '$2y$10$EJZTaZ.t9dvY31JIF1hRVe5OzQFMcF8hU0aR9Md/GhJzF8uffVCKu', 1, 'ITF4edm1C5ntV9JMzjfRotKFus6vF1bV0c7ljJe2ptaFgg2ILA3q97zEqbwY', '2018-05-30 16:21:51', '2018-05-30 16:21:51');

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
(1, 1, 1, 74, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(2, 2, 2, 9, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(3, 3, 3, 79, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(4, 4, 4, 87, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(5, 5, 5, 62, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(6, 6, 6, 41, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(7, 7, 7, 43, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(8, 8, 8, 71, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(9, 9, 9, 80, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(10, 10, 10, 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39');

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
(1, 'Non asperiores non ut quia', 1, '2018-05-30 16:21:38', '2018-06-18 15:54:43'),
(2, 'Est cumque cum incidunt sit ut quisquam.', 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(3, 'Error debitis illo eos.', 1, '2018-05-30 16:21:38', '2018-05-30 16:21:38'),
(4, 'Minus officia dignissimos voluptas quis eligendi maxime.', 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(5, 'Magnam enim omnis ut animi atque.', 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(6, 'Non omnis accusamus rerum.', 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(7, 'Dignissimos molestiae sit accusantium soluta autem et.', 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(8, 'Rerum minus laborum sint rerum maxime.', 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(9, 'Voluptate error illum quia magni.', 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(10, 'Natus qui voluptatem qui laborum delectus.', 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39');

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
(1, 'test 1', 'Aliquid quas quidem fugiat omnis accusamus ut sunt.', 'http://localhost/ISRAS-WEB/app/isras/public/img/uploads/1_1527731118.pdf', 1, 1, 0, '2018-05-30 16:21:39', '2018-05-30 17:46:06'),
(2, 'Incidunt ab culpa.', 'Dolores deleniti porro omnis sit ullam itaque tempore eos.', 'http://www.feeney.com/omnis-aut-architecto-sint-similique-aut-dolore-magnam', 3419, 8328, 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(3, 'Ipsa placeat et.', 'Aspernatur dolorum cum esse maxime earum.', 'https://www.ryan.com/voluptates-voluptas-fugit-sed-ut-rem-commodi', 6024, 7688, 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(4, 'Pariatur ut quia.', 'Nihil illum in placeat eum quo in.', 'http://pacocha.com/exercitationem-voluptatum-doloremque-vitae-est-voluptate.html', 5693, 5988, 1, '2018-05-30 16:21:39', '2018-05-30 16:21:39'),
(5, 'Aut et.', 'Consectetur non placeat molestiae.', 'http://lesch.biz/libero-nobis-distinctio-quod-quis-voluptatem.html', 7258, 2679, 1, '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(6, 'Neque autem commodi.', 'Dolor repellendus nihil consequuntur ipsam velit culpa.', 'http://waters.com/et-laboriosam-nesciunt-eaque-excepturi-id-tempora.html', 504, 1437, 1, '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(7, 'Quasi et dolorem.', 'Non vero eum aspernatur.', 'http://www.pacocha.com/voluptatem-sint-aut-dolores-et.html', 8296, 6368, 1, '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(8, 'Doloribus sit deleniti.', 'Molestiae iure labore iure mollitia rerum qui.', 'http://www.bergnaum.info/', 4862, 434, 1, '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(9, 'Tempora id quae.', 'Quo voluptates numquam autem provident nesciunt.', 'http://www.bogisich.com/error-quasi-quaerat-sint-aliquid-sunt-quidem-enim.html', 7658, 134, 1, '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(10, 'Explicabo nam.', 'Similique laboriosam cumque ut quidem porro.', 'http://kris.org/quisquam-nam-ut-ipsum-minima-consequatur-porro', 3420, 4026, 1, '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(11, 'cnt 1', 'qwertyuiop', 'http://localhost/ISRAS-WEB/app/isras/public/img/uploads/11_1527731197.pdf', 1, 1, 1, '2018-05-30 17:46:37', '2018-05-30 17:46:37');

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
(1, 'COMMUNITY', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(2, 'WORKPLACE', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(3, 'ENVIRONMENTAL', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(4, 'MARKETPLACE', '2018-05-30 16:21:40', '2018-05-30 16:21:40');

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
(1, 0, 'SOCIAL DEVELOPMENT', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(2, 1, 'EDUCATION AND AWARENESS', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(3, 2, 'ECONOMIC DEVELOPMENT', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(4, 3, 'HEALTH', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(5, 4, 'TRAINING AND EDUCATION', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(6, 5, 'OCCUPATIONAL SAFETY AND HEALTH ADMINISTRATION (OSHA)', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(7, 6, 'EQUITABLE OPPORTUNITY', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(8, 7, 'EMPLOYMENT', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(9, 8, 'AWARDS AND RECOGNITION', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(10, 9, 'LABOUR AND MANAGEMENT RELATIONS', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(11, 10, 'ENVIRONMENTAL RELATED POLICY', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(12, 11, 'CLIMATE CHANGE MITIGATION AND ADAPTATION', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(13, 12, 'PREVENTION OF POLLUTION', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(14, 13, 'GREEN PRODUCTS AND SERVICES', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(15, 14, 'PROTECTION AND RESTORATION OF THE NATURAL ENVIRONMENT', '2018-05-30 16:21:40', '2018-05-30 16:21:40'),
(16, 15, 'MARKET RELATED POLICIES', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(17, 16, 'PRODUCT AND SERVICES', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(18, 17, 'MARKETING', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(19, 18, 'STAKEHOLDER ENGAGEMENT', '2018-05-30 16:21:41', '2018-05-30 16:21:41');

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
(1, 0, 'Contribution for the needy', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(2, 1, 'Community involvement', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(3, 2, 'Culture', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(4, 3, 'Contribution to the eligble recipients', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(5, 4, 'Promoting Islamic values', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(6, 5, 'Education', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(7, 6, 'Economic development', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(8, 7, 'Employment opportunity', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(9, 8, 'Health programmes for the public and the needy', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(10, 9, 'Spiritual and Motivational Enhancement', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(11, 10, 'Skill Enhancement', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(12, 11, 'Self-Development', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(13, 12, 'Health and Safety Requirements', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(14, 13, 'Diversity of Workforce', '2018-05-30 16:21:41', '2018-05-30 16:21:41'),
(15, 14, 'Remuneration and Benefits', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(16, 15, 'Facilities and Working Conditions', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(17, 16, 'Employee Volunteerism', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(18, 17, 'Healthy Working Environment', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(19, 18, 'Incentives and Bonuses', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(20, 19, 'Innovative Ideas and Awards', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(21, 20, 'Loyalty Packages', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(22, 21, 'Employees-Management Engagement', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(23, 22, 'Communication', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(24, 23, 'Policy Formulation', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(25, 24, 'Energy Consumption', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(26, 25, 'Sustainable Initiatives', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(27, 26, 'Research and Development Programme', '2018-05-30 16:21:42', '2018-05-30 16:21:42'),
(28, 27, 'Stakeholder Engagement', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(29, 28, 'Continuous Monitoring Initiatives', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(30, 29, 'Climate Change Policy', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(31, 30, 'Prevention Initiatives', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(32, 31, 'Virtual Communication', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(33, 32, 'Products', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(34, 33, 'Virtual Marketing', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(35, 34, 'Environmental Preservation', '2018-05-30 16:21:43', '2018-05-30 16:21:43'),
(36, 35, 'Education and Training', '2018-05-30 16:21:44', '2018-05-30 16:21:44'),
(37, 36, 'Policy Formulation', '2018-05-30 16:21:44', '2018-05-30 16:21:44'),
(38, 37, 'Shariah Compliant Products', '2018-05-30 16:21:44', '2018-05-30 16:21:44'),
(39, 38, 'Fair and Ethical Employment Practices', '2018-05-30 16:21:44', '2018-05-30 16:21:44'),
(40, 39, 'Advertisement', '2018-05-30 16:21:44', '2018-05-30 16:21:44'),
(41, 40, 'Pricing', '2018-05-30 16:21:45', '2018-05-30 16:21:45'),
(42, 41, 'Customers\' Confidentiality Policy', '2018-05-30 16:21:45', '2018-05-30 16:21:45'),
(43, 42, 'Customer Appreciation', '2018-05-30 16:21:45', '2018-05-30 16:21:45'),
(44, 43, '', '2018-05-30 16:21:45', '2018-05-30 16:21:45');

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
(1, 'Vital', '2018-05-30 16:21:45', '2018-05-30 16:21:45'),
(2, 'Recommended', '2018-05-30 16:21:45', '2018-05-30 16:21:45');

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
(1, 'Prof. Alessandra O\'Connell II', '2018-05-30 16:21:46', '2018-05-30 16:21:46'),
(2, 'Sandrine Kassulke', '2018-05-30 16:21:46', '2018-05-30 16:21:46'),
(3, 'Percy Krajcik', '2018-05-30 16:21:46', '2018-05-30 16:21:46'),
(4, 'Hollie Moore', '2018-05-30 16:21:46', '2018-05-30 16:21:46'),
(5, 'Skylar Dickinson', '2018-05-30 16:21:46', '2018-05-30 16:21:46'),
(6, 'Prof. Aurore Effertz I', '2018-05-30 16:21:46', '2018-05-30 16:21:46'),
(7, 'Alek Simonis', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(8, 'Prof. Trycia McCullough IV', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(9, 'Odie Bergnaum', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(10, 'Sincere King Sr.', '2018-05-30 16:21:47', '2018-05-30 16:21:47');

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
(1, 'Bank Islam', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(2, 'Maybank', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(3, 'Bank Rakyat', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(4, 'Bank Simpanan Nasional', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(5, 'RHB Bank', '2018-05-30 16:21:47', '2018-05-30 16:21:47');

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
(1, 'San Marino', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(2, 'Bouvet Island (Bouvetoya)', '2018-05-30 16:21:47', '2018-05-30 16:21:47'),
(3, 'Venezuela', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(4, 'Ecuador', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(5, 'Mali', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(6, 'Maldives', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(7, 'Guam', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(8, 'Libyan Arab Jamahiriya', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(9, 'Korea', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(10, 'Martinique', '2018-05-30 16:21:48', '2018-05-30 16:21:48');

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
(1, 'admin', '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(2, 'user', '2018-05-30 16:21:50', '2018-05-30 16:21:50');

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
(1, 'MasterCard', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(2, 'Visa', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(3, 'MasterCard', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(4, 'Visa', '2018-05-30 16:21:48', '2018-05-30 16:21:48'),
(5, 'MasterCard', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(6, 'American Express', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(7, 'Visa', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(8, 'MasterCard', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(9, 'Visa', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(10, 'MasterCard', '2018-05-30 16:21:49', '2018-05-30 16:21:49');

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
(1, 'rem', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(2, 'pariatur', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(3, 'quo', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(4, 'sint', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(5, 'assumenda', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(6, 'magni', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(7, 'odit', '2018-05-30 16:21:49', '2018-05-30 16:21:49'),
(8, 'qui', '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(9, 'omnis', '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(10, 'quod', '2018-05-30 16:21:50', '2018-05-30 16:21:50');

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
(349, '2014_10_12_000000_create_users_table', 1),
(350, '2014_10_12_100000_create_password_resets_table', 1),
(351, '2018_03_26_231209_create_pics_table', 1),
(352, '2018_03_26_232130_create_companies_table', 1),
(353, '2018_03_26_232233_create_addresses_table', 1),
(354, '2018_03_26_232336_create_payments_table', 1),
(355, '2018_03_26_232418_create_feedbacks_table', 1),
(356, '2018_03_26_232454_create_lookup_countries_table', 1),
(357, '2018_03_26_232522_create_assessments_table', 1),
(358, '2018_03_26_232602_create_assessment_results_table', 1),
(359, '2018_03_26_232722_create_lookup_payment_methods_table', 1),
(360, '2018_03_26_232751_create_lookup_banks_table', 1),
(361, '2018_03_26_232827_create_feedback_questions_table', 1),
(362, '2018_03_26_232859_create_admin_feedback_questions_table', 1),
(363, '2018_03_26_232939_create_assessment_questions_table', 1),
(364, '2018_03_26_233021_create_lookup_assessment_key_areas_table', 1),
(365, '2018_03_26_233056_create_lookup_assessment_titles_table', 1),
(366, '2018_03_26_233124_create_lookup_assessment_categories_table', 1),
(367, '2018_03_26_233212_create_lookup_assessment_types_table', 1),
(368, '2018_03_26_233300_create_admin_blog_contents_table', 1),
(369, '2018_03_26_233329_create_blog_contents_table', 1),
(370, '2018_03_26_233431_create_admin_library_contents_table', 1),
(371, '2018_03_26_233455_create_library_contents_table', 1),
(372, '2018_03_26_233527_create_lookup_publications_table', 1),
(373, '2018_03_26_233559_create_lookup_authors_table', 1),
(374, '2018_04_22_051209_create_admin_assessment_question_table', 1),
(375, '2018_05_15_022216_create_entities_table', 1),
(376, '2018_05_15_022524_create_admins_table', 1),
(377, '2018_05_15_023347_create_lookup_entity_types_table', 1);

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
(1, 1, 1, 2039.30, 8392, 2131, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(2, 2, 2, 1092.42, 8427, 5997, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(3, 3, 3, 1083.97, 2797, 6442, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(4, 4, 4, 6141.19, 5350, 7813, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(5, 5, 5, 1905.33, 1692, 6647, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(6, 6, 6, 3070.24, 2599, 1190, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(7, 7, 7, 6700.04, 2335, 8629, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(8, 8, 8, 3798.70, 3944, 2391, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(9, 9, 9, 9348.76, 7494, 7289, '2018-05-30 16:21:50', '2018-05-30 16:21:50'),
(10, 10, 10, 8833.57, 4531, 2587, '2018-05-30 16:21:50', '2018-05-30 16:21:50');

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
(1, 'Prof. Enola Larson III', 'vward@example.com', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(2, 'Deja Friesen', 'audrey.oconnell@example.net', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(3, 'Nikolas Cummerata', 'gbode@example.org', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(4, 'Isidro Reichert', 'buford.stroman@example.com', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(5, 'Rico Rau', 'hillard84@example.net', '2018-05-30 16:21:28', '2018-05-30 16:21:28'),
(6, 'Ezra Eichmann', 'jacinthe.murray@example.net', '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(7, 'Murphy D\'Amore', 'reese.witting@example.com', '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(8, 'Kennith Beahan', 'horacio44@example.org', '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(9, 'Mr. Emmitt Emmerich PhD', 'tswift@example.org', '2018-05-30 16:21:29', '2018-05-30 16:21:29'),
(10, 'Miss Chaya Jakubowski', 'walker.jordyn@example.net', '2018-05-30 16:21:29', '2018-05-30 16:21:29');

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
(1, 2, 'Abigale McKenzie', '+9733834878272', '+8274122769158', '2018-05-30 16:21:51', '2018-05-30 16:21:51');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `admin_blog_contents`
--
ALTER TABLE `admin_blog_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `admin_feedback_questions`
--
ALTER TABLE `admin_feedback_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `admin_library_contents`
--
ALTER TABLE `admin_library_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assessment_questions`
--
ALTER TABLE `assessment_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `assessment_results`
--
ALTER TABLE `assessment_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blog_contents`
--
ALTER TABLE `blog_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;
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
