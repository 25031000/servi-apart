-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2023 a las 04:46:17
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
-- Base de datos: `servi-apart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_salon`
--

CREATE TABLE `inventario_salon` (
  `id_inv` int(11) NOT NULL,
  `num_sillas` int(11) NOT NULL,
  `num_mesas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad_vehiculo`
--

CREATE TABLE `novedad_vehiculo` (
  `id_nov` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `novedad` varchar(500) DEFAULT NULL,
  `identificacion` int(11) NOT NULL,
  `fecha_rev` datetime NOT NULL DEFAULT current_timestamp(),
  `fotoR` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `novedad_vehiculo`
--

INSERT INTO `novedad_vehiculo` (`id_nov`, `placa`, `novedad`, `identificacion`, `fecha_rev`, `fotoR`) VALUES
(17, 'BXI558', 'Llanta trasera derecha pinchada', 1022352265, '2023-11-23 22:19:32', '../Uploads/novedades/llanta-pinchada.jpg'),
(18, 'KJU66P', 'La motocicleta no se encuentra en el estacionamiento adecuado.', 1022352265, '2023-11-23 22:23:15', '../Uploads/novedades/'),
(19, 'LIO748', 'El carro tiene un rayon en el costado izquierdo', 1000056356, '2023-11-23 22:26:15', '../Uploads/novedades/Cómo reducir los rayones a un carro.jpg'),
(20, 'MNI96P', 'Rayon en el guardabarros delantero', 1000056356, '2023-11-23 22:27:50', '../Uploads/novedades/2019-10-10-para-quitar-los-rayones-en-la-moto-01.jpg'),
(21, 'PKE358', 'Puerta de conductor abierta', 1065898452, '2023-11-23 22:29:29', '../Uploads/novedades/'),
(22, 'RAY658', 'Vidrio fragmentado', 1065898452, '2023-11-23 22:31:19', '../Uploads/novedades/2336592.jpg'),
(23, 'UGT189', 'El vehiculo está botando aceite constantemente', 1065898452, '2023-11-23 22:32:26', '../Uploads/novedades/cárter-aceite-dañado.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paqueteria`
--

CREATE TABLE `paqueteria` (
  `id` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `remitente` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id_peticion` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publi` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `hora` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id_publi`, `titulo`, `descripcion`, `fecha`, `hora`) VALUES
(3, 'Agua', 'El dia de hoy por temas de acueducto tendremos problemas con tema de agua, por lo tanto no tendremos este servicio durante las 8:00 pm a 10:00 pm, muchas gracias por su atencion. ', '2023-09-14', '00:00:00'),
(9, 'Remodelacion en el edificio', 'Se observaron problemas en la red electrica', '2023-09-19', '00:00:00'),
(10, 'Fuga de gas', 'Fuga de gas en el apartamento 601-torre 5', '2023-09-19', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_salon`
--

CREATE TABLE `reserva_salon` (
  `id_reserva` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `dia_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_finalizacion` time NOT NULL,
  `mesas` int(10) NOT NULL,
  `sillas` int(10) NOT NULL,
  `tipo_evento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `reserva_salon`
--

INSERT INTO `reserva_salon` (`id_reserva`, `identificacion`, `dia_reserva`, `hora_inicio`, `hora_finalizacion`, `mesas`, `sillas`, `tipo_evento`) VALUES
(35, 11105687, '2023-11-30', '15:01:00', '03:00:00', 14, 25, 'Matrimonio'),
(36, 11105687, '2023-12-08', '15:00:00', '03:00:00', 12, 30, 'Baby shower'),
(37, 11105687, '2023-12-10', '15:00:00', '03:00:00', 13, 30, 'Aniversario'),
(38, 1005689221, '2023-12-09', '12:39:00', '03:00:00', 14, 25, 'Taller de arte'),
(39, 1005689221, '2023-12-19', '18:00:00', '03:00:00', 13, 35, 'Primera comunion'),
(40, 1005689221, '2023-12-17', '00:40:00', '03:00:00', 10, 30, 'Expocion artesanias'),
(41, 1025689451, '2023-12-12', '00:00:00', '03:00:00', 8, 20, 'Baby shower'),
(42, 1025689451, '2023-11-15', '16:00:00', '03:00:00', 10, 25, 'Reunion comunitaria'),
(43, 1025689451, '2023-12-15', '16:00:00', '03:00:00', 6, 12, 'Baby shower'),
(44, 1065984556, '2023-12-02', '14:00:00', '03:00:00', 10, 25, 'Expocion artesanias'),
(45, 1065984556, '2023-12-03', '16:00:00', '03:00:00', 13, 30, 'Fiesta de cumpleaños'),
(46, 1065984556, '2023-12-07', '19:00:00', '03:00:00', 15, 35, 'Presentacion teatral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `identificacion` int(11) NOT NULL,
  `tipo_doc` enum('CC','CE','PASAPORTE') NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `rol` enum('Residente','Administrador','Seguridad') NOT NULL,
  `estado` enum('Activo','Pendiente') DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `torre` varchar(15) DEFAULT NULL,
  `apartamento` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `tipo_doc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `torre`, `apartamento`) VALUES
(11105687, 'PASAPORTE', 'Laura Beatriz', 'Ramírez Soto', 'sotolau1090@gmail.com', '3115689474', 'c67d9df7e2ae67e043532bb0ce993777', 'Residente', 'Activo', '../Uploads/Usuarios/user6.jpg', 'A', '303'),
(1000056356, 'CC', 'Claudia Isabel', 'Torres Martínez', 'clauisabel1980@gmail.com', '3100156891', '0a98cf1edd627edc737b8e083cb14554', 'Seguridad', 'Activo', '../Uploads/Usuarios/user9.jpg', NULL, NULL),
(1005689221, 'CC', 'Santiago', 'Peralta Torres ', 'santiago901pe@gmail.com', '3224678954', '8c2d7eca06767ef7e484afdfc674ddce', 'Residente', 'Activo', '../Uploads/Usuarios/user2.jpg', 'B', '301'),
(1022352265, 'CC', 'Alejandro José', 'Pérez Ramírez', 'guardaseguridad@gmail.com', '3215689212', '2a460be978d0bfcfeb85c6698ba78e86', 'Seguridad', 'Activo', '../Uploads/Usuarios/user7.png', '', ''),
(1025689451, 'CC', 'Carlos Eduardo ', 'González Martinez', 'camartinezeduar1970@gmail.com', '3156894517', 'c6b6178da5cf1163374b7e5846b35a79', 'Residente', 'Activo', '../Uploads/Usuarios/user3.jpg', 'B', '102'),
(1056892568, 'CE', 'María Alejandra ', 'Herrera Torres', 'herreramaria876a@outlook.com', '3111456894', '12a62b0c967a5b44088cc789a60ab628', 'Residente', 'Activo', '../Uploads/Usuarios/user4.jpeg', 'A', '202'),
(1065898452, 'CC', 'Gabriel Andrés', 'Mendoza López', 'gabilopez987@hotmail.com', '3165256891', 'cff05c1be554757c2ae7b51a9a3e4a2b', 'Seguridad', 'Activo', '../Uploads/Usuarios/user8.jpg', NULL, NULL),
(1065984556, 'CC', 'Ana Carolina', 'López Mendoza', '09809anacarol@hotmail.com', '3205896521', '4914398a07630b3125c0f1f5cc9b2802', 'Residente', 'Activo', '../Uploads/Usuarios/user5.jpg', 'A', '102'),
(1264565423, 'CC', 'Carlos Eduardo', 'González Martínez', 'admin@gmail.com', '3156453223', '102c059187935f48de43e7060e0d0671', 'Administrador', 'Activo', '../Uploads/Usuariosuser10.jpg', NULL, NULL),
(1876219012, 'CC', 'Juan Andrés', 'Ramirez Orejuela', 'juananra012@gmail.com', '3245678912', 'eb87cad271826e0a25a5b016548e9f35', 'Residente', 'Activo', '../Uploads/Usuarios/user1.jpg', 'A', '201');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `identificacion` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `modelo` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `foto1` varchar(500) DEFAULT NULL,
  `foto2` varchar(200) DEFAULT NULL,
  `foto3` varchar(200) DEFAULT NULL,
  `foto4` varchar(200) DEFAULT NULL,
  `parqueadero` varchar(10) DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`identificacion`, `placa`, `marca`, `referencia`, `modelo`, `fecha`, `foto1`, `foto2`, `foto3`, `foto4`, `parqueadero`) VALUES
(11105687, 'BXI558', 'chevrolet', 'Camaro', 2019, '2023-11-23 21:04:36', '../Uploads/vehiculos/aaaaaaaa.jpeg', '../Uploads/vehiculos/descarga (1).jpg', '../Uploads/vehiculos/descarga (2).jpg', '../Uploads/vehiculos/descarga (3).jpg', 'A4'),
(1056892568, 'KJU66P', 'suzuki-motos', 'Gixxer 250', 2022, '2023-11-23 20:58:36', '../Uploads/vehiculos/373074099_6854829611245694_7728345865232265779_n.jpg', '../Uploads/vehiculos/376613450_6759346867448988_857412316125683335_n.jpg', '../Uploads/vehiculos/377142517_7133066106743679_6546180573538173479_n.jpg', '../Uploads/vehiculos/379925709_6791518704232916_5010015788712805100_n.jpg', 'B5'),
(11105687, 'LIO748', 'ford', 'Mustang', 2020, '2023-11-23 20:54:45', '../Uploads/vehiculos/20190420-FORD-MUSTANG-HIGH-PERFORMANCE-PACKAGE-2020-2.jpg', '../Uploads/vehiculos/20190420-FORD-MUSTANG-HIGH-PERFORMANCE-PACKAGE-2020-5.jpg', '../Uploads/vehiculos/C4owTPPOhKCYMAZ.jpg', '../Uploads/vehiculos/ford_mustang_36-1440x960.jpg', 'A7'),
(1025689451, 'MNI96P', 'royal-enfield', 'Himalayan', 2018, '2023-11-23 21:00:56', '../Uploads/vehiculos/385038190_10229709550101568_6522253390091800740_n.jpg', '../Uploads/vehiculos/385066547_10229709549821561_8669995821190450946_n.jpg', '../Uploads/vehiculos/385776850_10229709550381575_2953303067214096847_n.jpg', '../Uploads/vehiculos/385905058_10229709550861587_2624138796443913553_n.jpg', 'B3'),
(1065984556, 'PKE358', 'jeep', 'Wrangler', 2021, '2023-11-23 20:57:04', '../Uploads/vehiculos/118648004_324394212337259_463587677140842316_n.jpg', '../Uploads/vehiculos/118744016_324394219003925_6714623843598140147_n.jpg', '../Uploads/vehiculos/118788046_324394205670593_3565358998563215441_n.jpg', '../Uploads/vehiculos/118805529_324394202337260_8295620494356773503_n.jpg', 'B2'),
(1005689221, 'RAY658', 'toyota', 'Hilux', 2015, '2023-11-23 21:02:34', '../Uploads/vehiculos/387051147_10161032564347829_5498429313744374518_n.jpg', '../Uploads/vehiculos/387149993_10161032563542829_5955634481596939495_n.jpg', '../Uploads/vehiculos/387815411_10161032564397829_3618727748125337355_n.jpg', '../Uploads/vehiculos/toyota_hilux_2018_diesel_toyota_hilux_2018_automatica_4x4_full_28_7770127685556873237.jpg', 'A2'),
(1876219012, 'UGT189', 'chevrolet', 'Aveo', 2008, '2023-11-23 20:53:40', '../Uploads/vehiculos/1200px-07_Chevrolet_Aveo.jpg', '../Uploads/vehiculos/aveo.png', '../Uploads/vehiculos/kfz74363255_chevrolet-aveo-fv297wx-1.jpg', '../Uploads/vehiculos/aveoo.jpg', 'A10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario_salon`
--
ALTER TABLE `inventario_salon`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indices de la tabla `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  ADD PRIMARY KEY (`id_nov`),
  ADD KEY `placa` (`placa`),
  ADD KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paqueteria_ibfk_1` (`usuario`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id_peticion`),
  ADD KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publi`);

--
-- Indices de la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `reserva_salon_ibfk_1` (`identificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `identificacion` (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id_peticion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  ADD CONSTRAINT `novedad_vehiculo_ibfk_1` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`) ON DELETE CASCADE,
  ADD CONSTRAINT `novedad_vehiculo_ibfk_2` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`) ON DELETE CASCADE;

--
-- Filtros para la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
  ADD CONSTRAINT `paqueteria_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`identificacion`);

--
-- Filtros para la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD CONSTRAINT `peticiones_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);

--
-- Filtros para la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`
  ADD CONSTRAINT `reserva_salon_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
