-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-04-2023 a las 17:04:34
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basicofitdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `DNI` char(8) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `primer_apellido` varchar(255) NOT NULL,
  `segundo_apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`,`DNI`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `DNI`, `nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `email`, `ciudad`) VALUES
(1, '55555555', 'Carlos', 'Ramirez', 'Martinez', '1999-08-08', 'carlosramirezmartinez01@gmail.com', 'Madrid');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
