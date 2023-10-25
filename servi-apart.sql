-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 05:20:30
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
  `fecha_rev` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `novedad_vehiculo`
--

INSERT INTO `novedad_vehiculo` (`id_nov`, `placa`, `novedad`, `identificacion`, `fecha_rev`) VALUES
(3, 'AIO654', 'rayon en el lado izquierdo del automovil', 537837838, '2023-09-19 14:19:59'),
(4, 'eee111', 'fuga de aceite', 537837838, '2023-09-19 14:19:59'),
(5, 'QRP456', 'llanta pinchada', 2147483647, '2023-09-19 14:19:59');

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
(6, 231, 'sas group', '2023-10-17');

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
  `mesas` int(11) NOT NULL,
  `sillas` int(11) NOT NULL,
  `tipo_evento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `reserva_salon`
--

INSERT INTO `reserva_salon` (`id_reserva`, `identificacion`, `dia_reserva`, `hora_inicio`, `hora_finalizacion`, `mesas`, `sillas`, `tipo_evento`) VALUES
(15, 321654987, '2023-10-17', '15:43:00', '03:00:00', 56, 54, ''),
(17, 231, '2023-10-24', '11:34:00', '03:00:00', 56, 56, ''),
(18, 654321, '2023-10-28', '13:04:00', '03:00:00', 1, 1, ''),
(19, 563453783, '2023-10-26', '12:13:00', '03:00:00', 2, 2, ''),
(20, 563453783, '2023-10-07', '16:10:00', '03:00:00', 3, 3, ''),
(21, 231, '2023-10-29', '15:11:00', '03:00:00', 22, 22, '');

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
(231, 'CC', 'admin', 'admin', 'admin@gmail.com', '321', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', '../Uploads/Usuariospng-clipart-service-information-business-organization-management-administrator-miscellaneous-face.png', '1', '101'),
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
  `foto4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`identificacion`, `placa`, `marca`, `referencia`, `modelo`, `fecha`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
(6456456, 'AIO654', 'chevrolet', 'AVEO', 2010, '2023-09-06 00:00:00', '../Uploads/vehiculos/8.jfif', '../Uploads/vehiculos/9.jfif', '../Uploads/vehiculos/10.jfif', '../Uploads/vehiculos/11.jfif'),
(231, 'eee111', 'nissan', 'explores', 35435, '2023-09-06 00:00:00', '../Uploads/vehiculos/f.jpg', '../Uploads/vehiculos/', '../Uploads/vehiculos/', '../Uploads/vehiculos/'),
(231, 'PPP123', 'chevrolet', 'Vitara', 2008, '2023-10-01 17:13:38', '../Uploads/vehiculos/10-770x578.jpg', '../Uploads/vehiculos/', '../Uploads/vehiculos/', '../Uploads/vehiculos/'),
(354534, 'QRP456', 'mazda', 'CR5', 2023, '2023-09-08 00:00:00', '../Uploads/vehiculos/20.jfif', '../Uploads/vehiculos/21.jfif', '../Uploads/vehiculos/22.jfif', '../Uploads/vehiculos/23.jfif');

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
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
