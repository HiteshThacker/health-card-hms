-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `by` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` varchar(80) DEFAULT NULL,
  `description` varchar(2200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `by`, `date`, `title`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-06-15', 'Drinking hot water', 'warm_water.jpeg', '<p>The benefits of hot water are based on anecdotal reports, but there is some emerging and tangentially related scientific research in this area. Some people report feeling benefits from hot water drinking, especially first thing in the morning or right before bed.</p>\r\n\r\n<p>The diagram below shows some potential benefits of drinking hot water, including the promotion of better digestion, help with weight reduction, positive effects on the functioning of the central nervous system and blood circulation, improved metabolism, and help in protecting the kidneys while diluting waste materials in the blood. It is specifically beneficial for people suffering from heartburn and acid reflux.</p>\r\n               <p>By hot water, we mean between 54° and 71°C (130° and 160°F). Hotter than this can cause tissue damage. Staying hydrated is important regardless of the temperature of the water, but there is sufficient evidence to support the health benefits of drinking hot water to make it a worthwhile low-cost practice at least some of the time.</p>\r\n\r\n<p>Drinking plain hot water is an essential part of life for most people in Asian countries, especially China and Japan. Many people in China carry a thermos of hot water wherever they go because they strongly believe drinking hot water is good for health.</p>', '2023-02-23 20:28:40', NULL),
(3, 'Admin', '2023-02-02', 'Benefits of Having a Health Card', 'health_card.jpeg', '<p>In this day and age, having a health insurance plan is a must for every individual to protect themselves and their family from exorbitant medical costs in case of any medical emergency. With the skyrocketing cost of healthcare in India, it is imperative to have the right coverage to ensure total financial security in case of any eventualities.</p>\r\n\r\n<p>The insurance companies issue a health card to the policyholder at the time of policy purchase. Although a health card looks the same as a regular debit or credit card it is very useful at the time of claims. Read this article further to know some important benefits of having a health insurance card.</p>\r\n\r\n<p>6 Benefits of Having a Health Insurance Card\r\nLet’s take a look at some of the benefits of having a health insurance card:\r\n</p>\r\n<p>\r\nInsured can Avail the Benefit of Cashless Hospitalization\r\nThe health insurance card can be used in case of hospitalization in any of the network hospitals of the insurance company. This helps the insurance holder to avail the cashless treatments in case of hospitalization. At the time of hospitalization, the policyholder will be required to present the health card to the hospital authority. The insured can initiate the process of cashless claim and get the claim settled easily and quickly if they have the health insurance card handy and present it upon hospitalization.</p>', NULL, NULL),
(7, 'admin', '2023-03-16', 'Eating Green Vegetables', '1678907335.jpeg', '<p>Eat Your Greens For Your Health Green Leafy Vegetables Are An Important Part Of Our Daily Diet, And With So Many Varieties Available, It’s Easy To Add Them To Your Plate. Always Choose Crispy Leaves With A Fresh Green Color. When The Leaves Are Turning Yellow Or Brown, It Means They Are Aging And Losing Their Flavor.</p>\r\n\r\n<p>Visit Dr. Payal Bhandari M.D. For Guidance On How To Customize Your Diet So That It Is Best Suited For Optimizing Your Health.\r\n\r\nHealth Benefits Of Leafy Greens Leafy Greens Are Packed With Health Benefits. Here Are Some Examples Of How These Vegetables Can Improve Your Well-Being:</p>\r\n<p>Weight Management: Most Green Vegetables Are Low In Calories. You Can Eat As Much As You Like Without Putting On Extra Weight.</p>\r\n\r\n<p>Mortality Rate: Frequent Consumption Can Substantially Lower Your Mortality Risk. Leafy Greens Contain Vitamin K, Magnesium, The B Vitamins, Calcium, Amongst Many Other Essential Nutrients. These Nutrients Are Critical For Every Cell Function And Hence, Prevent The Aging Process And Help Us Look Youthful.</p>\r\n\r\n<p>Cardiovascular Disease: Greens Are Low In Fat, High In Dietary Fiber, And Rich In Folic Acid, Potassium, Magnesium, Vitamin C, And Phytochemicals. One Extra Serving Per Day Can Lower The Risk Of Cardiovascular Disease By 11%.</p>\r\n\r\n<p>Type 2 Diabetes: The High Level Of Magnesium And Low Glycemic Index That Can Be Found In Greens Is Ideal For Preventing And Treating Diabetes. Studies Showed That If You Increase Your Intake Of Greens By Just One Serving Per Day, Your Risk Of Diabetes Is Lowered By 9%.</p>\r\n\r\n<p>Immune Function: The Rich Beta-Carotene And Vitamin A Improve The Immune System.</p>\r\n\r\n<p>Protect Eyes: Children Who Consume Inadequate Amounts Of Vitamin A Have A Higher Risk Of Going Blind. Carotenoids (Lutein And Zeaxanthin) Found In Leafy Greens Are Concentrated In The Macular Region Of The Retina And The Lenses Of The Eye. A Diet Dominant In Leafy Greens Protects The Eyes From Needing Eye Glasses In Kids To Macular Degeneration And Cataracts In Adults. Cancer: Carotenoids, Antioxidants, And Flavonoids Found In Leafy Greens Protect From Most Cancer.</p>', '2023-03-15 19:08:55', '2023-03-15 19:08:55'),
(9, 'admin', '2023-04-02', 'test', '1680515056.jpg', 'test', '2023-04-03 09:44:16', '2023-04-03 09:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `book_apps`
--

CREATE TABLE `book_apps` (
  `app_id` bigint(20) UNSIGNED NOT NULL,
  `health_id` varchar(12) NOT NULL,
  `name` varchar(90) NOT NULL,
  `no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `age` varchar(3) DEFAULT NULL,
  `app_date` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_apps`
--

INSERT INTO `book_apps` (`app_id`, `health_id`, `name`, `no`, `email`, `disease`, `age`, `app_date`, `time`, `status`, `created_at`, `updated_at`) VALUES
(5, '5655', 'hfryrydgd', '979', 'hbt9712@gmail.com', 'Basic Health', NULL, '2023-03-10', '3:00 pm to 8:00 pm', 'Approved', '2023-03-10 11:08:38', '2023-03-10 12:41:34'),
(6, '202311111130', 'hfryrydgd', '56555', 'hbt9712@gmail.com', 'Cardio Diabetic', NULL, '2023-03-16', '8:00 am to 1:00 pm', 'Approved', '2023-03-13 22:12:26', '2023-03-15 18:11:29'),
(7, '565556555655', 'Thor', '1234567890', 'spbhagtani@gmail.com', 'Basic Health', NULL, '2023-03-16', '8:00 am to 1:00 pm', 'Approved', '2023-03-15 03:46:35', '2023-03-15 18:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `data_id` bigint(20) UNSIGNED NOT NULL,
  `health_id` varchar(12) NOT NULL,
  `data` varchar(80) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`data_id`, `health_id`, `data`, `created_at`, `updated_at`) VALUES
(1, '787866554545', '1678548783.png', '2023-03-11 10:03:03', '2023-03-11 10:03:03'),
(2, '787866554545', '1678548823.png', '2023-03-11 10:03:43', '2023-03-11 10:03:43'),
(3, '787866554545', '1678548825.png', '2023-03-11 10:03:45', '2023-03-11 10:03:45'),
(4, '787866554545', '1678548859.png', '2023-03-11 10:04:19', '2023-03-11 10:04:19'),
(5, '787866554545', '1678548862.png', '2023-03-11 10:04:22', '2023-03-11 10:04:22'),
(6, '787866554545', '1678548866.png', '2023-03-11 10:04:26', '2023-03-11 10:04:26'),
(9, '565556555655', '1678548875.png', '2023-03-11 10:04:35', '2023-03-11 10:04:35'),
(10, '565556555655', '1678561724.jfif', '2023-03-11 13:38:44', '2023-03-11 13:38:44'),
(11, '565556555655', '1678631173.jpg', '2023-03-12 08:56:13', '2023-03-12 08:56:13'),
(12, '202311111130', '1678828173.jpg', '2023-03-14 15:39:33', '2023-03-14 15:39:33'),
(13, '202311111130', '1678829186.jfif', '2023-03-14 15:56:26', '2023-03-14 15:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `number` varchar(13) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `education` varchar(60) NOT NULL,
  `since` varchar(5) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `about` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `photo`, `name`, `email`, `address`, `number`, `hospital_id`, `password`, `department`, `education`, `since`, `gender`, `dob`, `about`, `created_at`, `updated_at`) VALUES
(12, '12.jpeg', 'DR. DARSHAN C. SHAH', 'darsan@gmail.com', 'Ahmedabad', '8765434567', 1, 'dr123', 'M.D. (Physician) - Critical Care', 'MD - Medicine, MBBS', '1989', 'male', '2024-06-12', 'poioiooihoihhoi', NULL, '2024-06-21 11:19:19'),
(20, '20.jpeg', 'DR. NAVIN PATEL', 'navin@gmail.com', 'Ahmedabad', '975434576', 1, 'dr123', 'ENT', 'M.S. (ENT), MBBS', '1989', NULL, NULL, '', NULL, NULL),
(21, '21.jpeg', 'Dr Anisha Vora', 'anisha@gmail.com', 'Ahmedabad', '975434576', 1, 'dr123', 'MRD', 'MBBS', '1989', NULL, NULL, '', NULL, NULL),
(22, '22.jpeg', 'DR. KUSHAL SHAH', 'khushal@gmail.com', 'Ahmedabad', '975434576', 1, 'dr123', 'Consultant Neuro and Spine Surgeon', 'M.Ch. (Neurosurgery), MS, MBBS', '2016', NULL, NULL, '', NULL, NULL),
(23, '23.jpeg', 'Dr Jay Shah', 'jay@gmail.com', 'Ahmedabad', '87654347', 1, 'dr123', 'INTERVENTIONAL CARDIOLOGIST', 'MD (Medicine), DNB (Medicine),DNB (Cardiology), FACC, FESC', '2004', NULL, NULL, 'BEST INTERVENTIONAL CARDIOLOGIST', NULL, NULL),
(25, '25.jpeg', 'DR. SHAURIN SHAH', 'shaurin@gmail.com', 'Ahmedabad', '976543456', 1, 'dr123', 'INTERVENTIONAL CARDIOLOGIST', 'DM (CARDIOLOGY) UN MEHTA - MD (MEDICINE),MBBS B J MEDICAL', '2008', NULL, NULL, '', NULL, NULL),
(26, '26.jpeg', 'Dr. Dhruvkumar Jadeja', 'dhruv@gmail.com', 'Ahmedabad', '87654347', 1, 'dr123', 'INTERVENTIONAL CARDIOLOGIST', 'DNB (Cardiology) - MD (MEDICINE) - MBBS', '2018', NULL, NULL, '', NULL, NULL),
(27, '27.jpeg', 'Dr. Abhishek Parmar', 'abhishek@gmail.com', 'Ahmedabad', '87654347', 1, 'dr123', 'Cardiovascular Thorasic Surgeon', 'Mch (CVTS), MS, MBBS', '2010', NULL, NULL, '', NULL, NULL),
(28, '28.jpeg', 'Dr Suresh Bhagia', 'suresh@gmail.com', 'Ahmedabad', '976543456', 1, 'dr123', 'Cardiovascular Thorasic Surgeon', 'DNB, FRCS, MS, MBBS', '2001', NULL, NULL, '', NULL, NULL),
(29, '29.jpeg', 'Dr Rajan Merai', 'rajan@gmail.com', 'Ahmedabad', '976543456', 1, 'dr123', 'ENT', 'ENT - DLO', '2011', NULL, NULL, '', NULL, NULL),
(30, '30.jpeg', 'Dr Mayank Shah', 'mayank@gmail.com', 'Ahmedabad', '8765434567', 1, 'dr123', 'Nephrologist', 'DM (NEPHROLOGY), MD (MEDICINE), MBBS', '-', NULL, NULL, '', NULL, NULL),
(31, '31.jpeg', 'Dr Yagnesh Bhavsar', 'yangesh@gmail.com', 'Ahmedabad', '976543456', 1, 'dr123', 'M.D. (Physician) - Critical Care', 'MD - Medicine, MBBS', '2011', NULL, NULL, '', NULL, NULL),
(32, '32.jpeg', 'Dr. Nimesh Parekh', 'nimesh@gmail.com', 'Ahmedabad', '87654347', 1, 'dr123', 'Intensive Care and Critical Care', 'MD (Anesthesia), MBBS', '2007', NULL, NULL, '', NULL, NULL),
(33, '33.jpeg', 'Dr Paresh Shah', 'paresh@gmail.com', 'Ahmedabad', '975434576', 1, 'dr123', 'Anesthesiology', 'MD (Anesthesia), MBBS', '1996', NULL, NULL, '', NULL, NULL),
(34, '34.jpeg', 'Dr Jimit Mehta', 'jimit@gmail.com', 'Ahmedabad', '8765434567', 1, 'dr123', 'Pathologist', 'MD (Pathologist), MBBS', '2007', NULL, NULL, '', NULL, NULL),
(35, '35.jpeg', ' Dr. Heer Patel', 'heer@gmail.com', 'Ahmedabad', '8765434567', 1, 'dr123', 'ENT', '-', '-', NULL, NULL, '', NULL, NULL),
(36, '36.jpg', 'hifrsrfdz', 'hbt9712@gmail.com', 'ouhig', '9989879988', 1, '99', 'jhgjg', 'iughi', '5544', 'male', '2023-03-27', 'khiu', '2023-04-02 13:11:01', '2023-04-02 18:15:18');

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(90) NOT NULL,
  `address` varchar(90) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `room` varchar(10) NOT NULL,
  `doctors` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `name`, `address`, `number`, `email`, `department`, `room`, `doctors`, `created_at`, `updated_at`) VALUES
(1, 'Life Care', 'sardar', '07940204020', 'Info@Lifecare.Co.in', '8', '200', '17', '2023-03-14 12:11:53', '2023-03-14 12:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `log_data`
--

CREATE TABLE `log_data` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(30) NOT NULL,
  `status` varchar(10) DEFAULT 'offline',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_data`
--

INSERT INTO `log_data` (`log_id`, `doctor_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '23', 'Online', '2023-03-15 13:16:02', '2024-06-21 11:21:41'),
(3, '20', 'Offline', '2023-03-15 13:24:17', '2023-04-03 09:48:35'),
(4, '11', 'Offline', '2023-03-22 07:12:48', '2023-03-22 07:14:36');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_02_23_183915_create_reviews_table', 1),
(16, '2023_02_23_192450_create_pending_updates_table', 1),
(17, '2023_02_23_192724_create_patients_table', 1),
(18, '2023_02_23_192753_create_doctors_table', 1),
(19, '2023_02_23_192826_create_book_apps_table', 1),
(20, '2023_02_23_192844_create_blogs_table', 1),
(21, '2023_02_24_063147_create_hospitals_table', 2),
(22, '2023_02_24_105956_create_slots_table', 3),
(23, '2023_03_10_071600_create_reports_table', 4),
(24, '2023_03_11_150135_create_data_table', 5),
(25, '2023_03_12_190036_create_tmps_table', 6),
(26, '2023_03_14_124610_create_news_updates_table', 7),
(27, '2023_03_15_094943_create_log_data_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `contant` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`news_id`, `date`, `photo`, `title`, `contant`, `created_at`, `updated_at`) VALUES
(1, '2023-03-14', '-', 'Quidem autem et impedit', 'Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...', '2023-03-14 07:41:49', '2023-03-14 07:41:49'),
(2, '2023-03-15', NULL, NULL, NULL, '2023-03-14 19:01:03', '2023-03-14 19:01:03'),
(3, '2023-03-16', NULL, NULL, NULL, '2023-03-16 02:55:33', '2023-03-16 02:55:33'),
(4, '2023-03-17', NULL, NULL, NULL, '2023-03-16 23:18:41', '2023-03-16 23:18:41'),
(5, '2023-03-18', NULL, NULL, NULL, '2023-03-18 06:24:44', '2023-03-18 06:24:44'),
(6, '2023-03-19', NULL, NULL, NULL, '2023-03-19 15:59:18', '2023-03-19 15:59:18'),
(7, '2023-03-20', NULL, NULL, NULL, '2023-03-20 06:09:37', '2023-03-20 06:09:37'),
(8, '2023-03-21', NULL, NULL, NULL, '2023-03-20 19:13:46', '2023-03-20 19:13:46'),
(9, '2023-03-21', '1679393603.jfif', 'corona', 'iuyi8eyihjhcsgoiusiagoljfsa\r\nkhkhoifitfrngchgimm mhohf mhok .iusagkc.awckuawh ohihkf/kjbf.,fhklhfkh,.b jfagjholfs]afp[po\r\njjgfolueogiupifphaef\r\n\r\nigiuagfiygjaf', '2023-03-21 10:13:23', '2023-03-21 10:13:23'),
(10, '2023-03-21', '1679394153.png', 'htdhg', 'cgfkgkl;\r\n;lkcjhcdsdjuu;\r\njhhjgcjgkhgfgdjhb  yrhbnbvjyfytfjv jgihyuiuey76uyuykb iyt8tirteriy kt8t8iypiiyib ;iryriutgufuryhc;\r\niuduitiyiyholj;l', '2023-03-21 10:22:33', '2023-03-21 10:22:33'),
(11, '2023-03-21', '1679394255.docx', 'yfyf', 'uuoj\r\n\r\n\r\nj;\'l\r\nklhj', '2023-03-21 10:24:16', '2023-03-21 10:24:16'),
(12, '2023-03-22', NULL, NULL, NULL, '2023-03-22 03:03:37', '2023-03-22 03:03:37'),
(13, '2023-03-30', NULL, NULL, NULL, '2023-03-30 05:08:38', '2023-03-30 05:08:38'),
(14, '2023-04-02', NULL, NULL, NULL, '2023-04-02 09:49:02', '2023-04-02 09:49:02'),
(15, '2023-04-03', NULL, NULL, NULL, '2023-04-03 04:21:48', '2023-04-03 04:21:48'),
(16, '2023-10-20', NULL, NULL, NULL, '2023-10-20 10:58:02', '2023-10-20 10:58:02'),
(17, '2024-06-21', NULL, NULL, NULL, '2024-06-21 10:17:16', '2024-06-21 10:17:16');

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `health_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `bg` varchar(5) DEFAULT NULL,
  `long_disease` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`health_id`, `name`, `m_name`, `l_name`, `email`, `password`, `photo`, `address`, `city`, `number`, `gender`, `dob`, `age`, `bg`, `long_disease`, `created_at`, `updated_at`) VALUES
(202311111130, 'hari', 'Mohan', 'Jadeja', 'hbt9712@gmail.com', '6767', '202311111130.png', 'subhash nagar', 'Gandhidham', '575465465', 'male', '2002-02-07', '0', 'B+', NULL, '2023-03-13 07:13:03', '2023-03-22 05:46:26'),
(202311111134, 'mihir', 'u', 'dave', 'hbt9712@gmail.com', '7878', '202311111134.jfif', 'Gnadhidham', 'Gandhidham', '796868687687', 'male', '2023-03-02', '0', 'A+', 'ljljll', '2023-03-17 12:06:53', '2023-04-02 18:07:12'),
(565556555655, 'hi', 'h', 'thacker', 'h@i', '12345', 'pic-1.png', 'k', 'mmm', '975434576', 'male', '2023-01-17', '0', NULL, NULL, NULL, '2023-03-14 06:51:14'),
(787866554545, 'Rashmi', 'h', 'panchal', 'rashmi@gmail.com', 'ra123', '787866554545.png', 'golden road', 'rajkot', '975434576', 'female', '1997-03-10', '26', NULL, NULL, NULL, '2023-03-17 12:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `pending_updates`
--

CREATE TABLE `pending_updates` (
  `pu_id` bigint(20) UNSIGNED NOT NULL,
  `health_id` varchar(12) NOT NULL,
  `field` varchar(6) NOT NULL,
  `proof` varchar(100) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `photo` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `up_name` int(11) NOT NULL DEFAULT 2,
  `up_dob` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pending_updates`
--

INSERT INTO `pending_updates` (`pu_id`, `health_id`, `field`, `proof`, `name`, `mname`, `lname`, `photo`, `dob`, `status`, `up_name`, `up_dob`, `created_at`, `updated_at`) VALUES
(1, '5655', 'photo', '5655_proof.jpg', 'Nirdoash ', 'n', 'mandaliya', 'pic-3.png', '1984-03-08', 'confirm', 2, 2, '2023-02-24 13:27:31', '2023-02-24 13:27:31'),
(3, '202311111130', 'all', 'admin2.png', 'jay', 'k', 'patel', 'contact.jpg', '1990-09-20', 'pending', 2, 2, '2023-03-14 11:47:40', '2023-04-03 06:01:09');

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` bigint(20) UNSIGNED NOT NULL,
  `health_id` varchar(12) NOT NULL,
  `hospital_id` varchar(10) NOT NULL,
  `hospital_name` varchar(40) NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `check_date` date NOT NULL,
  `chk_time` varchar(20) DEFAULT NULL,
  `notes` varchar(500) NOT NULL,
  `notes_img` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `health_id`, `hospital_id`, `hospital_name`, `doctor`, `check_date`, `chk_time`, `notes`, `notes_img`, `created_at`, `updated_at`) VALUES
(1, '5655', '1', 'life care', 'jay', '2023-03-01', NULL, 'cold,fever', '-', NULL, NULL),
(3, '5655', '1', 'life care', 'vora', '2023-03-17', 'morning', 'utug;ifugh\r\ngfuguhj\r\nhugij;\r\nljlk\r\n\'\r\nkkb\r\n;;k', '1679053239.jpg', '2023-03-17 11:40:39', '2023-03-17 11:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `stars` varchar(5) NOT NULL,
  `description` varchar(800) NOT NULL,
  `health_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `name`, `stars`, `description`, `health_id`, `created_at`, `updated_at`) VALUES
(1, 'Hitesh thacker', '4.5', ' We are a specialized palliative care centre. Our exceptional palliative care team is ready to assist you with your delicate care need.\r\n The practice of palliative care if commonly referred to in parallel with hospice care. Unlike hospice care however, the practice of palliative care is not limited to the management of patients inflicted with cancer. Palliative care focuses on improving the quality of life and providing comfort to patients afflicted with all forms of debilitating and life-threatening medical conditions.\r\nIt was a comfortable stay. The staff was very concerned and helpful. Overall a great experience. Keep up the good work', 5655, NULL, NULL),
(2, 'Rashmi panchal', '4', 'Wonderful experience with LIFECARE HOSPITAL. Dr.DEEPAK N. VORA was a wonderful surgeon, and the staff was always helpful and kind. They ensured I had a smooth prep, surgery, and follow-up. I am so glad I chose LIFECARE HOSPITAL  and would highly recommend to anyone. ', 5556, NULL, NULL),
(3, 'Nirdoash mandaliya', '4.5', 'Great medical office, wonderful and warm experience from start to finish. Appreciate Dr. (Name) taking time to go over the diagnosis clearly and treatment options. Was referred over by my general doctor and can see why. Highly recommended', 3333, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `slot_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `s1` int(11) NOT NULL DEFAULT 5,
  `s2` int(11) NOT NULL DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `date`, `s1`, `s2`, `created_at`, `updated_at`) VALUES
(1, '2023-03-10', 4, 5, NULL, '2023-03-10 11:08:38'),
(2, '2023-03-07', 0, 5, NULL, '2023-03-05 07:24:44'),
(3, '2023-03-16', 3, 5, '2023-03-13 21:59:03', '2023-03-15 03:46:35'),
(4, '2023-03-19', 5, 4, '2023-03-18 06:31:52', '2023-03-18 06:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `tmps`
--

CREATE TABLE `tmps` (
  `tmp_id` bigint(20) UNSIGNED NOT NULL,
  `h_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tmps`
--

INSERT INTO `tmps` (`tmp_id`, `h_id`, `created_at`, `updated_at`) VALUES
(1, 11111142, NULL, '2023-03-22 05:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `about` varchar(500) NOT NULL,
  `education` varchar(60) NOT NULL,
  `number` varchar(12) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `photo`, `about`, `education`, `number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(108, 'Deepak Vora', '11.jpeg', 'It’s been said that one must think, plan, then act, and likewise once you start there should be no turning back. Mr. Vora’s definition of work was always crystal clear, that you can tackle any situation as long as you are working as a team, and the work should be done in an automated process rather than a single-handed task..', 'infrastructure and equipments', '9875654345', 'dvora@gmail.com', NULL, 'admin108', NULL, NULL, '2024-06-21 11:05:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `book_apps`
--
ALTER TABLE `book_apps`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `log_data`
--
ALTER TABLE `log_data`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_updates`
--
ALTER TABLE `news_updates`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`health_id`);

--
-- Indexes for table `pending_updates`
--
ALTER TABLE `pending_updates`
  ADD PRIMARY KEY (`pu_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `tmps`
--
ALTER TABLE `tmps`
  ADD PRIMARY KEY (`tmp_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_apps`
--
ALTER TABLE `book_apps`
  MODIFY `app_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `data_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_data`
--
ALTER TABLE `log_data`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `health_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898956563235;

--
-- AUTO_INCREMENT for table `pending_updates`
--
ALTER TABLE `pending_updates`
  MODIFY `pu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tmps`
--
ALTER TABLE `tmps`
  MODIFY `tmp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
