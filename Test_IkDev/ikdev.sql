-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 12 mars 2020 à 16:00
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ikdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `cuisine`
--

CREATE TABLE `cuisine` (
  `nom` varchar(50) NOT NULL,
  `volume` float NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cuisine`
--

INSERT INTO `cuisine` (`nom`, `volume`, `id`) VALUES
('tabouret', 0.4, 1),
('table de petit dejeuner', 0.8, 2),
('siege de banc', 0.6, 3),
('poubelle a pedale', 0.2, 4),
('chaise haute', 0.4, 5),
('petit appareil a main', 0.2, 6),
('cafetiere', 0.3, 7),
('micro-onde', 0.6, 8),
('fer / planche a repasser', 0.3, 9),
('aspirateur', 0.4, 10),
('machine a laver', 0.25, 11),
('seche-linge', 0.25, 12),
('lave-vaisselle', 0.25, 13),
('congelateur', 0.25, 14),
('refrigerateur s ou m', 0.25, 15),
('refrigerateur l', 0.6, 16),
('cuisinier', 0.25, 17),
('carton l', 0.4, 18),
('carton m', 0.3, 19);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
