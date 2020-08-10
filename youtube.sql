-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 10 août 2020 à 12:38
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `youtube`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(999) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `user_id`, `video_id`) VALUES
(1, 'que de bons souvenirs de jeunesse...', 7, 14),
(2, '&lt;bLe savoir est une arme', 7, 4),
(3, 'Hotep...', 6, 4),
(4, 'quel succès!', 6, 1),
(5, 'que de bons souvenirs', 6, 15),
(6, 'belle gourmette', 6, 8),
(7, 'paparazzi', 6, 2),
(8, 'affaire de politik la', 6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_vision` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`video_id`, `user_id`, `date_vision`) VALUES
(7, 7, NULL),
(9, 1, NULL),
(11, 1, NULL),
(3, 1, NULL),
(2, 1, NULL),
(2, 7, NULL),
(12, 7, '2020-08-05 11:11:58'),
(9, 7, '2020-08-05 12:55:25'),
(10, 7, '2020-08-05 17:49:42'),
(6, 7, '2020-08-08 00:08:40'),
(14, 7, '2020-08-08 00:19:40'),
(4, 7, '2020-08-08 01:49:06'),
(4, 6, '2020-08-08 02:05:30'),
(1, 6, '2020-08-08 02:09:12'),
(15, 6, '2020-08-08 10:45:09'),
(8, 6, '2020-08-08 10:55:18'),
(2, 6, '2020-08-08 10:56:05'),
(7, 6, '2020-08-08 10:58:04'),
(16, 6, '2020-08-08 21:35:20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `email`, `mdp`) VALUES
(1, 'heinzcodeurAdmin', 'heinzcodeur@gmail.com', 'heinzcodeur'),
(2, 'nicki', 'nicki@gmail.com', 'nickinicki'),
(3, 'christel', 'christelanaky@gmail.com', 'heinzcodeur'),
(4, 'bobi', 'bobitoto@gmail.com', 'heinzcodeur'),
(5, 'laustralien', 'laustralien@myyoutube.com', 'heinzcodeur'),
(6, 'ivorian', 'livoirien@myyoutube.com', 'heinzcodeur'),
(7, 'marcus', 'marcus@miller.fr', 'marcusmiller');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(8, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XYix2K_ZqH8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aaliyah Hot Like Fire (Timbaland Mix) ', '2020-07-31 14:32:11', 6),
(9, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A1OKaphGXU4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Mathieu Nebra : Site du Zéro, OpenClassrooms... La Francophonie lui doit beaucoup !', '2020-08-02 23:38:47', 7),
(10, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/o57hD1aJVMQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019 Mercedes-AMG G63 - DRIVE & SOUND!', '2020-08-03 21:39:37', 7),
(11, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/uazIAV6FZR4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'YANG SYSTEM - Yang Dance', '2020-08-05 10:40:30', 1),
(12, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0WzKa5sLM2o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Black Lives Matter : l\'Afrique réagit au déboulonnement des statues coloniales européennes', '2020-08-05 11:09:35', 7),
(13, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EX8sjbsJj-I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '50 Cent - Do You Think About Me (Official Video)', '2020-08-07 23:59:12', 7),
(14, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/juoggmbU1qw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '50 Cent - Hustler\'s Ambition (Official Music Video)', '2020-08-08 00:12:26', 7),
(15, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MlzrC-B6n-M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'The Game - Wouldn\'t Get Far ft. Kanye West (Official Music Video)', '2020-08-08 10:44:43', 6),
(16, '', '', '2020-08-08 11:57:10', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
