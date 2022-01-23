-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-01-2022 a las 00:46:14
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cola_id` bigint(20) UNSIGNED DEFAULT NULL,
  `atencione_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `cola_id`, `atencione_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ricardo', 2, 2, NULL, '2022-01-24 01:38:47', NULL),
(2, 'Karla', 1, 2, NULL, '2022-01-24 01:38:07', NULL),
(3, 'Oswaldo', 1, 2, '2022-01-23 20:21:11', '2022-01-23 23:13:35', '2022-01-23 23:13:35'),
(4, 'oswaldo 3333', 2, 1, '2022-01-23 20:21:34', '2022-01-23 20:21:34', NULL),
(5, 'Karla', 2, 2, NULL, '2022-01-24 01:04:42', '2022-01-24 01:04:42'),
(6, 'Daniela', 1, 2, NULL, NULL, NULL),
(7, 'Yelitza', 2, 1, '2022-01-24 03:00:52', '2022-01-24 03:01:06', NULL),
(8, 'Oswaldo Jose', 2, 1, '2022-01-24 03:38:40', '2022-01-24 03:38:40', NULL),
(9, 'Oswaldo T. Maestre', 2, 1, '2022-01-24 03:38:54', '2022-01-24 03:38:54', NULL),
(10, 'Ricardo T. Maestre', 1, 1, '2022-01-24 03:39:07', '2022-01-24 03:39:07', NULL),
(11, 'Yela T. Marquez', 1, 1, '2022-01-24 03:39:20', '2022-01-24 03:39:20', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_cola_id_foreign` (`cola_id`),
  ADD KEY `usuarios_atencione_id_foreign` (`atencione_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_atencione_id_foreign` FOREIGN KEY (`atencione_id`) REFERENCES `atenciones` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `usuarios_cola_id_foreign` FOREIGN KEY (`cola_id`) REFERENCES `colas` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
