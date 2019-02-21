-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2019 at 01:29 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `annual_incomes`
--

CREATE TABLE `annual_incomes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annual_incomes`
--

INSERT INTO `annual_incomes` (`id`, `name`, `value`) VALUES
(1, 'Under 1 Lakh', 1),
(2, '1 Lakh to 2.5 lakhs', 2),
(3, '2.5 lakhs to 5 lakhs', 3),
(4, '5 lakhs to 10 lakhs', 4),
(5, 'above 10 lakhs', 5);

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `area_type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_type`, `value`, `display`) VALUES
(1, 'Rural', '1', 1),
(2, 'Urban', '2', 1),
(3, 'Rural and Urban', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `castes`
--

CREATE TABLE `castes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `castes`
--

INSERT INTO `castes` (`id`, `name`, `value`) VALUES
(1, 'General', 1),
(2, 'OBC', 2),
(3, 'SC', 3),
(4, 'ST', 4),
(9, 'PHD', 5),
(10, 'Ex-Serviceman', 6),
(11, 'Minority', 7),
(12, 'Hill Border Area', 8);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `value`) VALUES
(1, 'Latest Scheme', 1),
(2, 'Loan and Process', 2),
(3, 'Tender', 3),
(4, 'Business and Training\r\n', 4),
(5, 'Others', 5);

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualifications`
--

CREATE TABLE `educational_qualifications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_qualifications`
--

INSERT INTO `educational_qualifications` (`id`, `name`, `value`) VALUES
(1, 'Under 8th', 1),
(2, '8th Pass', 2),
(3, '10th Pass', 3),
(4, 'Graduate', 4),
(5, 'Post Graduate', 5),
(6, 'PHD', 6);

-- --------------------------------------------------------

--
-- Table structure for table `eligibility_criterias`
--

CREATE TABLE `eligibility_criterias` (
  `id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `criteria_name` varchar(255) NOT NULL,
  `criteria_value` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eligibility_criterias`
--

INSERT INTO `eligibility_criterias` (`id`, `scheme_id`, `criteria_name`, `criteria_value`) VALUES
(1, 3, 'age', 50),
(2, 3, 'area', 2),
(3, 3, 'edu_qualification', 5),
(4, 3, 'pvtTraining_type', 1),
(5, 3, 'govTraining_type', 3),
(6, 3, 'employment_registration', 1),
(7, 3, 'industry', 1),
(8, 3, 'loan_requirement', 1),
(9, 5, 'age', 50),
(10, 5, 'area', 3),
(11, 5, 'edu_qualification', 1),
(12, 5, 'govTraining_type', 0),
(13, 5, 'pvtTraining_type', 0),
(14, 5, 'industry', 0),
(15, 5, 'loan_requirement', 4),
(16, 5, 'employment_registration', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `faq_question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `category_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(8, 4, 'Business and Training', 'Questions related to business and training', '2019-02-12 21:13:48', '2019-02-14 16:19:59'),
(9, 1, 'To whom, loan facility?', 'Following are eligible for assistance provided by Khadi and Village Industry. Registered village industry cooperative societies. Registered NGO Individual entrepreneur and educated non-employed youth, women, SC/ST members and traditional artisan.', '2019-02-12 21:14:23', '2019-02-12 21:51:58'),
(10, 2, 'Loan and Process Related', 'Processing, packing and marketing of Grains, Pulses, Spices etc. Manufacturing of Tar and gur and other tar product. Manufacturing of Cane gur and Khandsari Bee keeping. Processing, preservation and packing of pickles and fruits and vegetables. Mustard oil Industry.', '2019-02-12 21:17:15', '2019-02-12 22:03:17'),
(15, 3, 'Tender', 'Following are eligible for assistance provided by Khadi and Village Industry. Registered village industry cooperative societies. Registered NGO Individual entrepreneur and educated non-employed youth, women, SC/ST members and traditional artisan.', '2019-02-13 23:49:44', '2019-02-14 16:18:29'),
(16, 1, 'Agriculture based and Food industry.', 'Processing, packing and marketing of Grains, Pulses, Spices etc. Manufacturing of Tar and gur and other tar product. Manufacturing of Cane gur and Khandsari Bee keeping. Processing, preservation and packing of pickles and fruits and vegetables. Mustard oil Industry.', '2019-02-15 17:33:52', '2019-02-15 17:33:52'),
(17, 1, 'For what village industry, assistance is provided?', 'Village Industry is divided into 7 groups, which covers following industry:', '2019-02-15 17:33:52', '2019-02-15 17:33:52'),
(18, 4, 'Is Training Free?', 'You can ask Training related questions', '2019-02-12 21:13:48', '2019-02-14 16:19:59'),
(19, 5, 'Others', 'Any other question apart from the list categories are placed here', '2019-02-15 19:53:47', '2019-02-15 19:53:47'),
(20, 2, 'How to check my loan approval ?', 'You can check your loan approval by our website check loan approval tool.', '2019-02-15 06:37:51', '2019-02-15 06:37:51'),
(21, 3, 'Tender opening date and closing', 'You can ask questions regarding tender here.', '2019-02-17 14:40:49', '2019-02-17 14:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `gov_trainings`
--

CREATE TABLE `gov_trainings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gov_trainings`
--

INSERT INTO `gov_trainings` (`id`, `name`, `value`, `display`) VALUES
(1, 'Any other Govt. scheme', 1, 1),
(2, 'TRYSEM ', 2, 1),
(3, 'Any Gov Scheme and TRYSEM', 3, 0),
(4, 'N/A', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `value`) VALUES
(1, 'village', 1),
(2, 'any other', 2);

-- --------------------------------------------------------

--
-- Table structure for table `legal_statuses`
--

CREATE TABLE `legal_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legal_statuses`
--

INSERT INTO `legal_statuses` (`id`, `name`, `value`, `display`) VALUES
(1, 'Individual', 1, 1),
(2, 'Co-Operative Society', 2, 1),
(3, 'Regd. Institution', 3, 1),
(4, 'SHG\'s', 4, 1),
(5, 'Trust', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loan_limits`
--

CREATE TABLE `loan_limits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_limits`
--

INSERT INTO `loan_limits` (`id`, `name`, `value`) VALUES
(1, 'Under 10 Lakhs', 1),
(2, '10 lakhs - 15 lakhs', 2),
(3, '15 lakhs -20 lakhs', 3),
(4, '20 lakhs to 25 lakhs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `contents` longtext CHARACTER SET utf8,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=Inactive,1=Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `keyword`, `description`, `contents`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', 'About Us', 'About Us', '<!-- Navbar End-->\r\n<div class=\"container-fluid\">\r\n<div class=\"innerpage-header text-center\">\r\n<div class=\"container\">\r\n<h1>About Us</h1>\r\n\r\n<h3><a href=\"#\">Home</a> &gt; About Us</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"container margin-top-45 margin-bottom-45\">\r\n<div class=\"col-md-6\">\r\n<h1 class=\"text-30\">Pesticide Applicators Professional Association (PAPA)</h1>\r\n\r\n<p class=\"margin-top-25\">PAPA is a non-profit, public benefit corporation which is dedicated to providing Continuing Education for the implementation of safe and effective pest control techniques throughout California.</p>\r\n\r\n<p>Decisions within PAPA are made by a Board of Directors, and Directors stand for election every three years. The Board is responsible to all members of PAPA. The day-to-day activities of PAPA are administered by an Executive Director selected by the Board of Directors.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\"><img class=\"img-responsive\" src=\"/frontend/images/pesticide-farming.jpg\" /></div>\r\n</div>\r\n\r\n<div class=\"container-fluid padding-top-30 padding-bottom-30\" style=\"background-color: #f4f4f4;\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<h1 class=\"text-30\">PAPA&rsquo;s Primary Functions</h1>\r\n\r\n<ul class=\"list-leaf-style\">\r\n	<li>To sponsor statewide educational programs in cooperation with the University of California, municipal agencies, and industry training in safety, rules, and regulations, current technology, and field-tested research for pest management professionals.</li>\r\n	<li>To provide the means for the recording and yearly accounting of Continuing Education hours.</li>\r\n	<li>To publish a quarterly newsletter to inform members of association activities and pest management issues affecting the industry.</li>\r\n	<li>To represent the concerns of members to industry and federal, state, and local agencies.</li>\r\n	<li>To maintain media contacts throughout the state to keep the public aware of the concern of all pest management professionals for environmental safety.</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h1 class=\"text-30\">Member Benefits</h1>\r\n\r\n<ul class=\"list-leaf-style\">\r\n	<li>Tracking of your continuing education (CE) hours to make it simple for you to submit your renewal with DPR.</li>\r\n	<li>An official report of your CE hours automatically mailed to you in the fall of your renewal year.</li>\r\n	<li>Quarterly editions of our newsletter, Applicators News, packed with the latest industry issues, information, seminars, reports, rules, and regulations.</li>\r\n	<li>Discounts on our statewide seminars with training in every area of interest and importance to the professional pesticide applicator.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '2017-11-23 07:23:23', '2018-08-09 15:46:48'),
(9, 'Home Page', 'homepage', 'home page', 'home page', 'The Pesticide Applicators Professional Association is a California non-profit, public benefit corporation which is dedicated to providing Continuing Education and to the implementation of safe and effective pest control techniques.', 1, '2018-07-31 13:28:14', '2018-07-31 13:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_trainings`
--

CREATE TABLE `private_trainings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private_trainings`
--

INSERT INTO `private_trainings` (`id`, `name`, `value`, `display`) VALUES
(1, 'Industrial Training Institute/Ploytechnic(Preferred)', 1, 1),
(2, 'Others', 2, 1),
(3, 'N/A', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `query_feedback_type_id` int(11) NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email_id`, `mobile_no`, `query_feedback_type_id`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Aman Verma', 'aman.Verma123@gmail.com', '9807123321', 1, 'In India, Khadi refers to handwoven cloth. Weavers prefer the yarn produced by Mills because it is more robust and of consistent quality. Swadeshi movement of boycotting English products during the first two decades of the twentieth Century was popularised by Mahatma Gandhi and Indian mill owners backed Nationalist politicians who called for a boycott of foreign cloth. Gandhi argued that the mill owners would deny handloom weavers an opportunity to buy yarn because they would prefer to create a monopoly for their own cloth.[5] However, handspun yarn was of poor quality and too costly. Thus Mahatma Gandhi started spinning himself and encouraging others to do so. He made it obligatory for all members of the Indian National Congress to spin cotton themselves and to pay their dues in yarn. He further made the chakri (spinning wheel) the symbol of the Nationalist movement. Initially the Indian flag was supposed to have a chakri, not the Ashoka Chakra at its centre. Mahatma Gandhi collected large sums of money to create a grass-roots organisation to encourage handloom weaving. This was called \'khaddar\' or \'Khadi\' movement\r\n\r\nIn India, Khadi refers to handwoven cloth. Weavers prefer the yarn produced by Mills because it is more robust and of consistent quality. Swadeshi movement of boycotting English products during the first two decades of the twentieth Century was popularised by Mahatma Gandhi and Indian mill owners backed Nationalist politicians who called for a boycott of foreign cloth. Gandhi argued that the mill owners would deny handloom weavers an opportunity to buy yarn because they would prefer to create a monopoly for their own cloth.[5] However, handspun yarn was of poor quality and too costly. Thus Mahatma Gandhi started spinning himself and encouraging others to do so. He made it obligatory for all members of the Indian National Congress to spin cotton themselves and to pay their dues in yarn. He further made the chakri (spinning wheel) the symbol of the Nationalist movement. Initially the Indian flag was supposed to have a chakri, not the Ashoka Chakra at its centre. Mahatma Gandhi collected large sums of money to create a grass-roots organisation to encourage handloom weaving. This was called \'khaddar\' or \'Khadi\' movement\r\n\r\nIn India, Khadi refers to handwoven cloth. Weavers prefer the yarn produced by Mills because it is more robust and of consistent quality. Swadeshi movement of boycotting English products during the first two decades of the twentieth Century was popularised by Mahatma Gandhi and Indian mill owners backed Nationalist politicians who called for a boycott of foreign cloth. Gandhi argued that the mill owners would deny handloom weavers an opportunity to buy yarn because they would prefer to create a monopoly for their own cloth.[5] However, handspun yarn was of poor quality and too costly. Thus Mahatma Gandhi started spinning himself and encouraging others to do so. He made it obligatory for all members of the Indian National Congress to spin cotton themselves and to pay their dues in yarn. He further made the chakri (spinning wheel) the symbol of the Nationalist movement. Initially the Indian flag was supposed to have a chakri, not the Ashoka Chakra at its centre. Mahatma Gandhi collected large sums of money to create a grass-roots organisation to encourage handloom weaving. This was called \'khaddar\' or \'Khadi\' movement', '2019-02-16 15:48:21', '2019-02-16 15:48:21'),
(2, 'Deepak Saxena', 'deepakatk23@gmail.com', '8970123456', 1, 'remark2', '2019-02-16 15:48:21', '2019-02-16 15:48:21'),
(3, 'Hardik J3ain', 'jain.hardik23@gmail.com', '8908890098', 4, 'remark3', '2019-02-16 15:48:21', '2019-02-16 15:48:21'),
(4, 'Mathur Pandey', 'mathur123@gmail.com', '9090123909', 3, 'remark4', '2019-02-16 15:48:21', '2019-02-16 15:48:21'),
(9, 'alok verma', 'alok456@gmail.com', '9088123321', 2, 'here goes description', '2019-02-16 15:48:21', '2019-02-16 15:48:21'),
(10, 'Hardik J3ain', 'jain.hardik23@gmail.com', '8908890098', 2, 'remark3', '2019-02-16 15:48:21', '2019-02-16 15:48:21'),
(12, 'vishal', 'vishal@gmail.com', '8970123321', 4, 'ddsdsdsd', '2019-02-16 05:51:29', '2019-02-16 05:51:29'),
(13, 'vishal', 'vishal@gmail.com', '8970123321', 3, 'dggdgdgggdg', '2019-02-17 14:45:06', '2019-02-17 14:45:06'),
(14, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:07:31', '2019-02-17 15:07:31'),
(15, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:07:58', '2019-02-17 15:07:58'),
(16, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:08:12', '2019-02-17 15:08:12'),
(17, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:08:27', '2019-02-17 15:08:27'),
(18, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:08:49', '2019-02-17 15:08:49'),
(19, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:09:51', '2019-02-17 15:09:51'),
(20, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:10:00', '2019-02-17 15:10:00'),
(21, 'abhishek', 'abhi@gmail.com', '9807123456', 2, 'sdfffsfsfsfsfff', '2019-02-17 15:10:13', '2019-02-17 15:10:13'),
(22, 'kamal', 'kamal@gmail.com', '8970123421', 2, 'regrtrtrtrtrtrt', '2019-02-18 07:21:07', '2019-02-18 07:21:07'),
(23, 'kamal', 'kamal@gmail.com', '8970123421', 2, 'regrtrtrtrtrtrt', '2019-02-18 07:21:51', '2019-02-18 07:21:51'),
(24, 'uyuyuyuy', 'hjhhjhj@gmail.com', 'hjhjhjhjjhjh', 1, 'hjhjhjhjhjhjj', '2019-02-18 08:39:48', '2019-02-18 08:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `query_feedback_types`
--

CREATE TABLE `query_feedback_types` (
  `id` int(11) NOT NULL,
  `query_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `query_feedback_types`
--

INSERT INTO `query_feedback_types` (`id`, `query_type`) VALUES
(1, 'Query Type 1'),
(2, 'Query Type 2'),
(3, 'Query Type 3'),
(4, 'Query Type 4');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Full access to create, edit, and update companies, and orders.', '2017-11-21 02:56:02', '2017-11-21 02:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` int(11) NOT NULL,
  `scheme_name_en` varchar(255) NOT NULL,
  `shceme_description_en` text NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `value` int(11) NOT NULL,
  `array_key` varchar(255) NOT NULL,
  `array_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `scheme_name_en`, `shceme_description_en`, `image`, `value`, `array_key`, `array_score`) VALUES
(1, 'Khadi Development Scheme', 'This scheme deals with khadi development and manufacturing process', 'default.jpg', 1, 'S1', 0),
(2, 'Village Industries Scheme', 'Village industries development and establishment of medium scale industries', 'default.jpg', 2, 'S2', 0),
(3, 'CM Village Industries Employment Scheme', 'Village youth employment under this scheme', 'default.jpg', 3, 'S3', 0),
(4, 'PM\'s Employment Generation Program', 'Under the guidance of PM yojgar yojna, the scheme is for employment generation', 'default.jpg', 4, 'S4', 0),
(5, 'Pandit Deendayal Gramodyog Rojgaar Yojna', 'In this scheme low scale people are provides rozgaar', 'default.jpg', 5, 'S5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `licensenum` varchar(11) DEFAULT NULL,
  `license_type` varchar(20) DEFAULT NULL,
  `cpnum` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `phone_type` varchar(20) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `q1answer` varchar(50) DEFAULT NULL,
  `q2answer` varchar(50) DEFAULT NULL,
  `q3answer` varchar(50) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role_id` tinyint(2) NOT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `is_profile_deleted` tinyint(1) DEFAULT '0' COMMENT '1=>profile deleted',
  `profile_deleted_date` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `comm_email` varchar(50) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(4) DEFAULT NULL,
  `zipcode` varchar(6) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `company_name` varchar(20) DEFAULT NULL,
  `credit_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `licensenum`, `license_type`, `cpnum`, `email`, `fname`, `lname`, `phone`, `phone_type`, `balance`, `password`, `q1answer`, `q2answer`, `q3answer`, `dateCreated`, `remember_token`, `created_at`, `updated_at`, `role_id`, `email_verified`, `added_by`, `status`, `is_profile_deleted`, `profile_deleted_date`, `last_login`, `token`, `comm_email`, `street_address`, `city`, `state`, `zipcode`, `country`, `company_name`, `credit_status`) VALUES
(13605, NULL, NULL, NULL, 'info@user.com', 'TACT', 'Admin', NULL, NULL, NULL, '$2y$10$2LAfpFDv2xlBAoTRtyhyUecQh4sy4JKOZZ1DCnsvEu5ocCp5xNLCS', NULL, NULL, NULL, '2019-02-18 09:45:19', 'baok9NfScEIrZBWrmLtONYKNm2LA7Sj2kX0TNICdMRFHGyXPHQe034YjLV5Q', '2018-10-23 07:08:37', '2018-10-23 07:08:37', 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_eligibility_criterias`
--

CREATE TABLE `user_eligibility_criterias` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `annual_income` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `educational_qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `training_certificate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `adhaar_card` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `training_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loan_fund_request` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_eligibility_criterias`
--

INSERT INTO `user_eligibility_criterias` (`id`, `name`, `age`, `gender`, `district`, `area`, `cast`, `annual_income`, `educational_qualification`, `employee_status`, `training_certificate`, `adhaar_card`, `training_type`, `loan_fund_request`, `industry`, `created_at`, `updated_at`) VALUES
(1, 'Vishal Srivastava', '3', 'male', '1', '1', '1', '1', '', 'y', 'y', 'y', '1', '1', '2', '2019-02-13 22:46:49', '2019-02-13 22:46:49'),
(2, 'Mahesh Srivastava', '2', 'male', '1', '2', '1', '3', '', 'y', 'y', 'y', '1', '1', '2', '2019-02-13 22:50:36', '2019-02-13 22:50:36'),
(3, 'Mahesh Srivastava', '1', 'male', '1', '1', '1', '1', '', 'y', 'y', 'y', '1', '1', '1', '2019-02-13 22:51:16', '2019-02-13 22:51:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annual_incomes`
--
ALTER TABLE `annual_incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `castes`
--
ALTER TABLE `castes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_qualifications`
--
ALTER TABLE `educational_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eligibility_criterias`
--
ALTER TABLE `eligibility_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gov_trainings`
--
ALTER TABLE `gov_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_statuses`
--
ALTER TABLE `legal_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_limits`
--
ALTER TABLE `loan_limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `private_trainings`
--
ALTER TABLE `private_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query_feedback_types`
--
ALTER TABLE `query_feedback_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpnum` (`cpnum`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_eligibility_criterias`
--
ALTER TABLE `user_eligibility_criterias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annual_incomes`
--
ALTER TABLE `annual_incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `castes`
--
ALTER TABLE `castes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `educational_qualifications`
--
ALTER TABLE `educational_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `eligibility_criterias`
--
ALTER TABLE `eligibility_criterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `gov_trainings`
--
ALTER TABLE `gov_trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `legal_statuses`
--
ALTER TABLE `legal_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `loan_limits`
--
ALTER TABLE `loan_limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `private_trainings`
--
ALTER TABLE `private_trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `query_feedback_types`
--
ALTER TABLE `query_feedback_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13932;
--
-- AUTO_INCREMENT for table `user_eligibility_criterias`
--
ALTER TABLE `user_eligibility_criterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
