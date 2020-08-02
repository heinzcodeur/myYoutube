-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 02 août 2020 à 19:00
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `youtube`
--

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(56) NOT NULL,
  `mdp` varchar(67) NOT NULL,
  `age` tinyint(2) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`test_id`, `mail`, `mdp`, `age`) VALUES
(1, 'toto', 'mdp', 7),
(2, '$mail', ' $mdp', 7),
(3, 'aze@timi.com', 'result', 1),
(4, 'tomy@free.fr', 'timmi', 23),
(5, 'riri@boss.net', 'riri', 33),
(6, 'riri@boss.net', 'riri', 33),
(7, 'tomy@free.fr', 'hjoie', 12),
(8, 'tomy@free.fr', 'hjoie', 12),
(9, 'tomy@free.fr', 'hjoie', 12),
(10, 'aze@timi.com', 'azer', 5),
(11, 'aze@timi.com', 'azer', 5),
(12, 'aze@timi.com', 'azer', 5),
(13, 'aze@timi.com', 'azer', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `email`, `mdp`) VALUES
(1, 'heinzcodeur', 'heinzcodeur@gmail.com', 'heinzcodeur'),
(2, 'nicki', 'nicki@gmail.com', 'nickinicki'),
(3, 'christel', 'christelanaky@gmail.com', 'heinzcodeur'),
(4, 'bobi', 'bobitoto@gmail.com', 'heinzcodeur'),
(5, 'laustralien', 'laustralien@myyoutube.com', 'heinzcodeur'),
(6, 'livoirien', 'livoirien@myyoutube.com', 'heinzcodeur');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`video_id`, `url`, `titre`, `date_ajout`, `author`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ffVPdn38B3U\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Rihanna-stay live stade de France', '2020-07-23 13:54:00', 1),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mNQ6gq-E4fo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'rihanna titi', '2020-07-23 13:56:21', 1),
(3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AvjLY73cJcQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Rihanna-Diamonds live at Global Citizen Festival 2016', '2020-07-23 14:15:53', 1),
(4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Oq0SqK1r9Zs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Cheikh Anta Diop en Guadeloupe', '2020-07-28 22:59:36', 2),
(5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/57nfSaPz2PA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Mc Solaar - Armand est mort', '2020-07-30 13:06:39', 1),
(6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bFLow5StvvU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '50 Cent - Window Shopper', '2020-07-30 16:53:13', 6),
(7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8wEOJLh83ko\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Houdin : \"Monsieur Ouattara s\'est toujours fait passer pour celui qu\'il n\'est pas\"', '2020-07-31 10:32:00', 1),
(8, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XYix2K_ZqH8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aaliyah Hot Like Fire (Timbaland Mix) ', '2020-07-31 14:32:11', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
