-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 22 oct. 2019 à 18:30
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
-- Base de données :  `bf21`
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
  `proteine` float DEFAULT NULL,
  `fibre` float DEFAULT NULL,
  `glycemique` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `aliment`
--

INSERT INTO `aliment` (`codAliment`, `nomAliment`, `uniteMesure`, `typeAliment`, `calorie`, `lipid`, `glucide`, `proteine`, `fibre`, `glycemique`) VALUES
(1, 'Poulet 200g', 'g', NULL, 100, 50, 10, 10, 10, 5),
(2, 'Banane moyenne', '', NULL, 80, 50, 10, 10, 10, 5),
(3, 'Boeuf 200g', 'g', NULL, 100, 50, 10, 10, 10, 5),
(12, 'Banane moyenne', '', NULL, 80, 50, 10, 10, 10, 5),
(13, 'Boeuf 200g', 'g', NULL, 100, 50, 10, 10, 10, 5),
(14, 'Poulet 400g', 'g', NULL, 200, 100, 20, 20, 20, 10),
(17, 'arroz', 'grama', NULL, 100, 50, 10, 10, 5, 3),
(18, 'arroz', 'grama', NULL, 100, 50, 10, 10, 5, 3),
(19, '', '', NULL, 0, 0, 0, 0, 0, 0),
(20, '', '', NULL, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `habitudesdevie`
--

CREATE TABLE `habitudesdevie` (
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
-- Structure de la table `questionaireplanalimentaire`
--

CREATE TABLE `questionaireplanalimentaire` (
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
-- Structure de la table `reseignementsmedicaux`
--

CREATE TABLE `reseignementsmedicaux` (
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
-- Structure de la table `tablerepas`
--

CREATE TABLE `tablerepas` (
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
-- Structure de la table `typealiment`
--

CREATE TABLE `typealiment` (
  `codTypeAliment` int(11) NOT NULL,
  `nomTypeAliment` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `typeutlilisateur`
--

CREATE TABLE `typeutlilisateur` (
  `codtypeUtlilisateur` int(11) NOT NULL,
  `nomType` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estAdm` tinyint(1) DEFAULT NULL,
  `estActif` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `typeutlilisateur`
--

INSERT INTO `typeutlilisateur` (`codtypeUtlilisateur`, `nomType`, `estAdm`, `estActif`) VALUES
(1, 'Admin', 1, 1),
(2, 'User', 0, 1);

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
  `telephone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motDePasse` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`codUtilisateur`, `type`, `eMail`, `nom`, `poid`, `taille`, `dateNaissance`, `genre`, `codePostal`, `adresse`, `telephone`, `motDePasse`) VALUES
(1, 1, 'admin@bf21.qc.ca', 'Administrateur', NULL, NULL, NULL, 'F', NULL, NULL, NULL, '12345678'),
(2, 2, 'thiago@thiago.ca', 'Thiago', NULL, NULL, NULL, 'H', NULL, NULL, NULL, '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`codAliment`);

--
-- Index pour la table `habitudesdevie`
--
ALTER TABLE `habitudesdevie`
  ADD PRIMARY KEY (`codHabitudesDeVie`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Index pour la table `questionaireplanalimentaire`
--
ALTER TABLE `questionaireplanalimentaire`
  ADD PRIMARY KEY (`codPlanAlimentaire`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Index pour la table `reseignementsmedicaux`
--
ALTER TABLE `reseignementsmedicaux`
  ADD PRIMARY KEY (`codResMedicaux`),
  ADD KEY `codAdministrateur` (`codAdministrateur`),
  ADD KEY `codUtilisateur` (`codUtilisateur`);

--
-- Index pour la table `tablerepas`
--
ALTER TABLE `tablerepas`
  ADD PRIMARY KEY (`codTable`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Index pour la table `typealiment`
--
ALTER TABLE `typealiment`
  ADD PRIMARY KEY (`codTypeAliment`);

--
-- Index pour la table `typeutlilisateur`
--
ALTER TABLE `typeutlilisateur`
  ADD PRIMARY KEY (`codtypeUtlilisateur`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`codUtilisateur`),
  ADD KEY `type` (`type`),
  ADD KEY `idx_utilisateurs_type` (`type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aliment`
--
ALTER TABLE `aliment`

  MODIFY `codAliment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `habitudesdevie`
--
ALTER TABLE `habitudesdevie`
  MODIFY `codHabitudesDeVie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `questionaireplanalimentaire`
--
ALTER TABLE `questionaireplanalimentaire`
  MODIFY `codPlanAlimentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reseignementsmedicaux`
--
ALTER TABLE `reseignementsmedicaux`
  MODIFY `codResMedicaux` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tablerepas`
--
ALTER TABLE `tablerepas`
  MODIFY `codTable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typealiment`
--
ALTER TABLE `typealiment`
  MODIFY `codTypeAliment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typeutlilisateur`
--
ALTER TABLE `typeutlilisateur`
  MODIFY `codtypeUtlilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `codUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `habitudesdevie`
--
ALTER TABLE `habitudesdevie`
  ADD CONSTRAINT `habitudesdevie_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `habitudesdevie_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `questionaireplanalimentaire`
--
ALTER TABLE `questionaireplanalimentaire`
  ADD CONSTRAINT `questionaireplanalimentaire_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `questionaireplanalimentaire_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `reseignementsmedicaux`
--
ALTER TABLE `reseignementsmedicaux`
  ADD CONSTRAINT `reseignementsmedicaux_ibfk_1` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `reseignementsmedicaux_ibfk_2` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `tablerepas`
--
ALTER TABLE `tablerepas`
  ADD CONSTRAINT `tablerepas_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `tablerepas_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typeutlilisateur` (`codtypeUtlilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
