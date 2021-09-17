-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 17 sep. 2021 à 01:54
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_cave`
--

-- --------------------------------------------------------

--
-- Structure de la table `bottles`
--

CREATE TABLE `bottles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` float NOT NULL,
  `grapes` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `description` varchar(550) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bottles`
--

INSERT INTO `bottles` (`id`, `name`, `year`, `grapes`, `country`, `region`, `description`, `picture`) VALUES
(9, 'CHATEAU LE DOYENNE', 2005, 'Merlot', 'France', 'Bordeaux', 'Though dense and chewy, this wine does not overpower with its finely balanced depth and structure. It is a truly luxurious experience for thesenses', '60d57e1133da8_generic.jpg'),
(10, 'LAN RIOJA CRIANZA', 2006, 'Tempranillo', 'Spain', 'Rioja', 'A resurgence of interest in boutique vineyards has opened the door for this excellent foray into the dessert wine market. Light and bouncy, with a hint of black truffle, this wine will not fail to tickle the taste buds.', '60d5979eaab91_60d597721cb56_lan_rioja.jpg'),
(12, 'DOMAINE DU BOUSCAT', 2009, 'Merlot', 'France', 'Bordeaux', 'La couleur dorée claire de ce vin dément la saveur vive qu&#39;il détient. Véritable vin d&#39;été, il invite à un pique-nique dans un vignoble ensoleillé.', '60d5a03a9f6cd_generic.jpg'),
(15, 'Parempuyre', 1111, 'Parempuyre', 'Parempuyre', 'Parempuyre', 'Parempuyre', '613f5d4cb43f9_wine-541922_1920.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `password`) VALUES
(15, 'gg', 'gg@gmail.com', '$2y$10$WscMxAJnfYs3d.lWvJq05ekCOW3ZFCs0EyJYKz9UGN72agmSyfTu.'),
(16, 'Camille', 'Camille@gmail.com', '$2y$10$8jFXehNCNtUjWEYlCOJiYuhtnt4hSZD3LO.fxmTbWFumuoTsdBGv2'),
(17, 'bb', 'bb@gmail.com', '$2y$10$PcJcAbOA4wCT2IyP/5FF2.6K.d9L0NgO2O5YKbAwyThV2PPyW8uxi'),
(19, 'julien', 'julien@gmail.com', '$2y$10$K9J9eRyUGCKvEfxta6JpSOT0IIEwxonGfoNqzXfjgg54weur0Af36'),
(20, 'Granier Joël', 'granierjoel@gmail.com', '$2y$10$MSVElcmVdJAA384Ojh7XR.hb2xuDzc4T.D8/E1P0ekzD8EMo8VF.a');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bottles`
--
ALTER TABLE `bottles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bottles`
--
ALTER TABLE `bottles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
