-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2025 a las 04:38:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_hullka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_base_sectorial`
--

CREATE TABLE `tbl_base_sectorial` (
  `id` int(11) NOT NULL,
  `nombre_base` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_base_sectorial`
--

INSERT INTO `tbl_base_sectorial` (`id`, `nombre_base`) VALUES
(1, 'BASE SECTORIAL 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personal`
--

CREATE TABLE `tbl_personal` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) DEFAULT NULL,
  `apellidos` varchar(150) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `contrasena` varchar(200) DEFAULT NULL,
  `codigo_validacion` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `rol` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_personal`
--

INSERT INTO `tbl_personal` (`id`, `nombres`, `apellidos`, `correo`, `contrasena`, `codigo_validacion`, `estado`, `rol`) VALUES
(1, 'Carlos Smith', 'Martinez Meneses', 'cmartinez@hullka.com.pe', '$2y$10$ItRd3eZeXErbfjwe10Q6K.UZr7F7sm7WIMBBK02PaRRQFtm8E6ntO', '5185', 'activo', '1'),
(2, 'Mathias Gael', 'Martinez Meneses', 'mmartinez@diintec.com', '$2y$10$ItRd3eZeXErbfjwe10Q6K.UZr7F7sm7WIMBBK02PaRRQFtm8E6ntO', '6969', 'activo', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id` int(11) NOT NULL,
  `codigo_producto` varchar(450) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id`, `codigo_producto`, `nombre`, `fecha_creacion`) VALUES
(1, '7755139002809', 'Producto 1', '2025-06-02 13:47:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_socios`
--

CREATE TABLE `tbl_socios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(300) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `dni` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nombre_esposa` varchar(200) DEFAULT NULL,
  `numero_hijos` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `direccion_dni` varchar(200) DEFAULT NULL,
  `estatus` varchar(200) DEFAULT NULL,
  `base_sectorial` varchar(200) DEFAULT NULL,
  `tipo_sello` varchar(200) DEFAULT NULL,
  `nombre_hijo` varchar(450) DEFAULT NULL,
  `fecha_creacìon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_socios`
--

INSERT INTO `tbl_socios` (`id`, `nombres`, `apellidos`, `dni`, `fecha_nacimiento`, `nombre_esposa`, `numero_hijos`, `telefono`, `direccion_dni`, `estatus`, `base_sectorial`, `tipo_sello`, `nombre_hijo`, `fecha_creacìon`) VALUES
(1, 'Carlos Smith', 'Martinez Meneses', '70535185', '2000-10-21', 'Jazmin Moreno Arango', '2', '902192976', 'Av. Julio Cesar Tello 1041', 'Activo', 'BASE SECTORIAL 1', 'NOMBRE SELLO', 'Mathias Martinez', '2025-06-15 18:07:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_base_sectorial`
--
ALTER TABLE `tbl_base_sectorial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_socios`
--
ALTER TABLE `tbl_socios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_base_sectorial`
--
ALTER TABLE `tbl_base_sectorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_socios`
--
ALTER TABLE `tbl_socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
