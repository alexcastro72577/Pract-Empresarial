-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 02:13:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoDoku`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridades`
--

CREATE TABLE `autoridades` (
  `id` int(11) NOT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NOMBREAUTORIDAD` char(100) COLLATE utf8_spanish_ci NOT NULL,
  `CARGO` char(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `GENEROAUTORIDAD` char(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DPTO` char(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FACULTAD` char(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autoridades`
--

INSERT INTO `autoridades` (`id`, `ID_CARRERA`, `NOMBREAUTORIDAD`, `CARGO`, `GENEROAUTORIDAD`, `DPTO`, `FACULTAD`, `updated_at`) VALUES
(1, 1, 'Ing. Ayoroa Cardozo Jose Richard', 'Director', 'Masculino', NULL, NULL, '2023-11-01 16:38:00'),
(2, 2, 'Lic. Calancha Navia Boris Marcelo', 'Director', 'Masculino', NULL, NULL, '2023-11-09 05:08:01'),
(3, NULL, 'Ing. Terrazas Lobo Juan', 'Decano', 'Masculino', NULL, 'Ciencias y Tecnología', '2023-11-09 05:08:03'),
(4, NULL, 'Lic. Villarroel Tapia Henrry Frank', 'Jefe', 'Masculino', 'Informática-Sistemas', NULL, '2023-11-09 05:08:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `ID_MATERIA` int(11) DEFAULT NULL,
  `NOMBRECARRERA` char(100) COLLATE utf8_spanish_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `ID_MATERIA`, `NOMBRECARRERA`, `updated_at`) VALUES
(1, 1, 'Ingeniería de Sistemas', '2023-11-01 16:38:00'),
(2, 2, 'Ingeniería Informática', '2023-11-09 05:08:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `NOMBREEST` char(100) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOEST` char(100) COLLATE utf8_spanish_ci NOT NULL,
  `GENERO` char(100) COLLATE utf8_spanish_ci NOT NULL,
  `CI` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `EXP` char(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `id` int(11) NOT NULL,
  `ANIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestiones`
--

CREATE TABLE `gestiones` (
  `ID_FECHA` int(11) DEFAULT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NUMGESTION` tinytext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `ID_ESTUDIANTE` int(11) DEFAULT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NUMMATERIAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_egreso`
--

CREATE TABLE `materias_egreso` (
  `id` int(11) NOT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NOMBMATEG` char(100) COLLATE utf8_spanish_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materias_egreso`
--

INSERT INTO `materias_egreso` (`id`, `ID_CARRERA`, `NOMBMATEG`, `updated_at`) VALUES
(1, 1, 'Proyecto Final', '2023-11-01 16:38:00'),
(2, 2, 'Taller de Grado II', '2023-10-25 15:08:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_grado`
--

CREATE TABLE `proyectos_grado` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codCite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreProyecto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fecha` int(11) DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repositorio_documentos`
--

CREATE TABLE `repositorio_documentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `tipoDocumento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apellidosTutor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombresTutor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id`, `apellidosTutor`, `nombresTutor`, `titulo`, `genero`, `created_at`, `updated_at`) VALUES
(1, 'Acha Perez', 'Samuel', 'Ing.', 'Masculino', '2023-11-09 04:52:23', '2023-11-09 04:52:25'),
(2, 'Agreda Corrales', 'Luis', 'Ing.', 'Masculino', '2023-11-09 04:52:26', '2023-11-09 04:52:36'),
(3, 'Antezana Camacho', 'Marcelo', 'Ing.', 'Masculino', '2023-11-09 04:52:27', '2023-11-09 04:52:36'),
(4, 'Aparicio Yuja', 'Nancy Tatiana', 'Lic.', 'Femenino', '2023-11-09 04:52:28', '2023-11-09 04:52:37'),
(5, 'Ayoroa Cardozo', 'Jose Richard', 'Ing.', 'Masculino', '2023-11-09 04:52:29', '2023-11-09 04:52:38'),
(6, 'Blanco Coca', 'Maria Leticia', 'Lic.', 'Femenino', '2023-11-09 04:52:30', '2023-11-09 04:52:39'),
(7, 'Calancha Navia', 'Boris Marcelo', 'Lic.', 'Masculino', '2023-11-09 04:52:31', '2023-11-09 04:52:40'),
(8, 'Camacho Del Castillo', 'Indira', 'Lic.', 'Femenino', '2023-11-09 04:52:32', '2023-11-09 04:52:41'),
(9, 'Costas Jauregui', 'Vladimir', 'Ing.', 'Masculino', '2023-11-09 04:52:33', '2023-11-09 04:52:42'),
(10, 'Cussi Nicolas', 'Grover', 'Lic.', 'Masculino', '2023-11-09 04:52:33', '2023-11-09 04:52:43'),
(11, 'Escalera Fernandez', 'David', 'Lic.', 'Masculino', '2023-11-09 04:52:34', '2023-11-09 04:52:44'),
(12, 'Fernandez Guzman', 'Helder Octavio', 'Lic.', 'Masculino', '2023-11-09 04:52:15', '2023-11-09 04:52:18'),
(13, 'Fiorilo Lozada', 'Americo', 'Ph.D.', 'Masculino', '2023-11-09 04:51:34', '2023-11-09 04:51:35'),
(14, 'Flores Soliz', 'Juan Marcelo', 'Lic.', 'Masculino', '2023-11-09 04:53:42', '2023-11-09 04:53:43'),
(15, 'Flores Villarroel', 'Corina', 'Lic.', 'Femenino', '2023-11-09 04:54:29', '2023-11-09 04:54:30'),
(16, 'Garcia Molina', 'Juan Ruben', 'Ing.', 'Masculino', '2023-11-09 04:55:06', '2023-11-09 04:55:07'),
(17, 'Garcia Perez', 'Carmen Rosa', 'Lic.', 'Femenino', '2023-11-09 04:55:37', '2023-11-09 04:55:37'),
(18, 'Grilo Salvatierra', 'Esthela', 'Lic.', 'Femenino', '2023-11-09 04:56:04', '2023-11-09 04:56:04'),
(19, 'Jaldin Rosales', 'Kirt Rolando', 'Lic.', 'Masculino', '2023-11-09 04:56:37', '2023-11-09 04:56:37'),
(20, 'Laime Zapata', 'Valentin', 'Lic.', 'Masculino', '2023-11-09 04:57:03', '2023-11-09 04:57:03'),
(21, 'Manzur Soria', 'Carlos B.', 'Lic.', 'Masculino', '2023-11-09 04:57:36', '2023-11-09 04:57:37'),
(22, 'Montaño Quiroga', 'Victor Hugo', 'Lic.', 'Masculino', '2023-11-09 04:58:06', '2023-11-09 04:58:07'),
(23, 'Montecinos Choque', 'Marco Antonio', 'Lic.', 'Masculino', '2023-11-09 04:58:33', '2023-11-09 04:58:34'),
(24, 'Montoya Burgos', 'Yoni', 'Lic.', 'Masculino', '2023-11-09 04:58:58', '2023-11-09 04:58:59'),
(25, 'Orellana Araoz', 'Jorge', 'Ing.', 'Masculino', '2023-11-09 04:59:29', '2023-11-09 04:59:30'),
(26, 'Rodriguez Bilbao', 'Patricia', 'Lic.', 'Femenino', '2023-11-09 04:59:58', '2023-11-09 04:59:59'),
(27, 'Romero Rodriguez', 'Patricia', 'Lic.', 'Femenino', '2023-11-09 05:00:23', '2023-11-09 05:00:24'),
(28, 'Salazar Serrudo', 'Carla', 'Msc.', 'Femenino', '2023-11-09 05:00:49', '2023-11-09 05:00:49'),
(29, 'Torrico Bascope', 'Rosemary', 'Lic.', 'Femenino', '2023-11-09 05:01:13', '2023-11-09 05:01:13'),
(30, 'Ustariz Vargas', 'Hernan', 'Lic.', 'Masculino', '2023-11-09 05:01:40', '2023-11-09 05:01:40'),
(31, 'Vargas Colque', 'Aidee', 'Lic.', 'Femenino', '2023-11-09 05:02:03', '2023-11-09 05:02:04'),
(32, 'Vargas Peredo', 'Emir', 'Ing.', 'Masculino', '2023-11-09 05:02:25', '2023-11-09 05:02:25'),
(33, 'Villarroel Novillo', 'Jimmy', 'Ing.', 'Masculino', '2023-11-09 05:02:50', '2023-11-09 05:02:51'),
(34, 'Villarroel Tapia', 'Henrry Frank', 'Lic.', 'Masculino', '2023-11-09 05:03:21', '2023-11-09 05:03:22'),
(35, 'Zambrana Burgos', 'Jhomil', 'Ing.', 'Masculino', '2023-11-09 05:03:48', '2023-11-09 05:03:48'),
(36, 'Quiroga Ruiz', 'Juan Pablo', 'Ing.', 'Masculino', NULL, '2023-11-16 06:40:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$gBb2ve5fSBShrZcPWqTqMO/G3M9wTGF3mbPlobY7OX.cxoqNqZgsa', 'Administrador', NULL, NULL, NULL),
(2, 'Secretaria', 'user@gmail.com', NULL, '$2y$10$gBb2ve5fSBShrZcPWqTqMO/G3M9wTGF3mbPlobY7OX.cxoqNqZgsa', 'Usuario', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_TIENE` (`ID_CARRERA`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CORRESPONDE` (`ID_MATERIA`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestiones`
--
ALTER TABLE `gestiones`
  ADD KEY `FK_ESTA_EN` (`ID_FECHA`),
  ADD KEY `FK_PERTENECE` (`ID_CARRERA`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD KEY `FK_CONTIENE` (`ID_CARRERA`),
  ADD KEY `FK_POSEE` (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `materias_egreso`
--
ALTER TABLE `materias_egreso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CORRESPONDE2` (`ID_CARRERA`);

--
-- Indices de la tabla `proyectos_grado`
--
ALTER TABLE `proyectos_grado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_proyecto_grados_fechas` (`id_fecha`),
  ADD KEY `FK_proyecto_grados_estudiantes` (`id_estudiante`);

--
-- Indices de la tabla `repositorio_documentos`
--
ALTER TABLE `repositorio_documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repositorio__documentos_id_estudiante_foreign` (`id_estudiante`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `materias_egreso`
--
ALTER TABLE `materias_egreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyectos_grado`
--
ALTER TABLE `proyectos_grado`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `repositorio_documentos`
--
ALTER TABLE `repositorio_documentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autoridades`
--
ALTER TABLE `autoridades`
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carreras` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `FK_CORRESPONDE` FOREIGN KEY (`ID_MATERIA`) REFERENCES `materias_egreso` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `gestiones`
--
ALTER TABLE `gestiones`
  ADD CONSTRAINT `FK_ESTA_EN` FOREIGN KEY (`ID_FECHA`) REFERENCES `fechas` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `FK_PERTENECE` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carreras` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD CONSTRAINT `FK_CONTIENE` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carreras` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `FK_POSEE` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiantes` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `materias_egreso`
--
ALTER TABLE `materias_egreso`
  ADD CONSTRAINT `FK_CORRESPONDE2` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carreras` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `proyectos_grado`
--
ALTER TABLE `proyectos_grado`
  ADD CONSTRAINT `FK_proyecto_grados_estudiantes` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `FK_proyecto_grados_fechas` FOREIGN KEY (`id_fecha`) REFERENCES `fechas` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `repositorio_documentos`
--
ALTER TABLE `repositorio_documentos`
  ADD CONSTRAINT `repositorio__documentos_id_estudiante_foreign` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
