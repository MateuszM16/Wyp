-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 23 Wrz 2019, 11:17
-- Wersja serwera: 5.1.41
-- Wersja PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `aplikacje`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `samochod`
--

CREATE TABLE IF NOT EXISTS `samochod` (
  `ID` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Marka` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Model` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Przebieg` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Czy_wyporzy` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `samochod`
--

INSERT INTO `samochod` (`ID`, `Marka`, `Model`, `Przebieg`, `Czy_wyporzy`) VALUES
('1', 'Toyota', 'Corolla', '200Km', 'Nie'),
('2', 'Toyota', 'Verso', '150Km', 'Nie'),
('3', 'Opel', 'Corsa', '50Km', 'Tak');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
