-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2025 at 01:10 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 8.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnu-admin_main_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_jlurd_tileview_maker_category`
--

CREATE TABLE `wp_jlurd_tileview_maker_category` (
  `tileview_category_id` int(11) NOT NULL,
  `category_name` varchar(220) DEFAULT NULL,
  `cat_description` varchar(1000) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `modified_by_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_jlurd_tileview_maker_category`
--

INSERT INTO `wp_jlurd_tileview_maker_category` (`tileview_category_id`, `category_name`, `cat_description`, `created_date`, `modified_date`, `created_by_user_id`, `modified_by_user_id`) VALUES
(4, 'Administrative Officials and Unit Heads', 'for page https://cnu.edu.ph/administrative-officials-2/', '2025-04-26 13:07:20', '0000-00-00 00:00:00', 22, 0),
(5, 'Citizen`s Charter', 'For the page https://cnu.edu.ph/citizens-charter-2/', '2025-04-29 01:25:39', '2025-04-29 08:36:49', 22, 22),
(6, 'CCAIS FACULTY DESIGNATION', 'for page https://cnu.edu.ph/college-of-computing-artificial-intelligence-and-sciences/', '2025-04-29 03:44:40', '0000-00-00 00:00:00', 22, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_jlurd_tileview_maker_category`
--
ALTER TABLE `wp_jlurd_tileview_maker_category`
  ADD PRIMARY KEY (`tileview_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_jlurd_tileview_maker_category`
--
ALTER TABLE `wp_jlurd_tileview_maker_category`
  MODIFY `tileview_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
