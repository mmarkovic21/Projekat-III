-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 01:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasa`
--

CREATE TABLE `kasa` (
  `id` int(10) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tip` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kasa`
--

INSERT INTO `kasa` (`id`, `naziv`, `tip`) VALUES
(1, 'HCP', '255'),
(2, 'Sharp', '555');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(10) NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imeFirme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresaFirme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idTip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `lozinka`, `imeFirme`, `adresaFirme`, `grad`, `idTip`) VALUES
(1, 'Marko', 'Markovic', 'markomarkovic@gmail.com', '01121998', 'Oliveti', 'Mutapova 2a', 'Čačak', 1),
(3, 'neo', 'aaaa', 'asda', 'sdsasda', 'sdaa', 'sdasda', 'dasa', 1),
(8, 'kkk', 'kkk', 'markomarkovic@gmail.com', '01121998', 'kk', 'kk', 'kk', 2),
(9, 'kkkkkkkkk', 'mmmmmmmm', 'markomarkovic@gmail.com', '01121998', 'mmmm', 'mmmmm', 'mmmm', 2),
(10, 'Strahinja', 'Ristic', 'strahinjaristic01@gmail.com', '01121998', 'Oliveti', 'Mutapova 2a', 'Cacak', 2),
(11, 'Marija', 'Markovic', 'marijamarkovic@gmail.com', 'marija', 'ftn', 'sveti sava 2', 'Cacak', 2),
(12, 'Ivan', 'Ristic', 'ivo.ristic@gmail.com', 'ivan', 'Oliveti', 'Mutapova 2a', 'Cacak', 2),
(13, 'Dragana', 'Obrenovic', 'draganaobrenovic@gmail.com', 'dragana', 'kkkk', 'kkkkk', 'Cacak', 2),
(14, 'filip', 'lakovic', 'filip@gmail.com', 'filip', 'hladnjacca', 'vica', 'Guca', 2),
(15, 'Aleksandar', 'Zimonjic', 'aleksandarzimojnic@gmail.com', 'aleksandar', 'Oliveti', 'Mutapova', 'Cacak', 1),
(16, 'Milos', 'Kuckovic', 'mk@gmail.com', 'milos', 'Staks', 'bb', 'Cacak', 2),
(17, 'Milos', 'Kuckovic', 'mk@gmail.com', 'milos', 'Staks', 'bb', 'Cacak', 2),
(18, 'Milos', 'Kuckovic', 'mk@gmail.com', 'milos', 'Staks', 'bb', 'Cacak', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id` int(10) NOT NULL,
  `datum` date NOT NULL,
  `vreme` time(6) NOT NULL,
  `idUsluge` int(10) NOT NULL,
  `idKorisnika` int(10) NOT NULL,
  `idKase` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id`, `datum`, `vreme`, `idUsluge`, `idKorisnika`, `idKase`) VALUES
(2, '2021-06-17', '11:39:03.000000', 2, 11, 2),
(3, '2021-06-17', '17:39:03.000000', 1, 3, 1),
(4, '2021-06-18', '15:40:02.000000', 2, 1, 2),
(5, '2021-06-18', '16:37:52.000000', 2, 9, 2),
(6, '2021-06-20', '17:44:51.000000', 2, 11, 2),
(7, '2021-06-21', '17:28:09.000000', 1, 10, 1),
(8, '2021-06-23', '19:47:13.000000', 1, 11, 1),
(9, '2021-06-23', '13:54:00.000000', 1, 10, 1),
(10, '2021-06-30', '08:59:00.000000', 3, 10, 1),
(11, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(12, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(13, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(14, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(15, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(16, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(17, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(18, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(19, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(20, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(21, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(22, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(23, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(24, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(25, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(26, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(27, '2021-06-10', '04:04:00.000000', 1, 10, 1),
(28, '2021-06-10', '05:37:00.000000', 2, 10, 2),
(29, '2021-07-30', '07:03:45.000000', 3, 13, 2),
(30, '2021-07-22', '23:28:00.000000', 1, 10, 1),
(31, '2021-07-22', '21:48:00.000000', 1, 10, 1),
(32, '2021-07-23', '10:03:00.000000', 3, 10, 1),
(33, '2021-07-08', '16:30:00.000000', 7, 10, 2),
(34, '2021-07-22', '07:57:00.000000', 9, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipkorisnika`
--

CREATE TABLE `tipkorisnika` (
  `id` int(10) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tipkorisnika`
--

INSERT INTO `tipkorisnika` (`id`, `naziv`) VALUES
(1, 'Administrator'),
(2, 'Gost');

-- --------------------------------------------------------

--
-- Table structure for table `usluga`
--

CREATE TABLE `usluga` (
  `id` int(10) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cena` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usluga`
--

INSERT INTO `usluga` (`id`, `naziv`, `cena`) VALUES
(1, 'Fiskalizacija', 2000),
(2, 'Defiskalizacija', 2500),
(3, 'Zamena fiskalne memorije', 3000),
(5, 'popravka', 1000),
(6, 'Zamena tastature', 1800),
(7, 'Popravka ekrana', 500),
(8, 'Zamena lezaja', 1500),
(9, 'Tehnicki pregled', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasa`
--
ALTER TABLE `kasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preneseni` (`idTip`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkKorisnik` (`idKorisnika`),
  ADD KEY `fkKasa` (`idKase`),
  ADD KEY `fkUsluga` (`idUsluge`);

--
-- Indexes for table `tipkorisnika`
--
ALTER TABLE `tipkorisnika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usluga`
--
ALTER TABLE `usluga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasa`
--
ALTER TABLE `kasa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tipkorisnika`
--
ALTER TABLE `tipkorisnika`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usluga`
--
ALTER TABLE `usluga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `preneseni` FOREIGN KEY (`idTip`) REFERENCES `tipkorisnika` (`id`);

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `fkKasa` FOREIGN KEY (`idKase`) REFERENCES `kasa` (`id`),
  ADD CONSTRAINT `fkKorisnik` FOREIGN KEY (`idKorisnika`) REFERENCES `korisnik` (`id`),
  ADD CONSTRAINT `fkUsluga` FOREIGN KEY (`idUsluge`) REFERENCES `usluga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
