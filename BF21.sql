-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/10/2019 às 22:26
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `BF21`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aliment`
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
-- Despejando dados para a tabela `aliment`
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
-- Estrutura para tabela `habitudesdevie`
--

CREATE TABLE `habitudesdevie` (
  `codHabitudesDeVie` int(11) NOT NULL,
  `codUtilisateur` int(11) NOT NULL,
  `codAdministrateur` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `poidsActuel` float DEFAULT NULL,
  `poidsObjectif` float DEFAULT NULL,
  `fume` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pressionSanguine` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fumeurParJour` int(3) DEFAULT NULL,
  `alcoolVerParSemaine` int(3) DEFAULT NULL,
  `employPhisPass` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `styleVie` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptionSport` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sportParSemaine` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombreAneesExpAnterieur` int(3) DEFAULT NULL,
  `disponEntreinemenSemaine` int(3) DEFAULT NULL,
  `nombreHeures` int(3) DEFAULT NULL,
  `preferences` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pertePoids` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priseDeMasse` int(3) DEFAULT NULL,
  `competition` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `questionaireplanalimentaire`
--

CREATE TABLE `questionaireplanalimentaire` (
  `codPlanAlimentaire` int(11) NOT NULL,
  `codUtilisateur` int(11) NOT NULL,
  `codAdministrateur` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `q01` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q01R` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q02` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q02R` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q03` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q03R` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q04` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q05` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q06` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q07` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q08` tinyint(1) DEFAULT NULL,
  `q09` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q10` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q10R` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q11` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q11R` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `reseignementsmedicaux`
--

CREATE TABLE `reseignementsmedicaux` (
  `codResMedicaux` int(11) NOT NULL,
  `codUtilisateur` int(11) NOT NULL,
  `codAdministrateur` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `q01` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q02` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q03` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q04` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q05` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q06` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q07` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tablerepas`
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
-- Estrutura para tabela `typealiment`
--

CREATE TABLE `typealiment` (
  `codTypeAliment` int(11) NOT NULL,
  `nomTypeAliment` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `typeutlilisateur`
--

CREATE TABLE `typeutlilisateur` (
  `codtypeUtlilisateur` int(11) NOT NULL,
  `nomType` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estAdm` tinyint(1) DEFAULT NULL,
  `estActif` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `typeutlilisateur`
--

INSERT INTO `typeutlilisateur` (`codtypeUtlilisateur`, `nomType`, `estAdm`, `estActif`) VALUES
(1, 'Admin', 1, 1),
(2, 'User', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `utilisateurs`
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
-- Despejando dados para a tabela `utilisateurs`
--

INSERT INTO `utilisateurs` (`codUtilisateur`, `type`, `eMail`, `nom`, `poid`, `taille`, `dateNaissance`, `genre`, `codePostal`, `adresse`, `telephone`, `motDePasse`) VALUES
(1, 1, 'admin@bf21.qc.ca', 'Administrateur', NULL, NULL, NULL, 'F', NULL, NULL, NULL, '1'),
(2, 2, 'thiago@thiago.ca', 'Thiago', 12, 13, '2000-01-01', 'F', NULL, '', '', '1');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`codAliment`);

--
-- Índices de tabela `habitudesdevie`
--
ALTER TABLE `habitudesdevie`
  ADD PRIMARY KEY (`codHabitudesDeVie`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Índices de tabela `questionaireplanalimentaire`
--
ALTER TABLE `questionaireplanalimentaire`
  ADD PRIMARY KEY (`codPlanAlimentaire`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Índices de tabela `reseignementsmedicaux`
--
ALTER TABLE `reseignementsmedicaux`
  ADD PRIMARY KEY (`codResMedicaux`),
  ADD KEY `codAdministrateur` (`codAdministrateur`),
  ADD KEY `codUtilisateur` (`codUtilisateur`);

--
-- Índices de tabela `tablerepas`
--
ALTER TABLE `tablerepas`
  ADD PRIMARY KEY (`codTable`),
  ADD KEY `codUtilisateur` (`codUtilisateur`),
  ADD KEY `codAdministrateur` (`codAdministrateur`);

--
-- Índices de tabela `typealiment`
--
ALTER TABLE `typealiment`
  ADD PRIMARY KEY (`codTypeAliment`);

--
-- Índices de tabela `typeutlilisateur`
--
ALTER TABLE `typeutlilisateur`
  ADD PRIMARY KEY (`codtypeUtlilisateur`);

--
-- Índices de tabela `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`codUtilisateur`),
  ADD KEY `type` (`type`),
  ADD KEY `idx_utilisateurs_type` (`type`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aliment`
--
ALTER TABLE `aliment`
  MODIFY `codAliment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `habitudesdevie`
--
ALTER TABLE `habitudesdevie`
  MODIFY `codHabitudesDeVie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `questionaireplanalimentaire`
--
ALTER TABLE `questionaireplanalimentaire`
  MODIFY `codPlanAlimentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reseignementsmedicaux`
--
ALTER TABLE `reseignementsmedicaux`
  MODIFY `codResMedicaux` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tablerepas`
--
ALTER TABLE `tablerepas`
  MODIFY `codTable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `typealiment`
--
ALTER TABLE `typealiment`
  MODIFY `codTypeAliment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `typeutlilisateur`
--
ALTER TABLE `typeutlilisateur`
  MODIFY `codtypeUtlilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `codUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `habitudesdevie`
--
ALTER TABLE `habitudesdevie`
  ADD CONSTRAINT `habitudesdevie_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `habitudesdevie_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Restrições para tabelas `questionaireplanalimentaire`
--
ALTER TABLE `questionaireplanalimentaire`
  ADD CONSTRAINT `questionaireplanalimentaire_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `questionaireplanalimentaire_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Restrições para tabelas `reseignementsmedicaux`
--
ALTER TABLE `reseignementsmedicaux`
  ADD CONSTRAINT `reseignementsmedicaux_ibfk_1` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `reseignementsmedicaux_ibfk_2` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Restrições para tabelas `tablerepas`
--
ALTER TABLE `tablerepas`
  ADD CONSTRAINT `tablerepas_ibfk_1` FOREIGN KEY (`codUtilisateur`) REFERENCES `utilisateurs` (`codUtilisateur`),
  ADD CONSTRAINT `tablerepas_ibfk_2` FOREIGN KEY (`codAdministrateur`) REFERENCES `utilisateurs` (`codUtilisateur`);

--
-- Restrições para tabelas `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typeutlilisateur` (`codtypeUtlilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
