-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2017 at 04:49 PM
-- Server version: 5.6.35
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-businessstreamline`
--

-- --------------------------------------------------------

--
-- Table structure for table `angebote`
--

CREATE TABLE IF NOT EXISTS `angebote` (
  `angebot_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nachfrager_user_id` int(11) NOT NULL,
  `nachfrage_id` int(11) NOT NULL,
  `bezeichnung` varchar(255) CHARACTER SET latin1 NOT NULL,
  `menge` int(11) NOT NULL,
  `qualitaet` varchar(255) CHARACTER SET latin1 NOT NULL,
  `preis` int(11) NOT NULL,
  `lieferzeitpunkt` date NOT NULL,
  `bestellt` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `angebote`
--

INSERT INTO `angebote` (`angebot_id`, `user_id`, `nachfrager_user_id`, `nachfrage_id`, `bezeichnung`, `menge`, `qualitaet`, `preis`, `lieferzeitpunkt`, `bestellt`) VALUES
(5, 9, 10, 3, 'Schrauben xy', 100, 'neu', 50, '2019-09-20', 0),
(6, 9, 11, 2, 'Schrauben', 100, 'neu', 40, '2019-09-20', 0),
(8, 12, 10, 7, 'Maus Logitech H12', 10, 'neu', 250, '2017-10-10', 0),
(10, 9, 10, 8, 'Headset Logitech GT230', 20, 'neu', 2000, '2017-12-10', 1),
(11, 12, 13, 18, 'LED-Lampen', 200, 'Fabrik neu', 300, '2017-12-01', 0),
(12, 12, 13, 19, 'Zweitürenschrank (180x30x100) aus Massivholz Art Eiche', 1, 'guter Zustand', 3200, '2017-11-28', 0),
(13, 12, 13, 13, 'Schraubenzieher', 3, 'gebraucht', 15, '2017-10-02', 0),
(14, 9, 13, 17, 'Veloschloss (Stahl)', 10, 'gebraucht und funktioniert', 250, '2018-03-03', 0),
(15, 9, 13, 13, 'Schraubenzieher', 3, 'neu', 18, '2017-10-02', 0),
(17, 12, 10, 6, 'Tastatur Logitech MX120', 50, 'einwandfrei', 3500, '2017-12-10', 0),
(18, 9, 13, 19, 'Zweitürenschrank (180x30x100) aus Massivholz Art Eiche', 1, 'guter Zustand', 2800, '2017-11-28', 0),
(19, 9, 13, 18, 'LED-Lampen', 200, 'Fabrik neu', 123, '2017-12-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nachfragen`
--

CREATE TABLE IF NOT EXISTS `nachfragen` (
  `nachfrage_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bezeichnung` varchar(255) CHARACTER SET latin1 NOT NULL,
  `menge` int(11) NOT NULL,
  `qualitaet` varchar(255) CHARACTER SET latin1 NOT NULL,
  `lieferzeitpunkt` date NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `nachfragen`
--

INSERT INTO `nachfragen` (`nachfrage_id`, `user_id`, `bezeichnung`, `menge`, `qualitaet`, `lieferzeitpunkt`, `create_date`) VALUES
(2, 11, 'Schrauben', 100, 'neu', '2019-09-20', '2017-08-30 22:16:59'),
(3, 11, 'Muttern Typ xy', 55, 'gebraucht', '2017-10-20', '2017-08-31 09:04:17'),
(4, 10, 'Muttern Typ xz', 33, 'beliebig', '2018-09-20', '2017-09-10 15:45:32'),
(6, 10, 'Tastatur Logitech MX120', 50, 'einwandfrei', '2017-12-03', '2017-09-18 18:43:24'),
(7, 10, 'Maus Logitech H12', 12, 'einwandfrei', '2003-03-20', '2017-09-18 18:44:18'),
(8, 10, 'Headset Logitech GT230', 15, 'neu', '2017-12-12', '2017-09-24 12:15:20'),
(9, 10, 'Schrauben xy', 2000, 'brauchbar', '2017-11-30', '2017-09-24 12:16:07'),
(12, 11, 'Schere Victorinox Gross', 10, 'neu', '2017-11-01', '2017-09-24 12:54:44'),
(13, 13, 'Schraubenzieher', 3, 'gebraucht', '2017-10-02', '2017-09-24 19:47:49'),
(15, 13, 'Taschentücher', 20, 'neu', '2017-10-03', '2017-09-24 19:52:44'),
(16, 13, 'Laptop Lenovo', 3, 'gebraucht ', '2017-10-10', '2017-09-24 19:54:00'),
(17, 13, 'Veloschloss (Stahl)', 10, 'gebraucht und funktioniert', '2018-03-03', '2017-09-24 19:56:08'),
(18, 13, 'LED-Lampen', 200, 'Fabrik neu', '2017-12-01', '2017-09-24 19:57:09'),
(19, 13, 'Zweitürenschrank (180x30x100) aus Massivholz Art Eiche', 1, 'guter Zustand', '2017-11-28', '2017-09-24 20:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `register_date`) VALUES
(9, 'TestAnbieter', 'anbieter@test.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Anbieter', '2017-08-30 12:25:12'),
(10, 'TestNachfrager', 'nachfrager@test.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Nachfrager', '2017-08-30 12:25:55'),
(11, 'Bernt', 'bernt@nachfrager.com', '202cb962ac59075b964b07152d234b70', 'Nachfrager', '2017-09-10 15:47:52'),
(12, 'Hans', 'hans@anbieter.com', '202cb962ac59075b964b07152d234b70', 'Anbieter', '2017-09-10 15:48:16'),
(13, 'Andrea', 'andrea96_ro@hotmail.com', '1c42f9c1ca2f65441465b43cd9339d6c', 'Nachfrager', '2017-09-24 19:46:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angebote`
--
ALTER TABLE `angebote`
  ADD PRIMARY KEY (`angebot_id`);

--
-- Indexes for table `nachfragen`
--
ALTER TABLE `nachfragen`
  ADD PRIMARY KEY (`nachfrage_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angebote`
--
ALTER TABLE `angebote`
  MODIFY `angebot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `nachfragen`
--
ALTER TABLE `nachfragen`
  MODIFY `nachfrage_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
