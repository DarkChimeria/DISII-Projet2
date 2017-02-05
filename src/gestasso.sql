-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 05 Février 2017 à 21:37
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestasso`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(25) NOT NULL,
  `group_description` varchar(200) NOT NULL,
  `group_activity` varchar(25) NOT NULL,
  `group_avatar` varchar(200) NOT NULL,
  `group_cover` varchar(200) NOT NULL,
  `group_dateCreation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_description`, `group_activity`, `group_avatar`, `group_cover`, `group_dateCreation`) VALUES
(1, 'KickAss', 'Cette équipe est là pour la gagne !', 'FPS', 'bf1.jpg', 'bf1.png', '2017-01-01'),
(2, 'Noobs', 'Une équipe de bras cassés', 'MOBA', 'poro.png', 'lol.png', '2016-07-30'),
(3, 'Les Pleureuses', 'La simulation est la clé !', 'SPORT', 'fifa.jpg', 'fifa.jpg', '2017-02-05');

-- --------------------------------------------------------

--
-- Structure de la table `licenses`
--

CREATE TABLE `licenses` (
  `license_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `license_date` date NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `licenses`
--

INSERT INTO `licenses` (`license_id`, `price`, `license_date`, `paid`, `user_id`) VALUES
(1, 30, '2017-02-05', 1, 1),
(2, 30, '2017-02-06', 1, 2),
(3, 30, '2017-02-05', 1, 4),
(4, 30, '2017-02-07', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `listusersgroup`
--

CREATE TABLE `listusersgroup` (
  `list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `datestart` date NOT NULL,
  `datefinish` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `listusersgroup`
--

INSERT INTO `listusersgroup` (`list_id`, `user_id`, `group_id`, `datestart`, `datefinish`) VALUES
(1, 1, 1, '2017-02-05', NULL),
(2, 2, 3, '2017-02-05', NULL),
(3, 3, 2, '2017-02-05', NULL),
(4, 4, 2, '2017-02-05', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `asso_id` int(11) NOT NULL,
  `asso_name` varchar(25) NOT NULL,
  `asso_description` varchar(200) NOT NULL,
  `asso_mail` varchar(25) NOT NULL,
  `asso_image` varchar(200) NOT NULL,
  `asso_adress` varchar(50) NOT NULL,
  `asso_mobile` varchar(14) NOT NULL,
  `asso_domainName` varchar(25) NOT NULL,
  `asso_dateCreation` date NOT NULL,
  `rnaId` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`asso_id`, `asso_name`, `asso_description`, `asso_mail`, `asso_image`, `asso_adress`, `asso_mobile`, `asso_domainName`, `asso_dateCreation`, `rnaId`) VALUES
(1, 'Asso Fictive', 'Objet : réunir des membres, développer et créer des équipes, participer à des évènements e-sportif offline et online ; l’association poursuit un but non lucratif', 'association@fictive.fr', 'logo-mini.png', '11 Rue Des Cerisiers 36100 ISSOUDUN', '0600000000', 'http://localhost/p2/src/', '2017-01-01', 'W364000962');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_firstname` varchar(25) NOT NULL,
  `user_birth` date NOT NULL,
  `user_adress` varchar(25) NOT NULL,
  `user_cp` varchar(5) NOT NULL,
  `user_city` varchar(25) NOT NULL,
  `user_phone` varchar(14) NOT NULL,
  `user_mobile` varchar(14) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `user_gender` enum('M','F') NOT NULL,
  `user_profilPicture` varchar(200) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  `user_dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_birth`, `user_adress`, `user_cp`, `user_city`, `user_phone`, `user_mobile`, `user_mail`, `user_gender`, `user_profilPicture`, `user_password`, `usertype_id`, `user_dateCreation`) VALUES
(1, 'SLIMANI', 'Anthony', '1990-03-28', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'anthonyslimani@orange.fr', 'M', 'avatar-male.png', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2017-01-01 12:00:00'),
(2, 'DUBOIS', 'Théophile', '1990-03-28', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'user1@email.fr', 'M', 'avatar-male.png', '1234', 1, '2017-02-05 12:00:00'),
(3, 'BERIOT', 'Corentin', '1970-01-01', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'user2@email.fr', 'M', 'avatar-male.png', '1234', 3, '2017-02-01 12:00:00'),
(4, 'DUBESLI', 'Anthéco', '1970-01-01', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'user3@email.fr', 'F', 'avatar-woman.png', '1234', 2, '2017-02-03 12:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

CREATE TABLE `usertype` (
  `usertype_id` int(11) NOT NULL,
  `usertype_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `usertype`
--

INSERT INTO `usertype` (`usertype_id`, `usertype_name`) VALUES
(1, 'Administrateur'),
(2, 'Membre du bureau'),
(3, 'Licencié');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Index pour la table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`license_id`),
  ADD KEY `FK_LICENSES_user_id` (`user_id`);

--
-- Index pour la table `listusersgroup`
--
ALTER TABLE `listusersgroup`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `FK_own_user_id` (`user_id`),
  ADD KEY `FK_own_group_id` (`group_id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`asso_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_USERS_usertype_id` (`usertype_id`);

--
-- Index pour la table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`usertype_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `licenses`
--
ALTER TABLE `licenses`
  MODIFY `license_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `listusersgroup`
--
ALTER TABLE `listusersgroup`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `asso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `licenses`
--
ALTER TABLE `licenses`
  ADD CONSTRAINT `FK_LICENSES_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `listusersgroup`
--
ALTER TABLE `listusersgroup`
  ADD CONSTRAINT `FK_own_group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`),
  ADD CONSTRAINT `FK_own_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_USERS_usertype_id` FOREIGN KEY (`usertype_id`) REFERENCES `usertype` (`usertype_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
