-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 08:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantsforcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `plant` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `userid`, `name`, `surname`, `gender`, `birthday`, `plant`, `address`, `number`, `email`, `message`) VALUES
(42, 40, 'Jonas', 'Jonaitis', 'male', '2022-11-30', 'Šluotinis sausakrūmis', 'Kaunas', '864449854', 'jonas@example.com', 'Maciau vel'),
(43, 40, 'Jonas', 'Jonaitis', 'male', '2022-11-30', 'Sosnovskio barštis', 'Vilnius', '864449854', 'jonas@example.com', 'Didelis'),
(44, 40, 'Jonas', 'Jonaitis', 'male', '2022-12-05', 'Didžioji rykštenė', 'Kaunas', '864449854', 'jonas@example.com', 'Maciau!'),
(51, 59, 'tadas', 'x', 'male', '2022-12-06', 'Smulkiažiedė sprigė', '1', '88888', 'renoo@gmail.com', 'maciau barsti');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` bigint(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `latin` varchar(150) NOT NULL,
  `living_time` tinyint(1) NOT NULL,
  `age` int(10) NOT NULL,
  `size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `name`, `latin`, `living_time`, `age`, `size`) VALUES
(24, 'Aluminum plant', 'Pilea cadierei', 1, 1, 3),
(25, 'Brake fern', 'Pteris cretica', 0, 1, 4),
(26, 'Clubmoss', 'Selaginella kraussiana', 1, 2, 6),
(27, 'Copper plant', 'Acalypha wilkesiana', 1, 2, 12),
(28, 'Dragon tree', 'Dracaena marginata', 1, 10, 12),
(29, 'Ming aralia', 'Polyscias fruticosa', 0, 1, 4),
(30, 'Persian shield', 'Strobilanthes dyerianus', 1, 2, 5),
(31, 'Golden pothos', 'Epipremnum aureum', 0, 1, 3),
(32, 'Sensitive plant', 'Mimosa pudica', 1, 1, 2),
(33, 'Stromanthe', 'Stromanthe sanguinea', 1, 6, 12),
(34, 'Ti plant', 'Cordyline terminalis', 0, 1, 6),
(35, 'Swedish ivy', 'Plectranthus', 1, 4, 5),
(36, 'Weeping fig', 'Ficus benjamina', 1, 8, 10),
(69, 'Philodendron', 'Philodendron', 0, 4, 2),
(70, 'Prickly poppy', 'Argemone', 1, 2, 4),
(71, 'Quandong', 'Santalum acuminatum', 0, 3, 4),
(72, 'Canna', 'Canna', 0, 2, 6),
(73, 'Sosnowskyis hogweed', 'Heracleum sosnowskyi', 1, 1, 2),
(74, 'Common waterweed', 'Elodea canadensis', 1, 2, 2),
(75, 'Black cherry', 'Prunus serotina', 1, 2, 1),
(76, 'kava', 'kava', 0, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(39, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin'),
(40, 'user', 'b14361404c078ffd549c03db443c3fede2f3e534d73f78f77301ed97d4a436a9fd9db05ee8b325c0ad36438b43fec8510c204fc1c1edb21d0941c00e9e2c1ce2', 'user'),
(41, 'akvile', 'a21654efaf6dc6fceac142437e0393f44b8a471da1aa4a19b5f5bc1d0aa6f47f3f44858ae8c4eeb54f04a8d8073229d7f93fe837b6b0ae5f3fbb1a845aec914f', 'akvile'),
(42, 'Renata', '0e0f677ac49796fd62b5ab932ae635ec9db7934f840e3c86d513d53851d0db56608aa2f4ed1981e1bc14369f1056f4cde77329c93bf5a950a0b738e8c6ceb587', 'Renata'),
(59, 'tadas', '182ad90aa7ffd60e427839fd999beb26717549f463c9e74c23787a132716030bf56ea01abc35132ea69725b50205ec2c80650dbcb43525264ef50d8e5d0538c1', 'tadas'),
(60, 'u', 'cded74740d4bbfd4eb126d6de454b59e2d631f36c0ae0d2325b5e2be4da2befe792106b98422ad24c092e8f184b2ff4be0bbbcdcd278db6c2427533b2e9264d1', 't');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `latin` (`latin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
