-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 oct. 2024 à 05:21
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etud` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `sexe` enum('Female','Male','Other') NOT NULL,
  `ville` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tele` int(11) NOT NULL,
  `note_generale` decimal(5,2) NOT NULL,
  `branches` varchar(50) NOT NULL,
  `votre_motivation` text NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etud`, `nom`, `prenom`, `date_de_naissance`, `sexe`, `ville`, `adresse`, `email`, `tele`, `note_generale`, `branches`, `votre_motivation`, `mot_de_passe`) VALUES
(1, 'Haj', 'Hajar', '2001-01-01', 'Female', 'Ken ', 'str 123 ', 'hajar@gmail.com', 9876543, '18.00', 'International Relations', 'nothing', 'haj'),
(7, 'kaabi', 'layla', '1995-12-05', 'Male', 'berlin ', 'str 123 deutschland', 'layla@gmail.com', 9876543, '20.00', 'choose Field of Study', '//////', 'LAYLA'),
(8, 'ibnal', 'laY', '2003-01-03', '', 'MUNCHEN', ' deutschland', 'lay@gmail.com', 987654388, '9.00', 'Civil Engineering', 'no', 'ADMIN'),
(9, 'Alami', 'Boutaina', '2003-09-03', 'Female', 'Rabat', 'Rue Al nahda N°130', 'Alamibouatina@gmail.com', 2147483647, '15.00', 'Biology', 'Nothing to say', 'alami'),
(11, 'hardwin', 'Emiley', '1990-01-01', 'Other', 'New York', 'str 123 flower ', 'emiley@hotmail.fr', 678903456, '14.00', 'Mechanical Engineering', '', 'EMILEY'),
(12, 'Lim', 'Jaebeom', '1996-01-16', '', 'Seoul', 'Buqu str 12 A9', 'jaebeom@gmail.com', 12346789, '17.00', 'Biology', 'NOTHING', 'lim'),
(13, 'Wang', 'Jackson', '1996-03-28', 'Male', 'Chenghei', 'street N°67', 'wang@gmail.com', 678903456, '12.00', 'Business Administration', '', '765');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etud`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
