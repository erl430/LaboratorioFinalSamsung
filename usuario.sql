-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 20:55:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicafinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `APELLIDO1` varchar(20) NOT NULL,
  `APELLIDO2` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `LOGIN` varchar(20) NOT NULL,
  `PASSWORD` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `NOMBRE`, `APELLIDO1`, `APELLIDO2`, `EMAIL`, `LOGIN`, `PASSWORD`) VALUES
(1, 'Elena', 'Romon', 'Lopez', 'elenaromon@gmail.com', 'elena', '1234'),
(3, 'Elena', 'Romon', 'Lopez', 'elena.romon@gmail.co', 'elena2', '1234'),
(4, 'Elena', 'Romon', 'Lopez', 'elena@gmail.com', 'elena3', '1234'),
(5, 'pru', 'eba', '', 'prueba@mail.com', 'prueba', '1234'),
(6, 'viernes', 'ss', '', 'viernes@mail.com', 'vierness', '1244'),
(7, 'finde', 'finde', '', 'finde@mail.com', 'finde', '1234'),
(8, 'peuwbaReg', 'pruebaReg', '', 'pruebared@mail.com', 'pruebareg', '1234'),
(9, 'asdf', 'asdf', '', 'asdf@mail.com', 'asdf', '1234'),
(10, 'mayus', 'mayus', '', 'mayus@mail.com', 'mayus', '1234'),
(11, 'FINAL', 'FINAL', '', 'FINAL@MAIL.COM', 'FINAL', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `LOGIN` (`LOGIN`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
