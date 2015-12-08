-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 08 dec 2015 om 09:40
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `TourTheJoey`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
`id` int(11) NOT NULL,
  `numbers` int(3) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `song_title` varchar(255) NOT NULL,
  `youtube-url` varchar(255) NOT NULL,
  `detail` varchar(9000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `songs`
--

INSERT INTO `songs` (`id`, `numbers`, `artist`, `song_title`, `youtube-url`, `detail`) VALUES
(1, 100, 'Christophe Maé', 'Dingue dingue dingue', '', '	'),
(2, 99, 'Dave', 'Du côté de chez Swann', '', ''),
(3, 98, 'Michel Sardou', 'Une fille aux jeux clairs', '', ''),
(4, 97, 'Cast Roméo & Juliette', 'Les rois du monde', '', ''),
(5, 96, 'Michel Fugain', 'Ring et ding', '', ''),
(6, 95, 'Elsa', 'T’en va pas', '', ''),
(7, 94, 'Jo Lemaire & Flouze', 'Je suis venue te dire que je m’en vais', '', ''),
(8, 93, 'Ben l’Oncle Soul', '(Je suis un) Soulman', '', ''),
(9, 92, 'Camélia Jordana', 'Non non non', '', ''),
(10, 91, 'Captain Gumbo', 'Allons à Lafayette', '', ''),
(11, 90, 'Adamo', 'Les filles du bord de mer', '', ''),
(12, 89, 'Françoise Hardy', 'Comment te dire adieu', '', ''),
(13, 88, 'Charles Aznavour', 'J’ai vu Paris', '', ''),
(14, 87, 'Indochine', 'J’ai demandé à la lune', '', ''),
(15, 86, 'Edith Piaf', 'Sous le ciel de Paris', '', ''),
(16, 85, 'Anne-Marie David', 'Tu te reconnaitras', '', ''),
(17, 84, 'Patricia Kaas', 'Mademoiselle chante le blues', '', ''),
(18, 83, 'Les Poppys', 'Isabelle je t’aime', '', ''),
(19, 82, 'Dalida', 'J’attendrai', '', ''),
(20, 81, 'Zaz', 'Le long de la route', '', ''),
(21, 80, 'Zouk Machine', 'Maldon', '', ''),
(22, 79, 'Julien Clerc', 'Ma préférence', '', ''),
(23, 78, 'Jacques Brel', 'Bruxelles', '', ''),
(24, 77, 'Catherine Ferry', '1 2 3', '', ''),
(25, 76, 'France Gall', 'Il jouait du piano debout', '', ''),
(26, 75, 'Hughes Aufray', 'Adieu Monsieur le professeur', '', ''),
(27, 74, 'Georges Brassens', 'Brave Margot', '', ''),
(28, 73, 'Lio', 'Amoureux solitaires', '', ''),
(29, 72, 'Adamo', 'Inch Allah', '', ''),
(30, 71, 'Carla Bruni', 'Quelqu’un m’a dit', '', ''),
(31, 70, 'BZN', 'Mon amour', '', ''),
(32, 69, 'Yves Duteil', 'Prendre un enfant', '', ''),
(33, 68, 'Charles Aznavour', 'Mes emmerdes', '', ''),
(34, 67, 'Sandra Kim', 'J’aime la vie', '', ''),
(35, 66, 'Manau', 'La tribu de Dana', '', ''),
(36, 65, 'Adamo', 'C’est ma vie', '', ''),
(37, 64, 'Kate Ryan', 'Désenchantée', '', ''),
(38, 63, 'Edith Piaf', 'Milord ', '', ''),
(39, 62, 'Mort Shuman', 'Le lac majeur', '', ''),
(40, 61, 'Lucille Starr', 'Quand le soleil dit bonjour aux montagnes', '', ''),
(41, 60, 'Julien Clerc', 'Si on chantait', '', ''),
(42, 59, 'Dave', 'Dansez maintenant', '', ''),
(43, 58, 'Gilbert Bécaud', 'Et maintenant', '', ''),
(44, 57, 'Julien Clerc', 'Çe n’est rien', '', ''),
(45, 56, 'Charles Aznavour', 'La mamma', '', ''),
(46, 55, 'Stromae', 'Alors on danse', '', ''),
(47, 54, 'C. Jérôme', 'C’est moi', '', ''),
(48, 53, 'Grace Jones', 'La vie en rose', '', ''),
(49, 52, 'Gérard Lenorman', 'Si j’étais président', '', ''),
(50, 51, 'Jacques Brel', 'Marieke', '', ''),
(51, 50, 'Joe Dassin', 'L’été Indien', '', ''),
(52, 49, 'Adamo', 'Tombe la neige', '', ''),
(53, 48, 'Wende', 'Chaque fois', '', ''),
(54, 47, 'Yves Montand', 'Les feuilles mortes', '', ''),
(55, 46, 'Edith Piaf', 'La vie en rose', '', ''),
(56, 45, 'Desireless', 'Voyage voyage', '', ''),
(57, 44, 'Gérard Lenorman', 'Voici les clés', '', ''),
(58, 43, 'Julien Clerc', 'Venise', '', ''),
(59, 42, 'Vanessa Paradis', 'Joe le taxi', '', ''),
(60, 41, 'In-grid', 'Tu es foutu', '', ''),
(61, 40, 'Noir Désir', 'Le vent nous portera', '', ''),
(62, 39, 'La Caravane Passe', 'Salad tomate oignon', '', ''),
(63, 38, 'Joe Dassin', 'Les Champs-Elysées', '', ''),
(64, 37, 'Georges Moustaki', 'Le métèque', '', ''),
(65, 36, 'Charles Aznavour', 'La bohème', '', ''),
(66, 35, 'Dalida', 'Gigi l’amoroso', '', ''),
(67, 34, 'Dalida & Alain Delon', 'Paroles paroles', '', ''),
(68, 33, 'Frida Boccara', 'Cent mille chansons', '', ''),
(69, 32, 'France Gall', 'Ella elle l’a', '', ''),
(70, 31, 'Adamo', 'Vous permettez monsieur', '', ''),
(71, 30, 'Kate & Anne McGarrigle', 'Complainte pour Ste. Cathérine', '', ''),
(72, 29, 'Charles Trenet', 'La mer', '', ''),
(73, 28, 'Johnny Hallyday', 'Pour moi la vie va commençer', '', ''),
(74, 27, 'Jean Ferrat', 'La montagne', '', ''),
(75, 26, 'Alizée', 'Moi… Lolita', '', ''),
(76, 25, 'Patrick Bruel', 'Casser la voix (live)', '', ''),
(77, 24, 'Jacques Brel', 'Le plat pays', '', ''),
(78, 23, 'Plastic Bertrand', 'Ça plane pour moi', '', ''),
(79, 22, 'Julien Clerc', 'Hélène', '', ''),
(80, 21, 'Jacques Brel', 'Amsterdam', '', ''),
(81, 20, 'France Gall', 'Poupée de cire, poupée de son', '', ''),
(82, 19, 'Dalida', 'Buenas noches mi amor', '', ''),
(83, 18, 'Michel Fugain', 'Le printemps', '', ''),
(84, 17, 'Serge Gainsbourg & Jane Birkin', 'Je t’aime… moi non plus', '', ''),
(85, 16, 'Vicky Leandros', 'Après toi', '', ''),
(86, 15, 'Julien Clerc', 'This melody', '', ''),
(87, 14, 'Zaz', 'Je veux', '', ''),
(88, 13, 'Alderliefste & Liesbeth List & Ramses Shaffy', 'Laat me/Vivre', '', ''),
(89, 12, 'Yves Montand', 'La bicyclette', '', ''),
(90, 11, 'Michel Delpech', 'Pour un flirt', '', ''),
(91, 10, 'Michel Sardou', 'Les lacs du Connemara', '', ''),
(92, 9, 'Khaled', 'Aicha', '', ''),
(93, 8, 'Françoise Hardy', 'Tous les garçons et les filles', '', ''),
(94, 7, 'Gérard Lenorman', 'La ballade des gens heureux', '', ''),
(95, 6, 'Jacques Brel', 'Ne me quitte pas', '', ''),
(96, 5, 'Edith Piaf', 'Non je ne regrette rien', '', ''),
(97, 4, 'Les Poppys', 'Non non rien n’a changé', '', ''),
(98, 3, 'Jacques Dutronc', 'Il est cinq heures Paris s’éveille', '', ''),
(99, 2, 'Michel Fugain', 'Une belle histoire', '', ''),
(100, 1, 'Gilbert Bécaud', 'Nathalie', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `songs`
--
ALTER TABLE `songs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `songs`
--
ALTER TABLE `songs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
