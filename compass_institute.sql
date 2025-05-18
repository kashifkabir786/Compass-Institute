-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 10:38 AM
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
-- Database: `compass_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about`) VALUES
('Since our inception, we have been dedicated to providing cutting-edge education, hands-on training, and personalized support to empower our  students for success in today\'s dynamic world.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`, `fname`, `lname`) VALUES
('admin', '$2y$10$bgVlJw6OrDeW8jpIu0p00.o6HinuIZ3DjSfJP3v1v08T2zfBs56QO', 'compass', 'institute');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `banner_id` int(7) NOT NULL,
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`banner_id`, `banner_image`) VALUES
(2, '109-banner-redimensionat.jpg'),
(3, '960-Image_-_How_to_design_a_website_.jpeg.jpg'),
(5, '360-small-business-website.png');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(7) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` text NOT NULL,
  `fees` int(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `popular` varchar(10) NOT NULL DEFAULT 'No',
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_description`, `fees`, `duration`, `popular`, `image`, `date`) VALUES
(1, 'IIT', 'gjrgrhrgbrjjytjtujr', 2000, '3 Months', 'Yes', '371-241-IIT-Engineering-Courses.png', '2024-03-04 14:12:04'),
(2, 'Bacic Knowledge of Hardware', 'fbdghfjkykfssdvv', 1000, '6 Months', 'Yes', '578-istockphoto-483147081-612x612.jpg', '2024-03-04 14:20:04'),
(3, 'web Development', 'rshtesjhtcjmg', 20000, '1 Year', 'Yes', '640-depositphotos_243120806-stock-photo-programmer-working-software-development-coding.jpg', '2024-03-04 16:58:52'),
(4, 'Graphic Design', 'gfgxycjv', 2000, '6 Months', '', '960-601-graphic_small_banner-3.jpg', '2024-03-04 17:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(7) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image`) VALUES
(1, '521-235-603-istockphoto-1369754239-612x612.jpg'),
(2, '524-istockphoto-1272815911-612x612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(7) NOT NULL,
  `notice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice`) VALUES
(1, 'Education is the most powerful weapon which can be used to change the world of the people.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(7) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `trade` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `father_name`, `fullname`, `roll`, `trade`, `session`, `grade`, `image_1`, `image_2`, `date`) VALUES
(1, 'Md Kabir', 'kashif', '1', 'web Development', '2024-27', 'A', '689-348-istockphoto-1351445530-612x612.jpg', '651-874-vecteezyTemplateCertificatesGeneralay0122_generated.jpg', '2024-03-04 14:11:26'),
(2, 'bk hblk ', 'Kashif Ahmad ', '11', 'Bacic Knowledge of Hardware', '2025-28', 'B', '846-young-indian-student-holding-diary-file-in-hand-free-photo.jpeg', '', '2024-03-05 15:34:40'),
(3, 'bk hblk ', 'Mohammad Kashif Ahmad', '5', 'IIT', '2026-29', 'C', '832-418-903-348-istockphoto-1351445530-612x612.jpg', '', '2024-03-05 17:31:57'),
(4, 'bk hblk ', 'Mohammad Kashif Ahmad', '5', 'IIT', '2026-29', 'C', '292-418-903-348-istockphoto-1351445530-612x612.jpg', '', '2024-03-05 17:33:49'),
(5, 'Alam', 'zaki', '2', 'web Development', '2026-29', 'A', '786-young-indian-student-holding-diary-file-in-hand-free-photo.jpeg', '', '2024-03-06 14:10:02'),
(6, 'Alam', 'zaki', '2', 'web Development', '2026-29', 'A', '373-young-indian-student-holding-diary-file-in-hand-free-photo.jpeg', '', '2024-03-06 14:12:13'),
(7, 'Alam', 'kashif', '6', 'Graphic Design', '2026-29', 'B', '309-786-young-indian-student-holding-diary-file-in-hand-free-photo.jpeg', '', '2024-03-06 14:20:49'),
(8, 'Alam', 'kashif', '6', 'Graphic Design', '2026-29', 'B', '608-786-young-indian-student-holding-diary-file-in-hand-free-photo.jpeg', '', '2024-03-06 14:24:46'),
(9, 'Alam', 'kashif', '6', 'Graphic Design', '2026-29', 'B', '554-786-young-indian-student-holding-diary-file-in-hand-free-photo.jpeg', '', '2024-03-06 14:27:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `banner_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
