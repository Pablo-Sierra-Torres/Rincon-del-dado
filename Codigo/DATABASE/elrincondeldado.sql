-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2022 a las 12:48:36
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elrincondeldado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `IDComentarios` int(11) NOT NULL,
  `Usuarios_IDUsuarios` int(11) NOT NULL,
  `Texto` varchar(5000) DEFAULT NULL,
  `Valoracion` int(11) DEFAULT NULL,
  `Dia` datetime DEFAULT NULL,
  `Hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `IDCompra` int(11) NOT NULL,
  `Usuarios_IDUsuarios` int(11) NOT NULL,
  `Productos_Nombre` varchar(500) NOT NULL,
  `Dia` datetime DEFAULT NULL,
  `Hora` datetime DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Nombre` varchar(500) NOT NULL,
  `Descripcion` varchar(5000) DEFAULT NULL,
  `Imagen` varchar(500) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Categoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `IDReservas` int(11) NOT NULL,
  `Usuarios_IDUsuarios` int(11) NOT NULL,
  `Dia` datetime DEFAULT NULL,
  `Hora` datetime DEFAULT NULL,
  `Titular` varchar(45) DEFAULT NULL,
  `Participantes` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IDUsuarios` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `CodPos` varchar(5) DEFAULT NULL,
  `Poblacion` varchar(45) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Telefijo` varchar(9) DEFAULT NULL,
  `Telemovil` varchar(9) DEFAULT NULL,
  `Notificaciones` varchar(1) DEFAULT NULL,
  `ImagenUsuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUsuarios`, `Nombre`, `Apellidos`, `Correo`, `Pass`, `CodPos`, `Poblacion`, `Direccion`, `Telefijo`, `Telemovil`, `Notificaciones`, `ImagenUsuario`) VALUES
(1, 'admin', 'admin', 'superusuario@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '28015', 'Madrid', 'Calle de la Esperanza', '913456367', '623456723', '0', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`IDComentarios`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IDCompra`,`Usuarios_IDUsuarios`,`Productos_Nombre`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`IDReservas`,`Usuarios_IDUsuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `IDComentarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `IDCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `IDReservas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IDUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
