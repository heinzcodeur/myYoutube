-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 27 août 2020 à 11:26
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
(2, 'Le savoir est une arme', 7, 4),
(3, 'Hotep...Coovi Gomez', 6, 4),
(4, 'quel succès!', 6, 1),
(5, 'que de bons souvenirs', 6, 15),
(6, 'belle gourmette', 6, 8),
(8, 'affaire de politik la', 6, 7),
(9, 'come back de Lord Mc Solaar avec des effets spéciaux', 1, 17),
(10, 'la grande classe à Monaco', 6, 6),
(11, 'paparazi', 1, 2),
(12, 'vicelard', 6, 18),
(13, 'amazing', 5, 23),
(14, 'funny pic!', 5, 2),
(15, 'classic', 5, 5),
(17, 'C\'était un grand savant', 5, 4),
(18, 'le meilleur \'panafricain\'', 8, 4),
(19, 'Bien dit!', 1, 4),
(20, 'un homme de conviction', 4, 4),
(21, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur eius, et laborum nam necessitatibus nemo nesciunt numquam obcaecati placeat porro qui saepe sunt, totam voluptatum! Animi dicta dolor facilis.loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur eius, et laborum nam necessitatibus nemo nesciunt numquam obcaecati placeat porro qui saepe sunt, totam voluptatum! Animi dicta dolor facilis.loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur eius, et laborum nam necessitatibus nemo nesciunt numquam obcaecati placeat porro qui saepe sunt, totam voluptatum! Animi dicta dolor facilis.lorem', 9, 4),
(22, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur eius, et laborum nam necessitatibus nemo nesciunt numquam obcaecati placeat porro qui saepe sunt, totam voluptatum! Animi dicta dolor facilis.loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur eius, et laborum nam necessitatibus nemo nesciunt numquam obcaecati placeat porro qui saepe sunt, totam voluptatum! Animi dicta dolor facilis.loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur eius, et laborum nam necessitatibus nemo nesciunt numquam obcaecati placeat porro qui saepe sunt, totam voluptatum! Animi dicta dolor facilis.loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consectetur eius, et laborum nam necessitatibus nemo nesciunt numquam obcaecati placeat porro qui saepe sunt, totam voluptatum! Animi dicta dolor facilis.lorem', 10, 4),
(23, 'greatest man from Africa', 11, 4),
(24, 'Qu\'est-ce qu\'il était jeune...et frais...', 11, 23);

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
(14, 7, '2020-08-23 15:32:23'),
(4, 7, '2020-08-23 22:07:14'),
(4, 6, '2020-08-08 02:05:30'),
(1, 6, '2020-08-08 02:09:12'),
(15, 6, '2020-08-08 10:45:09'),
(8, 6, '2020-08-08 10:55:18'),
(2, 6, '2020-08-08 10:56:05'),
(7, 6, '2020-08-08 10:58:04'),
(16, 6, '2020-08-08 21:35:20'),
(17, 1, '2020-08-11 17:02:32'),
(19, 4, '2020-08-11 22:24:54'),
(16, 1, '2020-08-17 17:22:27'),
(6, 6, '2020-08-19 11:58:55'),
(20, 1, '2020-08-20 22:19:28'),
(18, 1, '2020-08-20 22:33:33'),
(6, 1, '2020-08-21 10:53:14'),
(18, 6, '2020-08-21 11:41:36'),
(2, 5, '2020-08-21 11:48:25'),
(23, 5, '2020-08-21 11:52:34'),
(5, 5, '2020-08-21 12:33:02'),
(25, 5, '2020-08-21 12:37:10'),
(27, 5, '2020-08-22 13:52:06'),
(26, 7, '2020-08-23 12:57:11'),
(23, 7, '2020-08-23 15:31:57'),
(4, 1, '2020-08-23 22:08:16'),
(4, 5, '2020-08-23 22:03:37'),
(4, 8, '2020-08-23 22:06:48'),
(4, 4, '2020-08-23 22:09:50'),
(4, 9, '2020-08-23 22:12:58'),
(4, 10, '2020-08-23 22:14:22'),
(4, 11, '2020-08-23 22:17:02'),
(23, 11, '2020-08-26 01:37:27'),
(27, 11, '2020-08-25 00:09:26'),
(276, 11, '2020-08-26 11:09:39'),
(26, 11, '2020-08-26 11:10:51');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `email`, `mdp`, `is_admin`) VALUES
(1, 'heinzcodeurAdmin', 'heinzcodeur@gmail.com', 'heinzcodeur', 1),
(2, 'nicki', 'nicki@gmail.com', 'nickinicki', NULL),
(3, 'christel', 'christelanaky@gmail.com', 'heinzcodeur', NULL),
(4, 'bobi', 'bobitoto@gmail.com', 'heinzcodeur', NULL),
(5, 'laustralien', 'laustralien@myyoutube.com', 'heinzcodeur', NULL),
(6, 'ivorian', 'livoirien@myyoutube.com', 'heinzcodeur', NULL),
(7, 'marcus', 'marcus@miller.fr', 'marcusmiller', NULL),
(8, 'mbappe', 'mbappe@myyoutube.com', 'heinzcodeur', NULL),
(9, 'sgnabry', 'sgnabry@gmail.com', 'heinzcodeur', NULL),
(10, 'dimaria', 'dimaria@gmail.com', 'heinzcodeur', NULL),
(11, 'kevinDurant', 'kdurant@gmail.com', 'heinzcodeur', NULL);

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
(16, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/omfz62qu_Bc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2Pac ft. Dr. Dre - California Love (Official Video) [Full Length Version]', '2020-08-08 11:57:10', 6),
(17, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VK5EAkdUyhk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Mc Solaar - Solaar pleure (Clip Officiel)', '2020-08-11 17:01:25', 1),
(18, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SbYz6BUIDvE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '50 Cent - Definition Of Sexy (Official Music Video) ', '2020-08-11 22:22:52', 4),
(19, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TulMjeExtgk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '50 Cent - Amusement Park', '2020-08-11 22:24:38', 4),
(20, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3-M-S73yitU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MC Solaar : l\'interview qui pique ton cœur', '2020-08-20 02:19:45', 6),
(21, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4u7_SqYiCxA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PDCI-RDA : Flash du 19/08/2020. Le ministre ANAKY Kobenan reçu par le président Bédié', '2020-08-20 21:47:26', 1),
(23, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fJWaKISvXe8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Leonardo DiCaprio in Paris (1995)', '2020-08-21 01:34:10', 1),
(24, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZXbtGiRMwSE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Touring an $18,950,000 BEL AIR Modern Mansion with Incredible Lake Views', '2020-08-21 01:46:50', 1),
(25, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nOLCnfnPuVE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Total Body HIIT Workout for Men Over 40 - FAT LOSS - NO EQUIPMENT NEEDED', '2020-08-21 12:36:54', 5),
(26, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FIRT7lf8byw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Man Punches a Kangaroo in the Face to Rescue His Dog ', '2020-08-21 12:58:04', 5),
(27, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dOdXLCbRZUI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Découvrir le kangourou : tout ce qu\'il faut savoir sur la mascotte australienne', '2020-08-21 13:05:25', 5);

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
