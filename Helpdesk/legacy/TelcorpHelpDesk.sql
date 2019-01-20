-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2016 a las 03:06:32
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TelcorpHelpDesk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(10) UNSIGNED NOT NULL,
  `CTipo` varchar(15) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_Categoria`, `CTipo`) VALUES
(1, 'Transmision'),
(2, 'Red');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `RIF` varchar(30) CHARACTER SET utf32 NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf32 NOT NULL,
  `Telefono` varchar(15) CHARACTER SET utf32 NOT NULL,
  `Correo` varchar(30) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`RIF`, `Nombre`, `Telefono`, `Correo`) VALUES
('J-30917169-0', 'Cliente 1', '0412-2352682', 'noc@telcorp.com.ve'),
('J-31746407-9', 'Cliente 2', '0251-4181475', 'operacioneslara@telcorp.com.ve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `Ticket` int(10) UNSIGNED NOT NULL,
  `Cliente` varchar(30) CHARACTER SET utf32 NOT NULL,
  `Descripcion` varchar(140) CHARACTER SET utf32 NOT NULL,
  `Asignado` varchar(30) CHARACTER SET utf32 NOT NULL,
  `Fecha_apertura` date DEFAULT NULL,
  `Hora_apertura` time DEFAULT NULL,
  `Fecha_cierre` date DEFAULT NULL,
  `Hora_cierre` time DEFAULT NULL,
  `Prioridad` varchar(10) NOT NULL,
  `Categoria` varchar(10) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`Ticket`, `Cliente`, `Descripcion`, `Asignado`, `Fecha_apertura`, `Hora_apertura`, `Fecha_cierre`, `Hora_cierre`, `Prioridad`, `Categoria`) VALUES
(1, 'J-31746407-9', 'Prueba Sistema de Incidencias', '18735409', NULL, NULL, NULL, NULL, '1', '1'),
(2, 'J-30917169-0', 'Segunda Incidencia', '19726806', NULL, NULL, NULL, NULL, '3', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE `prioridad` (
  `ID_Prioridad` varchar(10) NOT NULL,
  `PTipo` varchar(10) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`ID_Prioridad`, `PTipo`) VALUES
('1', 'Alta'),
('2', 'Media'),
('3', 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `Cedula` int(10) UNSIGNED NOT NULL,
  `Nombre_tecnico` varchar(30) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`Cedula`, `Nombre_tecnico`) VALUES
(18699438, 'Miguelangel Rodriguez'),
(18735409, 'Jose M Perez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`RIF`);

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`Ticket`),
  ADD KEY `Cliente` (`Cliente`),
  ADD KEY `Asignado` (`Asignado`),
  ADD KEY `Prioridad` (`Prioridad`),
  ADD KEY `Categoria` (`Categoria`),
  ADD KEY `Prioridad_2` (`Prioridad`),
  ADD KEY `Descripcion` (`Descripcion`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`ID_Prioridad`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`Cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `Ticket` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `incidencia_ibfk_1` FOREIGN KEY (`Prioridad`) REFERENCES `prioridad` (`ID_Prioridad`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
