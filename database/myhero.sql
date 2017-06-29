-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 10:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhero`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `url`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Action figures', 'Comic book,TV,Movies & Games \r\n', 'action-figures', 'actionheroescat.jpg', '2017-06-22 00:00:00', '2017-06-22 00:00:00'),
(2, 'Funko Pop! figures', 'Funko Pop Vinyl Series ', 'funko-pop', 'popcat.jpg', '2017-06-22 00:00:00', '2017-06-22 00:00:00'),
(3, 'Lego action figures', 'Marvel, DC comics,Star Wars and More', 'lego-figures', 'legocat.png', '2017-06-22 00:00:00', '2017-06-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `url`, `image`, `price`, `updated_at`, `created_at`) VALUES
(1, 1, 'Superman ', 'Justice League Superman ', 'Superman ', 'superman.jpg', '29.90', '2017-06-25 15:08:25', '2017-06-25 15:08:25'),
(2, 1, 'Star Lord', 'Star Lord 6-inch figure.\r\nPart of the Guardians of the Galaxy Legends Series.', 'Star-Lord', 'starlordguardian.jpg', '27.90', '2017-06-25 15:31:12', '2017-06-25 15:31:12'),
(3, 1, 'Spiderman', 'The Amazing Spiderman', 'Spiderman', 'spidie.jpg', '25.90', '2017-06-25 15:37:36', '2017-06-25 15:37:36'),
(4, 2, 'Jon Snow', 'Part of Game of Thrones series. Jon snow funko pop vinyl figure. ', 'Jon-Snow', 'got.jpeg', '25.00', '2017-06-25 15:47:18', '2017-06-25 15:47:18'),
(5, 2, 'Jo Sno', 'Part of Game of Thrones series. Jon snow funko pop figure.', 'Jo-Sno', 'got.jpeg', '25.00', '2017-06-25 15:52:51', '2017-06-25 15:52:51'),
(6, 3, 'lego cat', 'Lego action figures', 'lego-cat', 'legof.jpg', '18.00', '2017-06-25 15:56:56', '2017-06-25 15:56:56'),
(7, 3, 'Lego Cat Lego', 'Lego Action Figures', 'lego-cat-lego', 'legof.jpg', '18.00', '2017-06-25 15:58:02', '2017-06-25 15:58:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
