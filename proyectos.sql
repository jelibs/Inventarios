-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2023 a las 01:50:32
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cctv`
--

CREATE TABLE `cctv` (
  `placa` varchar(9) NOT NULL,
  `videograbador` varchar(16) DEFAULT NULL,
  `sd_1` varchar(14) DEFAULT NULL,
  `sd_2` varchar(14) DEFAULT 'No hay SD 2',
  `cam_int` varchar(12) DEFAULT NULL,
  `cam_ext` varchar(12) DEFAULT NULL,
  `sim` varchar(21) DEFAULT NULL,
  `linea` varchar(10) DEFAULT NULL,
  `orden` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cctv`
--

INSERT INTO `cctv` (`placa`, `videograbador`, `sd_1`, `sd_2`, `cam_int`, `cam_ext`, `sim`, `linea`, `orden`) VALUES
('TL-003A-1', 'WP19100149S00065', 'SD 1 sin serie', 'No hay SD 2', '0018F540B1B2', '0018F540B179', '8952050002228239629F', '2371266402', ''),
('TL-005A-1', 'WP19100149S00078', 'GPC-2510-2246', 'SD 2 sin serie', '0018F540B1A7', '0018F540B176', '8952050002228236179F', '2371266475', ''),
('TL-018A-1', 'WP19100149S00009', 'SD 1 sin serie', 'No hay SD 2', '0018F540B1AB', '0018F540B141', '8952050002228239637F', '2371266401', ''),
('TL-041A-1', 'WP19100149S00023', 'SD sin serie', 'No hay SD 2', '0018F540B19C', '0018F540B154', '8952050002228235890F', '2371266552', ''),
('TL-044A-1', 'WP19010049S00021', 'SD 1 sin serie', 'No hay SD 2', '0018F540B197', '0018F540B155', '8952050002228239819F', '2371266419', ''),
('TL-060A-1', 'WP19010039S00247', 'SD 1 sin serie', 'No hay SD 2', '0018F535BA00', '0018F535B395', '8952050002228240056F', '2371266437', ''),
('TL-066A-1', 'WP19010039S00146', 'GPC-0509-2177', 'No hay SD 2', '0018F535BBEC', '0018F535B36F', '8952050002228240072F', '2371266432', ''),
('TL-068A-1', 'WP19100149S00085', 'GPC-1512-2201', 'No hay SD 2', '0018F540B1D6', '0018F540B156', '8952050002228239769F', '2371266424', ''),
('TL-074A-1', 'WP18040013S00016', 'SD 1 sin serie', 'No hay SD 2', '0018F52DCEA4', '0018F52DCE2A', '8952050002228240031F', '2371266439', ''),
('TL-079A-1', 'WP19100149S00081', 'SD 1 sin serie', 'No hay SD 2', '0018F540B1C1', '0018F540B14D', '8952050002228236021F', '2371266565', ''),
('TL-080A-1', 'WP19010039S00028', 'SD 1 sin serie', 'No hay SD 2', '0018F53508F5', '0018F535B360', '8952050002228239645F', 'No hay l?n', ''),
('TL-094A-1', 'WM19090886S0054', 'GPC-0419-2133', 'GPC-0419-2134', '0018F53F892D', 'XMRF19047694', '8952052220008236187F', '2371266474', ''),
('TL-103A-1', 'WP19010049S00074', 'GPC-0715-2144', 'No hay SD 2', '0018F540B1D5', '0018F540B173', '8952050002228240379F', '2371195842', ''),
('TL-104A-1', 'WP19010039S00003', 'GPC-1512-2219', 'No hay SD 2', '0018F535BBC1', '0018F535B3D2', '8952050002228240288F', '2371264672', ''),
('TL-107A-1', 'WP19010039S00215', 'GPC-2510-2238', 'SD 2 sin serie', '0018F535B29C', '0018F535B432', '8952050002228239892F', '2371266465', ''),
('TL-108A-1', 'WP18040013S00132', 'GPC-2510-2234', 'SD 2 sin serie', '0018F52DCE93', '0018F52DCB87', '8952050002228240114F', '2371266356', ''),
('TL-109A-1', 'WP19010039S00289', 'GPC-0715-2147', 'No hay SD 2', '0018F535B2AC', '0018F535AAFC', '8952050002228236385F', 'No hay l?n', ''),
('TL-110A-1', 'WP18040013S00102', 'SD 1 sin serie', 'SD 2 sin serie', '0018F52DCD03', '0018F52DCE1C', '8952050002228239835F', 'No hay l?n', ''),
('TL-119A-1', 'WP19010039S00022', 'GPC-2510-2233', 'SD 2 sin serie', '0018F535BA13', '0018F535B39E', '8952050002228240064F', '2371266436', ''),
('TL-122A-1', 'WP19100149S00073', 'GPC-1512-2212', 'No hay SD 2', '0018F540B1A6', '0018F540B17D', '8952050002228236237F', '2371266469', ''),
('TL-123A-1', 'WP19010039S00251', 'GPC-1512-2218', 'No hay SD 2', '0018F535B302', '0018F535B3A3', '8952050002228239652F', '2371266399', ''),
('TL-125A-1', 'WP19010039S00122', 'GPC-0509-2185', 'No hay SD 2', '0018F535BA43', '0018F535B323', '8952050002228239660F', 'No hay l?n', ''),
('TL-130A-1', 'WP19010039S00331', 'GPC-1512-2211', 'No hay SD 2', '0018F535B2EF', '0018F535AB15', '8952050002228239702F', 'No hay l?n', ''),
('TL-138A-1', 'WP19010039S00093', 'SD 1 sin serie', 'No hay SD 2', '0018F535BA6D', '0018F535B322', '892050002228235577F', '2371266526', ''),
('TL-139A-1', 'WP19010039S00121', 'GPC-2422-034', 'SD 2 sin serie', '0018F535BA59', '0018F535B38C', '8952050002228235569F', 'No hay l?n', ''),
('TL-140A-1', 'WP19010039S00329', 'GPC-1512-2200', 'No hay SD 2', '0018F535B2A2', '018F535AB1A', '8952050002228235593F', '2371266524', ''),
('TL-144A-1', 'WP19010039S00095', 'SD 1 sin serie', 'No hay SD 2', '0018F535BA50', '0018F535B3AB', '8952050002228239884F', '2371266466', ''),
('TL-145A-1', 'WP18020020S00070', 'GPC-2422-040', 'No hay SD 2', '0018F52C1749', '0018F52C19E0', '89520520002228235585F', '2371266525', ''),
('TL-169A-1', 'WP19100149S00032', 'GPC-0509-2186', 'No hay SD 2', '0018F540B193', '0018F540B14B', '8952050002228240023F', '2371266440', ''),
('TL-185A-1', 'WP19100149S00004', 'SD 1 sin serie', 'No hay SD 2', '0018F540B19D', '0018F540B16C', '8952050002228239678F', '2371266397', ''),
('TL-186A-1', 'WP19100149S00038', 'SD 1 sin serie', 'No hay SD 2', '0018F540B1B9', '0018F540B171', '8952050002228240049F', '2371266438', ''),
('TL-242A-1', 'WM19090907S0267', 'GPC-0419-2139', 'GPC-0419-2139', '0018F53EA0C6', '0018F53EA0C6', '8952050002228235916F', '2371266550', ''),
('TL-250A-1', 'WM19090886S0052', 'GPC-0419-2113', 'GPC-0419-2114', '0018F53F8908', '0018F53F8908', '8952050002228239439F', '2371266382', ''),
('TL-251A-1', 'WM19090886S0056', 'GPC-0419-2115', 'GPC-0419-2116', 'Sin MAC', 'Sin MAC', 'SIM sin serie', 'No hay l?n', ''),
('TL-261A-1', 'WM19090907S0290', 'SD 1 sin serie', 'No hay SD 2', 'Sin MAC', 'Sin MAC', '8952050002228239454F', '2371266380', ''),
('TL-267A-1', 'WP19010039S00080', 'GPC-2510-2249', 'SD 2 sin serie', '0018F535BA57', '0018F535B3AF', '8952050002228235908F', '2371266551', ''),
('TL-272A-1', 'WP18040013S00189', 'GPC-2402-2027', 'No hay SD 2', '0018F52DCEF3', '0018F52DCE46', '8952050002228239686F', '2371266396', ''),
('TL-278A-1', 'WP19010039S00023', 'GPC-2422-031', 'No hay SD 2', '0018F53508E7', '0018F535B347', '8952050002228239876F', '2371266467', ''),
('TL-284A-1', 'WP19010039S00332', 'GPC-1512-2205', 'No hay SD 2', '0018F535B2F0', '0018F535AB1C', '8952050002228239793F', '2371266421', ''),
('TL-291A-1', 'WP19010039S00286', 'GPC-2510-2237', 'No hay SD 2', '0018F535BA73', '0018F535AAE8', '8952050002228239827F', '2371266468', ''),
('TL-140A-1', 'WP19010039S00329', 'GPC-1512-2200', '', '0018F535B2A2', '0018F535AB1A', '8952050002228235593F', '2371266524', '21-3062'),
('TL-145A-1', 'WP18020020S00070', 'GPC-2422-040', '', '0018F52C1749', '0018F52C19E0', '8952050002228235585F', '2371266525', '21-3064');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gps`
--

CREATE TABLE `gps` (
  `placa` varchar(15) NOT NULL,
  `gps` varchar(30) NOT NULL,
  `equipo` varchar(30) NOT NULL,
  `sim` varchar(20) NOT NULL,
  `linea` varchar(10) NOT NULL,
  `orden` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `numero_orden` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `sistema` varchar(50) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `serie` varchar(300) NOT NULL,
  `defectos` text NOT NULL,
  `descripcion` text NOT NULL,
  `observacion` text NOT NULL,
  `proyecto` varchar(150) NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `fecha_alta`, `estado`) VALUES
(1, 'Jose Luis', 'joselbravo1@gmail.com', '12345678', '2023-07-07 19:01:00', 1),
(2, 'Juanito', 'juan@gmail.com', '12345678', '0000-00-00 00:00:00', 1),
(3, 'Ramon', 'ramon86@gmail.com', '12345678', '0000-00-00 00:00:00', 1),
(4, 'Reyes', 'rj24@gmail.com', '12345678', '0000-00-00 00:00:00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`placa`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;