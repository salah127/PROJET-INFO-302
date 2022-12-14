-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 déc. 2022 à 22:14
-- Version du serveur : 10.4.25-MariaDB
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
('CROUS', 'Jacob Bellcombet', 10, 32),
('CC', 'CC', 4, 30),
('Khalifa', 'Dubai', 5, 32),
('a', 'a', 4, 32),
('Albert', '73000 Chambery', 3, 32),
('david', 'wagadugu', 6, 32),
('sasa', 'bjbj', 98, 32);

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_salle` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `calendrier`
--

INSERT INTO `calendrier` (`id`, `date`, `id_salle`, `id_user`) VALUES
(112, '2022-01-03', 8, 39),
(111, '2022-01-01', 198, 39),
(110, '2022-01-02', 8, 38),
(109, '2022-01-01', 8, 38),
(108, '2022-01-02', 198, 38),
(107, '2022-01-01', 198, 38);

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `id_ressource` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `ajouter_par` int(11) NOT NULL,
  `time_ajout` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `photo` varchar(110) COLLATE utf8_bin NOT NULL,
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

INSERT INTO `salle` (`id_salle`, `numero`, `photo`, `Capacité`, `Ressources`, `niveau`, `Description`, `nb_org`, `nom_bat`, `time_ajout`) VALUES
(1, 2134, 'image1.jpg', 12, '21', 200, '12', 12, 'CROUS', '2022-11-29 23:56:28'),
(2, -1, 'image1.jpg', 2, '123', 100, '432', 234, 'CROUS', '2022-11-29 23:55:19'),
(3, 0, 'image1.jpg', 0, 'dsfghj', 200, '', 0, 'CROUS', '2022-12-01 11:29:56'),
(5, 2, 'image2.jpg', 23, '2', 200, '2', 2, 'qsddc', '2022-11-29 19:59:59'),
(6, 12, 'image2.jpg', 22, '22', 200, '22', 22, 'asd', '2022-11-29 19:32:38'),
(7, 23, 'image2.jpg', 0, 'ertyuio', 200, '', 0, 'CROUS', '2022-12-01 11:33:21'),
(8, 32, 'image3.jpg', 21, 'SAASASA', 1528, 'azer', 11, 'Khalifa', '2022-11-29 15:55:57'),
(9, 90, 'image3.jpg', 0, 'vbn,', 200, '', 0, 'CROUS', '2022-12-01 11:34:57'),
(10, 91, 'image3.jpg', 0, 'fg', 200, '', 0, 'CROUS', '2022-12-01 11:37:04'),
(11, 93, '', 0, 'dfgh', 200, '', 0, 'CROUS', '2022-12-01 11:42:00'),
(12, 94, 'image3.jpg', 0, 'dfghjk', 200, '', 0, 'CROUS', '2022-12-01 11:46:01'),
(15, 133, 'image4.jpg', 123, '12', 200, '123', 12, 'CC', '2022-11-29 19:51:22'),
(16, 222, 'image4.jpg', 222, 'SAASASA', 2500, 'azer', 22, 'Khalifa', '2022-11-29 15:56:41'),
(17, 377, 'image4.jpg', 88, '8FD88', 100, 'FD8F', 88, 'calendrier', '2022-11-29 19:35:38'),
(19, 719, '', 0, 'zertyuio', 200, '', 0, 'CROUS', '2022-12-01 11:50:56'),
(20, 51234, 'image4.jpg', 1234, 'AQWZSX', 0, 'WAQZSX', 423, 'CROUS', '2022-11-29 22:37:29'),
(239, 0, '', 0, '', 0, '', 0, 'a', '2022-12-14 14:51:26'),
(240, 0, '', 0, '', 0, '', 0, 'Khalifa', '2022-12-14 15:02:44'),
(241, 0, '', 0, '', 0, '', 0, 'david', '2022-12-14 15:12:26');

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
(30, 'a', 'a', 'Pro', 'a@a.com', 'a', 'a', 123456, NULL),
(32, 'b', 'b', 'Pro', 'd@h.l', 'b', 'b', 123456, NULL),
(34, 'Rr', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 0, 33),
(36, 'Ha', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 0, 222),
(37, '[K-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 0, 22),
(38, 'c', 'c', 'internaute', 'c@c.com', NULL, NULL, NULL, 10),
(39, 'v', 'v', 'internaute', 'd@h.l', NULL, NULL, NULL, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`Nom`) USING BTREE;

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id_ressource`);

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
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id_ressource` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
