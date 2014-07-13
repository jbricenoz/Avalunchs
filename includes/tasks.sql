/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - angularcode_task
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`angularcode_task` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `angularcode_task`;

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platillo` varchar(200) NOT NULL,
  `detalle` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

LOCK TABLES `menu` WRITE;

insert  into `menu`(`id`,`platillo`,`detalle`) values (1,'Carne','Desmechada'),(2,'Carne','Trocitos'),(3,'Carne','Filete encebollado'),(4,'Carne','Mexicana'),(5,'Pescado','Al ajillo'),(6,'Pescado','Empanizado'),(7,'Pollo','A la plancha'),(8,'Pollo','Sudado.'),(9,'Pollo ','Al horno.'),(10,'Sopa','Negra'),(11,'Sopa','Olla de carne.');

UNLOCK TABLES;

/*Table structure for table `tasks` */

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `dateregister` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `tasks` */

LOCK TABLES `tasks` WRITE;

insert  into `tasks`(`id`,`task`,`status`,`created_at`,`dateregister`) values (1,'My first task',0,1390815970,'0000-00-00'),(2,'Perform unit testing',2,1390815993,'0000-00-00'),(3,'Find bugs',2,1390817659,'0000-00-00'),(4,'Test in small devices',2,1390818389,'0000-00-00'),(24,'Sopa. Danny',0,1405223021,'2014-07-12'),(32,'Pescado, Danny',0,1405224767,'2014-07-12');

UNLOCK TABLES;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

LOCK TABLES `usuario` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
