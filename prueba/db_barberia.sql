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
#TABLA USUARIOS REGISTRADOS
CREATE TABLE `usuarioreg` (
  `cedula` varchar(20) PRIMARY KEY,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fechanac` DATE NOT NULL,
  `usuario` varchar(100) NOT NULL UNIQUE,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(256) NOT NULL,
  `estado` int(1) DEFAULT 1,
  `roll` int(1) DEFAULT 0
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
  `precio` double NOT NULL,
  `estado` int(1) DEFAULT 1,
  `descuento` TINYINT(3) DEFAULT 0
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
#insercion usuario de prueba
INSERT INTO `usuarioreg`(`cedula`, `nombre`, `apellido`, `fechanac`, `usuario`, `telefono`, `email`, `clave`) VALUES ('1004597149','Jhon','Roque','2002-10-28','jh777','317869','jhon@gmail.com','827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO `usuarioreg`(`cedula`, `nombre`, `apellido`, `fechanac`, `usuario`, `telefono`, `email`, `clave`) VALUES ('1004','Felipe','Santacruz','2002-8-30','felipest','313987','felipe@gmail.com','827ccb0eea8a706c4c34a16891f84e7b');
#insercion productos
INSERT INTO `producto`(`nombre`, `descripcion`, `precio`) VALUES ('Hair Wash','<p>Shampoo para fortalecimiento capilar</p>
<p>Adicionado con extractos de algas, regaliz y proteína de trigo funciona como auxiliar para detener la caída del cabello mientras limpia profundamente el cabello y cuero cabelludo.</p>
<b>Caracteristicas</b><br>
<ul>
<li>Disminuye caida del cabello</li>
<li>Mejora ciclo de crecimiento</li>
<li>Humecta piel y cabello</li>
</ul>','6000');

INSERT INTO `producto`(`nombre`, `descripcion`, `precio`) VALUES ('Regrowe Plus','<p>Bálsamo para crecimiento de barba fortificado</p>
<p>Bálsamo de crecimiento de barba fortificado con <b>minoxidil al 5%, queratina, aloe vera, complejo de aminoácidos minerales, alantoína y vitamina E</b></p>
<p>Además de promover el crecimiento de la barba y bigote, aumenta la resistencia del vello, nutre la piel y la barba y no causa resequedad ni irritación en la piel.</p>','10000');

INSERT INTO `producto`(`nombre`, `descripcion`, `precio`) VALUES ('Shampoo Reuzel','<p>Shampoo diario hidratante Reuzel</p>
<p>Se puede usar en todo tipo de cabello y con frecuencia, ya que contiene una mezcla tónica T-4 de avellana de bruja, hoja de ortiga, romero y raíz de cola de caballo</p>
<b>Características</b><br>
<ul>
<li>Ayuda a limpiar e hidratar el cuero cabelludo</li>
<li>Excelente tratamiento de desengrase</li>
<li>Refresca, estimula y limpia</li>
</ul>','8000');

INSERT INTO `producto`(`nombre`, `descripcion`, `precio`) VALUES ('Skin Cleaner','<p>Limpiador facial liquido Skin Cleaner</p>
<p>El <b>limpiador facial</b> líquido Skin Cleaner Regrowe es el primer paso para tu rutina diaria de limpieza facial.</p>
<b>Características</b><br>
<ul>
<li>Hidrata y es suave con la piel</li>
<li>Limpieza profunda</li>
</ul>
<p>Produce una limpieza profunda sin maltratar tu piel. Piel normal / mixta 250 ml.</p>','5000');

INSERT INTO `producto`(`nombre`, `descripcion`, `precio`) VALUES ('Kit de peines','<p>Peines basicos para barberia</p>
<p>Juego de 4 peines de pelo para mujeres, hombres y niños, kit de peinado de peluquería para cortar el cabello para herramienta de peinado<br>
<b>Sobre este articulo</b><br>
<ul>
<li>3 peines de diferentes estilos para todas las longitudes de cabello.</li>
<li>Material: plástico antiestático profesional. <b>Color:</b> negro.</li>
<li>Ligero y fácil de transportar. Peine de corte de pelo duradero y antiestático.</li>
</ul>','15000');
INSERT INTO `producto`(`nombre`, `descripcion`, `precio`) VALUES ('Maquina Wahl','<p>Maquina especial para peluqueria</p>
<p>Potente cortadora con cable de alto rendimiento, ideal para el uso continuo. Motor vibratorio profesional V5000 para duración, potencia y vida útil.</p>
<b>Características</b><br>
<ul>
<li>Práctica para llevarla a todos tus viajes</li>
<li>Corte suave y preciso</li>
</ul>
<p>Es una maquina ideal para cortes de cabello al ras.</p>','100000');

#Modificacion 23:27 04/03/2023
ALTER TABLE `producto` CHANGE `descripcion` `descripcion` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;