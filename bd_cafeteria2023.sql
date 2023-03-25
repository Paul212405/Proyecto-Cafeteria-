-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2023 a las 17:23:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cafeteria2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_det_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_det_pedido`, `id_pedido`, `id_producto`, `cantidad`, `sub_total`) VALUES
(56, 5, 5, 3, '7.50'),
(57, 5, 1, 1, '2.99'),
(58, 6, 5, 10, '25.00'),
(250, 3, 33, 11, '87.89'),
(258, 3, 19, 12, '21.00'),
(280, 3, 22, 9, '89.91'),
(286, 3, 3, 5, '29.95'),
(288, 8, 1, 9, '26.91'),
(289, 8, 2, 7, '31.50'),
(290, 8, 3, 6, '35.94'),
(292, 8, 20, 4, '35.96'),
(293, 8, 21, 6, '77.94'),
(294, 8, 22, 6, '59.94'),
(295, 9, 1, 3, '8.97'),
(297, 9, 3, 3, '17.97'),
(298, 9, 4, 2, '9.98'),
(299, 10, 1, 4, '11.96'),
(300, 10, 2, 8, '36.00'),
(301, 11, 1, 3, '8.97'),
(302, 11, 22, 3, '29.97');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Cafes y Bebidas Calientes', 'Incluye todo lo que es cafe y sus variedades.'),
(2, 'Pasteleria', 'Incluye todo tipo de tortas y pasteles.'),
(3, 'Platos Salados', 'Incluye manjares como pollo a la plancha hasta empanadas.'),
(4, 'Postres', 'Incluye postres pequeños como paits de manzana, etc.'),
(5, 'Jugos', 'Variedades de jugos hasta batidos de frutas.'),
(6, 'Especiales', 'Postres y platos que solo sirve la casa.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `direccion_facturacion` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(9) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nombres`, `apellidos`, `direccion`, `direccion_facturacion`, `email`, `celular`, `id_usuario`) VALUES
(1, 'Paul Lenyn', 'Morales Susanibar Camila', 'Tupac Amaru 206 - El Socorro', 'Mi casa en Socorro', 'pauli@gmail.com', '973348411', 1),
(2, 'Camila Nicol', 'Morales Susanibar', '', NULL, 'camilamoralessusanibar@gmail.com', '', 3),
(5, 'Manuel Prados', 'Cordova Toledo', NULL, NULL, '0332191014@unjfsc.edu.pe', NULL, 8),
(6, 'Manolo Piero', 'Nicol', NULL, NULL, 'camilamoralessusanibar@gmail.com', NULL, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedido`, `id_cliente`, `fecha_pedido`, `total`, `estado`, `observaciones`) VALUES
(3, 1, '2023-03-24', '228.75', 'finalizado', NULL),
(5, 5, NULL, '10.49', 'carrito', NULL),
(6, 6, NULL, '25.00', 'carrito', NULL),
(8, 2, NULL, '268.19', 'carrito', NULL),
(9, 1, '2023-03-24', '36.92', 'finalizado', NULL),
(10, 1, '2023-03-24', '47.96', 'finalizado', NULL),
(11, 1, '2023-03-24', '38.94', 'finalizado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto`
--

CREATE TABLE `tb_producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_producto`
--

INSERT INTO `tb_producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `stock`, `estado`, `id_categoria`) VALUES
(1, 'Té de hierbas', 'Infusión de hierbas como manzanilla, menta, hibisco y té verde', '2.99', 40, 'd', 1),
(2, 'Chocolate caliente', 'Bebida hecha con leche y chocolate en polvo o chocolate derretido para hacer una deliciosa bebida caliente', '4.50', 30, 'd', 1),
(3, 'Café instantáneo', 'Café liofilizado que se disuelve en agua caliente para hacer café al instante', '5.99', 60, 'd', 1),
(4, 'Capuchino', 'Bebida de café espresso con leche espumada y cubierta con una capa de crema batida', '4.99', 30, 'd', 1),
(5, 'Té negro', 'Té con un sabor más fuerte y profundo que se prepara con hojas de té fermentadas', '2.50', 35, 'd', 1),
(6, 'Latte', 'Bebida de café espresso con leche al vapor y una fina capa de espuma de leche', '4.50', 25, 'd', 1),
(7, 'Café con leche', 'Bebida de café hecha con partes iguales de café y leche caliente', '3.50', 40, 'd', 1),
(8, 'Mocha', 'Bebida de café espresso con leche caliente y chocolate en polvo o jarabe de chocolate', '5.50', 30, 'd', 1),
(9, 'Chai latte', 'Bebida de té con especias y leche espumada que se puede hacer con té negro o té de especias', '4.50', 35, 'd', 1),
(10, 'Croissant', 'Un hojaldre crujiente en forma de media luna, que puede rellenarse de chocolate, mantequilla, mermelada, entre otros.', '1.50', 50, 'd', 2),
(11, 'Dona', 'Una masa frita en forma de anillo con diferentes toppings y rellenos, como azúcar glas, chocolate, crema de vainilla, mermelada, entre otros.', '1.00', 30, 'd', 2),
(12, 'Galleta de chocolate', 'Una galleta suave y esponjosa de chocolate, perfecta para acompañar un café o un té.', '0.75', 100, 'd', 2),
(13, 'Tarta de manzana', 'Una tarta dulce hecha con manzanas, una base de masa y una cobertura crujiente, se puede servir caliente con una bola de helado de vainilla.', '12.00', 10, 'd', 2),
(14, 'Brownie', 'Un postre hecho con chocolate, mantequilla, huevos, azúcar y harina, tiene una textura densa y esponjosa, se puede servir con una bola de helado o nata montada.', '2.50', 25, 'd', 2),
(15, 'Cheesecake', 'Un postre de origen americano hecho con queso crema y galleta triturada para la base, se puede servir con diferentes toppings, como frutas del bosque, chocolate o caramelo.', '15.00', 5, 'd', 2),
(16, 'Muffin de arándanos', 'Un bizcocho esponjoso con trozos de arándanos frescos, perfecto para el desayuno o la merienda.', '1.25', 40, 'd', 2),
(17, 'Rollos de canela', 'Un dulce hecho con una masa de levadura, canela y azúcar, se enrolla y corta en rodajas antes de hornear, se puede servir caliente y con un glaseado de azúcar.', '2.00', 30, 'd', 2),
(18, 'Profiteroles', 'Un postre de origen francés hecho con una masa choux horneada y rellena de crema pastelera o nata montada, se suele servir con chocolate caliente por encima.', '2.75', 20, 'd', 2),
(19, 'Macarons', 'Un dulce de origen francés hecho con una masa de almendra en forma de galleta, relleno con diferentes sabores de crema, como vainilla, chocolate, limón, entre otros.', '1.75', 50, 'd', 2),
(20, 'Ensalada César', 'Ensalada con pollo a la parrilla, trozos de pan tostado, queso parmesano rallado y aderezo César', '8.99', 50, 'd', 3),
(21, 'Pizza Margarita', 'Pizza con salsa de tomate, mozzarella fresca y hojas de albahaca', '12.99', 30, 'd', 3),
(22, 'Tacos de carne asada', 'Tacos de tortilla de maíz con carne asada, cebolla, cilantro y salsa', '9.99', 40, 'd', 3),
(23, 'Hamburguesa clásica', 'Hamburguesa de carne de vacuno con queso cheddar, lechuga, tomate, cebolla y ketchup', '6.99', 60, 'd', 3),
(24, 'Fajitas de pollo', 'Fajitas de pollo salteadas con cebolla y pimientos, servidas con tortillas de trigo, guacamole, salsa y queso rallado', '11.99', 35, 'd', 3),
(25, 'Spaghetti carbonara', 'Spaghetti con una salsa cremosa de huevo, queso parmesano, panceta y pimienta negra', '10.99', 25, 'd', 3),
(26, 'Sándwich de pollo a la parrilla', 'Sándwich con pollo a la parrilla, lechuga, tomate y mayonesa', '7.99', 50, 'd', 3),
(27, 'Albóndigas en salsa', 'Albóndigas de carne en una salsa de tomate casera', '8.99', 45, 'd', 3),
(28, 'Arroz con pollo', 'Plato de arroz con pollo, cebolla, pimiento y azafrán', '9.99', 30, 'd', 3),
(29, 'Quiche de espinacas y queso', 'Tarta salada con espinacas, queso y huevos', '12.99', 20, 'd', 3),
(30, 'Helado de vainilla', 'Un clásico postre a base de crema, azúcar y extracto de vainilla.', '5.99', 100, 'd', 4),
(31, 'Tarta de manzana', 'Una tarta dulce hecha con manzanas, canela y una corteza de pastelería.', '12.99', 50, 'd', 4),
(32, 'Flan', 'Un postre suave y cremoso hecho con huevos, leche y azúcar.', '8.99', 75, 'd', 4),
(33, 'Brownies', 'Un pastel de chocolate denso y masticable, a menudo con nueces o chispas de chocolate.', '7.99', 60, 'd', 4),
(34, 'Galletas de chocolate', 'Galletas crujientes hechas con harina, azúcar, chocolate y mantequilla.', '4.99', 200, 'd', 4),
(35, 'Cheesecake', 'Un pastel de queso denso y cremoso, generalmente con una corteza de galleta.', '14.99', 40, 'd', 4),
(36, 'Tiramisú', 'Un postre italiano a base de capas de bizcocho empapado en café y crema de mascarpone.', '16.99', 30, 'd', 4),
(37, 'Frutas frescas', 'Una opción saludable y refrescante, como fresas, uvas, kiwis o melocotones.', '10.99', 100, 'd', 4),
(38, 'Pastel de zanahoria', 'Un pastel dulce hecho con zanahorias ralladas y especias, generalmente cubierto con crema de queso.', '13.99', 45, 'd', 4),
(39, 'Natillas', 'Un postre cremoso hecho con leche, huevos, azúcar y vainilla.', '6.99', 80, 'd', 4),
(40, 'Jugo de naranja', 'Jugo dulce y refrescante hecho de naranjas frescas', '3.99', 150, 'd', 5),
(41, 'Jugo de manzana', 'Jugo suave y dulce hecho de manzanas frescas', '2.99', 200, 'd', 5),
(42, 'Jugo de piña', 'Jugo tropical hecho de piñas frescas', '4.99', 100, 'd', 5),
(43, 'Jugo de tomate', 'Jugo salado y sabroso hecho de tomates frescos', '3.49', 75, 'd', 5),
(44, 'Jugo de fresa', 'Jugo dulce y delicioso hecho de fresas frescas', '5.99', 120, 'd', 5),
(45, 'Jugo de arándano', 'Jugo agrio y refrescante hecho de arándanos frescos', '6.99', 80, 'd', 5),
(46, 'Jugo de zanahoria', 'Jugo saludable y nutritivo hecho de zanahorias frescas', '3.99', 90, 'd', 5),
(47, 'Jugo de uva', 'Jugo dulce y afrutado hecho de uvas frescas', '4.99', 110, 'd', 5),
(48, 'Jugo de limón', 'Jugo agrio y refrescante hecho de limones frescos', '2.49', 100, 'd', 5),
(49, 'Jugo de sandía', 'Jugo refrescante y dulce hecho de sandías frescas', '7.99', 60, 'd', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_testimonio`
--

CREATE TABLE `tb_testimonio` (
  `id_testimonio` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `testimonio` varchar(300) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_testimonio`
--

INSERT INTO `tb_testimonio` (`id_testimonio`, `id_cliente`, `testimonio`, `valoracion`, `fecha_registro`, `id_producto`) VALUES
(1, 1, 'Buen servicio', 3, '2023-03-13 17:53:48', 1),
(2, 1, 'Atencion de la mejor', 5, '2023-03-13 17:56:09', 2),
(3, 1, 'Lo mejor que puede haber', 5, '2023-03-17 21:16:48', 1),
(4, 1, 'Un cafe rapido y muy rico para el momento.', 4, '2023-03-18 00:35:14', 3),
(5, 1, 'Cafe espumoso very good', 5, '2023-03-18 00:36:48', 4),
(6, 1, 'Increible te muy recomendado.', 4, '2023-03-18 00:37:32', 1),
(7, 1, 'Falto algo de azucar.', 2, '2023-03-18 00:40:44', 2),
(8, 1, 'Cosita por mejor pero satisface.', 3, '2023-03-18 00:44:22', 5),
(9, 1, 'Bueno.', 2, '2023-03-18 00:48:20', 1),
(10, 1, 'Pasable.', 4, '2023-03-18 00:50:02', 5),
(11, 1, 'Jugoso', 4, '2023-03-18 00:57:00', 40),
(12, 1, 'El mejor jugo de manzana de la vida.', 4, '2023-03-18 00:58:59', 41),
(13, 1, 'Piña de la isla.', 4, '2023-03-18 01:02:42', 42),
(14, 1, 'Hola', 3, '2023-03-18 01:53:56', 8),
(15, 1, 'hola', 3, '2023-03-18 01:57:20', 40),
(16, 1, 'Cafe del bueno', 4, '2023-03-18 02:01:50', 1),
(17, 1, 'Buen chocolate', 4, '2023-03-18 02:02:14', 2),
(18, 1, 'Buen cafe', 5, '2023-03-18 02:02:48', 3),
(19, 1, 'El mejor helado de la vida. ', 5, '2023-03-18 02:06:05', 30),
(20, 1, 'Rico. ', 3, '2023-03-18 02:06:41', 31),
(21, 1, 'Buen capu.', 5, '2023-03-18 02:09:17', 4),
(22, 1, 'El cesar', 4, '2023-03-18 02:10:11', 20),
(23, 1, 'Serrano', 4, '2023-03-18 02:21:05', 28),
(24, 1, 'No esta muy rico', 2, '2023-03-18 02:30:04', 29),
(25, 1, 'De los mejores croisant', 5, '2023-03-18 03:34:56', 10),
(26, 1, 'Bueno.', 3, '2023-03-20 19:06:19', 4),
(27, 1, 'A', 3, '2023-03-21 17:17:43', 1),
(28, 1, 'Le falto azucar', 2, '2023-03-22 19:13:54', 44),
(29, 1, 'Le falta mas jugo. ', 3, '2023-03-22 21:48:31', 49),
(30, 1, 'Yo lo preparo mejor', 1, '2023-03-22 22:01:34', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp(),
  `tipo` char(1) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nombre`, `password`, `email`, `fecha_registro`, `tipo`, `estado`) VALUES
(1, 'PaulyCamila', '212405', 'paul@gmail.com', '2023-03-23', 'C', 'A'),
(3, 'CamilaNicol', '212405', 'camilamoralessusanibar@gmail.com', '2023-03-19', 'C', 'A'),
(6, 'Paul', '1234', 'paul@gmail.com', '2023-03-20', 'A', 'A'),
(8, 'ManuelPrados', '15', '0332191014@unjfsc.edu.pe', '2023-03-20', 'C', 'A'),
(9, 'ManoloPiero', '1234', 'camilamoralessusanibar@gmail.com', '2023-03-20', 'C', 'A'),
(12, 'Camila', '1234', 'camila@gmail.com', '2023-03-23', 'A', 'A'),
(14, 'Jorge', '1234', 'oscar@gmail.com', '2023-03-23', 'C', 'I');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_det_pedido`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_producto_categoria` (`id_categoria`);

--
-- Indices de la tabla `tb_testimonio`
--
ALTER TABLE `tb_testimonio`
  ADD PRIMARY KEY (`id_testimonio`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_det_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `tb_testimonio`
--
ALTER TABLE `tb_testimonio`
  MODIFY `id_testimonio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `tb_pedido` (`id_pedido`),
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tb_producto` (`id_producto`);

--
-- Filtros para la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD CONSTRAINT `tb_cliente_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `tb_pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_cliente` (`id_cliente`);

--
-- Filtros para la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id_categoria`);

--
-- Filtros para la tabla `tb_testimonio`
--
ALTER TABLE `tb_testimonio`
  ADD CONSTRAINT `tb_testimonio_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_cliente` (`id_cliente`),
  ADD CONSTRAINT `tb_testimonio_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tb_producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
