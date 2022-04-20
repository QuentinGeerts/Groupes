-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 juin 2021 à 14:03
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sc_personne`
--

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `ad_rue` varchar(60) NOT NULL,
  `ad_num` varchar(10) NOT NULL,
  `ad_cp` int(11) NOT NULL,
  `ad_ville` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `sexe`, `ad_rue`, `ad_num`, `ad_cp`, `ad_ville`) VALUES
(1, 'Le Gaulois', 'Astérix', 'M', 'Rue de la Bretagne', '48', 7500, 'Tournai'),
(2, 'César', 'Jules', 'M', 'Rue de Rome', '23', 6000, 'Charleroi'),
(3, 'D\'Egypte', 'Cléopâtre', 'F', 'Rue de la Pyramide', '14', 5000, 'Namur'),
(4, 'Curie', 'Marie', 'F', 'Rue de la Pologne', '36', 4000, 'Liège'),
(5, 'Mère', 'Theresa', 'F', 'Rue de l\'Albanie', '5', 6700, 'Arlon'),
(6, 'Dion', 'Céline', 'F', 'Rue du Québec', '3', 8400, 'Oostende'),
(7, 'De Belgique', 'Mathilde', 'F', 'Rue de Bruxelles', '86', 1000, 'Bruxelles'),
(8, 'Einstein', 'Albert', 'M', 'Rue des Etats-Unis', '147', 9000, 'Gent');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
