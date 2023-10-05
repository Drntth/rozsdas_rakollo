-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 06:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rozsdas_rakollo`
--

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `felhasznalok_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `szuletesi_datum` date NOT NULL,
  `jogosultsag` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `felhasznalok`
--

INSERT INTO `felhasznalok` (`felhasznalok_id`, `username`, `password`, `szuletesi_datum`, `jogosultsag`) VALUES
(1, 'admin', 'admin', '2023-10-04', '1'),
(2, 'felhasznalo', 'felhasznalo', '2023-10-19', '2'),
(4, 'szerkeszto', 'szerkeszto', '2019-10-09', '4');

-- --------------------------------------------------------

--
-- Table structure for table `jogosultsagok`
--

CREATE TABLE `jogosultsagok` (
  `jogosultsag_id` int(11) NOT NULL,
  `jogosultsag_nev` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jogosultsagok`
--

INSERT INTO `jogosultsagok` (`jogosultsag_id`, `jogosultsag_nev`) VALUES
(1, 'admin'),
(2, 'felhasznalo'),
(4, 'szerkeszto');

-- --------------------------------------------------------

--
-- Table structure for table `mufajok`
--

CREATE TABLE `mufajok` (
  `mufajok_id` int(11) NOT NULL,
  `mufaj_neve` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mufajok`
--

INSERT INTO `mufajok` (`mufajok_id`, `mufaj_neve`) VALUES
(1, 'Spongyabob'),
(2, 'Patrik'),
(3, 'Tunyacsáp'),
(4, 'Csigusz');

-- --------------------------------------------------------

--
-- Table structure for table `pontozas`
--

CREATE TABLE `pontozas` (
  `felhasznalok_felhasznalok_id` int(11) NOT NULL,
  `posztok_posztok_id` int(11) NOT NULL,
  `kapott_pontszam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pontozas`
--

INSERT INTO `pontozas` (`felhasznalok_felhasznalok_id`, `posztok_posztok_id`, `kapott_pontszam`) VALUES
(2, 2, 8),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posztok`
--

CREATE TABLE `posztok` (
  `posztok_id` int(11) NOT NULL,
  `cim` varchar(45) NOT NULL,
  `bejegyzes` varchar(300) NOT NULL,
  `mufaj` int(11) NOT NULL,
  `engedelyezve` varchar(4) NOT NULL DEFAULT 'Nem',
  `felhasznalok_felhasznalok_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posztok`
--

INSERT INTO `posztok` (`posztok_id`, `cim`, `bejegyzes`, `mufaj`, `engedelyezve`, `felhasznalok_felhasznalok_id`) VALUES
(1, 'Spongyabob Angliában', 'Hogyan került Spongyabob Londonba?\r\nOsztriga kártyával!', 1, 'Igen', 1),
(2, 'Spongyabob haja', 'Milyen haja van Spongyabobnak és barátainak?\r\nHullámos!', 1, 'Nem', 2),
(3, 'Patrik a cirkuszban', 'Miért csatlakozott Patrick a cirkuszhoz emberágyúként?\r\nHullócsillag akart lenni.', 2, 'Igen', 2),
(5, 'Rák úr focizik', 'Miért nem focizik Mr. Krabs?\r\nFél a hálóktól.\r\n', 4, 'Nem', 4),
(6, 'Spongyabob elpirul', 'Miért pirult el Spongyabob?\r\nLátta a Bikini alsót', 1, 'Nem', 1),
(7, 'a', 'a', 1, 'Igen', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`felhasznalok_id`);

--
-- Indexes for table `jogosultsagok`
--
ALTER TABLE `jogosultsagok`
  ADD PRIMARY KEY (`jogosultsag_id`);

--
-- Indexes for table `mufajok`
--
ALTER TABLE `mufajok`
  ADD PRIMARY KEY (`mufajok_id`);

--
-- Indexes for table `pontozas`
--
ALTER TABLE `pontozas`
  ADD PRIMARY KEY (`felhasznalok_felhasznalok_id`,`posztok_posztok_id`);

--
-- Indexes for table `posztok`
--
ALTER TABLE `posztok`
  ADD PRIMARY KEY (`posztok_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `felhasznalok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jogosultsagok`
--
ALTER TABLE `jogosultsagok`
  MODIFY `jogosultsag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mufajok`
--
ALTER TABLE `mufajok`
  MODIFY `mufajok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posztok`
--
ALTER TABLE `posztok`
  MODIFY `posztok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
