-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 août 2018 à 17:08
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` text NOT NULL,
  `BIL_IMG` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`, `BIL_IMG`) VALUES
(2, '2018-07-25 19:13:18', 'Chap.1 Achete ton billet', '<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Peupl&eacute; par le peule de<em> Teddylando</em>, Esquimaux (notamment I&ntilde;upiak et Yupiks) et peut-&ecirc;tre d\'autres Am&eacute;rindiens depuis plusieurs mill&eacute;naires, le territoire est colonis&eacute; par des trappeurs russes &agrave; la fin du xviiie si&egrave;cle. L\'Alaska vit alors essentiellement du commerce du bois et de la traite des fourrures. En 1867, les &Eacute;tats-Unis l\'ach&egrave;tent &agrave; la Russie pour la somme de 7,2 millions de dollars (environ 120 millions de dollars actuels), et celui-ci adh&egrave;re &agrave; l\'Union le 3 janvier 1959. Les domaines &eacute;conomiques pr&eacute;dominants aujourd\'hui sont la p&ecirc;che, le tourisme, et surtout la production d\'hydrocarbures (p&eacute;trole, gaz) depuis la d&eacute;couverte de gisements &agrave; Prudhoe Bay dans les ann&eacute;es 1970.</span></p>', 'assets/images/train_min_02.jpg'),
(14, '2018-08-12 16:05:11', 'Billet simple pour l\'alaska', '<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Comme Hawa&iuml;, l\'Alaska est s&eacute;par&eacute; du Mainland et se situe au nord-ouest du Canada. Bord&eacute; par l\'oc&eacute;an Arctique au nord et la mer de B&eacute;ring et l\'oc&eacute;an Pacifique au sud, ce territoire est s&eacute;par&eacute; de l\'Asie par le d&eacute;troit de B&eacute;ring. En outre, ses divisions administratives ne sont pas des comt&eacute;s mais des boroughs.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Alaska signifie &laquo; grande Terre &raquo; ou &laquo; continent &raquo; en al&eacute;oute3. Cette r&eacute;gion, que l\'on appelait au xixe si&egrave;cle l\'&laquo; Am&eacute;rique russe &raquo;, tire son nom d\'une longue presqu\'&icirc;le, au nord-ouest du continent am&eacute;ricain, &agrave; environ 1 000 km au sud du d&eacute;troit de Bering, et qui se lie, vers le sud, aux &icirc;les Al&eacute;outiennes. Le surnom de l\'Alaska est &laquo; la derni&egrave;re fronti&egrave;re &raquo; ou &laquo; la terre du soleil de minuit &raquo;.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Peupl&eacute; par des Al&eacute;outes, Esquimaux (notamment I&ntilde;upiak et Yupiks) et peut-&ecirc;tre d\'autres Am&eacute;rindiens depuis plusieurs mill&eacute;naires, le territoire est colonis&eacute; par des trappeurs russes &agrave; la fin du xviiie si&egrave;cle. L\'Alaska vit alors essentiellement du commerce du bois et de la traite des fourrures. En 1867, les &Eacute;tats-Unis l\'ach&egrave;tent &agrave; la Russie pour la somme de 7,2 millions de dollars (environ 120 millions de dollars actuels), et celui-ci adh&egrave;re &agrave; l\'Union le 3 janvier 1959. Les domaines &eacute;conomiques pr&eacute;dominants aujourd\'hui sont la p&ecirc;che, le tourisme, et surtout la production d\'hydrocarbures (p&eacute;trole, gaz) depuis la d&eacute;couverte de gisements &agrave; Prudhoe Bay dans les ann&eacute;es 1970.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Le Denali (6 168 m&egrave;tres d\'altitude), point culminant des &Eacute;tats-Unis, se trouve dans la cha&icirc;ne d\'Alaska et constitue le c&oelig;ur du Parc national de Denali.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Le climat y est de type polaire, et la faune caract&eacute;ristique des milieux froids (grizzli, caribou, &eacute;lan, ours blanc).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Les territoires limitrophes sont le territoire du Yukon et la province de Colombie-Britannique au Canada. Le Kra&iuml; du Kamtchatka et le district autonome de Tchoukotka en Russie se trouvent &agrave; quelques dizaines de kilom&egrave;tres, de l\'autre c&ocirc;t&eacute; du d&eacute;troit de Bering.</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><span style=\"font-family: \'book antiqua\', palatino; font-size: 15px;\">Bastion du Parti r&eacute;publicain, l\'Alaska fut gouvern&eacute; de 2006 &agrave; 2009 par Sarah Palin, candidate &agrave; la vice-pr&eacute;sidence des &Eacute;tats-Unis en 2008 et &eacute;g&eacute;rie du mouvement des Tea Party</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino;\">&nbsp;</span></p>', 'assets/images/Alaska_min_01.jpg'),
(15, '2018-08-14 14:42:27', 'Titre ticket ', '<p><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino; color: #33ffff;\">En 2010, le taux de natalit&eacute; s\'&eacute;levait &agrave; 16,2 &permil;26 (15,3 &permil; en 201227) et le taux de mortalit&eacute; &agrave; 5,2 &permil;28 (5,3 &permil; en 201229). L\'indice de f&eacute;condit&eacute; &eacute;tait de 2,35 enfants par femme26 (2,19 en 201227). Le taux de mortalit&eacute; infantile s\'&eacute;levait &agrave; 3,8 &permil;28 (5,2 &permil; en 201229). La population &eacute;tait compos&eacute;e de 26,38 % de personnes de moins de 18 ans, 10,54 % de personnes entre 18 et 24 ans, 27,61 % de personnes entre 25 et 44 ans, 27,73 % de personnes entre 45 et 64 ans et 7,74 % de personnes de 65 ans et plus. L\'&acirc;ge m&eacute;dian &eacute;tait de 33,8 ans30.</span></p>\r\n<p><span style=\"text-decoration: underline;\"><em><strong><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino;\">Entre 2010 et 2013, l\'accroissement de la population (+ 24 901) &eacute;tait le r&eacute;sultat d\'une part d\'un solde naturel positif (+ 24 745) avec un exc&eacute;dent des naissances (37 432) sur les d&eacute;c&egrave;s (12 687), et d\'autre part d\'un solde migratoire positif (+ 387) avec un exc&eacute;dent des flux migratoires internationaux (+ 5 963) et un d&eacute;ficit des flux migratoires int&eacute;rieurs (- 5 576)31.</span></strong></em></span></p>\r\n<p><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino; background-color: #ffff00;\">Selon des estimations de 2013, 91,0 % des Alaskains &eacute;taient n&eacute;s dans un &Eacute;tat f&eacute;d&eacute;r&eacute;, dont 42,9 % dans l\'&Eacute;tat de l\'Alaska et 48,0 % dans un autre &Eacute;tat (20,8 % dans l\'Ouest, 11,7 % dans le Midwest, 10,0 % dans le Sud, 5,6 % dans le Nord-Est), 2,1 % &eacute;taient n&eacute;s dans un territoire non incorpor&eacute; ou &agrave; l\'&eacute;tranger avec au moins un parent am&eacute;ricain et 6,9 % &eacute;taient n&eacute;s &agrave; l\'&eacute;tranger de parents &eacute;trangers (56,4 % en Asie, 17,2 % en Am&eacute;rique latine, 14,2 % en Europe, 5,7 % en Am&eacute;rique du Nord, 3,3 % en Oc&eacute;anie, 3,1 % en Afrique). Parmi ces derniers, 56,2 % &eacute;taient naturalis&eacute;s am&eacute;ricain et 43,8 % &eacute;taient &eacute;trangers32,33.</span></p>\r\n<p><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino;\">Selon des estimations de 2012 effectu&eacute;es par le Pew Hispanic Center, l\'&Eacute;tat comptait 15 000 immigr&eacute;s ill&eacute;gaux, soit 1,8 % de la population34.</span></p>', NULL),
(16, '2018-08-15 14:16:24', 'Concentrations communautaires', '<p style=\"text-align: justify;\"><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino;\">Les Am&eacute;rindiens se concentraient principalement dans les agglom&eacute;rations d&rsquo;Anchorage (26,1 %), dont 21,5 % dans la seule ville d&rsquo;Anchorage, Fairbanks (6,5 %) et Juneau (3,4 %), ainsi que dans les subdivisions de Bethel (13,7 %), Nome (7,0 %), Kusilvak (6,9 %), Northwest Arctic (5,9 %), North Slope (4,9 %), la P&eacute;ninsule de Kenai (3,9 %), Yukon-Koyukuk (3,9 %) et Dillingham (3,3 %). Tr&egrave;s implant&eacute;s sur la c&ocirc;te Ouest, dans le Nord et dans le Sud-Est de l&rsquo;&Eacute;tat, ils &eacute;taient majoritaires dans les subdivisions de Kusilvak (94,9 %), Bethel (82,6 %), Northwest Arctic (81,1 %), Nome (75,6 %), Yukon-Koyukuk (71,0 %), Dillingham (70,8 %), Lake and Peninsula (64,0 %) et North Slope (53,5 %) et constituaient une part significative de la population dans les subdivisions de Hoonah-Angoon (39,5 %), Prince of Wales-Hyder (38,9 %), Yakutat (35,5 %) et Bristol Bay (33,1 %).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino;\">Les Hispaniques se concentraient principalement dans les agglom&eacute;rations d&rsquo;Anchorage (64,6 %), dont 56,2 % dans la seule ville d&rsquo;Anchorage, Fairbanks (14,4 %) et Juneau (4,0 %), ainsi que dans le borough de la P&eacute;ninsule de Kenai (4,2 %). Tr&egrave;s implant&eacute;s dans le Sud-Ouest et les centres urbains de l\'&Eacute;tat, ils constituaient une part significative de la population dans les subdivisions des Al&eacute;outiennes occidentales (13,1 %), des Al&eacute;outiennes orientales (12,3 %), d&rsquo;Anchorage (7,6 %), de l&rsquo;&Icirc;le Kodiak (7,3 %), de Fairbanks North Star (5,8 %), de Juneau (5,1 %) et de Sitka (4,9 %).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino;\">Les Asiatiques se concentraient principalement dans les agglom&eacute;rations d&rsquo;Anchorage (64,8 %), dont 62,0 % dans la seule ville d&rsquo;Anchorage, Fairbanks (6,7 %) et Juneau (5,0 %), ainsi que dans les subdivisions de l&rsquo;&Icirc;le Kodiak (7,0 %), des Al&eacute;outiennes occidentales (4,2 %) et des Al&eacute;outiennes orientales (3,0 %). Tr&egrave;s implant&eacute;s dans le Sud-Ouest et le Sud-Est de l&rsquo;&Eacute;tat, ils constituaient une part significative de la population dans les subdivisions des Al&eacute;outiennes orientales (35,4 %), des Al&eacute;outiennes occidentales (28,3 %), de l&rsquo;&Icirc;le Kodiak (19,3 %), d&rsquo;Anchorage (8,0 %), de Ketchikan Gateway (6,9 %), de Juneau (6,0 %), de Sitka (5,7 %), de North Slope (4,4 %), de Yakutat (4,1 %) et de Valdez-Cordova (3,6 %).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 15px; font-family: \'book antiqua\', palatino;\">Les Noirs se concentraient principalement dans les agglom&eacute;rations d&rsquo;Anchorage (73,5 %), dont 69,7 % dans la seule ville d&rsquo;Anchorage, et Fairbanks (18,9 %), dont 12,1 % dans la seule ville de Fairbanks. Tr&egrave;s implant&eacute;s dans &Icirc;les Al&eacute;outiennes et les grands centres urbains de l\'&Eacute;tat, ils constituaient une part significative de la population dans les subdivisions des Al&eacute;outiennes orientales (6,7 %), des Al&eacute;outiennes occidentales (5,7 %), d&rsquo;Anchorage (5,2 %) et de Fairbanks North Star (4,3 %).</span></p>', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_com`
--

DROP TABLE IF EXISTS `t_com`;
CREATE TABLE IF NOT EXISTS `t_com` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `BIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_com`
--

INSERT INTO `t_com` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`) VALUES
(1, '2018-07-25 19:14:07', 'A. Nonyme', 'Bravo pour ce début', 1),
(25, '2018-08-13 14:11:45', 'Paul', 'Ok ok !', 14),
(5, '2018-07-30 16:41:02', 'Pierre ', 'test ajout commentaires', 6),
(8, '2018-07-30 16:44:09', 'jaques', 'test micro', 6);

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE IF NOT EXISTS `t_user` (
  `USER_ID` int(100) NOT NULL AUTO_INCREMENT,
  `USER_PASS` varchar(255) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_user`
--

INSERT INTO `t_user` (`USER_ID`, `USER_PASS`) VALUES
(13, '83398a8451b3537d38acdfa113e1c6e9f3e4d8a39f3e3106c8dbfa13f584aed613efa4be840cc4f8710875fdba96df60be3e13264c0f1a93e2f3bee8a04d9399'),
(7, 'flo'),
(12, '$2y$10$3E/h/l96LPP09FlAfZto..DCukKngPaA9wahmi2pCMZ7BnoZYwgwS'),
(11, '$2y$10$/Ur9Cv1s8vuTttai65hzCOkvays5QZylLQvAt2J1Sh/yq.eFCRx1W');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
