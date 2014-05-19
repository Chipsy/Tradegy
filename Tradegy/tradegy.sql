-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Mai 2014 um 21:33
-- Server Version: 5.6.14
-- PHP-Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `tradegy`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lager`
--

CREATE TABLE IF NOT EXISTS `lager` (
  `u_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `menge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `lager`
--

INSERT INTO `lager` (`u_id`, `m_id`, `menge`) VALUES
(1, 1, 20),
(1, 2, 20);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `m_id` int(11) NOT NULL,
  `m_name` text NOT NULL,
  `m_preis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `material`
--

INSERT INTO `material` (`m_id`, `m_name`, `m_preis`) VALUES
(1, 'holz', 15),
(2, 'eisen', 30),
(3, 'weizen', 15);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `stadt`
--

CREATE TABLE IF NOT EXISTS `stadt` (
  `stadt_id` int(11) NOT NULL,
  `stadt_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `stadt`
--

INSERT INTO `stadt` (`stadt_id`, `stadt_name`) VALUES
(1, 'buxtehude'),
(2, 'hamburg'),
(3, 'frankfurt'),
(4, 'berlin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` text NOT NULL,
  `passwort` text NOT NULL,
  `geld` int(11) NOT NULL DEFAULT '500',
  `email` text NOT NULL,
  `stadt` text NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `passwort`, `geld`, `email`, `stadt`) VALUES
(1, 'christian', '1e694023b75e0ec7191b12c317819527', 500, 'christian.heideman@gmail.com', 'buxtehude');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
