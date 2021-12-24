-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-12-2021 a las 07:04:14
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
-- Estructura de tabla para la tabla `imagen`
--

DROP TABLE IF EXISTS `imagen`;
CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `nombre_img` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_ong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_img`, `nombre_img`, `id_ong`) VALUES
(1, 'energia.png', 1),
(2, 'rainbow.jpg', 2),
(3, 'tsehay.jpg', 3),
(4, 'aiesec.png', 4),
(5, 'amoverse.jpg', 5),
(6, 'coop-int.png', 6),
(7, 'antares.png', 7),
(8, 'inakuwa.png', 8),
(9, 'mision_pais.jpg', 9),
(10, 'abogados-negro.png', 10),
(11, 'kiskeya.jpg', 11),
(12, 'playing.png', 12),
(13, 'youth-wake-up.png', 13),
(14, 'barro.png', 14),
(15, 'afaij.jpg', 15),
(16, '21km.jpeg', 16),
(17, 'afs.png', 17),
(18, 'idente.jpg', 18),
(19, 'bokatas.jpg', 19),
(20, 'aipc.jpg', 20),
(21, 'avinte.png', 21),
(22, 'tumaini.png', 22),
(23, 'intered.jpg', 23),
(24, 'nadie-solo.jpg', 24),
(25, 'camilos.jpg', 25),
(26, 'siempre-adelante.jpg', 26),
(27, 'redes.jpg', 27),
(28, 'san-juan.jpg', 28),
(29, 'siervas-caridad.jpg', 29),
(30, 'taous.jpg', 30),
(31, 'kubuka.jpg', 31),
(32, 'jatari.png', 32),
(33, 'hontanar.jpg', 33),
(34, 'future4africa.png', 34),
(36, 'u4impact.png', 37),
(37, 'agua-coco.png', 38),
(38, 'redmadre.jpg', 39),
(39, 'masvida.png', 40),
(40, 'social-heroes.png', 41),
(41, 'aps.jpg', 42),
(42, 'pse.png', 43);

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
  `direccion_ong` varchar(400) DEFAULT NULL,
  `fecha_inscripcion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Descripción general de todas las ONGs que participan en Volunfair';

--
-- Volcado de datos para la tabla `ongs`
--

INSERT INTO `ongs` (`id_ong`, `nombre_ong`, `descripcion_ong`, `voluntariado_ong`, `color_ong`, `fondo_ong`, `email_ong`, `logo_ong`, `web_ong`, `facebook_ong`, `twitter_ong`, `instagram_ong`, `linkedin_ong`, `video_ong`, `direccion_ong`, `fecha_inscripcion`) VALUES
(1, 'Energía sin Fronteras', 'ONG especializada en acceso a la energía, agua y saneamiento. Formada por profesionales del sector energético, principalmente, que trabaja para conseguir hacer llegar estos tres elementos a las comunidades más pobres.\r\nFundada en 2003, ha conseguido proporcionar estos servicios a más de 500000 beneficiarios.', 'ONG especializada en acceso a la energía, agua y saneamiento. Formada por profesionales del sector energético, principalmente, que trabaja para conseguir hacer llegar estos tres elementos a las comunidades más pobres.\r\nFundada en 2003, ha conseguido proporcionar estos servicios a más de 500000 beneficiarios.', NULL, NULL, 'maria.olea@energiasinfronteras.org', '1', 'https://energiasinfronteras.org/hacemos/proyectos/', 'https://www.facebook.com/search/top?q=energ%C3%ADa%20sin%20fronteras', '', 'https://www.instagram.com/energiasinfronteras/', 'https://www.linkedin.com/in/energia-sin-fronteras/', '', '', '2021-02-08 17:44:00'),
(2, 'Fundación Mary Ward - Rainbow Family', '', 'La Fundación Mary Ward (FMW), como ONG del IBVM, trabaja especialmente por los derechos de las mujeres, las niñas y niños, promoviendo oportunidades de cambio desde lo local y construyendo una ciudadanía más solidaria y comprometida.\r\n\r\nSomos una organización que promueve la justicia e impulsa la transformación social. Queremos un mundo sin pobreza ni exclusión, donde las personas puedan desarrollar sus capacida­des desde la igualdad y la justicia, y sean libres para expresarse en su diversidad.\r\n\r\nRainbow Family es un proyecto de la FWM que trata de garantizar a las niñas que habitan en las calles de Calcuta un futuro alejado de las mafias y tratas. La educación, garantizar su seguridad y una correcta alimentación son nuestros mejores aliados. \r\n\r\nEste proyecto nace de una experiencia de voluntariado y a día de hoy nos hemos consolidado como una de las principales fuentes de financiación de los Loreto Rainbow Homes, además de anualmente, durante el mes de julio, trabajamos en estos colegios de Calcuta junto a un grupo máximo de 15 voluntarias. El Rainbow Camp permite un intercambio cultural muy enriquecedor, enamorarte del proyecto y sobretodo ayudar a que el cambio que ansiamos en esta sociedad año a año se haga más tangible.', NULL, NULL, 'rainbowfamilyvoluntariado@fundacionmaryward.org', '2', 'https://rainbowfamily.home.blog/', '', '', '', '', '', '', '2021-02-08 17:54:03'),
(3, 'Tsehay', '', 'Somos una ONG  dedicada a la cooperación para el desarrollo en comunidades vulnerables de Bishoftu, Etiopía. Trabajamos centrando esfuerzos en proyectos que dan apoyo a la infancia y a la mujer, a través de proyectos educativos con becas de estudios, clases de refuerzo y acceso a material escolar, proyectos de formación profesional y de empoderamiento. De manera paralela tenemos proyectos de nutrición, de salud y de emprendimiento social. \r\nTrabajamos desde la comunidad y para la comunidad, creemos en la capacidad de la población civil como impulsora del cambio y progreso. Por ello nos basamos en la participación social, esto es un proceso que permite mejorar su grado de implicación en el propio proceso de desarrollo.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Tsehay-1.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Tsehay-5.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Tsehay-4.jpg\" />\r\n\r\n', NULL, NULL, 'maria.abella.rguez@gmail.com', '3', '', 'https://www.facebook.com/tsehayeresunsol', '', 'https://www.instagram.com/tsehay.ong/', 'https://www.linkedin.com/in/coordinadoras-tsehay-eres-un-sol-ong-etiop%C3%ADa-espa%C3%B1a-61154b203/', '', '', '2021-02-09 18:53:31'),
(4, 'AIESEC', '', 'Somos uno de los mayores proveedores de talento joven internacional  tanto para nuestros programas de voluntariado como para el mundo corporativo socialmente responsable y comprometido con el potencial de los jóvenes.\r\n\r\nEntre nuestros antiguos miembros más laureados contamos con un premio nobel de la paz, así como muchas otras figuras con una posición relevante de liderazgo, dentro del mundo de las empresas y de las ONGs. Contamos con una gran comunidad Alumni que respalda la actividad de nuestra organización AIESEC.\r\n\r\nNuestros programas de voluntariado están alineados con la Agenda 2030 y los Objetivos de Desarrollo Sostenible, teniendo una gran variedad de oportunidades y destinos por todos los continentes! Los principales valores de hacer un voluntariado internacional con AIESEC son los siguientes:\r\n\r\nExperimenta nuevas culturas, pues no hay nada como estar en un país nuevo, vivir y ser voluntario con gente de todos lados. ¡Imagina las cosas que aprenderías!\r\n\r\nHacer un impacto positivo, en un proyecto de Global Volunteer, trabajas para abordar los problemas que más te apasionan.\r\n\r\nRetarte a ti mismo, hacer algo nuevo, salir de tu zona de confort y descubrir la mejor versión de ti mismo.\r\n\r\nVivir una experiencia con AIESEC te va a permitir:\r\n\r\nConocer y vivir tus valores personales, mientras exploras tus pasiones y tus fortalezas.\r\n\r\nDesarrollar tus habilidades de comunicación en un ambiente diverso\r\nProbar tu habilidad de hacer una diferencia en el mundo, conectándote con temas globales.\r\n\r\nY tomar decisiones y solucionar diversos problemas en ambientes desafiantes.\r\n\r\nMás info sobre nuestra organización sin ánimo de lucro en nuestra página web: https://www.aiesec.org.es/\r\n\r\nMás info sobre nuestros programas de voluntariado: https://www.aiesec.org.es/global-volunteer/\r\n\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/aiesec1.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/aiesec2.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/aiesec3.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/AISEC-4.jpeg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'pablo.merinovico@aiesec.net', '4', 'https://www.aiesec.org.es/', 'https://es-la.facebook.com/aiesec.spain/', 'https://twitter.com/aiesecspain?lang=es', 'https://www.instagram.com/aiesecspain/?hl=es', 'https://www.linkedin.com/company/aiesec-in-spain/?originalSubdomain=es', '', '', '2021-02-09 22:07:32'),
(5, 'Fundación Amoverse', '', 'Desarrollamos una intervención socioeducativa integral con niños, niñas, adolescentes, jóvenes y sus familias, a través de un proyecto educativo a través de un proyecto socioeducativo basado en garantizar el pleno ejercicio de sus derechos, centrado en potenciar su autonomía, auto-confianza,\r\ninserción social y pleno desarrollo vital, desde el acompañamiento y la cercanía. Llevamos a cabo nuestra misión en los barrios madrileños de El Pozo del Tío Raimundo (Vallecas) y La Ventilla (Tetuán).\r\n\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:70%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/amoverse1.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:70%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/amoverse2.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:70%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/amoverse3.JPG\" />', NULL, NULL, 'voluntariado@fundacionamoverse.org', '5', 'https://fundacionamoverse.org/', '', '', '', '', '', '', '2021-02-09 17:59:39'),
(6, 'Cooperación Internacional', '', '- Voluntariado puntual y estable\r\n- Innovación social juvenil\r\n- Formación en temáticas sociales\r\n- Cooperación para el Desarrollo\r\n', NULL, NULL, 'gvillalon@ciong.org', '6', 'https://ciong.org/', '', '', '', '', '', '', '2021-02-08 18:13:51'),
(7, 'Asociación Antares', '', 'Asociación Antares se dedica a ofrecer actividades de ocio y deporte a personas con discapacidad intelectual y respiro y conciliación a las familias cuidadoras.', NULL, NULL, 'psancho@asociacionantares.org', '7', 'https://asociacionantares.org/', 'https://www.facebook.com/asociacionantares/', 'https://twitter.com/antaresasoc?lang=es', 'https://www.instagram.com/antares_asoc/?hl=es', '', '', '', '2021-02-08 18:15:46'),
(8, 'Inakuwa Asociación', '', 'Inakuwa es una Asociación sin ánimo de lucro que trabaja para llevar la Educación a cada rincón del mundo. Buscamos el desarrollo en la autonomía de personas en situaciones desfavorecidas, mediante la impartición de cursos instructivos, lúdicos, prácticos, técnicos, en varios idiomas y muy específicos adaptados al terreno. Y lo mejor de todo… Inakuwa está dirigida por jóvenes ambiciosos e insaciables. \r\nEl proyecto Tanzania nace como el primero que defendemos en Inakuwa buscando lograr el desarrollo de la comunidad rural de Rau, Moshi, a través de cursos impartidos a las mujeres de la zona en colaboración con la ONG local Jiendeleze Women. Actualmente trabajamos en establecer un tejido social local fuerte y establecer relaciones entre las organizaciones sociales.', NULL, NULL, 'blancatrabu@gmail.com', '8', 'https://inakuwa.org/', '', '', 'https://www.instagram.com/inakuwa_oficial/?hl=es', 'https://es.linkedin.com/company/inakuwa', '', '', '2021-02-09 22:59:33'),
(9, 'Mision Pais España', '', 'Pequeño grupo de jóvenes va en enero febrero a un pueblo de España donde realizamos actividades de voluntariado y a disposición del párroco del pueblo.\r\n\r\n <br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/image1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/image31.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/image47.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n', NULL, NULL, 'pacomgc4@gmail.com', '9', 'https://www.misionpais.es/', 'https://es-es.facebook.com/misionpaisesp/', '', 'https://www.instagram.com/misionpaisesp/?hl=es', '', 'https://www.youtube.com/watch?v=VehdTZk6hik', '', '2021-02-09 19:37:42'),
(10, 'Educa Guinea', '', 'El verano de 2019,  un grupo de voluntarios jóvenes nos fuimos a la aventura a Mebere y Oyala, dos pueblecitos de Guinea Ecuatorial, con la idea de montar allí un proyecto de cooperación. Empezamos desde cero, con clases para niños y talleres y charlas para mujeres, sobre salud, higiene, inserción laboral...\r\n\r\nEste próximo verano queremos complementar las clases con un comedor escolar y empezar a reformar el cole de uno de los pueblos. \r\n\r\nOfrecemos 15 plazas para el voluntariado de verano, el único requisito es ser mayor de edad y ¡tener ganas de ayudar!\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Educa-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Educa-2.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Educa-3.jpg\" />\r\n', NULL, NULL, 'proyectoeducaguinea@gmail.com', '10', 'http://educa-guinea.blogspot.com/', 'https://es-es.facebook.com/larry.lagartija.7', '', '', '', 'https://www.youtube.com/watch?v=e9kU2VaLmnU', '', '2021-02-09 18:31:23'),
(11, 'Flores de Kiskeya', '', 'Proyecto materno-infantil enfocado a la autonomía y desarrollo de las mujeres y los niños/as de Anse-à-Pitres, sureste de Haití, a través de cuatro programas de Nutrición, Salud, Educación y Empoderamiento.', NULL, NULL, 'info@floresdekiskeya.org', '11', 'https://floresdekiskeya.org/', 'https://es-es.facebook.com/FloresDeKiskeya/', '', 'https://www.instagram.com/floresdekiskeya/?hl=es', 'https://es.linkedin.com/company/flores-de-kiskeya-org', '', '', '2021-02-08 18:27:42'),
(12, 'Playing', '', 'Somos una ONG que organiza eventos deportivos en España e invertimos el 100% de los beneficios en la creación de proyectos educativos donde más se necesita. Actualmente estamos construyendo un colegio en Basori (Gambia) que actualmente alberga 150 niños y niñas de entre 4 y 9 años y genera 10 puestos de trabajo.', NULL, NULL, 'ong.playing.comunicacion@gmail.com', '12', 'https://www.playingspain.org/', 'https://es-es.facebook.com/PlayingSpain', 'https://twitter.com/playingspain', 'https://www.instagram.com/playingspain/', 'https://es.linkedin.com/company/playingspain', 'https://www.youtube.com/watch?v=f8IVWNGBtuQ', '', '2021-02-08 18:31:22'),
(13, 'Youth Wake Up!', '', 'Somos una ONGD española formada por un grupo de jóvenes comprometidos, profesionales y voluntarios que trabajamos en la transformación social de colectivos desfavorecidos y muy vulnerables en zonas de conflicto, a través de la involucración de los jóvenes locales en proyectos de cooperación y acción social.\r\nYouth Wake Up! tiene como misión involucrar a jóvenes de comunidades en zonas de conflicto en proyectos de carácter social y desarrollo, como  para que participen en la mejora de su entorno y sean promotores del cambio.\r\n\r\nLos proyectos en los que estamos involucrados se llevan a cabo en terreno, trabajamos en cinco líneas de acción para restablecer el tejido social del territorio haciendo hincapié en los colectivos con más riesgo de exclusión y fomentando un diálogo intercultural que garantice una convivencia pacífica.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Wake-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Wake-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Wake-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Wake-4.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n<img style=\"width:70%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Wake-5.jpg\" />\r\n', NULL, NULL, 'volunteers@youthwakeup.org', '13', 'https://youthwakeup.org/', 'https://www.facebook.com/youthwup/', 'https://twitter.com/ywup_ong', 'https://www.instagram.com/youthwup/?hl=es', 'https://es.linkedin.com/company/youth-wake-up', '', '', '2021-02-09 18:42:26'),
(14, 'Asociación Barró', '', 'Asociación Barró es una asociación socioeducativa, sin ánimo de lucro y fundada en 1994, que interviene en el ámbito social con el fin de crear un espacio socioeducativo, de desarrollo personal y comunitario para personas en situación o riesgo de vulnerabilidad, marginación o exclusión social.\r\nInterviene en Madrid en varias zonas: \r\n- Puente de Vallecas:\r\n*Inclusión Social de Personas en Situación de Vulnerabilidad Social -Proyecto Aluné: Dirigido a mujeres gitanas, potencia el desarrollo personal y comunitario, dotándoles de las competencias básicas necesarias para incorporarse en igualdad de condiciones y permitir su inclusión activa en la sociedad.\r\n*Proyecto Aprendiendo Juntos: Aprendizaje colectivo de habilidades instrumentales básicas, a través de la formación de mentoras y mentores en habilidades sociales, en el proceso alfabetizador se posibilita y fomenta el apoyo del aprendizaje de personas con mayor dificultad, mayoritariamente de etnia gitana\r\n*Mediación Social Intercultural con Población Gitana: Basa su intervención en la mediación vecinal y el trabajo sociocomunitario, en zonas de realojo, con vecinos y vecinas de diferentes culturas en situación de conflictividad, en la zona denominada Triángulo del Agua del distrito de Puente de Vallecas.\r\n*Centro lúdico- educativo Chapotea: Enfocado a niñas, niños y adolescentes en riesgo de exclusión social, entre 6 y 12 años y sus familias, del distrito Puente de Vallecas donde participan en espacios de desarrollo afectivo, personal, social e intercultural y se fomentan y refuerzan sus capacidades físicas y mentales.\r\n*Líderes y Lideresas contra la Violencia de Género: proyecto que sensibiliza y previene contra la violencia de género en la comunidad gitana, teniendo en cuenta sus propias claves culturales.\r\n- Villa de Vallecas: Intervención Socioeducativa con Menores y Familias de Cañada Real. Pretende afianzar el trabajo que ya están realizando los y las mediadoras con la población de la zona de Cañada Real y posibilitar la promoción educativa, sanitaria, socio-comunitaria, pre-laboral, la promoción de la equidad de género y la convivencia vecinal en Cañada Real Galiana y otros agrupamientos urbanos, mediante actuaciones socioeducativas específicas con la intervención de mediadores/as sociales interculturales.\r\n- Ciudad Lineal: Centro Socioeducativo Jara. Da respuesta urgente y efectiva a demandas socioeducativas de los menores sus familias y adultos del Distrito de Ciudad Lineal, zona de Pueblo Nuevo (mayoritariamente migrantes en situación de desventaja social, desestructuración familiar y escasez de recursos a diferentes niveles), contribuyendo a alcanzar un desarrollo integral así como la mejora de la convivencia y su integración social.\r\n- CaixaProInfancia: Proyecto de refuerzo educativo y ocio y para eliminar la pobreza infantil. Niños, niñas, adolescentes y familias de Puente de Vallecas y Ciudad Lineal cuyas familias están en situación de exclusión social, participan en procesos de acompañamiento donde se favorecen sus competencias, su integración social y autonomía. Todo ello con la máxima complicidad y corresponsabilidad de las familias en el proceso. Así se mejoran las oportunidades de desarrollo social y educativo de la infancia y sus familias.', NULL, NULL, 'carla.carbo@asociacionbarro.org', '14', '', '', 'https://twitter.com/AsocBarro', 'https://www.instagram.com/asociacionbarro/?hl=es', 'https://www.linkedin.com/company/asociacion-barro/', '', '', '2021-02-08 18:37:44'),
(15, 'AFAIJ', '', 'Organizacion que fomenta la participacion de los jovenes a traves del voluntariado internacional.\r\n\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afaij1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afaij2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afaij3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afaij4.jpeg\" />\r\n<br>\r\n<br>', NULL, NULL, 'sve@afaij.org', '15', '', 'https://www.facebook.com/AFAIJ', '', 'https://www.instagram.com/afaijspain/', '', '', '', '2021-02-09 21:35:51'),
(16, '21Kilómetros', '', 'Somos una organización sin ánimo de lucro con el objetivo de dar a conocer las diferentes formas de ayudar que hay en Madrid. Colaboramos con múltiples fundaciones solidarias, dando a conocer sus actividades entre nuestros voluntarios a través de colaboraciones puntuales. Además contamos con un grupo de coro que participa activamente de las actividades solidarias y organiza algunos eventos.', NULL, NULL, '21kilometros.org@gmail.com', '16', 'http://21kilometros.org/', 'https://es-la.facebook.com/21kilometrosorg/', '', 'https://www.instagram.com/21kilometrosorg/', 'https://es.linkedin.com/company/21kilometrosorg', '', '', '2021-02-10 18:06:39'),
(17, 'AFS Intercultura España', '', 'AFS es una ONG internacional, con más de 60 años de experiencia en el secor de la interculturalidad. AFS ofrece un modelo de aprendizaje intercultural para que las personas rompan barreras sociales y culturales, desarrollen habilidades de adaptación a cualquier entorno y adquieran el conocimiento necesario para construir un mundo más justo y pacífico.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/AFS-1.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/AFS-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/AFS-3.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n', NULL, NULL, 'xisca.ferra@afs.org', '17', '', 'https://www.facebook.com/AfsInterculturaEspana', '', 'https://instagram.com/afsintercultura_Esp/', '', '', '', '2021-02-09 19:22:57'),
(18, 'Voluntariado Idente (Juventud Idente)', '', 'El Voluntariado Idente es una línea de actuación que Juventud Idente ofrece en respuesta al dolor humano en sus más variadas manifestaciones: marginación, carencias y necesidades básicas, sufrimientos o limitaciones de cualquier índole. Tiene como fin la restauración de la Humanidad, partiendo de la que el voluntario idente hace de sí mismo. Su propósito es contribuir al desarrollo integral de la persona, cualquiera que sea su condición, situación personal, cultural, social, promoviendo los ideales más elevados que llevan a un progreso personal y comunitario. Y con ello impulsar el diálogo y fraternidad entre las más diversas culturas a través de la participación colegial del trabajo voluntario.\r\n\r\nProyectos de: \r\n\r\nApoyo en la formación de Infancia y juventud para una educación integral, en poblaciones con diversos tipos de marginación y programas de educación para la salud. En África: Camerún; América del  Sur: Bolivia (Santa Cruz de la Sierra, Chiquitos), Ecuador (Ibarra, Loja, Quito y Santo Domingo de los Tsáchilas), Perú (Lima, Abancay e Iquitos); Asia: India. \r\n\r\nForo Internacional de Jóvenes, para lograr un diálogo abierto y una paz entre los distintos pueblos, a través de aportaciones que se puedan concretar en la experiencia.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/idente-1.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/idente-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/idente-3.png\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n\r\n', NULL, NULL, 'ascensionescamilla@gmail.com', '18', 'https://juventudidente.org/voluntariado-idente-internacional/', 'https://es-la.facebook.com/identesespana/', 'https://twitter.com/juventudidente?lang=es', 'https://www.instagram.com/juventudidente.es/?hl=es', '', 'https://www.youtube.com/watch?v=nXTzmdHd020', '', '2021-02-09 21:48:31'),
(19, 'Asociación Bokatas', '', 'Acompañamiento a personas sin hogar a través de la realización de rutas de calle, apertura del un centro de acompañamiento, entre otras actividades y proyectos.', NULL, NULL, 'irenefl@msn.com', '19', 'https://bokatas.org/', 'https://es-es.facebook.com/bokatas.org', 'https://twitter.com/bokatas?lang=es', 'https://www.instagram.com/asociacion_bokatas/?hl=es', '', '', '', '2021-02-08 18:55:12'),
(20, 'AIPC Pandora', '', 'AIPC Pandora somos la ONG líder en Educación Internacional y trabajamos inspirando a las siguientes generaciones de líderes éticos y globales organizando programas en más de 60 países de todo el mundo. Desarrollamos programas de voluntariado nacional e internacional para jóvenes, en formato grupal e individual.  También tenemos un Programa de Becas que gestiona proyectos de educación que forma a l@s jóvenes que son parte de él como ciudadan@s globales conscientes, capaces y comprometidos con los retos globales; el programa incluye la participación en nuestros programas de movilidad internacional. También somos organización acreditada de envío del Cuerpo Europeo de Solidaridad (CES), un programa 100% financiado por la Unión Europea; programasde voluntariado para jóvenes de entre 18 y 30 años. \r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Pandora-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Pandora-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Pandora-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n', NULL, NULL, 'ximena.zeballos@aipc-pandora.org', '20', 'https://aipc-pandora.org/', 'https://www.facebook.com/AIPC.Pandora/', 'https://twitter.com/AIPCPandora?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.instagram.com/aipcpandora/?hl=es', 'https://es.linkedin.com/company/aipc-pandora', 'https://www.youtube.com/watch?v=dA5eLjrC-EA', '', '2021-02-09 18:46:27'),
(21, 'Avinte', '', 'Avinte es un grupo de amigos que busca eliminar las barreras que existen en la sociedad, realizando las mismas actividades de ocio con gente con discapacidad, que  cualquier otra persona sin necesidad de apoyo podría llevar a cabo. Para ello realizamos dos tipos de actividades. Las de fin de semana que realizamos cada quince días y que ocupan la tarde-noche del sábado o del domingo, como ir a la bolera, cenar, ir al cine... Entre estas actividades hay una que es más especial que consiste en ir un fin de semana de casa rural, que solemos hacer por el mes de abril o mayo y que a todo el mundo le encanta!\r\nPor otro lado, en verano siempre nos vamos de campamento una semana de agosto. Convivimos durante 7 días, realizando todo tipo de actividades juntos. El campamento, junto con el fin de semana, son las dos actividades que más gustan a todos los que forman parte de Avinte.\r\nCon la pandemia nos hemos tenido que reinventar, y lo que estamos llevando a cabo ahora son encuentros virtuales y retos cada dos semanas.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Avinte-1.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Avinte-2.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Avinte-3.jpeg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Avinte-4.jpeg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'pvelio97@gmail.com', '21', 'https://avinte.es/', 'https://fr-fr.facebook.com/avinte.voluntarios', '', 'https://www.instagram.com/avintevoluntarios/', '', '', '', '2021-02-09 19:11:54'),
(22, 'Viajes Tumaini', '', 'Somos una ONGD que trabajamos con dos objetivos :\r\n- Empoderar a pequeñas ONG en Países del Sur. Actualmente trabajamos con 18 proyectos en África, Asia y Latinoamérica.\r\n- Ofrecer experiencias transformadoras y sensibilizar acerca de problemáticas sociales y medioambientales a través de los Viajes Solidarios y la formación.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Tumani-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Tumani-5.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Tumani-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Tumani-4.jpg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'info@viajestumaini.org', '22', 'https://viajestumaini.org', 'https://www.facebook.com/viajessolidariostumaini', 'https://twitter.com/ViajesTumaini', '', '', 'https://youtu.be/zOL3uwr839w', '', '2021-02-09 20:11:14'),
(23, 'Fundación InteRed', '', 'InteRed es una ONGD promovida por la Institución Teresiana que apuesta por una educación transformadora, que genere la participación activa y comprometida de todas las personas a favor de la justicia, la equidad de género y la sostenibilidad social y ambiental. Impulsa procesos educativos para el cambio personal y colectivo a favor de la justicia social, la equidad y el cuidado de las personas y la naturaleza, abierta a la participación y al diálogo con grupos y personas de distintos países.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Intered-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Intered-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Intered-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Intered-4.jpg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'maria.monjas@intered.org', '23', 'https://www.intered.org/es', 'https://www.facebook.com/InteRedMadrid', '', 'https://www.instagram.com/interedmadrid/', '', 'https://www.youtube.com/watch?v=e-Hr_bmo-go', '', '2021-02-09 18:44:16'),
(24, 'NadieSolo Voluntariado', '', 'Somos NadieSolo Voluntariado, una Fundación Benéfica que desarrolla programas de voluntariado para acompañar a personas que sufren soledad no deseada por enfermedad, dependencia, discapacidad o en riesgo de exclusión. Actualmente contamos con 2.200 voluntarios que acompañan a más de 73.000 personas en la Comunidad de Madrid, y con presencia en Castilla – León (Segovia), La Rioja (Logroño) y Castilla La Mancha (Guadalajara).\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Nadie-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Nadie-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Nadie-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Nadie-4.jpg\" />\r\n\r\n', NULL, NULL, 'merchealvarez@nadiesolo.org', '24', 'https://nadiesolo.org/', 'https://m.facebook.com/nadiesolovoluntariado', 'https://twitter.com/nadiesolovolunt', 'https://www.instagram.com/nadiesolovoluntariado/', 'https://www.linkedin.com/company/nadiesolovoluntariado', '', '', '2021-02-09 18:37:24'),
(25, 'San Camilo', '', 'Organización sociosanitaria, voluntariado con personas mayores, enfermos, personas vulnerables, en duelo.', NULL, NULL, 'roberto@camilos.es', '25', 'https://www.camilos.es/', 'https://es-es.facebook.com/camilos.es', '', '', '', 'https://www.youtube.com/watch?v=ihJx9Ofbrjo', '', '2021-02-08 19:19:20'),
(26, 'Fundación Siempre Adelante, ONGD', '', 'Es una ONGD para el Desarrollo, sin ánimo de lucro, promovida por la Superiora General de las Religiosas Concepcionistas Misioneras de la Enseñanza, inscrita en el Registro de Fundaciones Asistenciales del Ministerio de Trabajo y Asuntos Sociales con el nº28/1.325, por Orden TAS/3982/2004, de 5 de noviembre (BOE 2 de diciembre de 2004) y provista de CIF:G-84021120.\r\nLos fines de interés general de la Fundación son: \r\na) Contribuir a la educación y formación de personas, grupos y pueblos de los países en vías de desarrollo y de los núcleos de población que sufren las consecuencias de la pobreza y marginación en el llamado cuarto mundo, como medio que promueva su desarrollo equilibrado e integral, y ayude a avanzar hacia la fraternidad entre los países y personas.\r\nb) Desarrollar actividades de asistencia social y despertar en las personas la toma de conciencia de la dignidad de todo hombre y la responsabilidad de colaborar en su desarrollo humano y cultural.\r\nc) Impulsar acciones de voluntariado a nivel nacional y en países en vías de desarrollo, así como organizar y vertebrar su actuación en la Fundación.\r\n\r\nProyectos:\r\n Proyectos Misioneros Concepcionistas, voluntariado de verano en República Dominicana (Consuelo), Guinea Ecuatorial ( Evinayong) y Filipinas (Bacolod), un mes, de primeros de julio a primeros de agosto. \r\nResponsabilidad del voluntario: clases de refuerzo a niños y jóvenes de Primaria Y Bachiller, actividades deportivas, trabajos manuales, talleres formativos para adultos, juegos, animación de celebraciones religiosas, visita y apoyo a familias necesitadas.\r\nPara los voluntarios, hay un encuentro formativo y organizativo. En un fin de semana del mes de abril se tiene el encuentro  en Madrid con el grupo de voluntarios  que van a participar en los proyectos misioneros que se llevan a cabo en los lugares descritos. También se tiene información online, desde que se inicia el proceso de selección hasta la realización del proyecto en sí. Semanas después de regresar del proyecto, tiene lugar un nuevo encuentro de evaluación.\r\nLos voluntarios viven en la casa de las religiosas, que durante este tiempo se convierte en su \"\"casa\"\". Ellas les acercan a los niños, jóvenes, familias, ancianos...\r\n\r\nPara el año 2021, debido a la pandemia, no podemos asegurar que se pueda hacer esta voluntariado.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Siempre-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Siempre-2.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Siempre-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Siempre-4.jpeg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'comunicaciones.sa@concepcionistas.com', '26', 'https://fundacionsiempreadelante.org/', 'https://es-es.facebook.com/FundacionSiempreAdelante/', 'https://twitter.com/sadelanteong', '', '', 'https://www.youtube.com/watch?v=UZ1Pp2AsruQ', '', '2021-02-09 19:08:22'),
(27, 'REDES-Red de Entidades para el Desarrollo Solidario', '', 'Somos una alianza de 55 ONGD/Fundaciones de Cooperación Internacional, vinculadas a congregaciones eclesiales. Trabajamos en Incidencia Política, Educación Transformadora, tenemos programas de Voluntariado Internacional y local.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/redes_ongd.jpg\" />\r\n\r\n\r\n<br>\r\n<br>\r\nEn VOLUNFAIR 2021 estamos representadas por nuestras socias Entreculturas (programa Volpa de voluntarido internacional), Misiones Salesianas (voluntariado internacional y local en Madrid, Valencia, Leon y Bilbao), San Vicente de Paul (voluntariado con personas sin hogar, mayores e infancia, en diversas localidades), Fundación Lares (voluntariado con personas mayores y dependientes), Delwende (voluntariado con menores y socio-sanitario en diversas localidades) e Itaka-Escolapios (voluntariado con menores en riesgo, en Madrid, Valencia y Albacete).', NULL, NULL, 'secretaria.general@redes-ongd.org', '27', 'https://www.redes-ongd.org/', 'https://es-es.facebook.com/Redes.Ongd', 'https://twitter.com/redes_ongd?lang=es', 'https://www.instagram.com/redongdmad/?hl=es', 'https://es.linkedin.com/in/red-ongd-madrid-organizaciones-de-desarrollo-de-la-cm-12b9651b6', 'https://www.youtube.com/watch?v=26eM_810WgE', '', '2021-02-10 08:59:07'),
(28, 'F. San Juan del Castillo', '', 'Nuestro objetivo es contribuir a la construcción de una sociedad más justa, integrada, plural y cohesionada con la aportación de personas españolas y migrantes de diversos orígenes, desde una mirada a quienes sufren más riesgo de exclusión social.\r\nDesde nuestros dos centros de Pueblos Unidos y Padre Rubio en Madrid, realizamos nuestra labor de intervención a través de la acogida, la atención jurídica, el acompañamiento en programas de acogida residencial, la formación para la inserción laboral y la promoción del empleo digno.\r\nAdemás de los programas de atención directa, realizamos acciones de  sensibilización, formación e incidencia pública, orientadas a acompañar, servir y\r\ndefender la causa de las personas, familias y grupos de migrantes y refugiados.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/San-1.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/San-2.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/San-3.JPG\" />\r\n\r\n', NULL, NULL, 'voluntariado@pueblosunidos.org', '28', 'https://www.fundacionseres.org/Paginas/Campus/Empresa.aspx?IDo=153', '', '', '', '', '', '', '2021-02-09 21:51:44'),
(29, 'Siervas de Jesús de la Caridad', '', 'Somos religiosas Siervas de Jesús de la Caridad, con presencia en 16 países. Nuestro apostolado y la experiencia misionera se desarrolla en el campo de la salud y acción social: cuidado y asistencia de enfermos, ancianos, niños, familias, pobres, etc. \r\n\r\n<b>Información de contacto</b>:\r\nTelegram: <a href=\"https://t.me/siervasdejesus\">https://t.me/siervasdejesus</a>\r\n\r\nHermana Carmen +34 638 274 336 - carmenssdj@gmail.com', NULL, NULL, 'blancaalonsosdj@gmail.com', '29', 'https://www.siervasdejesus.com/', 'https://es-es.facebook.com/siervasdjesus', '', '', '', 'https://www.youtube.com/watch?v=8SQDsUkfilI', '', '2021-02-11 10:23:07'),
(30, 'Asociación Taous', '', 'Asociación Taous es un programa de voluntariado de bajo coste dedicado a proporcionar a sus voluntarios la oportunidad de desarrollar distintos proyectos en el autentico Marruecos. ASO Taous surgió a partir de la colaboración entre un miembro de Peace Corps Volunteer y personas de la comunidad en la que ella trabajaba.', NULL, NULL, 'taousaso@gmail.com', '30', 'http://asociaciontaous.org/', 'https://es-es.facebook.com/VoluntariadoMarruecos/', 'https://twitter.com/asociaciontaous?lang=es', 'https://www.instagram.com/asociacion_taous/?hl=es', '', 'https://www.youtube.com/watch?v=40j5qes6iBU', '', '2021-02-08 19:30:21'),
(31, 'KUBUKA', '', 'KUBUKA es una Asociación sin ánimo de lucro cuya misión es crear un desarrollo sostenible en las comunidades más vulnerables de Kenia y Zambia, apoyando proyectos de emprendimiento, educación e inclusión social, que nacen y perduran gracias al esfuerzo y empoderamiento de las comunidades beneficiarias. \r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Kubuka-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Kubuka-2.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Kubuka-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Kubuka-4.jpg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'alejandracgil@kubuka.org', '31', 'https://www.kubuka.org/', 'https://es-la.facebook.com/kubukamxe/', 'https://twitter.com/kubuka_mxe', 'https://www.instagram.com/kubuka_mxe/?hl=es', 'https://es.linkedin.com/company/kubuka', '', '', '2021-02-09 18:54:52'),
(32, 'JATARI', '', 'Somos un grupo de jóvenes católicos que colaboramos con distintos voluntariados en Madrid, y organizamos el nuestro propio en Perú. \r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Jatari-1.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Jatari-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Jatari-3.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Jatari-4.JPG\" />\r\n<br>\r\n<br>\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Jatari-5.JPG\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'asociacionjatari@gmail.com', '32', 'https://www.misionjatari.org/', 'https://www.facebook.com/MisionJatari/', '', 'https://www.instagram.com/misionjatari/?hl=es', '', 'https://www.youtube.com/watch?v=U7iVPVCYOYE', '', '2021-02-09 19:01:27'),
(33, 'Asociación Hontanar', '', 'Hontanar es una organización enmarcada en la Obra Social de los Franciscanos de la TOR y conformada por personas voluntarias que se sienten comprometidas con los más desfavorecidos. Tenemos como objetivo acompañar a personas en riesgo de exclusión social para su rehabilitación como personas y su re inserción en la sociedad.\r\nA través de nuestro programa de adicciones trabajamos en la prevención de la marginación y atención a drogodependientes en proceso de desintoxicación, rehabilitación y reinserción.\r\n\r\nNuestros objetivos son: \r\n\r\n-Apoyar la inclusión social de personas con adicciones en un piso soporte al tratamiento terapéutico en aras de conseguir la vida independiente.\r\n\r\n-Ofrecer el servicio de alojamiento y alimentación a todos los residentes.\r\n\r\n-Establecer un equipo de voluntarios/as para el necesario acompañamiento del proceso rehabilitador y de reinserción de los residentes, promoviendo el voluntariado y la participación social.\r\n\r\n-Desarrollar acciones de prevención y sensibilización social en el ámbito de las adicciones. Orientar y asesorar en consultas para tratamiento de adicciones.', NULL, NULL, 'jlgbote@gmail.com', '33', 'https://asociacionhontanar.org/', 'https://es-es.facebook.com/asociacionhontanar', '', '', 'https://es.linkedin.com/in/asociaci%C3%B3n-hontanar-67006b66', '', '', '2021-02-08 19:35:41'),
(34, 'Future for Africa', '', 'Somos una ONG que trabaja en las comunidades más pobres del norte de Ghana con el objetivo de ofrecer una mejor educación para los niños. Además trabajamos en hospitales para ofrecer una asistencia sanitaria digna, recaudamos dinero para la construcción de pozos y saneamiento de agua y realizamos proyectos para empoderar a las mujeres de comunidades pobres que deben tirar adelante sus familias.', NULL, NULL, 'future4africa.spain@gmail.com', '34', 'https://future4afrika.org/', 'https://es-es.facebook.com/futureforafrica%20/', 'https://twitter.com/future4africagh?lang=es', 'https://www.instagram.com/future4africa/?hl=es', '', '', '', '2021-02-08 19:52:16'),
(36, 'Afrikable', '', 'Afrikable es una ONGD española que desde 2009 trabaja para lograr el empoderamiento de la mujer y el desarrollo infantil en la isla de Lamu, Kenia; prestando especial atención a la población en situación de extrema pobreza y riesgo de exclusión social.\r\n\r\nDesarrollamos nuestro trabajo en los siguientes sectores de intervención: Comercio Justo, Desarrollo infantil, Salud reproductiva y materna (Maternity Home), Voluntariado y sensibilización, Protección del medio ambiente.\r\n\r\nAsimismo, y a través del Programa de Vacaciones Solidarias, el objetivo principal es mostrar la realidad de las mujeres en los países en vías de desarrollo. Ofreciendo al participante la posibilidad de formar parte de nuestra lucha por un mundo mejor y más justo y convirtiéndose a su regreso en un agente de sensibilización en su comunidad.\r\n\r\nEl voluntariado es una de las mejores herramientas que tiene la sociedad civil para cambiar las cosas. Sin la ayuda de los millones de voluntarios y voluntarias de todo el mundo, una gran parte de los avances sociales logrados hasta hoy no habrían sido posibles.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afrikable1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afrikable2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afrikable3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/afrikable4.jpg\" />\r\n', NULL, NULL, 'cobalcar2000@yahoo.es', '35', 'https://www.afrikable.org/', 'https://www.facebook.com/afrikable/', 'https://twitter.com/afrikable', '', 'https://es.linkedin.com/company/afrikable-ong', 'https://www.youtube.com/watch?v=mS6JAPDeBcU', '', '2021-02-12 11:09:39'),
(37, 'U4Impact (TFCoop)', '', 'Conectamos universitarios con organizaciones para realizar proyectos sociales o ambientales a través de sus TFG/M. ', NULL, NULL, 'manuel.docavo@tfcoop.org', '36', 'https://www.u4impact.org/', '', 'https://twitter.com/u4impact_tfcoop', 'https://www.instagram.com/u4impact_tfcoop/?hl=es', 'https://es.linkedin.com/company/u4impact-tfcoop', '', '', '2021-02-08 19:57:52'),
(38, 'Fundación Agua de Coco', '', 'Agua de Coco es una fundación que se dedica desde 1994 a la cooperación internacional y desde hace diez años a la sensibilización y educación para el desarrollo. Contribuir a mejorar la calidad de vida de las personas en riesgo de exclusión social en los países del Sur, principalmente Madagascar y Camboya y centrándonos especialmente en las mujeres y la infancia, a través de la educación como un motor para el desarrollo de las comunidades. Trabajamos a través de estos ejes principales: educación, salud, ambiente y educación al desarrollo. Tenemos tanto voluntariado local como internacional. En estos momentos muchos de nuestros voluntariados están modificados por la situación creada por el COVID19.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/agua-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Agua-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Agua-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/Agua-4.jpg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'sensibilizacion@aguadecoco.org', '37', 'https://aguadecoco.org/', 'https://es-es.facebook.com/FundacionAguadeCoco', '', '', 'https://www.linkedin.com/company/fundaci-n-agua-de-coco', '', '', '2021-02-09 19:09:55'),
(39, 'Asociación REDMADRE', '', 'REDMADRE es una Asociación que apoya a la mujer embarazada y/o madre reciente que se encuentra en situación de vulnerabilidad de cualquier tipo por razón de su embarazo.', NULL, NULL, 'comunicacionmadrid@redmadre.es', '38', 'https://www.redmadre.es/', 'https://www.facebook.com/FundaREDMADRE/', 'https://twitter.com/redmadrefunda?lang=es', 'https://www.instagram.com/fundacion_redmadre/?hl=es', 'https://es.linkedin.com/company/fundaci%C3%B3n-redmadre', 'https://www.youtube.com/watch?v=GxF_Y7s617s', '', '2021-02-08 20:01:15'),
(40, 'Fundación Más Vida', '', 'Somos una Fundación de jóvenes comprometidos con la defensa de la vida y de la maternidad. ¡Ya somos más de 400 jóvenes! Desde Septiembre de 2013, realizamos actividades para formar, concienciar y movilizar a los jóvenes sobre el valor de toda vida humana. Ofrecemos formación, concienciación y activismo. Algunas de nuestras actividades son las siguientes: Charlas en colegios y universidades, debates, conferencias, curso de oratoria, realización de videos informativos, mesas informativas, preparación y realización de la manifestación \"\"Sí a la Vida\"\", campaña de recogida de alimentos para familias sin recursos, campaña de recogida de productos de maternidad para madres sin recursos a raíz de la crisis del COVID-19, Campaña \"\"Ser madre es la leche\"\" (recogida de leche en polvo y productos asociados para madres sin recursos), Campaña de Navidad (Recogida y compra de juguetes para niños sin recursos), Fiesta Benéfica Verano, Asistencia y Organización de Congresos Nacionales e Internacionales...¡y mucho más! \r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/vida.png\" />\r\n', NULL, NULL, 'renedobru@gmail.com', '39', 'https://www.masvida.eu/', 'https://www.facebook.com/masvidaeu', 'https://twitter.com/masvidaeu', 'https://www.instagram.com/masvidaeu/', '', 'https://www.youtube.com/watch?v=aN3z-02hoUI', '', '2021-02-09 19:27:31'),
(41, 'The Social Heroes', '', 'Plataforma que ayuda a buscar voluntarios a las entidades sociales.\r\n', NULL, NULL, 'contact@thesocialheroes.com', '40', 'https://www.thesocialheroes.com/', 'https://www.facebook.com/thesocialheroesWeb/', '', 'https://www.instagram.com/thesocialheroes_/?hl=es', 'https://es.linkedin.com/company/the-social-heroes', '', '', '2021-02-09 20:07:14');
INSERT INTO `ongs` (`id_ong`, `nombre_ong`, `descripcion_ong`, `voluntariado_ong`, `color_ong`, `fondo_ong`, `email_ong`, `logo_ong`, `web_ong`, `facebook_ong`, `twitter_ong`, `instagram_ong`, `linkedin_ong`, `video_ong`, `direccion_ong`, `fecha_inscripcion`) VALUES
(42, 'Oficina de Aprendizaje-Servicio de la UPM', '', 'La oficina de Aprendizaje-Servicio (ApS) tiene como misión fomentar el aprendizaje a través de la experiencia práctica que proporciona el voluntariado, utilizando la metodología Aprendizaje-Servicio, promocionando iniciativas que la apliquen, gestionando todo lo relacionado con ellas y difundiendo las experiencias y resultados obtenidos. Los proyectos son muy variados: desarrollo de prótesis para niños con discapacidad funcional, reducción del uso de plásticos o de la pobreza energética, etc.', NULL, NULL, 'oficina-aps@upm.es', '41', 'http://aprendizajeservicio.upm.es/', '', 'https://twitter.com/ieducativa_upm?lang=es', '', '', '', '', '2021-02-08 20:18:20'),
(43, 'PSE Por la Sonrisa de un Niño ', '', 'PSE Por la Sonrisa de un Niño es una ONG que se encuentra en Camboya. Tiene como misión sacar a los niños de la extrema miseria, conduciéndoles hacia un oficio cualificado, digno y correctamente remunerado.\r\n\r\nDurante el mes de verano, si eres mayor de 19 años, puedes ir como voluntario al Programa de Continuidad Escolar. Este se realiza para que durante el mes de agosto, en el que los niños no tienen clases, no vuelvan a las calles o los vertederos.\r\n\r\nDesde el equipo de sensibilización transmitimos la historia de Camboya y la historia de la ONG, qué es lo que se hace durante todo el año y en verano en Camboya, y cómo se puede participar como voluntario tanto en España como en Camboya.\r\n\r\n<br>\r\n<br>\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/PSE-1.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/PSE-2.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/PSE-3.jpg\" />\r\n<br>\r\n<br>\r\n\r\n\r\n\r\n<img style=\"width:50%\" class=\"img-centrada\" src=\"./assets/base/img/volunfair/fotos-ongs/PSE-4.jpg\" />\r\n<br>\r\n<br>\r\n', NULL, NULL, 'sensibilización@psncamboya.org', '42', 'https://www.psncamboya.org', 'https://es-es.facebook.com/pse.porlasonrisadeunnino/', 'https://twitter.com/pse_espana', 'https://www.instagram.com/pse_espana/', '', 'https://www.youtube.com/watch?v=4YSI3Q57', '', '2021-02-09 18:48:02'),
(45, 'Cártias Madrid Universitaria', '', 'Cáritas Madrid Universitaria acerca a los universitarios los más de 400 proyectos y más de 10.000 voluntarios, Cáritas Madrid es la mayor entidad de ayuda a personas en vulnerabilidad. Además, cuenta con proyectos propios, diseñados por y para universitarios, como Bocadillo Solidario o Nadie Sin Cenar. ¿Quieres hacer algún tipo de voluntariado en Madrid? ¡Este es tu sitio!', NULL, NULL, 'mig.fernandez.martin@gmail.com', NULL, 'caritasmadriduniversitaria.org', 'https://www.facebook.com/CaritasMadrid', '', 'https://www.instagram.com/caritasmadriduniversitaria/?hl=es', 'https://www.linkedin.com/company/c%C3%A1ritas-madrid/?originalSubdomain=es', '', '', '2021-02-11 16:02:38');

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
-- Estructura de tabla para la tabla `voluntariado`
--

DROP TABLE IF EXISTS `voluntariado`;
CREATE TABLE `voluntariado` (
  `id_voluntariado` int(11) NOT NULL,
  `ong_voluntariado` int(11) NOT NULL,
  `lugar_voluntariado` int(11) NOT NULL,
  `tipo_voluntariado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='voluntariados ofertados';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado_lugar`
--

DROP TABLE IF EXISTS `voluntariado_lugar`;
CREATE TABLE `voluntariado_lugar` (
  `id_ong` int(11) NOT NULL,
  `id_voluntariado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `voluntariado_lugar`
--

INSERT INTO `voluntariado_lugar` (`id_ong`, `id_voluntariado`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 1),
(3, 3),
(4, 3),
(5, 2),
(6, 1),
(6, 2),
(7, 2),
(8, 2),
(8, 3),
(9, 1),
(10, 3),
(11, 2),
(11, 3),
(12, 2),
(13, 3),
(14, 2),
(15, 3),
(16, 2),
(17, 1),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 2),
(20, 1),
(20, 3),
(21, 2),
(22, 1),
(22, 2),
(22, 3),
(23, 2),
(24, 2),
(25, 2),
(26, 3),
(27, 1),
(27, 2),
(27, 3),
(28, 2),
(29, 3),
(30, 3),
(31, 3),
(32, 2),
(32, 3),
(33, 2),
(34, 3),
(36, 1),
(36, 2),
(36, 3),
(37, 1),
(38, 1),
(38, 3),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(40, 3),
(41, 1),
(41, 2),
(41, 3),
(41, 10),
(42, 2),
(43, 1),
(43, 3),
(8, 1),
(8, 1),
(45, 2),
(45, 3);

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
-- Volcado de datos para la tabla `voluntariado_proyecto`
--

INSERT INTO `voluntariado_proyecto` (`id_ong`, `id_proyecto`) VALUES
(1, 4),
(2, 2),
(2, 6),
(3, 2),
(3, 6),
(3, 11),
(4, 2),
(4, 4),
(5, 6),
(6, 1),
(6, 2),
(6, 3),
(6, 6),
(7, 7),
(8, 4),
(9, 1),
(9, 3),
(9, 5),
(9, 6),
(10, 2),
(10, 4),
(10, 6),
(10, 11),
(11, 2),
(11, 6),
(11, 11),
(12, 4),
(12, 6),
(13, 1),
(13, 4),
(13, 6),
(13, 7),
(14, 2),
(14, 6),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(15, 6),
(15, 7),
(15, 8),
(15, 9),
(15, 10),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(16, 6),
(16, 7),
(16, 8),
(17, 11),
(18, 4),
(18, 5),
(18, 6),
(18, 11),
(19, 2),
(20, 6),
(20, 9),
(20, 10),
(21, 7),
(22, 4),
(22, 6),
(22, 7),
(22, 9),
(22, 10),
(23, 6),
(23, 11),
(24, 1),
(24, 2),
(24, 3),
(24, 6),
(24, 7),
(25, 1),
(25, 3),
(25, 5),
(25, 11),
(26, 5),
(26, 6),
(27, 1),
(27, 2),
(27, 3),
(27, 4),
(27, 5),
(27, 6),
(27, 8),
(27, 10),
(28, 11),
(29, 1),
(29, 2),
(29, 3),
(29, 4),
(29, 5),
(29, 6),
(30, 6),
(30, 7),
(30, 10),
(31, 2),
(31, 4),
(31, 6),
(31, 7),
(31, 10),
(32, 1),
(32, 2),
(32, 3),
(32, 5),
(32, 6),
(32, 7),
(33, 8),
(34, 2),
(34, 3),
(34, 4),
(34, 6),
(36, 2),
(36, 4),
(36, 6),
(36, 11),
(37, 1),
(37, 3),
(37, 4),
(37, 6),
(37, 7),
(37, 10),
(37, 11),
(38, 2),
(38, 6),
(38, 10),
(39, 2),
(39, 11),
(40, 2),
(40, 4),
(40, 6),
(40, 11),
(41, 1),
(41, 2),
(41, 3),
(41, 4),
(41, 5),
(41, 6),
(41, 7),
(41, 8),
(41, 9),
(41, 10),
(41, 11),
(42, 1),
(42, 2),
(42, 3),
(42, 4),
(42, 5),
(42, 6),
(42, 7),
(42, 8),
(42, 9),
(42, 10),
(42, 11),
(43, 2),
(43, 4),
(43, 6),
(43, 7),
(45, 4);

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
-- Indices de la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  ADD PRIMARY KEY (`id_voluntariado`),
  ADD KEY `ong_voluntariado` (`ong_voluntariado`),
  ADD KEY `lugar_voluntariado` (`lugar_voluntariado`),
  ADD KEY `tipo_voluntariado` (`tipo_voluntariado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id_voluntariado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ongs`
--
ALTER TABLE `ongs`
  MODIFY `id_ong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rifa`
--
ALTER TABLE `rifa`
  MODIFY `id_rifa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  MODIFY `id_voluntariado` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_ong`) REFERENCES `ongs` (`id_ong`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
