-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 dec 2015 om 14:21
-- Serverversie: 5.6.25
-- PHP-versie: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourtop100v2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `ID` int(1) NOT NULL,
  `rank` int(1) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `song` varchar(255) NOT NULL,
  `yt_rawlink` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `songs`
--

INSERT INTO `songs` (`ID`, `rank`, `artist`, `song`, `yt_rawlink`) VALUES
(1, 1, 'Gilbert Bécaud', 'Nathalie', 'TilQ8BIHisw'),
(2, 2, 'Michel Fugain', 'Une belle histoire', 'u2UhQAhLc2Y'),
(3, 3, 'Jacques Dutronc', 'Il est cinq heures Paris s’éveille', 'WrKf-a8Z5fc'),
(4, 4, 'Les Poppys', 'Non non rien n’a changé', 'V9Po8lSIKww'),
(5, 5, 'Edith Piaf', 'Non je ne regrette rien', 'Q3Kvu6Kgp88'),
(6, 6, 'Jacques Brel', 'Ne me quitte pas', 'i2wmKcBm4Ik'),
(7, 7, 'Gérard Lenorman', 'La ballade des gens heureux', 'Wzkz9IABhPk'),
(8, 8, 'Françoise Hardy', 'Tous les garçons et les filles', '0aLoezucIzk'),
(9, 9, 'Khaled', 'Aicha', 'RvK19xgAxSU'),
(10, 10, 'Michel Sardou', 'Les lacs du Connemara', ''),
(11, 11, 'Michel Delpech', 'Pour un flirt', 'l11GyqVu_-o'),
(12, 12, 'Yves Montand', 'La bicyclette', 'eoHjQs6C4UY'),
(13, 13, 'Alderliefste & Liesbeth List & Ramses Shaffy', 'Laat me/Vivre', 'Ih5i8lEpaH0'),
(14, 14, 'Zaz', 'Je veux', 'Tm88QAI8I5A'),
(15, 15, 'Julien Clerc', 'This melody', 'N0ccL5qS7Ic'),
(16, 16, 'Vicky Leandros', 'Après toi', 'ZA5KP-WwIuQ'),
(17, 17, 'Serge Gainsbourg & Jane Birkin', 'Je t’aime… moi non plus', 'k3Fa4lOQfbA'),
(18, 18, 'Michel Fugain', 'Le printemps', 'HClfgTGiHDs'),
(19, 19, 'Dalida', 'Buenas noches mi amor', 'pHipTOTNptY'),
(20, 20, 'France Gall', 'Poupée de cire, poupée de son', 's5aeeSmkPwQ'),
(21, 21, 'Jacques Brel', 'Amsterdam', 'n2kkr0e_dTQ'),
(22, 22, 'Julien Clerc', 'Hélène', 'bagWWB-35oI'),
(23, 23, 'Plastic Bertrand', 'Ça plane pour moi', '32SkxLCZz_o'),
(24, 24, 'Jacques Brel', 'Le plat pays', 'seMFkItmGFs'),
(25, 25, 'Patrick Bruel', 'Casser la voix (live)', 'ztKhOTrchQo'),
(26, 26, 'Alizée', 'Moi… Lolita', 'P3uhPQZpjFg'),
(27, 27, 'Jean Ferrat', 'La montagne', 'tkI5wGVjfX8'),
(28, 28, 'Johnny Hallyday', 'Pour moi la vie va commençer', 'YTJoJRTb0L8'),
(29, 29, 'Charles Trenet', 'La mer', 'fztkUuunI7g'),
(30, 30, 'Kate & Anne McGarrigle', 'Complainte pour Ste. Cathérine', 'TUr8MJYAjRk'),
(31, 31, 'Adamo', 'Vous permettez monsieur', 'O70E5PYved4'),
(32, 32, 'France Gall', 'Ella elle l’a', 'lgHGU8gqz9U'),
(33, 33, 'Frida Boccara', 'Cent mille chansons', 'BYRVl13GPD4'),
(34, 34, 'Dalida & Alain Delon', 'Paroles paroles', '_ifJapuqYiU'),
(35, 35, 'Dalida', 'Gigi l’amoroso', 'Fb63wBWFaJ8'),
(36, 36, 'Charles Aznavour', 'La bohème', 'xzdxyhng1RU'),
(37, 37, 'Georges Moustaki', 'Le métèque', 'MV8fGf-N06A'),
(38, 38, 'Joe Dassin', 'Les Champs-Elysées', 'd9V-zUlrhEE'),
(39, 39, 'La Caravane Passe', 'Salad tomate oignon', 'Lh49fLPhw2I'),
(40, 40, 'Noir Désir', 'Le vent nous portera', 'NrgcRvBJYBE'),
(41, 41, 'In-grid', 'Tu es foutu', 'qOGSqC7xds8'),
(42, 42, 'Vanessa Paradis', 'Joe le taxi', 'Ulay2FvUEd8'),
(43, 43, 'Julien Clerc', 'Venise', 'UhQnVyz627c'),
(44, 44, 'Gérard Lenorman', 'Voici les clés', 'Pn_itowbTzs'),
(45, 45, 'Desireless', 'Voyage voyage', '6PDmZnG8KsM'),
(46, 46, 'Edith Piaf', 'La vie en rose', 'kFzViYkZAz4'),
(47, 47, 'Yves Montand', 'Les feuilles mortes', 'Xo1C6E7jbPw'),
(48, 48, 'Wende', 'Chaque fois', '8SNh8EQ3ViQ'),
(49, 49, 'Adamo', 'Tombe la neige', 'OQKSU6j1-8U'),
(50, 50, 'Joe Dassin', 'L’été Indien', 'GZqGQl3YF_c'),
(51, 51, 'Jacques Brel', 'Marieke', 'wfGDpzL9H7Y'),
(52, 52, 'Gérard Lenorman', 'Si j’étais président', ''),
(53, 53, 'Grace Jones', 'La vie en rose', 's565nXsXTrg'),
(54, 54, 'C. Jérôme', 'C’est moi', '3GRaJvvC_5o'),
(55, 55, 'Stromae', 'Alors on danse', '7pKrVB5f2W0'),
(56, 56, 'Charles Aznavour', 'La mamma', 'UVkG9E4I2xo'),
(57, 57, 'Julien Clerc', 'Çe n’est rien', '5ft0Hx0O8G4'),
(58, 58, 'Gilbert Bécaud', 'Et maintenant', 'hmSBAJdie7E'),
(59, 59, 'Dave', 'Dansez maintenant', 'KqsQ3aV89SE'),
(60, 60, 'Julien Clerc', 'Si on chantait', 'DxUKvPYFaxo'),
(61, 61, 'Lucille Starr', 'Quand le soleil dit bonjour aux montagnes', 'aChSCXFFPlQ'),
(62, 62, 'Mort Shuman', 'Le lac majeur', 'I3n834K3PaQ'),
(63, 63, 'Edith Piaf', 'Milord', 'vwe3CzWZ4Bg'),
(64, 64, 'Kate Ryan', 'Désenchantée', 'tmPws7eXcVk'),
(65, 65, 'Adamo', 'C’est ma vie', 'KjP01gwxNSo'),
(66, 66, 'Manau', 'La tribu de Dana', 'MI2-w9q_Lk4'),
(67, 67, 'Sandra Kim', 'J’aime la vie', 'SJKFT0VUyf4'),
(68, 68, 'Charles Aznavour', 'Mes emmerdes', 'libXP153AlM'),
(69, 69, 'Yves Duteil', 'Prendre un enfant', 'jcF4UiIx52o'),
(70, 70, 'BZN', 'Mon amour', '4J7OeTPEe0A'),
(71, 71, 'Carla Bruni', 'Quelqu’un m’a dit', 'EC7Re8cczj0'),
(72, 72, 'Adamo', 'Inch Allah', 'Y05bBznCbd4'),
(73, 73, 'Lio', 'Amoureux solitaires', 'aL3mho_Au7g'),
(74, 74, 'Georges Brassens', 'Brave Margot', 'zuxMhzKeozo'),
(75, 75, 'Hughes Aufray', 'Adieu Monsieur le professeur', 'XdoJA93SMX8'),
(76, 76, 'France Gall', 'Il jouait du piano debout', 'N6yobV8KiQY'),
(77, 77, 'Catherine Ferry', '1 2 3', 'G_9xKxwJV8s'),
(78, 78, 'Jacques Brel', 'Bruxelles', 'YZETr0cahT8'),
(79, 79, 'Julien Clerc', 'Ma préférence', 'qTfSP7ljcVE'),
(80, 80, 'Zouk Machine', 'Maldon', 'BPdrGOFXzGA'),
(81, 81, 'Zaz', 'Le long de la route', 'XZaI3kVnoeA'),
(82, 82, 'Dalida', 'J’attendrai', 'kIX4Zo_r1Qk'),
(83, 83, 'Les Poppys', 'Isabelle je t’aime', 'o618mlIaR7E'),
(84, 84, 'Patricia Kaas', 'Mademoiselle chante le blues', '9uWyiFzwYGI'),
(85, 85, 'Anne-Marie David', 'Tu te reconnaitras', 'ltkPaUBlXnQ'),
(86, 86, 'Edith Piaf', 'Sous le ciel de Paris', 'kouTi-0csLg'),
(87, 87, 'Indochine', 'J’ai demandé à la lune', 'KAOmC5qT02w'),
(88, 88, 'Charles Aznavour', 'J’ai vu Paris', 'aXJ20S1aAcU'),
(89, 89, 'Françoise Hardy', 'Comment te dire adieu', 'mwhX5V1Gn6w'),
(90, 90, 'Adamo', 'Les filles du bord de mer', 'fh5oydvwqZU'),
(91, 91, 'Captain Gumbo', 'Allons à Lafayette', '6fDBxgm-F9E'),
(92, 92, 'Camélia Jordana', 'Non non non', 'JswOaaE9X-I'),
(93, 93, 'Ben l’Oncle Soul', '(Je suis un) Soulman', '69ptYXvUo7M'),
(94, 94, 'Jo Lemaire & Flouze', 'Je suis venue te dire que je m’en vais', 'C9_GpNM_SyQ'),
(95, 95, 'Elsa', 'T’en va pas', 'TeaKAB-IxOE'),
(96, 96, 'Michel Fugain', 'Ring et ding', 'BJfmAHjDjMw'),
(97, 97, 'Cast Roméo & Juliette', 'Les rois du monde', 'LEC8rJZb3o0'),
(98, 98, 'Michel Sardou', 'Une fille aux jeux clairs', 'dcBPaySVtBw'),
(99, 99, 'Dave', 'Du côté de chez Swann', 'SzvC1OWCBL4'),
(100, 100, 'Christophe Maé', 'Dingue dingue dingue', 'Rwv1djaV6Fc');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `songs`
--
ALTER TABLE `songs`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
