-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 02:33 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lion2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(10) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_message` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `guest_name`, `guest_email`, `guest_message`, `status`) VALUES
(8, 'Syed uddin Chowdhury', 'syed@gmail.com', 'This is a Test', 2),
(9, 'Syed', 's@gmail.com', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `code` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `roll`, `code`, `name`, `email`) VALUES
(10, 1234, 3333, 'Syed Uddin Chowdhury', 'syed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `peraddress` text NOT NULL,
  `preaddress` text NOT NULL,
  `contactno` int(100) NOT NULL,
  `subject` text NOT NULL,
  `education` varchar(100) NOT NULL,
  `session` int(100) NOT NULL,
  `yop` int(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `bank` int(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `regularity` varchar(100) NOT NULL,
  `examresult` varchar(100) NOT NULL,
  `profile_photo` varchar(100) NOT NULL DEFAULT 'default_profile_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `name`, `email`, `password`, `father`, `mother`, `dob`, `gender`, `peraddress`, `preaddress`, `contactno`, `subject`, `education`, `session`, `yop`, `result`, `bank`, `roll`, `code`, `regularity`, `examresult`, `profile_photo`) VALUES
(21, 'Syed Uddin Chowdhury', 'syed@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ayen Uddin chowdhury', 'Salima Akter', '0000-00-00', 'Male', 'Mirpur ,Dhaka', 'Mirpur,Dhaka', 2147483647, 'Computer', 'B.Sc', 2018, 1993, 'GPA 5', 123456, 1234, '3333', '', '', '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` varchar(100) NOT NULL DEFAULT 'default_profile_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `name`, `email`, `password`, `profile_photo`) VALUES
(19, 'Chowdhury Syed Uddin', 'syed1@gmail.com', '202cb962ac59075b964b07152d234b70', '19.PNG'),
(22, 'Test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', '22.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
