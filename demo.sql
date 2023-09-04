-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 04:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(8, 'AbhijitPatere', '$2y$10$RrpXdGKQTeFM28Z8XBBK/ezsG3RWY8Bu1E3AIwjxQFROxbpHGSyOy', '2022-04-08 07:20:49'),
(9, 'Rushi', '$2y$10$yVRkumMx9oXe7LoQz5sIlOzKpzQPi2pOGUq4NuIJgDvecAmDoRfvC', '2022-04-08 21:10:49'),
(10, 'AjayValapkar', 'Ajay#1234', '2022-04-09 07:53:22'),
(11, 'SarveshBaing', '$2y$10$27DZOLGHYQh.XlJ3hg9HGO25xbvHe7zpf8xnDIF1vL9or4QIxOaju', '2022-04-09 11:37:56'),
(12, 'VedantKhot', '$2y$10$PpY3QgZF.AZ7RpJZclxs6e3adslqlT5kbyjDXr8a1pLcPzMXBgxEy', '2022-04-09 17:20:06'),
(13, 'SHRAVANKARKARE', '$2y$10$7poz.mroAXGDDVy0bT/nvu4wz7kPsgRolbjh0bb6r8JsTyLf9RkyO', '2022-04-09 22:39:28'),
(14, 'babli', '$2y$10$whqkr6FddVo7NuF.AApgZulRTMEHzc1E4jrs5getdeZqkIGyeJUH6', '2022-04-10 12:02:13'),
(15, 'bhaveshkadam', '$2y$10$KFCXIxyZ2Lf.hZZ5RWVEZOc7JIttY2O5KCnqXozEvxJ4esgyyaUOi', '2022-04-11 16:51:16'),
(16, 'khotvedant', '$2y$10$8EoSMGHp9on4btnF1YM3YOWmdMiwKdFxvrl7TJXkKRryh1xnq6jKy', '2022-04-12 19:13:29'),
(17, 'sawratkarsairaj', '$2y$10$rx8JIwC9RMySyMuFFces..nXl3HNHm7AKJ9LOOpzYH7BI5sWqLYeS', '2022-04-13 20:34:13'),
(18, 'ValapkarAjay', '$2y$10$Fy3gEUroTLG1Ixzr4rItmuh33jVHYAiGuRf3NKa8orfsszTf3t5Oq', '2022-04-17 12:38:16'),
(19, 'rupeshgawade', '$2y$10$f2FpxCe6MaCZrJkblMz0Q.47.TIbv2NQ2C9bFO9h.RpeKemdPfZ0C', '2022-05-01 12:21:12'),
(20, 'Vedant', '$2y$10$ZCu.i5ac6gmm7dbJJNSQb.YIJiqLx1IHr7GQMe98YjvSDRnN25SQG', '2022-05-02 13:09:05'),
(21, 'Valapkar12', '$2y$10$yGk9OFR39fdUoOSwtjgGQOhGDZggzAw/0O2pldGdacTYICVmQ4tiy', '2022-07-15 18:39:34'),
(22, 'Adittya', '$2y$10$G0vij7c5cgqIoPqs85rk0OOlAJuhfXitVb3hXm4FJoy1lOoI6ELwC', '2022-08-20 18:55:18'),
(23, 'Aniket', '$2y$10$rTK0nhcR9yK1SLDOm/iXeOjZuND7r2hDOrkl7Ps7Fp8PcgpLIX2aK', '2022-09-06 19:39:56'),
(24, 'AniketValapkar', '$2y$10$vBYkkivPRQNZi7.7PwVOk.JHsu.KMPQEINGcLd4PiKXVXGCfTzI4m', '2022-09-06 19:41:11');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
