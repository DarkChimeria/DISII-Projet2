-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 20 Février 2017 à 18:55
-- Version du serveur :  5.5.53-0+deb8u1
-- Version de PHP :  5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestasso`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`group_id` int(11) NOT NULL,
  `group_name` varchar(25) NOT NULL,
  `group_description` varchar(200) NOT NULL,
  `group_activity` varchar(25) NOT NULL,
  `group_avatar` varchar(200) DEFAULT NULL,
  `group_cover` varchar(200) DEFAULT NULL,
  `group_dateCreation` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_description`, `group_activity`, `group_avatar`, `group_cover`, `group_dateCreation`) VALUES
(1, 'KickAss', 'Cette équipe est là pour la gagne !', 'FPS', 'upload_files/group_avatar/thumbs/567659bf1.jpg', 'upload_files/group_cover/thumbs/328803fifa.jpg', '2017-01-01'),
(2, 'Noobs', 'Une équipe de bras cassés', 'MOBA', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2016-07-30'),
(3, 'Les Pleureuses', 'La simulation est la clé !', 'SPORT', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-05'),
(4, 'The Treasure Physt', 'Call of duty', 'FPS', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2016-02-25'),
(5, 'The Ravage', 'League of legend', 'MOBA', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-06'),
(6, 'The Bash Virtue', 'FIFA 17', 'SPORT', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2016-04-02'),
(7, 'The Cataclysm', 'Call of duty', 'FPS', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2016-11-30'),
(8, 'Silver Watch', 'Call of duty', 'FPS', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-02'),
(9, 'The Guard', 'League of legend', 'MOBA', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-05'),
(10, 'Untold Pirates', 'FIFA 17', 'SPORT', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-05'),
(11, 'Triad Tribe', 'League of legend', 'MOBA', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2016-06-25'),
(12, 'Hardcore Assassins', 'Call of duty', 'FPS', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-05'),
(13, 'The Chosen', 'simulateur d''avion', 'SIMULATION', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2016-10-21'),
(19, 'dsds', 'dqsdqsdqsd', 'qsdqsd', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-20'),
(21, 'Test Groupe', 'TESTETSTETS', 'FPS', 'upload_files/group_avatar/thumbs/7966928148941-12716285.jpg', 'upload_files/group_cover/thumbs/767519e1fafb5a6694365ec0c7049f5c4826f5.png', '2017-02-20'),
(22, 'Test Groupe', 'TESTETSTETS', 'qsdqsd', 'upload_files/group_avatar/thumbs/57766dagoma-discovery-200-5.jpg', 'upload_files/group_cover/thumbs/18285e1fafb5a6694365ec0c7049f5c4826f5.png', '2017-02-20'),
(23, 'sdqsd', 'sdqsdqsdd', 'qsdqsd', 'upload_files/group_avatar/thumbs/default.png', 'upload_files/group_cover/thumbs/default.png', '2017-02-20');

-- --------------------------------------------------------

--
-- Structure de la table `licenses`
--

CREATE TABLE IF NOT EXISTS `licenses` (
`license_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `license_date` date NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `licenses`
--

INSERT INTO `licenses` (`license_id`, `price`, `license_date`, `paid`, `user_id`) VALUES
(1, 30, '2017-02-05', 1, 1),
(2, 30, '2017-02-06', 1, 2),
(3, 30, '2017-02-05', 1, 4),
(4, 30, '2017-02-07', 0, 3),
(5, 30, '2017-02-05', 1, 5),
(6, 30, '2017-02-05', 0, 6),
(7, 30, '2017-02-10', 1, 40),
(9, 30, '2017-02-05', 1, 147);

-- --------------------------------------------------------

--
-- Structure de la table `listusersgroup`
--

CREATE TABLE IF NOT EXISTS `listusersgroup` (
`list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `datestart` date NOT NULL,
  `datefinish` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `listusersgroup`
--

INSERT INTO `listusersgroup` (`list_id`, `user_id`, `group_id`, `datestart`, `datefinish`) VALUES
(1, 1, 1, '2017-02-01', '2017-02-02'),
(2, 2, 1, '2017-02-04', NULL),
(3, 3, 1, '2017-02-05', NULL),
(4, 4, 5, '2017-02-05', '2017-02-09'),
(5, 5, 2, '2017-02-05', NULL),
(6, 6, 4, '2017-02-05', NULL),
(7, 1, 2, '2017-02-03', '2017-02-04'),
(9, 40, 1, '2017-02-10', NULL),
(10, 147, 1, '2017-02-05', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`asso_id`, `asso_name`, `asso_description`, `asso_mail`, `asso_image`, `asso_adress`, `asso_mobile`, `asso_domainName`, `asso_dateCreation`, `rnaId`) VALUES
(1, 'Asso Fictive', 'Objet : réunir des membres, développer et créer des équipes, participer à des évènements e-sportif offline et online ; l’association poursuit un but non lucratif', 'association@fictive.fr', 'logoV2_40pxY.png', '11 Rue Des Cerisiers 36100 ISSOUDUN', '0600000000', 'http://localhost/p2/src/', '2017-01-01', 'W364000962');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_firstname` varchar(25) NOT NULL,
  `user_pseudo` varchar(25) NOT NULL,
  `user_birth` date NOT NULL,
  `user_adress` varchar(50) NOT NULL,
  `user_cp` varchar(5) NOT NULL,
  `user_city` varchar(25) NOT NULL,
  `user_phone` varchar(14) NOT NULL,
  `user_mobile` varchar(14) NOT NULL,
  `user_mail` varchar(35) NOT NULL,
  `user_gender` enum('M','F') NOT NULL,
  `user_profilPicture` varchar(200) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  `user_dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_pseudo`, `user_birth`, `user_adress`, `user_cp`, `user_city`, `user_phone`, `user_mobile`, `user_mail`, `user_gender`, `user_profilPicture`, `user_password`, `usertype_id`, `user_dateCreation`, `user_active`) VALUES
(1, 'SLIMANI', 'Anthony', 'sa', '1990-03-28', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'anthonyslimani@orange.fr', 'M', 'upload_files/user_avatar/thumbs/5357438148941-12716285.jpg', '5fdd6afb246b36dd0d819bedf0f95008', 1, '2017-01-01 11:00:00', 1),
(2, 'DUBOIS', 'Théophile', 'DT', '1990-03-28', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'theophileda@hotmail.fr', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '2017-02-05 11:00:00', 1),
(3, 'BERIOT', 'Corentin', 'BC', '1970-01-01', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'corentin.beriot@laposte.net', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2017-02-01 11:00:00', 1),
(4, 'DUBESLI', 'Anthéco', 'Anthéco', '1970-01-01', '11 Rue Nationale', '36260', 'REUILLY', '0254212121', '0654212121', 'user3@email.fr', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '2017-02-03 11:00:00', 1),
(5, 'Arnoux', 'Eugène ', 'Ponang', '2003-11-02', '25 rue des peupliers', '36000', 'Châteauroux', '02 54 60 21 85', '07 65 95 86 31', 'onulowif-5391@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '2017-02-06 11:00:00', 1),
(6, 'Lanctot', 'David ', 'Eringa', '1998-05-02', '118 avenue du papa', '36000', 'Châteauroux', '02 54 12 95 65', '07 85 42 15 32', 'bittukogupa-1315@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1998-05-01 22:00:00', 1),
(7, 'Berthelette', 'Cammile', 'Cildolen', '2001-06-22', '8 route de la plage', '36000', 'Châteauroux', '02 54 95 78 43', '07 62 54 85 32', 'alagoffin-9510@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2001-06-21 22:00:00', 1),
(8, 'Fresne', 'Aurore ', 'Volgar', '1992-01-15', '56 boulvard des morilles', '36000', 'Châteauroux', '02 54 84 75 62', '07 12 47 56 35', 'meguramoffa-4743@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '1992-01-14 23:00:00', 1),
(9, 'Lafond', 'Artus ', 'Goghulo', '2000-03-23', '45 rue Louis 14 ', '36000', 'Châteauroux', '02 54 96 58 72', '07 96 81 45 32', 'egoqodum-1988@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '2000-03-22 23:00:00', 1),
(10, 'Chrétien', 'Luc ', 'Bowerkild', '1994-09-08', '21 impasse du rose', '36000', 'Châteauroux', '02 54 61 48 57', '06 58 48 35 70', 'aqyttelu-8846@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '1994-09-07 22:00:00', 1),
(11, 'DuLin', 'Emmanuel ', 'Ethvalia', '1999-05-02', '71 avenue de la poste', '36000', 'Châteauroux', '02 54 75 86 32', '06 45 91 35 48', 'xagumosedde-6638@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '1999-05-01 22:00:00', 1),
(12, 'Franchet', 'Victor ', 'Oozeard', '1994-12-25', '12 chemin du coq', '36000', 'Châteauroux', '02 54 21 30 52', '06 49 51 85 72', 'cappettuffej-8032@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1994-12-24 23:00:00', 1),
(13, 'Pouliotte', 'Jacques ', 'Tuscalto', '2001-07-13', '64 rue du cimetiere', '36000', 'Châteauroux', '02 54 18 53 42', '06 23 54 96 55', 'mirryhaqawe-3358@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2001-07-12 22:00:00', 1),
(14, 'Garreau', 'Sébastien ', 'Yazhnarb', '1982-08-19', '1 rue des popcorns', '36000', 'Châteauroux', '02 54 78 54 85', '07 65 22 88 45', 'wellawuxif-7505@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '1982-08-18 22:00:00', 1),
(15, 'Lejeune', 'Germain ', 'Aeltana', '1996-05-09', '35 rue Jean-Monnet', '36000', 'Châteauroux', '02 54 96 12 85', '06 45 85 74 65', 'duganilib-8827@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1996-05-08 22:00:00', 1),
(16, 'Potvin', 'Auda ', 'Cornolas', '1999-04-30', '73 rue La Boétie', '36000', 'Châteauroux', '02 54 63 25 89', '06 32 54 58 21', 'egeffittec-8179@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '1999-04-29 22:00:00', 1),
(17, 'Dostie', 'Jeoffroi ', 'Faesa', '2000-11-05', '8 Place Charles de Gaulle', '36000', 'Châteauroux', '02 54 86 59 24', '07 58 65 23 54', 'duqicarenne-5546@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '2000-11-04 23:00:00', 1),
(18, 'Beauchemin', 'Thomas ', 'Theninok', '1991-04-06', '10 Chemin Challet', '36000', 'Châteauroux', '02 54 36 45 28', '06 32 59 68 84', 'udotisave-8681@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1991-04-05 22:00:00', 1),
(19, 'Boucher', 'Danielle ', 'Skewnald', '1993-11-02', '5 rue Bonneterie', '36000', 'Châteauroux', '02 54 69 85 62', '06 48 75 12 95', 'niffannejom-5139@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '1993-11-01 23:00:00', 1),
(20, 'Benoit', 'Agate ', 'Jarbantys', '1993-05-26', '56 rue de la Boétie', '36000', 'Châteauroux', '02 54 75 48 62', '07 48 54 12 36', 'cugessummaff-1123@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '1993-05-25 22:00:00', 1),
(21, 'Austin', 'Carole ', 'Aillar', '2001-10-14', '71 rue des lieutemants Thomazo', '36000', 'Châteauroux', '02 54 85 76 95', '06 99 58 51 42', 'cugessummaff-1123@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '2001-10-13 22:00:00', 1),
(22, 'Dubé', 'Sébastien ', 'Kyndliage', '2002-02-20', '41 rue Porte d''Orange', '36000', 'Châteauroux', '02 54 85 68 52', '06 48 51 23 48', 'nutorizip-2245@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2002-02-19 23:00:00', 1),
(23, 'Lacasse', 'Henri', 'Bowerrence', '1994-01-13', '94 rue des six frères Ruellan', '36000', 'Châteauroux', '02 54 85 45 20', '06 14 89 54 51', 'jappenohaz-3023@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '1994-01-12 23:00:00', 1),
(24, 'Fortin', 'Manon ', 'Brenvara', '1995-10-02', '74 rue des Lacs', '36000', 'Châteauroux', '02 54 62 51 20', '06 84 25 61 87', 'acilehuxo-2976@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1995-10-01 23:00:00', 1),
(25, 'Archambault', 'Thierry ', 'Bolrod', '2000-11-06', '63 Cours Marechal-Joffre', '36000', 'Châteauroux', '02 54 32 15 24', '06 15 48 23 22', 'nehexavunn-9385@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2000-11-05 23:00:00', 1),
(26, 'Cantin', 'René ', 'Lurgrod', '1995-10-10', '81 Rue St Ferréol', '36000', 'Châteauroux', '02 54 62 56 32', '07 94 83 53 21', 'sareffaca-5795@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '1995-10-09 23:00:00', 1),
(27, 'Deschênes', 'Benjamin ', 'Taeyrr', '1995-10-25', '14 Rue de Verdun', '36000', 'Châteauroux', '02 54 85 46 52', '07 88 95 63 24', 'hogemilej-9979@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1995-10-24 23:00:00', 1),
(28, 'Viens', 'Hugh ', 'Gwirrant', '1992-02-15', '35 rue des CoudriersChâteauroux', '36000', 'Châteauroux', '02 54 85 48 51', '06 84 95 25 14', 'vikeqalom-0940@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '1992-02-14 23:00:00', 1),
(29, 'Pinneau', 'Olivier', 'Faenwen', '2001-05-30', '50 rue Cazade', '36000', 'Châteauroux', '02 54 85 62 13', '06 12 54 83 59', 'usyssutteka-8298@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '2001-05-29 22:00:00', 1),
(30, 'Boncoeur', 'Louis ', 'Morearra', '1992-01-24', '69 avenue de Bouvines', '36000', 'Châteauroux', '02 54 75 48 10', '07 48 51 26 59', 'yffaffuwa-3682@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1992-01-23 23:00:00', 1),
(31, 'Grenier', 'Geoffrey ', 'Ghashubal', '1996-04-23', '9 rue Marie de Médicis', '36000', 'Châteauroux', '02 54 75 84 56', '07 94 85 32 62', 'arriveffirr-7836@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '1996-04-22 22:00:00', 1),
(32, 'Gaillou', 'Arnaud ', 'Jeyda', '1997-06-12', '64 rue des six frères Ruellan', '36000', 'Châteauroux', '02 54 85 45 62', '06 86 95 34 85', 'bawumahen-2953@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '1997-06-11 22:00:00', 1),
(33, 'Flamand', 'Alfred', 'Dravjallion', '1992-05-13', '70 boulevard Aristide Briand', '36000', 'Châteauroux', '02 54 85 46 52', '06 84 98 91 75', 'gelyssiddal-4423@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1992-05-12 22:00:00', 1),
(34, 'Abril', 'Benoît ', 'Erinya', '2001-10-02', '38 Place du Jeu de Paume', '36000', 'Châteauroux', '02 54 36 52 58', '07 95 64 85 15', 'ozyguxih-9517@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2001-10-01 22:00:00', 1),
(35, 'Guay', 'Francis ', 'Tinriss', '2003-04-03', '51 rue de Lille', '36000', 'Châteauroux', '02 54 12 54 52', '06 95 84 35 84', 'uwyledde-3718@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '2003-04-02 22:00:00', 1),
(36, 'Huppé', 'Claude', 'Bonivard', '1994-06-04', '17 rue du Château', '36000', 'Châteauroux', '02 54 62 53 85', '07 43 58 69 51', 'boffedessyl-6333@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1994-06-03 22:00:00', 1),
(37, 'Beaudry', 'Jeoffroi ', 'Volnarb', '1999-12-06', '56 rue de Groussay', '36000', 'Châteauroux', '02 54 77 85 49', '06 98 75 84 62', 'rinattulluni-7255@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '1999-12-05 23:00:00', 1),
(38, 'Therrien', 'Gilles ', 'Drenyll', '2001-06-22', '27 rue Léon Dierx', '36000', 'Châteauroux', '02 54 11 23 52', '07 30 12 00 13', 'amerruvo-8885@yopmail.com', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 1, '2001-06-21 22:00:00', 1),
(39, 'René', 'Javier ', '', '1994-06-23', '71 avenue Voltaire', '36000', 'Châteauroux', '02 54 91 45 94', '06 85 49 96 33', 'cimissassyk-9640@yopmail.com', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 2, '1994-06-22 22:00:00', 1),
(40, 'Lecomte', 'Chloe', 'Lilou', '1991-03-16', '11 Rue nationale ', '36260', 'Reuilly', '02', '06', 'g@hotmail.fr', 'M', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2017-02-09 23:00:00', 1),
(147, 'qsdqsd', 'qsdqsd', '', '1990-03-28', '', '', '', '', '', '', 'F', 'upload_files/user_avatar/thumbs/avatar-female1.png', '5fdd6afb246b36dd0d819bedf0f95008', 3, '2017-02-19 10:19:34', 1),
(148, 'dqsdqsdq', 'qsdqsd', '', '1990-03-28', '', '', '', '', '', '', 'M', 'upload_files/user_avatar/thumbs/default.png', '3e3b351731724ced7c860e3fd187e099', 3, '2017-02-19 10:57:57', 1),
(149, 'azeaze', 'azeaze', '', '1990-03-28', '', '', '', '', '', '', 'M', 'upload_files/user_avatar/thumbs/184889dagoma-discovery-200-5.jpg', 'd6a94fbdf9cc95fb5bdd6ea7c17844fd', 3, '2017-02-20 09:26:51', 1);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
`usertype_id` int(11) NOT NULL,
  `usertype_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `usertype`
--

INSERT INTO `usertype` (`usertype_id`, `usertype_name`) VALUES
(1, 'Administrateur'),
(2, 'Bureau'),
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
 ADD PRIMARY KEY (`license_id`), ADD KEY `FK_LICENSES_user_id` (`user_id`);

--
-- Index pour la table `listusersgroup`
--
ALTER TABLE `listusersgroup`
 ADD PRIMARY KEY (`list_id`), ADD KEY `FK_own_user_id` (`user_id`), ADD KEY `FK_own_group_id` (`group_id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`asso_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD KEY `FK_USERS_usertype_id` (`usertype_id`);

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
MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `licenses`
--
ALTER TABLE `licenses`
MODIFY `license_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `listusersgroup`
--
ALTER TABLE `listusersgroup`
MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
MODIFY `asso_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT pour la table `usertype`
--
ALTER TABLE `usertype`
MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
