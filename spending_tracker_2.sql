-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 01:44:22
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
-- Base de datos: `spending_tracker_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `cantidad` float(8,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `descripcion` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `cantidad`, `categoria`, `fecha`, `descripcion`) VALUES
(7, 15.00, 3, '2022-10-24 16:26:10', 'coca-cola'),
(8, 65.00, 5, '2022-10-24 16:26:31', 'cigarros'),
(12, 120.00, 1, '2022-11-15 00:13:35', 'gas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_categorias`
--

CREATE TABLE `gastos_categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gastos_categorias`
--

INSERT INTO `gastos_categorias` (`id`, `nombre`) VALUES
(1, 'sin categoria'),
(2, 'viaticos'),
(3, 'despensa'),
(4, 'gastos fijos'),
(5, 'diversion'),
(6, 'transporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_categorias_2`
--

CREATE TABLE `gastos_categorias_2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pasword` text CHARACTER SET utf8 NOT NULL,
  `status` varchar(90) CHARACTER SET utf8 NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `gastos_categorias_2`
--

INSERT INTO `gastos_categorias_2` (`id`, `nombre`, `correo`, `pasword`, `status`, `telefono`) VALUES
(1, 'kevin', 'kevin1214@gmail.com', 'holalote', '1', '99887271'),
(3, 'bryan', 'bryan14141212@gmail.com', '1234', '1', '1245679'),
(4, 'bryan', 'nenuco@gmail.com', 'holamundo', '1', '9988776655'),
(5, 'pech', 'pech1213@gmail.com', 'dev8mas', '1', '9988765433'),
(6, 'pech', 'abraham@gmail.com', 'colacola', '', '9988776655'),
(7, 'david', 'david@gmail.com', 'david2', '', '7372727'),
(8, '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos_categorias`
--
ALTER TABLE `gastos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos_categorias_2`
--
ALTER TABLE `gastos_categorias_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `gastos_categorias_2`
--
ALTER TABLE `gastos_categorias_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
