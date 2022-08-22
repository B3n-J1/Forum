-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 28 jan. 2022 à 16:19
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_author` int(11) NOT NULL,
  `username_author` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_content` text NOT NULL,
  `post_date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `id_author`, `username_author`, `question_id`, `answer_content`, `post_date`) VALUES
(4, 4, 'Bob', 5, 'really', 'Friday 28th of January 2022 12:26:20'),
(5, 4, 'Bob', 5, 'on s\'eclate total', 'Friday 28th of January 2022 12:26:40'),
(6, 5, 'batman', 5, 'yes', 'Friday 28th of January 2022 12:27:26'),
(7, 5, 'batman', 5, 'c\'est le weekend', 'Friday 28th of January 2022 12:27:36'),
(8, 5, 'batman', 5, 'yes', 'Friday 28th of January 2022 12:28:06'),
(9, 7, 'test', 4, 'post<br />\r\n', 'Friday 28th of January 2022 12:34:16');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `userMessage` text NOT NULL,
  `id_author` int(11) NOT NULL,
  `username_author` varchar(50) NOT NULL,
  `publish_date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `title`, `userMessage`, `id_author`, `username_author`, `publish_date`) VALUES
(5, 'Robin is ********', 'He reveal my identity', 5, 'batman', '28-01-2022'),
(4, 'Who I am ?', 'Do u know who i m ????? ', 5, 'batman', '28-01-2022'),
(6, 'test', 'test 2', 7, 'test', '28-01-2022');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`) VALUES
(5, 'batman', 'man@bat.com', '$2y$10$a..R1sCWmCyKenjy8b/kuu83xIK.hm4iRDIywp7c/d.13or11azKS'),
(4, 'Bob', 'bob.marley@bob.com', '$2y$10$2tzev8fVG/VAhUpd8qKY0uHtvhJAPI/7.pf90RdKrGbvEeZnUVqaO'),
(6, 'robin', 'robin@robin.com', '$2y$10$BhsDBFgneNB5KOoU93XzoO3z/nw2d4oSX056vF4w8qg5EZCRXX9vG'),
(7, 'test', 'test@test.com', '$2y$10$9IOPswCGG69ivADv3vbihOXIv51BJVA4to8ueslMg1ydOe4dMmf9W');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
