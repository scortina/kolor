/*
SQLyog Enterprise Trial - MySQL GUI v7.11 
MySQL - 5.6.12-log : Database - kolor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`kolor` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `kolor`;

/*Table structure for table `asignatarios` */

DROP TABLE IF EXISTS `asignatarios`;

CREATE TABLE `asignatarios` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `asignatarios` */

/*Table structure for table `ci_cookies` */

DROP TABLE IF EXISTS `ci_cookies`;

CREATE TABLE `ci_cookies` (
  `id` int(11) NOT NULL,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_cookies` */

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('cbe94da8e4ee5e27fb74db503905a9cb','::1','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',1443220606,'a:6:{s:9:\"user_data\";s:0:\"\";s:11:\"user_nombre\";s:16:\"Renny Salirrosas\";s:7:\"user_id\";s:1:\"1\";s:10:\"user_nivel\";s:1:\"1\";s:8:\"user_img\";s:0:\"\";s:12:\"is_logged_in\";b:1;}'),('3a2d0e331613d9663f5c927ebc46bbee','::1','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',1443074020,'a:6:{s:9:\"user_data\";s:0:\"\";s:11:\"user_nombre\";s:16:\"Renny Salirrosas\";s:7:\"user_id\";s:1:\"1\";s:10:\"user_nivel\";s:1:\"1\";s:8:\"user_img\";s:0:\"\";s:12:\"is_logged_in\";b:1;}');

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rfc` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calle` varchar(120) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numero_exterior` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numero_interior` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `colonia` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `limite_credito` decimal(10,2) NOT NULL,
  `id_clasificacion` int(11) NOT NULL,
  `id_asignatario` int(11) NOT NULL,
  `registrado_por` int(11) NOT NULL,
  `id_estatus` int(2) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `clientes` */

/*Table structure for table `clientes_clasificacion` */

DROP TABLE IF EXISTS `clientes_clasificacion`;

CREATE TABLE `clientes_clasificacion` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `clientes_clasificacion` */

/*Table structure for table `clientes_estatus` */

DROP TABLE IF EXISTS `clientes_estatus`;

CREATE TABLE `clientes_estatus` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `clientes_estatus` */

/*Table structure for table `disponible_nodisponible` */

DROP TABLE IF EXISTS `disponible_nodisponible`;

CREATE TABLE `disponible_nodisponible` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `disponible_nodisponible` */

insert  into `disponible_nodisponible`(`row_id`,`descripcion`) values (1,'Disponible'),(2,'No Disponible');

/*Table structure for table `dolar_hoy` */

DROP TABLE IF EXISTS `dolar_hoy`;

CREATE TABLE `dolar_hoy` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `cambio` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `registrado_por` int(11) NOT NULL,
  `registrado_fecha` date NOT NULL,
  `registrado_hora` datetime NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dolar_hoy` */

/*Table structure for table `estados_mexico` */

DROP TABLE IF EXISTS `estados_mexico`;

CREATE TABLE `estados_mexico` (
  `row_id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `estados_mexico` */

insert  into `estados_mexico`(`row_id`,`descripcion`,`id_estatus`) values (1,'Aguascalientes',0),(2,'Baja California',0),(3,'Baja California Sur',0),(4,'Campeche',0),(5,'Chiapas',0),(6,'Chihuahua',0),(7,'Coahuila',0),(8,'Colima',0),(9,'Distrito Federal',0),(10,'Durango',0),(11,'Guanajuato',0),(12,'Guerrero',0),(13,'Estado de México',0),(14,'Hidalgo',0),(15,'Jalisco',0),(16,'Michoacán',0),(17,'Morelos',0),(18,'Nayarit',0),(19,'Nuevo León',0),(20,'Oaxaca',0),(21,'Puebla',0),(22,'Querétaro',0),(23,'Quintana Roo',0),(24,'San Luis Potisí',0),(25,'Sinaloa',0),(26,'Sonora',0),(27,'Tabasco',0),(28,'Tamaulipas',0),(29,'Tlaxcala',0),(30,'Veracruz',0),(31,'Yucat·n',0),(32,'Zacatecas',0),(33,'Otro',0);

/*Table structure for table `factura_estatus` */

DROP TABLE IF EXISTS `factura_estatus`;

CREATE TABLE `factura_estatus` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `factura_estatus` */

/*Table structure for table `facturas` */

DROP TABLE IF EXISTS `facturas`;

CREATE TABLE `facturas` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `folio` varchar(10) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `iva` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `nota_credito` varchar(10) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_pago` date NOT NULL,
  `id_moneda_pago` int(11) NOT NULL,
  `registrado_por` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `facturas` */

/*Table structure for table `facturas_abono` */

DROP TABLE IF EXISTS `facturas_abono`;

CREATE TABLE `facturas_abono` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `importe` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `registrado_por` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `facturas_abono` */

/*Table structure for table `facturas_contenido` */

DROP TABLE IF EXISTS `facturas_contenido`;

CREATE TABLE `facturas_contenido` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `sucursal` int(11) NOT NULL,
  `tarifa` decimal(10,2) NOT NULL,
  `tipo_cambio` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `facturas_contenido` */

/*Table structure for table `formas_pago` */

DROP TABLE IF EXISTS `formas_pago`;

CREATE TABLE `formas_pago` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `formas_pago` */

/*Table structure for table `notificaciones` */

DROP TABLE IF EXISTS `notificaciones`;

CREATE TABLE `notificaciones` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `contenido` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notificaciones` */

/*Table structure for table `pago_estatus` */

DROP TABLE IF EXISTS `pago_estatus`;

CREATE TABLE `pago_estatus` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pago_estatus` */

/*Table structure for table `pagos` */

DROP TABLE IF EXISTS `pagos`;

CREATE TABLE `pagos` (
  `row_id` int(11) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `fecha_origen` date DEFAULT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `id_nombre` int(11) DEFAULT NULL,
  `pax` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `importe` int(11) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `id_moneda` int(11) DEFAULT NULL,
  `importe_pago` decimal(10,2) DEFAULT NULL,
  `cupon` int(11) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `tipo_cambio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pagos` */

insert  into `pagos`(`row_id`,`fecha_pago`,`folio`,`fecha_origen`,`id_sucursal`,`id_nombre`,`pax`,`precio`,`importe`,`observaciones`,`id_moneda`,`importe_pago`,`cupon`,`total`,`tipo_cambio`) values (1,NULL,NULL,'2015-07-20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1500.00',NULL),(2,NULL,NULL,'2015-08-18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'450.00',NULL),(3,NULL,NULL,'2015-09-23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'630.00',NULL),(4,NULL,NULL,'2015-09-25',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20.00',NULL),(5,NULL,NULL,'2015-06-27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'920.00',NULL),(6,NULL,NULL,'2015-05-24',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200.00',NULL);

/*Table structure for table `paises` */

DROP TABLE IF EXISTS `paises`;

CREATE TABLE `paises` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `paises` */

insert  into `paises`(`row_id`,`descripcion`,`id_estatus`) values (1,'México',1);

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_clasificacion` int(2) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_estatus` int(1) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `productos` */

/*Table structure for table `productos_clasificaciones` */

DROP TABLE IF EXISTS `productos_clasificaciones`;

CREATE TABLE `productos_clasificaciones` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `id_estatus` int(1) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `productos_clasificaciones` */

/*Table structure for table `productos_estatus` */

DROP TABLE IF EXISTS `productos_estatus`;

CREATE TABLE `productos_estatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `productos_estatus` */

insert  into `productos_estatus`(`id`,`descripcion`) values (1,'De línea'),(2,'Fuera de línea');

/*Table structure for table `sucursales` */

DROP TABLE IF EXISTS `sucursales`;

CREATE TABLE `sucursales` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sucursales` */

/*Table structure for table `tipo_cambio` */

DROP TABLE IF EXISTS `tipo_cambio`;

CREATE TABLE `tipo_cambio` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `registrado_por` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tipo_cambio` */

/*Table structure for table `tipos_moneda` */

DROP TABLE IF EXISTS `tipos_moneda`;

CREATE TABLE `tipos_moneda` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tipos_moneda` */

/*Table structure for table `trazabilidad` */

DROP TABLE IF EXISTS `trazabilidad`;

CREATE TABLE `trazabilidad` (
  `row_id` int(1) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(100) NOT NULL,
  `accion` varchar(100) NOT NULL,
  `registro` varchar(100) NOT NULL,
  `id_usuario` int(1) NOT NULL,
  `fecha` date NOT NULL,
  `hora` datetime NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `trazabilidad` */

/*Table structure for table `usuario_estatus` */

DROP TABLE IF EXISTS `usuario_estatus`;

CREATE TABLE `usuario_estatus` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario_estatus` */

/*Table structure for table `usuario_niveles` */

DROP TABLE IF EXISTS `usuario_niveles`;

CREATE TABLE `usuario_niveles` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario_niveles` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `clave` varchar(32) DEFAULT NULL,
  `id_nivel` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`row_id`,`usuario`,`nombre`,`email`,`clave`,`id_nivel`,`foto`,`id_estatus`) values (1,'renny','Renny Salirrosas','rennysalirrosas@gmail.com','123456789',1,'',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
