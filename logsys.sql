-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 05:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_uid` int(2) NOT NULL,
  `user_first` varchar(256) DEFAULT NULL,
  `user_last` varchar(256) DEFAULT NULL,
  `user_email` varchar(256) DEFAULT NULL,
  `user_pwd` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_uid`, `user_first`, `user_last`, `user_email`, `user_pwd`) VALUES
(1, 'Rahul', 'Payeli', 'paili.rahul1@gmail.com', '$2y$10$1bRyEPYnGdP.mM6xyHhH5.3VMoMY3bXG3z3EBaDIS3wuRenOMcbDC'),
(2, 'Rahul', 'Payeli', 'kjnhbvckjhgf@ghgf.com', '$2y$10$7qihYT.m0DmkRRQC/sKyy.a.0ngQ.NXe3besQHLCf2Eg1BupbHnqu'),
(3, 'qwerty', 'asdfgh', 'asdf@gmail.com', '$2y$10$lSo.8yQ2heobqrrmv5wnA.oX1c0NG4lRbtF29vkq8Jv8TMYvuH5LO'),
(4, 'hello', 'rahul', 'asdgf@gmail.com', '$2y$10$BaAtQQIsXRZn0GRGmLnPGOlJ/mB5jgIPfSh2b/lFkj5Uz5ir09.vm'),
(5, 'sfaef', 'afaefe', 'asdgf@gmail.com', '$2y$10$U5gpm7ivDC97yLCQCikPL.1AXfl20iToZn5eQ.pewjLS9mBFW1lki'),
(6, 'Rahul', 'Payeli', 'snnsaicharan@gmail.com', '$2y$10$FuDlevlO10YbS/5sH6kVmeoOR4eqKDRD8D6NN5a7jVelzuFjZrFK2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_uid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
