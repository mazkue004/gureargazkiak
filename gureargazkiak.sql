-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2015 a las 10:35:17
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gureargazkiak`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `argazkia`
--

CREATE TABLE IF NOT EXISTS `argazkia` (
  `ArgazkiKod` int(11) NOT NULL,
  `NAN` int(11) NOT NULL,
  `Izenb` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Etiketa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Mota` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `argazkiaikuskop`
--

CREATE TABLE IF NOT EXISTS `argazkiaikuskop` (
  `ArgazkiKod` int(11) NOT NULL,
  `KopErregistratu` int(11) NOT NULL,
  `KopAnonimo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baimena`
--

CREATE TABLE IF NOT EXISTS `baimena` (
  `JabeaNAN` int(11) NOT NULL DEFAULT '0',
  `ErabNAN` int(11) NOT NULL DEFAULT '0',
  `ArgazkiKod` int(11) NOT NULL DEFAULT '0',
  `Baimena` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaile`
--

CREATE TABLE IF NOT EXISTS `erabiltzaile` (
  `NAN` int(11) NOT NULL,
  `Izena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Abizena1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Abizena2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Rola` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PerfilArgazki` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `argazkia`
--
ALTER TABLE `argazkia`
  ADD PRIMARY KEY (`ArgazkiKod`);

--
-- Indices de la tabla `argazkiaikuskop`
--
ALTER TABLE `argazkiaikuskop`
  ADD PRIMARY KEY (`ArgazkiKod`);

--
-- Indices de la tabla `baimena`
--
ALTER TABLE `baimena`
  ADD PRIMARY KEY (`JabeaNAN`,`ErabNAN`,`ArgazkiKod`);

--
-- Indices de la tabla `erabiltzaile`
--
ALTER TABLE `erabiltzaile`
  ADD PRIMARY KEY (`NAN`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `argazkia`
--
ALTER TABLE `argazkia`
  MODIFY `ArgazkiKod` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
