-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 15:36:28
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `khem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ad`
--

CREATE TABLE `ad` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ad`
--

INSERT INTO `ad` (`userid`, `username`, `correo`, `password`) VALUES
(1, 'admin', 'er657riv@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli`
--

CREATE TABLE `cli` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `tel` varchar(60) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `neg` varchar(255) NOT NULL,
  `dneg` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cli`
--

INSERT INTO `cli` (`userid`, `username`, `nom`, `correo`, `tel`, `dir`, `neg`, `dneg`, `password`) VALUES
(4, 'edwin1', 'Edwin Rivera', 'al222110702@gmail.com', '7131208750', 'Lerma', 'Khem', 'UTVT', '1234'),
(5, 'rosita', 'rosita estrada', 'rosita.e@gmail.com', '556543678', 'mi casa', 'casita rosa', 'las tres letras', '12121212'),
(6, 'ed23', 'Edwin Rivera ', 'Donmkast@gmail.com', '713220029', 'Ocoyoacac ', 'KHEM', 'Ocoyoacac ', '123'),
(7, 'red2', 'Edwin Rivera', 'dedewrf', '7131208750', 'Santa Maria Atarasquillo', 'fref', 'qwdeq', '1234'),
(8, 'car', 'Monse. Silva', 'silvagarciacarmenmonserrath@gmail.com', '7222100923', 'Santa María Atarasquillo, Lerma, Estado de México.', 'Tre', 'Toluca ', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rep`
--

CREATE TABLE `rep` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `tel` varchar(60) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `neg` varchar(60) NOT NULL,
  `dneg` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rep`
--

INSERT INTO `rep` (`userid`, `username`, `nom`, `correo`, `tel`, `dir`, `neg`, `dneg`, `password`) VALUES
(1, 'edr1', 'Edwin Rivera', 'ed', 'fed', 'rf', 'MOTO FT-150', 'LRC-23-45', '123'),
(2, 'ratonveloz', 'raton veloz mendez', 'raton.veloz@gmail.com', '717765432', 'baja velocidad', 'moto suzuki123', 'mex 23 34', '54321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`userid`, `username`, `correo`, `password`) VALUES
(2, 'ed45', 'er657riv@gmail.com', '12345'),
(5, 'CARMEN GARCIA', 'carmen.sv@gmail.com', '1234'),
(6, 'joaquin', 'joaquinco@gmail.com', '123'),
(8, 'apolinar', 'apolinar@gmail.com', '98765'),
(9, 'car', 'silvagarciacarmenmonserrath@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`userid`);

--
-- Indices de la tabla `cli`
--
ALTER TABLE `cli`
  ADD PRIMARY KEY (`userid`);

--
-- Indices de la tabla `rep`
--
ALTER TABLE `rep`
  ADD PRIMARY KEY (`userid`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ad`
--
ALTER TABLE `ad`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cli`
--
ALTER TABLE `cli`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rep`
--
ALTER TABLE `rep`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
