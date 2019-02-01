-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 01-02-2019 a las 14:58:31
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto3x1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `origen` varchar(20) NOT NULL,
  `destino` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`origen`, `destino`, `fecha`) VALUES
('Hong Kong', 'Bangkok', '0000-00-00'),
('Hong Kong', 'Londres', '0000-00-00'),
('Hong Kong', 'Macao', '0000-00-00'),
('Hong Kong', 'Singapur', '0000-00-00'),
('Hong Kong', 'Paris', '0000-00-00'),
('Hong Kong', 'Dubai', '0000-00-00'),
('Hong Kong', 'Nueva York', '0000-00-00'),
('Hong Kong', 'Kuala Lumpur', '0000-00-00'),
('Hong Kong', 'Shenzen', '0000-00-00'),
('Bangkok', 'Hong Kong', '0000-00-00'),
('Bangkok', 'Londres', '0000-00-00'),
('Bangkok', 'Macao', '0000-00-00'),
('Bangkok', 'Singapur', '0000-00-00'),
('Bangkok', 'Paris', '0000-00-00'),
('Bangkok', 'Dubai', '0000-00-00'),
('Bangkok', 'Nueva York', '0000-00-00'),
('Bangkok', 'Kuala Lumpur', '0000-00-00'),
('Bangkok', 'Shenzen', '0000-00-00'),
('Londres', 'Hong Kong', '0000-00-00'),
('Londres', 'Bangkok', '0000-00-00'),
('Londres', 'Macao', '0000-00-00'),
('Londres', 'Singapur', '0000-00-00'),
('Londres', 'Paris', '0000-00-00'),
('Londres', 'Dubai', '0000-00-00'),
('Londres', 'Nueva York', '0000-00-00'),
('Londres', 'Kuala Lumpur', '0000-00-00'),
('Londres', 'Shenzen', '0000-00-00'),
('Macao', 'Hong Kong', '0000-00-00'),
('Macao', 'Bangkok', '0000-00-00'),
('Macao', 'Londres', '0000-00-00'),
('Macao', 'Singapur', '0000-00-00'),
('Macao', 'Paris', '0000-00-00'),
('Macao', 'Dubai', '0000-00-00'),
('Macao', 'Nueva York', '0000-00-00'),
('Macao', 'Kuala Lumpur', '0000-00-00'),
('Macao', 'Shenzen', '0000-00-00'),
('Singapur', 'Hong Kong', '0000-00-00'),
('Singapur', 'Bangkok', '0000-00-00'),
('Singapur', 'Londres', '0000-00-00'),
('Singapur', 'Macao', '0000-00-00'),
('Singapur', 'Paris', '0000-00-00'),
('Singapur', 'Dubai', '0000-00-00'),
('Singapur', 'Nueva York', '0000-00-00'),
('Singapur', 'Kuala Lumpur', '0000-00-00'),
('Singapur', 'Shenzen', '0000-00-00'),
('Paris', 'Hong Kong', '0000-00-00'),
('Paris', 'Bangkok', '0000-00-00'),
('Paris', 'Londres', '0000-00-00'),
('Paris', 'Macao', '0000-00-00'),
('Paris', 'Singapur', '0000-00-00'),
('Paris', 'Dubai', '0000-00-00'),
('Paris', 'Nueva York', '0000-00-00'),
('Paris', 'Kuala Lumpur', '0000-00-00'),
('Paris', 'Shenzen', '0000-00-00'),
('Dubai', 'Hong Kong', '0000-00-00'),
('Dubai', 'Bangkok', '0000-00-00'),
('Dubai', 'Londres', '0000-00-00'),
('Dubai', 'Macao', '0000-00-00'),
('Dubai', 'Singapur', '0000-00-00'),
('Dubai', 'Paris', '0000-00-00'),
('Dubai', 'Nueva York', '0000-00-00'),
('Dubai', 'Kuala Lumpur', '0000-00-00'),
('Dubai', 'Shenzen', '0000-00-00'),
('Nueva York', 'Hong Kong', '0000-00-00'),
('Nueva York', 'Bangkok', '0000-00-00'),
('Nueva York', 'Londres', '0000-00-00'),
('Nueva York', 'Macao', '0000-00-00'),
('Nueva York', 'Singapur', '0000-00-00'),
('Nueva York', 'Paris', '0000-00-00'),
('Nueva York', 'Dubai', '0000-00-00'),
('Nueva York', 'Kuala Lumpur', '0000-00-00'),
('Nueva York', 'Shenzen', '0000-00-00'),
('Kuala Lumpur', 'Hong Kong', '0000-00-00'),
('Kuala Lumpur', 'Bangkok', '0000-00-00'),
('Kuala Lumpur', 'Londres', '0000-00-00'),
('Kuala Lumpur', 'Macao', '0000-00-00'),
('Kuala Lumpur', 'Singapur', '0000-00-00'),
('Kuala Lumpur', 'Paris', '0000-00-00'),
('Kuala Lumpur', 'Dubai', '0000-00-00'),
('Kuala Lumpur', 'Nueva York', '0000-00-00'),
('Kuala Lumpur', 'Shenzen', '0000-00-00'),
('Shenzen', 'Hong Kong', '0000-00-00'),
('Shenzen', 'Bangkok', '0000-00-00'),
('Shenzen', 'Londres', '0000-00-00'),
('Shenzen', 'Macao', '0000-00-00'),
('Shenzen', 'Singapur', '0000-00-00'),
('Shenzen', 'Paris', '0000-00-00'),
('Shenzen', 'Dubai', '0000-00-00'),
('Shenzen', 'Nueva York', '0000-00-00'),
('Shenzen', 'Kuala Lumpur', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD KEY `fecha` (`fecha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
