-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 déc. 2022 à 02:05
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
('CROUS', 'Jacob Bellcombet', 10, 32),
('CC', 'CC', 4, 30),
('Khalifa', 'Dubai', 3, 32),
('a', 'a', 3, 32),
('xcw', 'xxx', 2, 32),
('Albert', '73000 Chambery', 2, 32),
('david', 'wagadugu', 5, 32),
('sasa', 'bjbj', 98, 32);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_res` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jour_dbt` date NOT NULL,
  `jour_fin` date NOT NULL,
  `date_reservation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, 2134, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 12, '21', 200, '12', 12, 'CROUS', '2022-11-29 23:56:28'),
(2, -1, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 2, '123', 100, '432', 234, 'CROUS', '2022-11-29 23:55:19'),
(3, 0, '', 0, 'dsfghj', 200, '', 0, 'CROUS', '2022-12-01 11:29:56'),
(5, 2, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 23, '2', 200, '2', 2, 'qsddc', '2022-11-29 19:59:59'),
(6, 12, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 22, '22', 200, '22', 22, 'asd', '2022-11-29 19:32:38'),
(7, 23, '', 0, 'ertyuio', 200, '', 0, 'CROUS', '2022-12-01 11:33:21'),
(8, 32, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 21, 'SAASASA', 1528, 'azer', 11, 'Khalifa', '2022-11-29 15:55:57'),
(9, 90, '', 0, 'vbn,', 200, '', 0, 'CROUS', '2022-12-01 11:34:57'),
(10, 91, '', 0, 'fg', 200, '', 0, 'CROUS', '2022-12-01 11:37:04'),
(11, 93, '', 0, 'dfgh', 200, '', 0, 'CROUS', '2022-12-01 11:42:00'),
(12, 94, '', 0, 'dfghjk', 200, '', 0, 'CROUS', '2022-12-01 11:46:01'),
(15, 133, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 123, '12', 200, '123', 12, 'CC', '2022-11-29 19:51:22'),
(16, 222, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 222, 'SAASASA', 2500, 'azer', 22, 'Khalifa', '2022-11-29 15:56:41'),
(17, 377, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 88, '8FD88', 100, 'FD8F', 88, 'calendrier', '2022-11-29 19:35:38'),
(19, 719, '', 0, 'zertyuio', 200, '', 0, 'CROUS', '2022-12-01 11:50:56'),
(20, 51234, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 1234, 'AQWZSX', 0, 'WAQZSX', 423, 'CROUS', '2022-11-29 22:37:29'),
(21, 128709, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 123, 'AZE', 100, 'SQA', 12, 'Khalifa', '2022-11-29 22:36:33'),
(198, 124, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 33, 'SAASASA', 33, 'azer', 33, 'Khalifa', '2022-11-29 15:22:44'),
(199, 490, '8e118da1-d70d-4ab9-be80-35b3768f6d63.jpg', 2, '123', 200, '345', 567, 'Albert', '2022-12-01 20:21:18'),
(203, 9192, '', 0, '', 200, '', 0, 'Albert', '2022-12-03 21:56:13'),
(231, 1245, '', 0, '', 200, '', 0, 'david', '2022-12-04 14:54:03'),
(232, 1284, '', 0, '', 200, '', 0, 'david', '2022-12-04 14:54:03'),
(233, 1246, '', 0, '', 200, '', 0, 'david', '2022-12-04 14:54:03'),
(234, 55, '', 0, '', 200, '', 0, 'david', '2022-12-04 14:59:31'),
(235, 0, '', 0, '', 200, '', 0, 'david', '2022-12-04 14:59:47');

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
(38, 'c', 'c', 'internaute', 'c@c.com', NULL, NULL, NULL, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`Nom`) USING BTREE;

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_res`);

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
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
