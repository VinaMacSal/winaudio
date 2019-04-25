-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Abr-2019 às 18:35
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winaudio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnese`
--

DROP TABLE IF EXISTS `anamnese`;
CREATE TABLE IF NOT EXISTS `anamnese` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(200) NOT NULL,
  `resposta` enum('Sim','Não') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anamnese`
--

INSERT INTO `anamnese` (`id`, `pergunta`, `resposta`) VALUES
(2, 'Ambiente de trabalho barulhento?', 'Não'),
(3, 'Ouve ruídos?', 'Sim'),
(4, 'Ambiente de trabalho barulhento', 'Não'),
(18, 'Ouve ruídos?', 'Sim');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
