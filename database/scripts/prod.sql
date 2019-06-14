-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cuscuz
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria_produto`
--

DROP TABLE IF EXISTS `categoria_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categoria_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_produto`
--

LOCK TABLES `categoria_produto` WRITE;
/*!40000 ALTER TABLE `categoria_produto` DISABLE KEYS */;
INSERT INTO `categoria_produto` VALUES (1,'fitness','A combinação de sabor e sadio','2019-05-19 14:01:53',NULL,NULL),(2,'Especiais','Quer mais acompanhamento? Então toma!','2019-05-19 14:01:53',NULL,NULL),(3,'Tradicionais','Variedade de cuscuz e molhos','2019-05-19 14:01:53',NULL,NULL);
/*!40000 ALTER TABLE `categoria_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `cidade` varchar(75) DEFAULT 'Salvador',
  `CEP` varchar(8) DEFAULT NULL,
  `UF` char(2) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `complemento` varchar(250) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--
LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_usuario_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel`
--

DROP TABLE IF EXISTS `nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nivel` (`nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel`
--

LOCK TABLES `nivel` WRITE;
/*!40000 ALTER TABLE `nivel` DISABLE KEYS */;
INSERT INTO `nivel` VALUES (1,'1','Administrador','2019-05-21 01:12:19',NULL,NULL),(2,'2','Proprietario','2019-05-21 01:12:19',NULL,NULL),(3,'3','Cliente','2019-05-21 01:12:19',NULL,NULL);
/*!40000 ALTER TABLE `nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(55) NOT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_confirmado` timestamp NULL DEFAULT NULL,
  `data_cancelado` timestamp NULL DEFAULT NULL,
  `data_finalizado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preco_produto`
--

DROP TABLE IF EXISTS `preco_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `preco_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `valor_pequeno` float(50,2) NOT NULL,
  `valor_medio` float(50,2) NOT NULL,
  `valor_grande` float(50,2) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preco_produto`
--

LOCK TABLES `preco_produto` WRITE;
/*!40000 ALTER TABLE `preco_produto` DISABLE KEYS */;
INSERT INTO `preco_produto` VALUES (1,4,6.00,12.00,24.00,'2019-05-21 01:18:10',NULL,NULL),(2,5,8.00,16.00,32.00,'2019-05-21 01:18:10',NULL,NULL),(3,6,5.00,10.00,20.00,'2019-05-21 01:18:11',NULL,NULL),(4,7,13.00,25.00,50.00,'2019-05-21 01:18:11',NULL,NULL),(5,8,10.00,20.00,40.00,'2019-05-21 01:18:11',NULL,NULL),(6,9,7.00,14.00,28.00,'2019-05-21 01:18:11',NULL,NULL),(7,2,8.00,16.00,32.00,'2019-05-21 01:18:11',NULL,NULL),(8,3,8.00,16.00,32.00,'2019-05-21 01:18:12',NULL,NULL),(9,1,7.00,14.00,28.00,'2019-05-21 01:18:12',NULL,NULL),(10,10,6.00,12.00,24.00,'2019-05-21 01:18:12',NULL,NULL),(11,11,13.00,25.00,50.00,'2019-05-21 01:18:12',NULL,NULL),(12,12,13.00,25.00,50.00,'2019-05-21 01:18:12',NULL,NULL),(13,13,9.00,18.00,35.00,'2019-05-21 01:18:13',NULL,NULL),(14,14,9.00,18.00,35.00,'2019-05-21 01:18:13',NULL,NULL),(15,15,13.00,25.00,50.00,'2019-05-21 01:18:13',NULL,NULL),(16,16,8.00,16.00,32.00,'2019-05-21 01:18:13',NULL,NULL),(17,17,9.00,18.00,35.00,'2019-05-21 01:18:13',NULL,NULL),(18,18,8.00,16.00,32.00,'2019-05-21 01:18:14',NULL,NULL),(19,19,10.00,20.00,40.00,'2019-05-21 01:18:14',NULL,NULL),(20,20,8.00,16.00,32.00,'2019-05-21 01:18:14',NULL,NULL);
/*!40000 ALTER TABLE `preco_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `foto` varchar(75) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,1,'Cuscuz Atum','Contém flocos de milho, molho ao mar e atum.','atum.jpg','2019-05-21 01:18:10',NULL,NULL),(2,3,'Cuscuz da Casa','Contém flocos de milho, molho nordestino, carne do sol e calabresa.','casa.jpg','2019-05-21 01:18:10',NULL,NULL),(3,3,'Cuscuz Calabresa','Contém flocos de milho, molho nordestino e calabresa.','calabresa.jpg','2019-05-21 01:18:10',NULL,NULL),(4,2,'Cuscuz Camarão','Contém flocos de milho, molho marítimo e camarão.','camarao.jpg','2019-05-21 01:18:11',NULL,NULL),(5,2,'Cuscuz Especial','Contém flocos de milho, molho marítimo, camarão, siri catado e polvo.','especial.jpg','2019-05-21 01:18:11',NULL,NULL),(6,3,'Cuscuz de Frango','Contém flocos de milho, molho caipira, frango desfiado, bacon e azeitona.','frango.jpg','2019-05-21 01:18:11',NULL,NULL),(7,3,'Cuscuz Lombo Defumado','Contém flocos de milho, molho de ervas e lombo defumado.','lombo.jpg','2019-05-21 01:18:11',NULL,NULL),(8,2,'Cuscuz Sertanejo','Contém flocos de milho, molho nordestino, carne seca, queijo coalho e banana da terra.','sertanejo.jpg','2019-05-21 01:18:12',NULL,NULL),(9,3,'Cuscuz Tradicional','Contém flocos de milho, molho nordestino, sardinha, atum e calabresa.','tradicional.jpg','2019-05-21 01:18:12',NULL,NULL),(10,3,'Cuscuz Sardinha','Contém flocos de milho, molho marítimo e sardinha.','sardinha.jpg','2019-05-21 01:18:12',NULL,NULL),(11,2,'Cuscuz Siri Catado','Contém flocos de milho, molho de tomate e siri catado.','siricatado.jpg','2019-05-21 01:18:12',NULL,NULL),(12,2,'Cuscuz Polvo','Contém flocos de milho, molho de tomate e polvo.','polvo.jpg','2019-05-21 01:18:12',NULL,NULL),(13,1,'Cuscuz Vegetariano','Contém flocos de milho, molho natural mediterrâneo, tomate seco, shimeji e banana da terra.','vegetariano.jpg','2019-05-21 01:18:12',NULL,NULL),(14,1,'Cuscuz Natural do Sertão','Contém flocos de milho, molho natural, antepasto de beringela, couve flor, castanha de cajú e ricota.','naturaldosertao.jpg','2019-05-21 01:18:13',NULL,NULL),(15,2,'Cuscuz Shimeji','Contém flocos de milho, molho mediterrâneo, Shimeji e ricota.','shimeji.jpg','2019-05-21 01:18:13',NULL,NULL),(16,3,'Cuscuz Tropical','Contém flocos de milho e calda com pedaços de abacaxi.','tropical.jpg','2019-05-21 01:18:13',NULL,NULL),(17,3,'Cuscuz Lampião e Maria Bonita','Contém flocos de milho, goiabada, queijo coalho, leite condensado e creme de leite.','lampiao.jpg','2019-05-21 01:18:13',NULL,NULL),(18,3,'Cuscuz Árabe','Contém flocos de milho, carne moída, passa, damasco e molho oriental.','arabe.jpg','2019-05-21 01:18:13',NULL,NULL),(19,3,'Cuscuz Brasileiro','Contém flocos de milho, chocolate meio amargo, banana da terra frita e calda de leite condensado com leite.','brasileiro.jpg','2019-05-21 01:18:14',NULL,NULL),(20,1,'Cuscuz Fitness','Contém flocos de milho, flocos de aveia, molho de tomate, ricota, atum e banana da terra.','fitness.jpg','2019-05-21 01:18:14',NULL,NULL);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_nivel` int(11) NOT NULL DEFAULT '3',
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT '2019-05-31 04:57:35',
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  `data_email_verificado` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_id_unique` (`id`),
  UNIQUE KEY `usuario_id_nivel_unique` (`id_nivel`),
  UNIQUE KEY `usuario_email_unique` (`email`),
  UNIQUE KEY `usuario_cpf_unique` (`CPF`),
  UNIQUE KEY `usuario_telefone_unique` (`telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,3,'Igor Alves',NULL,NULL,'pedratto3@gmail.com','$2y$10$wdeUiRkCdQ71O9r2DLqtxekiM1Njjdj1NrU13qEc.tJe4n8HXXdqq','2019-05-31 05:03:42','2019-05-31 16:21:51',NULL,NULL,'lrg5wEgNnIZAiTHxIuugDiYJnCyhS4a1z6sV8LgnM3YoqMryFyBqjFVNOcQf');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venda`
--

DROP TABLE IF EXISTS `venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venda`
--

LOCK TABLES `venda` WRITE;
/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `voucher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `cupom` int(11) NOT NULL,
  `percentual_desconto` int(3) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voucher`
--

LOCK TABLES `voucher` WRITE;
/*!40000 ALTER TABLE `voucher` DISABLE KEYS */;
/*!40000 ALTER TABLE `voucher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'cuscuz'
--

--
-- Dumping routines for database 'cuscuz'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-31 23:12:05
