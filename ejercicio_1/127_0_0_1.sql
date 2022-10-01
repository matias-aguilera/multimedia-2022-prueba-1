-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2022 a las 03:35:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `multimedia_prueba_1`
--
CREATE DATABASE IF NOT EXISTS `multimedia_prueba_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `multimedia_prueba_1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_1`
--

CREATE TABLE `ejercicio_1` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cuerpo` varchar(500) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejercicio_1`
--

INSERT INTO `ejercicio_1` (`id`, `titulo`, `cuerpo`, `categoria`, `imagen`, `autor`) VALUES
(20, 'imagen ', 'mmmmm', 'prueba', 'img/imagen.jpg', 'juancho');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicio_1`
--
ALTER TABLE `ejercicio_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicio_1`
--
ALTER TABLE `ejercicio_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
