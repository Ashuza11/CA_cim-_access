-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 15 déc. 2021 à 12:03
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cime_access`
--
CREATE DATABASE IF NOT EXISTS `cime_access` DEFAULT CHARACTER SET utf8 COLLATE utf8_german2_ci;
USE `cime_access`;

-- --------------------------------------------------------

--
-- Structure de la table `admin_table`
--

CREATE TABLE `admin_table` (
  `AdminId` int(3) NOT NULL,
  `AdminNom` varchar(128) NOT NULL,
  `AdminEmail` varchar(128) NOT NULL,
  `AdminPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `register_guest`
--

CREATE TABLE `register_guest` (
  `guestId` int(11) NOT NULL,
  `guestName` varchar(128) NOT NULL,
  `guestEmail` varchar(128) NOT NULL,
  `telephone` varchar(128) NOT NULL,
  `Adresse` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `register_guest`
--

INSERT INTO `register_guest` (`guestId`, `guestName`, `guestEmail`, `telephone`, `Adresse`) VALUES
(1, 'jomo', 'j@gmail.com', '987654323', 'KYESHERU'),
(2, 'patricia', 'p@gmail.com', '096', 'goma');

-- --------------------------------------------------------

--
-- Structure de la table `register_student`
--

CREATE TABLE `register_student` (
  `studentId` int(11) NOT NULL,
  `studentName` varchar(128) NOT NULL,
  `studentEmail` varchar(128) NOT NULL,
  `telephone` varchar(128) NOT NULL,
  `matricule` varchar(128) NOT NULL,
  `faculty` varchar(128) NOT NULL,
  `promotion` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `register_student`
--

INSERT INTO `register_student` (`studentId`, `studentName`, `studentEmail`, `telephone`, `matricule`, `faculty`, `promotion`) VALUES
(1, 'alse', 'a@gmail.com', '0972834702', '16040', 'FSTA', 'G3'),
(2, 'ALBIN', 'B@gmail.com', '455', '12456', 'FMED', 'G3');

-- --------------------------------------------------------

--
-- Structure de la table `traque_guest`
--

CREATE TABLE `traque_guest` (
  `Id` int(11) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `motif` varchar(128) NOT NULL,
  `IdEtranger` int(11) NOT NULL,
  `duration` int(128) NOT NULL,
  `dateandTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `traque_guest`
--

INSERT INTO `traque_guest` (`Id`, `telephone`, `motif`, `IdEtranger`, `duration`, `dateandTime`) VALUES
(1, '096', 'FORMATION', 2, 5, '2021-12-14 13:28:13'),
(2, '096', 'RECHERCHE', 2, 14, '2021-12-14 13:32:34');

-- --------------------------------------------------------

--
-- Structure de la table `traque_student`
--

CREATE TABLE `traque_student` (
  `Id` int(11) NOT NULL,
  `matricule` varchar(128) NOT NULL,
  `motif` varchar(128) NOT NULL,
  `IdEtudiant` int(11) NOT NULL,
  `duration` int(128) NOT NULL,
  `dateandTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `traque_student`
--

INSERT INTO `traque_student` (`Id`, `matricule`, `motif`, `IdEtudiant`, `duration`, `dateandTime`) VALUES
(1, '16040', '1YIOO', 1, 9, '2021-12-14 13:12:42');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`AdminId`);

--
-- Index pour la table `register_guest`
--
ALTER TABLE `register_guest`
  ADD PRIMARY KEY (`guestId`);

--
-- Index pour la table `register_student`
--
ALTER TABLE `register_student`
  ADD PRIMARY KEY (`studentId`);

--
-- Index pour la table `traque_guest`
--
ALTER TABLE `traque_guest`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdEtranger` (`IdEtranger`);

--
-- Index pour la table `traque_student`
--
ALTER TABLE `traque_student`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdEtudiant` (`IdEtudiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `AdminId` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `register_guest`
--
ALTER TABLE `register_guest`
  MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `register_student`
--
ALTER TABLE `register_student`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `traque_guest`
--
ALTER TABLE `traque_guest`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `traque_student`
--
ALTER TABLE `traque_student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `traque_guest`
--
ALTER TABLE `traque_guest`
  ADD CONSTRAINT `traque_guest_ibfk_1` FOREIGN KEY (`IdEtranger`) REFERENCES `register_guest` (`guestId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `traque_student`
--
ALTER TABLE `traque_student`
  ADD CONSTRAINT `traque_student_ibfk_1` FOREIGN KEY (`IdEtudiant`) REFERENCES `register_student` (`studentId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
