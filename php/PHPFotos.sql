-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2015 at 05:42 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phamilyfotos`
--
CREATE DATABASE IF NOT EXISTS `PHPFotos`;

USE `PHPFotos`;
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `FotoName` varchar(50) NOT NULL,
  `Caption` varchar(100) DEFAULT NULL,
  `path` varchar(500) NOT NULL,
  `userId` int(11) NOT NULL,
  `albumId` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `FotoName`, `Caption`, `path`, `userId`, `albumId`) VALUES
(1, 'Chrys.jpg', NULL, 'images/', 1, 1),
(2, 'Desert.jpg', NULL, 'images/', 1, 1),
(3, 'HDL.jpg', NULL, 'images/', 1, 1),
(4, 'Hyd.jpg', NULL, 'images/', 1, 1);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--

