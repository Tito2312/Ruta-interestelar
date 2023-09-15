-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2023 a las 23:53:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ruta interestelar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE `asesor` (
  `id_asesor` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `tel` bigint(15) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asesor`
--

INSERT INTO `asesor` (`id_asesor`, `Nombre`, `tel`, `Email`) VALUES
(1, 'Sebastian Valencia', 3185459784, 'sebas89@gmail.com'),
(2, 'Laurel Gil', 3245628541, 'Laurelgil65@gmail.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo paquetes`
--

CREATE TABLE `catalogo paquetes` (
  `id_paquete` int(20) NOT NULL,
  `Nombre_paquete` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo paquetes`
--

INSERT INTO `catalogo paquetes` (`id_paquete`, `Nombre_paquete`) VALUES
(78962, 'San Andres'),
(89456, 'Cartagena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cc` int(15) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `direccion` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo_electronico` varchar(20) NOT NULL,
  `id_asesor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cc`, `nombre`, `direccion`, `apellido`, `telefono`, `correo_electronico`, `id_asesor`) VALUES
(838547892, 'Santiago ', 'B/Manzanar', 'Benitez', '3248795642', 'BeniSanti56@gmail.co', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_electronica`
--

CREATE TABLE `factura_electronica` (
  `id_factura` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `id_paquete` int(20) NOT NULL,
  `cc` int(15) NOT NULL,
  `id_asesor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura_electronica`
--

INSERT INTO `factura_electronica` (`id_factura`, `fecha`, `id_paquete`, `cc`, `id_asesor`) VALUES
(7654, '2023-05-15', 89456, 838547892, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta catalogo`
--

CREATE TABLE `venta catalogo` (
  `id_venta` int(20) NOT NULL,
  `id_factura` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta catalogo`
--

INSERT INTO `venta catalogo` (`id_venta`, `id_factura`) VALUES
(3214, 7654);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id_asesor`);

--
-- Indices de la tabla `catalogo paquetes`
--
ALTER TABLE `catalogo paquetes`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cc`),
  ADD KEY `id_asesor` (`id_asesor`);

--
-- Indices de la tabla `factura_electronica`
--
ALTER TABLE `factura_electronica`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_paquete` (`id_paquete`),
  ADD KEY `id_cliente` (`cc`),
  ADD KEY `id_asesor` (`id_asesor`);

--
-- Indices de la tabla `venta catalogo`
--
ALTER TABLE `venta catalogo`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_factura` (`id_factura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cc` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=838547893;

--
-- AUTO_INCREMENT de la tabla `factura_electronica`
--
ALTER TABLE `factura_electronica`
  MODIFY `id_factura` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7655;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_asesor`) REFERENCES `asesor` (`id_asesor`);

--
-- Filtros para la tabla `factura_electronica`
--
ALTER TABLE `factura_electronica`
  ADD CONSTRAINT `factura_electronica_ibfk_1` FOREIGN KEY (`cc`) REFERENCES `cliente` (`cc`),
  ADD CONSTRAINT `factura_electronica_ibfk_2` FOREIGN KEY (`id_asesor`) REFERENCES `asesor` (`id_asesor`),
  ADD CONSTRAINT `factura_electronica_ibfk_3` FOREIGN KEY (`id_paquete`) REFERENCES `catalogo paquetes` (`id_paquete`);

--
-- Filtros para la tabla `venta catalogo`
--
ALTER TABLE `venta catalogo`
  ADD CONSTRAINT `venta catalogo_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `factura_electronica` (`id_factura`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
