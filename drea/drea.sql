-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-03-2023 a las 14:32:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `drea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `DNI` int(11) NOT NULL,
  `Nombres` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Establecimiento` varchar(45) DEFAULT NULL,
  `Cargo` varchar(100) DEFAULT NULL,
  `TipoServidor` varchar(100) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`DNI`, `Nombres`, `Apellidos`, `FechaNacimiento`, `Establecimiento`, `Cargo`, `TipoServidor`, `Celular`, `Correo`, `Direccion`) VALUES
(12345678, 'Leydyyyyy', 'Marlene Marlene', '1999-06-15', 'Colegio Rosario', NULL, NULL, '987564123', 'macu@gmail.com', NULL),
(48387777, 'Sumilda', 'Bengolea Damian', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48388711, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388712, 'Estefany', 'Davalos Vedia', '1996-09-04', '0071 CEPED DE COTARMA DISTANCIA', 'DOCENTE EST. II', ' DOCENTE NOMBRADO', NULL, NULL, NULL),
(48388713, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388714, 'Jhon', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388715, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388717, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388720, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388723, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388724, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388725, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388730, 'Marle', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL),
(48388777, 'Carla', 'Davalos Vedia', '1996-09-04', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE `establecimiento` (
  `Codmodular` int(11) NOT NULL,
  `Ugel` varchar(100) NOT NULL,
  `NombreEstablecimiento` varchar(200) DEFAULT NULL,
  `Nivel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`Codmodular`, `Ugel`, `NombreEstablecimiento`, `Nivel`) VALUES
(765432, 'Cotabambas', 'Cotabambas', 'primaria'),
(985421, 'Andahuaylas', 'Andahuaylas', 'Secundaria'),
(12345678, 'Abancay', 'Abancay', 'Secundaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `haberes_descuentos`
--

CREATE TABLE `haberes_descuentos` (
  `Basico` double DEFAULT NULL,
  `Personal` double DEFAULT NULL,
  `Diferencial` double DEFAULT NULL,
  `Familiar` double DEFAULT NULL,
  `Contrato` double DEFAULT NULL,
  `BonEsp` double DEFAULT NULL,
  `IGV` double DEFAULT NULL,
  `DS065` double DEFAULT NULL,
  `DL26504` double DEFAULT NULL,
  `DU90` double DEFAULT NULL,
  `DU073` double DEFAULT NULL,
  `DU011` double DEFAULT NULL,
  `SNP` double DEFAULT NULL,
  `DerraMag` double DEFAULT NULL,
  `SubcafCus` double DEFAULT NULL,
  `DL20530` double DEFAULT NULL,
  `DL19990` double DEFAULT NULL,
  `FONAVI` double DEFAULT NULL,
  `DOCENTE_DNI` int(11) NOT NULL,
  `ESTABLECIMIENTO_Codmodular` int(11) NOT NULL,
  `Fecha` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `haberes_descuentos`
--

INSERT INTO `haberes_descuentos` (`Basico`, `Personal`, `Diferencial`, `Familiar`, `Contrato`, `BonEsp`, `IGV`, `DS065`, `DL26504`, `DU90`, `DU073`, `DU011`, `SNP`, `DerraMag`, `SubcafCus`, `DL20530`, `DL19990`, `FONAVI`, `DOCENTE_DNI`, `ESTABLECIMIENTO_Codmodular`, `Fecha`, `id`) VALUES
(86.67, 1, 1, 23, 1, 100, 10, 1, 22, 23, 22, 12, 1, 1, 1, 1, 1, 1, 48388712, 12345678, '', 12),
(86.67, 1, 1, 23, 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 48387777, 12345678, '2022-09', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('macu05b@gmail.com', '$2y$10$nWcE4qbDwdw3FSC.UIIJk.AiWNsqiTrOnst57ktdRpHhHsqo5eCyW', '2023-03-07 18:33:09');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rady Rady ', 'macu05b@gmail.com', NULL, '$2y$10$RdVuBhpdcsYOmrff/IvXo.NdMnVcPmDn6Gjb/vHLgYmNWeEFclBKO', NULL, '2022-10-08 20:29:56', '2022-10-08 20:29:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`Codmodular`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `haberes_descuentos`
--
ALTER TABLE `haberes_descuentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_HABERES_DESCUENTOS_DOCENTE` (`DOCENTE_DNI`),
  ADD KEY `fk_HABERES_DESCUENTOS_ESTABLECIMIENTO1` (`ESTABLECIMIENTO_Codmodular`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `haberes_descuentos`
--
ALTER TABLE `haberes_descuentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `haberes_descuentos`
--
ALTER TABLE `haberes_descuentos`
  ADD CONSTRAINT `fk_HABERES_DESCUENTOS_DOCENTE` FOREIGN KEY (`DOCENTE_DNI`) REFERENCES `docente` (`DNI`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_HABERES_DESCUENTOS_ESTABLECIMIENTO1` FOREIGN KEY (`ESTABLECIMIENTO_Codmodular`) REFERENCES `establecimiento` (`Codmodular`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
