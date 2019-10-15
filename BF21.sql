-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 15 oct. 2019 à 16:57
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `BF21`
--

-- --------------------------------------------------------

--
-- Structure de la table `aliment`
--

CREATE TABLE `aliment` (
  `codAliment` int(11) NOT NULL,
  `nomAliment` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uniteMesure` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeAliment` int(11) DEFAULT NULL,
  `calorie` float DEFAULT NULL,
  `lipid` float DEFAULT NULL,
  `glucide` float DEFAULT NULL,
  `proteine` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `habitudesDeVie`
--

CREATE TABLE `habitudesDeVie` (
  `codHabitudesDeVie` int(11) NOT NULL,
  `codUtilisateur` int(11) NOT NULL,
  `codAdministrateur` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `poidsActuel` float DEFAULT NULL,
  `poidsObjectif` float DEFAULT NULL,
  `grandeur` float DEFAULT NULL,
  `PASB` int(3) DEFAULT NULL,
  `PADB` int(3) DEFAULT NULL,
  `PASM` int(3) DEFAULT NULL,
  `PADM` int(3) DEFAULT NULL,
  `PASH` int(3) DEFAULT NULL,
  `PADH` int(3) DEFAULT NULL,
  `fumeurParJour` int(3) DEFAULT NULL,
  `alcoolVerParSemaine` int(3) DEFAULT NULL,
  `employPhisPass` tinyint(1) DEFAULT NULL,
  `sportParSemaine` int(3) DEFAULT NULL,
  `intensiteSport` int(1) DEFAULT NULL,
  `descriptionSport` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `styleVie` int(3) DEFAULT NULL,
  `nombreAneesExpAnterieur` int(3) DEFAULT NULL,
  `disponEntreinemenSemaine` int(3) DEFAULT NULL,
  `nombreHeures` int(3) DEFAULT NULL,
  `preferences` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pertePoids` int(3) DEFAULT NULL,
  `remisseEnForme` tinyint(1) DEFAULT NULL,
  `priseDeMasse` int(3) DEFAULT NULL,
  `competition` tinyint(1) DEFAULT NULL,
  `dateCompetition` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `questionairePlanAlimentaire`
--

CREATE TABLE `questionairePlanAlimentaire` (
  `codPlanAlimentaire` int(11) NOT NULL,
  `codUtilisateur` int(11) NOT NULL,
  `codAdministrateur` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `q01` tinyint(1) DEFAULT NULL,
  `q02` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q03` tinyint(1) DEFAULT NULL,
  `q04` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q05` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q06` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q07` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q08` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q09` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q10` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q11` tinyint(1) DEFAULT NULL,
  `q12` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q13` tinyint(1) DEFAULT NULL,
  `q14` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reseignementsMedicaux`
--

CREATE TABLE `reseignementsMedicaux` (
  `codResMedicaux` int(11) NOT NULL,
  `codUtilisateur` int(11) NOT NULL,
  `codAdministrateur` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `q01` tinyint(1) DEFAULT NULL,
  `q02` tinyint(1) DEFAULT NULL,
  `q03` tinyint(1) DEFAULT NULL,
  `q04` tinyint(1) DEFAULT NULL,
  `q05` tinyint(1) DEFAULT NULL,
  `q06` tinyint(1) DEFAULT NULL,
  `q07` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tableRepas`
--

CREATE TABLE `tableRepas` (
  `codTable` int(11) NOT NULL,
  `codUtilisateur` int(11) NOT NULL,
  `codAdministrateur` int(11) NOT NULL,
  `dateDebut` date DEFAULT NULL,
  `repasNro` int(11) DEFAULT NULL,
  `alimentNro` int(11) DEFAULT NULL,
  `codAliment` int(11) DEFAULT NULL,
  `quantite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typeAliment`
--

CREATE TABLE `typeAliment` (
  `codTypeAliment` int(11) NOT NULL,
  `nomTypeAliment` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typeUtlilisateur`
--

CREATE TABLE `typeUtlilisateur` (
  `codtypeUtlilisateur` int(11) NOT NULL,
  `nomType` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estAdm` tinyint(1) DEFAULT NULL,
  `estActif` tinyint(1) DEFAULT NULL,
  `motDePass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `typeUtlilisateur`
--

INSERT INTO `typeUtlilisateur` (`codtypeUtlilisateur`, `nomType`, `estAdm`, `estActif`, `motDePass`) VALUES
(1, 'Admin', 0, NULL, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `codUtilisateur` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `eMail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `poid` float DEFAULT NULL,
  `taille` float DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `genre` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codePostal` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`codUtilisateur`, `type`, `eMail`, `nom`, `poid`, `taille`, `dateNaissance`, `genre`, `codePostal`, `adresse`, `telephone`) VALUES
(1, 1, 'admin@bf21.qc.ca', 'Administrateur', NULL, NULL, NULL, 'F', NULL, NULL, NULL),
(1234, 1, 'totoro@gmail.com', 'totoro', 44, 12, '2019-10-08', 'M', 'H3N2E4', '7253 Avenue des Pins', '4362538463');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`codAliment`);

--
-- Index pour la table `habitudesDeVie`
--
ALTER TABLE `habitudesDeVie`
  ADD PRIMARY KEY (`codHabitudesDeVie`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Index pour la table `questionairePlanAlimentaire`
--
ALTER TABLE `questionairePlanAlimentaire`
  ADD PRIMARY KEY (`codPlanAlimentaire`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Index pour la table `reseignementsMedicaux`
--
ALTER TABLE `reseignementsMedicaux`
  ADD PRIMARY KEY (`codResMedicaux`),
  ADD KEY `codAdministrateur` (`codAdministrateur`),
  ADD KEY `codUtilisateur` (`codUtilisateur`);

--
-- Index pour la table `tableRepas`
--
ALTER TABLE `tableRepas`
  ADD PRIMARY KEY (`codTable`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Index pour la table `typeAliment`
--
ALTER TABLE `typeAliment`
  ADD PRIMARY KEY (`codTypeAliment`);

--
-- Index pour la table `typeUtlilisateur`
--
ALTER TABLE `typeUtlilisateur`
  ADD PRIMARY KEY (`codtypeUtlilisateur`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`codUtilisateur`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aliment`
--
ALTER TABLE `aliment`
  MODIFY `codAliment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `habitudesDeVie`
--
ALTER TABLE `habitudesDeVie`
  MODIFY `codHabitudesDeVie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `questionairePlanAlimentaire`
--
ALTER TABLE `questionairePlanAlimentaire`
  MODIFY `codPlanAlimentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reseignementsMedicaux`
--
ALTER TABLE `reseignementsMedicaux`
  MODIFY `codResMedicaux` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tableRepas`
--
ALTER TABLE `tableRepas`
  MODIFY `codTable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typeAliment`
--
ALTER TABLE `typeAliment`
  MODIFY `codTypeAliment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typeUtlilisateur`
--
ALTER TABLE `typeUtlilisateur`
  MODIFY `codtypeUtlilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `codUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `habitudesDeVie`
--
ALTER TABLE `habitudesDeVie`
  ADD CONSTRAINT `habitudesdevie_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `habitudesdevie_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `questionairePlanAlimentaire`
--
ALTER TABLE `questionairePlanAlimentaire`
  ADD CONSTRAINT `questionaireplanalimentaire_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `questionaireplanalimentaire_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `reseignementsMedicaux`
--
ALTER TABLE `reseignementsMedicaux`
  ADD CONSTRAINT `reseignementsmedicaux_ibfk_1` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `reseignementsmedicaux_ibfk_2` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `tableRepas`
--
ALTER TABLE `tableRepas`
  ADD CONSTRAINT `tablerepas_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `tablerepas_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typeUtlilisateur` (`codtypeUtlilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
