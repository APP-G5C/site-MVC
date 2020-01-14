-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 14 Janvier 2020 à 12:04
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE `capteurs` (
  `id` int(11) NOT NULL,
  `id_carte` int(11) NOT NULL,
  `type` text NOT NULL,
  `unité de mesure` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `capteurs`
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

CREATE TABLE `carte` (
  `ID_carte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `carte`
--

INSERT INTO `carte` (`ID_carte`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Réponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`ID`, `Question`, `Réponse`) VALUES
(1, 'Comment faire pour créer un compte ?', 'Pour créer votre compte, veuillez suivre les instructions de la FAQ pour la question "Comment faire pour créer un compte ?". Si vous n''arrivez toujours pas a créer votre compte, tant pis'),
(2, 'Comment vous contacter ?', 'pour nous contacter vous pouvez utilisez la boite mail intégrer au site, pour cela appuyez simplement sur le bouton correspondant.'),
(3, 'Comment fonctionne les tests ?', 'Nos appareils sont disponibles uniquement pour les ayant-droit, ceux-ci utilisent des capteurs et dispositifs permettant d''effectuer les tests. Les résultats sont ensuite directement transmis sur ce site web'),
(4, 'Comment récupérer mes scores ?', 'Pour récuperer vos scores veuillez allez dans l''onglet "score" de votre profil qui se trouve quelque part sur le site'),
(5, 'Comment supprimer mon compte ?', 'Vous ne pouvez pas.'),
(6, 'Où doit on effectuer les tests ?', 'Dans un institut spécialisé tel qu''une auto-école, un hopital etc.');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id_message` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `id_envoyeur` int(11) NOT NULL,
  `id_recepteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `statut` int(250) NOT NULL,
  `age` int(11) NOT NULL,
  `vision` text NOT NULL,
  `permis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `password`, `photo`, `statut`, `age`, `vision`, `permis`) VALUES
(2, 'ROLLAND', 'Nathan', 'nathan.rolland@gmail.com', 'josuke18!', '', 0, 20, '10/10', 'oui\r\n'),
(5, 'joestar', 'jonathan', 'jonathan.joestar@gmail.com', 'deadlikeashit', '', 0, 0, '', ''),
(6, 'RORONOA', 'Zoro', 'zoro.roronoa@gmail.com', 'jevaisbattreMihawk', '', 0, 0, '', ''),
(7, 'nico', 'robin', 'robin.nico@gmail.com', 'jeveuxvivre', '', 0, 0, '', ''),
(8, 'polnareff', 'jean-pierre', 'jp.polnareff@gmail.com', 'coupedecheveustylé', '', 0, 0, '', ''),
(9, 'GOLD D', 'Roger', 'goldroger@gmail.com', 'roidespiretes', '', 0, 0, '', ''),
(10, 'macron', 'emmanuel', 'emmanuel.macron@gmail.com', 'jesuisunebonpresident', '', 0, 0, '', ''),
(12, 'joestar', 'elisabeth', 'elisabeth.joestar@gmail.com', 'lisalisapower', 'lisa_lisa_9313.jpg', 0, 0, '', ''),
(13, 'joestar', 'joseph', 'joseph.joestar@gmail.com', 'lisalisaestmamere', 'joseph-joestar-jully-nike.jpg', 0, 0, '', ''),
(16, 'd''Epremesnil', 'Augustin', 'augustin.depremesnil@gmail.com', 'jotaro19!', 'maxresdefault.jpg', 1, 20, '8/7', 'non'),
(17, 'Brando', 'Dio', 'dio.brando@gmail.com', 'jesuisunmechantvampire', 'DioP2.png', 0, 0, '', ''),
(20, 'Zeppeli', 'Caesar', 'caesar.zeppeli@gmail.com', 'jesuismortenheros', 'e3436924a5bcc49f641cb9da24f10918.png', 0, 0, '', ''),
(23, 'Le Floch\n', 'Stan', 'stanlefloch@gmail.com', 'Joseph20!', 'Joseph_Infobox-0.jpg', 1, 20, '3.75/4.5', 'non'),
(24, 'Abdul', 'Mohamed', 'mohamed.abdul@gmail.com', 'Jesuismort', 'mohammed-avdol-jojos-bizarre-adventure-stardust-crusaders-49.3.jpg', 0, 0, '', ''),
(25, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', '', 0, 0, '', ''),
(26, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', 'turtle4.png', 0, 0, '', ''),
(27, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', 'DioP2.png', 0, 0, '', ''),
(28, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', '', 0, 0, '', ''),
(29, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', '', 0, 0, '', ''),
(30, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', '', 0, 0, '', ''),
(31, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', 'mohammed-avdol-jojos-bizarre-adventure-stardust-crusaders-49.3.jpg', 0, 0, '', ''),
(32, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', 'turtle3.png', 0, 0, '', ''),
(33, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', 'turtle3.png', 0, 0, '', ''),
(34, 'Compte', 'Palpatine', 'stanlefloch@gmail.com', 'Joseph20!', 'turtle3.png', 0, 500, '1.0/2.25', 'non'),
(35, 'Compte', 'Palpatine', 'popol@gmail.com', 'Iamthesenat', '', 0, 500, '1.0/2.25', 'non'),
(36, 'Compte', 'Palpatine', 'popol@gmail.com', 'Iamthesenat', 'turtle3.png', 0, 500, '1.0/2.25', 'non');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_carte` (`id_carte`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`ID_carte`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_envoyeur` (`id_envoyeur`),
  ADD KEY `id_recepteur` (`id_recepteur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `capteurs`
--
ALTER TABLE `capteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `ID_carte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`id_carte`) REFERENCES `carte` (`ID_carte`);

--
-- Contraintes pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`id_envoyeur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `messagerie_ibfk_2` FOREIGN KEY (`id_recepteur`) REFERENCES `utilisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
