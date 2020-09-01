-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2020 a las 01:46:50
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ciaelemental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(19, 'Consultoría');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `nombre`, `ruta`, `fecha`) VALUES
(1, 'Servicios', 'servicios', '2020-08-29 15:35:46'),
(2, 'Ligas de interés', 'ligas-de-interes', '2020-08-29 15:35:52'),
(3, 'Contacto', 'contacto', '2020-08-29 15:36:04'),
(4, 'Inicio', 'index', '2020-08-29 15:36:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `link` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `categoria_id`, `nombre`, `descripcion`, `fecha`, `link`, `status`) VALUES
(68, 19, 'Bootstrap', 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.', '2020-08-28', 'https://getbootstrap.com/docs/4.0/getting-started/introduction/', 0),
(70, 19, 'SAT', 'El Servicio de Administración Tributaria (SAT, por sus siglas) es un órgano desconcentrado de la Secretaria de Hacienda y Crédito Público1​ (SHCP, por sus siglas)', '2020-08-30', 'https://www.sat.gob.mx/home', 0),
(71, 19, 'El economista', 'El Economista​ es un periódico mexicano publicado de lunes a viernes en la Ciudad de México, enfocado a la información económica, financiera y política.', '2020-08-30', 'https://www.eleconomista.com.mx/', 0),
(72, 19, 'La Jornada', 'Las transformaciones nacionales han sido tan vertiginosas y abundantes en estas dos décadas que no es fácil recordar la vida política y mediática del país en 1984, el año que nació La Jornada. ', '2020-08-30', 'https://www.jornada.com.mx/ultimas', 0),
(73, 19, 'Entrepeneur', 'Entrepreneur es una revista estadounidense que ofrece noticias sobre iniciativa empresarial, gestión de pequeñas empresas y negocios en general. La revista se publicó por primera vez en 1977.​​', '2020-08-30', 'https://www.entrepreneur.com/', 0),
(74, 19, 'El financiero', 'El Financiero es un diario mexicano de circulación nacional especializado en economía, finanzas, negocios y política que se imprime en Ciudad de México, propiedad de Grupo Multimedia Lauman.​', '2020-09-02', 'https://elfinanciero.com.mx/', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
