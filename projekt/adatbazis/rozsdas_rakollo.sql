-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 02:07 AM
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
(1, 'állatos'),
(2, 'Móricka'),
(3, 'Informatikus'),
(4, 'Részeg');

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
(1, 'Móricka Biológia órán', 'Biológia órán tanárnő kérdi Mórickát:\r\n- Móricka, mije van a libának?\r\n- Szeme!\r\n- Móricka, és még mije van a libának?\r\n- Másik szeme!\r\n- Móricka! Mivel takaróztok otthon, ha hideg van?\r\n- Párnával!\r\n- És Móricka, mi van a párnában?\r\n- Toll!\r\n- Tehát akkor Móricka, mije van a libának?\r\n- Szeme!', 'Móricka', 'Igen', 1),
(2, 'Tehén a buszmegállóban', '- Áll egy tehén a buszmegállóban. Ha megjön a busz, hova fog felszállni?\r\n- ???\r\n- Legelőre.', 'Állatos', 'Nem', 2),
(3, 'Orosz hálózat', '- Hogy hívják az orosz számítógép hálózatot?\r\n- Nyetwork', 'Informatikus', 'Igen', 2),
(5, 'Egy üveg pálinka', 'Két alkoholista elmegy kempingezni. Mondja az egyik:\r\n- Én hoztam magammal egy üveg pálinkát, hogy ha véletlenül megszúrna minket egy rozsdás szög, legyen mivel fertőtleníteni. Te mit hoztál?\r\n- Két rozsdás szöget.', 'Részeg', 'Nem', 4),
(6, 'Epe', 'Két házasember beszélget:\r\n- Hallom az anyósodat megműtötték. Hogy sikerült a műtét?\r\n- Az epekövet kivették, de az epéje sajnos a régi.', 'Anyós', 'Nem', 1);

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
  MODIFY `posztok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
