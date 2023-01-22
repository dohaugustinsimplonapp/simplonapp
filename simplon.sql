-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 jan. 2023 à 14:59
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simplon`
--

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(70) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id`, `nom`, `prenoms`, `tel`, `email`) VALUES
(8, 'Datro', 'Fofana Abdoul Kader', '0109098787', 'datrofofanaabdoul@hotmail.fr'),
(5, 'Doh', 'Bi Tah Augustin', '0747898744', 'dohlemuel@gmail.com'),
(7, 'Kouassi', 'Amoin Frederique', '0566765544', 'kouassifrederique@yahoo.com'),
(9, 'Didier', 'Tebily Drogba', '2723436678', 'didierdrogba@gmail.com'),
(10, 'Gogoua', 'Bile Franck Eric', '0747890744', 'gogouabile@gmail.com'),
(11, 'Sarah', 'Rachel Djohou Lou', '0747898732', 'rachelsarah@gmail.com'),
(14, 'Aya', 'Kouassi Veronique', '0444898744', 'ayakouassi@simplon.ci'),
(13, 'Badra', 'Ali', '0747843744', 'badraali@gmail.com'),
(15, 'Djohou', 'Bi Bernard', '0742298744', 'djohoubi@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
