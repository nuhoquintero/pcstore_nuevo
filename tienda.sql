-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2022 a las 15:52:10
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `productoName` varchar(50) NOT NULL,
  `stockUnidad` varchar(50) NOT NULL,
  `categoria` enum('teclado','placa de video','sillas','mouse','procesadores') NOT NULL,
  `imagen` varchar(55) NOT NULL,
  `precio` int(11) NOT NULL,
  `fechaAlta` date DEFAULT NULL,
  `fechaBaja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `productoName`, `stockUnidad`, `categoria`, `imagen`, `precio`, `fechaAlta`, `fechaBaja`) VALUES
(1, 'TECLADO GAMING SHENLONG', '50', 'teclado', 'tecladoShenlong.jpg', 3933, NULL, NULL),
(2, 'MSI VIGOR GK50 LOW PROFILE US', '40', 'teclado', 'teclado-msi-vigor-gk50-low-profile-us-0.jpg', 14580, NULL, NULL),
(4, 'teclado mecanico logitech gpro tklgx blue clicky', '', 'teclado', 'logic2.jpg', 0, NULL, NULL),
(5, 'TECLADO HP HYPERX ALLOY ORIGINS CORE SWITCH RED', '85', 'teclado', 'hyperx.jpg', 0, NULL, NULL),
(6, 'TECLADO GAMER RAZER HUNTSMAN MINI', '64', 'teclado', 'teclado-gamer-razer-huntsman-mini-0.jpg', 0, NULL, NULL),
(7, 'TECLADO GAMER LOGITECH G513 RGB LIGHTSSYNC', '54', 'teclado', 'logi.jpg', 0, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
