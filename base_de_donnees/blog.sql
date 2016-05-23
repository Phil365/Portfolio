-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2015 a las 02:25:10
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--

-- --------------------------------------------------------

--
--

CREATE TABLE IF NOT EXISTS `texte` (
  `id_txt` int(11) NOT NULL AUTO_INCREMENT,
  `texte_fr` varchar(2000) NOT NULL,
  `texte_en` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_txt`)
),

--
--

INSERT INTO `texte` (`id_txt`, `texte_fr`, `texte_en`) VALUES
(1, 'Bienvenue sur le portfolio de Philippe Germain', 'Hi, welcome on Philippe Germain"s resume'),
(2, 'La charcuterie est cancérigène, selon l''OMS', 'La charcuterie, la viande rouge et le porc sont accusés de favoriser le cancer selon une étude internationale qui devrait porter un nouveau coup à la consommation et à la filière de la viande.'),
(3, 'Et si c''était la faute de Photoshop?', 'En 25 ans, Photoshop a //révolutionné le monde de l''image, remodelant les silhouettes, floutant les imperfections et nettoyant les traces du temps sur son passage. Serait-il le grand coupable de notre obsession de la jeunesse?'),

-- --------------------------------------------------------

--
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `commentaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire_texte` varchar(2000) NOT NULL,
  `commentaire_date` varchar(12) NOT NULL,
  `commentaire_nom` varchar(50) NOT NULL,
  `commentaire_prenom` varchar(50) NOT NULL,
  `commentaire_courriel` int(50) NOT NULL,
  PRIMARY KEY (`commentaire_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8_general_ci;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
