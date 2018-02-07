-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-02-2018 a las 00:29:46
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hidroweb(prueba)`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cama_hidroponica`
--

CREATE TABLE `cama_hidroponica` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `capacidad_tanque` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cama_hidroponica`
--

INSERT INTO `cama_hidroponica` (`id`, `nombre`, `capacidad_tanque`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'MD555', '50', '1000', 'Camas para plantines', 'cama01.jpg'),
(2, 'MS17', '0.5', '20', 'Modelo chico ', 'cama02.jpg'),
(3, 'MG15', '50', '500', 'Modelo profesional', 'cama03.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id` int(11) NOT NULL,
  `numeroventa` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `subtotal` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) VALUES
(1, 1, 'Galaxy s4', 'galaxy.jpg', '9800', '2', '19600'),
(2, 1, 'cebolla', 'cebolla.jpg', '10.5', '1', '10.5'),
(3, 2, 'computadora hp', 'computadora.jpg', '7400.5', '1', '7400.5'),
(4, 2, 'Elemnt Skateboard', 'element.jpg', '700', '5', '3500'),
(5, 3, 'cebolla', 'cebolla.jpg', '10.5', '1', '10.5'),
(6, 4, 'cebolla', 'cebolla.jpg', '10.5', '1', '10.5'),
(7, 5, 'Semillas de Lechuga', 'lechuga.jpg', '20', '1', '20'),
(8, 5, 'Semilla Tomate Azul', 'tomateazul.jpg', '30', '3', '90'),
(9, 6, '', 'cama01.jpg', '1000', '1', '1000'),
(10, 7, '', 'cama01.jpg', '1000', '9', '9000'),
(11, 8, 'Semillas de cebolla', 'cebolla.jpg', '12', '5', '60'),
(12, 8, 'Semillas de Lechuga', 'lechuga.jpg', '20', '1', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `id_cont` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `mensaje` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`id_cont`, `nombre`, `apellido`, `email`, `telefono`, `mensaje`) VALUES
(1, 'Ricardo', 'Cuellar', 'themoneitor@gmail.com', '79064319', 'Pruebaaaaaaaaaaaaaaaaa'),
(2, 'Ricardo', 'Justiniano', 'jose_ricardo_cuellar@hotmail.com', '3427204', 'quiero saber mas de hidroponia'),
(3, 'Jose', 'Cuellar', 'jrcj@gmail.com', '71011811', 'pplop'),
(4, 'Richi', 'Cue', 'richi@hotmail.com', '74185963', 'Quiero comprarme una cama a medida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `IdTipo` int(11) DEFAULT NULL,
  `descripcion` varchar(50) NOT NULL,
  `imagen` text NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id`, `nombre`, `IdTipo`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'tomate azul', 1, 'tomate azul para granja hidroponica', 'tomateazul.jpg', 5),
(2, 'potasio', 2, 'solucion a base de potasio para fertilizante ', 'potasio.jpg', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`, `tipo`) VALUES
(1, 'Semillas de cebolla', 'Contenido semillas 10grs', 'cebolla.jpg', 12, 0),
(3, 'Semilla Tomate Azul', 'Contenido semillas 15grs', 'tomateazul.jpg', 30, 0),
(4, 'Nutriene liquido Potasio', 'Potasio especial para camas hidroponicas', 'potasio.jpg', 50, 0),
(5, 'Balance ', 'Desarollo de los Plantines', 'balance.jpg', 70, 0),
(6, 'Semilla deJalapenos', 'Jalapenos ya que estamos en Mexico', 'jalapenos.jpg', 15, 0),
(7, 'Semillas de pimento', 'Pimenton rojo natural', 'pimenton.jpg', 5, 0),
(8, 'Prueba', 'Esto es una prueba', '818306_Ã­ndice.png', 5, 1),
(9, 'Prueba2', 'Esto es una prueba', '827480_if_fruiticons_buttons_watermelon_1844704.png', 25, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'semilla'),
(2, 'solucion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Imagen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Id`, `Nombre`, `Apellido`, `Usuario`, `Password`, `Imagen`) VALUES
(1, 'Ricardo', 'Cuellar', 'richi', 'richi', 'imagen.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cama_hidroponica`
--
ALTER TABLE `cama_hidroponica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdTipo` (`IdTipo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cama_hidroponica`
--
ALTER TABLE `cama_hidroponica`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id_cont` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `Producto_ibfk_1` FOREIGN KEY (`IdTipo`) REFERENCES `tipo` (`id_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
