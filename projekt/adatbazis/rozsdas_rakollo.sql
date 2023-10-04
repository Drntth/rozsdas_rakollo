-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 10:07 PM
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
(1, 'username', 'proba', '2023-10-04', '1'),
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
(1, 'Mufaj1'),
(2, 'mufaj 2'),
(3, 'mufaj 3');

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
  `mufaj` varchar(45) NOT NULL,
  `engedelyezve` varchar(4) NOT NULL DEFAULT 'Nem',
  `felhasznalok_felhasznalok_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posztok`
--

INSERT INTO `posztok` (`posztok_id`, `cim`, `bejegyzes`, `mufaj`, `engedelyezve`, `felhasznalok_felhasznalok_id`) VALUES
(1, 'title', 'text', 'Mufaj1', 'Igen', 1),
(2, 'vicces vicc2', 'lorem ipsuuuum', 'vicces', 'Nem', 2),
(3, 'nem tul vicces vicc', 'According to all known laws\r\nof aviation,\r\n\r\n  \r\nthere is no way a bee\r\nshould be able to fly.\r\n\r\n  \r\nIts wings are too small to get\r\nits fat little body off the ground.\r\n\r\n  \r\nThe bee, of course, flies anyway', 'Allatos', 'Nem', 2);

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
  MODIFY `mufajok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posztok`
--
ALTER TABLE `posztok`
  MODIFY `posztok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
