-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 déc. 2022 à 03:12
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projets1`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `Nom` varchar(15) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `nb_salle` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`Nom`, `adresse`, `nb_salle`, `id_pro`) VALUES
('CROUS', 'Jacob Bellcombet', 3, 32),
('CC', 'CC', 4, 30),
('Khalifa', 'Dubai', 3, 32),
('Beatrice', '2 Square Jule Gauthier', 1, 32),
('Albert', '73000 Chambery', 0, 32),
('AAA', 'aaa', 1, 32);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `Capacité` int(5) NOT NULL,
  `Ressources` varchar(20) NOT NULL,
  `niveau` int(5) NOT NULL,
  `Description` varchar(120) NOT NULL,
  `nb_org` int(5) NOT NULL,
  `nom_bat` varchar(20) NOT NULL,
  `time_ajout` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `numero`, `photo`, `Capacité`, `Ressources`, `niveau`, `Description`, `nb_org`, `nom_bat`, `time_ajout`) VALUES
(1, -2, 2147483647, 12, '21', 200, '12', 12, 'CROUS', '2022-11-29 23:56:28'),
(2, -1, 2147483647, 2, '123', 100, '432', 234, 'CROUS', '2022-11-29 23:55:19'),
(3, 1, 2147483647, 12, '12', 200, '12', 1, 'AAA', '2022-11-29 23:52:00'),
(4, 2, 2147483647, 23, '2', 200, '2', 2, 'qsddc', '2022-11-29 19:59:59'),
(5, 12, 2147483647, 22, '22', 200, '22', 22, 'asd', '2022-11-29 19:32:38'),
(6, 32, 2147483647, 21, 'SAASASA', 1528, 'azer', 11, 'Khalifa', '2022-11-29 15:55:57'),
(7, 115, 2147483647, 2, 'SAASASA', 2, 'azer', 22, 'Beatrice', '2022-11-29 15:23:14'),
(8, 124, 2147483647, 33, 'SAASASA', 33, 'azer', 33, 'Khalifa', '2022-11-29 15:22:44'),
(9, 133, 2147483647, 123, '12', 200, '123', 12, 'qsd', '2022-11-29 19:51:22'),
(10, 222, 2147483647, 222, 'SAASASA', 2500, 'azer', 22, 'Khalifa', '2022-11-29 15:56:41'),
(11, 377, 2147483647, 88, '8FD88', 100, 'FD8F', 88, 'jdid', '2022-11-29 19:35:38'),
(12, 453, 2147483647, 4, 'JVTGFDY', 200, 'JHGVJ', 1, 'you', '2022-11-29 19:23:49'),
(13, 51234, 2147483647, 1234, 'AQWZSX', 0, 'WAQZSX', 423, 'CROUS', '2022-11-29 22:37:29'),
(14, 128709, 2147483647, 123, 'AZE', 100, 'SQA', 12, 'Khalifa', '2022-11-29 22:36:33');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `entreprise` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mdp`, `role`, `email`, `entreprise`, `adresse`, `numero`, `point`) VALUES
(24, 'Vv', 'v', 'internaute', 'd@h.l', NULL, NULL, NULL, 10),
(25, 'c', 'c', 'internaute', 'd@h.l', NULL, NULL, NULL, 10),
(26, 'g', 'g', 'internaute', 'd@h.l', NULL, NULL, NULL, 10),
(29, 'faki', 'a', 'internaute', 'z@gmail.com', NULL, NULL, NULL, 10),
(30, 'a', 'a', 'Pro', 'a@a.com', 'a', 'a', 123456, NULL),
(32, 'b', 'b', 'Pro', 'd@h.l', 'b', 'b', 123456, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`Nom`) USING BTREE;

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
