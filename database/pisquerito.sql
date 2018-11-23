-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 14:45:52
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pisquerito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre`, `apellido`, `email`, `pass`) VALUES
(1, 'José Luis', 'Paquiyauri', 'joshephpm@gmail.com', '153426');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `cod_post` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `usuario`, `pass`, `direccion`, `ciudad`, `region`, `cod_post`, `correo`, `telefono`) VALUES
(1, 'José Luis', 'Paquiyauri', 'joshephpm', '153426', 'av la molina', 'la molina', 'lima', '15023', 'joshephp@gmail.com', '982544098'),
(2, 'Jorge ', 'Lopez', 'jorgelopez', '123456', 'av javier prado', 'la molina', 'lima', '15000', 'jjsldn@gmail.com', '985554488'),
(3, 'Jorge ', 'Lopez', 'jorgelopez', '123456', 'av javier prado', 'la molina', 'lima', '15000', 'jjsldn@gmail.com', '985554488');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `numpedido` varchar(20) NOT NULL,
  `motivo` varchar(20) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellido`, `email`, `telefono`, `numpedido`, `motivo`, `mensaje`) VALUES
(1, 'Jose Luis', 'Paquiyauri', 'joshephpm@gmail.com', 943207434, '1002', 'reclamo', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, '),
(3, 'Jose Luis', 'Paquiyauri', 'joshephpm@gmail.com', 943207434, '111025', 'reclamo', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_producto`, `nombre_img`) VALUES
(1, 2, 'vino1.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaproductos`
--

CREATE TABLE `listaproductos` (
  `id_listaproductos` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listaproductos`
--

INSERT INTO `listaproductos` (`id_listaproductos`, `id_producto`, `id_venta`) VALUES
(1, 2, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `precio` double NOT NULL,
  `descrip` text NOT NULL,
  `stock` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `descrip`, `stock`, `categoria`) VALUES
(2, 'Vino Tinto Ventisquero  750 ml', 54.99, 'Cuando pasamos por momentos de amplia felicidad en los que deseamos celebrar logros, satisfacciones, y congratularnos con ellos: la familia, así también con amigos, vecinos, etc. Para esos instantes maravillosos está el Vino Tinto Ventisquero Clásico Cabernet Sauvignon, la gran opción para unirse ese bello día.', 59, 'vino tinto'),
(3, 'Vino Tinto Las Moras Black Label 750 ml', 69.99, 'El Vino Tinto Ventisquero Clásico Cabernet Sauvignon, en boca tiene buen cuerpo y acidez equilibrada, con taninos maduros y un buen balance entre la fruta y la madera en su retrogusto. Anímate a comprarlo por la web de Wong Perú', 99, 'vino blanco'),
(5, 'Vino Tinto Reserva Marqués de Riscal  750 ml', 79, '- Cepa: Tempranillo 90%, Graciano 7% y Mazuelo 3%\r\n\r\n- Variedad: Tinto\r\n\r\n- Bodega Marqués de Riscal\r\n\r\n- Producción en España\r\n\r\n- Año de cosecha: 2014', 87, 'vinos'),
(12, 'Vino Tinto Reserva Marqués de Riscal  750 ml', 55.99, 'Desde unos viñedos ubicados a los pies de los Andes, Intapalka hace llegar a ti uno de los más deliciosos vinos que no puedes dejar de probar. Experimenta el expresivo aroma donde destacan notas cítricas del vino blanco Sauvignon blanc de Intipalka y vive muchos momentos totalmente únicos.', 89, 'vinos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptor`
--

CREATE TABLE `suscriptor` (
  `id_suscriptor` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suscriptor`
--

INSERT INTO `suscriptor` (`id_suscriptor`, `nombre`, `email`) VALUES
(6, 'Luis', 'Perez@hmail.com'),
(7, 'Jorge', 'Lopez@gmail.com'),
(8, 'Victor', 'victor@hola.com'),
(9, 'José', 'luis@usil.pe'),
(10, 'Raquel', 'informes@usil.pe'),
(11, 'Jorge1', 'jorge1355@gmail.com'),
(13, 'Edison', 'joshshnm@usil.pe'),
(14, 'Rosy', 'jsksjbcj@gmail.com'),
(15, 'Lidia', 'jdsahdoh@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tip_envio` varchar(30) NOT NULL,
  `forma_pago` varchar(50) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_cliente`, `estado`, `fecha`, `tip_envio`, `forma_pago`, `id_producto`) VALUES
(1, 1, 'en proceso', '2018-11-12 01:00:32', 'normal', 'tarjeta de crédito', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `listaproductos`
--
ALTER TABLE `listaproductos`
  ADD PRIMARY KEY (`id_listaproductos`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  ADD PRIMARY KEY (`id_suscriptor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_producto` (`id_producto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `listaproductos`
--
ALTER TABLE `listaproductos`
  MODIFY `id_listaproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  MODIFY `id_suscriptor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `listaproductos`
--
ALTER TABLE `listaproductos`
  ADD CONSTRAINT `listaproductos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `listaproductos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
