-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 18 juin 2020 à 09:16
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `simpson`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `id` tinyint(4) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(80) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_lieu` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`id`, `nom`, `description`, `image`, `id_lieu`) VALUES
(1, 'Homer Simpson', 'Père Simpson', 'https://zupimages.net/up/20/25/8yrc.png', 3),
(2, 'Marge Simpson', 'Mère Simpson', 'https://zupimages.net/up/20/25/w51w.png', 1),
(3, 'Bart Simpson', 'Fils ainé Simpson', 'https://zupimages.net/up/20/25/mmek.png', 3),
(4, 'Lisa Simpson', 'Fille Simpson', 'https://zupimages.net/up/20/25/hvlj.png', 2),
(5, 'Maggie Simpson', 'Fille cadette Simpson', 'https://zupimages.net/up/20/25/ojlx.png', 2),
(6, 'Abraham Simpson', 'Père d\'Homer Simpson', 'https://www.zupimages.net/up/20/25/wfn9.png', 18),
(7, 'Selma Bouvier', 'Sœur de Marge Simpson (jumelle de Patty)', 'https://zupimages.net/up/20/25/46hk.png', 14),
(8, 'Patty Bouvier', 'Sœur de Marge Simpson (jumelle de Selma)', 'https://zupimages.net/up/20/25/3jov.png', 14),
(9, 'Ned Flanders', 'Père Flanders / Voisin des Simpson', 'https://zupimages.net/up/20/25/a398.png', 9),
(10, 'Maude Flanders', 'Mère Flanders', 'https://zupimages.net/up/20/25/58nt.png', 9),
(11, 'Todd Flanders', 'Fils cadet Flanders', 'https://zupimages.net/up/20/25/auo4.png', 9),
(12, 'Rod Flanders', 'Fils ainé Flanders', 'https://zupimages.net/up/20/25/s5sb.png', 9),
(13, 'Milhouse Van Houten', 'Fils unique Van Houten / Meilleur ami de Bart', 'https://zupimages.net/up/20/25/rmlg.png', 6),
(14, 'Milhouse Van Houten', 'Fils unique Van Houten / Meilleur ami de Bart', 'https://zupimages.net/up/20/25/rmlg.png', 16),
(15, 'Milhouse Van Houten', 'Fils unique Van Houten / Meilleur ami de Bart', 'https://zupimages.net/up/20/25/rmlg.png', 17),
(16, 'Apu Nahasapeemapetilon', 'Propriétaire superette Kwik-E-Mart', 'https://zupimages.net/up/20/25/tgo8.png', 16),
(17, 'Manjula Nahasapeemapetilon', 'Femme d\'Apu', 'https://zupimages.net/up/20/25/vd8z.png', 16),
(18, 'Clancy Wiggum', 'Père Wiggum / Chef de la police de Springfield', 'https://zupimages.net/up/20/25/x50b.png', 4),
(19, 'Lou', 'Collègue de Wiggum / Policier', 'https://zupimages.net/up/20/25/orbo.png', 4),
(20, 'Eddie', 'Collègue de Wiggum / Policier', 'https://zupimages.net/up/20/25/6zkz.png', 4),
(21, 'Charles Montgomery Burns', 'Propriétaire de la centrale nucléaire', 'https://zupimages.net/up/20/25/zxrd.png', 13),
(22, 'Waylon Smithers', 'Assistant exécutif de M. Burns', 'https://zupimages.net/up/20/25/kfrz.png', 13),
(23, 'Lenny Leonard', 'Collegue d\'Homer', 'https://zupimages.net/up/20/25/b7vl.png', 8),
(24, 'Carl Carlson', 'Collegue d\'Homer', 'https://zupimages.net/up/20/25/5jbw.png', 8),
(25, 'Seymour Skinner', 'Principal de l\'école de Bart et Lisa', 'https://zupimages.net/up/20/25/opuy.png', 6),
(26, 'Agnès Skinner', 'Mère de Skinner', 'https://zupimages.net/up/20/25/lwfh.png', 20),
(27, 'Edna Krapabelle', 'institutrice de l\'école', 'https://zupimages.net/up/20/25/06dq.png', 6),
(28, 'Nelson Muntz', 'Camarade de Bart / Brute', 'https://zupimages.net/up/20/25/5wry.png', 6),
(29, 'Ralph Wiggum', 'Fils Wiggum', 'https://zupimages.net/up/20/25/wepf.png', 6),
(30, 'Krusty le clown', 'Herschel Schmoikel Krustovsky, clown', 'https://zupimages.net/up/20/25/0io5.png', 7),
(31, 'Tahiti Bob', 'Ancien assitant de Krusty', 'https://zupimages.net/up/20/25/lsf8.png', 4),
(32, 'Homme Abeille', 'Personnalité Télé', 'https://zupimages.net/up/20/25/nlpd.png', 12),
(33, 'Sideshow Mel', 'Assistant de Krusty', 'https://zupimages.net/up/20/25/51xl.png', 12),
(34, 'Kent Brockman', 'Présentateur télé pour Channel 6', 'https://zupimages.net/up/20/25/bmy4.png', 11),
(35, 'Hans Taupeman', 'Extremement malchanceux ', 'https://zupimages.net/up/20/25/kiyw.png', 18),
(36, 'Jasper Beardley', '', 'https://zupimages.net/up/20/25/umuu.png', 18),
(37, 'Moe Szyslak', 'Propriétaire de la taverne \"MOES\"', 'https://zupimages.net/up/20/25/avyl.png', 8),
(38, 'Barney Gumble', 'Alcoolique', 'https://zupimages.net/up/20/25/ij4v.png', 8),
(39, 'Joe Quimby', 'Maire de Springfield', 'https://zupimages.net/up/20/25/950v.png', 5),
(40, 'Gros Tony', 'Chef de la mafia de Springfield', 'https://zupimages.net/up/20/25/3vwj.png', 24),
(41, 'Professeur Frink', 'Savant fou', 'https://zupimages.net/up/20/25/mjgp.png', 22),
(42, 'Capitaine Horatio McCallister', 'Propriétaire du hollandais volant', 'https://zupimages.net/up/20/25/3rix.png', 26),
(44, 'Luigi Risotto', 'Chef cuisinier et propriétaire du Luigi\'s', 'https://zupimages.net/up/20/25/yaoc.png', 24),
(45, 'L\'adolescent boutonneux', 'Stagiaire chez Krusty Burger', 'https://zupimages.net/up/20/25/o7me.png', 7),
(46, 'Mrs. muntz', 'Mère de Nelson', 'https://zupimages.net/up/20/25/qi4b.png', 21),
(47, 'Cletus Spuckler - Brandine Spuckler', 'Habitants de la ferme', 'https://zupimages.net/up/20/25/fia5.png', 10),
(48, 'Julius Hibbert', 'Docteur de la famille Simpson', 'https://zupimages.net/up/20/25/ml5d.png', 23),
(49, 'Timothy Lovejoy', 'Révèrend de Springfield', 'https://zupimages.net/up/20/25/tukl.png', 25),
(50, 'Vendeur de BD', 'Gérant du donjon de l\'androïde', 'https://zupimages.net/up/20/25/4tkp.png', 17),
(51, 'Le riche Texan - Richard O\'Hara', 'Ancien propriétaire de la centrale', 'https://zupimages.net/up/20/25/uq8l.png', 19),
(52, 'Willy le jardinier', 'Jardinier de l\'école élémentaire', 'https://zupimages.net/up/20/25/9nx0.png', 6),
(53, 'Otto', 'Chauffeur du bus de l\'école élémentaire', 'https://zupimages.net/up/20/25/l65t.png', 6),
(54, 'Duffman', 'Alcoolique médiatisé', 'https://zupimages.net/up/20/25/qatj.png', 19);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`id`);
