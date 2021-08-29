-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql211.hostfree.pw
-- Tempo de Geração: 19/04/2017 às 06:19:01
-- Versão do Servidor: 5.6.35-81.0
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `epree_19824997_moviny`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `mov_id` int(10) NOT NULL AUTO_INCREMENT,
  `mov_id_imdb` varchar(13) DEFAULT NULL,
  `mov_url_imdb` varchar(70) DEFAULT NULL,
  `mov_title` varchar(300) DEFAULT NULL,
  `mov_original_title` varchar(300) DEFAULT NULL,
  `mov_url_poster` varchar(500) DEFAULT NULL,
  `mov_year` int(6) DEFAULT NULL,
  `mov_category` varchar(50) DEFAULT NULL,
  `mov_director` varchar(100) DEFAULT NULL,
  `mov_starring1` varchar(100) DEFAULT NULL,
  `mov_starring2` varchar(100) DEFAULT NULL,
  `mov_sinopsys` text,
  `mov_my_rating` decimal(3,1) DEFAULT NULL,
  `mov_imdb_rating` decimal(3,1) DEFAULT NULL,
  `mov_netflix` tinyint(1) DEFAULT NULL,
  `mov_watched` tinyint(1) DEFAULT NULL,
  `mov_registered` datetime DEFAULT NULL,
  PRIMARY KEY (`mov_id`),
  UNIQUE KEY `mov_id_imdb` (`mov_id_imdb`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
