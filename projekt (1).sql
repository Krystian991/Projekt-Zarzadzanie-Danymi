-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Cze 2022, 17:50
-- Wersja serwera: 10.1.32-MariaDB
-- Wersja PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojazdy`
--

CREATE TABLE `pojazdy` (
  `PojazdId` int(11) NOT NULL,
  `Marka` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `Vin` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `NrRej` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `Przeglad` tinyint(1) NOT NULL DEFAULT '0',
  `Login` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pojazdy`
--

INSERT INTO `pojazdy` (`PojazdId`, `Marka`, `Vin`, `NrRej`, `Przeglad`, `Login`, `time`) VALUES
(10, 'Audi', '1234', '4321', 1, 'admin', '2022-06-12 17:29:09'),
(11, 'BMW', '2134', '4312', 0, 'admin', '2022-06-12 17:29:30'),
(12, 'Fiat', '2345', '5432', 0, 'admin', '2022-06-12 17:29:45');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `IdUzytkownika` int(11) NOT NULL,
  `Rola` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`IdUzytkownika`, `Rola`) VALUES
(7, 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `IdUzytkownika` int(11) NOT NULL,
  `Login` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `NrTelefonu` int(11) NOT NULL,
  `Zamieszkanie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `DataUrodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`IdUzytkownika`, `Login`, `Haslo`, `Email`, `NrTelefonu`, `Zamieszkanie`, `DataUrodzenia`) VALUES
(7, 'admin', '1234', 'admin@mail.com', 123456789, 'Polska', '2022-05-06');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  ADD PRIMARY KEY (`PojazdId`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`IdUzytkownika`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`IdUzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  MODIFY `PojazdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `IdUzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `IdUzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
