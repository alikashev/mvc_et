-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 11 apr 2022 om 13:58
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excellent-taste`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

DROP TABLE IF EXISTS `bestellingen`;
CREATE TABLE IF NOT EXISTS `bestellingen` (
  `bestellingID` int(8) NOT NULL AUTO_INCREMENT,
  `tijd` time NOT NULL,
  `datum` date NOT NULL,
  `tafel` int(8) NOT NULL,
  `menuitemcode` int(8) NOT NULL,
  `aantal` int(11) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  PRIMARY KEY (`bestellingID`) USING BTREE,
  KEY `menuitemcode` (`menuitemcode`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bestellingen`
--

INSERT INTO `bestellingen` (`bestellingID`, `tijd`, `datum`, `tafel`, `menuitemcode`, `aantal`, `prijs`) VALUES
(19, '18:59:00', '2022-04-28', 2, 1, 5, '1.99'),
(20, '18:59:00', '2022-04-28', 2, 2, 2, '1.99'),
(21, '18:59:00', '2022-04-28', 2, 1, 1, '1.99'),
(22, '18:59:00', '2022-04-28', 2, 2, 1, '1.99'),
(23, '18:59:00', '2022-04-28', 2, 3, 1, '0.99'),
(24, '18:59:00', '2022-04-28', 2, 4, 1, '2.99'),
(25, '18:59:00', '2022-04-28', 2, 5, 1, '2.99'),
(26, '19:40:00', '2022-04-14', 4, 2, 1, '1.99'),
(27, '18:59:00', '2022-04-28', 2, 1, 5, '1.99'),
(28, '18:59:00', '2022-04-28', 2, 2, 5, '1.99'),
(29, '18:59:00', '2022-04-28', 2, 1, 1, '1.99'),
(30, '18:59:00', '2022-04-28', 2, 2, 1, '1.99'),
(31, '18:59:00', '2022-04-28', 2, 3, 1, '0.99'),
(32, '18:59:00', '2022-04-28', 2, 1, 1, '1.99'),
(33, '16:11:00', '2022-04-13', 3, 2, 3, '1.99'),
(34, '20:14:00', '2022-04-27', 8, 3, 1, '0.99'),
(35, '18:59:00', '2022-04-28', 2, 1, 1, '1.99'),
(36, '18:59:00', '2022-04-28', 2, 2, 2, '1.99');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bon`
--

DROP TABLE IF EXISTS `bon`;
CREATE TABLE IF NOT EXISTS `bon` (
  `bonId` int(8) NOT NULL AUTO_INCREMENT,
  `tijd` time NOT NULL,
  `tafel` int(8) NOT NULL,
  `datum` date NOT NULL,
  `totaalprijs` decimal(6,2) NOT NULL,
  PRIMARY KEY (`bonId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerecht`
--

DROP TABLE IF EXISTS `gerecht`;
CREATE TABLE IF NOT EXISTS `gerecht` (
  `gerechtcode` int(8) NOT NULL AUTO_INCREMENT,
  `gerecht` varchar(80) NOT NULL,
  PRIMARY KEY (`gerechtcode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gerecht`
--

INSERT INTO `gerecht` (`gerechtcode`, `gerecht`) VALUES
(1, 'Hoofdgerecht'),
(2, 'Voorgerecht'),
(3, 'Nagerecht');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

DROP TABLE IF EXISTS `klanten`;
CREATE TABLE IF NOT EXISTS `klanten` (
  `klantId` int(8) NOT NULL AUTO_INCREMENT,
  `klantnaam` varchar(40) NOT NULL,
  `telefoonnummer` int(11) NOT NULL,
  PRIMARY KEY (`klantId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`klantId`, `klantnaam`, `telefoonnummer`) VALUES
(1, 'Johnny Magielse', 618201732),
(3, 'Johnny Mihai', 613245454),
(4, 'Ayoub Loumiki', 61234567),
(5, 'Tim Raiser', 618201732);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menuitems`
--

DROP TABLE IF EXISTS `menuitems`;
CREATE TABLE IF NOT EXISTS `menuitems` (
  `menuitemcode` int(8) NOT NULL AUTO_INCREMENT,
  `subgerechtcode` int(8) NOT NULL,
  `menuitem` varchar(80) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  PRIMARY KEY (`menuitemcode`),
  KEY `subgerechtcode` (`subgerechtcode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `menuitems`
--

INSERT INTO `menuitems` (`menuitemcode`, `subgerechtcode`, `menuitem`, `prijs`) VALUES
(1, 1, 'Fanta', '1.99'),
(2, 1, 'Cola', '1.99'),
(3, 1, 'Water', '0.99'),
(4, 1, 'ginger ale', '2.99'),
(5, 2, 'Koffie', '2.99');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveringen`
--

DROP TABLE IF EXISTS `reserveringen`;
CREATE TABLE IF NOT EXISTS `reserveringen` (
  `reserveringID` int(8) NOT NULL AUTO_INCREMENT,
  `klantId` int(8) NOT NULL,
  `opmerking` varchar(40) NOT NULL,
  `tafel` int(8) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `personen` int(8) NOT NULL,
  `allergie` varchar(40) NOT NULL,
  PRIMARY KEY (`reserveringID`) USING BTREE,
  KEY `klantId` (`klantId`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reserveringen`
--

INSERT INTO `reserveringen` (`reserveringID`, `klantId`, `opmerking`, `tafel`, `datum`, `tijd`, `personen`, `allergie`) VALUES
(92, 1, 'ddd', 2, '2022-04-28', '18:59:00', 2, 'dddd'),
(101, 3, 'neen', 4, '2022-04-14', '19:40:00', 3, 'geen'),
(102, 1, 'sfsfdf', 2, '2022-04-14', '16:47:00', 2, 'noten'),
(103, 4, 'sdsd', 3, '2022-04-13', '16:11:00', 2, 'noten'),
(104, 5, 'banaanss', 8, '2022-04-27', '20:14:00', 16, 'dikke bananen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subgerecht`
--

DROP TABLE IF EXISTS `subgerecht`;
CREATE TABLE IF NOT EXISTS `subgerecht` (
  `gerechtcode` int(8) NOT NULL,
  `subgerechtcode` int(8) NOT NULL AUTO_INCREMENT,
  `subgerecht` varchar(80) NOT NULL,
  PRIMARY KEY (`subgerechtcode`),
  KEY `gerechtcode` (`gerechtcode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `subgerecht`
--

INSERT INTO `subgerecht` (`gerechtcode`, `subgerechtcode`, `subgerecht`) VALUES
(2, 1, 'Koude dranken'),
(2, 2, 'Warme dranken'),
(2, 3, 'Alcohol drankjes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
