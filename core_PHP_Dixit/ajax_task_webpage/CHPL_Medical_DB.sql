-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 12:54 PM
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
-- Database: `CHPL_Medical_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `img_path`, `description`) VALUES
(1, 'about-medicine.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur sequi, voluptatum porro possimus minima suscipit hic dolorem quaerat nobis nulla sint vel, voluptatibus ullam, rerum odio mollitia perspiciatis error cumque corrupti assumenda ex facere. Maiores voluptates voluptate aspernatur deserunt? Nihil hic fugiat quidem facere voluptatibus eveniet aspernatur tempore obcaecati ipsam.'),
(2, 'health.jpeg', 'Anyone working in the healthcare field knows how quickly things can change, so the weekly roundup from Health Care Intelligence is useful for getting a lot of information without having to spend hours reading. Each post shares the latest healthcare news from the last week, then elaborates on the most important points.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address`, `phone`, `email_id`) VALUES
(1, '123 Main St, Vastral, Ah\'bad', '9722310904', 'medicine@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `logo_title`
--

CREATE TABLE `logo_title` (
  `id` int(11) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo_title`
--

INSERT INTO `logo_title` (`id`, `logo_url`, `title`) VALUES
(1, 'https://marketplace.canva.com/EAE8fLYOzrA/1/0/1600w/canva-health-care-bO8TgMWVszg.jpg', 'Medical Store'),
(2, 'https://www.logomaker.com/wp-content/uploads/2018/06/first-aid-symbol-picture-id816820042.jpg', 'Medical Services');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine_name`, `description`, `price`, `image_url`) VALUES
(1, 'Crocin', 'Pain reliever and fever reducer', 50.00, 'https://media.istockphoto.com/id/1220626626/vector/pharmacy.jpg?s=1024x1024&w=is&k=20&c=sKuLXGhKD7QhfIk0Sd-9f46sFZpn__Olva_5lj4MN9Y='),
(2, 'Digene', 'Antacid and anti-gas medication', 75.00, 'https://img.freepik.com/free-photo/medicine-capsules-global-health-with-geometric-pattern-digital-remix_53876-126742.jpg'),
(3, 'Augmentin', 'Antibiotic for bacterial infections', 200.00, 'https://t4.ftcdn.net/jpg/02/81/42/77/360_F_281427785_gfahY8bX4VYCGo6jlfO8St38wS9cJQop.jpg'),
(4, 'Corex', 'Cough syrup for dry cough', 40.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEL3-iNvrv_DpFuJ_4qX1fcz5CVXeOhi_udg&s'),
(5, 'Combiflam', 'Pain reliever and anti-inflammatory', 60.00, 'https://cdn.pixabay.com/photo/2020/10/02/09/01/tablets-5620566_1280.jpg'),
(6, 'Dolo 650', 'Pain reliever and fever reducer', 30.00, 'https://www.pol-eko.com.pl/img/img_blog/medicines-dont-like-high-temperatures-1.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_title`
--
ALTER TABLE `logo_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo_title`
--
ALTER TABLE `logo_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
