# Host: localhost  (Version 8.0.32)
# Date: 2023-05-30 16:34:04
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "artigos"
#

DROP TABLE IF EXISTS `artigos`;
CREATE TABLE `artigos` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `titulo_artigo` varchar(255) DEFAULT NULL,
  `conteudo_artigo` longblob,
  `sstatus` tinyint(1) DEFAULT '0' COMMENT '0 aguardando aprovacao 1 aprovado 9 excluido',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "artigos"
#


#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `dados_acesso` varchar(50) DEFAULT NULL,
  `chave_entrada` varchar(25) DEFAULT NULL,
  `sstatus` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "usuario"
#

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'teste ','teste',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
