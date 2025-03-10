-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 05. Mrz 2025 um 21:09
-- Server-Version: 10.5.19-MariaDB-0+deb11u2
-- PHP-Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `flapas_StudyZoneDB`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Logins`
--

CREATE TABLE `Logins` (
  `ID` int(11) NOT NULL,
  `hashedpw` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Daten für Tabelle `Logins`
--

INSERT INTO `Logins` (`ID`, `hashedpw`) VALUES
(1, 'aaf6a7d781d14ad069bf26988cbda52043197c14f3a9762778a7ba9d31bebce0');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Profile`
--

CREATE TABLE `Profile` (
  `ID_Profile` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Rolle_int` int(4) NOT NULL COMMENT '1-99 admin\r\n100-999 lk\r\n1000-9999 sus',
  `EMail` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Daten für Tabelle `Profile`
--

INSERT INTO `Profile` (`ID_Profile`, `Name`, `Rolle_int`, `EMail`) VALUES
(1, 'Marcel', 1, 'marcel@marcel.net');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Logins`
--
ALTER TABLE `Logins`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `Profile`
--
ALTER TABLE `Profile`
  ADD UNIQUE KEY `ID_Profile` (`ID_Profile`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Logins`
--
ALTER TABLE `Logins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `Profile`
--
ALTER TABLE `Profile`
  MODIFY `ID_Profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
