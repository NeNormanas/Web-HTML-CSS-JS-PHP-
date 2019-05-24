-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 09, 2019 at 05:04 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `prekes`
--

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `id` int(11) NOT NULL,
  `Kategorija` varchar(255) NOT NULL,
  `Pavadinimas` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `Kaina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `Kategorija`, `Pavadinimas`, `image`, `image1`, `image2`, `image3`, `Kaina`) VALUES
(1, 'Maistas', 'Duona Bobutės', 'https://picsum.photos/205/200', 'https://picsum.photos/205/201', 'https://picsum.photos/205/202', 'https://picsum.photos/205/203', 1),
(2, 'Maistas', 'Pienas Karve', 'https://picsum.photos/206/200', 'https://picsum.photos/206/201', 'https://picsum.photos/206/202', 'https://picsum.photos/206/203', 5),
(3, 'Buit prekes', 'Sluota', 'https://picsum.photos/207/200', 'https://picsum.photos/207/201', 'https://picsum.photos/207/202', 'https://picsum.photos/207/203', 10),
(4, 'Zaislai', 'Supyne Arkluukas', 'https://picsum.photos/208/200', 'https://picsum.photos/208/201', 'https://picsum.photos/208/202', 'https://picsum.photos/208/203', 25),
(5, 'Kosmetika', 'Sampunas Ramunele', 'https://picsum.photos/209/200', '', '', '', 10),
(6, 'Maistas', 'Obuoliai', 'https://picsum.photos/205/201', '', '', '', 3),
(7, 'Maistas', 'Ekologiški česnakai, 1 vnt.', 'https://picsum.photos/205/202', 'https://picsum.photos/205/203', 'https://picsum.photos/205/204', 'https://picsum.photos/205/205', 2),
(8, 'Kosmetika', 'Veido prausiklis MARGARITA', 'https://picsum.photos/205/203', '', '', '', 4),
(9, 'Buit prekes', 'Skalbiamieji milteliai ', 'https://picsum.photos/205/200', 'https://picsum.photos/205/201', 'https://picsum.photos/205/202', 'https://picsum.photos/205/203', 52),
(10, 'Buit prekes', 'Puodukas', 'https://picsum.photos/205/205', '', '', '', 25),
(11, 'Kosmetika', 'Veido kremas', 'https://picsum.photos/202/208', '', '', '', 8),
(12, 'Kosmetika', 'RAnku kremas', 'https://picsum.photos/202/206', '', '', '', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
