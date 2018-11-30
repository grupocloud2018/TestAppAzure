-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: grupocloud1db.mysql.database.azure.com    Database: projectcdb
-- ------------------------------------------------------
-- Server version	5.6.39.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `conductor`
--

DROP TABLE IF EXISTS `conductor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conductor` (
  `conductor_id` int(11) NOT NULL,
  `nombre` text,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`conductor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `equisoft`
--

DROP TABLE IF EXISTS `equisoft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equisoft` (
  `placa` varchar(6) DEFAULT NULL,
  `vehículo_con_disponibilidad` text,
  `odometro` double(15,2) DEFAULT NULL,
  `accidentes_vs_vehiculo` int(11) DEFAULT NULL,
  `cantidad_repuesto_cambiados` int(11) DEFAULT NULL,
  `cantidad_reparacion_realizada` int(11) DEFAULT NULL,
  `mantenimientos_realizados` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `equisoft_placa_uk` (`placa`),
  CONSTRAINT `eq_vh_placa_fk` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `equisoft_copia`
--

DROP TABLE IF EXISTS `equisoft_copia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equisoft_copia` (
  `placa` text,
  `vehículo_con_disponibilidad` text,
  `odometro` double(15,2) DEFAULT NULL,
  `accidentes_vs_vehiculo` int(11) DEFAULT NULL,
  `cantidad_repuesto_cambiados` int(11) DEFAULT NULL,
  `cantidad_reparacion_realizada` int(11) DEFAULT NULL,
  `mantenimientos_realizados` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hseq`
--

DROP TABLE IF EXISTS `hseq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hseq` (
  `flota` text,
  `grupo` text,
  `conductor` text,
  `fecha` date DEFAULT NULL,
  `hora` text,
  `velocidad` int(11) DEFAULT NULL,
  `evento` text,
  `localizacion` text,
  `zona` text,
  `latitud` double(15,8) DEFAULT NULL,
  `longitud` double(15,8) DEFAULT NULL,
  `placa` varchar(6) DEFAULT NULL,
  `alias` text,
  `rpm` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `hs_vh_placa_fk` (`placa`),
  CONSTRAINT `hs_vh_placa_fk` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`)
) ENGINE=InnoDB AUTO_INCREMENT=1202 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `localizacion_evento`
--

DROP TABLE IF EXISTS `localizacion_evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localizacion_evento` (
  `localizacion_id` int(11) NOT NULL,
  `departamento` text,
  `localizacion` text,
  `latitud` double(15,8) DEFAULT NULL,
  `longitud` double(15,8) DEFAULT NULL,
  `riesgo` text,
  PRIMARY KEY (`localizacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `clave` text,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculo` (
  `vehiculo_id` int(11) NOT NULL,
  `placa` varchar(6) DEFAULT NULL,
  `modelo` int(11) DEFAULT NULL,
  `referencia` text,
  PRIMARY KEY (`vehiculo_id`),
  UNIQUE KEY `vehiculo_placa_uk` (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary table structure for view `vehiculo_desgaste`
--

DROP TABLE IF EXISTS `vehiculo_desgaste`;
/*!50001 DROP VIEW IF EXISTS `vehiculo_desgaste`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vehiculo_desgaste` AS SELECT 
 1 AS `placa`,
 1 AS `km`,
 1 AS `eventos`,
 1 AS `referencia`,
 1 AS `modelo`,
 1 AS `anio_uso`,
 1 AS `mantenimientos_realizados`,
 1 AS `cantidad_repuesto_cambiados`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `vehiculo_predictivo`
--

DROP TABLE IF EXISTS `vehiculo_predictivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculo_predictivo` (
  `placa` varchar(6) DEFAULT NULL,
  `categoria` text,
  `ultima_prediccion` date DEFAULT NULL,
  `fecha_aplica` date DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `vp_vh_placa_fk` (`placa`),
  CONSTRAINT `vp_vh_placa_fk` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `vehiculo_predictivo_copia`
--

DROP TABLE IF EXISTS `vehiculo_predictivo_copia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculo_predictivo_copia` (
  `placa` text,
  `categoria` text,
  `ultima_prediccion` date DEFAULT NULL,
  `fecha_aplica` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ws`
--

DROP TABLE IF EXISTS `ws`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ws` (
  `cliente` text,
  `placa` varchar(6) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `conductor` text,
  `km_recorridos` double(10,2) DEFAULT NULL,
  `excesos_velocidad` int(11) DEFAULT NULL,
  `max_velocidad` int(11) DEFAULT NULL,
  `cant_frenadas_bruscas` int(11) DEFAULT NULL,
  `cant_aceleradas_bruscas` int(11) DEFAULT NULL,
  `tiempo_ralentizacion` int(11) DEFAULT NULL,
  `porcentaje_transmision` double(5,2) DEFAULT NULL,
  `promedio_combustible_consumido` double(10,2) DEFAULT NULL,
  `horas_trabajo` int(11) DEFAULT NULL,
  `eventos_panico` int(11) DEFAULT NULL,
  `evento_bateria_respaldo` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `ws_vh_placa_fk` (`placa`),
  CONSTRAINT `ws_vh_placa_fk` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`)
) ENGINE=InnoDB AUTO_INCREMENT=3299 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Final view structure for view `vehiculo_desgaste`
--

/*!50001 DROP VIEW IF EXISTS `vehiculo_desgaste`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`usuarioadmin`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `vehiculo_desgaste` AS select `vh`.`placa` AS `placa`,`ws`.`km` AS `km`,`ws`.`eventos` AS `eventos`,`vh`.`referencia` AS `referencia`,`vh`.`modelo` AS `modelo`,(2018 - `vh`.`modelo`) AS `anio_uso`,`eq`.`mantenimientos_realizados` AS `mantenimientos_realizados`,`eq`.`cantidad_repuesto_cambiados` AS `cantidad_repuesto_cambiados` from ((`projectcdb`.`vehiculo` `vh` join (select `projectcdb`.`ws`.`placa` AS `placa`,sum(`projectcdb`.`ws`.`km_recorridos`) AS `km`,sum(`projectcdb`.`ws`.`cant_frenadas_bruscas`) AS `eventos` from `projectcdb`.`ws` group by `projectcdb`.`ws`.`placa`) `ws` on((`vh`.`placa` = `ws`.`placa`))) left join `projectcdb`.`equisoft` `eq` on((`vh`.`placa` = `eq`.`placa`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-30 15:06:25
