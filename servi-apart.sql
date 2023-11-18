-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2023 a las 03:05:16
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
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `novedad_vehiculo`
--

INSERT INTO `novedad_vehiculo` (`id_nov`, `placa`, `novedad`, `identificacion`, `fecha_rev`, `foto`) VALUES
(6, 'NJI164', 'Ventana de conductor abierta', 123456879, '2023-10-30 18:17:29', NULL),
(7, 'NUI189', 'luz trasera fragmentada', 123456879, '2023-10-30 18:18:26', NULL),
(9, 'MDO89Y', 'llanta trasera pinchada', 123456879, '2023-10-30 18:21:08', NULL),
(10, 'JYP10L', 'rayon en el costado derecho', 123456879, '2023-10-30 18:21:52', NULL),
(12, 'KJH654', 'sin la tapa de gasolina', 123456879, '2023-10-30 18:24:07', NULL),
(13, 'JAD231', 'aboyadura en la parte trasera del vehiculo', 123456879, '2023-10-30 18:25:05', NULL);

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

--
-- Volcado de datos para la tabla `paqueteria`
--

INSERT INTO `paqueteria` (`id`, `usuario`, `remitente`, `fecha`) VALUES
(6, 231, 'sas group', '2023-10-17'),
(7, 999, 'apple', '2023-11-03'),
(8, 999, 'gropu', '2023-11-03'),
(9, 999, 'gali', '2023-11-03'),
(10, 999, 'pooo', '2023-11-03'),
(11, 999, 'perra', '2023-11-03'),
(12, 999, 'bebi', '2023-11-03'),
(13, 999, 'bebi', '2023-11-03'),
(14, 999, 'punto', '2023-11-03');

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
(31, 999, '2023-11-30', '14:59:00', '03:00:00', 44, 500, 'Taller de arte'),
(32, 999, '2023-11-14', '23:59:00', '03:00:00', 789, 487, 'Presentación teatral'),
(33, 999, '2023-11-25', '21:02:00', '03:00:00', 789, 987, 'Baby shower'),
(34, 654321, '2023-11-26', '13:48:00', '03:00:00', 1000, 2000, 'Otro');

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
(1, 'CC', 'Administrador', 'Cuenta', 'administrador@gmail.com', '00000000', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', NULL, '', ''),
(123, 'CC', 'Residente', 'Cuenta', 'residente@gmail.com', '0000000000000', '202cb962ac59075b964b07152d234b70', 'Residente', 'Activo', NULL, 'A', '501'),
(231, 'CC', 'admin', 'admin', 'admin@gmail.com', '321', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', '../Uploads/Usuariospng-clipart-service-information-business-organization-management-administrator-miscellaneous-face.png', '1', '101'),
(321, 'CC', 'Guarda', 'Cuenta', 'guardaseguridad@gmail.com', '0000', '202cb962ac59075b964b07152d234b70', 'Seguridad', 'Activo', NULL, '', ''),
(999, 'CC', 'ronald', 'rodriguez', 'ronal@gmail.com', '222222', '202cb962ac59075b964b07152d234b70', 'Residente', 'Activo', NULL, '4', 'b-23'),
(4546, 'CC', 'antonio', 'Cortés', 'facortes839@soy.sena.edu.co', '456879', '4546', 'Administrador', 'Activo', '../Uploads/Usuarios/', '', ''),
(35354, 'CE', 'Andres', 'garzon', 'garzon@gmail.com', '3194564165', '35354', 'Residente', 'Activo', '../Uploads/Usuarios/3.jfif', 'B', '609'),
(354534, 'CC', 'angel', 'gallardo', 'gallardo@gmail.com', '318354352', '354534', 'Residente', 'Activo', '../Uploads/Usuarios/5.jfif', 'c', '701'),
(654321, 'PASAPORTE', 'Nicki', 'Nicole', 'nicole@gmail.com', '534378343234', 'c33367701511b4f6020ec61ded352059', 'Residente', 'Activo', '../Uploads/Usuarios/ni.jpg', 'a', '502'),
(6456456, 'CC', 'Franklin', 'GOMEZ', 'enri@gmail.com', '456456', '6456456', 'Residente', 'Activo', '../Uploads/Usuarios/', 'C', '32'),
(123456879, 'CC', 'Johan Stiven ', 'castañeda', 'castanedapaola539@gmail.com', '31941', '97b290acab82d5937fb87a28b06181a3', 'Seguridad', 'Activo', '../Uploads/Usuarios/Plantilla-Foto-Nota.jpg', NULL, NULL),
(321654987, 'PASAPORTE', 'Manuel', 'Turizo', 'turizo@gmailc.om', '316163', 'd1b2cc725d846f0460ff290c60925070', 'Residente', 'Activo', '../Uploads/Usuarios/ma.png', 'g', '101'),
(537837838, 'CC', 'luis', 'eduardo', 'eduardo@gmail.com', '31615', '537837838', '', 'Activo', '../Uploads/Usuarios/2.jfif', NULL, NULL),
(563453783, 'CC', 'miguel', 'lopez', 'lopez@gmail.com', '38464652', '563453783', 'Residente', 'Pendiente', '../Uploads/Usuarios/6.jfif', 'c', '245'),
(2147483647, 'PASAPORTE', 'carlos', 'alberto', 'alberto@gmail.com', '3149848', '37837833453', '', 'Activo', '../Uploads/Usuarios/1.jfif', NULL, NULL);

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
(563453783, 'JAD231', 'chevrolet', 'Aveo', 2010, '2023-10-30 18:03:32', '../Uploads/vehiculos/1200px-07_Chevrolet_Aveo.jpg', '../Uploads/vehiculos/aveo.png', '../Uploads/vehiculos/1200px-07_Chevrolet_Aveo.jpg', '../Uploads/vehiculos/kfz74363255_chevrolet-aveo-fv297wx-1.jpg', 'NA'),
(6456456, 'JYP10L', 'suzuki-motos', 'Gixxer 250', 2020, '2023-10-30 18:07:03', '../Uploads/vehiculos/373074099_6854829611245694_7728345865232265779_n.jpg', '../Uploads/vehiculos/376613450_6759346867448988_857412316125683335_n.jpg', '../Uploads/vehiculos/377142517_7133066106743679_6546180573538173479_n.jpg', '../Uploads/vehiculos/379925709_6791518704232916_5010015788712805100_n.jpg', 'NA'),
(123, 'KJH654', 'ford', 'Mustang', 2021, '2023-10-30 18:04:37', '../Uploads/vehiculos/20190420-FORD-MUSTANG-HIGH-PERFORMANCE-PACKAGE-2020-2.jpg', '../Uploads/vehiculos/20190420-FORD-MUSTANG-HIGH-PERFORMANCE-PACKAGE-2020-5.jpg', '../Uploads/vehiculos/C4owTPPOhKCYMAZ.jpg', '../Uploads/vehiculos/ford_mustang_36-1440x960.jpg', 'NA'),
(999, 'MDO89Y', 'royal-enfield', 'Himalayan', 2022, '2023-10-30 18:08:14', '../Uploads/vehiculos/385038190_10229709550101568_6522253390091800740_n.jpg', '../Uploads/vehiculos/385066547_10229709549821561_8669995821190450946_n.jpg', '../Uploads/vehiculos/385776850_10229709550381575_2953303067214096847_n.jpg', '../Uploads/vehiculos/385905058_10229709550861587_2624138796443913553_n.jpg', 'NA'),
(231, 'NJI164', 'chevrolet', 'Camaro', 2018, '2023-10-30 18:13:53', '../Uploads/vehiculos/descarga (1).jpg', '../Uploads/vehiculos/descarga (2).jpg', '../Uploads/vehiculos/descarga (3).jpg', '../Uploads/vehiculos/aaaaaaaa.jpeg', 'B12'),
(231, 'NUI189', 'toyota', 'Hilux', 2009, '2023-10-30 18:09:22', '../Uploads/vehiculos/387051147_10161032564347829_5498429313744374518_n.jpg', '../Uploads/vehiculos/387149993_10161032563542829_5955634481596939495_n.jpg', '../Uploads/vehiculos/387815411_10161032564397829_3618727748125337355_n.jpg', '../Uploads/vehiculos/toyota_hilux_2018_diesel_toyota_hilux_2018_automatica_4x4_full_28_7770127685556873237.jpg', 'NA'),
(321654987, 'XDL458', 'jeep', 'Wrangler', 2020, '2023-10-30 18:05:52', '../Uploads/vehiculos/118648004_324394212337259_463587677140842316_n.jpg', '../Uploads/vehiculos/118744016_324394219003925_6714623843598140147_n.jpg', '../Uploads/vehiculos/118788046_324394205670593_3565358998563215441_n.jpg', '../Uploads/vehiculos/118805529_324394202337260_8295620494356773503_n.jpg', 'NA');

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
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
