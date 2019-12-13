-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 déc. 2019 à 10:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site app`
--

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
(1, 'Comment faire pour créer un compte ?', 'Pour créer votre compte, veuillez suivre les instructions de la FAQ pour la question \"Comment faire pour créer un compte ?\". Si vous n\'arrivez toujours pas a créer votre compte, tant pis'),
(2, 'Comment vous contacter ?', 'pour nous contacter vous pouvez utilisez la boite mail intégrer au site, pour cela appuyez simplement sur le bouton correspondant.'),
(3, 'Comment fonctionne les tests ?', 'Nos appareils sont disponibles uniquement pour les ayant-droit, ceux-ci utilisent des capteurs et dispositifs permettant d\'effectuer les tests. Les résultats sont ensuite directement transmis sur ce site web'),
(4, 'Comment récupérer mes scores ?', 'Pour récuperer vos scores veuillez allez dans l\'onglet \"score\" de votre profil qui se trouve quelque part sur le site'),
(5, 'Comment supprimer mon compte ?', 'Vous ne pouvez pas.'),
(6, 'Où doit on effectuer les tests ?', 'Dans un institut spécialisé tel qu\'une auto-école, un hopital etc.');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `password`, `photo`, `statut`) VALUES
(23, 'LE FLOCH', 'Stan', 'stanlefloch@gmail.com', 'Joseph20!', 'Joseph_Infobox-0.jpg', 1),
(2, 'ROLLAND', 'Nathan', 'nathan.rolland@gmail.com', 'josuke18!', '', 0),
(16, 'd\'EPREMESNIL', 'Augustin', 'augustin.depremesnil@gmail.com', 'jotaro19!', 'maxresdefault.jpg', 1),
(13, 'joestar', 'joseph', 'joseph.joestar@gmail.com', 'lisalisaestmamere', 'joseph-joestar-jully-nike.jpg', 0),
(5, 'joestar', 'jonathan', 'jonathan.joestar@gmail.com', 'deadlikeashit', '', 0),
(6, 'RORONOA', 'Zoro', 'zoro.roronoa@gmail.com', 'jevaisbattreMihawk', '', 0),
(7, 'nico', 'robin', 'robin.nico@gmail.com', 'jeveuxvivre', '', 0),
(8, 'polnareff', 'jean-pierre', 'jp.polnareff@gmail.com', 'coupedecheveustylé', '', 0),
(9, 'GOLD D', 'Roger', 'goldroger@gmail.com', 'roidespiretes', '', 0),
(10, 'macron', 'emmanuel', 'emmanuel.macron@gmail.com', 'jesuisunebonpresident', '', 0),
(12, 'joestar', 'elisabeth', 'elisabeth.joestar@gmail.com', 'lisalisapower', 'lisa_lisa_9313.jpg', 0),
(17, 'Brando', 'Dio', 'dio.brando@gmail.com', 'jesuisunmechantvampire', 'DioP2.png', 0),
(20, 'Zeppeli', 'Caesar', 'caesar.zeppeli@gmail.com', 'jesuismortenheros', 'e3436924a5bcc49f641cb9da24f10918.png', 0),
(24, 'Abdul', 'Mohamed', 'mohamed.abdul@gmail.com', 'Jesuismort', 'mohammed-avdol-jojos-bizarre-adventure-stardust-crusaders-49.3.jpg', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`id_carte`) REFERENCES `carte` (`ID_carte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
