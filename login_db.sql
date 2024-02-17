-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 05:23:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(80) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bio` text NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `contraseña`, `photo`, `name`, `bio`, `phone`) VALUES
(1, 'mono@', '$2y$10$HsFYn8R6E3DjKMeJjBk0TO25xToCjn8aYfJh6gIXlWdCNQ0jhji4m', '', '', '', ''),
(2, 'admind', 'casa', '', 'casa', 'la casa de las dos', '123456879'),
(3, '', '$2y$10$/c53.w3MckD6T3CfNVuFxOL/UPW8VTp4pgMDDQIyaxeQTG7jISKty', '', '', '', ''),
(4, 'a@', '$2y$10$WmcnSGhZ.xbh1SogrXo3meXC/Ii0erLvXto9/0u3zT2gcT/ofD0UO', '', 'Victor Gutierrez', 'hola', '3218907254'),
(7, 'b@', '$2y$10$y2PCPWpKIxxejdubJH42.OLhK0x6ct0569mNety.u2wO6F8fSrBm6', '', 'Victor Gutierrez', 'hola', '3218907254'),
(12, 'a@gmail.com', '$2y$10$hU7PaYmx65UMIQAzQXuaiunjrqUuLirxnmkavt5aUcBK2GT6AhJ0u', '', 'Victor Gutierrez', 'hola', '3218907254'),
(13, 'b@gmail.com', '$2y$10$W6TA2p9VwCwAyUU5PayeBetdtdh2wePZJhy3zz0sGGoXdNFh8.RlK', '', 'Victor Gutierrez', 'hola', '3218907254'),
(14, 'v', '$2y$10$xWvm1L3RT1S2fH3g5D0NrOjUh.oHagtd/GpT2qMBUhGV/qyLyWAEe', '', 'vc', 'vbcxbv', 'vcb'),
(15, 'hdf', '$2y$10$Ik7qBWE2smUUPF2JLkeU/.ztvEnwWdQeHiLATCiLY05r177DkElnm', '', 'gjh', 'gfdh', 'hgdf'),
(16, 'gd', '$2y$10$D3EzYu2WkQZJ51YjD2MG0O8LYjw6ro88w26REjxcoLcGZ75xTYFr6', '', 'gjh', 'gfdh', 'hgdf'),
(17, 'ds', '$2y$10$2tCSyGjsytv1MsmKFK18dOHkg7L2eutkv/Qnt4gOdCIHkXf5zaf/m', '', 'gjh', 'gfdh', 'hgdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
