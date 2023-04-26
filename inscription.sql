-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 avr. 2023 à 15:35
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Tel` (`Tel`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `Nom`, `Prenom`, `Adress`, `Tel`, `Sex`) VALUES
(47, 'dido', 'bachwel', 'mornag', '8524', 'Homme'),
(48, 'chichi', 'zouari', 'tunis', '4569', 'Homme'),
(46, 'chichi', 'zouari', 'tunis', '4563', 'Femme'),
(45, 'chichi', 'zouari', 'tunis', '96', 'Homme'),
(44, 'chichi ', 'zouari', 'tunis', '645', 'Femme'),
(43, 'fifou', 'zouari', 'tunis', '85', 'Femme'),
(42, 'bibo ', 'zouari', 'ben arous ', '456', 'Homme'),
(41, 'zouari', 'Nino', 'Ben Arous', '241', 'Homme'),
(39, 'ayla', 'benyahia', 'en arous', '085', 'Femme'),
(40, 'Benyahia ', 'Mimo', 'en arous', '0 857 ', 'Femme'),
(36, 'israa', 'zouari', 'ben arous', '056', 'Femme'),
(35, 'sam', 'sam', 'France', '48965', 'Homme'),
(30, 'chouchou', 'zouari', 'ben arous', '4587', 'Femme'),
(31, 'zouari', 'yahia', 'Ben Arous', '985', 'Homme'),
(32, 'bachir', 'benyahia', 'sahline', '7856', 'Homme'),
(33, 'Boujdidi', 'Fawzeya', 'Ben Arous', '632', 'Femme'),
(34, 'Zouari', 'Mervet', 'Ben Arous', '963', 'Femme'),
(37, 'jad', 'bachwel', 'Morneg', '05', 'Homme'),
(38, 'Ben yahia', 'oussama', 'Ben Arous', '852', 'Homme'),
(49, 'dido', 'bachwel', 'mornag', '4785', 'Homme'),
(50, 'bibo', 'zouari', 'ben arous', '964', 'Homme'),
(51, 'zouari', 'Nino', 'Ben Arous', '96469', 'Homme'),
(52, 'israa', 'zouari', 'ben arous', '05 69 8', 'Homme'),
(53, 'jad', 'bachwel', 'Morneg', '05 6', 'Homme'),
(54, 'jad', 'bachwel', 'Morneg', '05 9624', 'Homme'),
(55, 'dido', 'bachwel', 'mornag', '6573', 'Homme'),
(56, 'ayla', 'benyahia', 'en arous', '0 857', 'Homme'),
(57, 'Ben yahia', 'oussama', 'Ben Arous', '65832', 'Homme'),
(58, 'bachir', 'benyahia', 'sahline', '9347', 'Homme'),
(59, 'siwar', 'ben yahia', 'Tunis', ' 54', 'Homme'),
(60, 'fifou', 'zouari', 'tunis', '6', 'Homme'),
(61, 'dido', 'bachwel', 'mornag', '777', 'Homme'),
(62, 'dido', 'bachwel', 'mornag', '333', 'Homme'),
(63, 'bibo', 'zouari', 'ben arous', '222', 'Homme'),
(64, 'bibo', 'zouari', 'ben arous', '111', 'Homme'),
(65, 'fifou', 'zouari', 'tunis', '1010', 'Homme'),
(66, 'fifou', 'zouari', 'tunis', '1011', 'Homme'),
(67, 'dido', 'bachwel', 'mornag', '1254', 'Homme'),
(68, 'chichi', 'zouari', 'tunis', '36963', 'Homme'),
(69, 'dido', 'bachwel', 'mornag', '666', 'Homme'),
(70, 'dido', 'bachwel', 'mornag', '1', 'Homme'),
(71, 'chichi', 'zouari', 'tunis', '2', 'Homme'),
(72, 'chichi', 'zouari', 'tunis', '5', 'Homme'),
(73, 'fifou', 'zouari', 'tunis', '9', 'Homme'),
(74, 'dido', 'bachwel', 'mornag', '66', 'Homme'),
(75, 'fifou', 'zouari', 'tunis', '63', 'Homme'),
(76, 'dido', 'bachwel', 'mornag', '55', 'Homme'),
(77, 'dido', 'bachwel', 'mornag', '44', 'Homme'),
(78, 'zouari', 'Nino', 'Ben Arous', '99', 'Homme'),
(79, 'israa', 'zouari', 'ben arous', '696', 'Homme'),
(80, 'dido', 'bachwel', 'mornag', '88', 'Homme'),
(81, 'dido', 'bachwel', 'mornag', '77', 'Homme'),
(82, 'bibo', 'zouari', 'ben arous', '11', 'Homme'),
(83, 'zouari', 'Nino', 'Ben Arous', '45', 'Homme'),
(84, 'bibo', 'zouari', 'ben arous', '33', 'Homme'),
(85, 'israa', 'zouari', 'ben arous', '91', 'Homme'),
(86, 'dido', 'bachwel', 'mornag', '50', 'Homme'),
(87, 'dido', 'bachwel', 'mornag', '661', 'Homme'),
(88, 'chichi', 'zouari', 'tunis', '140', 'Homme'),
(89, 'chichi', 'zouari', 'tunis', '663', 'Homme'),
(90, 'missou', 'Ben yahia ', 'Tunis', '5574', 'Femme'),
(91, 'nani', 'Bachwal', 'Mornag', '4477', 'Femme'),
(92, 'nino', 'bibi', 'Bardo', '447711', 'Homme'),
(93, 'sisi', 'baw', 'Bardo', '1987', 'Femme'),
(94, 'sisi', 'baw', 'Bardo', '19871', 'Homme'),
(97, 'chichi', 'zouari', 'tunis', '2255', 'Homme'),
(96, 'sisi', 'baw', 'Bardo', '1987254', 'Homme'),
(98, 'chichi', 'zouari', 'tunis', '115577', 'Homme'),
(99, 'chichi', 'zouari', 'tunis', '22551', 'Femme'),
(100, 'chichi', 'zouari', 'tunis', '225522', 'Femme');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
