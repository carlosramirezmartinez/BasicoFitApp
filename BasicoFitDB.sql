-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-04-2023 a las 17:51:39
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
  `DNI` char(9) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`,`DNI`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `DNI`, `nombre`, `apellidos`, `fecha_nacimiento`, `email`, `ciudad`) VALUES
(1, '55555555R', 'Carlos', 'Ramirez Martinez', '1999-08-08', 'carlosramirezmartinez01@gmail.com', 'Madrid'),
(2, '55555555K', 'Benito', 'Ramirez Perez', '1993-02-01', 'benito3@gmail.com', 'Murcia'),
(3, '55555555L', 'Laura', 'Pons Pinto', '1988-07-08', 'laurita01@gmail.com', 'Sevilla'),
(4, '55555555M', 'Emily', 'Almeida', '2000-12-08', 'lamili0000@gmail.com', 'Madrid'),
(5, '55555567Y', 'Eduardo', 'Criado Martinez', '1986-08-12', 'educr7@gmail.com', 'Madrid'),
(6, '66666664K', 'Enrique', 'Pastor Martinez', '1950-02-02', 'concejal@gmail.com', 'Malaga'),
(7, '12345677J', 'Santiago', 'Abascal Martinez', '1978-08-08', 'santivox@gmail.com', 'Madrid'),
(8, '88888888U', 'Pedro', 'Sanchez Sanchez', '1980-08-08', 'pedropsoe@gmail.com', 'Madrid');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
