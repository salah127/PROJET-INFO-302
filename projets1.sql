-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 déc. 2022 à 12:17
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.10

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
  `Nom` varchar(15) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(25) COLLATE utf8_bin NOT NULL,
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
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `numero` int(11) NOT NULL,
  `photo` blob NOT NULL,
  `Capacité` int(5) NOT NULL,
  `Ressources` varchar(20) COLLATE utf8_bin NOT NULL,
  `niveau` int(5) NOT NULL,
  `Description` varchar(120) COLLATE utf8_bin NOT NULL,
  `nb_org` int(5) NOT NULL,
  `nom_bat` varchar(20) COLLATE utf8_bin NOT NULL,
  `time_ajout` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`numero`, `photo`, `Capacité`, `Ressources`, `niveau`, `Description`, `nb_org`, `nom_bat`, `time_ajout`) VALUES
(-2, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 12, '21', 200, '12', 12, 'CROUS', '2022-11-29 23:56:28'),
(-1, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 2, '123', 100, '432', 234, 'CROUS', '2022-11-29 23:55:19'),
(1, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 12, '12', 200, '12', 1, 'AAA', '2022-11-29 23:52:00'),
(2, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 23, '2', 200, '2', 2, 'qsddc', '2022-11-29 19:59:59'),
(12, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 22, '22', 200, '22', 22, 'asd', '2022-11-29 19:32:38'),
(32, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 21, 'SAASASA', 1528, 'azer', 11, 'Khalifa', '2022-11-29 15:55:57'),
(115, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 2, 'SAASASA', 2, 'azer', 22, 'Beatrice', '2022-11-29 15:23:14'),
(124, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 33, 'SAASASA', 33, 'azer', 33, 'Khalifa', '2022-11-29 15:22:44'),
(133, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 123, '12', 200, '123', 12, 'qsd', '2022-11-29 19:51:22'),
(222, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 222, 'SAASASA', 2500, 'azer', 22, 'Khalifa', '2022-11-29 15:56:41'),
(377, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 88, '8FD88', 100, 'FD8F', 88, 'jdid', '2022-11-29 19:35:38'),
(453, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 4, 'JVTGFDY', 200, 'JHGVJ', 1, 'you', '2022-11-29 19:23:49'),
(51234, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 1234, 'AQWZSX', 0, 'WAQZSX', 423, 'CROUS', '2022-11-29 22:37:29'),
(128709, 0x38653131386461312d643730642d346162392d626538302d3335623337363866366436332e6a7067, 123, 'AZE', 100, 'SQA', 12, 'Khalifa', '2022-11-29 22:36:33');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `entreprise` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `adresse` varchar(250) COLLATE utf8_bin DEFAULT NULL,
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
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`numero`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
