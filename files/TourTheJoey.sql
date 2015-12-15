-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 09:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourthejoey`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reactie` text NOT NULL,
  `song_id` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `website`, `email`, `reactie`, `song_id`) VALUES
(1, 'ikbenapp', 'w.fs.g', 'appdekrokdil@idd.blipe', 'g', 4),
(2, 'joey', '', 'joey@joey.nl', 'ik benjoeyyyyy', 4);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numbers` int(3) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `song_title` varchar(255) NOT NULL,
  `youtube-url` varchar(255) NOT NULL,
  `detail` varchar(9000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `numbers`, `artist`, `song_title`, `youtube-url`, `detail`) VALUES
(1, 100, 'Christophe Maé', 'Dingue dingue dingue', 'Rwv1djaV6Fc', '	'),
(2, 99, 'Dave', 'Du côté de chez Swann', 'SzvC1OWCBL4', ''),
(3, 98, 'Michel Sardou', 'Une fille aux jeux clairs', 'dcBPaySVtBw', ''),
(4, 97, 'Cast Roméo & Juliette', 'Les rois du monde', 'LEC8rJZb3o0', ''),
(5, 96, 'Michel Fugain', 'Ring et ding', 'BJfmAHjDjMw', ''),
(6, 95, 'Elsa', 'T’en va pas', 'TeaKAB-IxOE', ''),
(7, 94, 'Jo Lemaire & Flouze', 'Je suis venue te dire que je m’en vais', 'C9_GpNM_SyQ', ''),
(8, 93, 'Ben l’Oncle Soul', '(Je suis un) Soulman', '69ptYXvUo7M', ''),
(9, 92, 'Camélia Jordana', 'Non non non', 'JswOaaE9X-I', ''),
(10, 91, 'Captain Gumbo', 'Allons à Lafayette', '6fDBxgm-F9E', ''),
(11, 90, 'Adamo', 'Les filles du bord de mer', 'fh5oydvwqZU', ''),
(12, 89, 'Françoise Hardy', 'Comment te dire adieu', 'mwhX5V1Gn6w', ''),
(13, 88, 'Charles Aznavour', 'J’ai vu Paris', 'aXJ20S1aAcU', ''),
(14, 87, 'Indochine', 'J’ai demandé à la lune', 'KAOmC5qT02w', ''),
(15, 86, 'Edith Piaf', 'Sous le ciel de Paris', 'kouTi-0csLg', ''),
(16, 85, 'Anne-Marie David', 'Tu te reconnaitras', 'ltkPaUBlXnQ', ''),
(17, 84, 'Patricia Kaas', 'Mademoiselle chante le blues', '9uWyiFzwYGI', ''),
(18, 83, 'Les Poppys', 'Isabelle je t’aime', 'o618mlIaR7E', ''),
(19, 82, 'Dalida', 'J’attendrai', 'kIX4Zo_r1Qk', ''),
(20, 81, 'Zaz', 'Le long de la route', 'XZaI3kVnoeA', ''),
(21, 80, 'Zouk Machine', 'Maldon', 'BPdrGOFXzGA', ''),
(22, 79, 'Julien Clerc', 'Ma préférence', 'qTfSP7ljcVE', ''),
(23, 78, 'Jacques Brel', 'Bruxelles', 'YZETr0cahT8', ''),
(24, 77, 'Catherine Ferry', '1 2 3', 'G_9xKxwJV8s', ''),
(25, 76, 'France Gall', 'Il jouait du piano debout', 'N6yobV8KiQY', ''),
(26, 75, 'Hughes Aufray', 'Adieu Monsieur le professeur', 'XdoJA93SMX8', ''),
(27, 74, 'Georges Brassens', 'Brave Margot', 'zuxMhzKeozo', ''),
(28, 73, 'Lio', 'Amoureux solitaires', 'aL3mho_Au7g', ''),
(29, 72, 'Adamo', 'Inch Allah', 'Y05bBznCbd4', ''),
(30, 71, 'Carla Bruni', 'Quelqu’un m’a dit', 'EC7Re8cczj0', ''),
(31, 70, 'BZN', 'Mon amour', '4J7OeTPEe0A', ''),
(32, 69, 'Yves Duteil', 'Prendre un enfant', 'jcF4UiIx52o', ''),
(33, 68, 'Charles Aznavour', 'Mes emmerdes', 'libXP153AlM', ''),
(34, 67, 'Sandra Kim', 'J’aime la vie', 'SJKFT0VUyf4', ''),
(35, 66, 'Manau', 'La tribu de Dana', 'MI2-w9q_Lk4', ''),
(36, 65, 'Adamo', 'C’est ma vie', 'KjP01gwxNSo', ''),
(37, 64, 'Kate Ryan', 'Désenchantée', 'tmPws7eXcVk', ''),
(38, 63, 'Edith Piaf', 'Milord ', 'vwe3CzWZ4Bg', ''),
(39, 62, 'Mort Shuman', 'Le lac majeur', 'I3n834K3PaQ', ''),
(40, 61, 'Lucille Starr', 'Quand le soleil dit bonjour aux montagnes', 'aChSCXFFPlQ', ''),
(41, 60, 'Julien Clerc', 'Si on chantait', '5ft0Hx0O8G4', ''),
(42, 59, 'Dave', 'Dansez maintenant', 'KqsQ3aV89SE', ''),
(43, 58, 'Gilbert Bécaud', 'Et maintenant', 'hmSBAJdie7E', ''),
(44, 57, 'Julien Clerc', 'Çe n’est rien', 'hmSBAJdie7E', ''),
(45, 56, 'Charles Aznavour', 'La mamma', 'UVkG9E4I2xo', ''),
(46, 55, 'Stromae', 'Alors on danse', '7pKrVB5f2W0', ''),
(47, 54, 'C. Jérôme', 'C’est moi', '3GRaJvvC_5o', ''),
(48, 53, 'Grace Jones', 'La vie en rose', 's565nXsXTrg', ''),
(49, 52, 'Gérard Lenorman', 'Si j’étais président', '4UvZQbYFqgQ', ''),
(50, 51, 'Jacques Brel', 'Marieke', 'wfGDpzL9H7Y', ''),
(51, 50, 'Joe Dassin', 'L’été Indien', 'GZqGQl3YF_c', ''),
(52, 49, 'Adamo', 'Tombe la neige', 'OQKSU6j1-8U', ''),
(53, 48, 'Wende', 'Chaque fois', '8SNh8EQ3ViQ', ''),
(54, 47, 'Yves Montand', 'Les feuilles mortes', 'Xo1C6E7jbPw', ''),
(55, 46, 'Edith Piaf', 'La vie en rose', 'kFzViYkZAz4', ''),
(56, 45, 'Desireless', 'Voyage voyage', '6PDmZnG8KsM', ''),
(57, 44, 'Gérard Lenorman', 'Voici les clés', 'Pn_itowbTzs', ''),
(58, 43, 'Julien Clerc', 'Venise', 'UhQnVyz627c', ''),
(59, 42, 'Vanessa Paradis', 'Joe le taxi', 'Ulay2FvUEd8', ''),
(60, 41, 'In-grid', 'Tu es foutu', 'qOGSqC7xds8', ''),
(61, 40, 'Noir Désir', 'Le vent nous portera', 'NrgcRvBJYBE', ''),
(62, 39, 'La Caravane Passe', 'Salad tomate oignon', 'Lh49fLPhw2I', ''),
(63, 38, 'Joe Dassin', 'Les Champs-Elysées', 'd9V-zUlrhEE', ''),
(64, 37, 'Georges Moustaki', 'Le métèque', 'MV8fGf-N06A', ''),
(65, 36, 'Charles Aznavour', 'La bohème', 'xzdxyhng1RU', ''),
(66, 35, 'Dalida', 'Gigi l’amoroso', 'Fb63wBWFaJ8', ''),
(67, 34, 'Dalida & Alain Delon', 'Paroles paroles', '_ifJapuqYiU', ''),
(68, 33, 'Frida Boccara', 'Cent mille chansons', 'BYRVl13GPD4', ''),
(69, 32, 'France Gall', 'Ella elle l’a', 'lgHGU8gqz9U', ''),
(70, 31, 'Adamo', 'Vous permettez monsieur', 'O70E5PYved4', ''),
(71, 30, 'Kate & Anne McGarrigle', 'Complainte pour Ste. Cathérine', 'TUr8MJYAjRk', ''),
(72, 29, 'Charles Trenet', 'La mer', 'fztkUuunI7g', ''),
(73, 28, 'Johnny Hallyday', 'Pour moi la vie va commençer', 'YTJoJRTb0L8', ''),
(74, 27, 'Jean Ferrat', 'La montagne', 'tkI5wGVjfX8', ''),
(75, 26, 'Alizée', 'Moi… Lolita', 'P3uhPQZpjFg', ''),
(76, 25, 'Patrick Bruel', 'Casser la voix (live)', 'ztKhOTrchQo', ''),
(77, 24, 'Jacques Brel', 'Le plat pays', 'seMFkItmGFs', ''),
(78, 23, 'Plastic Bertrand', 'Ça plane pour moi', '32SkxLCZz_o', ''),
(79, 22, 'Julien Clerc', 'Hélène', 'bagWWB-35oI', ''),
(80, 21, 'Jacques Brel', 'Amsterdam', 'n2kkr0e_dTQ', ''),
(81, 20, 'France Gall', 'Poupée de cire, poupée de son', 's5aeeSmkPwQ', ''),
(82, 19, 'Dalida', 'Buenas noches mi amor', 'pHipTOTNptY', ''),
(83, 18, 'Michel Fugain', 'Le printemps', 'HClfgTGiHDs', ''),
(84, 17, 'Serge Gainsbourg & Jane Birkin', 'Je t’aime… moi non plus', 'k3Fa4lOQfbA', ''),
(85, 16, 'Vicky Leandros', 'Après toi', 'ZA5KP-WwIuQ', ''),
(86, 15, 'Julien Clerc', 'This melody', 'N0ccL5qS7Ic', ''),
(87, 14, 'Zaz', 'Je veux', 'Tm88QAI8I5A', ''),
(88, 13, 'Alderliefste & Liesbeth List & Ramses Shaffy', 'Laat me/Vivre', 'Ih5i8lEpaH0', ''),
(89, 12, 'Yves Montand', 'La bicyclette', 'eoHjQs6C4UY', ''),
(90, 11, 'Michel Delpech', 'Pour un flirt', 'l11GyqVu_-o', ''),
(91, 10, 'Michel Sardou', 'Les lacs du Connemara', '11GyqVu_-o', ''),
(92, 9, 'Khaled', 'Aicha', 'RvK19xgAxSU', ''),
(93, 8, 'Françoise Hardy', 'Tous les garçons et les filles', '0aLoezucIzk', ''),
(94, 7, 'Gérard Lenorman', 'La ballade des gens heureux', 'Wzkz9IABhPk', ''),
(95, 6, 'Jacques Brel', 'Ne me quitte pas', 'i2wmKcBm4Ik', ''),
(96, 5, 'Edith Piaf', 'Non je ne regrette rien', 'Q3Kvu6Kgp88', ''),
(97, 4, 'Les Poppys', 'Non non rien n’a changé', 'V9Po8lSIKww', ''),
(98, 3, 'Jacques Dutronc', 'Il est cinq heures Paris s’éveille', 'WrKf-a8Z5fc', ''),
(99, 2, 'Michel Fugain', 'Une belle histoire', 'u2UhQAhLc2Y', ''),
(100, 1, 'Gilbert Bécaud', 'Nathalie', 'TilQ8BIHisw', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
