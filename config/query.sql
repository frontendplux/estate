-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2026 at 05:54 AM
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
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  `sku` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`, `image`, `sku`, `status`) VALUES
(1, 'Apartments', NULL, 'apartments.jpg', 'CAT-APT', 1),
(2, 'Houses', NULL, 'houses.jpg', 'CAT-HOU', 1),
(3, 'Furniture', NULL, 'furniture.jpg', 'CAT-FUR', 1),
(4, 'Land', NULL, 'land.jpg', 'CAT-LAND', 1),
(5, 'Mini Flat', 1, 'mini-flat.jpg', 'APT-MINI', 1),
(6, '1 Bedroom Apartment', 1, '1bed.jpg', 'APT-1BED', 1),
(7, '2 Bedroom Apartment', 1, '2bed.jpg', 'APT-2BED', 1),
(8, '3 Bedroom Apartment', 1, '3bed.jpg', 'APT-3BED', 1),
(9, 'Duplex', 2, 'duplex.jpg', 'HOU-DUP', 1),
(10, 'Bungalow', 2, 'bungalow.jpg', 'HOU-BUNG', 1),
(11, 'Terrace', 2, 'terrace.jpg', 'HOU-TERR', 1),
(12, 'Sofa', 3, 'sofa.jpg', 'FUR-SOFA', 1),
(13, 'Bed', 3, 'bed.jpg', 'FUR-BED', 1),
(14, 'Dining Set', 3, 'dining.jpg', 'FUR-DINE', 1),
(15, 'Wardrobe', 3, 'wardrobe.jpg', 'FUR-WARD', 1),
(16, 'Residential Land', 4, 'res-land.jpg', 'LAND-RES', 1),
(17, 'Commercial Land', 4, 'com-land.jpg', 'LAND-COM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `country_code` varchar(20) NOT NULL,
  `currency_code` varchar(20) NOT NULL,
  `currency_symbol` varchar(10) NOT NULL,
  `status` enum('active','pending') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `country_code`, `currency_code`, `currency_symbol`, `status`) VALUES
(1, 'Afghanistan', 'AF', 'AFN', '؋', 'active'),
(2, 'Albania', 'AL', 'ALL', 'L', 'active'),
(3, 'Algeria', 'DZ', 'DZD', 'دج', 'active'),
(4, 'Argentina', 'AR', 'ARS', '$', 'active'),
(5, 'Australia', 'AU', 'AUD', '$', 'active'),
(6, 'Austria', 'AT', 'EUR', '€', 'active'),
(7, 'Bangladesh', 'BD', 'BDT', '৳', 'active'),
(8, 'Belgium', 'BE', 'EUR', '€', 'active'),
(9, 'Brazil', 'BR', 'BRL', 'R$', 'active'),
(10, 'Canada', 'CA', 'CAD', '$', 'active'),
(11, 'China', 'CN', 'CNY', '¥', 'active'),
(12, 'Colombia', 'CO', 'COP', '$', 'active'),
(13, 'Denmark', 'DK', 'DKK', 'kr', 'active'),
(14, 'Egypt', 'EG', 'EGP', '£', 'active'),
(15, 'Finland', 'FI', 'EUR', '€', 'active'),
(16, 'France', 'FR', 'EUR', '€', 'active'),
(17, 'Germany', 'DE', 'EUR', '€', 'active'),
(18, 'Ghana', 'GH', 'GHS', '₵', 'active'),
(19, 'Greece', 'GR', 'EUR', '€', 'active'),
(20, 'India', 'IN', 'INR', '₹', 'active'),
(21, 'Indonesia', 'ID', 'IDR', 'Rp', 'active'),
(22, 'Ireland', 'IE', 'EUR', '€', 'active'),
(23, 'Israel', 'IL', 'ILS', '₪', 'active'),
(24, 'Italy', 'IT', 'EUR', '€', 'active'),
(25, 'Japan', 'JP', 'JPY', '¥', 'active'),
(26, 'Kenya', 'KE', 'KES', 'KSh', 'active'),
(27, 'Malaysia', 'MY', 'MYR', 'RM', 'active'),
(28, 'Mexico', 'MX', 'MXN', '$', 'active'),
(29, 'Morocco', 'MA', 'MAD', 'د.م.', 'active'),
(30, 'Netherlands', 'NL', 'EUR', '€', 'active'),
(31, 'New Zealand', 'NZ', 'NZD', '$', 'active'),
(32, 'Nigeria', 'NG', 'NGN', '₦', 'active'),
(33, 'Norway', 'NO', 'NOK', 'kr', 'active'),
(34, 'Pakistan', 'PK', 'PKR', '₨', 'active'),
(35, 'Philippines', 'PH', 'PHP', '₱', 'active'),
(36, 'Poland', 'PL', 'PLN', 'zł', 'active'),
(37, 'Portugal', 'PT', 'EUR', '€', 'active'),
(38, 'Qatar', 'QA', 'QAR', '﷼', 'active'),
(39, 'Russia', 'RU', 'RUB', '₽', 'active'),
(40, 'Saudi Arabia', 'SA', 'SAR', '﷼', 'active'),
(41, 'South Africa', 'ZA', 'ZAR', 'R', 'active'),
(42, 'South Korea', 'KR', 'KRW', '₩', 'active'),
(43, 'Spain', 'ES', 'EUR', '€', 'active'),
(44, 'Sweden', 'SE', 'SEK', 'kr', 'active'),
(45, 'Switzerland', 'CH', 'CHF', 'CHF', 'active'),
(46, 'Thailand', 'TH', 'THB', '฿', 'active'),
(47, 'Turkey', 'TR', 'TRY', '₺', 'active'),
(48, 'United Arab Emirates', 'AE', 'AED', 'د.إ', 'active'),
(49, 'United Kingdom', 'GB', 'GBP', '£', 'active'),
(50, 'United States', 'US', 'USD', '$', 'active'),
(51, 'Vietnam', 'VN', 'VND', '₫', 'active'),
(52, 'Zimbabwe', 'ZW', 'ZWL', '$', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `location` text NOT NULL,
  `amount` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `promotional_id` int(11) NOT NULL,
  `status` enum('active','pending') NOT NULL DEFAULT 'pending',
  `timereg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `keywords`, `country_id`, `location`, `amount`, `category_id`, `promotional_id`, `status`, `timereg`) VALUES
(1, 'Mini Flat in Lekki', 'Cozy mini flat with 1 bedroom, fully furnished, perfect for singles.', 'apartment,mini flat,Lekki,rent', 32, 'Lekki, Lagos', 500000, 5, 1, 'active', '2026-01-26 02:00:55'),
(2, '1 Bedroom Apartment', 'Compact 1-bedroom apartment near markets and transport.', 'apartment,1 bedroom,Lagos,rent', 1, 'Yaba, Lagos', 650000, 6, 1, 'active', '2026-01-26 02:00:55'),
(3, '2 Bedroom Apartment', 'Spacious 2-bedroom apartment, close to schools and shopping.', 'apartment,2 bedroom,Lagos,rent', 1, 'Victoria Island, Lagos', 850000, 7, 1, 'active', '2026-01-26 02:00:55'),
(4, '3 Bedroom Apartment', 'Modern 3-bedroom apartment with balcony.', 'apartment,3 bedroom,Lagos,rent', 1, 'Ikoyi, Lagos', 1200000, 8, 1, 'active', '2026-01-26 02:00:55'),
(5, 'Mini Flat in Ikeja', 'Affordable mini flat, ideal for young professionals.', 'apartment,mini flat,Ikeja,rent', 1, 'Ikeja, Lagos', 450000, 5, 1, 'active', '2026-01-26 02:00:55'),
(6, '1 Bedroom Apartment in Ajah', 'Well-furnished apartment, security included.', 'apartment,1 bedroom,Ajah,rent', 1, 'Ajah, Lagos', 700000, 6, 1, 'active', '2026-01-26 02:00:55'),
(7, '2 Bedroom Apartment in Lekki', 'Spacious and bright, perfect for small families.', 'apartment,2 bedroom,Lekki,rent', 1, 'Lekki, Lagos', 900000, 7, 1, 'active', '2026-01-26 02:00:55'),
(8, '3 Bedroom Apartment in Yaba', 'Modern apartment near schools and shopping centers.', 'apartment,3 bedroom,Yaba,rent', 1, 'Yaba, Lagos', 1300000, 8, 1, 'active', '2026-01-26 02:00:55'),
(9, 'Mini Flat in Surulere', 'Affordable mini flat for students.', 'apartment,mini flat,Surulere,rent', 1, 'Surulere, Lagos', 400000, 5, 1, 'active', '2026-01-26 02:00:55'),
(10, '2 Bedroom Apartment in Ikeja', 'Comfortable apartment with balcony.', 'apartment,2 bedroom,Ikeja,rent', 1, 'Ikeja, Lagos', 880000, 7, 1, 'active', '2026-01-26 02:00:55'),
(11, '3 Bedroom Duplex in Ajah', 'Modern duplex in gated estate with garage.', 'house,duplex,Ajah,sale', 1, 'Ajah, Lagos', 45000000, 9, 2, 'active', '2026-01-26 02:00:55'),
(12, '4 Bedroom Terrace in Ikeja', 'Luxury terrace house with garden.', 'house,terrace,Ikeja,sale', 1, 'Ikeja, Lagos', 65000000, 11, 2, 'active', '2026-01-26 02:00:55'),
(13, 'Bungalow in Lekki', 'Cozy bungalow with 3 bedrooms.', 'house,bungalow,Lekki,sale', 1, 'Lekki, Lagos', 30000000, 10, 2, 'active', '2026-01-26 02:00:55'),
(14, 'Duplex in Victoria Island', 'Spacious duplex near the waterfront.', 'house,duplex,Victoria Island,sale', 1, 'Victoria Island, Lagos', 75000000, 9, 2, 'active', '2026-01-26 02:00:55'),
(15, 'Terrace House in Surulere', 'Affordable terrace house for families.', 'house,terrace,Surulere,sale', 1, 'Surulere, Lagos', 40000000, 11, 2, 'active', '2026-01-26 02:00:55'),
(16, 'Bungalow in Yaba', 'Modern bungalow close to amenities.', 'house,bungalow,Yaba,sale', 1, 'Yaba, Lagos', 32000000, 10, 2, 'active', '2026-01-26 02:00:55'),
(17, '3 Bedroom Duplex in Ikeja', 'Gated estate with 24/7 security.', 'house,duplex,Ikeja,sale', 1, 'Ikeja, Lagos', 48000000, 9, 2, 'active', '2026-01-26 02:00:55'),
(18, '4 Bedroom Terrace in Lekki', 'Spacious terrace with balcony.', 'house,terrace,Lekki,sale', 1, 'Lekki, Lagos', 67000000, 11, 2, 'active', '2026-01-26 02:00:55'),
(19, 'Bungalow in Ajah', 'Cozy home ideal for small families.', 'house,bungalow,Ajah,sale', 1, 'Ajah, Lagos', 31000000, 10, 2, 'active', '2026-01-26 02:00:55'),
(20, 'Duplex in Yaba', 'Modern duplex with large garden.', 'house,duplex,Yaba,sale', 1, 'Yaba, Lagos', 72000000, 9, 2, 'active', '2026-01-26 02:00:55'),
(21, '3-Seater Sofa', 'Comfortable 3-seater sofa in grey fabric.', 'furniture,sofa,living room', 1, 'Lagos', 250000, 12, 3, 'active', '2026-01-26 02:00:55'),
(22, 'Dining Table Set', 'Wooden 6-seater dining table with chairs.', 'furniture,dining,table', 1, 'Lagos', 180000, 14, 3, 'active', '2026-01-26 02:00:55'),
(23, 'King Size Bed', 'Spacious king-size bed with storage.', 'furniture,bed,bedroom', 1, 'Lagos', 300000, 13, 3, 'active', '2026-01-26 02:00:55'),
(24, 'Wardrobe', '4-door wardrobe for bedroom storage.', 'furniture,wardrobe,bedroom', 1, 'Lagos', 150000, 15, 3, 'active', '2026-01-26 02:00:55'),
(25, 'Office Chair', 'Ergonomic office chair, black leather.', 'furniture,chair,office', 1, 'Lagos', 50000, 12, 3, 'active', '2026-01-26 02:00:55'),
(26, 'Coffee Table', 'Modern wooden coffee table.', 'furniture,table,living room', 1, 'Lagos', 70000, 14, 3, 'active', '2026-01-26 02:00:55'),
(27, 'Queen Size Bed', 'Comfortable queen-size bed with mattress.', 'furniture,bed,bedroom', 1, 'Lagos', 280000, 13, 3, 'active', '2026-01-26 02:00:55'),
(28, 'Recliner Chair', 'Leather recliner for living room.', 'furniture,chair,living room', 1, 'Lagos', 120000, 12, 3, 'active', '2026-01-26 02:00:55'),
(29, 'Dining Bench', 'Wooden dining bench for 4 people.', 'furniture,bench,dining', 1, 'Lagos', 45000, 14, 3, 'active', '2026-01-26 02:00:55'),
(30, 'Shoe Rack', '5-tier shoe rack, perfect for bedroom.', 'furniture,rack,bedroom', 1, 'Lagos', 30000, 15, 3, 'active', '2026-01-26 02:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `products_image`
--

CREATE TABLE `products_image` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `img` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_image`
--

INSERT INTO `products_image` (`id`, `products_id`, `img`, `alt`) VALUES
(1, 1, 'apartments/mini-flat-lekki-1.jpg', 'Mini Flat in Lekki - Image 1'),
(2, 1, 'apartments/mini-flat-lekki-2.jpg', 'Mini Flat in Lekki - Image 2'),
(3, 2, 'apartments/1bed-yaba-1.jpg', '1 Bedroom Apartment in Yaba - Image 1'),
(4, 2, 'apartments/1bed-yaba-2.jpg', '1 Bedroom Apartment in Yaba - Image 2'),
(5, 3, 'apartments/2bed-victoria-1.jpg', '2 Bedroom Apartment Victoria Island - Image 1'),
(6, 3, 'apartments/2bed-victoria-2.jpg', '2 Bedroom Apartment Victoria Island - Image 2'),
(7, 4, 'apartments/3bed-ikoyi-1.jpg', '3 Bedroom Apartment in Ikoyi - Image 1'),
(8, 4, 'apartments/3bed-ikoyi-2.jpg', '3 Bedroom Apartment in Ikoyi - Image 2'),
(9, 5, 'apartments/mini-flat-ikeja-1.jpg', 'Mini Flat in Ikeja - Image 1'),
(10, 5, 'apartments/mini-flat-ikeja-2.jpg', 'Mini Flat in Ikeja - Image 2'),
(11, 6, 'apartments/1bed-ajah-1.jpg', '1 Bedroom Apartment in Ajah - Image 1'),
(12, 6, 'apartments/1bed-ajah-2.jpg', '1 Bedroom Apartment in Ajah - Image 2'),
(13, 7, 'apartments/2bed-lekki-1.jpg', '2 Bedroom Apartment in Lekki - Image 1'),
(14, 7, 'apartments/2bed-lekki-2.jpg', '2 Bedroom Apartment in Lekki - Image 2'),
(15, 8, 'apartments/3bed-yaba-1.jpg', '3 Bedroom Apartment in Yaba - Image 1'),
(16, 8, 'apartments/3bed-yaba-2.jpg', '3 Bedroom Apartment in Yaba - Image 2'),
(17, 9, 'apartments/mini-flat-surulere-1.jpg', 'Mini Flat in Surulere - Image 1'),
(18, 9, 'apartments/mini-flat-surulere-2.jpg', 'Mini Flat in Surulere - Image 2'),
(19, 10, 'apartments/2bed-ikeja-1.jpg', '2 Bedroom Apartment in Ikeja - Image 1'),
(20, 10, 'apartments/2bed-ikeja-2.jpg', '2 Bedroom Apartment in Ikeja - Image 2'),
(21, 11, 'houses/3bed-duplex-ajah-1.jpg', '3 Bedroom Duplex in Ajah - Image 1'),
(22, 11, 'houses/3bed-duplex-ajah-2.jpg', '3 Bedroom Duplex in Ajah - Image 2'),
(23, 12, 'houses/4bed-terrace-ikeja-1.jpg', '4 Bedroom Terrace in Ikeja - Image 1'),
(24, 12, 'houses/4bed-terrace-ikeja-2.jpg', '4 Bedroom Terrace in Ikeja - Image 2'),
(25, 13, 'houses/bungalow-lekki-1.jpg', 'Bungalow in Lekki - Image 1'),
(26, 13, 'houses/bungalow-lekki-2.jpg', 'Bungalow in Lekki - Image 2'),
(27, 14, 'houses/duplex-victoria-1.jpg', 'Duplex in Victoria Island - Image 1'),
(28, 14, 'houses/duplex-victoria-2.jpg', 'Duplex in Victoria Island - Image 2'),
(29, 15, 'houses/terrace-surulere-1.jpg', 'Terrace House in Surulere - Image 1'),
(30, 15, 'houses/terrace-surulere-2.jpg', 'Terrace House in Surulere - Image 2'),
(31, 16, 'houses/bungalow-yaba-1.jpg', 'Bungalow in Yaba - Image 1'),
(32, 16, 'houses/bungalow-yaba-2.jpg', 'Bungalow in Yaba - Image 2'),
(33, 17, 'houses/3bed-duplex-ikeja-1.jpg', '3 Bedroom Duplex in Ikeja - Image 1'),
(34, 17, 'houses/3bed-duplex-ikeja-2.jpg', '3 Bedroom Duplex in Ikeja - Image 2'),
(35, 18, 'houses/4bed-terrace-lekki-1.jpg', '4 Bedroom Terrace in Lekki - Image 1'),
(36, 18, 'houses/4bed-terrace-lekki-2.jpg', '4 Bedroom Terrace in Lekki - Image 2'),
(37, 19, 'houses/bungalow-ajah-1.jpg', 'Bungalow in Ajah - Image 1'),
(38, 19, 'houses/bungalow-ajah-2.jpg', 'Bungalow in Ajah - Image 2'),
(39, 20, 'houses/duplex-yaba-1.jpg', 'Duplex in Yaba - Image 1'),
(40, 20, 'houses/duplex-yaba-2.jpg', 'Duplex in Yaba - Image 2'),
(41, 21, 'furniture/sofa-3seater-1.jpg', '3-Seater Sofa - Image 1'),
(42, 21, 'furniture/sofa-3seater-2.jpg', '3-Seater Sofa - Image 2'),
(43, 22, 'furniture/dining-table-1.jpg', 'Dining Table Set - Image 1'),
(44, 22, 'furniture/dining-table-2.jpg', 'Dining Table Set - Image 2'),
(45, 23, 'furniture/king-bed-1.jpg', 'King Size Bed - Image 1'),
(46, 23, 'furniture/king-bed-2.jpg', 'King Size Bed - Image 2'),
(47, 24, 'furniture/wardrobe-1.jpg', 'Wardrobe - Image 1'),
(48, 24, 'furniture/wardrobe-2.jpg', 'Wardrobe - Image 2'),
(49, 25, 'furniture/office-chair-1.jpg', 'Office Chair - Image 1'),
(50, 25, 'furniture/office-chair-2.jpg', 'Office Chair - Image 2'),
(51, 26, 'furniture/coffee-table-1.jpg', 'Coffee Table - Image 1'),
(52, 26, 'furniture/coffee-table-2.jpg', 'Coffee Table - Image 2'),
(53, 27, 'furniture/queen-bed-1.jpg', 'Queen Size Bed - Image 1'),
(54, 27, 'furniture/queen-bed-2.jpg', 'Queen Size Bed - Image 2'),
(55, 28, 'furniture/recliner-chair-1.jpg', 'Recliner Chair - Image 1'),
(56, 28, 'furniture/recliner-chair-2.jpg', 'Recliner Chair - Image 2'),
(57, 29, 'furniture/dining-bench-1.jpg', 'Dining Bench - Image 1'),
(58, 29, 'furniture/dining-bench-2.jpg', 'Dining Bench - Image 2'),
(59, 30, 'furniture/shoe-rack-1.jpg', 'Shoe Rack - Image 1'),
(60, 30, 'furniture/shoe-rack-2.jpg', 'Shoe Rack - Image 2');

-- --------------------------------------------------------

--
-- Table structure for table `promotional`
--

CREATE TABLE `promotional` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `sku` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `off_price` double NOT NULL,
  `start_date` datetime NOT NULL,
  `off_date` datetime NOT NULL,
  `currency_id` int(11) NOT NULL,
  `status` enum('percent','cash','gift','coin','none') NOT NULL DEFAULT 'cash'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotional`
--

INSERT INTO `promotional` (`id`, `icon`, `name`, `sku`, `description`, `keywords`, `off_price`, `start_date`, `off_date`, `currency_id`, `status`) VALUES
(1, 'ri-home-line', 'Summer Apartment Deal', 'PROMO-APT-001', 'Get 10% off on selected apartments this summer.', 'apartment,summer,discount,rent', 10, '2026-01-26 00:00:00', '2026-03-31 00:00:00', 32, 'cash'),
(2, 'ri-building-line', 'House Sale Special', 'PROMO-HOU-001', 'Buy a house and get a 5% price reduction this month.', 'house,sale,discount,buy', 5, '2026-01-26 00:00:00', '2026-02-28 00:00:00', 1, 'cash'),
(3, 'ri-sofa-line', 'Furniture Clearance', 'PROMO-FUR-001', 'Up to 20% off on sofas, beds, and dining sets.', 'furniture,sofa,bed,dining,discount', 20, '2026-01-26 00:00:00', '2026-02-15 00:00:00', 1, 'cash'),
(4, 'ri-money-dollar-circle-line', 'Deposit Bonus', 'PROMO-DEP-001', 'Pay your deposit early and get ₦50,000 off your first payment.', 'deposit,bonus,apartment,promo', 50000, '2026-01-26 00:00:00', '2026-02-28 00:00:00', 1, 'cash'),
(5, 'ri-star-line', 'New Year Housing Offer', 'PROMO-NEW-001', 'Special offer on all newly listed houses with 15% off.', 'house,new year,discount,real estate', 15, '2026-01-01 00:00:00', '2026-01-31 00:00:00', 1, 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `promotional_products`
--

CREATE TABLE `promotional_products` (
  `id` bigint(20) NOT NULL,
  `products_id` int(11) NOT NULL,
  `promotional_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotional_products`
--

INSERT INTO `promotional_products` (`id`, `products_id`, `promotional_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 3),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 3),
(22, 22, 3),
(23, 23, 3),
(24, 24, 3),
(25, 25, 3),
(26, 26, 3),
(27, 27, 3),
(28, 28, 3),
(29, 29, 3),
(30, 30, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_image`
--
ALTER TABLE `products_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional`
--
ALTER TABLE `promotional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_products`
--
ALTER TABLE `promotional_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products_image`
--
ALTER TABLE `products_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `promotional`
--
ALTER TABLE `promotional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promotional_products`
--
ALTER TABLE `promotional_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
