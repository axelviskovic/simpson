-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 18 juin 2020 à 09:13
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `simpson`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

CREATE TABLE `lieux` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lieux`
--

INSERT INTO `lieux` (`id`, `nom`, `image`) VALUES
(1, 'Maison Simpson (Entrée)', 'https://www.zupimages.net/up/20/25/0cc3.png'),
(2, 'Maison Simpson (Cuisine)', 'https://zupimages.net/up/20/25/jget.jpg'),
(3, 'Maison Simpson (Salon)', 'https://www.zupimages.net/up/20/25/atlb.jpg'),
(4, 'Comissariat', 'https://zupimages.net/up/20/25/xk5k.jpg'),
(5, 'Mairie', 'https://zupimages.net/up/20/25/edv3.jpg'),
(6, 'École', 'https://www.zupimages.net/up/20/25/c2vy.jpg'),
(7, 'Krusty Burger', 'https://zupimages.net/up/20/25/m41y.jpg'),
(8, 'Taverne de Moe', 'https://www.zupimages.net/up/20/25/t7xi.jpg'),
(9, 'Maison Flanders', 'https://zupimages.net/up/20/25/u2i6.jpg'),
(10, 'Ferme ', 'https://www.zupimages.net/up/20/25/dupn.jpg'),
(11, 'Studio TV', ''),
(12, 'Krusty Studio', 'https://zupimages.net/up/20/25/a9kq.jpg'),
(13, 'Manoir', 'https://zupimages.net/up/20/25/bumi.jpg'),
(14, 'Bureau Unemployment', 'https://zupimages.net/up/20/25/itbj.jpg'),
(15, 'Centrale Nucléaire', 'https://www.zupimages.net/up/20/25/qgmp.png'),
(16, 'Kwik-E-Mart', 'https://www.zupimages.net/up/20/25/zb7a.png'),
(17, 'Donjon de l\'Androide', 'https://zupimages.net/up/20/25/n370.png'),
(18, 'Maison de retraite', 'https://zupimages.net/up/20/25/pvrz.jpg'),
(19, 'Duff', 'https://www.zupimages.net/up/20/25/fxev.png'),
(20, 'Maison de skinner', ''),
(21, 'Maison de Nelson', ''),
(22, 'Maison du professeur Frink', ''),
(23, 'Hopital', ''),
(24, 'Chez Luigi', ''),
(25, 'Eglise', 'https://www.zupimages.net/up/20/25/lipc.png'),
(26, 'Restaurant Fruits de mer', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
