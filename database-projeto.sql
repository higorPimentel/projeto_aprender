-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 31.170.167.1    Database: u259419259_bd_jogos
-- ------------------------------------------------------
-- Server version	5.5.5-10.5.19-MariaDB-cll-lve


DROP TABLE IF EXISTS `tb_cad_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cad_curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_categoria` char(60) DEFAULT NULL,
  `descricao` char(100) DEFAULT NULL,
  `url_video` char(100) DEFAULT NULL,
  `link_download` char(80) DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cad_curso`
--

LOCK TABLES `tb_cad_curso` WRITE;
/*!40000 ALTER TABLE `tb_cad_curso` DISABLE KEYS */;
INSERT INTO `tb_cad_curso` VALUES (1,'Culinária','Todas as Técnicas culinárias','https://www.youtube.com/embed/u3YPNWJvdo0','curso/todas_tecnicas_culinarias.html'),(2,'Culinária','200 Técnicas Culinarias Essenciais','https://www.youtube.com/embed/QAEy5kZFEMI','curso/200_tecnicas_culinarias_essenciais.html'),(3,'Culinária','Grande Livro dos ingredientes','https://www.youtube.com/embed/-lLEdkWRjys','curso/grande_livro_dos_ingredientes.html'),(4,'Hortaliça','Minha Horta','https://www.youtube.com/embed/GUppN-HvaBk','curso/minha_horta.html'),(5,'Hortaliça','A cultura da Cebola','https://www.youtube.com/embed/cDLqB_2O_qY','curso/a_cultura_da_cebola.html'),(6,'Hortaliça','Catalago Brasileiro de Hortaliças','https://www.youtube.com/embed/4qYRiWHEQXs','curso/catalago_brasileiro_de_horatalicas.html'),(7,'Plantas Medicinais','Grande Livro das plantas Medicinais','https://www.youtube.com/embed/qC_OCIdrgUc','curso/grande_livro_das_plantas_medicinais.html'),(8,'Plantas Medicinais','Cura-te pelas plantas Medicinais','https://www.youtube.com/embed/3AGB8uovr9c','curso/curate_pelas_plantas_medicinais.html'),(9,'Plantas Medicinais','A vida secreta das Arvores','https://www.youtube.com/embed/3AGB8uovr9c','curso/a_vida_secreta_das_arvores.html');
/*!40000 ALTER TABLE `tb_cad_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cad_livro`
--

DROP TABLE IF EXISTS `tb_cad_livro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cad_livro` (
  `id_livro` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_categoria` char(60) DEFAULT NULL,
  `descricao` char(100) DEFAULT NULL,
  `nome_autor` char(120) DEFAULT NULL,
  `link_download` char(80) DEFAULT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cad_livro`
--

LOCK TABLES `tb_cad_livro` WRITE;
/*!40000 ALTER TABLE `tb_cad_livro` DISABLE KEYS */;
INSERT INTO `tb_cad_livro` VALUES (1,'Culinária','Todas as Técnicas culinárias','José da Silva','pdf_livro/todas_tecnicas_culinarias.pdf'),(2,'Culinária','200 Técnicas Culinarias Essenciais','Pedro da Silva','pdf_livro/200_tecnicas_culinarias_essenciais.pdf'),(3,'Culinária','Grande Livro dos ingredientes','Antonio Almeida','pdf_livro/grande_livro_dos_ingredientes.pdf'),(4,'Hortaliça','Minha Horta','Manuel da Silva','pdf_livro/minha_horta.pdf'),(5,'Hortaliça','A cultura da Cebola','Carlos Rodrigues','pdf_livro/a_cultura_da_cebola.pdf'),(6,'Hortaliça','Catalago Brasileiro de Hortaliças','Hnrique lopes Rodrigues','pdf_livro/catalago_brasileiro_de_horatalicas.pdf'),(7,'Plantas Medicinais','Grande Livro das plantas Medicinais','Lucas Alberto','pdf_livro/grande_livro_das_plantas_medicinais.pdf'),(8,'Plantas Medicinais','Cura-te pelas plantas Medicinais','Lucia pereira','pdf_livro/curate_pelas_plantas_medicinais.pdf'),(9,'Plantas Medicinais','A vida secreta das Arvores','Lucas vasques','pdf_livro/a_vida_secreta_das_arvores.pdf');
/*!40000 ALTER TABLE `tb_cad_livro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cad_pesquisa`
--

DROP TABLE IF EXISTS `tb_cad_pesquisa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cad_pesquisa` (
  `id_pesquisa` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_categoria` char(30) DEFAULT NULL,
  `descricao` char(100) DEFAULT NULL,
  `url_video` char(100) DEFAULT NULL,
  `link_download` char(40) DEFAULT NULL,
  PRIMARY KEY (`id_pesquisa`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cad_pesquisa`
--

LOCK TABLES `tb_cad_pesquisa` WRITE;
/*!40000 ALTER TABLE `tb_cad_pesquisa` DISABLE KEYS */;
INSERT INTO `tb_cad_pesquisa` VALUES (1,'Culinária','Todas as Tecnicas culinarias','https://www.youtube.com/embed/u3YPNWJvdo0','curso/todas_tecnicas_culinarias.html'),(2,'Culinária','200 Tecnicas Culinarias Essenciais','https://www.youtube.com/embed/QAEy5kZFEMI','curso/200_tecnicas_culinarias_essenciais'),(3,'Culinária','Grande Livro dos ingredientes','https://www.youtube.com/embed/-lLEdkWRjys','curso/grande_livro_dos_ingredientes.html'),(4,'Hortaliça','Minha Horta','https://www.youtube.com/embed/GUppN-HvaBk','curso/minha_horta.html'),(5,'Hortaliça','A cultura da Cebola','https://www.youtube.com/embed/cDLqB_2O_qY','curso/a_cultura_da_cebola.html'),(6,'Hortaliça','Catalago Brasileiro de Hortalicas','https://www.youtube.com/embed/4qYRiWHEQXs','curso/catalago_brasileiro_de_horatalicas'),(7,'Plantas Medicinais','Grande Livro das plantas Medicinais','https://www.youtube.com/embed/qC_OCIdrgUc','curso/grande_livro_das_plantas_medicinai'),(8,'Plantas Medicinais','Cura-te pelas plantas Medicinais','https://www.youtube.com/embed/3AGB8uovr9c','curso/curate_pelas_plantas_medicinais.ht'),(9,'Plantas Medicinais','A vida secreta das Arvores','https://www.youtube.com/embed/3AGB8uovr9c','curso/a_vida_secreta_das_arvores.html');
/*!40000 ALTER TABLE `tb_cad_pesquisa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cad_usuario`
--

DROP TABLE IF EXISTS `tb_cad_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cad_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(120) DEFAULT NULL,
  `nro_celular` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(120) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cad_usuario`
--

LOCK TABLES `tb_cad_usuario` WRITE;
/*!40000 ALTER TABLE `tb_cad_usuario` DISABLE KEYS */;
INSERT INTO `tb_cad_usuario` VALUES (1,'higor','19999999999','higorpimentel@hotmail.com','admin','$2y$10$kTxzpajRsNjwUHVzYzdzxubRdBPzpJBUXvfEI6VWKWI8I400LYJ7W');
/*!40000 ALTER TABLE `tb_cad_usuario` ENABLE KEYS */;
UNLOCK TABLES;
