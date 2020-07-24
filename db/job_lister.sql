-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 11:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_lister`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Business'),
(2, 'Technology'),
(3, 'Retail'),
(4, 'Construction');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cate_id`, `company`, `title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1, 1, 'JP Mortage', 'Senior Investor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget egestas nunc. Sed gravida rhoncus purus ac porttitor. Praesent erat nisi, faucibus a lacinia ac, maximus ut augue.', '90K', 'Seattle', 'Ahmed Salah', 'ahmed@gmail.com', '2020-05-20 09:28:56'),
(2, 2, 'Tech Guy', 'Jr Developer', 'Nunc vehicula feugiat finibus. Morbi vitae dignissim ligula. Nulla ac libero nec augue porttitor convallis. Nullam fringilla sollicitudin augue. Donec ac tristique libero', '50K', 'Boston', 'Wael Mohamed', 'wael@gmail.com', '2020-05-20 09:28:56'),
(3, 2, '123communications', 'Database Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing.', '70K', 'New York', 'sarp lil', 'sarp@gmail.com', '2020-05-21 12:01:04'),
(4, 2, 'devTech', 'Full Stack Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscingLorem', '60K', 'Frankfort', 'Ahmed Salah', 'ahmed@gmail.com', '2020-05-21 12:06:08'),
(5, 0, '', '', '', '', '', '', '', '2020-05-21 12:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
