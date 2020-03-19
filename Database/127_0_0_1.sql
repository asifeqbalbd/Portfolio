-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 04:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--
CREATE DATABASE IF NOT EXISTS `simple` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `simple`;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `images`) VALUES
(2, 'Bata', '2.png'),
(3, 'Tata', '3.png'),
(4, 'Asif Eqbal', '4.png'),
(5, 'Admin', '5.png'),
(6, 'zzz', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Unseen 2=Seen',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `massage`, `status`, `created_at`) VALUES
(1, 'Admin', 'asif11@gmail.com', 'The oldest classical Greek and Latin writing had little or no space between words and could be written in boustrophedon (alternating directions). Over time, text direction (left to right) became standardized, and word dividers and terminal punctuation became common.', 2, '2020-03-05 20:15:48'),
(4, 'Eqbal', 'asif2@gmail.com', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.', 2, '2020-03-05 20:19:05'),
(5, 'Hadisur', 'hadisur@gmail.com', 'hi! hoy are you', 1, '2020-03-06 15:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `dbtable`
--

CREATE TABLE `dbtable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwrd` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confame_passwrd` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = Connect \r\n2 = disconnect',
  `user_role` int(11) NOT NULL DEFAULT 1 COMMENT '1=user 2=admin',
  `images` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dbtable`
--

INSERT INTO `dbtable` (`id`, `name`, `email`, `phone`, `passwrd`, `confame_passwrd`, `Status`, `user_role`, `images`) VALUES
(19, 'Admin', 'admin1aq5@admin.com', '01755931834', '$2y$10$Z7xnRXdUzDK9qF3fvfc6x.DRcMHE8YxUiMtXsSPb/D3AuZCr8w/22', 'admin1s@admin.com', '1', 1, '19.jpg'),
(20, 'Md. Azed Islam', 'admin02aa@admin.com', '01755331877', '$2y$10$C46o1sYdNR1SyhbJmIwtweceva7tfofT1KmAUnkIVcXiQbqhcfb5C', 'admin11@admin.com', '1', 1, '20.png'),
(21, 'Asif ', 'asif2as2@gmail.com', '4654653654', '$2y$10$2vUWfL8ons5hd9UgAoqblOVsQcD4QD4755g.89gdg0xqdVpsxxTNe', 'asif2aa2@gmail.com', '1', 1, '21.png'),
(22, 'Md Asif Eqbal', 'asif.eqbal@gmail.com', '01780775601', '$2y$10$FyEzoDuPsR3QajHV4xUYIu/VxisPRB04rpXjTwDu7fYZbnfovgBK6', 'asif.eqbal@gmail.com', '1', 2, '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institute`, `course`, `passing_year`, `experience`) VALUES
(1, 'Paglapir School And College, Rangpur', 'JSC', '2012', '80'),
(2, 'Paglapir School And College, Rangpur', 'SSC', '2015', '75'),
(3, 'Faridpur Polytechnic Institute', 'Diploma in Engineering (CSE)', '2016', '79'),
(4, ' Doyle Campus', 'Web Developer Php with Codeigniter', '2019', '75'),
(5, 'Creative IT Institute', 'Web Developer Php with laravel', '2020', '90');

-- --------------------------------------------------------

--
-- Table structure for table `myself`
--

CREATE TABLE `myself` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `myself`
--

INSERT INTO `myself` (`id`, `name`, `images`, `address`, `summary`, `phone`, `email`, `country`) VALUES
(1, 'MD. ASIF EQBAL', '1.png', '72, East Razabazer, Dhanmondi, Dhaka-1215', 'Mohammad Asif Iqbal was born on June 11, 1999 in Rangpur.Father Mohammad Akbar Ali business tycoon And Mother Anasa Begum housewife . Village house of Gokulpur village of Haridibpur Union of Rangpur district.\r\n\r\n I am currently studying in the Department of Computer Technology, Faripur Polytechnic Institute. & CSE.\r\nWorking gives me a lot of skills and experience that I believe make me best suited for the job position that is being offered with a position of Web Devloper.\r\nHobbies and likes My favorite game is cricket and tennis. Dear Sportsman Mashrafe Bin Mortaza and Cristiano Ronaldo . Hummus rain shower . Preferred food cattle and poles.', '+8801 780 775 601', 'asif.paglapirbd222@gmail.com', 'Bangladesh'),
(5, 'Md Asif', '5.png', 'Paglapir,Rangpur', 'Hi! i am Asif. how are you?', '01755331877', 'asif@gmail.com', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `images`) VALUES
(10, 'CREATIVE DESIGN', 'Free online resources for learning English or teaching it. From easy guides to grammar to fun games and quizzes.', '10.png'),
(11, 'CREATIVE DEVELOPMEENT', ' Learn English GGFUYSD  UARGOU UARGO online using our high-quality resources to quickly improve your English. Take our free level test to help you find your English language level', '11.png'),
(12, 'Ads Goto', 'Practise and improve your English language skills from beginner to advanced level. Choose which skill you want to practise today, then find your level and', '12.png'),
(14, 'lOCALHOST SYSTEM', ' Would you mind introducing yourself? Or Could you please introduce yourself to us? Or Could you please allow us to know about you?', '14.png'),
(16, 'Blood Bank', 'This project was created with php codeigniter.Here\'s how to use it..\r\nHere\'s a home page. New Donor actually has to fill out a form first. From here, we have to provide some personal information.These information are stored in Blood Bank and Database. No one will be able to access the data without admins.If someone asks them for blood, they need to message with the information they need and how many bags .Can be contracted with them.\r\nThe admin has to go through everything to manage it. To login they have to provide email and password .Then the database can see everything else. Who can see the messages and contacts. But if he logs out then he has to login again .\r\n', '16.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `icon`, `summary`) VALUES
(2, 'CREATIVE IT INSTITUT', 'fal fa-lightbulb-on', 'The decision about what to put into your paragraphs begins with the germination of a seed of ideas; this “germination process” is better known as brainstorming. There are many techniques for brainstorming; whichever one you choose, this stage of paragraph development cannot be skipped. '),
(3, 'CREATIVE IT', 'fab fa-free-code-camp', 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph.'),
(4, 'CREATIVE DESIGN', 'fab fa-react', 'This handout will help you understand how paragraphs are formed, how to develop stronger paragraphs, and how to completely and clearly express your idea'),
(5, 'ULTRA RESPONSIVE', 'fal fa-desktop', ' A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles,');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pinterest` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plus` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `twitter`, `instagram`, `github`, `Pinterest`, `plus`) VALUES
(1, 'https://www.facebook.com/asif.eqbal.222', 'https://twitter.com/asifeqbal22', 'https://www.instagram.com/asif.eqbalbd/', 'https://github.com/asifeqbalbd', 'https://www.pinterest.com/asifpaglapirbd/', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `message`, `images`) VALUES
(1, 'Md. Alamgir Hossain', '   Ma is a 2019 American psychological horror film produced, co-written and directed by Tate Taylor. It stars Octavia Spencer, Juliette Lewis, Diana Silvers,', '1.jpg'),
(4, 'Asif Eqbal', '  Directed by Tate Taylor. With Octavia Spencer, Diana Silvers, Juliette Lewis, McKaley Miller. A lonely woman befriends a group of teenagers and decides to let', '4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbtable`
--
ALTER TABLE `dbtable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myself`
--
ALTER TABLE `myself`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dbtable`
--
ALTER TABLE `dbtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `myself`
--
ALTER TABLE `myself`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
