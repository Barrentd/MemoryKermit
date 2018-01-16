-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Janvier 2018 à 12:38
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `memory`
--

-- --------------------------------------------------------

--
-- Structure de la table `choisir`
--

CREATE TABLE `choisir` (
  `numImage` int(10) NOT NULL,
  `numPartie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `idImage` int(11) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`idImage`, `chemin`) VALUES
(1, 'https://zupimages.net/up/18/03/l1t9.gif'),
(2, 'https://zupimages.net/up/18/03/7b0y.gif'),
(3, 'https://zupimages.net/up/18/03/2dp4.gif'),
(4, 'https://zupimages.net/up/18/03/12zf.gif'),
(5, 'https://zupimages.net/up/18/03/avhr.gif'),
(6, 'https://zupimages.net/up/18/03/5l0z.gif'),
(7, 'https://zupimages.net/up/18/03/f1ig.gif'),
(8, 'https://zupimages.net/up/18/03/06na.gif'),
(9, 'https://zupimages.net/up/18/03/nmv5.gif'),
(10, 'https://zupimages.net/up/18/03/ed8i.gif'),
(11, 'https://zupimages.net/up/18/03/9ow7.gif'),
(12, 'https://zupimages.net/up/18/03/1dpk.gif'),
(13, 'https://zupimages.net/up/18/03/sy0w.gif'),
(14, 'https://zupimages.net/up/18/03/hjuf.gif'),
(15, 'https://zupimages.net/up/17/52/igjy.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `idJoueur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`idJoueur`, `pseudo`) VALUES
(1, 'beber'),
(2, 'juju'),
(3, 'Rick'),
(4, 'Alviss'),
(5, 'momo'),
(6, 'aaa');

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `idPartie` int(11) NOT NULL,
  `nbCoups` int(10) NOT NULL,
  `idJoueur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `partie`
--

INSERT INTO `partie` (`idPartie`, `nbCoups`, `idJoueur`) VALUES
(1, 44, 1),
(2, 47, 5),
(3, 64, 4),
(4, 21, 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `choisir`
--
ALTER TABLE `choisir`
  ADD PRIMARY KEY (`numImage`,`numPartie`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idImage`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`idJoueur`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`idPartie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `idJoueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
