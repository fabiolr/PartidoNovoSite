-- MySQL dump 10.13  Distrib 5.1.73, for debian-linux-gnu (i486)
--
-- Host: internal-db.s60092.gridserver.com    Database: db60092_novocad
-- ------------------------------------------------------
-- Server version	5.1.67-rel14.3

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `profissao` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ddd` varchar(2) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `endereco` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(25) DEFAULT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `cidade` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Estado` varchar(2) DEFAULT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `opt_out` binary(1) NOT NULL DEFAULT '0',
  `manual` binary(1) DEFAULT '0',
  `pediu_kit` binary(1) NOT NULL,
  `fundador` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22711 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `eid` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  KEY `contact_id` (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `kits`
--

DROP TABLE IF EXISTS `kits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CEP` varchar(100) NOT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `complemento` varchar(25) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `Estado` varchar(25) DEFAULT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `solicitado_em` date NOT NULL,
  `enviado_em` date NOT NULL,
  `retornado_em` date NOT NULL,
  `qte_env` int(4) NOT NULL,
  `qte_rec` int(4) NOT NULL,
  `id_contacts` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_contacts` (`id_contacts`)
) ENGINE=MyISAM AUTO_INCREMENT=1023 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `multi`
--

DROP TABLE IF EXISTS `multi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(15) DEFAULT NULL,
  `class` enum('1','2','3','4') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `origem` enum('Facebook','FaleConosco','Indicacao','Outro') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `politico` binary(1) DEFAULT NULL,
  `obs` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `situacao` enum('Aprovado','Rejeitado','EmAnalise','Convidado','ConviteAceito') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `municipios` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `debate_politico` binary(1) DEFAULT NULL,
  `material` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `origem_outro` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ddd` varchar(2) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `complemento` varchar(5) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `Estado` varchar(2) DEFAULT NULL,
  `id_contacts` int(5) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping routines for database 'db60092_novocad'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-28  9:33:08
