-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 07 Novembre 2017 à 09:04
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bddiea`
--

-- --------------------------------------------------------

--
-- Structure de la table `afa`
--

CREATE TABLE `afa` (
  `IDAFA` int(11) NOT NULL,
  `IDPERSONNEMORALE` int(11) DEFAULT NULL,
  `STATUTCOMPTE` tinyint(1) DEFAULT NULL,
  `DATECREATION` date DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `apl`
--

CREATE TABLE `apl` (
  `IDAPL` int(11) NOT NULL,
  `IDPERSONNEMORALE` int(11) DEFAULT NULL,
  `LATITUDE` varchar(250) DEFAULT NULL,
  `LONGITUDE` varchar(250) DEFAULT NULL,
  `STATUTCOMPTE` tinyint(1) DEFAULT NULL,
  `DATECRETION` date DEFAULT NULL,
  `CONTRATURL` varchar(250) DEFAULT NULL,
  `ETATCONTRAT` tinyint(1) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `apl`
--

INSERT INTO `apl` (`IDAPL`, `IDPERSONNEMORALE`, `LATITUDE`, `LONGITUDE`, `STATUTCOMPTE`, `DATECRETION`, `CONTRATURL`, `ETATCONTRAT`, `UPDATED_AT`, `CREATED_AT`) VALUES
(1, 1, '', '', 0, '2017-11-01', '', 0, '2017-11-01 18:58:47', '2017-11-01 18:58:47'),
(2, 2, '', '', 0, '2017-11-01', '', 0, '2017-11-01 18:59:55', '2017-11-01 18:59:55'),
(3, 3, '', '', 0, '2017-11-01', '', 0, '2017-11-01 19:00:42', '2017-11-01 19:00:42'),
(4, 4, '', '', 0, '2017-11-02', '', 0, '2017-11-02 07:50:46', '2017-11-02 07:50:46'),
(5, 5, '', '', 0, '2017-11-02', '', 0, '2017-11-02 07:51:47', '2017-11-02 07:51:47'),
(6, 6, '', '', 0, '2017-11-02', '', 0, '2017-11-02 07:58:35', '2017-11-02 07:58:35'),
(7, 7, '', '', 0, '2017-11-02', '', 0, '2017-11-02 08:11:42', '2017-11-02 08:11:42'),
(8, 8, '', '', 0, '2017-11-02', '', 0, '2017-11-02 08:37:09', '2017-11-02 08:37:09'),
(9, 9, '', '', 0, '2017-11-02', '', 0, '2017-11-02 08:40:17', '2017-11-02 08:40:17'),
(10, 10, '', '', 0, '2017-11-02', '', 0, '2017-11-02 08:50:14', '2017-11-02 08:50:14'),
(11, 11, '', '', 0, '2017-11-02', '', 0, '2017-11-02 08:56:23', '2017-11-02 08:56:23'),
(12, 12, '', '', 0, '2017-11-02', '', 0, '2017-11-02 10:19:54', '2017-11-02 10:19:54'),
(13, 13, '', '', 0, '2017-11-02', '', 0, '2017-11-02 12:20:57', '2017-11-02 12:20:57'),
(14, 14, '', '', 0, '2017-11-02', '', 0, '2017-11-02 12:43:38', '2017-11-02 12:43:38'),
(15, 15, '', '', 0, '2017-11-02', '', 0, '2017-11-02 13:21:16', '2017-11-02 13:21:16'),
(16, 16, '', '', 0, '2017-11-02', '', 0, '2017-11-02 14:00:24', '2017-11-02 14:00:24'),
(17, 17, '', '', 0, '2017-11-02', '', 0, '2017-11-02 14:14:15', '2017-11-02 14:14:15'),
(18, 18, '', '', 0, '2017-11-02', '', 0, '2017-11-02 15:19:01', '2017-11-02 15:19:01'),
(19, 19, '', '', 1, '2017-11-03', '', 0, '2017-11-03 12:17:06', '2017-11-03 12:11:50'),
(20, 20, '', '', 0, '2017-11-03', '', 0, '2017-11-03 12:16:43', '2017-11-03 12:16:43'),
(21, 21, '', '', 1, '2017-11-03', '', 0, '2017-11-03 12:20:52', '2017-11-03 12:20:28'),
(22, 22, '', '', 1, '2017-11-03', '', 0, '2017-11-03 13:42:57', '2017-11-03 13:42:28'),
(23, 23, '', '', 1, '2017-11-03', '', 0, '2017-11-03 13:51:27', '2017-11-03 13:45:36'),
(24, 24, '', '', 1, '2017-11-03', '', 0, '2017-11-03 14:00:58', '2017-11-03 14:00:43'),
(25, 25, '', '', 1, '2017-11-03', '', 0, '2017-11-03 14:06:29', '2017-11-03 14:03:58'),
(26, 26, '', '', 1, '2017-11-03', '', 0, '2017-11-03 14:22:06', '2017-11-03 14:21:53'),
(27, 27, '', '', 1, '2017-11-04', '', 0, '2017-11-04 10:42:03', '2017-11-04 10:25:20'),
(28, 28, '', '', 0, '2017-11-04', '', 0, '2017-11-04 10:50:03', '2017-11-04 10:50:03'),
(29, 29, '', '', 1, '2017-11-04', '', 0, '2017-11-04 11:13:36', '2017-11-04 10:55:09'),
(30, 30, '', '', 0, '2017-11-04', '', 0, '2017-11-04 11:34:07', '2017-11-04 11:34:07'),
(31, 31, '', '', 0, '2017-11-04', '', 0, '2017-11-04 11:52:23', '2017-11-04 11:52:23'),
(32, 32, '', '', 1, '2017-11-04', '', 0, '2017-11-04 11:55:40', '2017-11-04 11:54:48'),
(33, 33, '', '', 1, '2017-11-04', '', 0, '2017-11-04 12:09:13', '2017-11-04 12:08:49'),
(34, 34, '', '', 1, '2017-11-04', '', 0, '2017-11-04 15:11:40', '2017-11-04 15:10:58'),
(35, 35, '', '', 1, '2017-11-04', '', 1, '2017-11-04 16:11:37', '2017-11-04 16:05:40'),
(36, 36, '', '', 1, '2017-11-04', '', 1, '2017-11-04 16:34:53', '2017-11-04 16:34:07'),
(37, 37, '', '', 1, '2017-11-04', '', 1, '2017-11-04 16:51:00', '2017-11-04 16:49:22'),
(38, 38, '', '', 1, '2017-11-04', '', 1, '2017-11-04 17:42:21', '2017-11-04 17:41:48'),
(39, 39, '', '', 0, '2017-11-04', '', 0, '2017-11-04 17:57:17', '2017-11-04 17:57:17'),
(40, 40, '', '', 0, '2017-11-04', '', 0, '2017-11-04 18:06:57', '2017-11-04 18:06:57'),
(41, 41, '', '', 0, '2017-11-04', '', 0, '2017-11-04 18:21:17', '2017-11-04 18:21:17'),
(42, 42, '', '', 0, '2017-11-04', '', 0, '2017-11-04 18:26:57', '2017-11-04 18:26:57'),
(43, 43, '', '', 0, '2017-11-04', '', 0, '2017-11-04 20:40:19', '2017-11-04 20:40:19'),
(44, 44, '', '', 1, '2017-11-04', '', 1, '2017-11-04 21:22:03', '2017-11-04 20:58:04'),
(45, 45, '', '', 0, '2017-11-05', '', 0, '2017-11-05 08:23:09', '2017-11-05 08:23:09'),
(46, 46, '', '', 0, '2017-11-05', '', 0, '2017-11-05 08:27:24', '2017-11-05 08:27:24'),
(47, 47, '', '', 1, '2017-11-05', '', 0, '2017-11-05 08:38:39', '2017-11-05 08:33:34'),
(48, 48, '', '', 0, '2017-11-05', '', 0, '2017-11-05 08:43:25', '2017-11-05 08:43:25'),
(49, 49, '', '', 1, '2017-11-05', '', 1, '2017-11-05 21:19:21', '2017-11-05 18:46:08'),
(50, 50, '', '', 1, '2017-11-06', '', 1, '2017-11-06 07:44:13', '2017-11-06 06:52:45'),
(51, 51, '', '', 1, '2017-11-06', '', 1, '2017-11-06 07:57:26', '2017-11-06 07:56:43'),
(52, 52, '', '', 1, '2017-11-06', '', 1, '2017-11-06 08:35:34', '2017-11-06 08:34:55'),
(53, 53, '', '', 1, '2017-11-07', '', 1, '2017-11-07 08:00:43', '2017-11-07 08:00:11');

-- --------------------------------------------------------

--
-- Structure de la table `etatpossessionproduit`
--

CREATE TABLE `etatpossessionproduit` (
  `IDETATPOSSESSIONPRODUIT` int(11) NOT NULL,
  `LIBELLE` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `IDFACTURE` int(11) NOT NULL,
  `IDTYPEFACTURE` int(11) NOT NULL,
  `REFERENCE` varchar(250) DEFAULT NULL,
  `DATECREATIONFACTURE` date DEFAULT NULL,
  `IDPAYEUR` int(11) DEFAULT NULL,
  `IDPAYE` int(11) DEFAULT NULL,
  `TYPEPAYEUR` varchar(250) DEFAULT NULL,
  `TYPEPAYE` varchar(250) DEFAULT NULL,
  `URLFICHIERFACTURE` varchar(250) DEFAULT NULL,
  `DATEPAIEMENTFACTURE` date DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infocompte`
--

CREATE TABLE `infocompte` (
  `IDINFOCOMPTE` int(11) NOT NULL,
  `LIBELLE` varchar(250) DEFAULT NULL,
  `ETATINSCRIPTION` tinyint(1) DEFAULT NULL,
  `DROITINSCRIPTION` float DEFAULT NULL,
  `CPCPOURCENTAGE` float DEFAULT NULL,
  `CCVMINPOURCENTAGE` float DEFAULT NULL,
  `CCVMAJPOURCENTAGE` float DEFAULT NULL,
  `CCVSEUIL` float DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infocompte`
--

INSERT INTO `infocompte` (`IDINFOCOMPTE`, `LIBELLE`, `ETATINSCRIPTION`, `DROITINSCRIPTION`, `CPCPOURCENTAGE`, `CCVMINPOURCENTAGE`, `CCVMAJPOURCENTAGE`, `CCVSEUIL`, `UPDATED_AT`, `CREATED_AT`) VALUES
(1, 'APL', 1, 45, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscriptionannule`
--

CREATE TABLE `inscriptionannule` (
  `IDINSCRIPTIONANNULE` int(11) NOT NULL,
  `IDPERSONNEMORALE` int(11) DEFAULT NULL,
  `IDPERSONNEPHYSIQUE` int(11) DEFAULT NULL,
  `DATEINSCRIPTION` date DEFAULT NULL,
  `TYPEINSCRIPTION` varchar(250) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `listeoptionproduit`
--

CREATE TABLE `listeoptionproduit` (
  `IDOPTIONPRODUIT` int(11) NOT NULL,
  `IDPRODUIT` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `listutilisateur`
--

CREATE TABLE `listutilisateur` (
  `IDUTILISATEUR` int(11) NOT NULL,
  `IDPERSONNEPHYSIQUE` int(11) NOT NULL,
  `LIBELLE` varchar(250) DEFAULT NULL,
  `DROIT` varchar(250) DEFAULT NULL,
  `DATECREATION` date DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `IDLOCALISATION` int(11) NOT NULL,
  `ADRESSE` varchar(250) DEFAULT NULL,
  `PAYS` varchar(250) DEFAULT NULL,
  `ETAT` varchar(250) DEFAULT NULL,
  `CITE` varchar(250) DEFAULT NULL,
  `CODEPOSTAL` varchar(250) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `localisation`
--

INSERT INTO `localisation` (`IDLOCALISATION`, `ADRESSE`, `PAYS`, `ETAT`, `CITE`, `CODEPOSTAL`, `UPDATED_AT`, `CREATED_AT`) VALUES
(1, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:47:03', '2017-11-01 18:47:03'),
(2, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:47:56', '2017-11-01 18:47:56'),
(3, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:48:16', '2017-11-01 18:48:16'),
(4, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:51:49', '2017-11-01 18:51:49'),
(5, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:52:36', '2017-11-01 18:52:36'),
(6, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:52:53', '2017-11-01 18:52:53'),
(7, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:58:47', '2017-11-01 18:58:47'),
(8, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 18:59:55', '2017-11-01 18:59:55'),
(9, 'test', 'Australie', 'Tana', 'test', 'test', '2017-11-01 19:00:42', '2017-11-01 19:00:42'),
(10, 'test', 'Madagascar', 'test', 'test', '415', '2017-11-02 07:50:44', '2017-11-02 07:50:44'),
(11, 'test', 'Madagascar', 'test', 'test', '415', '2017-11-02 07:51:47', '2017-11-02 07:51:47'),
(12, 'test', 'Madagascar', 'test', 'test', '415', '2017-11-02 07:58:35', '2017-11-02 07:58:35'),
(13, 'test', 'Émirats Arabes Unis', 'test', 'test', '101', '2017-11-02 08:11:42', '2017-11-02 08:11:42'),
(14, 'test', 'Argentine', 'qsdf', 'test', '45123', '2017-11-02 08:36:36', '2017-11-02 08:36:36'),
(15, 'test', 'Argentine', 'qsdf', 'test', '45123', '2017-11-02 08:37:09', '2017-11-02 08:37:09'),
(16, 'test', 'Antigua-et-Barbuda', 'test', 'test', '101', '2017-11-02 08:40:17', '2017-11-02 08:40:17'),
(17, 'test', 'Terres Australes Françaises', 'test', 'test', '45123', '2017-11-02 08:50:14', '2017-11-02 08:50:14'),
(18, 'test', 'Argentine', 'test', 'test', 'test', '2017-11-02 08:56:23', '2017-11-02 08:56:23'),
(19, 'test', 'Afghanistan', 'test', 'azer', '45123', '2017-11-02 10:19:52', '2017-11-02 10:19:52'),
(20, 'test', 'Arménie', 'test', 'test', '45123', '2017-11-02 12:20:55', '2017-11-02 12:20:55'),
(21, 'test', 'Antigua-et-Barbuda', 'test', 'test', '45123', '2017-11-02 12:43:37', '2017-11-02 12:43:37'),
(22, 'test', 'Samoa Américaines', 'test', 'test', '45123', '2017-11-02 13:21:16', '2017-11-02 13:21:16'),
(23, 'Lot II R 94 D Betongolo', 'Samoa Américaines', 'Antananarivo', 'Antananarivo', '456123', '2017-11-02 14:00:23', '2017-11-02 14:00:23'),
(24, 'test', 'Terres Australes Françaises', 'test', 'qsdf', '45123', '2017-11-02 14:14:13', '2017-11-02 14:14:13'),
(25, 'test', 'Australie', 'test', 'test', 'test', '2017-11-02 15:18:59', '2017-11-02 15:18:59'),
(26, 'test', 'Antigua-et-Barbuda', 'test', 'test', '45120', '2017-11-03 12:11:47', '2017-11-03 12:11:47'),
(27, 'Las Vegas', 'Émirats Arabes Unis', 'Antananarivo', 'Tana', '456123', '2017-11-03 12:16:43', '2017-11-03 12:16:43'),
(28, 'Anjanahary Lot II S 70 A', 'Pays-Bas', 'Antananarivo', 'Antananarivo', '45123', '2017-11-03 12:20:28', '2017-11-03 12:20:28'),
(29, 'Anjanahary Lot II S 70 A', 'Jamahiriya Arabe Libyenne', 'Antananarivo', 'Antananarivo', '450', '2017-11-03 13:42:25', '2017-11-03 13:42:25'),
(30, 'test', 'Ukraine', 'test', 'test', '45123', '2017-11-03 13:45:35', '2017-11-03 13:45:35'),
(31, 'test', 'Mauritanie', 'test', 'Tana', '450', '2017-11-03 14:00:43', '2017-11-03 14:00:43'),
(32, 'test', 'Antarctique', 'test', 'test', '45123', '2017-11-03 14:03:58', '2017-11-03 14:03:58'),
(33, 'Anjanahary Lot II S 70 A', 'Afghanistan', 'Tana', 'Tana', '45123', '2017-11-03 14:21:53', '2017-11-03 14:21:53'),
(34, 'Anjanahary Lot II S 70 A', 'Antarctique', 'azer', 'Antananarivo', '45000', '2017-11-04 10:25:17', '2017-11-04 10:25:17'),
(35, 'test', 'Antigua-et-Barbuda', 'aze', 'test', '45123', '2017-11-04 10:50:03', '2017-11-04 10:50:03'),
(36, 'test', 'Japon', 'Antananarivo', 'Tana', '45123', '2017-11-04 10:55:08', '2017-11-04 10:55:08'),
(37, 'TEAT', 'Madagascar', 'Antananarivo', 'Tana', '45123', '2017-11-04 11:34:07', '2017-11-04 11:34:07'),
(38, 'TEAT', 'Terres Australes Françaises', 'test', 'Tana', 'test', '2017-11-04 11:52:22', '2017-11-04 11:52:22'),
(39, 'TEAT', 'Terres Australes Françaises', 'test', 'Tana', 'test', '2017-11-04 11:54:48', '2017-11-04 11:54:48'),
(40, 'test', 'Tonga', 'test', 'test', '45123', '2017-11-04 12:08:49', '2017-11-04 12:08:49'),
(41, 'test', 'Tunisie', 'test', 'test', 'test', '2017-11-04 15:10:56', '2017-11-04 15:10:56'),
(42, 'test', 'Émirats Arabes Unis', 'test', 'test', '7845', '2017-11-04 16:05:40', '2017-11-04 16:05:40'),
(43, 'Anjanahary Lot II S 70 A', 'Italie', 'Antananarivo', 'Tana', '101', '2017-11-04 16:34:06', '2017-11-04 16:34:06'),
(44, 'TEAT', 'Antigua-et-Barbuda', 'Tana', 'Tana', '101', '2017-11-04 16:49:21', '2017-11-04 16:49:21'),
(45, 'OKT', 'Guadeloupe', 'test', 'test', '123', '2017-11-04 17:41:47', '2017-11-04 17:41:47'),
(46, 'test', 'Afghanistan', 'test', 'test', '101', '2017-11-04 17:57:16', '2017-11-04 17:57:16'),
(47, 'test', 'Antigua-et-Barbuda', 'test', 'test', 'test', '2017-11-04 18:06:57', '2017-11-04 18:06:57'),
(48, 'test', 'Samoa Américaines', 'test', 'test', '1025', '2017-11-04 18:21:17', '2017-11-04 18:21:17'),
(49, 'test', 'Grèce', 'test', 'test', 'test', '2017-11-04 18:26:57', '2017-11-04 18:26:57'),
(50, 'test', 'Réunion', 'test', 'test', '450', '2017-11-04 20:40:18', '2017-11-04 20:40:18'),
(51, 'test', 'Mexique', 'test', 'test', '123456', '2017-11-04 20:58:04', '2017-11-04 20:58:04'),
(52, 'test', 'Guinée-Bissau', 'test', 'test', '45123', '2017-11-05 08:23:06', '2017-11-05 08:23:06'),
(53, 'test', 'Arménie', 'test', 'test', '45123', '2017-11-05 08:27:24', '2017-11-05 08:27:24'),
(54, 'test', 'République Tchèque', 'test', 'test', 'test', '2017-11-05 08:33:34', '2017-11-05 08:33:34'),
(55, 'test', 'États-Unis', 'test', 'test', 'test', '2017-11-05 08:43:25', '2017-11-05 08:43:25'),
(56, 'test', 'Îles Heard et Mcdonald', 'test', 'test', 'test', '2017-11-05 18:46:04', '2017-11-05 18:46:04'),
(57, 'tana', 'Kazakhstan', 'Tana', 'Tana', '123456', '2017-11-06 06:52:43', '2017-11-06 06:52:43'),
(58, 'tana', 'Afrique du Sud', 'Tana', 'Tana', '123456', '2017-11-06 07:56:42', '2017-11-06 07:56:42'),
(59, 'tana', 'Afghanistan', 'Tana', 'Tana', '123', '2017-11-06 08:34:54', '2017-11-06 08:34:54'),
(60, 'test', 'Argentine', 'test', 'test', '101', '2017-11-07 08:00:10', '2017-11-07 08:00:10');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `IDMEMBRE` int(11) NOT NULL,
  `IDPERSONNEMORALE` int(11) DEFAULT NULL,
  `IDPERSONNEPHYSIQUE` int(11) DEFAULT NULL,
  `STATUTCOMPTE` tinyint(1) DEFAULT NULL,
  `ETATNEWSLETTER` tinyint(1) DEFAULT NULL,
  `ETATPARTAGEDONNEE` tinyint(1) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `optionproduit`
--

CREATE TABLE `optionproduit` (
  `IDOPTIONPRODUIT` int(11) NOT NULL,
  `LIBELLE` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personnemoral`
--

CREATE TABLE `personnemoral` (
  `IDPERSONNEMORALE` int(11) NOT NULL,
  `IDLOCALISATION` int(11) NOT NULL,
  `NOM` varchar(250) DEFAULT NULL,
  `ETATCOMPTE` tinyint(1) DEFAULT NULL,
  `URLSITEWEB` varchar(250) DEFAULT NULL,
  `LOGO` varchar(250) DEFAULT NULL,
  `PRESENTATION` text,
  `TELEPHONE` varchar(250) DEFAULT NULL,
  `EMAIL` varchar(250) DEFAULT NULL,
  `NUMEROINSCRIPTION` varchar(250) DEFAULT NULL,
  `ETATPAIEMENTCOMPTE` tinyint(1) DEFAULT NULL,
  `OBSERVATION` text,
  `OPERABILITE` float DEFAULT NULL,
  `LANGUAGE` varchar(250) DEFAULT NULL,
  `CRM_PROVIDER_NAME` varchar(250) DEFAULT NULL,
  `CRM_PROVIDER_EMAIL` varchar(250) DEFAULT NULL,
  `COMPTEPAYPAL` varchar(250) DEFAULT NULL,
  `REFBANCAIRE` varchar(250) DEFAULT NULL,
  `LOGIN` varchar(1500) DEFAULT NULL,
  `MOTDEPASSE` varchar(1500) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personnemoral`
--

INSERT INTO `personnemoral` (`IDPERSONNEMORALE`, `IDLOCALISATION`, `NOM`, `ETATCOMPTE`, `URLSITEWEB`, `LOGO`, `PRESENTATION`, `TELEPHONE`, `EMAIL`, `NUMEROINSCRIPTION`, `ETATPAIEMENTCOMPTE`, `OBSERVATION`, `OPERABILITE`, `LANGUAGE`, `CRM_PROVIDER_NAME`, `CRM_PROVIDER_EMAIL`, `COMPTEPAYPAL`, `REFBANCAIRE`, `LOGIN`, `MOTDEPASSE`, `UPDATED_AT`, `CREATED_AT`) VALUES
(1, 7, 'test', 0, '', 'upload/efpVImArirIiSE18ved6d9fpSvjVKZJ0xkeKaVdh.png', 'azerqsdfqsdf', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-01 18:58:47', '2017-11-01 18:58:47'),
(2, 8, 'test', 0, '', 'upload/4AXmbhv3q1oFCSP5xWr9E295gMBrfVpJM55VOePm.png', 'azerqsdfqsdf', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-01 18:59:55', '2017-11-01 18:59:55'),
(3, 9, 'test', 0, '', 'upload/jpkuNTxUklIm7aOsLicxvQI16Dwu8WOf4aulFhoM.png', 'azerqsdfqsdf', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-01 19:00:42', '2017-11-01 19:00:42'),
(4, 10, 'test', 0, '', 'upload/b3uWI3xE6f2NJVdvGvbFJYX4Zyl9TjLpaGFBVR1l.png', 'Agence de immobilier situé à Madagascar, dans la capitale anatananarivo', '4512', 'test@test.com', '', 0, '', 50, 'fr', '', '', '', '45123', '', '', '2017-11-02 07:50:46', '2017-11-02 07:50:46'),
(5, 11, 'test', 0, '', 'upload/TZztbKkCrZpWdHjZVtxh5RI5AjtQuscb5BycnNFP.png', 'Agence de immobilier situé à Madagascar, dans la capitale anatananarivo', '4512', 'test@test.com', '', 0, '', 50, 'fr', '', '', '', '45123', '', '', '2017-11-02 07:51:47', '2017-11-02 07:51:47'),
(6, 12, 'test', 0, '', 'upload/SCtNtcNp7WMjXLj6UMs6eFsQCrUaqwvxNmvaYXbX.png', 'Agence de immobilier situé à Madagascar, dans la capitale anatananarivo', '4512', 'test@test.com', '', 0, '', 50, 'fr', '', '', '', '45123', '', '', '2017-11-02 07:58:35', '2017-11-02 07:58:35'),
(7, 13, 'test', 0, '', 'upload/NygCbvyQc7KJJ5pXh3MzGHYuLNrr9heLzH2TRyTy.png', 'test de présentation', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '453', '', '', '2017-11-02 08:11:42', '2017-11-02 08:11:42'),
(8, 15, 'test', 0, '', 'upload/buCw8NHLGjaqmbt3M34Hh0oMZP12ycQ4B8W8eQqi.png', 'test de présentation', '45412', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '5862', '', '', '2017-11-02 08:37:09', '2017-11-02 08:37:09'),
(9, 16, 'test', 0, '', 'upload/EQy7yefKi1stdpjSkgED3DBGCKvNCQCoj5B6ASCZ.png', 'test de présentation APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123789', '', '', '2017-11-02 08:40:17', '2017-11-02 08:40:17'),
(10, 17, 'test', 0, '', 'upload/W83CMZvccFtpEVPgPS97vNWSFgCTzA2LSIV739U3.png', 'test', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '4513', '', '', '2017-11-02 08:50:14', '2017-11-02 08:50:14'),
(11, 18, 'test', 0, '', 'upload/aGEEwzuU98jHar2KQLYtM7cR5oujvccebcI9Qnym.png', 'azer', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-02 08:56:23', '2017-11-02 08:56:23'),
(12, 19, 'test', 0, '', 'upload/qBEygVmwmkwkPgCcBjxTt04MubminRoyYtVsIXEo.png', 'test apl', 'teat', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-02 10:19:54', '2017-11-02 10:19:54'),
(13, 20, 'APLKim', 0, '', 'upload/L0hESSJECmxpJ0X1s94aHXZukyijfTScksSeZT2R.png', 'testPrésentationAPL', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '4561', '', '', '2017-11-02 12:20:57', '2017-11-02 12:20:57'),
(14, 21, 'test', 0, '', 'upload/ur6cp5C1ch8Di072TcWonrTsOo90LBn0poPmoQ0o.png', 'test présentation', '123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-02 12:43:38', '2017-11-02 12:43:38'),
(15, 22, 'test', 0, '', 'upload/fPWBFRivn2CoDrwZi0HRHgKbw9S0LaaHfJbFO0mF.png', 'test APL', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '456123', '', '', '2017-11-02 13:21:16', '2017-11-02 13:21:16'),
(16, 23, 'OKTOBONE', 0, '', 'upload/BPb3qgRZ5ACbqCQ2Ix59tNXO0XonttHiwU6UsyLc.png', 'test de présentation de l\' APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-02 14:00:24', '2017-11-02 14:00:24'),
(17, 24, 'test', 0, '', 'upload/3Q7Xyb4rLJta1ZlG2kDaHoUDU5FjrK6yboxwr3Fy.png', 'test de présentation APL', '123345', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-02 14:14:14', '2017-11-02 14:14:14'),
(18, 25, 'test', 0, '', 'upload/KALydMjgwW56MZiHhqcNkRWrovxIMTqZqTTn0AgE.png', 'teset qsdf', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '123', '', '', '2017-11-02 15:19:01', '2017-11-02 15:19:01'),
(19, 26, 'test', 0, '', 'upload/T5AWZQLEFCOxMTeaKpa6RBp5WX3sVrYxHCRKfjN6.png', 'test de APL', '4512378', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '123456', '', '', '2017-11-03 12:11:50', '2017-11-03 12:11:50'),
(20, 27, 'OKT', 0, '', 'upload/DnFqfopaWEuPGTgBJTqCtJutYuK5kfEz77JODTZi.png', 'test APL Présentation', '1423456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-03 12:16:43', '2017-11-03 12:16:43'),
(21, 28, 'OKTOBONE', 0, '', 'upload/twHWOaizJVekEcywMjQ93D2L0BUONTgcHCPXeLPJ.png', 'Test de présentation APL', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-03 12:20:28', '2017-11-03 12:20:28'),
(22, 29, 'OKTOBONE', 0, '', 'upload/0LmFt68gf0QRtyy9ktDw9DeyikVUOz6mcLZNSY3i.png', 'Tes de présentation de l\' APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '456123', '', '', '2017-11-03 13:42:28', '2017-11-03 13:42:28'),
(23, 30, 'OKTOBONE', 0, '', 'upload/ZO6IVHdgW4GiOmAMPixaU3HQdmPwwow6hixqBkXT.png', 'Test de APL Présentation', '7845123', 'njakaRafali@gmail.com', '', 0, '', 25, 'fr', '', '', '', '45123', '', '', '2017-11-03 13:45:36', '2017-11-03 13:45:36'),
(24, 31, 'OKTOBONE', 0, '', 'upload/WKKsNNTkKtVvTBWTWTD92d6zJ7j0brVax9vmlSLH.png', 'Test présentation', '784512', 'njakaRafali@gmail.com', '', 0, '', 50, 'fr', '', '', '', '45123', '', '', '2017-11-03 14:00:43', '2017-11-03 14:00:43'),
(25, 32, 'OKTOBONE', 0, '', 'upload/JDcBqRgB7qURT3JiVglLH6vxsjfx4oe2RbUmGNDF.png', 'Présentation APL', '4512', 'njakaRafali@gmail.com', '', 0, '', 50, 'fr', '', '', '', '45123', '', '', '2017-11-03 14:03:58', '2017-11-03 14:03:58'),
(26, 33, 'OKTOBONE', 0, '', 'upload/kZ1VxE8x9ngdyGDM9YZT0CbbOiDxL28YsHTYB6tB.png', 'Test présentation APL', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-03 14:21:53', '2017-11-03 14:21:53'),
(27, 34, 'OKTOBONE', 0, '', 'upload/SI5PLfT1JU4u4UAuXEQ6YsBgMhJ2C0xhGWrrFBhh.png', 'test de présentation APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 10:25:20', '2017-11-04 10:25:20'),
(28, 35, 'OKTOBONE', 0, '', 'upload/74TGhAZDHA1t3qKfv8zhUaPzLdY97FSZMQW0Hq9y.png', 'Test de présentation APL', '7845', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '4566123', '', '', '2017-11-04 10:50:03', '2017-11-04 10:50:03'),
(29, 36, 'OKTOBONE', 0, '', 'upload/QZ9AmAvwhxouoEBJY5SBBbYG4nVCFVEFcJGxW5Aa.png', 'test de présentation ici e', 'Tana', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 10:55:09', '2017-11-04 10:55:09'),
(30, 37, 'OKTOBONE', 0, '', 'upload/dppPv7E4R1hefNzcjxkUTPYZ8FzweTDoUFeMyX0K.png', 'Test de présentation APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 100, 'fr', '', '', '', '45123', '', '', '2017-11-04 11:34:07', '2017-11-04 11:34:07'),
(31, 38, 'OKTOBONE', 0, '', 'upload/K3BHU2OiBdqYx90PWaf91tkzZjVFobzQQ5191Uaw.png', '123456Présentation APL', '45123', 'test', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 11:52:23', '2017-11-04 11:52:23'),
(32, 39, 'OKTOBONE', 0, '', 'upload/1WYgGC22cQXoCwMCGKq6CVCeUr0vdv6CrlIwvRXi.png', '123456Présentation APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 11:54:48', '2017-11-04 11:54:48'),
(33, 40, 'OKTOBONE', 0, '', 'upload/3ddbrKjoQdlEicZ8VBuvYlNTN8aqa8oum1GQARsO.png', 'test de présentation APL', 'test', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 12:08:49', '2017-11-04 12:08:49'),
(34, 41, 'OKTOBONE', 0, '', 'upload/Z4x2uaDzkpOQK2aIo3P4WE6YsxrOLra2z6AlIhGP.png', 'Test de présentation de APL', '7845', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 15:10:58', '2017-11-04 15:10:58'),
(35, 42, 'TATA', 0, '', 'upload/DNsbBoDQYglpnbNctwGhPCFHPl2Z0Qpz7Q99vkMI.png', 'Présentation de l\'APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 16:05:40', '2017-11-04 16:05:40'),
(36, 43, 'OKTOBONE', 0, '', 'upload/5InWleEgetYus7F4EtsbJgA70JBdlgpgFSjCMGv3.png', 'Voici une présentation de l\'APL', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '456123', '', '', '2017-11-04 16:34:07', '2017-11-04 16:34:07'),
(37, 44, 'OKTOBONE', 0, '', 'upload/UhQD6ZAdmfAhnDoBukP8TILStHmaKrWuc7waRF6i.png', 'test présentation', '45123', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 16:49:22', '2017-11-04 16:49:22'),
(38, 45, 'TATA', 0, '', 'upload/85mwH2sEMQjsXlkQqNHnpUDfp8q8dHGvO6mHdffq.png', 'Présentation APL', 'qsdf', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 17:41:48', '2017-11-04 17:41:48'),
(39, 46, 'test', 0, '', 'upload/NZFckGzAG3MgCG8sfBbCtsDeXJtX6tpJKnP0AqqK.png', 'test', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '123', '', '', '2017-11-04 17:57:17', '2017-11-04 17:57:17'),
(40, 47, 'test', 0, '', 'upload/XhfBcAzJDleyEJBYsJeTiwPChpNIx2uxveFyQJlC.jpeg', 'Présentation de l\'APL', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '45123', '', '', '2017-11-04 18:06:57', '2017-11-04 18:06:57'),
(41, 48, 'test', 0, '', 'upload/pwHJLwpgrxD3eJ6WfEkd9d2MqtS51jKUFMel5ako.png', 'test de présentaion de APL', '123456', 'test', '', 0, '', 10, 'fr', '', '', '', '123456', '', '', '2017-11-04 18:21:17', '2017-11-04 18:21:17'),
(42, 49, 'test', 0, '', 'upload/DyZNXFDLNoN0z7DNNAXZwUW7rp2avtapxRkekrrd.png', 'test de présentation', '123456', 'test@test.com', '', 0, '', 10, 'fr', '', '', '', '4123456', '', '', '2017-11-04 18:26:57', '2017-11-04 18:26:57'),
(43, 50, 'test', 0, '', 'upload/IAb1rIhKkTzyJUYOMnbWaVorlE7cRPy72ed57fzn.png', 'APL Présentation', '123456', 'njakaRafali@gmail.com', '', 0, '', 50, 'fr', '', '', '', '456123', '', '', '2017-11-04 20:40:19', '2017-11-04 20:40:19'),
(44, 51, 'test', 0, '', 'upload/ODjYgzwqJHfkwIryHtoe3kUCmuN6DNoDbvAjjLQp.png', 'test', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '123', '', '', '2017-11-04 20:58:04', '2017-11-04 20:58:04'),
(45, 52, 'OKTOBONE', 0, '', 'upload/4DyoBJp3ITqP17HwpC1K7xqFD5ChrpS70bIHKQR4.png', 'Présentation de APL', '456123', 'njakaRafali@gmail.com', '', 0, '', 25, 'fr', '', '', '', '123456', '', '', '2017-11-05 08:23:08', '2017-11-05 08:23:08'),
(46, 53, 'test', 0, '', 'upload/FKXyj6hTA5uWAING3bFPt8CpXKNn6v8mqcM8gGRc.png', 'test de présentation APL', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '123456', '', '', '2017-11-05 08:27:24', '2017-11-05 08:27:24'),
(47, 54, 'OKTOBONE', 0, '', 'upload/2MY7w527tjNqNXMvbCFLR32aHlAwkCZOvErin3mU.png', 'présentation APL', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '123456', '', '', '2017-11-05 08:33:34', '2017-11-05 08:33:34'),
(48, 55, 'test', 0, '', 'upload/34gh7RWewxbLEsk4x6NIocfx1u4AUtJDTYfu86D1.png', 'présentation APL', 'test', 'test@test.com', '', 0, '', 10, 'fr', '', '', '', '123456', '', '', '2017-11-05 08:43:25', '2017-11-05 08:43:25'),
(49, 56, 'test', 0, '', 'upload/ZVCA13D326sYkkvdWXXWSArQCz8Oeqe2Ghjo6Q5d.png', 'Présentation de APL', '123456', 'njakaRafali@gmail.com', '', 1, '', 10, 'fr', '', '', '', '123456', '', '', '2017-11-05 22:43:31', '2017-11-05 18:46:08'),
(50, 57, 'OKTOBONE', 0, '', 'upload/9HxD8pz3efobT7t1QCOkFC1r7zL6d8Bjh3CJ8GKR.png', 'Présentation du APL', '123456', 'njakaRafali@gmail.com', '', 1, '', 10, 'fr', '', '', '', '123456', 'APLt4p7a4', 'c3i2k7', '2017-11-06 07:47:08', '2017-11-06 06:52:45'),
(51, 58, 'OKTOBONE', 0, '', 'upload/zsez1CFr09MlQQvEu6w3OY8oBG36h0ivFRVxl8Ge.png', 'Présentation de APL', '123456', 'njakaRafali@gmail.com', '', 1, '', 50, 'fr', '', '', '', '123456', 'APLb9s4g0', 't1i7t4', '2017-11-06 07:58:19', '2017-11-06 07:56:43'),
(52, 59, 'Genesix', 0, '', 'upload/b3ArNozDTvUjaoo8rdvoe9B4wvVSL55QYcRqylE4.png', 'Présentation APL', '123456', 'njakaRafali@gmail.com', '', 1, '', 10, 'fr', '', '', '', '4562', 'APLh6k7p7', 'y9e7d3', '2017-11-06 08:37:41', '2017-11-06 08:34:55'),
(53, 60, 'test', 0, '', 'upload/iMyCrjS162551BK4w7WtEaNjaGQYjAT6Jiaa0oaf.png', 'test de présentation APL', '123456', 'njakaRafali@gmail.com', '', 0, '', 10, 'fr', '', '', '', '123456', '', '', '2017-11-07 08:00:11', '2017-11-07 08:00:11');

-- --------------------------------------------------------

--
-- Structure de la table `personnephysique`
--

CREATE TABLE `personnephysique` (
  `IDPERSONNEPHYSIQUE` int(11) NOT NULL,
  `IDLOCALISATION` int(11) NOT NULL,
  `NOM` varchar(250) DEFAULT NULL,
  `PRENOM` varchar(250) DEFAULT NULL,
  `AVATAR` varchar(250) NOT NULL,
  `LOGIN` varchar(1500) DEFAULT NULL,
  `MOTDEPASSE` varchar(1500) DEFAULT NULL,
  `GENRE` tinyint(1) DEFAULT NULL,
  `DATENAISSANCE` date DEFAULT NULL,
  `EMAIL` varchar(250) DEFAULT NULL,
  `TELEPHONE` varchar(250) DEFAULT NULL,
  `FAX` varchar(250) DEFAULT NULL,
  `REFBANCAIRE` varchar(250) DEFAULT NULL,
  `COMPTEPAYPAL` varchar(250) DEFAULT NULL,
  `OBSERVATION` text,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `possessionproduit`
--

CREATE TABLE `possessionproduit` (
  `IDPOSSESSIONPRODUIT` int(11) NOT NULL,
  `IDETATPOSSESSIONPRODUIT` int(11) DEFAULT NULL,
  `IDPRODUIT` char(10) DEFAULT NULL,
  `IDVENDEUR` int(11) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `IDPRODUIT` char(10) NOT NULL,
  `IDLOCALISATION` int(11) NOT NULL,
  `IDTYPEPRODUIT` int(11) NOT NULL,
  `NOM` varchar(250) DEFAULT NULL,
  `DESCRIPTION` text,
  `SURFACE` varchar(250) DEFAULT NULL,
  `URLIMAGE` varchar(1000) DEFAULT NULL,
  `PRIX` float DEFAULT NULL,
  `TAUXMISENAVANT` float DEFAULT NULL,
  `ETATPRODUIT` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typefacture`
--

CREATE TABLE `typefacture` (
  `IDTYPEFACTURE` int(11) NOT NULL,
  `LIBELLE` varchar(250) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typeproduit`
--

CREATE TABLE `typeproduit` (
  `IDTYPEPRODUIT` int(11) NOT NULL,
  `LIE` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `IDVENDEUR` int(11) NOT NULL,
  `IDAFA` int(11) DEFAULT NULL,
  `IDPERSONNEMORALE` int(11) DEFAULT NULL,
  `STATUTCOMPTE` tinyint(1) DEFAULT NULL,
  `LIBELLETYPEVENDEUR` varchar(250) DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `IDVENTE` int(11) NOT NULL,
  `IDVENDEUR` int(11) DEFAULT NULL,
  `IDMEMBRE` int(11) DEFAULT NULL,
  `IDPRODUIT` char(10) DEFAULT NULL,
  `DATEDEBUTTRANSACTION` date DEFAULT NULL,
  `DATEFINTRANSACTION` date DEFAULT NULL,
  `VALEURCCV` float DEFAULT NULL,
  `ETATPAIEMENTCCV` tinyint(1) DEFAULT NULL,
  `DATEPAIEMENTCCV` date DEFAULT NULL,
  `VALEURCPC` float DEFAULT NULL,
  `ETATPAIEMENTCPC` tinyint(1) DEFAULT NULL,
  `DATEPAIEMENTCPC` date DEFAULT NULL,
  `ETATTRANSACTION` tinyint(1) DEFAULT NULL,
  `DERNIERETAPETRANSACTION` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `afa`
--
ALTER TABLE `afa`
  ADD PRIMARY KEY (`IDAFA`),
  ADD KEY `FK_ASSOCIATION_2` (`IDPERSONNEMORALE`);

--
-- Index pour la table `apl`
--
ALTER TABLE `apl`
  ADD PRIMARY KEY (`IDAPL`),
  ADD KEY `FK_ASSOCIATION_7` (`IDPERSONNEMORALE`);

--
-- Index pour la table `etatpossessionproduit`
--
ALTER TABLE `etatpossessionproduit`
  ADD PRIMARY KEY (`IDETATPOSSESSIONPRODUIT`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`IDFACTURE`),
  ADD KEY `FK_ASSOCIATION_24` (`IDTYPEFACTURE`);

--
-- Index pour la table `infocompte`
--
ALTER TABLE `infocompte`
  ADD PRIMARY KEY (`IDINFOCOMPTE`);

--
-- Index pour la table `inscriptionannule`
--
ALTER TABLE `inscriptionannule`
  ADD PRIMARY KEY (`IDINSCRIPTIONANNULE`),
  ADD KEY `FK_ASSOCIATION_19` (`IDPERSONNEMORALE`),
  ADD KEY `FK_ASSOCIATION_20` (`IDPERSONNEPHYSIQUE`);

--
-- Index pour la table `listeoptionproduit`
--
ALTER TABLE `listeoptionproduit`
  ADD PRIMARY KEY (`IDOPTIONPRODUIT`,`IDPRODUIT`),
  ADD KEY `FK_LISTEOPTIONPRODUIT2` (`IDPRODUIT`);

--
-- Index pour la table `listutilisateur`
--
ALTER TABLE `listutilisateur`
  ADD PRIMARY KEY (`IDUTILISATEUR`),
  ADD KEY `FK_ASSOCIATION_10` (`IDPERSONNEPHYSIQUE`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`IDLOCALISATION`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`IDMEMBRE`),
  ADD KEY `FK_ASSOCIATION_14` (`IDPERSONNEMORALE`),
  ADD KEY `FK_ASSOCIATION_15` (`IDPERSONNEPHYSIQUE`);

--
-- Index pour la table `optionproduit`
--
ALTER TABLE `optionproduit`
  ADD PRIMARY KEY (`IDOPTIONPRODUIT`);

--
-- Index pour la table `personnemoral`
--
ALTER TABLE `personnemoral`
  ADD PRIMARY KEY (`IDPERSONNEMORALE`),
  ADD KEY `FK_ASSOCIATION_9` (`IDLOCALISATION`);

--
-- Index pour la table `personnephysique`
--
ALTER TABLE `personnephysique`
  ADD PRIMARY KEY (`IDPERSONNEPHYSIQUE`),
  ADD KEY `FK_ASSOCIATION_8` (`IDLOCALISATION`);

--
-- Index pour la table `possessionproduit`
--
ALTER TABLE `possessionproduit`
  ADD PRIMARY KEY (`IDPOSSESSIONPRODUIT`),
  ADD KEY `FK_ASSOCIATION_21` (`IDETATPOSSESSIONPRODUIT`),
  ADD KEY `FK_ASSOCIATION_22` (`IDPRODUIT`),
  ADD KEY `FK_ASSOCIATION_23` (`IDVENDEUR`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`IDPRODUIT`),
  ADD KEY `FK_ASSOCIATION_12` (`IDLOCALISATION`),
  ADD KEY `FK_ASSOCIATION_13` (`IDTYPEPRODUIT`);

--
-- Index pour la table `typefacture`
--
ALTER TABLE `typefacture`
  ADD PRIMARY KEY (`IDTYPEFACTURE`);

--
-- Index pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  ADD PRIMARY KEY (`IDTYPEPRODUIT`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`IDVENDEUR`),
  ADD KEY `FK_ASSOCIATION_5` (`IDAFA`),
  ADD KEY `FK_ASSOCIATION_6` (`IDPERSONNEMORALE`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`IDVENTE`),
  ADD KEY `FK_ASSOCIATION_16` (`IDMEMBRE`),
  ADD KEY `FK_ASSOCIATION_17` (`IDVENDEUR`),
  ADD KEY `FK_ASSOCIATION_18` (`IDPRODUIT`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `afa`
--
ALTER TABLE `afa`
  MODIFY `IDAFA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `apl`
--
ALTER TABLE `apl`
  MODIFY `IDAPL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `etatpossessionproduit`
--
ALTER TABLE `etatpossessionproduit`
  MODIFY `IDETATPOSSESSIONPRODUIT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `IDFACTURE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `infocompte`
--
ALTER TABLE `infocompte`
  MODIFY `IDINFOCOMPTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `inscriptionannule`
--
ALTER TABLE `inscriptionannule`
  MODIFY `IDINSCRIPTIONANNULE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `listutilisateur`
--
ALTER TABLE `listutilisateur`
  MODIFY `IDUTILISATEUR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `localisation`
--
ALTER TABLE `localisation`
  MODIFY `IDLOCALISATION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `IDMEMBRE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `optionproduit`
--
ALTER TABLE `optionproduit`
  MODIFY `IDOPTIONPRODUIT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personnemoral`
--
ALTER TABLE `personnemoral`
  MODIFY `IDPERSONNEMORALE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `personnephysique`
--
ALTER TABLE `personnephysique`
  MODIFY `IDPERSONNEPHYSIQUE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `possessionproduit`
--
ALTER TABLE `possessionproduit`
  MODIFY `IDPOSSESSIONPRODUIT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `typefacture`
--
ALTER TABLE `typefacture`
  MODIFY `IDTYPEFACTURE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  MODIFY `IDTYPEPRODUIT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `IDVENDEUR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `IDVENTE` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
