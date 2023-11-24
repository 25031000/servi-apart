-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 01:15:45
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
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
