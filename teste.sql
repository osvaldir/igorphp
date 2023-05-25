# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-05-25 15:29:37
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "artigos"
#

DROP TABLE IF EXISTS `artigos`;
CREATE TABLE `artigos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "artigos"
#


#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `dados_acesso` varchar(50) DEFAULT NULL,
  `chave_entrada` varchar(25) DEFAULT NULL,
  `sstatus` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

#
# Data for table "usuario"
#

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'teste ','teste',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
