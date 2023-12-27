-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 06:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `employee` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `phone` text NOT NULL,
  `birthday` varchar(250) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `pinterest` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `employee`, `image`, `phone`, `birthday`, `country`, `city`, `linkedin`, `twitter`, `pinterest`, `facebook`) VALUES
(4, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', '', 'abdulrehman.jpg', '03406886905', '10-jan-2004', 'pakistan', 'karachi', 'rehmanabdul1445', 'rehmanabdul1445', 'rehmanabdul1445', 'rehmanabdul1445'),
(6, 'Abdul Rehman fff', 'rehmanabdul1445@gmail.com', '428a78b4fee47253898d7918c0a09160', 'user', '', '', '', '', '', '', '', '', '', ''),
(7, 'unknown', 'unknown@gmail.com', '7789f854a3107432a84a897f2ff3e4fd', 'admin', '', '', '', '', '', '', '', '', '', ''),
(8, 'Abdul Rehman', 'rehmanabdul1445@gmail.com', '428a78b4fee47253898d7918c0a09160', 'user', '', 'abdulrehman.jpg', '03406886905', '10-jan-2004', 'Pakistan', 'Karachi', 'https://twitter.com/rehmanabdul1445', 'https://twitter.com/rehmanabdul1445', 'https://www.pinterest.com/abdulrehman1445', 'https://www.facebook.com/abdulrehman1445'),
(9, 'umar iqbal', 'umar1@gmail.com', '3f011c233957dfba24d6b2d5d653aa6c', 'user', '', '', '', '', '', '', '', '', '', ''),
(10, 'aziz ur rehman', 'aziz1@gmail.com', '77f96d74d75182a5a4fa205443bbc7e0', 'user', '', '', '', '', '', '', '', '', '', ''),
(11, 'adeel', 'adeel1@gmail.com', '80bc114d9c3c4553afc6e5588464cec7', 'user', '', '', '', '', '', '', '', '', '', ''),
(12, 'adeell', 'adeell1@gmail.com', '80bc114d9c3c4553afc6e5588464cec7', 'admin', '', '', '', '', '', '', '', '', '', ''),
(15, 'shayan', 'shayan@gmail.com', 'bc854861ea4788668252d0248112aacc', 'user', '', '', '', '', '', '', '', '', '', ''),
(19, 'employee', 'employee@gmail.com', '033836b6cedd9a857d82681aafadbc19', 'admin', 'yes', 'abdulrehman.jpg', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `detail` varchar(434) NOT NULL,
  `image` text NOT NULL,
  `option` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `price`, `detail`, `image`, `option`) VALUES
(33, ' Shampo', 999, 'best selling', 'AiDoZmRJyC-1-jpg_2340x (1).jpg', 'shampo'),
(35, ' MAkup', 999, 'best selling', 'uSfZTTsphq-3-png_2340x.jpg', 'Hair care'),
(38, ' naclas', 345, 'best selling', '88130_14879831_2732980_e5c8b3b7.jpg', 'jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(26, 'Vitamin C Serum', '399', 'vitamin-c-serum-for-face-best-fo.jpg', 1, '399', 'p1000'),
(27, 'glow-ficial', '1000', 'glow-facial-kit-4x-results-deep.jpg', 1, '1000', 'best selli'),
(28, 'Ginseng Lotion', '250', 'ginseng-lotion-brilliant-overall.jpg', 1, '250', 'p1007'),
(29, '-20% Keratin Hair ', '7500', 'keratin-hair-serum-anti-frizz-da.jpg', 1, '7500', 'p1001'),
(30, ' Pink Lady - Evokes', '920', 'pink-lady-evokes-joyful-memories.jpg', 1, '920', 'best selli'),
(31, ' Pink Lady - Evokes', '920', 'pink-lady-evokes-joyful-memories.jpg', 1, '920', 'best selli'),
(32, ' Sterling Silver', '399', 'Hb78b6375a3de4f6382d698f416abd1b.jpg', 1, '399', 'best selli');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(6, ' jewellery'),
(8, ' cosmetic');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'mubashira', 'bkhmad12@gmail.com', '03448307993', 'landhi', 'cod', ' naclas(4)', '800');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `option` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `option`) VALUES
(1, ' Luxury - Scent ', '920', 1, 'fantasy-a-splash-of-joyful-odour (1).jpg', 'best sellings', 'perfume'),
(2, ' Sensation – Secret', '920', 1, 'temptation-elegance-in-a-fragran (3).jpg', 'best sellings', 'perfume'),
(3, ' Florae – A Fruity', '920', 1, 'youth-expresses-your-personality (1).jpg', 'best sellings', 'perfume'),
(4, ' Diamond – Aroma ', '920', 1, 'blossom-natures-pure-essence-bod.jpg', 'best sellings', 'perfume'),
(5, ' Arabic Node ', '920', 1, 'calamity-refreshes-your-breath-b.jpg', 'best sellings', 'perfume'),
(6, ' Sun Kiss ', '920', 1, 'fantasy-a-splash-of-joyful-odour.jpg', 'best sellings', 'perfume'),
(7, ' Mont – Aroma ', '920', 1, 'mont-aroma-that-defines-you-body.jpg', 'best sellings', 'perfume'),
(8, ' Fresh - A Touch', '920', 1, 'fresh-a-touch-of-affection-body.jpg', 'best sellings', 'perfume'),
(9, ' Calamity – Refreshes', '920', 1, 'arabic-node-an-alluring-scent-bo.jpg', 'best sellings', 'perfume'),
(10, ' Fresh - A Touch', '920', 1, 'fruity-crush-zesty-amp-refreshin.jpg', 'best sellings', 'perfume'),
(11, ' Blossom – Nature’s', '920', 1, 'temptation-elegance-in-a-fragran (2).jpg', 'best sellings', 'perfume'),
(12, ' Sensation –', '920', 1, 'pink-lady-evokes-joyful-memories.jpg', 'best sellings', 'perfume'),
(13, ' Glowing Face Wash ', '920', 1, 'glowing-face-wash-controls-exces.jpg', 'best sellings', 'all'),
(14, ' Winter Glow Lotion', '920', 1, 'winter-glow-lotion-instantly-hyd (1).jpg', 'best sellings', 'all'),
(15, ' Squalane Lotion', '920', 1, 'squalane-lotion-hydrated-skin-lo (1).jpg', 'best sellings', 'all'),
(16, ' Men Glowing Lotion', '920', 1, 'men-glowing-lotion-soothes-nouri.jpg', 'best sellings', 'all'),
(17, ' Men Glowing Lotion', '920', 1, 'vitamin-a-lotion-contains-anti-i.jpg', 'best sellings', 'all'),
(18, ' Summer Glow Lotion', '399', 1, 'summer-glow-lotion-nourishes-ski.jpg', 'best sellings', 'all'),
(19, ' The Ordinary Hyaluronic Acid 2% + B5 - 30ml The Ordinary Hyaluronic', '920', 1, 'hyluronic-acid_9c6db6d3-6cd0-4f3.jpg', 'best sellings', 'Oil'),
(20, ' The Ordinary Lactic', '920', 1, 'lactic-acid_ffb374a2-d2f4-405e-8.jpg', 'best sellings', 'Oil'),
(21, ' The Ordinary Lactic', '920', 1, 'vitmin-c_1310x.jpg', 'best sellings', 'Oil'),
(22, ' The Ordinary Mandeli', '399', 1, 'mendalic-acid_540x.jpg', 'best sellings', 'Oil'),
(23, '  13 reviews Neutrogena Fresh', '920', 1, '3574661186009_540x.jpg', 'best sellings', 'Oil'),
(24, ' Neutrogena Spot ', '920', 1, '2_2c0b0454-fc76-4b4f-9887-30d1bb.jpg', 'best sellings', 'Oil'),
(25, ' Neutrogena Hydro', '999', 1, 'WG_Cleanser_554x.jpg', 'best sellings', 'Shampo'),
(26, ' Neutrogena Hydro ', '920', 1, 'WG_Grape_554x.jpg', 'best sellings', 'Shampo'),
(27, ' CeraVe Renewing ', '399', 1, 'SARenweingCleanser237ml_540x.jpg', 'best sellings', 'Shampo'),
(28, '  CeraVe Hydrating Cream', '920', 1, 'Creamtofoam237ml_540x.jpg', 'best sellings', 'Shampo'),
(29, ' Neutrogena Hydro', '920', 1, '3574661291413_540x.jpg', 'best sellings', 'Shampo'),
(30, '  4 reviews Neutrogena Hydro Boost', '920', 1, 'Untitleddesign_540x.jpg', 'best sellings', 'Shampo'),
(31, ' Maybelline New York', '920', 1, 'Untitleddesign_3_540x.jpg', 'best sellings', 'Makeup'),
(32, ' Maybelline New York', '399', 1, 'MaybellineCurlBounceMascara_540x.jpg', 'best sellings', 'Makeup'),
(33, ' Maybelline New York', '999', 1, '3_27615da0-536f-4b72-ad05-76a4fb.jpg', 'best sellings', 'Makeup'),
(34, '  31 reviews Maybelline New York', '200', 1, '110-Porcelain_14_1_540x.jpg', 'best sellings', 'Makeup'),
(35, '  51 reviews Maybelline New York ', '920', 1, '110_af5137a1-622d-42cd-9e42-771c.jpg', 'best sellings', 'Makeup'),
(36, '  1 review Maybelline New York ', '920', 1, '4-Silk_540x.jpg', 'best sellings', 'Makeup'),
(37, ' Skindeep', '399', 1, 'AOdrnzolWH-skin-deep-jpg_568x (1).jpg', 'best sellings', 'mixs'),
(38, ' Pearl Hoop-05', '299', 1, 'WhatsAppImage2021-07-09at11.03.1.jpg', 'best sellings', 'Earrings'),
(39, ' Gold Bali (3 Pair)', '399', 1, 'WhatsApp-Image-2020-04-02-at-3.5.jpg', 'best sellings', 'Earrings'),
(40, ' Fancy Earring-24', '399', 1, 'WhatsAppImage2021-06-03at7.56.07.jpg', 'best sellings', 'Earrings'),
(41, ' Pearl Hoop-03', '920', 1, 'WhatsAppImage2021-06-02at8.40.34.jpg', 'best sellings', 'Earrings'),
(42, ' Leaf Earring (Golden)', '399', 1, 'WhatsAppImage2021-08-10at1.37.39.jpg', 'best sellings', 'Earrings'),
(43, ' Fancy Studs-08 (Maroon)', '399', 1, 'WhatsApp_Image_2020-10-12_at_7.1.jpg', 'best sellings', 'Earrings'),
(44, ' Oxidized Jhumka-63 (Golden)', '920', 1, 'WhatsAppImage2021-09-29at9.46.26.jpg', 'best sellings', 'Earrings'),
(45, ' Oxidized Earring-08 (Golden)', '399', 1, 'WhatsAppImage2021-07-09at11.03.1 (1).jpg', 'best sellings', 'Earrings'),
(46, ' Fancy Earring-47 (Golden)', '399', 1, 'WhatsAppImage2021-09-27at10.50.1.jpg', 'best sellings', 'Earrings'),
(47, ' Zircon Earring-70', '399', 1, 'WhatsAppImage2022-08-19at2.48.01.jpg', 'best sellings', 'Earrings'),
(48, ' Tassel Earring-01 (Maroon)', '399', 1, 'WhatsAppImage2022-07-21at4.05.55.jpg', 'best sellings', 'Earrings'),
(49, ' Hoop Earring-08 (Golden Pearl)', '200', 1, 'WhatsAppImage2021-09-21at10.37.2.jpg', 'best sellings', 'Earrings'),
(50, ' JRG-026-Pearl White', '5440', 1, 'WhatsAppImage2021-09-01at1.40.33.jpg', 'best sellings', 'Rings'),
(51, ' JRG-026-Pearl White', '3370', 1, 'WhatsAppImage2020-10-21at11.44.2.jpg', 'best sellings', 'Rings'),
(52, ' Ring-30 (Maroon)', '399', 1, 'WhatsAppImage2021-08-21at12.08.1 (1).jpg', 'best sellings', 'Rings'),
(53, ' Ring-30 (White)', '399', 1, 'WhatsAppImage2021-08-21at12.08.1 (2).jpg', 'best sellings', 'Rings'),
(54, ' Ring-96 (Maroon)', '3999', 1, 'WhatsAppImage2022-02-23at1.22.56.jpg', 'best sellings', 'Rings'),
(55, ' Ring-40 (Golden)', '399', 1, 'WhatsAppImage2021-08-23at8.02.54.jpg', 'best sellings', 'Rings'),
(56, ' Ring-30 (Golden)', '920', 1, 'WhatsAppImage2021-08-21at12.08.1 (3).jpg', 'best sellings', 'Rings'),
(57, ' Ring-68', '399', 1, 'WhatsAppImage2021-10-13at12.20.5.jpg', 'best sellings', 'Rings'),
(58, ' Ring-129 (Maroon)', '399', 1, 'WhatsAppImage2022-06-06at2.32.00.jpg', 'best sellings', 'Rings'),
(59, ' Ring-117', '399', 1, 'WhatsAppImage2022-04-11at12.16.4.jpg', 'best sellings', 'Earrings'),
(60, ' Ring-46 (Golden)', '399', 1, 'WhatsAppImage2021-08-23at8.02.51.jpg', 'best sellings', 'Rings'),
(61, ' Ring-126 (Green)', '399', 1, 'WhatsAppImage2022-06-15at11.44.2.jpg', 'best sellings', 'Rings'),
(62, ' Ring-120', '399', 1, 'WhatsAppImage2022-04-11at12.16.4 (1).jpg', 'best sellings', 'Rings'),
(63, ' Sterling Silver', '1800', 1, 'H50620c2018c446d89e17d87238c06fa.jpg', 'best sellings', 'Braclet'),
(64, ' Sterling Silver', '999', 1, 'Se35344dc11ff47879e7222e2c44f8f9.jpg', 'best sellings', 'Braclet'),
(65, ' Sterling Silver', '399', 1, 'Hce1daa34ccf04fa0b658636513c69f7.jpg', 'best sellings', '--SELLECT--'),
(66, ' Sterling Silver', '399', 1, 'H5fd0684cb47240e98269b826767714e.jpg', 'best sellings', 'Braclet'),
(67, ' Sterling Silver', '999', 1, 'S84cea3097593484d84c8d98996ffbd2.jpg', 'best sellings', 'Braclet'),
(68, ' Sterling Silver', '399', 1, 'Sc4f661bda2af40a38812c095348ba8b.jpg', 'best sellings', 'Braclet'),
(69, ' Sterling Silver', '399', 1, 'S5cfc71cc17be4021917ec47c26ee051.jpg', 'best sellings', 'Braclet'),
(70, ' Sterling Silver', '399', 1, 'Sa5d6b799d2e34db88f97c50cb580c6e.jpg', 'best sellings', 'Braclet'),
(71, ' Sterling Silver', '399', 1, 'S5cfc71cc17be4021917ec47c26ee051 (1).jpg', 'best sellings', 'Braclet'),
(72, ' Sterling Silver', '399', 1, 'Hb78b6375a3de4f6382d698f416abd1b.jpg', 'best sellings', 'Braclet'),
(73, ' Sterling Silver', '399', 1, 'H9c739648a8a64a28ba051639d9d2d5f.jpg', 'best sellings', 'Braclet'),
(74, ' Sterling Silver', '399', 1, 'Sf2be1bd896424e6aa211d567ef76637.jpg', 'best sellings', 'Braclet'),
(75, ' Sterling Silver', '399', 1, 'Sc4f661bda2af40a38812c095348ba8b (1).jpg', 'best sellings', 'Braclet'),
(76, ' Sterling Silver Infinity', '399', 1, 'S5b02b4074da64a4087c7ed529297cdd.jpg', 'best sellings', 'Naclas'),
(77, ' Sterling Silver Infinity', '399', 1, 'S2163941663c9428ca800cabab189b1d.jpg', 'best sellings', 'Naclas'),
(78, ' Sterling Silver Infinity', '399', 1, 'H2c20e9874cfa47e0a449b8752ef3695.jpg', 'best sellings', 'Naclas'),
(79, ' Sterling Silver Infinity', '399', 1, 'H7e6609eb6e2d44cc9d19271f9354129.jpg', 'best sellings', 'Naclas'),
(80, ' Sterling Silver Infinity', '399', 1, 'S11373a8017cd432697492709c038ab0.jpg', 'best sellings', 'Naclas'),
(81, ' Sterling Silver Infinity', '399', 1, 'S9af09a8243cc48a1b67890b5bd642cc.jpg', 'best sellings', 'Naclas'),
(82, ' Sterling Silver Dog', '499', 1, 'H9d8a958cf0964c35be4c246d1bb720a.jpg', 'best sellings', 'Pendals'),
(83, ' Sterling Silver', '399', 1, 'Sfbf594d69cc24ce68b2394d14462e80.jpg', 'best sellings', 'Pendals'),
(84, ' Sterling Silver', '399', 1, 'H17fad33a694540639e3a3cead14dd0e.jpg', 'best sellings', 'Pendals'),
(85, ' Sterling Silver', '399', 1, 'Sbfb28a0eb013463a9904b4c40919ec1.jpg', 'best sellings', 'Pendals'),
(86, ' Sterling Silver', '399', 1, 'H623fa3cabc5342c58b02d4e48d58008.jpg', 'best sellings', 'Pendals'),
(87, ' Sterling Silver', '399', 1, 'H92351702a5274de08404b232c4661ac.jpg', 'best sellings', 'Pendals'),
(88, ' Sterling Silver', '399', 1, 'H629724380f56481e8366c64c96e0e0c.jpg', 'best sellings', 'Pendals'),
(89, ' Sterling Silver', '399', 1, 'HTB1QbtZKXYqK1RjSZLeq6zXppXaV.jpg', 'best sellings', 'Pendals'),
(90, ' Sterling Silver', '399', 1, 'H96bc6d7833684d16b64ecb289c6d899.jpg', 'best sellings', 'Pendals'),
(91, ' Sterling Silver', '399', 1, 'H210b13f3c94349748cb61640052ecbd.jpg', 'best sellings', 'Pendals'),
(92, ' Sterling Silver', '399', 1, 'H844e727c24ea4053a148e729f2ae9f2.jpg', 'best sellings', 'Pendals'),
(93, ' Sterling Silver', '399', 1, 'Hd6d441cbf15749669ab00804eb439f8.jpg', 'best sellings', 'Pendals'),
(94, ' Sterling Silver Full', '399', 1, 'H0724c23b94fa474c9e2ba3cff6015aa.jpg', 'best sellings', 'J_all'),
(95, ' Sterling Silver Full', '399', 1, 'Sffb63da461214742a42e81bb566b304.jpg', 'best sellings', 'J_all'),
(96, ' Sterling Silver Full', '399', 1, 'HTB1lHaQXpT7gK0jSZFpq6yTkpXaD.jpg', 'best sellings', 'J_all'),
(97, ' Sterling Silver Full', '999', 1, 'Seebbadc13e6d4454ae0bac5b3f1d748.jpg', 'best sellings', 'J_all'),
(98, ' Sterling Silver Full', '399', 1, 'Hee14e7da199a4e2bad134bae6fa7506.jpg', 'best sellings', 'J_all'),
(99, ' Sterling Silver Full', '399', 1, 'H150b35b84ed3489e926a41b4b3fbe5d.jpg', 'best sellings', 'J_all'),
(100, ' Sterling Silver Full', '399', 1, 'H7e5274b219b14aa2ab8f7e7ac99bce9.jpg', 'best sellings', 'J_all'),
(101, ' Sterling Silver Full', '920', 1, 'Hea72ddea7074489cb1a0d4498cf3a1a.jpg', 'best sellings', 'J_all'),
(102, ' Sterling Silver Full', '399', 1, 'H34d54f0f5efd482db5f9d079ce22102.jpg', 'best sellings', 'J_all'),
(103, ' Sterling Silver Full', '399', 1, 'H5ae12cb7d68e404bac7c62332047b37.jpg', 'best sellings', 'J_all'),
(104, ' Sterling Silver Full', '920', 1, 'Hbb319e4d32574c39bbfdad9296a76a9.jpg', 'best sellings', 'J_all'),
(105, ' Sterling Silver Full', '399', 1, 'Sa93a99fcf5c64324b58a999349d3aca.jpg', 'best sellings', 'J_all'),
(106, ' Pink Multi-', '399', 1, 'H8c0d427d54b14b9cb3e3ea9493ab4f1.jpg', 'best sellings', 'J_all'),
(107, ' Pink Multi-', '399', 1, 'H7d519ade7a714ff3a4ac07a21064ebc.jpg', 'best sellings', 'J_all'),
(108, ' Pink Multi-', '399', 1, 'H6fd7c65bb8704ff4bb8bbbf0618e3c6.jpg', 'best sellings', 'J_all'),
(109, ' Pink Multi-', '399', 1, 'H7315c49fe8cc42a5be7ffa5202f4aad.jpg', 'best sellings', 'J_all'),
(110, ' Pink Multi-', '399', 1, 'H2a1a3910ff0f41eba366254b52300a6.jpg', 'best sellings', 'J_all'),
(111, ' Pink Multi-', '920', 1, 'Hea646a203f8145f78e76782aefe3b13.jpg', 'best sellings', 'J_all'),
(112, ' Red Onion Shampoo', '920', 1, 'red-onion-shampoo-natural-soluti.jpg', 'best sellings', 'Shampo'),
(113, ' Tea Tree Anti facewash', '399', 1, 'tea-tree-anti-acne-face-wash-pre.jpg', 'best sellings', 'Facewash'),
(114, ' Rice Face Wash', '399', 1, 'rice-face-wash-acts-as-a-natural.jpg', 'best sellings', 'Facewash'),
(115, ' Vitamin C Face Wash ', '920', 1, 'vitamin-c-face-wash-reduces-dull.jpg', 'best sellings', 'Facewash'),
(116, ' Men Face Wash', '399', 1, 'men-face-wash-anti-impurities-re.jpg', 'best sellings', 'Facewash'),
(117, ' Glowing Face Wash ', '920', 1, 'glowing-face-wash-controls-exces.jpg', 'best sellings', 'Facewash'),
(118, ' Spot Free Face Wash', '399', 1, 'spot-free-face-wash-detoxifies-s.jpg', 'best sellings', 'Facewash'),
(119, ' Wild Honey Face Wash', '920', 1, 'wild-honey-face-wash-hydrates-sk.jpg', 'best sellings', 'Facewash'),
(120, ' Pollution Out Face Wash', '399', 1, 'pollution-out-face-wash-detoxifi.jpg', 'best sellings', 'Facewash'),
(121, ' Lemon Face Wash', '920', 1, 'lemon-face-wash-anti-acne-protec.jpg', 'best sellings', 'Facewash'),
(122, ' Neem & Turmeric Face', '399', 1, 'neem-turmeric-face-wash-get-puri.jpg', 'best sellings', 'Facewash'),
(123, ' Rose & Lavender', '399', 1, 'rose-lavender-face-wash-rejuvena.jpg', 'best sellings', 'Facewash'),
(124, ' Spot Free Face Wash', '920', 1, 'spot-free-face-wash-detoxifies-s (1).jpg', 'best sellings', 'Facewash'),
(125, ' Squalane Lotion ', '920', 1, 'squalane-lotion-hydrated-skin-lo.jpg', 'best sellings', 'Lotion'),
(126, ' Vitamin-E Lotion ', '399', 1, 'vitamin-e-lotion-used-as-a-moist.jpg', 'best sellings', 'Lotion'),
(127, ' Men Glowing Lotion ', '399', 1, 'men-glowing-lotion-soothes-nouri (1).jpg', 'best sellings', 'Lotion'),
(128, ' Vitamin-A Lotion', '920', 1, 'vitamin-a-lotion-contains-anti-i (1).jpg', 'best sellings', 'Lotion'),
(129, ' Calamine Lotion ', '920', 1, 'calamine-lotion-solution-to-ever.jpg', 'best sellings', 'Lotion'),
(130, ' Ginseng Lotion', '399', 1, 'ginseng-lotion-brilliant-overall.jpg', 'best sellings', 'Lotion'),
(131, ' Citronella Mosquito', '920', 1, 'citronella-mosquito-natural-repe.jpg', 'best sellings', 'Lotion'),
(132, ' Summer Glow Lotion ', '399', 1, 'summer-glow-lotion-nourishes-ski (1).jpg', 'best sellings', 'Lotion'),
(133, ' Hand & Foot Glowing ', '920', 1, 'hand-foot-glowing-cream-formulat.jpg', 'best sellings', 'Lotion'),
(134, ' ChiltanPure Night Cream ', '771', 1, 'chiltanpure-night-cream-boosts-c.jpg', 'best sellings', 'Lotion'),
(135, ' Chiltanpure Neck Cream', '399', 1, 'chiltanpure-neck-cream-evens-ski.jpg', 'best sellings', 'Lotion'),
(136, ' Day Cream ', '920', 1, 'day-cream-promotes-blood-circula.jpg', 'best sellings', 'Lotion'),
(137, ' French Green Clay', '920', 1, 'french-green-clay-natural-exfoli.jpg', 'best sellings', 'Shurem'),
(138, ' Sterling Silver', '920', 1, 'fullers-earth-clay-acne-fighter.jpg', 'best sellings', 'Shurem'),
(139, ' Charcoal Clay', '920', 1, 'charcoal-clay-help-absorb-excess.jpg', 'best sellings', 'Shurem'),
(140, ' Neem Clay ', '920', 1, 'neem-clay-works-wonder-as-an-ama.jpg', 'best sellings', 'Shurem'),
(141, ' Lemon Clay – Deep', '399', 1, 'lemon-clay-deep-cleanse-pores-ma.jpg', 'best sellings', 'Shurem'),
(142, ' Lavender Clay ', '920', 1, 'lavender-clay-used-to-cure-the-d.jpg', 'best sellings', 'Shurem'),
(143, ' Moringa Clay ', '399', 1, 'moringa-clay-suitable-for-all-sk.jpg', 'best sellings', 'Shurem'),
(144, ' Ginseng Clay', '399', 1, 'ginseng-clay-for-men-extremely-b.jpg', 'best sellings', 'Shurem'),
(145, ' Matte Clay', '920', 1, 'matte-clay-medium-hold-matte-fin.jpg', 'best sellings', 'Shurem'),
(146, ' Bentonite Clay ', '920', 1, 'bentonite-clay-the-powerful-abso.jpg', 'best sellings', 'Shurem'),
(147, ' Lavender Clay', '920', 1, 'lavender-clay-used-to-cure-the-d (1).jpg', 'best sellings', 'Shurem'),
(148, ' Carrot Clay ', '920', 1, 'carrot-clay-gentle-natural-clay.jpg', 'best sellings', 'Shurem'),
(149, ' -20% Men Hair Growth', '399', 1, 'men-hair-growth-shampoo-boosts-h.jpg', 'best sellings', 'mens_groming'),
(150, ' Lightening Lip Balm', '920', 1, 'lightening-lip-balm-for-men-rest.jpg', 'best sellings', 'mens_groming'),
(151, ' DUCTS -20% Men Hair Growth', '920', 1, 'men-hair-growth-oil-encourages-s (1).jpg', 'best sellings', 'mens_groming'),
(152, ' Men Glowing Cream', '920', 1, 'men-glowing-cream-light-weight-f.jpg', 'best sellings', 'mens_groming'),
(153, ' Derma Roller System', '920', 1, 'derma-roller-system-ultra-sharp.jpg', 'best sellings', 'mens_groming'),
(154, ' Men Glowing Serum ', '920', 1, 'men-glowing-serum-brightens-comp.jpg', 'best sellings', 'mens_groming'),
(155, ' Beard & Mustache ', '920', 1, 'beard-mustache-wooden-comb-for-s.jpg', 'best sellings', 'mens_groming'),
(156, ' Under Eye Balm', '920', 1, 'under-eye-balm-for-men-reduce-pu.jpg', 'best sellings', 'mens_groming'),
(157, ' Men Glowing Lotion', '920', 1, 'men-glowing-lotion-soothes-nouri (2).jpg', 'best sellings', 'mens_groming'),
(158, ' MyThick Oil ', '920', 1, 'mythick-oil-prevents-split-ends.jpg', 'best sellings', 'mens_groming'),
(159, ' Beard Brush', '920', 1, 'beard-brush-reduce-beard-curls-d.jpg', 'best sellings', 'mens_groming'),
(160, ' Beard & Moustache', '920', 1, 'beard-moustache-trimming-scissor.jpg', 'best sellings', 'mens_groming'),
(161, ' Women perfume', '399', 1, 'Picture15__11599_540x.jpg', 'best sellings', 'Speacial'),
(162, '  Etude House Dear ', '920', 1, 'EtudeHouse_540x.jpg', 'best sellings', 'Speacial'),
(163, ' Get Free Jade Roller', '920', 1, '1-Skin-Expert_540x.jpg', 'best sellings', 'Speacial');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(222) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `name`, `detail`, `price`, `image`) VALUES
(1, ' Shampo', '  Lorem ipsum dolor sit amet consectetur Lorem ipsum                       dolor dolor sit amet consectetur Lorem ipsum dolor', 1000, 'images  cs 7.jpg'),
(2, ' Rose Gold diamonds Earring', ' Lorem ipsum dolor sit amet consectetur Lorem ipsum                       dolor dolor sit amet consectetur Lorem ipsum dolor', 2000, 'jewellery-1.jpg'),
(3, ' naclas', 'best selling', 2000, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$0SHFfoWzz8WZpdu9Qw//E.tWamILbiNCX7bqhy3od0gvK5.kSJ8N2', 1, 'IT', 'SOURCECODE', '', '', 'logo.png', 1, '', '', '2020-12-30'),
(13, 'jude@yahoo.com', '$2y$10$THCiaipRqs51LgZNNSp7henK8SJ17r7abaH44slwjXavv/nVEw29e', 0, 'angel jude', 'suarez', 'Himamaylan City', '09458423256', 'cover.jpg', 1, '', '', '2020-12-30'),
(14, 'bkhmad12@gmail.com', '$2y$10$bsWcyUjcJ8LCmitjNLFVM.MvmkXO8AY.qPl4Lbl/Ae3ZBNaZgQ4iG', 0, 'cvc', 'khan', ' vnnm,.', '03448307993', '1667473193Watches-For-Women 1.jpg', 1, '', '', '2022-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'bkhmad12@gmail.com', '1122', 'bkhmad12@gmail.com', '2022-11-12 07:45:16'),
(2, 'bkhmad12@gmail.com', '1122', '', '2022-11-09 00:00:00'),
(3, 'bkhmad12@gmail.com', '1122', 'bkhmad12@gmail.com', '2022-11-12 10:52:50'),
(4, 'bilalkhan', '1122', 'bkhmad12@gmail.com', '2022-11-12 10:53:08'),
(5, 'khankhan', '1122', 'khan@gmail.com', '2022-11-12 10:53:55'),
(6, 'bkhmad12@gmail.com', '1122', 'bkhmad12@gmail.com', '2022-11-15 06:25:05'),
(7, 'khan', '1122', 'admin@admin.com', '2022-11-17 10:53:24'),
(8, 'bkhmad12@gmail.com', '1122', 'bilal@gmail.com', '2022-11-17 10:53:37'),
(9, 'Bilalkhan', '112233', 'bilal@gmail.com', '2022-11-22 11:36:35'),
(10, 'bilal', '112233', 'admin@gamil.com', '2022-11-22 11:37:57'),
(11, 'khankhan', '11223344', 'khan@gmail.com', '2022-11-22 18:00:14'),
(12, 'Bilalkhan', '112233', 'bilal@gmail.com', '2022-11-22 18:07:24'),
(13, 'Bilalkhan', '112233', 'bilal@gmail.com', '2022-11-24 03:31:32'),
(14, 'Bilalkhan', '112233', 'bilal@gmail.com', '2022-11-24 03:32:06'),
(15, 'Admin', '1122', 'admin@gmail.com', '2022-11-24 03:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `userslogin`
--

CREATE TABLE `userslogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userslogin`
--

INSERT INTO `userslogin` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'Bilalkhan', 'bkhmad12@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', '2022-11-21 16:27:21'),
(2, 'Admin', '03333442076', '81dc9bdb52d04dc20036dbd8313ed055', '2022-11-24 12:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(3, 'areen', 'areen@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', '2691again_800x.jpg'),
(4, 'Bilal', 'bkhmad12@gmail.com', '3b712de48137572f3849aabd5666a4e3', 'pic-6.png'),
(5, 'waseem', 'waseem@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'pic-3.png'),
(6, 'king', 'king@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'pic-5.png'),
(7, 'Bilal', 'bilal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'db9c23a5f8eb920908ee7f95e1a767eb.jpg'),
(8, 'Bilal', 'bkhmad12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ME-2435-min_160x.jpg'),
(9, 'kashif', 'kashif@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1587_800x (1).jpg'),
(10, 'Bilal', 'techwork87@gmail.com', '3b712de48137572f3849aabd5666a4e3', ''),
(11, 'Bilal', 'waseem@gmail.com', '3b712de48137572f3849aabd5666a4e3', 'AliZafar.jpg'),
(12, 'Bilal', 'khan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'AliZafar.jpg'),
(13, 'Bilal', 'khan123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'abdulrehman.jpg'),
(14, 'Bilal', 'khankhan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'abdulrehman.jpg'),
(15, 'Bilal', 'bkhmad12@gmail.com', 'e0f7a4d0ef9b84b83b693bbf3feb8e6e', 'HTB1lHaQXpT7gK0jSZFpq6yTkpXaD.jpg'),
(16, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1_3_5fe710be-b3b8-433f-8487-c030.jpg'),
(17, 'fd', 'ssdsaaf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'men-glowing-lotion-soothes-nouri (2).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userslogin`
--
ALTER TABLE `userslogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userslogin`
--
ALTER TABLE `userslogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
