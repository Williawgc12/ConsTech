-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Nov-2021 às 18:19
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `constech`
--
CREATE DATABASE IF NOT EXISTS `constech` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `constech`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` varchar(280) DEFAULT NULL,
  `imagem` varchar(300) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cards`
--

INSERT INTO `cards` (`id`, `titulo`, `texto`, `imagem`, `data`) VALUES
(1, 'Carros Novos', 'Chegou o super esportivo mais esperado do momento: Audi A7, com 280 CV e motor 2.5L. Venha conferir!!', 'Carros Novos.jpg', '2021-11-08'),
(2, 'Semi-Novos', 'Lorem ipsum dolor sit amet. Et possimus recusandae non iusto internos sit galisum tempora et animi nostrum sed dolor illo ea tenetur commodi.', 'Seminovos.jpg', '2021-11-09'),
(3, 'Autorizada', 'Et fugiat commodi quo natus provident aut itaque eligendi et sequi voluptatibus! Et temporibus dolorem et cupiditate velit ut nesciunt optio.', 'Autorizada.jpg', '2021-11-10'),
(4, 'Estoque de Pecas', 'Qui praesentium sequi est optio sint ut eligendi quibusdam 33 porro sapiente. Non possimus vero ut libero quod hic labore odio!', 'Pecas.jpg', '2021-11-11'),
(44, 'samos faleiz', 'O gremio estÃ¡ na sÃ©rie B', '2021-11-12-17:42:23.jpg', '2021-11-12'),
(48, 'PromoÃ§Ã£o', 'Gol Bola na metade do preÃ§o!!! Valido atÃ© 15/11/21', '2021-11-12-18:17:20.jpg', '2021-11-18'),
(46, 'PromoÃ§Ã£o', 'O gremio estÃ¡ na sÃ©rie B', '', '2021-11-25'),
(47, 'PromoÃ§Ã£o', 'O gremio estÃ¡ na sÃ©rie B', '2021-11-12-18:10:23.jpg', '2021-11-18'),
(45, 'PromoÃ§Ã£o', 'O gremio estÃ¡ na sÃ©rie B', '2021-11-12-17:56:09.jpg', '2021-11-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
