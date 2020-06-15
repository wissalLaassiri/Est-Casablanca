-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 15 fév. 2019 à 15:55
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `estc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pwd` varchar(9) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `chefDeDepartement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `nom`, `chefDeDepartement`) VALUES
(1, 'Genie Informatique', 'M.Bouragba\r\n'),
(2, 'Genie Des Procedees', 'M.Allame\r\n'),
(3, 'Genie mecanique', 'M.XXXX'),
(4, 'Genie electrique', 'M.YYYY\r\n'),
(6, 'Technique de managment', 'M.UUUU'),
(7, 'Technique de Commercialisation', 'M.yyyy'),
(8, 'Gestion des Entreprises et des Administration', 'M.PPPP\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `etudient`
--

CREATE TABLE `etudient` (
  `id` int(11) NOT NULL,
  `cin` varchar(9) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `dateDeNaissance` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudient`
--

INSERT INTO `etudient` (`id`, `cin`, `nom`, `prenom`, `ville`, `dateDeNaissance`) VALUES
(1, 'AAAA', 'LAASSIRI', 'Wissal', 'CASABLANCA', '1999-05-29 00:00:00'),
(2, 'BBBB', 'NINIA', 'FATIMA-EZAHRA', 'CASABLANCA', '1998-12-16 00:00:00'),
(3, 'CCCC', 'RAYYAM', 'Jihade', 'El jadida', '2000-02-01 00:00:00'),
(4, 'DDDD', 'BISSOUNI', 'Fatima-ezahra', 'CASABLANCA', '1998-08-21 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `f_categories`
--

CREATE TABLE `f_categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_categories`
--

INSERT INTO `f_categories` (`id`, `nom`) VALUES
(1, 'Programmation'),
(2, 'Peripherique'),
(3, 'Etude');

-- --------------------------------------------------------

--
-- Structure de la table `f_messages`
--

CREATE TABLE `f_messages` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_posteur` int(11) NOT NULL,
  `date_heure_post` datetime NOT NULL,
  `date_heure_edition` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `meilleure_reponse` int(1) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_messages`
--

INSERT INTO `f_messages` (`id`, `id_topic`, `id_posteur`, `date_heure_post`, `date_heure_edition`, `meilleure_reponse`, `contenu`) VALUES
(1, 5, 0, '2019-01-27 06:59:24', '2019-01-27 06:59:24', 0, 'Ok'),
(2, 5, 0, '2019-01-27 07:09:00', '2019-01-27 07:09:00', 0, 'teest\r\n'),
(3, 5, 0, '2019-01-27 07:22:11', '2019-01-27 07:22:11', 0, 'okkk\r\n'),
(4, 5, 0, '2019-01-27 07:31:46', '2019-01-27 07:31:46', 0, 'test2'),
(5, 5, 0, '2019-01-27 07:33:21', '2019-01-27 07:33:21', 0, 'jhk'),
(6, 4, 0, '2019-01-29 18:40:50', '2019-01-29 18:40:50', 0, 'good'),
(7, 8, 0, '2019-01-30 18:20:57', '2019-01-30 18:20:57', 0, 'Utile');

-- --------------------------------------------------------

--
-- Structure de la table `f_souscategories`
--

CREATE TABLE `f_souscategories` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_souscategories`
--

INSERT INTO `f_souscategories` (`id`, `id_categorie`, `nom`) VALUES
(1, 1, 'HTML'),
(2, 1, 'CSS'),
(3, 1, 'PYHTON'),
(4, 1, 'JAVA'),
(5, 2, 'WEBCAME'),
(6, 2, 'Clavier\r\n'),
(7, 2, 'Souris'),
(8, 2, 'Micro/Casque'),
(9, 1, 'C++'),
(10, 1, 'PHP'),
(11, 1, 'JavaScript'),
(12, 3, 'Cours'),
(13, 3, 'Td || TP || Exams'),
(14, 3, 'Perspectives');

-- --------------------------------------------------------

--
-- Structure de la table `f_suivis`
--

CREATE TABLE `f_suivis` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `f_topics`
--

CREATE TABLE `f_topics` (
  `id` int(11) NOT NULL,
  `id_createur` int(11) NOT NULL,
  `sujet` text NOT NULL,
  `contenu` text NOT NULL,
  `date_heure_creation` datetime NOT NULL,
  `image` varchar(60) NOT NULL,
  `resolu` tinyint(1) NOT NULL,
  `notif_createur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_topics`
--

INSERT INTO `f_topics` (`id`, `id_createur`, `sujet`, `contenu`, `date_heure_creation`, `image`, `resolu`, `notif_createur`) VALUES
(1, 0, 'test', 'lkjh', '2019-01-27 04:32:18', '', 0, 0),
(2, 0, 'test2', 'hjklmÃ¹\r\n', '2019-01-27 05:04:49', '', 0, 0),
(3, 0, 'test3', 'plz work', '2019-01-27 05:41:45', '', 0, 0),
(4, 0, 'Demande info', 'Salut tout le monde j\'ai un problÃ¨me en java', '2019-01-27 06:29:21', '3.jpg', 0, 0),
(5, 0, 'Urgent', 'mon clavier ne marche pas', '2019-01-27 06:44:20', '', 0, 0),
(6, 0, 'test1', 'teeesstt', '2019-01-27 06:50:01', '', 0, 0),
(7, 0, 'Socket TCP', 'Le protocole TCP offre un service en mode connectÃ© et fiable.\r\nâ€¢Les donnÃ©es sont dÃ©livrÃ©es dans lâ€™ordre de leur Ã©mission.\r\nâ€¢La procÃ©dure dâ€™Ã©tablissement de connexion est dissymÃ©trique.\r\nâ€¢Un processus, appelÃ© serveur, attends des demandes de connexion quâ€™un processus, appelÃ© client, lui envoie.\r\nâ€¢Une fois lâ€™Ã©tape dâ€™Ã©tablissement de connexion effectuÃ©e le fonctionnement redeviens symÃ©trique', '2019-01-30 18:17:19', '', 0, 0),
(8, 0, 'Socket TCP', 'â€¢Le protocole TCP offre un service en mode connectÃ© et fiable.\r\nâ€¢Les donnÃ©es sont dÃ©livrÃ©es dans lâ€™ordre de leur Ã©mission.\r\nâ€¢La procÃ©dure dâ€™Ã©tablissement de connexion est dissymÃ©trique.\r\nâ€¢Un processus, appelÃ© serveur, attends des demandes de connexion quâ€™un processus, appelÃ© client, lui envoie.\r\nâ€¢Une fois lâ€™Ã©tape dâ€™Ã©tablissement de connexion effectuÃ©e le fonctionnement redeviens symÃ©trique.', '2019-01-30 18:20:16', '', 0, 0),
(9, 0, 'test4', 'venue-info-bg.jpg', '2019-01-30 18:44:05', '', 0, 0),
(10, 0, 'test2', 'C++++szde', '2019-01-30 19:42:40', 'abc.jpg', 0, 0),
(11, 0, 'cour1', 'test', '2019-02-08 15:31:40', '3.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `f_topics_categories`
--

CREATE TABLE `f_topics_categories` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_topics_categories`
--

INSERT INTO `f_topics_categories` (`id`, `id_topic`, `id_categorie`, `id_souscategorie`) VALUES
(2, 3, 1, 11),
(3, 4, 1, 4),
(4, 5, 2, 6),
(5, 6, 1, 10),
(6, 8, 3, 12),
(7, 9, 1, 9),
(8, 10, 1, 9),
(9, 11, 3, 12);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `DateDeNaissance` datetime NOT NULL,
  `Ville` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mail`, `motdepasse`, `DateDeNaissance`, `Ville`) VALUES
(1, 'WISSAL', 'wissal@gmail.com', 'a', '1999-05-29 00:00:00', 'CASABLANCA'),
(2, 'a', 'a@gmail.com', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pwd` varchar(9) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`, `pwd`, `prenom`, `departement`) VALUES
(1, 'Ouzzif', 'A1', '\r\n', 'GI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `etudient`
--
ALTER TABLE `etudient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `f_categories`
--
ALTER TABLE `f_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_messages`
--
ALTER TABLE `f_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_souscategories`
--
ALTER TABLE `f_souscategories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_suivis`
--
ALTER TABLE `f_suivis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_topics`
--
ALTER TABLE `f_topics`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_topics_categories`
--
ALTER TABLE `f_topics_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `etudient`
--
ALTER TABLE `etudient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `f_categories`
--
ALTER TABLE `f_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `f_messages`
--
ALTER TABLE `f_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `f_souscategories`
--
ALTER TABLE `f_souscategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `f_suivis`
--
ALTER TABLE `f_suivis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `f_topics`
--
ALTER TABLE `f_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `f_topics_categories`
--
ALTER TABLE `f_topics_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
