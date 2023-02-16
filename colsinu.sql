-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2023 a las 21:07:57
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colsinu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Carlos Villadiego', 'admin', 'admin123', 'Administrador', 1, '2018-02-06 17:25:57', '2023-02-15 14:23:05'),
(60, 'Eva Vargas', 'evae', 'eva123', 'Radicador', 0, '0000-00-00 00:00:00', '2023-02-16 05:30:25'),
(62, 'Ana Julio', 'anaj', '$2a$07$asxx54ahjppf45sd87a5au/h1MFU4KIhMn9rG8GdPuIbo0libbdou', 'Radicador', 0, '0000-00-00 00:00:00', '2023-02-16 05:30:48'),
(63, 'Franky Villadiego', 'fjvilladiego', '$2a$07$asxx54ahjppf45sd87a5auGbXatIj1eAxiXxoy8fM8E797q8J8zNm', 'Administrador', 0, '0000-00-00 00:00:00', '2023-02-16 05:02:10'),
(64, 'Richard Doaria', 'rdoria', '$2a$07$asxx54ahjppf45sd87a5auL6qXEp9WiLL//XhOnRT4IL8TJk0ngW6', 'Paramedico', 0, '0000-00-00 00:00:00', '2023-02-16 05:53:59'),
(65, 'Dayana Lopez', 'Dlopez', '$2a$07$asxx54ahjppf45sd87a5au1xp2cg.E5BkuaCrZmqfwG2HtCmhyuR2', 'Auxiliar', 0, '0000-00-00 00:00:00', '2023-02-16 20:05:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
