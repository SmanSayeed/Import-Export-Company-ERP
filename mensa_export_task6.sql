-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 06:14 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mensa_export_task6`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankmodels`
--

CREATE TABLE `bankmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bankname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankaccount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankbranch` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankswift` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankmodels`
--

INSERT INTO `bankmodels` (`id`, `bankname`, `bankaccount`, `bankbranch`, `bankswift`, `created_at`, `updated_at`) VALUES
(1, 'city bank', 'aa333', 'dhaka', '2sad', '2019-08-19 19:42:06', '2019-08-19 19:42:06'),
(2, 'dbbl', 'saa3333', 'comilla', 'fsadf', '2019-08-19 19:42:19', '2019-08-19 19:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `customermodels`
--

CREATE TABLE `customermodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactperson` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swift` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactemail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importerbank` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customermodels`
--

INSERT INTO `customermodels` (`id`, `companyname`, `contactperson`, `branch`, `address`, `contactno`, `swift`, `email`, `contactemail`, `phone`, `importerbank`, `created_at`, `updated_at`) VALUES
(1, 'Mensa', 'Arko', 'Comilla', 'fads', 'fadsf', 'adsf', 'fdsa', 'fas', 'fadsf', 'adsf', '2019-08-19 19:42:44', '2019-08-19 19:42:44'),
(2, 'Vuu', 'Saad', 'sdfa', 'dsf', 'dsf', 'sadf', 'fasdf', 'dsaf', 'adsf', 'fadsf', '2019-08-19 19:42:56', '2019-08-19 19:42:56');

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
(3, '2019_08_19_105246_create_bankmodels_table', 1),
(4, '2019_08_19_105321_create_salesmodels_table', 1),
(5, '2019_08_19_105330_create_customermodels_table', 1);

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
-- Table structure for table `salesmodels`
--

CREATE TABLE `salesmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiarybank` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salescontractno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofcontractregistration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipmentform` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipmentdestination` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameoftheproduct` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastdateofshipment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contractvalidupto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `packingofbags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partshipment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modeoftransport` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modeofpayment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `methodofpayment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advancepayment` double(8,2) NOT NULL,
  `partadvancepayment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transshipment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productofshipment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentegeofproductofshipment` double(8,2) NOT NULL,
  `iban` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lcl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lcno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantitypcs` double(8,2) NOT NULL,
  `ctns` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `netweight` double(8,2) NOT NULL,
  `totalnetweightcgs` double(8,2) NOT NULL,
  `grossweight` double(8,2) NOT NULL,
  `totalgrossweightcgs` double(8,2) NOT NULL,
  `productdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salesmodels`
--

INSERT INTO `salesmodels` (`id`, `name`, `beneficiarybank`, `importer`, `salescontractno`, `dateofcontractregistration`, `shipmentform`, `shipmentdestination`, `nameoftheproduct`, `lastdateofshipment`, `contractvalidupto`, `packingofbags`, `partshipment`, `modeoftransport`, `modeofpayment`, `methodofpayment`, `currency`, `advancepayment`, `partadvancepayment`, `transshipment`, `productofshipment`, `percentegeofproductofshipment`, `iban`, `expno`, `lcl`, `lcno`, `productcode`, `quantitypcs`, `ctns`, `price`, `netweight`, `totalnetweightcgs`, `grossweight`, `totalgrossweightcgs`, `productdescription`, `created_at`, `updated_at`) VALUES
(1, 'saad', 'dbbl', 'Vuu Saad', '27', '2019-08-22', 'Bld Mihail Kogalniceanu22, nr. 8 Bl 1, Sc 1, Ap 09', 'Bld Mihail Kogalniceanu, 22nr. 8 Bl 1, Sc 1, Ap 09', 'suger22', '2019-08-27', '2019-08-05', '22', 'Allowed', 'By Road', 'TT', 'FOB', 'on', 22.00, 'Allowed', 'Allowed', 'Allowed', 22.00, '22', '22', '22', '22', '22', 22.00, 22.00, 222.00, 22.00, 22.00, 22.00, 22.00, '22', '2019-08-19 19:48:14', '2019-08-19 20:12:35'),
(2, 'Jessica Jones4324', 'dbbl', 'Vuu Saad', '274324', '2019-08-16', 'Bld Mihail Kogalniceanu, n4324r. 8 Bl 1, Sc 1, Ap 09', 'Bld Mihail Kogalniceanu, nr324. 8 Bl 1, Sc 1, Ap 09', 'suger324', '2019-08-13', '2019-07-31', '43242', 'Allowed', 'By Road', 'TT', 'FOB', 'on', 23423.00, 'Allowed', 'Allowed', 'Allowed', 4234.00, '4324', '324', '4324', '324', '324', 324.00, 4324.00, 234.00, 423.00, 432.00, 4234.00, 24.00, '324', '2019-08-19 19:49:26', '2019-08-19 19:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankmodels`
--
ALTER TABLE `bankmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customermodels`
--
ALTER TABLE `customermodels`
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
-- Indexes for table `salesmodels`
--
ALTER TABLE `salesmodels`
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
-- AUTO_INCREMENT for table `bankmodels`
--
ALTER TABLE `bankmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customermodels`
--
ALTER TABLE `customermodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salesmodels`
--
ALTER TABLE `salesmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
