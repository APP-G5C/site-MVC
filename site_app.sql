-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 jan. 2020 à 10:07
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_app`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `AddGeometryColumn`$$
CREATE DEFINER=``@`%` PROCEDURE `AddGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64), `t_srid` INT)  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DROP PROCEDURE IF EXISTS `DropGeometryColumn`$$
CREATE DEFINER=``@`%` PROCEDURE `DropGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64))  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

DROP TABLE IF EXISTS `capteurs`;
CREATE TABLE IF NOT EXISTS `capteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_carte` int(11) NOT NULL,
  `type` text NOT NULL,
  `unité de mesure` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_carte` (`id_carte`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteurs`
--

INSERT INTO `capteurs` (`id`, `id_carte`, `type`, `unité de mesure`) VALUES
(1, 1, 'Fréquence cardiaque', 'BpM'),
(2, 1, 'Témperature de la peau', 'Celsius'),
(3, 1, 'Perception auditive', 'dB'),
(4, 1, 'Reconnaissance de tonalité', 'pourcentage'),
(5, 1, 'Reproduction de motifs sonores', 'pourcentage'),
(6, 2, 'Témperature de la peau', 'Celsius'),
(7, 3, 'Reconnaissance de tonalité', 'pourcentage'),
(8, 3, 'Reproduction de motifs sonores', 'pourcentage');

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `ID_carte` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_carte`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`ID_carte`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `id_connexion` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id_connexion`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id_connexion`, `id_utilisateur`, `date`, `heure`) VALUES
(5, 12, '2019-12-20', '15:49:21'),
(6, 12, '2019-12-20', '15:50:50'),
(7, 16, '2019-12-20', '15:51:12'),
(8, 12, '2019-12-20', '16:03:37'),
(9, 23, '2019-12-20', '16:11:29'),
(10, 16, '2019-12-20', '16:13:29'),
(11, 16, '2019-12-20', '16:19:52'),
(12, 12, '2020-01-07', '11:27:10'),
(13, 16, '2020-01-07', '11:28:00'),
(14, 16, '2020-01-07', '11:29:05'),
(15, 20, '2020-01-07', '11:34:56'),
(16, 16, '2020-01-09', '11:40:11'),
(17, 12, '2020-01-09', '11:46:46'),
(18, 12, '2020-01-09', '11:48:29'),
(19, 12, '2020-01-09', '11:48:49'),
(20, 12, '2020-01-09', '12:18:10'),
(21, 23, '2020-01-12', '13:56:19'),
(22, 23, '2020-01-12', '14:38:27'),
(23, 17, '2020-01-22', '15:38:36'),
(24, 23, '2020-01-22', '15:38:55'),
(25, 23, '2020-01-22', '15:47:19'),
(26, 6, '2020-01-22', '15:49:42'),
(27, 6, '2020-01-22', '15:50:00'),
(28, 6, '2020-01-22', '15:50:18'),
(29, 6, '2020-01-22', '15:50:23'),
(30, 6, '2020-01-22', '15:50:47'),
(31, 6, '2020-01-22', '16:03:54'),
(32, 6, '2020-01-22', '16:04:06'),
(33, 6, '2020-01-22', '16:04:19'),
(34, 17, '2020-01-22', '16:17:01'),
(35, 23, '2020-01-22', '16:28:14'),
(36, 23, '2020-01-22', '16:30:20');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Question` text NOT NULL,
  `Réponse` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`ID`, `Question`, `Réponse`) VALUES
(1, 'Comment faire pour créer un compte ?', 'Pour créer votre compte, un administrateur doit être auprès de vous. Il vous demandera les informations nécessaires à la création de votre compte.\r\n'),
(2, 'Comment nous contacter ?', 'Nous possédons une messagerie interne, cliquez sur le bouton destiné à celle-ci et n\'hésitez pas à nous faire des retours !'),
(3, 'Comment fonctionne les tests ?', 'Nos appareils sont disponibles uniquement pour les ayant-droit, ceux-ci utilisent des capteurs et dispositifs permettant d\'effectuer les tests. Les résultats sont ensuite directement transmis sur ce site web.'),
(4, 'Comment récupérer mes scores ?', 'Pour récuperer vos scores veuillez allez dans l\'onglet \"score\" sur la barre de navigation ou depuis l\'accueil.'),
(5, 'Comment supprimer mon compte ?', 'Il faut demander à un administrateur dans un lieu adéquat.'),
(6, 'Où doit on effectuer les tests ?', 'Dans un institut spécialisé tel qu\'une auto-école, un hopital etc.');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `id_envoyeur` int(11) NOT NULL,
  `id_recepteur` int(11) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id_envoyeur` (`id_envoyeur`),
  KEY `id_recepteur` (`id_recepteur`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id_message`, `message`, `date`, `id_envoyeur`, `id_recepteur`) VALUES
(1, 'ter(z(\'yz', '2019-12-04 00:00:00', 16, 9),
(2, 'ABQSDGSFVQESK/FHGFSKD', '2019-12-16 14:33:07', 24, 16),
(3, 'hghj', '2019-12-17 12:05:03', 2, 16),
(4, 'retregrhdth', '2019-12-17 12:21:14', 16, 12),
(5, 'Salut pote tu penses quoi de ta descendance? ', '2019-12-19 12:23:28', 16, 5),
(7, 'Salut joseph, je suis ta mère!!!', '2019-12-19 12:49:06', 12, 13),
(8, 'Salut joseph, je suis ta mère!!!', '2019-12-19 12:50:01', 12, 13),
(9, 'alors tu me trouves stylé comme méchant?', '2019-12-19 13:20:23', 17, 16),
(10, 'Salut joseph, merci de m\'avoir vengé! Ici tout se passe bien, ton grand-père est vraiment trop cool!', '2019-12-20 13:45:39', 20, 13),
(11, 'yo salut!', '2020-01-07 11:27:26', 12, 16),
(12, 'test', '2020-01-21 17:15:27', 23, 23);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `frequenceCardiaque` int(11) NOT NULL,
  `TemperaturePeau` int(11) NOT NULL,
  `PerceptionAuditiveInf` int(11) NOT NULL,
  `PerceptionAuditiveSup` int(11) NOT NULL,
  `ReconTonalites` int(11) NOT NULL,
  `ReprodMotifsSonore` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`frequenceCardiaque`, `TemperaturePeau`, `PerceptionAuditiveInf`, `PerceptionAuditiveSup`, `ReconTonalites`, `ReprodMotifsSonore`, `date`, `id_utilisateur`, `id`) VALUES
(87, 36, 215, 16045, 67, 59, '2020-01-22', 17, 1),
(63, 40, 685, 16042, 40, 14, '2020-01-22', 17, 2),
(69, 37, 424, 17359, 92, 24, '2020-01-22', 17, 3),
(85, 40, 277, 15647, 50, 48, '2020-01-22', 23, 4),
(75, 36, 430, 18947, 79, 12, '2020-01-22', 17, 5),
(72, 39, 433, 17867, 63, 11, '2020-01-22', 6, 6),
(88, 36, 616, 15689, 59, 17, '2020-01-22', 17, 7),
(82, 36, 454, 18483, 72, 68, '2020-01-22', 17, 8),
(94, 39, 292, 17433, 60, 83, '2020-01-22', 17, 9),
(90, 37, 220, 15001, 59, 36, '2020-01-22', 2, 10),
(99, 33, 221, 15004, 60, 50, '2020-01-22', 2, 11),
(94, 30, 190, 15004, 65, 50, '2020-01-22', 24, 12),
(100, 32, 190, 17523, 70, 65, '2020-01-22', 24, 13),
(85, 36, 199, 15654, 65, 67, '2020-01-22', 7, 14),
(85, 36, 199, 15654, 65, 67, '2020-01-22', 17, 15),
(63, 40, 685, 16042, 40, 14, '2020-01-22', 5, 16),
(87, 36, 215, 16045, 67, 59, '2020-01-22', 23, 17),
(75, 36, 430, 18947, 79, 12, '2020-01-22', 10, 18),
(72, 39, 433, 17867, 63, 11, '2020-01-22', 16, 19),
(99, 33, 221, 15004, 60, 50, '2020-01-22', 9, 20),
(72, 39, 433, 17867, 63, 11, '2020-01-22', 5, 21),
(85, 36, 199, 15654, 65, 67, '2020-01-22', 12, 22),
(87, 36, 215, 16045, 67, 59, '2020-01-22', 13, 23),
(75, 36, 430, 18947, 79, 12, '2020-01-22', 20, 24),
(87, 36, 215, 16045, 67, 59, '2020-01-22', 8, 25);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `statut` int(250) NOT NULL,
  `age` int(11) NOT NULL,
  `vision` text NOT NULL,
  `permis` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `password`, `photo`, `statut`, `age`, `vision`, `permis`) VALUES
(2, 'ROLLAND', 'Nathan', 'nathan.rolland@gmail.com', 'josuke18!', '', 0, 20, '12-9', 'non'),
(5, 'joestar', 'jonathan', 'jonathan.joestar@gmail.com', 'deadlikeashit', '', 0, 19, '9-9', 'oui'),
(6, 'RORONOA', 'Zoro', 'zoro.roronoa@gmail.com', 'jevaisbattreMihawk', '', 0, 25, '9-10', 'non'),
(7, 'nico', 'robin', 'robin.nico@gmail.com', 'jeveuxvivre', '', 0, 23, '2-3', 'non'),
(8, 'polnareff', 'jean-pierre', 'jp.polnareff@gmail.com', 'coupedecheveustylé', '', 0, 18, '10-9', 'oui'),
(9, 'GOLD D', 'Roger', 'goldroger@gmail.com', 'roidespiretes', '', 0, 59, '11-11', 'non'),
(10, 'macron', 'emmanuel', 'emmanuel.macron@gmail.com', 'jesuisunebonpresident', '', 0, 50, '10-9', 'oui'),
(12, 'joestar', 'elisabeth', 'elisabeth.joestar@gmail.com', 'lisalisapower', 'lisa_lisa_9313.jpg', 0, 21, '14-5', 'oui'),
(13, 'joestar', 'joseph', 'joseph.joestar@gmail.com', 'lisalisaestmamere', 'joseph-joestar-jully-nike.jpg', 0, 45, '10-10', 'non'),
(16, 'd\'EPREMESNIL', 'Augustin', 'augustin.depremesnil@gmail.com', 'jotaro19!', 'maxresdefault.jpg', 1, 26, '6-6', 'oui'),
(17, 'Brando', 'Dio', 'dio.brando@gmail.com', 'jesuisunmechantvampire', 'DioP2.png', 0, 24, '10-10', 'non'),
(20, 'Zeppeli', 'Caesar', 'caesar.zeppeli@gmail.com', 'jesuismortenheros', 'e3436924a5bcc49f641cb9da24f10918.png', 0, 235, '8-8', 'oui'),
(23, 'LE FLOCH', 'Stan', 'stanlefloch@gmail.com', 'Joseph20!', 'Joseph_Infobox-0.jpg', 1, 20, '4.5-3.75', 'non'),
(24, 'Abdul', 'Mohamed', 'mohamed.abdul@gmail.com', 'Jesuismort', 'mohammed-avdol-jojos-bizarre-adventure-stardust-crusaders-49.3.jpg', 0, 21, '10-10', 'non');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`id_carte`) REFERENCES `carte` (`ID_carte`);

--
-- Contraintes pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`id_envoyeur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `messagerie_ibfk_2` FOREIGN KEY (`id_recepteur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
