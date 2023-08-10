-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-07-2021 a las 01:58:31
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--
CREATE DATABASE IF NOT EXISTS `prueba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prueba`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`ID`, `img`) VALUES
(1, 'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2019/05/24/15586945059257.jpg'),
(2, 'https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/195148534/original/542152be894f1925b76c78b0df85ccd00c30e918/give-you-coaching-in-league-of-legends.jpg'),
(3, 'https://as.com/esports/imagenes/2017/12/22/league_of_legends/1513959280_234628_1513959476_noticia_normal.jpg'),
(4, 'https://res.cloudinary.com/befan/image/upload/w_722,h_406,q_auto/v1600901300/8D29CA7C29DEE632BF68116B5EC0954C.png'),
(5, 'https://cdn1.dotesports.com/wp-content/uploads/2019/11/12134034/42288797970_6a0905d658_k.jpg'),
(6, 'https://cdn.vox-cdn.com/thumbor/ljfRIiRKY-dGLigWUdW58UbDm5Y=/0x0:2048x1365/1200x800/filters:focal(861x520:1187x846)/cdn.vox-cdn.com/uploads/chorus_image/image/67461646/49062449413_8dc1cfe8c2_k.0.jpg'),
(7, 'https://esportsone.com/wp-content/uploads/2020/07/071420-twitch2-1.jpg'),
(8, 'https://cl.buscafs.com/www.levelup.com/public/uploads/images/656598/656598_832x416.jpg'),
(9, 'https://depor.com/resizer/bSxLrZPWGWmS-rjzbvOSVmjrbaU=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/WQQCGQYOVVHDDAXD44OWKAO6B4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `email`, `token`) VALUES
(1, 'Gerardo', '$2y$10$wbK2HdDRnXUVPQQCkyJuku6e0e5wj3o876PSaoG1G0NzCf6O', 'gera_rs1906@live.com.mx', ''),
(2, 'yo', '$2y$10$zCZKHYAVb/.3mUCLwLCFC.pIunC423G2Ioxy/3mOFgW7ytY4', 'gerardors192@gmail.com', ''),
(3, 'yolo', '$2y$10$kgonnT3xXqHU6f9dT5V74.BHv5/pKuDILdNLcLcomwcLUy9/', 'gerardo.ramirez@uniat.edu.mx', ''),
(4, 'Gerardo', '$2y$10$3rKOkg7DKTUN5rGTbDcpoOZY9.eB16zC7RJvks/DW.z6NFWx', 'lalo@hotmail.com', ''),
(5, 'Gerardo', '$2y$10$57L74NFgpC7jyg8b5REDleQ0Ea6EKz1895SVta7P69NwVidPVpDI2', 'pepe@hotmail.com', ''),
(6, 'Gerardo', '$2y$10$.53leAWmhvtZUXXOH0YKI.1ChIe3r/D6EVnnOEAlP/bfPSSP1bb7y', 'taco@hotmail.com', ''),
(7, 'Gerardo', '$2y$10$TssKFHlkW8o74f1OWdlH3OE/6QIgMWfq4yQYk6E/BshaVDbH8nqPK', 'pero@hotmail.com', ''),
(8, 'IPV1218', '$2y$10$jfDKhihk1mHIdj/tW7uFTu4Ad6hg798PMKD4SolF2Kh0mD.rNJOr.', 'garabato_slp@hotmail.com', ''),
(9, 'Gerardo', '$2y$10$CFA7ivq0/0kl.EmD3UxAvu5JdpSgyrDwjFfGZyzf3u5F5VoLwRhRq', 'yolo@hotmail.com', '9997a68429a9e1e4218f37a8149c7607'),
(10, 'Gerardo', '$2y$10$bNRphaiyJ16n8kz0TZk6y.ll0s6PbZWADfcXI2.0vwzeTKOlLE1aC', 'gerardors1923@gmail.com', ''),
(11, 'IPV1218', '$2y$10$33PeKxeVsZJ3q0Fow.mj3enJnYwjZrMYA.BGKgjuX5IjPNEVRpp/6', 'pepa@hotmail.com', ''),
(16, 'Gerardo', '$2y$10$AIS5GBDn3KrPr6XDuG3Wnu7d.FGGKRlz7vwPITKMNjN0OE30AbdpK', 'yolo12@hotmail.com', '94c0c98e50b8e7c692a78f3a0181a9b5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
