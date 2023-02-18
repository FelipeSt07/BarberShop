CREATE DATABASE db_barberia;
use db_barberia;
#TABLA USUARIOS EXTERNOS
CREATE TABLE `usuarioext` (
  `cedula` varchar(20) PRIMARY KEY,
  `p_nombre` varchar(50) NOT NULL,
  `s_nombre` varchar(50) NOT NULL,
  `p_apellido` varchar(50) NOT NULL,
  `s_apellido` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` int(1) DEFAULT 1
);
#TABLA USUARIOS EXTERNOS
CREATE TABLE `usuarioreg` (
  `cedula` varchar(20) PRIMARY KEY,
  `p_nombre` varchar(50) NOT NULL,
  `s_nombre` varchar(50) NOT NULL,
  `p_apellido` varchar(50) NOT NULL,
  `s_apellido` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(256) NOT NULL,
  `estado` int(1) DEFAULT 1
);
#TABLA SERVICIO
CREATE TABLE `servicio` (
  `idservicio` char(3) PRIMARY KEY,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int NOT NULL
);
#TABLA PRODUCTO
CREATE TABLE `producto` (
  `idproducto` int PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(160) not NULL,
  `tipo` char(1) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(4) DEFAULT 1,
  `descuento` double DEFAULT 0,
  `estado` int(1) DEFAULT 1
);
#TABLA DESCRIPCION PRODUCTO
CREATE TABLE `c_producto` (
  `idc_producto` int PRIMARY KEY AUTO_INCREMENT,
  `carrito` int NOT NULL,
  `producto` int NOT NULL,
  `cantidad` int(4) NOT NULL DEFAULT 1
);
#TABLA CARRITO
CREATE TABLE `carrito` (
  `idcarrito` int PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `estado` int(1) DEFAULT 1
);
#TABLA RESERVA USUARIO EXTERNO
CREATE TABLE `reserva_e` (
  `idreserva_e` int PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `servicio` char(3) NOT NULL
);
#TABLA RESERVA USUARIO REGISTRADO
CREATE TABLE `reserva_r` (
  `idreserva_e` int PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `servicio` char(3) NOT NULL
);
#TABLA FACTURA
CREATE TABLE `factura` (
  `idfacura` int PRIMARY KEY AUTO_INCREMENT,
  `carrito` int NOT NULL,
  `total` double NOT NULL,
  `formapago` int NOT NULL
);
#TABLA FORMAS DE PAGO
CREATE TABLE `formapago` (
  `idformapago` int PRIMARY KEY AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL
);
#LLAVES FORANEAS
ALTER TABLE `reserva_e` ADD FOREIGN KEY (`usuario`) REFERENCES `usuarioext` (`cedula`);
ALTER TABLE `reserva_r` ADD FOREIGN KEY (`usuario`) REFERENCES `usuarioreg` (`cedula`);
ALTER TABLE `reserva_e` ADD FOREIGN KEY (`servicio`) REFERENCES `servicio` (`idservicio`);
ALTER TABLE `reserva_r` ADD FOREIGN KEY (`servicio`) REFERENCES `servicio` (`idservicio`);
ALTER TABLE `factura` ADD FOREIGN KEY (`carrito`) REFERENCES `carrito` (`idcarrito`);
ALTER TABLE `carrito` ADD FOREIGN KEY (`usuario`) REFERENCES `usuarioreg` (`cedula`);
ALTER TABLE `c_producto` ADD FOREIGN KEY (`carrito`) REFERENCES `carrito` (`idcarrito`);
ALTER TABLE `c_producto` ADD FOREIGN KEY (`producto`) REFERENCES `producto` (`idproducto`);
ALTER TABLE `factura` ADD FOREIGN KEY (`formapago`) REFERENCES `formapago` (`idformapago`);
