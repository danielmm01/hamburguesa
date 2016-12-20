-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2016 a las 10:27:41
-- Versión del servidor: 5.7.14-log
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hamburguesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_administrador`
--

CREATE TABLE `tb_administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `app` varchar(45) DEFAULT NULL,
  `apm` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_administrador`
--

INSERT INTO `tb_administrador` (`id_administrador`, `nombre`, `app`, `apm`, `pass`) VALUES
(1, 'Daniel', 'Morales', 'Morales', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categ` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categ`, `nombre`) VALUES
(5, 'pan'),
(6, 'carne'),
(7, 'salsa'),
(8, 'carne fria'),
(9, 'aderezo'),
(10, 'vegetal'),
(11, 'queso'),
(12, 'bebida'),
(13, 'aderezos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ingrediente`
--

CREATE TABLE `tb_ingrediente` (
  `id_ingrediente` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `id_categ` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_ingrediente`
--

INSERT INTO `tb_ingrediente` (`id_ingrediente`, `nombre`, `precio`, `id_categ`) VALUES
(4, 'Pan integral', '5.00', 5),
(5, 'pan de ajo', '6.00', 5),
(6, 'Arrachera', '10.00', 6),
(7, 'sirlon', '12.00', 6),
(8, 'chile rajas', '2.00', 7),
(9, 'chile chipotle', '4.00', 7),
(10, 'jamon', '2.00', 8),
(11, 'tosino', '3.00', 8),
(12, 'capsu', '2.00', 9),
(13, 'mostasa', '3.00', 9),
(14, 'tomate', '2.00', 10),
(15, 'cebolla', '3.00', 10),
(16, 'lechuga', '4.00', 10),
(17, 'amarillo', '2.00', 11),
(18, 'manchego', '4.00', 11),
(19, 'coronita', '20.00', 12),
(20, 'coca cola 600ml', '15.00', 12),
(21, 'xx 500ml', '20.00', 12),
(22, 'sprite', '14.00', 12),
(23, 'valle frut', '12.00', 12),
(24, 'capsu', '3.00', 13),
(25, 'mostasa', '4.00', 13),
(26, 'mostasa', '3.00', 13),
(27, 'mostasa', '3.00', 9),
(28, 'lechuga', '4.00', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mesero`
--

CREATE TABLE `tb_mesero` (
  `id_mesero` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `app` varchar(45) DEFAULT NULL,
  `apm` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_mesero`
--

INSERT INTO `tb_mesero` (`id_mesero`, `nombre`, `app`, `apm`) VALUES
(11, 'Mario', 'Perez', 'Hidalgo'),
(12, 'Luis', 'Morales', 'Garcia'),
(13, 'Antonio', 'Perez', 'Perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_venta`
--

CREATE TABLE `tb_venta` (
  `id_venta` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `detalle` text,
  `total` decimal(5,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categ`);

--
-- Indices de la tabla `tb_ingrediente`
--
ALTER TABLE `tb_ingrediente`
  ADD PRIMARY KEY (`id_ingrediente`),
  ADD KEY `fk_tb_ingrediente_tb_categoria_idx` (`id_categ`);

--
-- Indices de la tabla `tb_mesero`
--
ALTER TABLE `tb_mesero`
  ADD PRIMARY KEY (`id_mesero`);

--
-- Indices de la tabla `tb_venta`
--
ALTER TABLE `tb_venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tb_ingrediente`
--
ALTER TABLE `tb_ingrediente`
  MODIFY `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `tb_mesero`
--
ALTER TABLE `tb_mesero`
  MODIFY `id_mesero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tb_venta`
--
ALTER TABLE `tb_venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
