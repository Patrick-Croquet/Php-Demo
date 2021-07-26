-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 26 juil. 2021 à 16:59
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `Animal`
--

CREATE TABLE `Animal` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(20) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `DateDeces` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chat`
--

CREATE TABLE `Chat` (
  `idAnimal` int(11) NOT NULL,
  `idRace` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Chien`
--

CREATE TABLE `Chien` (
  `idAnimal` int(11) NOT NULL,
  `taille` varchar(45) DEFAULT NULL,
  `Poids` varchar(45) DEFAULT NULL,
  `idRace` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Dossier`
--

CREATE TABLE `Dossier` (
  `id` int(11) NOT NULL,
  `antecedents` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Effectuer`
--

CREATE TABLE `Effectuer` (
  `idVeterinaire` int(11) NOT NULL,
  `idGarde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Garde`
--

CREATE TABLE `Garde` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Horaire`
--

CREATE TABLE `Horaire` (
  `id` int(11) NOT NULL,
  `jour` date DEFAULT NULL,
  `heureDebut` time DEFAULT NULL,
  `heureFin` time DEFAULT NULL,
  `idVeterinaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Medicament`
--

CREATE TABLE `Medicament` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `dosage` varchar(45) DEFAULT NULL,
  `indications` text,
  `effetsSecondaires` text,
  `laboratoire` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Prescrire`
--

CREATE TABLE `Prescrire` (
  `idVisite` int(11) NOT NULL,
  `posologie` varchar(45) DEFAULT NULL,
  `idMedicament` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Proprietaire`
--

CREATE TABLE `Proprietaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `rue` varchar(45) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `telephoneMobile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Race_chat`
--

CREATE TABLE `Race_chat` (
  `nom` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Race_chien`
--

CREATE TABLE `Race_chien` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Veterinaire`
--

CREATE TABLE `Veterinaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `telephoneMobile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Visite`
--

CREATE TABLE `Visite` (
  `id` int(11) NOT NULL,
  `dateVisite` date DEFAULT NULL,
  `heureVisite` time DEFAULT NULL,
  `raison` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Animal`
--
ALTER TABLE `Animal`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Chat`
--
ALTER TABLE `Chat`
  ADD KEY `indexAnimal` (`idAnimal`),
  ADD KEY `indexRace` (`idRace`);

--
-- Index pour la table `Chien`
--
ALTER TABLE `Chien`
  ADD KEY `inddexAnimal` (`idAnimal`),
  ADD KEY `indexRace` (`idRace`);

--
-- Index pour la table `Dossier`
--
ALTER TABLE `Dossier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Effectuer`
--
ALTER TABLE `Effectuer`
  ADD KEY `Fk_veterinaire2` (`idVeterinaire`),
  ADD KEY `Fk_garde` (`idGarde`);

--
-- Index pour la table `Garde`
--
ALTER TABLE `Garde`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Horaire`
--
ALTER TABLE `Horaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Medicament`
--
ALTER TABLE `Medicament`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Prescrire`
--
ALTER TABLE `Prescrire`
  ADD KEY `idVisite` (`idVisite`),
  ADD KEY `idMedicament` (`idMedicament`);

--
-- Index pour la table `Proprietaire`
--
ALTER TABLE `Proprietaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Race_chat`
--
ALTER TABLE `Race_chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index1` (`id`) USING BTREE;

--
-- Index pour la table `Race_chien`
--
ALTER TABLE `Race_chien`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Veterinaire`
--
ALTER TABLE `Veterinaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Visite`
--
ALTER TABLE `Visite`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Animal`
--
ALTER TABLE `Animal`
  ADD CONSTRAINT `fk_Proprietaire` FOREIGN KEY (`Id`) REFERENCES `proprietaire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `Chat`
--
ALTER TABLE `Chat`
  ADD CONSTRAINT `fk_Animal2` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_raceChat2` FOREIGN KEY (`idRace`) REFERENCES `race_chat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Chien`
--
ALTER TABLE `Chien`
  ADD CONSTRAINT `fk_Animal` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_raceChien` FOREIGN KEY (`idRace`) REFERENCES `race_chien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Dossier`
--
ALTER TABLE `Dossier`
  ADD CONSTRAINT `fk_Proprietaire2` FOREIGN KEY (`id`) REFERENCES `proprietaire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `Effectuer`
--
ALTER TABLE `Effectuer`
  ADD CONSTRAINT `Fk_garde` FOREIGN KEY (`idGarde`) REFERENCES `garde` (`id`),
  ADD CONSTRAINT `Fk_veterinaire2` FOREIGN KEY (`idVeterinaire`) REFERENCES `veterinaire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Horaire`
--
ALTER TABLE `Horaire`
  ADD CONSTRAINT `Fk_veterinaire3` FOREIGN KEY (`id`) REFERENCES `veterinaire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Prescrire`
--
ALTER TABLE `Prescrire`
  ADD CONSTRAINT `Fk_medicament` FOREIGN KEY (`idMedicament`) REFERENCES `medicament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_visite` FOREIGN KEY (`idVisite`) REFERENCES `visite` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Visite`
--
ALTER TABLE `Visite`
  ADD CONSTRAINT `fk_Dossier` FOREIGN KEY (`id`) REFERENCES `dossier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Veterinaire` FOREIGN KEY (`id`) REFERENCES `veterinaire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
