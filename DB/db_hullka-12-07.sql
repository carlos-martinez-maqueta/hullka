-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2025 a las 02:00:14
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
-- Estructura de tabla para la tabla `tbl_acopio_materia_prima`
--

CREATE TABLE `tbl_acopio_materia_prima` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `dni_socio` varchar(100) DEFAULT NULL,
  `productor` varchar(100) DEFAULT NULL,
  `base_sectorial` varchar(100) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `cantida_sacos` varchar(50) DEFAULT NULL,
  `kilos_brutos` varchar(50) DEFAULT NULL,
  `tara` varchar(50) DEFAULT NULL,
  `kilos_netos` varchar(50) DEFAULT NULL,
  `qq_netos` varchar(50) DEFAULT NULL,
  `rendimiento_fisico` varchar(50) DEFAULT NULL,
  `porcentaje_rendimiento` varchar(50) DEFAULT NULL,
  `segunda` varchar(50) DEFAULT NULL,
  `porcentaje_segunda` varchar(50) DEFAULT NULL,
  `descarte` varchar(50) DEFAULT NULL,
  `porcentaje_descarte` varchar(50) DEFAULT NULL,
  `cascara` varchar(50) DEFAULT NULL,
  `porcentaje_cascara` varchar(50) DEFAULT NULL,
  `humedad` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `taza` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_acopio_materia_prima`
--

INSERT INTO `tbl_acopio_materia_prima` (`id`, `codigo`, `dni_socio`, `productor`, `base_sectorial`, `tipo`, `cantida_sacos`, `kilos_brutos`, `tara`, `kilos_netos`, `qq_netos`, `rendimiento_fisico`, `porcentaje_rendimiento`, `segunda`, `porcentaje_segunda`, `descarte`, `porcentaje_descarte`, `cascara`, `porcentaje_cascara`, `humedad`, `fecha`, `taza`, `descripcion`, `marca`) VALUES
(10, 'CON-10', '70535185', 'Carlos Smith Martinez Meneses', '1', 'CON', '20', '1400', '5.00', '1395.00', '25.27', '262', '65.5', '49.3', '12.325', '8', '2', '80.70', '20.175', '14', '2025-07-11 17:36:14', NULL, NULL, NULL),
(11, 'ORG-11', '70535185', 'Carlos Smith Martinez Meneses', '1', 'ORG', '20', '1400', '5.00', '1395.00', '25.27', '262', '65.5', '49.3', '12.325', '8', '2', '80.70', '20.175', '15', '2025-07-11 17:52:24', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_almacenes`
--

CREATE TABLE `tbl_almacenes` (
  `id` int(11) NOT NULL,
  `nombre_almacen` varchar(200) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_base_sectorial`
--

CREATE TABLE `tbl_base_sectorial` (
  `id` int(11) NOT NULL,
  `nombre_base` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_base_sectorial`
--

INSERT INTO `tbl_base_sectorial` (`id`, `nombre_base`, `fecha`) VALUES
(1, 'BASE SECTORIAL 1', '2025-07-02 14:06:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_boletas`
--

CREATE TABLE `tbl_boletas` (
  `id` int(11) NOT NULL,
  `codigo_comprobante` varchar(50) DEFAULT NULL,
  `fecha_emision` datetime DEFAULT NULL,
  `forma_pago` varchar(100) DEFAULT NULL,
  `operacion_gravada` varchar(150) DEFAULT NULL,
  `igv` varchar(50) DEFAULT NULL,
  `total` varchar(150) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_boletas`
--

INSERT INTO `tbl_boletas` (`id`, `codigo_comprobante`, `fecha_emision`, `forma_pago`, `operacion_gravada`, `igv`, `total`, `estado`) VALUES
(1, 'B001-15', '2025-07-01 14:34:17', '2', '9.75', '1.75', '11.50', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clasificacion_taza`
--

CREATE TABLE `tbl_clasificacion_taza` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `puntaje` varchar(100) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_clasificacion_taza`
--

INSERT INTO `tbl_clasificacion_taza` (`id`, `marca`, `puntaje`, `fecha_creacion`) VALUES
(1, 'EJEMPLO MARCA', '85', '2025-07-11 13:33:08'),
(2, 'EEJMPLO 2', '79', '2025-07-11 13:37:28'),
(3, 'EEJMPLO 3', '78', '2025-07-11 13:38:16'),
(4, 'MATERIAL 2 EJEMPLO', '50', '2025-07-11 13:59:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_datos_valores`
--

CREATE TABLE `tbl_datos_valores` (
  `id` int(11) NOT NULL,
  `tara` varchar(150) DEFAULT NULL,
  `qq_netos` varchar(150) DEFAULT NULL,
  `muestraGeneral` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_datos_valores`
--

INSERT INTO `tbl_datos_valores` (`id`, `tara`, `qq_netos`, `muestraGeneral`) VALUES
(1, '0.25', '55.2', '400');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `ruc` varchar(50) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id`, `nombre`, `ruc`, `direccion`) VALUES
(1, 'HULLKA COFFE NOMBRE', '12345678910', 'DIRECCION DE PRUEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_pago`
--

CREATE TABLE `tbl_estado_pago` (
  `id` int(11) NOT NULL,
  `nombre_estado_pago` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_estado_pago`
--

INSERT INTO `tbl_estado_pago` (`id`, `nombre_estado_pago`, `estado`) VALUES
(1, 'Aceptado Sunat', 'activo'),
(2, 'Anulado en Sunat', 'activo'),
(3, 'Pendiente de envío', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estatus`
--

CREATE TABLE `tbl_estatus` (
  `id` int(11) NOT NULL,
  `nombre_estatus` varchar(100) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_estatus`
--

INSERT INTO `tbl_estatus` (`id`, `nombre_estatus`, `fecha_creacion`) VALUES
(1, 'activo', '2025-07-09 21:04:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE `tbl_facturas` (
  `id` int(11) NOT NULL,
  `codigo_comprobante` varchar(50) DEFAULT NULL,
  `fecha_emision` datetime DEFAULT NULL,
  `forma_pago` varchar(100) DEFAULT NULL,
  `operacion_gravada` varchar(100) DEFAULT NULL,
  `igv` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_facturas`
--

INSERT INTO `tbl_facturas` (`id`, `codigo_comprobante`, `fecha_emision`, `forma_pago`, `operacion_gravada`, `igv`, `total`, `estado`) VALUES
(1, 'F001-12', '2025-07-01 15:58:05', '2', '9.75', '1.75', '11.50', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formas_pago`
--

CREATE TABLE `tbl_formas_pago` (
  `id` int(11) NOT NULL,
  `nombre_forma` varchar(150) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_formas_pago`
--

INSERT INTO `tbl_formas_pago` (`id`, `nombre_forma`, `estado`) VALUES
(1, 'Forma 1', 'activo'),
(2, 'CONTADO', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hijos_socios`
--

CREATE TABLE `tbl_hijos_socios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `id_socio` varchar(50) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_hijos_socios`
--

INSERT INTO `tbl_hijos_socios` (`id`, `nombres`, `apellidos`, `id_socio`, `fecha_creacion`) VALUES
(5, 'Mathias', 'Martinez', '14', '2025-07-11 16:55:14'),
(6, 'Noah', 'Martinez', '14', '2025-07-11 16:55:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materiales`
--

CREATE TABLE `tbl_materiales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `cantidad` varchar(50) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_materiales`
--

INSERT INTO `tbl_materiales` (`id`, `nombre`, `cantidad`, `fecha_creacion`) VALUES
(1, 'MATERIAL 1 EJEMPLO', '30', '2025-07-11 13:56:10'),
(2, 'a', '600', '2025-07-11 14:00:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_nota_venta`
--

CREATE TABLE `tbl_nota_venta` (
  `id` int(11) NOT NULL,
  `codigo_comprobante` varchar(100) DEFAULT NULL,
  `fecha_emision` datetime DEFAULT NULL,
  `forma_pago` varchar(100) DEFAULT NULL,
  `operacion_gravada` varchar(100) DEFAULT NULL,
  `operacion_exonerada` varchar(100) DEFAULT NULL,
  `operacion_ina` varchar(100) DEFAULT NULL,
  `igv` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_nota_venta`
--

INSERT INTO `tbl_nota_venta` (`id`, `codigo_comprobante`, `fecha_emision`, `forma_pago`, `operacion_gravada`, `operacion_exonerada`, `operacion_ina`, `igv`, `total`, `estado`) VALUES
(1, 'NVT-3', '2025-07-01 16:00:42', NULL, '9.75', '0.00', '0.00', '1.75', '11.50', '1');

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
(2, 'Mathias Gael', 'Martinez Meneses', 'usuariodeprueba@hullka.com.pe', '$2y$10$ItRd3eZeXErbfjwe10Q6K.UZr7F7sm7WIMBBK02PaRRQFtm8E6ntO', '6969', 'activo', '1');

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
-- Estructura de tabla para la tabla `tbl_reportes_lpa`
--

CREATE TABLE `tbl_reportes_lpa` (
  `id` int(11) NOT NULL,
  `id_reporte_lpa` int(11) NOT NULL,
  `total_finca` decimal(10,2) DEFAULT 0.00,
  `cultivo_produccion` decimal(10,2) DEFAULT 0.00,
  `cultivo_crecimiento` decimal(10,2) DEFAULT 0.00,
  `rastrojo_purma` decimal(10,2) DEFAULT 0.00,
  `bosque_primario` decimal(10,2) DEFAULT 0.00,
  `reserva` decimal(10,2) DEFAULT 0.00,
  `otros_cultivos` decimal(10,2) DEFAULT 0.00,
  `estimado_produccion` decimal(10,2) DEFAULT 0.00,
  `cafe_pergamino` decimal(10,2) DEFAULT 0.00,
  `sub_producto` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_reportes_lpa`
--

INSERT INTO `tbl_reportes_lpa` (`id`, `id_reporte_lpa`, `total_finca`, `cultivo_produccion`, `cultivo_crecimiento`, `rastrojo_purma`, `bosque_primario`, `reserva`, `otros_cultivos`, `estimado_produccion`, `cafe_pergamino`, `sub_producto`, `created_at`, `updated_at`) VALUES
(3, 1, 1.00, 1.00, 1.00, 0.00, 0.00, 0.00, 0.00, 1.00, 1.00, 1.00, '2025-07-11 23:59:41', '2025-07-11 23:59:41'),
(4, 1, 2.00, 2.00, 2.00, 0.00, 0.00, 0.00, 0.00, 2.00, 2.00, 2.00, '2025-07-11 23:59:41', '2025-07-11 23:59:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reporte_lpa`
--

CREATE TABLE `tbl_reporte_lpa` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) DEFAULT NULL,
  `dni` varchar(30) DEFAULT NULL,
  `productor` varchar(100) DEFAULT NULL,
  `base_sectorial` varchar(50) DEFAULT NULL,
  `estimado` varchar(500) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_reporte_lpa`
--

INSERT INTO `tbl_reporte_lpa` (`id`, `codigo`, `dni`, `productor`, `base_sectorial`, `estimado`, `tipo`, `fecha_creacion`) VALUES
(1, NULL, '70535185', 'Carlos Smith Martinez Meneses', '1', '0', 'ORG', '2025-07-11 18:31:09');

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
  `tipo_user` varchar(50) DEFAULT NULL,
  `tipo_ruc` varchar(50) DEFAULT NULL,
  `ruc` varchar(50) DEFAULT NULL,
  `razon_social` varchar(150) DEFAULT NULL,
  `direccion_fiscal` varchar(200) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_socios`
--

INSERT INTO `tbl_socios` (`id`, `nombres`, `apellidos`, `dni`, `fecha_nacimiento`, `nombre_esposa`, `numero_hijos`, `telefono`, `direccion_dni`, `estatus`, `base_sectorial`, `tipo_sello`, `tipo_user`, `tipo_ruc`, `ruc`, `razon_social`, `direccion_fiscal`, `fecha_creacion`) VALUES
(14, 'Carlos Smith', 'Martinez Meneses', '70535185', '2000-10-21', 'Jazmin Moreno Arango', '2', '902192976', 'Lima', '1', '1', '1', '1', NULL, NULL, NULL, NULL, '2025-07-11 16:55:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_ruc`
--

CREATE TABLE `tbl_tipo_ruc` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_ruc`
--

INSERT INTO `tbl_tipo_ruc` (`id`, `nombre`) VALUES
(1, 'RUC 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_sello`
--

CREATE TABLE `tbl_tipo_sello` (
  `id` int(11) NOT NULL,
  `nombre_tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_sello`
--

INSERT INTO `tbl_tipo_sello` (`id`, `nombre_tipo`) VALUES
(1, 'Organico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_acopio_materia_prima`
--
ALTER TABLE `tbl_acopio_materia_prima`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_almacenes`
--
ALTER TABLE `tbl_almacenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_base_sectorial`
--
ALTER TABLE `tbl_base_sectorial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_boletas`
--
ALTER TABLE `tbl_boletas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_clasificacion_taza`
--
ALTER TABLE `tbl_clasificacion_taza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_datos_valores`
--
ALTER TABLE `tbl_datos_valores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_estado_pago`
--
ALTER TABLE `tbl_estado_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_estatus`
--
ALTER TABLE `tbl_estatus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_formas_pago`
--
ALTER TABLE `tbl_formas_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_hijos_socios`
--
ALTER TABLE `tbl_hijos_socios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_materiales`
--
ALTER TABLE `tbl_materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_nota_venta`
--
ALTER TABLE `tbl_nota_venta`
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
-- Indices de la tabla `tbl_reportes_lpa`
--
ALTER TABLE `tbl_reportes_lpa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reporte_lpa` (`id_reporte_lpa`);

--
-- Indices de la tabla `tbl_reporte_lpa`
--
ALTER TABLE `tbl_reporte_lpa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_socios`
--
ALTER TABLE `tbl_socios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tipo_ruc`
--
ALTER TABLE `tbl_tipo_ruc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tipo_sello`
--
ALTER TABLE `tbl_tipo_sello`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_acopio_materia_prima`
--
ALTER TABLE `tbl_acopio_materia_prima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_almacenes`
--
ALTER TABLE `tbl_almacenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_base_sectorial`
--
ALTER TABLE `tbl_base_sectorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_boletas`
--
ALTER TABLE `tbl_boletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_clasificacion_taza`
--
ALTER TABLE `tbl_clasificacion_taza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_datos_valores`
--
ALTER TABLE `tbl_datos_valores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_estado_pago`
--
ALTER TABLE `tbl_estado_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_estatus`
--
ALTER TABLE `tbl_estatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_formas_pago`
--
ALTER TABLE `tbl_formas_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_hijos_socios`
--
ALTER TABLE `tbl_hijos_socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_materiales`
--
ALTER TABLE `tbl_materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_nota_venta`
--
ALTER TABLE `tbl_nota_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de la tabla `tbl_reportes_lpa`
--
ALTER TABLE `tbl_reportes_lpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_reporte_lpa`
--
ALTER TABLE `tbl_reporte_lpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_socios`
--
ALTER TABLE `tbl_socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_ruc`
--
ALTER TABLE `tbl_tipo_ruc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_sello`
--
ALTER TABLE `tbl_tipo_sello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_reportes_lpa`
--
ALTER TABLE `tbl_reportes_lpa`
  ADD CONSTRAINT `tbl_reportes_lpa_ibfk_1` FOREIGN KEY (`id_reporte_lpa`) REFERENCES `tbl_reporte_lpa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
