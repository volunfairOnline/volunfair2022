-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-02-2022 a las 10:13:37
-- Versión del servidor: 5.6.51-cll-lve
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `LaLiamos`
--
CREATE DATABASE IF NOT EXISTS `LaLiamos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `LaLiamos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria_entidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria_entidad`) VALUES
(1, 'ONG'),
(2, 'Empresa Social'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

DROP TABLE IF EXISTS `imagen`;
CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `nombre_img` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_ong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

DROP TABLE IF EXISTS `lugar`;
CREATE TABLE `lugar` (
  `id_voluntariado` int(11) NOT NULL,
  `continente_lugar` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pais_lugar` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Paises a realizar el voluntariado';

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id_voluntariado`, `continente_lugar`, `pais_lugar`) VALUES
(1, 'Europa', 'España'),
(2, 'Europa', 'Madrid'),
(3, 'Otro', 'Fuera de España'),
(4, 'Otro', 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ongs`
--

DROP TABLE IF EXISTS `ongs`;
CREATE TABLE `ongs` (
  `id_ong` int(11) NOT NULL,
  `nombre_ong` varchar(100) DEFAULT NULL,
  `descripcion_ong` longtext,
  `voluntariado_ong` longtext,
  `color_ong` varchar(10) DEFAULT NULL,
  `fondo_ong` text,
  `email_ong` varchar(100) DEFAULT NULL,
  `logo_ong` text,
  `web_ong` varchar(75) DEFAULT NULL,
  `facebook_ong` varchar(100) DEFAULT NULL,
  `twitter_ong` varchar(100) DEFAULT NULL,
  `instagram_ong` varchar(100) DEFAULT NULL,
  `linkedin_ong` varchar(100) DEFAULT NULL,
  `video_ong` varchar(100) DEFAULT NULL,
  `edad_ong` varchar(100) NOT NULL,
  `direccion_ong` varchar(400) DEFAULT NULL,
  `fecha_inscripcion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Descripción general de todas las ONGs que participan en Volunfair';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE `perfiles` (
  `id_categoria` int(11) NOT NULL,
  `perfil_entidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_categoria`, `perfil_entidad`) VALUES
(1, 'Voluntario para jóvenes universitarios'),
(2, 'Voluntariado para hacer en familia'),
(3, 'Sin un perfil en concreto de España'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `tipo_proyecto` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='proyecto a realizar en el voluntariado';

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `tipo_proyecto`) VALUES
(1, 'Personas mayores'),
(2, 'Personas sin recursos'),
(3, 'Enfermos'),
(4, 'Cooperación Social'),
(5, 'Misión religiosa'),
(6, 'Niños'),
(7, 'Personas con discapacidad'),
(8, 'Personas con addiciones'),
(9, 'Animales'),
(10, 'Medioambiente'),
(11, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rifa`
--

DROP TABLE IF EXISTS `rifa`;
CREATE TABLE `rifa` (
  `id_rifa` int(11) NOT NULL,
  `articulo_rifa` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `descripcion_rifa` longtext COLLATE utf8mb4_spanish2_ci,
  `foto_rifa` text COLLATE utf8mb4_spanish2_ci,
  `importancia_rifa` int(11) DEFAULT '0',
  `empresa_rifa` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `instagram_rifa` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `twitter_rifa` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `facebook_rifa` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `linkedin_rifa` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `telefono_rifa` int(11) DEFAULT NULL,
  `email_rifa` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `fecha_rifa` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rifa`
--

INSERT INTO `rifa` (`id_rifa`, `articulo_rifa`, `descripcion_rifa`, `foto_rifa`, `importancia_rifa`, `empresa_rifa`, `instagram_rifa`, `twitter_rifa`, `facebook_rifa`, `linkedin_rifa`, `telefono_rifa`, `email_rifa`, `fecha_rifa`) VALUES
(1, 'Blusa', NULL, 'blusa-bimani.jpeg', 1, 'Bimani', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Joyas', NULL, 'joyas-desvan.jpg', 4, 'El desvan de Alejandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Estuches', NULL, 'estuche-desvan.jpg', 1, 'El desvan de Alejandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Bolso', NULL, 'bolso-desvan.jpg', 1, 'El desvan de Alejandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Producto', NULL, '', 1, 'Wolfithings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Producto', NULL, '', 1, 'Tartamen', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Pendientes', NULL, '', 4, 'Hören Jewellery', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '3 bonos Cinesa', NULL, 'bono-cinesa.jpg', 1, 'Cinesa', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '40 fundas de mascarillas + 1 mascarilla quirúrgica', NULL, 'fundamascarilla-lunettes.jpeg', 1, 'Lunettesbymaria', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Corbatas', NULL, 'corbatas-cloking.jpg', 1, 'CloKing', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Pala de pádel', NULL, 'pala-estrella.jpg', 6, 'StarVie', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2 sudaderas', NULL, 'sudaderas-atuntao.jpg', 1, 'Atuntao', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Pendientes de oro', NULL, 'pendientes-deluem.jpg', 4, 'Deluem', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Cuadernos', NULL, '', 1, 'Cuadernos Acebo', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Sudadera', NULL, '', 1, 'Blue Banana', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Producto', NULL, '', 1, 'Maskk', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Gorra', NULL, 'gorra-rupper.jpg', 1, 'Rupper Huts', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Producto', NULL, '', 1, 'Dosprimeras', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Centro de flores', NULL, 'flores-floresylazos.jpeg', 1, 'FloresyLazos', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '3 cintas con bandera y 3 cintas', NULL, 'cintas-mascarilla.jpeg', 0, 'Kuelma.brand', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Gorra', NULL, 'gorra-bagouve.jpg', 0, 'Bagouve', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Camiseta', NULL, 'camiseta-bagouve.jpg', 0, 'Bagouve', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Bolsitas', NULL, 'bolsitas-nexstep.jpg', 0, 'Next Step', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Camisetas', NULL, 'camiseta-dyhowl.jpg', 0, 'Dyhowl', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Coleteros', NULL, 'coletero-maccadamia.jpg', 0, 'Macca Damia', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Estuches', NULL, 'estuche-compania.jpg', 0, 'La Compañía Indiana', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Jerseys', NULL, 'jersey-clearstuart.jpg', 0, 'Clea Stuart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Joyas', NULL, 'joyas-mashai.jpg', 0, 'Mashai', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Joyas', NULL, 'joyas-turkana.jpg', 0, 'Turkana', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Mochila', NULL, 'mochila-ferrovial.jpg', 0, 'Ferrovial', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Polo', NULL, 'polo-ferrovial.jpg', 0, 'Ferrovial', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Reloj', NULL, 'reloj-wynot.jpg', 0, 'Wynot', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Robot', NULL, 'robot-juguetronica.jpg', 0, 'Juguetrónica', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Sudaderas', NULL, 'sudadera-cottoncrown.jpg', 0, 'Cottoncrown', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Sudadera ETSI Industriales', NULL, 'sudadera-etsii.jpg', 0, 'Delegación de Alumnos ETSII UPM', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Alpargatas', NULL, 'alpargatas-x.jpg', 0, 'Aloha Sandals', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Blusa', NULL, 'blusas-x.jpg', 0, 'Bimani', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Gorras', NULL, 'gorras-x.jpg', 0, 'Bagouve', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Libretas', NULL, 'libretas-x.jpg', 0, 'Acebo', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Libros', NULL, 'libros.jpg', 0, 'Antonio Pérez Henares', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Pendientes', NULL, 'pendientes-x.jpg', 0, 'Varios', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Pack de pádel: mochila, chaleco, conjunto y botella', NULL, 'chaleco-estrella.jpg', 5, 'Estrella Damm', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sorteorifa`
--

DROP TABLE IF EXISTS `sorteorifa`;
CREATE TABLE `sorteorifa` (
  `movil_rifa` int(11) NOT NULL,
  `num_rifa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado_categoria`
--

DROP TABLE IF EXISTS `voluntariado_categoria`;
CREATE TABLE `voluntariado_categoria` (
  `id_ong` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado_lugar`
--

DROP TABLE IF EXISTS `voluntariado_lugar`;
CREATE TABLE `voluntariado_lugar` (
  `id_ong` int(11) NOT NULL,
  `id_voluntariado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado_perfil`
--

DROP TABLE IF EXISTS `voluntariado_perfil`;
CREATE TABLE `voluntariado_perfil` (
  `id_ong` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado_proyecto`
--

DROP TABLE IF EXISTS `voluntariado_proyecto`;
CREATE TABLE `voluntariado_proyecto` (
  `id_ong` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_img`),
  ADD UNIQUE KEY `id_img_5` (`id_img`),
  ADD KEY `id_img` (`id_img`),
  ADD KEY `id_img_2` (`id_img`),
  ADD KEY `id_img_3` (`id_img`),
  ADD KEY `id_ong` (`id_ong`),
  ADD KEY `id_img_4` (`id_img`),
  ADD KEY `nombre_img` (`nombre_img`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_voluntariado`);

--
-- Indices de la tabla `ongs`
--
ALTER TABLE `ongs`
  ADD PRIMARY KEY (`id_ong`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `rifa`
--
ALTER TABLE `rifa`
  ADD PRIMARY KEY (`id_rifa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id_voluntariado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ongs`
--
ALTER TABLE `ongs`
  MODIFY `id_ong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
