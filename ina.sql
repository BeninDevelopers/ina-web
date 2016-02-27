-- phpMyAdmin SQL Dump
-- version 4.2.13.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 27 Février 2016 à 23:47
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ina`
--

-- --------------------------------------------------------

--
-- Structure de la table `etat_courant_zone`
--

CREATE TABLE IF NOT EXISTS `etat_courant_zone` (
`id` int(11) NOT NULL,
  `mobile_user_id_id` int(11) DEFAULT NULL,
  `dateMiseAJour` datetime NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `lat` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE IF NOT EXISTS `localite` (
`id` int(11) NOT NULL,
  `libele` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mobile_user`
--

CREATE TABLE IF NOT EXISTS `mobile_user` (
`id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gcmid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateEnregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etat_courant_zone`
--
ALTER TABLE `etat_courant_zone`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_5D4D137266DE3721` (`mobile_user_id_id`);

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mobile_user`
--
ALTER TABLE `mobile_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etat_courant_zone`
--
ALTER TABLE `etat_courant_zone`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `localite`
--
ALTER TABLE `localite`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mobile_user`
--
ALTER TABLE `mobile_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etat_courant_zone`
--
ALTER TABLE `etat_courant_zone`
ADD CONSTRAINT `FK_5D4D137266DE3721` FOREIGN KEY (`mobile_user_id_id`) REFERENCES `mobile_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
