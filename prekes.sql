-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 07:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
(1, 'Maistas', 'Duona Bobutės', 'http://alkas.lt/wp-content/uploads/2015/02/duona-anv-altenabiesbosch.nl-nuotr..jpg', 'https://picsum.photos/205/202', 'https://picsum.photos/205/202', 'https://picsum.photos/205/203', 1),
(2, 'Maistas', 'Pienas Karve', 'http://pienozvaigzdes.lt/194-large_default/dvaro-pienas-25-riebumo-1l.jpg', 'https://picsum.photos/206/201', 'https://picsum.photos/206/202', 'https://picsum.photos/206/203', 5),
(3, 'Buit prekes', 'Sluota', 'https://imuperku.lt/561012-large_default/grindu-plovimo-sluota-su-purskikliu-q8h.jpg', 'https://picsum.photos/207/201', 'https://picsum.photos/207/202', 'https://picsum.photos/207/203', 10),
(4, 'Zaislai', 'Supyne Arkluukas', 'https://irangesa.lt/395-large_default/supyne-arkliukas.jpg', 'https://picsum.photos/208/201', 'https://picsum.photos/208/202', 'https://picsum.photos/208/203', 25),
(5, 'Kosmetika', 'Sampunas Ramunele', 'https://img.klipshop.lt/5615-prod_large/naturalmente-geliu-sampunas-ramunele.jpg', '', '', '', 10),
(6, 'Maistas', 'Obuoliai', 'https://www.barbora.lt/api/Images/GetInventoryImage?id=cb5a4433-96e2-4d6e-b822-d6a7af34ea2a', '', '', '', 3),
(7, 'Maistas', 'Ekologiški česnakai, 1 vnt.', 'https://www.gaspadorius.lt/wp-content/uploads/2011/02/cesnakai-skilteles.jpg', 'https://picsum.photos/205/203', 'https://picsum.photos/205/204', 'https://picsum.photos/205/205', 2),
(8, 'Kosmetika', 'Veido prausiklis MARGARITA', 'https://www.eurovaistine.lt/media/cache/ev_large/3c/71/ace74aca964ae95e64a6388a26d4.jpeg', '', '', '', 4),
(9, 'Buit prekes', 'Skalbiamieji milteliai ', 'https://lt3.pigugroup.eu/colours/202/270/80/20227080/428bb9df61ee8858dded88c43156bcc7_xbig.jpg', 'https://picsum.photos/205/201', 'https://picsum.photos/205/202', 'https://picsum.photos/205/203', 52),
(10, 'Buit prekes', 'Puodukas', 'https://www.varle.lt/static/uploads/products/173/puo/puodukas.jpg', '', '', '', 25),
(11, 'Kosmetika', 'Veido kremas', 'https://img.klipshop.lt/9259-prod_large/oda-intensyvaus-veikimo-regeneruojamasis-veido-kremas-sausai-jautriai-odai.jpg', '', '', '', 8),
(12, 'Kosmetika', 'RAnku kremas', 'https://www.eurokos.lt/out/pictures/generated/product/1/665_665_80/d711bcf3a8f2baa982821951b815330e_140_1.jpg', '', '', '', 12);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
