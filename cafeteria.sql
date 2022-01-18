-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2022 a las 15:57:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CT_Id` int(11) NOT NULL,
  `CT_Nombre` varchar(255) NOT NULL,
  `CT_Fecha_Creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CT_Id`, `CT_Nombre`, `CT_Fecha_Creacion`) VALUES
(1, 'Panaderia', '2022-01-11'),
(2, 'Lacteos', '2022-01-11'),
(3, 'Dulces', '2022-01-11'),
(4, 'Pasteleria', '2022-01-11'),
(5, 'Cereales', '2022-01-15'),
(6, 'Gasesosas', '2022-01-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `OR_Id` int(11) NOT NULL,
  `PD_Id` int(11) NOT NULL,
  `OR_Fecha_Creacion` date NOT NULL,
  `OR_Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`OR_Id`, `PD_Id`, `OR_Fecha_Creacion`, `OR_Cantidad`) VALUES
(11, 64, '0000-00-00', 100),
(12, 64, '0000-00-00', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `PD_Id` int(11) NOT NULL,
  `PD_Nombre` varchar(255) NOT NULL,
  `PD_Referencia` varchar(255) NOT NULL,
  `PD_Precio` int(11) NOT NULL,
  `PD_Peso` int(11) NOT NULL,
  `PD_Stock` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `PD_Fecha_Creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`PD_Id`, `PD_Nombre`, `PD_Referencia`, `PD_Precio`, `PD_Peso`, `PD_Stock`, `categoria`, `PD_Fecha_Creacion`) VALUES
(57, 'Yogurt', 'YG', 20000, 1000, 5, 2, '2022-01-17'),
(58, 'cocacola', 'CC', 5000, 250, 99, 6, '2022-01-17'),
(62, 'Pan de queso ', 'PQ', 2000, 200, 8, 1, '2022-01-18'),
(64, 'Pepsi', 'PS', 3000, 250, 30, 6, '2022-01-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CT_Id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`OR_Id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`PD_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CT_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `OR_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `PD_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
