-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 06:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omarali_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `timestamp` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `timestamp`, `first_name`, `last_name`, `phone`, `email`, `message`) VALUES
(1, 'current_timestamp()', 'Waqar', 'Uddin', '01234546465454', 'waqar@dshfkj.coi', 'test message'),
(2, '2023-03-21 21:54:16', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' Checking '),
(3, '2023-03-21 21:55:09', ' Omar ', ' Ali  ', ' +1 234 567 890', ' oafleming@gmail.com  ', ' This is a test message. '),
(4, '2023-03-21 21:57:24', ' Omar ', ' Ali  ', ' +1 234 567 890', ' oafleming@gmail.com  ', ' This is a test message. '),
(5, '2023-03-21 22:02:18', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' test message '),
(6, '2023-03-21 22:02:41', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' test message '),
(7, '2023-03-21 22:03:01', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' test  '),
(8, '2023-03-21 22:03:15', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' test  '),
(9, '2023-03-21 22:03:26', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' test  '),
(10, '2023-03-21 22:04:15', '  ', '   ', '   ', '   ', ' test '),
(11, '2023-03-21 22:05:02', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' tet '),
(12, '2023-03-21 22:05:22', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' tet '),
(13, '2023-03-21 22:05:28', ' Waqar ', ' Qarni  ', ' 03482454537  ', ' waqar13ify@gmail.com  ', ' tet ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
