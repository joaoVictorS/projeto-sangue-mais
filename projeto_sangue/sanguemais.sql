-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sanguemais`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(10) NOT NULL AUTO_INCREMENT,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id_banner`, `foto`) VALUES
(1, 'c3d570285da8cf77aa7b1c376476980d.jpg'),
(2, '0ad031ca576ebb4661fca96ae713172f.jpg'),
(3, 'b8cf8b19426e7ce00dcae4d9f04b76e5.jpg'),
(4, '1af0c4ac9221b16ae1ef3ded12bd0c9e.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentos`
--

CREATE TABLE IF NOT EXISTS `depoimentos` (
  `nome` varchar(60) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `status` int(3) NOT NULL,
  `id_depoimento` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_depoimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `depoimentos`
--

INSERT INTO `depoimentos` (`nome`, `titulo`, `texto`, `status`, `id_depoimento`) VALUES
('Joao', 'Joaozin', 'JoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoaoJoao', 2, 1),
('joao', 'joaozinapsdksaod', 'asdasdasd', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `texto`, `foto`) VALUES
(1, 'jaojaja', 'dhfsfsd', '9877546411d392a9c570f84f1fc9d3a5.jpg'),
(2, 'dois', 'asgfsadgasdfgas', 'edb3f2aef741bc18ad26a054d4f0b8f4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE IF NOT EXISTS `parceiros` (
  `id_parceiros` int(10) NOT NULL AUTO_INCREMENT,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`id_parceiros`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id_parceiros`, `foto`) VALUES
(1, '2b72c64db0129fbf2395e49e484c6b13.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quemsomos`
--

CREATE TABLE IF NOT EXISTS `quemsomos` (
  `titulo` varchar(60) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `quemsomos`
--

INSERT INTO `quemsomos` (`titulo`, `texto`, `id`) VALUES
('joaoaoao', 'jiasjdiasdkÂ´safsdfdsafsdf', 1),
('jaojaja', 'ajoajoajoa', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `id`) VALUES
('joao', 'joao', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
