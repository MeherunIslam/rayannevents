-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 07:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayann`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$9zf.Bozxb1B1L06HbpO3kunibhbJ7XJ5c1DG1MUbV5iedc3T0h1CG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE `applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position_id` int(11) NOT NULL,
  `apply_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applies`
--

INSERT INTO `applies` (`id`, `position_id`, `apply_name`, `apply_contact`, `apply_email`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'meherun islam', '2452345325', 'meherunislam@gmail.com', '1622262664.pdf', 1, '2021-05-28 20:31:04', '2021-05-28 20:31:04'),
(7, 1, 'meherun islam', '65234', 'meherun@gmail.com', '1622354403.pdf', 1, '2021-05-29 22:00:03', '2021-05-29 22:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `booking_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `event_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `order_id`, `category_id`, `booking_first_name`, `booking_last_name`, `booking_email`, `booking_phone`, `address`, `state`, `post_code`, `event_date`, `start_time`, `end_time`, `guest`, `created_at`, `updated_at`) VALUES
(0, 1, 8, 'Taniya Ahmed', 'ahmed', 'taniyaahmed942@gmail.com', '2874623874987', 'werwerg', 'narayangonj', 3453, '29.04.2021', '2.00 pm', '6.00 pm', '200', '2021-05-28 19:29:00', NULL),
(5, 17, 0, 'meherun', 'islam', 'meherun@gmail.com', '2874623874', 'werw', 'wefe', 23412, '22.04.2021', '2.00 pm', '5.00 pm', '234', '2021-04-20 20:50:29', NULL),
(6, 18, 0, 'Khadiza Islam', 'islam', 'meherunislam72@gmail.com', '2874623874', 'werwerg', 'fgvfrgv', 3453, '29.04.2021', '2.00 pm', '6.00 pm', '150', '2021-04-24 05:37:16', NULL),
(7, 19, 0, 'Khadiza Islam', 'ahmed', 'meherunislam72@gmail.com', '28746238743445', 'whatever', 'whatever', 1400, '29.05.2021', '2.00 pm', '5.00 pm', '200', '2021-04-24 05:52:17', NULL),
(8, 20, 0, 'Khadiza', 'islam', 'meherunislam72@gmail.com', '2874623874987', 'masdair', 'narayangonj', 1400, '29.04.2021', '2.00 pm', '6.00 pm', '150', '2021-04-24 06:28:35', NULL),
(9, 21, 0, 'Taniya Ahmed', 'ahmed', 'taniyaahmed942@gmail.com', '28746238743445', 'whatever', 'whatever', 1400, '22.04.2021', '2.00 pm', '6.00 pm', '200', '2021-05-24 22:38:00', NULL),
(14, 49, 3, 'meherun', 'islam', 'meherunislam@gmail.com', '28746238743445', 'whatever', 'whatever', 1400, '22.06.2021', '2.00 pm', '6.00 pm', '200', '2021-05-28 20:29:10', NULL),
(15, 50, 41, 'Khadiza Islam', 'islam', 'meherunislam72@gmail.com', '28746238743445', 'masdair', 'narayangonj', 1400, '29.05.2021', '2.00 pm', '6.00 pm', '200', '2021-05-29 02:58:43', NULL),
(16, 51, 36, 'Taniya', 'ahmed', 'taniyaahmed942@gmail.com', '28746238743445', 'volail', 'narayangonj', 1400, '29.06.2021', '2.00 pm', '6.00 pm', '234', '2021-05-29 21:32:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_price` int(11) NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `car_price`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Car 1', 20000, '<p>Price for 1 hour - 20000</p>', 'userfont/images/car/upload/1697561057345321.jpeg', 1, '2021-04-20 04:06:21', NULL),
(5, 'Car 2', 15000, '<p>Price for 1 hour - 15000</p>', 'userfont/images/car/upload/1697561120797506.jpg', 1, '2021-04-20 04:07:21', NULL),
(6, 'Car 3', 21000, '<p>Price for 1 hour - 21000<br></p>', 'userfont/images/car/upload/1697561835147080.jpg', 1, '2021-04-20 04:18:42', NULL),
(7, 'Car 4', 17000, '<p>Price for 1 hour - 17000<br></p>', 'userfont/images/car/upload/1697561978015824.jpg', 1, '2021-04-20 04:20:59', NULL),
(8, 'Car 5', 23000, '<p>Price for 1 hour - 23000<br></p>', 'userfont/images/car/upload/1697562048771472.jpg', 1, '2021-04-20 04:22:06', NULL),
(9, 'Car 6', 15000, '<p>Price for 1 hour - 15000<br></p>', 'userfont/images/car/upload/1697562086336054.jpeg', 1, '2021-04-20 04:22:42', NULL),
(10, 'Car 7', 21000, '<p>Price for 1 hour - 21000<br></p>', 'userfont/images/car/upload/1697562500490410.jpg', 1, '2021-04-20 04:29:17', NULL),
(11, 'Car 8', 23000, '<p>Price for 1 hour - 23000<br></p>', 'userfont/images/car/upload/1697562544682073.jpg', 1, '2021-04-20 04:29:59', NULL),
(12, 'Car 9', 22000, '<p>Price for 1 hour - 22000<br></p>', 'userfont/images/car/upload/1697562569689429.jpg', 1, '2021-04-20 04:30:23', NULL),
(15, 'Palki 1', 22000, '<p>Price for 1 hour - 22000<br></p>', 'userfont/images/car/upload/1697562775193041.jpg', 1, '2021-04-20 04:33:39', NULL),
(16, 'Palki 2', 23000, '<p>Price for 1 hour - 23000<br></p>', 'userfont/images/car/upload/1697562819527243.jpg', 1, '2021-04-20 04:34:21', NULL),
(17, 'Palki 3', 21000, '<p>Price for 1 hour - 21000<br></p>', 'userfont/images/car/upload/1697562844890704.jpg', 1, '2021-04-20 04:34:45', NULL),
(18, 'Palki 4', 15000, '<p>Price for 1 hour - 15000<br></p>', 'userfont/images/car/upload/1697563363132885.jpg', 1, '2021-04-20 04:43:00', NULL),
(19, 'Palki 5', 20000, '<p>Price for 1 hour - 20000<br></p>', 'userfont/images/car/upload/1697563534878486.jpg', 1, '2021-04-20 04:45:43', NULL),
(20, 'Palki 6', 23000, '<p>Price for 1 hour - 23000<br></p>', 'userfont/images/car/upload/1697563609280806.jpg', 1, '2021-04-20 04:46:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `customize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_books`
--

CREATE TABLE `car_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `client_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_books`
--

INSERT INTO `car_books` (`id`, `user_id`, `car_id`, `client_first_name`, `client_last_name`, `client_email`, `client_address`, `client_phone`, `client_date`, `client_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 15, 'mehul', 'ahmed', 'mehul@gmail.com', 'west masdair, pakapul', '28374628734', '12.06.2021', '2.00 pm', 0, '2021-05-27 21:03:26', NULL),
(2, 7, 12, 'meherun', 'islam', 'meherun@gmail.com', 'west masdair, pakapul, narayangonj', '28374628734', '12.05.2021', '6.00 pm', 1, '2021-05-27 21:10:48', '2021-05-29 03:06:11'),
(3, 7, 8, 'tahi', 'khan', 'soha@gmail.com', 'west masdair, pakapul, narayangonjsdfsdfvfr', '76532698', '25.04.2021', '2.00 pm', 2, '2021-05-27 21:37:40', '2021-05-29 03:06:08'),
(11, 3, 10, 'Tehmeed', 'Rayann', 'rayann@gmail.com', 'west masdair, pakapul, gorosthan road, narayangonj', '76532698', '25.06.2021', '3.00 pm', 0, '2021-05-29 22:09:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(32, 'Birthdays Specials-Teenage', 1, '2021-02-16 23:24:30', '2021-02-16 23:28:29'),
(34, 'Birthdays Specials-Baby', 1, '2021-02-16 23:25:14', '2021-02-16 23:28:10'),
(36, 'Wedding Parties-Christian', 1, '2021-02-16 23:26:32', NULL),
(37, 'Wedding Parties-Hindu', 1, '2021-02-16 23:26:52', NULL),
(38, 'Wedding Parties-Muslim', 1, '2021-02-16 23:27:18', NULL),
(39, 'Birthdays Specials-Adult', 1, '2021-02-17 09:14:42', NULL),
(40, 'Engagement Party', 1, '2021-02-25 02:40:29', NULL),
(41, 'Wedding Anniversary', 1, '2021-02-25 02:40:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_name`, `user_contact`, `user_email`, `user_message`, `created_at`, `updated_at`) VALUES
(1, 'meherun', '8324928', 'meherun@gmail.com', 'hi', '2021-04-02 03:36:51', NULL),
(2, 'meherun', '8324928', 'meherun@gmail.com', 'hi', '2021-04-03 01:00:43', NULL),
(3, 'meherun', '8324928', 'taniaahmed@gmail.com', 'hlw', '2021-04-03 01:10:29', NULL),
(4, 'meherun', '0193787634485', 'taniaahmed@gmail.com', 'hellow i am khadiza islam meherun . i am one of your customer', '2021-04-03 08:04:04', NULL),
(5, 'meherun', '7634879569', 'meherun@gmail.com', 'hi i am meherun', '2021-04-20 20:51:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(2, 'BOISHAKH', 5, 1, '2021-02-22 12:49:31', NULL),
(3, 'EID-UL-FITR', 15, 1, '2021-04-02 03:32:57', NULL),
(4, 'EID-UL-ADHA', 20, 1, '2021-04-02 03:33:07', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Wedding Parties', 1, '2021-02-16 23:22:31', NULL),
(12, 'Birthdays Specials', 1, '2021-02-16 23:22:42', NULL),
(13, 'Other Events', 1, '2021-02-25 02:39:26', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_07_145007_create_admins_table', 1),
(5, '2021_02_14_203427_create_categories_table', 1),
(6, '2021_02_16_181638_create_groups_table', 1),
(7, '2021_02_16_194422_create_subcategories_table', 1),
(8, '2021_02_17_162112_create_products_table', 1),
(9, '2021_02_17_163043_update_description_in_products_table', 1),
(10, '2021_02_21_151306_create_coupons_table', 1),
(11, '2021_02_22_095405_create_carts_table', 1),
(12, '2021_02_22_180353_create_orders_table', 1),
(13, '2021_02_22_180719_create_order_items_table', 1),
(14, '2021_02_22_181657_create_wishlists_table', 1),
(15, '2021_03_03_041442_create_bookings_table', 1),
(16, '2021_03_21_143426_create_projects_table', 1),
(17, '2021_03_27_090708_create_contacts_table', 1),
(18, '2021_03_27_195333_create_positions_table', 1),
(19, '2021_03_28_074833_create_applies_table', 1),
(20, '2021_04_03_062020_create_parlors_table', 1),
(21, '2021_04_03_140812_create_cars_table', 1),
(22, '2021_04_04_093058_create_car_books_table', 1),
(23, '2021_05_03_125601_create_subscribes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `invoice_no`, `payment_type`, `total`, `subtotal`, `coupon_discount`, `status`, `created_at`, `updated_at`) VALUES
(50, 2, '67809726', 'handcash', '118150', '139000', 15, 1, '2021-05-29 02:58:43', '2021-05-29 03:07:02'),
(51, 3, '31448208', 'handcash', '195500', '230000', 15, 0, '2021-05-29 21:32:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `customize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_qty`, `price`, `customize`, `created_at`, `updated_at`) VALUES
(72, 50, 39, 2, 15000, NULL, '2021-05-29 02:58:43', NULL),
(73, 50, 67, 1, 30000, NULL, '2021-05-29 02:58:43', NULL),
(74, 50, 49, 1, 59000, 'with white roses', '2021-05-29 02:58:43', NULL),
(75, 50, 59, 1, 20000, NULL, '2021-05-29 02:58:43', NULL),
(76, 51, 34, 1, 110000, NULL, '2021-05-29 21:32:00', NULL),
(77, 51, 46, 1, 120000, NULL, '2021-05-29 21:32:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parlors`
--

CREATE TABLE `parlors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `appoint_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appoint_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appoint_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appoint_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appoint_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parlors`
--

INSERT INTO `parlors` (`id`, `user_id`, `appoint_first_name`, `quantity`, `appoint_email`, `appoint_phone`, `appoint_date`, `appoint_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'tehmeed', '10', 'meherun@gmail.com', '7346387', '30.04.2021', '10.00 am', 0, '2021-04-20 20:38:07', NULL),
(2, 6, 'tania ahmed', '8', 'taniya@gmail.com', '87320423756', '12.05.2021', '10.30 am', 0, '2021-04-20 21:05:03', '2021-05-29 03:06:47'),
(3, 5, 'tehmeed rayann', '8', 'meherun@gmail.com', '8763276', '12.06.2021', '10.00 am', 1, '2021-05-23 02:34:05', '2021-05-29 03:06:45'),
(4, 5, 'tania ahmed', '7', 'taniya@gmail.com', '8763276', '12.05.2021', '10.30 am', 2, '2021-05-23 02:37:26', '2021-05-29 03:06:42'),
(5, 7, 'tania ahmed nishi', '10', 'taniya@gmail.com', '7346387', '12.06.2021', '11.00 am', 3, '2021-05-27 21:11:50', '2021-05-29 03:06:41'),
(6, 3, 'Tehmeed Rayann', '5', 'rayann@gmail.com', '8763276', '23.06.2021', '10.00 am', 0, '2021-05-29 22:08:07', NULL);

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
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position_name`, `short_description`, `long_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Video Or Cinematographer', '<p>Last Date of Submission: 15 August, 2021</p>', '<p>No. of Vacancies</p><p>01 [ Male ]</p><p>Cinematographer must have Creative &amp; news sense own gear or Camera, lens &amp; flash.<span style=\"font-size: 0.875rem;\">&nbsp;</span></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 1, '2021-04-03 05:58:37', '2021-04-03 06:09:59'),
(2, 'Photographer', '<p>Last Date of Submission: 15 August, 2021</p>', '<p>No. of Vacancies</p><p>02 [ Male &amp; Female ]</p><p>Photographer must have Creative &amp; news sense own gear or Camera, lens &amp; flash.<span style=\"font-size: 0.875rem;\">&nbsp;</span></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 1, '2021-04-03 06:01:54', '2021-04-03 06:09:38'),
(3, 'Marketing Executive & Creative Designer', '<p><span style=\"font-size: 0.875rem;\">Last Date of Submission: 15 August, 2021</span></p>', '<p>No. of Vacancies</p><p>02 [ Male ( on Field )&nbsp; &amp; Female ( Online )&nbsp; ]</p><p>Event, Interior, Production</p><p><br></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 0, '2021-04-03 06:07:37', '2021-04-03 06:17:45'),
(4, 'Junior Marketing Executive', '<p><span style=\"font-size: 0.875rem;\">Last Date of Submission: 22 August, 2021</span></p><p><br></p>', '<p>No. of Vacancies</p><p>02 [ Male &amp; Female ]</p><p>Photographer must have Creative &amp; news sense own gear or Camera, lens &amp; flash.<span style=\"font-size: 0.875rem;\">&nbsp;</span></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 1, '2021-04-03 06:37:12', '2021-04-03 06:43:18'),
(5, 'Junior Operations Manager', '<p>Last Date of Submission: 20 August, 2021</p>', '<p>No. of Vacancies</p><p>02 [ Male &amp; Female ]</p><p>Photographer must have Creative &amp; news sense own gear or Camera, lens &amp; flash.<span style=\"font-size: 0.875rem;\">&nbsp;</span></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 1, '2021-04-03 06:38:14', NULL),
(6, '3D Modeler & Renderer', '<p>Last Date of Submission: 20 August, 2021</p>', '<p>No. of Vacancies</p><p>01 [ Male]</p><p>Photographer must have Creative &amp; news sense own gear or Camera, lens &amp; flash.<span style=\"font-size: 0.875rem;\">&nbsp;</span></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 1, '2021-04-03 06:39:12', NULL),
(7, 'Graphics Designer', '<p>Last Date of Submission: 20 August, 2021</p>', '<p>No. of Vacancies</p><p>01 [ Female ]</p><p>Photographer must have Creative &amp; news sense own gear or Camera, lens &amp; flash.<span style=\"font-size: 0.875rem;\">&nbsp;</span></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 1, '2021-04-03 06:40:02', NULL),
(8, 'Sketch Artist', '<p>Last Date of Submission: 22 August, 2021</p>', '<p>No. of Vacancies</p><p>02 [ Male &amp; Female ]</p><p>Photographer must have Creative &amp; news sense own gear or Camera, lens &amp; flash.<span style=\"font-size: 0.875rem;\">&nbsp;</span></p><p>Educational Requirements:</p><ul><li>Under graduated will be part-time ( as work basic) ( only photographer )</li><li>Post graduated will be ( Full-time with terms-Condition ) ( other Post )</li></ul><p>Additional Job Requirements:</p><ul><li>Age 22 to 30 year(s)</li><li>Male/Female both are allowed to apply</li><li>Ability to work independently and under time pressure</li></ul>', 1, '2021-04-03 06:40:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `group_id`, `created_at`, `updated_at`, `category_id`, `subcategory_id`, `product_name`, `product_slug`, `product_code`, `product_quantity`, `short_description`, `long_description`, `price`, `image_one`, `image_two`, `image_three`, `status`) VALUES
(1, 11, '2021-04-03 04:38:05', NULL, 36, 9, 'Love', 'love', '238', '6', '<p>tgrdf</p>', '<p>xfxdfdfdg</p>', 50000, 'userfont/images/product/upload/1696015355475996.jpg', 'userfont/images/product/upload/1696015356137718.jpg', 'userfont/images/product/upload/1696015356266273.jpg', 1),
(2, 11, '2021-04-03 11:24:39', NULL, 38, 10, 'Menu 01', 'menu-01', 'M-1', '1', '<p>Peas Polaw,&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Roast 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Rezala,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shami Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shahi Zafrani Zarda,&nbsp;</span><span style=\"font-size: 0.875rem;\">Borhani,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Peas Polaw - 65 taka (per person)</p><p>2. Chicken Roast&nbsp; 1/4&nbsp; - 110 Taka (per person)</p><p>3. Beef Rezala&nbsp; - 130 Taka (per person)</p><p>4. Shami Kebab&nbsp; - 150 Taka', 595, 'userfont/images/product/upload/1696040934226551.jpg', 'userfont/images/product/upload/1696040934378391.jpg', 'userfont/images/product/upload/1696040934537749.jpg', 1),
(3, 11, '2021-04-03 11:28:44', NULL, 38, 10, 'Menu 02', 'menu-02', 'M-2', '1', '<p>Plain Polaw,&nbsp;&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Tandoori 1/4,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Rezala,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Tikka Kebab,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Plain Polaw - 65 taka (per person)</p><p>2. Chicken Tandoori&nbsp; 1/4&nbsp; - 110 Taka (per person)</p><p>3. Beef Rezala&nbsp; - 130 Taka (per person)</p><p>4. Tikka Kebab&nbsp; - 150 ', 585, 'userfont/images/product/upload/1696041191300112.jpg', 'userfont/images/product/upload/1696041191432236.jpg', 'userfont/images/product/upload/1696041191627321.jpg', 1),
(4, 11, '2021-04-20 05:37:37', NULL, 38, 10, 'Groom Menu 01', 'groom-menu-01', 'GM-1', '1', '<p>Whole Lamb Roast,&nbsp;<span style=\"font-size: 0.875rem;\">Whole Chicken Tandoori,&nbsp;</span><span style=\"font-size: 0.875rem;\">Smoked Hilsa Fish,&nbsp;</span><span style=\"font-size: 0.875rem;\">Nargis Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">King Lobster Fry,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Salads,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Desserts,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Drinks</span></p>', '<p>1. Whole Lamb Roast - 7000 taka (per person)</p><p>2. Whole Chicken Tandoori&nbsp; - 400 Taka (per person)</p><p>3. Smoked Hilsa Fish&nbsp; - 4000 Taka (per person)</p><p>4. Nargis Kebab ( 5 piece )&nbsp; - 250 Taka (per person)</p><p>5. King Lobster Fry&nbsp; - 250 Taka (per person)</p><p>6. Special Salads&nbsp; - 150 Taka (per person)</p><p>7. Special Desserts&nbsp; - 210 Taka (per person)</p><p>8. Special Drinks&nbsp; - 160 Taka (per person)</p>', 12420, 'userfont/images/product/upload/1697566799993773.jpg', 'userfont/images/product/upload/1697566800118777.jpg', 'userfont/images/product/upload/1697566800229511.jpg', 1),
(5, 11, '2021-04-20 05:44:11', NULL, 37, 10, 'Menu 03', 'menu-03', 'M-3', '1', '<p>Shahi Kacchi Biriyani (Bashmati/Chinigura),&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Tandoori 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shami Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shahi Zafrani Zarda,&nbsp;</span><span style=\"font-size: 0.875rem;\">Borhani,&nbsp;</span><span style=\"font-size: 0.875rem;\">Alubukhara Chatni,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Kacchi Biriyani (Beef) - 200 taka (per person)</p><p>2. Chicken Tandoori&nbsp; &nbsp;1/4&nbsp; - 110 Taka (per person)</p><p>3. Shami Kebab&nbsp; - 150 Taka (per person)</p><p>4. Shahi Zafrani Zarda&nbsp; - 50 Taka (per person)</p><p>5. Borhani&nbsp; - 50 Taka (per person)</p><p>6. Alubukhara Chatni - 50 Taka (per person)</p><p>7. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>8. Mineral Water&nbsp; - 20 Taka (per person)</p>', 650, 'userfont/images/product/upload/1697567213170517.jpg', 'userfont/images/product/upload/1697567213284006.jpg', 'userfont/images/product/upload/1697567213384742.jpg', 1),
(6, 11, '2021-04-20 05:46:52', NULL, 37, 10, 'Menu 04', 'menu-04', 'M-4', '1', '<p>Shahi Kacchi Biriyani (Bashmati/Chinigura),&nbsp;&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Roast 1/4,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Jali Kebab,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Alubukhara Chatni, </span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Kacchi Biriyani (Beef) - 200 taka (per person)</p><p>2. Chicken Roast&nbsp; &nbsp;1/4&nbsp; - 110 Taka (per person)</p><p>3. Jali&nbsp; Kebab&nbsp; - 150 Taka (per person)</p><p>4. Firni&nbsp; - 70 Taka (per person)</p><p>5. Soft Drinks - 20 Taka (per person)</p><p>6. Alubukhara Chatni - 50 Taka (per person)</p><p>7. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>8. Mineral Water&nbsp; - 20 Taka (per person)</p>', 640, 'userfont/images/product/upload/1697567381680574.jpg', 'userfont/images/product/upload/1697567381909266.jpg', 'userfont/images/product/upload/1697567382133623.jpg', 1),
(7, 11, '2021-04-20 05:49:22', NULL, 37, 10, 'Groom Menu 02', 'groom-menu-02', 'GM-2', '1', '<p>Whole Lamb Roast,&nbsp;<span style=\"font-size: 0.875rem;\">Whole Chicken Roast,&nbsp;</span><span style=\"font-size: 0.875rem;\">Smoked Ruhita Fish,&nbsp;</span><span style=\"font-size: 0.875rem;\">Nargis Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">King Lobster Fry,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Salads,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Desserts,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Drinks</span></p><div><br></div>', '<p>1. Whole Lamb Roast - 7000 taka (per person)</p><p>2. Whole Chicken Roast&nbsp; - 400 Taka (per person)</p><p>3. Smoked Ruhita Fish&nbsp; - 3000 Taka (per person)</p><p>4. Nargis Kebab ( 5 piece )&nbsp; - 250 Taka (per person)</p><p>5. King Lobster Fry&nbsp; - 250 Taka (per person)</p><p>6. Special Salads&nbsp; - 150 Taka (per person)</p><p>7. Special Desserts&nbsp; - 210 Taka (per person)</p><p>8. Special Drinks&nbsp; - 160 Taka (per person)</p><div><br></div>', 11420, 'userfont/images/product/upload/1697567526683590.jpg', 'userfont/images/product/upload/1697567530770946.jpg', 'userfont/images/product/upload/1697567534823561.jpg', 1),
(8, 11, '2021-04-20 05:51:28', NULL, 36, 10, 'Menu 05', 'menu-05', 'M-5', '1', '<p>Peas Polaw,&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Tandoori 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Rezala,&nbsp;</span><span style=\"font-size: 0.875rem;\">Indian Mixed Vegetable,&nbsp;</span><span style=\"font-size: 0.875rem;\">Jali Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni,&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Peas Polaw - 65 Taka (per person)</p><p>2. Chicken Tandoori&nbsp; &nbsp;1/4&nbsp; - 110 Taka (per person)</p><p>3. Beef Rezala - 130 Taka (per person)</p><p>4. Indian Mixed Vegetable - 35 Taka (per person)</p><p>5. Jali&nbsp; Kebab&nbsp; - 150 Taka (per person)</p><p>6. Firni&nbsp; - 70 Taka (per person)</p><p>7. Soft Drinks - 20 Taka (per person)</p><p>8. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>9. Mineral Water&nbsp; - 20 Taka (per person)</p>', 620, 'userfont/images/product/upload/1697567671440117.jpg', 'userfont/images/product/upload/1697567671484354.jpg', 'userfont/images/product/upload/1697567671520363.jpg', 1),
(9, 11, '2021-04-20 05:53:22', NULL, 36, 10, 'Menu 06', 'menu-06', 'M-6', '1', '<p>Plain Polaw,&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Roast 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mutton Rezala,&nbsp;</span><span style=\"font-size: 0.875rem;\">Indian Mixed Vegetable,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shami Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shahi Zafrani Zarda,&nbsp;</span><span style=\"font-size: 0.875rem;\">Borhani,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Plain Polaw - 65 Taka (per person)</p><p>2. Chicken Roast 1/4&nbsp; - 110 Taka (per person)</p><p>3. Mutton Rezala - 130 Taka (per person)</p><p>4. Indian Mixed Vegetable - 35 Taka (per person)</p><p>5. Shami&nbsp; Kebab&nbsp; - 150 Taka (per person)</p><p>6. Shahi Zafrani Zarda&nbsp; - 50 Taka (per person)</p><p>7. Borhani - 50 Taka (per person)</p><p>8. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>9. Mineral Water&nbsp; - 20 Taka (per person)</p>', 630, 'userfont/images/product/upload/1697567790743716.jpg', 'userfont/images/product/upload/1697567790785359.jpg', 'userfont/images/product/upload/1697567790820247.jpg', 1),
(10, 11, '2021-04-20 05:55:20', NULL, 36, 10, 'Groom Menu 03', 'groom-menu-03', 'GM-3', '1', '<p>Whole Chicken Roast,&nbsp;<span style=\"font-size: 0.875rem;\">Whole Chicken Tandoori,&nbsp;</span><span style=\"font-size: 0.875rem;\">Lamb Roast 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Smoked Vetki Fish,&nbsp;</span><span style=\"font-size: 0.875rem;\">Nargis Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">King Lobster Fry,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Salads,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Desserts,&nbsp;</span><span style=\"font-size: 0.875rem;\">Special Drinks</span></p>', '<p>1. Whole Chicken Roast - 400 taka (per person)</p><p>2. Whole Chicken Tandoori&nbsp; - 400 Taka (per person)</p><p>3. Lamb Roast 1/4&nbsp; - 2500 Taka (per person)</p><p>4. Smoked Vetki Fish&nbsp; - 4000 Taka (per person)</p><p>5. Nargis Kebab ( 5 piece )&nbsp; - 250 Taka (per person)</p><p>6. King Lobster Fry&nbsp; - 250 Taka (per person)</p><p>7. Special Salads&nbsp; - 150 Taka (per person)</p><p>8. Special Desserts&nbsp; - 210 Taka (per person)</p><p>9. Special Drinks&nbsp; - 160 Taka (per person)</p>', 8320, 'userfont/images/product/upload/1697567914808295.jpg', 'userfont/images/product/upload/1697567914853732.jpg', 'userfont/images/product/upload/1697567914889585.jpg', 1),
(11, 12, '2021-04-20 06:24:20', '2021-04-20 06:27:59', 34, 10, 'Menu 07', 'menu-07', 'M-7', '1', '<p>Shahi Kacchi Biriyani (Beef),&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Tandoori 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Bhuna,&nbsp;</span><span style=\"font-size: 0.875rem;\">Jali Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni,&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Kacchi Biriyani (Beef) - 200 Taka (per person)</p><p>2. Chicken Tandoori 1/4&nbsp; - 110 Taka (per person)</p><p>3. Beef Bhuna - 110 Taka (per person)</p><p>4. Jali Kebab - 150 Taka (per person)</p><p>5. Firni&nbsp; - 70 Taka (per person)</p><p>6. Soft Drinks&nbsp; - 20 Taka (per person)</p><p>7. Fresh Sliced Salad - 20 Taka (per person)</p><p>8. Mineral Water&nbsp; - 20 Taka (per person)</p>', 700, 'userfont/images/product/upload/1697569739162986.jpg', 'userfont/images/product/upload/1697569739312892.jpg', 'userfont/images/product/upload/1697569739437637.jpg', 1),
(12, 12, '2021-04-20 06:46:28', NULL, 34, 10, 'Menu 08', 'menu-08', 'M-8', '1', '<p>Shahi Kacchi Biriyani (Beef),&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Roast 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Neem Kaliya,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shami Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Cup Doi,&nbsp;</span><span style=\"font-size: 0.875rem;\">Borhani,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Kacchi Biriyani (Beef) - 200 Taka (per person)</p><p>2. Chicken Roast 1/4&nbsp; - 110 Taka (per person)</p><p>3. Mutton Rezala - 110 Taka (per person)</p><p>4. Shami Kebab - 150 Taka (per person)</p><p>5. Cup Doi&nbsp; - 80 Taka (per person)</p><p>6. Borhani&nbsp; - 50 Taka (per person)</p><p>7. Fresh Sliced Salad - 20 Taka (per person)</p><p>8. Mineral Water&nbsp; - 20 Taka (per person)</p>', 740, 'userfont/images/product/upload/1697571131443872.jpg', 'userfont/images/product/upload/1697571131551024.jpg', 'userfont/images/product/upload/1697571131647156.jpg', 1),
(13, 12, '2021-04-20 06:59:38', NULL, 32, 10, 'Menu 09', 'menu-09', 'M-9', '1', '<p>Plain Polaw</p><p>Mutton Rezala</p><p>BBQ Grilled Chicken Spicy</p><p>Fish Fry(Ruhita)</p><p>Chinese Vegetable</p><p>Shami Kebab</p><p>Shahi Zafrani Zarda</p><p>Borhani</p><p>Fresh Sliced Salad</p><p>Mineral Water</p>', '<p>1. Plain Polaw - 65 Taka (per person)</p><p>2. Mutton Rezala - 110 Taka (per person)</p><p>3. BBQ Grilled Chicken Spicy - 120 Taka (per person)</p><p>4. Fish Fry(Ruhita) - 120 Taka (per person)</p><p>5. Chinese Vegetable - 40 Taka (per person)</p><p>6. Shami Kebab - 150 Taka (per person)</p><p>7. Shahi Zafrani Zarda&nbsp; - 50 Taka (per person)</p><p>8. Borhani&nbsp; - 50 Taka (per person)</p><p>9. Fresh Sliced Salad - 20 Taka (per person)</p><p>10. Mineral Water&nbsp; - 20 Taka (per person)</p>', 745, 'userfont/images/product/upload/1697571958268811.jpg', 'userfont/images/product/upload/1697571958757819.jpg', 'userfont/images/product/upload/1697571959182232.jpg', 1),
(14, 12, '2021-04-20 07:02:34', NULL, 32, 10, 'Menu 10', 'menu-10', 'M-10', '1', '<p>Peas Polaw,&nbsp;<span style=\"font-size: 0.875rem;\">Beef Rezala,&nbsp;</span><span style=\"font-size: 0.875rem;\">BBQ Grilled Chicken Spicy,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fish Dopiaza(Ruhita),&nbsp;</span><span style=\"font-size: 0.875rem;\">Mixed Vegetable,&nbsp;</span><span style=\"font-size: 0.875rem;\">Jali Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni,&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Peas Polaw - 65 Taka (per person)</p><p>2. Beef Rezala - 110 Taka (per person)</p><p>3. BBQ Grilled Chicken Spicy - 120 Taka (per person)</p><p>4. Fish Dopiaza(Ruhita) - 120 Taka (per person)</p><p>5. Mixed Vegetable - 30 Taka (per person)</p><p>6. Jali Kebab - 150 Taka (per person)</p><p>7. Firni&nbsp; - 70 Taka (per person)</p><p>8. Soft Drinks&nbsp; - 20 Taka (per person)</p><p>9. Fresh Sliced Salad - 20 Taka (per person)</p><p>10. Mineral Water&nbsp; - 20 Taka (per person)</p>', 725, 'userfont/images/product/upload/1697572144230883.jpg', 'userfont/images/product/upload/1697572144280232.jpg', 'userfont/images/product/upload/1697572144321619.jpg', 1),
(15, 12, '2021-04-20 07:12:38', NULL, 39, 10, 'Menu 11', 'menu-11', 'M-11', '1', '<p>Shahi Morog Polaw 1/2,&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Roast 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Kala Bhuna,&nbsp;</span><span style=\"font-size: 0.875rem;\">Chinese Mixed Vegetables,&nbsp;</span><span style=\"font-size: 0.875rem;\">Naan 1/2 (Butter),&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Shik Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shahi Zafrani Zarda,&nbsp;</span><span style=\"font-size: 0.875rem;\">Borhani,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Morog Polaw 1/2 - 250 Taka (per person)</p><p>2. Chicken Roast 1/4 - 110 Taka (per person)</p><p>3. Beef Kala Bhuna - 150 Taka (per person)</p><p>4. Chinese Mixed Vegetables - 40 Taka (per person)</p><p>5. Naan 1/2 (Butter) - 50 Taka (per person)</p><p>6. Beef Shik Kebab - 80 Taka (per person)</p><p>7. Shahi Zafrani Zarda&nbsp; - 50 Taka (per person)</p><p>8. Borhani&nbsp; - 50 Taka (per person)</p><p>9. Fresh Sliced Salad - 20 Taka (per person)</p><p>10. Mineral Water&nbsp; - 20 Taka (per person)</p>', 820, 'userfont/images/product/upload/1697572777894174.jpg', 'userfont/images/product/upload/1697572778025786.jpg', 'userfont/images/product/upload/1697572778143594.jpg', 1),
(16, 12, '2021-04-20 07:17:04', NULL, 39, 10, 'Menu 12', 'menu-12', 'M-12', '1', '<p>Shahi Morog Polaw 1/2,&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Tandoori 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mutton Bhuna,&nbsp;</span><span style=\"font-size: 0.875rem;\">Indian Mixed Vegetables,&nbsp;</span><span style=\"font-size: 0.875rem;\">Naan 1/2 (Garlic),&nbsp;</span><span style=\"font-size: 0.875rem;\">Chicken Suslic,&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni,&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Morog Polaw 1/2 - 250 Taka (per person)</p><p>2. Chicken Tandoori 1/4 - 110 Taka (per person)</p><p>3. Mutton Bhuna - 140 Taka (per person)</p><p>4. Indian Mixed Vegetables - 35 Taka (per person)</p><p>5. Naan 1/2 (Garlic) - 60 Taka (per person)</p><p>6. Chicken Suslic - 80 Taka (per person)</p><p>7. Firni&nbsp; - 70 Taka (per person)</p><p>8. Soft Drinks&nbsp; - 20 Taka (per person)</p><p>9. Fresh Sliced Salad - 20 Taka (per person)</p><p>10. Mineral Water&nbsp; - 20 Taka (per person)</p>', 805, 'userfont/images/product/upload/1697573056812003.jpg', 'userfont/images/product/upload/1697573056888576.jpg', 'userfont/images/product/upload/1697573056956370.jpg', 1),
(17, 13, '2021-04-20 07:23:06', NULL, 41, 10, 'Menu 13', 'menu-13', 'M-13', '1', '<p>Shahi Morog Polaw 1/2,&nbsp;<span style=\"font-size: 0.875rem;\">Beef Rezala,&nbsp;</span><span style=\"font-size: 0.875rem;\">Jali Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni,&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Morog Polaw 1/2 - 250 taka (per person)</p><p>2. Beef Rezala&nbsp; - 130 Taka (per person)</p><p>3. Jali Kebab&nbsp; - 150 Taka (per person)</p><p>4. Firni&nbsp; - 50 Taka (per person)</p><p>5. Soft Drinks&nbsp; - 20 Taka (per person)</p><p>6. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>7. Mineral Water&nbsp; - 20 Taka (per person)</p>', 640, 'userfont/images/product/upload/1697573436549811.jpg', 'userfont/images/product/upload/1697573436591899.jpg', 'userfont/images/product/upload/1697573436624426.jpg', 1),
(18, 13, '2021-04-20 07:25:24', NULL, 41, 10, 'Menu 14', 'menu-14', 'M-14', '1', '<p>Shahi Morog Polaw 1/2,&nbsp;<span style=\"font-size: 0.875rem;\">Mutton Rezala,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shami Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shahi Zafrani Zarda,&nbsp;</span><span style=\"font-size: 0.875rem;\">Borhani,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Shahi Morog Polaw 1/2 - 250 taka (per person)</p><p>2. Beef Rezala&nbsp; - 130 Taka (per person)</p><p>3. Jali Kebab&nbsp; - 150 Taka (per person)</p><p>4. Firni&nbsp; - 70 Taka (per person)</p><p>5. Borhani&nbsp; - 50 Taka (per person)</p><p>6. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>7. Mineral Water&nbsp; - 20 Taka (per person)</p>', 690, 'userfont/images/product/upload/1697573580190387.jpg', 'userfont/images/product/upload/1697573580313581.jpg', 'userfont/images/product/upload/1697573580433696.jpg', 1),
(19, 13, '2021-04-20 07:40:55', NULL, 40, 10, 'Menu 15', 'menu-15', 'M-15', '1', '<p>Peas Polaw,&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Roast 1/4,&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Rezala,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shami Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Shahi Zafrani Zarda,&nbsp;</span><span style=\"font-size: 0.875rem;\">Borhani,&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Peas Polaw - 65 taka (per person)</p><p>2. Chicken Roast&nbsp; 1/4&nbsp; - 110 Taka (per person)</p><p>3. Beef Rezala&nbsp; - 130 Taka (per person)</p><p>4. Shami Kebab&nbsp; - 150 Taka (per person)</p><p>5. Shahi Zafrani Zarda&nbsp; - 50 Taka (per person)</p><p>6. Borhani&nbsp; - 50 Taka (per person)</p><p>7. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>8. Mineral Water&nbsp; - 20 Taka (per person)</p>', 595, 'userfont/images/product/upload/1697574554974191.jpg', 'userfont/images/product/upload/1697574557210118.jpg', 'userfont/images/product/upload/1697574557246969.jpg', 1),
(20, 13, '2021-04-20 07:46:20', NULL, 40, 10, 'Menu 16', 'menu-16', 'M-16', '1', '<p>Plain Polaw,&nbsp;&nbsp;<span style=\"font-size: 0.875rem;\">Chicken Tandoori 1/4,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Beef Rezala,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Tikka Kebab,&nbsp;</span><span style=\"font-size: 0.875rem;\">Firni, ,&nbsp;</span><span style=\"font-size: 0.875rem;\">Soft Drinks,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Fresh Sliced Salad,&nbsp;&nbsp;</span><span style=\"font-size: 0.875rem;\">Mineral Water</span></p>', '<p>1. Plain Polaw - 65 taka (per person)</p><p>2. Chicken Tandoori&nbsp; 1/4&nbsp; - 110 Taka (per person)</p><p>3. Beef Rezala&nbsp; - 130 Taka (per person)</p><p>4. Tikka Kebab&nbsp; - 150 Taka (per person)</p><p>5. Firni&nbsp; - 70 Taka (per person)</p><p>6. Soft Drinks&nbsp; - 20 Taka (per person)</p><p>7. Fresh Sliced Salad&nbsp; - 20 Taka (per person)</p><p>8. Mineral Water&nbsp; - 20 Taka (per person)</p><div><br></div>', 585, 'userfont/images/product/upload/1697574897421602.jpg', 'userfont/images/product/upload/1697574897482427.jpg', 'userfont/images/product/upload/1697574897584592.jpg', 1),
(21, 13, '2021-04-24 06:04:57', NULL, 41, 9, 'Cake-01', 'cake-01', 'C-01', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 5000, 'userfont/images/product/upload/1697930906809935.jpg', 'userfont/images/product/upload/1697930906841833.jpg', 'userfont/images/product/upload/1697930906899244.jpg', 1),
(22, 13, '2021-04-24 06:06:53', NULL, 40, 9, 'Cake-02', 'cake-02', 'C-02', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 5500, 'userfont/images/product/upload/1697931028620117.jpg', 'userfont/images/product/upload/1697931028654482.jpg', 'userfont/images/product/upload/1697931028678301.jpg', 1),
(23, 12, '2021-04-24 06:09:24', NULL, 39, 9, 'Cake-03', 'cake-03', 'C-03', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 7000, 'userfont/images/product/upload/1697931187057396.jpg', 'userfont/images/product/upload/1697931187113467.jpg', 'userfont/images/product/upload/1697931187160044.jpg', 1),
(24, 12, '2021-04-24 06:11:50', NULL, 32, 9, 'Cake-04', 'cake-04', 'C-04', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 10000, 'userfont/images/product/upload/1697931339962783.jpg', 'userfont/images/product/upload/1697931340078514.jpg', 'userfont/images/product/upload/1697931340123439.jpg', 1),
(25, 12, '2021-04-24 06:15:36', NULL, 34, 9, 'Cake-05', 'cake-05', 'C-05', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 9000, 'userfont/images/product/upload/1697931576821497.jpg', 'userfont/images/product/upload/1697931576866634.jpg', 'userfont/images/product/upload/1697931576916888.jpg', 1),
(26, 11, '2021-04-24 06:18:08', NULL, 36, 9, 'Cake-06', 'cake-06', 'C-06', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 15000, 'userfont/images/product/upload/1697931737087199.jpg', 'userfont/images/product/upload/1697931737140867.jpg', 'userfont/images/product/upload/1697931737193804.jpg', 1),
(27, 11, '2021-04-24 06:20:13', NULL, 38, 9, 'Cake-07', 'cake-07', 'C-07', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 17000, 'userfont/images/product/upload/1697931868102447.jpg', 'userfont/images/product/upload/1697931868135556.jpg', 'userfont/images/product/upload/1697931868159932.jpg', 1),
(28, 11, '2021-04-24 06:22:29', NULL, 37, 9, 'Cake-08', 'cake-08', 'C-08', '1', '<p>Vanilla Flavor</p>', '<p>You can also customize:</p><p>Strawberry, Chocolate and Mango Flavor</p>', 17000, 'userfont/images/product/upload/1697932009975231.jpg', 'userfont/images/product/upload/1697932009991986.jpg', 'userfont/images/product/upload/1697932010005066.jpg', 1),
(29, 12, '2021-04-25 04:04:18', NULL, 34, 4, 'Magic-01', 'magic-01', 'M-01', '1', 'It\'s magic time', '<p>It\'s magic time... I am your magician Robert</p>', 15000, 'userfont/images/product/upload/1698013913923802.jpg', 'userfont/images/product/upload/1698013913963499.jpg', 'userfont/images/product/upload/1698013913993728.jpg', 1),
(30, 13, '2021-04-28 03:06:32', NULL, 40, 6, 'Venue-01', 'venue-01', 'V-01', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Army Officers Club</span><br></p>', '<p><span style=\"color: rgb(102, 102, 102); font-family: Cairo, sans-serif; font-size: 16px;\">Congratulations on your engagement!</span><br></p>', 50000, 'userfont/images/product/upload/1698282069563241.jpg', 'userfont/images/product/upload/1698282069728492.jpg', 'userfont/images/product/upload/1698282069857177.jpg', 1),
(31, 13, '2021-04-28 03:09:37', NULL, 41, 6, 'Venue-02', 'venue-02', 'V-02', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Pan Pacific Sonargaon Dhaka</span><br></p>', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 120000, 'userfont/images/product/upload/1698282264173855.jpg', 'userfont/images/product/upload/1698282264242756.jpg', 'userfont/images/product/upload/1698282264288291.jpg', 1),
(32, 11, '2021-04-28 03:32:27', NULL, 38, 6, 'Venue-03', 'venue-03', 'V-03', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Shaheen Hall</span><br></p>', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 130000, 'userfont/images/product/upload/1698283701198193.jpg', 'userfont/images/product/upload/1698283701236116.jpg', 'userfont/images/product/upload/1698283701296117.jpg', 1),
(33, 11, '2021-04-28 03:46:31', NULL, 37, 6, 'Venue-04', 'venue-04', 'V-03', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Raowa Convention Hall (Helmet)</span><br></p>', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 100000, 'userfont/images/product/upload/1698284585298589.jpg', 'userfont/images/product/upload/1698284585401407.jpg', 'userfont/images/product/upload/1698284585452071.jpg', 1),
(34, 11, '2021-04-28 03:51:51', NULL, 36, 6, 'Venue-05', 'venue-05', 'V-05', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Senakunja</span><br></p>', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 110000, 'userfont/images/product/upload/1698284921416576.jpg', 'userfont/images/product/upload/1698284921483281.jpg', 'userfont/images/product/upload/1698284921534711.jpg', 1),
(36, 12, '2021-04-28 04:55:00', NULL, 39, 6, 'Venue-06', 'venue-06', 'V-06', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Eagle Hall</span><br></p>', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 90000, 'userfont/images/product/upload/1698288894004845.jpg', 'userfont/images/product/upload/1698288894080799.jpg', 'userfont/images/product/upload/1698288894121695.jpg', 1),
(37, 12, '2021-04-28 05:01:32', NULL, 32, 6, 'Venue-07', 'venue-07', 'V-07', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 16px;\">Army Officer\'s Club</span><br></p>', '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 67000, 'userfont/images/product/upload/1698289305154958.jpg', 'userfont/images/product/upload/1698289305188707.jpg', 'userfont/images/product/upload/1698289305249923.jpg', 1),
(38, 12, '2021-04-28 05:08:18', NULL, 34, 6, 'Venue-08', 'venue-08', 'V-08', '1', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Raowa Convention Hall (Helmet)</span><br></p>', '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 89000, 'userfont/images/product/upload/1698289730733225.jpg', 'userfont/images/product/upload/1698289730778634.jpg', 'userfont/images/product/upload/1698289730809778.jpg', 1),
(39, 13, '2021-04-28 05:10:23', NULL, 41, 4, 'Dj-01', 'dj-01', 'D-01', '1', '<p>Dj Party</p>', '<p>I am your Dj Jony</p>', 15000, 'userfont/images/product/upload/1698289857158396.jpg', 'userfont/images/product/upload/1698289859060066.jpg', 'userfont/images/product/upload/1698289860825509.jpg', 1),
(40, 13, '2021-04-28 05:12:27', NULL, 40, 4, 'Dj-02', 'dj-02', 'D-02', '1', '<p>Dj party</p>', '<p>I am your Dj Tony</p>', 20000, 'userfont/images/product/upload/1698289987028236.jpg', 'userfont/images/product/upload/1698289988765916.jpg', 'userfont/images/product/upload/1698289990515813.jpg', 1),
(43, 11, '2021-05-03 06:43:22', NULL, 38, 4, 'Artcell Band', 'artcell-band', 'Artcel-00', '1', '<p>Artcell Band</p>', '<p>We are artcell band</p>', 50000, 'userfont/images/product/upload/1698748696880262.jpg', 'userfont/images/product/upload/1698748696921643.jpg', 'userfont/images/product/upload/1698748696962144.jpg', 1),
(44, 12, '2021-05-03 06:54:16', NULL, 39, 4, 'Chirkutt Band', 'chirkutt-band', 'Chirkut-00', '1', '<p>Chirkutt Band</p>', '<p>We are chirkutt band</p>', 100000, 'userfont/images/product/upload/1698749383068136.jpg', 'userfont/images/product/upload/1698749383149412.jpg', 'userfont/images/product/upload/1698749383174804.jpg', 1),
(45, 12, '2021-05-03 06:58:50', NULL, 32, 4, 'Kureghor', 'kureghor', 'Kureghor-00', '1', '<p>Kureghor Band</p>', '<p>We are Kureghor Band</p>', 120000, 'userfont/images/product/upload/1698749670453433.jpeg', 'userfont/images/product/upload/1698749670524257.jpg', 'userfont/images/product/upload/1698749670564533.jpg', 1),
(46, 11, '2021-05-03 07:07:01', '2021-05-03 07:11:59', 36, 4, 'Joler Gan', 'joler-gan', 'Joler Gan -00', '1', '<p>Joler Gan&nbsp;</p>', '<p>We are Joler Gan</p>', 120000, 'userfont/images/product/upload/1698750184888591.jpg', 'userfont/images/product/upload/1698750184926413.jpg', 'userfont/images/product/upload/1698750185009121.jpg', 1),
(47, 11, '2021-05-03 07:14:31', NULL, 37, 4, 'Music-01', 'music-01', 'Msc-00', '1', '<p>Music Party</p>', '<p>We are your music band</p>', 50000, 'userfont/images/product/upload/1698750657177283.jpg', 'userfont/images/product/upload/1698750657226473.jpg', 'userfont/images/product/upload/1698750657323944.jpg', 1),
(48, 13, '2021-05-11 22:48:57', NULL, 41, 5, 'Cater-01', 'cater-01', 'Ct-01', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs with ribbon<br></p>', 50000, 'userfont/images/product/upload/1699534221756034.jpg', 'userfont/images/product/upload/1699534221829443.jpg', 'userfont/images/product/upload/1699534221900379.jpg', 1),
(49, 13, '2021-05-11 23:50:27', NULL, 40, 5, 'Cater-02', 'cater-02', 'Ct-02', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs with ribbons<br></p>', 59000, 'userfont/images/product/upload/1699538091506296.jpg', 'userfont/images/product/upload/1699538091581285.jpg', 'userfont/images/product/upload/1699538091652431.jpg', 1),
(51, 12, '2021-05-11 23:54:52', NULL, 34, 5, 'Cater-04', 'cater-04', 'Ct-04', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs<br></p>', 73000, 'userfont/images/product/upload/1699538369423375.jpg', 'userfont/images/product/upload/1699538369471759.jpg', 'userfont/images/product/upload/1699538369498306.jpg', 1),
(52, 12, '2021-05-11 23:59:38', NULL, 32, 5, 'Cater-05', 'cater-05', 'Ct-05', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs<br></p>', 80000, 'userfont/images/product/upload/1699538668726138.jpg', 'userfont/images/product/upload/1699538668786087.jpg', 'userfont/images/product/upload/1699538668841901.jpg', 1),
(53, 11, '2021-05-12 00:06:13', NULL, 38, 5, 'Cater-06', 'cater-06', 'Ct-06', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs<br></p>', 87000, 'userfont/images/product/upload/1699539083243536.jpg', 'userfont/images/product/upload/1699539083317247.jpg', 'userfont/images/product/upload/1699539083350277.jpg', 1),
(54, 11, '2021-05-12 00:07:34', NULL, 37, 5, 'Cater-07', 'cater-07', 'Ct-07', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs<br></p>', 90000, 'userfont/images/product/upload/1699539168078672.jpg', 'userfont/images/product/upload/1699539168101542.jpg', 'userfont/images/product/upload/1699539168118283.jpg', 1),
(55, 11, '2021-05-12 00:09:52', NULL, 36, 5, 'Cater-08', 'cater-08', 'Ct-08', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs<br></p>', 120000, 'userfont/images/product/upload/1699539313048845.jpg', 'userfont/images/product/upload/1699539313110327.jpg', 'userfont/images/product/upload/1699539313142372.jpg', 1),
(56, 12, '2021-05-12 00:13:32', NULL, 39, 5, 'Cater-03', 'cater-03', 'Ct-03', '1', '<p>Per table 10 chairs<br></p>', '<p>Per table 10 chairs<br></p>', 70000, 'userfont/images/product/upload/1699539543569441.jpg', 'userfont/images/product/upload/1699539543639596.jpg', 'userfont/images/product/upload/1699539543672902.jpg', 1),
(59, 13, '2021-05-22 04:53:38', '2021-05-22 05:19:09', 41, 3, 'Ruby Photography', 'ruby-photography', 'P-01', '1', '<p>sdjvnvjdskn</p>', '<p>mdckldslksdkklklkjn</p>', 20000, 'userfont/images/product/upload/1700463134896917.jpg', 'userfont/images/product/upload/1700464739516114.jpg', 'userfont/images/product/upload/1700463135050936.jpg', 1),
(60, 13, '2021-05-22 04:56:07', '2021-05-22 05:18:26', 40, 3, 'Shakil Photography', 'shakil-photography', 'P-02', '2', '<p>ghngh</p>', '<p>hgnghnjjgnhj</p>', 23000, 'userfont/images/product/upload/1700463292287243.jpg', 'userfont/images/product/upload/1700464640596792.jpg', 'userfont/images/product/upload/1700464696117164.jpg', 1),
(61, 11, '2021-05-22 04:57:39', '2021-05-22 05:17:12', 38, 3, 'Sara Photography', 'sara-photography', 'P-03', '1', '<p>asdasd</p>', '<p>ascacacaa</p>', 19000, 'userfont/images/product/upload/1700463387738671.jpg', 'userfont/images/product/upload/1700464588979710.jpg', 'userfont/images/product/upload/1700464618508210.jpg', 1),
(62, 11, '2021-05-22 05:00:03', '2021-05-22 05:16:16', 37, 3, 'Tithy Photography', 'tithy-photography', 'P-04', '1', '<p>sdfdf</p>', '<p>sdfsdfdfd</p>', 22000, 'userfont/images/product/upload/1700463539511906.jpg', 'userfont/images/product/upload/1700464502753056.jpg', 'userfont/images/product/upload/1700464559509619.jpg', 1),
(63, 11, '2021-05-22 05:04:56', '2021-05-22 05:15:50', 36, 3, 'Robin Photography', 'robin-photography', 'P-05', '2', '<p>dfgv</p>', '<p>bfbfgbfgb</p>', 25000, 'userfont/images/product/upload/1700463844270131.jpg', 'userfont/images/product/upload/1700464420134938.jpg', 'userfont/images/product/upload/1700464532657511.jpg', 1),
(64, 12, '2021-05-22 05:06:37', NULL, 39, 3, 'Tiya Photography', 'tiya-photography', 'P-06', '1', '<p>dcvd</p>', '<p>dcvdfvdfc</p>', 21000, 'userfont/images/product/upload/1700463952194327.jpg', 'userfont/images/product/upload/1700463952233731.jpg', 'userfont/images/product/upload/1700463952297162.jpg', 1),
(65, 12, '2021-05-22 05:09:51', NULL, 34, 3, 'Siya Photography', 'siya-photography', 'P-07', '1', '<p>sdbsd</p>', '<p>sdcsdcc</p>', 23000, 'userfont/images/product/upload/1700464155470117.jpg', 'userfont/images/product/upload/1700464155515512.jpg', 'userfont/images/product/upload/1700464155562940.JPG', 1),
(66, 12, '2021-05-22 05:11:58', NULL, 32, 3, 'Tayra Photography', 'tayra-photography', 'P-08', '1', '<p>sds</p>', '<p>sdcsdvdv</p>', 22000, 'userfont/images/product/upload/1700464288601654.jpg', 'userfont/images/product/upload/1700464288639998.jpg', 'userfont/images/product/upload/1700464288706239.jpg', 1),
(67, 13, '2021-05-22 06:05:50', NULL, 41, 2, 'Decor-01', 'decor-01', 'D-01', '1', '<p>fdbdfgv</p>', '<p>dfgrvdfgvdfgv</p>', 30000, 'userfont/images/product/upload/1700467677816313.jpg', 'userfont/images/product/upload/1700467677859453.jpg', 'userfont/images/product/upload/1700467677918950.jpg', 1),
(68, 13, '2021-05-22 06:26:58', NULL, 40, 2, 'Decor-02', 'decor-02', 'D-02', '1', '<p>dsssdf</p>', '<p>sddfscffsdf</p>', 30000, 'userfont/images/product/upload/1700469007590343.jpg', 'userfont/images/product/upload/1700469007629416.jpg', 'userfont/images/product/upload/1700469007668334.jpg', 1),
(69, 12, '2021-05-22 06:30:18', '2021-05-22 06:30:51', 34, 2, 'Decor-03', 'decor-03', 'D-03', '1', '<p>dfd</p>', '<p>dfvdfvfv</p>', 50000, 'userfont/images/product/upload/1700469217381697.jpg', 'userfont/images/product/upload/1700469217427336.jpg', 'userfont/images/product/upload/1700469217463233.jpg', 1),
(70, 12, '2021-05-22 06:33:23', NULL, 39, 2, 'Decor-04', 'decor-04', 'D-04', '1', '<p>ghjt</p>', '<p>ghngyjgf</p>', 15000, 'userfont/images/product/upload/1700469410823163.jpg', 'userfont/images/product/upload/1700469410899886.jpg', 'userfont/images/product/upload/1700469410946952.jpg', 1),
(71, 12, '2021-05-22 06:35:17', NULL, 32, 2, 'Decor-05', 'decor-05', 'D-05', '1', '<p>dcfvdf</p>', '<p>dbfvvb cvgv</p>', 28000, 'userfont/images/product/upload/1700469530610902.jpg', 'userfont/images/product/upload/1700469530642854.jpg', 'userfont/images/product/upload/1700469530683884.jpg', 1),
(72, 11, '2021-05-22 06:38:13', NULL, 38, 2, 'Decor-06', 'decor-06', 'D-06', '1', '<p>gbgf</p>', '<p>ghbg fgbfgbgfb</p>', 27000, 'userfont/images/product/upload/1700469715190762.jpg', 'userfont/images/product/upload/1700469715410757.jpg', 'userfont/images/product/upload/1700469715559982.jpg', 1),
(73, 11, '2021-05-22 06:40:32', NULL, 37, 2, 'Decor-07', 'decor-07', 'D-07', '1', '<p>gbgf</p>', '<p>fhfjfgh fgfgfhfth</p>', 52000, 'userfont/images/product/upload/1700469860780396.jpg', 'userfont/images/product/upload/1700469860827036.jpg', 'userfont/images/product/upload/1700469860866491.jpg', 1),
(74, 11, '2021-05-22 06:45:21', NULL, 36, 2, 'Decor-08', 'decor-08', 'D-08', '1', '<p>dfvdf</p>', '<p>dfvgdf ghjjliol</p>', 44000, 'userfont/images/product/upload/1700470164062281.jpg', 'userfont/images/product/upload/1700470164115772.jpg', 'userfont/images/product/upload/1700470164181413.jpg', 1),
(75, 13, '2021-05-29 02:35:43', NULL, 41, 3, 'dfdfv', 'dfdfv', 'sdfvs5', '1', '<p>rtgrttr</p>', '<p>rtrthtrhrthy</p>', 4564, 'userfont/images/product/upload/1701088629666805.jpg', 'userfont/images/product/upload/1701088629847971.jpg', 'userfont/images/product/upload/1701088633941491.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `group_id`, `category_id`, `project_name`, `short_description`, `long_description`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, 38, 'Grand Wedding Reception of 💖 Rifat & Anni 💖', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:</span>&nbsp;Senakunja</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photography:</span>&nbsp;Creative Canvas (Hadiul Islam Shimul)</p>', '<div class=\"column mcb-column mcb-item-3a285mtak one column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 1195.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix align_center\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1; text-align: center;\"><br><br><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; line-height: 34px; color: rgb(0, 0, 0); font-size: 32px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; vertical-align: baseline; letter-spacing: 6px;\">Grand Wedding of Rifat &amp; Anni</h3><hr style=\"height: 1px; margin: 0px auto 15px; border-width: initial; border-style: none; border-top-color: initial; outline: none; width: 1195.6px; clear: both; background-color: rgba(0, 0, 0, 0.08); color: rgba(0, 0, 0, 0.08);\"></div></div><div class=\"column mcb-column mcb-item-l652mflfz two-fifth column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 463.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Grand birthday of the daughter of honorable home minister Asaduzzaman Khan Kamal. May Allah Bless the new couple with all the happiness of heaven and earth.</p></div></div>', 'userfont/images/project/upload/1697575179503415.JPG', 'userfont/images/project/upload/1697575179652813.jpg', 'userfont/images/project/upload/1697575179702287.jpg', 1, '2021-04-20 07:50:49', '2021-04-28 05:04:02'),
(2, 11, 37, 'Grand Wedding Reception of 💖 Arif and Auroni 💖', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:</span>&nbsp;Raowa Convention Hall (Helmet)</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photography:</span>&nbsp;Creative Canvas</p>', '<div class=\"column mcb-column mcb-item-3a285mtak one column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 1195.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix align_center\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1; text-align: center;\"><br><br><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; line-height: 34px; color: rgb(0, 0, 0); font-size: 32px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; vertical-align: baseline; letter-spacing: 6px;\">Grand Wedding of Arif &amp; Auroni</h3><hr style=\"height: 1px; margin: 0px auto 15px; border-width: initial; border-style: none; border-top-color: initial; outline: none; width: 1195.6px; clear: both; background-color: rgba(0, 0, 0, 0.08); color: rgba(0, 0, 0, 0.08);\"></div></div><div class=\"column mcb-column mcb-item-l652mflfz two-fifth column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 463.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Grand birthday of the daughter of honorable home minister Asaduzzaman Khan Kamal. May Allah Bless the new couple with all the happiness of heaven and earth.</p></div></div>', 'userfont/images/project/upload/1697575744068254.jpg', 'userfont/images/project/upload/1697575744131743.jpg', 'userfont/images/project/upload/1697575744160826.jpg', 1, '2021-04-20 07:59:47', '2021-04-28 05:04:42'),
(3, 11, 36, 'Grand Wedding Reception of 💖 Yamin & Farabi 💖', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:</span>&nbsp;Raowa Convention Hall (Helmet)</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photography:</span>&nbsp;Creative Canvas</p>', '<div class=\"column mcb-column mcb-item-3a285mtak one column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 1195.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix align_center\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1; text-align: center;\"><br><br><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; line-height: 34px; color: rgb(0, 0, 0); font-size: 32px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; vertical-align: baseline; letter-spacing: 6px;\">Grand Wedding of Yamin &amp; Farabi</h3><hr style=\"height: 1px; margin: 0px auto 15px; border-width: initial; border-style: none; border-top-color: initial; outline: none; width: 1195.6px; clear: both; background-color: rgba(0, 0, 0, 0.08); color: rgba(0, 0, 0, 0.08);\"></div></div><div class=\"column mcb-column mcb-item-l652mflfz two-fifth column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 463.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Grand birthday of the daughter of honorable home minister Asaduzzaman Khan Kamal. May Allah Bless the new couple with all the happiness of heaven and earth.</p></div></div>', 'userfont/images/project/upload/1697576047399555.jpg', 'userfont/images/project/upload/1697576047443611.jpg', 'userfont/images/project/upload/1697576047507707.jpg', 1, '2021-04-20 08:04:36', '2021-04-28 05:05:18'),
(4, 11, 38, 'Grand Wedding Reception Of 💖 Sarah & Ferdous 💖', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:</span>&nbsp;Shaheen Hall</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photography:</span>&nbsp;Creative Canvas</p>', '<div class=\"column mcb-column mcb-item-3a285mtak one column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 1195.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix align_center\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1; text-align: center;\"><br><br><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; line-height: 34px; color: rgb(0, 0, 0); font-size: 32px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; vertical-align: baseline; letter-spacing: 6px;\">Grand Wedding of Sarah &amp; Ferdous</h3><hr style=\"height: 1px; margin: 0px auto 15px; border-width: initial; border-style: none; border-top-color: initial; outline: none; width: 1195.6px; clear: both; background-color: rgba(0, 0, 0, 0.08); color: rgba(0, 0, 0, 0.08);\"></div></div><div class=\"column mcb-column mcb-item-l652mflfz two-fifth column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; float: left; width: 463.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; zoom: 1;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Grand birthday of the daughter of honorable home minister Asaduzzaman Khan Kamal. May Allah Bless the new couple with all the happiness of heaven and earth.</p></div></div>', 'userfont/images/project/upload/1697576673921211.jpg', 'userfont/images/project/upload/1697576673983578.jpg', 'userfont/images/project/upload/1697576674031322.jpg', 1, '2021-04-20 08:14:34', '2021-04-28 05:05:48'),
(5, 13, 41, '5th Marriage Anniversary of 💖 Mr. & Mrs. Nasirul Islam 💖', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:</span>&nbsp;Pan Pacific Sonargaon Dhaka</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photo &amp; Cinematography:</span>&nbsp;Gazi Film</p>', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Grand wedding of the daughter of honorable home minister Asaduzzaman Khan Kamal. May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 'userfont/images/project/upload/1697576803820106.jpg', 'userfont/images/project/upload/1697576803903950.jpg', 'userfont/images/project/upload/1697576803945769.jpg', 1, '2021-04-20 08:16:38', NULL),
(6, 12, 34, '🎂 Parisas\'s 5th Birthday 🎂', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:&nbsp;</span>BAFWWA Eagle Hall</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photography:&nbsp;</span>Creative Canvas</p>', '<p><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; font-size: 20px;\">Grand Birthday of the daughter of honorable home minister Asaduzzaman Khan Kamal. May Allah Bless the new couple with all the happiness of heaven and earth.</span><br></p>', 'userfont/images/project/upload/1697577079007280.jpg', 'userfont/images/project/upload/1697577079063409.jpg', 'userfont/images/project/upload/1697577079089411.jpg', 1, '2021-04-20 08:21:00', NULL),
(7, 12, 32, '🎂 Mayra\'s 23rd Birthday 🎂', '<p><span style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\">Venue:&nbsp;</span><span style=\"color: rgb(88, 88, 88); font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif;\">Army Officer\'s Club</span><br></p>', '<div class=\"column mcb-column mcb-item-3a285mtak one column_column\" style=\"margin: 0px 12.2px 40px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; width: 1195.6px; color: rgb(88, 88, 88);\"><div class=\"column_attr clearfix align_center\" style=\"font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; zoom: 1; text-align: center;\"><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 32px; line-height: 34px; vertical-align: baseline; color: rgb(0, 0, 0); letter-spacing: 6px;\"><font face=\"Arial\">Grand birthday of the daughter of honorable home minister Asaduzzaman Khan Kamal. May Allah Bless the new couple with all the happiness of heaven and earth.</font></h3></div></div>', 'userfont/images/project/upload/1697577216470064.jpg', 'userfont/images/project/upload/1697577216536857.jpg', 'userfont/images/project/upload/1697577216574675.jpg', 1, '2021-04-20 08:23:11', '2021-04-28 05:03:11'),
(8, 13, 40, 'Engagement of 💖 Tasnia & Fayeed 💖', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:</span>&nbsp;Pan Pacific Sonargaon Dhaka</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photography by:</span>&nbsp;Gazi Film</p>', '<p>Congratulations on your engagement! Wishing you both for a very long and wonderful journey. Engagement of&nbsp; \"Tasnia &amp; Fayeed\"</p>', 'userfont/images/project/upload/1697577468105260.jpg', 'userfont/images/project/upload/1697577468180953.jpg', 'userfont/images/project/upload/1697577468217403.jpg', 1, '2021-04-20 08:27:11', NULL),
(9, 13, 40, 'Engagement Ceremony of 💖 Tubah & Ezaz 💖', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Venue:</span>&nbsp;Army Officers Club</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Maven Pro&quot;, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(88, 88, 88);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Photo &amp; Cinematography:</span>&nbsp;Dream Weaver</p>', '<p>Congratulations on your engagement! Wishing you both for a very long and wonderful journey. Engagement of&nbsp; \"Tubah &amp; Ezaz\"<br></p>', 'userfont/images/project/upload/1697577783586079.jpg', 'userfont/images/project/upload/1697577783667588.jpg', 'userfont/images/project/upload/1697577783708352.jpg', 1, '2021-04-20 08:32:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategory_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Decor & Decorations', 1, '2021-02-16 23:29:56', '2021-03-10 00:50:36'),
(3, 'Photographers & Videographers', 1, '2021-02-16 23:30:04', '2021-03-10 00:50:31'),
(4, 'Entertainment & Entertainers', 1, '2021-02-16 23:30:12', '2021-03-10 00:50:26'),
(5, 'Catering', 1, '2021-02-16 23:30:24', '2021-04-02 03:34:07'),
(6, 'Locations & Venues', 1, '2021-02-16 23:31:01', '2021-03-10 00:50:16'),
(9, 'Cakes', 1, '2021-02-16 23:31:42', '2021-03-10 08:32:59'),
(10, 'Foods', 1, '2021-04-02 03:34:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscribe_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `subscribe_email`, `created_at`, `updated_at`) VALUES
(1, 'meherun@gmail.com', '2021-05-03 05:06:46', NULL),
(2, 'meherun@gmail.com', '2021-05-03 05:07:21', NULL),
(3, 'taniya@gmail.com', '2021-05-26 07:46:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider_id`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'meherun islam', 'khadiza@gmail.com', NULL, NULL, NULL, '$2y$10$9zf.Bozxb1B1L06HbpO3kunibhbJ7XJ5c1DG1MUbV5iedc3T0h1CG', NULL, '2021-04-20 01:44:22', '2021-04-20 01:44:22'),
(2, 'Khadiza Islam', 'meherunislam72@gmail.com', '187316206566925', 'https://graph.facebook.com/v3.3/187316206566925/picture?type=normal', NULL, NULL, NULL, '2021-04-20 03:52:11', '2021-04-20 03:52:11'),
(3, 'Taniya Ahmed', 'taniyaahmed942@gmail.com', '108841928491752704984', 'https://lh3.googleusercontent.com/a-/AOh14GiwPk8xpllgX9uSF2ndIr7un5v6o13r9xalUaWEeQ=s96-c', NULL, NULL, NULL, '2021-04-20 03:52:32', '2021-04-20 03:52:32'),
(4, 'meherun', 'meherunislam@gmail.com', NULL, NULL, NULL, '$2y$10$in6AKJW0AIiSz/bPfiR5GuqtJnMqc9hvmX2Y09v4i.cKuoXMfTgBm', NULL, '2021-05-25 03:16:21', '2021-05-25 03:16:21'),
(8, 'Taniya Akter', 'taniya@gmail.com', NULL, NULL, NULL, '$2y$10$NXztEySQC6nmPvyKIz6m6ujjzhPISf3FhbmoibTKOYW81NFBSlUEe', NULL, '2021-05-29 08:59:01', '2021-05-29 08:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 4, 19, NULL, NULL),
(5, 4, 20, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_books`
--
ALTER TABLE `car_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parlors`
--
ALTER TABLE `parlors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applies`
--
ALTER TABLE `applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `car_books`
--
ALTER TABLE `car_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `parlors`
--
ALTER TABLE `parlors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
