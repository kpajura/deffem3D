-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Lut 2021, 13:45
-- Wersja serwera: 10.1.40-MariaDB
-- Wersja PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `deffem`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `files`
--

CREATE TABLE `files` (
  `ID` int(11) NOT NULL,
  `USERS_ID` int(11) NOT NULL,
  `FILE_NAME` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `FILE_DES` varchar(200) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `files`
--

INSERT INTO `files` (`ID`, `USERS_ID`, `FILE_NAME`, `FILE_DES`) VALUES
(1, 1, 'name', 'des'),
(3, 2, 's', 'ss'),
(4, 1, 'aaa.pdf', 'asas'),
(5, 1, 's.vel', 'fced'),
(6, 1, 's.vel', 'dec'),
(7, 1, '.pdf', ''),
(8, 1, 'Cw.pdf', ''),
(9, 1, 'test.docx', ''),
(10, 1, 'name.vel', ''),
(11, 12, 'documentation.pdf', 'Dokumentacja uÅ¼ytkownika pakietu DEFFEM 3D.'),
(12, 12, 'main.k', 'PrzykÅ‚adowa struktura pliku do wykorzystania w module SPH pakietu DEFFEM 3D'),
(13, 12, 'update.zip', 'Plik zawiera najnowszÄ… wersjÄ™ oprogramowania DEFFEM 3D do wykorzystania podczas przeprowadzania symulacji testowych w tym pakiecie.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lic2users`
--

CREATE TABLE `lic2users` (
  `ID` int(10) NOT NULL,
  `USERS_ID` int(10) NOT NULL,
  `LICENCES_ID` int(10) NOT NULL,
  `EXPIRATIONDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `lic2users`
--

INSERT INTO `lic2users` (`ID`, `USERS_ID`, `LICENCES_ID`, `EXPIRATIONDATE`) VALUES
(1, 1, 1, '2021-12-31'),
(2, 1, 2, '2021-12-31'),
(3, 1, 3, '2021-12-31'),
(4, 1, 4, '2021-12-31'),
(5, 1, 5, '2021-12-31'),
(6, 1, 6, '2021-12-31'),
(7, 1, 7, '2021-12-31'),
(8, 1, 8, '2021-12-31'),
(9, 1, 9, '2021-12-31'),
(10, 1, 10, '2021-12-31'),
(11, 1, 11, '2021-12-31'),
(12, 1, 12, '2021-12-31'),
(13, 2, 1, '2022-01-22');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `licences`
--

CREATE TABLE `licences` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `OPIS` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `licences`
--

INSERT INTO `licences` (`ID`, `NAME`, `OPIS`) VALUES
(1, 'solver_2D_TH', ''),
(2, 'solver_AX_TH', ''),
(3, ' SEMI_SOLID', ''),
(4, 'solver_AX_TM', ''),
(5, 'solver_3D_TH', ''),
(6, 'solver_3D_TM', ''),
(7, 'solver_3D_RCAFE', ''),
(8, 'solver_3D_Fluid', ''),
(9, 'solver_3D-HYBRID', ''),
(10, 'PRE processor', ''),
(11, 'POST procesor', ''),
(12, 'inverse', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL COMMENT 'ID użytkonika',
  `USERNAME` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `EMAIL` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `CREATIONDATE` date DEFAULT NULL,
  `ISADMIN` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `EMAIL`, `PASSWORD`, `CREATIONDATE`, `ISADMIN`) VALUES
(1, 'ADMIN', 'deffem.test@gmail.com', '$2y$10$nv/iqFSeQmOO3a/nMt/VOenVXste9IvahbKf9KKRjZylWJvTffF.y', '2021-01-01', 1),
(2, 'test', 'test@gmail.com', 'test1', '2021-01-01', 0),
(3, 'user2', 'user1@poczta.com', '$hashed_password', '2021-01-23', 0),
(4, 'user3', 'user3@test.com', '$hashed_password', '2021-01-23', 0),
(6, '5ser4', 'test2@gmail.com', '$2y$10$m0tB9seLWFWfy0Q6NHyGq.hlB50R5kSgBt.uG0G9l8S9pmfWcM9j.', NULL, 0),
(7, 'user5', 'ueser@gmail.com', '$2y$10$AaxzreEuW.N0oJZoQptci.BbI2gQNSNv9fgbA3YO6bXwQl7rd.eem', '2021-01-23', 0),
(8, 'katarzyna', 'kat@gmail.pl', '$2y$10$4D6E1dNIXFF6yjvqYyJDaepdL/KTFCLW/cWN2tpsjRK07aC0Va1Bm', '2021-01-23', 0),
(9, 'deffem', 'deffem@agh.pl', '$2y$10$5nJytPFirKWiS7mlbF81guVhrMqxru3GD5rZ3NjZWnfV1tDE1G5uu', '2021-01-23', 0),
(10, 'newuser', 'new@gdgf.pl', '$2y$10$pkwTZ8tYJWFVQgJX6asvee9AfQnR..SBVBjXlIzVMo2ADBWjAXRT.', '2021-01-23', 0),
(11, 'agh', 'agh@test.pl', '$2y$10$8Q84vitJqhiDZNSMusoXA.Cwuj13eenpK8swpDJj2Pk.gAPcC87fG', '2021-01-28', 0),
(12, 'user20', 'user20@test.pl', '$2y$10$yz6yPjZmCoT0r4.LdUy/Bulnvbzh55QxEvc5LtRL9MD7kBFF1sQBe', '2021-02-13', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `lic2users`
--
ALTER TABLE `lic2users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERS_ID` (`USERS_ID`),
  ADD KEY `lic2users_ibfk_2` (`LICENCES_ID`);

--
-- Indeksy dla tabeli `licences`
--
ALTER TABLE `licences`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `files`
--
ALTER TABLE `files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `lic2users`
--
ALTER TABLE `lic2users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `licences`
--
ALTER TABLE `licences`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID użytkonika', AUTO_INCREMENT=13;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `lic2users`
--
ALTER TABLE `lic2users`
  ADD CONSTRAINT `lic2users_ibfk_1` FOREIGN KEY (`USERS_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lic2users_ibfk_2` FOREIGN KEY (`LICENCES_ID`) REFERENCES `licences` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
