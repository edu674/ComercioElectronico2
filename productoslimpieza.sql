-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 22:21:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productoslimpieza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_envio` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paqueteria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `id_facturacion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_provedor` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_provedor`, `nombre`, `categoria`, `cantidad`, `descripcion`, `imagen`, `precio`) VALUES
(1, 1, 'Ajax-Desinfectante en polvo', '1', 17, 'Desinfectante en polvo de la marca Ajax en su presentacion de 388grms', 'ajax.png', 25),
(2, 1, 'Detergente Arcoiris', '1', 23, 'Detergente de la marca arcoiris en su presentacion de 900grms', 'Arcoiris.png', 18),
(3, 1, 'Atomizador', '1', 24, 'Atomizar pequeño efectivo para rociar agua o culaquier liquido en su interior', 'atomizador.png', 15),
(4, 1, 'Blanqueador', '1', 24, 'Blanqueador liquido en su presentacion de 962ml', 'blanqueador.png', 12),
(5, 1, 'Cepillo Escoba', '1', 22, 'Cepillo Escoba multiusosos con cerdas de resistentes a cualquier superficie', 'cepilloescoba.jpeg', 45),
(6, 1, 'Fibra', '1', 21, 'fibra multiusosos ideal para cualquier superficie', 'fibra.png', 8),
(7, 1, 'Fibra Metalica', '1', 24, 'Fibra de metal ideal para lavar platos, caserolas entre otros', 'fibra_metalica.png', 11),
(8, 1, 'Fibra Verde', '1', 25, 'fibra de uso multiple ideal para enjuagar cualquer superficie', 'fibra_verde.png', 10),
(9, 1, 'franela', '1', 25, 'Franela ultrasueve idel para limpiar ciualquier superficie', 'franela.png', 18),
(10, 1, 'jerga', '1', 24, 'Jerga de tela idela para limpiar cualquier tipo de superficie', 'jerga.png', 25),
(11, 1, 'Limpia Vidrios', '1', 24, 'Limpia vidiros estilo escoba, idela para limpiar cualquier tipo de crital del hogar o de vehiculos personales', 'limpiaVidrios.png', 45),
(12, 1, 'Pastillas de Cloro', '1', 24, 'Pastillas de cloro ideal para usar en el wc gracias a su gran capacidad de disolvsion, se garatiza hasta 20 descargas de agua, manteniendo tu baño limpio!', 'pastillas_cloro.png', 12),
(13, 1, 'Recogedor', '1', 23, 'Recogedor de basura platico, de la marca Klintek', 'recogedor.png', 16),
(14, 1, 'Recogedor Metalico', '1', 25, 'Recogedor metalico de uso multiple', 'recogedor_metalico.png', 25),
(15, 1, 'Cepillo', '1', 9, 'Cepillo de plastico con fibras resistentes a cualquier superficie.', 'cepillo.png', 11),
(16, 1, 'Cubeta plastica', '1', 20, 'Cubeta hecha de platico duro, ideal para cualquier tipo de trabajo duro', 'cubeta.png', 13),
(17, 1, 'Bolsa de Basura', '1', 20, 'bolsa de basura grande de excelente claidad soporta un total de 30 kilos!', 'bolsa_basura.png', 5),
(18, 1, 'Destapa Inodoros', '1', 20, 'bomba de hule ideal para destapar cualquier tipo de baño gracias a su diseño ergonomico y su gran calidad de material de hule', 'bomba_hule.png', 25),
(19, 1, 'Bote de Basura', '1', 20, 'bote de basura con tapa par evitar la fuga de malos olores', 'bote_basura.png', 38),
(20, 1, 'Bote de basura chico', '1', 20, 'bote de basura pequeño ideal para la cocina, el baño o cualquier habitacion del hogar!', 'bote_basura_chico.png', 25),
(21, 1, 'Cepillo para auto', '1', 20, 'ceillo para lavar autos de excelente calidad, gracias a sus excelentes cerdas de gran soporte!', 'cepillo_auto.png', 41),
(22, 1, 'Cepillo para baño', '1', 19, 'cepillo para limpiar el interior del inodoro', 'cepillo_baño.png', 15),
(23, 1, 'Cepillo Escobetilla', '1', 20, 'Cepillo en forma de eescobetilla de excelente calidad', 'cepillo_escobetilla.png', 12),
(24, 1, 'Tendedero', '1', 20, 'Lazo de Tenedero de gran calidad, soporta mas de 80 kilos!', 'tendedero.png', 36),
(25, 1, 'Cepillo Industrial', '1', 20, 'cepillo de cerdas gruesas y restintes de uso industrial', 'cepillo_industrial.png', 52),
(26, 1, 'Cepillo de mano', '1', 20, 'cepillo de mano de excelente calidad!', 'cepillo_manos.png', 8),
(27, 1, 'Cepillo Tipo Plancha', '1', 20, 'Cepillo Tipo Plancha ideal para cualquier tipo de superficie!', 'cepillo_plancha.png', 12),
(28, 1, 'Cubeta Flexible', '1', 20, 'Cubeta Flexible de alta capacidad, idenea para labores del hogar', 'cubeta_flexible.png', 12),
(29, 1, 'Desengrasante de 650ml Brasso', '1', 20, 'Desengrasante marca Brasso de 650ml en formto de atomizador', 'desengrasante_650ml.png', 26),
(30, 1, 'Desengrasante en Polvo Axion', '1', 20, 'Desengrasante en polvo de marac Axion de 425 grms ', 'detergente_425grms.png', 23),
(31, 1, 'Escoba', '1', 20, 'Escoba de alta calidad, con cerdas ultra ressitentes a cualquier tipo de superficie', 'escoba.png', 18),
(32, 1, 'Estropajo', '1', 20, 'Estropajo de la marca saluk, excelnete para antes y durante el baño', 'estropajo.png', 12),
(33, 1, 'Fabuloso 1Lt', '1', 19, 'El unico y original fabuloso!, en su presentaccion de 1lt que desinfecta y elimina hasta el 99% de las bacterias!', 'fabuloso_1lt.png', 22),
(34, 1, 'guantes_hule', '1', 20, 'Guantes de Hule de alta resistencia para la hora del aseo del hogar!', 'guantes_hule.png', 22),
(35, 1, 'Bolsa de Basura', '1', 20, 'bolsa de basura grande de excelente claidad soporta un total de 30 kilos!', 'bolsa_basura.png', 5),
(36, 1, 'Jalador', '1', 20, 'Jalador ideal para cualquier tipo de piso y azulejo!', 'jalador.png', 25),
(37, 1, 'Pinzas para ropa', '1', 20, 'Pinzas para colgar la ropa en el tendedero!', 'pinzas.png', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ventas`
--

CREATE TABLE `productos_ventas` (
  `id_productos_venta` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_ventas`
--

INSERT INTO `productos_ventas` (`id_productos_venta`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 13, 1, 16, 16),
(2, 1, 7, 1, 11, 11),
(3, 1, 12, 1, 12, 12),
(4, 1, 4, 1, 12, 12),
(5, 2, 13, 1, 16, 16),
(6, 2, 6, 3, 8, 24),
(7, 3, 1, 2, 25, 50),
(8, 3, 15, 1, 11, 11),
(9, 3, 5, 1, 45, 45),
(10, 4, 3, 1, 15, 15),
(11, 5, 1, 1, 25, 25),
(12, 5, 10, 1, 25, 25),
(13, 6, 2, 1, 18, 18),
(14, 6, 11, 1, 45, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contraseña` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `colonia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_postal` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_opcional` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono_opcional` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `correo_electronico`, `contraseña`, `nombres`, `apellidos`, `calle`, `colonia`, `municipio`, `estado`, `codigo_postal`, `Telefono`, `direccion_opcional`, `telefono_opcional`, `tipo`) VALUES
(0, 'AndreaMendez@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Andrea', 'Mendez Hernadez', 'san martin obispo', 'SanTiago', 'Tepotzotlan', 'Mexico', '54600', '', '', '', 0),
(1, 'edu674@live.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Eduardo Ivan', 'Maqueda Hernandez', 'cda juarez 1', 'Capula', 'Tepotzotlan', 'Mexico', '54605', '5535772930', '', '', 1),
(2, 'edd@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Edgar Santiago', 'Hernadez Colin', 'avenida del floral', 'san rafael', 'loma bonita', 'mexico', '54608', '5535558902', 'cda de la luz ,capula San mateo Mexico', '', 1),
(3, 'alex@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Jair  Santiago', 'Martinez Serrano', 'avenida del floral', 'las flores', 'loma bonita', 'mexico', '54608', '5535558902', '', '', 0),
(4, 'eduardo@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Eduardo ', 'Rodriguez Hernandez', 'avenida del floral', 'Tepotzotlan', 'Loma Bonita', 'Mexico', '54606', '5535558902', 'avenida del floral 4, Cuautitlán, mexico ', '6689741207', 0),
(5, 'juan@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Juan ', 'Perez Rodriguez', 'avenida Juarez', 'primera de mayo', 'Cuautitlan', 'mexico', '55200', '5535558902', 'avenida del sol, prolongacion juarez, Mexico ', '457836920', 0),
(6, 'pedro@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Pedro ', 'Martinez Mosqueida', 'calle ignacio martinez', ' Dos Ríos Primera Sección', 'Cuatitlan ', 'Mexico', '52203', '5535558902', '', '4578692310', 0),
(7, 'AnaAyala@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Ana Berenice', 'Ayala Martinez', 'calle revolucion', 'San Sebastian', 'Huhuetoca', 'Mexico', '51300', '5535558902', '', '5532697845', 0),
(8, 'Isabel@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Isabel', 'Vazquez Sandoval', 'insurgentes', 'Tepojaco', 'Cuatitlan', 'Mexico', '51733', '5535558902', '', '5536987123', 0),
(9, 'eduardoDuarte@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Eduardo ', 'Ramirez Duarte', 'avenida del floral', 'colonia del pedergal', 'Izcalli', 'tultitlan', '54100', '5535558902', 'calle del floral, tultlan, mexico', '5589741236', 0),
(10, 'Silvestre@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Silvestre', 'Vazquez Sandoval', 'privada maria morelos', 'Santa Elena', 'Cuatitlan', 'Mexico', '54608', '5535558902', '', '', 0),
(11, 'Victor@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Victor', 'Perez Sandoval', 'avenida de Revoliucion', 'Acatitlan', 'Cuautemoc', 'CDMX', '00123', '5535558902', 'san sebastian xhala, cuatitlan mexico', '5523417896', 0),
(12, 'Hugo@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Hugo ', 'Rodriguez Pineda', 'avenida del floraL', 'colonia Victor Perez', 'Huehuetoca', 'Mexico', '46398', '5535558902', '', '5523697814', 0),
(13, 'Corina@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Corina ', 'Hernandez Pedregal', 'San Martin', 'San Martin', 'Tepotzotlan', 'Mexico', '54601', '5535558902', '', '5578963645', 0),
(15, 'LuisJimenez@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c9', 'Luis ', 'Jimenez Rodriguez', 'calle del arco', 'Tierritas Blancas', 'Tepotzotlan', 'Mexico', '54612', '', '', '', 0),
(16, 'ivan@live.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc5', 'Mike Sparda', 'Maqueda Hernandez', 'prolongacion juarez', 'san rafael', 'tepotzotlan', 'mexico', '54608', '5589301245', 'San sebastian Xhala Cuautitlan Mexico', '5523697845', 0),
(18, 'pruebahash@hotmail.com', '3d7d5c4340db8cffd70992ba1cbcb73aa92fdb277ed9128edca8bdd36ae46e3aa1f1a3796507abb6253b743f65f899cf51af4b049be8c2229f56bfe9adb71e3c', 'Pedro', 'Maqueda Hernandez', 'privada del cerrojo 1', 'capula', 'tepotzotlan', 'mexico', '56608', '5558762284', 'privada del cerrojo 1, capula, tepotzotlan ex hecaieneda san miguel, mexico ', '4545454', 0),
(20, 'LuisFernando@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'Luis Eduardo', 'Perez Solano', 'privada del cerrojo 1', 'capula', 'tepotzotlan', 'mexico', '54608', '5526365879', '', '', 0),
(21, 'ejemplo@skd.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 'Eduardo Ivan', 'Maqueda Hernandez', '00', 'san rafael', 'loma bonita', 'cda juarez 1', '54608', '5589301245', '465', '5523697845', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(10) NOT NULL,
  `id_pedido` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_pedido`, `paypal`, `fecha`, `status`, `correo`, `total`) VALUES
(1, 'sfqptpbcic', '1HC79345NW207251E', '2021-11-25 23:55:09', 'aproved', 'pruebahash@hotmail.com', 151),
(2, 'sfqptpbcic', '9PM41430738324648', '2021-11-26 00:19:36', 'aproved', 'LuisFernando@gmail.com', 140),
(3, 'bletrafbqv', '65G914478T373020L', '2021-11-26 03:35:31', 'aproved', 'LuisFernando@gmail.com', 206),
(4, 'bletrafbqv', '0EL27684VJ177764T', '2021-11-26 03:38:27', 'aproved', 'LuisFernando@gmail.com', 115),
(5, 'sfqptpbcic', '622124247M273363T', '2021-11-30 15:41:02', 'aproved', 'pruebahash@hotmail.com', 150),
(6, 'sfqptpbcic', '28474435BJ179592A', '2021-11-30 17:11:16', 'aproved', 'pruebahash@hotmail.com', 163);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`id_facturacion`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_provedor` (`id_provedor`);

--
-- Indices de la tabla `productos_ventas`
--
ALTER TABLE `productos_ventas`
  ADD PRIMARY KEY (`id_productos_venta`),
  ADD KEY `id_venta` (`id_venta`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `productos_ventas`
--
ALTER TABLE `productos_ventas`
  MODIFY `id_productos_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
