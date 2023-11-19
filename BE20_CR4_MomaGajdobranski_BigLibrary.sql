-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2023 at 05:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE20_CR4_MomaGajdobranski_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `BE20_CR4_MomaGajdobranski_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE20_CR4_MomaGajdobranski_BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ISBN_code` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(11, 'The Catcher in the Rye', 'https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '111111', 'A classic novel about the challenges of growing up.', 'book', 'J.D.', '', 'Little, Brown and Company', 'New York, NY', '1951-07-16'),
(13, 'Thriller', 'https://images.unsplash.com/photo-1516979187457-637abb4f9353?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjJ8fGJvb2t8ZW58MHx8MHx8fDA%3D', '0-7506-7728-7', 'Michael Jackson\'s iconic album.', 'CD', 'Michael', 'Jackson', 'Epic Records', 'Los Angeles, CA', '1982-11-30'),
(14, 'Example Book 4', 'https://plus.unsplash.com/premium_photo-1677013622212-2cd4260dee5c?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Ym9va3xlbnwwfHwwfHx8MA%3D%3D', '123-456-789', 'Description for Book 4', 'book', 'Author4_First', 'Author4_Last', 'Publisher4', 'City4', '2023-01-15'),
(15, 'Example DVD 5', 'https://images.unsplash.com/photo-1576872381149-7847515ce5d8?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Ym9va3xlbnwwfHwwfHx8MA%3D%3D', '987-654-321', 'Description for DVD 5', 'DVD', 'Author5_First', 'Author5_Last', 'Publisher5', 'City5', '2022-12-20'),
(16, 'Example CD 6', 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Ym9va3xlbnwwfHwwfHx8MA%3D%3D', '555-123-789', 'Description for CD 6', 'CD', 'Author6_First', 'Author6_Last', 'Publisher6', 'City6', '2022-11-05'),
(17, 'Example Book 7', 'https://images.unsplash.com/photo-1541963463532-d68292c34b19?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Ym9va3xlbnwwfHwwfHx8MA%3D%3D', '111-222-333', 'Description for Book 7', 'book', 'Author7_First', 'Author7_Last', 'Publisher7', 'City7', '2023-02-28'),
(18, 'Example DVD 8', 'https://images.unsplash.com/photo-1589998059171-988d887df646?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGJvb2t8ZW58MHx8MHx8fDA%3D', '444-555-666', 'Description for DVD 8', 'DVD', 'Author8_First', 'Author8_Last', 'Publisher8', 'City8', '2023-03-10'),
(19, 'Example CD 9', 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Ym9va3xlbnwwfHwwfHx8MA%3D%3D', '777-888-999', 'Description for CD 9', 'CD', 'Author9_First', 'Author9_Last', 'Publisher9', 'City9', '2022-10-15'),
(20, 'Example Book 10', 'https://plus.unsplash.com/premium_photo-1664392455446-1e636959468b?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Ym9va3xlbnwwfHwwfHx8MA%3D%3D', '999-111-222', 'Description for Book 10', 'book', 'Author10_First', 'Author10_Last', 'Publisher10', 'City10', '2022-11-30'),
(22, 'The Great Gatsby', 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Ym9va3xlbnwwfHwwfHx8MA%3D%3D', '978-0-7432-7356-5', 'A tale of love, wealth, and the American Dream.', 'book', 'F. Scott', 'Fitzgerald', 'Scribner', 'New York, NY', '1925-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
