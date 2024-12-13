-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 03:33 AM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(4, 'Krystal Jane', 'krystaljane78@gmail.com', 'asd', 'fhjhdfgh'),
(5, 'Krystal Jane', 'krystaljane78@gmail.com', 'asd', 'fhjhdfgh'),
(6, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(7, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(8, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(9, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(10, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(11, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(12, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(13, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi'),
(14, 'Krystal Jane', 'krystaljane78@gmail.com', 'wala lang', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email #1` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `slogan` text NOT NULL,
  `birthday` date NOT NULL,
  `phone` text NOT NULL,
  `city` text NOT NULL,
  `age` text NOT NULL,
  `certification` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `email #2` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sex`, `status`, `username`, `email #1`, `password`, `title`, `place`, `facebook`, `instagram`, `youtube`, `slogan`, `birthday`, `phone`, `city`, `age`, `certification`, `address`, `email #2`) VALUES
(1, 'Krystal Jane Legaspino', 'Female', 'Single', 'krystaljane', 'legaspinokrystaljane78@gmail.com', '12345678', 'Application Developer', 'WMSU', 'Krystal', 'krystal_janeeee19', '#', 'Hi, its me tala!', '2004-02-10', '09639524232', 'Zamboanga City', '20', 'Associate in Computer Technology Major in Application Deveopment', 'San Roque, Zamboanga City', 'krystaljane78@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
