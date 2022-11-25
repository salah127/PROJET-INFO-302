-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 25 nov. 2022 à 13:54
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
  `id` int(11) NOT NULL,
  `Nom` varchar(15) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(25) COLLATE utf8_bin NOT NULL,
  `nb_salle` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`id`, `Nom`, `adresse`, `nb_salle`, `id_pro`) VALUES
(50, 'lll', 'adress', 1, 31),
(54, 'r', 'add', 2, 31),
(55, 'tt', 'adresse tt', 2, 31),
(56, 'az', 'aze', 1, 0),
(57, 'rr', 'rr', 2, 0),
(58, '', '', 0, 0),
(59, 'k', 'k', 1, 0);

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
(21, 'w', 'w', 'internaute', 'w@w.w', NULL, NULL, NULL, 10),
(23, 't', 't', 'internaute', 'd@h.l', NULL, NULL, NULL, 10),
(24, 'Vv', 'v', 'internaute', 'd@h.l', NULL, NULL, NULL, 10),
(25, 'c', 'c', 'internaute', 'd@h.l', NULL, NULL, NULL, 10),
(26, 'g', 'g', 'internaute', 'd@h.l', NULL, NULL, NULL, 10),
(29, 'faki', 'a', 'internaute', 'z@gmail.com', NULL, NULL, NULL, 10),
(30, 'a', 'a', 'Pro', 'a@a.com', 'a', 'a', 123456, NULL),
(31, 'q', 'q', 'Pro', 'b@b.b', 'q', 'q', 666776677, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
