-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 04:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `email`, `birthdate`, `zipcode`, `phone`, `age`, `gender`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Cresia', 'Edwards', 'cresialop@gmail.com', '11-26-1995', '6524', '09104448645', 26, 'F', 'Cordellera', '2021-10-28 21:07:43', '2021-11-11 07:25:44'),
(6, 'Uriel', 'Morse', 'joqykefoj@mailinator.com', '1998-10-04', '36862', '09303439843', 22, 'M', 'Rerum ad occaecat qu', '2021-10-28 22:57:59', '2021-10-28 22:57:59'),
(7, 'Eagan', 'Rosales', 'dyleni@mailinator.com', '1998-10-31', '85419', '09656584343', 22, 'M', 'Vel enim quis exerci', '2021-10-28 23:01:08', '2021-10-28 23:01:08'),
(8, 'Ifeoma', 'Webb', 'punev@mailinator.com', '2021-10-29', '39012', '09104448645', 10, 'F', 'Numquam debitis occa', '2021-10-28 23:03:58', '2021-10-28 23:03:58'),
(9, 'Melinda', 'Allen', 'mymisovevi@mailinator.com', '2021-10-29', '93314', '09108472946', 77, 'M', 'Deserunt elit aperi', '2021-10-28 23:04:08', '2021-10-28 23:04:08'),
(10, 'Nomlanga', 'Frye', 'kyrajinyd@mailinator.com', '2021-10-29', '98399', '09321371423', 19, 'M', 'Ut est in itaque fug', '2021-10-28 23:04:17', '2021-10-28 23:04:17'),
(11, 'Keane', 'Bird', 'nozusymis@mailinator.com', '2021-10-29', '76106', '09307756345', 65, 'F', 'Labore sit eu qui ne', '2021-10-28 23:04:30', '2021-10-28 23:04:30'),
(12, 'Debra', 'Lang', 'mitebuh@mailinator.com', '2021-10-29', '64016', '09321371423', 93, 'M', 'Eu soluta quidem nes', '2021-10-28 23:04:50', '2021-10-28 23:04:50'),
(13, 'Yoshi', 'Walter', 'rokomivefy@mailinator.com', '2021-10-29', '60843', '09104448645', 86, 'F', 'Possimus omnis cons', '2021-10-28 23:05:02', '2021-10-28 23:05:02'),
(14, 'Kiayada', 'Floyd', 'jaci@mailinator.com', '2021-10-29', '24935', '09108472946', 36, 'M', 'Et maiores ex sed re', '2021-10-28 23:05:13', '2021-10-28 23:05:13'),
(15, 'Cheyenne', 'Rivers', 'fatitu@mailinator.com', '2021-11-11', '86618', '09307756343', 48, 'F', 'Atque reiciendis seq', '2021-11-11 07:26:13', '2021-11-11 07:26:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
