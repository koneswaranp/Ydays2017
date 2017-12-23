-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 23 déc. 2017 à 19:47
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ydays`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad`
--

DROP TABLE IF EXISTS `ad`;
CREATE TABLE IF NOT EXISTS `ad` (
  `id_ad` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `ad_date` datetime NOT NULL,
  `deadline` date DEFAULT NULL,
  `description` text,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_ad`),
  KEY `FK_ad_id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ad`
--

INSERT INTO `ad` (`id_ad`, `title`, `ad_date`, `deadline`, `description`, `id_user`) VALUES
(6, 'dÃ©veloppement sit web', '2017-12-08 12:16:30', NULL, 'Je recherche une personne mon site vitrine pour ma société.\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nHac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', 4),
(7, 'appli mobile', '2017-12-11 08:29:53', '2018-03-23', 'Appli de planning étudiantSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nHac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', 4),
(10, 'site web', '2017-12-14 17:00:08', '2018-04-12', 'vzeskefldnSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nHac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', 5),
(11, 'Application mobile annonce en ligne', '2017-12-15 21:26:42', NULL, 'Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statuit vel ex provinciis alimenta transferri conterminis, sed consularem Syriae Theophilum prope adstantem ultima metuenti multitudini dedit id adsidue replicando quod invito rectore nullus egere poterit victu.', 8),
(12, 'E-commerce', '2017-12-15 21:18:07', '2017-11-10', 'Projet d\'un mois creation d\'un site e-commerce\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nHac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', 10),
(13, 'Site e-commerce ', '2017-12-15 21:21:21', '2012-05-12', 'Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nHac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', 11),
(14, 'Portfolio', '2017-12-15 21:13:58', '2017-11-14', 'Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nHac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', 9),
(15, 'Jeux d\'echec', '2017-12-15 21:15:11', '2017-10-25', 'Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.\r\n\r\nHac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.c ', 9);

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
CREATE TABLE IF NOT EXISTS `favorite` (
  `id_user` int(11) NOT NULL,
  `id_user_1` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_user_1`),
  KEY `FK_favorite_id_user_1` (`id_user_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `response`
--

DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `id_response` int(11) NOT NULL AUTO_INCREMENT,
  `date_response` date NOT NULL,
  `response` text NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_dev` int(11) NOT NULL,
  `id_ad` int(11) NOT NULL,
  `accepted` varchar(5) DEFAULT NULL,
  `comments` text,
  PRIMARY KEY (`id_response`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `response`
--

INSERT INTO `response` (`id_response`, `date_response`, `response`, `id_client`, `id_dev`, `id_ad`, `accepted`, `comments`) VALUES
(3, '2017-12-15', 'Je serai intÃ©ressÃ©e pour rÃ©aliser votre projet de jeu d\'Ã©checs. Je l\'ai dÃ©jÃ  fait auparavant.', 9, 12, 15, NULL, NULL),
(4, '2017-12-15', 'bbbbb', 9, 8, 15, NULL, NULL),
(5, '2017-12-20', 'Bonjour, je suis intÃ©ressÃ©e par votre annonce.', 4, 7, 6, 'true', 'J\'accepte parce que voilÃ  t\'es gentille.'),
(6, '2017-12-20', 'Hello.', 11, 4, 13, NULL, NULL),
(7, '2017-12-20', 'vjhgkjhk', 8, 4, 11, 'true', ''),
(8, '2017-12-20', 'zgsiejdhgodrkhfv', 7, 4, 16, 'true', ''),
(9, '2017-12-20', 'fsefsfrgtdgdgfdc', 4, 7, 7, 'false', ''),
(10, '2017-12-20', 'cdsgcghghffsxd', 7, 13, 16, NULL, NULL),
(11, '2017-12-20', 'qesdhdtgcjhdrgqehf', 8, 7, 11, NULL, NULL),
(12, '2017-12-21', 'fedqwfvdxvdfv', 10, 7, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `save`
--

DROP TABLE IF EXISTS `save`;
CREATE TABLE IF NOT EXISTS `save` (
  `id_user` int(11) NOT NULL,
  `id_ad` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_ad`),
  KEY `FK_save_id_ad` (`id_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `save`
--

INSERT INTO `save` (`id_user`, `id_ad`) VALUES
(7, 7),
(7, 11),
(7, 12),
(7, 13),
(7, 15);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `perso` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`,`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `last_name`, `first_name`, `mail`, `password`, `phone`, `profile_photo`, `description`, `github`, `linkedin`, `perso`) VALUES
(4, 'liveforfries', 'Live', 'Fred', 'fred@fri.fr', '91271c95f0a3a06f0d7975b1195fa1288a86b6d4', '0123456789', 'img/Ttumblr_o23h914F0X1srqa2ko1_1280.jpg', NULL, NULL, NULL, NULL),
(5, 'hello', 'hellow', 'hello', 'hello@hello.fr', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', '0123456789', 'img/photo5a2a69e58cfe1.jpg', NULL, NULL, NULL, NULL),
(6, 'likeanao', 'Paul', 'Nao', 'naomi@n.fr', '751a5cb5bdfaedc127f6558fed9a6b7437bb68e2', '123456789', 'img/photo5a2ecb70de6d9.png', NULL, NULL, NULL, NULL),
(7, 'Thanu', 'Star', 'Thanu', 'thanu@star.fr', 'e50031cfc82ab05bdd84d63051f3f67d0b32cba6', '0123457788', 'img/photo5a3235c7b3c51.png', NULL, NULL, NULL, NULL),
(8, 'NaoSup', 'Paulmin', 'Naomi', 'naomi.paulmin@ynov.com', '751a5cb5bdfaedc127f6558fed9a6b7437bb68e2', '0145786324', 'img/photo5a342f5cc336c.png', NULL, NULL, NULL, NULL),
(9, 'Theepa', 'KONESWARAN', 'Pratheepa', 'pratheepa.koneswaran@ynov.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0123456789', 'img/photo5a342cc3a614e.jpg', NULL, NULL, NULL, NULL),
(10, 'Cherine', 'Nicolas', 'Cherine', 'cherine@live.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '9876543210', 'img/photo5a342dba5d7d3.jpg', NULL, NULL, NULL, NULL),
(11, 'Theo', 'David', 'ThÃ©o', 'theo@hotmail.fr', 'cf91a9cfe0882326bc9e5276dcdb1cce8cbef4ce', '1234567890', 'img/photo5a342e70ea049.jpg', NULL, NULL, NULL, NULL),
(12, 'Thanu', 'THILIPKMUAR', 'Thanuga', 'thanuga.thilipkumar@ynov.com', 'e7c0e5250ef1f2c7bc0298c228ae06af58a1b022', '0558345613', 'img/photo5a343405682de.png', NULL, NULL, NULL, NULL),
(13, 'test', 'test', 'test', 'test@test.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '123456789', 'img/photo5a3a8db4d8041.jpg', NULL, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `FK_ad_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `FK_favorite_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_favorite_id_user_1` FOREIGN KEY (`id_user_1`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `save`
--
ALTER TABLE `save`
  ADD CONSTRAINT `FK_save_id_ad` FOREIGN KEY (`id_ad`) REFERENCES `ad` (`id_ad`),
  ADD CONSTRAINT `FK_save_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
