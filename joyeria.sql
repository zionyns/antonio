-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 18-03-2010 a las 18:04:44
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6



DROP DATABASE IF EXISTS joyeria;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `consumoelectrico`
-- 
CREATE DATABASE `joyeria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `joyeria`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `callespoblaciones`
-- 

CREATE TABLE `callespoblaciones` (
  `idCalle` int(11) NOT NULL auto_increment,
  `CodPoblacion` varchar(5) default NULL,
  `Nombre` varchar(200) default NULL,
  `CodPostal` int(11) NOT NULL,
  PRIMARY KEY  (`idCalle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;

-- 
-- Volcar la base de datos para la tabla `callespoblaciones`
-- 

INSERT INTO `callespoblaciones` VALUES (1, '15030', 'AGAR', 15001);
INSERT INTO `callespoblaciones` VALUES (2, '15030', 'ALCALDE MANUEL CASAS', 15001);
INSERT INTO `callespoblaciones` VALUES (3, '15030', 'ALFONSO IX', 15001);
INSERT INTO `callespoblaciones` VALUES (4, '15030', 'AMARGURA', 15001);
INSERT INTO `callespoblaciones` VALUES (5, '15030', 'AMBROSIO FEIJOO', 15001);
INSERT INTO `callespoblaciones` VALUES (6, '15030', 'ANGEL', 15001);
INSERT INTO `callespoblaciones` VALUES (7, '15030', 'ANGELES', 15001);
INSERT INTO `callespoblaciones` VALUES (8, '15030', 'ANGELES,Plazuela', 15001);
INSERT INTO `callespoblaciones` VALUES (9, '15030', 'ATOCHA BAJA,Travesia', 15001);
INSERT INTO `callespoblaciones` VALUES (10, '15030', 'ATOCHA BAJA,Callejon', 15001);
INSERT INTO `callespoblaciones` VALUES (11, '15030', 'ATOCHA BAJA', 15001);
INSERT INTO `callespoblaciones` VALUES (12, '15030', 'AZCARRAGA,Praza', 15001);
INSERT INTO `callespoblaciones` VALUES (13, '15030', 'BAILEN', 15001);
INSERT INTO `callespoblaciones` VALUES (14, '15030', 'BALTASAR PARDAL', 15001);
INSERT INTO `callespoblaciones` VALUES (15, '15030', 'BARRERA', 15001);
INSERT INTO `callespoblaciones` VALUES (16, '15030', 'BOMBAS', 15001);
INSERT INTO `callespoblaciones` VALUES (17, '15030', 'CAMPO ESTRADA', 15001);
INSERT INTO `callespoblaciones` VALUES (18, '15030', 'CAPITAN TRONCOSO', 15001);
INSERT INTO `callespoblaciones` VALUES (19, '15030', 'CARLOS I,Praza', 15001);
INSERT INTO `callespoblaciones` VALUES (20, '15030', 'CARTUCHOS', 15001);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clientes`
-- 

CREATE TABLE `clientes` (
  `Codigo` int(11) NOT NULL auto_increment,
  `Nombre` varchar(50) default NULL,
  `Apellido` varchar(50) default NULL,
  `Apellido2` varchar(50) default NULL,
  `Calle` int(11) NOT NULL,
  `Numero` tinyint(4) NOT NULL,
  `Piso` tinyint(4) NOT NULL,
  `Metros` tinyint(4) NOT NULL,
  `CodigoPoblacion` varchar(5) default NULL,
  `CodigoProvincia` tinyint(4) NOT NULL,
  PRIMARY KEY  (`Codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `clientes`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mediciones`
-- 

CREATE TABLE `mediciones` (
  `idMedicion` int(11) NOT NULL auto_increment,
  `Cliente` int(11) NOT NULL,
  `FechaHora` datetime NOT NULL,
  `KW` decimal(18,2) NOT NULL,
  PRIMARY KEY  (`idMedicion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `mediciones`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `poblaciones`
-- 

CREATE TABLE `poblaciones` (
  `CodigoPoblacion` varchar(5) NOT NULL,
  `Poblacion` varchar(50) NOT NULL,
  `Habitantes` int(11) default NULL,
  `CodigoProvincia` tinyint(4) NOT NULL,
  PRIMARY KEY  (`CodigoPoblacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `poblaciones`
-- 

INSERT INTO `poblaciones` VALUES ('15001', 'Abegondo', 5773, 15);
INSERT INTO `poblaciones` VALUES ('15002', 'Ames', 23219, 15);
INSERT INTO `poblaciones` VALUES ('15003', 'Aranga', 2230, 15);
INSERT INTO `poblaciones` VALUES ('15004', 'Ares', 5405, 15);
INSERT INTO `poblaciones` VALUES ('15005', 'Arteixo', 26739, 15);
INSERT INTO `poblaciones` VALUES ('15006', 'Arzúa', 6532, 15);
INSERT INTO `poblaciones` VALUES ('15007', 'Baña (A)', 4652, 15);
INSERT INTO `poblaciones` VALUES ('15008', 'Bergondo', 6539, 15);
INSERT INTO `poblaciones` VALUES ('15009', 'Betanzos', 13165, 15);
INSERT INTO `poblaciones` VALUES ('15010', 'Boimorto', 2410, 15);
INSERT INTO `poblaciones` VALUES ('15011', 'Boiro', 18554, 15);
INSERT INTO `poblaciones` VALUES ('15012', 'Boqueixón', 4406, 15);
INSERT INTO `poblaciones` VALUES ('15013', 'Brión', 6972, 15);
INSERT INTO `poblaciones` VALUES ('15014', 'Cabana de Bergantiños', 5199, 15);
INSERT INTO `poblaciones` VALUES ('15015', 'Cabanas', 3343, 15);
INSERT INTO `poblaciones` VALUES ('15016', 'Camariñas', 6323, 15);
INSERT INTO `poblaciones` VALUES ('15017', 'Cambre', 22092, 15);
INSERT INTO `poblaciones` VALUES ('15018', 'Capela (A)', 1487, 15);
INSERT INTO `poblaciones` VALUES ('15019', 'Carballo', 29985, 15);
INSERT INTO `poblaciones` VALUES ('15020', 'Carnota', 5112, 15);
INSERT INTO `poblaciones` VALUES ('15021', 'Carral', 5579, 15);


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `provincias`
-- 

CREATE TABLE `provincias` (
  `CodigoProvincia` tinyint(4) NOT NULL auto_increment,
  `Provincia` varchar(30) NOT NULL,
  PRIMARY KEY  (`CodigoProvincia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

-- 
-- Volcar la base de datos para la tabla `provincias`
-- 

INSERT INTO `provincias` VALUES (1, 'Alava');
INSERT INTO `provincias` VALUES (2, 'Albacete');
INSERT INTO `provincias` VALUES (3, 'Alicante');
INSERT INTO `provincias` VALUES (4, 'Almería');
INSERT INTO `provincias` VALUES (33, 'Asturias');
INSERT INTO `provincias` VALUES (5, 'Avila');
INSERT INTO `provincias` VALUES (6, 'Badajoz');
INSERT INTO `provincias` VALUES (7, 'Baleares');
INSERT INTO `provincias` VALUES (8, 'Barcelona');
INSERT INTO `provincias` VALUES (9, 'Burgos');
INSERT INTO `provincias` VALUES (10, 'Cáceres');


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tapellidos`
-- 

CREATE TABLE `tapellidos` (
  `id` int(11) NOT NULL auto_increment,
  `Apellido` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1387 ;

-- 
-- Volcar la base de datos para la tabla `tapellidos`
-- 

INSERT INTO `tapellidos` VALUES (1, 'Ababa');
INSERT INTO `tapellidos` VALUES (2, 'Abade');
INSERT INTO `tapellidos` VALUES (3, 'Abadexo');
INSERT INTO `tapellidos` VALUES (4, 'Abal');
INSERT INTO `tapellidos` VALUES (5, 'Abalde');
INSERT INTO `tapellidos` VALUES (6, 'Aballe');
INSERT INTO `tapellidos` VALUES (7, 'Abalo');
INSERT INTO `tapellidos` VALUES (8, 'Abaloira');
INSERT INTO `tapellidos` VALUES (9, 'Abaña');
INSERT INTO `tapellidos` VALUES (10, 'Abánades');
INSERT INTO `tapellidos` VALUES (11, 'Abande');
INSERT INTO `tapellidos` VALUES (12, 'Abandero');
INSERT INTO `tapellidos` VALUES (13, 'Abano');
INSERT INTO `tapellidos` VALUES (14, 'Abanos');
INSERT INTO `tapellidos` VALUES (15, 'Abanqueiro');
INSERT INTO `tapellidos` VALUES (16, 'Abarbado');
INSERT INTO `tapellidos` VALUES (17, 'Abardar');
INSERT INTO `tapellidos` VALUES (18, 'Abauth');
INSERT INTO `tapellidos` VALUES (19, 'Abegoa');
INSERT INTO `tapellidos` VALUES (20, 'Abeigon');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tnombre`
-- 

CREATE TABLE `tnombre` (
  `id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=188 ;

-- 
-- Volcar la base de datos para la tabla `tnombre`
-- 

INSERT INTO `tnombre` VALUES (1, 'Abel');
INSERT INTO `tnombre` VALUES (2, 'Abelardo');
INSERT INTO `tnombre` VALUES (3, 'Ada');
INSERT INTO `tnombre` VALUES (4, 'Adrián');
INSERT INTO `tnombre` VALUES (5, 'Adriana');
INSERT INTO `tnombre` VALUES (6, 'Ágata');
INSERT INTO `tnombre` VALUES (7, 'Águeda');
INSERT INTO `tnombre` VALUES (8, 'Aida');
INSERT INTO `tnombre` VALUES (9, 'Aina');
INSERT INTO `tnombre` VALUES (10, 'Ainhoa');
INSERT INTO `tnombre` VALUES (11, 'Aitor');
INSERT INTO `tnombre` VALUES (12, 'Alberto');
INSERT INTO `tnombre` VALUES (13, 'Alejo');
INSERT INTO `tnombre` VALUES (14, 'Alfonso');
INSERT INTO `tnombre` VALUES (15, 'Alicia');
INSERT INTO `tnombre` VALUES (16, 'Almudena');
INSERT INTO `tnombre` VALUES (17, 'Álvaro');
INSERT INTO `tnombre` VALUES (18, 'Amaia');
INSERT INTO `tnombre` VALUES (19, 'Ana');
INSERT INTO `tnombre` VALUES (20, 'Andrés');