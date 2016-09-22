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

CREATE TABLE `Sucursal`(

  `CodigoSucursal` varchar(20) NOT NULL,
  `NombreSucursal` varchar(20) default NULL,
  `Direccion` varchar(20) NOT NULL,
  
  PRIMARY KEY (`CodigoSucursal`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;


CREATE TABLE `Usuario`(

  `CodigoUsuario` varchar(20) NOT NULL,
  `Password` varchar(100) not null,
  `Tipo` varchar (20) Not Null,
  `Nombre` varchar(20) default NULL,
  `Direccion` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sucursal` varchar(100),

  PRIMARY KEY (`CodigoUsuario`),
  FOREIGN KEY (Sucursal) REFERENCES Sucursal(CodigoSucursal) ON DELETE CASCADE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;

 
CREATE TABLE `producto` (
  
  `CodigoProducto` varchar(20) NOT NULL,
  `Nombre` varchar(200) default NULL,
  `Tipo` varchar(20) default NULL,
  `peso` float(20) NOT NULL,
  `precio` float(20) NOT NULL,
  `Stock` int(11) not null,

  `Sucursal` varchar (30) NOT NULL,

  PRIMARY KEY  (`CodigoProducto`),
  FOREIGN KEY (Sucursal) REFERENCES Sucursal(CodigoSucursal) ON DELETE CASCADE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;



CREATE TABLE `Venta`(
`CodVenta` int(11) not null AUTO_INCREMENT,
`FechaHora` datetime NOT NULL,
`vendedor`  varchar(20) default null,
`PrecioTotal` float(20) NOT NULL,
`Tipo-Moneda` varchar(20) NOT NULL,

PRIMARY KEY (`CodVenta`)

) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;




CREATE TABLE `DetalleVenta`(
`CodDetalle` int(11) not null AUTO_INCREMENT,
`Cantidad` int(11) not null,
`Producto` varchar(20) NOT NULL,
`Total` float(20) NOT NULL,
`Venta` int(11) NOT NULL,

PRIMARY KEY  (`CodDetalle`),
FOREIGN KEY  (Venta) REFERENCES Venta(CodVenta),
FOREIGN key   (Producto) REFERENCES Producto(CodProducto)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;


CREATE TABLE `Ingreso`(
`CodIngreso` int(11) not null auto_increment,
`FechaHora` datetime NOT NULL,
`Sucursal` varchar(20) not null,
`Proveedor` varchar(20) not null,
PRIMARY key(`CodIngreso`)
);


CREATE TABLE `DetalleIngreso`(
`CodDetalle` int(11) not null,
`Cantidad` int(11) not null,
`Producto` varchar(20) NOT NULL,
`PrecioUnitario` float(20) not null,
`Total` float(20) NOT NULL,
`Ingreso` int(11) NOT NULL,

PRIMARY KEY  (`CodDetalle`),
FOREIGN KEY  (Ingreso) REFERENCES Ingreso(CodIngreso),
FOREIGN KEY  (Producto) REFERENCES Producto(CodProducto)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;


create table `proveedores`(){
`CodigoProveedor` varchar (11) not null,
`Nombre` varchar(30) not null,
`Producto` varchar(30) not null,

PRIMARY KEY(`CodigoProveedor`),
FOREIGN KEY  (Producto) REFERENCES Producto(CodProducto)
} ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;



create table `Comisiones`(){
`id` int(1) not null,
`usuario` varchar(15) not null,
`total` float(20) not null,
`venta` int(11) not null,
PRIMARY KEY (`id`),
FOREIGN key(venta) REFERENCES Venta(CodVenta),
FOREIGN key(usuario) REFERENCES Usuario(CodigoUsuario)

} ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6036 ;

-- 
-- ingresamos datos a la base de datos para la tabla `Sucursal`
-- 

INSERT INTO `Sucursal` VALUES ('suc1', 'sonesta', 'paqcha');
INSERT INTO `Sucursal` VALUES ('suc2', 'san antonio', 'paqcha');
INSERT INTO `Sucursal` VALUES ('suc3', 'ucchullo', 'parque españa');


-- 
-- ingresamos datos a la base de datos para la tabla `Usuario`
-- 


INSERT INTO `Usuario` VALUES ('usuario1','123456', 'vendedor', 'anita','Av.cultura','anita@gmail.com','suc1');
INSERT INTO `Usuario` VALUES ('usuario2','123456', 'vendedor', 'luz','Av.cultura','luz@gmail.com','suc1');
INSERT INTO `Usuario` VALUES ('usuario5','123457', 'administrador', 'yusmersi','miravalle','yus-mer-si@hotmail.com','suc1');
INSERT INTO `Usuario` VALUES ('usuario3','123456', 'vendedor', 'karla','Av.cultura','karla@gmail.com','suc2');
INSERT INTO `Usuario` VALUES ('usuario4','123456', 'vendedor', 'jova','Av.cultura','jova@gmail.com','suc2');
INSERT INTO `Usuario` VALUES ('usuario5','123456', 'vendedor', 'liz','Av.cultura','liz@gmail.com','suc3');
INSERT INTO `Usuario` VALUES ('usuario6','123456', 'vendedor', 'mari','Av.cultura','mari@gmail.com','suc3');
INSERT INTO `Usuario` VALUES ('administrador','123456', 'administrador', 'anita','Av.cultura','admi@gmail.com','');


