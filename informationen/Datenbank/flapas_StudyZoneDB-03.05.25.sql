-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 03. Mai 2025 um 18:28
-- Server-Version: 10.5.19-MariaDB-0+deb11u2
-- PHP-Version: 8.1.32

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
-- Tabellenstruktur für Tabelle `Aufgaben_MA`
--

CREATE TABLE `Aufgaben_MA` (
  `ID_Aufgaben_MC` int(11) NOT NULL,
  `Korrekte_MC_Antworten` varchar(11) NOT NULL,
  `Schulfach` varchar(50) NOT NULL,
  `Klasse` varchar(5) NOT NULL,
  `Frage_MC` varchar(500) NOT NULL,
  `Antwort-A` varchar(250) NOT NULL,
  `Antwort-B` varchar(250) NOT NULL,
  `Antwort-C` varchar(250) NOT NULL,
  `Antwort-D` varchar(250) NOT NULL,
  `Bild_Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Daten für Tabelle `Aufgaben_MA`
--

INSERT INTO `Aufgaben_MA` (`ID_Aufgaben_MC`, `Korrekte_MC_Antworten`, `Schulfach`, `Klasse`, `Frage_MC`, `Antwort-A`, `Antwort-B`, `Antwort-C`, `Antwort-D`, `Bild_Link`) VALUES
(1, 'Antwort-B', 'Chemie', '7b', 'sfdas', 'sad', 'asd', 'asd', 'ads', ''),
(2, 'Antwort-C', 'Chemie', '10b', 'fg', 'dfg', 'dfg', 'dfg', 'dfg', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Aufgaben_MC`
--

CREATE TABLE `Aufgaben_MC` (
  `ID_Aufgaben_MC` int(11) NOT NULL,
  `Korrekte_MC_Antworten` varchar(11) NOT NULL,
  `Schulfach` varchar(50) NOT NULL,
  `Klasse` varchar(5) NOT NULL,
  `Frage_MC` varchar(500) NOT NULL,
  `Antwort-A` varchar(250) NOT NULL,
  `Antwort-B` varchar(250) NOT NULL,
  `Antwort-C` varchar(250) NOT NULL,
  `Antwort-D` varchar(250) NOT NULL,
  `Bild_Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Daten für Tabelle `Aufgaben_MC`
--

INSERT INTO `Aufgaben_MC` (`ID_Aufgaben_MC`, `Korrekte_MC_Antworten`, `Schulfach`, `Klasse`, `Frage_MC`, `Antwort-A`, `Antwort-B`, `Antwort-C`, `Antwort-D`, `Bild_Link`) VALUES
(8, 'Antwort-C', 'Mathematik', '8b', 'fgd', 'dsfg', 'sdfgsdfg', 'dsfg', 'sdgf', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Benutzer`
--

CREATE TABLE `Benutzer` (
  `ID_Nutzer` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `EMail` varchar(50) NOT NULL,
  `Passwort` varchar(1000) NOT NULL,
  `Rolle_int` int(5) NOT NULL COMMENT '1 Admin, 2, Lehrer, 3 Schüler'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Daten für Tabelle `Benutzer`
--

INSERT INTO `Benutzer` (`ID_Nutzer`, `Name`, `EMail`, `Passwort`, `Rolle_int`) VALUES
(1, 'Marcel', 'marcel@marcel.net', '$2y$12$rlFVuqwLBj8W0v2wNBWzT.S14j1RAtr/ajjLT7nkQsUnfRaMaLnAy', 1),
(6, 'Lehrer', 'lehrer@lehrer.de', '$2y$12$onY6OAiXJspEQvWF0tSYxO4IFI6HNd5hvB5hurYjKB2gekeLNtu8e', 2),
(7, 'Schüler', 'schueler@schueler.de', '$2y$12$S/FhkuDqyCulT.Mes.12l.R00Dxh1mEwiemWNChD6y1pSxxelCH6q', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Klassen`
--

CREATE TABLE `Klassen` (
  `ID_Lehrer` int(9) NOT NULL,
  `ID_Klassen` int(9) NOT NULL,
  `Klassenstufen` int(5) NOT NULL,
  `Alphabet` varchar(5) NOT NULL,
  `Schüler_IDs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Aufgaben_MA`
--
ALTER TABLE `Aufgaben_MA`
  ADD PRIMARY KEY (`ID_Aufgaben_MC`);

--
-- Indizes für die Tabelle `Aufgaben_MC`
--
ALTER TABLE `Aufgaben_MC`
  ADD PRIMARY KEY (`ID_Aufgaben_MC`);

--
-- Indizes für die Tabelle `Benutzer`
--
ALTER TABLE `Benutzer`
  ADD PRIMARY KEY (`ID_Nutzer`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Aufgaben_MA`
--
ALTER TABLE `Aufgaben_MA`
  MODIFY `ID_Aufgaben_MC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `Aufgaben_MC`
--
ALTER TABLE `Aufgaben_MC`
  MODIFY `ID_Aufgaben_MC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `Benutzer`
--
ALTER TABLE `Benutzer`
  MODIFY `ID_Nutzer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
