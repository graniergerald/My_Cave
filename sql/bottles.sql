-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 23 juin 2021 à 20:38
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id16434997_my_cave`
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
(3, 'LAN RIOJA CRIANZA', 2006, 'Tempranillo', 'Spain', 'Riojaaaa', 'A resurgence of interest in boutique vineyards has opened the door for this excellent foray into the dessert wine market. Light and bouncy, with a hint of black truffle, this wine will not fail to tickle the taste buds.', 'lan_rioja.jpg'),
(4, 'MARGERUM SYBARITE', 2010, 'Sauvignon Blanc', 'USA', 'California Central Cosat', 'The cache of a fine Cabernet in ones wine cellar can now be replaced with a childishly playful wine bubbling over with tempting tastes of\r\nblack cherry and licorice. This is a taste sure to transport you back in time.', 'margerum.jpg'),
(6, 'OWEN ROE &#34;EX UMBRIS&#34;', 2009, 'Syrah', 'USA', 'Washington', 'A one-two punch of black pepper and jalapeno will send your senses reeling, as the orange essence snaps you back to reality. Don&#39;t miss&#13;&#10;this award-winning taste sensation.', 'ex_umbris.jpg'),
(7, 'REX HILL', 2009, 'Pinot Noir', 'USA', 'Oregon', 'One cannot doubt that this will be the wine served at the Hollywood award shows, because it has undeniable star power. Be the first to catch&#13;&#10;the debut that everyone will be talking about tomorrow.', 'rex_hill.jpg'),
(8, 'VITICCIO CLASSICO RISERVA', 2007, 'Sangiovese Merlot', 'Italy', 'Tuscany', 'Though soft and rounded in texture, the body of this wine is full and rich and oh-so-appealing. This delivery is even more impressive when one takes note of the tender tannins that leave the taste buds wholly satisfied.', 'viticcio.jpg'),
(9, 'CHATEAU LE DOYENNE', 2005, 'Merlot', 'France', 'Bordeaux', 'Though dense and chewy, this wine does not overpower with its finely balanced depth and structure. It is a truly luxurious experience for the&#13;&#10;senses.', 'le_doyenne.jpg'),
(13, 'DOMAINE DU BOUSCAT', 2009, 'Merlot', 'France', 'Bordeaux', 'The light golden color of this wine belies the bright flavor it holds. A true summer wine, it begs for a picnic lunch in a sun-soaked vineyard.', 'bouscat.jpg'),
(14, 'BLOCK NINE', 2009, 'Pinot Noir', 'USA', 'California', 'With hints of ginger and spice, this wine makes an excellent complement to light appetizer and dessert fare for a holiday gathering.', 'block_nine.jpg'),
(15, 'Bordeaux', 2121, 'TEST', 'pAYSTEST', 'TEST', 'EQRGTRSB', 'Vin.png'),
(16, 'L&#39;Etable du Coin', 2019, 'Maïs grain entier', 'France', 'Occitanie', 'Au coeur de la gascogne, retrouver un élevage de canards qui serviront au bout de 3 mois a confectionner de délicieux foies gras !', 'L&#39;Etable du Coin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bottles`
--
ALTER TABLE `bottles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bottles`
--
ALTER TABLE `bottles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
