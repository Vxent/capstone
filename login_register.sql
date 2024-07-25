-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 02:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(0, 'Vincent LEe', 'vincentleemtiongco@gnc.edu.ph', '$2y$10$MnlwRDRr4F/mv011xL.A/u20NzKfoGTbSW1WXefEqTW4sqAFz0DA6'),
(0, 'Vincent Lee Tiongco', 'vincentlee.tiongco@gnc.edu.ph', '$2y$10$sQ8vJJ2tsIU2w2Vsd9mVAO.iIrN0a6qIV9ZYmhXjLgu85r3WtOdD6'),
(0, 'BODS WAVE ', 'asd@gmail.com', '$2y$10$L6b4KopbYMH.lgq/P9.IuOw3cXDKV6ktezY3Bleik.zZAbHmTjjQi'),
(0, 'carlo wave 110', 'carlowave110@gmail.com', '$2y$10$sjRmv0dF4exDdc0Ziff4tutKcXOJ3bv3t9ZkFvE4a9N8p.gVNVnxG'),
(0, 'johbrian', 'jbrian@gmail.com', '$2y$10$CNHYODoFeIlPK2F5tZOWY.8aUxTTl7/UYronAdlcpcq/ezCE6xfey'),
(0, 'qwerty', 'qwerty@edu.ph', '$2y$10$8YzzBE5pORgp80pZhaWV2ObVDS2C1sJ0SNo9iEDWMP9h5/QpM5wB.'),
(0, 'Vincent LEe', 'lee@gmail.com', '$2y$10$D6tFM.87p1BEwx2MU9y0q.8RbbZPMpgqOVe7LlA9Xg3gQaeOPoVOm'),
(0, 'nigel bading', 'nigel@gmail.com', '$2y$10$Szus9Hn0XDRHdyJCruTxhuoSObiisoPPKScnNvaKlN5qf5U5Akl8W');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
