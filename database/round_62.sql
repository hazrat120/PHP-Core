-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 05:51 AM
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
-- Database: `students_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `round_62`
--

CREATE TABLE `round_62` (
  `id` int(255) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `gf name` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `round62`
--

INSERT INTO `round_62` (`id`, `name`, `email`, `phone`, `gf name`) VALUES
(1, 'munna kaku', 'munna@gmail.com', '0178555555', 'munni'),
(2, 'rajib', 'rajib@gmail.com', '018796542', 'rimjim'),
(3, 'ismail', 'ismail.kaku@gmail.com', '0187935145', 'Sumaiya'),
(4, 'shawon vai', 'shawon@gmail.com', '01896475632', 'motasin'),
(5, 'rafi', 'rafi@gmail.com', '0198756324', 'sheikh hasina'),
(6, 'John Doe', 'john.doe@example.com', '123-456-7890', 'Sarah Smith'),
(7, 'Ahmed Hossain', 'ahmed.hossain@example.com', '0171-2345678', '	Fatima Rahman'),
(8, 'Shakil Ahmed', 'shakil.ahmed@example.com', '0182-3456789', 'Sumaiya Begum'),
(9, 'Rashed Khan', 'shakil.ahmed@example.com', '0193-4567890', 'Sultana Rahman'),
(10, 'Mahfuzur Rahman', 'mahfuzur.rahman@example.com', '0164-5678901', 'Sharmila Begum'),
(11, 'Imran Hossain', 'imran.hossain@example.com', '0155-6789012', 'Nargis Akter'),
(12, 'Tamim Iqbal', 'tamim.iqbal@example.com', '0191-2345678', 'Sabina Akter'),
(13, 'Hasan Ali', 'hasan.ali@example.com', '0172-3456789', 'Laila Begum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `round_62`
--
ALTER TABLE `round_62`
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `gf name` (`gf name`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
