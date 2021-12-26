-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 23 déc. 2021 à 11:48
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
CREATE DATABASE IF NOT EXISTS `cime_access` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
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
-- Creation du super Admin
INSERT INTO `admin_table` (`AdminId`, `AdminNom`, `AdminEmail`, `AdminPwd`) VALUES (NULL, 'Jems', 'jems@gmail.com', 'jems123');

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
(2, 'patricia', 'p@gmail.com', '096', 'goma'),
(3, 'dane', 'dane12334@gmail', '092436357', 'beni');

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
(2, 'ALBIN', 'B@gmail.com', '455', '12456', 'FMED', 'G3'),
(3, 'alse KINGA', 'kinga@gmail.com', '098847533', '13877', 'FPSE', 'g1');

-- --------------------------------------------------------

--
-- Structure de la table `traque_guest`
--

CREATE TABLE `traque_guest` (
  `Id` int(11) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `motif` varchar(128) NOT NULL,
  `duration` int(128) NOT NULL,
  `dateandTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `traque_guest`
--

INSERT INTO `traque_guest` (`Id`, `telephone`, `motif`, `duration`, `dateandTime`) VALUES
(3, '096', 'Recherche', 1, '2021-12-23 08:45:47'),
(4, '987654323', 'ENTRETIENT', 1, '2021-12-23 08:47:05'),
(5, '096', 'ENTRETIEN', 1, '2021-12-23 08:47:41'),
(6, '987654323', 'RECHERCHE', 9, '2021-12-23 08:48:07'),
(7, '096', 'Formation', 2, '2021-12-23 12:14:34');

-- --------------------------------------------------------

--
-- Structure de la table `traque_student`
--

CREATE TABLE `traque_student` (
  `Id` int(11) NOT NULL,
  `matricule` varchar(128) NOT NULL,
  `motif` varchar(128) NOT NULL,
  `duration` int(128) NOT NULL,
  `dateandTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `traque_student`
--

INSERT INTO `traque_student` (`Id`, `matricule`, `motif`, `duration`, `dateandTime`) VALUES
(2, '16040', 'COURS', 5, '2021-12-23 08:49:18'),
(3, '12456', 'RECHERCHE', 1, '2021-12-23 08:50:05'),
(4, '16423', 'cours', 3, '2021-12-23 11:26:19'),
(5, '13877', 'Cours', 8, '2021-12-23 11:26:45'),
(6, '16040', 'Formation', 4, '2021-12-23 11:28:47'),
(7, '16040', 'ConfÃ©rence', 3, '2021-12-23 11:55:56'),
(8, '12456', 'Cours', 8, '2021-12-23 11:56:50'),
(9, '16040', 'ConfÃ©rence', 5, '2021-12-23 12:03:28');

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
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `traque_student`
--
ALTER TABLE `traque_student`
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `register_student`
--
ALTER TABLE `register_student`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `traque_guest`
--
ALTER TABLE `traque_guest`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `traque_student`
--
ALTER TABLE `traque_student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
