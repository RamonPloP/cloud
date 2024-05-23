-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-05-2024 a las 22:37:27
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

DROP TABLE IF EXISTS `libros`;
CREATE TABLE IF NOT EXISTS `libros` (
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `año_publicacion` int NOT NULL,
  `genero` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`titulo`, `autor`, `año_publicacion`, `genero`, `desc`) VALUES
('ESO', 'Stephen king', 1987, 'ciencia-ficcion', 'Descripcion'),
('Maze Runner', 'Stephen King', 2023, 'biografia', 'Descripcio'),
('Harry Potter', 'JK Rowling', 1235, 'ciencia-ficcion', 'Descricion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `matricula` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `apellido`, `matricula`) VALUES
('DiegoGo', '12345678', 'Martinez', '355223'),
('Ramon', '12345678', 'Reyna', '348411'),
('Gabriel', 'toñotigre', 'Prieto', '312654'),
('Gabriel', '12345678', 'Bustillos', '353267');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
