-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2018 a las 18:55:11
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebamvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario1`
--

CREATE TABLE `formulario1` (
  `numeroProceso` varchar(8) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fechaCreacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sede` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `presupuesto` decimal(65,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(60) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `apellidos` varchar(60) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nombreUsuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '' COMMENT 'Nombre con el que ingresara al sistema',
  `email` varchar(65) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `clave` varchar(200) COLLATE utf8_spanish_ci NOT NULL DEFAULT '' COMMENT 'Contraseña',
  `estado` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT '' COMMENT 'Estado Inactivo, Pendiente, Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el ingreso de usuarios';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `nombres`, `apellidos`, `nombreUsuario`, `email`, `clave`, `estado`) VALUES
(1, 'Usuario', 'Pruebas', 'usuarioPrueba', 'usuario@pruebas.com', '105968990edd6da1cbad7ef96ca2789a24a5368d833663b648c59dc1bf61bb0a7f06131228a34579eec2724bdfbd7c04bd89972f7a6ad7a27de49cc7a97cfdfcUf716/tZaBxsyfjvTmtMwv96+BthLBmeLDnQrBCcw18=', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario1`
--
ALTER TABLE `formulario1`
  ADD PRIMARY KEY (`numeroProceso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
