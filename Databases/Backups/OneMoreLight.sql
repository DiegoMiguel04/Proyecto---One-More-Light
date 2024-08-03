CREATE DATABASE  IF NOT EXISTS `onemorelight` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `onemorelight`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: onemorelight
-- ------------------------------------------------------
-- Server version	8.4.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `campañas`
--

DROP TABLE IF EXISTS `campañas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campañas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL COMMENT 'nombre de la organizacion',
  `descripcion` text COMMENT 'aqui va una breve descripcion de la organizacion',
  `fecha_inicio` date DEFAULT NULL COMMENT 'fecha de inicio de la organizacion',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campañas`
--

LOCK TABLES `campañas` WRITE;
/*!40000 ALTER TABLE `campañas` DISABLE KEYS */;
INSERT INTO `campañas` VALUES (1,'One More Light','Vimos luz cuando el mundo dormia','2024-07-29'),(2,'Soul Song','Tendremos una segunda oportunidad para cambiar','2024-07-30'),(3,'Houdini','Este sera mi ultimo truco','2024-07-31'),(4,'Campaña de reciclaje','Recolección de tapitas para reciclaje','2024-08-01'),(5,'Reanimation','Y la esperanza es lo que muere al final','2024-08-10');
/*!40000 ALTER TABLE `campañas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campañas_usuarios`
--

DROP TABLE IF EXISTS `campañas_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campañas_usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `campaña_id` int NOT NULL,
  `rol` varchar(50) DEFAULT NULL COMMENT 'asiganr rol de participante o organizador etc',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `campaña_id` (`campaña_id`),
  CONSTRAINT `campañas_usuarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `campañas_usuarios_ibfk_2` FOREIGN KEY (`campaña_id`) REFERENCES `campañas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campañas_usuarios`
--

LOCK TABLES `campañas_usuarios` WRITE;
/*!40000 ALTER TABLE `campañas_usuarios` DISABLE KEYS */;
INSERT INTO `campañas_usuarios` VALUES (1,1,1,'Organizador'),(2,2,2,'Participante'),(3,3,3,'Participante'),(4,4,4,'Participante'),(5,5,5,'Organizador');
/*!40000 ALTER TABLE `campañas_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donaciones`
--

DROP TABLE IF EXISTS `donaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `campaña_id` int NOT NULL,
  `cantidad_tapitas` int DEFAULT NULL COMMENT 'cantidad de tapitas a donar',
  `fecha_donacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de donacion',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `campaña_id` (`campaña_id`),
  CONSTRAINT `donaciones_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `donaciones_ibfk_2` FOREIGN KEY (`campaña_id`) REFERENCES `campañas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donaciones`
--

LOCK TABLES `donaciones` WRITE;
/*!40000 ALTER TABLE `donaciones` DISABLE KEYS */;
INSERT INTO `donaciones` VALUES (1,1,1,200,'2024-07-30 18:25:57'),(2,2,2,100,'2024-07-31 18:00:00'),(3,1,1,100,'2024-07-31 11:01:10'),(4,4,4,500,'2024-08-04 06:00:00');
/*!40000 ALTER TABLE `donaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `accion` varchar(255) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puntos_usuarios`
--

DROP TABLE IF EXISTS `puntos_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `puntos_usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `campania_id` int NOT NULL,
  `puntos` int DEFAULT NULL COMMENT 'puntos acumulados por el usuario',
  `fecha` timestamp NULL DEFAULT NULL COMMENT 'fecha de suma de puntos',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `campania_id` (`campania_id`),
  CONSTRAINT `puntos_usuarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `puntos_usuarios_ibfk_2` FOREIGN KEY (`campania_id`) REFERENCES `campañas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puntos_usuarios`
--

LOCK TABLES `puntos_usuarios` WRITE;
/*!40000 ALTER TABLE `puntos_usuarios` DISABLE KEYS */;
INSERT INTO `puntos_usuarios` VALUES (1,1,1,50,'2024-07-30 18:25:57'),(2,1,1,100,NULL),(3,1,1,100,NULL),(4,2,1,150,NULL);
/*!40000 ALTER TABLE `puntos_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tapitas`
--

DROP TABLE IF EXISTS `tapitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tapitas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `color` varchar(50) DEFAULT NULL COMMENT 'color de la tapita',
  `material` varchar(50) DEFAULT NULL COMMENT 'material de la tapita',
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `tapitas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tapitas`
--

LOCK TABLES `tapitas` WRITE;
/*!40000 ALTER TABLE `tapitas` DISABLE KEYS */;
INSERT INTO `tapitas` VALUES (1,'rojo','pet',1),(2,'verde','pet',2),(3,'Blanco','Pet',3),(4,'Amarilla','Pet',4),(5,'Verde','Pet(Refresco)',5);
/*!40000 ALTER TABLE `tapitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) DEFAULT NULL COMMENT 'nombre del usuario',
  `contraseña` varchar(255) DEFAULT NULL COMMENT 'clave de seguridad del usuario',
  `correo` varchar(100) DEFAULT NULL COMMENT 'correo del usuario',
  `fecha_registro` timestamp NULL DEFAULT NULL COMMENT 'fecha de registro del usuario',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `nombre_usuario` (`nombre_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'JFFA25','josef11bn14','josef@gmail.com','2024-07-30 18:25:57'),(2,'F-ank','fank1234','f-ank@gamil.com','2024-07-31 18:00:00'),(3,'DiegoMiguel04','Diego1234','Diego04@gmail.com','2024-07-31 08:00:00'),(4,'JuanPerez','contraseña123','juan.perez@1234.com','2024-07-31 09:30:45'),(5,'TEY20','tey0911','Esther.Gonzalez@gmail.com','2024-08-01 10:53:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `before_user_insert` BEFORE INSERT ON `usuarios` FOR EACH ROW BEGIN
    -- Asegurar que el nombre de usuario se almacene en minúsculas
    SET NEW.nombre_usuario = LOWER(NEW.nombre_usuario);
    
    -- Asegurar que el correo se almacene en minúsculas
    SET NEW.correo = LOWER(NEW.correo);
    
    -- Cifrar la contraseña (aquí se utiliza una función ficticia de cifrado, ajústala según tu método de cifrado)
    SET NEW.contraseña = SHA2(NEW.contraseña, 256);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_user_insert` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
    -- Insertar puntos iniciales en puntos_usuarios
    INSERT INTO puntos_usuarios (usuario_id, campaña_id, puntos, fecha)
    VALUES (NEW.id, NULL, 0, NOW());

    -- Registrar la acción en una tabla de logs
    INSERT INTO logs (usuario_id, accion, fecha)
    VALUES (NEW.id, 'Usuario creado', NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `BEFORE_UPDATE` BEFORE UPDATE ON `usuarios` FOR EACH ROW BEGIN
    -- Asegurar que el nombre de usuario se almacene en minúsculas
    SET NEW.nombre_usuario = LOWER(NEW.nombre_usuario);

    -- Asegurar que el correo se almacene en minúsculas
    SET NEW.correo = LOWER(NEW.correo);
    
    -- Registrar la acción en una tabla de logs
    INSERT INTO logs (usuario_id, accion, fecha)
    VALUES (NEW.id, 'Usuario actualizado', NOW());
    
    -- Si la contraseña está siendo cambiada, cifrarla
    IF NEW.contraseña != OLD.contraseña THEN
        SET NEW.contraseña = SHA2(NEW.contraseña, 256);
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping events for database 'onemorelight'
--

--
-- Dumping routines for database 'onemorelight'
--
/*!50003 DROP PROCEDURE IF EXISTS `Agregar_Usuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Usuarios`( 
	IN p_id INT,
    IN p_nombre_usuario VARCHAR(50),
    IN p_contraseña VARCHAR(255),
    IN p_correo VARCHAR(100),
    IN p_fecha_registro TIMESTAMP	
)
BEGIN
    INSERT INTO usuarios (id,nombre_usuario, contraseña, correo,fecha_registro)
    VALUES (p_id,p_nombre_usuario, p_contraseña,p_correo,p_fecha_registro);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `campañas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `campañas`(IN p_nombre VARCHAR(100),IN p_descripcion TEXT,IN p_fecha_inicio DATE)
BEGIN
INSERT INTO campañas(nombre,descripcion,fecha_inicio) VALUES (p_nombre,p_descripcion,p_fecha_inicio);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `campañas_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `campañas_usuario`(IN p_usuario_id INT,IN p_campaña_id INT ,IN p_rol VARCHAR(50))
BEGIN
INSERT INTO campañas_usuarios (usuario_id,campaña_id,rol) VALUES (p_usuario_id,p_campaña_id,p_rol);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `donaciones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `donaciones`(IN p_usuario_id INT,IN p_campaña_id INT,IN p_cantidad_tapitas INT,IN p_fecha_donacion TIMESTAMP)
BEGIN
INSERT INTO donaciones (usuario_id,campaña_id,cantidad_tapitas,fecha_donacion) VALUES (
p_usuario_id,p_campaña_id,p_cantidad_tapitas,p_fecha_donacion);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `puntos_usuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `puntos_usuarios`(IN p_usuario_id INT ,IN p_campania_id INT,IN p_puntos INT,IN p_fecha TIMESTAMP)
BEGIN
INSERT INTO puntos_usuarios (usuario_id,campania_id,puntos,fecha) VALUES (p_usuario_id,p_campania_id,p_puntos,p_fecha);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `tapitas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `tapitas`(IN p_color VARCHAR(50),IN p_material VARCHAR(50),IN p_usuario_id INT)
BEGIN
INSERT INTO tapitas (color,material,usuario_id) VALUES (p_color,p_material,p_usuario_id);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-03  0:19:17
