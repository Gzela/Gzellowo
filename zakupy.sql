-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 14 Sie 2014, 17:41
-- Wersja serwera: 5.5.21-log
-- Wersja PHP: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `zakupy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zakupy`
--

CREATE TABLE IF NOT EXISTS `zakupy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `z1` text NOT NULL,
  `z2` text NOT NULL,
  `z3` text NOT NULL,
  `z4` text NOT NULL,
  `z5` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `zakupy`
--

INSERT INTO `zakupy` (`Id`, `z1`, `z2`, `z3`, `z4`, `z5`) VALUES
(1, 'i1', 'i2', '', 'i4', ''),
(2, 'i1', 'i2', '', 'i4', ''),
(3, 'i1', 'i2', 'i3', '', 'i5'),
(4, 'i1', 'i2', 'i3', 'i4', ''),
(5, '', '', '', '', 'i5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
